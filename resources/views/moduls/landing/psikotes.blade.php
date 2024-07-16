@extends('layouts.main', [
'title' => 'Tes Psikotes - Berbinar Insightful Indonesia',
'active' => 'Produk Berbinar',
'page' => 'Psikotes',
])

@section('content')
{{-- HERO SECTION --}}
<section class="max-w-6xl mx-auto h-screen flex flex-col md:flex-row items-center justify-center relative px-5 md:px-0 mt-32 md:mt-10">
    {{-- HERO IMG MOBILE --}}
    <img src="{{ asset('assets/images/product-berbinar/asesmen-psikologi.png') }}" alt="Ilustrasi Psikotest Berbinar" title="Ilustrasi Psikotest Berbinar" class="w-full block md:hidden" data-aos="fade-up" data-aos-duration="1500">

    {{-- HERO CONTENT --}}
    <div class="relative flex items-center">
        <div class="bg-blur-bg rounded-[700px] blur-[55px] w-[300px] md:w-[600px] h-[250px] md:h-[600px] absolute">
        </div>
        <div class="flex flex-col gap-5 z-40 relative">
            <h1 class="font-semibold text-black text-[40px] md:text-[64px] leading-[100%] md:leading-[120%]">Psikotes
                <!-- Psikotes<span class="text-primary font-bold"> Berbinar</span> -->
            </h1>
            <p class="text-lg text-disabled">Psikotes berbinar Insightful Indonesia merupakan solusi unggul
                untuk perusahaan dan individu dalam pengembangan karier dan penilaian potensi. Memberikan wawasan
                mendalam tentang kepribadian, keterampilan, dan kemampuan, untuk membantu pengambilan keputusan yang
                tepat dalam mengoptimalkan potensi karier.</p>
            <a href="{{ route('psikotestHome') }}" class="text-lg text-white bg-primary-alt rounded-md hover:bg-primary duration-700 px-5 py-2 w-fit">Lakukan
                Psikotes</a>
        </div>
    </div>

    {{-- HERO IMG DESKTOP --}}
    <img src="{{ asset('assets/images/product-berbinar/asesmen-psikologi.png') }}" alt="Ilustrasi Tes Psikotest Berbinar" title="Ilustrasi Tes Psikotest Berbinar" class="w-1/2 hidden md:block" data-aos="fade-left" data-aos-duration="1500">
</section>

{{-- TES PSIKOTEST INDIVIDU SECTION --}}
<section class="max-w-6xl mx-auto flex flex-col md:flex-row-reverse items-center justify-center relative px-5 mt-24 md:px-0 md:-mt-20">
    {{-- TES PSIKOTEST INDIVIDU IMG MOBILE --}}
    <img src="{{ asset('assets/images/ilustrasi-asesmen-psikologi-indivdu.png') }}" alt="Ilustrasi Tes Psikotest Berbinar" title="Ilustrasi Tes Psikotest Berbinar" class="w-full block md:hidden" data-aos="fade-up" data-aos-duration="1500">

    {{-- TES PSIKOTEST INDIVIDU CONTENT --}}
    <div class="relative flex items-center">
        <div class="bg-blur-bg rounded-[700px] blur-[55px] w-[300px] md:w-[600px] h-[250px] md:h-[600px] absolute">
        </div>
        <div class="flex flex-col gap-5 z-40 relative">
            <h2 class="text-black fomt-semibold text-3xl md:px-0">Psikotes Individu
                <!-- Psikotes Individu<span class="text-primary font-bold"> Berbinar</span> -->
            </h2>
            <p class="text-lg text-disabled">Psikotes individu dapat memprediksi potensi yang dimiliki dalam
                kaitannya dengan pencapaian hasil belajar atau kemampuan di masa yang akan datang.</p>
            <a href="https://bit.ly/DaftarPsikotesBerbinar" class="text-lg text-white bg-primary-alt rounded-md hover:bg-primary duration-700 px-5 py-2 w-fit">Daftar
                Psikotes Individu Sekarang</a>
        </div>
    </div>

    {{-- TES PSIKOTEST INDIVIDU IMG DESKTOP --}}
    <img src="{{ asset('assets/images/ilustrasi-asesmen-psikologi-indivdu.png') }}" alt="Ilustrasi Tes Psikotest Berbinar" title="Ilustrasi Tes Psikotest Berbinar" class="w-[45%] hidden md:block" data-aos="fade-right" data-aos-duration="1500">
</section>

{{-- PRODUCT SECTION --}}
<section class="max-w-6xl mt-5 mx-5 md:mx-auto flex flex-col gap-10 z-40">
    <div class="flex flex-col gap-1">
        <h1 class="text-black fomt-semibold text-3xl px-5 md:px-0 text-center">
            Psikotes Individu
        </h1>

        <p class="text-lg text-disabled text-center">Pilih layanan yang ingin anda ikuti</p>
    </div>
    <div id="product-list" class="flex flex-col md:flex-row gap-5 md:gap-3 overflow-x-auto" style="padding-bottom: 24px;">
        <div class="flex flex-col gap-4 md:mx-0 rounded-xl bg-white border-2 border-gray-300 shadow-md relative pb-10 flex-1 w-full min-w-[300px] md:w-[400px]" data-aos="fade-right" data-aos-duration="500" data-aos-delay="0">
            <div class="flex flex-col gap-2 text-center items-center px-5 pt-10">
                <h3 class="text-black text-xl font-medium">Tes Memori</h3>
                <h1 class="text-black text-xl font-bold">Rp. 129.999,00</h1>
                <div class="text-disabled text-base pb-8 text-left mt-3 flex flex-col items-left justify-left gap-1 -ml-10">
                    <span>Termasuk :</span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#3986A3" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg> <span>Laporan Tertulis</span>
                    </span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#F34949" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                                <path d="m16.192 6.344-4.243 4.242-4.242-4.242-1.414 1.414L10.535 12l-4.242 4.242 1.414 1.414 4.242-4.242 4.243 4.242 1.414-1.414L13.364 12l4.242-4.242z">
                                </path>
                            </svg>

                        </svg> <span>Konseling Hasil Tes</span>
                    </span>
                </div>
                <div class="w-full">
                    <a href="https://bit.ly/DaftarPsikotesBerbinar" cl class="text-base text-white bg-primary-alt rounded-md hover:bg-primary duration-700 px-5 py-2 bottom-7 ">Daftar
                    </a>
                </div>
            </div>
        </div>

        <div class="flex flex-col gap-4 md:mx-0  rounded-xl bg-white border-2 border-gray-300 shadow-md relative pb-4 flex-1 w-full min-w-[300px] md:w-[400px]" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="500">
            <div class="flex flex-col gap-2 text-center items-center px-5 pt-10">
                <h3 class="text-black text-xl font-medium">Tes <span class="italic">Self-love</span></h3>
                <h1 class="text-black text-xl font-bold">Rp. 99.000,00</h1>
                <div class="text-black text-base pb-8 text-left mt-3 flex flex-col items-left justify-left gap-1 -ml-10">
                    <span>Termasuk :</span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#3986A3" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg> <span>Laporan Tertulis</span>
                    </span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#F34949" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                                <path d="m16.192 6.344-4.243 4.242-4.242-4.242-1.414 1.414L10.535 12l-4.242 4.242 1.414 1.414 4.242-4.242 4.243 4.242 1.414-1.414L13.364 12l4.242-4.242z">
                                </path>
                            </svg>

                        </svg> <span>Konseling Hasil Tes</span>
                    </span>
                </div>
                <div class="w-full">
                    <a href="https://bit.ly/DaftarPsikotesBerbinar" cl class="text-base text-white bg-primary-alt rounded-md hover:bg-primary duration-700 px-5 py-2 bottom-7 ">Daftar
                    </a>
                </div>
            </div>
        </div>

        <div class="flex flex-col gap-4 md:mx-0  rounded-xl bg-white border-2 border-gray-300 shadow-md relative pb-4 flex-1 w-full min-w-[300px] md:w-[400px]" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="500">
            <div class="flex flex-col gap-2 text-center items-center px-5 pt-10">
                <h3 class="text-black text-xl font-medium">Tes Dimensia</span></h3>
                <h1 class="text-black text-xl font-bold">Rp. 199.999,00</h1>
                <div class="text-black text-base pb-8 text-left mt-3 flex flex-col items-left justify-left gap-1 -ml-10">
                    <span>Termasuk :</span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#3986A3" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg> <span>Laporan Tertulis</span>
                    </span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#F34949" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                                <path d="m16.192 6.344-4.243 4.242-4.242-4.242-1.414 1.414L10.535 12l-4.242 4.242 1.414 1.414 4.242-4.242 4.243 4.242 1.414-1.414L13.364 12l4.242-4.242z">
                                </path>
                            </svg>

                        </svg> <span>Konseling Hasil Tes</span>
                    </span>
                </div>
                <div class="w-full">
                    <a href="https://bit.ly/DaftarPsikotesBerbinar" cl class="text-base text-white bg-primary-alt rounded-md hover:bg-primary duration-700 px-5 py-2 bottom-7 ">Daftar
                    </a>
                </div>
            </div>
        </div>

        <div class="flex flex-col gap-4 md:mx-0  rounded-xl bg-white border-2 border-gray-300 shadow-md relative pb-4 flex-1 w-full min-w-[300px] md:w-[400px]" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="500">
            <div class="flex flex-col gap-2 text-center items-center px-5 pt-10">
                <h3 class="text-black text-xl font-medium">Tes Stress</span></h3>
                <h1 class="text-black text-xl font-bold">Rp. 159.000,00</h1>
                <div class="text-black text-base pb-8 text-left mt-3 flex flex-col items-left justify-left gap-1 -ml-10">
                    <span>Termasuk :</span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#3986A3" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg> <span>Laporan Tertulis</span>
                    </span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#3986A3" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg> <span>Konseling Hasil Tes</span>
                    </span>
                </div>
                <div class="w-full">
                    <a href="https://bit.ly/DaftarPsikotesBerbinar" cl class="text-base text-white bg-primary-alt rounded-md hover:bg-primary duration-700 px-5 py-2 bottom-7 ">Daftar
                    </a>
                </div>
            </div>
        </div>


        <div class="flex flex-col gap-4 md:mx-0  rounded-xl bg-white border-2 border-gray-300 shadow-md relative pb-4 flex-1 w-full min-w-[300px] md:w-[400px]" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="500">
            <div class="flex flex-col gap-2 text-center items-center px-5 pt-10">
                <h3 class="text-black text-xl font-medium">Tes Depresi</span></h3>
                <h1 class="text-black text-xl font-bold">Rp. 159.000,00</h1>
                <div class="text-black text-base pb-8 text-left mt-3 flex flex-col items-left justify-left gap-1 -ml-10">
                    <span>Termasuk :</span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#3986A3" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg> <span>Laporan Tertulis</span>
                    </span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#3986A3" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg> <span>Konseling Hasil Tes</span>
                    </span>
                </div>
                <div class="w-full">
                    <a href="https://bit.ly/DaftarPsikotesBerbinar" cl class="text-base text-white bg-primary-alt rounded-md hover:bg-primary duration-700 px-5 py-2 bottom-7 ">Daftar
                    </a>
                </div>
            </div>
        </div>

        <div class="flex flex-col gap-4 md:mx-0  rounded-xl bg-white border-2 border-gray-300 shadow-md relative pb-4 flex-1 w-full min-w-[300px] md:w-[400px]" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="500">
            <div class="flex flex-col gap-2 text-center items-center px-5 pt-10">
                <h3 class="text-black text-xl font-medium">Tes Kecemasan</span></h3>
                <h1 class="text-black text-xl font-bold">Rp. 159.000,00</h1>
                <div class="text-black text-base pb-8 text-left mt-3 flex flex-col items-left justify-left gap-1 -ml-10">
                    <span>Termasuk :</span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#3986A3" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg> <span>Laporan Tertulis</span>
                    </span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#F34949" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                                <path d="m16.192 6.344-4.243 4.242-4.242-4.242-1.414 1.414L10.535 12l-4.242 4.242 1.414 1.414 4.242-4.242 4.243 4.242 1.414-1.414L13.364 12l4.242-4.242z">
                                </path>
                            </svg>

                        </svg> <span>Konseling Hasil Tes</span>
                    </span>
                </div>
                <div class="w-full">
                    <a href="https://bit.ly/DaftarPsikotesBerbinar" cl class="text-base text-white bg-primary-alt rounded-md hover:bg-primary duration-700 px-5 py-2 bottom-7 ">Daftar
                    </a>
                </div>
            </div>
        </div>

        <div class="flex flex-col gap-4 md:mx-0  rounded-xl bg-white border-2 border-gray-300 shadow-md relative pb-4 flex-1 w-full min-w-[300px] md:w-[400px]" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="500">
            <div class="flex flex-col gap-2 text-center items-center px-5 pt-10">
                <h3 class="text-black text-xl font-medium">Tes Kecemasan+</span></h3>
                <h1 class="text-black text-xl font-bold">Rp. 299.000,00</h1>
                <div class="text-black text-base pb-8 text-left mt-3 flex flex-col items-left justify-left gap-1 -ml-10">
                    <span>Termasuk :</span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#3986A3" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg> <span>Laporan Tertulis</span>
                    </span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#3986A3" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg> <span>Konseling Hasil Tes</span>
                    </span>
                </div>
                <div class="w-full">
                    <a href="https://bit.ly/DaftarPsikotesBerbinar" cl class="text-base text-white bg-primary-alt rounded-md hover:bg-primary duration-700 px-5 py-2 bottom-7 ">Daftar
                    </a>
                </div>
            </div>
        </div>

        <div class="flex flex-col gap-4 md:mx-0  rounded-xl bg-white border-2 border-gray-300 shadow-md relative pb-4 flex-1 w-full min-w-[300px] md:w-[400px]" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="500">
            <div class="flex flex-col gap-2 text-center items-center px-5 pt-10">
                <h3 class="text-black text-xl font-medium">Tes Fungsi Kognitif</span></h3>
                <h1 class="text-black text-xl font-bold">Rp. 129.999,00</h1>
                <div class="text-black text-base pb-8 text-left mt-3 flex flex-col items-left justify-left gap-1 -ml-10">
                    <span>Termasuk :</span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#3986A3" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg> <span>Laporan Tertulis</span>
                    </span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#F34949" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                                <path d="m16.192 6.344-4.243 4.242-4.242-4.242-1.414 1.414L10.535 12l-4.242 4.242 1.414 1.414 4.242-4.242 4.243 4.242 1.414-1.414L13.364 12l4.242-4.242z">
                                </path>
                            </svg>

                        </svg> <span>Konseling Hasil Tes</span>
                    </span>
                </div>
                <div class="w-full">
                    <a href="https://bit.ly/DaftarPsikotesBerbinar" cl class="text-base text-white bg-primary-alt rounded-md hover:bg-primary duration-700 px-5 py-2 bottom-7 ">Daftar
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>

{{-- TES PSIKOTEST PERUSAHAAN SECTION --}}
<section class="max-w-6xl mx-auto flex flex-col md:flex-row-reverse items-center justify-center relative px-5 py-5 pt-0 md:pt-10 md:px-0">
    {{-- TES PSIKOTEST PERUSAHAAN IMG MOBILE --}}
    <img src="{{ asset('assets/images/asesmen-perusahaan.png') }}" alt="Ilustrasi Tes Psikotest Berbinar" title="Ilustrasi Tes Psikotest Berbinar" class="w-full block md:hidden" data-aos="fade-up" data-aos-duration="1500">

    {{-- TES PSIKOTEST PERUSAHAAN IMG DESKTOP --}}
    <img src="{{ asset('assets/images/asesmen-perusahaan.png') }}" alt="Ilustrasi Tes Psikotest Berbinar" title="Ilustrasi Tes Psikotest Berbinar" class="w-[45%] hidden md:block" data-aos="fade-left" data-aos-duration="1500">

    {{-- TES PSIKOTEST PERUSAHAAN CONTENT --}}
    <div class="relative flex items-center">
        <div class="bg-blur-bg rounded-[700px] blur-[55px] w-[300px] md:w-[600px] h-[250px] md:h-[600px] absolute">
        </div>
        <div class="flex flex-col gap-5 z-40 relative">
            <h2 class="text-black fomt-semibold text-3xl">
                Psikotes Perusahaan
            </h2>
            <p class="text-lg text-disabled">Psikotes untuk Perusahaan digunakan untuk melihat potensi,
                kelebihan dan kekurangan, serta kecenderungan kepribadian seorang kandidat dan melihat apakah kandidat
                tersebut cocok ditempatkan di suatu posisi pekerjaan.</p>
            <a href="https://bit.ly/DaftarPsikotesBerbinar" class="text-lg text-white bg-primary-alt rounded-md hover:bg-primary duration-700 px-5 py-2 w-fit">Daftar
                Psikotes Perusahaan Sekarang</a>
        </div>
    </div>


</section>

{{-- PRODUCT SECTION --}}
<section class="max-w-6xl mx-5 md:mx-auto mt-5 md:mt-0 flex flex-col gap-10 z-40">
    <div class="flex flex-col gap-1">
        <h1 class="text-black fomt-semibold text-3xl px-5 md:px-0 text-center">
            Psikotes Perusahaan - Staff
        </h1>

        <p class="text-lg text-disabled text-center">Pilih tes sesuai dengan kebutuhan perusahaan anda</p>
    </div>
    <div id="product-list" class="flex flex-col md:flex-row gap-5 md:gap-3 overflow-x-auto" style="padding-bottom: 24px;">
        <div class="flex flex-col gap-4 md:mx-0 rounded-xl bg-white border-2 border-gray-300 shadow-md relative pb-4 w-full min-w-[330px] md:min-w-[400px] " data-aos="fade-right" data-aos-duration="500" data-aos-delay="0">
            <div class="flex flex-col gap-2 text-center items-center px-5 pt-5">
                <h3 class="text-black text-xl font-medium">Paket 1</h3>
                <h1 class="text-black text-xl font-bold">Rp. 450.000,00</h1>
                <div class="text-disabled text-[15px] md:text-base pb-12 text-left mt-3 flex flex-col items-left justify-left gap-1">
                    <span>Termasuk :</span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#3986A3" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg> <span>Tes Intelegensi</span>
                    </span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#3986A3" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg> <span>Tes Sikap Kerja</span>
                    </span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#3986A3" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg> <span>Tes Kepribadian</span>
                    </span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#3986A3" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg> <span>Focus Group Discussion</span>
                    </span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#F34949" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                                <path d="m16.192 6.344-4.243 4.242-4.242-4.242-1.414 1.414L10.535 12l-4.242 4.242 1.414 1.414 4.242-4.242 4.243 4.242 1.414-1.414L13.364 12l4.242-4.242z">
                                </path>
                            </svg>
                        </svg> <span>Wawancara</span>
                    </span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#3986A3" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg> <span>Psikogram</span>
                    </span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none" class="my-3">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#3986A3" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg> <span>Deskripsi Karakteristik, Kelemahan, <br>Kelebihan, dan Rekomendasi</span>
                    </span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#F34949" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                                <path d="m16.192 6.344-4.243 4.242-4.242-4.242-1.414 1.414L10.535 12l-4.242 4.242 1.414 1.414 4.242-4.242 4.243 4.242 1.414-1.414L13.364 12l4.242-4.242z">
                                </path>
                            </svg>
                        </svg><span>Proyeksi Pengembangan</span>
                    </span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#F34949" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                                <path d="m16.192 6.344-4.243 4.242-4.242-4.242-1.414 1.414L10.535 12l-4.242 4.242 1.414 1.414 4.242-4.242 4.243 4.242 1.414-1.414L13.364 12l4.242-4.242z">
                                </path>
                            </svg>
                        </svg> <span>Saran Pengembangan</span>
                    </span><br>
                </div>
                <a href="https://bit.ly/DaftarPsikotesBerbinar" class="text-base text-white bg-primary-alt rounded-md hover:bg-primary duration-700 px-5 py-2 absolute bottom-7 ">Daftar
                </a>
            </div>
        </div>

        <div class="flex flex-col gap-4 md:mx-0  rounded-xl bg-white border-2 border-gray-300 shadow-md relative pb-4 w-full min-w-[330px] md:min-w-[400px]" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="500">
            <div class="flex flex-col gap-2 text-center items-center px-5 pt-5">
                <h3 class="text-black text-xl font-medium">Paket 2</h3>
                <h1 class="text-black text-xl font-bold">Rp. 600.000,00</h1>
                <div class="text-disabled text-[15px] md:text-base pb-12 text-left mt-3 flex flex-col items-left justify-left gap-1 ">
                    <span>Termasuk :</span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#3986A3" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg> <span>Tes Intelegensi</span>
                    </span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#3986A3" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg> <span>Tes Sikap Kerja</span>
                    </span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#3986A3" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg> <span>Tes Kepribadian</span>
                    </span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#3986A3" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg> <span>Focus Group Discussion</span>
                    </span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#F34949" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                                <path d="m16.192 6.344-4.243 4.242-4.242-4.242-1.414 1.414L10.535 12l-4.242 4.242 1.414 1.414 4.242-4.242 4.243 4.242 1.414-1.414L13.364 12l4.242-4.242z">
                                </path>
                            </svg>
                        </svg> <span>Wawancara</span>
                    </span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#3986A3" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg> <span>Psikogram</span>
                    </span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none" class="my-3">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#3986A3" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg> <span>Deskripsi Karakteristik, Kelemahan, <br>Kelebihan, dan Rekomendasi</span>
                    </span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#3986A3" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg><span>Proyeksi Pengembangan</span>
                    </span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#3986A3" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg> <span>Saran Pengembangan</span>
                    </span><br>
                </div>
                <a href="https://bit.ly/DaftarPsikotesBerbinar" class="text-base text-white bg-primary-alt rounded-md hover:bg-primary duration-700 px-5 py-2 absolute bottom-7 ">Daftar
                </a>

            </div>
        </div>

        <div class="flex flex-col gap-4 md:mx-0  rounded-xl bg-white border-2 border-gray-300 shadow-md relative pb-4 w-full min-w-[330px] md:min-w-[400px]" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="500">
            <div class="flex flex-col gap-2 text-center items-center px-5 pt-5">
                <h3 class="text-black text-xl font-medium">Paket 3</h3>
                <h1 class="text-black text-xl font-bold">Rp. 550.000,00</h1>
                <div class="text-disabled text-[15px] md:text-base pb-12 text-left mt-3 flex flex-col items-left justify-left gap-1 ">
                    <span>Termasuk :</span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#3986A3" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg> <span>Tes Intelegensi</span>
                    </span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#3986A3" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg> <span>Tes Sikap Kerja</span>
                    </span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#3986A3" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg> <span>Tes Kepribadian</span>
                    </span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#F34949" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                                <path d="m16.192 6.344-4.243 4.242-4.242-4.242-1.414 1.414L10.535 12l-4.242 4.242 1.414 1.414 4.242-4.242 4.243 4.242 1.414-1.414L13.364 12l4.242-4.242z">
                                </path>
                            </svg>
                        </svg> <span>Focus Group Discussion</span>
                    </span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#3986A3" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg> <span>Wawancara</span>
                    </span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#3986A3" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg> <span>Psikogram</span>
                    </span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none" class="my-3">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#3986A3" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg> <span>Deskripsi Karakteristik, Kelemahan, <br>Kelebihan, dan Rekomendasi</span>
                    </span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#3986A3" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg><span>Proyeksi Pengembangan</span>
                    </span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#3986A3" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg> <span>Saran Pengembangan</span>
                    </span><br>
                </div>
                <a href="https://bit.ly/DaftarPsikotesBerbinar" class="text-base text-white bg-primary-alt rounded-md hover:bg-primary duration-700 px-5 py-2 absolute bottom-7 ">Daftar
                </a>

            </div>
        </div>

        <div class="flex flex-col gap-4 md:mx-0  rounded-xl bg-white border-2 border-gray-300 shadow-md relative pb-4 w-full min-w-[330px] md:min-w-[400px]" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="500">
            <div class="flex flex-col gap-2 text-center items-center px-5 pt-5">
                <h3 class="text-black text-xl font-medium">Paket 4</h3>
                <h1 class="text-black text-xl font-bold">Rp. 750.000,00</h1>
                <div class="text-disabled text-[15px] md:text-base pb-12 text-left mt-3 flex flex-col items-left justify-left gap-1 ">
                    <span>Termasuk :</span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#3986A3" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg> <span>Tes Intelegensi</span>
                    </span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#3986A3" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg> <span>Tes Sikap Kerja</span>
                    </span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#3986A3" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg> <span>Tes Kepribadian</span>
                    </span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#3986A3" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg> <span>Focus Group Discussion</span>
                    </span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#3986A3" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg> <span>Wawancara</span>
                    </span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#3986A3" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg> <span>Psikogram</span>
                    </span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none" class="my-3">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#3986A3" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg> <span>Deskripsi Karakteristik, Kelemahan, <br>Kelebihan, dan Rekomendasi</span>
                    </span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#3986A3" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg><span>Proyeksi Pengembangan</span>
                    </span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#3986A3" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg> <span>Saran Pengembangan</span>
                    </span><br>
                </div>
                <a href="https://bit.ly/DaftarPsikotesBerbinar" class="text-base text-white bg-primary-alt rounded-md hover:bg-primary duration-700 px-5 py-2 absolute bottom-7 ">Daftar
                </a>

            </div>
        </div>
    </div>

    <div class="pt-0 md:py-10">
        <div class="flex flex-col gap-1 pt-3 pb-10">
            <h1 class="text-black fomt-semibold text-3xl px-5 md:px-0 text-center">
                Psikotes Perusahaan - Supervisor
            </h1>

            <p class="text-lg text-disabled text-center">Pilih tes sesuai dengan kebutuhan perusahaan anda</p>
        </div>
        <div id="product-list" class="flex flex-col md:flex-row gap-5 md:gap-3 items-center justify-center overflow-x-auto">
            <div class="flex flex-col gap-4 md:mx-0 rounded-xl bg-white border-2 border-gray-300 shadow-md relative pb-4 w-full min-w-[330px] md:w-[400px] " data-aos="fade-right" data-aos-duration="500" data-aos-delay="0">
                <div class="flex flex-col gap-2 text-center items-center px-5 pt-5">
                    <h3 class="text-black text-xl font-medium">Paket 1</h3>
                    <h1 class="text-black text-xl font-bold">Rp. 650.000,00</h1>
                    <div class="text-disabled text-base pb-12 text-left mt-3 flex flex-col items-left justify-left gap-1 ml-5">
                        <span>Termasuk :</span><br>
                        <span class="flex flex-row gap-1 -mt-6">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                                <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#3986A3" />
                                <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg> <span>Tes Intelegensi</span>
                        </span><br>
                        <span class="flex flex-row gap-1 -mt-6">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                                <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#3986A3" />
                                <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg> <span>Tes Sikap Kerja</span>
                        </span><br>
                        <span class="flex flex-row gap-1 -mt-6">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                                <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#3986A3" />
                                <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg> <span>Tes Kepribadian</span>
                        </span><br>
                        <span class="flex flex-row gap-1 -mt-6">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                                <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#F34949" />
                                <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                                    <path d="m16.192 6.344-4.243 4.242-4.242-4.242-1.414 1.414L10.535 12l-4.242 4.242 1.414 1.414 4.242-4.242 4.243 4.242 1.414-1.414L13.364 12l4.242-4.242z">
                                    </path>
                                </svg>
                            </svg> <span>Focus Group Discussion</span>
                        </span><br>
                        <span class="flex flex-row gap-1 -mt-6">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                                <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#3986A3" />
                                <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg><span>Wawancara</span>
                        </span><br>
                        <span class="flex flex-row gap-1 -mt-6">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                                <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#3986A3" />
                                <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg> <span>Psikogram</span>
                        </span><br>
                        <span class="flex flex-row gap-1 -mt-6">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none" class="my-3">
                                <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#3986A3" />
                                <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg> <span>Deskripsi Karakteristik, Kelemahan, <br>Kelebihan, dan Rekomendasi</span>
                        </span><br>
                        <span class="flex flex-row gap-1 -mt-6">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                                <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#F34949" />
                                <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                                    <path d="m16.192 6.344-4.243 4.242-4.242-4.242-1.414 1.414L10.535 12l-4.242 4.242 1.414 1.414 4.242-4.242 4.243 4.242 1.414-1.414L13.364 12l4.242-4.242z">
                                    </path>
                                </svg>
                            </svg><span>Proyeksi Pengembangan</span>
                        </span><br>
                        <span class="flex flex-row gap-1 -mt-6">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                                <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#F34949" />
                                <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                                    <path d="m16.192 6.344-4.243 4.242-4.242-4.242-1.414 1.414L10.535 12l-4.242 4.242 1.414 1.414 4.242-4.242 4.243 4.242 1.414-1.414L13.364 12l4.242-4.242z">
                                    </path>
                                </svg>
                            </svg> <span>Saran Pengembangan</span>
                        </span><br>
                    </div>
                    <a href="https://bit.ly/DaftarPsikotesBerbinar" class="text-base text-white bg-primary-alt rounded-md hover:bg-primary duration-700 px-5 py-2 absolute bottom-7 ">Daftar
                    </a>
                </div>
            </div>

            <div class="flex flex-col gap-4 md:mx-0  rounded-xl bg-white border-2 border-gray-300 shadow-md relative pb-4 w-full min-w-[330px] md:w-[400px]" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="500">
                <div class="flex flex-col gap-2 text-center items-center px-5 pt-5">
                    <h3 class="text-black text-xl font-medium">Paket 2</h3>
                    <h1 class="text-black text-xl font-bold">Rp. 600.000,00</h1>
                    <div class="text-disabled text-base pb-12 text-left mt-3 flex flex-col items-left justify-left gap-1 ml-5">
                        <span>Termasuk :</span><br>
                        <span class="flex flex-row gap-1 -mt-6">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                                <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#3986A3" />
                                <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg> <span>Tes Intelegensi</span>
                        </span><br>
                        <span class="flex flex-row gap-1 -mt-6">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                                <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#3986A3" />
                                <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg> <span>Tes Sikap Kerja</span>
                        </span><br>
                        <span class="flex flex-row gap-1 -mt-6">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                                <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#3986A3" />
                                <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg> <span>Tes Kepribadian</span>
                        </span><br>
                        <span class="flex flex-row gap-1 -mt-6">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                                <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#F34949" />
                                <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                                    <path d="m16.192 6.344-4.243 4.242-4.242-4.242-1.414 1.414L10.535 12l-4.242 4.242 1.414 1.414 4.242-4.242 4.243 4.242 1.414-1.414L13.364 12l4.242-4.242z">
                                    </path>
                                </svg>
                            </svg> <span>Focus Group Discussion</span>
                        </span><br>
                        <span class="flex flex-row gap-1 -mt-6">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                                <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#3986A3" />
                                <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg> <span>Wawancara</span>
                        </span><br>
                        <span class="flex flex-row gap-1 -mt-6">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                                <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#3986A3" />
                                <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg> <span>Psikogram</span>
                        </span><br>
                        <span class="flex flex-row gap-1 -mt-6">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none" class="my-3">
                                <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#3986A3" />
                                <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg> <span>Deskripsi Karakteristik, Kelemahan, <br>Kelebihan, dan Rekomendasi</span>
                        </span><br>
                        <span class="flex flex-row gap-1 -mt-6">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                                <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#3986A3" />
                                <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg><span>Proyeksi Pengembangan</span>
                        </span><br>
                        <span class="flex flex-row gap-1 -mt-6">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                                <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#3986A3" />
                                <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg> <span>Saran Pengembangan</span>
                        </span><br>
                    </div>
                    <a href="https://bit.ly/DaftarPsikotesBerbinar" class="text-base text-white bg-primary-alt rounded-md hover:bg-primary duration-700 px-5 py-2 absolute bottom-7 ">Daftar
                    </a>

                </div>
            </div>

        </div>
    </div>

</section>

{{-- TES PSIKOTEST PENDIDIKAN SECTION --}}
<section class="max-w-6xl mx-auto flex flex-col md:flex-row-reverse items-center justify-center relative py-5 px-5 mt-10 md:mt-0 md:px-0">
    {{-- TES PSIKOTEST PENDIDIKAN IMG MOBILE --}}
    <img src="{{ asset('assets/images/asesmen-pendidikan.png') }}" alt="Ilustrasi Tes Psikotest Berbinar" title="Ilustrasi Tes Psikotest Berbinar" class="w-full block md:hidden" data-aos="fade-up" data-aos-duration="1500">

    {{-- TES PSIKOTEST PENDIDIKAN CONTENT --}}
    <div class="relative flex items-center">
        <div class="bg-blur-bg rounded-[700px] blur-[55px] w-[300px] md:w-[600px] h-[250px] md:h-[600px] absolute">
        </div>
        <div class="flex flex-col gap-5 z-40 relative">
            <h2 class="text-black fomt-semibold text-3xl md:px-0">Psikotes Instansi Pendidikan
                <!-- Psikotes Individu<span class="text-primary font-bold"> Berbinar</span> -->
            </h2>
            <p class="text-lg text-disabled">Psikotes untuk Instansi Pendidikan digunakan untuk mengenal gaya
                belajar, cita-cita, jurusan, minat bakat yang sesuai dengan SobatBinar.</p>
            <a href="https://bit.ly/DaftarPsikotesBerbinar" class="text-lg text-white bg-primary-alt rounded-md hover:bg-primary duration-700 px-5 py-2 w-fit">Daftar
                Psikotes Instansi Pendidikan Sekarang</a>
        </div>
    </div>

    {{-- TES PSIKOTEST PENDIDIKAN IMG DESKTOP --}}
    <img src="{{ asset('assets/images/asesmen-pendidikan.png') }}" alt="Ilustrasi Tes Psikotest Berbinar" title="Ilustrasi Tes Psikotest Berbinar" class="w-[45%] hidden md:block" data-aos="fade-right" data-aos-duration="1500">
</section>

{{-- PRODUCT SECTION --}}
<section class="max-w-6xl mt-5 mx-5 md:mx-auto flex flex-col gap-10 z-40">
    <div class="flex flex-col gap-1">
        <h1 class="text-black fomt-semibold text-3xl px-5 md:px-0 text-center">
            Psikotes Instansi Pendidikan
        </h1>

        <p class="text-lg text-disabled text-center">Pilih tes sesuai dengan kebutuhan pendidikan anda</p>
    </div>
    <div id="product-list" class="flex flex-col md:flex-row gap-5 md:gap-3 overflow-x-auto" style="padding-bottom: 24px;">
        <div class="flex flex-col gap-4 md:mx-0 rounded-xl bg-white border-2 border-gray-300 shadow-md relative pb-10 flex-1 w-full min-w-[300px] md:w-[400px]" data-aos="fade-right" data-aos-duration="500" data-aos-delay="0">
            <div class="flex flex-col gap-2 text-center items-center px-5 pt-10">
                <h3 class="text-black text-xl font-medium py-3">Paket WOW Gaya Belajar</h3>
                <h1 class="text-black text-xl font-bold">Rp. 99.999,00</h1>
                <div class="text-disabled text-base pb-8 text-left mt-3 flex flex-col items-left justify-left gap-1 -ml-10">
                    <span>Termasuk :</span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#F34949" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                                <path d="m16.192 6.344-4.243 4.242-4.242-4.242-1.414 1.414L10.535 12l-4.242 4.242 1.414 1.414 4.242-4.242 4.243 4.242 1.414-1.414L13.364 12l4.242-4.242z">
                                </path>
                            </svg>
                        </svg><span>Laporan Tertulis</span>
                    </span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#3986A3" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg> <span>Tes Gaya Belajar</span>
                    </span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#F34949" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                                <path d="m16.192 6.344-4.243 4.242-4.242-4.242-1.414 1.414L10.535 12l-4.242 4.242 1.414 1.414 4.242-4.242 4.243 4.242 1.414-1.414L13.364 12l4.242-4.242z">
                                </path>
                            </svg>
                        </svg> <span>Konseling Hasil Tes</span>
                    </span>
                </div>
                <div class="w-full">
                    <a href="https://bit.ly/DaftarPsikotesBerbinar" cl class="text-base text-white bg-primary-alt rounded-md hover:bg-primary duration-700 px-5 py-2 bottom-7 ">Daftar
                    </a>
                </div>
            </div>
        </div>

        <div class="flex flex-col gap-4 md:mx-0  rounded-xl bg-white border-2 border-gray-300 shadow-md relative pb-4 flex-1 w-full min-w-[300px] md:w-[400px]" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="500">
            <div class="flex flex-col gap-2 text-center items-center px-5 pt-10">
                <h3 class="text-black text-xl font-medium py-3">Paket Hemat Cita-cita</span></h3>
                <h1 class="text-black text-xl font-bold">Rp. 99.999,00</h1>
                <div class="text-black text-base pb-8 text-left mt-3 flex flex-col items-left justify-left gap-1 -ml-10">
                    <span>Termasuk :</span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#3986A3" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg> <span>Laporan Tertulis</span>
                    </span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#F34949" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                                <path d="m16.192 6.344-4.243 4.242-4.242-4.242-1.414 1.414L10.535 12l-4.242 4.242 1.414 1.414 4.242-4.242 4.243 4.242 1.414-1.414L13.364 12l4.242-4.242z">
                                </path>
                            </svg>

                        </svg> <span>Tes Gaya Belajar</span>
                    </span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#F34949" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                                <path d="m16.192 6.344-4.243 4.242-4.242-4.242-1.414 1.414L10.535 12l-4.242 4.242 1.414 1.414 4.242-4.242 4.243 4.242 1.414-1.414L13.364 12l4.242-4.242z">
                                </path>
                            </svg>
                        </svg> <span>Konseling Hasil Tes</span>
                    </span>
                </div>
                <div class="w-full">
                    <a href="https://bit.ly/DaftarPsikotesBerbinar" cl class="text-base text-white bg-primary-alt rounded-md hover:bg-primary duration-700 px-5 py-2 bottom-7 ">Daftar
                    </a>
                </div>
            </div>
        </div>

        <div class="flex flex-col gap-4 md:mx-0  rounded-xl bg-white border-2 border-gray-300 shadow-md relative pb-4 flex-1 w-full min-w-[300px] md:w-[400px]" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="500">
            <div class="flex flex-col gap-2 text-center items-center px-5 pt-10">
                <h3 class="text-black text-xl font-medium">Paket Lengkap Tes Kepribadian</span></h3>
                <h1 class="text-black text-xl font-bold">Rp. 129.999,00</h1>
                <div class="text-black text-base text-left mt-3 flex flex-col items-left justify-left gap-1 -ml-10">
                    <span>Termasuk :</span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#3986A3" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg> <span>Laporan Tertulis</span>
                    </span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#F34949" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                                <path d="m16.192 6.344-4.243 4.242-4.242-4.242-1.414 1.414L10.535 12l-4.242 4.242 1.414 1.414 4.242-4.242 4.243 4.242 1.414-1.414L13.364 12l4.242-4.242z">
                                </path>
                            </svg>

                        </svg> <span>Tes Gaya Belajar</span>
                    </span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#3986A3" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg> <span>Konseling Hasil Tes</span>
                    </span><br>
                </div>
                <div class="w-full">
                    <a href="https://bit.ly/DaftarPsikotesBerbinar" cl class="text-base text-white bg-primary-alt rounded-md hover:bg-primary duration-700 px-5 py-2 bottom-7 ">Daftar
                    </a>
                </div>
            </div>
        </div>

        <div class="flex flex-col gap-4 md:mx-0  rounded-xl bg-white border-2 border-gray-300 shadow-md relative pb-4 flex-1 w-full min-w-[300px] md:w-[400px]" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="500">
            <div class="flex flex-col gap-2 text-center items-center px-5 pt-10">
                <h3 class="text-black text-xl font-medium py-3">Tes Memori</span></h3>
                <h1 class="text-black text-xl font-bold">Rp. 129.999,00</h1>
                <div class="text-black text-base pb-8 text-left mt-3 flex flex-col items-left justify-left gap-1 -ml-10">
                    <span>Termasuk :</span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#3986A3" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg> <span>Laporan Tertulis</span>
                    </span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#F34949" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                                <path d="m16.192 6.344-4.243 4.242-4.242-4.242-1.414 1.414L10.535 12l-4.242 4.242 1.414 1.414 4.242-4.242 4.243 4.242 1.414-1.414L13.364 12l4.242-4.242z">
                                </path>
                            </svg>

                        </svg> <span>Tes Gaya Belajar</span>
                    </span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#F34949" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                                <path d="m16.192 6.344-4.243 4.242-4.242-4.242-1.414 1.414L10.535 12l-4.242 4.242 1.414 1.414 4.242-4.242 4.243 4.242 1.414-1.414L13.364 12l4.242-4.242z">
                                </path>
                            </svg>
                        </svg> <span>Konseling Hasil Tes</span>
                    </span>
                </div>
                <div class="w-full">
                    <a href="https://bit.ly/DaftarPsikotesBerbinar" cl class="text-base text-white bg-primary-alt rounded-md hover:bg-primary duration-700 px-5 py-2 bottom-7 ">Daftar
                    </a>
                </div>
            </div>
        </div>

        <div class="flex flex-col gap-4 md:mx-0  rounded-xl bg-white border-2 border-gray-300 shadow-md relative pb-4 flex-1 w-full min-w-[300px] md:w-[400px]" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="500">
            <div class="flex flex-col gap-2 text-center items-center px-5 pt-10">
                <h3 class="text-black text-xl font-medium py-3">Tes Paket Mini Penjurusan</span></h3>
                <h1 class="text-black text-xl font-bold">Rp. 255.500,00</h1>
                <div class="text-black text-base pb-8 text-left mt-3 flex flex-col items-left justify-left gap-1 -ml-10">
                    <span>Termasuk :</span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#3986A3" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg> <span>Laporan Tertulis</span>
                    </span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#F34949" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                                <path d="m16.192 6.344-4.243 4.242-4.242-4.242-1.414 1.414L10.535 12l-4.242 4.242 1.414 1.414 4.242-4.242 4.243 4.242 1.414-1.414L13.364 12l4.242-4.242z">
                                </path>
                            </svg>

                        </svg> <span>Tes Gaya Belajar</span>
                    </span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#F34949" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                                <path d="m16.192 6.344-4.243 4.242-4.242-4.242-1.414 1.414L10.535 12l-4.242 4.242 1.414 1.414 4.242-4.242 4.243 4.242 1.414-1.414L13.364 12l4.242-4.242z">
                                </path>
                            </svg>
                        </svg> <span>Konseling Hasil Tes</span>
                    </span>
                </div>
                <div class="w-full">
                    <a href="https://bit.ly/DaftarPsikotesBerbinar" cl class="text-base text-white bg-primary-alt rounded-md hover:bg-primary duration-700 px-5 py-2 bottom-7 ">Daftar
                    </a>
                </div>
            </div>
        </div>

        <div class="flex flex-col gap-4 md:mx-0  rounded-xl bg-white border-2 border-gray-300 shadow-md relative pb-4 flex-1 w-full min-w-[300px] md:w-[400px]" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="500">
            <div class="flex flex-col gap-2 text-center items-center px-5 pt-10">
                <h3 class="text-black text-xl font-medium py-3">Paket Gold Penjurusan</span></h3>
                <h1 class="text-black text-xl font-bold">Rp. 319.000,00</h1>
                <div class="text-black text-base pb-8 text-left mt-3 flex flex-col items-left justify-left gap-1 -ml-10">
                    <span>Termasuk :</span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#3986A3" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg> <span>Laporan Tertulis</span>
                    </span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#F34949" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                                <path d="m16.192 6.344-4.243 4.242-4.242-4.242-1.414 1.414L10.535 12l-4.242 4.242 1.414 1.414 4.242-4.242 4.243 4.242 1.414-1.414L13.364 12l4.242-4.242z">
                                </path>
                            </svg>

                        </svg> <span>Tes Gaya Belajar</span>
                    </span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#F34949" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                                <path d="m16.192 6.344-4.243 4.242-4.242-4.242-1.414 1.414L10.535 12l-4.242 4.242 1.414 1.414 4.242-4.242 4.243 4.242 1.414-1.414L13.364 12l4.242-4.242z">
                                </path>
                            </svg>
                        </svg> <span>Konseling Hasil Tes</span>
                    </span>
                </div>
                <div class="w-full">
                    <a href="https://bit.ly/DaftarPsikotesBerbinar" cl class="text-base text-white bg-primary-alt rounded-md hover:bg-primary duration-700 px-5 py-2 bottom-7 ">Daftar
                    </a>
                </div>
            </div>
        </div>

        <div class="flex flex-col gap-4 md:mx-0  rounded-xl bg-white border-2 border-gray-300 shadow-md relative pb-4 flex-1 w-full min-w-[300px] md:w-[400px]" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="500">
            <div class="flex flex-col gap-2 text-center items-center px-5 pt-10">
                <h3 class="text-black text-xl font-medium py-3">Paket Tahu Bakat Minat</span></h3>
                <h1 class="text-black text-xl font-bold">Rp. 351.000,00</h1>
                <div class="text-black text-base pb-8 text-left mt-3 flex flex-col items-left justify-left gap-1 -ml-10">
                    <span>Termasuk :</span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#3986A3" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg> <span>Laporan Tertulis</span>
                    </span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#3986A3" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg> <span>Tes Gaya Belajar</span>
                    </span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#3986A3" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg> <span>Konseling Hasil Tes</span>
                    </span>
                </div>
                <div class="w-full">
                    <a href="https://bit.ly/DaftarPsikotesBerbinar" cl class="text-base text-white bg-primary-alt rounded-md hover:bg-primary duration-700 px-5 py-2 bottom-7 ">Daftar
                    </a>
                </div>
            </div>
        </div>

        <div class="flex flex-col gap-4 md:mx-0  rounded-xl bg-white border-2 border-gray-300 shadow-md relative pb-4 flex-1 w-full min-w-[300px] md:w-[400px]" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="500">
            <div class="flex flex-col gap-2 text-center items-center px-5 pt-10">
                <h3 class="text-black text-xl font-medium py-3">Paket Lengkap Penjurusan</span></h3>
                <h1 class="text-black text-xl font-bold">Rp. 399.000,00</h1>
                <div class="text-black text-base pb-8 text-left mt-3 flex flex-col items-left justify-left gap-1 -ml-10">
                    <span>Termasuk :</span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#3986A3" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg> <span>Laporan Tertulis</span>
                    </span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#3986A3" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg> <span>Tes Gaya Belajar</span>
                    </span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#3986A3" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg><span>Konseling Hasil Tes</span>
                    </span>
                </div>
                <div class="w-full">
                    <a href="https://bit.ly/DaftarPsikotesBerbinar" cl class="text-base text-white bg-primary-alt rounded-md hover:bg-primary duration-700 px-5 py-2 bottom-7 ">Daftar
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>


{{-- TES PSIKOTEST KOMUNITAS SECTION --}}
<section class="max-w-6xl mx-auto flex flex-col md:flex-row-reverse items-center justify-center relative py-5 px-5 md:px-0 mt-10">
    {{-- TES PSIKOTEST KOMUNITAS IMG MOBILE --}}
    <img src="{{ asset('assets/images/asesmen-komunitas.png') }}" alt="Ilustrasi Tes Psikotest Berbinar" title="Ilustrasi Tes Psikotest Berbinar" class="w-full block md:hidden" data-aos="fade-up" data-aos-duration="1500">

    {{-- TES PSIKOTEST KOMUNITAS IMG DESKTOP --}}
    <img src="{{ asset('assets/images/asesmen-komunitas.png') }}" alt="Ilustrasi Tes Psikotest Berbinar" title="Ilustrasi Tes Psikotest Berbinar" class="w-[45%] hidden md:block" data-aos="fade-right" data-aos-duration="1500">

    {{-- TES PSIKOTEST KOMUNITAS CONTENT --}}
    <div class="relative flex items-center">
        <div class="bg-blur-bg rounded-[700px] blur-[55px] w-[300px] md:w-[600px] h-[250px] md:h-[600px] absolute">
        </div>
        <div class="flex flex-col gap-5 z-40 relative">
            <h2 class="text-black fomt-semibold text-3xl md:px-0">Psikotes Kategori Komunitas
                <!-- Psikotes Individu<span class="text-primary font-bold"> Berbinar</span> -->
            </h2>
            <p class="text-lg text-disabled">Psikotes untuk Komunitas ini bertujuan untuk mengetahui kesiapan
                pernikahan, menjadi orang tua, kecocokan bersama pasangan, tingkat stress, depresi, kecemasan, memori,
                dan dimensia.</p>
            <a href="https://bit.ly/DaftarPsikotesBerbinar" class="text-lg text-white bg-primary-alt rounded-md hover:bg-primary duration-700 px-5 py-2 w-fit">Daftar
                Psikotes Pendidikan Sekarang</a>
        </div>
    </div>


</section>

{{-- PRODUCT SECTION --}}
<section class="max-w-6xl mt-5 mx-5 md:mx-auto flex flex-col gap-10 z-40">
    <div class="flex flex-col gap-1">
        <h1 class="text-black fomt-semibold text-3xl px-5 md:px-0 text-center">
            Psikotest Kategori Komunitas
        </h1>
        <p class="text-lg text-disabled text-center">Pilih tes sesuai dengan kebutuhan anda</p>
    </div>
    <div id="product-list" class="flex flex-col md:flex-row gap-5 md:gap-3 overflow-x-auto" style="padding-bottom: 24px;">
        <div class="flex flex-col gap-4 md:mx-0 rounded-xl bg-white border-2 border-gray-300 shadow-md relative pb-10 flex-1 w-full min-w-[300px] md:w-[400px]" data-aos="fade-right" data-aos-duration="500" data-aos-delay="0">
            <div class="flex flex-col gap-2 text-center items-center px-5 pt-10">
                <h3 class="text-black text-xl font-medium py-3">Tes Kesiapan Pernikahan</h3>
                <h1 class="text-black text-xl font-bold">Rp. 299.999,00</h1>
                <div class="text-disabled text-base pb-8 text-left mt-3 flex flex-col items-left justify-left gap-1 -ml-10">
                    <span>Termasuk :</span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#3986A3" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg> <span>Laporan Tertulis</span>
                    </span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#3986A3" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg> <span>Konseling Hasil Tes</span>
                    </span>
                </div>
                <div class="w-full">
                    <a href="https://bit.ly/DaftarPsikotesBerbinar" cl class="text-base text-white bg-primary-alt rounded-md hover:bg-primary duration-700 px-5 py-2 bottom-7 ">Daftar
                    </a>
                </div>
            </div>
        </div>

        <div class="flex flex-col gap-4 md:mx-0  rounded-xl bg-white border-2 border-gray-300 shadow-md relative pb-4 flex-1 w-full min-w-[300px] md:w-[400px]" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="500">
            <div class="flex flex-col gap-2 text-center items-center px-5 pt-10">
                <h3 class="text-black text-xl font-medium">Tes Kesiapan Menjadi Orang Tua</span></h3>
                <h1 class="text-black text-xl font-bold">Rp. 299.999,00</h1>
                <div class="text-black text-base pb-8 text-left mt-3 flex flex-col items-left justify-left gap-1 -ml-10">
                    <span>Termasuk :</span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#3986A3" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg> <span>Laporan Tertulis</span>
                    </span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#3986A3" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg> <span>Konseling Hasil Tes</span>
                    </span>
                </div>
                <div class="w-full">
                    <a href="https://bit.ly/DaftarPsikotesBerbinar" cl class="text-base text-white bg-primary-alt rounded-md hover:bg-primary duration-700 px-5 py-2 bottom-7 ">Daftar
                    </a>
                </div>
            </div>
        </div>

        <div class="flex flex-col gap-4 md:mx-0  rounded-xl bg-white border-2 border-gray-300 shadow-md relative pb-4 flex-1 w-full min-w-[300px] md:w-[400px]" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="500">
            <div class="flex flex-col gap-2 text-center items-center px-5 pt-10">
                <h3 class="text-black text-xl font-medium py-3">Tes Kecocokan Pasangan</span></h3>
                <h1 class="text-black text-xl font-bold">Rp. 299.999,00</h1>
                <div class="text-black text-base pb-8 text-left mt-3 flex flex-col items-left justify-left gap-1 -ml-10">
                    <span>Termasuk :</span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#3986A3" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg> <span>Laporan Tertulis</span>
                    </span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#3986A3" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg> <span>Konseling Hasil Tes</span>
                    </span>
                </div>
                <div class="w-full">
                    <a href="https://bit.ly/DaftarPsikotesBerbinar" cl class="text-base text-white bg-primary-alt rounded-md hover:bg-primary duration-700 px-5 py-2 bottom-7 ">Daftar
                    </a>
                </div>
            </div>
        </div>

        <div class="flex flex-col gap-4 md:mx-0  rounded-xl bg-white border-2 border-gray-300 shadow-md relative pb-4 flex-1 w-full min-w-[300px] md:w-[400px]" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="500">
            <div class="flex flex-col gap-2 text-center items-center px-5 pt-10">
                <h3 class="text-black text-xl font-medium py-3">Tes Stress</span></h3>
                <h1 class="text-black text-xl font-bold">Rp. 159.000,00</h1>
                <div class="text-black text-base pb-8 text-left mt-3 flex flex-col items-left justify-left gap-1 -ml-10">
                    <span>Termasuk :</span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#3986A3" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg> <span>Laporan Tertulis</span>
                    </span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#3986A3" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg> <span>Konseling Hasil Tes</span>
                    </span>
                </div>
                <div class="w-full">
                    <a href="https://bit.ly/DaftarPsikotesBerbinar" cl class="text-base text-white bg-primary-alt rounded-md hover:bg-primary duration-700 px-5 py-2 bottom-7 ">Daftar
                    </a>
                </div>
            </div>
        </div>

        <div class="flex flex-col gap-4 md:mx-0  rounded-xl bg-white border-2 border-gray-300 shadow-md relative pb-4 flex-1 w-full min-w-[300px] md:w-[400px]" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="500">
            <div class="flex flex-col gap-2 text-center items-center px-5 pt-10">
                <h3 class="text-black text-xl font-medium py-3">Tes Depresi</span></h3>
                <h1 class="text-black text-xl font-bold">Rp. 159.000,00</h1>
                <div class="text-black text-base pb-8 text-left mt-3 flex flex-col items-left justify-left gap-1 -ml-10">
                    <span>Termasuk :</span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#3986A3" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg> <span>Laporan Tertulis</span>
                    </span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#3986A3" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg> <span>Konseling Hasil Tes</span>
                    </span>
                </div>
                <div class="w-full">
                    <a href="https://bit.ly/DaftarPsikotesBerbinar" cl class="text-base text-white bg-primary-alt rounded-md hover:bg-primary duration-700 px-5 py-2 bottom-7 ">Daftar
                    </a>
                </div>
            </div>
        </div>

        <div class="flex flex-col gap-4 md:mx-0  rounded-xl bg-white border-2 border-gray-300 shadow-md relative pb-4 flex-1 w-full min-w-[300px] md:w-[400px]" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="500">
            <div class="flex flex-col gap-2 text-center items-center px-5 pt-10">
                <h3 class="text-black text-xl font-medium py-3">Tes Kecemasan</span></h3>
                <h1 class="text-black text-xl font-bold">Rp. 159.000,00</h1>
                <div class="text-black text-base pb-8 text-left mt-3 flex flex-col items-left justify-left gap-1 -ml-10">
                    <span>Termasuk :</span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#3986A3" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg> <span>Laporan Tertulis</span>
                    </span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#3986A3" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg> <span>Konseling Hasil Tes</span>
                    </span>
                </div>
                <div class="w-full">
                    <a href="https://bit.ly/DaftarPsikotesBerbinar" cl class="text-base text-white bg-primary-alt rounded-md hover:bg-primary duration-700 px-5 py-2 bottom-7 ">Daftar
                    </a>
                </div>
            </div>
        </div>

        <div class="flex flex-col gap-4 md:mx-0  rounded-xl bg-white border-2 border-gray-300 shadow-md relative pb-4 flex-1 w-full min-w-[300px] md:w-[400px]" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="500">
            <div class="flex flex-col gap-2 text-center items-center px-5 pt-10">
                <h3 class="text-black text-xl font-medium py-3">Tes Kecemasan+</span></h3>
                <h1 class="text-black text-xl font-bold">Rp. 299.000,00</h1>
                <div class="text-black text-base pb-8 text-left mt-3 flex flex-col items-left justify-left gap-1 -ml-10">
                    <span>Termasuk :</span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#3986A3" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg> <span>Laporan Tertulis</span>
                    </span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#3986A3" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg> <span>Konseling Hasil Tes</span>
                    </span>
                </div>
                <div class="w-full">
                    <a href="https://bit.ly/DaftarPsikotesBerbinar" cl class="text-base text-white bg-primary-alt rounded-md hover:bg-primary duration-700 px-5 py-2 bottom-7 ">Daftar
                    </a>
                </div>
            </div>
        </div>

        <div class="flex flex-col gap-4 md:mx-0  rounded-xl bg-white border-2 border-gray-300 shadow-md relative pb-4 flex-1 w-full min-w-[300px] md:w-[400px]" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="500">
            <div class="flex flex-col gap-2 text-center items-center px-5 pt-10">
                <h3 class="text-black text-xl font-medium py-3">Tes Fungsi Kognitif</span></h3>
                <h1 class="text-black text-xl font-bold">Rp. 129.999,00</h1>
                <div class="text-black text-base pb-8 text-left mt-3 flex flex-col items-left justify-left gap-1 -ml-10">
                    <span>Termasuk :</span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#3986A3" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg> <span>Laporan Tertulis</span>
                    </span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#F34949" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                                <path d="m16.192 6.344-4.243 4.242-4.242-4.242-1.414 1.414L10.535 12l-4.242 4.242 1.414 1.414 4.242-4.242 4.243 4.242 1.414-1.414L13.364 12l4.242-4.242z">
                                </path>
                            </svg>

                        </svg> <span>Konseling Hasil Tes</span>
                    </span>
                </div>
                <div class="w-full">
                    <a href="https://bit.ly/DaftarPsikotesBerbinar" cl class="text-base text-white bg-primary-alt rounded-md hover:bg-primary duration-700 px-5 py-2 bottom-7 ">Daftar
                    </a>
                </div>
            </div>
        </div>

        <div class="flex flex-col gap-4 md:mx-0 rounded-xl bg-white border-2 border-gray-300 shadow-md relative pb-10 flex-1 w-full min-w-[300px] md:w-[400px]" data-aos="fade-right" data-aos-duration="500" data-aos-delay="0">
            <div class="flex flex-col gap-2 text-center items-center px-5 pt-10">
                <h3 class="text-black text-xl font-medium py-3">Tes Memori</h3>
                <h1 class="text-black text-xl font-bold">Rp. 129.999,00</h1>
                <div class="text-disabled text-base pb-8 text-left mt-3 flex flex-col items-left justify-left gap-1 -ml-10">
                    <span>Termasuk :</span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#3986A3" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg> <span>Laporan Tertulis</span>
                    </span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#F34949" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                                <path d="m16.192 6.344-4.243 4.242-4.242-4.242-1.414 1.414L10.535 12l-4.242 4.242 1.414 1.414 4.242-4.242 4.243 4.242 1.414-1.414L13.364 12l4.242-4.242z">
                                </path>
                            </svg>

                        </svg> <span>Konseling Hasil Tes</span>
                    </span>
                </div>
                <div class="w-full">
                    <a href="https://bit.ly/DaftarPsikotesBerbinar" cl class="text-base text-white bg-primary-alt rounded-md hover:bg-primary duration-700 px-5 py-2 bottom-7 ">Daftar
                    </a>
                </div>
            </div>
        </div>

        <div class="flex flex-col gap-4 md:mx-0  rounded-xl bg-white border-2 border-gray-300 shadow-md relative pb-4 flex-1 w-full min-w-[300px] md:w-[400px]" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="500">
            <div class="flex flex-col gap-2 text-center items-center px-5 pt-10">
                <h3 class="text-black text-xl font-medium py-3">Tes Dimensia</span></h3>
                <h1 class="text-black text-xl font-bold">Rp. 199.999,00</h1>
                <div class="text-black text-base pb-8 text-left mt-3 flex flex-col items-left justify-left gap-1 -ml-10">
                    <span>Termasuk :</span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#3986A3" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg> <span>Laporan Tertulis</span>
                    </span><br>
                    <span class="flex flex-row gap-1 -mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <path d="M13 26C20.1799 26 26 20.1799 26 13C26 5.8201 20.1799 0 13 0C5.8201 0 0 5.8201 0 13C0 20.1799 5.8201 26 13 26Z" fill="#F34949" />
                            <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                                <path d="m16.192 6.344-4.243 4.242-4.242-4.242-1.414 1.414L10.535 12l-4.242 4.242 1.414 1.414 4.242-4.242 4.243 4.242 1.414-1.414L13.364 12l4.242-4.242z">
                                </path>
                            </svg>

                        </svg> <span>Konseling Hasil Tes</span>
                    </span>
                </div>
                <div class="w-full">
                    <a href="https://bit.ly/DaftarPsikotesBerbinar" cl class="text-base text-white bg-primary-alt rounded-md hover:bg-primary duration-700 px-5 py-2 bottom-7 ">Daftar
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>


{{-- DOCUMENTATION SECTION --}}

<section class="max-w-6xl mx-5 md:mx-auto flex flex-col gap-10 z-40 mt-20">
    <div class="flex flex-col gap-1">
        <h1 class="text-black fomt-semibold text-3xl px-5 md:px-0 text-center">
            Dokumentasi
        </h1>

        <p class="text-lg text-disabled text-center">Berikut beberapa dokumentasi dari psikotes yang telah
            kami lakukan</p>
    </div>
    <div class="flex flex-col md:flex-row md:flex-wrap gap-5 md:gap-3 w-full items-center justify-center">
        <img src="{{ asset('assets/images/documentation/ap1.png') }}" alt="Dokumentasi Tes Psikotest" class="w-[350px] rounded-lg object-cover h-[300px]">
        <img src="{{ asset('assets/images/documentation/ap2.png') }}" alt="Dokumentasi Tes Psikotest" class="w-[350px] rounded-lg object-cover h-[300px]">
        <img src="{{ asset('assets/images/documentation/ap3.png') }}" alt="Dokumentasi Tes Psikotest" class="w-[350px] rounded-lg object-cover h-[300px]">
        <img src="{{ asset('assets/images/documentation/online-ap1-new.jpg') }}" alt="Dokumentasi Tes Psikotest" class="w-[350px] rounded-lg object-cover h-[300px]">
        <img src="{{ asset('assets/images/documentation/online-ap2-new.jpg') }}" alt="Dokumentasi Tes Psikotest" class="w-[350px] rounded-lg object-cover h-[300px]">
        <img src="{{ asset('assets/images/documentation/online-ap4.jpeg') }}" alt="Dokumentasi Tes Psikotest" class="w-[350px] rounded-lg object-cover h-[300px]">
    </div>
</section>

{{-- FAQ SECTION --}}
<section class="max-w-6xl mt-14 z-40 mx-5 md:mx-auto">
    <ul class="flex flex-col">
        @php
        $index = 0;
        @endphp
        @foreach ($faqs as $faq)
        <li class="border bg-white py-2 shadow-sm rounded-lg my-2" x-data="accordion({{ $index }})">
            <h2 @click="handleClick()" class="flex flex-row justify-between items-center font-medium p-3 cursor-pointer text-lg">
                <span>{{ $faq['question'] }}</span>
                <svg :class="handleRotate()" class="fill-[#3986a3] text-[#3986a3] h-6 w-6 transform transition-transform duration-500" viewBox="0 0 20 20">
                    <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                    </path>
                </svg>
            </h2>
            <div x-ref="tab" :style="handleToggle()" class="border-l-2 border-[#3986a3] overflow-hidden max-h-0 duration-500 transition-all">
                <p class="p-3 text-gray-900">
                    {{ $faq['answer'] }}
                </p>
            </div>
        </li>
        @php
        $index++;
        @endphp
        @endforeach
    </ul>
</section>

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
            }
        }));
    })
</script>
@endsection