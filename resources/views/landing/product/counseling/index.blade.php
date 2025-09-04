@extends(
    "landing.layouts.app",
    [
        "title" => "Berbinar Insightful Indonesia",
    ]
)

@section("style")
    <style>
        .text-gradient {
            background: linear-gradient(to right, #3886a3, #225062);
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
        }

        #swiperKonseling {
            width: 1100px;
            margin: 20px auto;
            overflow: hidden;
        }

        #swiperPsikolog {
            width: 1130px;
            overflow: hidden;
            margin: 25px auto;
        }

        #swiperPsikolog .swiper-button-next::after,
        #swiperPsikolog .swiper-button-prev::after {
            content: '';
        }

        #swiperPsikolog .swiper-button-prev,
        #swiperPsikolog .swiper-button-next {
            width: 35px;
            height: 35px;
            background-color: #74aabf;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
        }

        #swiperPeer {
            width: 1000px;
            overflow: hidden;
            margin: 20px auto;
        }

        #swiperTestimoni {
            width: 900px;
            margin: 20px auto;
            overflow: hidden;
            padding-bottom: 10px;
        }

        .bg-psikolog {
            background-image: url('/assets/images/landing/asset-konseling/image/bg-psikolog.png');
        }

        .bg-wave {
            background-image: url('/assets/images/landing/asset-konseling/vector/vector-wave.svg');
            background-repeat: no-repeat;
            background-position: center;
        }

        .swiper-pagination {
            position: relative;
            margin-top: 20px;
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
            background-color: #3886a3;
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
            --swiper-scrollbar-drag-bg-color: #9dd4ee;
            --swiper-scrollbar-size: 10px;
        }

        .border-active {
            border: 1.5px solid #3986a3;
        }

        @media (min-width: 0px) and (max-width: 640px) {
            #swiperKonseling {
                width: 580px;
            }

            #swiperPsikolog {
                width: 800px;
                margin: 10px auto;
            }

            #swiperPeer {
                width: 550px;
                margin: 10px auto;
            }

            #swiperTestimoni {
                width: 500px;
            }

            .swiperContainer {
                overflow: hidden;
                margin: 0px 17px;
            }
        }

        @media (max-width: 767px) {
            .bg-psikolog {
                background-image: none;
            }
        }

        @media (min-width: 641px) and (max-width: 767px) {
            #swiperKonseling {
                width: 670px;
            }

            #swiperPsikolog {
                width: 700px;
            }

            #swiperPeer {
                width: 700px;
            }

            #swiperTestimoni {
                width: 550px;
            }

            .swiperContainer {
                overflow: hidden;
                margin: 0px 80px;
            }
        }

        @media (min-width: 768px) and (max-width: 992px) {
            #swiperTestimoni {
                width: 800px;
                margin: 20px auto;
            }
        }

        @media (min-width: 768px) and (max-width: 1024px) {
            #swiperKonseling {
                width: 950px;
            }

            #swiperPsikolog {
                width: 950px;
            }

            #swiperPeer {
                width: 750px;
            }

            .swiperContainer {
                overflow: hidden;
                margin: 0px 80px;
            }
        }

        @media (min-width: 1025px) {
            #swiperPsikolog {
                padding-left: 25px;
                padding-right: 25px;
            }
        }
    </style>
@endsection

@php
    function italic_en($text)
    {
        $enWords = ["Peer Counselor", "counselor peer", "Online", "Offline", "Registration", "Weekend", "Weekdays", "Zoom Meeting", "Region", "Session", "Price", "Testimoni", "FAQ", "Berbinar", "User"];
        foreach ($enWords as $word) {
            $text = str_replace($word, "<i>$word</i>", $text);
        }
        return $text;
    }
@endphp

@section("content")
    {{-- HERO SECTION --}}
    <section class="relative max-sm:overflow-x-hidden">
        <div class="absolute left-0 top-5 z-0 max-sm:top-32">
            <img src="{{ asset("assets/images/landing/asset-konseling/vector/vector-hero1.svg") }}" alt="Vector" class="h-[500px] w-auto max-sm:h-[250px]" />
        </div>

        <div class="absolute right-0 top-8 z-0 max-md:-right-28 max-sm:-right-20 max-sm:top-40">
            <img src="{{ asset("assets/images/landing/asset-konseling/vector/vector-hero2.svg") }}" alt="Vector" class="h-[500px] w-auto max-sm:h-[250px]" />
        </div>

        <div class="relative">
            <div class="z-10 mx-20 mt-40 flex flex-row items-center justify-between gap-x-10 max-sm:mx-4 max-sm:mt-32">
                <div class="max-lg:min-w-auto flex max-w-xl flex-1 flex-col space-y-6 max-sm:space-y-2">
                    <a href="{{ route("product.index") }}">
                        <div class="flex cursor-pointer items-center space-x-2 lg:order-1">
                            <img src="{{ asset("assets/images/landing/asset-konseling/vector/left-arrow.svg") }}" alt="Left Arrow" class="h-3 w-auto" />
                            <p class="text-[15px] font-semibold text-[#3986A3]">Produk Berbinar</p>
                        </div>
                    </a>

                    <div class="hidden w-full items-center justify-center max-lg:flex-none max-md:flex lg:order-2 lg:w-auto">
                        <img src="{{ asset("assets/images/landing/asset-konseling/vector/hero.png") }}" alt="Konseling" class="h-[340px] w-auto object-contain max-sm:h-[320px]" />
                    </div>

                    <div class="lg:order-3">
                        <h2 class="text-gradient py-2 text-5xl font-bold max-sm:text-3xl">Berbinar Konseling</h2>
                    </div>

                    <div class="lg:order-4">
                        <p class="text-justify text-lg text-[#70787D] max-lg:text-[17px] max-sm:text-[15px] max-sm:leading-normal">
                            Merasa terjebak dalam rutinitas yang membosankan? Membutuhkan panduan untuk mengatasi masalah hidup? Konseling Berbinar solusinya! Bersama para psikolog dan
                            <i>peer counselor</i>
                            yang berpengalaman, Berbinar siap membantu klien untuk menemukan solusi tepat mengenai masalah yang dihadapi, dengan mencapai pertumbuhan untuk menuju hidup yang lebih baik.
                        </p>
                    </div>

                    <div id="openModal" class="flex justify-start lg:order-5">
                        <button class="text-md openModalBtn rounded-xl bg-gradient-to-r from-[#3986A3] to-[#225062] px-4 py-2 text-white max-sm:rounded-md max-sm:px-6 max-sm:text-[15px]">Lakukan Konseling</button>
                    </div>
                    <div id="modal" class="fixed inset-0 -top-6 z-30 flex hidden items-center justify-center bg-gray-900 bg-opacity-50 backdrop-blur-md max-sm:-top-2">
                        <div class="h-auto max-h-screen w-[70%] overflow-y-auto rounded-2xl bg-white p-6 shadow-md max-lg:h-[90%] max-sm:w-[86%] max-sm:px-2">
                            <h1 class="bg-gradient-to-r from-amber-400 to-yellow-700 bg-clip-text pb-4 text-center text-3xl font-bold text-transparent max-sm:text-2xl">Syarat dan Ketentuan</h1>
                            <div class="mb-6">
                                <div class="flex items-start gap-2">
                                    <img src="{{ asset("assets/images/landing/asset-konseling/vector/location.png") }}" alt="Lokasi" class="mt-0.5 h-5 w-5" />
                                    <span class="font-semibold">Lokasi offline Konseling</span>
                                </div>
                                <ol class="mt-1 list-decimal space-y-1 pl-7">
                                    <li class="max-sm:text-sm">a. Psikolog : Subaraya, Kediri, Sidoarjo, dan Jakarta</li>
                                    <li class="max-sm:text-sm">
                                        b.
                                        <i>Peer Counselor</i>
                                        : Jakarta, Makassar, dan Nganjuk
                                    </li>
                                </ol>
                            </div>

                            <div class="mb-6">
                                <div class="flex items-start gap-2">
                                    <img src="{{ asset("assets/images/landing/asset-konseling/vector/payment.png") }}" alt="Pembayaran" class="mt-0.5 h-5 w-5" />
                                    <span class="font-semibold">Pembayaran</span>
                                </div>
                                <ol class="mt-1 list-decimal space-y-1 pl-7">
                                    <li class="max-sm:text-sm">Melakukan pembayaran ke Bank Mandiri dengan no rekening 1400020763711 a.n. Berbinar Insightful Indonesia dengan aturan transfer 1×24 jam.</li>
                                </ol>
                            </div>

                            <div class="mb-6">
                                <div class="flex items-start gap-2">
                                    <img src="{{ asset("assets/images/landing/asset-konseling/vector/chat.png") }}" alt="Pembalasan Pesan" class="mt-0.5 h-5 w-5" />
                                    <span class="font-semibold">Pembalasan Pesan</span>
                                </div>
                                <ol class="mt-1 list-decimal space-y-1 pl-7">
                                    <li class="max-sm:text-sm">Tidak membalas pesan admin dalam 1×24 jam, pendaftaran oleh klien secara otomatis dibatalkan.</li>
                                    <li class="max-sm:text-sm">Tidak membalas pesan admin dalam 1×24 jam, jadwal yang sudah ditentukan oleh klien berhak untuk diubah oleh Tim Berbinar dan kesepakatan dari klien.</li>
                                    <li class="max-sm:text-sm">Tidak membalas pesan admin dalam 2×24 jam setelah melakukan pembayaran, pembayaran dianggap hangus.</li>
                                </ol>
                            </div>

                            <div class="mb-6">
                                <div class="flex items-start gap-2">
                                    <img src="{{ asset("assets/images/landing/asset-konseling/vector/cancel.png") }}" alt="Pengajuan Pembatalan" class="mt-0.5 h-5 w-5" />
                                    <span class="font-semibold">Pengajuan Pembatalan</span>
                                </div>
                                <ol class="mt-1 list-decimal space-y-1 pl-7">
                                    <li class="max-sm:text-sm">Pengajuan proses pembatalan layanan konseling dapat dilakukan dalam kurun waktu 1×24 jam setelah proses administrasi dan dana yang telah dibayarkan akan dikembalikan 100%.</li>
                                </ol>
                            </div>

                            <div class="mt-4 flex justify-center lg:gap-x-3">
                                <a href="{{ route("product.counseling.registration") }}">
                                    <button id="" class="rounded-md bg-gradient-to-r from-[#3986A3] to-[#225062] px-20 py-1.5 font-medium text-white max-sm:text-[15px]">Saya Mengerti</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex w-full flex-initial items-center justify-center max-lg:flex-1 max-md:hidden lg:w-auto">
                    <img src="{{ asset("assets/images/landing/asset-konseling/vector/hero.png") }}" alt="Konseling" class="h-[340px] w-auto max-lg:h-[320px]" />
                </div>
            </div>
        </div>
    </section>

    {{-- KONSELING --}}
    <section class="relative w-full">
        <div class="absolute left-0 top-4 z-0 max-sm:top-40">
            <img src="/assets/images/landing/asset-konseling/vector/vector-line.svg" alt="Vector Image" class="" />
        </div>

        <p class="font relative z-10 mx-20 mb-6 mt-24 text-center text-4xl font-semibold text-black max-md:mt-16 max-sm:mx-2 max-sm:my-4 max-sm:mt-[60px] max-sm:text-2xl">Tentukan Kebutuhan Konselingmu</p>

        <div class="hidden sm:block">
            <div class="swiperContainer">
                <div class="swiper" id="swiperKonseling">
                    <div class="swiper-wrapper">
                        @foreach ($konselings as $konseling)
                            <div class="swiper-slide">
                                <div class="flex h-auto min-h-[468px] w-auto flex-col justify-start rounded-xl bg-white p-5 text-center shadow-md max-lg:min-h-[538px] max-md:min-h-[515px] max-sm:min-h-[450px] max-sm:p-4">
                                    <p class="text-gradient min-h-[60px] text-2xl font-semibold leading-tight max-sm:min-h-0 max-sm:text-xl lg:min-h-0">{!! italic_en($konseling["name"]) !!}</p>
                                    <img src="{{ asset($konseling["image"]) }}" alt="{{ $konseling["name"] }}" class="mx-auto mt-4 h-32 w-auto max-sm:h-24" />
                                    <img src="{{ asset("assets/images/landing/asset-konseling/vector/vector-divider.svg") }}" alt="Vector" class="my-4 w-full" />

                                    <div>
                                        @foreach ($konseling["description"] as $desc)
                                            <div class="flex flex-row items-start gap-x-2">
                                                <img src="{{ asset("assets/images/landing/asset-tentang/green-check.svg") }}" alt="Vector" class="h-[18px] w-[18px] max-sm:h-4 max-sm:w-4" />
                                                <p class="-mt-0.5 text-justify text-[16px] text-[#70787D] max-sm:text-[15px]">{!! italic_en($desc) !!}</p>
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

        <div class="relative z-10 block sm:hidden">
            <div class="mx-4 grid grid-cols-1 gap-3">
                @foreach ($konselings as $konseling)
                    <div class="flex flex-col rounded-xl bg-white p-4 shadow-md">
                        <div class="mb-3 flex flex-row items-center space-x-3">
                            <img src="{{ asset($konseling["image"]) }}" alt="{{ $konseling["name"] }}" class="h-20 w-auto" />
                            <p class="text-gradient text-[19px] font-semibold leading-tight">{!! italic_en($konseling["name"]) !!}</p>
                        </div>
                        <div>
                            @foreach ($konseling["description"] as $desc)
                                <div class="flex flex-row items-start gap-x-2">
                                    <img src="{{ asset("assets/images/landing/asset-tentang/green-check.svg") }}" alt="Vector" class="h-[18px] w-[18px] max-sm:h-4 max-sm:w-4" />
                                    <p class="-mt-0.5 text-justify text-[16px] text-[#70787D] max-sm:text-[15px]">{!! italic_en($desc) !!}</p>
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
        <div class="relative z-10 mx-[320px] mt-8 justify-center text-center max-xl:mx-12 max-sm:mx-3 max-sm:mt-12">
            <h1 class="font text-4xl font-semibold text-black max-sm:text-[29px]">
                Psikolog
                <span class="bg-[#3886A3] px-2 text-white">Berbinar</span>
            </h1>
            <p class="mt-2 text-lg text-[#70787D] max-sm:text-[15px] max-sm:leading-snug">Tim kami terdiri dari psikolog berpengalaman, membantu Anda menavigasi hidup dengan bijaksana, memberikan dukungan emosional</p>
        </div>

        <div class="swiperContainer">
            <div class="swiper mt-10" id="swiperPsikolog">
                <div class="swiper-wrapper">
                    @foreach ($psikologs as $psikolog)
                        <div class="swiper-slide">
                            <div class="flex flex-col items-center">
                                <img src="{{ asset($psikolog["image"]) }}" alt="{{ $psikolog["name"] }}" class="h-[180px] w-auto max-sm:h-[140px]" />
                                <p class="mt-2 text-center text-lg font-semibold text-black max-sm:text-[16px] max-sm:leading-snug">
                                    {!! italic_en($psikolog["name"]) !!}
                                    <br />
                                    {!! italic_en($psikolog["title"]) !!}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="flex max-lg:hidden">
                    <div class="swiper-button-prev">
                        <img src="{{ asset("assets/images/landing/asset-konseling/vector/left-navigation.svg") }}" class="h-auto w-3" />
                    </div>
                    <div class="swiper-button-next">
                        <img src="{{ asset("assets/images/landing/asset-konseling/vector/right-navigation.svg") }}" class="h-auto w-3" />
                    </div>
                </div>

                <div class="pt-10 max-sm:pt-4">
                    <div class="swiper-scrollbar hidden max-lg:flex"></div>
                </div>
            </div>
        </div>
    </section>

    {{-- JADWAL KONSELING PSIKOLOG --}}
    <div class="bg-psikolog relative mx-20 mt-24 h-[300px] rounded-3xl bg-cover bg-center p-10 max-md:h-[800px] max-md:overflow-hidden max-sm:mx-4">
        <img src="/assets/images/landing/asset-produk/vector-curling-mobile.png" alt="Background" class="absolute -top-[150px] left-0 hidden h-[820px] w-[1000px] rounded-t-3xl object-cover max-md:flex" />
        <div class="absolute inset-0 flex rounded-3xl bg-[#2D6B8280] max-md:hidden"></div>

        <div class="relative flex flex-col justify-center space-y-4 text-center">
            <h1 class="text-3xl font-semibold text-white max-sm:text-xl">Jadwalkan Konselingmu Bersama Psikolog Kami</h1>

            <div class="flex flex-col items-center gap-y-10 md:mx-20 md:flex-row md:justify-center md:gap-x-20 md:gap-y-0">
                <!-- Weekdays -->
                <div class="flex w-full max-w-[318px] flex-col items-center">
                    <!-- Judul -->
                    <div class="mb-4 flex flex-row items-center justify-center">
                        <p class="text-lg font-medium italic text-white md:text-2xl">Weekdays</p>
                        <img src="{{ asset("assets/images/landing/asset-konseling/vector/sun.png") }}" alt="Vector" class="ml-2 h-4 w-auto md:h-5" />
                    </div>

                    <!-- Card -->
                    <div class="relative flex h-full max-w-[318px] flex-col overflow-hidden rounded-xl bg-white px-4 py-5 shadow-lg md:max-h-[394px] md:px-6 md:py-6">
                        <!-- Ribbon -->
                        <div class="absolute right-0 top-0">
                            <div class="flex h-6 w-[110px] translate-x-[28px] translate-y-[12px] rotate-45 items-center justify-center bg-gradient-to-r from-[#F7B23B] via-[#D29732] to-[#AD7D29] font-plusJakartaSans text-[11px] font-bold text-white shadow-md md:h-8 md:w-[140px] md:translate-x-[35px] md:translate-y-[18px] md:text-sm">8%</div>
                        </div>

                        <!-- Online -->
                        <div class="flex flex-col items-start font-plusJakartaSans font-semibold">
                            <span class="mb-1 text-base text-black md:mb-2 md:text-xl">Online👩‍💻</span>
                            <div class="flex flex-col items-start">
                                <span class="-mb-1 text-sm text-[#676767] line-through md:-mb-1 md:text-lg">Rp150.000</span>
                                <div class="flex items-baseline gap-2">
                                    <span class="bg-gradient-to-r from-[#F7B23B] via-[#D29732] to-[#AD7D29] bg-clip-text text-2xl text-transparent md:text-[32px]">Rp135.000</span>
                                    <span class="-top-1 font-plusJakartaSans text-sm font-normal text-black md:-top-2 md:text-lg">/jam</span>
                                </div>
                            </div>
                        </div>

                        <!-- Divider -->
                        <div class="mx-auto my-4 h-[1px] w-full max-w-[220px] bg-gradient-to-r from-transparent via-[#D7E6ED] to-transparent md:my-6 md:w-[270px]"></div>

                        <!-- Offline -->
                        <div class="flex flex-col items-start font-plusJakartaSans font-semibold">
                            <span class="mb-1 text-base text-black md:mb-2 md:text-xl">Offline🙋‍♀️</span>
                            <div class="flex flex-col items-start">
                                <div class="flex items-baseline gap-1">
                                    <span class="bg-gradient-to-r from-[#F7B23B] via-[#D29732] to-[#AD7D29] bg-clip-text text-2xl text-transparent md:text-[32px]">Rp175.000</span>
                                    <span class="-top-1 font-plusJakartaSans text-sm font-normal text-black md:-top-2 md:text-lg">/jam</span>
                                </div>
                            </div>
                        </div>

                        <!-- Button -->
                        <button id="openModal" class="pt-5 md:pt-6">
                            <a href="#" class="openModalBtn block w-full rounded-lg bg-gradient-to-r from-[#F7B23B] via-[#D29732] to-[#AD7D29] py-2 text-center font-plusJakartaSans text-sm font-semibold text-white md:px-[83.75px] md:text-[14px]">Mulai Sekarang</a>
                        </button>
                    </div>
                </div>

                <!-- Weekends (copy structure di atas, ganti harga & text sesuai kebutuhan) -->
                <div class="flex w-full max-w-[318px] flex-col items-center">
                    <!-- Judul -->
                    <div class="mb-4 flex flex-row items-center justify-center">
                        <p class="text-lg font-medium italic text-white md:text-2xl">Weekends</p>
                        <img src="{{ asset("assets/images/landing/asset-konseling/vector/sunglasses.png") }}" alt="Vector" class="ml-2 h-6 w-auto md:h-8" />
                    </div>

                    <!-- Card -->
                    <div class="relative flex h-full max-w-[318px] flex-col overflow-hidden rounded-xl bg-white px-4 py-5 shadow-lg md:max-h-[394px] md:px-6 md:py-6">
                        <!-- Ribbon -->
                        <div class="absolute right-0 top-0">
                            <div class="flex h-6 w-[110px] translate-x-[28px] translate-y-[12px] rotate-45 items-center justify-center bg-gradient-to-r from-[#F7B23B] via-[#D29732] to-[#AD7D29] font-plusJakartaSans text-[11px] font-bold text-white shadow-md md:h-8 md:w-[140px] md:translate-x-[35px] md:translate-y-[18px] md:text-sm">8%</div>
                        </div>

                        <!-- Online -->
                        <div class="flex flex-col items-start font-plusJakartaSans font-semibold">
                            <span class="mb-1 text-base text-black md:mb-2 md:text-xl">Online👩‍💻</span>
                            <div class="flex flex-col items-start">
                                <span class="-mb-1 text-sm text-[#676767] line-through md:-mb-1 md:text-lg">Rp200.000</span>
                                <div class="flex items-baseline gap-1">
                                    <span class="bg-gradient-to-r from-[#F7B23B] via-[#D29732] to-[#AD7D29] bg-clip-text text-2xl text-transparent md:text-[32px]">Rp180.000</span>
                                    <span class="-top-1 font-plusJakartaSans text-sm font-normal text-black md:-top-2 md:text-lg">/jam</span>
                                </div>
                            </div>
                        </div>

                        <!-- Divider -->
                        <div class="mx-auto my-4 h-[1px] w-full max-w-[220px] bg-gradient-to-r from-transparent via-[#D7E6ED] to-transparent md:my-6 md:w-[270px]"></div>

                        <!-- Offline -->
                        <div class="flex flex-col items-start font-plusJakartaSans font-semibold">
                            <span class="mb-1 text-base text-black md:mb-2 md:text-xl">Offline🙋‍♀️</span>
                            <div class="flex flex-col items-start">
                                <div class="flex items-baseline gap-1">
                                    <span class="bg-gradient-to-r from-[#F7B23B] via-[#D29732] to-[#AD7D29] bg-clip-text text-2xl text-transparent md:text-[32px]">Rp225.000</span>
                                    <span class="-top-1 font-plusJakartaSans text-sm font-normal text-black md:-top-2 md:text-lg">/jam</span>
                                </div>
                            </div>
                        </div>

                        <!-- Button -->
                        <button id="openModal" class="pt-5 md:pt-6">
                            <a href="#" class="openModalBtn block w-full rounded-lg bg-gradient-to-r from-[#F7B23B] via-[#D29732] to-[#AD7D29] py-2 text-center font-plusJakartaSans text-sm font-semibold text-white md:px-[83.75px] md:text-[14px]">Mulai Sekarang</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- PEER COUNSELOR BERBINAR --}}
    <section>
        <div class="mx-[320px] mt-80 justify-center text-center max-xl:mx-12 max-md:mt-20 max-sm:mx-3 max-sm:mt-5">
            <h1 class="font text-4xl font-semibold text-black max-sm:text-[29px]">
                <i>Peer Counselor</i>
                <span class="bg-[#3886A3] px-2 text-white">Berbinar</span>
            </h1>
            <p class="mt-2 text-lg text-[#70787D] max-sm:text-[15px] max-sm:leading-snug">Tim kami terdiri dari psikolog berpengalaman, membantu Anda menavigasi hidup dengan bijaksana, memberikan dukungan emosional</p>
        </div>

        <div class="swiperContainer">
            <div class="swiper mt-10" id="swiperPeer">
                <div class="swiper-wrapper flex lg:justify-center">
                    @foreach ($peers as $peer)
                        <div class="swiper-slide">
                            <div class="flex flex-col items-center text-center">
                                <img src="{{ asset($peer["image"]) }}" alt="{{ $peer["name"] }}" class="h-[180px] w-auto max-sm:h-[140px]" />
                                <p class="mt-2 text-lg font-semibold text-black max-sm:text-[16px] max-sm:leading-snug">{!! italic_en($peer["name"]) !!}</p>
                                <p class="text-sm text-[#70787D]">{!! italic_en($peer["region"]) !!}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="hidden max-lg:hidden">
                    <div class="swiper-button-prev">
                        <img src="{{ asset("assets/images/landing/asset-konseling/vector/left-navigation.svg") }}" class="h-auto w-3" />
                    </div>
                    <div class="swiper-button-next">
                        <img src="{{ asset("assets/images/landing/asset-konseling/vector/right-navigation.svg") }}" class="h-auto w-3" />
                    </div>
                </div>

                <div class="pt-10">
                    <div class="swiper-scrollbar hidden max-lg:flex"></div>
                </div>
            </div>
        </div>
    </section>

    {{-- PEER COUNSELOR COUNSELING SCHEDULE --}}
    <div class="bg-psikolog relative mx-20 mt-24 h-[280px] rounded-3xl bg-cover p-10 max-md:h-[800px] max-md:overflow-hidden max-sm:mx-4">
        <img src="/assets/images/landing/asset-produk/vector-curling-mobile.png" alt="Background" class="absolute -top-[150px] left-0 hidden h-[750px] w-[1000px] rounded-t-3xl object-cover max-md:flex" />
        <div class="absolute inset-0 flex rounded-3xl bg-[#2D6B8280] max-md:hidden"></div>

        <div class="relative flex flex-col justify-center space-y-5 text-center">
            <h1 class="text-3xl font-semibold text-white">
                Konseling Bersama
                <i>Peer Counselor</i>
            </h1>

            <div class="mx-20 flex flex-row justify-center gap-x-20 max-md:flex-col max-md:gap-y-[250px]">
                <div class="mt-6 flex flex-1 justify-center">
                    <div class="relative mx-auto flex w-full max-w-[270px] justify-center">
                        <div class="absolute rounded-xl bg-white bg-opacity-90 px-6 py-4 shadow-md backdrop-blur-sm max-xl:p-4 max-md:px-8 max-sm:px-6">
                            <p class="text-md font-semibold text-black">
                                <span class="italic">Online</span>
                                👩‍💻
                            </p>
                            <p class="mt-2 text-justify text-sm text-[#70787D]">Lakukan dimanapun dan kapanpun melalui zoom meeting</p>
                            <div class="mt-2 flex flex-row items-center justify-center">
                                <p class="text-3xl font-semibold text-[#3986A3] max-lg:text-2xl">Rp45.000</p>
                                <p class="text-sm text-black">/1jam</p>
                            </div>

                            <div id="openModal" class="mb-1 mt-5 flex justify-center">
                                <button class="openModalBtn rounded-lg bg-gradient-to-r from-[#F7B23B] to-[#AD7D29] px-4 py-1.5 text-sm text-white">Mulai Sekarang</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-6 flex flex-1 justify-center">
                    <div class="relative mx-auto flex w-full max-w-[270px] justify-center">
                        <div class="absolute rounded-xl bg-white bg-opacity-90 px-6 py-4 shadow-md backdrop-blur-sm max-xl:p-4 max-md:px-8 max-sm:px-6">
                            <p class="text-md font-semibold text-black">
                                <span class="italic">Offline</span>
                                🗣️
                            </p>
                            <p class="mt-2 text-justify text-sm text-[#70787D]">Tentukan tempat dan waktu yang nyaman untuk berbicara langsung</p>
                            <div class="mt-2 flex flex-row items-center justify-center">
                                <p class="text-3xl font-semibold text-[#3986A3] max-lg:text-2xl">Rp55.000</p>
                                <p class="text-sm text-black">/1jam</p>
                            </div>

                            <div id="openModal" class="mb-1 mt-5 flex justify-center">
                                <button class="openModalBtn rounded-lg bg-gradient-to-r from-[#F7B23B] to-[#AD7D29] px-4 py-1.5 text-sm text-white">Mulai Sekarang</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- TESTIMONI USER --}}
    <section class="mt-60 max-md:mt-0">
        <h1 class="font mt-8 text-center text-4xl font-semibold text-black max-md:mx-10 max-sm:mx-2 max-sm:mt-2 max-sm:text-[29px]">
            Kata Mereka Setelah Konseling
            <span class="bg-primary px-2 text-white">Berbinar</span>
            ?
        </h1>
        <div class="swiperContainer">
            <div class="swiper" id="swiperTestimoni">
                <div class="swiper-wrapper pb-1 max-sm:pb-8">
                    @foreach ($testimonis as $testimoni)
                        <div class="swiper-slide">
                            <div class="flex h-auto w-auto flex-col items-center justify-center rounded-3xl bg-white p-5 text-center shadow-md">
                                <img src="{{ asset("assets/images/landing/asset-produk/vector-kutip.png") }}" alt="Kutip" class="h-8 w-auto max-sm:h-7" />

                                <div class="flex flex-grow flex-col pt-4 text-center">
                                    <p class="min-h-[216px] flex-grow text-justify text-[16px] font-medium text-black max-lg:min-h-[240px] max-md:leading-snug max-sm:min-h-[195px] max-sm:text-[15px] max-sm:leading-tight">
                                        {!! italic_en($testimoni["comment"]) !!}
                                    </p>
                                </div>

                                <div class="mt-5 flex flex-col items-center text-center max-lg:mt-2 max-sm:mt-1">
                                    <img src="{{ asset($testimoni["image"]) }}" alt="Kutip" class="h-[70px] w-auto rounded-full max-sm:h-14" />
                                    <p class="text-[17px] font-semibold text-black max-sm:text-[15px]">
                                        {!! italic_en($testimoni["name"]) !!}
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
                <li class="my-2 rounded-lg border bg-white py-2 shadow-sm" x-data="accordion({{ $index }})" :class="isActive()">
                    <div class="mx-2 flex flex-row sm:mx-5">
                        <div class="flex w-full flex-col p-3 max-sm:p-2">
                            <h2 @click="handleClick()" class="cursor-pointer text-lg font-medium max-sm:text-[16.5px]">
                                <span>{!! italic_en($faq["question"]) !!}</span>
                            </h2>
                            <div x-ref="tab" :style="handleToggle()" class="max-h-0 overflow-hidden transition-all duration-500">
                                <p class="mt-3 text-justify text-[#6F6C90] max-sm:mt-2 max-sm:text-[15px]">{!! italic_en($faq["answer"]) !!}</p>
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
                                        <clipPath id="clip0_7503_13741"><rect width="24" height="24" fill="white" /></clipPath>
                                    </defs>
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
@endsection

@section("script")
    <script>
        var swiper = new Swiper('#swiperKonseling', {
            slidesPerView: 3,
            spaceBetween: 10,
            speed: 300,
            slidesPerGroup: 1,
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
                },
                640: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 10,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 10,
                },
            },
        });

        // Swiper Produk Berbinar
        var swiper = new Swiper('#swiperPsikolog', {
            slidesPerView: 4,
            spaceBetween: 10,
            speed: 300,
            loop: true,
            mousewheel: {
                forceToAxis: true,
                sensitivity: 0.5,
                thresholdDelta: 30,
                thresholdTime: 400,
            },
            slidesPerGroup: 1,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            scrollbar: {
                el: '.swiper-scrollbar',
            },
            breakpoints: {
                640: {
                    slidesPerView: 3,
                    spaceBetween: 10,
                },
                768: {
                    slidesPerView: 4,
                    spaceBetween: 10,
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 10,
                },
            },
        });

        // Swiper Peer Counselor Berbinar
        var swiper = new Swiper('#swiperPeer', {
            slidesPerView: 2,
            spaceBetween: 10,
            speed: 300,
            loop: true,
            mousewheel: {
                forceToAxis: true,
                sensitivity: 0.5,
                thresholdDelta: 30,
                thresholdTime: 400,
            },
            slidesPerGroup: 1,
            scrollbar: {
                el: '.swiper-scrollbar',
            },
            breakpoints: {
                640: {
                    slidesPerView: 3,
                    spaceBetween: 10,
                },
                768: {
                    slidesPerView: 4,
                    spaceBetween: 10,
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 10,
                },
            },
        });

        // SCRIPT ACCORDION FAQS
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

        // Swiper Testimoni Berbinar
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
                },
                640: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 10,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 10,
                },
            },
        });

        document.querySelectorAll('.openModalBtn').forEach(function (btn) {
            btn.addEventListener('click', function (e) {
                e.preventDefault();
                // Modal utama
                var modal = document.getElementById('modal');
                if (modal) {
                    modal.classList.remove('hidden');
                }
                // Modal terms jika ada
                var termsModal = document.getElementById('termsModal');
                if (termsModal && btn.dataset.terms) {
                    termsModal.classList.remove('hidden');
                }
            });
        });

        // Tutup modal ketika klik di luar konten modal atau tombol close
        document.addEventListener('click', function (e) {
            var modal = document.getElementById('modal');
            if (modal && !modal.classList.contains('hidden')) {
                if (e.target === modal) {
                    modal.classList.add('hidden');
                }
            }
            var termsModal = document.getElementById('termsModal');
            if (termsModal && !termsModal.classList.contains('hidden')) {
                if (e.target === termsModal) {
                    termsModal.classList.add('hidden');
                }
            }
        });
    </script>
@endsection
