@extends('moduls.psikotes.layouts.mainn', [
    'title' => 'Tes Biodata',
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

        <p class="font-bold text-2xl text-center text-gray-800 mt-16 z-20 relative">Tes 22</p>

        <form action="{{ route('psikotest-paid.tool.BIODATA_PERUSAHAAN.post') }}" method="post">
          @csrf
            <!-- Card Transparant -->
            <div class="relative text-justify z-10 w-xl mx-auto bg-white bg-opacity-50 shadow-lg rounded-lg p-6 mt-10 "
                style="width: 950px;">

                <p class="font-bold text-xl text-left text-gray-800 mb-4">Riwayat Pendidikan</p>
                <p class="font-bold text-lg text-left text-blue-500 mb-2">TK</p>
                <input type="hidden" name="level_education_id[0]" value="1">
                <div class="grid grid-cols-6 gap-x-6 gap-y-4">
                    <div class="col-span-3">
                        <label for="tk_name" class="block text-lg font-semibold leading-6 text-black">Nama Sekolah</label>
                        <div class="mt-2">
                            <input type="text" name="school_name[0]" id="tk_name"
                                class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary text-lg sm:leading-6"
                                placeholder="TK Harapan 1">
                        </div>
                    </div>
                    <div class="col-span-3">
                        <label for="tk_start_year" class="block text-lg font-semibold leading-6 text-black">Tahun</label>
                        <div class="mt-2">
                            <input type="number" name="year[0]" id="tk_start_year"
                                class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary text-lg sm:leading-6"
                                placeholder="2003">
                        </div>
                    </div>
                </div>
                <p class="font-bold text-lg text-left text-blue-500 mb-2 mt-5">SD</p>
                <input type="hidden" name="level_education_id[1]" value="2">
                <div class="grid grid-cols-6 gap-x-6 gap-y-4">
                    <div class="col-span-3">
                        <label for="sd_name" class="block text-lg font-semibold leading-6 text-black">Nama Sekolah</label>
                        <div class="mt-2">
                            <input type="text" name="school_name[1]" id="sd_name"
                                class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary text-lg sm:leading-6"
                                placeholder="SD Harapan 1">
                        </div>
                    </div>
                    <div class="col-span-3">
                        <label for="sd_start_year" class="block text-lg font-semibold leading-6 text-black">Tahun</label>
                        <div class="mt-2">
                            <input type="number" name="year[1]" id="sd_start_year"
                                class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary text-lg sm:leading-6"
                                placeholder="2003">
                        </div>
                    </div>
                </div>
                <input type="hidden" name="page" value="3">
                <div class="mb-4 flex justify-center mt-10">
                    <button type="submit"
                        class="w-xl bg-primary items-center text-white py-2 px-10 rounded-full hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Selanjutnya</button>
                </div>
            </div>
        </form>
    </div>
@endsection
