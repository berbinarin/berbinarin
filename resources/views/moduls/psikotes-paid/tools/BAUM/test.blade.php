@extends('moduls.psikotes.layouts.mainn', [
'title' => 'Soal Tes BAUM',
'active' => 'one psikotest',
])

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

  <p class="font-bold text-2xl text-center text-gray-800 mt-16 z-20 relative">Tes 02</p>

  <!-- Card Transparant -->
  <div class="relative text-justify z-10 w-3xl mx-auto bg-white bg-opacity-50 shadow-lg rounded-lg p-6 mt-4 " style="width: 750px;">
    {{-- <p class="text-black mt-4 px-5 text-center mb-4">
        Soal {{ session('current_question_number', 1) }} dari 1
    </p> --}}
    <form action="{{ route('psikotest-paid.tool.BAUM.submitAnswer') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="test_id" value="{{ $test->id }}">
        <input type="hidden" name="question_id" value="{{ $questions[session('current_question_number', 1) - 1]->id }}">
        <input type="hidden" name="current_question_number" value="{{ session('current_question_number', 1) }}">
        <div class="mb-4">
            <label class="block text-black p-4 text-center" for="question">
                {{ $questions[session('current_question_number', 1) - 1]->question }}
            </label>
            <input type="file" name="answer_image" class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none" required>
        </div>
        <div class="mb-4 flex justify-center">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                Selanjutnya
            </button>
        </div>
    </form>
  </div>
</div>

@endsection