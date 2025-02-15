@extends('moduls.psikotes.layouts.mainn', [
'title' => 'Soal Tes VAK',
'active' => 'one psikotest',
])

<style>
  .option {
    background-color: #e0e0e0;
    color: #333; 
    transition: background-color 0.3s, color 0.3s;
  }

  .option:hover {
    background-color: #569db6; 
    color: white; 
  }

  .option.selected {
    background-color: #3986A3; 
    color: white; 
  }

  .option.selected:hover {
    background-color: #3986A3; 
    color: white; 
  }
</style>

@section('content')
<div class="relative h-11/12 md:min-h-screen flex flex-col items-center bg-gray-100 justify-center">
  <!-- bg-internship -->
  <img src="{{ asset('assets/images/psikotes/paid/psikotest-soal-bg.png') }}" alt="Latar Belakang Berbinar" 
       class="absolute inset-0 hidden md:block md:w-full md:h-full object-cover z-0">

  <!-- Container untuk ikon di atas card -->
  <div class="absolute top-0 left-0 right-0 flex items-center justify-center mt-8 z-10">
    <div class="bg-white h-[50px] rounded-full px-4 py-2 flex items-center">
      <img src="{{ asset('assets/images/psikotes/paid/logo-berbinar.png') }}" alt="Ikon" class="w-8 h-8 rounded-full">
      <img src="{{ asset('assets/images/psikotes/paid/logo-berbinar-psikotest.png') }}" alt="Ikon" class="w-8 h-8 rounded-full ml-2">
    </div>
  </div>

  <p class="font-bold text-2xl text-center text-gray-800 mt-0 z-20 relative">Tes 13</p>
  {{-- <p class="font-bold text-sm text-center text-gray-800 mt-0 z-20 relative">Pertanyaan {{ $question_order }}</p> --}}
  <p class="font-bold text-sm text-center text-gray-800 mt-0 z-20 relative">Progress: {{ $progress }}%</p>

  <!-- Card Transparant -->
  <div class="relative text-justify z-10 w-3xl mx-auto bg-white bg-opacity-50 shadow-lg rounded-lg p-7 mt-8" style="width: 750px;">
    <form action="{{ route('psikotest-paid.VAK.submit', ['id' => $id, 'question_order' => $question_order]) }}"
      method="POST">
      @csrf
      <!-- ini akan di-set otomatis ke true kalau waktu habis -->
      <input type="hidden" name="timeout" id="timeout" value="false">

      <p class="text-black mt-3 px-5 text-center">
        {{ $question->question_text }}
      </p>

      <!-- Elemen tampilan timer -->
      <div id="timerElement" class="text-center text-red-500 text-lg font-bold mt-4">
          <!-- Diisi JS -->
      </div>

      <!-- Radio Buttons Container -->
      <div class="flex justify-center space-x-4 mt-8">
        <label class="flex flex-col items-center">
          <input type="radio" name="answer" value="1" class="hidden peer" required>
          <div id="option-1" 
               class="option w-12 h-12 rounded-full border-4 border-gray-400 flex items-center justify-center cursor-pointer">
            1
          </div>
          <span class="mt-4 text-xs text-gray-500">Tidak sesuai</span>
        </label>    
      
        <label class="flex flex-col items-center">
          <input type="radio" name="answer" value="2" class="hidden peer">
          <div id="option-2" 
               class="option w-12 h-12 rounded-full border-4 border-gray-400 flex items-center justify-center cursor-pointer">
            2
          </div>
          <span class="mt-4 text-xs text-gray-500">Cukup sesuai</span>
        </label>
        
        <label class="flex flex-col items-center">
          <input type="radio" name="answer" value="3" class="hidden peer">
          <div id="option-3" 
               class="option w-12 h-12 rounded-full border-4 border-gray-400 flex items-center justify-center cursor-pointer">
            3
          </div>
          <span class="mt-4 text-xs text-gray-500">Sangat sesuai</span>
        </label>
      </div>

      <div class="flex rounded-md items-center justify-center mt-8" style="height: 40px;">
          <button type="submit" class="px-4 py-1 bg-blue-500 text-sm mr-2 text-white rounded-full hover:bg-blue-600"
                  style="height: 40px;">
            Soal Berikutnya
          </button>
      </div>
    </form>
  </div>
</div>

<script>
  document.querySelectorAll('input[name="answer"]').forEach(input => {
    input.addEventListener('change', function() {
      document.querySelectorAll('.option').forEach(div => {
        div.classList.remove('selected');
      });
      
      if (this.checked) {
        const selectedId = `option-${this.value}`;
        const selectedDiv = document.getElementById(selectedId);
        selectedDiv.classList.add('selected');
      }
    });
  });
</script>

<script>
  const totalDuration = 30 * 60 * 1000;    // 30 menit
  const intervalDuration = 10 * 60 * 1000; // 10 menit 
  const timeout = document.getElementById('timeout'); 
  const timerElement = document.getElementById('timerElement');

  let startTime = localStorage.getItem('startTime');
  if (!startTime || performance.navigation.type === 1) {
    startTime = new Date().getTime();
    localStorage.setItem('startTime', startTime);
  } else {
    startTime = parseInt(startTime);
  }

  function updateTimer() {
    const now = new Date().getTime();
    const elapsed = now - startTime;
    const remaining = totalDuration - elapsed;

    if (remaining > 0) {
      // Hitung mundur
      let minutes = Math.floor(remaining / 1000 / 60);
      let seconds = Math.floor((remaining / 1000) % 60);
      if (minutes < 10) { minutes = `0${minutes}`; }
      if (seconds < 10) { seconds = `0${seconds}`; }
      console.log("Waktu sisa",minutes+ '' + seconds)
      // timerElement.innerHTML = `${minutes}:${seconds}`;
    } else {
      // WAKTU HABIS -> Submit otomatis
      timerElement.innerHTML = 'Waktu habis. Mengirim otomatis...';
      localStorage.removeItem('startTime');
      timeout.value = true;
      document.forms[0].submit();
    }
  }

  // -----------------------------
  // TAMPILKAN COUNTDOWN TIAP DETIK
  // -----------------------------
  setInterval(updateTimer, 1000);

  // -----------------------------
  // LOGIKA REDIRECT INTERVAL 10 & 20 MENIT
  // -----------------------------
  const now = new Date().getTime();
  const elapsed = now - startTime;

  function redirect(url) {
    window.location.href = url;
  }

  // 1. Jika waktu total masih di bawah 10 menit:
  if (elapsed <= intervalDuration) {
    setTimeout(() => {
      redirect("{{ url('psikotest-paid/test-13/'.$id.'/question/11') }}");
    }, intervalDuration - elapsed);
  }

  // 2. Jika waktu total masih di bawah 20 menit:
  else if (elapsed <= 2 * intervalDuration) {
    setTimeout(() => {
      redirect("{{ url('psikotest-paid/test-13/'.$id.'/question/21') }}");
    }, 2 * intervalDuration - elapsed);
  }

  // 3. Jika waktu total masih di bawah 30 menit:
  else if (elapsed <= totalDuration) {
    timeout.value = true;
    setTimeout(() => {
      localStorage.removeItem('startTime');
      document.forms[0].submit();
    }, totalDuration - elapsed);
  }

  // 4. Kalau lebih dari 30 menit, artinya user reload page setelah waktunya lewat
  else {
    timerElement.innerHTML = `Waktu habis. Mengirim otomatis...`;
    localStorage.removeItem('startTime');
    timeout.value = true;
    document.forms[0].submit();
  }
</script>
@endsection
