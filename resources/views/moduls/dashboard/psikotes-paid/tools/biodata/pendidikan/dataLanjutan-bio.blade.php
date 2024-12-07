@extends('moduls.psikotes.layouts.mainn', [
    'title' => 'Data Diri Lanjutan Tes Biodata',
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

        <p class="font-bold text-2xl text-center text-gray-800 mt-16 z-20 relative">Tes 23</p>

        <!-- Card Transparant -->
        <form action="{{ route('psikotest-paid.tool.BIODATA_PENDIDIKAN.post') }}" method="post">
            @csrf
            <div class="relative text-justify z-10 w-3xl mx-auto bg-white bg-opacity-50 shadow-lg rounded-lg p-6 mt-10 "
                style="width: 950px;">

                <p class="font-bold text-xl text-left text-gray-800 mb-6">Data Diri</p>
                <div class="grid grid-cols-6 gap-x-6 gap-y-4">
                    <div class="col-span-3">
                        <label for="email" class="block text-lg font-semibold leading-6 text-black">Alamat Email</label>
                        <div class="mt-2">
                            <input type="text" name="email" id="email"
                                class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary text-lg sm:leading-6"
                                placeholder="berbinar@insightfull.com">
                        </div>
                    </div>
                    <div class="col-span-3">
                        <label for="work" class="block text-lg font-semibold leading-6 text-black">Unit Kerja</label>
                        <div class="mt-2">
                            <input type="text" name="work_unit" id="work"
                                class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary text-lg sm:leading-6"
                                placeholder="Departemen Tidur">
                        </div>
                    </div>
                    <div class="col-span-3">
                        <label for="work" class="block text-lg font-semibold leading-6 text-black">Jabatan Saat
                            ini</label>
                        <div class="mt-2">
                            <input type="text" name="current_position" id="work"
                                class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary text-lg sm:leading-6"
                                placeholder="CEO">
                        </div>
                    </div>
                    <div class="col-span-3">
                        <label for="work" class="block text-lg font-semibold leading-6 text-black">Jabatan yang
                            Diinginkan</label>
                        <div class="mt-2">
                            <input type="text" name="desired_position" id="work"
                                class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary text-lg sm:leading-6"
                                placeholder="CEO">
                        </div>
                    </div>
                    <div class="col-span-3">
                        <label for="sosmed" class="block text-lg font-semibold leading-6 text-black">Akun
                            Instagram</label>
                        <div class="mt-2">
                            <input type="text" name="instagram" id="sosmed"
                                class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary text-lg sm:leading-6"
                                placeholder="instagram.com/berbinar">
                        </div>
                    </div>
                    <div class="col-span-3">
                        <label for="sosmed" class="block text-lg font-semibold leading-6 text-black">Akun Facebook</label>
                        <div class="mt-2">
                            <input type="text" name="facebook" id="sosmed"
                                class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary text-lg sm:leading-6"
                                placeholder="facebook.com/berbinar">
                        </div>
                    </div>
                    <div class="col-span-3">
                        <label for="sosmed" class="block text-lg font-semibold leading-6 text-black">Akun X
                            (Twitter)</label>
                        <div class="mt-2">
                            <input type="text" name="x" id="sosmed"
                                class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary text-lg sm:leading-6"
                                placeholder="x.com/berbinar">
                        </div>
                    </div>
                </div>
                <input type="hidden" name="page" value="2">
                <div class="mb-4 flex justify-center mt-10">
                    <button type="submit" class="w-xl bg-primary items-center text-white py-2 px-10 rounded-full hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Selanjutnya</button>
                </div>
            </div>
        </form>
    </div>
@endsection
