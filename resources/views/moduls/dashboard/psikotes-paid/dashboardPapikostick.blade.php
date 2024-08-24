@extends('moduls.dashboard.layouts.main', [
'title' => 'Dashboard Papikostick',
'active' => 'Dashboard',
'modul' => 'Dashboard Papikostick',
])

@section('content-dashboard')
<section class="flex w-full">
  <div class="flex flex-col w-full">
    <div class="w-full">
      <div class="py-4 md:py-4">
        <div>
          <p tabindex="0" class="focus:outline-none text-start text-base sm:text-lg md:text-2xl lg:text-4xl font-bold leading-normal text-gray-800 mb-2">
            Data User
          </p>
          <p class="text-start w-3/5 text-disabled">Fitur ini menampilkan data responden seperti Nama, Jenis kelamin, Tanggal lahir, Email yang telah mengisi Tes Psikotes Berbinar</p>
        </div>
      </div>
    </div>
    <div class="flex flex-col md:flex-row w-full gap-6">
      <!-- Card Container -->
      <div class="bg-white rounded-md p-4 border border-gray-200" style="width: 750px;">
        <div class="flex flex-col md:flex-row gap-6">
          <!-- Card 1 -->
          <div class="w-full md:w-1/2 bg-[#68BC40] rounded-md p-4 text-white relative" style="background-color: #68BC40;  height: 400px; width: 350px;">
            <p class="font-bold text-lg mb-4">Sudah Mengerjakan</p>

            <div class="flex items-center justify-center">
              <div class="absolute bottom-4 left-4">
                <span class="text-white font-bold text-5xl ml-2">360</span>
                <p class="text-white font-bold text-md mt-2 ml-2">User</p>
              </div>
            </div>
            <p class="absolute bottom-4 right-4 text-white text-xl">15</p>
          </div>

          <!-- Card 2 -->
          <div class="md:w-1/2 bg-[#75BADB] rounded-md p-4 text-white relative" style="background-color: #75BADB; height: 400px; width: 350px;">
            <p class="font-bold text-lg mb-4">Sedang Mengerjakan</p>

            <div class="flex items-center justify-center">
              <div class="absolute bottom-4 left-4">
                <span class="text-white font-bold text-5xl ml-2">360</span>
                <p class="text-white font-bold text-md mt-2 ml-2">User</p>
              </div>
            </div>
            <p class="absolute bottom-4 right-4 text-white text-xl">15</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection