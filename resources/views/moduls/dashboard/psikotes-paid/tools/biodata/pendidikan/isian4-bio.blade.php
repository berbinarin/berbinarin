@extends('moduls.psikotes.layouts.mainn', [
'title' => 'Soal 4 Tes Biodata',
'active' => 'one psikotest',
])

<style>
    .input-field {
    background-color: #FFFFFF; /* Warna putih solid */
    border-radius: 30px; 
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); 
    width: 100%;
    padding: 20px;
    font-size: 16px;
    border: none;
    text-align: left;
    outline: none;
    color: #333; 
    min-height: 150px; /* Ukuran tinggi lebih besar */
    resize: none; /* Nonaktifkan resize */
  }

  .input-field:focus {
    box-shadow: 0 0 8px rgba(0, 0, 255, 0.2);
  }

  .submit-button {
    background-color: #6083F2;
    color: white;
    border-radius: 30px;
    padding: 10px 40px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s;
    border: none;
  }

  .submit-button:hover {
    background-color: #4a6fdc;
  }
</style>

@section('content')
<div class="relative h-11/12 md:min-h-screen flex flex-col items-center bg-gray-100 justify-center">
  <!-- Background image -->
  <img src="{{ asset('assets/images/psikotes/paid/psikotest-soal-bg.png') }}" alt="Latar Belakang Berbinar" class="absolute inset-0 hidden md:block md:w-full md:h-full object-cover z-0">

  <!-- Container untuk ikon di atas card -->
  <div class="absolute top-0 left-0 right-0 flex items-center justify-center mt-8 z-10">
    <div class="bg-white h-[50px] rounded-full px-4 py-2 flex items-center">
      <img src="{{ asset('assets/images/psikotes/paid/logo-berbinar.png') }}" alt="Ikon" class="w-8 h-8 rounded-full">
      <img src="{{ asset('assets/images/psikotes/paid/logo-berbinar-psikotest.png') }}" alt="Ikon" class="w-8 h-8 rounded-full ml-2">
    </div>
  </div>

  <p class="font-bold text-2xl text-center text-gray-800 mt-0 z-20 relative">Tes 23</p>

  <div class="relative text-center z-10 w-3xl mx-auto p-7 mt-8" style="width: 750px;">
    <p class="text-lg mt-7 px-8">
      Sebutkan Faktor yang sering menghambat keberhasilan/kelancaran pelaksanaan tugas anda saat ini
    </p>

    <div class="mt-6">
      <textarea placeholder="Ketik disini..." class="input-field rounded-lg"></textarea>
    </div>

    <div class="mb-4 flex justify-center mt-10">
      <a href="{{ route('isian5PendBio') }}">
      <button type="button" class="w-xl bg-primary  items-center text-white py-2 px-10 rounded-full hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Selanjutnya</button>
      </a>
    </div>
  </div>
</div>
@endsection
