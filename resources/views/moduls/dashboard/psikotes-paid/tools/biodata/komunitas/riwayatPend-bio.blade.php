@extends('moduls.psikotes.layouts.mainn', [
'title' => 'Tes Biodata',
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

  <p class="font-bold text-2xl text-center text-gray-800 mt-16 z-20 relative">Tes 24</p>

  <!-- Card Transparant -->
  <div class="relative text-justify z-10 w-xl mx-auto bg-white bg-opacity-50 shadow-lg rounded-lg p-6 mt-10 " style="width: 950px;">

    <p class="font-bold text-xl text-left text-gray-800 mb-4">Riwayat Pendidikan</p>
    <p class="font-bold text-lg text-left text-blue-500 mb-2">SD</p>
    <div class="grid grid-cols-6 gap-x-6 gap-y-4">
      <div class="col-span-3">
          <label for="sd_name" class="block text-lg font-semibold leading-6 text-black">Nama Sekolah</label>
          <div class="mt-2">
            <input type="text" name="sd_name" id="sd_name" class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary text-lg sm:leading-6" placeholder="SD Harapan 1">
          </div>
      </div>
      <div class="col-span-3 flex space-x-2">
          <div class="w-1/2">
              <label for="sd_start_year" class="block text-lg font-semibold leading-6 text-black">Tahun</label>
              <div class="mt-2">
                <input type="number" name="sd_start_year" id="sd_start_year" class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary text-lg sm:leading-6" placeholder="2003">
              </div>
          </div>
          <span class="self-center">-</span>
          <div class="w-1/2">
              <label for="sd_end_year" class="block text-lg font-semibold leading-6 text-black invisible">Tahun</label>
              <div class="mt-2">
                <input type="number" name="sd_end_year" id="sd_end_year" class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary text-lg sm:leading-6" placeholder="2006">
              </div>
          </div>
      </div>
    </div>
    <p class="font-bold text-lg text-left text-blue-500 mt-4 mb-2">SMP</p>
    <div class="grid grid-cols-6 gap-x-6 gap-y-4">
      <div class="col-span-3">
          <label for="smp_name" class="block text-lg font-semibold leading-6 text-black">Nama Sekolah</label>
          <div class="mt-2">
            <input type="text" name="smp_name" id="smp_name" class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary text-lg sm:leading-6" placeholder="SMP Harapan 1">
          </div>
      </div>
      <div class="col-span-3 flex space-x-2">
        <div class="w-1/2">
          <label for="smp_start_year" class="block text-lg font-semibold leading-6 text-black">Tahun</label>
            <div class="mt-2">
              <input type="number" name="smp_start_year" id="smp_start_year" class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary text-lg sm:leading-6" placeholder="2003">
            </div>
        </div>
        <span class="self-center">-</span>
        <div class="w-1/2">
          <label for="smp" class="block text-lg font-semibold leading-6 text-black invisible">Tahun</label>
            <div class="mt-2">
              <input type="number" name="smp" id="smp" class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary text-lg sm:leading-6" placeholder="2006">
            </div>
        </div>
      </div>
    </div>
    <p class="font-bold text-lg text-left text-blue-500 mt-4 mb-2">SMA</p>
    <div class="grid grid-cols-6 gap-x-6 gap-y-4">
      <div class="col-span-3">
        <label for="nama_sma" class="block text-lg font-semibold leading-6 text-black">Nama Sekolah</label>
        <div class="mt-2">
          <input type="text" name="nama_sma" id="nama_sma" class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary text-lg sm:leading-6" placeholder="SMA Harapan 1">
        </div>
      </div>
      <div class="col-span-3 flex space-x-3">
        <div class="w-1/3">
          <label for="jurusan" class="block text-lg font-semibold leading-6 text-black">Jurusan</label>
            <div class="mt-2">
              <input type="text" name="jurusan" id="jurusan" class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary text-lg sm:leading-6" placeholder="MIPA">
            </div>
        </div>
        <div class="w-1/3">
          <label for="sma" class="block text-lg font-semibold leading-6 text-black">Tahun</label>
            <div class="mt-2">
              <input type="number" name="sma" id="sma" class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary text-lg sm:leading-6" placeholder="2003">
            </div>
        </div>
        <span class="self-center">-</span>
        <div class="w-1/3">
          <label for="sma_akhir" class="block text-lg font-semibold leading-6 text-black invisible">Tahun</label>
            <div class="mt-2">
              <input type="number" name="sma_akhir" id="sma_akhir" class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary text-lg sm:leading-6" placeholder="2006">
            </div>
        </div>
      </div>
    </div>

    <div class="mb-4 flex justify-center mt-10">
      <a href="{{ route('riwayatPend2CommBio') }}">
        <button type="button" class="w-xl bg-primary items-center text-white py-2 px-10 rounded-full hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Selanjutnya</button>
      </a>
    </div>
  </div>
@endsection