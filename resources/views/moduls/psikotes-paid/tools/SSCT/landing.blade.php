@extends('moduls.psikotes.layouts.mainn', [
'title' => 'Instruksi SSCT',
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

    <p class="font-bold text-2xl text-center text-gray-800 mt-16 z-20 relative">Tes 05</p>
    {{-- <h1 class="text-2xl font-bold mb-4">Halo bro {{ $user->fullname }}, ini adalah landing page untuk test {{ $tool->name }}</h1>
    <h2 class="text-xl font-bold mb-4"> -- instruksi -- </h2> --}}

  <!-- Card Transparant -->
  <div class="relative text-justify z-10 w-3xl mx-auto bg-white bg-opacity-50 shadow-lg rounded-lg p-6 mt-4 " style="width: 750px;">
    <p class="text-black mt-4 px-5">
      Hai {{ $user->fullname }}, berikut adalah instruksi untuk test {{ $tool->name }}
    </p>
    <p class="text-black mt-4 px-5">
      Pada tes ini terdapat beberapa kalimat yang belum sempurna, dan setiap kalimat merupakan permulaan dari suatu kalimat yang masih harus diselesaikan.
      <br><br>
      Bacalah setiap kalimat dan selesaikan dengan pikiran yang segera timbul setelah membaca permulaan kalimat.
      <br><br>
      Kerjakanlah secapat mungkin.
    </p>
    <div class="mb-4 flex justify-center gap-4 mt-10">
        <button onclick="window.history.back();" class="bg-gray-500 hover:bg-gray-700 text-white py-2 px-4 rounded-full">
            Kembali
        </button>
        <form action="{{ route('psikotest-paid.tool.SSCT.startTest') }}" method="POST" class="inline">
        @csrf
            <input type="hidden" name="user_id" value="{{ $user->id }}">
            <input type="hidden" name="tool_id" value="{{ $tool->id }}">
            <button type="submit" class="w-xl bg-primary items-center text-white py-2 px-10 rounded-full hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
              Selanjutnya
            </button>
        </form>
    </div>
  </div>
</div>
@include('sweetalert::alert')
@endsection