@extends('layouts.main', [
    'title' => 'Berbinar+',
    'active' => 'Produk Berbinar',
    'page' => 'Kelas',
])

@section('content')
    {{-- HERO SECTION --}}
    <section
        class="max-w-6xl mx-auto h-screen flex flex-col md:flex-row items-center justify-center relative px-5 md:px-0 mt-28 md:mt-10">
        {{-- HERO IMG MOBILE --}}
        <img src="{{ asset('assets/images/products/ilustrasi-berbinar-plus.png') }}" alt="Ilustrasi Konseling Berbinar"
            title="Ilustrasi Konseling Berbinar" class="w-full block md:hidden" data-aos="fade-up" data-aos-duration="1500">

        {{-- HERO CONTENT --}}
        <div class="relative flex items-center">
            <div class="bg-blur-bg rounded-[700px] blur-[55px] w-[300px] md:w-[600px] h-[250px] md:h-[600px] absolute">
            </div>
            <div class="flex flex-col gap-5 z-40 relative">
                <h1 class="font-semibold text-black text-[40px] md:text-[64px] leading-[100%] md:leading-[120%]">
                    <span class="text-primary">Berbinar</span>+
                </h1>
                <p class="text-lg text-disabled">BERBINAR+ adalah layanan ONE-PACKAGE yang terdiri dari kelas daring
                    berbasis video pembelajaran, konseling materi secara langsung, dan psikotes yang disediakan oleh
                    Berbinar Insightful Indonesia. Produk ini dapat diakses oleh peserta kapanpun dan dimanapun sesuai
                    dengan syarat dan ketentuan yang berlaku. Peserta bebas memilih kelas yang ditawarkan serta layanan apa
                    saja yang akan diambil.
                </p>
                <a href="https://bit.ly/CounselingWithBerbinar"
                    class="text-lg text-white bg-primary-alt rounded-md hover:bg-primary duration-700 px-5 py-2 w-fit">Ikuti
                    BISIKAN</a>
            </div>
        </div>

        {{-- HERO IMG DESKTOP --}}
        <img src="{{ asset('assets/images/products/ilustrasi-berbinar-plus.png') }}" alt="Ilustrasi Konseling Berbinar"
            title="Ilustrasi Konseling Berbinar" class="w-1/2 hidden md:block" data-aos="fade-left"
            data-aos-duration="1500">
    </section>

    {{-- LAYANAN BERBINAR+ SECTION --}}
    <section class="max-w-6xl mx-auto flex flex-col gap-10 z-40 mt-10">
        <div class="flex items-center justify-center flex-col gap-1">
            <h1 class="text-black fomt-semibold text-3xl px-5 md:px-0 text-center">
                Layanan Berbinar+
            </h1>
            <p class="text-disabled text-lg text-center">Berikut adalah layanan yang kami sediakan pada Berbinar+ </p>
        </div>

        <div class="flex flex-col md:flex-row gap-5 md:gap-3">
            <div class="flex flex-col gap-4 mx-8 md:mx-0  rounded-xl bg-white border border-gray-300 relative pb-6 flex-1"
                data-aos="fade-right" data-aos-duration="1500" data-aos-delay="500">

                <img src="{{ asset('assets/images/products/berbinar-plus/layanan-1.png') }}"
                    alt="Ilustrasi Peer Counselor Berbinar" title="Ilustrasi Peer Counselor Berbinar"
                    class="w-[300px] mx-auto rounded-tl-xl rounded-tr-xl p-4">

                <div class="flex flex-col gap-1 text-center px-5 items-center justify-center">
                    <h3 class="text-black text-xl font-medium">Kelas Daring</h3>
                    <p class="text-disabled text-base pb-12">
                        Pemberian akses video materi yang disampaikan oleh narasumber sekaligus mentor kompeten sesuai
                        dengan topik kelas yang tersedia. Kelas yang kami sediakan cukup bervariatif misal kelas Jobseekers
                        yang dapat membantu dirimu untuk menemukan pekerjaan.
                    </p>
                </div>
            </div>

            <div class="flex flex-col gap-4 mx-8 md:mx-0  rounded-xl bg-white border border-gray-300 relative pb-6 flex-1"
                data-aos="fade-right" data-aos-duration="1500" data-aos-delay="1000">

                <img src="{{ asset('assets/images/products/berbinar-plus/layanan-2.png') }}"
                    alt="Ilustrasi Asesmen Psikologi Berbinar" title="Ilustrasi Asesmen Psikologi Berbinar"
                    class="w-[300px] mx-auto rounded-tl-xl rounded-tr-xl p-4">

                <div class="flex flex-col gap-1 text-center px-5 items-center justify-center">
                    <h3 class="text-black text-xl font-medium">Konseling Kelas</h3>
                    <p class="text-disabled text-base pb-12">
                        Jika ingin memperluas perolehan informasi terkait kelas yang dipilih setelah menyelesaikan sesi
                        kelas daring dan sesi personal mentoring bersama narasumber, maka peserta dapat memilih untuk
                        meningkatkan pilihan layanan dengan menambahkan paket konseling kelas.
                    </p>
                </div>
            </div>

            <div class="flex flex-col gap-4 mx-8 md:mx-0  rounded-xl bg-white border border-gray-300 relative pb-6 flex-1"
                data-aos="fade-right" data-aos-duration="1500" data-aos-delay="1500">

                <img src="{{ asset('assets/images/products/berbinar-plus/layanan-3.png') }}" alt="Ilustrasi Kelas Berbinar"
                    title="Ilustrasi Kelas Berbinar" class="w-[300px] mx-auto rounded-tl-xl rounded-tr-xl p-4">
                <div class="flex flex-col gap-1 text-center px-5 items-center justify-center">
                    <h3 class="text-black text-xl font-medium">Psikotes</h3>
                    <p class="text-disabled text-base pb-12">
                        Psikotes adalah paket upgrade selanjutnya yang ditawarkan oleh Berbinar Insightful Indonesia apabila
                        peserta memiliki keingin untuk mencari informasi terkait materi - materi yang telah diterima setelah
                        melewati dua tahap sebelumnya.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- KELAS BERBINAR+ SECTION --}}
    <section class="max-w-6xl mx-auto flex flex-col gap-10 z-40 mt-10">
        <div class="flex items-center justify-center flex-col gap-1">
            <h1 class="text-black fomt-semibold text-3xl px-5 md:px-0 text-center">
                Daftar Kelas Berbinar+
            </h1>
            <p class="text-disabled text-lg text-center">Berikut adalah daftar kelas yang ada pada Berbinar+</p>
        </div>

        <div class="flex flex-col md:flex-row gap-5 md:gap-3">
            <div class="flex flex-col gap-4 mx-8 md:mx-0  rounded-xl bg-white border border-gray-300 relative pb-6 flex-1"
                data-aos="fade-right" data-aos-duration="1500" data-aos-delay="500">

                <img src="{{ asset('assets/images/products/berbinar-plus/kelas-1.png') }}"
                    alt="Ilustrasi Peer Counselor Berbinar" title="Ilustrasi Peer Counselor Berbinar"
                    class="w-full rounded-tl-xl rounded-tr-xl p-4">

                <div class="flex flex-col gap-1 text-center px-5 items-center justify-center">
                    <h3 class="text-black text-xl font-medium">Jobseekers</h3>
                    <p class="text-disabled text-base pb-12 text-left">
                        Kelas yang ditawarkan untuk membantu para calon pencari kerja atau jobseekers meningkatkan
                        keterampilan dan kemampuan yang dibutuhkan untuk mencari pekerjaan. Dengan sub tema: <br><br>

                        • CV (Curriculum Vitae) <br>
                        • Job Interview
                    </p>
                    <a href="https://youtu.be/UlPJY2q4m1g?si=m9FKNUnrteU_EgZ0
                    "
                        class="text-base text-white bg-primary-alt rounded-md hover:bg-primary duration-700 px-5 py-2 absolute bottom-5">Daftar
                        Kelas</a>
                </div>
            </div>

            <div class="flex flex-col gap-4 mx-8 md:mx-0  rounded-xl bg-white border border-gray-300 relative pb-6 flex-1"
                data-aos="fade-right" data-aos-duration="1500" data-aos-delay="1000">

                <img src="{{ asset('assets/images/products/berbinar-plus/kelas-2.png') }}"
                    alt="Ilustrasi Asesmen Psikologi Berbinar" title="Ilustrasi Asesmen Psikologi Berbinar"
                    class="w-full rounded-tl-xl rounded-tr-xl p-4">

                <div class="flex flex-col gap-1 text-center px-5 items-center justify-center">
                    <h3 class="text-black text-xl font-medium">Product Management</h3>
                    <p class="text-disabled text-base pb-12 text-left">
                        Kelas yang ditawarkan untuk memberikan pemahaman lebih dalam untuk menentukan strategi perusahaan
                        yang berhubungan dengan pengembangan & peluncuran suatu produk bisnis.Dengan sub tema: <br><br>

                        • Pengenalan & strategi product management dalam dunia Kerja <br>
                        • Pengembangan produk digital <br>
                        • Proses bisnis dan perencanaan akselerasi karir
                    </p>
                    <a href="https://youtu.be/otURwfU7EiU?si=Xg5EuAQsrTKGS2Bv"
                        class="text-base text-white bg-primary-alt rounded-md hover:bg-primary duration-700 px-5 py-2 absolute bottom-5">Daftar
                        Kelas</a>
                </div>
            </div>

            <div class="flex flex-col gap-4 mx-8 md:mx-0  rounded-xl bg-white border border-gray-300 relative pb-6 flex-1"
                data-aos="fade-right" data-aos-duration="1500" data-aos-delay="1500">

                <img src="{{ asset('assets/images/products/berbinar-plus/kelas-3.png') }}" alt="Ilustrasi Kelas Berbinar"
                    title="Ilustrasi Kelas Berbinar" class="w-full rounded-tl-xl rounded-tr-xl p-4">
                <div class="flex flex-col gap-1 text-center px-5 items-center justify-center">
                    <h3 class="text-black text-xl font-medium">Human Resource</h3>
                    <p class="text-disabled text-base pb-12 text-left">
                        Kelas yang ditawarkan untuk membantu individu atau tim dalam mempelajari dan meningkatkan
                        keterampilan mengelola produk dan layanan. Dengan sub tema: <br><br>

                        • Pengantar sumber daya manusia & mekanisme kerja <br>
                        • Human resource recruitment process & struktur organisasi <br>
                        • Career preparation
                    </p>
                    <a href="https://youtu.be/6s0zmkefWkQ?si=9ssA783fAvBYyVmT"
                        class="text-base text-white bg-primary-alt rounded-md hover:bg-primary duration-700 px-5 py-2 absolute bottom-5">Daftar
                        Kelas</a>
                </div>
            </div>
        </div>
    </section>

    {{-- BENEFIT BERBINAR+ SECTION --}}
    <section class="max-w-6xl mx-auto flex flex-col gap-10 z-40 mt-10">
        <div class="flex items-center justify-center flex-col gap-1">
            <h1 class="text-black fomt-semibold text-3xl px-5 md:px-0 text-center">
                Benefit Berbinar+
            </h1>
            <p class="text-disabled text-lg text-center">Berikut adalah benefit yang didapatkan dari mengikuti Berbinar+
            </p>
        </div>

        <div class="flex flex-row flex-wrap gap-5 md:gap-3 px-3 md:px-0">
            <div
                class="flex items-center justify-center text-center rounded-md px-8 py-5 text-white text-xl flex-1 bg-primary font-medium">
                E-Sertifikat
            </div>
            <div
                class="flex items-center justify-center text-center rounded-md px-10 py-5 text-white text-xl flex-1 bg-primary font-medium">
                Relasi
            </div>
            <div
                class="flex items-center justify-center text-center rounded-md px-10 py-5 text-white text-xl flex-1 bg-primary font-medium">
                Psikotes
            </div>
            <div
                class="flex items-center justify-center text-center rounded-md px-10 py-5 text-white text-xl flex-1 bg-primary font-medium">
                Ilmu Yang Bermanfaat
            </div>
            <div
                class="flex items-center justify-center text-center rounded-md px-10 py-5 text-white text-xl flex-1 bg-primary font-medium">
                Konseling Materi
            </div>
            <div
                class="flex items-center justify-center text-center rounded-md px-10 py-5 text-white text-xl flex-1 bg-primary font-medium">
                Video Pembelajaran
            </div>
        </div>
    </section>

    {{-- DAFTAR HARGA BERBINAR+ SECTION --}}
    <section class="max-w-6xl mx-auto flex flex-col gap-10 z-40 mt-10">
        <div class="flex items-center justify-center flex-col gap-1">
            <h1 class="text-black fomt-semibold text-3xl px-5 md:px-0 text-center">
                Daftar Harga Berbinar+
            </h1>
            <p class="text-disabled text-lg">Berikut adalah daftar harga Berbinar+</p>
        </div>

        <div class="flex flex-col md:flex-row gap-5 md:gap-3 px-5 md:px-0">
            <div class="flex flex-col gap-4 md:mx-0  rounded-xl bg-white shadow-md relative pb-4 flex-1 w-full md:w-[500px]"
                data-aos="fade-right" data-aos-duration="500" data-aos-delay="0">
                <div class="flex flex-col gap-2 text-center items-center px-5 pt-10">
                    <h3 class="text-black text-3xl font-medium">INSIGHT+</h3>
                    <div class="flex flex-col items-center justify-center">
                        <p>Layanan Video</p>
                        <p>Pembelajaran Daring dan Personal Mentoring</p>
                    </div>
                    <div class="flex flex-col gap-3 mb-20">
                        <p class="text-black text-base">Harga Normal : </p>
                        <h1 class="text-black text-4xl font-medium"
                            style="text-decoration: line-through; text-decoration-color: red;">IDR 50.000</h1>
                        <p class="text-black text-base">Sekarang Hanya : </p>
                        <h1 class="text-black text-4xl font-medium">IDR 15.000</h1>
                    </div>
                    <a href="https://bit.ly/DaftarPsikotesBerbinar"
                        class="text-base text-white bg-primary-alt rounded-md hover:bg-primary duration-700 px-5 py-2 absolute bottom-7 ">Mulai
                        Sekarang</a>
                </div>
            </div>

            <div class="flex flex-col gap-4 md:mx-0  rounded-xl bg-primary shadow-md relative pb-4 flex-1 w-full md:w-[500px]"
                data-aos="fade-right" data-aos-duration="1000" data-aos-delay="500">
                <div class="flex flex-col gap-2 text-center items-center px-5 pt-10">
                    <h3 class="text-white text-3xl font-medium">A+</h3>
                    <div class="flex items-center justify-center text-white">
                        <p>Konseling dengan Psikolog dan Peer Counselor</p>
                    </div>
                    <div class="flex flex-col gap-3 mb-20">
                        <p class="text-white text-base">Mulai Dari : </p>
                        <h1 class="text-white text-4xl font-medium">IDR 36.000</h1>
                        <p class="text-white text-base">Hingga : </p>
                        <h1 class="text-white text-4xl font-medium">IDR 180.000</h1>
                    </div>
                    <a href="https://bit.ly/DaftarPsikotesBerbinar"
                        class="text-base text-primary bg-white rounded-md hover:bg-blur-bg duration-700 px-5 py-2 absolute bottom-7 ">Mulai
                        Sekarang</a>
                </div>
            </div>

            <div class="flex flex-col gap-4 md:mx-0  rounded-xl bg-white shadow-md relative pb-4 flex-1 w-full md:w-[500px]"
                data-aos="fade-right" data-aos-duration="1500" data-aos-delay="1000">
                <div class="flex flex-col gap-2 text-center items-center px-5 pt-10">
                    <h3 class="text-black text-3xl font-medium">Complete</h3>
                    <div class="flex items-center justify-center">
                        <p>Tes Bakat Minat dan Tes Intelegensi</p>
                    </div>
                    <div class="flex flex-col gap-3 mb-20">
                        <p class="text-black text-base">Mulai Dari : </p>
                        <h1 class="text-black text-4xl font-medium">IDR 100.000</h1>
                        <p class="text-black text-base">Hingga : </p>
                        <h1 class="text-black text-4xl font-medium">IDR 180.000</h1>
                    </div>
                    <a href="https://bit.ly/DaftarPsikotesBerbinar"
                        class="text-base text-white bg-primary-alt rounded-md hover:bg-primary duration-700 px-5 py-2 absolute bottom-7 ">Mulai
                        Sekarang</a>
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
                    <h2 @click="handleClick()"
                        class="flex flex-row justify-between items-center font-medium p-3 cursor-pointer text-lg">
                        <span>{{ $faq['question'] }}</span>
                        <svg :class="handleRotate()"
                            class="fill-[#3986a3] text-[#3986a3] h-6 w-6 transform transition-transform duration-500"
                            viewBox="0 0 20 20">
                            <path
                                d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                            </path>
                        </svg>
                    </h2>
                    <div x-ref="tab" :style="handleToggle()"
                        class="border-l-2 border-[#3986a3] overflow-hidden max-h-0 duration-500 transition-all">
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
