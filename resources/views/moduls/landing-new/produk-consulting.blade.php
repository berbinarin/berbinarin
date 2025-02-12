@extends('layouts.main-new', [
    'title' => 'Berbinar Insightful Indonesia',
    'active' => 'Produk Berbinar',
    'page' => 'Consulting',
])

@section('content')
{{-- HERO SECTION --}}
<section class="relative max-sm:overflow-x-hidden">
    <div class="absolute left-0 top-5 max-sm:top-32 z-0 ">
        <img src="{{ asset('assets/images/landing/asset-konseling/vector/vector-hero1.svg') }}" alt="Vector" class="h-[500px] max-sm:h-[250px] w-auto">
    </div>

    <div class="absolute right-0 max-sm:-right-20 max-md:-right-28 top-8 max-sm:top-40 z-0 ">
        <img src="{{ asset('assets/images/landing/asset-konseling/vector/vector-hero2.svg') }}" alt="Vector" class="h-[500px] max-sm:h-[250px] w-auto">
    </div>

    <div class="relative">
        <div class="flex flex-row justify-between items-center mt-40 max-sm:mt-32 mx-20 max-sm:mx-4 gap-x-10 z-10">
            <div class="flex flex-col flex-1 space-y-6 max-sm:space-y-2 max-w-xl max-lg:min-w-auto">
                <a href="{{ route('produk-new') }}">
                    <div class="flex lg:order-1 items-center space-x-2 cursor-pointer">
                        <img src="{{ asset('assets/images/landing/asset-konseling/vector/left-arrow.svg') }}" alt="Left Arrow" class="h-3 w-auto">
                        <p class="text-[15px] font-semibold text-[#3986A3]">Produk Berbinar</p>  
                    </div>
                </a>

                <div class="hidden max-md:flex max-lg:flex-none items-center justify-center w-full lg:w-auto lg:order-2">
                    <img src="{{ asset('assets/images/landing/asset-consulting/hero.png') }}" alt="Consulting" class="h-[340px] max-sm:h-[320px] w-auto object-contain">
                </div>
                
                <div class="lg:order-3">
                    <h2 class="text-5xl max-sm:text-3xl font-bold text-gradient py-2">Berbinar Consulting</h2>  
                </div>

                <div class="lg:order-4">
                    <p class="text-[#70787D] text-justify max-sm:leading-normal max-sm:text-[15px] text-lg max-lg:text-[17px]">
                        Layanan yang bertujuan untuk membantu suatu perusahaan/komunitas/organisasi yang berkaitan dengan Sumber Daya Manusia. 
                        Layanan ini menekankan pada proses consulting oleh Human Resource yang berpengalaman agar pengetahuan yang diberikan dapat diterima dan dimengerti dengan baik oleh klien.
                    </p>
                </div>
            </div>

            <div class="flex max-md:hidden flex-initial max-lg:flex-1 items-center justify-center w-full lg:w-auto">
                <img src="{{ asset('assets/images/landing/asset-consulting/hero.png') }}" alt="Consulting" class="h-[340px] max-lg:h-[320px] w-auto object-contain">
            </div>
        </div>
    </div>
</section>


{{-- LAYANAN --}}
<div class="bg-psikolog relative mt-24 mx-20 max-sm:mx-4 rounded-3xl p-10 bg-cover h-[280px] my-56 max-md:my-5 max-md:h-[600px] max-sm:h-[500px] max-md:overflow-hidden">
    <img src="/assets/images/landing/vector-curling-mobile.png" alt="Background" class="hidden max-md:flex absolute -top-[150px] left-0 max-sm:-top-[200px] max-md:-top-[220px] rounded-t-3xl w-[1000px] max-sm:w-[1500px] max-sm:h-[600px] max-md:h-[700px] object-cover">
    <div class="absolute inset-0 bg-[#2D6B8280] rounded-3xl flex max-md:hidden"></div>

    <div class="relative flex flex-col text-center space-y-4 justify-center">
        <h1 class="text-3xl max-sm:text-2xl text-white font-semibold ">Layanan Berbinar <span class="italic">Consulting</span></h1>
        
        <div class="swiperContainer">
            <div class="swiper" id="swiperConsulting">
                <div class="swiper-wrapper">
                    @foreach ($layanan_konselings as $layanan_konseling)
                    <div class="swiper-slide">
                        <div class="bg-white py-4 px-6 max-sm:py-3 max-sm:px-4 rounded-xl shadow-md bg-opacity-90 backdrop-blur-sm h-full flex min-h-[313px] max-sm:min-h-[300px] max-lg:min-h-[375px] max-lg:w-full max-xl:w-[95%] flex-col">
                            <p class="text-lg max-sm:text-[17px] font-semibold text-black leading-tight min-h-[45px] max-sm:min-h-[40px] max-lg:min-h-[67px]">{{ $layanan_konseling['category'] }}</p>
                            <p class="text-[30px] max-lg:text-2xl font-semibold text-[#3986A3] mt-3 max-sm:mt-1.5 leading-none">{{ $layanan_konseling['price'] }}<span class="text-[#70787D] text-[18px] align-top">*</span></p>
                            <p class="text-sm text-justify text-[#70787D] mt-5 max-sm:mt-2 flex-grow">{{ $layanan_konseling['description'] }}</p>
                            <a href="{{ $layanan_konseling['link'] }}" target="_blank">
                                <div class="flex justify-center mt-4 max-sm:mt-2 mb-1">
                                    <button class="text-white bg-gradient-to-r text-sm from-[#F7B23B] to-[#AD7D29] py-1.5 px-4 rounded-lg">Mulai Sekarang</button>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>

                <p class="text-[16px] max-sm:text-[14px] text-[#4F4F4F] mt-2 text-left">*Harga masih bisa dinegosiasikan dan menyesuaikan dengan benefit yang ingin didapatkan.</p>
                <div class="swiper-pagination max-sm:hidden"></div>
            </div>
        </div>    
    </div>
</div>

<section class="my-10">
    <p class="max-sm:text-[29px] text-4xl font font-semibold text-black text-center mb-5 mt-5 max-sm:my-4 max-sm:mx-2 mx-20 relative z-10">Paket <span class="italic">Bundling</span></p>

    <div class="flex flex-wrap justify-center gap-5 w-full max-sm:px-4 px-5">
    @foreach ($bundlings as $bundling)
    <div class="bg-white shadow-md p-5 max-sm:p-3 flex flex-col rounded-xl text-center w-[300px] max-sm:w-full"> <!-- Sesuaikan lebar card -->
        <p class="text-lg max-sm:text-[17px] font-semibold text-black leading-tight max-sm:min-h-[43px] min-h-[67px] customheight">{{ $bundling['category'] }}</p>
        <p class="text-lg max-sm:text-[16px] font-semibold text-[#70787D] mt-3 max-sm:mt-1.5 leading-none"><del>{{ $bundling['discount'] }}</del> <span class="text-white bg-[#EF5350] p-1 rounded-md">10%</span></p>
        <p class="text-[30px] max-sm:text-[22px] font-semibold text-[#3986A3] mt-3 max-sm:mt-1.5 leading-none flex-grow">{{ $bundling['price'] }}</p>
        <a href="{{ $bundling['link'] }}" target="_blank">
            <div class="flex justify-center mt-5 max-sm:mt-4 mb-1">
                <button class="text-white bg-gradient-to-r text-sm from-[#F7B23B] to-[#AD7D29] py-1.5 px-4 rounded-lg">Mulai Sekarang</button>
            </div>
        </a>
    </div>
    @endforeach
</div>
</section>
@endsection