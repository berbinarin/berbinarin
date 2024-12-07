@extends('moduls.psikotes.layouts.mainn', [
<<<<<<< Updated upstream
'title' => 'Data Diri Tes Biodata',
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

  <p class="font-bold text-2xl text-center text-gray-800 mt-16 z-20 relative">Tes 25</p>

  <!-- Card Transparant -->
  <div class="relative text-justify z-10 w-xl mx-auto bg-white bg-opacity-50 shadow-lg rounded-lg p-6 mt-10 " style="width: 950px;">

    <p class="font-bold text-xl text-left text-gray-800 mb-6">Data Diri</p>
    <div class="grid grid-cols-6 gap-x-6 gap-y-4">
      <div class="col-span-3">
          <label for="name"
            class="block text-lg font-semibold leading-6 text-black">Nama Lengkap</label>
          <div class="mt-2">
            <input type="text" name="fullname" id="fullname"
              class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary text-lg sm:leading-6"
              placeholder="John Doe">
          </div>
      </div>
      <div class="col-span-3">
          <label for="ktp"
            class="block text-lg font-semibold leading-6 text-black">No. KTP</label>
          <div class="mt-2">
            <input type="text" name="ktp" id="ktp"
              class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary text-lg sm:leading-6"
              placeholder="987678909876">
          </div>
      </div>
      <div class="col-span-3">
          <label for="tempatLahir"
              class="block text-lg font-semibold leading-6 text-black">Tempat Lahir</label>
          <div class="mt-2">
            <input type="text" name="tempatLahir" id="tempatLahir"
              class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary text-lg sm:leading-6"
              placeholder="Kota Ambarawa">
          </div>
      </div>
      <div class="col-span-3">
          <label for="tglLahir"
            class="block text-lg font-semibold leading-6 text-black">Tanggal Lahir</label>
          <div class="mt-2">
            <input type="date" name="tglLahir" id="tglLahir"
              autocomplete="age"
              class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary text-lg sm:leading-6"
              placeholder="01/01/0001">
          </div>
      </div>
      <div class="col-span-3">
          <label for="gender"
            class="block text-lg font-semibold leading-6 text-black">Jenis Kelamin</label>
          <div class="mt-2">
            <select id="gender_type_id" placeholder="Placeholder"
              name="gender_type_id"
              class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-lg sm:leading-6">
                <option value="Default">Pilih Jenis Kelamin</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
          </div>
      </div>
      <div class="col-span-3">
        <label for="marriage"
          class="block text-lg font-semibold leading-6 text-black">Status Pernikahan</label>
        <div class="mt-2">
          <select id="marriage_status_id"
            name="marriage_status_id"
            class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-lg sm:leading-6">
              <option value="Default">Pilih Status Pernikahan</option>
              <option value="Kawin">Kawin</option>
              <option value="Belum Kawin">Belum Kawin</option>
              <option value="Cerai Hidup">Cerai Hidup</option>
              <option value="Cerai Mati">Cerai Mati</option>
          </select>
        </div>
      </div>
      <div class="col-span-3">
        <label for="phone" class="block text-lg font-semibold leading-6 text-black">Telepon/HP</label>
        <div class="mt-2">
          <input type="text" name="phone" id="phone"
            class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary text-lg sm:leading-6"
            placeholder="+628123456789">
        </div>
      </div>
      <div class="col-span-3">
          <label for="address"
            class="block text-lg font-semibold leading-6 text-black">Alamat</label>
          <div class="mt-2">
            <input type="text" name="address"
              id="address"
              class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary text-lg sm:leading-6"
              placeholder="Jl. Pak Amin Lapar">
          </div>
      </div>
    </div>
    <div class="mb-4 flex justify-center mt-10">
      <a href="{{ route('dataLanjutanIndvBio') }}">
        <button type="button" class="w-xl bg-primary items-center text-white py-2 px-10 rounded-full hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Selanjutnya</button>
      </a>
    </div>
  </div>
</div>
@endsection
=======
    'title' => 'Data Diri Tes Biodata',
    'active' => 'one psikotest',
])

@section('content')
    <div class="relative h-11/12 md:min-h-screen flex flex-col items-center bg-gray-100 justify-center">

        <!-- bg-internship -->
        <img src="{{ asset('assets/images/psikotes/paid/psikotest-soal-bg.png') }}" alt="Latar Belakang Berbinar"
            class="absolute inset-0 hidden md:block md:w-full md:h-full object-cover z-0">

        <!-- Container untuk ikon di atas card -->
        <div class="absolute top-0 left-0 right-0 flex items-center justify-center mt-8 z-10">
            <div class="bg-white h-[50px] rounded-full px-4 py-2 flex items-center">
                <img src="{{ asset('assets/images/psikotes/paid/logo-berbinar.png') }}" alt="Ikon"
                    class="w-8 h-8 rounded-full">
                <img src="{{ asset('assets/images/psikotes/paid/logo-berbinar-psikotest.png') }}" alt="Ikon"
                    class="w-8 h-8 rounded-full ml-2">
            </div>
        </div>

        <p class="font-bold text-2xl text-center text-gray-800 mt-16 z-20 relative">Tes 25</p>

        <!-- Card Transparant -->
        <form action="{{ route('psikotest-paid.tool.BIODATA_INDIVIDUAL.post') }}" method="post">
            @csrf
            <div class="relative text-justify z-10 w-xl mx-auto bg-white bg-opacity-50 shadow-lg rounded-lg p-6 mt-10 "
                style="width: 950px;">
                <p class="font-bold text-xl text-left text-gray-800 mb-6">Data Diri</p>
                <div class="grid grid-cols-6 gap-x-6 gap-y-4">
                    <div class="col-span-3">
                        <label for="name" class="block text-lg font-semibold leading-6 text-black">Nama Lengkap</label>
                        <div class="mt-2">
                            <input type="text" name="fullname" id="fullname"
                                class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary text-lg sm:leading-6"
                                placeholder="John Doe">
                        </div>
                    </div>
                    <div class="col-span-3">
                        <label for="ktp" class="block text-lg font-semibold leading-6 text-black">No. KTP</label>
                        <div class="mt-2">
                            <input type="text" name="no_ktp" id="ktp"
                                class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary text-lg sm:leading-6"
                                placeholder="987678909876">
                        </div>
                    </div>
                    <div class="col-span-3">
                        <label for="tempatLahir" class="block text-lg font-semibold leading-6 text-black">Tempat
                            Lahir</label>
                        <div class="mt-2">
                            <input type="text" name="place_of_birth" id="tempatLahir"
                                class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary text-lg sm:leading-6"
                                placeholder="Kota Ambarawa">
                        </div>
                    </div>
                    <div class="col-span-3">
                        <label for="tglLahir" class="block text-lg font-semibold leading-6 text-black">Tanggal Lahir</label>
                        <div class="mt-2">
                            <input type="date" name="date_of_birth" id="tglLahir" autocomplete="age"
                                class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary text-lg sm:leading-6"
                                placeholder="01/01/0001">
                        </div>
                    </div>
                    <div class="col-span-3">
                        <label for="gender" class="block text-lg font-semibold leading-6 text-black">Jenis Kelamin</label>
                        <div class="mt-2">
                            <select id="gender_type_id" placeholder="Placeholder" name="gender"
                                class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-lg sm:leading-6">
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-span-3">
                        <label for="marriage" class="block text-lg font-semibold leading-6 text-black">Status
                            Pernikahan</label>
                        <div class="mt-2">
                            <select id="marriage_status_id" name="marriage_status"
                                class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-lg sm:leading-6">
                                <option value="">Pilih Status Pernikahan</option>
                                <option value="Kawin">Kawin</option>
                                <option value="Belum Kawin">Belum Kawin</option>
                                <option value="Cerai Hidup">Cerai Hidup</option>
                                <option value="Cerai Mati">Cerai Mati</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-span-3">
                        <label for="phone" class="block text-lg font-semibold leading-6 text-black">Telepon/HP</label>
                        <div class="mt-2">
                            <input type="text" name="no_hp" id="phone"
                                class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary text-lg sm:leading-6"
                                placeholder="+628123456789">
                        </div>
                    </div>
                    <div class="col-span-3">
                        <label for="address" class="block text-lg font-semibold leading-6 text-black">Alamat</label>
                        <div class="mt-2">
                            <input type="text" name="address" id="address"
                                class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary text-lg sm:leading-6"
                                placeholder="Jl. Pak Amin Lapar">
                        </div>
                    </div>
                </div>

                <input type="hidden" name="page" value="1">

                <div class="mb-4 flex justify-center mt-10">
                    <button type="submit"
                        class="w-xl bg-primary items-center text-white py-2 px-10 rounded-full hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Selanjutnya</button>
                </div>
            </div>
        </form>
    </div>
@endsection
>>>>>>> Stashed changes
