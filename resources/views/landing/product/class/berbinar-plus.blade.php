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
            background-image: url('/assets/images/landing/vector-curling-mobile.png');
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            z-index: 1;
            overflow: hidden;
        }

        .bg-layanan-desktop {
            background-image: url('/assets/images/landing/asset-kelas/berbinar-plus/bg-layanan-berbinar-plus.png');
        }

        .bg-cta {
            background-image: url('/assets/images/landing/asset-kelas/berbinar-plus/banner-cta.png');
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

        #swiperPsikolog {
            width: 1130px;
            overflow: hidden;
            margin: 25px auto;
        }

        #swiperPsikolog .swiper-button-next::after,
        #swiperPsikolog .swiper-button-prev::after {
            content: '';
        }

        #swiperPsikolog .swiper-button-prev,
        #swiperPsikolog .swiper-button-next {
            width: 35px;
            height: 35px;
            background-color: #74aabf;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
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

            .bg-layanan-desktop {
                background-image: none;
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

            .bg-layanan-desktop {
                background-image: none;
            }
        }

        @media (max-width: 1024px) {
        }

        @media (min-width: 1280px) {
        }

        @media (min-width: 1536px) {
        }

        .swiper-scrollbar {
            --swiper-scrollbar-border-radius: 10px;
            --swiper-scrollbar-top: auto;
            --swiper-scrollbar-bottom: 4px;
            --swiper-scrollbar-left: auto;
            --swiper-scrollbar-right: 4px;
            --swiper-scrollbar-sides-offset: 1%;
            --swiper-scrollbar-bg-color: #d4d4d4;
            --swiper-scrollbar-drag-bg-color: #9dd4ee;
            --swiper-scrollbar-size: 10px;
        }

        .border-active {
            border: 1.5px solid #3986a3;
        }

        @media (min-width: 0px) and (max-width: 640px) {
            #swiperKonseling {
                width: 580px;
            }

            #swiperPsikolog {
                width: 800px;
                margin: 10px auto;
            }

            #swiperPeer {
                width: 550px;
                margin: 10px auto;
            }

            #swiperTestimoni {
                width: 500px;
            }

            .swiperContainer {
                overflow: hidden;
                margin: 0px 17px;
            }
        }

        @media (max-width: 767px) {
            .bg-psikolog {
                background-image: none;
            }
        }

        @media (min-width: 641px) and (max-width: 767px) {
            #swiperKonseling {
                width: 670px;
            }

            #swiperPsikolog {
                width: 700px;
            }

            #swiperPeer {
                width: 700px;
            }

            #swiperTestimoni {
                width: 550px;
            }

            .swiperContainer {
                overflow: hidden;
                margin: 0px 80px;
            }
        }

        @media (min-width: 768px) and (max-width: 992px) {
            #swiperTestimoni {
                width: 800px;
                margin: 20px auto;
            }
        }

        @media (min-width: 768px) and (max-width: 1024px) {
            #swiperKonseling {
                width: 950px;
            }

            #swiperPsikolog {
                width: 950px;
            }

            #swiperPeer {
                width: 750px;
            }

            .swiperContainer {
                overflow: hidden;
                margin: 0px 80px;
            }
        }

        @media (min-width: 1025px) {
            #swiperPsikolog {
                padding-left: 25px;
                padding-right: 25px;
            }
        }
    </style>
@endsection

@section("content")
    {{-- HERO SECTION --}}
    <section class="relative mb-12 max-md:overflow-hidden">
        <div class="absolute left-0 top-5 z-0 max-sm:top-32">
            <img src="{{ asset("assets/images/landing/asset-konseling/vector/vector-hero1.svg") }}" alt="Vector" class="h-[500px] w-auto max-sm:h-[250px]" />
        </div>

        <div class="absolute right-0 top-8 z-0 max-md:-right-28 max-sm:-right-20 max-sm:top-40">
            <img src="{{ asset("assets/images/landing/asset-konseling/vector/vector-hero2.svg") }}" alt="Vector" class="h-[500px] w-auto max-sm:h-[250px]" />
        </div>

        <div class="relative">
            <div class="z-10 mx-20 mt-40 flex flex-row items-center justify-between gap-x-10 max-sm:mx-4 max-sm:mt-32">
                <div class="max-lg:min-w-auto flex max-w-xl flex-1 flex-col space-y-6 max-sm:space-y-2">
                    <a href="{{ route("product.index") }}">
                        <div class="flex cursor-pointer items-center space-x-2 lg:order-1">
                            <img src="{{ asset("assets/images/landing/asset-konseling/vector/left-arrow.svg") }}" alt="Left Arrow" class="h-3 w-auto" />
                            <p class="text-[15px] font-semibold text-[#3986A3]">Produk Berbinar</p>
                        </div>
                    </a>

                    <div class="hidden w-full items-center justify-center max-lg:flex-none max-md:flex lg:order-2 lg:w-auto">
                        <img src="{{ asset("assets/images/landing/asset-kelas/berbinar-plus/hero.png") }}" alt="Class" class="h-[340px] w-auto object-contain max-sm:h-[320px]" />
                    </div>

                    <div class="lg:order-3">
                        <h2 class="text-gradient py-2 text-5xl font-bold max-sm:text-3xl">Berbinar+</h2>
                    </div>

                    <div class="lg:order-4">
                        <p class="text-justify text-lg text-[#70787D] max-lg:text-[17px] max-sm:text-[15px] max-sm:leading-normal">Berbinar+ adalah layanan One-Package yang terdiri dari kelas daring berbasis video pembelajaran, konseling materi secara langsung, dan psikotes yang disediakan oleh Berbinar Insightful Indonesia. Peserta bebas memilih kelas yang ditawarkan serta layanan apa saja yang akan diambil.</p>
                    </div>
                </div>

                <div class="flex w-full flex-initial items-center justify-center max-lg:flex-1 max-md:hidden lg:w-auto">
                    <img src="{{ asset("assets/images/landing/asset-kelas/berbinar-plus/hero.png") }}" alt="Class" class="h-[340px] w-auto object-contain max-lg:h-[320px]" />
                </div>
            </div>
        </div>
    </section>

    {{-- PRODUK BERBINAR PLUS --}}
    <section class="relative mb-12">
        <div class="absolute left-0 top-4 z-0 max-sm:top-40">
            <img src="{{ asset("assets/images/landing/asset-konseling/vector/vector-line.svg") }}" alt="Vector Image" class="" />
        </div>

        <h2 class="font relative z-10 mx-20 mb-12 mt-14 text-center text-4xl font-semibold text-black max-sm:mx-2 max-sm:text-[29px]">
            Daftar Kelas
            <span class="bg-primary px-2 text-white">Berbinar +</span>
        </h2>

        <div x-data="{ tab: 'DM' }" class="relative z-20 mx-auto">
            <!-- Tab Navigation -->
            <div class="mx-auto mb-4 flex flex-wrap items-center justify-between rounded-2xl bg-white p-2 shadow-md max-lg:mx-20 max-md:justify-center max-sm:mx-4 max-sm:max-w-full lg:max-w-screen-lg">
                <button @click="tab = 'SS'" :class="{'bg-[#3986A3] font-medium text-white': tab === 'SS'}" class="rounded-xl p-2 font-medium text-black">Socmed Specialist</button>
                <button @click="tab = 'PM'" :class="{'bg-[#3986A3] font-medium text-white': tab === 'PM'}" class="rounded-xl p-2 font-medium text-black">Product Management</button>
                <button @click="tab = 'HR'" :class="{'bg-[#3986A3] font-medium text-white': tab === 'HR'}" class="rounded-xl p-2 font-medium text-black">Human Resource</button>
                <button @click="tab = 'GD'" :class="{'bg-[#3986A3] font-medium text-white': tab === 'GD'}" class="rounded-xl p-2 font-medium text-black">Graphic Designer</button>
                <button @click="tab = 'DM'" :class="{'bg-[#3986A3] font-medium text-white': tab === 'DM'}" class="rounded-xl p-2 font-medium text-black">Digital Marketing</button>
            </div>

            <!-- Card Layout -->
            <div class="relative mx-20 my-8 items-center overflow-hidden rounded-3xl border bg-white shadow-md transition-all duration-300 ease-in-out max-sm:mx-4 max-sm:mb-8 max-sm:mt-4">
                <!-- Socmed Specialist(SS) -->
                <div x-show="tab === 'SS'" x-transition:enter="transform transition duration-300 ease-out" x-transition:enter-start="translate-x-full opacity-0" x-transition:enter-end="translate-x-0 opacity-100" x-transition:leave="transform transition duration-300 ease-in" x-transition:leave-start="translate-x-0 opacity-100" x-transition:leave-end="-translate-x-full opacity-0" x-cloak class="p-8 max-sm:p-4">
                    <div class="flex flex-col gap-4">
                        <div class="relative">
                            {{-- IMAGE --}}
                            <div class="max-md:hidden">
                                <img src="{{ asset("assets/images/landing/asset-kelas/berbinar-plus/ss.png") }}" alt="Konseling" class="float-right ml-6 h-auto w-[320px] object-contain max-lg:w-[280px]" />
                            </div>

                            <!-- DESCRIPTION -->
                            <h1 class="text-gradient mb-2 text-3xl font-bold max-sm:mb-0 max-sm:text-2xl">Social Media Specialist</h1>
                            <div class="my-2 flex justify-center md:hidden">
                                <img src="{{ asset("assets/images/landing/asset-kelas/berbinar-plus/ss.png") }}" alt="Psikotes" class="h-auto w-[280px] object-contain" />
                            </div>
                            <p class="mb-4 text-justify text-[#70787D] max-sm:text-[15px]">Kelas yang ditawarkan untuk membantu dalam merencanakan, membuat, dan mengelola konten yang sesuai di platform media sosial.</p>
                            <ul class="list-disc space-y-3 pl-5 text-justify text-[#3F3F3F] marker:text-[#3986A3] max-sm:space-y-1 max-sm:text-[15px]">
                                <li>
                                    <p class="font-semibold">Strategi Pemasaran Konten yang Efektif dan Pemasaran Digital</p>
                                    <p class="text-[#70787D]">Pelajari dasar-dasar strategi pemasaran konten, merancang ide kreatif dan memanfaatkan platform digital untuk menjangkau audiens yang lebih luas.</p>
                                </li>
                                <li>
                                    <p class="font-semibold">Pemasaran Influencer dan Kemitraan</p>
                                    <p class="text-[#70787D]">Temukan cara mudah untuk bekerja sama dengan influencer dan membangun kemitraan yang mendukung pemasaran.</p>
                                </li>
                                <li>
                                    <p class="font-semibold">Copywriting for Social Media Content & Campaign</p>
                                    <p class="text-[#70787D]">Pelajari trik dasar menulis teks menarik untuk konten media sosial dan ciptakan postingan yang berkesan dan mendorong lebih banyak interaksi di platform favoritmu.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Product Management(PM) -->
                <div x-show="tab === 'PM'" x-transition:enter="transform transition duration-300 ease-out" x-transition:enter-start="translate-x-full opacity-0" x-transition:enter-end="translate-x-0 opacity-100" x-transition:leave="transform transition duration-300 ease-in" x-transition:leave-start="translate-x-0 opacity-100" x-transition:leave-end="-translate-x-full opacity-0" x-cloak class="p-8 max-sm:p-4">
                    <div class="flex flex-col gap-4">
                        <div class="relative">
                            {{-- IMAGE --}}
                            <div class="max-md:hidden">
                                <img src="{{ asset("assets/images/landing/asset-kelas/berbinar-plus/pm.png") }}" alt="Psikotes" class="float-right ml-6 h-auto w-[320px] object-contain max-lg:w-[280px]" />
                            </div>

                            <!-- DESCRIPTION -->
                            <h1 class="text-gradient mb-2 text-3xl font-bold max-sm:mb-0 max-sm:text-2xl">Product Management</h1>
                            <div class="my-2 flex justify-center md:hidden">
                                <img src="{{ asset("assets/images/landing/asset-kelas/berbinar-plus/pm.png") }}" alt="Psikotes" class="h-auto w-[280px] object-contain" />
                            </div>
                            <p class="mb-4 text-justify text-[#70787D] max-sm:text-[15px]">Kelas yang ditawarkan untuk membantu dalam menentukan strategi perusahaan yang berhubungan dengan pengembangan & peluncuran suatu produk bisnis.</p>
                            <ul class="list-disc space-y-3 pl-5 text-justify text-[#3F3F3F] marker:text-[#3986A3] max-sm:space-y-1 max-sm:text-[15px]">
                                <li>
                                    <p class="font-semibold">Pengembangan Produk Digital</p>
                                    <p class="text-[#70787D]">Pelajari langkah-langkah sederhana untuk mengembangkan produk digital Cocok untuk kamu yang baru ingin mengenal dunia teknologi dan ingin tahu bagaimana ide bisa menjadi solusi nyata.</p>
                                </li>
                                <li>
                                    <p class="font-semibold">Pengenalan & Strategi Product Management dalam Dunia Kerja</p>
                                    <p class="text-[#70787D]">Pelajari peran Product Manager dan dasar-dasar strategi manajemen produk dengan cara yang ringan dan praktis, cocok untuk Kamu yang ingin memahami profesi ini lebih dalam.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Human Resource(HR) -->
                <div x-show="tab === 'HR'" x-transition:enter="transform transition duration-300 ease-out" x-transition:enter-start="translate-x-full opacity-0" x-transition:enter-end="translate-x-0 opacity-100" x-transition:leave="transform transition duration-300 ease-in" x-transition:leave-start="translate-x-0 opacity-100" x-transition:leave-end="-translate-x-full opacity-0" x-cloak class="p-8 max-sm:p-4">
                    <div class="flex flex-col gap-4">
                        <div class="relative">
                            {{-- IMAGE --}}
                            <div class="max-md:hidden">
                                <img src="{{ asset("assets/images/landing/asset-kelas/berbinar-plus/hr.png") }}" alt="Class" class="float-right ml-6 h-auto w-[320px] object-contain max-lg:w-[280px]" />
                            </div>

                            <!-- DESCRIPTION -->
                            <h1 class="text-gradient mb-2 text-3xl font-bold max-sm:mb-0 max-sm:text-2xl">Human Resource</h1>
                            <div class="my-2 flex justify-center md:hidden">
                                <img src="{{ asset("assets/images/landing/asset-kelas/berbinar-plus/hr.png") }}" alt="Class" class="h-auto w-[280px] object-contain" />
                            </div>
                            <p class="mb-4 text-justify text-[#70787D] max-sm:text-[15px]">Kelas yang ditawarkan untuk membantu individu atau tim dalam mempelajari dan meningkatkan keterampilan mengelola produk dan layanan.</p>
                            <ul class="list-disc space-y-3 pl-5 text-justify text-[#3F3F3F] marker:text-[#3986A3] max-sm:space-y-1 max-sm:text-[15px]">
                                <li>
                                    <p class="font-semibold">Pengantar Sumber Daya Manusia dan Mekanisme Kerja</p>
                                    <p class="text-[#70787D]">Pelajari dasar-dasar bidang HR, dan bagaimana perannya mendukung operasional perusahaan.</p>
                                </li>
                                <li>
                                    <p class="font-semibold">Human Resource Recruitment dan Struktur Organisasi</p>
                                    <p class="text-[#70787D]">Belajar langkah awal dalam proses rekrutmen, seperti menyaring kandidat dan wawancara sederhana.</p>
                                </li>
                                <li>
                                    <p class="font-semibold">Career Preparation</p>
                                    <p class="text-[#70787D]">Persiapkan dirimu untuk karier di bidang HR dengan tips sederhana, mulai dari membuat CV hingga menghadapi wawancara kerja.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Graphic Designer(GD) -->
                <div x-show="tab === 'GD'" x-transition:enter="transform transition duration-300 ease-out" x-transition:enter-start="translate-x-full opacity-0" x-transition:enter-end="translate-x-0 opacity-100" x-transition:leave="transform transition duration-300 ease-in" x-transition:leave-start="translate-x-0 opacity-100" x-transition:leave-end="-translate-x-full opacity-0" x-cloak class="p-8 max-sm:p-4">
                    <div class="flex flex-col gap-4">
                        <div class="relative">
                            {{-- IMAGE --}}
                            <div class="max-md:hidden">
                                <img src="{{ asset("assets/images/landing/asset-kelas/berbinar-plus/gd.png") }}" alt="Consulting" class="float-right ml-6 h-auto w-[320px] object-contain max-lg:w-[280px]" />
                            </div>

                            <!-- DESCRIPTION -->
                            <h1 class="text-gradient mb-2 text-3xl font-bold max-sm:mb-0 max-sm:text-2xl">Design Graphic</h1>
                            <div class="my-2 flex justify-center md:hidden">
                                <img src="{{ asset("assets/images/landing/asset-kelas/berbinar-plus/gd.png") }}" alt="Consulting" class="h-auto w-[280px] object-contain" />
                            </div>
                            <p class="text-justify text-[#70787D] max-sm:text-[15px]">Kelas yang ditawarkan untuk membantu dalam mempelajari dasar-dasar desain grafis dan teknik desain grafis yang lebih kompleks.</p>
                            <ul class="list-disc space-y-3 pl-5 text-justify text-[#3F3F3F] marker:text-[#3986A3] max-sm:space-y-1 max-sm:text-[15px]">
                                <li>
                                    <p class="font-semibold">Prinsip-prinsip Desain Grafis & Jenis Elemen Desain Grafis</p>
                                    <p class="text-[#70787D]">Kenali dasar-dasar desain grafis, seperti warna, tipografi, dan elemen visual lainnya.</p>
                                </li>
                                <li>
                                    <p class="font-semibold italic">Presentasi Desain & Portofolio Desain Grafis yang Efektif</p>
                                    <p class="text-[#70787D]">Pelajari cara menyusun portofolio sederhana namun menarik yang bisa memamerkan kreativitasmu.</p>
                                </li>
                                <li>
                                    <p class="font-semibold">Desain Grafis untuk Sosial Media & Teknik Ilustrasi Digital</p>
                                    <p class="text-[#70787D]">Kenali teknik desain sederhana yang bisa langsung diterapkan untuk media sosial, mulai dari membuat postingan hingga ilustrasi digital yang menarik perhatian.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Digital Marketing(DM) -->
                <div x-show="tab === 'DM'" x-transition:enter="transform transition duration-300 ease-out" x-transition:enter-start="translate-x-full opacity-0" x-transition:enter-end="translate-x-0 opacity-100" x-transition:leave="transform transition duration-300 ease-in" x-transition:leave-start="translate-x-0 opacity-100" x-transition:leave-end="-translate-x-full opacity-0" x-cloak class="p-8 max-sm:p-4">
                    <div class="flex flex-col gap-4">
                        <div class="relative">
                            {{-- IMAGE --}}
                            <div class="max-md:hidden">
                                <img src="{{ asset("assets/images/landing/asset-kelas/berbinar-plus/dm.png") }}" alt="MoodScan Tees" class="float-right ml-6 h-auto w-[320px] object-contain max-lg:w-[280px]" />
                            </div>

                            <!-- DESCRIPTION -->
                            <h1 class="text-gradient mb-2 text-3xl font-bold max-sm:mb-0 max-sm:text-2xl">Digital Marketing</h1>
                            <div class="my-2 flex justify-center md:hidden">
                                <img src="{{ asset("assets/images/landing/asset-kelas/berbinar-plus/dm.png") }}" alt="MoodScan Tees" class="h-auto w-[280px] object-contain" />
                            </div>
                            <ul class="list-disc space-y-3 pl-5 text-justify text-[#3F3F3F] marker:text-[#3986A3] max-sm:space-y-1 max-sm:text-[15px]">
                                <li>
                                    <p class="font-semibold">Knowing Digital Marketing: Understanding the Essentials</p>
                                    <p class="text-[#70787D]">Pelajari dasar-dasar hingga elemen penting seperti media sosial, SEO, dan strategi digital yang simpel namun impactful. Pelajari juga tren terbaru dan alat populer seperti Google Analytics untuk langkah awal yang tepat!</p>
                                </li>
                                <li>
                                    <p class="font-semibold italic">Mastering Social Media Marketing: Strategy, Campaigns, and Engagement</p>
                                    <p class="text-[#70787D]">Kamu akan belajar membuat kampanye kreatif di platform populer seperti Instagram dan TikTok, sambil memahami strategi engagement yang tepat.</p>
                                </li>
                                <li>
                                    <p class="font-semibold">SEO Basics: Boosting Your Visibility on Search Engines</p>
                                    <p class="text-[#70787D]">Pelajari dasar-dasar SEO dengan cara yang simpel! Mulai dari riset kata kunci hingga cara optimasi konten.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- LAYANAN BERBINAR PLUS --}}
    <section class="bg-layanan-desktop relative mx-20 mb-12 h-[280px] rounded-3xl bg-cover p-10 max-md:my-5 max-md:h-[600px] max-md:overflow-hidden max-sm:mx-4 max-sm:h-[500px]">
        <img src="{{ asset("assets/images/landing/vector-curling-mobile.png") }}" alt="Background" class="absolute -top-[150px] left-0 hidden w-[1000px] rounded-t-3xl object-cover max-md:-top-[220px] max-md:flex max-md:h-[700px] max-sm:-top-[200px] max-sm:h-[600px] max-sm:w-[1500px]" />
        <div class="absolute inset-0 flex rounded-3xl bg-[#2D6B8280] max-md:hidden"></div>

        <div class="relative flex flex-col items-center justify-center space-y-4 text-center">
            <h1 class="mb-4 text-3xl font-semibold text-white max-sm:text-2xl">
                Layanan Berbinar
                <span class="italic">Consulting</span>
            </h1>
            <div class="flex h-96 w-full flex-col items-center gap-4 overflow-y-scroll scrollbar-hide lg:max-w-screen-lg lg:flex-row lg:justify-center lg:overflow-visible">
                <div class="h-96 w-full rounded-xl bg-white p-10 shadow-lg lg:w-1/3 lg:overflow-scroll lg:scrollbar-hide">
                    <h3 class="mb-4 text-lg font-semibold leading-tight text-black">Kelas Daring 👩‍💻</h3>
                    <img src="{{ asset("assets/images/landing/asset-consulting/line.png") }}" alt="line" class="mb-4 hidden scale-y-150 lg:block" />
                    <p class="font-base text-justify text-[#70787D]">Pemberian akses video materi yang disampaikan oleh narasumber sekaligus mentor kompeten sesuai dengan topik kelas yang tersedia. Kelas yang kami sediakan cukup bervariatif misal kelas Jobseekers yang dapat membantu dirimu untuk menemukan pekerjaan.</p>
                </div>
                <div class="h-96 w-full rounded-xl bg-white p-10 shadow-lg lg:w-1/3 lg:overflow-scroll lg:scrollbar-hide">
                    <h3 class="mb-4 text-lg font-semibold leading-tight text-black">Konseling 💬</h3>
                    <img src="{{ asset("assets/images/landing/asset-consulting/line.png") }}" alt="line" class="mb-4 hidden scale-y-150 lg:block" />
                    <ul class="space-y-4 text-base text-gray-600">
                        <li class="flex items-start gap-2">
                            <svg class="mt-1 h-5 w-5 shrink-0 text-[#2D6B82]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                            </svg>
                            <div>
                                <p class="font-base text-justify text-[#70787D]">Psikolog Counseling: Layanan dari ahli untuk membantu individu dengan masalah kepribadian, mental, dll.</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="mt-1 h-5 w-5 shrink-0 text-[#2D6B82]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                            </svg>
                            <div>
                                <p class="font-base text-justify text-[#70787D]">Peer Counseling: Konseling oleh sebaya yang dilatih oleh psikolog berizin, untuk melayani klien seusia.</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="h-96 w-full rounded-xl bg-white p-10 shadow-lg lg:w-1/3 lg:overflow-scroll lg:scrollbar-hide">
                    <h3 class="mb-4 text-lg font-semibold leading-tight text-black">Psikotes 🧠️</h3>
                    <img src="{{ asset("assets/images/landing/asset-consulting/line.png") }}" alt="line" class="mb-4 hidden scale-y-150 lg:block" />
                    <p class="font-base text-justify text-[#70787D]">Paket upgrade ketiga yang ditawarkan oleh Berbinar Insightful Indonesia ini tersedia apabila peserta masih ingin mencari informasi tambahan yang mendalam terkait materi yang telah diterima setelah melewati dua tahap sebelumnya.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- PEMATERI BERBINAR PLUS --}}
    <section class="relative mb-12 w-full lg:mt-52">
        <div class="relative z-10 mx-[320px] mt-8 justify-center text-center max-xl:mx-12 max-sm:mx-3 max-sm:mt-12">
            <h1 class="font mb-8 text-4xl font-semibold text-black max-sm:text-[29px]">
                Pemateri
                <span class="bg-[#3886A3] px-2 text-white">Berbinar +</span>
            </h1>
            <p class="mb-4 max-w-screen-lg text-lg text-[#70787D] max-sm:text-[15px] max-sm:leading-snug">Berbinar+ menghadirkan para pemateri profesional yang ahli di bidangnya, dengan pengalaman yang relevan dan pendekatan psikologis, setiap sesi dirancang untuk memberikan wawasan mendalam serta keterampilan praktis yang dapat langsung diterapkan dalam pengembangan diri maupun karier peserta.</p>
        </div>

        <div class="swiperContainer md:overflow-scroll md:scrollbar-hide">
            <div class="swiper mt-10" id="swiperPsikolog">
                <div class="swiper-wrapper">
                    @foreach ($psikologs as $psikolog)
                        <div class="swiper-slide">
                            <div class="flex flex-col items-center">
                                <img src="{{ asset($psikolog["image"]) }}" alt="{{ $psikolog["name"] }}" class="h-[180px] w-auto max-sm:h-[140px]" />
                                <p class="mt-2 text-center text-lg font-semibold text-black max-sm:text-[16px] max-sm:leading-snug">
                                    {{ $psikolog["name"] }}
                                </p>
                                {{-- @dump($psikolog['title'] === '-') --}}
                                {{-- @dump($psikolog['field']) --}}
                                <span class="font-xs text-center text-sm text-[#70787D]">{{ $psikolog["field"] }}</span>
                                @if ($psikolog["title"] !== "-")
                                    <span class="font-xs text-center text-sm text-[#70787D]">"{{ $psikolog["title"] }}"</span>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="flex max-lg:hidden">
                    <div class="swiper-button-prev">
                        <img src="{{ asset("assets/images/landing/asset-konseling/vector/left-navigation.svg") }}" alt="prev-button" class="h-auto w-3" />
                    </div>
                    <div class="swiper-button-next">
                        <img src="{{ asset("assets/images/landing/asset-konseling/vector/right-navigation.svg") }}" alt="next-button" class="h-auto w-3" />
                    </div>
                </div>

                <div class="pt-10 max-sm:pt-4">
                    <div class="swiper-scrollbar hidden max-lg:flex"></div>
                </div>
            </div>
        </div>
    </section>

    {{-- HARGA LAYANAN BERBINAR PLUS --}}
    <section class="bg-layanan-desktop relative mx-20 mb-12 h-96 rounded-3xl bg-cover p-10 max-md:my-5 max-md:h-[600px] max-md:overflow-hidden max-sm:mx-4 max-sm:h-[500px]">
        <img src="{{ asset("assets/images/landing/vector-curling-mobile.png") }}" alt="Background" class="absolute -top-[150px] left-0 hidden w-[1000px] rounded-t-3xl object-cover max-md:-top-[220px] max-md:flex max-md:h-[700px] max-sm:-top-[200px] max-sm:h-[600px] max-sm:w-[1500px]" />
        <div class="absolute inset-0 flex rounded-3xl bg-[#2D6B8280] max-md:hidden"></div>

        <div class="relative mb-4 flex flex-col items-center justify-center space-y-4 text-center">
            <h1 class="mb-4 text-3xl font-semibold text-white max-sm:text-2xl">Layanan Berbinar +</h1>
        </div>
        <div class="relative z-20 h-96 w-full overflow-y-scroll scrollbar-hide lg:flex lg:h-auto lg:flex-row lg:items-stretch lg:gap-4 lg:overflow-y-visible lg:py-4">
            <div class="mb-4 flex w-full flex-col justify-between rounded-2xl bg-white/90 p-6 shadow-lg lg:mt-20 lg:w-1/4">
                <h3 class="mx-auto mb-4 text-center text-2xl font-semibold">{{ $layanan_berbinar_plus["insight"]["name"] }}</h3>
                <span class="mx-auto mb-8 block text-center text-3xl font-semibold text-primary">{{ $layanan_berbinar_plus["insight"]["price"] }}</span>
                <img src="{{ asset("assets/images/landing/asset-kelas/berbinar-plus/line-plus.png") }}" alt="line-plus" class="mx-auto mb-8" />
                <ul class="mb-12 h-24 w-full space-y-4 overflow-y-scroll text-base text-gray-600 scrollbar-hide">
                    @foreach ($layanan_berbinar_plus["insight"]["services"] as $item)
                        <li class="flex items-start gap-2">
                            <svg class="mt-1 h-5 w-5 shrink-0 text-green-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm13.707-1.293a1 1 0 0 0-1.414-1.414L11 12.586l-1.793-1.793a1 1 0 0 0-1.414 1.414l2.5 2.5a1 1 0 0 0 1.414 0l4-4Z" clip-rule="evenodd" />
                            </svg>
                            <div>
                                <p class="font-base text-justify text-[#70787D]">
                                    {{ $item }}
                                </p>
                            </div>
                        </li>
                    @endforeach
                </ul>
                <a href="#" class="block w-full py-1">
                    <div class="mx-auto flex w-fit items-center justify-center rounded-lg bg-gradient-to-l from-[#AD7D29] to-[#F7B23B] px-8 py-2 hover:from-[#AD7D29]/80 hover:to-[#F7B23B]/80 hover:shadow-lg">
                        <span class="text-white">Mulai Sekarang</span>
                    </div>
                </a>
            </div>
            <div class="mb-4 flex w-full flex-col bg-transparent pt-2 lg:w-1/2">
                <div x-data="{ tab: 'online' }" class="relative z-20 mx-auto w-full">
                    <!-- Tab Navigation -->
                    <div class="mx-auto flex flex-wrap items-center rounded-2xl bg-white p-1.5 shadow-md max-lg:mx-20 max-md:justify-center max-sm:mx-4 max-sm:max-w-full lg:max-w-screen-lg">
                        <button @click="tab = 'online'" :class="{'bg-gradient-to-l from-[#193A46] to-[#37829E] font-medium text-white': tab === 'online'}" class="w-1/2 rounded-xl p-2 font-medium text-black">Online</button>
                        <button @click="tab = 'offline'" :class="{'bg-gradient-to-l from-[#193A46] to-[#37829E] font-medium text-white': tab === 'offline'}" class="w-1/2 rounded-xl p-2 font-medium text-black">Offline</button>
                    </div>

                    <!-- Card Layout -->
                    <div class="relative mt-5 rounded-2xl border bg-white/90 pb-5 shadow-md transition-all duration-300 ease-in-out">
                        <!-- oneline -->
                        <div x-show="tab === 'online'" x-cloak class="p-8 max-sm:p-4">
                            <div class="w-full gap-4">
                                <h3 class="mx-auto mb-4 text-center text-2xl font-semibold">{{ $layanan_berbinar_plus["A+"]["name"] }}</h3>
                                <div class="mb-4 w-full lg:flex lg:flex-row lg:items-center lg:justify-evenly">
                                    <div class="mx-auto mb-2 w-full lg:mb-0 lg:w-2/5">
                                        <h4 class="mx-auto mb-4 text-center text-lg font-semibold">
                                            <span class="italic">Weekday</span>
                                            ☀️
                                        </h4>
                                        <span class="mx-auto mb-8 block text-center text-2xl font-semibold text-primary">{{ $layanan_berbinar_plus["A+"]["price"]["online"]["weekday"] }}</span>
                                    </div>
                                    <div class="hidden h-32 overflow-hidden lg:block">
                                        <img src="{{ asset("assets/images/landing/asset-kelas/berbinar-plus/line-plus-vec.png") }}" alt="line-plus" class="mx-auto mb-8" />
                                    </div>
                                    <div class="mx-auto w-full lg:w-2/5">
                                        <h4 class="mx-auto mb-4 text-center text-lg font-semibold">
                                            <span class="italic">Weekend</span>
                                            🕶️
                                        </h4>
                                        <span class="mx-auto mb-8 block text-center text-2xl font-semibold text-primary">{{ $layanan_berbinar_plus["A+"]["price"]["online"]["weekend"] }}</span>
                                    </div>
                                </div>
                                <ul class="h-24 w-full space-y-4 overflow-y-scroll text-base text-gray-600 scrollbar-hide">
                                    @foreach ($layanan_berbinar_plus["A+"]["services"] as $item)
                                        <li class="flex items-start gap-2">
                                            <svg class="mt-1 h-5 w-5 shrink-0 text-green-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                                <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm13.707-1.293a1 1 0 0 0-1.414-1.414L11 12.586l-1.793-1.793a1 1 0 0 0-1.414 1.414l2.5 2.5a1 1 0 0 0 1.414 0l4-4Z" clip-rule="evenodd" />
                                            </svg>
                                            <div>
                                                <p class="font-base text-justify text-[#70787D]">
                                                    {{ $item }}
                                                </p>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                                <a href="#" class="block w-full py-1">
                                    <div class="mx-auto flex w-fit items-center justify-center rounded-lg bg-gradient-to-l from-[#AD7D29] to-[#F7B23B] px-8 py-2 hover:from-[#AD7D29]/80 hover:to-[#F7B23B]/80 hover:shadow-lg">
                                        <span class="text-white">Mulai Sekarang</span>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- offline -->
                        <div x-show="tab === 'offline'" x-cloak class="p-8 max-sm:p-4">
                            <div class="w-full gap-4">
                                <h3 class="mx-auto mb-4 text-center text-2xl font-semibold">{{ $layanan_berbinar_plus["A+"]["name"] }}</h3>
                                <div class="mb-4 w-full lg:flex lg:flex-row lg:items-center lg:justify-evenly">
                                    <div class="mx-auto mb-2 w-full lg:mb-0 lg:w-2/5">
                                        <h4 class="mx-auto mb-4 text-center text-lg font-semibold">
                                            <span class="italic">Weekday</span>
                                            ☀️
                                        </h4>
                                        <span class="mx-auto mb-8 block text-center text-2xl font-semibold text-primary">{{ $layanan_berbinar_plus["A+"]["price"]["offline"]["weekday"] }}</span>
                                    </div>
                                    <div class="hidden h-32 overflow-hidden lg:block">
                                        <img src="{{ asset("assets/images/landing/asset-kelas/berbinar-plus/line-plus-vec.png") }}" alt="line-plus" class="mx-auto mb-8" />
                                    </div>
                                    <div class="mx-auto w-full lg:w-2/5">
                                        <h4 class="mx-auto mb-4 text-center text-lg font-semibold">
                                            <span class="italic">Weekend</span>
                                            🕶️
                                        </h4>
                                        <span class="mx-auto mb-8 block text-center text-2xl font-semibold text-primary">{{ $layanan_berbinar_plus["A+"]["price"]["offline"]["weekend"] }}</span>
                                    </div>
                                </div>
                                <ul class="h-24 w-full space-y-4 overflow-y-scroll text-base text-gray-600 scrollbar-hide">
                                    @foreach ($layanan_berbinar_plus["A+"]["services"] as $item)
                                        <li class="flex items-start gap-2">
                                            <svg class="mt-1 h-5 w-5 shrink-0 text-green-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                                <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm13.707-1.293a1 1 0 0 0-1.414-1.414L11 12.586l-1.793-1.793a1 1 0 0 0-1.414 1.414l2.5 2.5a1 1 0 0 0 1.414 0l4-4Z" clip-rule="evenodd" />
                                            </svg>
                                            <div>
                                                <p class="font-base text-justify text-[#70787D]">
                                                    {{ $item }}
                                                </p>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                                <a href="#" class="block w-full py-1">
                                    <div class="mx-auto flex w-fit items-center justify-center rounded-lg bg-gradient-to-l from-[#AD7D29] to-[#F7B23B] px-8 py-2 hover:from-[#AD7D29]/80 hover:to-[#F7B23B]/80 hover:shadow-lg">
                                        <span class="text-white">Mulai Sekarang</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-4 flex w-full flex-col justify-between rounded-2xl bg-white/90 p-6 shadow-lg lg:mt-20 lg:w-1/4">
                <h3 class="mx-auto mb-4 text-center text-2xl font-semibold">{{ $layanan_berbinar_plus["complete"]["name"] }}</h3>
                <span class="mx-auto mb-8 block text-center text-3xl font-semibold text-primary">{{ $layanan_berbinar_plus["complete"]["price"] }}</span>
                <img src="{{ asset("assets/images/landing/asset-kelas/berbinar-plus/line-plus.png") }}" alt="line-plus" class="mx-auto mb-8" />
                <ul class="mb-12 h-24 w-full space-y-4 overflow-y-scroll text-base text-gray-600 scrollbar-hide">
                    @foreach ($layanan_berbinar_plus["complete"]["services"] as $item)
                        <li class="flex items-start gap-2">
                            <svg class="mt-1 h-5 w-5 shrink-0 text-green-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm13.707-1.293a1 1 0 0 0-1.414-1.414L11 12.586l-1.793-1.793a1 1 0 0 0-1.414 1.414l2.5 2.5a1 1 0 0 0 1.414 0l4-4Z" clip-rule="evenodd" />
                            </svg>
                            <div>
                                <p class="font-base text-justify text-[#70787D]">
                                    {{ $item }}
                                </p>
                            </div>
                        </li>
                    @endforeach
                </ul>
                <a href="#" class="block w-full py-1">
                    <div class="mx-auto flex w-fit items-center justify-center rounded-lg bg-gradient-to-l from-[#AD7D29] to-[#F7B23B] px-8 py-2 hover:from-[#AD7D29]/80 hover:to-[#F7B23B]/80 hover:shadow-lg">
                        <span class="text-white">Mulai Sekarang</span>
                    </div>
                </a>
            </div>
        </div>
    </section>

    {{-- DIV HELPER --}}
    <div class="mb-4 h-3 w-full bg-transparent md:mb-12 md:mt-32 lg:mt-64"></div>

    {{-- BENEFIT BERBINAR PLUS --}}
    <section class="mb-20 w-full bg-clip-content px-4 sm:px-14 lg:mb-40">
        <h1 class="font mb-20 text-center text-4xl font-semibold text-black max-sm:text-[29px]">
            Benefit
            <span class="bg-[#3886A3] px-2 text-white">Berbinar +</span>
        </h1>
        <div class="flex w-full flex-col items-center justify-center md:flex-row md:gap-4 lg:justify-around">
            @foreach ($benefit_berbinar_plus as $benefit)
                <div class="lg:1/3 mb-4 flex w-full items-center justify-start gap-4 rounded-lg bg-white p-2 shadow-lg md:w-1/4 lg:mb-0">
                    <div class="{{ $loop->iteration === 2 ? "px-2 pb-2 pt-3 lg:pt-4" : "pb-2" }} size-16 rounded-full bg-primary p-2 lg:size-20">
                        <img src="{{ asset("assets/images/landing/asset-kelas/berbinar-plus/" . $benefit["image"]) }}" alt="icon-certificate" class="object-cover" />
                    </div>
                    <span>{{ $benefit["name"] }}</span>
                </div>
            @endforeach
        </div>
    </section>

    {{-- CTA --}}
    <section class="mb-40 h-12 w-full bg-clip-content px-4 sm:px-14">
        <div class="bg-cta flex w-full flex-col items-center justify-start overflow-hidden rounded-3xl bg-cover px-2 py-12 shadow-lg">
            <h3 class="mb-8 text-center text-3xl font-semibold text-white lg:mb-12">Hubungi Kami Sekarang</h3>
            <p class="mb-8 max-w-screen-sm text-center text-base font-light text-white md:max-w-screen-md md:text-lg">Buat janji dan lakukan konseling dengan tim Berbinar Insightful Indonesia untuk layanan konseling online ataupun offline.</p>
            <a href="#" class="block w-full">
                <div class="mx-auto flex w-fit items-center justify-center rounded-lg bg-white px-8 py-3 font-semibold hover:bg-opacity-80 hover:shadow-lg">
                    <span>Lihat Produk Berbinar</span>
                </div>
            </a>
        </div>
    </section>

    {{-- DIV HELPER --}}
    <div class="mb-20 h-3 w-full bg-transparent md:mt-32 lg:mb-0"></div>

    {{-- FAQS START --}}
    <section class="z-10 mx-4 my-14 mt-16 sm:mx-20">
        <ul class="flex flex-col">
            @php
                $index = 0;
            @endphp

            @foreach ($faqs as $faq)
                <li class="my-2 rounded-lg border bg-white py-2 shadow-sm" x-data="accordion({{ $index }})" :class="isActive()">
                    <div class="mx-2 flex flex-row sm:mx-5">
                        <div class="flex w-full flex-col p-3 max-sm:p-2">
                            <h2 @click="handleClick()" class="cursor-pointer text-lg font-medium max-sm:text-[16.5px]">
                                <span>{{ $faq["question"] }}</span>
                            </h2>
                            <div x-ref="tab" :style="handleToggle()" class="max-h-0 overflow-hidden transition-all duration-500">
                                <p class="mt-3 text-justify text-[#6F6C90] max-sm:mt-2 max-sm:text-[15px]">
                                    {{ $faq["answer"] }}
                                </p>
                            </div>
                        </div>

                        <div class="ml-6 hidden items-center sm:flex">
                            <template x-if="$store.accordion.tab === idx">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20 20L4 4M20 4L4 20" stroke="#3986A3" stroke-width="3" stroke-linecap="round" />
                                </svg>
                            </template>
                            <template x-if="$store.accordion.tab !== idx">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_7503_13741)">
                                        <path d="M22.3996 8L11.9996 19.2L1.59961 8" stroke="#3986A3" stroke-width="3" stroke-linecap="square" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_7503_13741">
                                            <rect width="24" height="24" fill="white" />
                                        </clipPath>
                                    </defs>
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
    {{-- FAQS END --}}
    {{-- SCRIPT ACCORDION FAQS --}}
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.store('accordion', {
                tab: 0,
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
                    return this.$store.accordion.tab === this.idx ? `max-height: ${this.$refs.tab.scrollHeight}px` : '';
                },
                isActive() {
                    return this.$store.accordion.tab === this.idx ? 'border-active' : '';
                },
            }));
        });
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
        };

        const closeModal = (modal) => {
            const modalClose = document.querySelector(modal);
            modalClose.classList.add('hidden');
            modalin.classList.add('hidden');
            header.classList.add('fixed');
            hero.style.height = '';
        };

        document.querySelectorAll('.openModal').forEach((button) => {
            button.addEventListener('click', () => {
                const modalIndex = button.dataset.modalIndex;
                openModal(allModals[modalIndex]);
            });
        });

        document.querySelectorAll('.closeModal').forEach((button) => {
            button.addEventListener('click', () => {
                const modalIndex = button.dataset.modalIndex;
                closeModal(allModals[modalIndex]);
            });
        });
    </script>
    {{-- SCRIPT ACCORDION FAQS --}}
@endsection

@section("script")
    <script>
        var swiper = new Swiper('#swiperPsikolog', {
            slidesPerView: 4,
            spaceBetween: 10,
            speed: 300,
            loop: true,
            mousewheel: {
                forceToAxis: true,
                sensitivity: 0.5,
                thresholdDelta: 30,
                thresholdTime: 400,
            },
            slidesPerGroup: 1,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            scrollbar: {
                el: '.swiper-scrollbar',
            },
            breakpoints: {
                640: {
                    slidesPerView: 3,
                    spaceBetween: 10,
                },
                768: {
                    slidesPerView: 4,
                    spaceBetween: 10,
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 10,
                },
            },
        });

        // swiperBenefitPlus

        var swiper = new Swiper('#swiperBenefitPlus', {
            slidesPerView: 3,
            speed: 300,
            loop: true,
            mousewheel: {
                forceToAxis: true,
                sensitivity: 0.5,
                thresholdDelta: 30,
                thresholdTime: 400,
            },
            slidesPerGroup: 1,
            scrollbar: {
                el: '.swiper-scrollbar',
            },
            breakpoints: {
                640: {
                    slidesPerView: 3,
                    spaceBetween: 10,
                },
                768: {
                    slidesPerView: 4,
                    spaceBetween: 10,
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 10,
                },
            },
        });
    </script>
@endsection
