@extends('layouts.main-new', [
    'title' => 'Berbinar Insightful Indonesia',
    'active' => 'Karir',
    'page' => 'Karir',
])

@section('content')
<section class="relative bg-cover w-full max-sm:h-[100vh] h-[110vh] bg-hero max-lg:bg-center">
    <!-- GRADIENT -->
    <div class="absolute inset-0 bg-gradient-to-r from-[#9CC3D1] to-transparent z-10"></div>
    
    <!-- TEXT -->
    <div class="relative z-20 flex text-left items-center h-full max-sm:px-4 px-14">
        <div class="text-black max-sm:w-full flex flex-col justify-center">
            <h1 class="max-sm:text-[45px] text-6xl font-semibold judul-450px"><span class="text-[#3886A3]"</span></h1>
            <p class="mt-4 max-sm:text-md max-sm:w-full max-lg:w-3/4 w-2/4 text-lg font-normal text-[#444444] deskripsi-450px">Berbinar hadir menawarkan layanan konseling bersama psikolog partner dan peer counselor untuk setiap individu yang sedang berjuang.</p>
            <div class="flex justify-start">
                <button class="mt-4 bg-gradient-to-r from-[#F7B23B] to-[#AD7D29] text-white font-medium py-2 px-6 rounded-lg w-auto max-sm:w-auto max-sm:text-sm whitespace-nowrap">
                    
                </button>
            </div>
        </div>
    </div>
@endsection