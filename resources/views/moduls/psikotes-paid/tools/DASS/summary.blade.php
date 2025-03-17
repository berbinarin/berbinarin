@extends('moduls.psikotes.layouts.mainn', [
    'title' => 'Instruksi DASS',
    'active' => 'one psikotest',
])

@section('content')
<div class="relative min-h-screen h-full w-full flex flex-col items-center justify-center">
    <img src="{{ asset('assets/images/psikotes/paid/psikotest-soal-bg.png') }}" alt="Latar Belakang Berbinar"
        class="absolute inset-0 h-full w-full object-cover z-0">

    <div class="absolute top-8 left-0 right-0 flex items-center justify-center z-10">
        <div class="bg-white h-[50px] rounded-full px-4 py-2 flex items-center">
            <img src="{{ asset('assets/images/psikotes/paid/logo-berbinar.png') }}" alt="Ikon"
                class="w-8 h-8 rounded-full">
            <img src="{{ asset('assets/images/psikotes/paid/logo-berbinar-psikotest.png') }}" alt="Ikon"
                class="w-8 h-8 rounded-full ml-2">
        </div>
    </div>

    <div class="relative justify-center items-center flex flex-col inset-0 text-center z-10 mx-auto mt-10 max-sm:mx-4">
        <img src="{{ asset('assets/images/psikotes/paid/psikotes-ikon-piala.png') }}" alt="Ikon" class="sm:w-60 w-52 h-auto rounded-full flex">
        <p class="font-bold text-xl">Selamat! Kamu sudah menyelesaikan Tes 01</p>

        <div class="flex justify-center mt-8">
            <button type="button" onclick="window.location.href='{{ route('psikotest-paid.showLanding') }}'"
                class="w-xl bg-[#6083F2] items-center text-white py-2 px-10 rounded-full hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
                Kembali ke Halaman Utama
            </button>
        </div>

    </div>
       
</div>
@endsection