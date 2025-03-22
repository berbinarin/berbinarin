@extends('layouts.main-new', [
    'title' => 'Berbinar Insightful Indonesia',
    'active' => 'Produk Berbinar',
    'page' => 'Daftar Psikotes',
])

@section('content')
<style>
    .text-gradient {
        background: linear-gradient(to right, #F7B23B, #916823); 
        background-clip: text;
        -webkit-background-clip: text; 
        color: transparent; 
    }

    .text-gradient-blue {
        background: linear-gradient(to right, #3986A3, #15323D); 
        background-clip: text;
        -webkit-background-clip: text; 
        color: transparent; 
    }
</style>

<h1 class="max-sm:text-[29px] max-md:mx-10 text-[42px] font-semibold text-black text-center mt-28 sm:mt-32 max-sm:mx-2 leading-tight">Tingkatkan Potensi dengan <br class="hidden sm:inline"> Psikotes <span class="text-gradient-blue">Berbinar</span></h1>

<div class="grid max-md:grid-cols-2 grid-cols-4 m-10 gap-y-3">
    @foreach ($layanan_psikotes as $psikotes)
    <div class="flex flex-col space-y-1 sm:space-y-3 justify-center items-center">
        <img src="{{ asset($psikotes['image']) }}" alt="{{ $psikotes['name'] }}" class="sm:h-32 h-28 w-auto object-contain">
        <p class="text-gradient text-lg sm:text-2xl font-semibold">{{ $psikotes['name'] }}</p>
    </div>
    @endforeach
</div>

<div class="flex sm:flex-row flex-col justify-center gap-6 mb-14 mx-4">
    <div class="flex justify-center items-center">
        <a href="{{ route('psikotes-new/jadwal-psikotes') }}" class="w-full flex justify-center">
            <button class="text-white bg-gradient-to-r max-sm:text-[15px] text-md from-[#3986A3] to-[#225062] py-2 px-16 sm:w-auto w-full rounded-xl">Daftar Tes Berbayar</button>
        </a>
    </div>

    <div class="flex justify-center items-center">
        <a href="{{ route('psikotes-new/jadwal-psikotes') }}" class="w-full flex justify-center">
            <button class="text-white bg-gradient-to-r max-sm:text-[15px] text-md from-[#F7B23B] to-[#916823] py-2 px-8 sm:w-auto w-full rounded-xl">Ikuti Test Kepribadian Gratis</button>
        </a>
    </div>
</div>
@endsection