@extends('moduls.psikotes.layouts.mainn', [
'title' => 'End Psikotest',
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

  <!-- Card Transparant -->
  <div class="relative justify-center text-justify z-10 mx-auto bg-none rounded-lg p-6 mt-10" style="width: 750px;">

    <img src="{{ asset('assets/images/psikotes/paid/psikotes-ikon-piala.png') }}" alt="Ikon" class=" w-60 rounded-full" style="margin-left: 240px">
    <p class="font-bold text-xl text-center">Selamat! Kamu sudah menyelesaikan Tes 22!</p>


    <div class="mb-4 flex justify-center mt-10">
      <a href="{{ route('instruksiCompBio') }}">
      <button type="button" class="w-xl bg-primary  items-center text-white py-2 px-10 rounded-full hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Kembali ke Halaman Utama</button>
      </a>
    </div>

  </div>
</div>

@endsection