@extends(
    "landing.layouts.app",
    [
        "title" => "Berbinar Insightful Indonesia",
    ]
)

@section("style")
    <style>
        .bg-mobile {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            width: 100vw;
            max-width: 100%;
            height: 100vh;
            background-image: url('/assets/images/landing/asset-produk/curling-mobile.png');
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            z-index: 1;
            overflow: hidden;
        }

        .header-produk {
            position: relative;
            z-index: 2;
            background-image: linear-gradient(to right, #e1e9ec, #9cc3d1), url('/assets/images/landing/asset-produk/bg-curl.png');
            background-blend-mode: multiply;
            background-size: cover;
            background-position: center;
        }

        .text-gradient {
            background: linear-gradient(to right, #3986a3, #000000);
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
        }

        .text-gradient-emo {
            background: linear-gradient(90deg, #f7b23b 0%, #ad7d29 100%);
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
        }

        .text-gradient-yellow {
            background: linear-gradient(to right, #f7b23b, #ad7d29);
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
        }

        @media (min-width: 0px) and (max-width: 640px) {
            .header-produk {
                background-image: none;
                background-color: #ffffff;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                margin-left: 16px;
                margin-right: 16px;
                margin-top: 100px;
            }

            .bg-mobile {
                top: -130px;
                width: 900px;
                height: 945px;
            }
        }

        @media (min-width: 641px) and (max-width: 767px) {
            .header-produk {
                background-image: none;
                background-color: #ffffff;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }

            .bg-mobile {
                top: -160px;
                width: 1050px;
                height: 1050px;
            }
        }

        @media (max-width: 1024px) {
        }

        @media (min-width: 1280px) {
        }

        @media (min-width: 1536px) {
        }
    </style>
@endsection

@section("content")
    <div class="bg-mobile md:hidden"></div>
    <section class="header-produk mx-20 mt-32 h-auto rounded-3xl bg-cover max-md:py-0">
        <div class="flex h-full flex-col justify-center gap-y-1 p-10 text-left max-md:p-9 max-sm:p-4">
            <h1 class="text-[42px] font-semibold text-black max-md:text-[42px] max-sm:text-[30px]">
                Produk
                <span class="bg-[#3886A3] px-2 text-white">Berbinar</span>
            </h1>
            <section>
                <div class="swiper-container swiperProdukBerbinar hidden max-w-3xl overflow-hidden max-md:flex">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide produkBerbinar">
                            <div class="relative">
                                <img src="{{ asset("assets/images/landing/asset-produk/webinar.webp") }}" alt="Webinar" class="h-72 w-full rounded-xl object-cover" />
                                <p class="absolute left-4 top-4 rounded-md bg-[#FEF7EB] px-2 py-1 text-sm text-[#C78E2E]">Workshop</p>
                            </div>
                        </div>

                        <div class="swiper-slide produkBerbinar">
                            <div class="relative">
                                <img src="{{ asset("assets/images/landing/asset-produk/workshop.webp") }}" alt="Workshop" class="h-72 w-full rounded-xl object-cover" />
                                <p class="absolute left-4 top-4 rounded-md bg-[#FEF7EB] px-2 py-1 text-sm text-[#C78E2E]">Workshop</p>
                            </div>
                        </div>

                        <div class="swiper-slide produkBerbinar">
                            <div class="relative">
                                <img src="{{ asset("assets/images/landing/asset-produk/psikotes-offline.webp") }}" alt="Psikotes Offline" class="h-72 w-full rounded-xl object-cover" />
                                <p class="absolute left-4 top-4 rounded-md bg-[#FEF7EB] px-2 py-1 text-sm text-[#C78E2E]">Psikotes Offline</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <p class="text-justify text-lg text-[#3F3F3F] max-sm:text-[15px]">
                Adanya kesulitan dalam jangkauan bagi masyarakat mengenai mahalnya biaya konsultasi yang tentunya menjadi penghalang untuk mengakses bantuan profesional. Kini
                <span class="font-bold">Berbinar Insightful Indonesia</span>
                hadir dalam memberikan layanan konseling, psikotes, kelas edukasi, dan consulting professional yang dirancang fleksibel tanpa beban biaya tinggi juga menyesuaikan kebutuhan klien sebagai prioritas perusahaan.
            </p>
        </div>
    </section>

    {{-- TAMPILAN DESKTOP --}}
    <section>
        <div class="mx-20 my-5 max-lg:my-8 max-md:hidden">
            <div class="flex w-full flex-wrap items-center justify-center gap-x-8 gap-y-5">
                <div class="relative">
                    <img src="{{ asset("assets/images/landing/asset-produk/webinar.webp") }}" alt="Webinar" class="h-52 w-[345px] rounded-xl object-cover max-lg:h-[250px] max-lg:w-[450px]" />
                    <p class="absolute left-4 top-4 rounded-md bg-[#FEF7EB] px-2 py-1 text-sm text-[#C78E2E]">Webinar</p>
                </div>

                <div class="relative">
                    <img src="{{ asset("assets/images/landing/asset-produk/workshop.webp") }}" alt="Workshop" class="h-52 w-[345px] rounded-xl object-cover max-lg:h-[250px] max-lg:w-[450px]" />
                    <p class="absolute left-4 top-4 rounded-md bg-[#FEF7EB] px-2 py-1 text-sm text-[#C78E2E]">Workshop</p>
                </div>

                <div class="relative">
                    <img src="{{ asset("assets/images/landing/asset-produk/psikotes-offline.webp") }}" alt="Psikotes Offline" class="h-52 w-[345px] rounded-xl object-cover max-lg:h-[250px] max-lg:w-[450px]" />
                    <p class="absolute left-4 top-4 rounded-md bg-[#FEF7EB] px-2 py-1 text-sm text-[#C78E2E]">Psikotes Offline</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Produk Berbinar --}}
    <section class="mt-10 max-md:mt-40">
        <div x-data="{ tab: 'konseling' }" class="mx-auto">
            <!-- Tab Navigation -->
            <div class="mx-auto mb-4 flex max-w-[680px] flex-wrap items-center justify-between rounded-2xl bg-white p-2 shadow-md max-md:mx-20 max-md:justify-center max-sm:mx-4 max-sm:max-w-full">
                <button @click="tab = 'konseling'" :class="{'bg-[#3986A3] font-medium text-white': tab === 'konseling'}" class="rounded-xl p-2 font-medium text-black">Konseling</button>
                <button @click="tab = 'psikotes'" :class="{'bg-[#3986A3] font-medium text-white': tab === 'psikotes'}" class="rounded-xl p-2 font-medium text-black">Psikotes</button>
                <button @click="tab = 'class'" :class="{'bg-[#3986A3] font-medium text-white': tab === 'class'}" class="rounded-xl p-2 font-medium italic text-black">Class</button>
                <button @click="tab = 'consulting'" :class="{'bg-[#3986A3] font-medium text-white': tab === 'consulting'}" class="rounded-xl p-2 font-medium italic text-black">Consulting</button>
                <button @click="tab = 'moodscantees'" :class="{'bg-[#3986A3] font-medium text-white': tab === 'moodscantees'}" class="rounded-xl p-2 font-medium text-black">MoodScan Tees</button>
                <button @click="tab = 'emoshuffle'" :class="{'bg-[#3986A3] font-medium text-white': tab === 'emoshuffle'}" class="rounded-xl p-2 font-medium text-black">EmoShuffle</button>
            </div>

            <!-- Card Layout -->
            <div class="relative mx-20 my-8 items-center overflow-hidden rounded-3xl border shadow-md transition-all duration-300 ease-in-out max-sm:mx-4 max-sm:mb-8 max-sm:mt-4">
                {{-- <div class="max-sm:mx-4 mx-14 my-8 rounded-3xl shadow-md border min-h-[400px] max-xl:min-h-[440px] max-lg:min-h-[670px] max-md:min-h-[680px] max-sm:min-h-[690px] relative items-center overflow-hidden"> --}}
                {{--
                    <div :class="{
                    'min-h-[400px] max-xl:min-h-[440px] max-lg:min-h-[670px] max-md:min-h-[680px] max-sm:min-h-[690px]': tab === 'konseling',
                    'min-h-[700px]': tab === 'psikotes',
                    'min-h-[400px]': tab === 'kelas'
                    }"
                    class="max-sm:mx-4 mx-14 my-8 rounded-3xl shadow-md border relative items-center overflow-hidden transition-all duration-300 ease-in-out">
                --}}

                <!-- BERBINAR KONSELING -->
                <div x-show="tab === 'konseling'" x-transition:enter="transform transition duration-300 ease-out" x-transition:enter-start="translate-x-full opacity-0" x-transition:enter-end="translate-x-0 opacity-100" x-transition:leave="transform transition duration-300 ease-in" x-transition:leave-start="translate-x-0 opacity-100" x-transition:leave-end="-translate-x-full opacity-0" x-cloak class="p-8 max-sm:p-4">
                    <div class="flex flex-col gap-4">
                        <div class="relative">
                            {{-- IMAGE --}}
                            <div class="max-md:hidden">
                                <img src="{{ asset("assets/images/landing/asset-beranda/produk/konseling.webp") }}" alt="Konseling" class="float-right ml-6 h-auto w-[320px] object-contain max-lg:w-[280px]" />
                            </div>

                            <!-- DESCRIPTION -->
                            <h1 class="text-gradient mb-2 text-3xl font-bold max-sm:mb-0 max-sm:text-2xl">Berbinar Konseling</h1>
                            <div class="my-2 flex justify-center md:hidden">
                                <img src="{{ asset("assets/images/landing/asset-beranda/produk/konseling.webp") }}" alt="Psikotes" class="h-auto w-[280px] object-contain" />
                            </div>
                            <p class="text-justify text-[#70787D] max-sm:text-[15px]">Layanan psikolog dan konselor sebaya untuk konsultasi permasalahan mental yang dialami oleh klien secara online dan offline.</p>
                            <h1 class="text-gradient-yellow mb-2 mt-2 text-2xl font-bold max-sm:mb-0 max-sm:text-xl">Fokus</h1>
                            <p class="text-justify text-[#70787D] max-sm:text-[15px]">Meningkatkan pengetahuan tentang kesehatan mental dengan memberikan dukungan emosional dan membantu menyelesaikan masalah yang dialami.</p>
                            <h1 class="text-gradient-yellow mb-2 mt-2 text-2xl font-bold max-sm:mb-0 max-sm:text-xl">Jenis</h1>
                            <ul class="list-disc space-y-3 pl-5 text-justify text-[#3F3F3F] marker:text-[#3986A3] max-sm:space-y-1 max-sm:text-[15px]">
                                <li>
                                    <p class="font-semibold">Konseling bersama Psikolog</p>
                                    <p class="text-[#70787D]">Layanan konseling bersama Psikolog yang berizin praktik (Surat Izin Praktik Psikologi) dan telah bekerja sama dengan Berbinar.</p>
                                </li>
                                <li>
                                    <p class="font-semibold">Konseling bersama Peer Counselor</p>
                                    <p class="text-[#70787D]">Layanan konseling bersama Peer Counselor yang dilatih secara ketat dan disupervisi  oleh Psikolog Berbinar.</p>
                                </li>
                                <li>
                                    <p class="font-semibold">Berbinar For U</p>
                                    <p class="text-[#70787D]">Layanan konseling bersama dengan Peer Counselor yang, dengan harga gratis dan terjamin profesionalitasnya.</p>
                                </li>
                                <li>
                                    <p class="font-semibold">Coba Ungkapkan New</p>
                                    <p class="text-[#70787D]">Wadah curhatan secara anonim secara daring disini dan akan di jawab melalui reels Instagram oleh Psikolog.</p>
                                </li>
                                <li>
                                    <p class="font-semibold">Training Peer Counselor</p>
                                    <p class="text-[#70787D]">Acara tahunan yang menyelenggarakan pelatihan Peer Counselor secara online dan diselenggarakan dengan mengundang berbagai komunitas Psikolog.</p>
                                </li>
                            </ul>
                        </div>

                        <div class="flex justify-start">
                            <a href="{{ route("product.counseling.index") }}">
                                <button class="text-md rounded-xl bg-gradient-to-r from-[#3986A3] to-[#225062] px-4 py-2 text-white max-sm:w-full max-sm:text-[15px]">Lihat Selengkapnya</button>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- BERBINAR PSIKOTES -->
                <div x-show="tab === 'psikotes'" x-transition:enter="transform transition duration-300 ease-out" x-transition:enter-start="translate-x-full opacity-0" x-transition:enter-end="translate-x-0 opacity-100" x-transition:leave="transform transition duration-300 ease-in" x-transition:leave-start="translate-x-0 opacity-100" x-transition:leave-end="-translate-x-full opacity-0" x-cloak class="p-8 max-sm:p-4">
                    <div class="flex flex-col gap-4">
                        <div class="relative">
                            {{-- IMAGE --}}
                            <div class="max-md:hidden">
                                <img src="{{ asset("assets/images/landing/asset-beranda/produk/psikotest.webp") }}" alt="Psikotes" class="float-right ml-6 h-auto w-[320px] object-contain max-lg:w-[280px]" />
                            </div>

                            <!-- DESCRIPTION -->
                            <h1 class="text-gradient mb-2 text-3xl font-bold max-sm:mb-0 max-sm:text-2xl">Berbinar Psikotes</h1>
                            <div class="my-2 flex justify-center md:hidden">
                                <img src="{{ asset("assets/images/landing/asset-beranda/produk/psikotest.webp") }}" alt="Psikotes" class="h-auto w-[280px] object-contain" />
                            </div>
                            <p class="text-justify text-[#70787D] max-sm:text-[15px]">
                                Terdapat empat kategori psikotes yang ditawarkan oleh
                                <span class="font-bold">PT Berbinar insightful Indonesia</span>
                                , di antaranya: Psikotes Individu, Psikotes Perusahaan, Psikotes Instansi Pendidikan, dan Psikotes Komunitas.
                            </p>
                            <h1 class="text-gradient-yellow mb-2 mt-2 text-2xl font-bold max-sm:mb-0 max-sm:text-xl">Jenis</h1>
                            <ul class="list-disc space-y-3 pl-5 text-justify text-[#3F3F3F] marker:text-[#3986A3] max-sm:space-y-1 max-sm:text-[15px]">
                                <li>
                                    <p class="font-semibold">Psikotes Individu</p>
                                    <p class="text-[#70787D]">Psikotes ini digunakan untuk melihat potensi yang dimiliki dalam pencapaian hasil belajar atau kemampuan di masa yang akan datang.</p>
                                </li>
                                <li>
                                    <p class="font-semibold">Psikotes Perusahaan</p>
                                    <p class="text-[#70787D]">Psikotes ini digunakan untuk melihat potensi, kelebihan dan kekurangan, kepribadian, dan kecocokan kandidat di suatu posisi pekerjaan.</p>
                                </li>
                                <li>
                                    <p class="font-semibold">Psikotes Instansi Pendidikan</p>
                                    <p class="text-[#70787D]">Psikotes ini digunakan untuk mengenal gaya belajar, cita-cita, jurusan, minat bakat yang sesuai dengan kebutuhan klien.</p>
                                </li>
                                <li>
                                    <p class="font-semibold">Psikotes Komunitas</p>
                                    <p class="text-[#70787D]">Psikotes ini bertujuan untuk mengetahui kesiapan pernikahan, menjadi orangtua, kecocokan bersama pasangan, tingkat stress, depresi, kecemasan, memori, dan demensia.</p>
                                </li>
                            </ul>
                        </div>

                        <div class="flex justify-start">
                            <a href="{{ route("product.psikotest.index") }}">
                                <button class="text-md rounded-xl bg-gradient-to-r from-[#3986A3] to-[#225062] px-4 py-2 text-white max-sm:w-full max-sm:text-[15px]">Lihat Selengkapnya</button>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- BERBINAR CLASS -->
                <div x-show="tab === 'class'" x-transition:enter="transform transition duration-300 ease-out" x-transition:enter-start="translate-x-full opacity-0" x-transition:enter-end="translate-x-0 opacity-100" x-transition:leave="transform transition duration-300 ease-in" x-transition:leave-start="translate-x-0 opacity-100" x-transition:leave-end="-translate-x-full opacity-0" x-cloak class="p-8 max-sm:p-4">
                    <div class="flex flex-col gap-4">
                        <div class="relative">
                            {{-- IMAGE --}}
                            <div class="max-md:hidden">
                                <img src="{{ asset("assets/images/landing/asset-beranda/produk/kelas.webp") }}" alt="Class" class="float-right ml-6 h-auto w-[320px] object-contain max-lg:w-[280px]" />
                            </div>

                            <!-- DESCRIPTION -->
                            <h1 class="text-gradient mb-2 text-3xl font-bold max-sm:mb-0 max-sm:text-2xl">
                                Berbinar
                                <span class="italic">Class</span>
                            </h1>
                            <div class="my-2 flex justify-center md:hidden">
                                <img src="{{ asset("assets/images/landing/asset-beranda/produk/kelas.webp") }}" alt="Class" class="h-auto w-[280px] object-contain" />
                            </div>
                            <p class="text-justify text-[#70787D] max-sm:text-[15px]">Layanan platform persiapan karir dan peningkatan skill dengan meningkatkan kompetensi secara psikologis edukasi yang begitu mudah diikuti oleh semua kalangan.</p>
                            <h1 class="text-gradient-yellow mb-2 mt-2 text-2xl font-bold max-sm:mb-0 max-sm:text-xl">Fokus</h1>
                            <p class="text-justify text-[#70787D] max-sm:text-[15px]">Pembelajaran yang interaktif dengan praktik di setiap sesi ditemani pendampingan program hingga selesai bersama tutor yang berpengalaman dalam bidangnya.</p>
                            <h1 class="text-gradient-yellow mb-2 mt-2 text-2xl font-bold max-sm:mb-0 max-sm:text-xl">Jenis</h1>
                            <ul class="list-disc space-y-3 pl-5 text-justify text-[#3F3F3F] marker:text-[#3986A3] max-sm:space-y-1 max-sm:text-[15px]">
                                <li>
                                    <p class="font-semibold">Berbinar+</p>
                                    <p class="text-[#70787D]">Layanan satu paket yang terdiri dari kelas daring berbasis video pembelajaran, konseling, dan psikotes.</p>
                                </li>
                                <li>
                                    <p class="font-semibold italic">
                                        Premium
                                        <span class="italic">Class</span>
                                    </p>
                                    <p class="text-[#70787D]">Layanan kelas pribadi yang menyediakan materi softskill secara mendalam dan disediakan oleh mentor Premium Class secara online dan fleksibel.</p>
                                </li>
                                <li>
                                    <p class="font-semibold">
                                        101
                                        <span class="italic">Class Journey</span>
                                    </p>
                                    <p class="text-[#70787D]">Webinar berbayar yang diadakan pengenalan terkait suatu materi dan dibahas lebih mendalam dengan bimbingan para ahli selama 3 pertemuan.</p>
                                </li>
                                <li>
                                    <p class="font-semibold">BISIKAN</p>
                                    <p class="text-[#70787D]">“Bicara Asik Psikologi Ala Berbinar” hadir untuk memperkaya wawasan yang membahas fenomena psikologis secara live Instagram setiap hari Sabtu pukul 15.00 WIB.</p>
                                </li>
                                <li>
                                    <p class="font-semibold">BERARTY</p>
                                    <p class="text-[#70787D]">“Berbinar Hears To You” membahas fenomena psikologis dengan sesi tanya jawab secara live TikTok setiap hari Minggu pukul 20.00 WIB.</p>
                                </li>
                            </ul>
                        </div>

                        <div class="flex justify-start">
                            <a href="{{ route("product.class.index") }}">
                                <button class="text-md rounded-xl bg-gradient-to-r from-[#3986A3] to-[#225062] px-4 py-2 text-white max-sm:w-full max-sm:text-[15px]">Lihat Selengkapnya</button>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- BERBINAR CONSULTING -->
                <div x-show="tab === 'consulting'" x-transition:enter="transform transition duration-300 ease-out" x-transition:enter-start="translate-x-full opacity-0" x-transition:enter-end="translate-x-0 opacity-100" x-transition:leave="transform transition duration-300 ease-in" x-transition:leave-start="translate-x-0 opacity-100" x-transition:leave-end="-translate-x-full opacity-0" x-cloak class="p-8 max-sm:p-4">
                    <div class="flex flex-col gap-4">
                        <div class="relative">
                            {{-- IMAGE --}}
                            <div class="max-md:hidden">
                                <img src="{{ asset("assets/images/landing/asset-beranda/produk/consulting.webp") }}" alt="Consulting" class="float-right ml-6 h-auto w-[320px] object-contain max-lg:w-[280px]" />
                            </div>

                            <!-- DESCRIPTION -->
                            <h1 class="text-gradient mb-2 text-3xl font-bold max-sm:mb-0 max-sm:text-2xl">
                                Berbinar
                                <span class="italic">Consulting</span>
                            </h1>
                            <div class="my-2 flex justify-center md:hidden">
                                <img src="{{ asset("assets/images/landing/asset-beranda/produk/consulting.webp") }}" alt="Consulting" class="h-auto w-[280px] object-contain" />
                            </div>
                            <p class="text-justify text-[#70787D] max-sm:text-[15px]">Layanan yang membantu perusahaan, organisasi, hingga komunitas dalam mengatasi masalah dan meningkatkan kinerja sumber daya manusia.</p>
                            <h1 class="text-gradient-yellow mb-2 mt-2 text-2xl font-bold max-sm:mb-0 max-sm:text-xl">Fokus</h1>
                            <p class="text-justify text-[#70787D] max-sm:text-[15px]">Peningkatan keterampilan dengan strategi jangka panjang yang disesuaikan dengan kebutuhan spesifik klien.</p>
                            <h1 class="text-gradient-yellow mb-2 mt-2 text-2xl font-bold max-sm:mb-0 max-sm:text-xl">Jenis</h1>
                            <ul class="list-disc space-y-3 pl-5 text-justify text-[#3F3F3F] marker:text-[#3986A3] max-sm:space-y-1 max-sm:text-[15px]">
                                <li>
                                    <p class="font-semibold">Rekrutmen dan Seleksi</p>
                                    <p class="text-[#70787D]">Membantu proses perekrutan calon karyawan sesuai kebutuhan dan kriteria perusahaan.</p>
                                </li>
                                <li>
                                    <p class="font-semibold italic">Pelatihan dan Pengembangan</p>
                                    <p class="text-[#70787D]">Rancangan proses terkait tugas kepada karyawan untuk memaksimalkan potensi.</p>
                                </li>
                                <li>
                                    <p class="font-semibold">Analisis Beban Kerja & Perencanaan Organisasi</p>
                                    <p class="text-[#70787D]">Analisis mendalam terkait beban kerja, struktur organisasi, dan perencanaan kebutuhan sumber daya manusia.</p>
                                </li>
                                <li>
                                    <p class="font-semibold italic">Coaching</p>
                                    <p class="text-[#70787D]">Membantu dalam menggali potensi bisnis/karir, menetapkan tujuan, dan mewujudkannya dengan strategi dari ahlinya.</p>
                                </li>
                                <li>
                                    <p class="font-semibold">Penilaian Kinerja</p>
                                    <p class="text-[#70787D]">Proses evaluasi kinerja karyawan secara sistematis dan berkesinambungan sebagai dukungan pengembangan karir.</p>
                                </li>
                                <li>
                                    <p class="font-semibold">
                                        Kompensasi dan
                                        <span class="italic">Benefit</span>
                                        (perusahaan)
                                    </p>
                                    <p class="text-[#70787D]">Perencanaan dan sistem administrasi mengenai program yang bermanfaat untuk menjaga motivasi dan kinerja karyawan.</p>
                                </li>
                                <li>
                                    <p class="font-semibold">Standar Operasional Prosedur (SOP)</p>
                                    <p class="text-[#70787D]">Panduan standar yang bertujuan memastikan pekerjaan dan kegiatan operasional organisasi.</p>
                                </li>
                            </ul>
                        </div>

                        <div class="flex justify-start">
                            <a href="{{ route("product.consulting.index") }}">
                                <button class="text-md rounded-xl bg-gradient-to-r from-[#3986A3] to-[#225062] px-4 py-2 text-white max-sm:w-full max-sm:text-[15px]">Lihat Selengkapnya</button>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- BERBINAR MOODSCAN TEES -->
                <div x-show="tab === 'moodscantees'" x-transition:enter="transform transition duration-300 ease-out" x-transition:enter-start="translate-x-full opacity-0" x-transition:enter-end="translate-x-0 opacity-100" x-transition:leave="transform transition duration-300 ease-in" x-transition:leave-start="translate-x-0 opacity-100" x-transition:leave-end="-translate-x-full opacity-0" x-cloak class="p-8 max-sm:p-4">
                    <div class="flex flex-col gap-4">
                        <div class="relative">
                            {{-- IMAGE --}}
                            <div class="max-md:hidden">
                                <img src="{{ asset("assets/images/landing/asset-beranda/produk/moodscantees.webp") }}" alt="MoodScan Tees" class="float-right ml-6 h-auto w-[320px] object-contain max-lg:w-[280px]" />
                            </div>

                            <!-- DESCRIPTION -->
                            <h1 class="text-gradient mb-2 text-3xl font-bold max-sm:mb-0 max-sm:text-2xl">MoodScan Tees</h1>
                            <div class="my-2 flex justify-center md:hidden">
                                <img src="{{ asset("assets/images/landing/asset-beranda/produk/moodscantees.webp") }}" alt="MoodScan Tees" class="h-auto w-[280px] object-contain" />
                            </div>
                            <p class="text-justify text-[#70787D] max-sm:text-[15px] mb-2">
                                Moodscan Tees adalah kaos nyaman dengan desain psikologis hasil kolaborasi ciamik antara Berbinar Insightful Indonesia dengan Esize yang dapat meningkatkan kesehatan mental sekaligus menampilkan gaya yang unik penuh makna.
                            </p>
                            <h2 class="font-bold max-sm:text-[20px] mb-2">Detail:</h2>
                            <ul class="list-disc space-y-3 pl-5 mb-4 text-justify text-[#3F3F3F] max-sm:space-y-1 max-sm:text-[15px]">
                                <li>
                                    <p class="text-[#70787D]">Terdapat tampilan Barcode QR di belakang kaos yang menyimpan berbagai kutipan psikologis inspiratif dan memberikan refleksi.</p>
                                </li>
                                <li>
                                    <p class="text-[#70787D]">Berbahan 100% Cotton Combed berkualitas tinggi yang memberikan kenyamanan maksimal untuk digunakan sehari-hari.</p>
                                </li>
                                <li>
                                    <p class="text-[#70787D]">Tersedia variasi ukuran yang dapat disesuaikan dengan kebutuhan dan cocok untuk berbagai bentuk tubuh.</p>
                                </li>
                            </ul>

                            <h1 class="text-gradient-yellow mb-2 text-2xl font-bold max-sm:mb-0 max-sm:text-2xl">MoodScan Tees</h1>
                            <ul class="list-disc space-y-3 pl-5 text-justify text-[#3F3F3F] marker:text-[#3986A3] max-sm:space-y-1 max-sm:text-[15px]">
                                <li>
                                    <h2 class="font-bold max-sm:text-[20px]">Mood</h2>
                                    <p class="text-[#70787D]">Mood adalah kondisi emosional atau suasana hati yang dialami oleh seorang individu atau sekelompok orang pada waktu tertentu, dapat berubah sesuai dengan situasi yang dihadapi, serta dipengaruhi oleh berbagai faktor seperti lingkungan, pengalaman, maupun interaksi sosial.</p>
                                </li>
                                <li>
                                    <h2 class="font-bold max-sm:text-[20px]">Scan</h2>
                                    <p class="text-[#70787D]">Scan adalah proses memindai atau menangkap gambar, dokumen, atau objek cepat menggunakan alat khusus seperti pemindai (scanner) atau kamera digital, dengan tujuan untuk memeriksa, mendeteksi, atau mengidentifikasi informasi tersebut secara efisien dan akurat.</p>
                                </li>
                                <li>
                                    <h2 class="font-bold max-sm:text-[20px]">Tees</h2>
                                    <p class="text-[#70787D]">Tees adalah istilah lain dari T-Shirt, yaitu jenis kaos oblong berlengan pendek yang sangat populer dan nyaman digunakan dalam berbagai aktivitas sehari-hari. Biasanya, kaos ini terbuat dari bahan yang ringan dan mudah menyerap keringat, sehingga cocok untuk dipakai dalam berbagai cuaca dan gaya berpakaian kasual atau santai.</p>
                                </li>
                            </ul>
                        </div>

                        <div class="flex justify-start">
                            <a href="{{ route('product.moodscan-tees.index') }}">
                                <button class="text-md rounded-xl bg-gradient-to-r from-[#3986A3] to-[#225062] px-4 py-2 text-white max-sm:w-full max-sm:text-[15px]">Lihat Selengkapnya</button>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- BERBINAR EMOSHUFFLE -->
                <div x-show="tab === 'emoshuffle'" x-transition:enter="transform transition duration-300 ease-out" x-transition:enter-start="translate-x-full opacity-0" x-transition:enter-end="translate-x-0 opacity-100" x-transition:leave="transform transition duration-300 ease-in" x-transition:leave-start="translate-x-0 opacity-100" x-transition:leave-end="-translate-x-full opacity-0" x-cloak class="p-8 max-sm:p-4">
                    <div class="flex flex-col gap-4">
                        <div class="relative">
                            {{-- IMAGE --}}
                            <div class="max-md:hidden">
                                <img src="{{ asset("assets/images/landing/asset-beranda/produk/emoshuffle.webp") }}" alt="EmoShuffle" class="float-end me-12 size-80" />
                                {{-- class="float-right size-96 max-lg:w-[200px] h-auto max-xl:ml-6 mx-14 object-contain" /> --}}
                            </div>

                            <!-- DESCRIPTION -->
                            <div class="lg:w-3/5">
                                <h1 class="text-gradient mb-2 text-3xl font-bold max-sm:mb-0 max-sm:text-2xl">EmoShuffle</h1>
                                <div class="my-2 flex justify-center md:hidden">
                                    <img src="{{ asset("assets/images/landing/asset-beranda/produk/emoshuffle.webp") }}" alt="EmoShuffle" class="h-auto w-52 object-cover" />
                                </div>
                                <p class="mb-4 text-justify text-[#70787D]">Permainan kartu untuk individu maupun kelompok yang dirancang dengan desain menarik, berupa pertanyaan, kutipan, atau aksi yang dapat meningkatkan kepedulian akan kesehatan mental serta mendalami dan mengekspresikan perasaan pemain.</p>
                                <h1 class="text-gradient-emo mb-2 text-2xl font-bold max-sm:mb-0 max-sm:text-xl">Fokus</h1>
                                <p class="mb-8 text-justify text-[#70787D]">EmoShuffle hadir untuk menjadi reminder akan pentingnya merawat kesehatan mental kita dengan mengurangi stress, tekanan, dan kecemasan.</p>

                                <div class="flex justify-start">
                                    <a href="{{ route("product.emo-shuffle.index") }}">
                                        <button class="text-md rounded-xl bg-gradient-to-r from-[#3986A3] to-[#225062] px-4 py-2 text-white max-sm:w-full max-sm:text-[15px]">Lihat Selengkapnya</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section("script")
    <script>
        var swiper = new Swiper('.swiperProdukBerbinar', {
            slidesPerView: 1,
            spaceBetween: 10,
            loop: true,
            autoplay: {
                delay: 2000,
                disableOnInteraction: false,
            },
            speed: 1000,
            breakpoints: {
                640: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 1,
                },
                1024: {
                    slidesPerView: 1,
                },
            },
        });
    </script>
@endsection
