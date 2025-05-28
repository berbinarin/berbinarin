@extends('layouts.main-new', [
    'title' => 'Berbinar Insightful Indonesia',
    'active' => 'Beranda',
    'page' => 'Beranda',
])

@section('content')

<!-- HERO SECTION -->
<section class="relative bg-mini bg-cover w-full max-sm:h-[90vh] h-[110vh] bg-hero max-lg:bg-center">
    <div class="absolute inset-0 bg-gradient-to-r from-[#9CC3D1] to-transparent max-sm:bg-[#9CC3D1] max-sm:opacity-70 z-10"></div>

    <div class="relative z-20 flex text-left items-center h-full max-sm:px-4 px-14">
        <div class="text-black max-sm:w-full flex flex-col justify-center">
            <h1 class="max-sm:text-[40px] max-md:text-5xl text-6xl font-semibold judul-mini">Edukasi & Layanan <br>Psikologi <span class="text-[#3886A3]">Berbinar</span></h1>
            <p class="mt-4 max-sm:text-[15px] max-md:text-[17px] max-sm:w-full max-sm:leading-relaxed max-lg:w-3/4 w-3/5 text-justify text-lg font-normal text-[#444444] deskripsi-mini">
                Berbinar Insightful Indonesia adalah mitra terpercaya dalam menghadirkan layanan psikologi secara terintegrasi seperti
                konseling, psikotes, kelas edukasi, dan konsultasi profesional. Melalui pendekatan inklusif dan alat psikologi terstandar,
                Berbinar hadir untuk membangun hubungan antara perusahaan dengan klien secara profesional. dan meraih potensi yang terbaik.
            </p>
            <div class="flex justify-start">
                <a href="{{ route('about_us.index') }}">
                    <button class="mt-4 bg-gradient-to-r from-[#F7B23B] to-[#AD7D29] text-white font-medium py-2 px-6 rounded-lg w-auto max-sm:w-auto max-sm:text-sm whitespace-nowrap">
                        Profil Perusahaan
                    </button>
                </a>
            </div>
        </div>
    </div>

    <!-- VECTOR SINGA -->
    <div class="absolute bottom-0 max-sm:right-2 right-20 w-auto max-w-xs h-auto z-10 hidden sm:block">
        <img src="{{ asset('assets/images/landing/vector-singa.png') }}" alt="Singa" class="max-sm:w-auto max-sm:h-[350px] w-full h-full">
    </div>

    <div class="absolute bottom-0 max-sm:right-2 right-20 w-auto max-w-xs h-auto z-10 block sm:hidden">
        <img src="{{ asset('assets/images/landing/vector-singa3.png') }}" alt="Singa" class="max-sm:w-auto max-sm:h-[350px] w-full h-full">
    </div>

    {{-- WHATSAPP ICON --}}
    {{-- <div class="fixed bottom-16 right-16 w-auto max-w-xs h-auto z-30 hidden sm:block">
        <img src="{{ asset('assets/images/landing/vector-whatsapp.png') }}" alt="Singa" class="w-auto h-12">
    </div> --}}

    <!-- STATS SECTION -->
    <div class="absolute stats-mini max-sm:bottom-[-14rem] bottom-[-5rem] left-1/2 transform -translate-x-1/2 max-sm:w-[93%] max-md:w-[83%] max-lg:w-[88%] w-[75%] bg-white py-8 bg-opacity-85 backdrop-blur-sm max-sm:px-6 px-8 rounded-xl shadow-lg z-20">
        <div class="flex flex-row max-sm:flex-col justify-around text-center max-sm:space-x-0 max-sm:space-y-3 space-x-8">
            <div class="flex flex-col">
                <span class="num max-sm:text-[33px] text-4xl font-bold text-black" data-val="28">00<span>+</span></span>
                <span class="text-[#656C70] text-md max-sm:text-[15px]">Pakar dengan pengalaman yang profesional</span>
            </div>
            <div class="-py-8">
                <div class="w-px h-full bg-black"></div>
            </div>
            <div class="flex flex-col">
                <span class="num max-sm:text-[33px] text-4xl font-bold text-black" data-val="87.7">00,0<span>%</span></span>
                <span class="text-[#656C70] text-md max-sm:text-[15px]">Testimoni dari SobatBinar yang puas akan layanan</span>
            </div>
            <div class="-py-8">
                <div class="w-px h-full bg-black"></div>
            </div>
            <div class="flex flex-col">
                <span class="num max-sm:text-[33px] text-4xl font-bold text-black" data-val="15">00<span>K+</span></span>
                <span class="text-[#656C70] text-md max-sm:text-[15px]">Orang sudah menggunakan produk dari Berbinar</span>
            </div>
        </div>
    </div>
</section>

{{-- WHY BERBINAR SECTION --}}
<section>
    <h1 class="text-mini max-sm:text-[29px] text-4xl font font-semibold text-black text-center mt-40 max-sm:mt-64 max-sm:mx-2">Mengapa Harus <span class="bg-[#3886A3] text-white px-2 ">Berbinar</span></h1>
    <div class="bg-white max-sm:mx-4 mx-14 my-9 max-sm:my-5 mb-16 shadow-md rounded-3xl">
        <div class="flex flex-row max-md:flex-col gap-x-6 max-md:p-5 p-8 items-center">
            <!-- SCREEN DESKTOP -->
            <img src="{{ asset('assets/images/landing/logo-berbinar.png') }}" alt="Logo Berbinar" class="h-64 max-sm:h-60 w-auto">
            <!-- SCREEN MOBILE -->
            {{-- <img src="{{ asset('assets/images/landing/vector-konsul.png') }}" alt="Berbinar Mobile" class="h-[270px] w-full object-cover rounded-lg block md:hidden"> --}}

            <div class="flex-col max-md:space-y-3 space-y-6">
                <div class="flex flex-row flex-wrap max-md:justify-center max-md:mt-4 gap-3">
                    @foreach ($visimisis as $visimisi)
                    <div class="bg-[#3986A3] p-1.5 rounded-full items-center w-auto">
                        <div class="flex flex-row gap-x-1.5 items-center">
                            <img src="{{ asset('assets/images/landing/asset-beranda/vector/tick.svg') }}" alt="Vector" class="h-6 w-6 bg-white rounded-full p-1">
                            <p class="text-white font-medium max-sm:text-[13px] text-[15px]">{{ $visimisi['moto'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>

                <p class="text-[#70787D] max-md:mt-3 text-justify max-sm:text-[15px] text-[17px]">
                    Berbinar adalah solusi lengkap untuk kebutuhan psikologi Anda—dari konseling, psikotes, kelas edukasi, hingga layanan consulting profesional dengan biaya terjangkau dan fleksibilitas yang tinggi yang tentunya semua dirancang khusus sesuai kebutuhan. Saatnya wujudkan potensi terbaik Anda bersama Berbinar!
                </p>
                <button class="text-white font-medium bg-gradient-to-r max-sm:text-[15px] text-md from-[#3986A3] to-[#225062] py-2 px-4 rounded-xl max-md:w-full">Lihat Produk Berbinar</button>
            </div>
        </div>
    </div>
</section>

{{-- KONTEN SOSMED --}}
<div class="w-full max-sm:h-[1200px] h-[650px] bg-cover" style="background-image: url('/assets/images/landing/vector-pattern.png'), linear-gradient(to bottom right, #EAF8FF, #BDE8FD); background-blend-mode: normal, multiply;">
    <h1 class="max-sm:text-[29px] text-4xl font-semibold text-black text-center max-sm:mx-4 my-8">Konten Terbaru <span class="bg-[#3886A3] text-white px-2 ">Berbinar</span></h1>
    <div class="flex flex-row max-sm:flex-col justify-evenly -mt-8 max-sm:items-center">
        {{-- INSTAGRAM --}}
        <div class="justify-center text-center max-sm:-mt-10">
            {{-- <a href="https://www.instagram.com/berbinar.in/" class="cursor-pointer">
                <div class="inline-flex bg-white shadow-xl p-2 mb-5 gap-x-1 rounded-lg justify-center">
                    <img src="{{ asset('assets/images/landing/sosmed-icon/vector-ig-color.png') }}" alt="Instagram" class="h-8 w-auto">
                    <p class="text-black text-xl font-medium">@berbinar.in</p>
                </div>
            </a> --}}

            {{-- EMBED --}}
            <div style="border-radius: 20px; width: 320px; max-width: 100%; transform: scale(0.8); transform-origin: center center; overflow: hidden; height: 610px;">
                <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/DEoddPMz-3e/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14"
                    style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
                    <div style="padding:16px;"> <a href="https://www.instagram.com/p/DEoddPMz-3e/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank">
                        <div style=" display: flex; flex-direction: row; align-items: center;">
                            <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div>
                            <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;">
                                <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div>
                                <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div>
                            </div>
                        </div>
                        <div style="padding: 19% 0;"></div>
                        <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div>
                        <div style="padding-top: 8px;">
                            <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">View this post on Instagram</div>
                        </div>
                        <div style="padding: 12.5% 0;"></div>
                        <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;">
                        <div>
                            <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div>
                            <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div>
                            <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div>
                            <div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div>
                            <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div>
                            <div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div>
                            <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div>
                            <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div>
                            <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;">
                                <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div>
                                <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/DEoddPMz-3e/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by Berbinar Insightful Indonesia (@berbinar.in)</a></p></div>
                </blockquote>
                <script async src="//www.instagram.com/embed.js"></script>
            </div>
        </div>

        {{-- TIKTOK --}}
        <div class="justify-center text-center max-sm:-mt-[70px]">
            {{-- <a href="https://www.tiktok.com/@berbinar.in" class="cursor-pointer">
                <div class="inline-flex bg-white shadow-xl p-2 mb-5 gap-x-1 rounded-lg justify-center">
                    <img src="{{ asset('assets/images/landing/sosmed-icon/vector-tiktok-color.png') }}" alt="Instagram" class="h-8 w-auto">
                    <p class="text-black text-xl font-medium">@berbinar.in</p>
                </div>
            </a> --}}


            {{-- EMBED --}}
            <div style="border-radius: 20px; overflow: hidden; width: 320px; max-width: 100%; transform: scale(0.8); transform-origin: center center; ">
                <blockquote class="tiktok-embed" cite="https://www.tiktok.com/@berbinar.in/video/7421100407646096645" data-video-id="7421100407646096645" data-embed-from="embed_page" style="max-width: 100%; min-width: 320px; height: 610px; margin: 0; padding: 0;"> <section> <a target="_blank" title="@berbinar.in" href="https://www.tiktok.com/@berbinar.in?refer=embed">@berbinar.in</a> <p>Jangan self-diagnosa! Konsultasi ke profesional lebih tepat untuk kesehatan mentalmu. Yuk, jaga diri dengan cara yang benar🤩 Tiktok creator : @Jakiiie life update  Grapich design: @ayrinn  <a title="stopselfdiagnosa" target="_blank" href="https://www.tiktok.com/tag/stopselfdiagnosa?refer=embed">#StopSelfDiagnosa</a> <a title="mentalhealthmatters" target="_blank" href="https://www.tiktok.com/tag/mentalhealthmatters?refer=embed">#MentalHealthMatters</a> <a title="jagakesehatanmental" target="_blank" href="https://www.tiktok.com/tag/jagakesehatanmental?refer=embed">#JagaKesehatanMental</a> <a title="mentalhealthawareness" target="_blank" href="https://www.tiktok.com/tag/mentalhealthawareness?refer=embed">#MentalHealthAwareness</a> <a title="jangandiagnosasendiri" target="_blank" href="https://www.tiktok.com/tag/jangandiagnosasendiri?refer=embed">#JanganDiagnosaSendiri</a> <a title="caribantuanprofesional" target="_blank" href="https://www.tiktok.com/tag/caribantuanprofesional?refer=embed">#CariBantuanProfesional</a> <a title="hidupsehat" target="_blank" href="https://www.tiktok.com/tag/hidupsehat?refer=embed">#HidupSehat</a> <a title="selfcare" target="_blank" href="https://www.tiktok.com/tag/selfcare?refer=embed">#SelfCare</a> <a title="psikologi" target="_blank" href="https://www.tiktok.com/tag/psikologi?refer=embed">#Psikologi</a> <a title="kesehatanmental" target="_blank" href="https://www.tiktok.com/tag/kesehatanmental?refer=embed">#KesehatanMental</a> <a title="fyp" target="_blank" href="https://www.tiktok.com/tag/fyp?refer=embed">#fyp</a> </p> <a target="_blank" title="♬ original sound - 𝐁𝐨𝐧𝐝𝐨𝐥 𝐉𝐏𝐆 - 𝐁𝐨𝐧𝐝𝐨𝐥 𝐉𝐏𝐆" href="https://www.tiktok.com/music/original-sound-𝐁𝐨𝐧𝐝𝐨𝐥-𝐉𝐏𝐆-7416210676387678981?refer=embed">♬ original sound - 𝐁𝐨𝐧𝐝𝐨𝐥 𝐉𝐏𝐆 - 𝐁𝐨𝐧𝐝𝐨𝐥 𝐉𝐏𝐆</a> </section> </blockquote> <script async src="https://www.tiktok.com/embed.js"></script>
            </div>
        </div>
    </div>
</div>

{{-- PRODUK--}}
<section class="mt-6">
    <p class="max-sm:text-[29px] text-4xl font font-semibold text-black text-center my-8 max-sm:my-4 max-sm:mx-2 mx-20 relative z-10">Produk <span class="bg-primary text-white px-2 ">Berbinar</span></p>
    <div class="swiperContainer">
        <div class="swiper" id="swiperProduk">
            <div class="swiper-wrapper max-sm:pb-8 pb-1">
                @foreach ($products as $product)
                <div class="swiper-slide">
                    <div class="bg-white rounded-3xl shadow-md flex flex-col justify-center items-center text-center h-auto w-auto">
                        <div class="bg-white flex justify-center p-7 max-sm:p-5 rounded-t-3xl w-full border-b">
                            <img src="{{ asset($product['vector']) }}" alt="{{ $product['produk'] }}" class="max-sm:h-[110px] max-md:h-[130px] h-36 w-auto object-contain">
                        </div>

                        <div class="max-sm:px-3 px-4 max-sm:py-3 py-4 text-center flex flex-col flex-grow">
                            <h2 class="max-sm:text-[16px] text-[17px] font-semibold text-black items-center justify-center flex">{{ $product['produk'] }}</h2>
                            <p class="max-sm:mt-2 mt-3 text-[14px] text-[#70787D] max-sm:leading-tight max-lg:min-h-[90px] min-h-[75px]">
                                {{ $product['deskripsi'] }}
                            </p>
                            <a href="{{ $product['link'] }}" class="max-md:mt-4 mt-4 bg-[#75BADB] text-white rounded-full max-sm:w-full font-semibold text-sm max-sm:text-[13px] px-4 py-2 shadow self-center">
                                Pelajari Selengkapnya
                            </a>
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
    <p class="max-sm:text-[29px] text-4xl font font-semibold text-black text-center my-8 max-sm:my-4 max-sm:mx-2 mx-20 relative z-10">Apa Kata Mereka Tentang <span class="bg-primary text-white px-2 ">Berbinar</span> ?</p>
    <div class="swiperContainer">
        <div class="swiper" id="swiperTestimoni">
            <div class="swiper-wrapper max-sm:pb-8 pb-1">
                @foreach ($testimonis as $testimoni)
                <div class="swiper-slide">
                    <div class="bg-white rounded-3xl shadow-md flex flex-col justify-center text-center items-center h-auto w-auto p-5">
                        <img src="{{ asset('assets/images/landing/vector-kutip.png') }}" alt="Kutip" class="max-sm:h-7 h-8 w-auto">

                        <div class="pt-4 text-center flex flex-col flex-grow">
                            <p class="max-sm:text-[14px] max-sm:leading-tight leading-snug text-[16px] text-black font-medium flex-grow text-justify max-sm:min-h-[175px] max-lg:min-h-[220px] max-md:min-h-[198px] min-h-[198px]">
                                {{ $testimoni['comment'] }}
                            </p>
                        </div>

                        <div class="flex flex-col items-center max-sm:mt-1 mt-4 max-lg:mt-2 text-center">
                            <img src="{{ asset($testimoni['image']) }}" alt="Kutip" class="max-sm:h-14 h-[70px] w-auto rounded-full">
                            <p class="max-sm:text-[15px] mt-1 text-[17px] text-black font-semibold">
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
<section class="mx-14 max-sm:mx-4 bg-[#EAF3F6] p-8 max-sm:p-4 rounded-xl my-10">
    <div class="flex flex-col gap-y-4">
        <div class="justify-start flex">
            <img src="{{ asset('assets/images/landing/asset-beranda/vector/quote.svg') }}" alt="Vector" class="h-8 max-sm:h-7 w-auto">
        </div>
        <p class="text-black text-xl max-sm:text-[16px] font-medium text-justify max-sm:text-center max-sm:leading-tight leading-loose">
            <span class="text-[#3986A3]">Kesehatan mental</span> merupakan hal yang sedang menjadi sebuah <span class="text-[#3986A3]">trend</span> sekaligus permasalahan yang serius di era masyarakat sekarang.
            <span class="text-[#3986A3]">Berbinar</span> hadir dalam memberikan <span class="text-[#3986A3]">solusi</span> terhadap keresahan dalam menghadapi persoalan kesehatan mental
        </p>
        <div class="justify-end flex">
            <img src="{{ asset('assets/images/landing/asset-beranda/vector/quote.svg') }}" alt="Vector" class="h-8 max-sm:h-7 w-auto">
        </div>
    </div>
</section>
@endsection
