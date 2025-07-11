@extends('moduls.psikotes.layouts.mainn', [
    'title' => 'Data Diri Tes Biodata',
    'active' => 'one psikotest',
])

@section('content')
    <div class="relative h-11/12 md:min-h-screen flex flex-col items-center bg-gray-100 justify-center">

        <!-- bg-internship -->
        <img src="{{ asset('assets/images/old/psikotes/paid/psikotest-soal-bg.png') }}" alt="Latar Belakang Berbinar"
            class="absolute inset-0 hidden md:block md:w-full md:h-full object-cover z-0">

        <!-- Container untuk ikon di atas card -->
        <div class="absolute top-0 left-0 right-0 flex items-center justify-center mt-8 z-10">
            <div class="bg-white h-[50px] rounded-full px-4 py-2 flex items-center">
                <img src="{{ asset('assets/images/old/psikotes/paid/logo-berbinar.png') }}" alt="Ikon"
                    class="w-8 h-8 rounded-full">
                <img src="{{ asset('assets/images/old/psikotes/paid/logo-berbinar-psikotest.png') }}" alt="Ikon"
                    class="w-8 h-8 rounded-full ml-2">
            </div>
        </div>

        <p class="font-bold text-2xl text-center text-gray-800 mt-16 z-20 relative">Tes 26</p>

        <!-- Card Transparant -->
        <div class="relative text-justify z-10 w-xl mx-auto bg-white bg-opacity-50 shadow-lg rounded-lg p-6 mt-10 "
            style="width: 950px;">
            <form action="{{ route('psikotest-paid.tool.BIODATA_KLINIS.post') }}" method="post">
              @csrf
                <p class="font-bold text-xl text-left text-gray-800 mb-6">Data Diri Ayah</p>
                <div class="grid grid-cols-6 gap-x-6 gap-y-4">
                    <div class="col-span-3">
                        <label for="name" class="block text-lg font-semibold leading-6 text-black">Nama Lengkap</label>
                        <div class="mt-2">
                            <input type="text" name="name_family[1]" id="fullname"
                                class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary text-lg sm:leading-6"
                                placeholder="John Doe">
                        </div>
                    </div>
                    <div class="col-span-3">
                        <label for="marriage" class="block text-lg font-semibold leading-6 text-black">Status</label>
                        <div class="mt-2">
                            <select id="marriage_status_id" name="family_status_id[1]"
                                class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-lg sm:leading-6">
                                <option value="Default">Pilih Status Keluarga</option>
                                @foreach ($family_statuses as $item)
                                    <option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-span-3">
                        <label for="gender" class="block text-lg font-semibold leading-6 text-black">Jenis Kelamin</label>
                        <div class="mt-2">
                            <select id="gender_type_id" placeholder="Placeholder" name="gender_family[1]"
                                class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-lg sm:leading-6">
                                <option value="Default">Pilih Jenis Kelamin</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-span-3">
                        <label for="age" class="block text-lg font-semibold leading-6 text-black">Usia</label>
                        <div class="mt-2">
                            <input type="number" name="age_family[1]" id="age"
                                class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary text-lg sm:leading-6"
                                placeholder="25">
                        </div>
                    </div>
                    <div class="col-span-3">
                        <label for="ethnicity" class="block text-lg font-semibold leading-6 text-black">Suku Bangsa</label>
                        <div class="mt-2">
                            <input type="text" name="ethnic_family[1]" id="ethnicity"
                                class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary text-lg sm:leading-6"
                                placeholder="Jawa">
                        </div>
                    </div>
                    <div class="col-span-3">
                        <label for="religion" class="block text-lg font-semibold leading-6 text-black">Agama</label>
                        <div class="mt-2">
                            <input type="text" name="religion_family[1]" id="religion"
                                class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary text-lg sm:leading-6"
                                placeholder="Islam">
                        </div>
                    </div>
                    <div class="col-span-3">
                        <label for="address" class="block text-lg font-semibold leading-6 text-black">Alamat</label>
                        <div class="mt-2">
                            <input type="text" name="address_family[1]" id="address"
                                class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary text-lg sm:leading-6"
                                placeholder="Jl. Berbinar Raya">
                        </div>
                    </div>
                    <input type="hidden" name="page" value="8">
                </div>
                <div class="mb-4 flex justify-center mt-10">
                    <button type="submit"
                        class="w-xl bg-primary items-center text-white py-2 px-10 rounded-full hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Selanjutnya</button>
                </div>
            </form>
        </div>
    </div>
@endsection
