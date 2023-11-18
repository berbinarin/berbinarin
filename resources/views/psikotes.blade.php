@extends('layouts.main', [
    'title' => 'Asesmen Psikologi | Berbinar Insightful Indonesia',
    'active' => 'Produk Berbinar',
    'page' => 'Psikotes',
])

@section('content')
<!--========== HOME ==========-->
<section class="w-full mt-[20vh] mb-[6rem]" id="home">
    <div class="max-w-7xl mx-auto">
        <div class="home__data flex flex-col items-center">
            <div class="mb-12">
                <h1 class="about__title text-center">Asesmen Psikologi</h1>
                <div class="share__img flex-2 mx-auto w-full flex items-center justify-center">
                    <img src="{{ asset('assets/images/asesmen-psikologi.svg') }}" alt="" class="md:w-[25rem] w-[20rem]">
                </div>
            </div>
            
            <p class="home__description md:w-[70%] w-[92%] text-center">
                Asesmen psikologi berbinar Insightful Indonesia merupakan solusi unggul untuk perusahaan dan individu dalam pengembangan karier dan penilaian potensi. Memberikan wawasan mendalam tentang kepribadian, keterampilan, dan kemampuan, untuk membantu pengambilan keputusan yang tepat dalam mengoptimalkan potensi karier.
            </p>

            <a href="https://bit.ly/DaftarPsikotesBerbinar" class="button">Lakukan Asesmen Psikologi</a>
        </div>   
    </div>
</section>

<!--========== SHARE ==========-->
<section class="share section bd-container mb-16" id="share">
    <div class="share__container bd-grid">
        <div class="share__data">
            <h2 class="section-title-center font-semibold">Asesmen Psikologi<br> Individu</h2>
            <div class="share__img md:hidden block my-6 mx-auto">
                <img src="{{ asset('assets/images/psikotes/individu-asesmen.svg') }}" alt="" class="md:w-[25rem] w-[20rem]">
            </div>
            <p class="share__description">Assessmen psikologi individu dapat memprediksi potensi yang dimiliki dalam kaitannya dengan pencapaian hasil belajar atau kemampuan di masa yang akan datang.</p>
            <a href="https://bit.ly/DaftarPsikotesBerbinar" class="button">Lakukan Asesmen Individu</a>
        </div>

        <div class="share__img md:block hidden">
            <img src="{{ asset('assets/images/psikotes/individu-asesmen.svg') }}" alt="" class="md:w-[25rem] w-[20rem]">
        </div>
    </div>
</section>

<section class="">
    <div class="container px-6 py-8 mx-auto">
        <p class="text-base text-center">
            Pilihan Jenis Tes
        </p>

        <h1 class="mt-2 text-[1.25rem] font-semibold text-center capitalize lg:text-3xl">Asesmen Psikologi Individu</h1>

        <div class="mt-3 space-y-8 xl:mt-8">
            <div class="flex items-center justify-between max-w-2xl px-10 py-6 mx-auto border cursor-pointer rounded-xl dark:border-gray-700">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400 sm:h-9 sm:w-9" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                    </svg>

                    <div class="flex flex-col items-start mx-5 space-y-1">
                        <h2 class="text-lg font-medium sm:text-[1.2rem]">Bakat Minat</h2>
                        <div class="flex md:flex-row flex-col gap-2">
                            <div class="px-2 text-xs text-[#3986a3] bg-gray-100 md:rounded-full rounded-lg sm:px-4 md:py-1 py-2">
                                Pelajar & Mahasiswa
                            </div>
                            
                            <div class="px-2 text-xs text-[#3986a3] bg-gray-100 md:rounded-full rounded-lg sm:px-4 md:py-1 py-2">
                                Laporan Tertulis
                            </div>
                        </div>
                    </div>
                </div>

                <h2 class="text-2xl font-semibold sm:text-3xl">IDR 250k <span class="text-base font-medium"></span></h2>
            </div>

            <div class="flex items-center justify-between max-w-2xl px-10 py-6 mx-auto border border-[#3986a3] cursor-pointer rounded-xl">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#3986a3] sm:h-9 sm:w-9" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                    </svg>

                    <div class="flex flex-col items-start mx-5 space-y-1">
                        <h2 class="text-lg font-medium sm:text-[1.2rem]">Bakat Minat</h2>
                        <div class="flex gap-2">
                            <div class="px-2 text-xs text-[#3986a3] bg-gray-100 md:rounded-full rounded-lg sm:px-4 md:py-1 py-2">
                                Pelajar & Mahasiswa
                            </div>
                            
                            <div class="px-2 text-xs text-[#3986a3] bg-gray-100 md:rounded-full rounded-lg sm:px-4 md:py-1 py-2">
                                Laporan Tertulis, Konseling
                            </div>
                        </div>
                    </div>
                </div>

                <h2 class="text-2xl font-semibold text-[#3986a3] sm:text-3xl">IDR 350k <span class="text-base font-medium"></span></h2>
            </div>

            <div class="flex items-center justify-between max-w-2xl px-10 py-6 mx-auto border cursor-pointer rounded-xl dark:border-gray-700">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400 sm:h-9 sm:w-9" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                    </svg>

                    <div class="flex flex-col items-start mx-5 space-y-1">
                        <h2 class="text-lg font-medium sm:text-[1.2rem]">Intelegensi</h2>
                        <div class="px-2 text-xs text-[#3986a3] bg-gray-100 rounded-full sm:px-4 sm:py-1">
                            Laporan Tertulis
                        </div>
                    </div>
                </div>

                <h2 class="text-2xl font-semibold sm:text-3xl">IDR 125k <span class="text-base font-medium"></span></h2>
            </div>

        </div>
    </div>
</section>

<section class="share section bd-container mb-16" id="share">
    <div class="share__container bd-grid">
        <div class="share__img md:block hidden" style="order: 2;">
            <img src="{{ asset('assets/images/psikotes/company-asesmen.svg') }}" alt="" class="md:w-[25rem] w-[20rem]">
        </div>

        <div class="share__data">
            <h2 class="section-title-center font-semibold">Asesmen Psikologi<br> Perusahaan</h2>
            <div class="share__img md:hidden block mx-auto my-6" style="order: 2;">
                <img src="{{ asset('assets/images/psikotes/company-asesmen.svg') }}" alt="" class="md:w-[25rem] w-[20rem]">
            </div>
            <p class="share__description">Assesmen Psikologi untuk Perusahaan digunakan untuk melihat potensi, kelebihan dan kekurangan, serta kecenderungan kepribadian seorang kandidat dan melihat apakah kandidat tersebut cocok ditempatkan di suatu posisi pekerjaan.</p>
            <a href="https://bit.ly/DaftarPsikotesBerbinar" class="button">Lakukan Asesmen Perusahaan</a>
        </div>
    </div>
</section>

<div class="swiper mySwiperAsesmen md:-mt-10 mx-auto">
    <div class="swiper-wrapper">
        <div class="swiper-slide asesmen relative">
            <img src="{{ asset('assets/images/psikotes/ap2.png') }}" title="Slider's Image" alt="Slider's Image" class="-z-50 absolute" />
        </div>
        <div class="swiper-slide asesmen relative">
            <img src="{{ asset('assets/images/psikotes/ap1.png') }}" title="Slider's Image" alt="Slider's Image" class="-z-50 absolute" />
        </div>
        <div class="swiper-slide asesmen relative">
            <img src="{{ asset('assets/images/psikotes/ap3.png') }}" title="Slider's Image" alt="Slider's Image" class="-z-50 absolute" />
        </div>
        <div class="swiper-slide asesmen relative">
            <img src="{{ asset('assets/images/psikotes/ap4.png') }}" title="Slider's Image" alt="Slider's Image" class="-z-50 absolute" />
        </div>
        <div class="swiper-slide asesmen relative">
            <img src="{{ asset('assets/images/psikotes/online-ap1.jpeg') }}" title="Slider's Image" alt="Slider's Image" class="-z-50 absolute" />
        </div>
        <div class="swiper-slide asesmen relative">
            <img src="{{ asset('assets/images/psikotes/online-ap2.jpeg') }}" title="Slider's Image" alt="Slider's Image" class="-z-50 absolute" />
        </div>
        <div class="swiper-slide asesmen relative">
            <img src="{{ asset('assets/images/psikotes/online-ap3.jpeg') }}" title="Slider's Image" alt="Slider's Image" class="-z-50 absolute" />
        </div>
        <div class="swiper-slide asesmen relative">
            <img src="{{ asset('assets/images/psikotes/online-ap4.jpeg') }}" title="Slider's Image" alt="Slider's Image" class="-z-50 absolute" />
        </div>
    </div>
    <div class="swiper-pagination"></div>
</div>

<section class="">
    <div class="container px-6 py-8 mx-auto">
        <div class="flex xl:items-center flex-col xl:-mx-8 xl:flex mx-auto items-center justify-center">

            <p class="text-base text-center">
                Pilihan Jenis Tes
            </p>
    
            <h1 class="mt-2 text-[1.25rem] font-semibold text-center capitalize lg:text-3xl md:mb-10">Asesmen Psikologi Perusahaan</h1>

            <div class="flex-1 xl:mx-8 swiper mySwiper max-w-7xl md:w-full w-full mx-auto flex items-center justify-center">
                <div class="swiper-wrapper mt-8 space-y-8 md:-mx-4 md:flex md:items-center md:justify-center md:space-y-0 xl:mt-0">
                    <div class="max-w-sm w-full md:block hidden mx-auto border swiper-slide flex flex-col rounded-lg md:mx-4 dark:border-gray-700">
                        <div class="p-6">
                            <h1 class="text-xl font-semibold capitalize lg:text-2xl">Staf</h1>

                            <p class="mt-4">
                                Asesmen psikologi staff: Membantu identifikasi potensi dan pengembangan keterampilan karyawan
                            </p>

                            <h2 class="mt-4 text-2xl font-semibold sm:text-3xl">IDR 450000 <span class="text-base font-medium"></span></h2>

                            <a href="https://bit.ly/DaftarPsikotesBerbinar" class="text-center w-full px-4 block py-2 mt-6 tracking-wide text-white capitalize transition-colors duration-300 transform bg-[#3986a3] rounded-md hover:bg-blue-500 focus:outline-none focus:bg-blue-500 focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                                Lakukan Asesmen Perusahaan
                            </a>
                        </div>

                        <hr class="border-gray-200 dark:border-gray-700">

                        <div class="p-6">
                            <h1 class="text-lg font-medium capitalize lg:text-xl">What’s included:</h1>

                            <div class="mt-8 space-y-4">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#3986a3]" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>

                                    <span class="mx-4">Tes Intelegensi</span>
                                </div>

                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#3986a3]" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>

                                    <span class="mx-4">Tes Sikap Kerja</span>
                                </div>

                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#3986a3]" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>

                                    <span class="mx-4">Tes Kepribadian</span>
                                </div>

                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#3986a3]" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>

                                    <span class="mx-4">Focus Group Discussion</span>
                                </div>

                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-red-400" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M13.477 14.89A6 6 0 015.11 6.524l8.367 8.368zm1.414-1.414L6.524 5.11a6 6 0 018.367 8.367zM18 10a8 8 0 11-16 0 8 8 0 0116 0z" clip-rule="evenodd" />
                                    </svg>

                                    <span class="mx-4">Wawancara</span>
                                </div>

                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-red-400" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M13.477 14.89A6 6 0 015.11 6.524l8.367 8.368zm1.414-1.414L6.524 5.11a6 6 0 018.367 8.367zM18 10a8 8 0 11-16 0 8 8 0 0116 0z" clip-rule="evenodd" />
                                    </svg>

                                    <span class="mx-4">Psikogram</span>
                                </div>

                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-9 h-9 text-red-400" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M13.477 14.89A6 6 0 015.11 6.524l8.367 8.368zm1.414-1.414L6.524 5.11a6 6 0 018.367 8.367zM18 10a8 8 0 11-16 0 8 8 0 0116 0z" clip-rule="evenodd" />
                                    </svg>

                                    <span class="mx-4">Deskripsi Karakteristik Khas Kelemahan & Kelebihan, Rekomendasi</span>
                                </div>

                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-red-400" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M13.477 14.89A6 6 0 015.11 6.524l8.367 8.368zm1.414-1.414L6.524 5.11a6 6 0 018.367 8.367zM18 10a8 8 0 11-16 0 8 8 0 0116 0z" clip-rule="evenodd" />
                                    </svg>

                                    <span class="mx-4">Proyeksi Pengembangan</span>
                                </div>

                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-red-400" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M13.477 14.89A6 6 0 015.11 6.524l8.367 8.368zm1.414-1.414L6.524 5.11a6 6 0 018.367 8.367zM18 10a8 8 0 11-16 0 8 8 0 0116 0z" clip-rule="evenodd" />
                                    </svg>

                                    <span class="mx-4">Saran Pengembangan</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="max-w-sm w-full mx-auto border swiper-slide w-full flex flex-col rounded-lg md:mx-4 dark:border-gray-700">
                        <div class="p-6">
                            <h1 class="text-xl font-semibold capitalize lg:text-2xl">Staf</h1>

                            <p class="mt-4">
                                Asesmen psikologi staff: Membantu identifikasi potensi dan pengembangan keterampilan karyawan
                            </p>

                            <h2 class="mt-4 text-2xl font-semibold sm:text-3xl">IDR 450000 <span class="text-base font-medium"></span></h2>


                            <a href="https://bit.ly/DaftarPsikotesBerbinar" class="text-center w-full px-4 block py-2 mt-6 tracking-wide text-white capitalize transition-colors duration-300 transform bg-[#3986a3] rounded-md hover:bg-blue-500 focus:outline-none focus:bg-blue-500 focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                                Lakukan Asesmen Perusahaan
                            </a>
                        </div>

                        <hr class="border-gray-200 dark:border-gray-700">

                        <div class="p-6">
                            <h1 class="text-lg font-medium capitalize lg:text-xl">What’s included:</h1>

                            <div class="mt-8 space-y-4">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#3986a3]" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>

                                    <span class="mx-4">Tes Intelegensi</span>
                                </div>

                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#3986a3]" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>

                                    <span class="mx-4">Tes Sikap Kerja</span>
                                </div>

                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#3986a3]" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>

                                    <span class="mx-4">Tes Kepribadian</span>
                                </div>

                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#3986a3]" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>

                                    <span class="mx-4">Focus Group Discussion</span>
                                </div>

                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-red-400" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M13.477 14.89A6 6 0 015.11 6.524l8.367 8.368zm1.414-1.414L6.524 5.11a6 6 0 018.367 8.367zM18 10a8 8 0 11-16 0 8 8 0 0116 0z" clip-rule="evenodd" />
                                    </svg>

                                    <span class="mx-4">Wawancara</span>
                                </div>

                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#3986a3]" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>

                                    <span class="mx-4">Psikogram</span>
                                </div>

                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-[#3986a3]" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>

                                    <span class="mx-4">Deskripsi Karakteristik Khas Kelemahan & Kelebihan, Rekomendasi</span>
                                </div>

                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-red-400" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M13.477 14.89A6 6 0 015.11 6.524l8.367 8.368zm1.414-1.414L6.524 5.11a6 6 0 018.367 8.367zM18 10a8 8 0 11-16 0 8 8 0 0116 0z" clip-rule="evenodd" />
                                    </svg>

                                    <span class="mx-4">Proyeksi Pengembangan</span>
                                </div>

                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-red-400" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M13.477 14.89A6 6 0 015.11 6.524l8.367 8.368zm1.414-1.414L6.524 5.11a6 6 0 018.367 8.367zM18 10a8 8 0 11-16 0 8 8 0 0116 0z" clip-rule="evenodd" />
                                    </svg>

                                    <span class="mx-4">Saran Pengembangan</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="max-w-sm w-full mx-auto border swiper-slide w-full flex flex-col rounded-lg md:mx-4 dark:border-gray-700">
                        <div class="p-6">
                            <h1 class="text-xl font-semibold capitalize lg:text-2xl">Staf</h1>

                            <p class="mt-4">
                                Asesmen psikologi staff: Membantu identifikasi potensi dan pengembangan keterampilan karyawan
                            </p>

                            <h2 class="mt-4 text-2xl font-semibold sm:text-3xl">IDR 600000 <span class="text-base font-medium"></span></h2>


                            <a href="https://bit.ly/DaftarPsikotesBerbinar" class="text-center w-full px-4 block py-2 mt-6 tracking-wide text-white capitalize transition-colors duration-300 transform bg-[#3986a3] rounded-md hover:bg-blue-500 focus:outline-none focus:bg-blue-500 focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                                Lakukan Asesmen Perusahaan
                            </a>
                        </div>

                        <hr class="border-gray-200 dark:border-gray-700">

                        <div class="p-6">
                            <h1 class="text-lg font-medium capitalize lg:text-xl">What’s included:</h1>

                            <div class="mt-8 space-y-4">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#3986a3]" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>

                                    <span class="mx-4">Tes Intelegensi</span>
                                </div>

                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#3986a3]" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>

                                    <span class="mx-4">Tes Sikap Kerja</span>
                                </div>

                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#3986a3]" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>

                                    <span class="mx-4">Tes Kepribadian</span>
                                </div>

                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#3986a3]" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>

                                    <span class="mx-4">Focus Group Discussion</span>
                                </div>

                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-red-400" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M13.477 14.89A6 6 0 015.11 6.524l8.367 8.368zm1.414-1.414L6.524 5.11a6 6 0 018.367 8.367zM18 10a8 8 0 11-16 0 8 8 0 0116 0z" clip-rule="evenodd" />
                                    </svg>

                                    <span class="mx-4">Wawancara</span>
                                </div>

                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#3986a3]" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>

                                    <span class="mx-4">Psikogram</span>
                                </div>

                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-[#3986a3]" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>

                                    <span class="mx-4">Deskripsi Karakteristik Khas Kelemahan & Kelebihan, Rekomendasi</span>
                                </div>

                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#3986a3]" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>

                                    <span class="mx-4">Proyeksi Pengembangan</span>
                                </div>

                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#3986a3]" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>

                                    <span class="mx-4">Saran Pengembangan</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="max-w-sm w-full mx-auto border swiper-slide w-full flex flex-col rounded-lg md:mx-4 dark:border-gray-700">
                        <div class="p-6">
                            <h1 class="text-xl font-semibold capitalize lg:text-2xl">Staf</h1>

                            <p class="mt-4">
                                Asesmen psikologi staff: Membantu identifikasi potensi dan pengembangan keterampilan karyawan
                            </p>

                            <h2 class="mt-4 text-2xl font-semibold sm:text-3xl">IDR 550000 <span class="text-base font-medium"></span></h2>


                            <a href="https://bit.ly/DaftarPsikotesBerbinar" class="text-center w-full px-4 block py-2 mt-6 tracking-wide text-white capitalize transition-colors duration-300 transform bg-[#3986a3] rounded-md hover:bg-blue-500 focus:outline-none focus:bg-blue-500 focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                                Lakukan Asesmen Perusahaan
                            </a>
                        </div>

                        <hr class="border-gray-200 dark:border-gray-700">

                        <div class="p-6">
                            <h1 class="text-lg font-medium capitalize lg:text-xl">What’s included:</h1>

                            <div class="mt-8 space-y-4">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#3986a3]" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>

                                    <span class="mx-4">Tes Intelegensi</span>
                                </div>

                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#3986a3]" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>

                                    <span class="mx-4">Tes Sikap Kerja</span>
                                </div>

                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#3986a3]" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>

                                    <span class="mx-4">Tes Kepribadian</span>
                                </div>

                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-red-400" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M13.477 14.89A6 6 0 015.11 6.524l8.367 8.368zm1.414-1.414L6.524 5.11a6 6 0 018.367 8.367zM18 10a8 8 0 11-16 0 8 8 0 0116 0z" clip-rule="evenodd" />
                                    </svg>

                                    <span class="mx-4">Focus Group Discussion</span>
                                </div>

                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#3986a3]" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>

                                    <span class="mx-4">Wawancara</span>
                                </div>

                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#3986a3]" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>

                                    <span class="mx-4">Psikogram</span>
                                </div>

                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-[#3986a3]" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>

                                    <span class="mx-4">Deskripsi Karakteristik Khas Kelemahan & Kelebihan, Rekomendasi</span>
                                </div>

                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-red-400" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M13.477 14.89A6 6 0 015.11 6.524l8.367 8.368zm1.414-1.414L6.524 5.11a6 6 0 018.367 8.367zM18 10a8 8 0 11-16 0 8 8 0 0116 0z" clip-rule="evenodd" />
                                    </svg>

                                    <span class="mx-4">Proyeksi Pengembangan</span>
                                </div>

                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-red-400" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M13.477 14.89A6 6 0 015.11 6.524l8.367 8.368zm1.414-1.414L6.524 5.11a6 6 0 018.367 8.367zM18 10a8 8 0 11-16 0 8 8 0 0116 0z" clip-rule="evenodd" />
                                    </svg>

                                    <span class="mx-4">Saran Pengembangan</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="max-w-sm w-full mx-auto border swiper-slide w-full flex flex-col rounded-lg md:mx-4 dark:border-gray-700">
                        <div class="p-6">
                            <h1 class="text-xl font-semibold capitalize lg:text-2xl">Staf</h1>

                            <p class="mt-4">
                                Asesmen psikologi staff: Membantu identifikasi potensi dan pengembangan keterampilan karyawan
                            </p>

                            <h2 class="mt-4 text-2xl font-semibold sm:text-3xl">IDR 750000 <span class="text-base font-medium"></span></h2>


                            <a href="https://bit.ly/DaftarPsikotesBerbinar" class="text-center w-full px-4 block py-2 mt-6 tracking-wide text-white capitalize transition-colors duration-300 transform bg-[#3986a3] rounded-md hover:bg-blue-500 focus:outline-none focus:bg-blue-500 focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                                Lakukan Asesmen Perusahaan
                            </a>
                        </div>

                        <hr class="border-gray-200 dark:border-gray-700">

                        <div class="p-6">
                            <h1 class="text-lg font-medium capitalize lg:text-xl">What’s included:</h1>

                            <div class="mt-8 space-y-4">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#3986a3]" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>

                                    <span class="mx-4">Tes Intelegensi</span>
                                </div>

                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#3986a3]" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>

                                    <span class="mx-4">Tes Sikap Kerja</span>
                                </div>

                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#3986a3]" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>

                                    <span class="mx-4">Tes Kepribadian</span>
                                </div>

                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-red-400" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M13.477 14.89A6 6 0 015.11 6.524l8.367 8.368zm1.414-1.414L6.524 5.11a6 6 0 018.367 8.367zM18 10a8 8 0 11-16 0 8 8 0 0116 0z" clip-rule="evenodd" />
                                    </svg>

                                    <span class="mx-4">Focus Group Discussion</span>
                                </div>

                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#3986a3]" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>

                                    <span class="mx-4">Wawancara</span>
                                </div>

                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#3986a3]" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>

                                    <span class="mx-4">Psikogram</span>
                                </div>

                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-[#3986a3]" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>

                                    <span class="mx-4">Deskripsi Karakteristik Khas Kelemahan & Kelebihan, Rekomendasi</span>
                                </div>

                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#3986a3]" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>

                                    <span class="mx-4">Proyeksi Pengembangan</span>
                                </div>

                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#3986a3]" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>

                                    <span class="mx-4">Saran Pengembangan</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="max-w-sm w-full mx-auto border swiper-slide w-full flex flex-col rounded-lg md:mx-4 border-[#3986a3]">
                        <div class="p-6">
                            <h1 class="text-xl font-semibold capitalize lg:text-2xl">Supervisor</h1>

                            <p class="mt-4">
                                Asesmen psikologi supervisor: Meningkatkan kepemimpinan dan keterampilan manajerial para supervisor
                            </p>

                            <h2 class="mt-4 text-2xl font-semibold sm:text-3xl">IDR 650000 <span class="text-base font-medium"></span></h2>


                            <a href="https://bit.ly/DaftarPsikotesBerbinar" class="text-center w-full px-4 block py-2 mt-6 tracking-wide text-white capitalize transition-colors duration-300 transform bg-[#3986a3] rounded-md hover:bg-blue-500 focus:outline-none focus:bg-blue-500 focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                                Lakukan Asesmen Perusahaan
                            </a>
                        </div>

                        <hr class="border-[#3986a3]">

                        <div class="p-6">
                            <h1 class="text-lg font-medium capitalize lg:text-xl">What’s included:</h1>

                            <div class="mt-8 space-y-4">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#3986a3]" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>

                                    <span class="mx-4">Tes Intelegensi</span>
                                </div>

                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#3986a3]" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>

                                    <span class="mx-4">Tes Sikap Kerja</span>
                                </div>

                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#3986a3]" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>

                                    <span class="mx-4">Tes Kepribadian</span>
                                </div>

                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-red-400" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M13.477 14.89A6 6 0 015.11 6.524l8.367 8.368zm1.414-1.414L6.524 5.11a6 6 0 018.367 8.367zM18 10a8 8 0 11-16 0 8 8 0 0116 0z" clip-rule="evenodd" />
                                    </svg>

                                    <span class="mx-4">Focus Group Discussion</span>
                                </div>

                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#3986a3]" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>

                                    <span class="mx-4">Wawancara</span>
                                </div>

                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#3986a3]" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>

                                    <span class="mx-4">Psikogram</span>
                                </div>

                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-[#3986a3]" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>

                                    <span class="mx-4">Deskripsi Karakteristik Khas Kelemahan & Kelebihan, Rekomendasi</span>
                                </div>

                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-red-400" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M13.477 14.89A6 6 0 015.11 6.524l8.367 8.368zm1.414-1.414L6.524 5.11a6 6 0 018.367 8.367zM18 10a8 8 0 11-16 0 8 8 0 0116 0z" clip-rule="evenodd" />
                                    </svg>

                                    <span class="mx-4">Proyeksi Pengembangan</span>
                                </div>

                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-red-400" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M13.477 14.89A6 6 0 015.11 6.524l8.367 8.368zm1.414-1.414L6.524 5.11a6 6 0 018.367 8.367zM18 10a8 8 0 11-16 0 8 8 0 0116 0z" clip-rule="evenodd" />
                                    </svg>

                                    <span class="mx-4">Saran Pengembangan</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="max-w-sm w-full mx-auto border swiper-slide flex flex-col rounded-lg md:mx-4 border-[#3986a3]">
                        <div class="p-6">
                            <h1 class="text-xl font-semibold capitalize lg:text-2xl">Supervisor</h1>

                            <p class="mt-4">
                                Asesmen psikologi supervisor: Meningkatkan kepemimpinan dan keterampilan manajerial para supervisor
                            </p>

                            <h2 class="mt-4 text-2xl font-semibold sm:text-3xl">IDR 850000 <span class="text-base font-medium"></span></h2>


                            <a href="https://bit.ly/DaftarPsikotesBerbinar" class="text-center w-full px-4 block py-2 mt-6 tracking-wide text-white capitalize transition-colors duration-300 transform bg-[#3986a3] rounded-md hover:bg-blue-500 focus:outline-none focus:bg-blue-500 focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                                Lakukan Asesmen Perusahaan
                            </a>
                        </div>

                        <hr class="border-[#3986a3]">

                        <div class="p-6">
                            <h1 class="text-lg font-medium capitalize lg:text-xl">What’s included:</h1>

                            <div class="mt-8 space-y-4">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#3986a3]" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>

                                    <span class="mx-4">Tes Intelegensi</span>
                                </div>

                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#3986a3]" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>

                                    <span class="mx-4">Tes Sikap Kerja</span>
                                </div>

                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#3986a3]" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>

                                    <span class="mx-4">Tes Kepribadian</span>
                                </div>

                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-red-400" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M13.477 14.89A6 6 0 015.11 6.524l8.367 8.368zm1.414-1.414L6.524 5.11a6 6 0 018.367 8.367zM18 10a8 8 0 11-16 0 8 8 0 0116 0z" clip-rule="evenodd" />
                                    </svg>

                                    <span class="mx-4">Focus Group Discussion</span>
                                </div>

                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#3986a3]" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>

                                    <span class="mx-4">Wawancara</span>
                                </div>

                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#3986a3]" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>

                                    <span class="mx-4">Psikogram</span>
                                </div>

                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-[#3986a3]" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>

                                    <span class="mx-4">Deskripsi Karakteristik Khas Kelemahan & Kelebihan, Rekomendasi</span>
                                </div>

                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#3986a3]" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>

                                    <span class="mx-4">Proyeksi Pengembangan</span>
                                </div>

                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#3986a3]" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>

                                    <span class="mx-4">Saran Pengembangan</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
            
        </div>
    </div>
</section>

<section class="w-full mb-[6rem]" id="home">
    <div class="max-w-3xl mx-auto">
        <div class="home__data flex flex-col items-center">
            <div class="">
                <h2 class="section-title-center font-semibold">Frequently Asked Question (FAQ)</h2>
            </div>
            
            <ul class="flex flex-col">
                <li class="border rounded-lg my-2" x-data="accordion(1)">
                  <h2
                    @click="handleClick()"
                    class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
                  >
                    <span>Apa yang dimaksud dengan ‘Psikotes’?</span>
                    <svg
                      :class="handleRotate()"
                      class="fill-[#3986a3] text-[#3986a3] h-6 w-6 transform transition-transform duration-500"
                      viewBox="0 0 20 20"
                    >
                      <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                    </svg>
                  </h2>
                  <div
                    x-ref="tab"
                    :style="handleToggle()"
                    class="border-l-2 border-[#3986a3] overflow-hidden max-h-0 duration-500 transition-all"
                  >
                    <p class="p-3 text-gray-900">
                        Kegiatan psikotes merupakan suatu bentuk asesmen psikologi yang digunakan untuk mengukur aspek-aspek psikologi dari seorang individu, seperti kemampuan kognitif, kepribadian, keadaan emosional, dan lainnya. 
                    </p>
                  </div>
                </li>
                <li class="border border-[#3986a3] rounded-lg my-2" x-data="accordion(2)">
                  <h2
                    @click="handleClick()"
                    class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
                  >
                    <span>Apa manfaat dari mengikuti kegiatan psikotes?</span>
                    <svg
                      :class="handleRotate()"
                      class="fill-[#3986a3] text-[#3986a3] h-6 w-6 transform transition-transform duration-500"
                      viewBox="0 0 20 20"
                    >
                      <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                    </svg>
                  </h2>
                  <div
                    class="border-l-2 border-[#3986a3] overflow-hidden max-h-0 duration-500 transition-all"
                    x-ref="tab"
                    :style="handleToggle()"
                  >
                    <p class="p-3 text-gray-900">
                        Tes psikologi dapat memberikan informasi mengenai kemampuan kognitif, kepribadian, keadaan emosional, dan kesehatan mental dari seorang individu. Hasil psikotes juga dapat membantu dalam mengidentifikasi potensi diri yang dapat digunakan untuk membantu dalam membuat keputusan tentang masalah pribadi atau profesional.
                    </p>
                  </div>
                </li>
                <li class="border rounded-lg my-2" x-data="accordion(3)">
                  <h2
                    @click="handleClick()"
                    class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
                  >
                    <span>Apa saja jenis layanan psikotes pada Berbinar?</span>
                    <svg
                      :class="handleRotate()"
                      class="fill-[#3986a3] text-[#3986a3] h-6 w-6 transform transition-transform duration-500"
                      viewBox="0 0 20 20"
                    >
                      <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                    </svg>
                  </h2>
                  <div
                    class="border-l-2 border-[#3986a3] overflow-hidden max-h-0 duration-500 transition-all"
                    x-ref="tab"
                    :style="handleToggle()"
                  >
                    <p class="p-3 text-gray-900">
                        PT. Berbinar Insightful Indonesia menyediakan dua kategori layanan psikotes, yaitu psikotes individual dan psikotes perusahaan. Psikotes individual termasuk di dalamnya adalah tes bakat-minat dan tes intelegensi. Lalu untuk, psikotes perusahaan, kami menyediakan psikotes untuk level staff dan supervisor.
                    </p>
                  </div>
                </li>
                <li class="border border-[#3986a3] rounded-lg my-2" x-data="accordion(4)">
                  <h2
                    @click="handleClick()"
                    class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
                  >
                    <span>Berapa harga layanan psikotes Berbinar?</span>
                    <svg
                      :class="handleRotate()"
                      class="fill-[#3986a3] text-[#3986a3] h-6 w-6 transform transition-transform duration-500"
                      viewBox="0 0 20 20"
                    >
                      <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                    </svg>
                  </h2>
                  <div
                    class="border-l-2 border-[#3986a3] overflow-hidden max-h-0 duration-500 transition-all"
                    x-ref="tab"
                    :style="handleToggle()"
                  >
                    <p class="p-3 text-gray-900">
                        Untuk informasi mengenai harga layanan psikotes Berbinar, silakan klik link berikut ini <a href="https://intip.in/PricelistPsikotesBerbinar">Pricelist</a> atau pricelist yang tertera pada halaman ini
                    </p>
                  </div>
                </li>
                <li class="border rounded-lg my-2" x-data="accordion(5)">
                  <h2
                    @click="handleClick()"
                    class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
                  >
                    <span>Apakah tes dilaksanakan secara individual atau kelompok?</span>
                    <svg
                      :class="handleRotate()"
                      class="fill-[#3986a3] text-[#3986a3] h-6 w-6 transform transition-transform duration-500"
                      viewBox="0 0 20 20"
                    >
                      <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                    </svg>
                  </h2>
                  <div
                    class="border-l-2 border-[#3986a3] overflow-hidden max-h-0 duration-500 transition-all"
                    x-ref="tab"
                    :style="handleToggle()"
                  >
                    <p class="p-3 text-gray-900">
                        Kegiatan psikotes dapat dilaksanakan secara individual maupun kelompok, tergantung dari layanan psikotes yang diambil. Sebagai contoh, untuk tes minat bakat, pada umumnya dilaksanakan secara individual, sedangkan 
                    </p>
                  </div>
                </li>
                <li class="border border-[#3986a3] rounded-lg my-2" x-data="accordion(6)">
                  <h2
                    @click="handleClick()"
                    class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
                  >
                    <span>Apakah tes dilaksanakan secara Online atau Offline?</span>
                    <svg
                      :class="handleRotate()"
                      class="fill-[#3986a3] text-[#3986a3] h-6 w-6 transform transition-transform duration-500"
                      viewBox="0 0 20 20"
                    >
                      <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                    </svg>
                  </h2>
                  <div
                    class="border-l-2 border-[#3986a3] overflow-hidden max-h-0 duration-500 transition-all"
                    x-ref="tab"
                    :style="handleToggle()"
                  >
                    <p class="p-3 text-gray-900">
                        Kegiatan psikotes dari PT. Berbinar Insightful Indonesia dapat dilaksanakan secara Online maupun Offline. 
                    </p>
                  </div>
                </li>
                <li class="border rounded-lg my-2" x-data="accordion(7)">
                    <h2
                      @click="handleClick()"
                      class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
                    >
                      <span>Apa saja yang perlu dipersiapkan dalam pelaksanaan psikotes Online?</span>
                      <svg
                        :class="handleRotate()"
                        class="fill-[#3986a3] text-[#3986a3] h-6 w-6 transform transition-transform duration-500"
                        viewBox="0 0 20 20"
                      >
                        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                      </svg>
                    </h2>
                    <div
                      class="border-l-2 border-[#3986a3] overflow-hidden max-h-0 duration-500 transition-all"
                      x-ref="tab"
                      :style="handleToggle()"
                    >
                      <p class="p-3 text-gray-900">
                        Bagi peserta psikotes yang melaksanakan secara Online, peserta wajib menyiapkan jaringan internet yang kuat, laptop yang stabil, dan baterai yang penuh. Jika peserta tidak menyiapkan ketiga hal tersebut, dapat mempengaruhi dalam keoptimalan pelaksanaan dan hasil psikotes tersebut.
                      </p>
                    </div>
                  </li>
                  <li class="border border-[#3986a3] rounded-lg my-2" x-data="accordion(8)">
                    <h2
                      @click="handleClick()"
                      class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
                    >
                      <span>Bagaimana cara mendaftar? </span>
                      <svg
                        :class="handleRotate()"
                        class="fill-[#3986a3] text-[#3986a3] h-6 w-6 transform transition-transform duration-500"
                        viewBox="0 0 20 20"
                      >
                        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                      </svg>
                    </h2>
                    <div
                      class="border-l-2 border-[#3986a3] overflow-hidden max-h-0 duration-500 transition-all"
                      x-ref="tab"
                      :style="handleToggle()"
                    >
                      <p class="p-3 text-gray-900">
                        Untuk mendaftar psikotes, silahkan mengisi data diri Anda di Google Form pada link berikut: bit.ly/DaftarPsikotesBerbinar
                      </p>
                    </div>
                  </li>
              </ul>
        </div>   
    </div>
</section>


<!--========== SEND GIFT ==========-->
<section class="send section">
    <div class="send__container bd-container bd-grid">
        <div class="send__content">
            <h2 class="section-title-center send__title font-semibold">Hubungi Kami Sekarang</h2>
            <p class="send__description">Buat janji dan lakukan konseling dengan tim Berbinar Insightful Indonesia untuk layanan konseling online ataupun offline.</p>
            <form action="">
                <div class="send__direction">
                    <input type="text" placeholder="Email address" class="send__input">
                    <a href="#" class="button">Kirim</a>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection