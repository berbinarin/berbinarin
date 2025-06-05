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

        .bg-individu {
            position: relative;
            background-image: url('/assets/images/landing/asset-psikotes/bg-individu.png');
            background-size: cover;
            background-position: center;
        }

        .bg-perusahaan {
            position: relative;
            background-image: url('/assets/images/landing/asset-psikotes/bg-perusahaan.png');
            background-size: cover;
            background-position: center;
        }

        .bg-pendidikan {
            position: relative;
            background-image: url('/assets/images/landing/asset-psikotes/bg-pendidikan.png');
            background-size: cover;
            background-position: center;
        }

        .bg-komunitas {
            position: relative;
            background-image: url('/assets/images/landing/asset-psikotes/bg-komunitas.png');
            background-size: cover;
            background-position: center;
        }

        .swiperContainer {
            overflow: hidden;
        }

        #swiperIndividu {
            width: 1100px;
            overflow: hidden;
            margin: 25px auto;
            padding-bottom: 35px;
        }

        #swiperPerusahaanStaff {
            width: 1100px;
            overflow: hidden;
            margin: 10px auto;
            padding-bottom: 35px;
        }

        #swiperPerusahaanSupervisor {
            width: 700px;
            overflow: hidden;
            margin: 10px auto;
            padding-bottom: 35px;
        }

        #swiperPendidikan {
            width: 800px;
            overflow: hidden;
            margin: 25px auto;
            padding-bottom: 35px;
        }

        #swiperDokumentasi {
            width: 1100px;
            overflow: hidden;
            margin: 25px auto;
            padding-bottom: 35px;
        }

        #swiperKomunitas {
            width: 1100px;
            overflow: hidden;
            margin: 25px auto;
            padding-bottom: 35px;
        }

        #swiperTestimoni {
            width: 900px;
            margin: 20px auto;
            overflow: hidden;
            padding-bottom: 10px;
        }

        .swiper-pagination {
            position: relative;
            padding-top: 20px;
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

        .bg-wave {
            background-image: url('/assets/images/landing/asset-konseling/vector/vector-wave.svg');
            background-repeat: no-repeat;
            background-position: center;
        }

        .border-active {
            border: 1.5px solid #3986a3;
        }

        @media (min-width: 0px) and (max-width: 465px) {
            .dynamic-height {
                min-height: 40px;
                align-items: center;
                display: flex;
            }

            .dynamic-height-3 {
                min-height: 55px;
                align-items: center;
                display: flex;
            }
        }

        @media (max-width: 640px) {
            .bg-perusahaan,
            .bg-pendidikan,
            .bg-komunitas,
            .bg-individu {
                position: relative;
                background-image: url('/assets/images/landing/asset-psikotes/bg-mobile-texture.png');
                background-size: cover;
                background-position: center;
            }

            #swiperTestimoni {
                width: 500px;
            }

            .swiperContainer {
                overflow: hidden;
                margin: 0px 16px;
            }

            .swiperDokumentasiMobile {
                margin: 0 16px;
            }

            .swiperDokumentasiAce {
                margin: 0 0;
            }
        }

        @media (min-width: 641px) and (max-width: 767px) {
            #swiperTestimoni {
                width: 550px;
            }

            .swiperContainer {
                overflow: hidden;
                margin: 0px 80px;
            }

            .swiperDokumentasiMobile {
                margin: 0 80px;
            }

            .swiperDokumentasiAce {
                margin: 0 0;
            }
        }

        @media (min-width: 768px) and (max-width: 1024px) {
            #swiperKomunitas {
                max-width: 700px;
            }

            #swiperPendidikan {
                max-width: 700px;
            }

            #swiperPerusahaanSupervisor {
                max-width: 600px;
            }

            #swiperPerusahaanStaff {
                max-width: 700px;
            }

            #swiperIndividu {
                max-width: 700px;
            }

            #swiperDokumentasi {
                width: 700px;
            }

            .swiperContainer {
                margin: 0px 80px;
            }
        }

        @media (min-width: 1025px) and (max-width: 1280px) {
            .swiperContainer {
                margin: 0px 80px;
            }
        }
    </style>
@endsection

@section("content")
    {{-- HERO SECTION --}}
    <section class="relative max-md:overflow-x-hidden">
        <div class="absolute left-0 top-5 z-0 max-sm:top-32">
            <img src="{{ asset("assets/images/landing/asset-konseling/vector/vector-hero1.svg") }}" alt="Vector" class="h-[500px] w-auto max-sm:h-[250px]" />
        </div>

        <div class="absolute right-0 top-8 z-0 max-md:-right-28 max-sm:-right-20 max-sm:top-40">
            <img src="{{ asset("assets/images/landing/asset-konseling/vector/vector-hero2.svg") }}" alt="Vector" class="h-[500px] w-auto max-sm:h-[250px]" />
        </div>

        <div class="relative">
            <div class="z-10 mx-20 mb-20 mt-40 flex flex-row items-center justify-between gap-x-1 max-sm:mx-4 max-sm:mt-32">
                <div class="max-lg:min-w-auto flex max-w-xl flex-1 flex-col space-y-6 max-sm:space-y-2">
                    <a href="{{ route("product.index") }}">
                        <div class="flex cursor-pointer items-center space-x-2 lg:order-1">
                            <img src="{{ asset("assets/images/landing/asset-konseling/vector/left-arrow.svg") }}" alt="Left Arrow" class="h-3 w-auto" />
                            <p class="text-[15px] font-semibold text-[#3986A3]">Produk Berbinar</p>
                        </div>
                    </a>

                    <div class="hidden w-full items-center justify-center max-lg:flex-none max-md:flex lg:order-2 lg:w-auto">
                        <img src="{{ asset("assets/images/landing/asset-psikotes/hero.png") }}" alt="Konseling" class="h-[340px] w-auto object-contain max-sm:h-[320px]" />
                    </div>

                    <div class="lg:order-3">
                        <h2 class="text-gradient py-2 text-5xl font-bold max-sm:text-3xl">Berbinar Psikotes</h2>
                    </div>

                    <div class="lg:order-4">
                        <p class="text-justify text-lg text-[#70787D] max-lg:text-[17px] max-sm:text-[15px] max-sm:leading-normal">Psikotes berbinar Insightful Indonesia merupakan solusi unggul untuk perusahaan dan individu dalam pengembangan karier dan penilaian potensi. Memberikan wawasan mendalam tentang kepribadian, keterampilan, dan kemampuan, untuk membantu pengambilan keputusan yang tepat dalam mengoptimalkan potensi karier.</p>
                    </div>
                </div>

                <div class="flex w-full flex-initial items-center justify-center max-lg:flex-1 max-md:hidden lg:w-auto">
                    <img src="{{ asset("assets/images/landing/asset-psikotes/hero.png") }}" alt="Konseling" class="h-[340px] w-auto object-contain max-lg:h-[320px]" />
                </div>
            </div>
        </div>
    </section>

    {{-- KONSELING --}}
    <section class="relative mt-24 w-full">
        <div class="absolute left-0 top-4 z-0 max-sm:top-40">
            <img src="/assets/images/landing/asset-konseling/vector/vector-line.svg" alt="Vector Image" class="" />
        </div>

        <p class="font relative z-10 mx-20 my-8 text-center text-4xl font-semibold text-black max-sm:mx-2 max-sm:my-4 max-sm:text-[29px]">
            Mengapa Harus Psikotes di
            <span class="bg-primary px-2 text-white">Berbinar</span>
        </p>

        <div class="relative z-10 mx-20 mb-20 flex flex-row gap-x-1 rounded-xl bg-white p-10 shadow-md max-lg:flex-col max-lg:gap-y-4 max-sm:mx-4 max-sm:p-4">
            <div class="hidden flex-initial items-center lg:flex">
                <img src="{{ asset("assets/images/landing/asset-psikotes/person.png") }}" alt="Vector" class="h-[350px] w-auto object-contain" />
            </div>

            <div class="flex items-center justify-center lg:hidden">
                <img src="{{ asset("assets/images/landing/logo/logo-berbinar.png") }}" alt="Berbinar" class="h-[320px] w-auto object-contain max-md:h-[290px] max-sm:h-[270px]" />
            </div>

            <div class="flex-1">
                <div class="flex flex-col gap-y-4">
                    <div class="flex flex-wrap items-center justify-center gap-2 lg:justify-start lg:gap-12">
                        @foreach ($visimisis as $visimisi)
                            <div class="flex w-auto items-center rounded-full bg-[#3986A3] p-2">
                                <div class="flex flex-row items-center gap-x-1">
                                    <img src="{{ asset("assets/images/landing/asset-beranda/vector/tick.svg") }}" alt="Vector" class="h-6 w-6 rounded-full bg-white p-1" />
                                    <p class="text-[15px] font-medium text-white max-sm:text-[13px]">
                                        {{ $visimisi["moto"] }}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="flex-col">
                        <p class="text-justify text-[17px] font-[300] text-[#70787D] max-sm:text-[15px]">Berbinar memberikan produk yang dapat disesuaikan dengan kebutuhan SobatBinar dalam penggunaan jasa layanan psikologi, seperti konseling, psikotes, kelas, konsultan SDM, webinar/seminar, training, workshop, kaos motivasi, dan masih banyak lagi</p>
                        <br />
                        <div class="mb-2 flex flex-row items-start gap-x-1">
                            <img src="{{ asset("assets/images/landing/asset-psikotes/icon/point.svg") }}" alt="Vector" class="mt-1 h-4 w-auto" />
                            <p class="text-justify text-[17px] text-[#70787D] max-sm:text-[15px]">
                                Layanan psikotes Berbinar
                                <span class="font-bold">teruji</span>
                                dan memiliki
                                <span class="font-bold">kredibilitas tinggi.</span>
                            </p>
                        </div>
                        <div class="mb-2 flex flex-row items-start gap-x-1">
                            <img src="{{ asset("assets/images/landing/asset-psikotes/icon/point.svg") }}" alt="Vector" class="mt-1 h-4 w-auto" />
                            <p class="text-justify text-[17px] text-[#70787D] max-sm:text-[15px]">
                                Layanan telah disesuaikan dengan
                                <span class="font-bold">kebutuhan pasar</span>
                                dan
                                <span class="font-bold">customer.</span>
                            </p>
                        </div>
                        <ul class="ml-10 list-disc text-justify text-[17px] text-[#70787D] max-sm:text-[15px]">
                            <li>Bisa atur waktu penyelesaian hasil yang lebih cepat</li>
                            <li>Bisa merencanakan sesi tes offline sesuai kesepakatan di lokasi pilihan untuk konsultasi lebih lanjut</li>
                        </ul>
                        <div class="mb-2 flex flex-row items-start gap-x-1">
                            <img src="{{ asset("assets/images/landing/asset-psikotes/icon/point.svg") }}" alt="Vector" class="mt-1 h-4 w-auto" />
                            <p class="text-justify text-[17px] text-[#70787D] max-sm:text-[15px]">
                                Psikolog
                                <span class="font-bold">berlisensi</span>
                                dan
                                <span class="font-bold">berpengalaman</span>
                            </p>
                        </div>
                        <div class="mb-2 flex flex-row items-start gap-x-1">
                            <img src="{{ asset("assets/images/landing/asset-psikotes/icon/point.svg") }}" alt="Vector" class="mt-1 h-4 w-auto" />
                            <p class="text-justify text-[17px] text-[#70787D] max-sm:text-[15px]">
                                Layanan psikotes Berbinar dapat diakses secara
                                <span class="font-bold">online</span>
                                &
                                <span class="font-bold">offline</span>
                            </p>
                        </div>
                        <div class="mb-2 flex flex-row items-start gap-x-1">
                            <img src="{{ asset("assets/images/landing/asset-psikotes/icon/point.svg") }}" alt="Vector" class="mt-1 h-4 w-auto" />
                            <p class="text-justify text-[17px] text-[#70787D] max-sm:text-[15px]">
                                <span class="font-bold">Harga terjangkau</span>
                                (dalam kondisi tertentu, dapat
                                <span class="font-bold">dicicil</span>
                                atau
                                <span class="font-bold">dinegosiasikan</span>
                                sesuai kebutuhan)
                            </p>
                        </div>
                    </div>

                    <div class="flex justify-start lg:order-5">
                        <a href="{{ route("product.index") }}" class="text-md rounded-xl bg-gradient-to-r from-[#3986A3] to-[#225062] px-4 py-2 text-white max-sm:text-[15px]">Lihat Produk Berbinar</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- TESTIMONI BERBINAR --}}
    <section class="mx-20 mt-20 max-sm:mx-4">
        <p class="font relative z-10 mx-20 my-8 text-center text-4xl font-semibold text-black max-sm:mx-2 max-sm:my-4 max-sm:text-[29px]">
            <span class="bg-[#F9C162] px-2 text-white">100+</span>
            Orang Mempercayakan Psikotes
            <span class="bg-primary px-2 text-white">Berbinar</span>
        </p>

        <div class="grid grid-cols-3 flex-wrap gap-6 max-lg:gap-2 max-md:grid-cols-1">
            @foreach ($testimoni_psikotes as $psikotes)
                <div class="rounded-xl bg-white p-6 shadow-md max-lg:p-4">
                    <div class="flex flex-col">
                        <p class="text-gradient text-center text-2xl font-bold max-sm:text-xl">
                            {{ $psikotes["category"] }}
                        </p>
                        <img src="{{ asset("assets/images/landing/asset-konseling/vector/vector-divider.svg") }}" alt="Vector" class="my-2 w-full" />

                        @foreach ($psikotes["mitra"] as $mitra)
                            <div class="mb-3 flex flex-row gap-x-2">
                                <img src="{{ asset($mitra["logo"]) }}" alt="Mitra" class="h-12 w-12 object-contain" />
                                <div class="flex flex-col">
                                    <p class="text-[16px] font-medium leading-snug text-[#3F3F3F] max-sm:text-[15px]">
                                        {{ $mitra["name"] }}
                                    </p>
                                    <p class="text-[14px] leading-snug text-[#50565A] max-sm:text-[13px]">
                                        {{ $mitra["total"] }}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    {{-- BANNER PSIKOTES INDIVIDU --}}
    <section class="relative w-full">
        <h1 class="font relative z-10 mx-20 my-8 text-center text-4xl font-semibold text-black max-sm:mx-2 max-sm:my-4 max-sm:text-[29px]">
            Jelajahi Produk Psikotes
            <span class="bg-primary px-2 text-white">Berbinar</span>
        </h1>
        <div class="bg-individu relative z-10 mx-20 mt-12 h-auto rounded-3xl p-10 max-sm:mx-4 max-sm:p-5">
            <div class="absolute inset-0 flex rounded-3xl bg-[#D7E6ED] mix-blend-multiply"></div>
            <div class="relative flex h-full flex-col justify-center space-y-3 text-left max-md:text-center">
                <h1 class="bg-gradient-to-l from-[#CF942E] to-[#F7B23B] bg-clip-text text-5xl font-semibold text-transparent max-md:text-4xl max-sm:text-3xl sm:text-black">Psikotes Individu</h1>
                <p class="text-justify text-lg text-[#3F3F3F] max-lg:text-[17px] max-sm:text-[15px] max-sm:leading-normal">Psikotes individu dapat memprediksi potensi yang dimiliki dalam kaitannya dengan pencapaian hasil belajar atau kemampuan di masa yang akan datang.</p>
                <a href="{{ route("product.psikotest.registration") }}">
                    <div class="relative z-10 flex justify-start max-md:justify-center">
                        <a href="{{ route("product.psikotest.registration") }}" class="text-md rounded-xl bg-gradient-to-r from-[#3986A3] to-[#225062] px-4 py-2 text-white max-sm:rounded-md max-sm:px-6 max-sm:text-[15px]">Daftar Psikotes Individu</a>
                    </div>
                </a>
            </div>

            <div class="absolute bottom-3 right-3 z-0">
                <p class="text-[14px] font-light text-[#95a1a3] max-sm:text-[12px]">Sumber: Freepik</p>
            </div>
        </div>
    </section>

    {{-- TES INDIVIDU --}}
    <section class="relative">
        {{-- TAMPILAN DESKTOP --}}
        <div class="swiperContainer relative z-10 hidden md:block">
            <div class="swiper" id="swiperIndividu">
                <div class="swiper-wrapper">
                    @foreach ($individus as $individu)
                        <div class="swiper-slide">
                            <div class="flex h-full max-h-[300px] w-full max-w-[250px] flex-col items-center justify-center rounded-2xl bg-white px-2 py-4 text-center shadow-md">
                                <img src="{{ asset($individu["illustrasi"]) }}" alt="{{ $individu["jenis_tes"] }}" class="h-14 w-auto object-contain" />
                                <p class="mt-3 text-lg font-medium text-black">{{ $individu["jenis_tes"] }}</p>
                                <p class="-mt-0.5 text-[32px] font-semibold leading-none text-[#3986A3]">
                                    {{ $individu["harga"] }}
                                    <span class="align-top text-[18px] text-[#70787D]">*</span>
                                </p>
                                <img src="{{ asset("assets/images/landing/asset-konseling/vector/vector-divider.svg") }}" alt="Vector" class="my-2.5 w-full" />

                                <div class="flex flex-col space-y-1">
                                    <div class="flex items-center gap-1">
                                        <img src="{{ asset($individu["keterangan"]["laporan_tertulis"] ? "assets/images/landing/asset-psikotes/icon/check.svg" : "assets/images/landing/asset-psikotes/icon/cross.svg") }}" alt="{{ $individu["keterangan"]["laporan_tertulis"] ? "Centang Hijau" : "Silang Merah" }}" class="h-3.5 w-3.5 object-contain" />
                                        <span class="text-[#70787D]">Laporan Tertulis</span>
                                    </div>

                                    <div class="flex items-center gap-1">
                                        <img src="{{ asset($individu["keterangan"]["konseling_hasil_tes"] ? "assets/images/landing/asset-psikotes/icon/check.svg" : "assets/images/landing/asset-psikotes/icon/cross.svg") }}" alt="{{ $individu["keterangan"]["konseling_hasil_tes"] ? "Centang Hijau" : "Silang Merah" }}" class="h-3.5 w-3.5 object-contain" />
                                        <span class="text-[#70787D]">Konseling Hasil Tes</span>
                                    </div>
                                </div>

                                <div class="my-3 flex justify-center">
                                    <a href="{{ route("product.psikotest.registration") }}" class="rounded-lg bg-gradient-to-r from-[#F7B23B] to-[#AD7D29] px-4 py-1.5 text-sm text-white">Mulai Sekarang</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <p class="mt-2 text-[16px] text-[#4F4F4F] max-sm:text-[14px]">*Harga masih bisa dinegosiasikan dan menyesuaikan dengan benefit yang ingin didapatkan.</p>
                <div class="swiper-pagination"></div>
            </div>
        </div>

        {{-- TAMPILAN MOBILE --}}
        <div class="relative z-10 mt-5 grid grid-cols-2 justify-between gap-4 max-md:mx-20 max-sm:mx-4 md:hidden">
            @foreach ($individus as $individu)
                <div class="flex h-full w-full flex-col items-center justify-center rounded-2xl bg-white p-4 text-center shadow-md">
                    <img src="{{ asset($individu["illustrasi"]) }}" alt="{{ $individu["jenis_tes"] }}" class="h-10 w-auto object-contain" />
                    <p class="dynamic-height text-[16px] font-medium leading-none text-black max-sm:mt-1">
                        {{ $individu["jenis_tes"] }}
                    </p>
                    <p class="mt-0.5 text-[22px] font-semibold leading-none text-[#3986A3]">
                        {{ $individu["harga"] }}
                        <span class="align-top text-[13px] text-[#70787D]">*</span>
                    </p>
                    <img src="{{ asset("assets/images/landing/asset-konseling/vector/vector-divider.svg") }}" alt="Vector" class="my-1 w-full" />

                    <div class="flex flex-col gap-y-0.5 text-left">
                        <div class="flex items-start gap-1">
                            <img src="{{ asset($individu["keterangan"]["laporan_tertulis"] ? "assets/images/landing/asset-psikotes/icon/check.svg" : "assets/images/landing/asset-psikotes/icon/cross.svg") }}" alt="{{ $individu["keterangan"]["laporan_tertulis"] ? "Centang Hijau" : "Silang Merah" }}" class="mt-1 h-3.5 w-3.5 object-contain max-sm:h-3 max-sm:w-3" />
                            <span class="leading-snug text-[#70787D] max-sm:text-[14px] max-sm:leading-tight">Laporan Tertulis</span>
                        </div>

                        <div class="flex items-start gap-1">
                            <img src="{{ asset($individu["keterangan"]["konseling_hasil_tes"] ? "assets/images/landing/asset-psikotes/icon/check.svg" : "assets/images/landing/asset-psikotes/icon/cross.svg") }}" alt="{{ $individu["keterangan"]["konseling_hasil_tes"] ? "Centang Hijau" : "Silang Merah" }}" class="mt-1 h-3.5 w-3.5 object-contain max-sm:h-3 max-sm:w-3" />
                            <span class="leading-snug text-[#70787D] max-sm:text-[14px] max-sm:leading-tight">Konseling Hasil Tes</span>
                        </div>
                    </div>

                    <div class="mt-3 flex w-full justify-center">
                        <a href="{{ route("product.psikotest.registration") }}" class="w-full rounded-xl bg-gradient-to-r from-[#F7B23B] to-[#AD7D29] py-1.5 text-[13px] text-white">Mulai Sekarang</a>
                    </div>
                </div>
            @endforeach
        </div>

        <p class="mt-2 block text-[16px] text-[#4F4F4F] max-md:mx-20 max-sm:mx-4 max-sm:text-[13px] max-sm:leading-tight md:hidden">*Harga masih bisa dinegosiasikan dan menyesuaikan dengan benefit yang ingin didapatkan.</p>
    </section>

    {{-- BANNER PSIKOTES PERUSAHAAN --}}
    <section>
        <div class="bg-perusahaan relative z-10 mx-20 mt-10 h-auto rounded-3xl p-10 max-sm:mx-4 max-sm:p-5">
            <div class="absolute inset-0 flex rounded-3xl bg-[#D7E6ED] mix-blend-multiply"></div>

            <div class="relative flex h-full flex-col justify-center space-y-3 text-left max-md:text-center">
                <h1 class="bg-gradient-to-l from-[#CF942E] to-[#F7B23B] bg-clip-text text-5xl font-semibold text-transparent max-md:text-4xl max-sm:text-3xl sm:text-black">Psikotes Perusahaan</h1>
                <p class="text-justify text-lg text-[#3F3F3F] max-lg:text-[17px] max-sm:text-[15px] max-sm:leading-normal">Psikotes untuk supervisor digunakan untuk melihat potensi, kelebihan dan kekurangan, serta kecenderungan kepribadian seorang kandidat dan melihat apakah kandidat tersebut cocok ditempatkan di suatu posisi pekerjaan.</p>
                <a href="{{ route("product.psikotest.registration") }}">
                    <div class="relative z-10 flex justify-start max-md:justify-center">
                        <a href="{{ route("product.psikotest.registration") }}" class="text-md rounded-xl bg-gradient-to-r from-[#3986A3] to-[#225062] px-4 py-2 text-white max-sm:rounded-md max-sm:px-6 max-sm:text-[15px]">Daftar Psikotes Perusahaan</a>
                    </div>
                </a>
            </div>

            <div class="absolute bottom-3 right-3 z-0">
                <p class="text-sm font-light text-[#95a1a3] max-sm:text-[12px]">Sumber: Freepik</p>
            </div>
        </div>
    </section>

    {{-- PAKET STAFF PERUSAHAAN --}}
    <section class="relative">
        <h2 class="text-gradient relative z-10 mb-4 mt-14 text-center text-3xl font-bold max-sm:mx-4 max-sm:text-2xl">Psikotes Perusahaan untuk Staff</h2>
        <section>
            {{-- TAMPILAN DESKTOP --}}
            <div class="swiperContainer relative z-10 hidden md:block">
                <div class="swiper" id="swiperPerusahaanStaff">
                    <div class="swiper-wrapper">
                        @foreach ($staffs as $staff)
                            <div class="swiper-slide">
                                <div class="flex h-full max-h-[500px] w-full max-w-[350px] flex-col items-center justify-center rounded-2xl bg-white p-4 text-center shadow-md">
                                    <p class="text-lg font-medium text-black">{{ $staff["paket"] }}</p>
                                    <p class="my-2 text-[32px] font-semibold leading-none text-[#3986A3]">
                                        {{ $staff["harga"] }}
                                        <span class="align-top text-[18px] text-[#70787D]">*</span>
                                    </p>
                                    <img src="{{ asset("assets/images/landing/asset-konseling/vector/vector-divider.svg") }}" alt="Vector" class="my-4 w-full" />

                                    <div class="flex flex-col space-y-1 text-left">
                                        <div class="flex items-center gap-1">
                                            <img src="{{ asset($staff["keterangan"]["tes_intelegensi"] ? "assets/images/landing/asset-psikotes/icon/check.svg" : "assets/images/landing/asset-psikotes/icon/cross.svg") }}" alt="{{ $staff["keterangan"]["tes_intelegensi"] ? "Centang Hijau" : "Silang Merah" }}" class="h-3.5 w-3.5 object-contain" />
                                            <span class="text-[#70787D]">Tes Intelegensi</span>
                                        </div>

                                        <div class="flex items-center gap-1">
                                            <img src="{{ asset($staff["keterangan"]["tes_sikap_kerja"] ? "assets/images/landing/asset-psikotes/icon/check.svg" : "assets/images/landing/asset-psikotes/icon/cross.svg") }}" alt="{{ $staff["keterangan"]["tes_sikap_kerja"] ? "Centang Hijau" : "Silang Merah" }}" class="h-3.5 w-3.5 object-contain" />
                                            <span class="text-[#70787D]">Tes Sikap Kerja</span>
                                        </div>

                                        <div class="flex items-center gap-1">
                                            <img src="{{ asset($staff["keterangan"]["tes_kepribadian"] ? "assets/images/landing/asset-psikotes/icon/check.svg" : "assets/images/landing/asset-psikotes/icon/cross.svg") }}" alt="{{ $staff["keterangan"]["tes_kepribadian"] ? "Centang Hijau" : "Silang Merah" }}" class="h-3.5 w-3.5 object-contain" />
                                            <span class="text-[#70787D]">Tes Kepribadian</span>
                                        </div>

                                        <div class="flex items-center gap-1">
                                            <img src="{{ asset($staff["keterangan"]["focus_group_discussion"] ? "assets/images/landing/asset-psikotes/icon/check.svg" : "assets/images/landing/asset-psikotes/icon/cross.svg") }}" alt="{{ $staff["keterangan"]["focus_group_discussion"] ? "Centang Hijau" : "Silang Merah" }}" class="h-3.5 w-3.5 object-contain" />
                                            <span class="text-[#70787D]">Focus Group Discussion</span>
                                        </div>

                                        <div class="flex items-center gap-1">
                                            <img src="{{ asset($staff["keterangan"]["wawancara"] ? "assets/images/landing/asset-psikotes/icon/check.svg" : "assets/images/landing/asset-psikotes/icon/cross.svg") }}" alt="{{ $staff["keterangan"]["wawancara"] ? "Centang Hijau" : "Silang Merah" }}" class="h-3.5 w-3.5 object-contain" />
                                            <span class="text-[#70787D]">Wawancara</span>
                                        </div>

                                        <div class="flex items-center gap-1">
                                            <img src="{{ asset($staff["keterangan"]["psikogram"] ? "assets/images/landing/asset-psikotes/icon/check.svg" : "assets/images/landing/asset-psikotes/icon/cross.svg") }}" alt="{{ $staff["keterangan"]["psikogram"] ? "Centang Hijau" : "Silang Merah" }}" class="h-3.5 w-3.5 object-contain" />
                                            <span class="text-[#70787D]">Psikogram</span>
                                        </div>

                                        <div class="flex items-start gap-1">
                                            <img src="{{ asset($staff["keterangan"]["deskripsi"] ? "assets/images/landing/asset-psikotes/icon/check.svg" : "assets/images/landing/asset-psikotes/icon/cross.svg") }}" alt="{{ $staff["keterangan"]["deskripsi"] ? "Centang Hijau" : "Silang Merah" }}" class="mt-1 h-3.5 w-3.5 object-contain" />
                                            <span class="leading-snug text-[#70787D]">Deskripsi Karakteristik, Kelemahan, Kelebihan, dan Rekomendasi</span>
                                        </div>

                                        <div class="flex items-center gap-1">
                                            <img src="{{ asset($staff["keterangan"]["proyeksi_pengembangan"] ? "assets/images/landing/asset-psikotes/icon/check.svg" : "assets/images/landing/asset-psikotes/icon/cross.svg") }}" alt="{{ $staff["keterangan"]["proyeksi_pengembangan"] ? "Centang Hijau" : "Silang Merah" }}" class="h-3.5 w-3.5 object-contain" />
                                            <span class="text-[#70787D]">Proyeksi Pengembangan</span>
                                        </div>

                                        <div class="flex items-center gap-1">
                                            <img src="{{ asset($staff["keterangan"]["saran_pengembangan"] ? "assets/images/landing/asset-psikotes/icon/check.svg" : "assets/images/landing/asset-psikotes/icon/cross.svg") }}" alt="{{ $staff["keterangan"]["saran_pengembangan"] ? "Centang Hijau" : "Silang Merah" }}" class="h-3.5 w-3.5 object-contain" />
                                            <span class="text-[#70787D]">Saran Pengembangan</span>
                                        </div>
                                    </div>

                                    <div class="my-4 flex justify-center">
                                        <a href="{{ route("product.psikotest.registration") }}" class="rounded-lg bg-gradient-to-r from-[#F7B23B] to-[#AD7D29] px-4 py-1.5 text-[16px] text-white">Mulai Sekarang</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <p class="mt-2 text-[16px] text-[#4F4F4F] max-sm:text-[14px]">*Harga masih bisa dinegosiasikan dan menyesuaikan dengan benefit yang ingin didapatkan.</p>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

            {{-- TAMPILAN MOBILE --}}
            <div class="relative z-10 mt-10 grid grid-cols-1 gap-y-4 max-md:mx-20 max-sm:mx-4 md:hidden">
                @foreach ($staffs as $staff)
                    <div class="flex h-full w-full flex-col items-center justify-center rounded-2xl bg-white px-4 py-2 text-center shadow-md">
                        <p class="text-lg font-medium text-black">{{ $staff["paket"] }}</p>
                        <p class="mt-1 text-[32px] font-semibold leading-none text-[#3986A3] max-sm:text-3xl">
                            {{ $staff["harga"] }}
                            <span class="align-super text-[13px] text-[#70787D]">*</span>
                        </p>
                        <img src="{{ asset("assets/images/landing/asset-konseling/vector/vector-divider.svg") }}" alt="Vector" class="my-2 w-full" />

                        <div class="flex flex-col space-y-1 text-left">
                            <div class="flex items-center gap-1">
                                <img src="{{ asset($staff["keterangan"]["tes_intelegensi"] ? "assets/images/landing/asset-psikotes/icon/check.svg" : "assets/images/landing/asset-psikotes/icon/cross.svg") }}" alt="{{ $staff["keterangan"]["tes_intelegensi"] ? "Centang Hijau" : "Silang Merah" }}" class="h-3.5 w-3.5" />
                                <span class="leading-snug text-[#70787D] max-sm:text-[15px] max-sm:leading-tight">Tes Intelegensi</span>
                            </div>

                            <div class="flex items-center gap-1">
                                <img src="{{ asset($staff["keterangan"]["tes_sikap_kerja"] ? "assets/images/landing/asset-psikotes/icon/check.svg" : "assets/images/landing/asset-psikotes/icon/cross.svg") }}" alt="{{ $staff["keterangan"]["tes_sikap_kerja"] ? "Centang Hijau" : "Silang Merah" }}" class="h-3.5 w-3.5" />
                                <span class="text-[#70787D]">Tes Sikap Kerja</span>
                            </div>

                            <div class="flex items-center gap-1">
                                <img src="{{ asset($staff["keterangan"]["tes_kepribadian"] ? "assets/images/landing/asset-psikotes/icon/check.svg" : "assets/images/landing/asset-psikotes/icon/cross.svg") }}" alt="{{ $staff["keterangan"]["tes_kepribadian"] ? "Centang Hijau" : "Silang Merah" }}" class="h-3.5 w-3.5" />
                                <span class="leading-snug text-[#70787D] max-sm:text-[15px] max-sm:leading-tight">Tes Kepribadian</span>
                            </div>

                            <div class="flex items-center gap-1">
                                <img src="{{ asset($staff["keterangan"]["focus_group_discussion"] ? "assets/images/landing/asset-psikotes/icon/check.svg" : "assets/images/landing/asset-psikotes/icon/cross.svg") }}" alt="{{ $staff["keterangan"]["focus_group_discussion"] ? "Centang Hijau" : "Silang Merah" }}" class="h-3.5 w-3.5" />
                                <span class="leading-snug text-[#70787D] max-sm:text-[15px] max-sm:leading-tight">Focus Group Discussion</span>
                            </div>

                            <div class="flex items-center gap-1">
                                <img src="{{ asset($staff["keterangan"]["wawancara"] ? "assets/images/landing/asset-psikotes/icon/check.svg" : "assets/images/landing/asset-psikotes/icon/cross.svg") }}" alt="{{ $staff["keterangan"]["wawancara"] ? "Centang Hijau" : "Silang Merah" }}" class="h-3.5 w-3.5" />
                                <span class="leading-snug text-[#70787D] max-sm:text-[15px] max-sm:leading-tight">Wawancara</span>
                            </div>

                            <div class="flex items-center gap-1">
                                <img src="{{ asset($staff["keterangan"]["psikogram"] ? "assets/images/landing/asset-psikotes/icon/check.svg" : "assets/images/landing/asset-psikotes/icon/cross.svg") }}" alt="{{ $staff["keterangan"]["psikogram"] ? "Centang Hijau" : "Silang Merah" }}" class="h-3.5 w-3.5" />
                                <span class="leading-snug text-[#70787D] max-sm:text-[15px] max-sm:leading-tight">Psikogram</span>
                            </div>

                            <div class="flex items-start gap-1">
                                <img src="{{ asset($staff["keterangan"]["deskripsi"] ? "assets/images/landing/asset-psikotes/icon/check.svg" : "assets/images/landing/asset-psikotes/icon/cross.svg") }}" alt="{{ $staff["keterangan"]["deskripsi"] ? "Centang Hijau" : "Silang Merah" }}" class="mt-0.5 h-3.5 w-3.5" />
                                <span class="leading-snug text-[#70787D] max-sm:text-[15px] max-sm:leading-tight">Deskripsi Karakteristik, Kelemahan, Kelebihan, dan Rekomendasi</span>
                            </div>

                            <div class="flex items-center gap-1">
                                <img src="{{ asset($staff["keterangan"]["proyeksi_pengembangan"] ? "assets/images/landing/asset-psikotes/icon/check.svg" : "assets/images/landing/asset-psikotes/icon/cross.svg") }}" alt="{{ $staff["keterangan"]["proyeksi_pengembangan"] ? "Centang Hijau" : "Silang Merah" }}" class="h-3.5 w-3.5" />
                                <span class="leading-snug text-[#70787D] max-sm:text-[15px] max-sm:leading-tight">Proyeksi Pengembangan</span>
                            </div>

                            <div class="flex items-center gap-1">
                                <img src="{{ asset($staff["keterangan"]["saran_pengembangan"] ? "assets/images/landing/asset-psikotes/icon/check.svg" : "assets/images/landing/asset-psikotes/icon/cross.svg") }}" alt="{{ $staff["keterangan"]["saran_pengembangan"] ? "Centang Hijau" : "Silang Merah" }}" class="h-3.5 w-3.5" />
                                <span class="leading-snug text-[#70787D] max-sm:text-[15px] max-sm:leading-tight">Saran Pengembangan</span>
                            </div>
                        </div>

                        <div class="my-4 flex justify-center">
                            <a href="{{ route("product.psikotest.registration") }}" class="rounded-lg bg-gradient-to-r from-[#F7B23B] to-[#AD7D29] px-4 py-1.5 text-[16px] text-white">Mulai Sekarang</a>
                        </div>
                    </div>
                @endforeach
            </div>

            <p class="mt-2 block text-[16px] text-[#4F4F4F] max-md:mx-20 max-sm:mx-4 max-sm:text-[13px] max-sm:leading-tight md:hidden">*Harga masih bisa dinegosiasikan dan menyesuaikan dengan benefit yang ingin didapatkan.</p>
        </section>
    </section>

    {{-- PAKET SUPERVISOR PERUSAHAAN --}}
    <section class="relative">
        <h2 class="text-gradient relative z-10 mb-4 text-center text-3xl font-bold max-md:mt-3 max-sm:mx-4 max-sm:mt-6 max-sm:text-2xl">Psikotes Perusahaan untuk Supervisor</h2>
        <section>
            {{-- TAMPILAN DESKTOP --}}
            <div class="swiperContainer relative z-10 hidden md:block">
                <div class="swiper" id="swiperPerusahaanSupervisor">
                    <div class="swiper-wrapper">
                        @foreach ($supervisors as $supervisor)
                            <div class="swiper-slide">
                                <div class="flex h-full max-h-[500px] w-full max-w-[350px] flex-col items-center justify-center rounded-2xl bg-white p-4 text-center shadow-md">
                                    <p class="text-lg font-medium text-black">{{ $supervisor["paket"] }}</p>
                                    <p class="my-2 text-[32px] font-semibold leading-none text-[#3986A3]">
                                        {{ $supervisor["harga"] }}
                                        <span class="align-top text-[18px] text-[#70787D]">*</span>
                                    </p>
                                    <img src="{{ asset("assets/images/landing/asset-konseling/vector/vector-divider.svg") }}" alt="Vector" class="my-4 w-full" />

                                    <div class="flex flex-col space-y-1 text-left">
                                        <div class="flex items-center gap-1">
                                            <img src="{{ asset($supervisor["keterangan"]["tes_intelegensi"] ? "assets/images/landing/asset-psikotes/icon/check.svg" : "assets/images/landing/asset-psikotes/icon/cross.svg") }}" alt="{{ $supervisor["keterangan"]["tes_intelegensi"] ? "Centang Hijau" : "Silang Merah" }}" class="h-3.5 w-3.5" />
                                            <span class="text-[#70787D]">Tes Intelegensi</span>
                                        </div>

                                        <div class="flex items-center gap-1">
                                            <img src="{{ asset($supervisor["keterangan"]["tes_sikap_kerja"] ? "assets/images/landing/asset-psikotes/icon/check.svg" : "assets/images/landing/asset-psikotes/icon/cross.svg") }}" alt="{{ $supervisor["keterangan"]["tes_sikap_kerja"] ? "Centang Hijau" : "Silang Merah" }}" class="h-3.5 w-3.5" />
                                            <span class="text-[#70787D]">Tes Sikap Kerja</span>
                                        </div>

                                        <div class="flex items-center gap-1">
                                            <img src="{{ asset($supervisor["keterangan"]["tes_kepribadian"] ? "assets/images/landing/asset-psikotes/icon/check.svg" : "assets/images/landing/asset-psikotes/icon/cross.svg") }}" alt="{{ $supervisor["keterangan"]["tes_kepribadian"] ? "Centang Hijau" : "Silang Merah" }}" class="h-3.5 w-3.5" />
                                            <span class="text-[#70787D]">Tes Kepribadian</span>
                                        </div>

                                        <div class="flex items-center gap-1">
                                            <img src="{{ asset($supervisor["keterangan"]["focus_group_discussion"] ? "assets/images/landing/asset-psikotes/icon/check.svg" : "assets/images/landing/asset-psikotes/icon/cross.svg") }}" alt="{{ $supervisor["keterangan"]["focus_group_discussion"] ? "Centang Hijau" : "Silang Merah" }}" class="h-3.5 w-3.5" />
                                            <span class="text-[#70787D]">Focus Group Discussion</span>
                                        </div>

                                        <div class="flex items-center gap-1">
                                            <img src="{{ asset($supervisor["keterangan"]["wawancara"] ? "assets/images/landing/asset-psikotes/icon/check.svg" : "assets/images/landing/asset-psikotes/icon/cross.svg") }}" alt="{{ $supervisor["keterangan"]["wawancara"] ? "Centang Hijau" : "Silang Merah" }}" class="h-3.5 w-3.5" />
                                            <span class="text-[#70787D]">Wawancara</span>
                                        </div>

                                        <div class="flex items-center gap-1">
                                            <img src="{{ asset($supervisor["keterangan"]["psikogram"] ? "assets/images/landing/asset-psikotes/icon/check.svg" : "assets/images/landing/asset-psikotes/icon/cross.svg") }}" alt="{{ $supervisor["keterangan"]["psikogram"] ? "Centang Hijau" : "Silang Merah" }}" class="h-3.5 w-3.5" />
                                            <span class="text-[#70787D]">Psikogram</span>
                                        </div>

                                        <div class="flex items-start gap-1">
                                            <img src="{{ asset($supervisor["keterangan"]["deskripsi"] ? "assets/images/landing/asset-psikotes/icon/check.svg" : "assets/images/landing/asset-psikotes/icon/cross.svg") }}" alt="{{ $supervisor["keterangan"]["deskripsi"] ? "Centang Hijau" : "Silang Merah" }}" class="mt-1 h-3.5 w-3.5" />
                                            <span class="leading-snug text-[#70787D]">Deskripsi Karakteristik, Kelemahan, Kelebihan, dan Rekomendasi</span>
                                        </div>

                                        <div class="flex items-center gap-1">
                                            <img src="{{ asset($supervisor["keterangan"]["proyeksi_pengembangan"] ? "assets/images/landing/asset-psikotes/icon/check.svg" : "assets/images/landing/asset-psikotes/icon/cross.svg") }}" alt="{{ $supervisor["keterangan"]["proyeksi_pengembangan"] ? "Centang Hijau" : "Silang Merah" }}" class="h-3.5 w-3.5" />
                                            <span class="text-[#70787D]">Proyeksi Pengembangan</span>
                                        </div>

                                        <div class="flex items-center gap-1">
                                            <img src="{{ asset($supervisor["keterangan"]["saran_pengembangan"] ? "assets/images/landing/asset-psikotes/icon/check.svg" : "assets/images/landing/asset-psikotes/icon/cross.svg") }}" alt="{{ $supervisor["keterangan"]["saran_pengembangan"] ? "Centang Hijau" : "Silang Merah" }}" class="h-3.5 w-3.5" />
                                            <span class="text-[#70787D]">Saran Pengembangan</span>
                                        </div>
                                    </div>

                                    <div class="my-4 flex justify-center">
                                        <a href="{{ route("product.psikotest.registration") }}" class="rounded-lg bg-gradient-to-r from-[#F7B23B] to-[#AD7D29] px-4 py-1.5 text-[16px] text-white">Mulai Sekarang</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <p class="mt-2 text-[16px] text-[#4F4F4F] max-sm:mx-4 max-sm:text-[13px] max-sm:leading-tight">*Harga masih bisa dinegosiasikan dan menyesuaikan dengan benefit yang ingin didapatkan.</p>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

            {{-- TAMPILAN MOBILE --}}
            <div class="relative z-10 mt-10 grid grid-cols-1 gap-y-4 max-md:mx-20 max-sm:mx-4 md:hidden">
                @foreach ($supervisors as $supervisor)
                    <div class="flex h-full w-full flex-col items-center justify-center rounded-2xl bg-white px-4 py-2 text-center shadow-md">
                        <p class="text-lg font-medium text-black">{{ $supervisor["paket"] }}</p>
                        <p class="mt-1 text-[32px] font-semibold text-[#3986A3] max-sm:text-[30px]">
                            {{ $supervisor["harga"] }}
                            <span class="align-super text-[13px] text-[#70787D]">*</span>
                        </p>
                        <img src="{{ asset("assets/images/landing/asset-konseling/vector/vector-divider.svg") }}" alt="Vector" class="my-2 w-full" />

                        <div class="flex flex-col space-y-1 text-left">
                            <div class="flex items-center gap-1">
                                <img src="{{ asset($supervisor["keterangan"]["tes_intelegensi"] ? "assets/images/landing/asset-psikotes/icon/check.svg" : "assets/images/landing/asset-psikotes/icon/cross.svg") }}" alt="{{ $supervisor["keterangan"]["tes_intelegensi"] ? "Centang Hijau" : "Silang Merah" }}" class="h-3.5 w-3.5" />
                                <span class="leading-snug text-[#70787D] max-sm:text-[15px] max-sm:leading-tight">Tes Intelegensi</span>
                            </div>

                            <div class="flex items-center gap-1">
                                <img src="{{ asset($supervisor["keterangan"]["tes_sikap_kerja"] ? "assets/images/landing/asset-psikotes/icon/check.svg" : "assets/images/landing/asset-psikotes/icon/cross.svg") }}" alt="{{ $supervisor["keterangan"]["tes_sikap_kerja"] ? "Centang Hijau" : "Silang Merah" }}" class="h-3.5 w-3.5" />
                                <span class="leading-snug text-[#70787D] max-sm:text-[15px] max-sm:leading-tight">Tes Sikap Kerja</span>
                            </div>

                            <div class="flex items-center gap-1">
                                <img src="{{ asset($supervisor["keterangan"]["tes_kepribadian"] ? "assets/images/landing/asset-psikotes/icon/check.svg" : "assets/images/landing/asset-psikotes/icon/cross.svg") }}" alt="{{ $supervisor["keterangan"]["tes_kepribadian"] ? "Centang Hijau" : "Silang Merah" }}" class="h-3.5 w-3.5" />
                                <span class="leading-snug text-[#70787D] max-sm:text-[15px] max-sm:leading-tight">Tes Kepribadian</span>
                            </div>

                            <div class="flex items-center gap-1">
                                <img src="{{ asset($supervisor["keterangan"]["focus_group_discussion"] ? "assets/images/landing/asset-psikotes/icon/check.svg" : "assets/images/landing/asset-psikotes/icon/cross.svg") }}" alt="{{ $supervisor["keterangan"]["focus_group_discussion"] ? "Centang Hijau" : "Silang Merah" }}" class="h-3.5 w-3.5" />
                                <span class="leading-snug text-[#70787D] max-sm:text-[15px] max-sm:leading-tight">Focus Group Discussion</span>
                            </div>

                            <div class="flex items-center gap-1">
                                <img src="{{ asset($supervisor["keterangan"]["wawancara"] ? "assets/images/landing/asset-psikotes/icon/check.svg" : "assets/images/landing/asset-psikotes/icon/cross.svg") }}" alt="{{ $supervisor["keterangan"]["wawancara"] ? "Centang Hijau" : "Silang Merah" }}" class="h-3.5 w-3.5" />
                                <span class="leading-snug text-[#70787D] max-sm:text-[15px] max-sm:leading-tight">Wawancara</span>
                            </div>

                            <div class="flex items-center gap-1">
                                <img src="{{ asset($supervisor["keterangan"]["psikogram"] ? "assets/images/landing/asset-psikotes/icon/check.svg" : "assets/images/landing/asset-psikotes/icon/cross.svg") }}" alt="{{ $supervisor["keterangan"]["psikogram"] ? "Centang Hijau" : "Silang Merah" }}" class="h-3.5 w-3.5" />
                                <span class="leading-snug text-[#70787D] max-sm:text-[15px] max-sm:leading-tight">Psikogram</span>
                            </div>

                            <div class="flex items-start gap-1">
                                <img src="{{ asset($supervisor["keterangan"]["deskripsi"] ? "assets/images/landing/asset-psikotes/icon/check.svg" : "assets/images/landing/asset-psikotes/icon/cross.svg") }}" alt="{{ $supervisor["keterangan"]["deskripsi"] ? "Centang Hijau" : "Silang Merah" }}" class="mt-0.5 h-3.5 w-3.5" />
                                <span class="leading-snug text-[#70787D] max-sm:text-[15px] max-sm:leading-tight">Deskripsi Karakteristik, Kelemahan, Kelebihan, dan Rekomendasi</span>
                            </div>

                            <div class="flex items-center gap-1">
                                <img src="{{ asset($supervisor["keterangan"]["proyeksi_pengembangan"] ? "assets/images/landing/asset-psikotes/icon/check.svg" : "assets/images/landing/asset-psikotes/icon/cross.svg") }}" alt="{{ $supervisor["keterangan"]["proyeksi_pengembangan"] ? "Centang Hijau" : "Silang Merah" }}" class="h-3.5 w-3.5" />
                                <span class="leading-snug text-[#70787D] max-sm:text-[15px] max-sm:leading-tight">Proyeksi Pengembangan</span>
                            </div>

                            <div class="flex items-center gap-1">
                                <img src="{{ asset($supervisor["keterangan"]["saran_pengembangan"] ? "assets/images/landing/asset-psikotes/icon/check.svg" : "assets/images/landing/asset-psikotes/icon/cross.svg") }}" alt="{{ $supervisor["keterangan"]["saran_pengembangan"] ? "Centang Hijau" : "Silang Merah" }}" class="h-3.5 w-3.5" />
                                <span class="leading-snug text-[#70787D] max-sm:text-[15px] max-sm:leading-tight">Saran Pengembangan</span>
                            </div>
                        </div>

                        <div class="my-4 flex justify-center">
                            <a href="{{ route("product.psikotest.registration") }}" class="rounded-lg bg-gradient-to-r from-[#F7B23B] to-[#AD7D29] px-4 py-1.5 text-[16px] text-white">Mulai Sekarang</a>
                        </div>
                    </div>
                @endforeach
            </div>
            <p class="mt-2 block text-[16px] text-[#4F4F4F] max-md:mx-20 max-sm:mx-4 max-sm:text-[13px] max-sm:leading-tight md:hidden">*Harga masih bisa dinegosiasikan dan menyesuaikan dengan benefit yang ingin didapatkan.</p>
        </section>
    </section>

    {{-- BANNER INSTANSI PENDIDIKAN --}}
    <section>
        <div class="bg-pendidikan relative z-10 mx-20 mt-14 h-auto rounded-3xl p-10 max-sm:mx-4 max-sm:p-5">
            <div class="absolute inset-0 flex rounded-3xl bg-[#D7E6ED] mix-blend-multiply"></div>

            <div class="relative flex h-full flex-col justify-center space-y-3 text-left max-md:text-center">
                <h1 class="bg-gradient-to-l from-[#CF942E] to-[#F7B23B] bg-clip-text text-5xl font-semibold text-transparent max-md:text-4xl max-sm:text-3xl sm:text-black">Psikotes Kategori Pendidikan</h1>
                <p class="text-justify text-lg text-[#3F3F3F] max-lg:text-[17px] max-sm:text-[15px] max-sm:leading-normal">Psikotes untuk Instansi Pendidikan digunakan untuk mengenal gaya belajar, cita-cita, jurusan, minat bakat yang sesuai dengan SobatBinar.</p>
                <a href="{{ route("product.psikotest.registration") }}">
                    <div class="relative z-10 flex justify-start max-md:justify-center">
                        <a href="{{ route("product.psikotest.registration") }}" class="text-md rounded-xl bg-gradient-to-r from-[#3986A3] to-[#225062] px-4 py-2 text-white max-sm:rounded-md max-sm:px-6 max-sm:text-[15px]">Daftar Psikotes Instansi Pendidikan</a>
                    </div>
                </a>
            </div>

            <div class="absolute bottom-3 right-3 z-0">
                <p class="text-sm font-light text-[#95a1a3] max-sm:text-[12px]">Sumber: Freepik</p>
            </div>
        </div>
    </section>

    {{-- PAKET PSIKOTES INSTANSI PENDIDIKAN --}}
    <section class="relative">
        {{-- TAMPILAN DESKTOP --}}
        <div class="swiperContainer relative z-10 hidden md:block">
            <div class="swiper" id="swiperPendidikan">
                <div class="swiper-wrapper">
                    @foreach ($pendidikans as $pendidikan)
                        <div class="swiper-slide">
                            <div class="flex h-full max-h-[350px] w-full max-w-[250px] flex-col items-center justify-center rounded-2xl bg-white p-4 text-center shadow-md">
                                <img src="{{ asset($pendidikan["illustrasi"]) }}" alt="{{ $pendidikan["paket"] }}" class="h-14 w-auto object-contain" />
                                <p class="mt-1 min-h-[50px] items-center text-lg font-medium leading-snug text-black">
                                    {{ $pendidikan["paket"] }}
                                </p>
                                <p class="-mt-1 text-[32px] font-semibold leading-none text-[#3986A3]">
                                    {{ $pendidikan["harga"] }}
                                    <span class="align-top text-[18px] text-[#70787D]">*</span>
                                </p>
                                <img src="{{ asset("assets/images/landing/asset-konseling/vector/vector-divider.svg") }}" alt="Vector" class="my-4 w-full" />

                                <div class="flex flex-col space-y-1">
                                    <div class="flex items-center gap-1">
                                        <img src="{{ asset($pendidikan["keterangan"]["laporan_tertulis"] ? "assets/images/landing/asset-psikotes/icon/check.svg" : "assets/images/landing/asset-psikotes/icon/cross.svg") }}" alt="{{ $pendidikan["keterangan"]["laporan_tertulis"] ? "Centang Hijau" : "Silang Merah" }}" class="h-3.5 w-3.5 object-contain" />
                                        <span class="text-[#70787D]">Laporan Tertulis</span>
                                    </div>

                                    <div class="flex items-center gap-1">
                                        <img src="{{ asset($pendidikan["keterangan"]["tes_gaya_belajar"] ? "assets/images/landing/asset-psikotes/icon/check.svg" : "assets/images/landing/asset-psikotes/icon/cross.svg") }}" alt="{{ $pendidikan["keterangan"]["tes_gaya_belajar"] ? "Centang Hijau" : "Silang Merah" }}" class="h-3.5 w-3.5 object-contain" />
                                        <span class="text-[#70787D]">Konseling Hasil Tes</span>
                                    </div>

                                    <div class="flex items-center gap-1">
                                        <img src="{{ asset($pendidikan["keterangan"]["konseling_hasil_tes"] ? "assets/images/landing/asset-psikotes/icon/check.svg" : "assets/images/landing/asset-psikotes/icon/cross.svg") }}" alt="{{ $pendidikan["keterangan"]["konseling_hasil_tes"] ? "Centang Hijau" : "Silang Merah" }}" class="h-3.5 w-3.5 object-contain" />
                                        <span class="text-[#70787D]">Konseling Hasil Tes</span>
                                    </div>
                                </div>

                                <div class="my-3 flex justify-center">
                                    <a href="{{ route("product.psikotest.registration") }}" class="rounded-lg bg-gradient-to-r from-[#F7B23B] to-[#AD7D29] px-4 py-1.5 text-sm text-white">Mulai Sekarang</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <p class="mt-2 text-[16px] text-[#4F4F4F] max-sm:mx-4 max-sm:text-[13px] max-sm:leading-tight">*Harga masih bisa dinegosiasikan dan menyesuaikan dengan benefit yang ingin didapatkan.</p>
                <div class="swiper-pagination"></div>
            </div>
        </div>

        {{-- TAMPILAN MOBILE --}}
        <div class="relative z-10 mt-5 grid grid-cols-2 justify-between gap-4 max-md:mx-20 max-sm:mx-4 md:hidden">
            @foreach ($pendidikans as $pendidikan)
                <div class="flex h-full w-full flex-col items-center justify-center rounded-2xl bg-white p-4 text-center shadow-md">
                    <img src="{{ asset($pendidikan["illustrasi"]) }}" alt="{{ $pendidikan["paket"] }}" class="h-10 w-auto object-contain" />
                    <p class="dynamic-height text-[16px] font-medium leading-none text-black">
                        {{ $pendidikan["paket"] }}
                    </p>
                    <p class="mt-0.5 text-[22px] font-semibold leading-none text-[#3986A3]">
                        {{ $pendidikan["harga"] }}
                        <span class="align-top text-[13px] text-[#70787D]">*</span>
                    </p>
                    <img src="{{ asset("assets/images/landing/asset-konseling/vector/vector-divider.svg") }}" alt="Vector" class="my-1 w-full" />

                    <div class="flex flex-col gap-y-0.5 text-left">
                        <div class="flex items-start gap-1">
                            <img src="{{ asset($pendidikan["keterangan"]["laporan_tertulis"] ? "assets/images/landing/asset-psikotes/icon/check.svg" : "assets/images/landing/asset-psikotes/icon/cross.svg") }}" alt="{{ $pendidikan["keterangan"]["laporan_tertulis"] ? "Centang Hijau" : "Silang Merah" }}" class="mt-1 h-3 w-3 object-contain" />
                            <span class="leading-snug text-[#70787D] max-sm:text-[14px] max-sm:leading-tight">Laporan Tertulis</span>
                        </div>

                        <div class="flex items-start gap-1">
                            <img src="{{ asset($pendidikan["keterangan"]["tes_gaya_belajar"] ? "assets/images/landing/asset-psikotes/icon/check.svg" : "assets/images/landing/asset-psikotes/icon/cross.svg") }}" alt="{{ $pendidikan["keterangan"]["tes_gaya_belajar"] ? "Centang Hijau" : "Silang Merah" }}" class="mt-1 h-3 w-3 object-contain" />
                            <span class="leading-snug text-[#70787D] max-sm:text-[14px] max-sm:leading-tight">Tes Gaya Belajar</span>
                        </div>

                        <div class="flex items-start gap-1">
                            <img src="{{ asset($pendidikan["keterangan"]["konseling_hasil_tes"] ? "assets/images/landing/asset-psikotes/icon/check.svg" : "assets/images/landing/asset-psikotes/icon/cross.svg") }}" alt="{{ $pendidikan["keterangan"]["konseling_hasil_tes"] ? "Centang Hijau" : "Silang Merah" }}" class="mt-1 h-3 w-3 object-contain" />
                            <span class="leading-snug text-[#70787D] max-sm:text-[14px] max-sm:leading-tight">Konseling Hasil Tes</span>
                        </div>
                    </div>

                    <div class="mt-3 flex w-full justify-center">
                        <a href="{{ route("product.psikotest.registration") }}" class="w-full rounded-xl bg-gradient-to-r from-[#F7B23B] to-[#AD7D29] py-1.5 text-[13px] text-white">Mulai Sekarang</a>
                    </div>
                </div>
            @endforeach
        </div>
        <p class="mt-2 block text-[16px] text-[#4F4F4F] max-md:mx-20 max-sm:mx-4 max-sm:text-[13px] max-sm:leading-tight md:hidden">*Harga masih bisa dinegosiasikan dan menyesuaikan dengan benefit yang ingin didapatkan.</p>
    </section>

    {{-- BANNER KOMUNITAS --}}
    <section>
        <div class="bg-komunitas relative z-10 mx-20 mt-10 h-auto rounded-3xl p-10 max-sm:mx-4 max-sm:p-5">
            <div class="absolute inset-0 flex rounded-3xl bg-[#D7E6ED] mix-blend-multiply"></div>

            <div class="relative flex h-full flex-col justify-center space-y-3 text-left max-md:text-center">
                <h1 class="bg-gradient-to-l from-[#CF942E] to-[#F7B23B] bg-clip-text text-5xl font-semibold text-transparent max-md:text-4xl max-sm:text-3xl sm:text-black">Psikotes Kategori Komunitas</h1>
                <p class="text-justify text-lg text-[#3F3F3F] max-lg:text-[17px] max-sm:text-[15px] max-sm:leading-normal">Psikotes untuk Komunitas ini bertujuan untuk mengetahui kesiapan pernikahan, menjadi orang tua, kecocokan bersama pasangan, tingkat stress, depresi, kecemasan, memori, dan demensia.</p>
                <a href="{{ route("product.psikotest.registration") }}">
                    <div class="relative z-10 flex justify-start max-md:justify-center">
                        <a href="{{ route("product.psikotest.registration") }}" class="text-md rounded-xl bg-gradient-to-r from-[#3986A3] to-[#225062] px-4 py-2 text-white max-sm:rounded-md max-sm:px-6 max-sm:text-[15px]">Daftar Psikotes Komunitas</a>
                    </div>
                </a>
            </div>

            <div class="absolute bottom-3 right-3 z-0">
                <p class="text-sm font-light text-[#95a1a3] max-sm:text-[12px]">Sumber: Freepik</p>
            </div>
        </div>
    </section>

    {{-- PAKET PSIKOTES KOMUNITAS --}}
    <section class="relative">
        {{-- TAMPILAN DESKTOP --}}
        <div class="swiperContainer relative z-10 hidden md:block">
            <div class="swiper" id="swiperKomunitas">
                <div class="swiper-wrapper">
                    @foreach ($communitys as $community)
                        <div class="swiper-slide">
                            <div class="flex h-full max-h-[330px] w-full max-w-[250px] flex-col items-center justify-center rounded-2xl bg-white p-4 text-center shadow-md">
                                <img src="{{ asset($community["illustrasi"]) }}" alt="{{ $community["paket"] }}" class="h-14 w-auto object-contain" />
                                <p class="mt-1 min-h-[50px] items-center text-lg font-medium leading-snug text-black">
                                    {{ $community["paket"] }}
                                </p>
                                <p class="-mt-1 text-[32px] font-semibold leading-none text-[#3986A3]">
                                    {{ $community["harga"] }}
                                    <span class="align-top text-[18px] text-[#70787D]">*</span>
                                </p>
                                <img src="{{ asset("assets/images/landing/asset-konseling/vector/vector-divider.svg") }}" alt="Vector" class="my-4 w-full" />

                                <div class="flex flex-col space-y-1">
                                    <div class="flex items-center gap-1">
                                        <img src="{{ asset($community["keterangan"]["laporan_tertulis"] ? "assets/images/landing/asset-psikotes/icon/check.svg" : "assets/images/landing/asset-psikotes/icon/cross.svg") }}" alt="{{ $community["keterangan"]["laporan_tertulis"] ? "Centang Hijau" : "Silang Merah" }}" class="h-3.5 w-3.5 object-contain" />
                                        <span class="text-[#70787D]">Laporan Tertulis</span>
                                    </div>

                                    <div class="flex items-center gap-1">
                                        <img src="{{ asset($community["keterangan"]["konseling_hasil_tes"] ? "assets/images/landing/asset-psikotes/icon/check.svg" : "assets/images/landing/asset-psikotes/icon/cross.svg") }}" alt="{{ $community["keterangan"]["konseling_hasil_tes"] ? "Centang Hijau" : "Silang Merah" }}" class="h-3.5 w-3.5 object-contain" />
                                        <span class="text-[#70787D]">Konseling Hasil Tes</span>
                                    </div>
                                </div>

                                <div class="my-3 flex justify-center">
                                    <a href="{{ route("product.psikotest.registration") }}" class="rounded-lg bg-gradient-to-r from-[#F7B23B] to-[#AD7D29] px-4 py-1.5 text-sm text-white">Mulai Sekarang</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <p class="mt-2 text-[16px] text-[#4F4F4F] max-sm:mx-4 max-sm:text-[13px] max-sm:leading-tight">*Harga masih bisa dinegosiasikan dan menyesuaikan dengan benefit yang ingin didapatkan.</p>
                <div class="swiper-pagination"></div>
            </div>
        </div>

        {{-- TAMPILAN MOBILE --}}
        <div class="relative z-10 mt-5 grid grid-cols-2 justify-between gap-4 max-md:mx-20 max-sm:mx-4 md:hidden">
            @foreach ($communitys as $community)
                <div class="flex h-full w-full flex-col items-center justify-center rounded-2xl bg-white p-4 text-center shadow-md">
                    <img src="{{ asset($community["illustrasi"]) }}" alt="{{ $community["paket"] }}" class="h-10 w-auto object-contain" />
                    <p class="dynamic-height-3 text-[16px] font-medium leading-none text-black">
                        {{ $community["paket"] }}
                    </p>
                    <p class="mt-0.5 text-[22px] font-semibold leading-none text-[#3986A3]">
                        {{ $community["harga"] }}
                        <span class="align-top text-[13px] text-[#70787D]">*</span>
                    </p>
                    <img src="{{ asset("assets/images/landing/asset-konseling/vector/vector-divider.svg") }}" alt="Vector" class="my-1 w-full" />

                    <div class="flex flex-col gap-y-0.5 text-left">
                        <div class="flex items-start gap-1">
                            <img src="{{ asset($community["keterangan"]["laporan_tertulis"] ? "assets/images/landing/asset-psikotes/icon/check.svg" : "assets/images/landing/asset-psikotes/icon/cross.svg") }}" alt="{{ $community["keterangan"]["laporan_tertulis"] ? "Centang Hijau" : "Silang Merah" }}" class="mt-1 h-3 w-3 object-contain" />
                            <span class="leading-snug text-[#70787D] max-sm:text-[14px] max-sm:leading-tight">Laporan Tertulis</span>
                        </div>

                        <div class="flex items-start gap-1">
                            <img src="{{ asset($community["keterangan"]["konseling_hasil_tes"] ? "assets/images/landing/asset-psikotes/icon/check.svg" : "assets/images/landing/asset-psikotes/icon/cross.svg") }}" alt="{{ $community["keterangan"]["konseling_hasil_tes"] ? "Centang Hijau" : "Silang Merah" }}" class="mt-1 h-3 w-3 object-contain" />
                            <span class="leading-snug text-[#70787D] max-sm:text-[14px] max-sm:leading-tight">Konseling Hasil Tes</span>
                        </div>
                    </div>

                    <div class="mt-3 flex w-full justify-center">
                        <a href="{{ route("product.psikotest.registration") }}" class="w-full rounded-xl bg-gradient-to-r from-[#F7B23B] to-[#AD7D29] py-1.5 text-[13px] text-white">Mulai Sekarang</a>
                    </div>
                </div>
            @endforeach
        </div>
        <p class="mt-2 block text-[16px] text-[#4F4F4F] max-md:mx-20 max-sm:mx-4 max-sm:text-[13px] max-sm:leading-tight md:hidden">*Harga masih bisa dinegosiasikan dan menyesuaikan dengan benefit yang ingin didapatkan.</p>
    </section>

    {{-- TESTIMONI USER --}}
    <section class="mt-6">
        <p class="font relative z-10 mx-20 my-5 text-center text-4xl font-semibold text-black max-sm:mx-2 max-sm:my-4 max-sm:text-[29px]">
            Apa Kata Mereka Tentang Psikotes di
            <span class="bg-primary px-2 text-white">Berbinar</span>
            ?
        </p>
        <div class="swiperContainer">
            <div class="swiper" id="swiperTestimoni">
                <div class="swiper-wrapper pb-1 max-sm:pb-8">
                    @foreach ($testimonis as $testimoni)
                        <div class="swiper-slide">
                            <div class="flex h-auto w-auto flex-col items-center justify-center rounded-3xl bg-white p-5 text-center shadow-md">
                                <img src="{{ asset("assets/images/landing/asset-produk/vector-kutip.png") }}" alt="Kutip" class="h-8 w-auto max-sm:h-7" />

                                <div class="flex flex-grow flex-col pt-4 text-center">
                                    <p class="min-h-[168px] flex-grow text-justify text-[16px] font-medium text-black max-lg:min-h-[168px] max-md:leading-snug max-sm:text-[15px] max-sm:leading-tight">
                                        {{ $testimoni["comment"] }}
                                    </p>
                                </div>

                                <div class="mt-5 flex flex-col items-center text-center max-lg:mt-2 max-sm:mt-1">
                                    <img src="{{ asset($testimoni["image"]) }}" alt="Kutip" class="h-[70px] w-auto rounded-full max-sm:h-14" />
                                    {{--
                                        <p class="max-sm:text-[15px] text-[17px] text-black font-semibold">
                                        {{ $testimoni['name'] }}
                                        </p>
                                    --}}
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

    {{-- DOKUMENTASI PSIKOTES --}}
    <section>
        <p class="font relative z-10 mx-20 my-8 text-center text-4xl font-semibold text-black max-sm:mx-2 max-sm:my-4 max-sm:text-[29px]">
            Mengapa Harus Psikotes di
            <span class="bg-primary px-2 text-white">Berbinar</span>
        </p>

        <div class="swiperContainer hidden md:block">
            <div class="swiper" id="swiperDokumentasi">
                <div class="swiper-wrapper">
                    @foreach ($dokumentasis as $dokumentasi)
                        <div class="swiper-slide">
                            <div class="relative">
                                <img src="{{ asset($dokumentasi["image"]) }}" alt="Dokumentasi" class="h-52 w-[345px] rounded-xl object-cover" />
                                <p class="absolute left-4 top-4 rounded-md bg-[#FEF7EB] px-2 py-1 text-sm text-[#C78E2E]">
                                    {{ $dokumentasi["jenis_psikotes"] }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="swiper-pagination hidden sm:block"></div>
            </div>
        </div>

        <div class="swiper-container swiperDokumentasiMobile block overflow-hidden md:hidden">
            <div class="swiper-wrapper">
                @foreach ($dokumentasis as $dokumentasi)
                    <div class="swiper-slide">
                        <div class="relative">
                            <img src="{{ asset($dokumentasi["image"]) }}" alt="Dokumentasi" class="h-[270px] w-full rounded-xl object-cover" />
                            <p class="absolute left-4 top-4 rounded-md bg-[#FEF7EB] px-2 py-1 text-sm text-[#C78E2E]">
                                {{ $dokumentasi["jenis_psikotes"] }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- BANNER ACE --}}
    <section>
        <div class="bg-pendidikan relative z-10 mx-20 mt-14 h-auto rounded-3xl p-10 max-sm:mx-4 max-sm:p-5">
            <div class="absolute inset-0 flex rounded-3xl bg-[#D7E6ED] mix-blend-multiply"></div>

            <div class="relative flex h-full flex-col justify-center space-y-4 text-left max-md:text-center">
                <h1 class="mb-2 bg-gradient-to-l from-[#CF942E] to-[#F7B23B] bg-clip-text text-4xl font-semibold italic text-transparent max-md:text-4xl max-sm:text-3xl sm:text-black">Active Campaign Empowerment (ACE)</h1>
                <div class="flex flex-col gap-y-3 text-justify text-lg text-[#3F3F3F] max-lg:text-[17px] max-sm:gap-y-1 max-sm:text-[15px] max-sm:leading-normal">
                    <p>Rangkaian acara tahunan dari Berbinar yang dirancang untuk mengenalkan produk psikotes kami secara lebih luas kepada khalayak. Event ini menjadi wadah bagi siapa saja yang ingin memperluas wawasan di bidang psikologi sekaligus memahami lebih dalam pentingnya pengenalan diri untuk pengembangan pribadi maupun profesional.</p>

                    <p>
                        Dalam ACE, kami menghadirkan
                        <span class="font-bold">webinar eksklusif</span>
                        yang menghadirkan pembicara-pembicara terkemuka di bidang psikologi. Melalui diskusi interaktif dan materi yang mendalam, peserta akan mendapatkan insight berharga tentang berbagai topik terkait psikologi dan pengembangan diri.
                    </p>

                    <p>
                        Event ini berlangsung selama
                        <span class="font-bold">tiga sesi</span>
                        penuh aktivitas, mulai dari edukasi hingga kampanye kreatif, yang memberikan kesempatan bagi peserta untuk mengenal produk-produk psikotes kami lebih dekat.
                    </p>
                </div>

                <div class="swiper-container swiperDokumentasiAce block overflow-hidden md:hidden">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{ asset("assets/images/landing/asset-psikotes/komunitas/komunitas1.png") }}" alt="Komunitas" class="h-[270px] w-full rounded-xl object-cover" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset("assets/images/landing/asset-psikotes/komunitas/komunitas2.png") }}" alt="Komunitas" class="h-[270px] w-full rounded-xl object-cover" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset("assets/images/landing/asset-psikotes/komunitas/komunitas3.png") }}" alt="Komunitas" class="h-[270px] w-full rounded-xl object-cover" />
                        </div>
                    </div>
                </div>

                <a href="{{ route("product.psikotest.registration") }}">
                    <div class="z-10 flex justify-start max-md:justify-center">
                        <a href="{{ route("product.psikotest.registration") }}" class="text-md rounded-xl bg-gradient-to-r from-[#3986A3] to-[#225062] px-4 py-2 text-white max-sm:rounded-md max-sm:px-6 max-sm:text-[15px]">Daftar Psikotes Komunitas</a>
                    </div>
                </a>
            </div>

            <div class="absolute bottom-3 right-3 z-0">
                <p class="text-sm font-light text-[#95a1a3] max-sm:text-[12px]">Sumber: Freepik</p>
            </div>
        </div>
    </section>

    {{-- DOKUMENTASI --}}
    <section>
        <div class="mx-20 my-5 hidden max-lg:my-8 md:block">
            <div class="flex w-full flex-wrap items-center justify-center gap-x-8 gap-y-5">
                <div class="relative">
                    <img src="{{ asset("assets/images/landing/asset-psikotes/komunitas/komunitas1.png") }}" alt="Komunitas" class="h-52 w-[345px] rounded-xl object-cover max-lg:h-[250px] max-lg:w-[450px]" />
                </div>

                <div class="relative">
                    <img src="{{ asset("assets/images/landing/asset-psikotes/komunitas/komunitas2.png") }}" alt="Komunitas" class="h-52 w-[345px] rounded-xl object-cover max-lg:h-[250px] max-lg:w-[450px]" />
                </div>

                <div class="relative">
                    <img src="{{ asset("assets/images/landing/asset-psikotes/komunitas/komunitas3.png") }}" alt="Komunitas" class="h-52 w-[345px] rounded-xl object-cover max-lg:h-[250px] max-lg:w-[450px]" />
                </div>
            </div>
        </div>
    </section>

    {{-- FAQS --}}
    <section class="relative z-10 mx-4 mb-10 mt-20 max-md:mt-10 sm:mx-20">
        <ul class="relative z-10 flex flex-col">
            @php
                $index = 0;
            @endphp

            @foreach ($faqs as $faq)
                <li class="my-2 rounded-lg border bg-white py-2 shadow-sm" x-data="accordion({{ $index }})" :class="isActive()">
                    <div class="mx-2 flex flex-row sm:mx-5">
                        <div class="flex w-full flex-col p-3 max-sm:p-2">
                            <h2 @click="handleClick()" class="cursor-pointer text-lg font-medium max-sm:text-[16.5px]">
                                <span>{{ $faq["question"] }}</span>
                            </h2>
                            <div x-ref="tab" :style="handleToggle()" class="max-h-0 overflow-hidden transition-all duration-500">
                                <p class="mt-3 text-justify text-[#6F6C90] max-sm:mt-2 max-sm:text-[15px]">
                                    {{ $faq["answer"] }}
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

    <script>
        document.querySelectorAll('dinamic').forEach((element) => {
            const lineHeight = parseFloat(getComputedStyle(element).lineHeight);
            const height = element.offsetHeight;

            // Jika tinggi elemen lebih dari tinggi satu baris, tambahkan `min-height`
            if (height > lineHeight) {
                element.style.minHeight = '50px';
            }
        });
    </script>
@endsection

@section("script")
    <script>
        var swiper = new Swiper('#swiperIndividu', {
            slidesPerView: 4,
            spaceBetween: 10,
            loop: true,
            speed: 300,
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
            slidesPerGroup: 1,
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 10,
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 10,
                },
            },
        });

        var swiper = new Swiper('#swiperPerusahaanStaff', {
            slidesPerView: 3,
            spaceBetween: 10,
            loop: true,
            speed: 300,
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
            slidesPerGroup: 1,
            breakpoints: {
                640: {
                    slidesPerView: 3,
                    spaceBetween: 10,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 10,
                },
            },
        });

        var swiper = new Swiper('#swiperPerusahaanSupervisor', {
            slidesPerView: 2,
            spaceBetween: 10,
            loop: true,
            speed: 300,
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
            slidesPerGroup: 1,
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                },
                1024: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                },
            },
        });

        var swiper = new Swiper('#swiperPendidikan', {
            slidesPerView: 4,
            spaceBetween: 10,
            loop: true,
            speed: 300,
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
            slidesPerGroup: 1,
            breakpoints: {
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

        var swiper = new Swiper('#swiperKomunitas', {
            slidesPerView: 4,
            spaceBetween: 10,
            loop: true,
            speed: 300,
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
            slidesPerGroup: 1,
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 10,
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 10,
                },
            },
        });

        var swiper = new Swiper('.swiperDokumentasiMobile', {
            slidesPerView: 1,
            spaceBetween: 10,
            loop: true,
            autoplay: {
                delay: 2000,
                disableOnInteraction: false,
            },
            speed: 1000,
            breakpoints: {
                640: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 1,
                },
                1024: {
                    slidesPerView: 1,
                },
            },
        });

        var swiper = new Swiper('.swiperDokumentasiAce', {
            slidesPerView: 1,
            spaceBetween: 10,
            loop: true,
            autoplay: {
                delay: 2000,
                disableOnInteraction: false,
            },
            speed: 1000,
            breakpoints: {
                640: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 1,
                },
                1024: {
                    slidesPerView: 1,
                },
            },
        });

        var swiper = new Swiper('#swiperDokumentasi', {
            slidesPerView: 3,
            spaceBetween: 10,
            loop: true,
            mousewheel: {
                forceToAxis: true,
                sensitivity: 0.5,
                thresholdDelta: 30,
                thresholdTime: 400,
            },
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            speed: 500,
            breakpoints: {
                768: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 10,
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
                    slidesPerGroup: 1,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 10,
                    slidesPerGroup: 1,
                },
            },
        });
    </script>
@endsection
