@extends('layouts.main', [
    'title' => 'Berbinar Insightful Indonesia',
    'active' => 'Home',
    'page' => 'Home',
])

@section('content')
    {{-- HERO SECTION --}}
    <section
        class="hero max-w-6xl mx-auto h-screen flex flex-col md:flex-row items-center justify-center relative px-5 md:px-0 mt-28 md:mt-10">
        {{-- HERO IMG MOBILE --}}
        <img src="{{ asset('assets/images/ilustrasi-logo-berbinar.png') }}" alt="Ilustrasi Logo Berbinar"
            title="Ilustrasi Logo Berbinar" class="w-full block md:hidden" data-aos="fade-up" data-aos-duration="1500">

        {{-- HERO CONTENT --}}
        <div class="relative flex items-center">
            <div class="bg-blur-bg rounded-[700px] blur-[55px] w-[300px] md:w-[600px] h-[250px] md:h-[600px] absolute">
            </div>
            <div class="flex flex-col gap-5 z-40 relative">
                <h1 class="font-semibold text-black text-[40px] md:text-[64px] leading-[100%] md:leading-[120%]">
                    Edukasi & Layanan<br>Psikologi <span class="text-primary font-bold">Berbinar</span>
                </h1>
                <p class="text-lg text-disabled">Berbinar bergerak dalam edukasi dan layanan psikologi yang memberikan jasa dalam kelas seminar, workshop, training secara daring, serta konseling, dan psikotes.</p>
                <a href="{{ route('counseling') }}"
                    class="text-lg text-white bg-primary-alt rounded-md hover:bg-primary duration-700 px-5 py-2 w-fit">Lakukan
                    Konseling</a>
            </div>
        </div>

        {{-- HERO IMG DESKTOP --}}
        <img src="{{ asset('assets/images/ilustrasi-logo-berbinar.png') }}" alt="Ilustrasi Logo Berbinar"
            title="Ilustrasi Logo Berbinar" class="w-1/2 hidden md:block" data-aos="fade-left" data-aos-duration="1500">
    </section>

    {{-- ABOUT SECTION --}}
    <section class="max-w-6xl mx-auto md:px-0 flex flex-col md:flex-row-reverse md:gap-10 md:items-center md:-mt-28">
        {{-- ABOUT CONTENT --}}
        <div class="flex flex-col gap-5 z-40">
            <h1 class="text-black fomt-semibold text-3xl px-5 md:px-0">
                Mengapa Memilih <span class="text-primary font-bold">Berbinar</span>
            </h1>
            <img src="{{ asset('assets/images/ilustrasi-value-berbinar.png') }}" alt="Ilustrasi Logo Berbinar"
                title="Ilustrasi Logo Berbinar" class="w-full block md:hidden" data-aos="zoom-in" data-aos-duration="1500">
            <p class="text-disabled text-lg text-justify px-5 md:px-0">
                Kesehatan mental sering timbul di kalangan masyarakat. Namun, masih banyak dari kita yang merasa ragu untuk
                mencari bantuan. Mahalnya biaya konsultasi dan jasa psikotes menjadi penghalang utama untuk mencari
                pertolongan lebih lanjut. Permasalahan ini menjadi alasan berdirinya Berbinar Insightful Indonesia. Berbinar
                memberikan layanan psikotes, konseling, dan kelas, yang fleksibel dan sesuai kebutuhan customer, namun tetap
                kredibel.
            </p>
            <div class="flex bg-transparent w-full rounded-md text-center px-5 md:px-0">
                <div class="flex flex-col items-center justify-center gap-1 p-4 border border-[#70787D] rounded-md w-full">
                    <h1 class="text-3xl font-bold text-black" data-aos="zoom-out" data-aos-duration="500">12</h1>
                    <p class="text-disabled text-base md:text-lg leading-[120%]">Media Partner</p>
                </div>
                <div class="flex flex-col items-center ml-6 justify-center gap-1 p-4 border border-[#70787D] rounded-md w-full">
                    <h1 class="text-3xl font-bold text-black" data-aos="zoom-out" data-aos-duration="1000"
                        data-aos-duration="500">3</h1>
                    <p class="text-disabled text-base md:text-lg leading-[120%]">Produk</p>
                </div>
                <div class="flex flex-col items-center ml-6 justify-center gap-1 p-4 border border-[#70787D] rounded-md w-full">
                    <h1 class="text-3xl font-bold text-black" data-aos="zoom-out" data-aos-duration="1500"
                        data-aos-delay="500">8</h1>
                    <p class="text-disabled text-base md:text-lg leading-[120%]">Sub Produk</p>
                </div>
            </div>
            <a href="{{ route('products') }}"
                class="text-lg text-white bg-primary-alt rounded-md hover:bg-primary duration-700 px-5 py-2 w-fit mx-5 md:mx-0">Lihat
                Produk
                Berbinar</a>
        </div>

        {{-- ABOUT IMG DESKTOP --}}
        <img src="{{ asset('assets/images/ilustrasi-value-berbinar.png') }}" alt="Ilustrasi Logo Berbinar"
            title="Ilustrasi Logo Berbinar" class="w-[80%] hidden md:block" data-aos="fade-right" data-aos-duration="1500">
    </section>

    {{-- BANNER SECTION --}}
    <section class="max-w-6xl mx-auto z-40">
        <a href="https://youtu.be/UlPJY2q4m1g" target="_blank">
            <img src="{{ asset('assets/images/img-banner-section.png') }}" alt="Banner Berbisik Berbinar"
                title="Banner Berbisik Berbinar" class="w-full md:block hidden" data-aos="zoom-in" data-aos-duration="1500">
        </a>
    </section>

    {{-- PRODUCT SECTION --}}
    <section class="max-w-6xl mx-auto flex flex-col gap-10 z-40">
        <h1 class="text-black fomt-semibold text-3xl px-5 md:px-0 text-center">
            Produk <span class="text-primary font-bold">Berbinar</span> Lainnya
        </h1>

        <div class="flex flex-col md:flex-row gap-5 md:gap-3">
            <div class="flex flex-col gap-4 mx-8 md:mx-0  rounded-xl bg-white shadow-md relative pb-6 flex-1"
                data-aos="fade-right" data-aos-duration="1500">
                <div
                    class="flex items-center justify-center bg-gradient-to-r from-primary to-blur-bg rounded-tl-xl rounded-tr-xl">
                    <img src="{{ asset('assets/images/ilustrasi-konseling.png') }}" alt="Ilustrasi Konseling Berbinar"
                        title="Ilustrasi Konseling Berbinar" class="w-[250px] rounded-tl-xl rounded-tr-xl">
                </div>
                <div class="flex flex-col gap-2 text-center px-5 items-center justify-center">
                    <h3 class="text-black text-xl font-medium">Konseling dengan Psikolog</h3>
                    <p class="text-disabled text-base pb-12">
                        Konsultasikan permasalahan psikologis kamu ke psikolog partner Berbinar.
                    </p>
                    <a href="{{ route('counseling') }}"
                        class="text-base text-white bg-primary-alt rounded-md hover:bg-primary duration-700 px-5 py-2 absolute bottom-5">Pelajari
                        Selengkapnya</a>
                </div>
            </div>

            <div class="flex flex-col gap-4 mx-8 md:mx-0  rounded-xl bg-white shadow-md relative pb-6 flex-1"
                data-aos="fade-right" data-aos-duration="1500" data-aos-delay="500">
                <div
                    class="flex items-center justify-center bg-gradient-to-r from-primary to-blur-bg rounded-tl-xl rounded-tr-xl">
                    <img src="{{ asset('assets/images/ilustrasi-peercounselor.png') }}"
                        alt="Ilustrasi Peer Counselor Berbinar" title="Ilustrasi Peer Counselor Berbinar"
                        class="w-[250px] rounded-tl-xl rounded-tr-xl">
                </div>
                <div class="flex flex-col gap-2 text-center px-5 items-center justify-center">
                    <h3 class="text-black text-xl font-medium">Konseling dengan Peer Counselor</h3>
                    <p class="text-disabled text-base pb-12">
                        Konsultasikan permasalahan psikologis kamu ke counselor Berbinar.
                    </p>
                    <a href="{{ route('counseling') }}"
                        class="text-base text-white bg-primary-alt rounded-md hover:bg-primary duration-700 px-5 py-2 absolute bottom-5">Pelajari
                        Selengkapnya</a>
                </div>
            </div>

            <div class="flex flex-col gap-4 mx-8 md:mx-0  rounded-xl bg-white shadow-md relative pb-6 flex-1"
                data-aos="fade-right" data-aos-duration="1500" data-aos-delay="1000">
                <div
                    class="flex items-center justify-center bg-gradient-to-r from-primary to-blur-bg rounded-tl-xl rounded-tr-xl">
                    <img src="{{ asset('assets/images/ilustrasi-asesmen.png') }}"
                        alt="Ilustrasi Asesmen Psikologi Berbinar" title="Ilustrasi Asesmen Psikologi Berbinar"
                        class="w-[250px] rounded-tl-xl rounded-tr-xl">
                </div>
                <div class="flex flex-col gap-2 text-center px-5 items-center justify-center">
                    <h3 class="text-black text-xl font-medium">Asesmen Psikologi</h3>
                    <p class="text-disabled text-base pb-12">
                        Assessmen psikologi individu dapat memprediksi potensi yang dimiliki.
                    </p>
                    <a href="{{ route('psikotest') }}"
                        class="text-base text-white bg-primary-alt rounded-md hover:bg-primary duration-700 px-5 py-2 absolute bottom-5">Pelajari
                        Selengkapnya</a>
                </div>
            </div>

            <div class="flex flex-col gap-4 mx-8 md:mx-0  rounded-xl bg-white shadow-md relative pb-6 flex-1"
                data-aos="fade-right" data-aos-duration="1500" data-aos-delay="1500">
                <div
                    class="flex items-center justify-center bg-gradient-to-r from-primary to-blur-bg rounded-tl-xl rounded-tr-xl">
                    <img src="{{ asset('assets/images/ilustrasi-kelas.png') }}" alt="Ilustrasi Kelas Berbinar"
                        title="Ilustrasi Kelas Berbinar" class="w-[250px] rounded-tl-xl rounded-tr-xl">
                </div>
                <div class="flex flex-col gap-2 text-center px-5 items-center justify-center">
                    <h3 class="text-black text-xl font-medium">Kelas Berbinar</h3>
                    <p class="text-disabled text-base pb-12">
                        Meningkatkan soft skill dan hard skill yang dimiliki untuk meningkatkan kemampuan bersaing.
                    </p>
                    <a href="{{ route('class') }}"
                        class="text-base text-white bg-primary-alt rounded-md hover:bg-primary duration-700 px-5 py-2 absolute bottom-5">Pelajari
                        Selengkapnya</a>
                </div>
            </div>
        </div>

        @if ($notif === 'VerifKonseling')
        {{-- POP UP FEEDBACK KONSELING --}}
        <section>
            <div class="modal fixed top-0 left-0 right-0 z-50 flex justify-center items-center w-full h-full" id="close-konseling">
                <div class="modal-dialog m-4 modal-xl bg-linear rounded-xl shadow-lg p-4" style="background-color: white">
                    <div class="modal">
                        <div style="max-width: 40rem">
                            <div class="text-right p-3 cursor-pointer " onclick="closeModal('close-konseling')"></div>
                            <div class="px-4">
                                <div class="flex">
                                    <div class="flex-none mr-6 mb-4 hidden md:block">
                                        <img src="{{ asset('assets/images/logo-berbinar-text.png') }}" alt="Logo Berbinar Insightful Indonesia" title="Logo Berbinar Insightful Indonesia" style="width: 8rem">
                                    </div>
                                    <div class="flex-1">
                                        <h1 class="text-left text-3xl font-semibold mb-5 -mt-1">Terima Kasih</h1>
                                        <div class="text-justify text-pretty font-light">
                                            atas ketersediannya dalam mengisi form data intake dan informasi konsultasi. Setelah ini kamu akan dihubungi oleh staf konseling Berbinar 1x24 jam untuk langkah lebih lanjut. Terima kasih dan semoga harimu menyenangkan! <br><br> Jika ada hal yang ingin disampaikan, kamu bisa menghubungi nomor di bawah: <br><br> <span class="font-semibold text-left">082141869800 (Berbinar Insightful Indonesia)</span>
                                        </div>
                                        <div class="ml-auto my-4 rounded-md px-4 py-2 w-fit duration-300 cursor-pointer bg-primary hover:bg-sky-950 text-white" onclick="closeModal('close-konseling')">
                                            <span >Tutup</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <div class="modalin opacity-25 fixed inset-0 z-40 bg-black" id="close-konseling-backdrop"></div>
        @endif
    </section>
    <script>
        const hero = document.querySelector('.hero');
        const header = document.querySelector('#header');

        window.addEventListener('DOMContentLoaded', (event) => {
            @if($notif === 'VerifKonseling')
                header.classList.remove('fixed');
                hero.style.height = '33rem';
            @endif
        });

        function closeModal(modalID) {
            const modal = document.getElementById(modalID);
            modal.classList.add("hidden");
            document.getElementById(modalID + "-backdrop").classList.add("hidden");
            header.classList.add('fixed'); 
            hero.style.height = '';
        }
    </script>

@endsection