@extends('layouts.main-new', [
    'title' => 'Berbinar Insightful Indonesia',
    'active' => 'Karir',
    'page' => 'Karir',
])

@section('content')

    {{-- HERO START --}}
    <section class="pt-32 w-full overflow-x-hidden relative mb-12">
        <div class="container mx-auto md:mx-14">{{--px-4--}}
            <div
                class="w-full text-center mb-12 md:flex md:flex-wrap md:items-center md:justify-between lg:pt-24 md:pt-12">
                {{--wave atas--}}
                <div class="relative md:hidden mb-4 w-full">
                    <div class="w-full mb-12">
                        <img src="{{ asset("assets/images/landing/vector-wave2.png") }}" alt="wave2"
                             class="translate-x-4">
                        <img src="{{ asset("assets/images/landing/karir-dummy/hexagon-picture-right.png") }}"
                             alt="hexagon-topright"
                             class="absolute -top-0 left-2 w-20 h-25 scale-150 -rotate-45 sm:scale-150">
                    </div>
                </div>

                {{--tulisan--}}
                <div class="md:justify-start md:items-start md:text-start md:w-1/2 md:z-10">
                    {{--judul--}}
                    <div class="mb-8">
                        <h1 class="font-semibold text-3xl bg-clip-text md:text-4xl lg:text-5xl text-transparent bg-gradient-to-r from-[#1C4352] to-[#3986A3] font-[inter] mb-4 lg:tracking-wide py-1">
                            Join Berbinar & <span
                                class="block"></span> Be Part of Our Journey</h1>
                    </div>
                    {{--button--}}
                    <button
                        class="py-2 px-4 rounded-lg text-sm md:text-xl text-white bg-gradient-to-tr from-[#F7B23B] to-[#AD7D29] hover:opacity-80 hover:shadow-lg transition duration-300 mb-12">
                        Lihat
                        Posisi Tersedia
                    </button>
                </div>

                {{--hexagon banner--}}
                <div
                    class="hidden md:flex md:items-start md:justify-center md:w-1/2 md:z-10 lg:scale-125 lg:translate-x-12 lg:translate-y-12">
                    <img src="{{ asset("assets/images/landing/karir-dummy/hexagon-banner.png") }}" alt="">
                </div>

                {{--lg:wavy-cloud--}}
                <div
                    class="hidden px-0 lg:flex md:items-center md:justify-start md:w-full md:absolute md:right-0 md:bottom-40">
                    <img src="{{ asset("assets/images/landing/karir-dummy/wavy-cloud.png") }}" alt=""
                         class="scale-75 md:scale-y-50 md:-translate-x-48 lg:-translate-x-52">
                </div>

                {{--md:wavy-cloud--}}
                <div
                    class="hidden px-0 md:flex lg:hidden md:items-center md:justify-start md:w-full md:absolute md:right-0 md:bottom-16">
                    <img src="{{ asset("assets/images/landing/karir-dummy/wavy-cloud.png") }}" alt=""
                         class="scale-75 scale-y-50 -translate-x-32 ">
                </div>

                {{--wave bawah--}}
                <div class="w-full mb-4 relative md:hidden">
                    <img src="{{ asset("assets/images/landing/vector-wave2.png") }}" alt="wave2"
                         class=" -translate-x-4">
                    <img src="{{ asset("assets/images/landing/karir-dummy/hexagon-picture-right.png") }}"
                         alt="hexagon-bottomright" class="absolute -bottom-0 right-0 w-20 h-25 scale-150">
                </div>
            </div>
            {{--infinite horizontal scroll--}}
            <div class="w-full mx-auto lg:pt-32">
                <div class="flex gap-1">
                    <div class="flex gap-4 profile-slide">
                        @for($i = 1; $i <= 35; $i++)
                            <div class="bg-primary rounded-full w-14 h-14 lg:w-20 lg:h-20 overflow-hidden"><img
                                    src="{{ asset("assets/images/landing/karir-dummy/profile-dummy.jpeg") }}"
                                    alt="profile dummy" class="object-cover">
                            </div>
                        @endfor
                        @for($i = 1; $i <= 35; $i++)
                            <div class="bg-primary rounded-full w-14 h-14 lg:w-20 lg:h-20 overflow-hidden">
                                <img
                                    src="{{ asset("assets/images/landing/karir-dummy/profile-dummy.jpeg") }}"
                                    alt="profile dummy" class="object-cover">
                            </div>
                        @endfor
                    </div>

                </div>
            </div>
        </div>
    </section>
    {{-- HERO END --}}

    {{--ALUR PENDAFTARAN START--}}
    <section class="w-full mb-12 mx-auto overflow-hidden flex items-center justify-center">
        <div class="container mx-auto md:mx-14">
            {{--caption--}}
            <div class="mb-8">
                <h1 class="font-semibold text-3xl bg-clip-text text-center md:text-4xl lg:text-5xl text-transparent bg-gradient-to-r from-[#1C4352] to-[#3986A3] font-plusJakartaSans mb-4 lg:tracking-wide py-1">
                    Alur Pendaftaran <span class="block"></span> Internship
                </h1>
            </div>

            <div class="lg:flex justify-around relative">
                {{--background image--}}
                <div class="hidden lg:block absolute inset-0 z-0">
                    <img src="{{ asset("assets/images/landing/karir-dummy/garis.png") }}" alt="garis"
                         class="object-cover">
                </div>

                {{--mencari--}}
                <div
                    class="flex items-center justify-around mx-auto mb-4 relative z-20 lg:flex-col lg:items-center lg:justify-center lg:pb-60">
                    {{--masking biru halus --}}
                    <div class="hidden lg:flex lg:items-center lg:justify-center absolute z-10 -bottom-20 -left-8">
                        <img src="{{ asset('assets/images/landing/karir-dummy/Ellipse1.png') }}" alt="ellipse 3"
                             class="translate-x-4">
                    </div>

                    {{--image & image caption--}}
                    <div class="flex-col items-center justify-center shrink-0 gap-1 lg:mb-4">
                        <img src="{{ asset('assets/images/landing/karir-dummy/mencari.png') }}" alt="icon mencari"
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
                        <img src="{{ asset('assets/images/landing/karir-dummy/Ellipse2.png') }}" alt="ellipse 1"
                             class="object-cover">
                    </div>

                    {{--description--}}
                    <div
                        class="flex items-center justify-center w-64 ps-4 lg:p-0 lg:flex-col lg:text-center lg:order-last">
                        <p class="font-semibold text-wrap">Pendaftaran data diri pada Google Form yang tersedia</p>
                    </div>

                    {{--image & image caption--}}
                    <div class="flex-col items-center justify-center shrink-0 gap-1 lg:mb-4">
                        <img src="{{ asset('assets/images/landing/karir-dummy/administrasi.png') }}"
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
                        <img src="{{ asset('assets/images/landing/karir-dummy/Ellipse3.png') }}" alt="ellipse 3"
                             class="object-cover">
                    </div>

                    {{--image & image caption--}}
                    <div class="flex-col items-center justify-center shrink-0 gap-1 lg:mb-4">
                        <img src="{{ asset('assets/images/landing/karir-dummy/pengiriman berkas.png') }}"
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
                        <img src="{{ asset('assets/images/landing/karir-dummy/Ellipse2.png') }}" alt="ellipse 1"
                             class="object-cover">
                    </div>

                    {{--description--}}
                    <div
                        class="flex items-center justify-center w-64 ps-4 lg:p-0 lg:flex-col lg:text-center lg:order-last">
                        <p class="font-semibold text-wrap">Menunggu pengumuman melalui E-mail / Whatsapp</p>
                    </div>

                    {{--image & image caption--}}
                    <div class="flex-col items-center justify-center shrink-0 gap-1 lg:mb-4">
                        <img src="{{ asset('assets/images/landing/karir-dummy/selesai.png') }}" alt="icon selesai"
                             class="size-28">
                        <h4 class="text-center font-semibold text-lg text-black">selesai</h4>
                    </div>

                </div>
            </div>
        </div>
    </section>
    {{--ALUR PENDAFTARAN END--}}

@endsection
