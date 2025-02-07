@extends('moduls.psikotes.layouts.mainn', [
'title' => 'Soal 1 OCEAN',
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
  <img src="{{ asset('assets/images/psikotes/paid/psikotest-soal-bg.png') }}" alt="Latar Belakang Berbinar" class="absolute inset-0 hidden md:block md:w-full md:h-full object-cover z-0">

  <!-- Container untuk ikon di atas card -->
  <div class="absolute top-0 left-0 right-0 flex items-center justify-center mt-8 z-10">
    <div class="bg-white h-[50px] rounded-full px-4 py-2 flex items-center">
      <img src="{{ asset('assets/images/psikotes/paid/logo-berbinar.png') }}" alt="Ikon" class="w-8 h-8 rounded-full">
      <img src="{{ asset('assets/images/psikotes/paid/logo-berbinar-psikotest.png') }}" alt="Ikon" class="w-8 h-8 rounded-full ml-2">
    </div>
  </div>

  <p class="font-bold text-2xl text-center text-gray-800 mt-0 z-20 relative">Tes 07</p>
  {{-- <h2 class="font-bold text-sm text-center text-gray-800 mt-0 z-20 relative">Soal {{ session('current_question_number', 1) }} dari 44</h2> --}}

  {{-- Timer --}}
  {{-- <div class="mt-4 mb-2 text-center z-20">
    <span id="timer" class="text-xl font-semibold text-red-600"></span>
  </div> --}}

  <!-- Card Transparant -->
    <div class="relative text-justify z-10 w-3xl mx-auto bg-white bg-opacity-50 shadow-lg rounded-lg p-7 mt-8" style="width: 750px;">
    
        <form id="autoSubmitForm" action="{{ route('psikotest-paid.tool.OCEAN.submitAnswer') }}" method="POST">
            @csrf
            <input type="hidden" name="timeout" id="timeout" value="">
            <input type="hidden" name="test_id" value="{{ $test->id }}">
            <input type="hidden" name="question_id" value="{{ $questions[session('current_question_number', 1) - 1]->id }}">
            <input type="hidden" name="current_question_number" value="{{ session('current_question_number', 1) }}">
            <div class="mb-4">
                <label class="block text-gray-700 text-lg text-center mb-2" for="question">
                    {{ $questions[session('current_question_number', 1) - 1]->question }}
                </label>
                <div class="flex justify-center gap-4">
                    <div class="flex justify-center space-x-4 mt-8 gap-3">
                        <label class="flex flex-col items-center">
                            <input type="radio" name="answer" value="1" class="hidden peer" required>
                            <div id="option-1" class="option w-12 h-12 rounded-full border-4 border-gray-400 flex items-center justify-center cursor-pointer">
                            1
                            </div>
                            <span class="mt-4 text-xs text-gray-500 text-center">Sangat <br>tidak <br>sesuai</span>
                        </label>    
                        
                        <label class="flex flex-col items-center">
                            <input type="radio" name="answer" value="2" class="hidden peer" required>
                            <div id="option-2" class="option w-12 h-12 rounded-full border-4 border-gray-400 flex items-center justify-center cursor-pointer">
                            2
                            </div>
                            <span class="mt-4 text-xs text-gray-500 text-center">Tidak <br>sesuai</span>
                        </label>
                        
                        <label class="flex flex-col items-center">
                            <input type="radio" name="answer" value="3" class="hidden peer" required>
                            <div id="option-3" class="option w-12 h-12 rounded-full border-4 border-gray-400 flex items-center justify-center cursor-pointer">
                            3
                            </div>
                            <span class="mt-4 text-xs text-gray-500 text-center">Netral</span>
                        </label>
                        <label class="flex flex-col items-center">
                            <input type="radio" name="answer" value="4" class="hidden peer" required>
                            <div id="option-4" class="option w-12 h-12 rounded-full border-4 border-gray-400 flex items-center justify-center cursor-pointer">
                            4
                            </div>
                            <span class="mt-4 text-xs text-gray-500 text-center">Sesuai</span>
                        </label>
                        <label class="flex flex-col items-center">
                            <input type="radio" name="answer" value="5" class="hidden peer" required>
                            <div id="option-5" class="option w-12 h-12 rounded-full border-4 border-gray-400 flex items-center justify-center cursor-pointer">
                            5
                            </div>
                            <span class="mt-4 text-xs text-gray-500 text-center">Sangat <br>sesuai</span>
                        </label>
                        </div>
                </div>
            </div>
            <div class="flex rounded-md justify-center mt-6" style="height: 40px;">
                <button type="submit" class="px-4 py-1 bg-blue-500 text-base mr-2 text-white rounded-full hover:bg-blue-600">
                  Selanjutnya
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
const totalDuration = 10 * 60 * 1000; 

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
