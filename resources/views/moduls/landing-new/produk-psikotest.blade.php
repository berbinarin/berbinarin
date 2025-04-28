@extends('layouts.main-new', [
    'title' => 'Berbinar Insightful Indonesia',
    'active' => 'Produk Berbinar',
    'page' => 'Psikotes',
])

@section('content')
{{-- HERO SECTION --}}
<section class="relative max-sm:overflow-x-hidden">
    <div class="absolute left-0 top-5 max-sm:top-32 z-0 ">
        <img src="{{ asset('assets/images/landing/asset-konseling/vector/vector-hero1.svg') }}" alt="Vector" class="h-[500px] max-sm:h-[250px] w-auto">
    </div>

    <div class="absolute right-0 max-sm:-right-20 max-md:-right-28 top-8 max-sm:top-40 z-0 ">
        <img src="{{ asset('assets/images/landing/asset-konseling/vector/vector-hero2.svg') }}" alt="Vector" class="h-[500px] max-sm:h-[250px] w-auto">
    </div>

    <div class="relative">
        <div class="flex flex-row justify-between items-center mt-40 max-sm:mt-32 mx-20 max-sm:mx-4 gap-x-1 mb-20 z-10">
            <div class="flex flex-col flex-1 space-y-6 max-sm:space-y-2 max-w-xl max-lg:min-w-auto">
                <a href="{{ route('produk-new') }}">
                    <div class="flex lg:order-1 items-center space-x-2 cursor-pointer">
                        <img src="{{ asset('assets/images/landing/asset-konseling/vector/left-arrow.svg') }}" alt="Left Arrow" class="h-3 w-auto">
                        <p class="text-[15px] font-semibold text-[#3986A3]">Produk Berbinar</p>
                    </div>
                </a>

                <div class="hidden max-md:flex max-lg:flex-none items-center justify-center w-full lg:w-auto lg:order-2">
                    <img src="{{ asset('assets/images/landing/asset-psikotes/hero.png') }}" alt="Konseling" class="h-[340px] max-sm:h-[320px] w-auto object-contain">
                </div>

                <div class="lg:order-3">
                    <h2 class="text-5xl max-sm:text-3xl font-bold text-gradient py-2">Berbinar Psikotes</h2>
                </div>

                <div class="lg:order-4">
                    <p class="text-[#70787D] text-justify max-sm:leading-normal max-sm:text-[15px] text-lg max-lg:text-[17px]">
                        Psikotes berbinar Insightful Indonesia merupakan solusi unggul untuk perusahaan dan individu dalam pengembangan karier dan penilaian potensi.
                        Memberikan wawasan mendalam tentang kepribadian, keterampilan, dan kemampuan, untuk membantu pengambilan keputusan yang tepat dalam mengoptimalkan potensi karier.
                    </p>
                </div>
            </div>

            <div class="flex max-md:hidden flex-initial max-lg:flex-1 items-center justify-center w-full lg:w-auto">
                <img src="{{ asset('assets/images/landing/asset-psikotes/hero.png') }}" alt="Konseling" class="h-[340px] max-lg:h-[320px] w-auto object-contain">
            </div>
        </div>
    </div>
</section>


{{-- KONSELING --}}
<section class="relative w-full mt-24">
    <div class="absolute top-4 max-sm:top-40 left-0 z-0">
        <img src="/assets/images/landing/asset-konseling/vector/vector-line.svg" alt="Vector Image" class="">
    </div>

    <p class="max-sm:text-[29px] text-4xl font font-semibold text-black text-center my-8 max-sm:my-4 max-sm:mx-2 mx-20 relative z-10">Mengapa Harus Psikotes di <span class="bg-primary text-white px-2 ">Berbinar</span></p>

    <div class="relative bg-white mx-20 max-sm:mx-4 p-10 max-sm:p-4 flex flex-row gap-x-1 mb-20 shadow-md max-lg:flex-col max-lg:gap-y-4 rounded-xl z-10">
        <div class="flex-initial items-center hidden lg:flex">
            <img src="{{ asset('assets/images/landing/asset-psikotes/person.png') }}" alt="Vector" class="h-[350px] w-auto object-contain">
        </div>

        <div class="flex items-center justify-center lg:hidden">
            <img src="{{ asset('assets/images/landing/logo-berbinar.png') }}" alt="Berbinar" class="h-[320px] max-md:h-[290px] max-sm:h-[270px] w-auto object-contain">
        </div>

        <div class="flex-1">
            <div class="flex flex-col gap-y-4">
                <div class="flex flex-wrap justify-center items-center lg:justify-start gap-2 lg:gap-12">
                    @foreach ($visimisis as $visimisi)
                    <div class="bg-[#3986A3] p-2 rounded-full flex items-center w-auto">
                        <div class="flex flex-row gap-x-1 items-center">
                            <img src="{{ asset('assets/images/landing/asset-beranda/vector/tick.svg') }}" alt="Vector" class="h-6 w-6 bg-white rounded-full p-1">
                            <p class="text-white font-medium max-sm:text-[13px] text-[15px]">{{ $visimisi['moto'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="flex-col">
                    <p class="text-[#70787D] text-justify text-[17px] font-[300] max-sm:text-[15px]">Berbinar memberikan produk yang dapat disesuaikan dengan kebutuhan SobatBinar dalam penggunaan jasa layanan psikologi, seperti konseling, psikotes, kelas, konsultan SDM, webinar/seminar, training, workshop, kaos motivasi, dan masih banyak lagi</p>
                    <br>
                    <div class="flex flex-row items-start gap-x-1 mb-2">
                        <img src="{{ asset('assets/images/landing/asset-psikotes/icon/point.svg') }}" alt="Vector" class="h-4 w-auto mt-1">
                        <p class="text-[#70787D] text-justify text-[17px] max-sm:text-[15px]">Layanan psikotes Berbinar <span class="font-bold">teruji</span> dan memiliki <span class="font-bold">kredibilitas tinggi.</span></p>
                    </div>
                    <div class="flex flex-row items-start gap-x-1 mb-2">
                        <img src="{{ asset('assets/images/landing/asset-psikotes/icon/point.svg') }}" alt="Vector" class="h-4 w-auto mt-1">
                        <p class="text-[#70787D] text-justify text-[17px] max-sm:text-[15px]">Layanan telah disesuaikan dengan <span class="font-bold">kebutuhan pasar</span> dan <span class="font-bold">customer.</span></p>
                    </div>
                    <ul class="list-disc text-[#70787D] text-justify text-[17px] max-sm:text-[15px] ml-10">
                        <li>Bisa atur waktu penyelesaian hasil yang lebih cepat</li>
                        <li>Bisa merencanakan sesi tes offline sesuai kesepakatan di lokasi pilihan untuk konsultasi lebih lanjut</li>
                    </ul>
                    <div class="flex flex-row items-start gap-x-1 mb-2">
                        <img src="{{ asset('assets/images/landing/asset-psikotes/icon/point.svg') }}" alt="Vector" class="h-4 w-auto mt-1">
                        <p class="text-[#70787D] text-justify text-[17px] max-sm:text-[15px]">Psikolog <span class="font-bold">berlisensi</span> dan <span class="font-bold">berpengalaman</span></p>
                    </div>
                    <div class="flex flex-row items-start gap-x-1 mb-2">
                        <img src="{{ asset('assets/images/landing/asset-psikotes/icon/point.svg') }}" alt="Vector" class="h-4 w-auto mt-1">
                        <p class="text-[#70787D] text-justify text-[17px] max-sm:text-[15px]">Layanan psikotes Berbinar dapat diakses secara <span class="font-bold">online</span> & <span class="font-bold">offline</span></p>
                    </div>
                    <div class="flex flex-row items-start gap-x-1 mb-2">
                        <img src="{{ asset('assets/images/landing/asset-psikotes/icon/point.svg') }}" alt="Vector" class="h-4 w-auto mt-1">
                        <p class="text-[#70787D] text-justify text-[17px] max-sm:text-[15px]"><span class="font-bold">Harga terjangkau</span> (dalam kondisi tertentu, dapat <span class="font-bold">dicicil</span> atau <span class="font-bold">dinegosiasikan</span> sesuai kebutuhan)</p>
                    </div>
                </div>

                <div class="flex justify-start lg:order-5">
                    <button class="text-white bg-gradient-to-r max-sm:text-[15px] text-md from-[#3986A3] to-[#225062] py-2 px-4 rounded-xl">Lihat Produk Berbinar</button>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- TESTIMONI BERBINAR --}}
<section class="mx-20 max-sm:mx-4 mt-20">
    <p class="max-sm:text-[29px] text-4xl font font-semibold text-black text-center my-8 max-sm:my-4 max-sm:mx-2 mx-20 relative z-10"><span class="bg-[#F9C162] px-2 text-white">100+</span> Orang Mempercayakan Psikotes <span class="bg-primary text-white px-2">Berbinar</span></p>

    <div class="grid grid-cols-3 max-md:grid-cols-1 flex-wrap gap-6 max-lg:gap-2">
        @foreach ($testimoni_psikotes as $psikotes)
        <div class="bg-white shadow-md rounded-xl p-6 max-lg:p-4">
            <div class="flex flex-col">
                <p class="text-2xl max-sm:text-xl font-bold text-gradient text-center">{{ $psikotes['category'] }}</p>
                <img src="{{ asset('assets/images/landing/asset-konseling/vector/vector-divider.svg') }}" alt="Vector" class="my-2 w-full">

                @foreach ($psikotes['mitra'] as $mitra)
                <div class="flex flex-row gap-x-2 mb-3">
                    <img src="{{ asset($mitra['logo']) }}" alt="Mitra" class="w-12 h-12 object-contain">
                    <div class="flex flex-col">
                        <p class="text-[#3F3F3F] text-[16px] leading-snug font-medium max-sm:text-[15px]">{{ $mitra['name'] }}</p>
                        <p class="text-[#50565A] text-[14px] leading-snug max-sm:text-[13px]">{{ $mitra['total'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endforeach
    </div>
</section>


{{-- BANNER PSIKOTES INDIVIDU --}}
<section class="relative w-full">
    <div class="bg-individu relative mt-24 mx-20 max-sm:mx-4 rounded-3xl p-10 max-sm:p-5 h-auto z-10">
        <div class="absolute inset-0 bg-[#D7E6ED] rounded-3xl flex mix-blend-multiply"></div>

        <div class="relative flex flex-col h-full text-left max-md:text-center space-y-3 justify-center">
            <h1 class="text-5xl max-sm:text-3xl max-md:text-4xl text-black font-semibold ">Psikotes Individu</h1>
            <p class="text-[#3F3F3F] text-justify max-sm:text-[15px] max-sm:leading-normal text-lg max-lg:text-[17px]">
                Psikotes individu dapat memprediksi potensi yang dimiliki dalam kaitannya dengan pencapaian hasil belajar atau kemampuan di masa yang akan datang.
            </p>
            <a href="{{ route('psikotes-new/daftar-psikotes') }}">
                <div class="flex justify-start max-md:justify-center z-10">
                    <button class="text-white bg-gradient-to-r max-sm:text-[15px] text-md from-[#3986A3] to-[#225062] py-2 px-4 max-sm:px-6 rounded-xl max-sm:rounded-md">Daftar Psikotes Individu</button>
                </div>
            </a>
        </div>

        <div class="absolute bottom-3 right-3 z-0">
            <p class="text-[14px] max-sm:text-[12px] font-light text-[#95a1a3]">Sumber: Freepik</p>
        </div>
    </div>
</section>


{{-- TES INDIVIDU --}}
<section class="relative">
    {{-- TAMPILAN DESKTOP --}}
    <div class="hidden md:block swiperContainer relative z-10">
        <div class="swiper" id="swiperIndividu">
            <div class="swiper-wrapper">
                @foreach ($individus as $individu)
                <div class="swiper-slide">
                    <div class="bg-white rounded-2xl shadow-md flex flex-col text-center items-center justify-center h-full max-h-[300px] px-2 py-4 w-full max-w-[250px]">
                        <img src="{{ asset($individu['illustrasi']) }}" alt="{{ $individu['jenis_tes'] }}" class="h-14 w-auto object-contain">
                        <p class="text-black text-lg font-medium mt-3">{{ $individu['jenis_tes'] }}</p>
                        <p class="text-[32px] font-semibold text-[#3986A3] -mt-0.5 leading-none">{{ $individu['harga'] }}<span class="text-[#70787D] text-[18px] align-top">*</span></p>
                        <img src="{{ asset('assets/images/landing/asset-konseling/vector/vector-divider.svg') }}" alt="Vector" class="my-2.5 w-full">

                        <div class="flex flex-col space-y-1">
                            <div class="flex items-center gap-1">
                                <img
                                    src="{{ asset($individu['keterangan']['laporan_tertulis'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}"
                                    alt="{{ $individu['keterangan']['laporan_tertulis'] ? 'Centang Hijau' : 'Silang Merah' }}"
                                    class="w-3.5 h-3.5 object-contain"
                                />
                                <span class="text-[#70787D]">Laporan Tertulis</span>
                            </div>

                            <div class="flex items-center gap-1">
                                <img
                                    src="{{ asset($individu['keterangan']['konseling_hasil_tes'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}"
                                    alt="{{ $individu['keterangan']['konseling_hasil_tes'] ? 'Centang Hijau' : 'Silang Merah' }}"
                                    class="w-3.5 h-3.5 object-contain"
                                />
                                <span class="text-[#70787D]">Konseling Hasil Tes</span>
                            </div>
                        </div>

                        <div class="flex justify-center my-3">
                            <button class="text-white bg-gradient-to-r text-sm from-[#F7B23B] to-[#AD7D29] py-1.5 px-4 rounded-lg">Mulai Sekarang</button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <p class="text-[16px] max-sm:text-[14px] text-[#4F4F4F] mt-2">*Harga masih bisa dinegosiasikan dan menyesuaikan dengan benefit yang ingin didapatkan.</p>
            <div class="swiper-pagination"></div>

        </div>
    </div>

    {{-- TAMPILAN MOBILE --}}
    <div class="grid grid-cols-2 gap-4 max-sm:mx-4 max-md:mx-20 mt-5 md:hidden justify-between relative z-10">
        @foreach ($individus as $individu)
        <div class="bg-white rounded-2xl shadow-md flex flex-col text-center items-center justify-center h-full p-4 w-full">
            <img src="{{ asset($individu['illustrasi']) }}" alt="{{ $individu['jenis_tes'] }}" class="h-10 w-auto object-contain">
            <p class="text-black text-[16px] font-medium dynamic-height leading-none max-sm:mt-1">{{ $individu['jenis_tes'] }}</p>
            <p class="text-[22px] font-semibold text-[#3986A3] mt-0.5 leading-none">{{ $individu['harga'] }}<span class="text-[#70787D] text-[13px] align-top">*</span></p>
            <img src="{{ asset('assets/images/landing/asset-konseling/vector/vector-divider.svg') }}" alt="Vector" class="my-1 w-full">

            <div class="flex flex-col gap-y-0.5 text-left">
                <div class="flex items-start gap-1">
                    <img
                        src="{{ asset($individu['keterangan']['laporan_tertulis'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}"
                        alt="{{ $individu['keterangan']['laporan_tertulis'] ? 'Centang Hijau' : 'Silang Merah' }}"
                        class="w-3.5 h-3.5 max-sm:w-3 max-sm:h-3 mt-1 object-contain"
                    />
                    <span class="text-[#70787D] max-sm:text-[14px] max-sm:leading-tight leading-snug">Laporan Tertulis</span>
                </div>

                <div class="flex items-start gap-1">
                    <img
                        src="{{ asset($individu['keterangan']['konseling_hasil_tes'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}"
                        alt="{{ $individu['keterangan']['konseling_hasil_tes'] ? 'Centang Hijau' : 'Silang Merah' }}"
                        class="w-3.5 h-3.5 max-sm:w-3 max-sm:h-3 mt-1 object-contain"
                    />
                    <span class="text-[#70787D] max-sm:text-[14px] max-sm:leading-tight leading-snug">Konseling Hasil Tes</span>
                </div>
            </div>

            <div class="flex justify-center mt-3 w-full">
                <button class="text-white w-full bg-gradient-to-r text-[13px] from-[#F7B23B] to-[#AD7D29] py-1.5 rounded-xl">Mulai Sekarang</button>
            </div>
        </div>
        @endforeach
    </div>

    <p class="text-[16px] max-sm:text-[13px] max-sm:leading-tight max-md:mx-20 md:hidden block text-[#4F4F4F] mt-2 max-sm:mx-4">*Harga masih bisa dinegosiasikan dan menyesuaikan dengan benefit yang ingin didapatkan.</p>
</section>


{{-- BANNER PSIKOTES PERUSAHAAN --}}
<section>
    <div class="bg-perusahaan relative mt-10 mx-20 max-sm:mx-4 rounded-3xl p-10 max-sm:p-5 h-auto z-10">
        <div class="absolute inset-0 bg-[#D7E6ED] rounded-3xl flex mix-blend-multiply"></div>

        <div class="relative flex flex-col h-full text-left max-md:text-center space-y-3 justify-center">
            <h1 class="text-5xl max-sm:text-3xl max-md:text-4xl text-black font-semibold ">Psikotes Perusahaan</h1>
            <p class="text-[#3F3F3F] text-justify max-sm:text-[15px] max-sm:leading-normal text-lg max-lg:text-[17px]">
                Psikotes untuk supervisor digunakan untuk melihat potensi, kelebihan dan kekurangan, serta kecenderungan kepribadian seorang kandidat dan melihat apakah kandidat tersebut cocok ditempatkan di suatu posisi pekerjaan.
            </p>
            <a href="{{ route('psikotes-new/daftar-psikotes') }}">
                <div class="flex justify-start max-md:justify-center z-10">
                    <button class="text-white bg-gradient-to-r max-sm:text-[15px] text-md from-[#3986A3] to-[#225062] py-2 px-4 max-sm:px-6 rounded-xl max-sm:rounded-md">Daftar Psikotes Perusahaan</button>
                </div>
            </a>
        </div>

        <div class="absolute bottom-3 right-3 z-0">
            <p class="text-sm font-light max-sm:text-[12px] text-[#95a1a3]">Sumber: Freepik</p>
        </div>
    </div>
</section>


{{-- PAKET STAFF PERUSAHAAN --}}
<section class="relative">
    <h2 class="text-center text-3xl max-sm:text-2xl max-sm:mx-4 font-bold text-gradient mt-14 mb-4 relative z-10">Psikotes Perusahaan untuk Staff</h2>
    <section>
        {{-- TAMPILAN DESKTOP --}}
        <div class="hidden md:block swiperContainer relative z-10">
            <div class="swiper" id="swiperPerusahaanStaff">
                <div class="swiper-wrapper">
                    @foreach ($staffs as $staff)
                    <div class="swiper-slide">
                        <div class="bg-white rounded-2xl shadow-md flex flex-col text-center items-center justify-center h-full max-h-[500px] p-4 w-full max-w-[350px]">
                            <p class="text-black text-lg font-medium">{{ $staff['paket'] }}</p>
                            <p class="text-[32px] font-semibold text-[#3986A3] my-2 leading-none">{{ $staff['harga'] }}<span class="text-[#70787D] text-[18px] align-top">*</span></p>
                            <img src="{{ asset('assets/images/landing/asset-konseling/vector/vector-divider.svg') }}" alt="Vector" class="my-4 w-full">

                            <div class="flex flex-col space-y-1 text-left">
                                <div class="flex items-center gap-1">
                                    <img
                                        src="{{ asset($staff['keterangan']['tes_intelegensi'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}"
                                        alt="{{ $staff['keterangan']['tes_intelegensi'] ? 'Centang Hijau' : 'Silang Merah' }}"
                                        class="w-3.5 h-3.5 object-contain"
                                    />
                                    <span class="text-[#70787D]">Tes Intelegensi</span>
                                </div>

                                <div class="flex items-center gap-1">
                                    <img
                                        src="{{ asset($staff['keterangan']['tes_sikap_kerja'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}"
                                        alt="{{ $staff['keterangan']['tes_sikap_kerja'] ? 'Centang Hijau' : 'Silang Merah' }}"
                                        class="w-3.5 h-3.5 object-contain"
                                    />
                                    <span class="text-[#70787D]">Tes Sikap Kerja</span>
                                </div>

                                <div class="flex items-center gap-1">
                                    <img
                                        src="{{ asset($staff['keterangan']['tes_kepribadian'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}"
                                        alt="{{ $staff['keterangan']['tes_kepribadian'] ? 'Centang Hijau' : 'Silang Merah' }}"
                                        class="w-3.5 h-3.5 object-contain"
                                    />
                                    <span class="text-[#70787D]">Tes Kepribadian</span>
                                </div>

                                <div class="flex items-center gap-1">
                                    <img
                                        src="{{ asset($staff['keterangan']['focus_group_discussion'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}"
                                        alt="{{ $staff['keterangan']['focus_group_discussion'] ? 'Centang Hijau' : 'Silang Merah' }}"
                                        class="w-3.5 h-3.5 object-contain"
                                    />
                                    <span class="text-[#70787D]">Focus Group Discussion</span>
                                </div>

                                <div class="flex items-center gap-1">
                                    <img
                                        src="{{ asset($staff['keterangan']['wawancara'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}"
                                        alt="{{ $staff['keterangan']['wawancara'] ? 'Centang Hijau' : 'Silang Merah' }}"
                                        class="w-3.5 h-3.5 object-contain"
                                    />
                                    <span class="text-[#70787D]">Wawancara</span>
                                </div>

                                <div class="flex items-center gap-1">
                                    <img
                                        src="{{ asset($staff['keterangan']['psikogram'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}"
                                        alt="{{ $staff['keterangan']['psikogram'] ? 'Centang Hijau' : 'Silang Merah' }}"
                                        class="w-3.5 h-3.5 object-contain"
                                    />
                                    <span class="text-[#70787D]">Psikogram</span>
                                </div>

                                <div class="flex items-start gap-1">
                                    <img
                                        src="{{ asset($staff['keterangan']['deskripsi'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}"
                                        alt="{{ $staff['keterangan']['deskripsi'] ? 'Centang Hijau' : 'Silang Merah' }}"
                                        class="w-3.5 h-3.5 mt-1 object-contain"
                                    />
                                    <span class="text-[#70787D] leading-snug">Deskripsi Karakteristik, Kelemahan, Kelebihan, dan Rekomendasi</span>
                                </div>

                                <div class="flex items-center gap-1">
                                    <img
                                        src="{{ asset($staff['keterangan']['proyeksi_pengembangan'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}"
                                        alt="{{ $staff['keterangan']['proyeksi_pengembangan'] ? 'Centang Hijau' : 'Silang Merah' }}"
                                        class="w-3.5 h-3.5 object-contain"
                                    />
                                    <span class="text-[#70787D]">Proyeksi Pengembangan</span>
                                </div>

                                <div class="flex items-center gap-1">
                                    <img
                                        src="{{ asset($staff['keterangan']['saran_pengembangan'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}"
                                        alt="{{ $staff['keterangan']['saran_pengembangan'] ? 'Centang Hijau' : 'Silang Merah' }}"
                                        class="w-3.5 h-3.5 object-contain"
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

                <p class="text-[16px] max-sm:text-[14px] text-[#4F4F4F] mt-2">*Harga masih bisa dinegosiasikan dan menyesuaikan dengan benefit yang ingin didapatkan.</p>
                <div class="swiper-pagination"></div>

            </div>
        </div>

        {{-- TAMPILAN MOBILE --}}
        <div class="grid grid-cols-1 gap-y-4 max-sm:mx-4 max-md:mx-20 mt-10 md:hidden relative z-10">
            @foreach ($staffs as $staff)
            <div class="bg-white rounded-2xl shadow-md flex flex-col text-center items-center justify-center h-full px-4 py-2 w-full">
                <p class="text-black text-lg font-medium">{{ $staff['paket'] }}</p>
                <p class="text-[32px] max-sm:text-3xl font-semibold text-[#3986A3] mt-1 leading-none">{{ $staff['harga'] }}<span class="text-[#70787D] text-[13px] align-super">*</span></p>
                <img src="{{ asset('assets/images/landing/asset-konseling/vector/vector-divider.svg') }}" alt="Vector" class="my-2 w-full">

                <div class="flex flex-col space-y-1 text-left">
                    <div class="flex items-center gap-1">
                        <img
                            src="{{ asset($staff['keterangan']['tes_intelegensi'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}"
                            alt="{{ $staff['keterangan']['tes_intelegensi'] ? 'Centang Hijau' : 'Silang Merah' }}"
                            class="w-3.5 h-3.5"
                        />
                        <span class="text-[#70787D] max-sm:text-[15px] max-sm:leading-tight leading-snug">Tes Intelegensi</span>
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
                        <span class="text-[#70787D] max-sm:text-[15px] max-sm:leading-tight leading-snug">Tes Kepribadian</span>
                    </div>

                    <div class="flex items-center gap-1">
                        <img
                            src="{{ asset($staff['keterangan']['focus_group_discussion'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}"
                            alt="{{ $staff['keterangan']['focus_group_discussion'] ? 'Centang Hijau' : 'Silang Merah' }}"
                            class="w-3.5 h-3.5"
                        />
                        <span class="text-[#70787D] max-sm:text-[15px] max-sm:leading-tight leading-snug">Focus Group Discussion</span>
                    </div>

                    <div class="flex items-center gap-1">
                        <img
                            src="{{ asset($staff['keterangan']['wawancara'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}"
                            alt="{{ $staff['keterangan']['wawancara'] ? 'Centang Hijau' : 'Silang Merah' }}"
                            class="w-3.5 h-3.5"
                        />
                        <span class="text-[#70787D] max-sm:text-[15px] max-sm:leading-tight leading-snug">Wawancara</span>
                    </div>

                    <div class="flex items-center gap-1">
                        <img
                            src="{{ asset($staff['keterangan']['psikogram'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}"
                            alt="{{ $staff['keterangan']['psikogram'] ? 'Centang Hijau' : 'Silang Merah' }}"
                            class="w-3.5 h-3.5"
                        />
                        <span class="text-[#70787D] max-sm:text-[15px] max-sm:leading-tight leading-snug">Psikogram</span>
                    </div>

                    <div class="flex items-start gap-1">
                        <img
                            src="{{ asset($staff['keterangan']['deskripsi'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}"
                            alt="{{ $staff['keterangan']['deskripsi'] ? 'Centang Hijau' : 'Silang Merah' }}"
                            class="w-3.5 h-3.5 mt-0.5"
                        />
                        <span class="text-[#70787D] max-sm:text-[15px] max-sm:leading-tight leading-snug">Deskripsi Karakteristik, Kelemahan, Kelebihan, dan Rekomendasi</span>
                    </div>

                    <div class="flex items-center gap-1">
                        <img
                            src="{{ asset($staff['keterangan']['proyeksi_pengembangan'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}"
                            alt="{{ $staff['keterangan']['proyeksi_pengembangan'] ? 'Centang Hijau' : 'Silang Merah' }}"
                            class="w-3.5 h-3.5"
                        />
                        <span class="text-[#70787D] max-sm:text-[15px] max-sm:leading-tight leading-snug">Proyeksi Pengembangan</span>
                    </div>

                    <div class="flex items-center gap-1">
                        <img
                            src="{{ asset($staff['keterangan']['saran_pengembangan'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}"
                            alt="{{ $staff['keterangan']['saran_pengembangan'] ? 'Centang Hijau' : 'Silang Merah' }}"
                            class="w-3.5 h-3.5"
                        />
                        <span class="text-[#70787D] max-sm:text-[15px] max-sm:leading-tight leading-snug">Saran Pengembangan</span>
                    </div>
                </div>

                <div class="flex justify-center my-4">
                    <button class="text-white bg-gradient-to-r text-[16px] from-[#F7B23B] to-[#AD7D29] py-1.5 px-4 rounded-lg">Mulai Sekarang</button>
                </div>
            </div>
            @endforeach
        </div>

        <p class="text-[16px] max-sm:text-[13px] max-sm:leading-tight max-md:mx-20 md:hidden block text-[#4F4F4F] mt-2 max-sm:mx-4">*Harga masih bisa dinegosiasikan dan menyesuaikan dengan benefit yang ingin didapatkan.</p>
    </section>

</section>


{{-- PAKET SUPERVISOR PERUSAHAAN --}}
<section class="relative">
    <h2 class="text-center max-md:mt-3 text-3xl max-sm:text-2xl max-sm:mx-4 max-sm:mt-6 font-bold text-gradient mb-4 relative z-10">Psikotes Perusahaan untuk Supervisor</h2>
    <section>
        {{-- TAMPILAN DESKTOP --}}
        <div class="hidden md:block swiperContainer relative z-10">
            <div class="swiper" id="swiperPerusahaanSupervisor">
                <div class="swiper-wrapper">
                    @foreach ($supervisors as $supervisor)
                    <div class="swiper-slide">
                        <div class="bg-white rounded-2xl shadow-md flex flex-col text-center items-center justify-center h-full max-h-[500px] p-4 w-full max-w-[350px]">
                            <p class="text-black text-lg font-medium">{{ $supervisor['paket'] }}</p>
                            <p class="text-[32px] font-semibold text-[#3986A3] my-2 leading-none">{{ $supervisor['harga'] }}<span class="text-[#70787D] text-[18px] align-top">*</span></p>
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

                <p class="text-[16px] max-sm:text-[13px] max-sm:leading-tight text-[#4F4F4F] mt-2 max-sm:mx-4">*Harga masih bisa dinegosiasikan dan menyesuaikan dengan benefit yang ingin didapatkan.</p>
                <div class="swiper-pagination"></div>

            </div>
        </div>

        {{-- TAMPILAN MOBILE --}}
        <div class="grid grid-cols-1 gap-y-4 max-sm:mx-4 max-md:mx-20 mt-10 md:hidden relative z-10">
            @foreach ($supervisors as $supervisor)
            <div class="bg-white rounded-2xl shadow-md flex flex-col text-center items-center justify-center h-full px-4 py-2 w-full">
                <p class="text-black text-lg font-medium">{{ $supervisor['paket'] }}</p>
                <p class="text-[32px] max-sm:text-[30px] font-semibold text-[#3986A3] mt-1">{{ $supervisor['harga'] }}<span class="text-[#70787D] text-[13px] align-super">*</span></p>
                <img src="{{ asset('assets/images/landing/asset-konseling/vector/vector-divider.svg') }}" alt="Vector" class="my-2 w-full">

                <div class="flex flex-col space-y-1 text-left">
                    <div class="flex items-center gap-1">
                        <img
                            src="{{ asset($supervisor['keterangan']['tes_intelegensi'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}"
                            alt="{{ $supervisor['keterangan']['tes_intelegensi'] ? 'Centang Hijau' : 'Silang Merah' }}"
                            class="w-3.5 h-3.5"
                        />
                        <span class="text-[#70787D] max-sm:text-[15px] max-sm:leading-tight leading-snug">Tes Intelegensi</span>
                    </div>

                    <div class="flex items-center gap-1">
                        <img
                            src="{{ asset($supervisor['keterangan']['tes_sikap_kerja'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}"
                            alt="{{ $supervisor['keterangan']['tes_sikap_kerja'] ? 'Centang Hijau' : 'Silang Merah' }}"
                            class="w-3.5 h-3.5"
                        />
                        <span class="text-[#70787D] max-sm:text-[15px] max-sm:leading-tight leading-snug">Tes Sikap Kerja</span>
                    </div>

                    <div class="flex items-center gap-1">
                        <img
                            src="{{ asset($supervisor['keterangan']['tes_kepribadian'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}"
                            alt="{{ $supervisor['keterangan']['tes_kepribadian'] ? 'Centang Hijau' : 'Silang Merah' }}"
                            class="w-3.5 h-3.5"
                        />
                        <span class="text-[#70787D] max-sm:text-[15px] max-sm:leading-tight leading-snug">Tes Kepribadian</span>
                    </div>

                    <div class="flex items-center gap-1">
                        <img
                            src="{{ asset($supervisor['keterangan']['focus_group_discussion'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}"
                            alt="{{ $supervisor['keterangan']['focus_group_discussion'] ? 'Centang Hijau' : 'Silang Merah' }}"
                            class="w-3.5 h-3.5"
                        />
                        <span class="text-[#70787D] max-sm:text-[15px] max-sm:leading-tight leading-snug">Focus Group Discussion</span>
                    </div>

                    <div class="flex items-center gap-1">
                        <img
                            src="{{ asset($supervisor['keterangan']['wawancara'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}"
                            alt="{{ $supervisor['keterangan']['wawancara'] ? 'Centang Hijau' : 'Silang Merah' }}"
                            class="w-3.5 h-3.5"
                        />
                        <span class="text-[#70787D] max-sm:text-[15px] max-sm:leading-tight leading-snug">Wawancara</span>
                    </div>

                    <div class="flex items-center gap-1">
                        <img
                            src="{{ asset($supervisor['keterangan']['psikogram'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}"
                            alt="{{ $supervisor['keterangan']['psikogram'] ? 'Centang Hijau' : 'Silang Merah' }}"
                            class="w-3.5 h-3.5"
                        />
                        <span class="text-[#70787D] max-sm:text-[15px] max-sm:leading-tight leading-snug">Psikogram</span>
                    </div>

                    <div class="flex items-start gap-1">
                        <img
                            src="{{ asset($supervisor['keterangan']['deskripsi'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}"
                            alt="{{ $supervisor['keterangan']['deskripsi'] ? 'Centang Hijau' : 'Silang Merah' }}"
                            class="w-3.5 h-3.5 mt-0.5"
                        />
                        <span class="text-[#70787D] max-sm:text-[15px] max-sm:leading-tight leading-snug">Deskripsi Karakteristik, Kelemahan, Kelebihan, dan Rekomendasi</span>
                    </div>

                    <div class="flex items-center gap-1">
                        <img
                            src="{{ asset($supervisor['keterangan']['proyeksi_pengembangan'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}"
                            alt="{{ $supervisor['keterangan']['proyeksi_pengembangan'] ? 'Centang Hijau' : 'Silang Merah' }}"
                            class="w-3.5 h-3.5"
                        />
                        <span class="text-[#70787D] max-sm:text-[15px] max-sm:leading-tight leading-snug">Proyeksi Pengembangan</span>
                    </div>

                    <div class="flex items-center gap-1">
                        <img
                            src="{{ asset($supervisor['keterangan']['saran_pengembangan'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}"
                            alt="{{ $supervisor['keterangan']['saran_pengembangan'] ? 'Centang Hijau' : 'Silang Merah' }}"
                            class="w-3.5 h-3.5"
                        />
                        <span class="text-[#70787D] max-sm:text-[15px] max-sm:leading-tight leading-snug">Saran Pengembangan</span>
                    </div>
                </div>

                <div class="flex justify-center my-4">
                    <button class="text-white bg-gradient-to-r text-[16px] from-[#F7B23B] to-[#AD7D29] py-1.5 px-4 rounded-lg">Mulai Sekarang</button>
                </div>
            </div>
            @endforeach
        </div>
        <p class="text-[16px] max-sm:text-[13px] max-sm:leading-tight max-md:mx-20 md:hidden block text-[#4F4F4F] mt-2 max-sm:mx-4">*Harga masih bisa dinegosiasikan dan menyesuaikan dengan benefit yang ingin didapatkan.</p>
    </section>
</section>


{{-- BANNER INSTANSI PENDIDIKAN --}}
<section>
    <div class="bg-pendidikan relative mt-14 mx-20 max-sm:mx-4 rounded-3xl p-10 max-sm:p-5 h-auto z-10">
        <div class="absolute inset-0 bg-[#D7E6ED] rounded-3xl flex mix-blend-multiply"></div>

        <div class="relative flex flex-col h-full text-left max-md:text-center space-y-3 justify-center">
            <h1 class="text-5xl max-sm:text-3xl max-md:text-4xl text-black font-semibold ">Psikotes Kategori Pendidikan</h1>
            <p class="text-[#3F3F3F] text-justify max-sm:leading-normal max-sm:text-[15px] text-lg max-lg:text-[17px]">
                Psikotes untuk Instansi Pendidikan digunakan untuk mengenal gaya belajar, cita-cita, jurusan, minat bakat yang sesuai dengan SobatBinar.
            </p>
            <a href="{{ route('psikotes-new/daftar-psikotes') }}">
                <div class="flex justify-start max-md:justify-center z-10">
                    <button class="text-white bg-gradient-to-r max-sm:text-[15px] text-md from-[#3986A3] to-[#225062] py-2 px-4 max-sm:px-6 rounded-xl max-sm:rounded-md">Daftar Psikotes Instansi Pendidikan</button>
                </div>
            </a>
        </div>

        <div class="absolute bottom-3 right-3 z-0">
            <p class="text-sm font-light max-sm:text-[12px] text-[#95a1a3]">Sumber: Freepik</p>
        </div>
    </div>
</section>


{{-- PAKET PSIKOTES INSTANSI PENDIDIKAN --}}
<section class="relative">
    {{-- TAMPILAN DESKTOP --}}
    <div class="hidden md:block swiperContainer relative z-10">
        <div class="swiper" id="swiperPendidikan">
            <div class="swiper-wrapper">
                @foreach ($pendidikans as $pendidikan)
                <div class="swiper-slide">
                    <div class="bg-white rounded-2xl shadow-md flex flex-col text-center items-center justify-center h-full max-h-[350px] p-4 w-full max-w-[250px]">
                        <img src="{{ asset($pendidikan['illustrasi']) }}" alt="{{ $pendidikan['paket'] }}" class="h-14 w-auto object-contain">
                        <p class="text-black text-lg font-medium min-h-[50px] items-center leading-snug mt-1">{{ $pendidikan['paket'] }}</p>
                        <p class="text-[32px] font-semibold text-[#3986A3] -mt-1 leading-none">{{ $pendidikan['harga'] }}<span class="text-[#70787D] text-[18px] align-top">*</span></p>
                        <img src="{{ asset('assets/images/landing/asset-konseling/vector/vector-divider.svg') }}" alt="Vector" class="my-4 w-full">

                        <div class="flex flex-col space-y-1">
                            <div class="flex items-center gap-1">
                                <img
                                    src="{{ asset($pendidikan['keterangan']['laporan_tertulis'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}"
                                    alt="{{ $pendidikan['keterangan']['laporan_tertulis'] ? 'Centang Hijau' : 'Silang Merah' }}"
                                    class="w-3.5 h-3.5 object-contain"
                                />
                                <span class="text-[#70787D]">Laporan Tertulis</span>
                            </div>

                            <div class="flex items-center gap-1">
                                <img
                                    src="{{ asset($pendidikan['keterangan']['tes_gaya_belajar'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}"
                                    alt="{{ $pendidikan['keterangan']['tes_gaya_belajar'] ? 'Centang Hijau' : 'Silang Merah' }}"
                                    class="w-3.5 h-3.5 object-contain"
                                />
                                <span class="text-[#70787D]">Konseling Hasil Tes</span>
                            </div>

                            <div class="flex items-center gap-1">
                                <img
                                    src="{{ asset($pendidikan['keterangan']['konseling_hasil_tes'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}"
                                    alt="{{ $pendidikan['keterangan']['konseling_hasil_tes'] ? 'Centang Hijau' : 'Silang Merah' }}"
                                    class="w-3.5 h-3.5 object-contain"
                                />
                                <span class="text-[#70787D]">Konseling Hasil Tes</span>
                            </div>
                        </div>

                        <div class="flex justify-center my-3">
                            <button class="text-white bg-gradient-to-r text-sm from-[#F7B23B] to-[#AD7D29] py-1.5 px-4 rounded-lg">Mulai Sekarang</button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <p class="text-[16px] max-sm:text-[13px] max-sm:leading-tight text-[#4F4F4F] mt-2 max-sm:mx-4">*Harga masih bisa dinegosiasikan dan menyesuaikan dengan benefit yang ingin didapatkan.</p>
            <div class="swiper-pagination"></div>

        </div>
    </div>

    {{-- TAMPILAN MOBILE --}}
    <div class="grid grid-cols-2 gap-4 max-sm:mx-4 max-md:mx-20 mt-5 md:hidden justify-between relative z-10">
        @foreach ($pendidikans as $pendidikan)
        <div class="bg-white rounded-2xl shadow-md flex flex-col text-center items-center justify-center h-full p-4 w-full">
            <img src="{{ asset($pendidikan['illustrasi']) }}" alt="{{ $pendidikan['paket'] }}" class="h-10 w-auto object-contain">
            <p class="text-black text-[16px] font-medium dynamic-height leading-none">{{ $pendidikan['paket'] }}</p>
            <p class="text-[22px] font-semibold text-[#3986A3] mt-0.5 leading-none">{{ $pendidikan['harga'] }}<span class="text-[#70787D] text-[13px] align-top">*</span></p>
            <img src="{{ asset('assets/images/landing/asset-konseling/vector/vector-divider.svg') }}" alt="Vector" class="my-1 w-full">

            <div class="flex flex-col gap-y-0.5 text-left">
                <div class="flex items-start gap-1">
                    <img
                        src="{{ asset($pendidikan['keterangan']['laporan_tertulis'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}"
                        alt="{{ $pendidikan['keterangan']['laporan_tertulis'] ? 'Centang Hijau' : 'Silang Merah' }}"
                        class="w-3 h-3 mt-1 object-contain"
                    />
                    <span class="text-[#70787D] max-sm:text-[14px] max-sm:leading-tight leading-snug">Laporan Tertulis</span>
                </div>

                <div class="flex items-start gap-1">
                    <img
                        src="{{ asset($pendidikan['keterangan']['tes_gaya_belajar'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}"
                        alt="{{ $pendidikan['keterangan']['tes_gaya_belajar'] ? 'Centang Hijau' : 'Silang Merah' }}"
                        class="w-3 h-3 mt-1 object-contain"
                    />
                    <span class="text-[#70787D] max-sm:text-[14px] max-sm:leading-tight leading-snug">Tes Gaya Belajar</span>
                </div>

                <div class="flex items-start gap-1">
                    <img
                        src="{{ asset($pendidikan['keterangan']['konseling_hasil_tes'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}"
                        alt="{{ $pendidikan['keterangan']['konseling_hasil_tes'] ? 'Centang Hijau' : 'Silang Merah' }}"
                        class="w-3 h-3 mt-1 object-contain"
                    />
                    <span class="text-[#70787D] max-sm:text-[14px] max-sm:leading-tight leading-snug">Konseling Hasil Tes</span>
                </div>
            </div>

            <div class="flex justify-center mt-3 w-full">
                <button class="text-white w-full bg-gradient-to-r text-[13px] from-[#F7B23B] to-[#AD7D29] py-1.5 rounded-xl">Mulai Sekarang</button>
            </div>
        </div>
        @endforeach
    </div>
    <p class="text-[16px] max-sm:text-[13px] max-sm:leading-tight max-md:mx-20 md:hidden block text-[#4F4F4F] mt-2 max-sm:mx-4">*Harga masih bisa dinegosiasikan dan menyesuaikan dengan benefit yang ingin didapatkan.</p>
</section>


{{-- BANNER KOMUNITAS --}}
<section>
    <div class="bg-komunitas relative mt-10 mx-20 max-sm:mx-4 rounded-3xl p-10 max-sm:p-5 h-auto z-10">
        <div class="absolute inset-0 bg-[#D7E6ED] rounded-3xl flex mix-blend-multiply"></div>

        <div class="relative flex flex-col h-full text-left max-md:text-center space-y-3 justify-center">
            <h1 class="text-5xl max-sm:text-3xl max-md:text-4xl text-black font-semibold ">Psikotes Kategori Komunitas</h1>
            <p class="text-[#3F3F3F] text-justify max-sm:leading-normal max-sm:text-[15px] text-lg max-lg:text-[17px]">
                Psikotes untuk Komunitas ini bertujuan untuk mengetahui kesiapan pernikahan, menjadi orang tua, kecocokan bersama pasangan, tingkat stress, depresi, kecemasan, memori, dan dimensia.
            </p>
            <a href="{{ route('psikotes-new/daftar-psikotes') }}">
                <div class="flex justify-start max-md:justify-center z-10">
                    <button class="text-white bg-gradient-to-r max-sm:text-[15px] text-md from-[#3986A3] to-[#225062] py-2 px-4 max-sm:px-6 rounded-xl max-sm:rounded-md">Daftar Psikotes Komunitas</button>
                </div>
            </a>
        </div>

        <div class="absolute bottom-3 right-3 z-0">
            <p class="text-sm font-light max-sm:text-[12px] text-[#95a1a3]">Sumber: Freepik</p>
        </div>
    </div>
</section>


{{-- PAKET PSIKOTES KOMUNITAS --}}
<section class="relative">
    {{-- TAMPILAN DESKTOP --}}
    <div class="hidden md:block swiperContainer relative z-10">
        <div class="swiper" id="swiperKomunitas">
            <div class="swiper-wrapper">
                @foreach ($communitys as $community)
                <div class="swiper-slide">
                    <div class="bg-white rounded-2xl shadow-md flex flex-col text-center items-center justify-center h-full max-h-[330px] p-4 w-full max-w-[250px]">
                        <img src="{{ asset($community['illustrasi']) }}" alt="{{ $community['paket'] }}" class="h-14 w-auto object-contain">
                        <p class="text-black text-lg font-medium min-h-[50px] items-center leading-snug mt-1">{{ $community['paket'] }}</p>
                        <p class="text-[32px] font-semibold text-[#3986A3] -mt-1 leading-none">{{ $community['harga'] }}<span class="text-[#70787D] text-[18px] align-top">*</span></p>
                        <img src="{{ asset('assets/images/landing/asset-konseling/vector/vector-divider.svg') }}" alt="Vector" class="my-4 w-full">

                        <div class="flex flex-col space-y-1">
                            <div class="flex items-center gap-1">
                                <img
                                    src="{{ asset($community['keterangan']['laporan_tertulis'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}"
                                    alt="{{ $community['keterangan']['laporan_tertulis'] ? 'Centang Hijau' : 'Silang Merah' }}"
                                    class="w-3.5 h-3.5 object-contain"
                                />
                                <span class="text-[#70787D]">Laporan Tertulis</span>
                            </div>

                            <div class="flex items-center gap-1">
                                <img
                                    src="{{ asset($community['keterangan']['konseling_hasil_tes'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}"
                                    alt="{{ $community['keterangan']['konseling_hasil_tes'] ? 'Centang Hijau' : 'Silang Merah' }}"
                                    class="w-3.5 h-3.5 object-contain"
                                />
                                <span class="text-[#70787D]">Konseling Hasil Tes</span>
                            </div>
                        </div>

                        <div class="flex justify-center my-3">
                            <button class="text-white bg-gradient-to-r text-sm from-[#F7B23B] to-[#AD7D29] py-1.5 px-4 rounded-lg">Mulai Sekarang</button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <p class="text-[16px] max-sm:text-[13px] max-sm:leading-tight text-[#4F4F4F] mt-2 max-sm:mx-4">*Harga masih bisa dinegosiasikan dan menyesuaikan dengan benefit yang ingin didapatkan.</p>
            <div class="swiper-pagination"></div>

        </div>
    </div>

    {{-- TAMPILAN MOBILE --}}
    <div class="grid grid-cols-2 gap-4 max-sm:mx-4 max-md:mx-20 mt-5 md:hidden justify-between relative z-10">
        @foreach ($communitys as $community)
        <div class="bg-white rounded-2xl shadow-md flex flex-col text-center items-center justify-center h-full p-4 w-full">
            <img src="{{ asset($community['illustrasi']) }}" alt="{{ $community['paket'] }}" class="h-10 w-auto object-contain">
            <p class="text-black text-[16px] font-medium dynamic-height-3 leading-none">{{ $community['paket'] }}</p>
            <p class="text-[22px] font-semibold text-[#3986A3] mt-0.5 leading-none">{{ $community['harga'] }}<span class="text-[#70787D] text-[13px] align-top">*</span></p>
            <img src="{{ asset('assets/images/landing/asset-konseling/vector/vector-divider.svg') }}" alt="Vector" class="my-1 w-full">

            <div class="flex flex-col gap-y-0.5 text-left">
                <div class="flex items-start gap-1">
                    <img
                        src="{{ asset($community['keterangan']['laporan_tertulis'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}"
                        alt="{{ $community['keterangan']['laporan_tertulis'] ? 'Centang Hijau' : 'Silang Merah' }}"
                        class="w-3 h-3 mt-1 object-contain"
                    />
                    <span class="text-[#70787D] max-sm:text-[14px] max-sm:leading-tight leading-snug">Laporan Tertulis</span>
                </div>

                <div class="flex items-start gap-1">
                    <img
                        src="{{ asset($community['keterangan']['konseling_hasil_tes'] ? 'assets/images/landing/asset-psikotes/icon/check.svg' : 'assets/images/landing/asset-psikotes/icon/cross.svg') }}"
                        alt="{{ $community['keterangan']['konseling_hasil_tes'] ? 'Centang Hijau' : 'Silang Merah' }}"
                        class="w-3 h-3 mt-1 object-contain"
                    />
                    <span class="text-[#70787D] max-sm:text-[14px] max-sm:leading-tight leading-snug">Konseling Hasil Tes</span>
                </div>
            </div>

            <div class="flex justify-center mt-3 w-full">
                <button class="text-white w-full bg-gradient-to-r text-[13px] from-[#F7B23B] to-[#AD7D29] py-1.5 rounded-xl">Mulai Sekarang</button>
            </div>
        </div>
        @endforeach
    </div>
    <p class="text-[16px] max-sm:text-[13px] max-sm:leading-tight max-md:mx-20 md:hidden block text-[#4F4F4F] mt-2 max-sm:mx-4">*Harga masih bisa dinegosiasikan dan menyesuaikan dengan benefit yang ingin didapatkan.</p>
</section>


{{-- TESTIMONI USER --}}
<section class="mt-6">
    <p class="max-sm:text-[29px] text-4xl font font-semibold text-black text-center my-5 max-sm:my-4 max-sm:mx-2 mx-20 relative z-10">Apa Kata Mereka Tentang Psikotes di <span class="bg-primary text-white px-2 ">Berbinar</span> ?</p>
    <div class="swiperContainer">
        <div class="swiper" id="swiperTestimoni">
            <div class="swiper-wrapper max-sm:pb-8 pb-1">
                @foreach ($testimonis as $testimoni)
                <div class="swiper-slide">
                    <div class="bg-white rounded-3xl shadow-md flex flex-col justify-center text-center items-center h-auto w-auto p-5">
                        <img src="{{ asset('assets/images/landing/vector-kutip.png') }}" alt="Kutip" class="max-sm:h-7 h-8 w-auto">

                        <div class="pt-4 text-center flex flex-col flex-grow">
                            <p class="max-sm:text-[15px] max-sm:leading-tight max-md:leading-snug text-[16px] text-black font-medium flex-grow text-justify max-lg:min-h-[168px] min-h-[168px]">
                                {{ $testimoni['comment'] }}
                            </p>
                        </div>

                        <div class="flex flex-col items-center max-sm:mt-1 mt-5 max-lg:mt-2 text-center">
                            <img src="{{ asset($testimoni['image']) }}" alt="Kutip" class="max-sm:h-14 h-[70px] w-auto rounded-full">
                            {{-- <p class="max-sm:text-[15px] text-[17px] text-black font-semibold">
                                {{ $testimoni['name'] }}
                            </p> --}}
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


{{-- DOKUMENTASI PSIKOTES --}}
<section>
    <p class="max-sm:text-[29px] text-4xl font font-semibold text-black text-center my-8 max-sm:my-4 max-sm:mx-2 mx-20 relative z-10">Mengapa Harus Psikotes di <span class="bg-primary text-white px-2 ">Berbinar</span></p>

    <div class="swiperContainer md:block hidden">
        <div class="swiper" id="swiperDokumentasi">
            <div class="swiper-wrapper">
                @foreach ($dokumentasis as $dokumentasi)
                <div class="swiper-slide">
                    <div class="relative">
                        <img src="{{ asset($dokumentasi['image']) }}" alt="Dokumentasi" class="h-52 w-[345px] object-cover rounded-xl">
                        <p class="absolute left-4 top-4 bg-[#FEF7EB] text-[#C78E2E] px-2 py-1 rounded-md text-sm">{{ $dokumentasi['jenis_psikotes'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="swiper-pagination hidden sm:block"></div>
        </div>
    </div>

    <div class="swiper-container swiperDokumentasiMobile md:hidden block overflow-hidden">
        <div class="swiper-wrapper">
            @foreach ($dokumentasis as $dokumentasi)
            <div class="swiper-slide">
                <div class="relative">
                    <img src="{{ asset($dokumentasi['image']) }}" alt="Dokumentasi" class="w-full h-[270px] object-cover rounded-xl">
                    <p class="absolute left-4 top-4 bg-[#FEF7EB] text-[#C78E2E] px-2 py-1 rounded-md text-sm">{{ $dokumentasi['jenis_psikotes'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


{{-- BANNER ACE --}}
<section>
    <div class="bg-pendidikan relative mt-14 mx-20 max-sm:mx-4 rounded-3xl p-10 max-sm:p-5 h-auto z-10">
        <div class="absolute inset-0 bg-[#D7E6ED] rounded-3xl flex mix-blend-multiply"></div>

        <div class="relative flex flex-col h-full text-left max-md:text-center space-y-4 justify-center">
            <h1 class="text-4xl max-sm:text-3xl max-md:text-4xl text-black font-semibold italic mb-2">Active Campaign Empowerment (ACE)</h1>
            <div class="text-[#3F3F3F] text-justify max-sm:leading-normal max-sm:text-[15px] text-lg max-lg:text-[17px] flex flex-col max-sm:gap-y-1 gap-y-3">
                <p>Rangkaian acara tahunan dari Berbinar yang dirancang untuk mengenalkan produk psikotes kami secara lebih luas kepada khalayak.
                Event ini menjadi wadah bagi siapa saja yang ingin memperluas wawasan di bidang psikologi sekaligus memahami lebih dalam pentingnya pengenalan diri untuk pengembangan pribadi maupun profesional.</p>

                <p>Dalam ACE, kami menghadirkan <span class="font-bold">webinar eksklusif</span> yang menghadirkan pembicara-pembicara terkemuka di bidang psikologi. Melalui diskusi interaktif dan materi yang mendalam,
                peserta akan mendapatkan insight berharga tentang berbagai topik terkait psikologi dan pengembangan diri.</p>

                <p>Event ini berlangsung selama <span class="font-bold">tiga sesi</span> penuh aktivitas, mulai dari edukasi hingga kampanye kreatif, yang memberikan kesempatan bagi peserta untuk mengenal produk-produk psikotes kami lebih dekat.</p>
            </div>

            <div class="swiper-container swiperDokumentasiAce md:hidden block overflow-hidden">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{ asset('assets/images/landing/asset-psikotes/komunitas/komunitas1.png') }}" alt="Komunitas" class="w-full h-[270px] object-cover rounded-xl">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('assets/images/landing/asset-psikotes/komunitas/komunitas2.png') }}" alt="Komunitas" class="w-full h-[270px] object-cover rounded-xl">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('assets/images/landing/asset-psikotes/komunitas/komunitas3.png') }}" alt="Komunitas" class="w-full h-[270px] object-cover rounded-xl">
                    </div>
                </div>
            </div>

            <a href="{{ route('psikotes-new/daftar-psikotes') }}">
                <div class="flex justify-start max-md:justify-center z-10">
                    <button class="text-white bg-gradient-to-r max-sm:text-[15px] text-md from-[#3986A3] to-[#225062] py-2 px-4 max-sm:px-6 rounded-xl max-sm:rounded-md">Daftar Psikotes Komunitas</button>
                </div>
            </a>
        </div>

        <div class="absolute bottom-3 right-3 z-0">
            <p class="text-sm font-light max-sm:text-[12px] text-[#95a1a3]">Sumber: Freepik</p>
        </div>
    </div>
</section>


{{-- DOKUMENTASI --}}
<section>
    <div class="mx-20 my-5 max-lg:my-8 hidden md:block">
        <div class="flex flex-wrap justify-center items-center w-full gap-x-8 gap-y-5 ">
            <div class="relative">
                <img src="{{ asset('assets/images/landing/asset-psikotes/komunitas/komunitas1.png') }}" alt="Komunitas" class="h-52 w-[345px] max-lg:w-[450px] max-lg:h-[250px] object-cover rounded-xl">
            </div>

            <div class="relative">
                <img src="{{ asset('assets/images/landing/asset-psikotes/komunitas/komunitas2.png') }}" alt="Komunitas" class="h-52 w-[345px] max-lg:w-[450px] max-lg:h-[250px] object-cover rounded-xl">
            </div>

            <div class="relative">
                <img src="{{ asset('assets/images/landing/asset-psikotes/komunitas/komunitas3.png') }}" alt="Komunitas" class="h-52 w-[345px] max-lg:w-[450px] max-lg:h-[250px] object-cover rounded-xl">
            </div>
        </div>
    </div>
</section>


{{-- FAQS --}}
<section class="z-10 mx-4 max-md:mt-10 sm:mx-20 mb-10 mt-20 relative">
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
