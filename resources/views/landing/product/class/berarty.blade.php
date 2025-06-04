@extends('landing.layouts.app', [
    'title' => 'Berbinar Insightful Indonesia',
    'active' => 'Produk Berbinar',
    'page' => 'Berarty',
])

@section('content')
    {{-- HERO SECTION --}}

<section id="customSection" class="mb-12 w-full overflow-x-hidden">
    <div class="absolute left-0 top-0 h-fit md:block w-1/2 md:w-1/3 lg:w-1/4 pt-32 md:pt-0">
        <img
            src="{{ asset('assets/images/landing/produk/emo/blop-1.png') }}"
            alt="top-left-texture"
            class="object-cover"
        />
    </div>
    <div class="absolute right-0 top-0 h-fit md:block w-1/2 md:w-1/3 lg:w-1/4 pt-32 md:pt-0">
        <img
            src="{{ asset('assets/images/landing/produk/emo/blop-2.png') }}"
            alt="top-right-texture"
            class="object-cover"
        />
    </div>
    <div class="relative">
        <div class="flex flex-row justify-between items-center max-sm:mt-32 mt-40 mx-20 max-sm:mx-4 gap-x-10 z-10">
            <div class="flex flex-col flex-1 space-y-6 max-sm:space-y-2 max-w-xl max-lg:min-w-auto">
                <a href="{{ route('product.index') }}">
                    <div class="flex lg:order-1 items-center space-x-2 cursor-pointer">
                        <img src="{{ asset('assets/images/landing/asset-konseling/vector/left-arrow.svg') }}" alt="Left Arrow" class="h-3 w-auto">
                        <p class="text-[15px] font-semibold text-[#3986A3]">Produk Berbinar</p>
                    </div>
                </a>

                <div class="hidden max-md:flex max-lg:flex-none items-center justify-center w-full lg:w-auto lg:order-2">
                    <img src="{{ asset('assets/images/landing/produk/berarty/banner-berarty.png') }}" alt="Konseling" class="h-[340px] max-sm:h-[320px] w-auto object-contain">
                </div>

                <div class="lg:order-3">
                    <h2 class="mb-4 bg-gradient-to-r from-[#1C4352] to-[#3986A3] bg-clip-text py-1 font-[inter] text-4xl font-semibold text-transparent lg:text-5xl lg:tracking-wide">BERARTY</h2>
                </div>

                <div class="lg:order-4">
                    <p class="text-[#70787D] text-justify max-sm:text-[15px] max-sm:leading-normal text-lg max-lg:text-[17px]">
                        <span class="italic">“Berbinar Hears To You”</span> adalah produk yang membahas fenomena psikologis dari berbagai sudut pandang. Acara ini dilaksanakan secara <span class="italic">live</span> TikTok setiap hari Minggu pukul 20.00 WIB. Tidak hanya membahas tentang psikologi, tetapi juga membahas topik-topik lain yang dikaitkan dengan psikologi. Tentunya, mengusung konsep tanya jawab antara <span class="italic">audience</span> dengan psikolog. Dimana setiap <span class="italic">audience</span> bebas menanyakan apapun kepada psikolog secara gratis dan tidak dipungut biaya apapun. BERARTY dapat ditonton di Instagram Berbinar, dan juga tersedia di Youtube Berbinar.
                    </p>
                </div>
            </div>

            <div class="flex max-md:hidden flex-initial max-lg:flex-1 items-center justify-center w-full lg:w-auto">
                <img src="{{ asset('assets/images/landing/produk/berarty/banner-berarty.png') }}" alt="Konseling" class="h-[340px] max-lg:h-[320px] w-auto">
            </div>
        </div>
    </div>
</section>

<div class="relative">
    <img src="/assets/images/landing/asset-konseling/vector/vector-line.svg" alt="Vector Image" class="absolute max-sm:top-40 left-0 object-fill w-full z-0 pointer-events-none select-none">
</div>
{{-- KONTEN BERARTY --}}

<section class="relative w-full px-0">

            <div class="relative z-10">
                {{-- Desktop View --}}
                <h1 class="hidden md:block mb-4 text-center text-3xl font-semibold z-10 mt-20">Konten BERARTY</h1>
                <div class="mx-4 md:mx-10 lg:mx-20 hidden lg:block mb-10 z-10">
                    <div class="w-full rounded-3xl md:gap-6 lg:gap-10 bg-white px-10 pb-12 pt-10 shadow-lg max-w-full mx-auto z-10">
                        <h1 class="text-3xl font-semibold mb-4">
                            BERARTY <span class="text-primary">Episode 54</span>
                        </h1>
                        <div class="flex flex-col md:flex-row gap-6 mb-2">
                            <div class="w-1/2 mr-6">
                                <p class="my-3 text-justify text-xl/10 text-[#70787D]">
                                    Episode ini membahas dampak kata-kata negatif terhadap kepercayaan diri serta memberikan kiat wawancara kerja. Acara mingguan ini memberi kesempatan bagi pemirsa untuk berkonsultasi gratis dengan psikolog dan membantu mengatasi masalah pribadi. Episode ini juga menekankan pentingnya keaslian dan persiapan dalam wawancara, serta konsistensi antara CV, tes psikometrik, dan jawaban saat wawancara.
                                </p>

                            </div>
                            <img src="{{ asset('assets/images/landing/produk/berarty/berarty-episode54-main.png') }}" alt="Berarty Episode 54" class="w-full md:w-1/2 md:ml-6 rounded-xl object-cover">
                        </div>
                        <a href="https://www.youtube.com/watch?v=RqALllUyL7o" class="rounded-lg bg-gradient-to-r from-amber-400 to-yellow-700 py-3 text-center font-semibold text-white mt-2 px-6">Tonton BERARTY</a>
                    </div>
                </div>
            </div>

            {{-- Mobile View --}}
            <h1 class="md:hidden mb-4 text-center text-3xl font-semibold z-10 mt-10">Konten BERARTY</h1>
            <div class="block px-4 lg:hidden">
                <div class="rounded-3xl bg-white px-6 pb-8 pt-6 shadow-lg max-w-3xl mx-auto">
                    <h2 class="text-center text-lg font-semibold mb-4">
                        BERARTY <span class="text-primary">Episode 54</span>
                    </h2>
                    <div class="flex flex-col md:flex-row items-center gap-3">
                        <img src="{{ asset('assets/images/landing/produk/berarty/berarty-episode54-main.png') }}" alt="Berarty Episode 54" class="w-full md:w-1/2 rounded-xl object-cover">
                        <div>
                            <p class="mb-3 text-justify text-sm text-[#70787D]">
                                Episode ini membahas dampak kata-kata negatif terhadap kepercayaan diri serta memberikan kiat wawancara kerja. Acara mingguan ini memberi kesempatan bagi pemirsa untuk berkonsultasi gratis dengan psikolog dan membantu mengatasi masalah pribadi. Episode ini juga menekankan pentingnya keaslian dan persiapan dalam wawancara, serta konsistensi antara CV, tes psikometrik, dan jawaban saat wawancara.
                            </p>
                            <a href="https://www.youtube.com/watch?v=RqALllUyL7o" class="block rounded-lg bg-gradient-to-r from-amber-400 to-yellow-700 py-2 text-center font-semibold text-white mt-2">Tonton BERARTY</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>



{{-- SWIPER KONTEN BERARTY BERBINAR --}}
<section>

    {{-- Desktop View --}}
    <div class="mx-4 md:mx-10 lg:mx-20 hidden md:block mb-20">

    <div class="flex flex-row gap-6">

        {{-- Card Konten Desktop --}}
        <div class="rounded-3xl px-2 shadow-lg w-1/3 py-6">
            <div class="justify-items-center px-3">
                <img src="{{ asset('assets/images/landing/produk/berarty/berarty-episode55.png') }}" alt="" class="w-full" />
            </div>
            <div class="flex flex-col gap-2 px-4 text-center mt-4 mb-8">
                <h2 class="text-center font-semibold">BERARTY Episode 55</h2>
                <p class="text-lg text-[#70787D]">Bersama: Danny Sanjaya Arfensia, S. Psi., M.Psi., Psikolog</p>
            </div>
            <a href="https://www.youtube.com/watch?v=Bb-N9gBqlcE" class="mt-3 block rounded-lg justify-self-center w-1/3 bg-gradient-to-r from-amber-400 to-yellow-700 py-2 text-center text-sm font-semibold text-white">Tonton BERARTY</a>
        </div>

        {{-- Card Konten Desktop --}}
        <div class="rounded-3xl px-2 shadow-lg w-1/3 py-6">
            <div class="justify-items-center px-3">
                <img src="{{ asset('assets/images/landing/produk/berarty/berarty-episode53-part1.png') }}" alt="" class="w-full" />
            </div>
            <div class="flex flex-col gap-2 px-4 text-center mt-4 mb-8">
                <h2 class="text-center font-semibold">BERARTY Episode 53 part 1</h2>
                <p class="text-lg text-[#70787D]">Bersama: Danny Sanjaya Arfensia, S. Psi., M.Psi., Psikolog</p>
            </div>
            <a href="https://www.youtube.com/watch?v=OTNCLpnfmyM" class="mt-3 block rounded-lg justify-self-center w-1/3 bg-gradient-to-r from-amber-400 to-yellow-700 py-2 text-center text-sm font-semibold text-white">Tonton BERARTY</a>
        </div>

        {{-- Card Konten Desktop --}}
        <div class="rounded-3xl px-2 shadow-lg w-1/3 py-6">
            <div class="justify-items-center px-3">
                <img src="{{ asset('assets/images/landing/produk/berarty/berarty-episode53-part2.png') }}" alt="" class="w-full" />
            </div>
            <div class="flex flex-col gap-2 px-4 text-center mt-4 mb-8">
                <h2 class="text-center font-semibold">BERARTY Episode 53 part 2</h2>
                <p class="text-lg text-[#70787D]">Bersama: Danny Sanjaya Arfensia, S. Psi., M.Psi., Psikolog</p>
            </div>
            <a href="https://www.youtube.com/watch?v=LcSNskaPi2A" class="mt-3 block rounded-lg justify-self-center w-1/3 bg-gradient-to-r from-amber-400 to-yellow-700 py-2 text-center text-sm font-semibold text-white">Tonton BERARTY</a>
        </div>

    </div>

    </div>

    {{-- Mobile View --}}
    <div class="block px-4 md:hidden mb-16">
        <div class="px-6 pt-4 max-w-full overflow-hidden">
            <div class="swiper-container content-berarty-swiper mt-8">
                <div class="swiper-wrapper">

                {{-- Card Konten Mobile --}}

                    <div class="swiper-slide">
                        <div class="rounded-2xl p-2 shadow-lg">
                            <div>
                                <img src="{{ asset('assets/images/landing/produk/berarty/berarty-episode55.png') }}" alt="" />
                            </div>
                            <div class="flex flex-col gap-2 px-4 text-center mt-2 h-32">
                                <h2 class="text-center font-semibold">BERARTY Episode 55</h2>
                                <p class="text-sm text-[#70787D]">Bersama: Danny Sanjaya Arfensia, S. Psi., M.Psi., Psikolog</p>
                            </div>
                            <a href="https://www.youtube.com/watch?v=Bb-N9gBqlcE" class="mt-3 block rounded-lg bg-gradient-to-r from-amber-400 to-yellow-700 py-2 text-center text-sm font-semibold text-white">Tonton BERARTY</a>
                        </div>
                    </div>

                {{-- Card Konten Mobile --}}
                    <div class="swiper-slide">
                        <div class="rounded-2xl p-2 shadow-lg">
                            <div>
                                <img src="{{ asset('assets/images/landing/produk/berarty/berarty-episode53-part1.png') }}" alt="" />
                            </div>
                            <div class="flex flex-col gap-2 px-4 text-center mt-2 h-32">
                                <h2 class="text-center font-semibold">BERARTY Episode 53 part 1</h2>
                                <p class="text-sm text-[#70787D]">Bersama: Danny Sanjaya Arfensia, S. Psi., M.Psi., Psikolog</p>
                            </div>
                            <a href="https://www.youtube.com/watch?v=OTNCLpnfmyM" class="mt-3 block rounded-lg bg-gradient-to-r from-amber-400 to-yellow-700 py-2 text-center text-sm font-semibold text-white">Tonton BERARTY</a>
                        </div>
                    </div>

                {{-- Card Konten Mobile --}}

                    <div class="swiper-slide">
                        <div class="rounded-2xl p-2 shadow-lg">
                            <div>
                                <img src="{{ asset('assets/images/landing/produk/berarty/berarty-episode53-part2.png') }}" alt="" />
                            </div>
                            <div class="flex flex-col gap-2 px-4 text-center mt-2 h-32">
                                <h2 class="text-center font-semibold">BERARTY Episode 53 part 2</h2>
                                <p class="text-sm text-[#70787D]">Bersama: Danny Sanjaya Arfensia, S. Psi., M.Psi., Psikolog</p>
                            </div>
                            <a href="https://www.youtube.com/watch?v=LcSNskaPi2A" class="mt-3 block rounded-lg bg-gradient-to-r from-amber-400 to-yellow-700 py-2 text-center text-sm font-semibold text-white">Tonton BERARTY</a>
                        </div>
                    </div>

                </div>
            <div class="swiper-pagination mt-6" style="position: relative; height: 8px; margin-top: 20px"></div>
            </div>
        </div>
    </div>
</section>



{{-- TOPIK KONTEN BERARTY --}}
<section>

    {{-- Desktop View --}}
    <div class="mx-4 md:mx-10 lg:mx-20 hidden md:block mb-16">
            <h1 class="bg-gradient-to-r from-[#3986A3] to-[#1C4352] bg-clip-text text-center font-[inter] text-3xl font-semibold text-transparent lg:tracking-wide mb-20">Topik Konten BERARTY</h1>

        <div class="flex flex-row">

        <!-- BLUR SETENGAH LINGKARAN PEMBATAS KIRI -->
        <div class="relative h-0 hidden lg:block z-0">
            <div
                class="absolute -left-32 md:-left-40 top-0 z-0"
                style="
                    width: 300px;
                    height: 300px;
                    border-top-left-radius: 420px;
                    border-bottom-left-radius: 420px;
                    border-top-right-radius: 420px;
                    background: #C7F8FF;
                    filter: blur(60px);
                    opacity: 0.90;
                    top: -100px;
                "
            ></div>
        </div>

                {{-- Topik Desktop Item --}}
                <div class="flex flex-col items-center gap-5 w-1/6 z-10">
                    <img src="{{ asset('assets/images/landing/produk/bisikan/konten-kesehatan-mental.png') }}" alt="" class="h-20" />
                    <span class="inline-block text-center text-sm font-semibold">Kesehatan Mental</span>
                </div>


                {{-- Topik Desktop Item --}}
                <div class="flex flex-col items-center gap-5 w-1/6 z-10">
                    <img src="{{ asset('assets/images/landing/produk/bisikan/konten-regulasi-emosi.png') }}" alt="" class="h-20" />
                    <span class="inline-block text-center text-sm font-semibold">Regulasi Emosi</span>
                </div>

                {{-- Topik Desktop Item --}}
                <div class="flex flex-col items-center gap-5 w-1/6 z-10">
                    <img src="{{ asset('assets/images/landing/produk/bisikan/konten-hubungan-interpersonal.png') }}" alt="" class="h-20" />
                    <span class="inline-block text-center text-sm font-semibold">Hubungan Interpersonal</span>
                </div>


                {{-- Topik Desktop Item --}}
                <div class="flex flex-col items-center gap-5 w-1/6 z-10">
                    <img src="{{ asset('assets/images/landing/produk/bisikan/konten-self-growth.png') }}" alt="" class="h-20" />
                    <span class="inline-block text-center text-sm font-semibold italic">Self Growth</span>
                </div>


                {{-- Topik Desktop Item --}}
                <div class="flex flex-col items-center gap-5 w-1/6 z-10">
                    <img src="{{ asset('assets/images/landing/produk/bisikan/konten-mengenal-diri.png') }}" alt="" class="h-20" />
                    <span class="inline-block text-center text-sm font-semibold">Mengenal diri lewat psikologi</span>
                </div>


                {{-- Topik Desktop Item --}}
                <div class="flex flex-col items-center gap-5 w-1/6 z-10">
                    <img src="{{ asset('assets/images/landing/produk/bisikan/konten-cerita-nyata.png') }}" alt="" class="h-20" />
                    <span class="inline-block text-center text-sm font-semibold">Cerita nyata dan tips praktis dari narasumber terpercaya</span>
                </div>

        </div>


    </div>

    {{-- Mobile View --}}
    <div class="md:hidden mb-14">

        <div class="px-6 pt-10 max-w-full overflow-hidden">
            <h1 class="bg-gradient-to-r from-[#3986A3] to-[#1C4352] bg-clip-text text-center font-[inter] text-3xl font-semibold text-transparent lg:tracking-wide">Topik Konten BERARTY</h1>

            <div class="swiper-container topic-content-swiper mt-8">
                <div class="swiper-wrapper">

                    {{-- Topik Mobile Item --}}
                    <div class="swiper-slide">
                        <div class="flex flex-col items-center gap-5">
                            <img src="{{ asset('assets/images/landing/produk/bisikan/konten-kesehatan-mental.png') }}" alt="" class="h-16" />
                            <span class="inline-block text-center text-sm font-semibold">Kesehatan Mental</span>
                        </div>
                    </div>

                    {{-- Topik Mobile Item --}}
                    <div class="swiper-slide">
                        <div class="flex flex-col items-center gap-5">
                            <img src="{{ asset('assets/images/landing/produk/bisikan/konten-regulasi-emosi.png') }}" alt="" class="h-16" />
                            <span class="inline-block text-center text-sm font-semibold">Regulasi Emosi</span>
                        </div>
                    </div>

                    {{-- Topik Mobile Item --}}
                    <div class="swiper-slide">
                        <div class="flex flex-col items-center gap-5">
                            <img src="{{ asset('assets/images/landing/produk/bisikan/konten-hubungan-interpersonal.png') }}" alt="" class="h-16" />
                            <span class="inline-block text-center text-sm font-semibold">Hubungan Interpersonal</span>
                        </div>
                    </div>

                    {{-- Topik Mobile Item --}}
                    <div class="swiper-slide">
                        <div class="flex flex-col items-center gap-5">
                            <img src="{{ asset('assets/images/landing/produk/bisikan/konten-self-growth.png') }}" alt="" class="h-16" />
                            <span class="inline-block text-center text-sm font-semibold italic">Self Growth</span>
                        </div>
                    </div>

                    {{-- Topik Mobile Item --}}
                    <div class="swiper-slide">
                        <div class="flex flex-col items-center gap-5">
                            <img src="{{ asset('assets/images/landing/produk/bisikan/konten-mengenal-diri.png') }}" alt="" class="h-16" />
                            <span class="inline-block text-center text-sm font-semibold">Mengenal diri lewat psikologi</span>
                        </div>
                    </div>

                    {{-- Topik Mobile Item --}}
                    <div class="swiper-slide">
                        <div class="flex flex-col items-center gap-5">
                            <img src="{{ asset('assets/images/landing/produk/bisikan/konten-cerita-nyata.png') }}" alt="" class="h-16" />
                            <span class="inline-block text-center text-sm font-semibold">Cerita nyata dan tips praktis dari narasumber terpercaya</span>
                        </div>
                    </div>

                </div>
            <div class="swiper-pagination mt-6" style="position: relative; height: 8px; margin-top: 20px"></div>
            </div>
        </div>
    </div>

</section>


        <!-- BLUR SETENGAH LINGKARAN PEMBATAS KANAN -->
        <div class="relative h-0 hidden lg:block">
            <div
                class="absolute -right-32 md:-right-40 top-0 z-0"
                style="
                    width: 300px;
                    height: 300px;
                    border-top-left-radius: 420px;
                    border-bottom-left-radius: 420px;
                    border-top-right-radius: 420px;
                    background: #A2D7F0;
                    filter: blur(60px);
                    opacity: 0.90;
                    top: 100px;
                "
            ></div>
</div>



{{-- MANFAAT MENDENGAR BERARTY --}}
<section class="px-4 mt-16">
    <h1 class="bg-gradient-to-r mb-20 from-[rgb(57,134,163)] to-[#1C4352] bg-clip-text text-center font-[inter] text-3xl font-semibold text-transparent lg:tracking-wide">Manfaat Mendengar BERARTY</h1>

    {{-- Desktop View --}}
    <div class="mx-4 md:mx-10 lg:mx-20 hidden md:block mb-16">


        {{-- Manfaat First Row --}}
        <div class="flex flex-row justify-center gap-52 mt-8 mb-20">

            {{-- Manfaat Desktop Item --}}
            <div class="relative rounded-2xl bg-white border-[2px] border-[#d7e6ed] px-2 pb-3 pt-14 w-72 shadow-md">
                <div class="absolute left-1/2 top-0 flex h-20 w-20 -translate-x-1/2 -translate-y-1/2 items-center justify-center rounded-full bg-white shadow-md">
                    <img src="{{ asset('assets/images/landing/produk/berarty/Manfaat/Idea.png') }}" alt="" class="h-12 w-12" />
                </div>
                <div class="flex flex-col gap-1 text-center">
                    <h1 class="font-semibold text-2xl text-primary">Wawasan</h1>
                    <span class="text-lg">Menambah wawasan tentang kesehatan mental</span>
                </div>
            </div>

            {{-- Manfaat Desktop Item --}}
            <div class="relative rounded-2xl bg-white border-[2px] border-[#d7e6ed] px-2 pb-3 pt-14 w-72 shadow-md">
                <div class="absolute left-1/2 top-0 flex h-20 w-20 -translate-x-1/2 -translate-y-1/2 items-center justify-center rounded-full bg-white shadow-md">
                    <img src="{{ asset('assets/images/landing/produk/berarty/Manfaat/Meditation.png') }}" alt="" class="h-12 w-12" />
                </div>
                <div class="flex flex-col gap-1 text-center">
                    <h1 class="font-semibold text-2xl text-primary italic">Self-healing</h1>
                    <span class="text-lg">Memberi ruang refleksi dan <span class="italic">self-healing</span></span>
                </div>
            </div>

            {{-- Manfaat Desktop Item --}}
            <div class="relative rounded-2xl bg-white border-[2px] border-[#d7e6ed] px-2 pb-3 pt-14 w-72 shadow-md">
                <div class="absolute left-1/2 top-0 flex h-20 w-20 -translate-x-1/2 -translate-y-1/2 items-center justify-center rounded-full bg-white shadow-md">
                    <img src="{{ asset('assets/images/landing/produk/berarty/Manfaat/Book.png') }}" alt="" class="h-12 w-12" />
                </div>
                <div class="flex flex-col gap-1 text-center">
                    <h1 class="font-semibold text-2xl text-primary">Pengetahuan</h1>
                    <span class="text-lg">Mendapat pengetahuan dari praktisi dan ahli terpercaya</span>
                </div>
            </div>

        </div>

        {{-- Manfaat Second Row --}}
        <div class="flex flex-row justify-center gap-52 mt-8 mb-20">

            {{-- Manfaat Desktop Item --}}
            <div class="relative rounded-2xl bg-white border-[2px] border-[#d7e6ed] px-2 pb-3 pt-14 w-72 shadow-md">
                <div class="absolute left-1/2 top-0 flex h-20 w-20 -translate-x-1/2 -translate-y-1/2 items-center justify-center rounded-full bg-white shadow-md">
                    <img src="{{ asset('assets/images/landing/produk/berarty/Manfaat/Rucksack.png') }}" alt="" class="h-12 w-12" />
                </div>
                <div class="flex flex-col gap-1 text-center">
                    <h1 class="font-semibold text-2xl text-primary">Teman Perjalanan</h1>
                    <span class="text-lg">Menjadi teman perjalanan saat bekerja, belajar, atau santi</span>
                </div>
            </div>

            {{-- Manfaat Desktop Item --}}
            <div class="relative rounded-2xl bg-white border-[2px] border-[#d7e6ed] px-2 pb-3 pt-14 w-72 shadow-md">
                <div class="absolute left-1/2 top-0 flex h-20 w-20 -translate-x-1/2 -translate-y-1/2 items-center justify-center rounded-full bg-white shadow-md">
                    <img src="{{ asset('assets/images/landing/produk/berarty/Manfaat/Lotus.png') }}" alt="" class="h-12 w-12" />
                </div>
                <div class="flex flex-col gap-1 text-center">
                    <h1 class="font-semibold text-2xl text-primary"><span class="italic">Mindful Living</span></h1>
                    <span class="text-lg">Mendukung gaya hidup yang lebih <span class="italic">mindful</span> dan seimbang</span>
                </div>
            </div>


        </div>
    </div>

    {{-- Mobile View --}}
    <div class="md:hidden">

        <div class="flex flex-wrap justify-between gap-y-8 mt-8">

        {{-- Manfaat Mobile Item --}}
            <div class="relative basis-[calc(50%-0.25rem)] rounded-lg border-[2px] border-[#d7e6ed] px-2 pb-3 pt-8">
                <div class="absolute left-1/2 top-0 flex h-11 w-11 -translate-x-1/2 -translate-y-1/2 items-center justify-center rounded-full bg-white shadow-md">
                    <img src="{{ asset('assets/images/landing/produk/berarty/Manfaat/Idea.png') }}" alt="" class="h-6 w-6" />
                </div>
                <div class="flex flex-col gap-1 text-center">
                    <h3 class="font-semibold text-primary">Wawasan</h3>
                    <span class="text-sm">Menambah wawasan tentang kesehatan mental</span>
                </div>
            </div>

        {{-- Manfaat Mobile Item --}}
            <div class="relative basis-[calc(50%-0.25rem)] rounded-lg border-[2px] border-[#d7e6ed] px-2 pb-3 pt-8">
                <div class="absolute left-1/2 top-0 flex h-11 w-11 -translate-x-1/2 -translate-y-1/2 items-center justify-center rounded-full bg-white shadow-md">
                    <img src="{{ asset('assets/images/landing/produk/berarty/Manfaat/Meditation.png') }}" alt="" class="h-6 w-6" />
                </div>
                <div class="flex flex-col gap-1 text-center">
                    <h3 class="font-semibold text-primary italic">Self-healing</h3>
                    <span class="text-sm">Memberi ruang refleksi dan <span class="italic">self-healing</span></span>
                </div>
            </div>

        {{-- Manfaat Mobile Item --}}
            <div class="relative basis-[calc(50%-0.25rem)] rounded-lg border-[2px] border-[#d7e6ed] px-2 pb-3 pt-8">
                <div class="absolute left-1/2 top-0 flex h-11 w-11 -translate-x-1/2 -translate-y-1/2 items-center justify-center rounded-full bg-white shadow-md">
                    <img src="{{ asset('assets/images/landing/produk/berarty/Manfaat/Book.png') }}" alt="" class="h-6 w-6" />
                </div>
                <div class="flex flex-col gap-1 text-center">
                    <h3 class="font-semibold text-primary">Pengetahuan</h3>
                    <span class="text-sm">Mendapat pengetahuan dari praktisi dan ahli terpercaya</span>
                </div>
            </div>

        {{-- Manfaat Mobile Item --}}
            <div class="relative basis-[calc(50%-0.25rem)] rounded-lg border-[2px] border-[#d7e6ed] px-2 pb-3 pt-8">
                <div class="absolute left-1/2 top-0 flex h-11 w-11 -translate-x-1/2 -translate-y-1/2 items-center justify-center rounded-full bg-white shadow-md">
                    <img src="{{ asset('assets/images/landing/produk/berarty/Manfaat/Rucksack.png') }}" alt="" class="h-6 w-6" />
                </div>
                <div class="flex flex-col gap-1 text-center">
                    <h3 class="font-semibold text-primary">Teman Perjalanan</h3>
                    <span class="text-sm">Menjadi teman perjalanan saat bekerja, belajar, atau santi</span>
                </div>
            </div>

        {{-- Manfaat Mobile Item --}}
            <div class="relative basis-[calc(50%-0.25rem)] rounded-lg border-[2px] border-[#d7e6ed] px-2 pb-3 pt-8">
                <div class="absolute left-1/2 top-0 flex h-11 w-11 -translate-x-1/2 -translate-y-1/2 items-center justify-center rounded-full bg-white shadow-md">
                    <img src="{{ asset('assets/images/landing/produk/berarty/Manfaat/Lotus.png') }}" alt="" class="h-6 w-6" />
                </div>
                <div class="flex flex-col gap-1 text-center">
                    <h3 class="font-semibold text-primary"><span class="italic">Mindful </span></h3>
                    <span class="text-sm">Mendukung gaya hidup yang lebih <span class="italic">mindful</span> dan seimbang</span>
                </div>
            </div>

        </div>
    </div>

</section>

{{-- DIMANA SAYA BISA MENDENGARKAN BERARTY --}}
        <section class="mt-20 px-0 mb-16">
            <h1 class="mb-12 text-center text-4xl font-semibold">Dimana Saya Bisa Mendengarkan BERARTY?</h1>

            {{-- Desktop View --}}
            <div class="mx-4 md:mx-10 lg:mx-20 hidden md:block">
                <div class="flex w-full gap-4 md:gap-6 lg:gap-10 rounded-3xl bg-white px-2 md:px-4 lg:px-6 shadow-lg items-end">
                    {{-- Bagian KIRI: Gambar --}}
                    <div class="mt-6 md:mt-10 flex h-full w-[40%] md:w-[45%] lg:w-[50%] items-end">
                        <img
                            src="{{ asset('assets/images/landing/produk/berarty/Clip-path.png') }}"
                            alt="Gambar BERARTY"
                            class="h-auto max-h-[180px] md:max-h-[250px] lg:max-h-[350px] w-full object-contain"
                        />
                    </div>

                    {{-- Bagian KANAN --}}
                    <div class="mt-1 flex w-full flex-col gap-4 md:gap-6 mb-6 md:mb-10 justify-start">
                        {{-- Container Sosmed --}}
                        <div class="mt-4 md:mt-10 grid grid-cols-1 md:grid-cols-3 gap-3 md:gap-4">
                            <!-- Spotify -->
                            <a
                                href="https://open.spotify.com/user/31c274wo5o5x4tujcjrimf4kujhu?si=7110e65c3c01489a"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="flex h-12 w-full max-w-[320px] items-center justify-center gap-2 rounded-full border-2 border-[#8FE0AC] bg-gradient-to-r from-[#8FE0AC] to-[#3986A3] px-4 py-2 font-semibold text-white shadow ring-1 ring-inset ring-white"
                            >
                                <img
                                    src="{{ asset('assets/images/landing/produk/berarty/spotify-white-logo.png') }}"
                                    alt="Spotify"
                                    class="h-5 w-5"
                                />
                                <span>Spotify</span>
                            </a>
                            <!-- Youtube -->
                            <a
                                href="https://www.youtube.com/@berbinar"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="flex h-12 w-full max-w-[320px] items-center justify-center gap-2 rounded-full border-2 border-[#F7B23B] bg-gradient-to-r from-[#DC6E6E] to-[#3986A3] px-4 py-2 font-semibold text-white shadow ring-1 ring-inset ring-white"
                            >
                                <img
                                    src="https://www.vectorlogo.zone/logos/youtube/youtube-icon.svg"
                                    alt="Youtube"
                                    class="h-5 w-5"
                                />
                                <span>Youtube</span>
                            </a>
                            <!-- Instagram -->
                            <a
                                href="https://www.instagram.com/berbinar.in?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                                target="_blank"
                                rel="noopener noreferrer"
                                class="flex h-12 w-full max-w-[320px] items-center justify-center gap-2 rounded-full border-2 border-[#D77BB2] bg-gradient-to-r from-[#D77BB2] to-[#3986A3] px-4 py-2 font-semibold text-white shadow ring-1 ring-inset ring-white"
                            >
                                <img
                                    src="{{ asset('assets/images/landing/produk/berarty/instagram-logo.png') }}"
                                    alt="Instagram"
                                    class="h-5 w-5"
                                />
                                <span>Instagram</span>
                            </a>
                        </div>

                        {{-- Kalender & Jadwal --}}
                        <div class="flex items-center gap-2 text-[#1C4352] mt-1 mb-1">
                            {{-- Inline SVG Kalender --}}
                            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5">
                                <path d="M21.2059 3.81879H19.099V1.73546C19.099 1.55128 19.0258 1.37465 18.8956 1.24441C18.7653 1.11418 18.5887 1.04102 18.4045 1.04102C18.2203 1.04102 18.0437 1.11418 17.9135 1.24441C17.7832 1.37465 17.7101 1.55128 17.7101 1.73546V3.81879H6.94618V1.73546C6.94618 1.55128 6.87302 1.37465 6.74278 1.24441C6.61255 1.11418 6.43591 1.04102 6.25174 1.04102C6.06756 1.04102 5.89092 1.11418 5.76069 1.24441C5.63046 1.37465 5.55729 1.55128 5.55729 1.73546V3.81879H3.79757C3.15924 3.81889 2.54707 4.0725 2.0957 4.52387C1.64433 4.97524 1.39072 5.5874 1.39062 6.22574V21.5507C1.39072 22.1891 1.64433 22.8012 2.0957 23.2526C2.54707 23.704 3.15924 23.9576 3.79757 23.9577H21.2059C21.8442 23.9576 22.4564 23.704 22.9078 23.2526C23.3591 22.8012 23.6128 22.1891 23.6128 21.5507V6.22574C23.6128 5.5874 23.3591 4.97524 22.9078 4.52387C22.4564 4.0725 21.8442 3.81889 21.2059 3.81879ZM3.79757 5.20768H5.55729V6.94379C5.55729 7.12797 5.63046 7.30461 5.76069 7.43484C5.89092 7.56507 6.06756 7.63824 6.25174 7.63824C6.43591 7.63824 6.61255 7.56507 6.74278 7.43484C6.87302 7.30461 6.94618 7.12797 6.94618 6.94379V5.20768H17.7101V6.94379C17.7101 7.12797 17.7832 7.30461 17.9135 7.43484C18.0437 7.56507 18.2203 7.63824 18.4045 7.63824C18.5887 7.63824 18.7653 7.56507 18.8956 7.43484C19.0258 7.30461 19.099 7.12797 19.099 6.94379V5.20768H21.2059C21.4759 5.20768 21.7349 5.31494 21.9258 5.50586C22.1167 5.69679 22.224 5.95573 22.224 6.22574V9.72157H2.77951V6.22574C2.77951 5.95573 2.88677 5.69679 3.0777 5.50586C3.26862 5.31494 3.52756 5.20768 3.79757 5.20768ZM21.2059 22.5688H3.79757C3.66388 22.5688 3.53149 22.5425 3.40798 22.4913C3.28446 22.4401 3.17223 22.3651 3.0777 22.2706C2.98316 22.1761 2.90817 22.0638 2.85701 21.9403C2.80585 21.8168 2.77951 21.6844 2.77951 21.5507V10.416H22.224V21.5507C22.224 21.6844 22.1977 21.8168 22.1466 21.9404C22.0954 22.0639 22.0204 22.1762 21.9259 22.2707C21.8313 22.3653 21.7191 22.4402 21.5955 22.4914C21.472 22.5425 21.3396 22.5688 21.2059 22.5688Z" fill="url(#paint0_linear_12525_22635)"/>
                                <path d="M20.7977 19.6674C20.6056 19.6674 20.4147 19.8227 20.4147 20.0147C20.4147 20.7747 20.1716 20.8338 19.8279 20.8338H17.6369C17.5448 20.8338 17.4565 20.8703 17.3914 20.9355C17.3263 21.0006 17.2897 21.0889 17.2897 21.181C17.2897 21.2731 17.3263 21.3614 17.3914 21.4265C17.4565 21.4916 17.5448 21.5282 17.6369 21.5282H19.8279C20.6247 21.5282 21.0886 21.0813 21.14 20.199C21.1438 20.1793 21.181 20.1598 21.181 20.1393V20.0147C21.181 19.8227 20.99 19.6674 20.7977 19.6674ZM20.7904 18.8931C20.8806 18.8931 20.9709 18.8543 21.0369 18.7921C21.1006 18.7258 21.1366 18.6378 21.1376 18.5459C21.1376 18.4546 21.0997 18.3647 21.0369 18.299C20.9049 18.1709 20.6723 18.1709 20.5438 18.299C20.481 18.365 20.4431 18.4546 20.4431 18.5459C20.4431 18.64 20.481 18.7268 20.5438 18.7921C20.6095 18.8546 20.6963 18.8931 20.7904 18.8931ZM6.52648 12.8477H6.17925C6.08716 12.8477 5.99885 12.8842 5.93373 12.9494C5.86861 13.0145 5.83203 13.1028 5.83203 13.1949C5.83203 13.287 5.86861 13.3753 5.93373 13.4404C5.99885 13.5055 6.08716 13.5421 6.17925 13.5421H6.52648C6.61856 13.5421 6.70688 13.5055 6.772 13.4404C6.83712 13.3753 6.8737 13.287 6.8737 13.1949C6.8737 13.1028 6.83712 13.0145 6.772 12.9494C6.70688 12.8842 6.61856 12.8477 6.52648 12.8477ZM8.95703 12.8477H8.60981C8.51772 12.8477 8.4294 12.8842 8.36429 12.9494C8.29917 13.0145 8.26259 13.1028 8.26259 13.1949C8.26259 13.287 8.29917 13.3753 8.36429 13.4404C8.4294 13.5055 8.51772 13.5421 8.60981 13.5421H8.95703C9.04912 13.5421 9.13744 13.5055 9.20255 13.4404C9.26767 13.3753 9.30425 13.287 9.30425 13.1949C9.30425 13.1028 9.26767 13.0145 9.20255 12.9494C9.13744 12.8842 9.04912 12.8477 8.95703 12.8477ZM11.3876 12.8477H11.0404C10.9483 12.8477 10.86 12.8842 10.7948 12.9494C10.7297 13.0145 10.6931 13.1028 10.6931 13.1949C10.6931 13.287 10.7297 13.3753 10.7948 13.4404C10.86 13.5055 10.9483 13.5421 11.0404 13.5421H11.3876C11.4797 13.5421 11.568 13.5055 11.6331 13.4404C11.6982 13.3753 11.7348 13.287 11.7348 13.1949C11.7348 13.1028 11.6982 13.0145 11.6331 12.9494C11.568 12.8842 11.4797 12.8477 11.3876 12.8477ZM13.4709 12.8477H13.1237C13.0316 12.8477 12.9433 12.8842 12.8782 12.9494C12.8131 13.0145 12.7765 13.1028 12.7765 13.1949C12.7765 13.287 12.8131 13.3753 12.8782 13.4404C12.9433 13.5055 13.0316 13.5421 13.1237 13.5421H13.4709C13.563 13.5421 13.6513 13.5055 13.7164 13.4404C13.7816 13.3753 13.8181 13.287 13.8181 13.1949C13.8181 13.1028 13.7816 13.0145 13.7164 12.9494C13.6513 12.8842 13.563 12.8477 13.4709 12.8477ZM15.9015 12.8477H15.5543C15.4622 12.8477 15.3738 12.8842 15.3087 12.9494C15.2436 13.0145 15.207 13.1028 15.207 13.1949C15.207 13.287 15.2436 13.3753 15.3087 13.4404C15.3738 13.5055 15.4622 13.5421 15.5543 13.5421H15.9015C15.9936 13.5421 16.0819 13.5055 16.147 13.4404C16.2121 13.3753 16.2487 13.287 16.2487 13.1949C16.2487 13.1028 16.2121 13.0145 16.147 12.9494C16.0819 12.8842 15.9936 12.8477 15.9015 12.8477ZM17.9848 13.5421H18.332C18.4241 13.5421 18.5124 13.5055 18.5776 13.4404C18.6427 13.3753 18.6793 13.287 18.6793 13.1949C18.6793 13.1028 18.6427 13.0145 18.5776 12.9494C18.5124 12.8842 18.4241 12.8477 18.332 12.8477H17.9848C17.8927 12.8477 17.8044 12.8842 17.7393 12.9494C17.6742 13.0145 17.6376 13.1028 17.6376 13.1949C17.6376 13.287 17.6742 13.3753 17.7393 13.4404C17.8044 13.5055 17.8927 13.5421 17.9848 13.5421ZM6.52648 14.931H6.17925C6.08716 14.931 5.99885 14.9676 5.93373 15.0327C5.86861 15.0978 5.83203 15.1861 5.83203 15.2782C5.83203 15.3703 5.86861 15.4586 5.93373 15.5237C5.99885 15.5889 6.08716 15.6254 6.17925 15.6254H6.52648C6.61856 15.6254 6.70688 15.5889 6.772 15.5237C6.83712 15.4586 6.8737 15.3703 6.8737 15.2782C6.8737 15.1861 6.83712 15.0978 6.772 15.0327C6.70688 14.9676 6.61856 14.931 6.52648 14.931ZM8.95703 14.931H8.60981C8.51772 14.931 8.4294 14.9676 8.36429 15.0327C8.29917 15.0978 8.26259 15.1861 8.26259 15.2782C8.26259 15.3703 8.29917 15.4586 8.36429 15.5237C8.4294 15.5889 8.51772 15.6254 8.60981 15.6254H8.95703C9.04912 15.6254 9.13744 15.5889 9.20255 15.5237C9.26767 15.4586 9.30425 15.3703 9.30425 15.2782C9.30425 15.1861 9.26767 15.0978 9.20255 15.0327C9.13744 14.9676 9.04912 14.931 8.95703 14.931ZM11.3876 14.931H11.0404C10.9483 14.931 10.86 14.9676 10.7948 15.0327C10.7297 15.0978 10.6931 15.1861 10.6931 15.2782C10.6931 15.3703 10.7297 15.4586 10.7948 15.5237C10.86 15.5889 10.9483 15.6254 11.0404 15.6254H11.3876C11.4797 15.6254 11.568 15.5889 11.6331 15.5237C11.6982 15.4586 11.7348 15.3703 11.7348 15.2782C11.7348 15.1861 11.6982 15.0978 11.6331 15.0327C11.568 14.9676 11.4797 14.931 11.3876 14.931ZM13.4709 14.931H13.1237C13.0316 14.931 12.9433 14.9676 12.8782 15.0327C12.8131 15.0978 12.7765 15.1861 12.7765 15.2782C12.7765 15.3703 12.8131 15.4586 12.8782 15.5237C12.9433 15.5889 13.0316 15.6254 13.1237 15.6254H13.4709C13.563 15.6254 13.6513 15.5889 13.7164 15.5237C13.7816 15.4586 13.8181 15.3703 13.8181 15.2782C13.8181 15.1861 13.7816 15.0978 13.7164 15.0327C13.6513 14.9676 13.563 14.931 13.4709 14.931ZM15.9015 14.931H15.5543C15.4622 14.931 15.3738 14.9676 15.3087 15.0327C15.2436 15.0978 15.207 15.1861 15.207 15.2782C15.207 15.3703 15.2436 15.4586 15.3087 15.5237C15.3738 15.5889 15.4622 15.6254 15.5543 15.6254H15.9015C15.9936 15.6254 16.0819 15.5889 16.147 15.5237C16.2121 15.4586 16.2487 15.3703 16.2487 15.2782C16.2487 15.1861 16.2121 15.0978 16.147 15.0327C16.0819 14.9676 15.9936 14.931 15.9015 14.931ZM17.9848 15.6254H18.332C18.4241 15.6254 18.5124 15.5889 18.5776 15.5237C18.6427 15.4586 18.6793 15.3703 18.6793 15.2782C18.6793 15.1861 18.6427 15.0978 18.5776 15.0327C18.5124 14.9676 18.4241 14.931 18.332 14.931H17.9848C17.8927 14.931 17.8044 14.9676 17.7393 15.0327C17.6742 15.0978 17.6376 15.1861 17.6376 15.2782C17.6376 15.3703 17.6742 15.4586 17.7393 15.5237C17.8044 15.5889 17.8927 15.6254 17.9848 15.6254Z" fill="url(#paint1_linear_12525_22635)"/>
                                <defs>
                                    <linearGradient id="paint0_linear_12525_22635" x1="12.5017" y1="1.04102" x2="12.5017" y2="23.9577" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#AD7D29"/>
                                        <stop offset="1" stop-color="#F7B23B"/>
                                    </linearGradient>
                                    <linearGradient id="paint1_linear_12525_22635" x1="13.5065" y1="12.8477" x2="13.5065" y2="21.5282" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#AD7D29"/>
                                        <stop offset="1" stop-color="#F7B23B"/>
                                    </linearGradient>
                                </defs>
                            </svg>
                            <span class="text-md text-yellow-600 font-medium">Jadwal BERARTY</span>
                        </div>

                        {{-- Container Card --}}
                        <div class="flex gap-4 md:gap-6">
                            <!-- Card Tiktok -->
                            <div class="mt-4 md:mt-10 grid grid-cols-1 md:grid-cols-3 gap-3 md:gap-4">
                                <div class="relative overflow-hidden flex h-[180px] w-full flex-col text-center justify-center rounded-3xl bg-white p-4 shadow-[0_4px_24px_0_#3986A373]">
                                    <img src="{{ asset('assets/images/landing/produk/berarty/Ellipses/Ellipse_1.png') }}" alt="" class="absolute z-0 bottom-0 right-0">
                                    <img src="{{ asset('assets/images/landing/produk/berarty/Ellipses/Ellipse_2.png') }}" alt="" class="absolute z-0 bottom-0 right-0">
                                    <img src="{{ asset('assets/images/landing/produk/berarty/Ellipses/Ellipse_3.png') }}" alt="" class="absolute z-0 top-0 left-0">
                                    <img src="{{ asset('assets/images/landing/produk/berarty/Ellipses/Ellipse_4.png') }}" alt="" class="absolute z-0 bottom-0 left-0">
                                    <img src="{{ asset('assets/images/landing/produk/berarty/Ellipses/Ellipse_5.png') }}" alt="" class="absolute z-0 top-0 left-0">
                                    <div class="z-10 flex flex-col text-center justify-center">
                                        <span class="text-center text-2xl mb-2 font-semibold text-cyan-950">
                                            Tiktok <span class="italic">Live</span>
                                        </span>
                                        <span class="mt-1 mb-4 text-xl text-[#555555]">Tiktok <span class="italic">Live</span> BERARTY setiap minggu pukul</span>
                                        <span class="mt-1 text-xl font-bold text-cyan-950">20.00 WIB</span>
                                    </div>
                                </div>
                            <!-- Card Youtube -->
                                <div class="relative overflow-hidden flex h-[180px] w-full flex-col text-center justify-center rounded-3xl bg-white p-4 shadow-[0_4px_24px_0_#3986A373]">
                                    <img src="{{ asset('assets/images/landing/produk/berarty/Ellipses/Ellipse_1.png') }}" alt="" class="absolute z-0 bottom-0 right-0">
                                    <img src="{{ asset('assets/images/landing/produk/berarty/Ellipses/Ellipse_2.png') }}" alt="" class="absolute z-0 bottom-0 right-0">
                                    <img src="{{ asset('assets/images/landing/produk/berarty/Ellipses/Ellipse_3.png') }}" alt="" class="absolute z-0 top-0 left-0">
                                    <img src="{{ asset('assets/images/landing/produk/berarty/Ellipses/Ellipse_4.png') }}" alt="" class="absolute z-0 bottom-0 left-0">
                                    <img src="{{ asset('assets/images/landing/produk/berarty/Ellipses/Ellipse_5.png') }}" alt="" class="absolute z-0 top-0 left-0">
                                    <div class="z-10 flex flex-col text-center justify-center">
                                        <span class="text-center text-2xl mb-2 font-semibold text-cyan-950">
                                            Youtube
                                        </span>
                                        <span class="mt-1 mb-4 text-center text-xl text-[#555555]">
                                            <span class="italic">Replay</span> BERARTY akan diperbarui setiap hari :
                                        </span>
                                        <span class="mt-1 text-xl font-bold text-cyan-950">Selasa</span>
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
                    {{-- Tombol Sosial Media (tetap satu baris di mobile) --}}
                    <div class="flex w-full items-center justify-between gap-2">
                        <!-- Spotify -->
                        <a
                            href="https://open.spotify.com/user/31c274wo5o5x4tujcjrimf4kujhu?si=7110e65c3c01489a"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="h-[clamp(2.5rem, 6vw, 3.25rem)] flex basis-1/3 items-center justify-center gap-1 rounded-full border-2 border-[#8FE0AC] bg-gradient-to-r from-[#8FE0AC] to-[#3986A3] px-3 py-2 font-semibold text-white shadow ring-2 ring-inset ring-white"
                        >
                            <img
                                src="{{ asset('assets/images/landing/produk/berarty/spotify-white-logo.png') }}"
                                alt="Logo Spotify"
                                class="h-[clamp(18px,3vw,24px)] w-[clamp(18px,3vw,24px)]"
                            />
                            <span class="text-[clamp(13px,3vw,16px)] drop-shadow">Spotify</span>
                        </a>

                        <!-- Youtube -->
                        <a
                            href="https://www.youtube.com/@berbinar"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="h-[clamp(2.5rem, 6vw, 3.25rem)] flex basis-1/3 items-center justify-center gap-1 rounded-full border-2 border-[#DC6E6E] bg-gradient-to-r from-[#DC6E6E] to-[#3986A3] px-3 py-2 font-semibold text-white shadow ring-2 ring-inset ring-white"
                        >
                            <img
                                src="https://www.vectorlogo.zone/logos/youtube/youtube-icon.svg"
                                alt="Logo Youtube"
                                class="h-[clamp(18px,3vw,24px)] w-[clamp(18px,3vw,24px)]"
                            />
                            <span class="text-[clamp(13px,3vw,16px)] drop-shadow">Youtube</span>
                        </a>

                        <!-- Instagram -->
                        <a
                            href="https://www.instagram.com/berbinar.in?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                            target="_blank"
                            rel="noopener noreferrer"
                            class="h-[clamp(2.5rem, 6vw, 3.25rem)] flex basis-1/3 items-center justify-center gap-1 rounded-full border-2 border-[#D77BB2] bg-gradient-to-r from-[#D77BB2] to-[#3986A3] px-3 py-2 font-semibold text-white shadow ring-2 ring-inset ring-white"
                        >
                            <img
                                src="{{ asset('assets/images/landing/produk/berarty/instagram-logo.png') }}"
                                alt="Logo Instagram"
                                class="h-[clamp(18px,3vw,24px)] w-[clamp(18px,3vw,24px)]"
                            />
                            <span class="text-[clamp(12px,3vw,15px)] drop-shadow">Instagram</span>
                        </a>
                    </div>

                    {{-- Info Cards Mobile --}}
                    <div class="flex flex-col gap-4">
                        <div class="relative overflow-hidden flex flex-col items-center rounded-xl bg-white p-4 shadow-[0_4px_24px_0_#3986A373]">
                            <img src="{{ asset('assets/images/landing/produk/berarty/Ellipses/Ellipse_6.png') }}" alt="" class="absolute z-0 bottom-0">
                            <img src="{{ asset('assets/images/landing/produk/berarty/Ellipses/Ellipse_7.png') }}" alt="" class="absolute z-0 bottom-0">
                            <img src="{{ asset('assets/images/landing/produk/berarty/Ellipses/Ellipse_3.png') }}" alt="" class="absolute z-0 top-0 left-0">
                            <img src="{{ asset('assets/images/landing/produk/berarty/Ellipses/Ellipse_4.png') }}" alt="" class="absolute z-0 bottom-0 left-0">
                            <img src="{{ asset('assets/images/landing/produk/berarty/Ellipses/Ellipse_5.png') }}" alt="" class="absolute z-0 top-0 left-0">
                            <div class="z-10 flex flex-col text-center justify-center">
                                <span class="text-lg font-semibold text-cyan-950">BERARTY Tiktok Live</span>
                                <span class="mt-1 text-center text-lg text-[#555555]">Tiktok Live BERARTY diadakan setiap minggu pukul </span>
                                <span class="mt-1 text-base font-bold text-cyan-950">20.00 WIB</span>
                            </div>
                        </div>

                        <div class="relative overflow-hidden flex flex-col items-center rounded-xl bg-white p-4 shadow-[0_4px_24px_0_#3986A373]">
                            <img src="{{ asset('assets/images/landing/produk/berarty/Ellipses/Ellipse_6.png') }}" alt="" class="absolute z-0 bottom-0">
                            <img src="{{ asset('assets/images/landing/produk/berarty/Ellipses/Ellipse_7.png') }}" alt="" class="absolute z-0 bottom-0">
                            <img src="{{ asset('assets/images/landing/produk/berarty/Ellipses/Ellipse_3.png') }}" alt="" class="absolute z-0 top-0 left-0">
                            <img src="{{ asset('assets/images/landing/produk/berarty/Ellipses/Ellipse_4.png') }}" alt="" class="absolute z-0 bottom-0 left-0">
                            <img src="{{ asset('assets/images/landing/produk/berarty/Ellipses/Ellipse_5.png') }}" alt="" class="absolute z-0 top-0 left-0">
                            <div class="z-10 flex flex-col text-center justify-center">
                                <span class="text-lg font-semibold text-cyan-950">Youtube Replay Video</span>
                                <span class="mt-1 text-center text-lg text-[#555555]">BERARTY akan diperbarui setiap hari :</span>
                                <span class="mt-1 text-base font-bold text-cyan-950">Selasa</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

{{-- FAQS BERARTY --}}
        <section class="z-10 mx-4 mt-20 sm:mx-20 lg:my-14">
            <ul class="flex flex-col">
                @php
                    // Daftar kata/kalimat bahasa asing yang ingin di-italic
                    $italicWords = [
                        'self-compassion', 'webinar', 'Zoom', 'Q&A', 'e-certificate', 'post-test', 'Google Form', 'WhatsApp', 'mentor', 'CV', 'portfolio building', 'upgrade', 'linktr.ee', 'link', 'email', 'password', 'online', 'offline', 'session', 'class', 'YouTube', 'Instagram', 'Spotify', 'intermediate', 'live', 'tiktok', 'replay', 'video'
                    ];
                    function italicizeWords($text, $words) {
                        foreach ($words as $word) {
                            // Case-insensitive, avoid double-wrapping
                            $text = preg_replace('/\b(' . preg_quote($word, '/') . ')\b/i', '<i>$1</i>', $text);
                        }
                        return $text;
                    }
                @endphp

                @foreach ($faqs as $faq)
                    <li
                        class="my-2 rounded-lg border bg-white py-2 shadow-sm"
                        x-data="accordion({{ $loop->index }})"
                        :class="isActive()"
                    >
                        <div class="mx-2 flex flex-row sm:mx-5">
                            <div class="flex w-full flex-col p-3 max-sm:p-2">
                                <h2
                                    @click="handleClick()"
                                    class="cursor-pointer text-lg font-medium max-sm:text-[16.5px]"
                                >
                                    <span>{!! italicizeWords($faq["question"], $italicWords) !!}</span>
                                </h2>
                                <div
                                    x-ref="tab"
                                    :style="handleToggle()"
                                    class="max-h-0 overflow-hidden transition-all duration-500"
                                >
                                    <p class="mt-3 text-justify text-[#6F6C90] max-sm:mt-2 max-sm:text-[15px]">
                                        {!! italicizeWords($faq["answer"], $italicWords) !!}
                                    </p>
                                </div>
                            </div>

                            <div class="ml-6 hidden items-center sm:flex">
                                <template x-if="$store.accordion.tab === idx">
                                    <svg
                                        width="20"
                                        height="20"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M20 20L4 4M20 4L4 20"
                                            stroke="#3986A3"
                                            stroke-width="3"
                                            stroke-linecap="round"
                                        />
                                    </svg>
                                </template>
                                <template x-if="$store.accordion.tab !== idx">
                                    <svg
                                        width="20"
                                        height="20"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <g clip-path="url(#clip0_7503_13741)">
                                            <path
                                                d="M22.3996 8L11.9996 19.2L1.59961 8"
                                                stroke="#3986A3"
                                                stroke-width="3"
                                                stroke-linecap="square"
                                            />
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

{{-- KONSULTASI SEKARANG --}}
    <section class="z-10 mx-4 sm:mx-20 lg:my-14 mb-16">

    {{-- Desktop View --}}
    <div class="hidden md:block">
        <div class="relative bg-gradient-to-b from-cyan-700 to-slate-950 flex flex-col items-center rounded-2xl p-12 shadow-xl">
            <img src="{{ asset('assets/images/landing/produk/berarty/bg-wavy.png') }}" alt="" class="absolute inset-0 w-full h-full object-cover opacity-30 pointer-events-none">
            <h1 class="text-4xl font-bold text-white pb-4 mb-4">Hubungi Kami Sekarang</h1>
            <span class="text-xl/10 text-center text-white pb-2 mb-4 w-3/5">Buat janji dan lakukan konseling dengan tim Berbinar Insightful Indonesia untuk layanan konseling <span class="italic">online</span> ataupun <span class="italic">offline</span>.</span>
            <a href="#" class="block text-xl rounded-2xl bg-white py-3 px-8 text-center font-semibold text-black mt-2 mb-2">Lihat Produk Berbinar</a>
        </div>
    </div>

    {{-- Mobile View --}}
    <div class="md:hidden">
        <div class="relative bg-gradient-to-b from-cyan-700 to-slate-800 flex flex-col items-center rounded-2xl p-4 shadow-xl">
            <img src="{{ asset('assets/images/landing/produk/berarty/bg-wavy.png') }}" alt="" class="absolute inset-0 w-full h-full object-cover opacity-30 pointer-events-none">
            <h1 class="text-2xl font-bold text-white px-2 my-4">Konsultasi Sekarang</h1>
            <span class="text-base/8 text-center text-white pb-2 mb-1">Buat janji dan lakukan konseling dengan tim Berbinar Insightful Indonesia, baik <span class="italic">online</span> maupun <span class="italic">offline</span>.</span>
            <a href="#" class="block rounded-lg bg-white py-2 px-4 text-center font-semibold text-black mt-2 mb-2">Pilih Jadwal</a>
        </div>
    </div>


    </section>

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
        height: 85%;
        z-index: 1;
        display: flex;
        transition-property: transform;
        box-sizing: content-box;
      }

      .swiper-slide {
        flex-shrink: 0;
        width: 100%;
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

      .border-active {
        border: 2px solid #3986A3 !important;
        box-shadow: 0 0 0 2px #3986A333;
      }


      @media (min-width: 768px) {
        #customSection {
          padding-top: 10rem; /* setara dengan md:pt-20 di Tailwind */
        }
      }
    </style>
    <script>
      document.addEventListener('DOMContentLoaded', function () {
        const contentBerartySwiper = new Swiper('.content-berarty-swiper', {
          slidesPerView: 1.2,
          centeredSlides: true,
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

        const topicContentBerarty = new Swiper('.topic-content-swiper', {
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
@endsection
