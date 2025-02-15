@extends('layouts.main-new', [
    'title' => 'Berbinar Insightful Indonesia',
    'active' => 'Produk Berbinar',
    'page' => 'Konseling',
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
                    <img src="{{ asset('assets/images/landing/asset-konseling/vector/hero.png') }}" alt="Konseling" class="h-[340px] max-sm:h-[320px] w-auto object-contain">
                </div>
                
                <div class="lg:order-3">
                    <h2 class="text-5xl max-sm:text-3xl font-bold text-gradient py-2">Berbinar Konseling</h2>  
                </div>

                <div class="lg:order-4">
                    <p class="text-[#70787D] text-justify max-sm:text-[15px] max-sm:leading-normal text-lg max-lg:text-[17px]">
                        Merasa terjebak dalam rutinitas yang membosankan? Membutuhkan panduan untuk mengatasi masalah hidup? Konseling Berbinar solusinya! Bersama para psikolog dan peer counselor yang berpengalaman, 
                        Berbinar siap membantu klien untuk menemukan solusi tepat mengenai masalah yang dihadapi, dengan mencapai pertumbuhan untuk menuju hidup yang lebih baik.
                    </p>
                </div>

                <div id="openModal" class="flex justify-start lg:order-5">
                    <button class="text-white bg-gradient-to-r max-sm:text-[15px] text-md from-[#3986A3] to-[#225062] py-2 px-4 max-sm:px-6 rounded-xl max-sm:rounded-md">Lakukan Konseling</button>
                </div>

                <div id="modal" class="fixed hidden inset-0 flex items-center justify-center z-30 -top-6 max-sm:-top-2">
                    <div class="bg-[#D7E6ED] p-6 rounded-xl shadow-md overflow-y-auto max-h-screen h-auto w-[70%] max-lg:h-[90%] max-sm:w-[86%]">
                        <h2 class="text-2xl max-sm:text-xl font-bold text-gradient py-2 text-center">Syarat dan Ketentuan</h2>  
                        <ol class="list-decimal pl-5 mt-2 space-y-1 text-justify text-black max-sm:text-[15px]">
                            <li>
                                Lokasi offline Konseling:
                                <ol class="pl-1 mt-1 space-y-1">
                                    <li>a. Psikolog: Surabaya, Kediri, Sidoarjo, Denpasar, Samarinda, Jakarta, Malang, dan Kalimantan Utara (Tarakan)</li>
                                    <li>b. Peer Counselor: Bekasi, Jakarta, Tangerang Selatan, Padang, Wonogiri, dan Malang</li>
                                </ol>
                            </li>
                            <li>Melakukan pembayaran ke Bank Mandiri dengan no rekening 1400020763711 a.n. Berbinar Insightful Indonesia dengan aturan transfer 1×24 jam.</li>
                            <li>Tidak membalas pesan admin dalam 1×24 jam, pendaftaran oleh klien secara otomatis dibatalkan.</li>
                            <li>Tidak membalas pesan admin dalam 1×24 jam, jadwal yang sudah ditentukan oleh klien berhak untuk diubah oleh Tim Berbinar dan kesepakatan dari klien.</li>
                            <li>Tidak membalas pesan admin dalam 2×24 jam setelah melakukan pembayaran, pembayaran dianggap hangus.</li>
                            <li>Pengajuan proses pembatalan layanan konseling dapat dilakukan dalam kurun waktu 1×24 jam setelah proses administrasi dan dana yang telah dibayarkan akan dikembalikan 100%.</li>
                        </ol>
                        <div class="flex justify-end gap-x-3 mt-4">
                            <button id="closeModal" class="px-4 py-1.5 max-sm:text-[15px] font-medium rounded-md bg-transparent border-[1.5px] text-black border-[#225062]">Kembali</button>
                            <button id="" class="px-4 py-1.5 text-white max-sm:text-[15px] font-medium rounded-md bg-gradient-to-r from-[#3986A3] to-[#225062]">Daftar</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex max-md:hidden flex-initial max-lg:flex-1 items-center justify-center w-full lg:w-auto">
                <img src="{{ asset('assets/images/landing/asset-konseling/vector/hero.png') }}" alt="Konseling" class="h-[340px] max-lg:h-[320px] w-auto">
            </div>
        </div>
    </div>
</section>


{{-- KONSELING --}}
<section class="relative w-full">
    <div class="absolute top-4 max-sm:top-40 left-0 z-0">
        <img src="/assets/images/landing/asset-konseling/vector/vector-line.svg" alt="Vector Image" class="">
    </div>

    <p class="max-sm:text-2xl text-4xl font font-semibold text-black text-center max-sm:mt-[60px] max-md:mt-16 mt-24 mb-6 max-sm:my-4 max-sm:mx-2 mx-20 relative z-10">Tentukan Kebutuhan Konselingmu</p>

    <div class="sm:block hidden">
        <div class="swiperContainer">
            <div class="swiper" id="swiperKonseling">            
                <div class="swiper-wrapper">
                    @foreach ($konselings as $konseling)
                        <div class="swiper-slide">
                            <div class="bg-white text-center justify-start max-sm:p-4 p-5 flex flex-col shadow-md rounded-xl h-auto min-h-[468px] max-sm:min-h-[450px] max-md:min-h-[515px] max-lg:min-h-[538px] w-auto">
                                <p class="text-gradient font-semibold text-2xl max-sm:text-xl leading-tight max-sm:min-h-0 lg:min-h-0 min-h-[60px]">{{ $konseling['name'] }}</p>
                                <img src="{{ asset($konseling['image']) }}" alt="{{ $konseling['name'] }}" class="h-32 w-auto max-sm:h-24 mx-auto mt-4">
                                <img src="{{ asset('assets/images/landing/asset-konseling/vector/vector-divider.svg') }}" alt="Vector" class="my-4 w-full">

                                <div>
                                    @foreach ($konseling['description'] as $desc)
                                        <div class="flex flex-row items-start gap-x-2">
                                            <img src="{{ asset('assets/images/landing/asset-tentang/green-check.svg') }}" alt="Vector" class="h-[18px] w-[18px] max-sm:h-4 max-sm:w-4">
                                            <p class="text-[#70787D] text-[16px] max-sm:text-[15px] text-justify -mt-0.5">{{ $desc }}</p>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="swiper-pagination hidden sm:block"></div>
                <div class="pt-10">
                    <div class="swiper-scrollbar block sm:hidden"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="sm:hidden block z-10 relative">
        <div class="grid grid-cols-1 gap-3 mx-4">
            @foreach ($konselings as $konseling)
            <div class="bg-white shadow-md p-4 flex flex-col rounded-xl">
                <div class="flex flex-row items-center space-x-3 mb-3">
                    <img src="{{ asset($konseling['image']) }}" alt="{{ $konseling['name'] }}" class="h-20 w-auto">
                    <p class="text-gradient font-semibold text-[19px] leading-tight">{{ $konseling['name'] }}</p>
                </div>
                <div>
                    @foreach ($konseling['description'] as $desc)
                        <div class="flex flex-row items-start gap-x-2">
                            <img src="{{ asset('assets/images/landing/asset-tentang/green-check.svg') }}" alt="Vector" class="h-[18px] w-[18px] max-sm:h-4 max-sm:w-4">
                            <p class="text-[#70787D] text-[16px] max-sm:text-[15px] text-justify -mt-0.5">{{ $desc }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


{{-- PSIKOLOG BERBINAR --}}
<section class="relative w-full">
    <div class="relative justify-center text-center mx-[320px] max-sm:mt-12 max-sm:mx-3 max-xl:mx-12 mt-8 z-10">
        <h1 class="max-sm:text-[29px] text-4xl font font-semibold text-black">Psikolog <span class="bg-[#3886A3] text-white px-2 ">Berbinar</span></h1>
        <p class="text-[#70787D] max-sm:text-[15px] text-lg mt-2 max-sm:leading-snug">
            Tim kami terdiri dari psikolog berpengalaman, membantu Anda menavigasi hidup dengan bijaksana, memberikan dukungan emosional
        </p>
    </div>

    <div class="swiperContainer">
        <div class="swiper mt-10" id="swiperPsikolog">
            <div class="swiper-wrapper">
                @foreach ($psikologs as $psikolog)
                <div class="swiper-slide">
                    <div class="flex flex-col items-center">
                        <img src="{{ asset($psikolog['image']) }}" alt="{{ $psikolog['name'] }}" class="h-[180px] max-sm:h-[140px] w-auto">
                        <p class="text-lg max-sm:text-[16px] text-black font-semibold text-center mt-2 max-sm:leading-snug">
                            {{ $psikolog['name'] }}<br>{{ $psikolog['title'] }}
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
        
            <div class="flex max-lg:hidden">
                <div class="swiper-button-prev">
                    <img src="{{ asset('assets/images/landing/asset-konseling/vector/left-navigation.svg') }}" class="w-3 h-auto" />
                </div>
                <div class="swiper-button-next">
                    <img src="{{ asset('assets/images/landing/asset-konseling/vector/right-navigation.svg') }}" class="w-3 h-auto" />
                </div>
            </div>
            
            <div class="pt-10 max-sm:pt-4">
                <div class="swiper-scrollbar hidden max-lg:flex"></div>
            </div>
        </div>
    </div>
</section>


{{-- JADWAL KONSELING PSIKOLOG --}}
<div class="bg-psikolog relative mt-24 mx-20 max-sm:mx-4 rounded-3xl p-10 bg-cover bg-center h-[300px] max-md:h-[800px] max-md:overflow-hidden">
    <img src="/assets/images/landing/vector-curling-mobile.png" alt="Background" class="hidden max-md:flex absolute -top-[150px] left-0 rounded-t-3xl w-[1000px] h-[820px] object-cover">
    <div class="absolute inset-0 bg-[#2D6B8280] rounded-3xl flex max-md:hidden"></div>

    <div class="relative flex flex-col text-center space-y-4 justify-center">
        <h1 class="text-3xl max-sm:text-2xl text-white font-semibold ">Jadwalkan Konselingmu Bersama Psikolog Kami</h1>

        <div class="flex flex-row max-md:flex-col justify-center gap-x-20 max-md:gap-y-[250px] mx-20">
            <div class="mt-6 flex flex-col flex-1">
                <div class="flex flex-row items-center space-x-0.5 justify-center">
                    <p class="text-white text-2xl font-medium italic">Weekdays</p>
                    <img src="{{ asset('assets/images/landing/asset-konseling/vector/sun.png') }}" alt="Vector" class="h-5 w-auto">
                </div>

                <div class="relative w-full max-w-[270px] mx-auto flex justify-center mt-3">
                    <div class="absolute bg-white py-4 px-10 max-sm:px-6 max-md:px-8 max-xl:p-4 rounded-xl shadow-md bg-opacity-90 backdrop-blur-sm">
                        <p class="text-md font-semibold text-black italic">Online</p>
                        <div class="flex flex-row justify-center items-center mt-1">
                            <p class="text-3xl max-lg:text-2xl font-semibold text-[#3986A3]">Rp150.000</p>
                            <p class="text-sm text-black">/1jam</p>
                        </div>

                        <p class="text-md font-semibold text-black italic mt-4">Offline</p>
                        <div class="flex flex-row justify-center items-center mt-1">
                            <p class="text-3xl max-lg:text-2xl font-semibold text-[#3986A3]">Rp175.000</p>
                            <p class="text-sm text-black">/1jam</p>
                        </div>

                        <div class="flex justify-center mt-4 mb-1">
                            <button class="text-white bg-gradient-to-r text-sm from-[#F7B23B] to-[#AD7D29] py-1.5 px-4 rounded-lg">Mulai Sekarang</button>
                        </div>
                    </div>
                </div>
                {{-- <div x-data="{ tab: 'online' }" class="mt-2 w-full flex flex-col items-center">
                    <!-- Tab Navigation -->
                    <div class="flex justify-between mb-4 p-1 bg-white shadow-md max-w-64 rounded-2xl items-center">
                        <button 
                            @click="tab = 'online'" 
                            :class="{'bg-gradient-to-r from-[#3986A3] to-[#15323D] font-medium text-white': tab === 'online'}" 
                            class="py-2 px-7 rounded-xl text-[#3986A3] font-medium">
                            Online
                        </button>
                        <button 
                            @click="tab = 'offline'" 
                            :class="{'bg-gradient-to-r from-[#3986A3] to-[#15323D] font-medium text-white': tab === 'offline'}" 
                            class="py-2 px-7 rounded-xl text-[#3986A3] font-medium">
                            Offline
                        </button>
                    </div>

                    <div class="relative w-full max-w-[270px] mx-auto flex justify-center">
                        <div x-show="tab === 'online'" 
                            x-transition:enter="transition transform ease-in duration-500"
                            x-transition:enter-start="translate-y-4 opacity-0" 
                            x-transition:enter-end="translate-y-0 opacity-100"
                            x-transition:leave="transition transform ease-out duration-500"
                            x-transition:leave-start="translate-y-0 opacity-100" 
                            x-transition:leave-end="translate-y-4 opacity-0"
                            x-cloak 
                            class="absolute bg-white p-4 rounded-xl shadow-md">
                            <div class="flex flex-col">
                                <div class="space-y-1">
                                    @foreach ($weeksOn as $weekOn)
                                    <div class="flex gap-x-1">
                                        <img src="{{ asset('assets/images/landing/asset-konseling/vector/vector-centang.svg') }}" alt="Vector" class="h-5 w-auto">
                                        <p class="text-sm text-justify text-[#70787D]">{{ $weekOn['description'] }}</p>
                                    </div>
                                    @endforeach
                                </div>
                                
                                <img src="{{ asset('assets/images/landing/asset-konseling/vector/vector-divider.svg') }}" alt="Vector" class="my-5 w-full">

                                <div class="space-y-1">
                                    @foreach ($weekdayPricesOn as $weekdayPriceOn)
                                    <div class="flex items-center justify-between">
                                        <p class="text-black text-sm min-w-28 text-left">{{ $weekdayPriceOn['session'] }}</p>
                                        <div class="h-0.5 w-6 bg-[#3986A3]"></div>
                                        <p class="text-black text-sm min-w-24 text-right">{{ $weekdayPriceOn['price'] }}</p>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div> --}}
            </div>

            <div class="mt-6 flex flex-col flex-1">
                <div class="flex flex-row items-center justify-center space-x-0.5">
                    <p class="text-white text-2xl font-medium italic">Weekend</p>
                    <img src="{{ asset('assets/images/landing/asset-konseling/vector/sunglasses.png') }}" alt="Vector" class="h-8 w-auto">
                </div>

                <div class="relative w-full max-w-[270px] mx-auto flex justify-center mt-3">
                    <div class="absolute bg-white py-4 px-10 max-sm:px-6 max-md:px-8 max-xl:p-4 rounded-xl shadow-md bg-opacity-90 backdrop-blur-sm">
                        <p class="text-md font-semibold text-black italic">Online</p>
                        <div class="flex flex-row justify-center items-center mt-1">
                            <p class="text-3xl max-lg:text-2xl font-semibold text-[#3986A3]">Rp200.000</p>
                            <p class="text-sm text-black">/1jam</p>
                        </div>

                        <p class="text-md font-semibold text-black italic mt-4">Offline</p>
                        <div class="flex flex-row justify-center items-center mt-1">
                            <p class="text-3xl max-lg:text-2xl font-semibold text-[#3986A3]">Rp225.000</p>
                            <p class="text-sm text-black">/1jam</p>
                        </div>

                        <div class="flex justify-center mt-4 mb-1">
                            <button class="text-white bg-gradient-to-r text-sm from-[#F7B23B] to-[#AD7D29] py-1.5 px-4 rounded-lg">Mulai Sekarang</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- PEER COUNSELOR BERBINAR --}}
<section>
    <div class="justify-center text-center mx-[320px] max-sm:mt-5 max-md:mt-20 mt-60 max-sm:mx-3 max-xl:mx-12">
        <h1 class="max-sm:text-[29px] text-4xl font font-semibold text-black">Peer Counselor <span class="bg-[#3886A3] text-white px-2 ">Berbinar</span></h1>
        <p class="text-[#70787D] max-sm:text-[15px] text-lg mt-2 max-sm:leading-snug">
            Tim kami terdiri dari psikolog berpengalaman, membantu Anda menavigasi hidup dengan bijaksana, memberikan dukungan emosional
        </p>
    </div>

    <div class="swiperContainer">
        <div class="swiper mt-10" id="swiperPeer">
            <div class="swiper-wrapper">
                @foreach ($peers as $peer)
                <div class="swiper-slide">
                    <div class="flex flex-col items-center text-center">
                        <img src="{{ asset($peer['image']) }}" alt="{{ $peer['name'] }}" class="h-[180px] max-sm:h-[140px] w-auto">
                        <p class="text-lg max-sm:text-[16px] text-black font-semibold mt-2 max-sm:leading-snug">{{ $peer['name'] }}</p>
                        <p class="text-sm text-[#70787D]">{{ $peer['region'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        
            <div class="hidden max-lg:hidden">
                <div class="swiper-button-prev">
                    <img src="{{ asset('assets/images/landing/asset-konseling/vector/left-navigation.svg') }}" class="w-3 h-auto" />
                </div>
                <div class="swiper-button-next">
                    <img src="{{ asset('assets/images/landing/asset-konseling/vector/right-navigation.svg') }}" class="w-3 h-auto" />
                </div>
            </div>
            
            <div class="pt-10">
                <div class="swiper-scrollbar hidden max-lg:flex"></div>
            </div>
        </div>
    </div>
</section>


{{-- PEER COUNSELOR COUNSELING SCHEDULE --}}
<div class="bg-psikolog relative mt-24 mx-20 max-sm:mx-4 rounded-3xl p-10 bg-cover h-[280px] max-md:h-[800px] max-md:overflow-hidden">
    <img src="/assets/images/landing/vector-curling-mobile.png" alt="Background" class="hidden max-md:flex absolute -top-[150px] left-0 rounded-t-3xl w-[1000px] h-[750px] object-cover">
    <div class="absolute inset-0 bg-[#2D6B8280] rounded-3xl flex max-md:hidden"></div>

    <div class="relative flex flex-col text-center space-y-5 justify-center">
        <h1 class="text-3xl text-white font-semibold ">Konseling Bersama Peer Counselor</h1>

        <div class="flex flex-row max-md:flex-col justify-center gap-x-20 max-md:gap-y-[250px] mx-20">
            <div class="mt-6 flex flex-1 justify-center">
                <div class="relative w-full max-w-[270px] mx-auto flex justify-center">
                    <div class="absolute bg-white py-4 px-6 max-sm:px-6 max-md:px-8 max-xl:p-4 rounded-xl shadow-md bg-opacity-90 backdrop-blur-sm">
                        <p class="text-md font-semibold text-black"><span class="italic">Online</span>👩‍💻</p>
                        <p class="text-sm text-justify text-[#70787D] mt-2">Lakukan dimanapun dan kapanpun melalui zoom meeting</p>
                        <div class="flex flex-row justify-center items-center mt-2">
                            <p class="text-3xl max-lg:text-2xl font-semibold text-[#3986A3]">Rp45.000</p>
                            <p class="text-sm text-black">/1jam</p>
                        </div>

                        <div class="flex justify-center mt-5 mb-1">
                            <button class="text-white bg-gradient-to-r text-sm from-[#F7B23B] to-[#AD7D29] py-1.5 px-4 rounded-lg">Mulai Sekarang</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-6 flex flex-1 justify-center">
                <div class="relative w-full max-w-[270px] mx-auto flex justify-center">
                    <div class="absolute bg-white py-4 px-6 max-sm:px-6 max-md:px-8 max-xl:p-4 rounded-xl shadow-md bg-opacity-90 backdrop-blur-sm">
                        <p class="text-md font-semibold text-black"><span class="italic">Offline</span>🗣️</p>
                        <p class="text-sm text-justify text-[#70787D] mt-2">Tentukan tempat dan waktu yang nyaman untuk berbicara langsung</p>
                        <div class="flex flex-row justify-center items-center mt-2">
                            <p class="text-3xl max-lg:text-2xl font-semibold text-[#3986A3]">Rp55.000</p>
                            <p class="text-sm text-black">/1jam</p>
                        </div>

                        <div class="flex justify-center mt-5 mb-1">
                            <button class="text-white bg-gradient-to-r text-sm from-[#F7B23B] to-[#AD7D29] py-1.5 px-4 rounded-lg">Mulai Sekarang</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

</div>

{{-- TESTIMONI USER --}}
<section class="mt-40 max-md:mt-0">
    <h1 class="max-sm:text-[29px] max-md:mx-10 text-4xl font font-semibold text-black text-center max-sm:mt-2 mt-8 max-sm:mx-2">Kata Mereka Setelah Konseling <span class="bg-primary text-white px-2 ">Berbinar</span> ?</h1>
    <div class="swiperContainer">
        <div class="swiper" id="swiperTestimoni">
            <div class="swiper-wrapper max-sm:pb-8 pb-1">
                @foreach ($testimonis as $testimoni)
                <div class="swiper-slide">
                    <div class="bg-white rounded-3xl shadow-md flex flex-col justify-center text-center items-center h-auto w-auto p-5">
                        <img src="{{ asset('assets/images/landing/vector-kutip.png') }}" alt="Kutip" class="max-sm:h-7 h-8 w-auto">
    
                        <div class="pt-4 text-center flex flex-col flex-grow">
                            <p class="max-sm:text-[15px] max-sm:leading-tight max-md:leading-snug text-[16px] text-black font-medium flex-grow text-justify max-sm:min-h-[195px] max-lg:min-h-[240px] min-h-[216px]">
                                {{ $testimoni['comment'] }}
                            </p>
                        </div>
                        
                        <div class="flex flex-col items-center max-sm:mt-1 mt-5 max-lg:mt-2 text-center">
                            <img src="{{ asset($testimoni['image']) }}" alt="Kutip" class="max-sm:h-14 h-[70px] w-auto rounded-full">
                            <p class="max-sm:text-[15px] text-[17px] text-black font-semibold">
                                {{ $testimoni['name'] }}
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="swiper-pagination hidden sm:block"></div>
            <div class="swiper-scrollbar block sm:hidden"></div>

        </div>
    </div>
</section>

{{-- FAQS --}}
<section class="z-10 mx-4 sm:mx-20">
    <ul class="flex flex-col">
        @php
            $index = 0;
        @endphp
        @foreach ($faqs as $faq)
            <li class="border bg-white py-2 shadow-sm rounded-lg my-2" x-data="accordion({{ $index }})" :class="isActive()">
                <div class="flex flex-row mx-2 sm:mx-5">
                    <div class="flex flex-col w-full p-3 max-sm:p-2">
                        <h2 @click="handleClick()" class="font-medium cursor-pointer text-lg max-sm:text-[16.5px]">
                            <span>{{ $faq['question'] }}</span>
                        </h2>
                        <div x-ref="tab" :style="handleToggle()" class="overflow-hidden max-h-0 duration-500 transition-all">
                            <p class="mt-3 max-sm:mt-2 text-[#6F6C90] text-justify max-sm:text-[15px]">{{ $faq['answer'] }}</p>
                        </div>
                    </div>

                    <div class="items-center ml-6 hidden sm:flex">
                        <template x-if="$store.accordion.tab === idx">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20 20L4 4M20 4L4 20" stroke="#3986A3" stroke-width="3" stroke-linecap="round"/>
                            </svg>   
                        </template>
                        <template x-if="$store.accordion.tab !== idx">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_7503_13741)">
                                <path d="M22.3996 8L11.9996 19.2L1.59961 8" stroke="#3986A3" stroke-width="3" stroke-linecap="square"/></g><defs><clipPath id="clip0_7503_13741"><rect width="24" height="24" fill="white"/></clipPath></defs>
                            </svg>                                
                        </template>
                    </div>
                </div>

                
            </li>
            @php
                $index++;
            @endphp
        @endforeach
    </ul>
</section>


{{-- SCRIPT ACCORDION FAQS --}}
<script>
    document.addEventListener('alpine:init', () => {
        Alpine.store('accordion', {
            tab: 0
        });

        Alpine.data('accordion', (idx) => ({
            init() {
                this.idx = idx;
            },
            idx: -1,
            handleClick() {
                this.$store.accordion.tab = this.$store.accordion.tab === this.idx ? 0 : this.idx;
            },
            handleRotate() {
                return this.$store.accordion.tab === this.idx ? 'rotate-180' : '';
            },
            handleToggle() {
                return this.$store.accordion.tab === this.idx ?
                    `max-height: ${this.$refs.tab.scrollHeight}px` : '';
            },
            isActive() {
                return this.$store.accordion.tab === this.idx ? 'border-active' : '';
            },
        }));
    })
</script>

<script>
    document.getElementById('openModal').addEventListener('click', function() {
        document.getElementById('modal').classList.remove('hidden');
    });

    document.getElementById('closeModal').addEventListener('click', function() {
        document.getElementById('modal').classList.add('hidden');
    });

    allModals = ['.modal1', '.modal2', '.modal3'];
    const modalin = document.querySelector('.modalin');
    const header = document.querySelector('.header');
    const hero = document.querySelector('.hero');

    const openModal = (modal) => {
        const modalOpen = document.querySelector(modal);
        modalOpen.classList.remove('hidden');
        modalin.classList.remove('hidden');
        header.classList.remove('fixed');
        hero.style.height = '33rem';
    }

    const closeModal = (modal) => {
        const modalClose = document.querySelector(modal);
        modalClose.classList.add('hidden');
        modalin.classList.add('hidden');
        header.classList.add('fixed');
        hero.style.height = '';
    }

    document.querySelectorAll('.openModal').forEach(button => {
        button.addEventListener('click', () => {
            const modalIndex = button.dataset.modalIndex;
            openModal(allModals[modalIndex]);
        });
    });


    document.querySelectorAll('.closeModal').forEach(button => {
        button.addEventListener('click', () => {
            const modalIndex = button.dataset.modalIndex;
            closeModal(allModals[modalIndex]);
        });
    });

</script>
@endsection