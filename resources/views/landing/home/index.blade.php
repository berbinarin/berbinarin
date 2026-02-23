@extends('landing.layouts.app', [
    'title' => 'Berbinar Insightful Indonesia',
])

@section('style')
    <style>
        .bg-hero {
            background-image: url({{ $theme['hero']['bg'] }});
            /* background-image: url('/assets/images/landing/asset-beranda/bg-hero.webp'); */
        }

        #swiperProduk {
            width: 900px;
            margin: 20px auto;
            overflow: hidden;
        }

        #swiperTestimoni {
            width: 900px;
            margin: 20px auto;
            overflow: hidden;
            padding-bottom: 10px;
        }

        .swiper-pagination {
            position: relative;
            margin-top: 15px;
            text-align: center;
        }

        .swiper-pagination-bullet {
            background-color: #d0d0d0;
            opacity: 1;
            height: 8px;
            width: 8px;
            transition:
                width 0.3s,
                height 0.3s,
                background-color 0.3s;
        }

        .swiper-pagination-bullet-active {
            background-color: {{ $theme['learn_more']['swiper_pagination_active'] ?? '#3886a3' }};
            width: 16px;
            height: 8px;
            border-radius: 10px;
        }

        .swiper-scrollbar {
            --swiper-scrollbar-border-radius: 10px;
            --swiper-scrollbar-top: auto;
            --swiper-scrollbar-bottom: 4px;
            --swiper-scrollbar-left: auto;
            --swiper-scrollbar-right: 4px;
            --swiper-scrollbar-sides-offset: 1%;
            --swiper-scrollbar-bg-color: #d4d4d4;
            --swiper-scrollbar-drag-bg-color: #087241;
            --swiper-scrollbar-size: 10px;
        }

        .bg-content {
            background-image: url('/assets/images/landing/asset-beranda/bg-content-lebaran.png');
        }

        .sosmed-section {
            position: relative;
            overflow: hidden;
        }

        .embed-box {
            border-radius: 20px;
            overflow: hidden;
            width: 320px;
            max-width: 100%;
            transform: scale(0.8);
            transform-origin: center;
            height: 610px;
        }

        /* Custom Responsive breakpoint */
        @media (max-width: 400px) {
            .judul-mini {
                font-size: 33px;
            }

            .deskripsi-mini {
                font-size: 14px;
            }

            /* .bg-mini {
            height: 100vh;
        } */

            .stats-mini {
                position: absolute;
                bottom: -270px;
            }

            .text-mini {
                margin-top: 310px;
            }
        }

        @media (max-width: 850px) {
            #navLinks {
                display: none;
            }

            #burgerMenu {
                display: block;
            }
        }

        @media (min-width: 851px) {
            #navLinks {
                display: flex;
            }

            #burgerMenu {
                display: none;
            }
        }

        /* Responsive breakpoint */
        @media (max-width: 640px) {
            .swiperContainer {
                overflow: hidden;
                margin: 0px 16px;
            }

            #swiperProduk {
                width: 500px;
            }

            #swiperTestimoni {
                width: 510px;
            }

            .bg-hero {
                background-image: url({{ $theme['hero']['bg_mobile'] }});
                /* background-image: url('/assets/images/landing/asset-beranda/bg-hero-mobile-taru.webp'); */
            }

            .bg-content {
                background-image: url('/assets/images/landing/asset-beranda/bg-content-mobile-lebaran.png');
            }
        }

        @media (min-width: 641px) and (max-width: 767px) {
            #swiperProduk {
                width: 550px;
            }

            #swiperTestimoni {
                width: 580px;
            }

            .swiperContainer {
                overflow: hidden;
                margin: 0px 80px;
            }
        }

        @media (min-width: 768px) and (max-width: 992px) {
            #swiperProduk {
                width: 800px;
                margin: 20px auto;
            }

            .swiperContainer {
                overflow: hidden;
                margin: 0px 80px;
            }
        }

        @media (min-width: 768px) and (max-width: 1024px) {
            #swiperTestimoni {
                width: 850px;
                margin: 20px auto;
            }

            .swiperContainer {
                overflow: hidden;
                margin: 0px 80px;
            }
        }

        @media (min-width: 1280px) {}

        #firecrackers-overlay img {
            max-width: 800px;
            width: 400px;
            height: auto;
        }

        #ketupat-overlay img {
            width: 100vw;
            height: 100vh;
            object-fit: cover;
            display: block;
        }

        @media (min-width: 1024px) {
            #firecrackers-overlay img {
                max-width: 420px;
                width: 40vw;
            }

            #ketupat-overlay img {
                width: 80vw;
            }
        }

        @keyframes zibairunnin-move {
            0% {
                left: 100vw;
            }

            100% {
                left: -400px;
            }
        }
    </style>
@endsection

@section('content')
    <!-- petasan cina -->
    @if ($theme['name'] === 'imlek')
        <div id="firecrackers-bg"
            style="position: fixed; z-index: 9998; top: 0; left: 0; width: 100vw; height: 100vh; background: rgba(0, 0, 0, 0.7); display: flex; align-items: center; justify-content: center">
        </div>
        <div id="firecrackers-overlay"
            style="position: fixed; z-index: 9999; top: 0; left: 0; width: 100vw; height: 100vh; display: none; align-items: center; justify-content: center">
            <div id="firecrackers-desktop"
                style="display: none; width: 100vw; height: 100vh; justify-content: space-between; align-items: center">
                <img src="{{ asset('assets/images/landing/asset-beranda/firecrackers.gif') }}" alt="Firecrackers"
                    style="max-width: 420px; width: 40vw; height: auto" />
                <img src="{{ asset('assets/images/landing/asset-beranda/firecrackers.gif') }}" alt="Firecrackers"
                    style="max-width: 420px; width: 40vw; height: auto; transform: scaleX(-1)" />
            </div>
            <div id="firecrackers-mobile" style="display: none">
                <img src="{{ asset('assets/images/landing/asset-beranda/firecrackers.gif') }}" alt="Firecrackers"
                    style="max-width: 400px; width: 80vw; height: auto" />
            </div>
        </div>
        <!-- Zibairunnin GIF-->
        <div id="zibairunnin-gif"
            style="position: fixed; z-index: 10000; top: 20%; left: 100vw; width: 700px; height: auto; pointer-events: none; display: none">
            <img src="{{ asset('assets/images/landing/asset-beranda/zibairunnin.gif') }}" alt="Zibairunnin"
                style="width: 100%; height: auto" />
        </div>
    @endif

    <!-- animasi lebaran -->
    @if ($theme["name"] === "lebaran")
        <div id="ketupat-bg" style="position: fixed; z-index: 9998; top: 0; left: 0; width: 100vw; height: 100vh; background: rgba(255, 255, 255, 0.7); display: flex; align-items: center; justify-content: center"></div>
        <div id="ketupat-overlay" style="position: fixed; z-index: 9999; top: 0; left: 0; width: 100vw; height: 100vh; display: none; align-items: center; justify-content: center; padding: 0; margin: 0">
            <img src="{{ asset("assets/images/landing/asset-beranda/ketupat.gif") }}" alt="Ketupat" />
        </div>
    @endif

    <!-- HERO SECTION -->
    <section class="bg-mini bg-hero relative h-[110vh] w-full bg-cover max-lg:bg-center max-sm:h-[90vh]">
        <!-- <div class="absolute inset-0 z-10 bg-gradient-to-r from-[#9CC3D1] to-transparent max-sm:bg-[#9CC3D1] max-sm:opacity-70"></div> -->
        @if ($theme['name'] === 'default')
            <div
                class="absolute inset-0 z-10 bg-gradient-to-r from-[#9CC3D1] to-transparent max-sm:bg-[#9CC3D1] max-sm:opacity-70">
            </div>
        @endif

        <div class="relative z-20 flex h-full items-center px-14 text-left max-sm:px-4">
            <div class="{{ $theme['hero']['text_color'] }} flex flex-col justify-center max-sm:w-full">
                <h1 class="judul-mini text-6xl font-semibold max-md:text-5xl max-sm:text-[40px]">
                    Edukasi & Layanan
                    <br />
                    Psikologi
                    <!-- <span class="text-[#3886A3]">Berbinar</span> -->
                    <!-- <span class="text-[#FFBB48]">Berbinar</span> -->
                    <span class="text-[{{ $theme['hero']['color_berbinar'] }}]">Berbinar</span>
                </h1>
                <p
                    class="deskripsi-mini mt-4 w-3/5 text-justify text-lg font-normal text-[#fffff] max-lg:w-3/4 max-md:text-[17px] max-sm:w-full max-sm:text-[15px] max-sm:leading-relaxed">
                    Berbinar Insightful Indonesia adalah mitra terpercaya dalam menghadirkan layanan psikologi secara
                    terintegrasi seperti konseling, psikotes, kelas edukasi, dan konsultasi profesional. Melalui pendekatan
                    inklusif dan alat psikologi terstandar, Berbinar hadir untuk membangun hubungan antara perusahaan dengan
                    klien secara profesional. dan meraih potensi yang terbaik.</p>
                <div class="flex justify-start">
                    <a href="{{ route('about-us.index') }}">
                        <button
                            class="mt-4 w-auto whitespace-nowrap rounded-lg bg-gradient-to-r from-[#F7B23B] to-[#AD7D29] px-6 py-2 font-medium text-white max-sm:w-auto max-sm:text-sm">Profil
                            Perusahaan</button>
                    </a>
                </div>
            </div>
        </div>

        <!-- VECTOR SINGA -->
        <div class="absolute bottom-0 right-[250px] z-10 hidden h-auto w-auto max-w-xs max-sm:right-2 sm:block">
            <img src="{{ asset(data_get($theme, 'hero.img_singa')) }}" alt="Singa"
                class="h-full w-full max-sm:h-[350px] max-sm:w-auto" style="opacity: 0.9" />
        </div>

        <!-- untuk default -->
        <!-- <div class="absolute bottom-0 right-20 z-10 block h-auto w-auto max-w-xs max-sm:right-2 sm:hidden">
                <img src="{{ asset('assets/images/landing/asset-beranda/vector-singa3.webp') }}" alt="Singa" class="h-full w-full max-sm:h-[350px] max-sm:w-auto" />
            </div> -->

        <div class="absolute bottom-0 right-20 z-10 block h-auto w-auto max-w-xs max-sm:right-2 sm:hidden">
            <img src="{{ asset(data_get($theme, 'hero.img_singa3')) }}" alt="Singa"
                class="h-full w-full max-sm:h-[420px] max-sm:w-auto" style="opacity: 0.8" />
        </div>

        {{-- WHATSAPP ICON --}}
        {{--
            <div class="fixed bottom-16 right-16 w-auto max-w-xs h-auto z-30 hidden sm:block">
            <img src="{{ asset('assets/images/landing/vector-whatsapp.webp') }}" alt="Singa" class="w-auto h-12">
            </div>
        --}}

        <!-- STATS SECTION -->
        <div
            class="stats-mini absolute bottom-[-5rem] left-1/2 z-20 w-[75%] -translate-x-1/2 transform rounded-xl bg-white bg-opacity-85 px-8 py-8 shadow-lg backdrop-blur-sm max-lg:w-[88%] max-md:w-[83%] max-sm:bottom-[-14rem] max-sm:w-[93%] max-sm:px-6">
            <div
                class="flex flex-row justify-around space-x-8 text-center max-sm:flex-col max-sm:space-x-0 max-sm:space-y-3">
                <div class="flex flex-col">
                    <span class="num text-4xl font-bold text-black max-sm:text-[33px]" data-val="28">
                        00
                        <span>+</span>
                    </span>
                    <span class="text-md text-[#656C70] max-sm:text-[15px]">Pakar dengan pengalaman yang profesional</span>
                </div>
                <div class="-py-8">
                    <div class="h-full w-px bg-black"></div>
                </div>
                <div class="flex flex-col">
                    <span class="num text-4xl font-bold text-black max-sm:text-[33px]" data-val="87.7">
                        00,0
                        <span>%</span>
                    </span>
                    <span class="text-md text-[#656C70] max-sm:text-[15px]">Testimoni dari SobatBinar yang puas akan
                        layanan</span>
                </div>
                <div class="-py-8">
                    <div class="h-full w-px bg-black"></div>
                </div>
                <div class="flex flex-col">
                    <span class="num text-4xl font-bold text-black max-sm:text-[33px]" data-val="15">
                        00
                        <span>K+</span>
                    </span>
                    <span class="text-md text-[#656C70] max-sm:text-[15px]">Orang sudah menggunakan produk dari
                        Berbinar</span>
                </div>
            </div>
        </div>
    </section>

    {{-- WHY BERBINAR SECTION --}}
    <section>
        <!-- <h1 class="text-mini font mt-40 text-center text-4xl font-semibold text-black max-sm:mx-2 max-sm:mt-64 max-sm:text-[29px]">
                Mengapa Harus
                <span class="bg-[#3886A3] px-2 text-white">Berbinar</span>
            </h1> -->
        <h1
            class="text-mini font mt-40 text-center text-4xl font-semibold text-black max-sm:mx-2 max-sm:mt-64 max-sm:text-[29px]">
            Mengapa Harus
            <span class="{{ $theme['berbinar_highlight'] }} px-2 text-white"
                style="background-color: {{ $theme['berbinar_highlight'] }}">Berbinar</span>
        </h1>
        <div class="mx-14 my-9 mb-16 rounded-3xl bg-white shadow-md max-sm:mx-4 max-sm:my-5">
            <div class="flex flex-row items-center gap-x-6 p-8 max-md:flex-col max-md:p-5">
                <!-- SCREEN DESKTOP -->
                <img src="{{ asset('assets/images/landing/logo/logo-berbinar.webp') }}" alt="Logo Berbinar"
                    class="h-64 w-auto max-sm:h-60" />
                <!-- SCREEN MOBILE -->
                {{-- <img src="{{ asset('assets/images/landing/vector-konsul.webp') }}" alt="Berbinar Mobile" class="h-[270px] w-full object-cover rounded-lg block md:hidden"> --}}

                <div class="flex-col space-y-6 max-md:space-y-3">
                    <div class="flex flex-row flex-wrap gap-3 max-md:mt-4 max-md:justify-center">
                        @foreach ($visimisis as $visimisi)
                            <div class="w-auto items-center rounded-full bg-[{{ $theme['why_berbinar']['badge'] }}] p-1.5"
                                style="background-color: {{ $theme['why_berbinar']['badge'] }}">
                                <div class="flex flex-row items-center gap-x-1.5">
                                    <img src="{{ asset(data_get($theme, 'why_berbinar.tick')) }}" alt="Vector"
                                        class="h-6 w-6 rounded-full bg-white p-1" />
                                    <p class="text-[15px] font-medium text-white max-sm:text-[13px]">
                                        {{ $visimisi['moto'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <p class="text-justify text-[17px] text-[#70787D] max-md:mt-3 max-sm:text-[15px]">Berbinar adalah solusi
                        lengkap untuk kebutuhan psikologi Anda—dari konseling, psikotes, kelas edukasi, hingga layanan
                        consulting profesional dengan biaya terjangkau dan fleksibilitas yang tinggi yang tentunya semua
                        dirancang khusus sesuai kebutuhan. Saatnya wujudkan potensi terbaik Anda bersama Berbinar!</p>
                    <!-- <button class="text-md rounded-xl bg-gradient-to-r from-[#3986A3] to-[#225062] px-4 py-2 font-medium text-white max-md:w-full max-sm:text-[15px]">Lihat Produk Berbinar</button> -->
                    <button
                        class="text-md {{ $theme['why_berbinar']['view_product_button'] }} rounded-xl px-4 py-2 font-medium text-white max-md:w-full max-sm:text-[15px]">Lihat
                        Produk Berbinar</button>
                </div>
            </div>
        </div>
    </section>

    {{-- KONTEN SOSMED --}}
    <!-- <div class="h-[650px] w-full bg-cover max-sm:h-[1200px]" style="background-image: url('/assets/images/landing/asset-beranda/vector-pattern.webp'), linear-gradient(to bottom right, #EAF8FF, #BDE8FD); background-blend-mode: normal, multiply"> -->
    <div class="sosmed-section bg-content h-[650px] w-full bg-cover max-sm:h-[1200px]"
        style="{{ $theme['latest_content']['bg'] }}; background-blend-mode: normal, multiply">
        <h1
            class="{{ $theme['latest_content']['text_title'] }} my-8 text-center text-4xl font-semibold max-sm:mx-4 max-sm:text-[29px]">
            <!-- Konten Terbaru
                <span class="bg-[#3886A3] px-2 text-white">Berbinar</span> -->
            Konten Terbaru
            <span class="bg-[{{ $theme['berbinar_highlight'] }}] px-2 text-white"
                style="background-color: {{ $theme['berbinar_highlight'] }}">Berbinar</span>
        </h1>
        <div class="-mt-8 flex flex-row justify-evenly max-sm:flex-col max-sm:items-center">
            @forelse ($contents as $content)
                <div class="justify-center text-center max-sm:-mt-10">
                    @if ($content->platform == 'instagram')
                        <x-embed.instagram :url="$content->url" />
                    @elseif ($content->platform == 'tiktok')
                        <x-embed.tiktok :url="$content->url" />
                    @elseif ($content->platform == 'spotify')
                        <x-embed.spotify :url="$content->url" />
                    @elseif ($content->platform == 'youtube')
                        <x-embed.youtube :url="$content->url" />
                    @elseif ($content->platform == 'linkedin')
                        <x-embed.linkedin :url="$content->url" />
                    @elseif ($content->platform == 'twitter' || $content->platform == 'x')
                        <x-embed.twitter :url="$content->url" />
                    @endif
                </div>
            @empty
                <p class="px-4 text-center text-base text-[#70787D]">Belum ada konten aktif.</p>
            @endforelse
        </div>

        <!-- paste disini -->

        <img src="{{ asset('assets/images/landing/asset-beranda/vector/lebaran-oranment.png') }}"
            class="pointer-events-none absolute bottom-0 left-0 hidden w-full max-sm:block" />
    </div>

    {{-- PRODUK --}}
    <section class="mt-6">
        <p
            class="font relative z-10 mx-20 my-8 text-center text-4xl font-semibold text-black max-sm:mx-2 max-sm:my-4 max-sm:text-[29px]">
            <!-- Produk
                <span class="bg-primary px-2 text-white">Berbinar</span> -->
            Produk
            <span class="bg-[{{ $theme['berbinar_highlight'] }}] px-2 text-white"
                style="background-color: {{ $theme['berbinar_highlight'] }}">Berbinar</span>
        </p>
        <div class="swiperContainer">
            <div class="swiper" id="swiperProduk">
                <div class="swiper-wrapper pb-1 max-sm:pb-8">
                    @foreach ($products as $product)
                        <div class="swiper-slide">
                            <div
                                class="flex h-auto w-auto flex-col items-center justify-center rounded-3xl bg-white text-center shadow-md">
                                <div class="flex w-full justify-center rounded-t-3xl border-b bg-white p-7 max-sm:p-5">
                                    <img src="{{ asset($product['vector']) }}" alt="{{ $product['produk'] }}"
                                        class="h-36 w-auto object-contain max-md:h-[130px] max-sm:h-[110px]" />
                                </div>

                                <div class="flex flex-grow flex-col px-4 py-4 text-center max-sm:px-3 max-sm:py-3">
                                    <h2
                                        class="flex items-center justify-center text-[17px] font-semibold text-black max-sm:text-[16px]">
                                        {{ $product['produk'] }}</h2>
                                    <p
                                        class="mt-3 min-h-[75px] text-[14px] text-[#70787D] max-lg:min-h-[90px] max-sm:mt-2 max-sm:leading-tight">
                                        {{ $product['deskripsi'] }}
                                    </p>
                                    <a href="{{ $product['link'] }}"
                                        class="mt-4 self-center rounded-full px-4 py-2 text-sm font-semibold text-white shadow max-md:mt-4 max-sm:w-full max-sm:text-[13px]"
                                        style="background-color: {{ $theme['learn_more']['bg'] ?? $theme['why_berbinar']['view_product_button'] }}">Pelajari
                                        Selengkapnya</a>
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

    {{-- TESTIMONI USER --}}
    <section class="mt-6">
        <p
            class="font relative z-10 mx-20 my-8 text-center text-4xl font-semibold text-black max-sm:mx-2 max-sm:my-4 max-sm:text-[29px]">
            Apa Kata Mereka Tentang
            <!-- <span class="bg-primary px-2 text-white">Berbinar</span> -->
            <span class="bg-[{{ $theme['berbinar_highlight'] }}] px-2 text-white"
                style="background-color: {{ $theme['berbinar_highlight'] }}">Berbinar</span>
            ?
        </p>
        <div class="swiperContainer">
            <div class="swiper" id="swiperTestimoni">
                <div class="swiper-wrapper pb-1 max-sm:pb-8">
                    @foreach ($testimonis as $testimoni)
                        <div class="swiper-slide">
                            <div
                                class="flex h-auto w-auto flex-col items-center justify-center rounded-3xl bg-white p-5 text-center shadow-md">
                                <img src="{{ asset(data_get($theme, 'testimoni.quote_img')) }}" alt="Kutip"
                                    class="h-8 w-auto max-sm:h-7" />

                                <div class="flex flex-grow flex-col pt-4 text-center">
                                    <p
                                        class="min-h-[198px] flex-grow text-justify text-[16px] font-medium leading-snug text-black max-lg:min-h-[220px] max-md:min-h-[198px] max-sm:min-h-[175px] max-sm:text-[14px] max-sm:leading-tight">
                                        {{ $testimoni['comment'] }}
                                    </p>
                                </div>

                                <div class="mt-4 flex flex-col items-center text-center max-lg:mt-2 max-sm:mt-1">
                                    <img src="{{ asset($testimoni['image']) ?? '' }}" alt="Kutip"
                                        class="h-[70px] w-auto rounded-full max-sm:h-14" />
                                    <p class="mt-1 text-[17px] font-semibold text-black max-sm:text-[15px]">
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

    {{-- QUOTE --}}
    <section class="mx-14 my-10 rounded-xl p-8 max-sm:mx-4 max-sm:p-4"
        style="background-color: {{ $theme['quotes']['bg'] }}">
        <div class="flex flex-col gap-y-4">
            <div class="flex justify-start">
                <img src="{{ asset(data_get($theme, 'quotes.quote_icon')) }}" alt="Vector"
                    class="h-8 w-auto max-sm:h-7" />
            </div>
            <p
                class="text-justify text-xl font-medium leading-loose text-black max-sm:text-center max-sm:text-[16px] max-sm:leading-tight">
                <span class="text-[#3986A3]">Kesehatan mental</span>
                merupakan hal yang sedang menjadi sebuah
                <span class="text-[#3986A3]">trend</span>
                sekaligus permasalahan yang serius di era masyarakat sekarang.
                <span class="text-[#3986A3]">Berbinar</span>
                hadir dalam memberikan
                <span class="text-[#3986A3]">solusi</span>
                terhadap keresahan dalam menghadapi persoalan kesehatan mental
            </p>
            <div class="flex justify-end">
                <img src="{{ asset(data_get($theme, 'quotes.quote_icon')) }}" alt="Vector"
                    class="h-8 w-auto max-sm:h-7" />
            </div>
        </div>
    </section>
@endsection

@section('script')
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.12.2/lottie.min.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Menambahkan animasi kembang api menggunakan Lottie
                const animationPath = '/assets/lottie/Fireworks.json';
                const isMobile = window.matchMedia('(max-width: 768px)').matches;

                function hideLottieContainer(id) {
                    const el = document.getElementById(id);
                    if (el) {
                        el.style.display = 'none';
                    }
                }

                if (isMobile) {
                    const segments = ['lottie-snow-1', 'lottie-snow-2', 'lottie-snow-3'];

                    segments.forEach((id) => {
                        const anim = lottie.loadAnimation({
                            container: document.getElementById(id),
                            renderer: 'svg',
                            loop: false,
                            autoplay: true,
                            path: animationPath,
                            // preserveAspectRatio: 'xMidYMid slice',
                        });
                        anim.addEventListener('complete', function() {
                            hideLottieContainer(id);
                        });
                    });
                } else {
                    const id = 'lottie-snow-1';
                    const anim = lottie.loadAnimation({
                        container: document.getElementById(id),
                        renderer: 'svg',
                        loop: false,
                        autoplay: true,
                        path: animationPath,
                    });
                    anim.addEventListener('complete', function() {
                        hideLottieContainer(id);
                    });
                }
            });
        </script> -->

    <script async src="//www.instagram.com/embed.js"></script>
    <script async src="https://www.tiktok.com/embed.js"></script>
    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>


    <!-- script buat petasan cina -->
    @if ($theme['name'] === 'imlek')
        <script>
            const firecrackersDuration = 1500;
            window.addEventListener('DOMContentLoaded', function() {
                setTimeout(function() {
                    const isMobile = window.matchMedia('(max-width: 768px)').matches;
                    document.getElementById('firecrackers-overlay').style.display = 'flex';
                    if (isMobile) {
                        document.getElementById('firecrackers-mobile').style.display = 'block';
                    } else {
                        document.getElementById('firecrackers-desktop').style.display = 'flex';
                    }
                    // Tampilkan dan animasikan zibairunnin.gif
                    const zibairunnin = document.getElementById('zibairunnin-gif');
                    if (zibairunnin) {
                        zibairunnin.style.display = 'block';
                        zibairunnin.style.animation = 'zibairunnin-move 1.5s linear forwards';
                    }
                    setTimeout(function() {
                        const overlay = document.getElementById('firecrackers-overlay');
                        const bg = document.getElementById('firecrackers-bg');
                        if (overlay) overlay.style.display = 'none';
                        if (bg) bg.style.display = 'none';
                        if (zibairunnin) zibairunnin.style.display = 'none';
                    }, firecrackersDuration);
                }, 1000);
            });
        </script>
    @endif

    <!-- script buat lebaran -->
    @if ($theme["name"] === "lebaran")
        <script>
            const ketupatDuration = 2500;
            window.addEventListener('DOMContentLoaded', function () {
                setTimeout(function () {
                    document.getElementById('ketupat-overlay').style.display = 'flex';
                    setTimeout(function () {
                        const overlay = document.getElementById('ketupat-overlay');
                        const bg = document.getElementById('ketupat-bg');
                        if (overlay) overlay.style.display = 'none';
                        if (bg) bg.style.display = 'none';
                    }, ketupatDuration);
                }, 1000);
            });
        </script>
    @endif

    <script>
        let valueDisplays = document.querySelectorAll('.num');
        let interval = 5000;

        valueDisplays.forEach((valueDisplay) => {
            let startValue = 0;
            let endValue = parseFloat(valueDisplay.getAttribute('data-val'));
            let suffixElement = valueDisplay.querySelector('span');
            let suffixText = suffixElement ? suffixElement.outerHTML : '';
            let duration = Math.floor(interval / endValue);

            let counter = setInterval(function() {
                startValue += 1;
                if (startValue >= endValue) {
                    startValue = endValue;
                    clearInterval(counter);
                }
                valueDisplay.innerHTML = startValue + suffixText;
            }, duration);
        });

        var swiper = new Swiper('#swiperProduk', {
            slidesPerView: 3,
            spaceBetween: 10,
            speed: 300,
            loop: true,
            mousewheel: {
                forceToAxis: true,
                sensitivity: 0.5,
                thresholdDelta: 30,
                thresholdTime: 400,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            scrollbar: {
                el: '.swiper-scrollbar',
                draggable: true,
                dragSize: 100,
            },
            breakpoints: {
                0: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                    slidesPerGroup: 1,
                },
                640: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                    slidesPerGroup: 1,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 10,
                    slidesPerGroup: 2,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 10,
                    slidesPerGroup: 3,
                },
            },
        });

        var swiper = new Swiper('#swiperTestimoni', {
            slidesPerView: 3,
            spaceBetween: 10,
            loop: true,
            speed: 300,
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },
            mousewheel: {
                forceToAxis: true,
                sensitivity: 0.5,
                thresholdDelta: 30,
                thresholdTime: 400,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            scrollbar: {
                el: '.swiper-scrollbar',
                draggable: true,
                dragSize: 100,
            },
            breakpoints: {
                0: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                    slidesPerGroup: 1,
                },
                640: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                    slidesPerGroup: 1,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 10,
                    slidesPerGroup: 2,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 10,
                    slidesPerGroup: 2,
                },
            },
        });
    </script>
@endsection
