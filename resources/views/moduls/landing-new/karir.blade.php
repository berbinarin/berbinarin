@extends('layouts.main-new', [
    'title' => 'Berbinar Insightful Indonesia',
    'active' => 'Karir',
    'page' => 'Karir',
])

@section('content')

    {{-- HERO START --}}
    <section class="mt-32 w-full overflow-x-hidden relative mb-12">

        <div class="hidden md:block absolute left-0 top-0 md:w-1/3 lg:w-1/5 h-fit">
            <img src="{{asset("assets/images/landing/karir/hexagon-texture.png")}}" alt="top-left-texture"
                 class="object-cover ">
        </div>
        <div class="hidden md:block absolute right-0 bottom-0 md:w-1/3 lg:w-1/5 h-fit rotate-180">
            <img src="{{asset("assets/images/landing/karir/hexagon-texture.png")}}" alt="top-left-texture"
                 class="object-cover ">
        </div>

        <div class="mx-auto md:mx-14 md:pt-14 3xl:pt-0">
            <div class="w-full text-center mb-12 md:flex md:flex-wrap md:items-center md:justify-center">

                {{--wave atas--}}
                <div class="relative md:hidden mb-4 w-full">
                    <div class="w-full mb-12">
                        <img src="{{ asset("assets/images/landing/vector-wave2.png") }}" alt="wave2"
                             class="translate-x-4">
                        <img src="{{ asset("assets/images/landing/karir/hexagon-picture-right.png") }}"
                             alt="hexagon-topright"
                             class="absolute top-5 left-2 w-20 h-25 scale-150 -rotate-45 sm:scale-150">
                    </div>
                </div>

                {{--tulisan--}}
                <div class="md:justify-start md:items-start md:text-start md:w-1/2 md:z-10">
                    {{--judul--}}
                    <div class="mb-8">
                        <h1 class="font-semibold text-4xl bg-clip-text lg:text-5xl text-transparent bg-gradient-to-r from-[#1C4352] to-[#3986A3] font-[inter] mb-4 lg:tracking-wide py-1">
                            Gabung & Jadilah<span
                                class="block"></span> Bagian dari Berbinar!</h1>
                    </div>
                    {{--button--}}
                    <button
                        class="py-2 px-4 rounded-lg text-sm md:text-lg lg:text-xl text-white bg-gradient-to-tr from-[#F7B23B] to-[#AD7D29] hover:opacity-80 hover:shadow-lg transition duration-300 mb-12">
                        Lihat
                        Posisi Tersedia
                    </button>
                </div>

                {{--hexagon banner--}}
                <div class="hidden md:flex md:w-1/2 lg:w-fit relative z-20">
                    <img src="{{ asset("assets/images/landing/karir/hexagon-banner-fix.png") }}" alt=""
                         class="h-96 3xl:h-[600px]">
                </div>

                {{--wave bawah--}}
                <div class="w-full mb-4 relative md:hidden">
                    <img src="{{ asset("assets/images/landing/vector-wave2.png") }}" alt="wave2"
                         class=" -translate-x-4">
                    <img src="{{ asset("assets/images/landing/karir/hexagon-picture-right.png") }}"
                         alt="hexagon-bottomright" class="absolute -bottom-0 right-0 w-20 h-25 scale-150">
                </div>
            </div>
        </div>
    </section>
    {{-- HERO END --}}

    {{--infinite horizontal scroll--}}
    <section class="w-full overflow-hidden">
        <div class="w-full mx-auto">
            <div class="flex gap-1">
                <div class="flex gap-4 profile-slide">
                    @for($i = 1; $i <= 35; $i++)
                        <div class="bg-primary rounded-full w-14 h-14 lg:w-20 lg:h-20 overflow-hidden"><img
                                src="{{ asset("assets/images/landing/karir/profile-dummy.jpeg") }}"
                                alt="profile dummy" class="object-cover">
                        </div>
                    @endfor
                    @for($i = 1; $i <= 35; $i++)
                        <div class="bg-primary rounded-full w-14 h-14 lg:w-20 lg:h-20 overflow-hidden">
                            <img
                                src="{{ asset("assets/images/landing/karir/profile-dummy.jpeg") }}"
                                alt="profile dummy" class="object-cover">
                        </div>
                    @endfor
                </div>

            </div>
        </div>
    </section>
    {{--infinite horizontal scroll--}}

    {{--ALUR PENDAFTARAN START--}}
    <section class="w-full mt-16 lg:mt-32 mx-auto overflow-hidden flex items-center justify-center">
        <div class="container mx-auto md:mx-14">
            {{--caption--}}
            <div class="mb-12 md:mb-32">
                <h1 class="font-semibold text-3xl bg-clip-text text-center md:text-4xl lg:text-5xl text-transparent bg-gradient-to-r from-[#1C4352] to-[#3986A3] font-plusJakartaSans mb-4 lg:tracking-wide py-3">
                    Alur Pendaftaran <span class="block md:inline-block"></span> Magang
                </h1>
            </div>

            {{--flex alur pendaftara--}}
            <div class="lg:flex justify-around relative">
                {{--background image--}}
                <div class="hidden lg:block absolute inset-0 z-0">
                    <img src="{{ asset("assets/images/landing/karir/garis.png") }}" alt="garis"
                         class="object-cover">
                </div>

                {{--mencari--}}
                <div
                    class="flex items-center justify-around mx-auto mb-4 relative z-20 lg:flex-col lg:items-center lg:justify-center lg:pb-60">
                    {{--masking biru halus --}}
                    <div class="hidden lg:flex lg:items-center lg:justify-center absolute z-10 -bottom-20 -left-8">
                        <img src="{{ asset('assets/images/landing/karir/Ellipse1.png') }}" alt="ellipse 3"
                             class="translate-x-4">
                    </div>

                    {{--image & image caption--}}
                    <div class="flex-col items-center justify-center shrink-0 gap-1 lg:mb-4">
                        <img src="{{ asset('assets/images/landing/karir/mencari.png') }}" alt="icon mencari"
                             class="size-28">
                        <h4 class="text-center font-semibold text-lg text-black">Mencari</h4>
                    </div>
                    {{--description--}}
                    <div class="flex items-center justify-center w-64 ps-4 lg:flex-col lg:text-center lg:p-0">
                        <p class="font-semibold text-wrap">Kandidat mencari informasi posisi yang diminati</p>
                    </div>

                </div>

                {{--administrasi--}}
                <div
                    class="flex items-center justify-around mx-auto mb-4 relative z-20 lg:flex-col lg:items-center lg:justify-center xl:pt-60 lg:pt-32">

                    {{--masking biru halus --}}
                    <div class="hidden lg:block absolute z-10 -top-20 -left-8 ">
                        <img src="{{ asset('assets/images/landing/karir/Ellipse2.png') }}" alt="ellipse 1"
                             class="object-cover">
                    </div>

                    {{--description--}}
                    <div
                        class="flex items-center justify-center w-64 ps-4 lg:p-0 lg:flex-col lg:text-center lg:order-last">
                        <p class="font-semibold text-wrap">Pendaftaran data diri pada Google Form yang tersedia</p>
                    </div>

                    {{--image & image caption--}}
                    <div class="flex-col items-center justify-center shrink-0 gap-1 lg:mb-4">
                        <img src="{{ asset('assets/images/landing/karir/administrasi.png') }}"
                             alt="icon administrasi"
                             class="size-28">
                        <h4 class="text-center font-semibold text-lg text-black">Administrasi</h4>
                    </div>

                </div>

                {{--Pengiriman berkas--}}
                <div
                    class="flex items-center justify-around mx-auto mb-4 relative z-20 lg:flex-col lg:items-center lg:justify-center lg:pb-60">

                    {{--masking biru halus --}}
                    <div class="hidden lg:block absolute z-10 -bottom-20 -left-8">
                        <img src="{{ asset('assets/images/landing/karir/Ellipse3.png') }}" alt="ellipse 3"
                             class="object-cover">
                    </div>

                    {{--image & image caption--}}
                    <div class="flex-col items-center justify-center shrink-0 gap-1 lg:mb-4">
                        <img src="{{ asset('assets/images/landing/karir/pengiriman berkas.png') }}"
                             alt="icon mengirim berkas"
                             class="size-28 mx-auto">
                        <h4 class="text-center font-semibold text-lg text-black">Pengiriman <span
                                class="block lg:inline-block"></span>Berkas</h4>
                    </div>
                    {{--description--}}
                    <div class="flex items-center justify-center w-64 ps-4 lg:flex-col lg:text-center lg:p-0">
                        <p class="font-semibold text-wrap">Mengirim berkas wajib seperti CV, Resume, Portfolio,dll</p>
                    </div>

                </div>

                {{--selesai--}}
                <div
                    class="flex items-center justify-around mx-auto mb-4 relative z-20 lg:flex-col lg:items-center lg:justify-center xl:pt-60 lg:pt-32">

                    {{--masking biru halus --}}
                    <div class="hidden lg:block absolute z-10 -top-20 -left-8 ">
                        <img src="{{ asset('assets/images/landing/karir/Ellipse2.png') }}" alt="ellipse 1"
                             class="object-cover">
                    </div>

                    {{--description--}}
                    <div
                        class="flex items-center justify-center w-64 ps-4 lg:p-0 lg:flex-col lg:text-center lg:order-last">
                        <p class="font-semibold text-wrap">Menunggu pengumuman melalui E-mail / Whatsapp</p>
                    </div>

                    {{--image & image caption--}}
                    <div class="flex-col items-center justify-center shrink-0 gap-1 lg:mb-4">
                        <img src="{{ asset('assets/images/landing/karir/selesai.png') }}" alt="icon selesai"
                             class="size-28">
                        <h4 class="text-center font-semibold text-lg text-black">Selesai</h4>
                    </div>

                </div>
            </div>
        </div>
    </section>
    {{--ALUR PENDAFTARAN END--}}

    {{--YOUR BENEFIT START--}}
    <section class="w-full mt-16 lg:mt-32 mx-auto overflow-hidden flex items-center justify-center">
        <div class="container mx-auto md:mx-14">
            {{--captions--}}
            <div class="mb-12 md:mb-32">
                <h1 class="font-semibold text-3xl bg-clip-text text-center md:text-4xl lg:text-5xl text-transparent bg-gradient-to-r from-[#1C4352] to-[#3986A3] font-plusJakartaSans mb-4 lg:tracking-wide py-1">
                    Manfaat Bergabung di Berbinar
                </h1>
            </div>

            {{--grid benefit--}}
            <div class="grid py-2 md:grid-cols-3 lg:grid-cols-4 gap-3 md:gap-y-10">

                {{--sertifikat elektronik--}}
                <div
                    class="flex mx-auto justify-center items-center gap-4 mb-4 md:mx-0 md:relative  md:p-4 md:rounded-xl md:shadow-lg md:border-2 md:border-[#D7E6ED]">
                    {{--icon--}}
                    <div
                        class="flex items-center shrink-0 justify-center p-5 rounded-full shadow-benefit-icon md:absolute md:bg-white md:z-20 md:-top-12 md:left-1/2 md:-translate-x-1/2 ">
                        <img src="{{ asset("assets/images/landing/karir/benefit/icon-sertifikat.png") }}"
                             alt="Sertifikat Elektronik"
                             class="size-14 md:size-12 translate-y-1">
                    </div>
                    {{--captions--}}
                    <div class="ps-2 w-64 z-10 md:mt-10 md:pb-0 md:w-full md:flex-col md:items-center">
                        <h3 class="font-semibold text-lg text-primary text-start mb-2 md:text-center md:text-xl">
                            Sertifikat Elektronik</h3>
                        <p class="text-sm text-start md:text-center md:text-base">Terima <span
                                class="italic">E-certificate</span> setelah selesai kontrak kerja yang berlaku.</p>
                    </div>

                </div>

                {{--Relasi--}}
                <div
                    class="flex mx-auto justify-center items-center gap-4 mb-4 md:mx-0 md:relative  md:p-4 md:rounded-xl md:shadow-lg md:border-2 md:border-[#D7E6ED]">
                    {{--icon--}}
                    <div
                        class="flex order-last items-center shrink-0 justify-center p-5 rounded-full shadow-benefit-icon md:absolute md:bg-white md:z-20 md:-top-12 md:left-1/2 md:-translate-x-1/2 ">
                        <img src="{{ asset("assets/images/landing/karir/benefit/icon-relasi.png") }}" alt="relasi"
                             class="size-14 md:size-12">
                    </div>
                    {{--captions--}}
                    <div class="ps-2 w-64 md:mt-10 md:pb-0 md:w-full md:flex-col md:items-center">
                        <h3 class="font-semibold text-lg text-primary mb-2 text-end md:text-center md:text-xl">
                            Relasi</h3>
                        <p class="text-sm text-end md:text-center md:text-base">Memperluas relasi dari mahasiswa
                            berbagai universitas</p>
                    </div>

                </div>

                {{--Wawasan--}}
                <div
                    class="flex mx-auto justify-center items-center gap-4 mb-4 md:mx-0 md:relative  md:p-4 md:rounded-xl md:shadow-lg md:border-2 md:border-[#D7E6ED]">
                    {{--icon--}}
                    <div
                        class="flex items-center shrink-0 justify-center p-5 rounded-full shadow-benefit-icon md:absolute md:bg-white md:z-20 md:-top-12 md:left-1/2 md:-translate-x-1/2 ">
                        <img src="{{ asset("assets/images/landing/karir/benefit/icon-wawasan.png") }}" alt="wawasan"
                             class="size-14 md:size-12">
                    </div>
                    {{--captions--}}
                    <div class="ps-2 w-64 md:mt-10 md:pb-0 md:w-full md:flex-col md:items-center">
                        <h3 class="font-semibold text-lg text-primary text-start mb-2 md:text-center md:text-xl">
                            Wawasan</h3>
                        <p class="text-sm text-start tracking-tight md:text-center md:text-base md:tracking-normal">
                            Memperluas wawasan terkait psikologi dan operasional perusahaan.</p>
                    </div>

                </div>

                {{--Konseling Gratis--}}
                <div
                    class="flex mx-auto justify-center items-center gap-4 mb-4 md:mx-0 md:relative  md:p-4 md:rounded-xl md:shadow-lg md:border-2 md:border-[#D7E6ED]">
                    {{--icon--}}
                    <div
                        class="flex order-last items-center shrink-0 justify-center p-5 rounded-full shadow-benefit-icon md:absolute md:bg-white md:z-20 md:-top-12 md:left-1/2 md:-translate-x-1/2">
                        <img src="{{ asset("assets/images/landing/karir/benefit/icon-konseling.png") }}"
                             alt="konseling gratis"
                             class="size-14 md:size-12">
                    </div>
                    {{--captions--}}
                    <div class="ps-2 w-64 md:mt-10 md:pb-0 md:w-full md:flex-col md:items-center">
                        <h3 class="font-semibold text-lg text-primary mb-2 text-end md:text-center md:text-xl">
                            Konseling Gratis</h3>
                        <p class="text-sm text-end md:text-center md:text-base">Mendapatkan sesi konseling gratis
                            sebulan sekali.<span class="text-red-500">*</span></p>
                    </div>

                </div>

                {{--Psikotes Gratis--}}
                <div
                    class="flex mx-auto justify-center items-center gap-4 mb-4 md:mx-0 md:relative  md:p-4 md:rounded-xl md:shadow-lg md:border-2 md:border-[#D7E6ED]">
                    {{--icon--}}
                    <div
                        class="flex items-center shrink-0 justify-center p-5 rounded-full shadow-benefit-icon md:absolute md:bg-white md:z-20 md:-top-12 md:left-1/2 md:-translate-x-1/2">
                        <img src="{{ asset("assets/images/landing/karir/benefit/icon-psikotest.png") }}"
                             alt="psikotes gratis"
                             class="size-14 md:size-12">
                    </div>
                    {{--captions--}}
                    <div class="ps-2 w-64 md:mt-10 md:pb-0 md:w-full md:flex-col md:items-center">
                        <h3 class="font-semibold text-lg text-primary text-start mb-2 md:text-center md:text-xl">
                            Psikotes Gratis</h3>
                        <p class="text-sm text-start md:text-base md:tracking-normal md:text-center">Psikotes gratis &
                            hasil yang bisa dikonsultasikan oleh psikolog.<span class="text-red-500">*</span></p>
                    </div>

                </div>

                {{--Rekomendasi linkedin--}}
                <div
                    class="flex mx-auto justify-center items-center gap-4 mb-4 md:mx-0 md:relative  md:p-4 md:rounded-xl md:shadow-lg md:border-2 md:border-[#D7E6ED]">
                    {{--icon--}}
                    <div
                        class="flex order-last items-center shrink-0 justify-center p-5 rounded-full shadow-benefit-icon md:absolute md:bg-white md:z-20 md:-top-12 md:left-1/2 md:-translate-x-1/2">
                        <img src="{{ asset("assets/images/landing/karir/benefit/icon-rekomendasi.png") }}"
                             alt="Rekomendasi LinkedIn"
                             class="size-14 md:size-12">
                    </div>
                    {{--captions--}}
                    <div class="ps-2 w-64 md:mt-10 md:pb-0 md:w-full md:flex-col md:items-center">
                        <h3 class="font-semibold text-lg text-primary mb-2 text-end md:text-center md:text-xl">
                            Rekomendasi LinkedIn</h3>
                        <p class="text-sm text-end md:text-center md:text-base">Rekomendasi kerja dari CEO Berbinar
                            melalui LinkedIn.<span class="text-red-500">*</span></p>
                    </div>

                </div>

                {{--SKP--}}
                <div
                    class="flex mx-auto justify-center items-center gap-4 mb-4 md:mx-0 md:relative  md:p-4 md:rounded-xl md:shadow-lg md:border-2 md:border-[#D7E6ED]">
                    {{--icon--}}
                    <div
                        class="flex items-center shrink-0 justify-center p-5 rounded-full shadow-benefit-icon md:absolute md:bg-white md:z-20 md:-top-12 md:left-1/2 md:-translate-x-1/2">
                        <img src="{{ asset("assets/images/landing/karir/benefit/icon-skp.png") }}" alt="SKP"
                             class="size-14 md:size-12">
                    </div>
                    {{--captions--}}
                    <div class="ps-2 w-64 md:mt-10 md:pb-0 md:w-full md:flex-col md:items-center">
                        <h3 class="font-semibold text-lg text-primary text-start mb-2 md:text-center md:text-xl">
                            Satuan Kredit Partisipasi</h3>
                        <p class="text-sm text-start md:text-base md:tracking-normal md:text-center">Mendapatkan
                            pengakuan konversi magang melalui SKP.<span class="text-red-500">*</span></p>
                    </div>

                </div>

                {{--Pengalaman--}}
                <div
                    class="flex mx-auto justify-center items-center gap-4 mb-4 md:mx-0 md:relative  md:p-4 md:rounded-xl md:shadow-lg md:border-2 md:border-[#D7E6ED]">
                    {{--icon--}}
                    <div
                        class="flex order-last items-center shrink-0 justify-center p-5 rounded-full shadow-benefit-icon md:absolute md:bg-white md:z-20 md:-top-12 md:left-1/2 md:-translate-x-1/2">
                        <img src="{{ asset("assets/images/landing/karir/benefit/icon-pengalaman.png") }}"
                             alt="Pengalaman"
                             class="size-14 md:size-12">
                    </div>
                    {{--captions--}}
                    <div class="ps-2 w-64 md:mt-10 md:pb-0 md:w-full md:flex-col md:items-center">
                        <h3 class="font-semibold text-lg text-primary mb-2 text-end md:text-center md:text-xl">
                            Pengalaman</h3>
                        <p class="text-sm text-end md:text-center md:text-base">Pengalaman program magang di perusahaan
                            profesional.</p>
                    </div>

                </div>
            </div>
        </div>
    </section>
    {{--YOUR BENEFIT END--}}

    {{--AVAIABLE POSITIONS START--}}
    <section class="w-full mt-16 lg:mt-32 mx-auto flex items-center justify-center">
        <div class="container mx-auto md:mx-14">
            {{--caption START--}}
            <div class="w-full mx-auto mb-4 md:mb-8">
                <h2 class="font-semibold text-3xl bg-clip-text text-center md:text-4xl lg:text-5xl text-transparent bg-gradient-to-r from-[#1C4352] to-[#3986A3] font-plusJakartaSans mb-4 lg:tracking-wide py-1">
                    Posisi Tersedia
                </h2>
            </div>
            {{--caption END--}}

            {{--list START--}}
            <div class="w-full border-orange-500 py-12 mx-auto flex flex-wrap gap-x-8 gap-y-12 justify-center items-center">

                @forelse ($positions->take($positions->count()/2)->chunk(ceil($positions->count() / 2)) as $chunk)
                    @foreach ($chunk as $position)
                        {{--card start--}}
                        <div class="bg-white rounded-xl shadow-benefit-icon w-72 p-2 flex-col">
                            {{--banner start--}}
                            <div class="w-full h-24 mb-8 relative md:h-32 md:mb-4">
                                {{--image-banner start--}}
                                <div class="w-full h-full rounded-t-lg overflow-hidden">
                                    <img
                                        src="{{ asset('assets/images/landing/karir/banner/'.$position->name.'.png') }}"
                                        alt="1"
                                        class="object-cover h-full w-full">
                                </div>
                                {{--image-banner end--}}
                                <img src="{{ asset("assets/images/landing/logo-berbinar.png") }}" alt="berbinar logo"
                                     class="absolute z-20 bg-white size-10 right-4 -bottom-5 rounded-full shadow-primary-light">
                            </div>
                            {{--banner end--}}

                            {{--md:status start--}}
                            <div class="hidden w-full mb-4 md:flex items-start">
                                <div
                                    class="py-1 px-2 bg-[#F7B23B4D] rounded-full flex items-center justify-center shadow-magang">
                                    <span
                                        class="font-normal text-xs text-[#ED810D] self-center">{{$position->type === 'Internship' ? 'Magang' : $position->type}}</span>
                                </div>
                            </div>
                            {{--md:status end--}}

                            {{--caption start--}}
                            <div class="w-full mb-8 md:mb-4">
                                <h3 class="font-normal text-base font-inter text-black text-center md:text-start h-10">
                                    {{$position->name}}</h3>
                            </div>
                            {{--caption end--}}

                            {{--md:remote start--}}
                            <div class="hidden w-full mb-4 md:flex md:items-start">
                                <span class="font-normal text-xs text-remote italic">
                                    <img src="{{ asset("assets/images/landing/karir/remote.png") }}" alt="remote icon"
                                         class="inline-block size-4">{{$position->location}}
                                </span>
                            </div>
                            {{--md:remote end--}}

                            {{--button start--}}
                            <div class="w-full flex justify-center items-center mb-4 md:mb-1">
                                <button
                                    class="w-3/4 py-2 px-2 rounded-lg bg-primary font-normal text-sm text-white text-center hover:opacity-80 hover:shadow-lg md:w-full">
                                    Lihat Selengkapnya
                                </button>
                            </div>
                            {{--button end--}}

                            {{--short detail start--}}
                            <div class="w-full flex items-center justify-center mb-2 md:hidden">
                                <span class="font-normal text-xs text-remote italic">
                                    <img src="{{ asset("assets/images/landing/karir/remote.png") }}" alt="remote icon"
                                         class="inline-block size-4">
                                    {{$position->location}}
                                </span>
                                <div
                                    class="py-1 px-2 bg-[#F7B23B4D] rounded-full ms-2 flex items-center justify-center shadow-magang">
                                    <span class="font-normal text-xs text-[#ED810D] self-center">
                                        {{$position->type === 'Internship' ? 'Magang' : $position->type}}
                                    </span>
                                </div>
                            </div>
                            {{--short detail end--}}
                        </div>
                        {{--card start--}}
                    @endforeach
                @empty
                    <!-- Handle empty positions -->
                @endforelse
            </div>
            {{--list END--}}

            {{--posissi lainnya start--}}
            <div class="w-full flex items-center justify-center py-4">
                <button
                    onclick="window.location.href='{{ route('positions-new') }}'"
                    class="font-normal text-base md:text-lg tracking-wide text-white py-3 px-12 md:px-16 rounded-xl bg-gradient-to-r from-[#3986A3] to-[#15323D] font-plusJakartaSans hover:opacity-70 hover:shadow-lg">
                    Posisi Lainnya
                </button>
            </div>
            {{--posissi lainnya end--}}

        </div>
    </section>
    {{--AVAIABLE POSITIONS END--}}

    {{--TESTIMONI MAGANG START--}}
    <section class="w-full mt-16 lg:mt-32 mx-auto flex items-center justify-center">
        <div class="container mx-auto md:mx-14">
            {{--caption START--}}
            <div class="w-full mx-auto mb-10 md:mb-16">
                <h2 class="font-semibold text-3xl bg-clip-text text-center tracking-wide md:tracking-normal md:text-4xl lg:text-5xl text-transparent bg-gradient-to-r from-[#1C4352] to-[#3986A3] font-plusJakartaSans mb-4 lg:tracking-wide py-1">
                    Kata Mereka Tentang Magang di Berbinar
                </h2>
            </div>
            {{--caption END--}}

            {{--testimoni irul--}}
            <div class="swiperContainer">
                <div class="swiper" id="swiperTestimoni">
                    <div class="swiper-wrapper max-sm:pb-8 pb-1">
                        @foreach ($testimonis as $testimoni)
                            <div class="swiper-slide">
                                <div
                                    class="bg-white rounded-3xl shadow-md flex flex-col justify-center text-center items-center h-auto w-auto p-5 max-sm:max-w-[240px] max-sm:max-h-[390px]">
                                    <img src="{{ asset('assets/images/landing/vector-kutip.png') }}" alt="Kutip"
                                         class="max-sm:h-7 h-8 w-auto">

                                    <div class="py-4 text-center flex flex-col flex-grow">
                                        <p class="max-sm:text-[15px] text-[16px] text-black font-medium flex-grow text-justify max-sm:min-h-[135px] min-h-[120px]">
                                            {{ $testimoni['comment'] }}
                                        </p>
                                    </div>

                                    <div class="flex flex-col items-center max-sm:mt-3 mt-3 text-center">
                                        <img src="{{ asset($testimoni['image']) }}" alt="Kutip"
                                             class="-mt-3 max-sm:h-[62px] max-sm:w-[62px] h-[70px] w-[70px] rounded-full object-cover">
                                        <p class="max-sm:text-[15px] text-[17px] text-black font-semibold">
                                            {{ $testimoni['name'] }}
                                        </p>
                                        <p class="text-sm text-[#70787D]">
                                            {{ $testimoni['division'] }}
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
            {{--testimoni irul--}}

        </div>
    </section>
    {{--TESTIMONI MAGANG END--}}

    {{-- FAQS START --}}
    <section class="z-10 mx-4 mt-16 lg:mt-32 my-14 sm:mx-20">
        <ul class="flex flex-col">
            @php
                $index = 0;
            @endphp
            @foreach ($faqs as $faq)
                <li class="border bg-white py-2 shadow-sm rounded-lg my-2" x-data="accordion({{ $index }})"
                    :class="isActive()">
                    <div class="flex flex-row mx-2 sm:mx-5">
                        <div class="flex flex-col w-full p-3 max-sm:p-2">
                            <h2 @click="handleClick()" class="font-medium cursor-pointer text-lg max-sm:text-[16.5px]">
                                <span>{{ $faq['question'] }}</span>
                            </h2>
                            <div x-ref="tab" :style="handleToggle()"
                                 class="overflow-hidden max-h-0 duration-500 transition-all">
                                <p class="mt-3 max-sm:mt-2 text-[#6F6C90] text-justify max-sm:text-[15px]">{{ $faq['answer'] }}</p>
                            </div>
                        </div>

                        <div class="items-center ml-6 hidden sm:flex">
                            <template x-if="$store.accordion.tab === idx">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20 20L4 4M20 4L4 20" stroke="#3986A3" stroke-width="3"
                                          stroke-linecap="round"/>
                                </svg>
                            </template>
                            <template x-if="$store.accordion.tab !== idx">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_7503_13741)">
                                        <path d="M22.3996 8L11.9996 19.2L1.59961 8" stroke="#3986A3" stroke-width="3"
                                              stroke-linecap="square"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_7503_13741">
                                            <rect width="24" height="24" fill="white"/>
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
    {{-- FAQS END --}}

    {{--BANNER KELUARGA BERBINAR START--}}
    <section class="w-full lg:mt-12 mx-auto flex items-center justify-center px-2 md:px-16 mb-12">
        <a href="{{route('keluarga-berbinar')}}">
            <div class=" cursor-pointer">
                <img src="{{asset('assets/images/landing/karir/banner-keluarga-berbinar.png')}}"
                     alt="banner keluarga berbinar" class="object-cover">
            </div>
        </a>
    </section>
    {{--BANNER KELUARGA BERBINAR END--}}

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
    {{-- SCRIPT ACCORDION FAQS --}}

@endsection
