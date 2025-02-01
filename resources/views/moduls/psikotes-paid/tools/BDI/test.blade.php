@extends('moduls.psikotes.layouts.mainn', [
  'title' => 'Soal BDI',
  'active' => 'one psikotest',
])

@section('content')
<div class="relative h-11/12 md:min-h-screen flex flex-col items-center bg-gray-100 justify-center">
  <!-- Background Image -->
  <img src="{{ asset('assets/images/psikotes/paid/psikotest-soal-bg.png') }}" alt="Latar Belakang Berbinar"
      class="absolute inset-0 hidden md:block md:w-full md:h-full object-cover z-0">

  <!-- Container for Icons above Card -->
  <div class="absolute top-0 left-0 right-0 flex items-center justify-center mt-8 z-10">
    <div class="bg-white h-[50px] rounded-full px-4 py-2 flex items-center">
      <img src="{{ asset('assets/images/psikotes/paid/logo-berbinar.png') }}" alt="Ikon" class="w-8 h-8 rounded-full">
      <img src="{{ asset('assets/images/psikotes/paid/logo-berbinar-psikotest.png') }}" alt="Ikon" class="w-8 h-8 rounded-full ml-2">
    </div>
  </div>

  <p class="font-bold text-2xl text-center text-gray-800 mt-16 z-20 relative">Tes 27</p>

  <!-- Main Content Area -->
  <div class="relative z-10 w-3xl mx-auto bg-none rounded-lg p-6 mt-10" style="width: 750px;">
    <!-- Question Number Circle -->
    <div class="absolute top-0 left-0 transform -translate-x-1/2 -translate-y-1/2 bg-amber-500 text-white rounded-full h-12 w-12 flex items-center justify-center text-lg font-bold">
        1
    </div>
    <!-- Blue, Brown, Dark Blue, and Orange Cards in Horizontal Layout -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
      <!-- Blue Card -->
      <label class="rounded-lg p-4 cursor-pointer relative card flex items-center justify-center text-center"
      style="background-color: #3FA2F6; height: 150px; transition: transform 0.2s ease;"
      onmouseover="this.style.boxShadow='0 6px 12px rgba(0, 125, 232, 0.6)';"
      onmouseout="this.style.boxShadow='none';"
      for="answer_a_{{ $question->id }};">
      <input type="radio" name="answer" id="answer_a_{{ $question->id }}" value="a" class="hidden" required>
      <div class="text-white">{{ $question->a }}</div>
      <div class="absolute bottom-2 right-2 w-5 h-5 rounded-full bg-white flex items-center justify-center"
        style="border: 2px solid #3FA2F6;">
        <span class="hidden text-lg checkmark" style="color: #3FA2F6;">✔</span>
      </div>
      </label>

    
      <!-- Orange Card -->
      <label class="rounded-lg p-4 cursor-pointer relative card flex items-center justify-center text-center"
        style="background-color: #FBB03B; height: 150px; transition: transform 0.2s ease;"
        onmouseover="this.style.boxShadow='0 6px 12px rgba(251, 176, 59, 0.6)';"
        onmouseout="this.style.boxShadow='none';"
        for="answer_b_{{ $question->id }}">>
        <input type="radio" name="answer" id="answer_b_{{ $question->id }}" value="b" class="hidden">
        <div class="text-white">{{ $question->b }}</div>
        <div class="absolute bottom-2 right-2 w-5 h-5 rounded-full bg-white flex items-center justify-center"
          style="border: 2px solid #FBB03B;">
          <span class="hidden text-lg checkmark" style="color: #FBB03B;">✔</span>
        </div>
      </label>
    
      <!-- Dark Blue Card -->
      <label class="rounded-lg p-4 cursor-pointer relative card flex items-center justify-center text-center"
        style="background-color: #406C9B; height: 150px; transition: transform 0.2s ease;"
        onmouseover="this.style.boxShadow='0 6px 12px rgba(64, 108, 155, 0.6)';"
        onmouseout="this.style.boxShadow='none';"
        for="answer_c_{{ $question->id }}">>
        <input type="radio" name="answer" id="answer_c_{{ $question->id }}" value="c" class="hidden">
        <div class="text-white">{{ $question->c }}</div>
        <div class="absolute bottom-2 right-2 w-5 h-5 rounded-full bg-white flex items-center justify-center"
          style="border: 2px solid #406C9B;">
          <span class="hidden text-lg checkmark" style="color: #406C9B;">✔</span>
        </div>
      </label>
    
      <!-- Brown Card -->
      <label class="rounded-lg p-4 cursor-pointer relative card flex items-center justify-center text-center"
        style="background-color: #6A3D00; height: 150px; transition: transform 0.2s ease;"
        onmouseover="this.style.boxShadow='0 6px 12px rgba(106, 61, 0, 0.6)';"
        onmouseout="this.style.boxShadow='none';"
        for="answer_d_{{ $question->id }}">>
        <input type="radio" name="answer" id="answer_d_{{ $question->id }}" value="d" class="hidden">
        <div class="text-white">{{ $question->d }}</div>
        <div class="absolute bottom-2 right-2 w-5 h-5 rounded-full bg-white flex items-center justify-center"
          style="border: 2px solid #6A3D00;">
          <span class="hidden text-lg checkmark" style="color: #6A3D00;">✔</span>
        </div>
      </label>
    </div>
    
    
    <!-- Percentage Line and Next Button -->
    <div class="flex bg-white rounded-md items-center justify-between mt-24" style="height: 40px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
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
        <a href="{{ route('psikotest-paid.tool.BDI.endbdi') }}">
          <button type="button" class="px-4 py-1 bg-blue-500 text-sm mr-2 text-white rounded-lg hover:bg-blue-600">Soal
            Berikutnya
          </button>
        </a>
    </div>
  </div>
</div>

<script>
  document.querySelectorAll('input[type="radio"]').forEach(radio => {
      radio.addEventListener('change', function() {
          // Hide all checkmarks
          document.querySelectorAll('.checkmark').forEach(checkmark => {
              checkmark.classList.add('hidden');
          });

          // Show the checkmark for the selected option
          if (this.checked) {
              this.closest('label').querySelector('.checkmark').classList.remove('hidden');
          }
      });
  });

  // Add hover effect to card labels
  document.querySelectorAll('.card').forEach(card => {
      card.addEventListener('mouseover', function() {
          this.style.transform = 'scale(1.03)';
      });
      card.addEventListener('mouseout', function() {
          this.style.transform = 'scale(1)';
      });
  });
</script>
@endsection
