@extends('layouts.main-new', [
    'title' => 'Berbinar Insightful Indonesia',
    'active' => 'Produk Berbinar',
    'page' => 'Psikotes',
])

@section('content')
{{-- HERO SECTION --}}
<section class="relative">
    <div class="absolute left-0 top-5 max-sm:top-32 z-0">
        <img src="{{ asset('assets/images/landing/asset-konseling/vector/vector-hero1.svg') }}" alt="Vector" class="h-[500px] max-sm:h-[250px] w-auto">
    </div>

    <div class="absolute right-0 max-sm:-right-20 top-8 max-sm:top-40 z-0">
        <img src="{{ asset('assets/images/landing/asset-konseling/vector/vector-hero2.svg') }}" alt="Vector" class="h-[500px] max-sm:h-[250px] w-auto">
    </div>

    <div class="relative">
        <div class="flex flex-row justify-between items-center mt-40 max-sm:mt-32 mx-20 max-sm:mx-4 gap-x-10 z-10">
            <div class="flex flex-col flex-1 space-y-6 max-sm:space-y-2 max-w-xl max-lg:min-w-auto">
                <a href="{{ route('produk-new') }}">
                    <div class="flex lg:order-1 items-center space-x-2 cursor-pointer">
                        <img src="{{ asset('assets/images/landing/asset-konseling/vector/left-arrow.svg') }}" alt="Left Arrow" class="h-3 w-auto">
                        <p class="text-[15px] font-semibold text-[#3986A3]">Produk Berbinar</p>  
                    </div>
                </a>

                <div class="hidden max-md:flex max-lg:flex-none items-center justify-center w-full lg:w-auto lg:order-2">
                    <img src="{{ asset('assets/images/landing/asset-konseling/vector/vector-hero.svg') }}" alt="Konseling" class="h-[340px] max-sm:h-[320px] w-auto">
                </div>
                
                <div class="lg:order-3">
                    <h2 class="text-5xl max-sm:text-3xl font-bold text-gradient py-2">Psikotes</h2>  
                </div>

                <div class="lg:order-4">
                    <p class="text-[#70787D] text-justify max-sm:text-[15px] text-lg max-lg:text-[17px]">
                        Psikotes berbinar Insightful Indonesia merupakan solusi unggul untuk supervisor dan individu dalam pengembangan karier dan penilaian potensi. 
                        Memberikan wawasan mendalam tentang kepribadian, keterampilan, dan kemampuan, untuk membantu pengambilan keputusan yang tepat dalam mengoptimalkan potensi karier.
                    </p>
                </div>
            </div>

            <div class="flex max-md:hidden flex-initial max-lg:flex-1 items-center justify-center w-full lg:w-auto">
                <img src="{{ asset('assets/images/landing/asset-konseling/vector/vector-hero.svg') }}" alt="Konseling" class="h-[340px] max-lg:h-[320px] w-auto">
            </div>
        </div>
    </div>
</section>

{{-- BANNER PSIKOTES INDIVIDU --}}
<section class="relative w-full">
    <div class="absolute top-4 max-sm:top-40 left-0 z-0">
        <img src="/assets/images/landing/asset-konseling/vector/vector-line.svg" alt="Vector Image" class="">
    </div>
    
    <div class="bg-individu relative mt-24 mx-20 max-sm:mx-4 rounded-3xl p-10 max-sm:p-6 h-auto z-10">
        <div class="absolute inset-0 bg-[#D7E6ED] rounded-3xl flex mix-blend-multiply"></div>

        <div class="relative flex flex-col h-full text-left max-md:text-center space-y-3 justify-center">
            <h1 class="text-5xl max-sm:text-3xl max-md:text-4xl text-black font-semibold ">Psikotes Individu</h1>
            <p class="text-[#3F3F3F] text-justify max-sm:text-[15px] text-lg max-lg:text-[17px]">
                Psikotes individu dapat memprediksi potensi yang dimiliki dalam kaitannya dengan pencapaian hasil belajar atau kemampuan di masa yang akan datang.
            </p>
            <div class="flex justify-start max-md:justify-center">
                <button class="text-white bg-gradient-to-r max-sm:text-[15px] text-md from-[#3986A3] to-[#225062] py-2 px-4 max-sm:px-6 rounded-xl max-sm:rounded-md">Daftar Psikotes Individu</button>
            </div>
        </div>

        <div class="absolute bottom-3 right-3 z-10">
            <p class="text-sm font-light text-[#95a1a3]">Sumber: Freepik</p>
        </div>
    </div>
</section>

{{-- TES INDIVIDU --}}
<section class="relative">
    <div class="bg-blur-bg-2 rounded-full blur-[100px] w-[300px] h-[300px] absolute top-16 -right-28 z-0"></div>

    <div class="hidden md:block swiperContainer relative z-10">
        <div class="swiper" id="swiperIndividu">
            <div class="swiper-wrapper">
                @foreach ($individus as $individu)
                <div class="swiper-slide">
                    <div class="bg-white rounded-2xl shadow-md flex flex-col text-center items-center justify-center h-full max-h-[300px] px-2 py-4 w-full max-w-[250px]">
                        <p class="text-black text-lg font-medium">{{ $individu['jenis_tes'] }}</p>
                        <p class="text-[32px] font-semibold text-[#3986A3] mt-3">{{ $individu['harga'] }}</p>
                        <img src="{{ asset('assets/images/landing/asset-konseling/vector/vector-divider.svg') }}" alt="Vector" class="my-4 w-full">

                        <div class="flex flex-col space-y-1">
                            <div class="flex items-center gap-1">
                                <img 
                                    src="{{ asset($individu['keterangan']['laporan_tertulis'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}" 
                                    alt="{{ $individu['keterangan']['laporan_tertulis'] ? 'Centang Hijau' : 'Silang Merah' }}" 
                                    class="w-3.5 h-3.5"
                                />
                                <span class="text-[#70787D]">Laporan Tertulis</span>
                            </div>
        
                            <div class="flex items-center gap-1">
                                <img 
                                    src="{{ asset($individu['keterangan']['konseling_hasil_tes'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}" 
                                    alt="{{ $individu['keterangan']['konseling_hasil_tes'] ? 'Centang Hijau' : 'Silang Merah' }}" 
                                    class="w-3.5 h-3.5"
                                />
                                <span class="text-[#70787D]">Konseling Hasil Tes</span>
                            </div>
                        </div>

                        <div class="flex justify-center my-4">
                            <button class="text-white bg-gradient-to-r text-sm from-[#F7B23B] to-[#AD7D29] py-1.5 px-4 rounded-lg">Mulai Sekarang</button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="swiper-pagination"></div>

        </div>
    </div>

    <div class="grid grid-cols-2 gap-4 max-sm:mx-4 max-md:mx-20 mt-10 md:hidden justify-between relative z-10">
        @foreach ($individus as $individu)
        <div class="bg-white rounded-2xl shadow-md flex flex-col text-center items-center justify-center h-full p-4 w-full">
            <p class="text-black text-[16px] font-medium dynamic-height">{{ $individu['jenis_tes'] }}</p>
            <p class="text-[22px] font-semibold text-[#3986A3] mt-0.5">{{ $individu['harga'] }}</p>
            <img src="{{ asset('assets/images/landing/asset-konseling/vector/vector-divider.svg') }}" alt="Vector" class="my-1 w-full">

            <div class="flex flex-col gap-y-0.5 text-left">
                <div class="flex items-start gap-1">
                    <img 
                        src="{{ asset($individu['keterangan']['laporan_tertulis'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}" 
                        alt="{{ $individu['keterangan']['laporan_tertulis'] ? 'Centang Hijau' : 'Silang Merah' }}" 
                        class="w-3.5 h-3.5 mt-1"
                    />
                    <span class="text-[#70787D] leading-snug">Laporan Tertulis</span>
                </div>

                <div class="flex items-start gap-1">
                    <img 
                        src="{{ asset($individu['keterangan']['konseling_hasil_tes'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}" 
                        alt="{{ $individu['keterangan']['konseling_hasil_tes'] ? 'Centang Hijau' : 'Silang Merah' }}" 
                        class="w-3.5 h-3.5 mt-1"
                    />
                    <span class="text-[#70787D] leading-snug">Konseling Hasil Tes</span>
                </div>
            </div>

            <div class="flex justify-center mt-3 w-full">
                <button class="text-white w-full bg-gradient-to-r text-[13px] from-[#F7B23B] to-[#AD7D29] py-1.5 rounded-xl">Mulai Sekarang</button>
            </div>
        </div>
        @endforeach

    </div>
</section>

{{-- BANNER PSIKOTES PERUSAHAAN --}}
<section>
    <div class="bg-perusahaan relative mt-14 mx-20 max-sm:mx-4 rounded-3xl p-10 max-sm:p-6 h-auto z-10">
        <div class="absolute inset-0 bg-[#D7E6ED] rounded-3xl flex mix-blend-multiply"></div>

        <div class="relative flex flex-col h-full text-left max-md:text-center space-y-3 justify-center">
            <h1 class="text-5xl max-sm:text-3xl max-md:text-4xl text-black font-semibold ">Psikotes Perusahaan</h1>
            <p class="text-[#3F3F3F] text-justify max-sm:text-[15px] text-lg max-lg:text-[17px]">
                Psikotes untuk supervisor digunakan untuk melihat potensi, kelebihan dan kekurangan, serta kecenderungan kepribadian seorang kandidat dan melihat apakah kandidat tersebut cocok ditempatkan di suatu posisi pekerjaan.
            </p>
            <div class="flex justify-start max-md:justify-center">
                <button class="text-white bg-gradient-to-r max-sm:text-[15px] text-md from-[#3986A3] to-[#225062] py-2 px-4 max-sm:px-6 rounded-xl max-sm:rounded-md">Daftar Psikotes Perusahaan</button>
            </div>
        </div>

        <div class="absolute bottom-3 right-3 z-10">
            <p class="text-sm font-light text-[#95a1a3]">Sumber: Freepik</p>
        </div>
    </div>
</section>

{{-- PAKET STAFF PERUSAHAAN --}}
<section class="relative">
    <div class="bg-blur-bg-2 rounded-full blur-[100px] w-[300px] h-[300px] absolute top-16 -left-28 z-0"></div>

    <h2 class="text-center text-3xl max-sm:text-2xl max-sm:mx-4 font-bold text-gradient mt-14 mb-4 relative z-10">Psikotes Perusahaan untuk Staff</h2>  
    <section>
        <div class="hidden md:block swiperContainer relative z-10">
            <div class="swiper" id="swiperPerusahaanStaff">
                <div class="swiper-wrapper">
                    @foreach ($staffs as $staff)
                    <div class="swiper-slide">
                        <div class="bg-white rounded-2xl shadow-md flex flex-col text-center items-center justify-center h-full max-h-[500px] p-4 w-full max-w-[350px]">
                            <p class="text-black text-lg font-medium">{{ $staff['paket'] }}</p>
                            <p class="text-[32px] font-semibold text-[#3986A3] mt-1">{{ $staff['harga'] }}</p>
                            <img src="{{ asset('assets/images/landing/asset-konseling/vector/vector-divider.svg') }}" alt="Vector" class="my-4 w-full">

                            <div class="flex flex-col space-y-1 text-left">
                                <div class="flex items-center gap-1">
                                    <img 
                                        src="{{ asset($staff['keterangan']['tes_intelegensi'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}" 
                                        alt="{{ $staff['keterangan']['tes_intelegensi'] ? 'Centang Hijau' : 'Silang Merah' }}" 
                                        class="w-3.5 h-3.5"
                                    />
                                    <span class="text-[#70787D]">Tes Intelegensi</span>
                                </div>
            
                                <div class="flex items-center gap-1">
                                    <img 
                                        src="{{ asset($staff['keterangan']['tes_sikap_kerja'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}" 
                                        alt="{{ $staff['keterangan']['tes_sikap_kerja'] ? 'Centang Hijau' : 'Silang Merah' }}" 
                                        class="w-3.5 h-3.5"
                                    />
                                    <span class="text-[#70787D]">Tes Sikap Kerja</span>
                                </div>

                                <div class="flex items-center gap-1">
                                    <img 
                                        src="{{ asset($staff['keterangan']['tes_kepribadian'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}" 
                                        alt="{{ $staff['keterangan']['tes_kepribadian'] ? 'Centang Hijau' : 'Silang Merah' }}" 
                                        class="w-3.5 h-3.5"
                                    />
                                    <span class="text-[#70787D]">Tes Kepribadian</span>
                                </div>

                                <div class="flex items-center gap-1">
                                    <img 
                                        src="{{ asset($staff['keterangan']['focus_group_discussion'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}" 
                                        alt="{{ $staff['keterangan']['focus_group_discussion'] ? 'Centang Hijau' : 'Silang Merah' }}" 
                                        class="w-3.5 h-3.5"
                                    />
                                    <span class="text-[#70787D]">Focus Group Discussion</span>
                                </div>

                                <div class="flex items-center gap-1">
                                    <img 
                                        src="{{ asset($staff['keterangan']['wawancara'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}" 
                                        alt="{{ $staff['keterangan']['wawancara'] ? 'Centang Hijau' : 'Silang Merah' }}" 
                                        class="w-3.5 h-3.5"
                                    />
                                    <span class="text-[#70787D]">Wawancara</span>
                                </div>

                                <div class="flex items-center gap-1">
                                    <img 
                                        src="{{ asset($staff['keterangan']['psikogram'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}" 
                                        alt="{{ $staff['keterangan']['psikogram'] ? 'Centang Hijau' : 'Silang Merah' }}" 
                                        class="w-3.5 h-3.5"
                                    />
                                    <span class="text-[#70787D]">Psikogram</span>
                                </div>

                                <div class="flex items-start gap-1">
                                    <img 
                                        src="{{ asset($staff['keterangan']['deskripsi'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}" 
                                        alt="{{ $staff['keterangan']['deskripsi'] ? 'Centang Hijau' : 'Silang Merah' }}" 
                                        class="w-3.5 h-3.5 mt-1"
                                    />
                                    <span class="text-[#70787D] leading-snug">Deskripsi Karakteristik, Kelemahan, Kelebihan, dan Rekomendasi</span>
                                </div>

                                <div class="flex items-center gap-1">
                                    <img 
                                        src="{{ asset($staff['keterangan']['proyeksi_pengembangan'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}" 
                                        alt="{{ $staff['keterangan']['proyeksi_pengembangan'] ? 'Centang Hijau' : 'Silang Merah' }}" 
                                        class="w-3.5 h-3.5"
                                    />
                                    <span class="text-[#70787D]">Proyeksi Pengembangan</span>
                                </div>

                                <div class="flex items-center gap-1">
                                    <img 
                                        src="{{ asset($staff['keterangan']['saran_pengembangan'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}" 
                                        alt="{{ $staff['keterangan']['saran_pengembangan'] ? 'Centang Hijau' : 'Silang Merah' }}" 
                                        class="w-3.5 h-3.5"
                                    />
                                    <span class="text-[#70787D]">Saran Pengembangan</span>
                                </div>
                            </div>

                            <div class="flex justify-center my-4">
                                <button class="text-white bg-gradient-to-r text-[16px] from-[#F7B23B] to-[#AD7D29] py-1.5 px-4 rounded-lg">Mulai Sekarang</button>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="swiper-pagination"></div>

            </div>
        </div>

        <div class="grid grid-cols-1 gap-y-4 max-sm:mx-4 max-md:mx-20 mt-10 md:hidden relative z-10">
            @foreach ($staffs as $staff)
            <div class="bg-white rounded-2xl shadow-md flex flex-col text-center items-center justify-center h-full px-4 py-2 w-full">
                <p class="text-black text-lg font-medium">{{ $staff['paket'] }}</p>
                <p class="text-[32px] max-sm:text-3xl font-semibold text-[#3986A3] mt-1">{{ $staff['harga'] }}</p>
                <img src="{{ asset('assets/images/landing/asset-konseling/vector/vector-divider.svg') }}" alt="Vector" class="my-2 w-full">

                <div class="flex flex-col space-y-1 text-left">
                    <div class="flex items-center gap-1">
                        <img 
                            src="{{ asset($staff['keterangan']['tes_intelegensi'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}" 
                            alt="{{ $staff['keterangan']['tes_intelegensi'] ? 'Centang Hijau' : 'Silang Merah' }}" 
                            class="w-3.5 h-3.5"
                        />
                        <span class="text-[#70787D]">Tes Intelegensi</span>
                    </div>

                    <div class="flex items-center gap-1">
                        <img 
                            src="{{ asset($staff['keterangan']['tes_sikap_kerja'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}" 
                            alt="{{ $staff['keterangan']['tes_sikap_kerja'] ? 'Centang Hijau' : 'Silang Merah' }}" 
                            class="w-3.5 h-3.5"
                        />
                        <span class="text-[#70787D]">Tes Sikap Kerja</span>
                    </div>

                    <div class="flex items-center gap-1">
                        <img 
                            src="{{ asset($staff['keterangan']['tes_kepribadian'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}" 
                            alt="{{ $staff['keterangan']['tes_kepribadian'] ? 'Centang Hijau' : 'Silang Merah' }}" 
                            class="w-3.5 h-3.5"
                        />
                        <span class="text-[#70787D]">Tes Kepribadian</span>
                    </div>

                    <div class="flex items-center gap-1">
                        <img 
                            src="{{ asset($staff['keterangan']['focus_group_discussion'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}" 
                            alt="{{ $staff['keterangan']['focus_group_discussion'] ? 'Centang Hijau' : 'Silang Merah' }}" 
                            class="w-3.5 h-3.5"
                        />
                        <span class="text-[#70787D]">Focus Group Discussion</span>
                    </div>

                    <div class="flex items-center gap-1">
                        <img 
                            src="{{ asset($staff['keterangan']['wawancara'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}" 
                            alt="{{ $staff['keterangan']['wawancara'] ? 'Centang Hijau' : 'Silang Merah' }}" 
                            class="w-3.5 h-3.5"
                        />
                        <span class="text-[#70787D]">Wawancara</span>
                    </div>

                    <div class="flex items-center gap-1">
                        <img 
                            src="{{ asset($staff['keterangan']['psikogram'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}" 
                            alt="{{ $staff['keterangan']['psikogram'] ? 'Centang Hijau' : 'Silang Merah' }}" 
                            class="w-3.5 h-3.5"
                        />
                        <span class="text-[#70787D]">Psikogram</span>
                    </div>

                    <div class="flex items-start gap-1">
                        <img 
                            src="{{ asset($staff['keterangan']['deskripsi'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}" 
                            alt="{{ $staff['keterangan']['deskripsi'] ? 'Centang Hijau' : 'Silang Merah' }}" 
                            class="w-3.5 h-3.5 mt-1"
                        />
                        <span class="text-[#70787D] leading-snug">Deskripsi Karakteristik, Kelemahan, Kelebihan, dan Rekomendasi</span>
                    </div>

                    <div class="flex items-center gap-1">
                        <img 
                            src="{{ asset($staff['keterangan']['proyeksi_pengembangan'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}" 
                            alt="{{ $staff['keterangan']['proyeksi_pengembangan'] ? 'Centang Hijau' : 'Silang Merah' }}" 
                            class="w-3.5 h-3.5"
                        />
                        <span class="text-[#70787D]">Proyeksi Pengembangan</span>
                    </div>

                    <div class="flex items-center gap-1">
                        <img 
                            src="{{ asset($staff['keterangan']['saran_pengembangan'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}" 
                            alt="{{ $staff['keterangan']['saran_pengembangan'] ? 'Centang Hijau' : 'Silang Merah' }}" 
                            class="w-3.5 h-3.5"
                        />
                        <span class="text-[#70787D]">Saran Pengembangan</span>
                    </div>
                </div>

                <div class="flex justify-center my-4">
                    <button class="text-white bg-gradient-to-r text-[16px] from-[#F7B23B] to-[#AD7D29] py-1.5 px-4 rounded-lg">Mulai Sekarang</button>
                </div>
            </div>
            @endforeach
        </div>
    </section>
</section>

{{-- PAKET SUPERVISOR PERUSAHAAN --}}
<section class="relative">
    <div class="bg-blur-bg-2 rounded-full blur-[100px] w-[300px] h-[300px] absolute top-24 -left-28 z-0"></div>
    <div class="bg-blur-bg-2 rounded-full blur-[70px] w-[300px] h-[500px] absolute top-24 -right-20 z-0"></div>

    <h2 class="text-center text-3xl max-sm:text-2xl max-sm:mx-4 font-bold text-gradient mt-14 mb-4 relative z-10">Psikotes Perusahaan untuk Supervisor</h2>  
    <section>
        <div class="hidden md:block swiperContainer relative z-10">
            <div class="swiper" id="swiperPerusahaanSupervisor">
                <div class="swiper-wrapper">
                    @foreach ($supervisors as $supervisor)
                    <div class="swiper-slide">
                        <div class="bg-white rounded-2xl shadow-md flex flex-col text-center items-center justify-center h-full max-h-[500px] p-4 w-full max-w-[350px]">
                            <p class="text-black text-lg font-medium">{{ $supervisor['paket'] }}</p>
                            <p class="text-[32px] font-semibold text-[#3986A3] mt-1">{{ $supervisor['harga'] }}</p>
                            <img src="{{ asset('assets/images/landing/asset-konseling/vector/vector-divider.svg') }}" alt="Vector" class="my-4 w-full">

                            <div class="flex flex-col space-y-1 text-left">
                                <div class="flex items-center gap-1">
                                    <img 
                                        src="{{ asset($supervisor['keterangan']['tes_intelegensi'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}" 
                                        alt="{{ $supervisor['keterangan']['tes_intelegensi'] ? 'Centang Hijau' : 'Silang Merah' }}" 
                                        class="w-3.5 h-3.5"
                                    />
                                    <span class="text-[#70787D]">Tes Intelegensi</span>
                                </div>
            
                                <div class="flex items-center gap-1">
                                    <img 
                                        src="{{ asset($supervisor['keterangan']['tes_sikap_kerja'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}" 
                                        alt="{{ $supervisor['keterangan']['tes_sikap_kerja'] ? 'Centang Hijau' : 'Silang Merah' }}" 
                                        class="w-3.5 h-3.5"
                                    />
                                    <span class="text-[#70787D]">Tes Sikap Kerja</span>
                                </div>

                                <div class="flex items-center gap-1">
                                    <img 
                                        src="{{ asset($supervisor['keterangan']['tes_kepribadian'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}" 
                                        alt="{{ $supervisor['keterangan']['tes_kepribadian'] ? 'Centang Hijau' : 'Silang Merah' }}" 
                                        class="w-3.5 h-3.5"
                                    />
                                    <span class="text-[#70787D]">Tes Kepribadian</span>
                                </div>

                                <div class="flex items-center gap-1">
                                    <img 
                                        src="{{ asset($supervisor['keterangan']['focus_group_discussion'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}" 
                                        alt="{{ $supervisor['keterangan']['focus_group_discussion'] ? 'Centang Hijau' : 'Silang Merah' }}" 
                                        class="w-3.5 h-3.5"
                                    />
                                    <span class="text-[#70787D]">Focus Group Discussion</span>
                                </div>

                                <div class="flex items-center gap-1">
                                    <img 
                                        src="{{ asset($supervisor['keterangan']['wawancara'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}" 
                                        alt="{{ $supervisor['keterangan']['wawancara'] ? 'Centang Hijau' : 'Silang Merah' }}" 
                                        class="w-3.5 h-3.5"
                                    />
                                    <span class="text-[#70787D]">Wawancara</span>
                                </div>

                                <div class="flex items-center gap-1">
                                    <img 
                                        src="{{ asset($supervisor['keterangan']['psikogram'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}" 
                                        alt="{{ $supervisor['keterangan']['psikogram'] ? 'Centang Hijau' : 'Silang Merah' }}" 
                                        class="w-3.5 h-3.5"
                                    />
                                    <span class="text-[#70787D]">Psikogram</span>
                                </div>

                                <div class="flex items-start gap-1">
                                    <img 
                                        src="{{ asset($supervisor['keterangan']['deskripsi'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}" 
                                        alt="{{ $supervisor['keterangan']['deskripsi'] ? 'Centang Hijau' : 'Silang Merah' }}" 
                                        class="w-3.5 h-3.5 mt-1"
                                    />
                                    <span class="text-[#70787D] leading-snug">Deskripsi Karakteristik, Kelemahan, Kelebihan, dan Rekomendasi</span>
                                </div>

                                <div class="flex items-center gap-1">
                                    <img 
                                        src="{{ asset($supervisor['keterangan']['proyeksi_pengembangan'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}" 
                                        alt="{{ $supervisor['keterangan']['proyeksi_pengembangan'] ? 'Centang Hijau' : 'Silang Merah' }}" 
                                        class="w-3.5 h-3.5"
                                    />
                                    <span class="text-[#70787D]">Proyeksi Pengembangan</span>
                                </div>

                                <div class="flex items-center gap-1">
                                    <img 
                                        src="{{ asset($supervisor['keterangan']['saran_pengembangan'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}" 
                                        alt="{{ $supervisor['keterangan']['saran_pengembangan'] ? 'Centang Hijau' : 'Silang Merah' }}" 
                                        class="w-3.5 h-3.5"
                                    />
                                    <span class="text-[#70787D]">Saran Pengembangan</span>
                                </div>
                            </div>

                            <div class="flex justify-center my-4">
                                <button class="text-white bg-gradient-to-r text-[16px] from-[#F7B23B] to-[#AD7D29] py-1.5 px-4 rounded-lg">Mulai Sekarang</button>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="swiper-pagination"></div>

            </div>
        </div>

        <div class="grid grid-cols-1 gap-y-4 max-sm:mx-4 max-md:mx-20 mt-10 md:hidden relative z-10">
            @foreach ($supervisors as $supervisor)
            <div class="bg-white rounded-2xl shadow-md flex flex-col text-center items-center justify-center h-full px-4 py-2 w-full">
                <p class="text-black text-lg font-medium">{{ $supervisor['paket'] }}</p>
                <p class="text-[32px] max-sm:text-[30px] font-semibold text-[#3986A3] mt-1">{{ $supervisor['harga'] }}</p>
                <img src="{{ asset('assets/images/landing/asset-konseling/vector/vector-divider.svg') }}" alt="Vector" class="my-2 w-full">

                <div class="flex flex-col space-y-1 text-left">
                    <div class="flex items-center gap-1">
                        <img 
                            src="{{ asset($supervisor['keterangan']['tes_intelegensi'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}" 
                            alt="{{ $supervisor['keterangan']['tes_intelegensi'] ? 'Centang Hijau' : 'Silang Merah' }}" 
                            class="w-3.5 h-3.5"
                        />
                        <span class="text-[#70787D]">Tes Intelegensi</span>
                    </div>

                    <div class="flex items-center gap-1">
                        <img 
                            src="{{ asset($supervisor['keterangan']['tes_sikap_kerja'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}" 
                            alt="{{ $supervisor['keterangan']['tes_sikap_kerja'] ? 'Centang Hijau' : 'Silang Merah' }}" 
                            class="w-3.5 h-3.5"
                        />
                        <span class="text-[#70787D]">Tes Sikap Kerja</span>
                    </div>

                    <div class="flex items-center gap-1">
                        <img 
                            src="{{ asset($supervisor['keterangan']['tes_kepribadian'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}" 
                            alt="{{ $supervisor['keterangan']['tes_kepribadian'] ? 'Centang Hijau' : 'Silang Merah' }}" 
                            class="w-3.5 h-3.5"
                        />
                        <span class="text-[#70787D]">Tes Kepribadian</span>
                    </div>

                    <div class="flex items-center gap-1">
                        <img 
                            src="{{ asset($supervisor['keterangan']['focus_group_discussion'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}" 
                            alt="{{ $supervisor['keterangan']['focus_group_discussion'] ? 'Centang Hijau' : 'Silang Merah' }}" 
                            class="w-3.5 h-3.5"
                        />
                        <span class="text-[#70787D]">Focus Group Discussion</span>
                    </div>

                    <div class="flex items-center gap-1">
                        <img 
                            src="{{ asset($supervisor['keterangan']['wawancara'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}" 
                            alt="{{ $supervisor['keterangan']['wawancara'] ? 'Centang Hijau' : 'Silang Merah' }}" 
                            class="w-3.5 h-3.5"
                        />
                        <span class="text-[#70787D]">Wawancara</span>
                    </div>

                    <div class="flex items-center gap-1">
                        <img 
                            src="{{ asset($supervisor['keterangan']['psikogram'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}" 
                            alt="{{ $supervisor['keterangan']['psikogram'] ? 'Centang Hijau' : 'Silang Merah' }}" 
                            class="w-3.5 h-3.5"
                        />
                        <span class="text-[#70787D]">Psikogram</span>
                    </div>

                    <div class="flex items-start gap-1">
                        <img 
                            src="{{ asset($supervisor['keterangan']['deskripsi'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}" 
                            alt="{{ $supervisor['keterangan']['deskripsi'] ? 'Centang Hijau' : 'Silang Merah' }}" 
                            class="w-3.5 h-3.5 mt-1"
                        />
                        <span class="text-[#70787D] leading-snug">Deskripsi Karakteristik, Kelemahan, Kelebihan, dan Rekomendasi</span>
                    </div>

                    <div class="flex items-center gap-1">
                        <img 
                            src="{{ asset($supervisor['keterangan']['proyeksi_pengembangan'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}" 
                            alt="{{ $supervisor['keterangan']['proyeksi_pengembangan'] ? 'Centang Hijau' : 'Silang Merah' }}" 
                            class="w-3.5 h-3.5"
                        />
                        <span class="text-[#70787D]">Proyeksi Pengembangan</span>
                    </div>

                    <div class="flex items-center gap-1">
                        <img 
                            src="{{ asset($supervisor['keterangan']['saran_pengembangan'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}" 
                            alt="{{ $supervisor['keterangan']['saran_pengembangan'] ? 'Centang Hijau' : 'Silang Merah' }}" 
                            class="w-3.5 h-3.5"
                        />
                        <span class="text-[#70787D]">Saran Pengembangan</span>
                    </div>
                </div>

                <div class="flex justify-center my-4">
                    <button class="text-white bg-gradient-to-r text-[16px] from-[#F7B23B] to-[#AD7D29] py-1.5 px-4 rounded-lg">Mulai Sekarang</button>
                </div>
            </div>
            @endforeach
        </div>
    </section>
</section>

{{-- BANNER INSTANSI PENDIDIKAN --}}
<section>
    <div class="bg-pendidikan relative mt-14 mx-20 max-sm:mx-4 rounded-3xl p-10 max-sm:p-6 h-auto z-10">
        <div class="absolute inset-0 bg-[#D7E6ED] rounded-3xl flex mix-blend-multiply"></div>

        <div class="relative flex flex-col h-full text-left max-md:text-center space-y-3 justify-center">
            <h1 class="text-5xl max-sm:text-3xl max-md:text-4xl text-black font-semibold ">Psikotes Instansi Pendidikan</h1>
            <p class="text-[#3F3F3F] text-justify max-sm:text-[15px] text-lg max-lg:text-[17px]">
                Psikotes untuk Instansi Pendidikan digunakan untuk mengenal gaya belajar, cita-cita, jurusan, minat bakat yang sesuai dengan SobatBinar.
            </p>
            <div class="flex justify-start max-md:justify-center">
                <button class="text-white bg-gradient-to-r max-sm:text-[15px] text-md from-[#3986A3] to-[#225062] py-2 px-4 max-sm:px-6 rounded-xl max-sm:rounded-md">Daftar Psikotes Instansi Pendidikan</button>
            </div>
        </div>
        
        <div class="absolute bottom-3 right-3 z-10">
            <p class="text-sm font-light text-[#95a1a3]">Sumber: Freepik</p>
        </div>
    </div>
</section>

{{-- PAKET PSIKOTES INSTANSI PENDIDIKAN --}}
<section class="relative">
    <div class="bg-blur-bg-2 rounded-full blur-[70px] w-[300px] h-[300px] absolute top-36 -right-28 z-0"></div>

    <div class="hidden md:block swiperContainer relative z-10">
        <div class="swiper" id="swiperPendidikan">
            <div class="swiper-wrapper">
                @foreach ($pendidikans as $pendidikan)
                <div class="swiper-slide">
                    <div class="bg-white rounded-2xl shadow-md flex flex-col text-center items-center justify-center h-full max-h-[330px] p-4 w-full max-w-[250px]">
                        <p class="text-black text-lg font-medium min-h-[60px] items-center ">{{ $pendidikan['paket'] }}</p>
                        <p class="text-[32px] font-semibold text-[#3986A3] mt-1">{{ $pendidikan['harga'] }}</p>
                        <img src="{{ asset('assets/images/landing/asset-konseling/vector/vector-divider.svg') }}" alt="Vector" class="my-4 w-full">

                        <div class="flex flex-col space-y-1">
                            <div class="flex items-center gap-1">
                                <img 
                                    src="{{ asset($pendidikan['keterangan']['laporan_tertulis'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}" 
                                    alt="{{ $pendidikan['keterangan']['laporan_tertulis'] ? 'Centang Hijau' : 'Silang Merah' }}" 
                                    class="w-3.5 h-3.5"
                                />
                                <span class="text-[#70787D]">Laporan Tertulis</span>
                            </div>

                            <div class="flex items-center gap-1">
                                <img 
                                    src="{{ asset($pendidikan['keterangan']['tes_gaya_belajar'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}" 
                                    alt="{{ $pendidikan['keterangan']['tes_gaya_belajar'] ? 'Centang Hijau' : 'Silang Merah' }}" 
                                    class="w-3.5 h-3.5"
                                />
                                <span class="text-[#70787D]">Konseling Hasil Tes</span>
                            </div>
        
                            <div class="flex items-center gap-1">
                                <img 
                                    src="{{ asset($pendidikan['keterangan']['konseling_hasil_tes'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}" 
                                    alt="{{ $pendidikan['keterangan']['konseling_hasil_tes'] ? 'Centang Hijau' : 'Silang Merah' }}" 
                                    class="w-3.5 h-3.5"
                                />
                                <span class="text-[#70787D]">Konseling Hasil Tes</span>
                            </div>
                        </div>

                        <div class="flex justify-center my-4">
                            <button class="text-white bg-gradient-to-r text-sm from-[#F7B23B] to-[#AD7D29] py-1.5 px-4 rounded-lg">Mulai Sekarang</button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="swiper-pagination"></div>

        </div>
    </div>

    <div class="grid grid-cols-2 gap-4 max-sm:mx-4 max-md:mx-20 mt-10 md:hidden justify-between relative z-10">
        @foreach ($pendidikans as $pendidikan)
        <div class="bg-white rounded-2xl shadow-md flex flex-col text-center items-center justify-center h-full p-4 w-full">
            <p class="text-black text-[16px] font-medium dynamic-height">{{ $pendidikan['paket'] }}</p>
            <p class="text-[22px] font-semibold text-[#3986A3] mt-0.5">{{ $pendidikan['harga'] }}</p>
            <img src="{{ asset('assets/images/landing/asset-konseling/vector/vector-divider.svg') }}" alt="Vector" class="my-1 w-full">

            <div class="flex flex-col gap-y-0.5 text-left">
                <div class="flex items-start gap-1">
                    <img 
                        src="{{ asset($pendidikan['keterangan']['laporan_tertulis'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}" 
                        alt="{{ $pendidikan['keterangan']['laporan_tertulis'] ? 'Centang Hijau' : 'Silang Merah' }}" 
                        class="w-3.5 h-3.5 mt-1"
                    />
                    <span class="text-[#70787D] leading-snug">Laporan Tertulis</span>
                </div>

                <div class="flex items-start gap-1">
                    <img 
                        src="{{ asset($pendidikan['keterangan']['tes_gaya_belajar'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}" 
                        alt="{{ $pendidikan['keterangan']['tes_gaya_belajar'] ? 'Centang Hijau' : 'Silang Merah' }}" 
                        class="w-3.5 h-3.5 mt-1"
                    />
                    <span class="text-[#70787D]">Tes Gaya Belajar</span>
                </div>

                <div class="flex items-start gap-1">
                    <img 
                        src="{{ asset($pendidikan['keterangan']['konseling_hasil_tes'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}" 
                        alt="{{ $pendidikan['keterangan']['konseling_hasil_tes'] ? 'Centang Hijau' : 'Silang Merah' }}" 
                        class="w-3.5 h-3.5 mt-1"
                    />
                    <span class="text-[#70787D] leading-snug">Konseling Hasil Tes</span>
                </div>
            </div>

            <div class="flex justify-center mt-3 w-full">
                <button class="text-white w-full bg-gradient-to-r text-[13px] from-[#F7B23B] to-[#AD7D29] py-1.5 rounded-xl">Mulai Sekarang</button>
            </div>
        </div>
        @endforeach
    </div>
</section>

{{-- BANNER KOMUNITAS --}}
<section>
    <div class="bg-pendidikan relative mt-14 mx-20 max-sm:mx-4 rounded-3xl p-10 max-sm:p-6 h-auto z-10">
        <div class="absolute inset-0 bg-[#D7E6ED] rounded-3xl flex mix-blend-multiply"></div>

        <div class="relative flex flex-col h-full text-left max-md:text-center space-y-3 justify-center">
            <h1 class="text-5xl max-sm:text-3xl max-md:text-4xl text-black font-semibold ">Psikotes Kategori Komunitas</h1>
            <p class="text-[#3F3F3F] text-justify max-sm:text-[15px] text-lg max-lg:text-[17px]">
                Psikotes untuk Komunitas ini bertujuan untuk mengetahui kesiapan pernikahan, menjadi orang tua, kecocokan bersama pasangan, tingkat stress, depresi, kecemasan, memori, dan dimensia.
            </p>
            <div class="flex justify-start max-md:justify-center">
                <button class="text-white bg-gradient-to-r max-sm:text-[15px] text-md from-[#3986A3] to-[#225062] py-2 px-4 max-sm:px-6 rounded-xl max-sm:rounded-md">Daftar Psikotes Komunitas</button>
            </div>
        </div>

        <div class="absolute bottom-3 right-3 z-10">
            <p class="text-sm font-light text-[#95a1a3]">Sumber: Freepik</p>
        </div>
    </div>
</section>

{{-- PAKET PSIKOTES KOMUNITAS --}}
<section class="relative">
    <div class="bg-blur-bg-2 rounded-full blur-[70px] w-[300px] h-[500px] absolute top-40 -right-28 z-0"></div>

    <div class="hidden md:block swiperContainer relative z-10">
        <div class="swiper" id="swiperKomunitas">
            <div class="swiper-wrapper">
                @foreach ($communitys as $community)
                <div class="swiper-slide">
                    <div class="bg-white rounded-2xl shadow-md flex flex-col text-center items-center justify-center h-full max-h-[310px] p-4 w-full max-w-[250px]">
                        <p class="text-black text-lg font-medium min-h-[60px] items-center ">{{ $community['paket'] }}</p>
                        <p class="text-[32px] font-semibold text-[#3986A3] mt-1">{{ $community['harga'] }}</p>
                        <img src="{{ asset('assets/images/landing/asset-konseling/vector/vector-divider.svg') }}" alt="Vector" class="my-4 w-full">

                        <div class="flex flex-col space-y-1">
                            <div class="flex items-center gap-1">
                                <img 
                                    src="{{ asset($community['keterangan']['laporan_tertulis'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}" 
                                    alt="{{ $community['keterangan']['laporan_tertulis'] ? 'Centang Hijau' : 'Silang Merah' }}" 
                                    class="w-3.5 h-3.5"
                                />
                                <span class="text-[#70787D]">Laporan Tertulis</span>
                            </div>
        
                            <div class="flex items-center gap-1">
                                <img 
                                    src="{{ asset($community['keterangan']['konseling_hasil_tes'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}" 
                                    alt="{{ $community['keterangan']['konseling_hasil_tes'] ? 'Centang Hijau' : 'Silang Merah' }}" 
                                    class="w-3.5 h-3.5"
                                />
                                <span class="text-[#70787D]">Konseling Hasil Tes</span>
                            </div>
                        </div>

                        <div class="flex justify-center my-4">
                            <button class="text-white bg-gradient-to-r text-sm from-[#F7B23B] to-[#AD7D29] py-1.5 px-4 rounded-lg">Mulai Sekarang</button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="swiper-pagination"></div>

        </div>
    </div>

    <div class="grid grid-cols-2 gap-4 max-sm:mx-4 max-md:mx-20 mt-10 md:hidden justify-between relative z-10">
        @foreach ($communitys as $community)
        <div class="bg-white rounded-2xl shadow-md flex flex-col text-center items-center justify-center h-full p-4 w-full">
            <p class="text-black text-[16px] font-medium dynamic-height-3">{{ $community['paket'] }}</p>
            <p class="text-[22px] font-semibold text-[#3986A3] mt-0.5">{{ $community['harga'] }}</p>
            <img src="{{ asset('assets/images/landing/asset-konseling/vector/vector-divider.svg') }}" alt="Vector" class="my-1 w-full">

            <div class="flex flex-col gap-y-0.5 text-left">
                <div class="flex items-start gap-1">
                    <img 
                        src="{{ asset($community['keterangan']['laporan_tertulis'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}" 
                        alt="{{ $community['keterangan']['laporan_tertulis'] ? 'Centang Hijau' : 'Silang Merah' }}" 
                        class="w-3.5 h-3.5 mt-1"
                    />
                    <span class="text-[#70787D] leading-snug">Laporan Tertulis</span>
                </div>

                <div class="flex items-start gap-1">
                    <img 
                        src="{{ asset($community['keterangan']['konseling_hasil_tes'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}" 
                        alt="{{ $community['keterangan']['konseling_hasil_tes'] ? 'Centang Hijau' : 'Silang Merah' }}" 
                        class="w-3.5 h-3.5 mt-1"
                    />
                    <span class="text-[#70787D] leading-snug">Konseling Hasil Tes</span>
                </div>
            </div>

            <div class="flex justify-center mt-3 w-full">
                <button class="text-white w-full bg-gradient-to-r text-[13px] from-[#F7B23B] to-[#AD7D29] py-1.5 rounded-xl">Mulai Sekarang</button>
            </div>
        </div>
        @endforeach
    </div>
</section>

{{-- FAQS --}}
<section class="z-10 mx-4 max-md:mt-10 sm:mx-20 relative">
    <div class="bg-blur-bg-2 rounded-full blur-[90px] w-[300px] h-[300px] absolute -top-7 -left-28 z-0"></div>

    <ul class="flex flex-col relative z-10">
        @php
            $index = 0;
        @endphp
        @foreach ($faqs as $faq)
            <li class="border bg-white py-2 shadow-sm rounded-lg my-2" x-data="accordion({{ $index }})" :class="isActive()">
                <div class="flex flex-row mx-2 sm:mx-5">
                    <div class="flex flex-col w-full p-3 max-sm:p-2">
                        <h2 @click="handleClick()" class="font-medium cursor-pointer text-lg max-sm:text-[16.5px]">
                            <span>{{ $faq['question'] }}</span>
                        </h2>
                        <div x-ref="tab" :style="handleToggle()" class="overflow-hidden max-h-0 duration-500 transition-all">
                            <p class="mt-3 max-sm:mt-2 text-[#6F6C90] text-justify max-sm:text-[15px]">{{ $faq['answer'] }}</p>
                        </div>
                    </div>

                    <div class="items-center ml-6 hidden sm:flex">
                        <template x-if="$store.accordion.tab === idx">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20 20L4 4M20 4L4 20" stroke="#3986A3" stroke-width="3" stroke-linecap="round"/>
                            </svg>   
                        </template>
                        <template x-if="$store.accordion.tab !== idx">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_7503_13741)">
                                <path d="M22.3996 8L11.9996 19.2L1.59961 8" stroke="#3986A3" stroke-width="3" stroke-linecap="square"/></g><defs><clipPath id="clip0_7503_13741"><rect width="24" height="24" fill="white"/></clipPath></defs>
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

{{-- CONTACT --}}
<div class="bg-wave relative my-20 max-sm:my-10 mx-20 max-sm:mx-4 rounded-3xl p-10 max-sm:p-2 bg-cover h-[280px] max-sm:max-h-[240px]">
    <div class="absolute inset-0 bg-gradient-to-b from-[#609EB5] to-[#15323D] rounded-3xl mix-blend-multiply"></div>

    <div class="relative flex flex-col text-center gap-y-7 max-sm:gap-y-3 justify-center items-center h-full">
        <h1 class="text-3xl max-sm:text-2xl text-white font-semibold ">Hubungi Kami Sekarang</h1>
        <p class="text-lg max-sm:text-[15px] text-white font-light">Buat janji dan lakukan konseling dengan tim Berbinar Insightful Indonesia untuk <br> layanan konseling online ataupun offline.</p>
        <div class="flex justify-center">
            <button class="text-black max-sm:text-[15px] font-semibold bg-white py-2 px-5 rounded-xl">Lihat Produk Berbinar</button>
        </div>
    </div>
</div>

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