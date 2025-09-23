@extends(
    "landing.layouts.app",
    [
        "title" => "Berbinar Insightful Indonesia",
    ]
)

@section("content")
    {{-- HERO SECTION --}}

    <style>
        /* Custom bullet style */
        .swiper-pagination-bullet {
            background: #3986A3;
            opacity: 1;
            width: 12px;
            height: 12px;
            margin: 0 6px !important;
            border-radius: 50%;
            transition: background 0.3s, transform 0.3s;
        }
        .swiper-pagination-bullet-active {
            background: #3986A3 !important;
            transform: scale(1.3);
            box-shadow: 0 0 0 2px #3986A3;
        }
        /* Custom position */
        .swiper-pagination {
            bottom: -40px !important;
            text-align: center;
        }

        /* Custom Splide pagination bullet color */
        .splide__pagination__page {
            opacity: 0.3;
            width: 12px;
            height: 12px;
            margin: 0 6px;
            border-radius: 50%;
            transition: opacity 0.3s, transform 0.3s;
        }
        .splide__pagination__page.is-active {
            opacity: 1;
            transform: scale(1.3);
            background: #3986A3 !important;
        }

    </style>

    <section class="lg:mt-32 mb-12 lg:mb-36 w-full overflow-x-hidden">
        <div class="absolute left-0 top-0 h-fit w-1/2 pt-32 md:block md:w-1/3 md:pt-0 lg:w-1/4">
            <img src="{{ asset("assets/images/landing/produk/emo/blop-1.png") }}" alt="top-left-texture" class="object-cover" />
        </div>
        <div class="absolute right-0 top-0 h-fit w-1/2 pt-32 md:block md:w-1/3 md:pt-0 lg:w-1/4">
            <img src="{{ asset("assets/images/landing/produk/emo/blop-2.png") }}" alt="top-right-texture" class="object-cover" />
        </div>
        <div class="relative">
            <div class="z-10 mx-20 flex flex-row items-center justify-between gap-x-10 max-sm:mx-4 max-sm:mt-32">
                <div class="max-lg:min-w-auto flex max-w-xl flex-1 flex-col space-y-6 max-sm:space-y-2">
                    <a href="{{ route("product.index") }}">
                        <div class="flex cursor-pointer items-center space-x-2 lg:order-1">
                            <img src="{{ asset("assets/images/landing/asset-konseling/vector/left-arrow.svg") }}" alt="Left Arrow" class="h-3 w-auto" />
                            <p class="text-[15px] font-semibold text-[#3986A3]">Produk Berbinar</p>
                        </div>
                    </a>

                    <div class="hidden w-full items-center justify-center max-lg:flex-none max-md:flex lg:order-2 lg:w-auto">
                        <img src="{{ asset("assets/images/landing/produk/moodscan-tees/banner-moodscan-tees.png") }}" alt="Moodscan Tees" class="h-[340px] w-auto object-contain max-sm:h-[320px] scale-110" />
                    </div>

                    <div class="lg:order-3">
                        <h2 class="mb-4 bg-gradient-to-r from-[#1C4352] to-[#3986A3] bg-clip-text py-1 font-[inter] text-4xl font-semibold text-transparent lg:text-5xl lg:tracking-wide">MoodScan Tees</h2>
                    </div>

                    <div class="lg:order-4">
                        <p class="text-justify text-lg text-[#70787D] max-lg:text-[17px] max-sm:text-lg max-sm:leading-normal">
                            Moodscan Tees merupakan kaos yang nyaman dan mampu memperbaiki suasana hati suatu individu ataupun kelompok dengan pesan motivasi khusus yang diungkap melalui tindakan pemindaian gambar <span class="italic">QR Code</span>.
                        </p>
                    </div>
                </div>

                <div class="flex w-full flex-initial items-center justify-center max-lg:flex-1 max-md:hidden lg:w-auto">
                    <img src="{{ asset("assets/images/landing/produk/moodscan-tees/banner-moodscan-tees.png") }}" alt="Moodscan Tees" class="h-[340px] w-auto max-lg:h-[320px]" />
                </div>
            </div>
        </div>
    </section>

    <div class="relative">
        <img src="/assets/images/landing/asset-konseling/vector/vector-line.svg" alt="Vector Image" class="pointer-events-none absolute left-0 z-0 w-full select-none object-fill max-sm:top-40" />
    </div>
    {{-- QR Code --}}

    <section class="relative w-full px-0 mb-10 lg:mb-28">
        <div class="block px-4">
            <div class="mx-auto max-w-3xl rounded-xl border lg:border-2 border-cyan-950 bg-white px-3 pb-4 pt-3 shadow-lg shadow-sky-300 lg:max-w-5xl lg:h-auto">
                <video class="lg:w-full rounded-xl" controls autoplay muted loop playsinline preload="metadata">
                    <source src="{{ asset('assets/images/landing/produk/moodscan-tees/fitur-moodscan-tees.mp4') }}" type="video/mp4">
                    Browser Anda tidak mendukung video.
                </video>
            </div>
        </div>
    </section>

    <section class="relative w-full px-4 mb-6 lg:mb-[22rem] overflow-x-clip">
        <img src="{{ asset("assets/images/landing/produk/moodscan-tees/Squiggly-line.png") }}" alt="" class="absolute left-0 top-10 lg:top-6 z-10 w-full lg:w-[100%] object-fill scale-90 lg:scale-75">
        <div class="relative flex flex-col w-full lg:px-16 gap-4 lg:gap-80">
            <div class="flex flex-row mb-6 w-full justify-start z-20">
                <div class="w-[85%] lg:w-[75%] h-20 mb-6">
                    <img src="{{ asset("assets/images/landing/produk/moodscan-tees/Mood-Card.png") }}" alt="Mood" class="lg:w-full">
                </div>
            </div>

            <!-- BLUR SETENGAH LINGKARAN PEMBATAS KANAN -->
            <div class="absolute w-full hidden h-0 lg:flex lg:flex-row">
                <div class="absolute top-0 z-0 md:-right-40" style="width: 300px; height: 300px; border-top-left-radius: 420px; border-bottom-left-radius: 420px; border-top-right-radius: 420px; background: #a2d7f0; filter: blur(60px); opacity: 0.9; top: 100px"></div>
            </div>

            <div class="flex flex-row mb-6 w-full justify-end z-20">
                <div class="w-[85%] lg:w-[75%] h-20 mb-6">
                    <img src="{{ asset("assets/images/landing/produk/moodscan-tees/Scan-Card.png") }}" alt="Scan" class="lg:w-full">
                </div>
            </div>

            <!-- BLUR SETENGAH LINGKARAN PEMBATAS KIRI -->
            <div class="absolute translate-y-96 z-0 hidden h-0 lg:flex lg:flex-row">
                <div class="absolute translate-y-96 -left-32 z-0 md:-left-40" style="width: 300px; height: 300px; border-top-left-radius: 420px; border-bottom-left-radius: 420px; border-top-right-radius: 420px; background: #c7f8ff; filter: blur(60px); opacity: 0.9; top: -100px"></div>
            </div>

            <div class="flex flex-row mb-6 w-full justify-start z-20">
                <div class="w-[85%] lg:w-[75%] h-20 mb-6 ml-4 lg:ml-0">
                    <img src="{{ asset("assets/images/landing/produk/moodscan-tees/Tees-Card.png") }}" alt="Tees" class="lg:w-full">
                </div>
            </div>

        </div>
    </section>

    <section class="relative flex flex-row justify-center mb-10 lg:mb-28 overflow-x-clip">
        <div class="w-[90%] rounded-xl lg:rounded-3xl shadow-lg lg:shadow-2xl p-3 px-6 lg:px-32 lg:py-10 z-10" style="background: linear-gradient(90deg,rgba(223, 245, 253, 1) 0%, rgba(66, 102, 115, 1) 100%);">
            <div class="flex flex-row justify-between w-full gap-10 lg:gap-10">
                <div class="flex flex-col w-1/2 lg:w-2/5">
                    <img src="{{ asset("assets/images/landing/produk/moodscan-tees/T-shirt-size-table.png") }}" alt="Size, width, and height; S, 66, 48; M, 68, 50; L, 70, 52; XL, 73, 54; 2XL, 75, 56; 3XL, 77, 58; 4XL, 79, 60; 5XL, 81, 62" class="mb-4">

                </div>
                <div class="flex flex-col w-1/2 lg:w-2/5">
                    <img src="{{ asset("assets/images/landing/produk/moodscan-tees/T-shirt.png") }}" alt="T-shirt" class="lg:mb-4 scale-125">
                    <a href="https://www.tokopedia.com/berbinarin/moodscan-tees-by-berbinar-in-x-esize-kaos-edukatif-unisex-m-ea46b" target="_blank" class="w-full bg-gradient-to-r from-[#F7B23B] to-[#AD7D29] text-white px-2 py-1 lg:py-2 text-sm lg:text-5xl lg:font-semibold text-center rounded-lg lg:rounded-xl shadow hover:scale-110 transition-all">Beli Sekarang!!</a>
                </div>
            </div>
        </div>
        <!-- BLUR SETENGAH LINGKARAN PEMBATAS KANAN -->
        <div class="absolute w-full hidden h-0 lg:flex lg:flex-row">
            <div class="absolute top-0 z-0 md:-right-40" style="width: 300px; height: 300px; border-top-left-radius: 420px; border-bottom-left-radius: 420px; border-top-right-radius: 420px; background: #a2d7f0; filter: blur(60px); opacity: 0.9; top: 100px"></div>
        </div>
    </section>

    <section class="w-full flex flex-row justify-center mb-7 lg:mb-20 overflow-x-clip">
        <div class="w-[90%] flex flex-row justify-between lg:justify-center gap-4 lg:gap-20">

            <a href="https://www.tokopedia.com/berbinarin/moodscan-tees-by-berbinar-in-x-esize-kaos-edukatif-unisex-m-ea46b" target="_blank" class="lg:w-1/4 hover:scale-110 hover:rotate-3 transition-all">

                <img src="{{ asset("assets/images/landing/produk/moodscan-tees/MoodScan-Tees-Front.png") }}" alt="T-shirt front" class="lg:w-full ">

            </a>

            {{-- <a href="https://www.tokopedia.com/berbinarin/moodscan-tees-by-berbinar-in-x-esize-kaos-edukatif-unisex-m-ea46b" target="_blank" class="bg-white rounded-xl shadow border p-2 lg:w-1/4 hover:scale-110 hover:rotate-3 transition-all">

                <img src="{{ asset("assets/images/landing/produk/moodscan-tees/MoodScan-Tees-Front.png") }}" alt="T-shirt front" class="rounded-xl lg:w-full">

                <div class="w-full flex flex-row justify-end">
                    <div class="absolute -translate-y-2 translate-x-1 rounded-l-lg lg:rounded-l-xl bg-white px-2 py-1">
                        <div class="bg-gray-300 rounded-full"><i class="bx bxs-heart text-red-500 text-lg lg:text-4xl px-1"></i></div>
                    </div>
                </div>
                <img src="{{ asset("assets/images/landing/produk/moodscan-tees/T-shirt-front.png") }}" alt="T-shirt front" class="rounded-xl lg:w-full">
                <div class="absolute -translate-y-7 lg:-translate-y-11 rounded-r-lg lg:rounded-r-xl bg-white px-2 py-1">
                    <div class="bg-black rounded-2xl px-4 py-1 text-white text-sm lg:text-3xl lg:px-6">Beli</div>
                </div>
            </a> --}}

            <a href="https://www.tokopedia.com/berbinarin/moodscan-tees-by-berbinar-in-x-esize-kaos-edukatif-unisex-m-ea46b" target="_blank" class="lg:w-1/4 hover:scale-110 hover:rotate-3 transition-all">

                <img src="{{ asset("assets/images/landing/produk/moodscan-tees/MoodScan-Tees-Back.png") }}" alt="T-shirt back" class="lg:w-full">

            </a>

            {{-- <a href="https://www.tokopedia.com/berbinarin/moodscan-tees-by-berbinar-in-x-esize-kaos-edukatif-unisex-m-ea46b" target="_blank" class="bg-white rounded-xl shadow border p-2 lg:w-1/4 hover:scale-110 hover:rotate-3 transition-all">
                <div class="w-full flex flex-row justify-end">
                    <div class="absolute -translate-y-2 translate-x-1 rounded-l-lg lg:rounded-l-xl bg-white px-2 py-1">
                        <div class="bg-gray-300 rounded-full"><i class="bx bxs-heart text-red-500 text-lg lg:text-4xl px-1"></i></div>
                    </div>
                </div>
                <img src="{{ asset("assets/images/landing/produk/moodscan-tees/T-shirt-back.png") }}" alt="T-shirt back" class="rounded-xl lg:w-full">
                <div class="absolute -translate-y-7 lg:-translate-y-11 rounded-r-lg lg:rounded-r-xl bg-white px-2 py-1">
                    <div class="bg-black rounded-2xl px-4 py-1 text-white text-sm lg:text-3xl lg:px-6">Beli</div>
                </div>
            </a> --}}
        </div>

        <div class="absolute w-full flex flex-row">
            <!-- BLUR SETENGAH LINGKARAN PEMBATAS KIRI -->
                <div class="absolute translate-y-40 z-0 hidden h-0 lg:flex lg:flex-row">
                    <div class="absolute -left-32 z-0 md:-left-40" style="width: 300px; height: 300px; border-top-left-radius: 420px; border-bottom-left-radius: 420px; border-top-right-radius: 420px; background: #c7f8ff; filter: blur(60px); opacity: 0.9; top: -100px"></div>
                </div>
        </div>


    </section>

    <section class="relative w-full flex flex-col justify-center overflow-x-clip lg:mb-24">
        <h1 class="bg-gradient-to-r from-[rgb(57,134,163)] to-[#1C4352] bg-clip-text text-center font-[inter] text-3xl lg:text-5xl lg:pb-2 font-semibold text-transparent lg:tracking-wide mb-8 lg:mb-12">Alasan Mengapa Produk Ini Spesial</h1>

        <!-- Mobile -->
        <div class="w-full flex flex-row justify-center lg:hidden">
            <div id="splide-special-reason-mobile" class="splide max-w-sm mb-10 w-[95%]">
                <div class="splide__track mb-10">
                    <ul class="splide__list mb-12">
                        <li class="splide__slide mb-2">
                            <!-- Card 1 -->
                            <div class="flex flex-col mb-2 items-center rounded-2xl shadow bg-white h-full px-5 py-4">
                                <img src="{{ asset("assets/images/landing/produk/moodscan-tees/reason-1.png") }}" alt="" class="w-20 h-20 mb-4">
                                <h3 class="text-2xl text-center font-bold mb-6 h-16">Inovasi <span class="italic">QR code &nbsp;</span>psikologi di kaos</h3>
                                <div class="h-32 flex flex-col justify-center items-center mb-2">
                                    <p class="text-disabled text-xl text-center"><span class="italic">Scan QR &nbsp;</span>di belakang kaos untuk akses kutipan psikologi inspiratif yang selalu berganti.</p>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide mb-2">
                            <!-- Card 2 -->
                            <div class="flex flex-col mb-2 items-center rounded-2xl shadow bg-white h-full px-5 py-4">
                                <img src="{{ asset("assets/images/landing/produk/moodscan-tees/reason-2.png") }}" alt="" class="w-20 h-20 mb-4">
                                <h3 class="text-2xl text-center font-bold mb-6 h-16">Design psikologi yang <span class="italic">simple &nbsp;</span>tapi penuh makna</h3>
                                <div class="h-32 flex flex-col justify-center items-center mb-2">
                                    <p class="text-disabled text-xl text-center">Kaos ini memadukan mode psikologi dan desain minimalis untuk menghadirkan kesan reflektif yang berbicara tentang dirimu.</p>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide mb-2">
                            <!-- Card 3 -->
                            <div class="flex flex-col mb-2 items-center rounded-2xl shadow bg-white h-full px-5 py-4">
                                <img src="{{ asset("assets/images/landing/produk/moodscan-tees/reason-3.png") }}" alt="" class="w-20 h-20 mb-4">
                                <h3 class="text-2xl text-center font-bold mb-6 h-16">Bahan premium 100% <span class="italic">cotton combed</span></h3>
                                <div class="h-32 flex flex-col justify-center items-center mb-2">
                                    <p class="text-disabled text-xl text-center"><span class="italic">Comfort is king <br> &nbsp;</span>(nyaman dipakai untuk berbagai aktivitas).</p>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide mb-2">
                            <!-- Card 4 -->
                            <div class="flex flex-col mb-2 items-center rounded-2xl shadow bg-white h-full px-5 py-4">
                                <img src="{{ asset("assets/images/landing/produk/moodscan-tees/reason-4.png") }}" alt="" class="w-20 h-20 mb-4">
                                <h3 class="text-2xl text-center font-bold mb-6 h-16"><span class="italic">Unisex &nbsp;</span>dan <span class="italic">size &nbsp;</span>lengkap hingga 5XL</h3>
                                <div class="h-32 flex flex-col justify-center items-center mb-2">
                                    <p class="text-disabled text-xl text-center">Mampu menjangkau pasar lebih luas, termasuk pasangan serta kategori ukuran <span class="italic">plus size</span>.</p>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide mb-2">
                            <!-- Card 5 -->
                            <div class="flex flex-col mb-2 items-center rounded-2xl shadow bg-white h-full px-5 py-4">
                                <img src="{{ asset("assets/images/landing/produk/moodscan-tees/reason-5.png") }}" alt="" class="w-20 h-20 mb-4">
                                <h3 class="text-2xl text-center font-bold mb-6 h-16"><span class="italic">Limited <br>colaboration</span></h3>
                                <div class="h-32 flex flex-col justify-center items-center mb-2">
                                    <p class="text-disabled text-xl text-center">Kolaborasi antara Berbinar Insightful Indonesia dan Esize yang dapat meningkatkan nilai ekslusivitas.</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>


        <!-- BLUR SETENGAH LINGKARAN PEMBATAS KANAN -->
        <div class="absolute w-full -translate-y-40 hidden h-0 lg:flex lg:flex-row">
            <div class="absolute top-0 z-0 md:-right-40" style="width: 300px; height: 300px; border-top-left-radius: 420px; border-bottom-left-radius: 420px; border-top-right-radius: 420px; background: #a2d7f0; filter: blur(60px); opacity: 0.9; top: 100px"></div>
        </div>

        <!-- Desktop Swiper Alasan Produk Spesial -->
        <div class="w-full px-32 hidden lg:block z-10">
            <div class="swiper-container-special-reason-desktop">
                <div class="swiper-wrapper">
                    <div class="swiper-slide flex flex-row justify-center items-start rounded-2xl shadow bg-white h-full">
                        <div class="w-full px-5 flex flex-col justify-center py-4 h-auto">
                            <div class="flex h-52 flex-col w-full justify-center items-center gap-5">
                                <img src="{{ asset("assets/images/landing/produk/moodscan-tees/reason-1.png") }}" alt="" class="w-20 h-20 mb-4">
                                <h3 class="text-2xl text-center font-bold mb-4 h-16">Inovasi <span class="italic">QR code &nbsp;</span>psikologi di kaos</h3>
                            </div>
                            <div class="h-32 flex flex-col justify-center items-center">
                                <p class="text-disabled text-xl text-center"><span class="italic">Scan QR &nbsp;</span>di belakang kaos untuk akses kutipan psikologi inspiratif yang selalu berganti.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide flex flex-row justify-center items-start rounded-2xl shadow bg-white h-full">
                        <div class="w-full px-5 flex flex-col justify-center py-4 h-auto">
                            <div class="flex h-52 flex-col w-full justify-center items-center gap-5">
                                <img src="{{ asset("assets/images/landing/produk/moodscan-tees/reason-2.png") }}" alt="" class="w-20 h-20 mb-4">
                                <h3 class="text-2xl text-center font-bold mb-4 h-16">Design psikologi yang <span class="italic">simple &nbsp;</span>tapi penuh makna</h3>
                            </div>
                            <div class="h-32 flex flex-col justify-center items-center">
                                <p class="text-disabled text-xl text-center">Kaos ini memadukan mode psikologi dan desain minimalis untuk menghadirkan kesan reflektif yang berbicara tentang dirimu.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide flex flex-row justify-center items-start rounded-2xl shadow bg-white h-full">
                        <div class="w-full px-5 flex flex-col justify-center py-4 h-auto">
                            <div class="flex h-52 flex-col w-full justify-center items-center gap-5">
                                <img src="{{ asset("assets/images/landing/produk/moodscan-tees/reason-3.png") }}" alt="" class="w-20 h-20 mb-4">
                                <h3 class="text-2xl text-center font-bold mb-4 h-16">Bahan premium 100% <span class="italic">cotton combed</span></h3>
                            </div>
                            <div class="h-32 flex flex-col justify-center items-center">
                                <p class="text-disabled text-xl text-center"><span class="italic">Comfort is king <br> &nbsp;</span>(nyaman dipakai untuk berbagai aktivitas).</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide flex flex-row justify-center items-start rounded-2xl shadow bg-white h-full">
                        <div class="w-full px-5 flex flex-col justify-center py-4 h-auto">
                            <div class="flex h-52 flex-col w-full justify-center items-center gap-5">
                                <img src="{{ asset("assets/images/landing/produk/moodscan-tees/reason-4.png") }}" alt="" class="w-20 h-20 mb-4">
                                <h3 class="text-2xl text-center font-bold mb-4 h-16"><span class="italic">Unisex &nbsp;</span>dan <span class="italic">size &nbsp;</span>lengkap hingga 5XL</h3>
                            </div>
                            <div class="h-32 flex flex-col justify-center items-center">
                                <p class="text-disabled text-xl text-center">Mampu menjangkau pasar lebih luas, termasuk pasangan serta kategori ukuran <span class="italic">plus size</span>.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide flex flex-row justify-center items-start rounded-2xl shadow bg-white h-full">
                        <div class="w-full px-5 flex flex-col justify-center py-4 h-auto">
                            <div class="flex h-52 flex-col w-full justify-center items-center gap-5">
                                <img src="{{ asset("assets/images/landing/produk/moodscan-tees/reason-5.png") }}" alt="" class="w-20 h-20 mb-4">
                                <h3 class="text-2xl text-center font-bold mb-4 h-16"><span class="italic">Limited <br>colaboration</span></h3>
                            </div>
                            <div class="h-32 flex flex-col justify-center items-center">
                                <p class="text-disabled text-xl text-center">Kolaborasi antara Berbinar Insightful Indonesia dan Esize yang dapat meningkatkan nilai ekslusivitas.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination" style="bottom: -40px"></div>


            </div>
        </div>

    </section>

<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
<script>
document.addEventListener('DOMContentLoaded', function () {
    // Mobile Swiper
    if (window.innerWidth < 1024) {
        new Swiper('.swiper-container-special-reason-mobile', {
            slidesPerView: 1,
            centeredSlides: true,
            spaceBetween: 0,
            loop: false,
            pagination: {
                el: '.swiper-container-special-reason-mobile .swiper-pagination',
                clickable: true,
            },
        });
    }

    // Desktop Swiper
    if (window.innerWidth >= 1024) {
        new Swiper('.swiper-container-special-reason-desktop', {
            slidesPerView: 3,
            spaceBetween: 30,
            loop: false,
            pagination: {
                el: '.swiper-container-special-reason-desktop .swiper-pagination',
                clickable: true,
            },
        });
    }
});
</script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    if (window.innerWidth < 1024) {
        new Splide('#splide-special-reason-mobile', {
            type: 'slide',
            perPage: 1,
            gap: '20px',
            pagination: true,
            arrows: false,
            focus: 'center',
            autoWidth: false,
        }).mount();
    }
});
</script>
@endsection
