@extends(
    "landing.layouts.app",
    [
        "title" => "Berbinar Insightful Indonesia",
    ]
)

@section('style')
    {{-- SWIPER STYLE --}}
    <style>
        .swiper {
            width: 100%;
            height: 400px;
            margin-left: auto;
            margin-right: auto;
            position: relative;
            overflow: hidden;
            list-style: none;
            padding: 0;
            z-index: 1;
        }

        .swiper-wrapper {
            position: relative;
            width: 100%;
            z-index: 1;
            display: flex;
            transition-property: transform;
            box-sizing: content-box;
        }

        .swiper-slide {
            flex-shrink: 0;
            width: 100%;
            height: 100%;
            position: relative;
            transition-property: transform, opacity;
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 0.6;
            transform: scale(0.85);
            transition: all 0.3s ease;
        }

        .swiper-slide-active {
            opacity: 1 !important;
            transform: scale(1) !important;
        }

        .swiper-pagination {
            position: relative;
            text-align: center;
            transition: 300ms opacity;
            transform: translate3d(0, 0, 0);
            z-index: 10;
            height: 8px;
            width: 100%;
            margin-top: 20px;
        }

        .swiper-pagination-progressbar {
            background: rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            position: relative;
            height: 8px !important;
        }

        .swiper-pagination-progressbar .swiper-pagination-progressbar-fill {
            background: #f7b23b;
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            transform: scale(0);
            transform-origin: left top;
            border-radius: 10px;
        }

        .topic-content-swiper .swiper-pagination-progressbar .swiper-pagination-progressbar-fill {
            background: #9dd4ee;
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            transform: scale(0);
            transform-origin: left top;
            border-radius: 10px;
        }
    </style>

@endsection

@section("content")
    {{-- HERO SECTION --}}
    <section class="relative mb-20 max-md:overflow-hidden">
        <div class="absolute left-0 top-5 z-0 max-sm:top-32">
            <img src="{{ asset("assets/images/landing/asset-konseling/vector/vector-hero1.webp") }}" alt="Vector" class="h-[500px] w-auto max-sm:h-[250px]" />
        </div>

        <div class="absolute right-0 top-8 z-0 max-md:-right-28 max-sm:-right-20 max-sm:top-40">
            <img src="{{ asset("assets/images/landing/asset-konseling/vector/vector-hero2.webp") }}" alt="Vector" class="h-[500px] w-auto max-sm:h-[250px]" />
        </div>

        <div class="relative">
            <div class="z-10 mx-20 mt-40 flex flex-row items-center justify-between gap-x-10 max-sm:mx-4 max-sm:mt-32">
                <div class="max-lg:min-w-auto flex max-w-xl flex-1 flex-col space-y-6 max-sm:space-y-2">
                    <a href="{{ route("product.index") }}">
                        <div class="flex cursor-pointer items-center space-x-2 lg:order-1">
                            <img src="{{ asset("assets/images/landing/asset-konseling/vector/left-arrow.webp") }}" alt="Left Arrow" class="h-3 w-auto" />
                            <p class="text-[15px] font-semibold text-[#3986A3]">Produk Berbinar</p>
                        </div>
                    </a>

                    <div class="hidden w-full items-center justify-center max-lg:flex-none max-md:flex lg:order-2 lg:w-auto">
                        <img src="{{ asset("assets/images/landing/produk/bisikan/banner-1.webp") }}" alt="Class" class="h-[340px] w-auto object-contain max-sm:h-[320px]" />
                    </div>

                    <div class="lg:order-3">
                        <h2 class="text-gradient py-2 text-5xl font-bold text-[#3986A3] max-sm:text-3xl">BISIKAN</h2>
                    </div>

                    <div class="lg:order-4">
                        <p class="text-justify text-lg text-[#70787D] max-lg:text-[17px] max-sm:text-[15px] max-sm:leading-normal">
                            Selamat datang dalam petualangan psikologi bersama Bisikan Jangan lewatkan
                            <i>sharing session</i>
                            eksklusif kami di Instagram, di mana kita akan bersama-sama merambah ke dalam lapisan terdalam pikiran dan emosi. Temukan rahasia-rahasia kehidupan yang penuh warna bersama kami.
                        </p>
                    </div>
                </div>

                <div class="flex w-full flex-initial items-center justify-center max-lg:flex-1 max-md:hidden lg:w-auto">
                    <img src="{{ asset("assets/images/landing/produk/bisikan/banner-1.webp") }}" alt="Bisikan Hero" class="h-[340px] w-auto object-contain max-lg:h-[320px]" />
                </div>
            </div>
        </div>
    </section>

    {{-- KONTEN BISIKAN BERBINAR --}}
    <section class="relative w-full px-0">
        <!-- LINE PATH DI BACKGROUND -->
        <div class="absolute bottom-10 left-0 z-0 max-sm:top-40">
            <img src="/assets/images/landing/asset-konseling/vector/vector-line.webp" alt="Vector Image" class="" />
        </div>

        <h1 class="relative z-10 mb-4 text-center text-2xl font-semibold">
            Konten BISIKAN
            <span class="inline-block bg-[#3986A3] px-2 py-1 text-white">Berbinar</span>
        </h1>
        <div class="relative z-10 mx-4 sm:mx-20">
            <div class="flex w-full flex-col-reverse items-center gap-6 rounded-3xl bg-white px-6 pb-8 pt-6 shadow-lg md:flex-row md:items-start">
                <!-- Kiri: Teks -->
                <div class="flex flex-1 flex-col justify-start">
                    <h2 class="text-xl font-bold lg:text-2xl">
                        BISIKAN
                        <span class="text-[#3986A3]">Episode 22</span>
                    </h2>
                    <p class="mt-3 text-justify text-base font-medium text-[#70787D] lg:text-lg">
                        "Mengubah
                        <i>Stress</i>
                        Kerja Menjadi Sukses dengan
                        <i>Self-Compassion</i>
                        "
                    </p>
                    <p class="text-justify text-base leading-relaxed text-[#70787D] lg:text-lg">
                        Stres di dunia kerja sering dianggap musuh, padahal bisa menjadi peluang untuk tumbuh jika dikelola dengan
                        <i>self-compassion</i>
                        . Dalam episode ini, kita bahas bagaimana
                        <i>self compassion</i>
                        justru meningkatkan produktivitas, ketahanan mental, dan kepuasan kerja. Kamu akan belajar mengenali stres, merespons dengan lebih bijak, dan membangun rutinitas kerja yang sehat tanpa menyiksa diri.
                    </p>
                    <div class="mt-5">
                        <a href="https://youtu.be/2YGAcGSlxTo?si=zgly-gJVqsxMWHXX" class="inline-block rounded-lg bg-gradient-to-r from-[#F7B23B] to-[#AD7D29] px-6 py-2 text-center font-semibold text-white shadow max-md:w-full" target="_blank" rel="noopener noreferrer">Tonton BISIKAN</a>
                    </div>
                </div>

                <!-- Kanan: Gambar -->
                <div class="flex w-full flex-1 items-center justify-center md:justify-end">
                    <img src="{{ asset("assets/images/landing/produk/bisikan/bisikan-episode22.webp") }}" alt="BISIKAN Episode 22" class="mt-6 h-auto w-full max-w-xs rounded-xl border object-contain md:mr-8 lg:max-w-md" />
                </div>
            </div>
        </div>
    </section>

    {{-- SWIPER BISIKAN --}}
    <section class="px-6 pt-10 md:px-0">
        <!-- Desktop Version - grid 3 kolom -->
        <div class="mx-4 hidden sm:mx-20 md:block">
            <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
                @foreach (array_slice($episodes, 0, 3) as $episode)
                    <div class="rounded-2xl p-4 shadow-lg">
                        <div>
                            <img src="{{ asset($episode["image"]) }}" alt="{{ $episode["title"] }}" class="w-full rounded-lg" />
                        </div>
                        <div class="mt-4 flex flex-col gap-2">
                            <h2 class="text-center text-lg font-semibold">{{ $episode["title"] }}</h2>
                            <p class="text-center text-sm text-[#70787D]">Bersama: {{ $episode["bersama"] }}</p>
                            <a href="{{ $episode["link"] }}" target="_blank" class="mx-auto mt-3 rounded-lg bg-gradient-to-r from-[#F7B23B] to-[#AD7D29] px-6 py-2 text-center text-sm font-semibold text-white">Tonton BISIKAN</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Mobile Version - Swiper -->
        <div class="mx-auto max-w-md md:hidden">
            <div class="max-w-full overflow-hidden px-6 pt-4">
                <div class="swiper-container content-bisikan-swiper mt-8">
                    <div class="swiper-wrapper">
                        @foreach (array_slice($episodes, 0, 3) as $episode)
                            <div class="swiper-slide">
                                <div class="rounded-2xl p-2 shadow-lg">
                                    <div>
                                        <img src="{{ asset($episode["image"]) }}" alt="{{ $episode["title"] }}" class="w-full rounded-lg" />
                                    </div>
                                    <div class="mt-2 flex h-32 flex-col gap-2 px-4 text-center">
                                        <h2 class="text-center font-semibold">{{ $episode["title"] }}</h2>
                                        <p class="text-sm text-[#70787D]">Bersama: {{ $episode["bersama"] }}</p>
                                    </div>
                                    <a href="{{ $episode["link"] }}" target="_blank" class="mt-3 block rounded-lg bg-gradient-to-r from-[#F7B23B] to-[#AD7D29] py-2 text-center text-sm font-semibold text-white">Tonton BISIKAN</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination mt-6" style="position: relative; height: 8px; margin-top: 20px"></div>
                </div>
            </div>
        </div>
    </section>

    {{-- TOPIK KONTEN BISIKAN --}}
    <section class="relative z-10 px-6 pt-10 md:px-0">
        <h1 class="bg-gradient-to-r from-[#3986A3] to-[#1C4352] bg-clip-text text-center font-[inter] text-3xl font-semibold text-transparent lg:tracking-wide">Topik Konten BISIKAN</h1>
        <!-- Desktop Version - Grid -->
        <div class="mx-4 hidden sm:mx-20 md:block">
            <div class="mt-8 grid grid-cols-2 gap-8 md:grid-cols-3 lg:grid-cols-6">
                @foreach ($topics as $topic)
                    <div class="flex flex-col items-center gap-5">
                        <img src="{{ asset($topic["image"]) }}" alt="" class="h-16 w-16 object-contain" />
                        <span class="inline-block text-center text-sm font-semibold">
                            @if (trim(strtolower($topic["title"])) == "self growth")
                                <em>{{ $topic["title"] }}</em>
                            @else
                                {{ $topic["title"] }}
                            @endif
                        </span>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Mobile Version - Swiper -->
        <div class="mx-auto max-w-md md:hidden">
            <div class="max-w-full overflow-hidden px-6 pt-10">
                <div class="swiper-container topic-content-swiper mt-8">
                    <div class="swiper-wrapper">
                        @foreach ($topics as $topic)
                            <div class="swiper-slide">
                                <div class="flex flex-col items-center gap-5">
                                    <img src="{{ asset($topic["image"]) }}" alt="" class="h-16 w-16 object-contain" />
                                    <span class="inline-block text-center text-sm font-semibold">
                                        @if (trim(strtolower($topic["title"])) == "self growth")
                                            <em>{{ $topic["title"] }}</em>
                                        @else
                                            {{ $topic["title"] }}
                                        @endif
                                    </span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination mt-6" style="position: relative; height: 8px; margin-top: 20px"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- BLUR SETENGAH LINGKARAN PEMBATAS KIRI -->
    <div class="relative hidden h-0 md:block">
        <div class="absolute -left-32 top-0 z-0 md:-left-40" style="width: 300px; height: 300px; border-top-left-radius: 420px; border-bottom-left-radius: 420px; border-top-right-radius: 420px; background: #c7f8ff; filter: blur(60px); opacity: 0.9; top: -100px"></div>
    </div>
    <!-- BLUR SETENGAH LINGKARAN PEMBATAS KANAN -->
    <div class="relative hidden h-0 md:block">
        <div class="absolute -right-32 top-0 z-0 md:-right-40" style="width: 300px; height: 300px; border-top-left-radius: 420px; border-bottom-left-radius: 420px; border-top-right-radius: 420px; background: #c7f8ff; filter: blur(60px); opacity: 0.9; top: 100px"></div>
    </div>

    {{-- MANFAAT MENDENGAR BISIKAN --}}
    <section class="relative z-10 mt-20 px-4 pt-10 md:px-0">
        <h1 class="bg-gradient-to-r from-[#3986A3] to-[#1C4352] bg-clip-text text-center font-[inter] text-3xl font-semibold text-transparent lg:tracking-wide">Manfaat Mendengar BISIKAN</h1>
        <div class="mx-4 mt-8 sm:mx-20">
            <div class="grid grid-cols-2 gap-x-4 gap-y-8 lg:grid-cols-5 lg:gap-x-8 lg:gap-y-12">
                <div class="relative rounded-lg border-2 border-[#d7e6ed] bg-white px-2 pb-3 pt-8 shadow-md md:px-6 md:py-8">
                    <div class="absolute left-1/2 top-0 flex h-11 w-11 -translate-x-1/2 -translate-y-1/2 items-center justify-center rounded-full bg-white shadow-md">
                        <img src="{{ asset("assets/images/landing/produk/bisikan/lamp.webp") }}" alt="Wawasan Icon" class="h-8 w-8" />
                    </div>
                    <div class="flex h-full flex-col justify-center gap-1 text-center">
                        <h3 class="font-semibold text-primary">Wawasan</h3>
                        <span class="text-sm">Menambah wawasan tentang kesehatan mental</span>
                    </div>
                </div>

                <div class="relative rounded-lg border-2 border-[#d7e6ed] bg-white px-2 pb-3 pt-8 shadow-md md:px-6 md:py-8 lg:col-start-3">
                    <div class="absolute left-1/2 top-0 flex h-11 w-11 -translate-x-1/2 -translate-y-1/2 items-center justify-center rounded-full bg-white shadow-md">
                        <img src="{{ asset("assets/images/landing/produk/bisikan/bag.webp") }}" alt="Self-healing Icon" class="h-8 w-8" />
                    </div>
                    <div class="flex h-full flex-col justify-center gap-1 text-center">
                        <h3 class="font-semibold text-primary"><i>Self-healing</i></h3>
                        <span class="text-sm">
                            Memberi ruang refleksi dan
                            <i>self-healing</i>
                        </span>
                    </div>
                </div>

                <div class="relative rounded-lg border-2 border-[#d7e6ed] bg-white px-2 pb-3 pt-8 shadow-md md:px-6 md:py-8 lg:col-start-5">
                    <div class="absolute left-1/2 top-0 flex h-11 w-11 -translate-x-1/2 -translate-y-1/2 items-center justify-center rounded-full bg-white shadow-md">
                        <img src="{{ asset("assets/images/landing/produk/bisikan/meditation.webp") }}" alt="Pengetahuan Icon" class="h-8 w-8" />
                    </div>
                    <div class="flex h-full flex-col justify-center gap-1 text-center">
                        <h3 class="font-semibold text-primary">Pengetahuan</h3>
                        <span class="text-sm">Mendapat pengetahuan dari praktisi dan ahli terpercaya</span>
                    </div>
                </div>

                <div class="relative rounded-lg border-2 border-[#d7e6ed] bg-white px-2 pb-3 pt-8 shadow-md md:px-6 md:py-8 lg:col-start-2">
                    <div class="absolute left-1/2 top-0 flex h-11 w-11 -translate-x-1/2 -translate-y-1/2 items-center justify-center rounded-full bg-white shadow-md">
                        <img src="{{ asset("assets/images/landing/produk/bisikan/bush.webp") }}" alt="Teman Perjalanan Icon" class="h-8 w-8" />
                    </div>
                    <div class="flex h-full flex-col justify-center gap-1 text-center">
                        <h3 class="font-semibold text-primary">Teman Perjalanan</h3>
                        <span class="text-sm">Menjadi teman perjalanan saat bekerja, belajar, atau santai</span>
                    </div>
                </div>

                <div class="relative rounded-lg border-2 border-[#d7e6ed] bg-white px-2 pb-3 pt-8 shadow-md md:px-6 md:py-8 lg:col-start-4">
                    <div class="absolute left-1/2 top-0 flex h-11 w-11 -translate-x-1/2 -translate-y-1/2 items-center justify-center rounded-full bg-white shadow-md">
                        <img src="{{ asset("assets/images/landing/produk/bisikan/book.webp") }}" alt="Mindful Living Icon" class="h-8 w-8" />
                    </div>
                    <div class="flex h-full flex-col justify-center gap-1 text-center">
                        <h3 class="font-semibold text-primary"><i>Mindful Living</i></h3>
                        <span class="text-sm">
                            Mendukung gaya hidup yang lebih
                            <i>mindful</i>
                            dan seimbang
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- DIMANA SAYA BISA MENDENGARKAN BISIKAN --}}
    <section class="mt-20 px-0">
        <h1 class="mb-4 text-center text-3xl font-semibold">Dimana saya bisa mendengarkan BISIKAN?</h1>

        {{-- Desktop View --}}
        <div class="mx-4 hidden md:mx-10 md:block lg:mx-20">
            <div class="flex w-full items-end gap-4 rounded-3xl bg-white px-2 shadow-lg md:gap-6 md:px-4 lg:gap-10 lg:px-6">
                {{-- Bagian KIRI: Gambar --}}
                <div class="mt-6 flex h-full w-[40%] items-end md:mt-10 md:w-[45%] lg:w-[50%]">
                    <img src="{{ asset("assets/images/landing/produk/bisikan/Clip-path.webp") }}" alt="Gambar BISIKAN" class="h-auto max-h-[180px] w-full object-contain md:max-h-[250px] lg:max-h-[350px]" />
                </div>

                {{-- Bagian KANAN --}}
                <div class="mb-6 mt-1 flex w-full flex-col justify-start gap-4 md:mb-10 md:gap-6">
                    {{-- Container Sosmed --}}
                    <div class="mt-4 grid grid-cols-1 gap-3 md:mt-10 md:grid-cols-3 md:gap-4">
                        <!-- Spotify -->
                        <a href="{{ $sosmed[0]["link"] ?? "#" }}" target="_blank" rel="noopener noreferrer" class="flex h-12 w-full max-w-[320px] items-center justify-center gap-2 rounded-full border-4 border-[#8FE0AC] bg-gradient-to-r from-[#8FE0AC] to-[#3986A3] px-4 py-2 font-semibold text-white shadow ring-2 ring-inset ring-white">
                            <img src="{{ asset($sosmed[0]["icon"] ?? "") }}" alt="{{ $sosmed[0]["platform"] ?? "Spotify" }}" class="h-5 w-5" />
                            <span>{{ $sosmed[0]["platform"] ?? "Spotify" }}</span>
                        </a>
                        <!-- Instagram -->
                        <a href="{{ $sosmed[1]["link"] ?? "#" }}" target="_blank" rel="noopener noreferrer" class="flex h-12 w-full max-w-[320px] items-center justify-center gap-2 rounded-full border-4 border-[#D77BB2] bg-gradient-to-r from-[#D77BB2] to-[#3986A3] px-4 py-2 font-semibold text-white shadow ring-2 ring-inset ring-white">
                            <img src="{{ asset($sosmed[1]["icon"] ?? "") }}" alt="{{ $sosmed[1]["platform"] ?? "Instagram" }}" class="h-5 w-5" />
                            <span>{{ $sosmed[1]["platform"] ?? "Instagram" }}</span>
                        </a>
                        <!-- Youtube -->
                        <a href="{{ $sosmed[2]["link"] ?? "#" }}" target="_blank" rel="noopener noreferrer" class="flex h-12 w-full max-w-[320px] items-center justify-center gap-2 rounded-full border-4 border-[#DC6E6E] bg-gradient-to-r from-[#DC6E6E] to-[#3986A3] px-4 py-2 font-semibold text-white shadow ring-2 ring-inset ring-white">
                            <img src="{{ asset($sosmed[2]["icon"] ?? "") }}" alt="{{ $sosmed[2]["platform"] ?? "Youtube" }}" class="h-5 w-5" />
                            <span>{{ $sosmed[2]["platform"] ?? "Youtube" }}</span>
                        </a>
                    </div>

                    {{-- Kalender & Jadwal --}}
                    <div class="mb-1 mt-1 flex items-center gap-2 text-[#1C4352]">
                        <img src="{{ asset("assets/images/landing/produk/bisikan/calendar.webp") }}" alt="Kalender" class="h-8 w-8" />
                        <span class="text-lg font-medium text-[#AD7D29]">Jadwal BISIKAN</span>
                    </div>

                    {{-- Container Card Info Desktop --}}
                    <div class="flex flex-col gap-4 md:flex-row md:gap-6">
                        {{-- Card Spotify --}}
                        <div class="flex flex-1 flex-col items-center justify-center">
                            <div class="relative flex h-[180px] w-full flex-col items-center justify-center overflow-hidden rounded-3xl bg-white p-3 text-center shadow-[0_4px_24px_0_#3986A373]">
                                {{-- eclipse bg --}}
                                <img src="{{ asset("assets/images/landing/produk/bisikan/eclipse/Ellipse_1.webp") }}" alt="" class="absolute bottom-0 right-0 z-0" />
                                <img src="{{ asset("assets/images/landing/produk/bisikan/eclipse/Ellipse_2.webp") }}" alt="" class="absolute bottom-0 right-0 z-0" />
                                <img src="{{ asset("assets/images/landing/produk/bisikan/eclipse/Ellipse_3.webp") }}" alt="" class="absolute left-0 top-0 z-0" />
                                <img src="{{ asset("assets/images/landing/produk/bisikan/eclipse/Ellipse_4.webp") }}" alt="" class="absolute bottom-0 left-0 z-0" />
                                <img src="{{ asset("assets/images/landing/produk/bisikan/eclipse/Ellipse_5.webp") }}" alt="" class="absolute left-0 top-0 z-0" />

                                <div class="z-10 flex w-full flex-col justify-center" style="height: calc(100% - 1rem)">
                                    <span class="mb-1 block text-center text-xs font-semibold leading-tight text-cyan-950 sm:text-sm md:text-base lg:text-lg xl:text-xl">BISIKAN Spotify Update</span>
                                    <span class="my-1 block text-center text-[10px] leading-tight text-[#555555] sm:text-xs md:text-sm">Diadakan Setiap:</span>
                                    <span class="block text-center text-xs font-bold leading-tight text-cyan-950 sm:text-sm md:text-base lg:text-lg">Awal Bulan</span>
                                </div>
                            </div>
                        </div>

                        {{-- Card Youtube --}}
                        <div class="flex flex-1 flex-col items-center justify-center">
                            <div class="relative flex h-[180px] w-full flex-col items-center justify-center overflow-hidden rounded-3xl bg-white p-3 text-center shadow-[0_4px_24px_0_#3986A373]">
                                {{-- eclipse bg --}}
                                <img src="{{ asset("assets/images/landing/produk/bisikan/eclipse/Ellipse_1.webp") }}" alt="" class="absolute bottom-0 right-0 z-0" />
                                <img src="{{ asset("assets/images/landing/produk/bisikan/eclipse/Ellipse_2.webp") }}" alt="" class="absolute bottom-0 right-0 z-0" />
                                <img src="{{ asset("assets/images/landing/produk/bisikan/eclipse/Ellipse_3.webp") }}" alt="" class="absolute left-0 top-0 z-0" />
                                <img src="{{ asset("assets/images/landing/produk/bisikan/eclipse/Ellipse_4.webp") }}" alt="" class="absolute bottom-0 left-0 z-0" />
                                <img src="{{ asset("assets/images/landing/produk/bisikan/eclipse/Ellipse_5.webp") }}" alt="" class="absolute left-0 top-0 z-0" />

                                <div class="z-10 flex w-full flex-col justify-center" style="height: calc(100% - 1rem)">
                                    <span class="mb-1 block text-center text-xs font-semibold leading-tight text-cyan-950 sm:text-sm md:text-base lg:text-lg xl:text-xl">Youtube</span>
                                    <span class="my-1 block text-center text-[10px] leading-tight text-[#555555] sm:text-xs md:text-sm">Video terbaru BISIKAN Youtube akan diupdate setiap:</span>
                                    <span class="block text-center text-xs font-bold leading-tight text-cyan-950 sm:text-sm md:text-base lg:text-lg">Minggu ke-2 Tiap Bulan</span>
                                </div>
                            </div>
                        </div>

                        {{-- Card Instagram --}}
                        <div class="flex flex-1 flex-col items-center justify-center">
                            <div class="relative flex h-[180px] w-full flex-col items-center justify-center overflow-hidden rounded-3xl bg-white p-3 text-center shadow-[0_4px_24px_0_#3986A373]">
                                {{-- eclipse bg --}}
                                <img src="{{ asset("assets/images/landing/produk/bisikan/eclipse/Ellipse_1.webp") }}" alt="" class="absolute bottom-0 right-0 z-0" />
                                <img src="{{ asset("assets/images/landing/produk/bisikan/eclipse/Ellipse_2.webp") }}" alt="" class="absolute bottom-0 right-0 z-0" />
                                <img src="{{ asset("assets/images/landing/produk/bisikan/eclipse/Ellipse_3.webp") }}" alt="" class="absolute left-0 top-0 z-0" />
                                <img src="{{ asset("assets/images/landing/produk/bisikan/eclipse/Ellipse_4.webp") }}" alt="" class="absolute bottom-0 left-0 z-0" />
                                <img src="{{ asset("assets/images/landing/produk/bisikan/eclipse/Ellipse_5.webp") }}" alt="" class="absolute left-0 top-0 z-0" />

                                <div class="z-10 flex w-full flex-col justify-center" style="height: calc(100% - 1rem)">
                                    <span class="mb-1 block text-center text-xs font-semibold leading-tight text-cyan-950 sm:text-sm md:text-base lg:text-lg xl:text-xl">Instagram Live BISIKAN</span>
                                    <span class="my-1 block text-center text-[10px] leading-tight text-[#555555] sm:text-xs md:text-sm">Live Instagram BISIKAN hadir setiap:</span>
                                    <span class="block text-center text-xs font-bold leading-tight text-cyan-950 sm:text-sm md:text-base lg:text-lg">Awal Bulan</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Mobile View --}}
        <div class="block px-4 md:hidden">
            <div class="flex w-full flex-col gap-6 rounded-3xl bg-white px-4 py-6 shadow-lg">
                {{-- Container Sosmed Mobile --}}
                <div class="flex w-full items-center justify-between gap-2">
                    <!-- Spotify -->
                    <a href="{{ $sosmed[0]["link"] ?? "" }}" target="_blank" rel="noopener noreferrer" class="h-[clamp(2.5rem, 6vw, 3.25rem)] flex basis-1/3 items-center justify-center gap-1 rounded-full border-4 border-[#8FE0AC] bg-gradient-to-r from-[#8FE0AC] to-[#3986A3] px-3 py-2 font-semibold text-white shadow ring-2 ring-inset ring-white">
                        <img src="{{ asset($sosmed[0]["icon"] ?? "") }}" alt="{{ $sosmed[0]["platform"] ?? "Spotify" }}" class="h-[clamp(18px,3vw,24px)] w-[clamp(18px,3vw,24px)]" />
                        <span class="text-[clamp(13px,3vw,16px)] drop-shadow">
                            {{ $sosmed[0]["platform"] ?? "Spotify" }}
                        </span>
                    </a>

                    <!-- Instagram -->
                    <a href="{{ $sosmed[1]["link"] ?? "#" }}" target="_blank" rel="noopener noreferrer" class="h-[clamp(2.5rem, 6vw, 3.25rem)] flex basis-1/3 items-center justify-center gap-1 rounded-full border-4 border-[#D77BB2] bg-gradient-to-r from-[#D77BB2] to-[#3986A3] px-3 py-2 font-semibold text-white shadow ring-2 ring-inset ring-white">
                        <img src="{{ asset($sosmed[1]["icon"] ?? "") }}" alt="{{ $sosmed[1]["platform"] ?? "Instagram" }}" class="h-[clamp(18px,3vw,24px)] w-[clamp(18px,3vw,24px)]" />
                        <span class="text-[clamp(12px,3vw,15px)] drop-shadow">
                            {{ $sosmed[1]["platform"] ?? "Instagram" }}
                        </span>
                    </a>

                    <!-- Youtube -->
                    <a href="{{ $sosmed[2]["link"] ?? "#" }}" target="_blank" rel="noopener noreferrer" class="h-[clamp(2.5rem, 6vw, 3.25rem)] flex basis-1/3 items-center justify-center gap-1 rounded-full border-4 border-[#DC6E6E] bg-gradient-to-r from-[#DC6E6E] to-[#3986A3] px-3 py-2 font-semibold text-white shadow ring-2 ring-inset ring-white">
                        <img src="{{ asset($sosmed[2]["icon"] ?? "") }}" alt="{{ $sosmed[2]["platform"] ?? "Youtube" }}" class="h-[clamp(18px,3vw,24px)] w-[clamp(18px,3vw,24px)]" />
                        <span class="text-[clamp(13px,3vw,16px)] drop-shadow">
                            {{ $sosmed[2]["platform"] ?? "Youtube" }}
                        </span>
                    </a>
                </div>

                {{-- Containers card info Mobile --}}
                <div class="flex flex-col gap-4">
                    {{-- Card 1: Spotify --}}
                    <div class="relative flex flex-col items-center overflow-hidden rounded-xl bg-white p-4 shadow-[0_4px_24px_0_#3986A373]">
                        {{-- eclipse bg --}}
                        <img src="{{ asset("assets/images/landing/produk/bisikan/eclipse/Ellipse_6.webp") }}" alt="" class="absolute bottom-0 z-0" />
                        <img src="{{ asset("assets/images/landing/produk/bisikan/eclipse/Ellipse_7.webp") }}" alt="" class="absolute bottom-0 z-0" />
                        <img src="{{ asset("assets/images/landing/produk/bisikan/eclipse/Ellipse_3.webp") }}" alt="" class="absolute left-0 top-0 z-0" />
                        <img src="{{ asset("assets/images/landing/produk/bisikan/eclipse/Ellipse_4.webp") }}" alt="" class="absolute bottom-0 left-0 z-0" />
                        <img src="{{ asset("assets/images/landing/produk/bisikan/eclipse/Ellipse_5.webp") }}" alt="" class="absolute left-0 top-0 z-0" />

                        <div class="z-10 flex flex-col justify-center text-center">
                            <span class="text-lg font-semibold text-cyan-950">BISIKAN Spotify Update</span>
                            <span class="mt-1 text-center text-lg text-[#555555]">Diadakan Setiap :</span>
                            <span class="mt-1 text-base font-bold text-cyan-950">Awal Bulan</span>
                        </div>
                    </div>

                    {{-- Card 2: Youtube --}}
                    <div class="relative flex flex-col items-center overflow-hidden rounded-xl bg-white p-4 shadow-[0_4px_24px_0_#3986A373]">
                        {{-- eclipse bg --}}
                        <img src="{{ asset("assets/images/landing/produk/bisikan/eclipse/Ellipse_6.webp") }}" alt="" class="absolute bottom-0 z-0" />
                        <img src="{{ asset("assets/images/landing/produk/bisikan/eclipse/Ellipse_7.webp") }}" alt="" class="absolute bottom-0 z-0" />
                        <img src="{{ asset("assets/images/landing/produk/bisikan/eclipse/Ellipse_3.webp") }}" alt="" class="absolute left-0 top-0 z-0" />
                        <img src="{{ asset("assets/images/landing/produk/bisikan/eclipse/Ellipse_4.webp") }}" alt="" class="absolute bottom-0 left-0 z-0" />
                        <img src="{{ asset("assets/images/landing/produk/bisikan/eclipse/Ellipse_5.webp") }}" alt="" class="absolute left-0 top-0 z-0" />

                        <div class="z-10 flex flex-col justify-center text-center">
                            <span class="text-lg font-semibold text-cyan-950">Youtube</span>
                            <span class="mt-1 text-center text-lg text-[#555555]">Video terbaru BISIKAN di Youtube akan diupdate setiap:</span>
                            <span class="mt-1 text-base font-bold text-cyan-950">Minggu ke-2</span>
                        </div>
                    </div>

                    {{-- Card 3: Instagram (Baru ditambahkan) --}}
                    <div class="relative flex flex-col items-center overflow-hidden rounded-xl bg-white p-4 shadow-[0_4px_24px_0_#3986A373]">
                        {{-- eclipse bg --}}
                        <img src="{{ asset("assets/images/landing/produk/bisikan/eclipse/Ellipse_6.webp") }}" alt="" class="absolute bottom-0 z-0" />
                        <img src="{{ asset("assets/images/landing/produk/bisikan/eclipse/Ellipse_7.webp") }}" alt="" class="absolute bottom-0 z-0" />
                        <img src="{{ asset("assets/images/landing/produk/bisikan/eclipse/Ellipse_3.webp") }}" alt="" class="absolute left-0 top-0 z-0" />
                        <img src="{{ asset("assets/images/landing/produk/bisikan/eclipse/Ellipse_4.webp") }}" alt="" class="absolute bottom-0 left-0 z-0" />
                        <img src="{{ asset("assets/images/landing/produk/bisikan/eclipse/Ellipse_5.webp") }}" alt="" class="absolute left-0 top-0 z-0" />

                        <div class="z-10 flex flex-col justify-center text-center">
                            <span class="text-lg font-semibold text-cyan-950">Instagram Live BISIKAN</span>
                            <span class="mt-1 text-center text-lg text-[#555555]">Live Instagram BISIKAN hadir setiap:</span>
                            <span class="mt-1 text-base font-bold text-cyan-950">Awal Bulan</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- FAQS START --}}
    <section class="z-10 mx-4 mt-20 sm:mx-20 lg:my-14">
        <ul class="flex flex-col">
            @php
                // Daftar kata/kalimat bahasa asing yang ingin di-italic
                $italicWords = ["podcast", "email"];
                if (! function_exists("italicizeWords")) {
                    function italicizeWords($text, $words)
                    {
                        foreach ($words as $word) {
                            // Case-insensitive, avoid double-wrapping
                            $text = preg_replace("/\b(" . preg_quote($word, "/") . ")\b/i", '<i>$1</i>', $text);
                        }
                        return $text;
                    }
                }
            @endphp

            @foreach ($faqs as $faq)
                <li class="my-2 rounded-lg border bg-white py-2 shadow-sm" x-data="accordion({{ $loop->index }})" :class="isActive()">
                    <div class="mx-2 flex flex-row sm:mx-5">
                        <div class="flex w-full flex-col p-3 max-sm:p-2">
                            <h2 @click="handleClick()" class="cursor-pointer text-lg font-medium max-sm:text-[16.5px]">
                                <span>{!! italicizeWords($faq["question"], $italicWords) !!}</span>
                            </h2>
                            <div x-ref="tab" :style="handleToggle()" class="max-h-0 overflow-hidden transition-all duration-500">
                                <p class="mt-3 text-justify text-[#6F6C90] max-sm:mt-2 max-sm:text-[15px]">
                                    {!! italicizeWords($faq["answer"], $italicWords) !!}
                                </p>
                            </div>
                        </div>

                        <div class="ml-6 hidden items-center sm:flex">
                            <template x-if="$store.accordion.tab === idx">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20 20L4 4M20 4L4 20" stroke="#3986A3" stroke-width="3" stroke-linecap="round" />
                                </svg>
                            </template>
                            <template x-if="$store.accordion.tab !== idx">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_7503_13741)">
                                        <path d="M22.3996 8L11.9996 19.2L1.59961 8" stroke="#3986A3" stroke-width="3" stroke-linecap="square" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_7503_13741">
                                            <rect width="24" height="24" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </template>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </section>

    {{-- FAQS END --}}
@endsection

@section('script')
    {{-- SWIPER JS --}}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const contentBisikanSwiper = new Swiper('.content-bisikan-swiper', {
                slidesPerView: 1.2,
                initialSlide: 0,
                spaceBetween: 20,
                loop: true,
                pagination: {
                    el: '.swiper-pagination',
                    type: 'progressbar',
                },
                breakpoints: {
                    640: {
                        slidesPerView: 1.5,
                    },
                    768: {
                        slidesPerView: 1.8,
                    },
                    1024: {
                        slidesPerView: 2.2,
                    },
                },
            });

            const topicContentBisikan = new Swiper('.topic-content-swiper', {
                spaceBetween: 20,
                loop: true,
                pagination: {
                    el: '.swiper-pagination',
                    type: 'progressbar',
                },
                breakpoints: {
                    0: {
                        slidesPerGroup: 1,
                        slidesPerView: 3.5,
                    },
                    640: {
                        slidesPerView: 1.5,
                    },
                    768: {
                        slidesPerView: 1.8,
                    },
                    1024: {
                        slidesPerView: 2.2,
                    },
                },
            });
        });
    </script>

    {{-- FAQ STYLE FOR ACTIVE BORDER --}}
    <style>
        .border-active {
            border-color: #3986a3 !important;
            border-width: 2px !important;
        }
    </style>

    {{-- SCRIPT ACCORDION FAQS --}}
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.store('accordion', {
                tab: 0,
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
                    return this.$store.accordion.tab === this.idx ? `max-height: ${this.$refs.tab.scrollHeight}px` : '';
                },
                isActive() {
                    return this.$store.accordion.tab === this.idx ? 'border-active' : '';
                },
            }));
        });
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
        };

        const closeModal = (modal) => {
            const modalClose = document.querySelector(modal);
            modalClose.classList.add('hidden');
            modalin.classList.add('hidden');
            header.classList.add('fixed');
            hero.style.height = '';
        };

        document.querySelectorAll('.openModal').forEach((button) => {
            button.addEventListener('click', () => {
                const modalIndex = button.dataset.modalIndex;
                openModal(allModals[modalIndex]);
            });
        });

        document.querySelectorAll('.closeModal').forEach((button) => {
            button.addEventListener('click', () => {
                const modalIndex = button.dataset.modalIndex;
                closeModal(allModals[modalIndex]);
            });
        });
    </script>
    {{-- SCRIPT ACCORDION FAQS --}}
@endsection
