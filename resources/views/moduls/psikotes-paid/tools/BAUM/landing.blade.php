@extends('moduls.psikotes.layouts.mainn', [
'title' => 'Instruksi BAUM',
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
    <p class="text-black mt-2 px-5">
      Hai {{ $user->fullname }}, berikut adalah instruksi untuk test 02
    </p>
    <p class="text-black mt-2 px-5">
      Silahkan <b>menyiapkan 3 lembar kertas HVS berukuran A4 dan pensil HB</b> seperti yang telah diinfokan sebelumnya. 
      <b>Silahkan tuliskan di masing-masing kertas pada pojok kiri atas identitas Anda mulai dari:</b>
    </p>
    <p class="text-black mt-2 px-5">
      1. Nama
      <br>2. Usia
      <br>3. Jenis Kelamin
      <br>4. Diakhiri dengan tanda tangan Anda
    </p>
    <p class="text-black mt-2 px-5">
      Jika sudah menuliskan identitas Anda. <b>Bisa diambil satu kertas saja</b> dan kertas lainnya bisa disimpan atau ditaruh di samping terlebih dahulu, sehingga kertasnya tidak saling bertumpuk.
    </p>
    <p class="text-black mt-2 px-5">
      Jika sudah <b>silahkan balik kertasnya pada bagian yang kosong atau bagian yang tidak ada identitasnya</b>
    </p>
    <p class="text-black mt-2 px-5">
      Pada tes ini, <b>tugas Anda adalah menggambar sebuah pohon</b> dan apabila Anda sudah selesai menggambar pohon, <b>silahkan tuliskan nama pohon yang Anda gambar di halaman kertas yang ada identitasnya atau di halaman kertas sebaliknya.</b>
    </p>
    
    <div class="mb-2 flex justify-center gap-6 mt-6">
      <button onclick="window.history.back();" class="bg-gray-500 hover:bg-gray-700 text-white py-2 px-4 rounded-full">
        Kembali
      </button>
      <form action="{{ route('psikotest-paid.tool.BAUM.start', ['psikotestTool' => $psikotestTool->id]) }}" method="POST" class="inline">
        @csrf
        <button type="submit" class="w-xl bg-primary items-center text-white py-2 px-10 rounded-full hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
            Selanjutnya
        </button>
      </form>
    </div>
  </div>
</div>

@endsection