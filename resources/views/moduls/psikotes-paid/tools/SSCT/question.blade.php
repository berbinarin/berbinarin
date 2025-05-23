@extends('moduls.psikotes.layouts.mainn', [
'title' => 'Soal SSCT',
'active' => 'one psikotest',
])

<style>
    .input-field {
    background-color: rgba(255, 255, 255, 0.2); 
    border-radius: 30px; 
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); 
    width: 100%;
    padding: 15px;
    font-size: 16px;
    border: none;
    text-align: center;
    outline: none;
    color: #333; 
  }

  .input-field:focus {
    box-shadow: 0 0 8px rgba(0, 0, 255, 0.2);
  }

  .submit-button {
    background-color: #6083F2;
    color: white;
    border-radius: 30px;
    padding: 10px 40px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s;
    border: none;
  }

  .submit-button:hover {
    background-color: #4a6fdc;
  }
</style>

@section('content')
<div class="relative h-11/12 md:min-h-screen flex flex-col items-center bg-gray-100 justify-center">
  <!-- Background image -->
  <img src="{{ asset('assets/images/psikotes/paid/psikotest-soal-bg.png') }}" alt="Latar Belakang Berbinar" class="absolute inset-0 hidden md:block md:w-full md:h-full object-cover z-0">

  <!-- Container untuk ikon di atas card -->
  <div class="absolute top-0 left-0 right-0 flex items-center justify-center mt-8 z-10">
    <div class="bg-white h-[50px] rounded-full px-4 py-2 flex items-center">
      <img src="{{ asset('assets/images/psikotes/paid/logo-berbinar.png') }}" alt="Ikon" class="w-8 h-8 rounded-full">
      <img src="{{ asset('assets/images/psikotes/paid/logo-berbinar-psikotest.png') }}" alt="Ikon" class="w-8 h-8 rounded-full ml-2">
    </div>
  </div>

  <p class="font-bold text-2xl text-center text-gray-800 mt-0 z-20 relative">Tes 05</p>
  {{-- <p class="text-sm text-center text-gray-800 mt-0 z-20 relative">Soal {{ session('current_question_number', 1) }} dari 60</p>

  <div class="mt-4 mb-2 text-center z-20">
    <span id="timer" class="text-xl font-semibold text-red-600"></span>
  </div> --}}

  <div class="relative text-center z-10 w-3xl mx-auto p-7 mt-8" style="width: 750px;">
    <form id="autoSubmitForm" action="{{ route('psikotest-paid.tool.SSCT.submit', ['testSsct' => $testSsct, 'questionSsct' => $questionSsct]) }}" method="POST">
      @csrf
      <input type="hidden" name="timeout" id="timeout" value="false">
      <div class="mb-4">
          <label class="block text-lg mt-7 px-8 mb-8" for="question">
              {{ $questionSsct->question }}
          </label>
          <textarea name="answer" rows="1" placeholder="Ketik disini..." class="input-field rounded-lg w-1/2" required autofocus>{{ optional($existingAnswer)->answer }}</textarea>
      </div>
      <button type="submit" class="w-xl bg-primary  items-center text-white py-2 px-10 rounded-full hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
          {{ $questionSsct->id >= 60 ? 'Selesai' : 'Selanjutnya' }}
      </button>
    </form>
  </div>
</div>
<script>
const totalDuration = 35 * 60 * 1000; 

let startTime = localStorage.getItem('startTime') || new Date().getTime();
localStorage.setItem('startTime', startTime);

const timerElement = document.getElementById('timer');

const timerInterval = setInterval(() => {
    const now = new Date().getTime();
    const elapsed = now - startTime;
    const remaining = totalDuration - elapsed;

    if (remaining <= 0) {
        clearInterval(timerInterval);
        localStorage.removeItem('startTime');
        const timeout = document.getElementById('timeout');
        timeout.value = true;
        document.getElementById('autoSubmitForm').submit();
    } else {
      const timeout = document.getElementById('timeout');
      timeout.value = false;
    }

    const minutes = Math.floor((remaining % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((remaining % (1000 * 60)) / 1000);

    console.log("Waktu sisa",minutes+ '' + seconds)

    // timerElement.innerHTML = `Waktu Tersisa: ${minutes}m ${seconds}s`;
}, 1000);
</script>
@endsection
