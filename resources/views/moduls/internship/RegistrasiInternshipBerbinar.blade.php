@extends('moduls.internship.layouts.main',[
'title' => 'Internship-Registrasi',
'active' => 'Success',
'page' => 'Success',
])

@section('content')
<div class="relative min-h-screen flex flex-col items-center bg-gray-100 justify-center">
  <!-- bg-internship -->
  <div class="absolute inset-0 flex items-center justify-center">
    <!-- Gambar latar belakang untuk desktop -->
    <img src="{{ asset('assets/images/internship/register/bg-registrasi.png') }}" alt="Latar Belakang Berbinar" class="absolute inset-0 hidden md:block w-full h-auto object-cover">

    <!-- Gambar latar belakang untuk mobile -->
    <img src="{{ asset('assets/images/internship/register/bg-registrasi-mobile.png') }}" alt="Latar Belakang Berbinar" class="absolute inset-0 md:hidden w-full h-auto object-cover">
  </div>


  <!-- Logo Container -->
  <div class="absolute top-2 left-0 md:mt-4 ml-4 flex items-center">
    <img src="{{ asset('assets/images/internship/register/logo-berbinar.png') }}" alt="Logo Berbinar" class="w-14 pl-4 pt-4">
  </div>

  <!-- Text Container -->
  <div class="text-center -mt-2 mb-10 relative z-40 md:mt-6 md:mb-4">
    <h2 class="text-md font-bold text-white md:text-3xl sm:text-base">Pendaftaran Internship Berbinar</h2>
    <h2 class="text-md text-white md:mt-2 md:text-3xl sm:text-base">UI/UX Designer</h2>
  </div>

  <!-- Card Box -->
  <div class="relative h-[700px] md:max-h-[600px] md:mb-8 justify-end z-30 mx-auto md:w-full md:max-w-5xl bg-white p-6 rounded-3xl md:rounded-lg shadow-lg mt-2 overflow-y-auto md:overflow-y-hidden">
    <div class="number flex space-x-4 py-6 -mt-6 hidden md:flex justify-center w-full">
      <!-- Isi nomor -->
      <div class="w-1/5 py-2 relative flex items-center justify-center">
        <div class="rounded-full bg-primary w-12 h-12 flex items-center justify-center mx-auto mr-8">
          <h1 class="text-xl text-white">1</h1>
        </div>
      </div>

      <div class="w-1/5 py-2 relative flex items-center justify-center">
        <div class="flex items-center justify-center">
          <div class="h-24 bg-gray-400 rounded-xl w-2 transform rotate-90 mr-14 -ml-6"></div>
          <div class="rounded-full bg-[#C7F8FF] w-12 h-12 flex items-center justify-center mx-auto ml-2">
            <h1 class="text-xl text-black">2</h1>
          </div>
        </div>
      </div>

      <div class="w-1/5 py-2 relative flex items-center justify-center">
        <div class="flex items-center justify-center">
          <div class="h-24 bg-gray-400 rounded-xl w-2 transform rotate-90 mr-14 -ml-6"></div>
          <div class="rounded-full bg-[#C7F8FF] w-12 h-12 flex items-center justify-center mx-auto ml-2">
            <h1 class="text-xl text-black">3</h1>
          </div>
        </div>
      </div>

      <div class="w-1/5 py-2 relative flex items-center justify-center">
        <div class="flex items-center justify-center">
          <div class="h-24 bg-gray-400 rounded-xl w-2 transform rotate-90 mr-14 -ml-6"></div>
          <div class="rounded-full bg-[#C7F8FF] w-12 h-12 flex items-center justify-center mx-auto ml-2">
            <h1 class="text-xl text-black">4</h1>
          </div>
        </div>
      </div>

      <div class="w-1/5 py-2 relative flex items-center justify-center">
        <div class="flex items-center justify-center">
          <div class="h-24 bg-gray-400 rounded-xl w-2 transform rotate-90 mr-14 -ml-6"></div>
          <div class="rounded-full bg-[#C7F8FF] w-12 h-12 flex items-center justify-center mx-auto ml-2">
            <h1 class="text-xl text-black">5</h1>
          </div>
        </div>
      </div>
    </div>

    <h2 class="text-xl font-bold text-bold text-center mt-4 md:-mt-10 mb-4">Biodata Diri</h2>
    <div class="flex flex-col mx-auto md:flex-row">
      <!-- Card Kiri (Informasi) -->
      <div class="w-full md:w-1/2 py-2">
        <div class="px-4">
          <form action="#" method="POST">
            <div class="mb-4">
              <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
              <input type="email" id="email" name="email" placeholder="Masukkan Email Anda" class="mt-1 block w-full px-3 py-2 bg-gray-200 border border-gray-200 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm">
            </div>
            <div class="mb-4">
              <label for="nama_lengkap" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
              <input type="text" id="nama_lengkap" name="nama_lengkap" placeholder="Masukkan Nama Lengkap Anda" class="mt-1 bg-gray-200 block w-full px-3 py-2 border border-gray-200 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm">
            </div>
            <div class="mb-4">
              <label for="nama_panggilan" class="block text-sm font-medium text-gray-700">Nama Panggilan</label>
              <input type="text" id="nama_panggilan" name="nama_panggilan" placeholder="Masukkan Nama Panggilan Anda" class="mt-1 bg-gray-200 block w-full px-3 py-2 border border-gray-200 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm">
            </div>
            <div class="mb-4">
              <label for="tanggal_lahir" class="block text-sm font-medium text-gray-700">Tanggal Lahir</label>
              <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="mt-1 block w-full px-3 py-2 border bg-gray-200 border-gray-200 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm">
            </div>
            <div class="mb-4">
              <label for="nomor_wa" class="block text-sm font-medium text-gray-700">Nomor WhatsApp</label>
              <input type="text" id="nomor_wa" name="nomor_wa" placeholder="Masukkan Nomor WhatsApp Anda" class="mt-1 bg-gray-200 block w-full px-3 py-2 border border-gray-200 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm">
            </div>
          </form>
        </div>
      </div>
      <!-- Card Kanan (Informasi) -->
      <div class="w-full md:w-1/2 py-2">
        <div class="px-4">
          <div class="mb-4">
            <label for="domisili" class="block text-sm font-medium text-gray-700">Domisili (Kota saja)</label>
            <input type="text" id="domisili" name="domisili" placeholder="Lorem Ipsum" class="mt-1 block w-full bg-gray-200 px-3 py-2 border border-gray-200 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm">
          </div>
          <div class="mb-4">
            <label for="sekolah" class="block text-sm font-medium text-gray-700">Sekolah/Instansi/Nama Perguruan Tinggi</label>
            <input type="text" id="sekolah" name="sekolah" placeholder="Lorem Ipsum" class="mt-1 bg-gray-200 block w-full px-3 py-2 border border-gray-200 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm">
          </div>
          <div class="mb-4">
            <label for="status" class="block text-sm font-medium text-gray-700">Status (Kelas/Semester/Fresh Graduate)</label>
            <input type="text" id="status" name="status" placeholder="Lorem Ipsum" class="mt-1 bg-gray-200 block w-full px-3 py-2 border border-gray-200 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm">
          </div>
          <div class="mb-4">
            <label for="jurusan" class="block text-sm font-medium text-gray-700">Jurusan</label>
            <input type="text" id="jurusan" name="jurusan" placeholder="Lorem Ipsum" class="mt-1 bg-gray-200 block w-full px-3 py-2 border border-gray-200 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm">
          </div>
        </div>
      </div>
    </div>

    <!-- Tombol untuk tampilan desktop -->
    <div class="hidden md:flex justify-end md:-mt-8">
      <button type="submit" class="w-full mr-4 md:w-auto bg-primary text-white py-2 px-4 rounded-md hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-primary">Selanjutnya</button>
    </div>
  </div>

  <!-- Tombol untuk tampilan mobile -->
  <div class="flex justify-end mt-8 md:hidden" style="width: 80%;">
  <button type="submit" class="bg-black text-white py-2 px-8 rounded-full hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-primary">Next</button>
</div>

</div>


@endsection