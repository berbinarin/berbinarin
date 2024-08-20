@extends('moduls.psikotes.layouts.mainn', [
'title' => 'Instruksi Psikotes',
'active' => 'Tes 3',
'page' => 'DAP'
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

    <!-- Card Transparant -->
    <div class="relative text-justify z-10 w-3xl mx-auto p-6 mt-0" style="width: 750px;">

        <p class="text-black mt-10 px-5">
        <ul class="custom-list-d px-5">
            <li>Jika sudah, silakan foto kedua sisi kertas tersebut, baik bagian identitas maupun gambar Anda dan
                silakan unggah foto tersebut.
            </li>
        </ul>
        </p>

        <div class="mt-10">
            <div class="col-span-full">
                <label for="cover-photo" class="block font-medium leading-6 text-gray-900"></label>
                <div class="mt-2 flex justify-center rounded-lg border-2 border-dashed border-primary px-6 py-10">
                    <div class="text-center">
                        <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="black"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z"
                                clip-rule="evenodd" />
                        </svg>
                        <div class="mt-4 flex leading-6 text-black">
                            <label for="file-upload"
                                class="relative cursor-pointer font-bold underline decoration-1 underline-offset-2 text-primary hover:text-primary-alt">
                                <span>Upload a file</span>
                                <input id="file-upload" name="file-upload" type="file" class="sr-only">
                            </label>
                            <p class="pl-1 font-semibold">or drag and drop</p>
                        </div>
                        <p class="text-xs leading-5 text-gray-600">PNG or JPG up to 15MB</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="mb-4 flex justify-center mt-10">
            <form action="" method="POST">
                @csrf
                <a href=""
                    class="w-xl bg-primary items-center text-white py-2 px-10 rounded-full hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Selanjutnya</a>
            </form>
        </div>


    </div>
</div>
@endsection