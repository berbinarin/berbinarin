@extends('moduls.psikotes.layouts.mainn', [
'title' => 'Instruksi OCEAN',
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

  <p class="font-bold text-2xl text-center text-gray-800 mt-16 z-20 relative">Tes 07</p>

  <!-- Card Transparant -->
  <div class="relative text-justify z-10 w-3xl mx-auto bg-white bg-opacity-50 shadow-lg rounded-lg p-6 mt-4 " style="width: 750px;">
    <p class="text-black mt-4 px-5">
      Hai {{ $user->fullname }}, berikut adalah instruksi untuk test 07
    </p>
    <p class="text-black mt-4 px-5">
      Pada tes ini, setiap nomor berisikan satu pernyataan beserta lima pilihan skor jawaban. Tugas Kamu adalah menentukan skor kesesuaian setiap pernyataan dengan keadaan diri Kamu yang sebenarnya. Tiap pilihan skor kesesuaian yang kamu pilih memiliki kriterianya masing-masing.
    </p>
    <p class="text-black mt-2 px-5">
      <b>Keterangan pilihan jawaban:</b>
      <br><b>1: Sangat tidak sesuai</b>
      <br><b>2: Tidak sesuai</b>
      <br><b>3: Ragu-ragu</b>
      <br><b>4: Sesuai</b>
      <br><b>5: Sangat sesuai</b>
    </p>
    <p class="text-black mt-2 px-5">
      Tidak ada benar atau salah dalam pengerjaan soal ini, jadi silakan Anda menjawab sejujur-jujurnya.
    </p>
    
    <div class="mb-4 flex justify-center mt-10 gap-4">
    <button onclick="window.history.back();" class="bg-gray-500 hover:bg-gray-700 text-white py-2 px-4 rounded-full">
        Kembali
    </button>
    <form action="{{ route('psikotest-paid.tool.OCEAN.start') }}" method="POST" class="inline">
        @csrf
        <button type="submit" class="w-xl bg-primary items-center text-white py-2 px-10 rounded-full hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
            Selanjutnya
        </button>
    </form>

    </div>
  </div>
</div>
@include('sweetalert::alert')
@endsection