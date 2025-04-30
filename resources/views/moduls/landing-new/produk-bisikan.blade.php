@extends('layouts.main-new', [
    'title' => 'Berbinar Insightful Indonesia',
    'active' => 'Produk Berbinar',
    'page' => 'Bisikan',
])

@section('content')

<section id="customSection" class="mb-12 w-full overflow-x-hidden">
    <div class="absolute left-0 top-0 h-fit md:block w-1/2 md:w-1/3 lg:w-1/4 pt-32 md:pt-0">
        <img
            src="{{ asset("assets/images/landing/produk/emo/blop-1.png") }}"
            alt="top-left-texture"
            class="object-cover"
        />
    </div>
    <div class="absolute right-0 top-0 h-fit md:block w-1/2 md:w-1/3 lg:w-1/4 pt-32 md:pt-0">
        <img
            src="{{ asset("assets/images/landing/produk/emo/blop-2.png") }}"
            alt="top-right-texture"
            class="object-cover"
        />
    </div>
    <div class="relative">
        <div class="flex flex-row justify-between items-center max-sm:mt-32 mx-20 max-sm:mx-4 gap-x-10 z-10">
            <div class="flex flex-col flex-1 space-y-6 max-sm:space-y-2 max-w-xl max-lg:min-w-auto">
                <a href="{{ route('produk-new') }}">
                    <div class="flex lg:order-1 items-center space-x-2 cursor-pointer">
                        <img src="{{ asset('assets/images/landing/asset-konseling/vector/left-arrow.svg') }}" alt="Left Arrow" class="h-3 w-auto">
                        <p class="text-[15px] font-semibold text-[#3986A3]">Produk Berbinar</p>  
                    </div>
                </a>

                <div class="hidden max-md:flex max-lg:flex-none items-center justify-center w-full lg:w-auto lg:order-2">
                    <img src="{{ asset('assets/images/landing/asset-konseling/vector/hero.png') }}" alt="Konseling" class="h-[340px] max-sm:h-[320px] w-auto object-contain">
                </div>
                
                <div class="lg:order-3">
                    <h2 class="mb-4 bg-gradient-to-r from-[#1C4352] to-[#3986A3] bg-clip-text py-1 font-[inter] text-4xl font-semibold text-transparent lg:text-5xl lg:tracking-wide">BISIKAN</h2>  
                </div>

                <div class="lg:order-4">
                    <p class="text-[#70787D] text-justify max-sm:text-[15px] max-sm:leading-normal text-lg max-lg:text-[17px]">
                        Selamat datang dalam petualangan psikologi bersama Bisikan Jangan lewatkan sharing session eksklusif kami di Instagram, di mana kita akan bersama-sama merambah ke dalam lapisan terdalam pikiran dan emosi. Temukan rahasia-rahasia kehidupan yang penuh warna bersama kami.
                    </p>
                </div>
            </div>

            <div class="flex max-md:hidden flex-initial max-lg:flex-1 items-center justify-center w-full lg:w-auto">
                <img src="{{ asset('assets/images/landing/produk/bisikan/banner-1.png') }}" alt="Konseling" class="h-[340px] max-lg:h-[320px] w-auto">
            </div>
        </div>
    </div>
</section>

@endsection