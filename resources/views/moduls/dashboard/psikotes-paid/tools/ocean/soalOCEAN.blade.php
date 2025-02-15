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

  <!-- Card Transparant -->
  <div class="relative text-justify z-10 w-3xl mx-auto bg-white bg-opacity-50 shadow-lg rounded-lg p-7 mt-8" style="width: 750px;">
    <p class="text-black mt-3 px-5 text-center">
      Saya suka mencari-cari kesalahan orang lain
    </p>

    <!-- Radio Buttons Container -->
    <div class="flex justify-center space-x-4 mt-8 gap-3">
      <label class="flex flex-col items-center">
        <input type="radio" name="answer" value="1" class="hidden peer">
        <div id="option-1" class="option w-12 h-12 rounded-full border-4 border-gray-400 flex items-center justify-center cursor-pointer">
          1
        </div>
        <span class="mt-4 text-xs text-gray-500 text-center">Sangat <br>tidak <br>sesuai</span>
      </label>    
    
      <label class="flex flex-col items-center">
        <input type="radio" name="answer" value="2" class="hidden peer">
        <div id="option-2" class="option w-12 h-12 rounded-full border-4 border-gray-400 flex items-center justify-center cursor-pointer">
          2
        </div>
        <span class="mt-4 text-xs text-gray-500 text-center">Tidak <br>sesuai</span>
      </label>
      
      <label class="flex flex-col items-center">
        <input type="radio" name="answer" value="3" class="hidden peer">
        <div id="option-3" class="option w-12 h-12 rounded-full border-4 border-gray-400 flex items-center justify-center cursor-pointer">
          3
        </div>
        <span class="mt-4 text-xs text-gray-500 text-center">Netral</span>
      </label>
      <label class="flex flex-col items-center">
        <input type="radio" name="answer" value="4" class="hidden peer">
        <div id="option-4" class="option w-12 h-12 rounded-full border-4 border-gray-400 flex items-center justify-center cursor-pointer">
          4
        </div>
        <span class="mt-4 text-xs text-gray-500 text-center">Sesuai</span>
      </label>
      <label class="flex flex-col items-center">
        <input type="radio" name="answer" value="5" class="hidden peer">
        <div id="option-5" class="option w-12 h-12 rounded-full border-4 border-gray-400 flex items-center justify-center cursor-pointer">
          5
        </div>
        <span class="mt-4 text-xs text-gray-500 text-center">Sangat <br>sesuai</span>
      </label>
    </div>
    
    <!-- Percentage Line and Next Button -->
    <div class="flex rounded-md items-center justify-between mt-24" style="height: 40px;">
      <div class="flex items-center ml-6" style="height: 3px; width: 510px; position: relative;">
        <!-- Black background line -->
        <div class="bg-black rounded-full" style="height: 3px; width: 100%;"></div>
        <!-- Blue percentage line -->
        <div class="bg-blue-500 rounded-full" style="height: 3px; width: 40%; position: absolute; top: 0; left: 0;"></div>
        <!-- Small circle at the end of the blue line -->
        <div class="bg-blue-500 rounded-full" style="height: 10px; width: 10px; position: absolute; top: -4px; left: 40%; transform: translateX(-50%);"></div>
        <!-- Percentage text -->
        <span class="text-sm text-black" style="position: absolute; top: 1px; left: 40%; transform: translateX(-50%); font-size: 8px;">40%</span>
      </div>
      <a href="{{ route('soal2OCEAN') }}">
        <button class="px-4 py-1 bg-blue-500 text-sm mr-2 text-white rounded-lg hover:bg-blue-600">Soal Berikutnya</button>
      </a>
    </div>
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
@endsection
