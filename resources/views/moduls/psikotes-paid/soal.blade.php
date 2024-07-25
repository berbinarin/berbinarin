@extends('moduls.psikotes.layouts.mainn', [
'title' => 'soal psikotest',
'active' => 'one psikotest',
])

@section('content')
<div class="relative h-11/12 md:min-h-screen flex flex-col items-center bg-gray-100 justify-center">
  <!-- Background Image -->
  <img src="{{ asset('assets/images/psikotes/paid/psikotest-soal-bg.png') }}" alt="Latar Belakang Berbinar" class="absolute inset-0 hidden md:block md:w-full md:h-full object-cover z-0">

  <!-- Container for Icons above Card -->
  <div class="absolute top-0 left-0 right-0 flex items-center justify-center mt-8 z-10">
    <div class="bg-white h-[50px] rounded-full px-4 py-2 flex items-center">
      <img src="{{ asset('assets/images/psikotes/paid/logo-berbinar.png') }}" alt="Ikon" class="w-8 h-8 rounded-full">
      <img src="{{ asset('assets/images/psikotes/paid/logo-berbinar-psikotest.png') }}" alt="Ikon" class="w-8 h-8 rounded-full ml-2">
    </div>
  </div>

  <!-- Main Content Area -->
  <div class="relative z-10 w-3xl mx-auto bg-none rounded-lg p-6 mt-20" style="width: 750px;">

    <!-- Question Number Circle -->
    <div class="absolute top-0 left-0 transform -translate-x-1/2 -translate-y-1/2 bg-amber-500 text-white rounded-full h-12 w-12 flex items-center justify-center text-lg font-bold">
      1 <!-- Example: Replace with dynamic question number -->
    </div>

    <!-- Blue and Orange Cards in Horizontal Layout -->
    <div class="flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-4">
      <!-- Blue Card -->
      <div class="flex-1 bg-blue-200 rounded-lg p-4 my-8" style="background-color: #3FA2F6; width: 100px; height: 150px; margin-top: 16px">
        <!-- <p class="text-lg font-semibold text-blue-800">Pernyataan 1:</p> -->
        <p class="mt-2 text-gray-700">Saya bukan seorang pemurung.</p>
        <div class="mt-16 flex items-center justify-end">
          <input type="radio" name="statement" value="blue-card" class="form-radio text-blue-600">
        </div>
      </div>

      <!-- Orange Card -->
      <div class="flex-1 bg-blue-200 rounded-lg p-4 ml-4 my-8" style="background-color: #FBB03B; width: 100px; height: 150px">
        <!-- <p class="text-lg font-semibold text-orange-800">Pernyataan 2:</p> -->
        <p class="mt-2 text-gray-700">Saya bukan seorang pemurung.</p>
        <div class="mt-16 flex items-center justify-end">
          <input type="radio" name="statement" value="orange-card" class="form-radio text-orange-600">
        </div>
      </div>


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
      <a href="{{ route('end') }}">
        <button class="px-4 py-1 bg-blue-500 text-sm mr-2 text-white rounded-lg hover:bg-blue-600">Soal Berikutnya</button>
      </a>
    </div>


  </div>

</div>
@endsection