@extends('landing.layouts.app', [
    'title' => 'Berbinar Insightful Indonesia',
    'active' => 'Produk Berbinar',
    'page' => 'Daftar Konseling',
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


    .group {
        transition: transform 0.3s ease-in-out;
        transform-origin: center;
        overflow: hidden;
    }

    .group:hover {
        transform: scaleY(1.2);
    }


    .group:hover .transform {
        transform: scaleY(0.83);
    }

</style>

<h1 class="max-sm:text-[29px] max-md:mx-10 text-4xl font font-semibold text-black text-center mt-28 sm:mt-32 max-sm:mx-2 text-gradient leading-snug">Tentukan jenis sesi konselingmu</h1>

<div class="md:flex hidden justify-center space-x-5 my-12 items-center mx-20">
    @foreach ($konselings as $konseling)
    <div class="relative w-[450px] h-auto transition-all duration-300 items-center bg-white before:absolute before:inset-0 before:scale-0 before:transition-transform before:duration-300 before:rounded-full
        hover:before:scale-150 before:bg-[#FFEACE] shadow-lg rounded-2xl overflow-hidden group transform origin-center">

        <div class="p-4 flex flex-col text-center justify-center space-y-5 transform group-hover:scale-y-[0.83] transition-transform duration-300 group-hover:-mt-10">
            <h1 class="max-sm:text-[29px] text-3xl leading-relaxed group-hover:leading-normal group-hover:text-4xl transition-all duration-300 font font-semibold text-black text-gradient-blue">{{ $konseling['nama'] }}</h1>
            <img src="{{ asset($konseling['image']) }}" alt="{{ $konseling['nama'] }}" class="h-40 transition-all duration-300 group-hover:h-52 w-auto object-contain group-hover:-my-1">
            <p class="text-[15px] font-semibold text-black leading-tight">{{ $konseling['deskripsi'] }}</p>
        </div>

        <div class="flex justify-center absolute bottom-0 left-1/2 -translate-x-1/2 translate-y-20 group-hover:scale-y-[0.83] group-hover:-translate-y-0.5 transition-all duration-300">
            <a href="{{ $konseling['link'] }}">
                <button class="text-white bg-gradient-to-r max-sm:text-[15px] text-md from-[#3986A3] to-[#225062] py-2 px-4 max-sm:px-6 rounded-xl max-sm:rounded-md">Daftar {{ $konseling['nama'] }}</button>
            </a>
        </div>
    </div>

    @if ($loop->iteration == 1)
        <img src="{{ asset('assets/images/landing/logo/logo-berbinar.png') }}" alt="Berbinar" class="h-20 w-auto object-contain">
    @endif
    @endforeach

    {{-- <div class="relative w-[450px] h-auto transition-all duration-300 items-center bg-white before:absolute before:inset-0 before:scale-0 before:transition-transform before:duration-300 before:rounded-full
        hover:before:scale-150 before:bg-[#FFEACE] shadow-lg rounded-2xl overflow-hidden group transform origin-center">

        <div class="p-4 flex flex-col text-center justify-center space-y-5 transform group-hover:scale-y-[0.83] transition-transform duration-300">
            <h1 class="max-sm:text-[29px] text-3xl leading-relaxed group-hover:leading-snug group-hover:text-4xl transition-all duration-300 font font-semibold text-black text-gradient-blue">Psikolog</h1>
            <img src="{{ asset('assets/images/landing/asset-konseling/vector/hero.png') }}" alt="Konseling" class="h-40 transition-all duration-300 group-hover:h-52 w-auto object-contain group-hover:-my-1">
            <p class="text-[15px] font-semibold text-black leading-tight">Konseling bersama Psikolog berizin praktek aktif (SIPP) dan berpengalaman dalam menghadapi berbagai permasalahan yang berkaitan dengan konseling </p>
        </div>

        <div class="flex justify-center absolute bottom-0 left-1/2 -translate-x-1/2 translate-y-20 group-hover:scale-y-[0.83] group-hover:translate-y-0 transition-all duration-300">
            <button class="text-white bg-gradient-to-r max-sm:text-[15px] text-md from-[#3986A3] to-[#225062] py-2 px-4 max-sm:px-6 rounded-xl max-sm:rounded-md">Daftar {{ $konseling['nama'] }}</button>
        </div>
    </div> --}}
</div>


<div class="md:hidden flex flex-col justify-center space-y-4 my-12 items-center mx-4">
    @foreach ($konselings as $konseling)
    <div class="relative bg-white max-w-[350px] w-full items-center border rounded-2xl shadow-md">
        <div class="p-3 flex flex-col text-center justify-center space-y-3">
            <h1 class="max-sm:text-[29px] text-2xl font font-semibold text-black text-gradient-blue">{{ $konseling['nama'] }}</h1>
            <img src="{{ asset($konseling['image']) }}" alt="{{ $konseling['nama'] }}" class="h-36 w-auto object-contain">
            <div class="flex justify-center">
                <a href="{{ $konseling['link'] }}">
                    <button class="text-white bg-gradient-to-r max-sm:text-[15px] text-md from-[#3986A3] to-[#225062] py-2 px-4 max-sm:px-6 rounded-xl">Daftar {{ $konseling['nama'] }}</button>
                </a>
            </div>
            <p class="text-[13px] font-semibold text-black leading-tight">{{ $konseling['deskripsi'] }}</p>
        </div>
    </div>

    @if ($loop->iteration == 1)
        <img src="{{ asset('assets/images/landing/logo/logo-berbinar.png') }}" alt="Berbinar" class="h-14 w-auto object-contain">
    @endif
    @endforeach
</div>
@endsection
