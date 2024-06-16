@extends('layouts.main', [
'title' => 'Produk Berbinar - Berbinar Insightful Indonesia',
'active' => 'Produk Berbinar',
'page' => 'Produk Berbinar',
])

@section('content')
{{-- HERO SECTION --}}
<section class="max-w-6xl mx-auto mt-40 z-40 flex flex-col gap-5 px-5 relative items-center">
    <div class="bg-blur-bg-2 rounded-[700px] blur-[85px] w-[300px] md:w-[600px] h-[250px] md:h-[600px] absolute top-56 md:top-20">
    </div>
    <h1 class="font-semibold text-black text-[40px] md:text-[64px] leading-[100%] md:leading-[120%] text-center z-40">
        Produk <span class="text-primary font-bold">Berbinar</span>
    </h1>
    <p class="text-lg text-disabled text-center z-40">Kesehatan mental sering timbul di kalangan masyarakat. Namun,
        masih
        banyak dari
        kita yang merasa ragu untuk mencari bantuan. Mahalnya biaya konsultasi dan jasa psikotes menjadi penghalang
        utama untuk cari pertolongan lebih lanjut. Permasalahan ini menjadi alasan berdirinya Berbinar Insightful
        Indonesia. Berbinar memberikan layanan psikotes, konseling, dan kelas, yang fleksibel dan sesuai kebutuhan.</p>
</section>

{{-- BANNERS SECTION --}}
<section class="z-40">
    <div class="swiper mySwiper md:-mt-10">
        <div class="swiper-wrapper">
            <div class="swiper-slide relative">
                <picture>
                    <!-- view mobile -->
                    <source media="(max-width: 767px)" srcset="{{ asset('assets/images/produk/Konseling.png') }}" class="description absolute top-0 flex flex-col items-start">
                    <!-- view desktop -->
                    <source media="(min-width: 768px)" srcset="{{ asset('assets/images/product-berbinar/1-konseling.png') }}" class="description absolute top-0 flex flex-col items-start px-[1.5rem] py-[2rem] gap-40">
                    <img src="{{ asset('assets/images/product-berbinar/1.png') }}" title="Slider's Image" alt="Slider's Image" class="-z-50 absolute" />
                </picture>
            </div>
            <div class="swiper-slide relative">
                <picture>
                    <!-- view mobile -->
                    <source media="(max-width: 767px)" srcset="{{ asset('assets/images/product-berbinar/psikotest-mobile.png') }}" class="description absolute top-0 flex flex-col items-start">
                    <!-- view desktop -->
                    <source media="(min-width: 768px)" srcset="{{ asset('assets/images/product-berbinar/2-psikotes.png') }}" class="description absolute top-0 flex flex-col items-start px-[1.5rem] py-[2rem] gap-40">
                    <img src="{{ asset('assets/images/product-berbinar/2.png') }}" title="Slider's Image" alt="Slider's Image" class="-z-50 absolute" />
                </picture>
            </div>
            <div class="swiper-slide relative">
                <picture>
                    <!-- view mobile -->
                    <source media="(max-width: 767px)" srcset="{{ asset('assets/images/produk/Kelas.png') }}" class="description absolute top-0 flex flex-col items-start">
                    <!-- view desktop -->
                    <source media="(min-width: 768px)" srcset="{{ asset('assets/images/product-berbinar/3-kelas.png') }}" class="description absolute top-0 flex flex-col items-start px-[1.5rem] py-[2rem] gap-40">
                    <img src="{{ asset('assets/images/product-berbinar/3.png') }}" title="Slider's Image" alt="Slider's Image" class="-z-50 absolute" />
                </picture>
            </div>
            <div class="swiper-slide relative">
                <picture>
                    <!-- view mobile -->
                    <source media="(max-width: 767px)" srcset="{{ asset('assets/images/produk/Webinar.png') }}" class="description absolute top-0 flex flex-col items-start">
                    <!-- view desktop -->
                    <source media="(min-width: 768px)" srcset="{{ asset('assets/images/product-berbinar/4-webinar.png') }}" class="description absolute top-0 flex flex-col items-start px-[1.5rem] py-[2rem] gap-40">
                    <img src="{{ asset('assets/images/product-berbinar/4.png') }}" title="Slider's Image" alt="Slider's Image" class="-z-50 absolute" />
                </picture>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>

{{-- PRODUCT DETAIL SECTION --}}
<section class="z-40 max-w-6xl mx-auto">
    <div class="flex flex-col gap-14">
        {{-- KONSELING --}}
        <div class="flex flex-col items-center justify-center w-full">
            <div class="text-center flex flex-col items-center -mb-10">
                <h2 class="text-black font-semibold text-3xl px-5 md:px-0">
                    Konseling
                </h2>
                <p class="text-disabled text-lg text-center px-5 md:px-0 md:w-2/3">
                    Konsultasikan permasalahan psikologis kamu ke psikolog partner dan peer counselor Berbinar.
                </p>
            </div>

            <div aria-hidden="true" class="mt-0 lg:mt-0">
                <img src="{{ asset('assets/images/product-berbinar/konseling.png') }}" alt="" class="mx-auto w-[120rem] block md:hidden -mb-16" data-aos="fade-up" data-aos-duration="1500">
            </div>

            <div class="flex flex-col md:flex-row items-center">
                <div>
                    <div class="mt-12 space-y-6">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center w-12 h-12 rounded-md dark:text-gray-900">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="27" height="32" viewBox="0 0 27 32" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M24.9827 24.4093C25.5368 23.9934 25.9865 23.4541 26.2962 22.8341C26.6059 22.2141 26.7672 21.5304 26.7672 20.8372V4.46512C26.7672 3.28089 26.2972 2.14517 25.4605 1.3078C24.6239 0.470431 23.4892 0 22.306 0H4.4612C3.27802 0 2.14329 0.470431 1.30666 1.3078C0.470018 2.14517 0 3.28089 0 4.46512V20.8372C0 21.5304 0.16125 22.2141 0.470981 22.8341C0.780712 23.4541 1.23042 23.9934 1.78448 24.4093L10.7069 31.107C11.4791 31.6866 12.4183 32 13.3836 32C14.3489 32 15.2881 31.6866 16.0603 31.107L24.9827 24.4093Z" fill="#3986A3" />
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-xl font-semibold">Fokus</h4>
                                <p class="text-disabled text-lg">Konseling membantu mendorong terjadinya penyelesaian
                                    masalah oleh diri
                                    klien.</p>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="">
                                <div class="flex
                                    items-center justify-center w-12 h-12 rounded-md dark:text-gray-900">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="27" height="32" viewBox="0 0 27 32" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M24.9827 24.4093C25.5368 23.9934 25.9865 23.4541 26.2962 22.8341C26.6059 22.2141 26.7672 21.5304 26.7672 20.8372V4.46512C26.7672 3.28089 26.2972 2.14517 25.4605 1.3078C24.6239 0.470431 23.4892 0 22.306 0H4.4612C3.27802 0 2.14329 0.470431 1.30666 1.3078C0.470018 2.14517 0 3.28089 0 4.46512V20.8372C0 21.5304 0.16125 22.2141 0.470981 22.8341C0.780712 23.4541 1.23042 23.9934 1.78448 24.4093L10.7069 31.107C11.4791 31.6866 12.4183 32 13.3836 32C14.3489 32 15.2881 31.6866 16.0603 31.107L24.9827 24.4093Z" fill="#3986A3" />
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-xl font-semibold">Jenis Konseling</h4>
                                <p class="text-disabled text-lg mb-8">Di Berbinar terdapat dua jenis konseling yang
                                    dapat
                                    dipilih oleh sobar
                                    berbinar sesuai kebutuhan dan kenyamanan sobat, diantara lain ada Konseling with
                                    Psikolog dan Konseling with Peer Counselor.</p>

                                <a href="{{ route('counseling') }}" class="text-lg text-white bg-primary-alt rounded-md hover:bg-primary duration-700 px-5 py-3 w-fit md:mx-0 mt-5">Lihat
                                    Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div aria-hidden="true" class="mt-0 lg:mt-0">
                    <img src="{{ asset('assets/images/product-berbinar/konseling.png') }}" alt="" class="mx-auto w-[120rem] hidden md:block" data-aos="fade-left" data-aos-duration="1500">
                </div>
            </div>
        </div>

        {{-- TES PSIKOTES --}}
        <div class="flex flex-col items-center justify-center w-full">
            <div class="text-center flex flex-col items-center -mb-10">
                <h2 class="text-black font-semibold text-3xl px-5 md:px-0">
                    Psikotes
                </h2>
                <p class="text-disabled text-lg text-center px-5 md:px-0 md:w-2/3">
                    Terdapat dua jenis psikotes yang terdapat pada
                    Berbinar Insightful Indonesia, Psikotes Individu dan Psikotes Perusahaan
                </p>
            </div>

            <div aria-hidden="true" class="mt-0 lg:mt-0">
                <img src="{{ asset('assets/images/product-berbinar/asesmen-psikologi.png') }}" alt="" class="mx-auto w-[120rem] -mb-8 mt-10 block md:hidden" data-aos="fade-up" data-aos-duration="1500">
            </div>

            <div class="flex flex-col md:flex-row-reverse items-center">
                <div>
                    <div class="mt-12 space-y-6">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center w-12 h-12 rounded-md dark:text-gray-900">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="27" height="32" viewBox="0 0 27 32" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M24.9827 24.4093C25.5368 23.9934 25.9865 23.4541 26.2962 22.8341C26.6059 22.2141 26.7672 21.5304 26.7672 20.8372V4.46512C26.7672 3.28089 26.2972 2.14517 25.4605 1.3078C24.6239 0.470431 23.4892 0 22.306 0H4.4612C3.27802 0 2.14329 0.470431 1.30666 1.3078C0.470018 2.14517 0 3.28089 0 4.46512V20.8372C0 21.5304 0.16125 22.2141 0.470981 22.8341C0.780712 23.4541 1.23042 23.9934 1.78448 24.4093L10.7069 31.107C11.4791 31.6866 12.4183 32 13.3836 32C14.3489 32 15.2881 31.6866 16.0603 31.107L24.9827 24.4093Z" fill="#3986A3" />
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-xl font-semibold">Fokus Psikotes Individu</h4>
                                <p class="text-disabled text-lg">Psikotes individu dapat memprediksi potensi
                                    yang dimiliki dalam kaitannya dengan pencapaian hasil belajar atau kemampuan di masa
                                    yang akan datang.</p>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="">
                                <div class="flex
                                    items-center justify-center w-12 h-12 rounded-md dark:text-gray-900">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="27" height="32" viewBox="0 0 27 32" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M24.9827 24.4093C25.5368 23.9934 25.9865 23.4541 26.2962 22.8341C26.6059 22.2141 26.7672 21.5304 26.7672 20.8372V4.46512C26.7672 3.28089 26.2972 2.14517 25.4605 1.3078C24.6239 0.470431 23.4892 0 22.306 0H4.4612C3.27802 0 2.14329 0.470431 1.30666 1.3078C0.470018 2.14517 0 3.28089 0 4.46512V20.8372C0 21.5304 0.16125 22.2141 0.470981 22.8341C0.780712 23.4541 1.23042 23.9934 1.78448 24.4093L10.7069 31.107C11.4791 31.6866 12.4183 32 13.3836 32C14.3489 32 15.2881 31.6866 16.0603 31.107L24.9827 24.4093Z" fill="#3986A3" />
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-xl font-semibold">Fokus Psikotes Perusahaan</h4>
                                <p class="text-disabled text-lg mb-8">Psikotes untuk Perusahaan digunakan
                                    untuk melihat potensi, kelebihan dan kekurangan, serta kecenderungan kepribadian
                                    seorang kandidat dan melihat apakah kandidat tersebut cocok ditempatkan di suatu
                                    posisi pekerjaan.</p>

                                <a href="{{ route('psikotest') }}" class="text-lg text-white bg-primary-alt rounded-md hover:bg-primary duration-700 px-5 py-3 w-fit md:mx-0 mt-5">Lihat
                                    Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div aria-hidden="true" class="mt-0 lg:mt-0">
                    <img src="{{ asset('assets/images/product-berbinar/asesmen-psikologi.png') }}" alt="" class="mx-auto w-[120rem] hidden md:block" data-aos="fade-right" data-aos-duration="1500">
                </div>
            </div>
        </div>

        {{-- KELAS BERBINAR --}}
        <div class="flex flex-col items-center justify-center w-full">
            <div class="text-center flex flex-col items-center -mb-10">
                <h2 class="text-black font-semibold text-3xl px-5 md:px-0">
                    Kelas Berbinar
                </h2>
                <p class="text-disabled text-lg text-center px-5 md:px-0 md:w-2/3">
                    Ikuti dan dapatkan insight serta ilmu baru dari Kelar Berbinar untuk mempersiapkan karir dan juga
                    meningkatkan skill dan kemampuan diri.
                </p>
            </div>

            <div aria-hidden="true" class="mt-0 lg:mt-0">
                <img src="{{ asset('assets/images/product-berbinar/webinar.png') }}" alt="" class="mx-auto w-[50rem] block md:hidden mt-10" data-aos="fade-up" data-aos-duration="1500">
            </div>

            <div class="flex flex-col md:flex-row items-center mt-4">
                <div>
                    <div class="mt-12 space-y-6">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center w-12 h-12 rounded-md dark:text-gray-900">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="27" height="32" viewBox="0 0 27 32" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M24.9827 24.4093C25.5368 23.9934 25.9865 23.4541 26.2962 22.8341C26.6059 22.2141 26.7672 21.5304 26.7672 20.8372V4.46512C26.7672 3.28089 26.2972 2.14517 25.4605 1.3078C24.6239 0.470431 23.4892 0 22.306 0H4.4612C3.27802 0 2.14329 0.470431 1.30666 1.3078C0.470018 2.14517 0 3.28089 0 4.46512V20.8372C0 21.5304 0.16125 22.2141 0.470981 22.8341C0.780712 23.4541 1.23042 23.9934 1.78448 24.4093L10.7069 31.107C11.4791 31.6866 12.4183 32 13.3836 32C14.3489 32 15.2881 31.6866 16.0603 31.107L24.9827 24.4093Z" fill="#3986A3" />
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-xl font-semibold">Fokus</h4>
                                <p class="text-disabled text-lg">ikuti kelas <span class="text-primary font-semibold">Berbinar</span> untuk mempersiapkan karir
                                    dan juga
                                    meningkatkan skill dan kemampuan diri.</p>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="">
                                <div class="flex
                                    items-center justify-center w-12 h-12 rounded-md dark:text-gray-900">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="27" height="32" viewBox="0 0 27 32" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M24.9827 24.4093C25.5368 23.9934 25.9865 23.4541 26.2962 22.8341C26.6059 22.2141 26.7672 21.5304 26.7672 20.8372V4.46512C26.7672 3.28089 26.2972 2.14517 25.4605 1.3078C24.6239 0.470431 23.4892 0 22.306 0H4.4612C3.27802 0 2.14329 0.470431 1.30666 1.3078C0.470018 2.14517 0 3.28089 0 4.46512V20.8372C0 21.5304 0.16125 22.2141 0.470981 22.8341C0.780712 23.4541 1.23042 23.9934 1.78448 24.4093L10.7069 31.107C11.4791 31.6866 12.4183 32 13.3836 32C14.3489 32 15.2881 31.6866 16.0603 31.107L24.9827 24.4093Z" fill="#3986A3" />
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-xl font-semibold">Kelas Yang Pernah Ada</h4>
                                <p class="text-disabled text-lg mb-8">Berikut kelas - kelas yang pernah diadakan di
                                    Berbinar Insighful Indonesia,<br>
                                    • Psychological First Aid <br>
                                    • How to be A Good Peer Counselor <br>
                                    • Self Development <br>
                                    • Quantitative Research Method <br>
                                    • Psychological Assessment Course: in HR Setting <br>
                                    • Training: Be Super Hero as Peer Counselor! <br>
                                    Untuk kelas - kelas dengan topik yang lain akan diinfokan melalui instagram Berbinar
                                </p>

                                <a href="{{ route('class') }}" class="text-lg text-white bg-primary-alt rounded-md hover:bg-primary duration-700 px-5 py-3 w-fit md:mx-0 mt-5">Lihat
                                    Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div aria-hidden="true" class="mt-0 lg:mt-0">
                    <img src="{{ asset('assets/images/product-berbinar/webinar.png') }}" alt="" class="mx-auto w-[50rem] hidden md:block" data-aos="fade-left" data-aos-duration="1500">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection