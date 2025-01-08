@extends('layouts.main-new', [
    'title' => 'Berbinar Insightful Indonesia',
    'active' => 'Produk Berbinar',
    'page' => 'Konseling',
])

@section('content')
{{-- HERO SECTION --}}
<section class="relative">
    <div class="absolute left-0 top-5 max-sm:top-32 z-0">
        <img src="{{ asset('assets/images/landing/asset-konseling/vector/vector-hero1.svg') }}" alt="Vector" class="h-[500px] max-sm:h-[250px] w-auto">
    </div>

    <div class="absolute right-0 max-sm:-right-20 top-8 max-sm:top-40 z-0">
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
                    <img src="{{ asset('assets/images/landing/asset-konseling/vector/vector-hero.svg') }}" alt="Konseling" class="h-[340px] max-sm:h-[320px] w-auto">
                </div>
                
                <div class="lg:order-3">
                    <h2 class="text-5xl max-sm:text-3xl font-bold text-gradient py-2">Konseling</h2>  
                </div>

                <div class="lg:order-4">
                    <p class="text-[#70787D] text-justify max-sm:text-[15px] text-lg max-lg:text-[17px]">
                        Dapatkan konseling yang mengubah hidup dari para psikolog dan peer counselor untuk mencapai pertumbuhan pribadi yang 
                        luar biasa. Segera temukan solusi yang tepat untuk masalah yang Anda hadapi dan mulai menapaki jalan menuju hidup yang lebih baik.
                    </p>
                </div>

                <div class="flex justify-start lg:order-5">
                    <button class="text-white bg-gradient-to-r max-sm:text-[15px] text-md from-[#3986A3] to-[#225062] py-2 px-4 max-sm:px-6 rounded-xl max-sm:rounded-md">Lakukan Konseling</button>
                </div>
            </div>

            <div class="flex max-md:hidden flex-initial max-lg:flex-1 items-center justify-center w-full lg:w-auto">
                <img src="{{ asset('assets/images/landing/asset-konseling/vector/vector-hero.svg') }}" alt="Konseling" class="h-[340px] max-lg:h-[320px] w-auto">
            </div>
        </div>
    </div>
</section>

{{-- PSIKOLOG BERBINAR --}}
<section class="relative w-full">
    <div class="absolute top-4 max-sm:top-40 left-0 z-0">
        <img src="/assets/images/landing/asset-konseling/vector/vector-line.svg" alt="Vector Image" class="">
    </div>

    <div class="relative justify-center text-center mx-[320px] max-sm:mx-3 max-xl:mx-12 mt-28 z-10">
        <h1 class="max-sm:text-[29px] text-4xl font font-semibold text-black">Psikolog <span class="bg-[#3886A3] text-white px-2 ">Berbinar</span></h1>
        <p class="text-[#70787D] max-sm:text-[15px] text-lg mt-2">
            Tim kami terdiri dari psikolog berpengalaman, membantu Anda menavigasi hidup dengan bijaksana, memberikan dukungan emosional
        </p>
    </div>

    <div class="swiper mt-10" id="swiperPsikolog">
        <div class="swiper-wrapper">
            @foreach ($psikologs as $psikolog)
            <div class="swiper-slide">
                <div class="flex flex-col items-center">
                    <img src="{{ asset($psikolog['image']) }}" alt="{{ $psikolog['name'] }}" class="h-[180px] max-sm:h-[140px] w-auto">
                    <p class="text-lg max-sm:text-[16px] text-black font-semibold text-center mt-2">
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
        
        <div class="swiper-scrollbar hidden max-lg:flex"></div>
    </div>
</section>

{{-- PSIKOLOG COUNSELING SCHEDULE --}}
<div class="bg-psikolog relative mt-24 mx-20 max-sm:mx-4 rounded-3xl p-10 bg-cover h-[400px] max-md:h-[1000px] max-md:overflow-hidden">
    <img src="/assets/images/landing/vector-curling-mobile.png" alt="Background" class="hidden max-md:flex absolute -top-[150px] left-0 rounded-t-3xl w-[1000px] h-[1000px] object-cover">
    {{-- <div 
        class="hidden max-md:flex absolute -top-[150px] left-0 rounded-t-3xl w-[1000px] h-[1000px] object-cover  mix-blend-multiply" 
        style="background-image: linear-gradient(to bottom, #003F56, #4FA5C5)">
    </div> --}}
    <div class="absolute inset-0 bg-[#2D6B8280] rounded-3xl flex max-md:hidden"></div>

    <div class="relative flex flex-col text-center space-y-4 justify-center">
        <h1 class="text-3xl max-sm:text-2xl text-white font-semibold ">Jadwalkan Konselingmu Bersama Psikolog Kami</h1>

        <div class="flex flex-row max-md:flex-col justify-center gap-x-20 max-md:gap-y-[270px] mx-20">
            <div class="mt-6 flex flex-col flex-1">
                <div class="flex flex-row items-center space-x-0.5 justify-center">
                    <p class="text-white text-2xl font-medium">Weekdays</p>
                    <img src="{{ asset('assets/images/landing/asset-konseling/vector/sun.png') }}" alt="Vector" class="h-5 w-auto">
                </div>

                <div x-data="{ tab: 'online' }" class="mt-2 w-full flex flex-col items-center">
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
                                        <p class="text-sm text-left text-[#70787D]">{{ $weekOn['description'] }}</p>
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
                    </div>
                    
                    <div class="relative w-full max-w-[270px] mx-auto flex justify-center">
                        <div x-show="tab === 'offline'" 
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
                                    @foreach ($weeksOff as $weekOff)
                                    <div class="flex gap-x-1">
                                        <img src="{{ asset('assets/images/landing/asset-konseling/vector/vector-centang.svg') }}" alt="Vector" class="h-5 w-auto">
                                        <p class="text-sm text-left text-[#70787D]">{{ $weekOff['description'] }}</p>
                                    </div>
                                    @endforeach
                                </div>
                                
                                <img src="{{ asset('assets/images/landing/asset-konseling/vector/vector-divider.svg') }}" alt="Vector" class="my-5 w-full">

                                <div class="space-y-1">
                                    <div class="space-y-1">
                                        @foreach ($weekdayPricesOff as $weekdayPriceOff)
                                        <div class="flex items-center justify-between">
                                            <p class="text-black text-sm min-w-28 text-left">{{ $weekdayPriceOff['session'] }}</p>
                                            <div class="h-0.5 w-6 bg-[#3986A3]"></div>
                                            <p class="text-black text-sm min-w-24 text-right">{{ $weekdayPriceOff['price'] }}</p>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-6 flex flex-col flex-1">
                <div class="flex flex-row items-center justify-center space-x-0.5">
                    <p class="text-white text-2xl font-medium">Weekend</p>
                    <img src="{{ asset('assets/images/landing/asset-konseling/vector/sunglasses.png') }}" alt="Vector" class="h-8 w-auto">
                </div>

                <div x-data="{ tab: 'online' }" class="mt-2 w-full flex flex-col items-center">
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
                                        <p class="text-sm text-left text-[#70787D]">{{ $weekOn['description'] }}</p>
                                    </div>
                                    @endforeach
                                </div>
                                
                                <img src="{{ asset('assets/images/landing/asset-konseling/vector/vector-divider.svg') }}" alt="Vector" class="my-5 w-full">

                                <div class="space-y-1">
                                    @foreach ($weekendPricesOn as $weekendPriceOn)
                                    <div class="flex items-center justify-between">
                                        <p class="text-black text-sm min-w-28 text-left">{{ $weekendPriceOn['session'] }}</p>
                                        <div class="h-0.5 w-6 bg-[#3986A3]"></div>
                                        <p class="text-black text-sm min-w-24 text-right">{{ $weekendPriceOn['price'] }}</p>
                                    </div>
                                    @endforeach
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                    <div class="relative w-full max-w-[270px] mx-auto flex justify-center">
                        <div x-show="tab === 'offline'" 
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
                                    @foreach ($weeksOff as $weekOff)
                                    <div class="flex gap-x-1">
                                        <img src="{{ asset('assets/images/landing/asset-konseling/vector/vector-centang.svg') }}" alt="Vector" class="h-5 w-auto">
                                        <p class="text-sm text-left text-[#70787D]">{{ $weekOff['description'] }}</p>
                                    </div>
                                    @endforeach
                                </div>
                                
                                <img src="{{ asset('assets/images/landing/asset-konseling/vector/vector-divider.svg') }}" alt="Vector" class="my-5 w-full">

                                <div class="space-y-1">
                                    @foreach ($weekendPricesOff as $weekendPriceOff)
                                    <div class="flex items-center justify-between">
                                        <p class="text-black text-sm min-w-28 text-left">{{ $weekendPriceOff['session'] }}</p>
                                        <div class="h-0.5 w-6 bg-[#3986A3]"></div>
                                        <p class="text-black text-sm min-w-24 text-right">{{ $weekendPriceOff['price'] }}</p>
                                    </div>
                                    @endforeach
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

</div>

{{-- PEER COUNSELOR BERBINAR --}}
<section>
    <div class="justify-center text-center mx-[320px] max-sm:mt-5 max-md:mt-20 mt-52 max-sm:mx-3 max-xl:mx-12">
        <h1 class="max-sm:text-[29px] text-4xl font font-semibold text-black">Peer Counselor <span class="bg-[#3886A3] text-white px-2 ">Berbinar</span></h1>
        <p class="text-[#70787D] max-sm:text-[15px] text-lg mt-2">
            Tim kami terdiri dari psikolog berpengalaman, membantu Anda menavigasi hidup dengan bijaksana, memberikan dukungan emosional
        </p>
    </div>

    <div class="swiper mt-10" id="swiperPeer">
        <div class="swiper-wrapper">
            @foreach ($peers as $peer)
            <div class="swiper-slide">
                <div class="flex flex-col items-center text-center">
                    <img src="{{ asset($peer['image']) }}" alt="{{ $peer['name'] }}" class="h-[180px] max-sm:h-[140px] w-auto">
                    <p class="text-lg max-sm:text-[16px] text-black font-semibold mt-2">{{ $peer['name'] }}</p>
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
        
        <div class="swiper-scrollbar hidden max-lg:flex"></div>
    </div>
</section>

{{-- PEER COUNSELOR COUNSELING SCHEDULE --}}
<div class="bg-psikolog relative mt-24 mx-20 max-sm:mx-4 rounded-3xl p-10 bg-cover h-[400px] max-md:h-[1000px] max-md:overflow-hidden">
    <img src="/assets/images/landing/vector-curling-mobile.png" alt="Background" class="hidden max-md:flex absolute -top-[150px] left-0 rounded-t-3xl w-[1000px] h-[1000px] object-cover">
    <div class="absolute inset-0 bg-[#2D6B8280] rounded-3xl flex max-md:hidden"></div>

    <div class="relative flex flex-col text-center space-y-5 justify-center">
        <h1 class="text-3xl text-white font-semibold ">Konseling Bersama Peer Counselor</h1>

        <div class="flex flex-row max-md:flex-col justify-center gap-x-20 max-md:gap-y-[50px] mx-20">
            <div class="mt-6 flex flex-1 justify-center">
                <div class="flex flex-col justify-between bg-white text-center p-4 rounded-2xl w-full max-w-[270px] max-md:min-w-[270px] mx-auto shadow-md">
                    <p class="text-md font-semibold text-black">Online👩‍💻</p>
                    <div class="flex flex-row justify-center items-center mt-4">
                        <p class="text-3xl font-semibold text-[#3986A3]">Rp45.000</p>
                        <p class="text-sm text-black">/jam</p>
                    </div>

                    <img src="{{ asset('assets/images/landing/asset-konseling/vector/vector-divider.svg') }}" alt="Vector" class="my-3 w-full">

                    <div class="space-y-1">
                        @foreach ($peerOnlines as $peerOnline)
                        <div class="flex gap-x-1">
                            <img src="{{ asset('assets/images/landing/asset-konseling/vector/vector-centang.svg') }}" alt="Vector" class="h-5 w-auto">
                            <p class="text-sm text-left text-[#70787D]">{{ $peerOnline['description'] }}</p>
                        </div>
                        @endforeach
                    </div>
                    
                    <div class="flex justify-center my-4">
                        <button class="text-white bg-gradient-to-r text-sm from-[#F7B23B] to-[#AD7D29] py-1.5 px-4 rounded-lg">Mulai Sekarang</button>
                    </div>
                </div>
            </div>

            <div class="mt-6 flex flex-1 justify-center">
                <div class="flex flex-col bg-white text-center p-4 rounded-2xl w-full max-w-[270px] max-md:min-w-[270px] mx-auto shadow-md">
                    <p class="text-md font-semibold text-black">Offline🙋‍♀️</p>
                    <div class="flex flex-row justify-center items-center mt-4">
                        <p class="text-3xl font-semibold text-[#3986A3]">Rp55.000</p>
                        <p class="text-sm text-black">/jam</p>
                    </div>

                    <img src="{{ asset('assets/images/landing/asset-konseling/vector/vector-divider.svg') }}" alt="Vector" class="my-3 w-full">

                    <div class="space-y-1">
                        @foreach ($peerOfflines as $peerOffline)
                        <div class="flex gap-x-1">
                            <img src="{{ asset('assets/images/landing/asset-konseling/vector/vector-centang.svg') }}" alt="Vector" class="h-5 w-auto">
                            <p class="text-sm text-left text-[#70787D]">{{ $peerOffline['description'] }}</p>
                        </div>
                        @endforeach
                    </div>
                    
                    <div class="flex justify-center my-4">
                        <button class="text-white bg-gradient-to-r text-sm from-[#F7B23B] to-[#AD7D29] py-1.5 px-4 rounded-lg">Mulai Sekarang</button>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

</div>

{{-- TESTIMONI USER --}}
<section class="mt-48 max-md:mt-0">
    <h1 class="max-sm:text-[29px] max-md:mx-10 text-4xl font font-semibold text-black text-center max-sm:mt-2 mt-8 max-sm:mx-2">Kata Mereka Setelah Konseling <span class="bg-primary text-white px-2 ">Berbinar</span> ?</h1>
    <div class="swiper-container swiperTestimoni">
        <div class="swiper-wrapper">
            {{-- User 1 --}}
            <div class="swiper-slide testimoni">
                <div class="bg-white rounded-3xl shadow-md flex flex-col justify-between max-sm:min-h-[340px] max-lg:min-h-[390px] min-h-[360px] max-sm:p-5 p-6">
                    <div class="flex justify-center">
                        <img src="{{ asset('assets/images/landing/vector-kutip.png') }}" alt="Kutip" class="max-sm:h-7 h-8 w-auto">
                    </div>
                    <!-- Ulasan User -->
                    <div class="py-4 text-center flex flex-col flex-grow">
                        <p class="max-sm:text-[15px] text-md text-black font-medium flex-grow text-justify max-sm:min-h-[180px] min-h-[192px]">
                            "Sesi konseling merubah pandang: tak masalah berubah demi orang lain. Dorongan jadi lebih baik. Lakukan yang dinginkan, tetap aman. Belajarlah. Lampiaskan sakit, geser ke positif, hargai diri dan peduli orang”
                        </p>
                    </div>
                    <!-- Profil User -->
                    <div class="flex flex-col items-center max-sm:mt-3 mt-6 text-center">
                        <img src="{{ asset('assets/images/landing/testimoni/user-ace.png') }}" alt="Kutip" class="-mt-3 max-sm:h-[62px] max-sm:w-[62px] h-[70px] w-[70px] rounded-full object-cover">
                        <p class="max-sm:text-[15px] text-lg text-black font-semibold">
                            Ace Pebri Ala
                        </p>
                    </div>
                </div>
            </div>

            {{-- User 2 --}}
            <div class="swiper-slide testimoni">
                <div class="bg-white rounded-3xl shadow-md flex flex-col justify-between max-sm:min-h-[340px] max-lg:min-h-[390px] min-h-[360px] max-sm:p-5 p-6">
                    <div class="flex justify-center">
                        <img src="{{ asset('assets/images/landing/vector-kutip.png') }}" alt="Kutip" class="max-sm:h-7 h-8 w-auto">
                    </div>
                    <!-- Ulasan User -->
                    <div class="py-4 text-center flex flex-col flex-grow">
                        <p class="max-sm:text-[15px] text-md text-black font-medium flex-grow text-justify max-sm:min-h-[180px] min-h-[192px]">
                            "Konseling sangat membantu, konselor ramah. Pertama kali cerita, terbantu menceritakan masalah yang selama ini takut dibagikan sebelumnya. Rasanya lega, tanpa beban dan validasi.
                            Kakak konselor memberi waktu dan kenyamanan."
                        </p>
                    </div>
                    <!-- Profil User -->
                    <div class="flex flex-col items-center max-sm:mt-3 mt-6 text-center">
                        <img src="{{ asset('assets/images/landing/testimoni/user-mellynda.png') }}" alt="Kutip" class="-mt-3 max-sm:h-[62px] max-sm:w-[62px] h-[70px] w-[70px] rounded-full object-cover">
                        <p class="max-sm:text-[15px] text-lg text-black font-semibold">
                            Mellynda Silanur Rohmah
                        </p>
                    </div>
                </div>
            </div>

            {{-- User 3 --}}
            <div class="swiper-slide testimoni">
                <div class="bg-white rounded-3xl shadow-md flex flex-col justify-between max-sm:min-h-[340px] max-lg:min-h-[390px] min-h-[360px] max-sm:p-5 p-6">
                    <div class="flex justify-center">
                        <img src="{{ asset('assets/images/landing/vector-kutip.png') }}" alt="Kutip" class="max-sm:h-7 h-8 w-auto">
                    </div>
                    <!-- Ulasan User -->
                    <div class="py-4 text-center flex flex-col flex-grow">
                        <p class="max-sm:text-[15px] text-md text-black font-medium flex-grow text-justify max-sm:min-h-[180px] min-h-[192px]">
                            "Konselor mendengarkan dan memerhatikan dengan seksama, memberi saran dan bimbingan spesifik. Dituntun dengan pertanyaan terkait permasalahan, sangat terbantu. Akan segera menyelesaikan tugas setelah konseling hari ini. "
                        </p>
                    </div>
                    <!-- Profil User -->
                    <div class="flex flex-col items-center max-sm:mt-3 mt-6 text-center">
                        <img src="{{ asset('assets/images/landing/testimoni/user-caroline.png') }}" alt="Kutip" class="-mt-3 max-sm:h-[62px] max-sm:w-[62px] h-[70px] w-[70px] rounded-full object-cover">
                        <p class="max-sm:text-[15px] text-lg text-black font-semibold">
                            Caroline Athalia Rianda
                        </p>
                    </div>
                </div>
            </div>

            {{-- User 4 --}}
            <div class="swiper-slide testimoni">
                <div class="bg-white rounded-3xl shadow-md flex flex-col justify-between max-sm:min-h-[340px] max-lg:min-h-[390px] min-h-[360px] max-sm:p-5 p-6">
                    <div class="flex justify-center">
                        <img src="{{ asset('assets/images/landing/vector-kutip.png') }}" alt="Kutip" class="max-sm:h-7 h-8 w-auto">
                    </div>
                    <!-- Ulasan User -->
                    <div class="py-4 text-center flex flex-col flex-grow">
                        <p class="max-sm:text-[15px] text-md text-black font-medium flex-grow text-justify max-sm:min-h-[180px] min-h-[192px]">
                            "Sesi konseling merubah pandang: tak masalah berubah demi orang lain. Dorongan jadi lebih baik. Lakukan yang dinginkan, tetap aman. Belajarlah. Lampiaskan sakit, geser ke positif, hargai diri dan peduli orang”
                        </p>
                    </div>
                    <!-- Profil User -->
                    <div class="flex flex-col items-center max-sm:mt-3 mt-6 text-center">
                        <img src="{{ asset('assets/images/landing/testimoni/user-ananda.png') }}" alt="Kutip" class="-mt-3 max-sm:h-[62px] max-sm:w-[62px] h-[70px] w-[70px] rounded-full object-cover">
                        <p class="max-sm:text-[15px] text-lg text-black font-semibold">
                            Ananda Deshinta Rasyid
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="swiper-pagination testimoni"></div>
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

{{-- CONTACT --}}
<div class="bg-wave relative my-20 max-sm:my-10 mx-20 max-sm:mx-4 rounded-3xl p-10 max-sm:p-2 bg-cover h-[280px] max-sm:max-h-[240px]">
    <div class="absolute inset-0 bg-gradient-to-b from-[#609EB5] to-[#15323D] rounded-3xl mix-blend-multiply"></div>

    <div class="relative flex flex-col text-center gap-y-7 max-sm:gap-y-3 justify-center items-center h-full">
        <h1 class="text-3xl max-sm:text-2xl text-white font-semibold ">Hubungi Kami Sekarang</h1>
        <p class="text-lg max-sm:text-[15px] text-white font-light">Buat janji dan lakukan konseling dengan tim Berbinar Insightful Indonesia untuk <br> layanan konseling online ataupun offline.</p>
        <div class="flex justify-center">
            <button class="text-black max-sm:text-[15px] font-semibold bg-white py-2 px-5 rounded-xl">Lihat Produk Berbinar</button>
        </div>
    </div>
</div>


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