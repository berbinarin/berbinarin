@extends('moduls.psikotes.layouts.mainn', [
'title' => 'Instruksi VAK',
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

  <p class="font-bold text-2xl text-center text-gray-800 mt-16 z-20 relative">Tes 13</p>

  <!-- Card Transparant -->
  <div class="relative text-justify z-10 w-3xl mx-auto bg-white bg-opacity-50 shadow-lg rounded-lg p-6 mt-4 " style="width: 750px;">
    <p class="text-black mt-4 px-5">
      Bacalah setiap kalimat dengan hati-hati lalu pertimbangkan apakah pernyataan tersebut menggambarkan diri Anda. Setiap pernyataan akan tersedia tiga opsi pilihan jawaban, pilihlah salah satu opsi jawaban yang sesuai dengan gambaran diri Anda.
    </p>
    <p class="text-black mt-2 px-5">
      <b>Keterangan pilihan jawaban:</b>
      <br>1 : Jika pernyataan <b>"TIDAK SESUAI"</b> dengan gambaran diri Anda. 
      <br>2 : Jika pernyataan <b>"CUKUP SESUAI"</b> dengan gambaran diri Anda.
      <br>3 : Jika pernyataan <b>"SANGAT SESUAI"</b> dengan gambaran diri Anda.
    </p>
    <p class="text-black mt-2 px-5">
      Tidak ada benar atau salah dalam pengerjaan soal ini, jadi silakan Anda menjawab sejujur-jujurnya.
    </p>
    
    <div class="mb-4 flex justify-center mt-10">
      <a href="{{ route('soalVak') }}">
        <button type="button" class="w-xl bg-primary items-center text-white py-2 px-10 rounded-full hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Selanjutnya</button>
      </a>
    </div>
  </div>
</div>

@endsection