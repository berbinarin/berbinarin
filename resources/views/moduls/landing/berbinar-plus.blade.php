@extends('layouts.main', [
'title' => 'Berbinar+',
'active' => 'Produk Berbinar',
'page' => 'Kelas',
])

@section('content')
{{-- HERO SECTION --}}
<section class="max-w-6xl mx-auto flex flex-col md:flex-row items-center justify-center relative px-5 md:px-0 mt-28 md:mt-13">
    {{-- HERO IMG MOBILE --}}
    <img src="{{ asset('assets/images/products/ilustrasi-berbinar-plus.png') }}" alt="Ilustrasi Konseling Berbinar" title="Ilustrasi Konseling Berbinar" class="w-full block md:hidden" data-aos="fade-up" data-aos-duration="1500">

    {{-- HERO CONTENT --}}
    <div class="relative flex items-center">
        {{--<div class="bg-blur-bg rounded-[700px] blur-[55px] w-[300px] md:w-[600px] h-[250px] md:h-[600px] absolute">
        </div>--}}
        <div class="flex flex-col gap-5 z-40 relative">
            <h1 class="font-semibold text-black text-[40px] md:text-[64px] leading-[100%] md:leading-[120%]">
                <span class="text-primary">BERBINAR<span class="text-7xl">+</span></span>
            </h1>
            <p class="text-lg text-black"><span class="text-primary font-semibold">BERBINAR<span class="text-[20px]">+</span></span> adalah layanan ONE-PACKAGE yang terdiri dari kelas daring
                berbasis video pembelajaran, konseling materi secara langsung, dan psikotes yang disediakan oleh
                Berbinar Insightful Indonesia. Produk ini dapat diakses oleh peserta kapanpun dan dimanapun sesuai
                dengan syarat dan ketentuan yang berlaku. Peserta bebas memilih kelas yang ditawarkan serta layanan apa
                saja yang akan diambil.
            </p>
            <a href="https://bit.ly/CounselingWithBerbinar" class="text-lg text-white bg-primary-alt rounded-md hover:bg-primary duration-700 px-5 py-2 w-fit">Ikuti
                <span class="font-semibold"> BERBINAR+</span></a>
        </div>
    </div>

    {{-- HERO IMG DESKTOP --}}
    <img src="{{ asset('assets/images/products/ilustrasi-berbinar-plus.png') }}" alt="Ilustrasi Konseling Berbinar" title="Ilustrasi Konseling Berbinar" class="w-1/2 hidden md:block" data-aos="fade-left" data-aos-duration="1500">
</section>

{{-- LAYANAN BERBINAR+ SECTION --}}
<section class="max-w-6xl mx-auto flex flex-col gap-10 z-40 mt-10">
    <div class="flex items-center justify-center flex-col gap-1">
        <h1 class="text-black fomt-semibold text-3xl p-5 md:px-0 text-center">
            Layanan <span class="text-primary font-bold">BERBINAR<span class="text-[36px]">+</span></span>
        </h1>
        {{--<p class="text-black text-lg">Layanan yang kami sediakan</p>--}}
    </div>

    <div class="relative flex items-center bg-no-repeat bg-center pb-10">
        <img src="{{ asset('assets/images/logo-berbinar.png') }}" class="absolute opacity-25 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2"></img>
        <div class=" flex flex-col md:flex-row gap-5 md:gap-3">
            <div class="flex flex-col backdrop-blur-md bg-white/10 shadow-lg ring-1 ring-black/5 gap-4 mx-8 md:mx-0 rounded-xl relative pb-6 flex-1" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="500">

                <img src="{{ asset('assets/images/products/berbinar-plus/kelasDaring.png') }}" alt="Ilustrasi Peer Counselor Berbinar" title="Ilustrasi Peer Counselor Berbinar" class="w-[300px] mx-auto rounded-tl-xl rounded-tr-xl p-4">

                <div class="flex flex-col gap-1 text-center px-8 items-center justify-center">
                    <h3 class="text-black text-xl font-semibold">Kelas Daring</h3>
                    <p class="text-black text-base text-justify pb-12">
                        Pemberian akses video materi yang disampaikan oleh narasumber sekaligus mentor kompeten sesuai
                        dengan topik kelas yang tersedia. Kelas yang kami sediakan cukup bervariatif misal kelas
                        Jobseekers
                        yang dapat membantu dirimu untuk menemukan pekerjaan.
                    </p>
                </div>
            </div>

            <div class="flex flex-col backdrop-blur-md bg-white/10 shadow-lg ring-1 ring-black/5 gap-4 mx-8 md:mx-0 rounded-xl relative pb-6 flex-1" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="1000">

                <img src="{{ asset('assets/images/products/berbinar-plus/konselingKelas.png') }}" alt="Ilustrasi Asesmen Psikologi Berbinar" title="Ilustrasi Asesmen Psikologi Berbinar" class="w-[300px] mx-auto rounded-tl-xl rounded-tr-xl p-4">

                <div class="flex flex-col gap-1 text-center px-5 items-center justify-center">
                    <h3 class="text-black text-xl font-semibold">Konseling</h3>
                    <p class="text-black text-base">
                        Peserta dapat menambahkan paket konseling yang terdiri dari:
                    <div class="text-black text-base text-justify relative overflow-auto p-5">
                        <ul class="list-outside list-disc">
                            <li>Psikolog counseling adalah proses pemberian bantuan yang dilakukan oleh seorang ahli
                                kepada
                                individu yang mengalami sesuatu masalah seperti kepribadian, mental dll.</li>
                            <li>Peer Counseling (konseling sebaya) adalah seseorang yang telah dilatih oleh psikolog
                                yang
                                sudah
                                memiliki izin praktek dan umum nya melayani klien yang usianya seumuran atau sebaya.
                            </li>
                        </ul>
                    </div>
                    </p>
                    {{--<a href="https://youtu.be/otURwfU7EiU?si=Xg5EuAQsrTKGS2Bv" class="text-base text-white bg-primary-alt rounded-md hover:bg-primary duration-700 px-5 py-2 absolute bottom-5">Lihat</a>--}}
                </div>
            </div>

            <div class="flex flex-col backdrop-blur-md bg-white/10 shadow-lg ring-1 ring-black/5 gap-4 mx-8 md:mx-0 rounded-xl relative pb-6 flex-1" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="1500">

                <img src="{{ asset('assets/images/products/berbinar-plus/psikotes.png') }}" alt="Ilustrasi Kelas Berbinar" title="Ilustrasi Kelas Berbinar" class="w-[300px] mx-auto rounded-tl-xl rounded-tr-xl p-4">
                <div class="flex flex-col gap-1 text-center px-8 items-center justify-center">
                    <h3 class="text-black text-xl font-semibold">Psikotes</h3>
                    <p class="text-black text-base text-justify pb-12">
                        Paket upgrade ketiga yang ditawarkan Berbinar Insightful Indonesia apabila peserta masih ingin
                        mencari informasi terkait materi yang telah diterima setelah melewati dua tahap sebelumnya.
                    </p>
                    {{--<a href="https://youtu.be/6s0zmkefWkQ?si=9ssA783fAvBYyVmT"
                    class="text-base text-white bg-primary-alt rounded-md hover:bg-primary duration-700 px-5 py-2 absolute bottom-5">Lihat</a>--}}
                </div>
            </div>
        </div>
    </div>
</section>

{{-- KELAS BERBINAR+ SECTION --}}
<section class="max-w-6xl mx-auto flex flex-col gap-10 z-40 mt-14">
    <div class="flex items-center justify-center flex-col gap-1">
        <h1 class="text-black fomt-semibold text-3xl px-5 md:px-0 text-center">
            Daftar Kelas <span class="text-primary font-bold">BERBINAR<span class="text-[36px]">+</span></span>
        </h1>
        {{--<p class="text-black text-lg">Berikut adalah daftar kelas yang ada pada <span
                class="text-primary font-semibold">BERBINAR<span class="text-[20px]">+</span></span></p>--}}
    </div>

    <div class="flex flex-col gap-5 md:gap-3">

        {{-- kelas jobseekers --}}
        <div class="flex flex-col md:flex-row gap-4 mx-8 md:mx-0 relative pb-6 flex-1" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="500">

            {{--<img src="{{ asset('assets/images/products/berbinar-plus/Gradient.png') }}"
            alt="Ilustrasi Jobseekers BERBINAR+" title="Ilustrasi Jobseekers BERBINAR+"
            class="w-[400px] rounded-tl-xl rounded-tr-xl p-4">--}}

            <img src="{{ asset('assets/images/products/berbinar-plus/Jobseekers.png') }}" alt="Ilustrasi Jobseekers BERBINAR+" title="Ilustrasi Jobseekers BERBINAR+" class="w-[400px] flex flex-row rounded-tl-xl rounded-tr-xl p-4">

            <div class="flex flex-row relative items-center">
                <div class="flex flex-col gap-1 text-center px-5 items-start relative justify-start">
                    <h3 class="text-black text-xl font-semibold">Jobseekers</h3>
                    <p class="text-black text-base text-justify p-2">
                        Membantu para calon pencari kerja atau jobseekers meningkatkan
                        keterampilan dan kemampuan yang dibutuhkan untuk mencari pekerjaan. Dengan sub tema:
                    <div class="text-black text-base text-justify relative overflow-auto px-5 pb-5 mb-5">
                        <ul class="list-outside list-disc">
                            <li>CV (Curriculum Vitae)</li>
                            <li>Job Interview</li>
                        </ul>
                    </div>
                    </p>
                    <a href="https://youtu.be/UlPJY2q4m1g?si=m9FKNUnrteU_EgZ0" class="text-lg text-white bg-primary-alt rounded-md hover:bg-primary duration-700 px-5 py-2 w-fit">Daftar
                        Kelas</a>

                    {{--<div class=" flex flex-col justify-start justify-items-start gap-1">
                        <a href="https://youtu.be/UlPJY2q4m1g?si=m9FKNUnrteU_EgZ0" class="text-base text-white bg-primary-alt rounded-md hover:bg-primary duration-700 px-5 py-2 absolute bottom-24 right-[550px]">Daftar
                            Kelas</a>
                    </div>--}}
                </div>
            </div>
        </div>

        {{-- kelas product management --}}
        <div class="flex flex-col md:flex-row gap-4 mx-8 md:mx-0 relative pb-6 flex-1" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="1000">

            <img src="{{ asset('assets/images/products/berbinar-plus/PM.png') }}" alt="Ilustrasi Asesmen Psikologi Berbinar" title="Ilustrasi Asesmen Psikologi Berbinar" class="w-[400px] flex flex-row block md:hidden rounded-tl-xl rounded-tr-xl p-4">

            <div class="flex flex-row relative items-center">
                <div class="flex flex-col gap-1 text-center px-5 pb-5 mb-5 items-start relative justify-start">
                    <h3 class="text-black text-xl font-semibold">Product Management</h3>
                    <p class="text-black text-base text-justify p-2">
                        Memberikan pemahaman lebih dalam menentukan strategi perusahaan yang berhubungan dengan
                        pengembangan
                        & peluncuran suatu produk bisnis. Dengan sub tema:
                    <div class="text-black text-base text-justify relative overflow-auto px-5 pb-10 mb-10">
                        <ul class="list-outside list-disc">
                            <li>Pengenalan & strategi product management dalam dunia Kerja</li>
                            <li>Pengembangan produk digital</li>
                            <li>Proses bisnis dan perencanaan akselerasi karir</li>
                        </ul>
                    </div>
                    </p>
                    <a href="https://youtu.be/UlPJY2q4m1g?si=m9FKNUnrteU_EgZ0" class="text-base text-white bg-primary-alt rounded-md hover:bg-primary duration-700 px-5 py-2 absolute bottom-5">Daftar
                        Kelas</a>
                    {{--<div class="flex flex-col gap-1 text-center p-4 items-center justify-center">
                        <a href="https://youtu.be/UlPJY2q4m1g?si=m9FKNUnrteU_EgZ0" class="text-base text-white bg-primary-alt rounded-md hover:bg-primary duration-700 px-5 py-2 absolute bottom-5">Daftar
                            Kelas</a>
                    </div>--}}
                </div>
            </div>
            <img src="{{ asset('assets/images/products/berbinar-plus/PM.png') }}" alt="Ilustrasi Asesmen Psikologi Berbinar" title="Ilustrasi Asesmen Psikologi Berbinar" class="w-[400px] flex flex-row hidden md:block rounded-tl-xl rounded-tr-xl p-4">
        </div>

        {{-- kelas human resource --}}
        <div class="flex flex-col md:flex-row gap-4 mx-8 md:mx-0 relative pb-6 flex-1" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="1500">

            <img src="{{ asset('assets/images/products/berbinar-plus/hr.png') }}" alt="Ilustrasi Kelas Berbinar" title="Ilustrasi Kelas Berbinar" class="w-[400px] flex flex-row rounded-tl-xl rounded-tr-xl p-4">

            <div class="flex flex-row relative items-center">
                <div class="flex flex-col gap-1 text-center px-5 pb-5 mb-5 items-start relative justify-start">
                    <h3 class="text-black text-xl font-medium">Human Resource</h3>
                    <p class="text-black text-base text-justify pb-2">
                        Kelas yang ditawarkan untuk membantu individu atau tim dalam mempelajari dan meningkatkan
                        keterampilan mengelola produk dan layanan. Dengan sub tema:
                    <div class="text-black text-base text-justify relative overflow-auto px-5 pb-10 mb-10">
                        <ul class="list-outside list-disc">
                            <li>Pengantar sumber daya manusia & mekanisme kerja</li>
                            <li>Human resource recruitment process & struktur organisasi</li>
                            <li>Career preparation</li>
                        </ul>
                    </div>
                    </p>
                    <a href="https://youtu.be/6s0zmkefWkQ?si=9ssA783fAvBYyVmT" class="text-base text-white bg-primary-alt rounded-md hover:bg-primary duration-700 px-5 py-2 absolute bottom-5">Daftar
                        Kelas</a>
                </div>
            </div>
        </div>

        {{-- kelas graphic designer --}}
        <div class="flex flex-col md:flex-row gap-4 mx-8 md:mx-0 relative pb-6 flex-1" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="1000">

            <img src="{{ asset('assets/images/products/berbinar-plus/design.png') }}" alt="Ilustrasi Asesmen Psikologi Berbinar" title="Ilustrasi Asesmen Psikologi Berbinar" class="w-[400px] flex flex-row block md:hidden rounded-tl-xl rounded-tr-xl p-4">

            <div class="flex flex-row relative items-center">
                <div class="flex flex-col gap-1 text-center px-5 pb-5 mb-5 items-start relative justify-start">
                    <h3 class="text-black text-xl font-semibold">Graphic Designer</h3>
                    <p class="text-black text-base text-justify p-2">
                        Kelas yang ditawarkan untuk membantu dalam mempelajari dasar-dasar design graphic dan teknik
                        design graphic yang lebih kompleks. Dengan sub tema:
                    <div class="text-black text-base text-justify relative overflow-auto px-5 pb-10 mb-10">
                        <ul class="list-outside list-disc">
                            <li>Prinsip-prinsip desain grafis dan berbagai jenis elemen design graphic</li>
                            <li>Presentasi design dan membuat portofolio design graphic yang efektif</li>
                            <li>Design graphic untuk platform media sosial dan teknik ilustrasi digital</li>
                        </ul>
                    </div>
                    </p>
                    <a href="https://youtu.be/UlPJY2q4m1g?si=m9FKNUnrteU_EgZ0" class="text-base text-white bg-primary-alt rounded-md hover:bg-primary duration-700 px-5 py-2 absolute bottom-5">Daftar
                        Kelas</a>
                    {{--<div class="flex flex-col gap-1 text-center p-4 items-center justify-center">
                        <a href="https://youtu.be/UlPJY2q4m1g?si=m9FKNUnrteU_EgZ0"
                            class="text-base text-white bg-primary-alt rounded-md hover:bg-primary duration-700 px-5 py-2 absolute bottom-5">Daftar
                            Kelas</a>
                    </div>--}}
                </div>
            </div>
            <img src="{{ asset('assets/images/products/berbinar-plus/design.png') }}" alt="Ilustrasi Asesmen Psikologi Berbinar" title="Ilustrasi Asesmen Psikologi Berbinar" class="w-[400px] flex flex-row hidden md:block rounded-tl-xl rounded-tr-xl p-4">
        </div>
    </div>
</section>

{{-- PEMATERI --}}
<section class="max-w-6xl mx-auto flex flex-col gap-10 z-40 mt-10">
    <div class="flex items-center justify-center flex-col gap-1">
        <h1 class="text-black fomt-semibold text-3xl p-5 md:px-0 text-center">
            Pemateri <span class="text-primary font-bold">BERBINAR<span class="text-[36px]">+</span></span>
        </h1>
        {{--<p class="text-black text-lg">Layanan yang kami sediakan</p>--}}
    </div>

    <div class="relative flex flex-col gap-10 items-center bg-no-repeat bg-center justify-center">
        <div id="col-1" class="flex flex-row items-center">
            <div class="flex flex-col mx-5 items-center">
                <img src="{{ asset('assets/images/products/berbinar-plus/pemateri1.png') }}" alt="Ilustrasi Asesmen Psikologi Berbinar" title="Ilustrasi Asesmen Psikologi Berbinar" class="w-[370px] flex flex-col items-center rounded-tl-xl rounded-tr-xl p-4">
                <div id="text-content" class="flex flex-col backdrop-blur-md bg-white/10 shadow-lg ring-1 ring-black/5 gap-1 mx-5 md:mx-0 text-center rounded-xl relative pb-6 flex-1 aos-init aos-animate">
                    <h5 class="font-semibold px-5 pt-3">Danny Sanjaya Arfensia, S.Psi., M.Psi., Psikolog</h5>
                    <h5 class="font-light italic text-sm">Jobseekers</h5>
                    <h5 class="font-light text-sm">"CV"</h5>
                </div>
            </div>
            <div class="flex flex-col mx-5 items-center">
                <img src="{{ asset('assets/images/products/berbinar-plus/pemateri2.png') }}" alt="Ilustrasi Asesmen Psikologi Berbinar" title="Ilustrasi Asesmen Psikologi Berbinar" class="w-[370px] flex flex-col item-center rounded-tl-xl rounded-tr-xl p-4">
                <div id="text-content" class="flex flex-col backdrop-blur-md bg-white/10 shadow-lg ring-1 ring-black/5 gap-1 mx-5 md:mx-0 w-[25rem] text-center rounded-xl relative pb-6 flex-1 aos-init aos-animate">
                    <h5 class="font-semibold px-5 pt-3">Leoni Sandra</h5>
                    <h5 class="font-light italic text-sm">Product Management</h5>
                    <h5 class="font-light text-sm">"Pengembangan Produk Digital"</h5>
                </div>
            </div>
        </div>
        <div id="col-2" class="flex flex-row items-center">
            <div class="flex flex-col mx-5 items-center">
                <img src="{{ asset('assets/images/products/berbinar-plus/pemateri3.png') }}" alt="Ilustrasi Asesmen Psikologi Berbinar" title="Ilustrasi Asesmen Psikologi Berbinar" class="w-[370px] flex flex-col items-center rounded-tl-xl rounded-tr-xl p-4">
                <div id="text-content" class="flex flex-col backdrop-blur-md bg-white/10 shadow-lg ring-1 ring-black/5 gap-1 mx-5 md:mx-0 w-[25rem] text-center rounded-xl relative pb-6 flex-1 aos-init aos-animate">
                    <h5 class="font-semibold px-5 pt-3">Nurhaning Ilmika Nugraheny S.Tr.T</h5>
                    <h5 class="font-light italic text-sm">Product Management</h5>
                    <h5 class="font-light text-sm">"Pengenalan dan Strategi Produk"</h5>
                </div>
            </div>
            <div class="flex flex-col mx-5 items-center">
                <img src="{{ asset('assets/images/products/berbinar-plus/pemateri4.png') }}" alt="Ilustrasi Asesmen Psikologi Berbinar" title="Ilustrasi Asesmen Psikologi Berbinar" class="w-[370px] flex flex-col item-center rounded-tl-xl rounded-tr-xl p-4">
                <div id="text-content" class="flex flex-col backdrop-blur-md bg-white/10 shadow-lg ring-1 ring-black/5 gap-1 mx-5 md:mx-0 w-[25rem] text-center rounded-xl relative pb-6 flex-1 aos-init aos-animate">
                    <h5 class="font-semibold px-5 pt-3">Johanes Catur Wahyu Putranto S. Psi.</h5>
                    <h5 class="font-light italic text-sm">Human Resources</h5>
                    <h5 class="font-light text-sm">"Pengantar Sumber Daya Manusia dan Mekanisme Kerja"</h5>
                </div>
            </div>
        </div>
        <div id="col-3" class="flex flex-row items-center">
            <div class="flex flex-col mx-5 items-center">
                <img src="{{ asset('assets/images/products/berbinar-plus/pemateri5.png') }}" alt="Ilustrasi Asesmen Psikologi Berbinar" title="Ilustrasi Asesmen Psikologi Berbinar" class="w-[370px] flex flex-col items-center rounded-tl-xl rounded-tr-xl p-4">
                <div id="text-content" class="flex flex-col backdrop-blur-md bg-white/10 shadow-lg ring-1 ring-black/5 gap-1 mx-5 md:mx-0 w-[25rem] text-center rounded-xl relative pb-6 flex-1 aos-init aos-animate">
                    <h5 class="font-semibold px-5 pt-3">Nessia Ragil T, S.PSi, CPC</h5>
                    <h5 class="font-light italic text-sm">Human Resources</h5>
                    <h5 class="font-light text-sm">"Human Resource Recruitment dan Struktur Organisasi"</h5>
                </div>
            </div>
            <div class="flex flex-col mx-5 items-center">
                <img src="{{ asset('assets/images/products/berbinar-plus/pemateri6.png') }}" alt="Ilustrasi Asesmen Psikologi Berbinar" title="Ilustrasi Asesmen Psikologi Berbinar" class="w-[370px] flex flex-col item-center rounded-tl-xl rounded-tr-xl p-4">
                <div id="text-content" class="flex flex-col backdrop-blur-md bg-white/10 shadow-lg ring-1 ring-black/5 gap-1 mx-5 md:mx-0 w-[25rem] text-center rounded-xl relative pb-6 flex-1 aos-init aos-animate">
                    <h5 class="font-semibold px-5 pt-3">Erwin Tri Susanto, S.Psi, MBA</h5>
                    <h5 class="font-light italic text-sm">Human Resources</h5>
                    <h5 class="font-light text-sm">"Career Preparation"</h5>
                </div>
            </div>
        </div>
        <div id="col-4" class="flex flex-row items-center">
            <div class="flex flex-col mx-5 items-center">
                <img src="{{ asset('assets/images/products/berbinar-plus/pemateri7.png') }}" alt="Ilustrasi Asesmen Psikologi Berbinar" title="Ilustrasi Asesmen Psikologi Berbinar" class="w-[370px] flex flex-col items-center rounded-tl-xl rounded-tr-xl p-4">
                <div id="text-content" class="flex flex-col backdrop-blur-md bg-white/10 shadow-lg ring-1 ring-black/5 gap-1 mx-5 md:mx-0 w-[25rem] text-center rounded-xl relative pb-6 flex-1 aos-init aos-animate">
                    <h5 class="font-semibold px-5 pt-3">Arif Wiyono</h5>
                    <h5 class="font-light italic text-sm">Graphic Design</h5>
                    <h5 class="font-light text-sm">"Prinsip-Prinsip desain grafis dan berbagai jenis elemen desain
                        grafis"</h5>
                </div>
            </div>
            <div class="flex flex-col mx-5 items-center">
                <img src="{{ asset('assets/images/products/berbinar-plus/pemateri8.png') }}" alt="Ilustrasi Asesmen Psikologi Berbinar" title="Ilustrasi Asesmen Psikologi Berbinar" class="w-[370px] flex flex-col item-center rounded-tl-xl rounded-tr-xl p-4">
                <div id="text-content" class="flex flex-col backdrop-blur-md bg-white/10 shadow-lg ring-1 ring-black/5 gap-1 mx-5 md:mx-0 w-[25rem] text-center rounded-xl relative pb-6 flex-1 aos-init aos-animate">
                    <h5 class="font-semibold px-5 pt-3">Imtikhan Maulid</h5>
                    <h5 class="font-light italic text-sm">Graphic Design</h5>
                    <h5 class="font-light text-sm">"Presentasi design dan membuat portofolio desain grafis yang efektif"
                    </h5>
                </div>
            </div>
        </div>
        <div id="col-5" class="flex flex-row items-center">
            <div class="flex flex-col mx-5 items-center">
                <img src="{{ asset('assets/images/products/berbinar-plus/pemateri9.png') }}" alt="Ilustrasi Asesmen Psikologi Berbinar" title="Ilustrasi Asesmen Psikologi Berbinar" class="w-[370px] flex flex-col items-center rounded-tl-xl rounded-tr-xl p-4">
                <div id="text-content" class="flex flex-col backdrop-blur-md bg-white/10 shadow-lg ring-1 ring-black/5 gap-1 mx-5 md:mx-0 w-[25rem] text-center rounded-xl relative pb-6 flex-1 aos-init aos-animate">
                    <h5 class="font-semibold px-5 pt-3">Abi Al Qhafari</h5>
                    <h5 class="font-light italic text-sm">Graphic Design</h5>
                    <h5 class="font-light px-1 text-sm">"Desain Grafis untuk platform media sosial dan teknik ilustrasi
                        digital"</h5>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- FAQ SECTION --}}
<section class="max-w-6xl z-40 mx-5 md:mx-auto">
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