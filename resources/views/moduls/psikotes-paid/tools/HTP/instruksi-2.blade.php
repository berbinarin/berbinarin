@extends('moduls.psikotes.layouts.mainn', [
'title' => 'Instruksi Psikotes',
'active' => 'Tes 4',
'page' => 'HTP'
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
        <ul class="custom-list px-5">
            <li><span class="font-semibold">Kertas yang sudah terisi gambar pohon silakan dikesampingkan terlebih
                    dahulu agar tidak mengganggu proses menggambar pada sesi ini.</span>
            </li>
        </ul>

        </p>

        <p class="text-black mt-10 px-10">
            Jika sudah, <span class="font-semibold">silakan balik kertasnya pada bagian yang kosong atau bagian
                yang tidak ada identitasnya.</span>

        </p>

        <div class="mb-4 flex justify-center mt-10">
            <form action="" method="POST">
                @csrf
                <a href="{{ route('psikotest-paid.tool.htp.instruksi3') }}"
                    class="w-xl bg-primary items-center text-white py-2 px-10 rounded-full hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Selanjutnya</a>
            </form>
        </div>


    </div>
</div>
@endsection