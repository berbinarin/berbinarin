@extends('moduls.psikotes.layouts.mainn', [
'title' => 'instruksi psikotest',
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
  <div class="relative text-justify z-10 w-3xl mx-auto bg-white bg-opacity-50 shadow-lg rounded-lg p-6 mt-20" style="width: 750px;">

    <p class="text-black mt-10 px-5">
      Akan terdapat 90 pasang pernyataan. Pilihlah satu pernyataan dari pasangan pernyataan yang Anda rasakan paling mendekati gambaran diri Anda, atau yang paling menunjukkan perasaan Anda.

    </p>
    <p class="text-black mt-2 px-5">
      Terkadang Anda akan merasa bahwa kedua pernyataan itu sesuai benar dengan diri Anda, meskipun demikian Anda harus tetap memilih satu pernyataan yang paling menunjukkan diri Anda.
    </p>
    <p class="text-black mt-2 px-5">
      Anda <span class="font-bold">HARUS</span> memilih salah satu yang dominan serta mengisi semua nomor.
    </p>

    <div class="mb-4 flex justify-center mt-10">
      <a href="{{ route('soal') }}">
        <button type="button" class="w-xl bg-primary  items-center text-white py-2 px-10 rounded-full hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Selanjutnya</button>
      </a>
    </div>

  </div>
</div>

@endsection