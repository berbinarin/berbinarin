@extends(
    "landing.layouts.app",
    [
        "title" => "Berbinar Insightful Indonesia",
        "active" => "Produk Berbinar",
        "page" => "Premium Class",
    ]
)

@section("content")
    <!-- Judul-Start -->
    <section id="customSection" class="mb-12 w-full overflow-x-hidden">
        <div class="absolute left-0 top-0 h-fit w-1/2 pt-32 md:block md:w-1/3 md:pt-0 lg:w-1/4">
            <img
                src="{{ asset("assets/images/landing/produk/emo/blop-1.png") }}"
                alt="top-left-texture"
                class="object-cover"
            />
        </div>
        <div class="absolute right-0 top-0 h-fit w-1/2 pt-32 md:block md:w-1/3 md:pt-0 lg:w-1/4">
            <img
                src="{{ asset("assets/images/landing/produk/emo/blop-2.png") }}"
                alt="top-right-texture"
                class="object-cover"
            />
        </div>
        <div class="relative">
            <div class="z-10 mx-20 flex flex-row items-center justify-between gap-x-10 max-sm:mx-4 max-sm:mt-32">
                <div class="max-lg:min-w-auto flex max-w-xl flex-1 flex-col space-y-6 max-sm:space-y-2">
                    <a href="{{ route("product.index") }}">
                        <div class="flex cursor-pointer items-center space-x-2 lg:order-1">
                            <img
                                src="{{ asset("assets/images/landing/asset-konseling/vector/left-arrow.svg") }}"
                                alt="Left Arrow"
                                class="h-3 w-auto"
                            />
                            <p class="text-base font-semibold text-[#3986A3]">Produk Berbinar</p>
                        </div>
                    </a>

                    <div
                        class="hidden w-full items-center justify-center max-lg:flex-none max-md:flex lg:order-2 lg:w-auto"
                    >
                        <img
                            src="{{ asset("assets/images/landing/produk/premium-class/banner.png") }}"
                            alt="Konseling"
                            class="h-[340px] w-auto object-contain max-sm:h-[320px]"
                        />
                    </div>

                    <div class="lg:order-3">
                        <!-- Judul untuk desktop -->
                        <h2
                            class="mb-4 hidden bg-gradient-to-r from-[#1C4352] to-[#3986A3] bg-clip-text py-1 font-[inter] text-6xl font-semibold text-transparent lg:block lg:text-5xl lg:tracking-wide"
                        >
                            Premium Class
                        </h2>

                        <!-- Judul untuk mobile -->
                        <h2
                            class="mb-2 block bg-gradient-to-r from-[#1C4352] to-[#3986A3] bg-clip-text py-1 font-[inter] font-semibold tracking-wide text-transparent lg:hidden"
                            style="font-size: 32px; line-height: 40px"
                        >
                            Premium Class
                        </h2>
                    </div>

                    <div class="lg:order-4">
                        <!-- Deskripsi untuk desktop -->
                        <p class="hidden text-justify text-lg text-[#70787D] max-lg:text-[17px] lg:block">
                            <i>Premium Class</i>
                            adalah layanan
                            <i>private class</i>
                            untuk mengembangkan potensi diri yang terdiri dari kelas daring berbasis
                            <i>zoom</i>
                            , konseling materi secara langsung, dan pemberian tugas yang disediakan oleh mentor
                            <i>Premium Class</i>
                            .
                        </p>

                        <!-- Deskripsi untuk mobile -->
                        <p class="block text-justify text-lg text-[#70787D] max-sm:leading-normal lg:hidden">
                            <i>Premium Class</i>
                            adalah layanan
                            <i>private class</i>
                            untuk mengembangkan potensi diri yang terdiri dari kelas daring berbasis
                            <i>zoom</i>
                            , konseling materi secara langsung, dan pemberian tugas yang disediakan oleh mentor
                            <i>Premium Class</i>
                        </p>
                    </div>
                </div>

                <div class="flex w-full flex-initial items-center justify-center max-lg:flex-1 max-md:hidden lg:w-auto">
                    <img
                        src="{{ asset("assets/images/landing/produk/premium-class/banner.png") }}"
                        alt="Konseling"
                        class="h-[340px] w-auto max-lg:h-[320px]"
                    />
                </div>
            </div>
        </div>
    </section>
    <!-- Judul-End -->

    <!-- Mentor Premium Class-Start -->
    <section id="customSection" class="relative mb-10 w-full md:mb-16">
        <div class="absolute w-full pt-4">
            <img
                src="{{ asset("assets/images/landing/produk/emo/path.png") }}"
                alt="top-texture"
                class="h-full w-full object-cover"
            />
        </div>
        <div class="md:px-18 relative font-[inter] md:py-16">
            <h1 class="text-center text-2xl font-semibold text-black md:my-10 md:text-5xl">
                Mentor
                <span class="bg-gradient-to-r from-[#F7B23B] to-[#AD7D29] px-2 text-white">Premium Class</span>
            </h1>
            <div class="flex flex-col justify-center gap-4 px-4 py-10 md:flex-row md:items-center md:justify-center">
                <img
                    src="{{ asset("assets/images/landing/produk/premium-class/banner-2.png") }}"
                    class="hidden object-cover md:block"
                />

                <img
                    src="{{ asset("assets/images/landing/produk/premium-class/banner-2-2.png") }}"
                    class="block object-cover md:hidden"
                />
                <div class="py-4">
                    <h1 class="text-center text-2xl font-semibold text-black md:text-start md:text-4xl">
                        Sherina Anugerah Putri, S.Mat
                    </h1>
                    <div class="px-2 pt-8 md:px-10">
                        <div class="flex items-center gap-4">
                            <img
                                class="object-cover"
                                src="{{ asset("assets/images/landing/produk/premium-class/kelas-icon.png") }}"
                            />
                            <div class="">
                                <p class="text-xl text-[#F7B23B] md:text-2xl">Kelas</p>
                                <p class="text-sm text-black md:text-lg">
                                    <i>Data Analyst</i>
                                    at PRMN
                                </p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4 pt-6">
                            <img
                                class="object-cover"
                                src="{{ asset("assets/images/landing/produk/premium-class/topik-icon.png") }}"
                            />
                            <div class="">
                                <p class="text-xl text-[#F7B23B] md:text-2xl">Topik</p>
                                <p class="text-sm text-black md:text-lg">
                                    <i>Data Analyst</i>
                                    &
                                    <i>Big Data</i>
                                </p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-1 pt-6 text-justify text-sm text-[#70787D] md:mr-40 md:text-lg">
                            <p>
                                Dapatkan layanan
                                <i>private class</i>
                                dengan mentor berkualitas
                            </p>

                            <p class="md:hidden">
                                Belajar lebih fokus, fleksibel, dan sesuai kebutuhanmu bersama mentor berpengalaman
                            </p>

                            <p class="hidden md:block">
                                Belajar lebih fokus, fleksibel, dan sesuai kebutuhanmu
                                <br />
                                bersama mentor berpengalaman
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Mentor Premium Class-End -->

    <!-- Jenis Layanan-Start (Desktop) -->
    <section class="hidden w-full pt-16 md:block" style="padding-left: 70px; padding-right: 70px">
        <!-- BAGIAN BACKGROUND HEADER -->
        <div
            class="relative left-1/2 w-[90%] -translate-x-1/2 overflow-hidden rounded-3xl"
            style="height: 350px; background-color: #205467"
        >
            <img
                src="{{ asset("assets/images/landing/produk/premium-class/banner-3.png") }}"
                class="absolute h-full w-full object-cover"
                style="z-index: -20"
            />
            <div class="absolute inset-0" style="opacity: 0.7; z-index: -19; background-color: #205467"></div>

            <div class="relative z-10 mt-10 flex h-full items-start justify-center">
                <h1
                    class="text-center font-[inter] font-semibold tracking-wide text-white"
                    style="font-size: 32px; line-height: 40px; margin-bottom: 40px"
                >
                    Jenis Layanan Premium Class
                </h1>
            </div>
        </div>

        <!-- BAGIAN CARD NONGOL -->
        <div
            class="relative left-1/2 z-20 flex w-full max-w-[1090px] -translate-x-1/2 flex-wrap items-start justify-center gap-6"
            style="margin-top: -230px"
        >
            <!-- Card 1 -->
            <div
                class="inline-flex flex-col items-center justify-start rounded-xl bg-white px-7 pb-8 pt-6 shadow-[0px_4px_12px_0px_rgba(0,0,0,0.15)] drop-shadow-lg"
                style="height: 414px; width: 256px"
            >
                <div class="flex flex-col items-center justify-start gap-7">
                    <div class="text-center font-['Plus_Jakarta_Sans'] text-xl font-semibold leading-normal text-black">
                        Kelas Daring
                    </div>
                    <div class="w-48 bg-gray-200" style="height: 1px"></div>
                </div>
                <div class="mt-6 flex h-full flex-col items-center justify-start">
                    <p
                        class="text-justify font-['Plus_Jakarta_Sans'] text-sm font-normal leading-normal text-[#70787D]"
                    >
                        Model produk ini berupa akses materi pembelajaran dari narasumber sekaligus mentor kompeten
                        sesuai topik kelas. Materi disampaikan secara daring melalui Zoom dan dapat dilanjutkan dengan
                        sesi personal mentoring secara privat melalui chat WhatsApp, sesuai syarat dan ketentuan yang
                        berlaku.
                    </p>
                </div>
            </div>

            <!-- Card 2 -->
            <div
                class="inline-flex flex-col items-center justify-start rounded-xl bg-white px-7 pb-8 pt-6 shadow-[0px_4px_12px_0px_rgba(0,0,0,0.15)] drop-shadow-lg"
                style="height: 414px; width: 256px"
            >
                <div class="flex flex-col items-center justify-start gap-4">
                    <div
                        class="w-56 text-center font-['Plus_Jakarta_Sans'] text-xl font-semibold leading-normal text-black"
                    >
                        Konseling Materi
                        <br />
                        Secara Langsung
                    </div>
                    <div class="w-48 bg-gray-200" style="height: 1px"></div>
                </div>
                <div class="mt-6 flex h-full flex-col items-center justify-start">
                    <p
                        class="text-justify font-['Plus_Jakarta_Sans'] text-sm font-normal leading-normal text-[#70787D]"
                    >
                        Peserta dapat berdiskusi langsung dengan mentor berkompeten selama sesi pembelajaran daring,
                        untuk memperdalam pemahaman materi. Diskusi berlangsung sesuai jadwal dan mengikuti syarat serta
                        ketentuan yang berlaku.
                    </p>
                </div>
            </div>

            <!-- Card 3 -->
            <div
                class="inline-flex flex-col items-center justify-start rounded-xl bg-white px-7 pb-8 pt-6 shadow-[0px_4px_12px_0px_rgba(0,0,0,0.15)] drop-shadow-lg"
                style="height: 414px; width: 256px"
            >
                <div class="flex flex-col items-center justify-start gap-4">
                    <div
                        class="w-44 text-center font-['Plus_Jakarta_Sans'] text-xl font-semibold leading-normal text-black"
                    >
                        Pemberian Tugas (Study Case)
                    </div>
                    <div class="w-48 bg-gray-200" style="height: 1px"></div>
                </div>
                <div class="mt-6 flex h-full flex-col items-center justify-start">
                    <p
                        class="text-justify font-['Plus_Jakarta_Sans'] text-sm font-normal leading-normal text-[#70787D]"
                    >
                        Setiap peserta akan menerima studi kasus setelah menyelesaikan sesi mentoring. Studi kasus ini
                        dirancang untuk menguji pemahaman dan kemampuan peserta dalam menerapkan materi ke situasi
                        nyata. Tujuannya adalah memastikan peserta mampu mengaplikasikannya secara praktis.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Jenis Layanan-End (Desktop) -->

    <!-- Alur Pendaftaran-Start (Desktop)-->
    <section class="mt-20 hidden min-h-[900px] w-full md:block">
        <div class="flex flex-col px-4">
            <h1 class="w-full text-center text-4xl font-semibold text-black">
                Alur Pendaftaran
                <span class="bg-gradient-to-r from-[#F7B23B] to-[#AD7D29] px-2 text-white"><i>Premium Class</i></span>
            </h1>

            <div class="relative px-8" style="margin-top: 50px">
                <div class="swiper premiumClassSwiper relative z-10 overflow-visible">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="flex flex-col items-center gap-8">
                                <div class="relative z-20 flex h-16 w-16 items-center justify-center drop-shadow-lg">
                                    <div
                                        class="absolute inset-0 h-16 w-16 justify-self-center rounded-full"
                                        style="
                                            background: linear-gradient(
                                                to bottom,
                                                #74aabf 0%,
                                                #3986a3 23%,
                                                #163641 100%
                                            );
                                        "
                                    ></div>
                                    <span class="relative text-4xl font-bold text-white">1</span>
                                </div>

                                <div
                                    class="flex h-[335px] w-56 flex-col items-center self-stretch rounded-xl bg-white px-7 pb-8 pt-6 drop-shadow-lg"
                                >
                                    <img
                                        src="{{ asset("assets/images/landing/produk/premium-class/search-icon.png") }}"
                                        class="justify-self-center object-cover"
                                    />

                                    <div class="mt-5 w-full bg-gray-200" style="height: 2px"></div>

                                    <div
                                        class="mt-5 w-44 justify-start text-justify font-['Plus_Jakarta_Sans'] text-base font-medium leading-normal text-[#70787D]"
                                    >
                                        Calon peserta dapat memilih kelas yang telah disediakan oleh Berbinar Insightful
                                        Indonesia melalui
                                        <i>link</i>
                                        pendaftaran yang telah disediakan.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="flex flex-col items-center gap-8">
                                <div class="relative z-20 flex h-16 w-16 items-center justify-center drop-shadow-lg">
                                    <div
                                        class="absolute inset-0 h-16 w-16 rounded-full"
                                        style="
                                            background: linear-gradient(
                                                to bottom,
                                                #74aabf 0%,
                                                #3986a3 23%,
                                                #163641 100%
                                            );
                                        "
                                    ></div>
                                    <span class="relative text-4xl font-bold text-white">2</span>
                                </div>

                                <div
                                    class="flex h-[335px] w-56 flex-col items-center rounded-xl bg-white px-7 pb-8 pt-6 drop-shadow-lg"
                                >
                                    <img
                                        src="{{ asset("assets/images/landing/produk/premium-class/openbook-icon.png") }}"
                                        class="justify-self-center object-cover"
                                    />

                                    <div class="mt-5 w-full bg-gray-200" style="height: 2px"></div>

                                    <div
                                        class="mt-5 w-44 text-justify font-['Plus_Jakarta_Sans'] text-base font-medium leading-normal text-[#70787D]"
                                    >
                                        Calon peserta wajib membaca booklet
                                        <i>PREMIUM CLASS</i>
                                        dengan cermat guna kejelasan teknis dari layanan yang akan diambil.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="flex flex-col items-center gap-8">
                                <div class="relative z-20 flex h-16 w-16 items-center justify-center drop-shadow-lg">
                                    <div
                                        class="absolute inset-0 h-16 w-16 rounded-full"
                                        style="
                                            background: linear-gradient(
                                                to bottom,
                                                #74aabf 0%,
                                                #3986a3 23%,
                                                #163641 100%
                                            );
                                        "
                                    ></div>
                                    <span class="relative text-4xl font-bold text-white">3</span>
                                </div>

                                <div
                                    class="flex h-[335px] w-56 flex-col items-center rounded-xl bg-white px-7 pb-8 pt-6 drop-shadow-lg"
                                >
                                    <img
                                        src="{{ asset("assets/images/landing/produk/premium-class/pen-icon.png") }}"
                                        class="justify-self-center object-cover"
                                    />

                                    <div class="mt-5 w-full bg-gray-200" style="height: 2px"></div>

                                    <div
                                        class="mt-5 w-44 text-justify font-['Plus_Jakarta_Sans'] text-base font-medium leading-normal text-[#70787D]"
                                    >
                                        Calon peserta wajib mengisi data
                                        <i>form</i>
                                        pendaftaran dengan jelas dan benar guna keperluan dokumen peserta kedepannya.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="flex flex-col items-center gap-8">
                                <div class="relative z-20 flex h-16 w-16 items-center justify-center drop-shadow-lg">
                                    <div
                                        class="absolute inset-0 h-16 w-16 rounded-full"
                                        style="
                                            background: linear-gradient(
                                                to bottom,
                                                #74aabf 0%,
                                                #3986a3 23%,
                                                #163641 100%
                                            );
                                        "
                                    ></div>
                                    <span class="relative text-4xl font-bold text-white">4</span>
                                </div>

                                <div
                                    class="flex h-[335px] w-56 flex-col items-center rounded-xl bg-white px-7 pb-8 pt-6 drop-shadow-lg"
                                >
                                    <img
                                        src="{{ asset("assets/images/landing/produk/premium-class/checkmark-icon.png") }}"
                                        class="justify-self-center object-cover"
                                    />

                                    <div class="mt-5 w-full bg-gray-200" style="height: 2px"></div>

                                    <div
                                        class="mt-5 w-44 text-justify font-['Plus_Jakarta_Sans'] text-base font-medium leading-normal text-[#70787D]"
                                    >
                                        Calon peserta wajib memilih jenis kelas yang telah disediakan.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="flex flex-col items-center gap-8">
                                <div class="relative z-20 flex h-16 w-16 items-center justify-center drop-shadow-lg">
                                    <div
                                        class="absolute inset-0 h-16 w-16 rounded-full"
                                        style="
                                            background: linear-gradient(
                                                to bottom,
                                                #74aabf 0%,
                                                #3986a3 23%,
                                                #163641 100%
                                            );
                                        "
                                    ></div>
                                    <span class="relative text-4xl font-bold text-white">5</span>
                                </div>

                                <div
                                    class="flex h-[335px] w-56 flex-col items-center rounded-xl bg-white px-7 pb-8 pt-6 drop-shadow-lg"
                                >
                                    <img
                                        src="{{ asset("assets/images/landing/produk/premium-class/creditcard-icon.png") }}"
                                        class="justify-self-center object-cover"
                                    />

                                    <div class="mt-5 w-full bg-gray-200" style="height: 2px"></div>

                                    <div
                                        class="mt-5 w-44 text-justify font-['Plus_Jakarta_Sans'] text-base font-medium leading-normal text-[#70787D]"
                                    >
                                        Calon peserta wajib membayar harga kelas lalu dilampirkan pada
                                        <i>form</i>
                                        pendaftaran.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="flex flex-col items-center gap-8">
                                <div class="relative z-20 flex h-16 w-16 items-center justify-center drop-shadow-lg">
                                    <div
                                        class="absolute inset-0 h-16 w-16 rounded-full"
                                        style="
                                            background: linear-gradient(
                                                to bottom,
                                                #74aabf 0%,
                                                #3986a3 23%,
                                                #163641 100%
                                            );
                                        "
                                    ></div>
                                    <span class="relative text-4xl font-bold text-white">6</span>
                                </div>

                                <div
                                    class="flex h-[335px] w-56 flex-col items-center rounded-xl bg-white px-7 pb-8 pt-6 drop-shadow-lg"
                                >
                                    <img
                                        src="{{ asset("assets/images/landing/produk/premium-class/inbox.png") }}"
                                        class="justify-self-center object-cover"
                                    />

                                    <div class="mt-5 w-full bg-gray-200" style="height: 2px"></div>

                                    <div
                                        class="mt-5 w-44 text-justify font-['Plus_Jakarta_Sans'] text-base font-medium leading-normal text-[#70787D]"
                                        style="min-height: 100px"
                                    >
                                        Calon peserta akan menjadi peserta apabila telah menerima
                                        <i>email</i>
                                        konfirmasi pendaftaran
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="flex flex-col items-center gap-8">
                                <div class="relative z-20 flex h-16 w-16 items-center justify-center drop-shadow-lg">
                                    <div
                                        class="absolute inset-0 h-16 w-16 rounded-full"
                                        style="
                                            background: linear-gradient(
                                                to bottom,
                                                #74aabf 0%,
                                                #3986a3 23%,
                                                #163641 100%
                                            );
                                        "
                                    ></div>
                                    <span class="relative text-4xl font-bold text-white">7</span>
                                </div>

                                <div
                                    class="flex h-[335px] w-56 flex-col items-center rounded-xl bg-white px-7 pb-8 pt-6 drop-shadow-lg"
                                >
                                    <img
                                        src="{{ asset("assets/images/landing/produk/premium-class/link.png") }}"
                                        class="justify-self-center object-cover"
                                    />

                                    <div class="mt-5 w-full bg-gray-200" style="height: 2px"></div>

                                    <div
                                        class="mt-5 w-44 text-justify font-['Plus_Jakarta_Sans'] text-base font-medium leading-normal text-[#70787D]"
                                        style="min-height: 100px"
                                    >
                                        Peserta wajib membaca email konfirmasi pendaftaran dengan cermat karena memuat
                                        <i>link pre-test</i>
                                        dari kelas yang akan diambil
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="flex flex-col items-center gap-8">
                                <div class="relative z-20 flex h-16 w-16 items-center justify-center drop-shadow-lg">
                                    <div
                                        class="absolute inset-0 h-16 w-16 rounded-full"
                                        style="
                                            background: linear-gradient(
                                                to bottom,
                                                #74aabf 0%,
                                                #3986a3 23%,
                                                #163641 100%
                                            );
                                        "
                                    ></div>
                                    <span class="relative text-4xl font-bold text-white">8</span>
                                </div>

                                <div
                                    class="flex h-[335px] w-56 flex-col items-center rounded-xl bg-white px-7 pb-8 pt-6 drop-shadow-lg"
                                >
                                    <img
                                        src="{{ asset("assets/images/landing/produk/premium-class/incoming-call.png") }}"
                                        class="justify-self-center object-cover"
                                    />

                                    <div class="mt-5 w-full bg-gray-200" style="height: 2px"></div>

                                    <div
                                        class="mt-5 w-44 text-justify font-['Plus_Jakarta_Sans'] text-base font-medium leading-normal text-[#70787D]"
                                        style="min-height: 100px"
                                    >
                                        Peserta diharap menghubungi narahubung
                                        <i>Premium Class</i>
                                        apabila selama 3 (tiga) hari kerja tidak menerima
                                        <i>email</i>
                                        konfirmasi pendaftaran
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="flex flex-col items-center gap-8">
                                <div class="relative z-20 flex h-16 w-16 items-center justify-center drop-shadow-lg">
                                    <div
                                        class="absolute inset-0 h-16 w-16 rounded-full"
                                        style="
                                            background: linear-gradient(
                                                to bottom,
                                                #74aabf 0%,
                                                #3986a3 23%,
                                                #163641 100%
                                            );
                                        "
                                    ></div>
                                    <span class="relative text-4xl font-bold text-white">9</span>
                                </div>

                                <div
                                    class="flex h-[335px] w-56 flex-col items-center rounded-xl bg-white px-7 pb-8 pt-6 drop-shadow-lg"
                                >
                                    <img
                                        src="{{ asset("assets/images/landing/produk/premium-class/brain.png") }}"
                                        class="justify-self-center object-cover"
                                    />

                                    <div class="mt-5 w-full bg-gray-200" style="height: 2px"></div>

                                    <div
                                        class="mt-5 w-44 text-justify font-['Plus_Jakarta_Sans'] text-base font-medium leading-normal text-[#70787D]"
                                        style="min-height: 100px"
                                    >
                                        Peserta wajib mengisi
                                        <i>pre-test</i>
                                        dari kelas yang akan diambil sebelum memulai layanan
                                        <i>Premium Class</i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="flex flex-col items-center gap-8">
                                <div class="relative z-20 flex h-16 w-16 items-center justify-center drop-shadow-lg">
                                    <div
                                        class="absolute inset-0 h-16 w-16 rounded-full"
                                        style="
                                            background: linear-gradient(
                                                to bottom,
                                                #74aabf 0%,
                                                #3986a3 23%,
                                                #163641 100%
                                            );
                                        "
                                    ></div>
                                    <span class="relative text-4xl font-bold text-white">10</span>
                                </div>

                                <div
                                    class="flex h-[335px] w-56 flex-col items-center rounded-xl bg-white px-7 pb-8 pt-6 drop-shadow-lg"
                                >
                                    <img
                                        src="{{ asset("assets/images/landing/produk/premium-class/calendar.png") }}"
                                        class="justify-self-center object-cover"
                                    />

                                    <div class="mt-5 w-full bg-gray-200" style="height: 2px"></div>

                                    <div
                                        class="mt-5 w-44 text-justify font-['Plus_Jakarta_Sans'] text-base font-medium leading-normal text-[#70787D]"
                                        style="min-height: 100px"
                                    >
                                        Peserta akan dihubungi
                                        <i>via whatsapp</i>
                                        dan
                                        <i>email</i>
                                        untuk kelanjutan jadwal
                                        <i>premium class</i>
                                        yang diambil
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="h-20"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Alur Pendaftaran-End (Desktop)-->

    <!-- Jenis Layanan-Start (Mobile) -->
    <section class="block w-full p-6 md:hidden">
        <div class="relative left-1/2" style="min-height: 400px; width: 90%; transform: translateX(-50%)">
            <img
                src="{{ asset("assets/images/landing/produk/emo/pricebg-mobile.png") }}"
                class="absolute h-full w-full rounded-3xl object-cover"
                style="z-index: -20"
            />
            <div class="flex flex-col items-center gap-4 px-8 py-5 pb-10 text-white">
                <h1 class="text-center font-[inter] text-lg font-semibold text-white">Jenis Layanan Premium Class</h1>

                <div class="swiper mySwiper relative w-full" style="height: 400px">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide z-10">
                            <div
                                class="flex h-[350px] flex-col items-start rounded-2xl bg-white px-6 py-6 shadow-md shadow-black"
                            >
                                <h1 class="mt-3 w-full text-center text-lg font-bold text-black">Kelas Daring</h1>
                                <div class="mt-6 w-full bg-gray-200" style="height: 2px"></div>
                                <p class="mt-3 flex-grow text-justify text-xs text-[#70787D]">
                                    Model produk ini berupa akses materi pembelajaran dari narasumber sekaligus mentor
                                    kompeten sesuai topik kelas. Materi disampaikan secara daring melalui
                                    <i>Zoom</i>
                                    dan dapat dilanjutkan dengan sesi personal mentoring secara privat melalui
                                    <i>chat WhatsApp</i>
                                    , sesuai syarat dan ketentuan yang berlaku.
                                </p>
                            </div>
                        </div>

                        <div class="swiper-slide z-10">
                            <div
                                class="flex h-[350px] flex-col items-start rounded-2xl bg-white px-6 py-6 shadow-md shadow-black"
                            >
                                <h1 class="w-full text-center text-lg font-bold text-black">
                                    Konseling Materi Secara Langsung
                                </h1>
                                <div class="mt-3 w-full bg-gray-200" style="height: 2px"></div>
                                <p class="mt-3 flex-grow text-justify text-xs text-[#70787D]">
                                    Peserta dapat berdiskusi langsung dengan mentor berkompeten selama sesi pembelajaran
                                    daring, untuk memperdalam pemahaman materi. Diskusi berlangsung sesuai jadwal dan
                                    mengikuti syarat serta ketentuan yang berlaku.
                                </p>
                            </div>
                        </div>

                        <div class="swiper-slide z-10">
                            <div
                                class="flex h-[350px] flex-col items-start rounded-2xl bg-white px-6 py-6 shadow-md shadow-black"
                            >
                                <h1 class="w-full text-center text-lg font-bold text-black">
                                    Pemberian Tugas
                                    <br />
                                    ( Study Case )
                                </h1>

                                <div class="mt-3 w-full bg-gray-200" style="height: 2px"></div>

                                <p class="mt-3 text-justify text-xs text-[#70787D]">
                                    Setiap peserta akan menerima studi kasus setelah menyelesaikan sesi mentoring. Studi
                                    kasus ini dirancang untuk menguji pemahaman dan kemampuan peserta dalam menerapkan
                                    materi ke situasi nyata. Tujuannya adalah memastikan peserta mampu
                                    mengaplikasikannya secara praktis.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination-mobile"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Jenis Layanan-End (Mobile) -->

    <!-- Alur Pendaftaran-Start (Mobile)-->
    <section class="block w-full py-10 md:hidden">
        <div class="flex flex-col items-center px-4">
            <h1 class="w-full text-center text-3xl font-semibold text-black lg:text-5xl">
                Alur Pendaftaran
                <span class="bg-gradient-to-r from-[#F7B23B] to-[#AD7D29] px-2 text-white">Premium Class</span>
            </h1>

            <div class="swiper classSwiper mt-10 h-[1161px] pb-20">
                <div class="swiper-wrapper">
                    <div
                        class="swiper-slide relative mb-6 mt-3 h-[225px] rounded-2xl bg-white px-8 py-6 drop-shadow-lg"
                        style="opacity: 0.9"
                    >
                        <img
                            src="{{ asset("assets/images/landing/produk/premium-class/search-icon.png") }}"
                            alt="Ikon pencarian"
                            class="justify-self-center object-cover"
                        />
                        <div class="mt-5 w-full bg-gray-200" style="height: 2px"></div>
                        <div class="flex flex-col pt-5 text-justify text-sm text-[#70787D]">
                            <h1>
                                Calon peserta dapat memilih kelas yang telah disediakan oleh Berbinar Insightful
                                Indonesia melalui
                                <i>link</i>
                                pendaftaran yang telah disediakan
                            </h1>
                        </div>
                    </div>
                    <div
                        class="swiper-slide relative mb-6 mt-3 h-[225px] rounded-2xl bg-white px-8 py-6 drop-shadow-lg"
                        style="opacity: 0.9"
                    >
                        <img
                            src="{{ asset("assets/images/landing/produk/premium-class/openbook-icon.png") }}"
                            alt="Ikon buku terbuka"
                            class="justify-self-center object-cover"
                        />
                        <div class="mt-5 w-full bg-gray-200" style="height: 2px"></div>
                        <div class="flex flex-col pt-5 text-justify text-sm text-[#70787D]">
                            <h1>
                                Calon peserta wajib membaca booklet
                                <i>PREMIUM CLASS</i>
                                dengan cermat guna kejelasan teknis dari layanan yang akan diambil.
                            </h1>
                        </div>
                    </div>
                    <div
                        class="swiper-slide relative mb-6 mt-3 h-[225px] rounded-2xl bg-white px-8 py-6 drop-shadow-lg"
                        style="opacity: 0.9"
                    >
                        <img
                            src="{{ asset("assets/images/landing/produk/premium-class/pen-icon.png") }}"
                            alt="Ikon pena"
                            class="justify-self-center object-cover"
                        />
                        <div class="mt-5 w-full bg-gray-200" style="height: 2px"></div>
                        <div class="flex flex-col pt-5 text-justify text-sm text-[#70787D]">
                            <h1>
                                Calon peserta wajib mengisi data
                                <i>form</i>
                                pendaftaran dengan jelas dan benar guna keperluan dokumen peserta kedepannya.
                            </h1>
                        </div>
                    </div>
                    <div
                        class="swiper-slide relative mb-6 mt-3 h-[225px] rounded-2xl bg-white px-8 py-6 drop-shadow-lg"
                        style="opacity: 0.9"
                    >
                        <img
                            src="{{ asset("assets/images/landing/produk/premium-class/checkmark-icon.png") }}"
                            alt="Ikon centang"
                            class="justify-self-center object-cover"
                        />
                        <div class="mt-5 w-full bg-gray-200" style="height: 2px"></div>
                        <div class="flex flex-col pt-5 text-justify text-sm text-[#70787D]">
                            <h1>Calon peserta wajib memilih jenis kelas yang telah disediakan.</h1>
                        </div>
                    </div>
                    <div
                        class="swiper-slide relative mb-6 mt-3 h-[225px] rounded-2xl bg-white px-8 py-6 drop-shadow-lg"
                        style="opacity: 0.9"
                    >
                        <img
                            src="{{ asset("assets/images/landing/produk/premium-class/creditcard-icon.png") }}"
                            alt="Ikon kartu kredit"
                            class="justify-self-center object-cover"
                        />
                        <div class="mt-5 w-full bg-gray-200" style="height: 2px"></div>
                        <div class="flex flex-col pt-5 text-justify text-sm text-[#70787D]">
                            <h1>
                                Calon peserta wajib membayar harga kelas lalu dilampirkan pada
                                <i>form</i>
                                pendaftaran.
                            </h1>
                        </div>
                    </div>
                    <div
                        class="swiper-slide relative mb-6 mt-3 h-[225px] rounded-2xl bg-white px-8 py-6 drop-shadow-lg"
                        style="opacity: 0.9"
                    >
                        <img
                            src="{{ asset("assets/images/landing/produk/premium-class/inbox.png") }}"
                            alt="Ikon kotak masuk"
                            class="justify-self-center object-cover"
                        />
                        <div class="mt-5 w-full bg-gray-200" style="height: 2px"></div>
                        <div class="flex flex-col pt-5 text-justify text-sm text-[#70787D]">
                            <h1>
                                Calon peserta akan menjadi peserta apabila telah menerima
                                <i>email</i>
                                konfirmasi pendaftaran
                            </h1>
                        </div>
                    </div>
                    <div
                        class="swiper-slide relative mb-6 mt-3 h-[225px] rounded-2xl bg-white px-8 py-6 drop-shadow-lg"
                        style="opacity: 0.9"
                    >
                        <img
                            src="{{ asset("assets/images/landing/produk/premium-class/link.png") }}"
                            alt="Ikon tautan"
                            class="justify-self-center object-cover"
                        />
                        <div class="mt-5 w-full bg-gray-200" style="height: 2px"></div>
                        <div class="flex flex-col pt-5 text-justify text-sm text-[#70787D]">
                            <h1>
                                Peserta wajib membaca
                                <i>email</i>
                                konfirmasi pendaftaran dengan cermat karena memuat
                                <i>link pre-test</i>
                                dari kelas yang akan diambil
                            </h1>
                        </div>
                    </div>
                    <div
                        class="swiper-slide relative mb-6 mt-3 h-[225px] rounded-2xl bg-white px-8 py-6 drop-shadow-lg"
                        style="opacity: 0.9"
                    >
                        <img
                            src="{{ asset("assets/images/landing/produk/premium-class/incoming-call.png") }}"
                            alt="Ikon panggilan masuk"
                            class="justify-self-center object-cover"
                        />
                        <div class="mt-5 w-full bg-gray-200" style="height: 2px"></div>
                        <div class="flex flex-col pt-5 text-justify text-sm text-[#70787D]">
                            <h1>
                                Peserta diharap menghubungi narahubung
                                <i>Premium Class</i>
                                apabila selama 3 (tiga) hari kerja tidak menerima
                                <i>email</i>
                                konfirmasi pendaftaran
                            </h1>
                        </div>
                    </div>
                    <div
                        class="swiper-slide relative mb-6 mt-3 h-[225px] rounded-2xl bg-white px-8 py-6 drop-shadow-lg"
                        style="opacity: 0.9"
                    >
                        <img
                            src="{{ asset("assets/images/landing/produk/premium-class/brain.png") }}"
                            alt="Ikon otak"
                            class="justify-self-center object-cover"
                        />
                        <div class="mt-5 w-full bg-gray-200" style="height: 2px"></div>
                        <div class="flex flex-col pt-5 text-justify text-sm text-[#70787D]">
                            <h1>
                                Peserta wajib mengisi
                                <i>pre-test</i>
                                dari kelas yang akan diambil sebelum memulai layanan
                                <i>Premium Class</i>
                            </h1>
                        </div>
                    </div>
                    <div
                        class="swiper-slide relative mb-6 mt-3 h-[225px] rounded-2xl bg-white px-8 py-6 drop-shadow-lg"
                        style="opacity: 0.9"
                    >
                        <img
                            src="{{ asset("assets/images/landing/produk/premium-class/calendar.png") }}"
                            alt="Ikon kalender"
                            class="justify-self-center object-cover"
                        />
                        <div class="mt-5 w-full bg-gray-200" style="height: 2px"></div>
                        <div class="flex flex-col pt-5 text-justify text-sm text-[#70787D]">
                            <h1>
                                Peserta akan dihubungi
                                <i>via whatsapp</i>
                                dan
                                <i>email</i>
                                untuk kelanjutan jadwal
                                <i>premium class</i>
                                yang diambil
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Alur Pendaftaran-End (Mobile)-->

    <!-- Harga Section-Start (Desktop) -->
    <section class="mb-12 hidden w-full md:block" style="padding-top: 64px; overflow: visible">
        <!-- BAGIAN BACKGROUND HEADER -->
        <div
            class="relative left-1/2 w-[85%] -translate-x-1/2 overflow-hidden rounded-3xl"
            style="height: 350px; background-color: #205467"
        >
            <img
                src="{{ asset("assets/images/landing/produk/premium-class/banner-4.png") }}"
                class="absolute h-full w-full rounded-3xl object-cover"
                style="z-index: -20"
            />
            <div
                class="absolute inset-0 rounded-3xl"
                style="opacity: 0.7; z-index: -19; background-color: #205467"
            ></div>

            <!-- JUDUL -->
            <div class="relative z-10 mt-10 flex h-full items-start justify-center">
                <h1
                    class="text-center font-[inter] font-semibold tracking-wide text-white"
                    style="font-size: 32px; line-height: 40px; margin-bottom: 40px"
                >
                    Layanan
                    <i>Premium Class</i>
                </h1>
            </div>
        </div>

        <!-- BAGIAN CARD NONGOL -->
        <div
            class="relative left-1/2 z-20 flex w-full max-w-[1090px] -translate-x-1/2 flex-wrap items-start justify-center gap-6"
            style="margin-top: -230px"
        >
            <!-- Card 1 -->
            <div
                class="relative mx-3 flex w-full flex-col rounded-2xl bg-white px-6 pb-6 text-black shadow-lg"
                style="opacity: 0.9; width: 297px; height: 350px"
            >
                <p class="mb-5 mt-6 text-center text-xl font-semibold text-neutral-700">Fundamental</p>
                <h1 class="text-center font-semibold text-[#3986A3]" style="font-size: 32px">Rp250.000</h1>
                <div class="mx-auto my-6 w-32 bg-gray-200" style="height: 1px"></div>
                <div class="flex w-full flex-col items-start gap-3 pt-5">
                    <div class="flex items-start gap-2">
                        <img
                            src="{{ asset("assets/images/landing/produk/premium-class/check.png") }}"
                            alt="Checkmark"
                            class="object-contain"
                            style="height: 22px; width: 18px"
                        />
                        <p class="text-base font-medium leading-normal text-[#70787D]">
                            Pembelajaran dasar-dasar
                            <br />
                            <i>data analyst</i>
                        </p>
                    </div>
                </div>
                <div class="mt-12 flex items-center justify-center">
                    <button
                        class="justify-self-center rounded-xl bg-gradient-to-r from-[#F7B23B] to-[#AD7D29] px-6 py-2 text-base font-medium text-white"
                    >
                        Mulai Sekarang
                    </button>
                </div>
            </div>

            <!-- Card 2 -->
            <div
                class="relative mx-3 flex w-full flex-col rounded-2xl bg-white px-6 pb-6 text-black shadow-lg"
                style="opacity: 0.9 opacity: 0.9; width: 297px; height: 350px"
            >
                <p class="mb-5 mt-6 text-center text-xl font-semibold text-neutral-700">Excellent</p>
                <h1 class="text-center font-semibold text-[#3986A3]" style="font-size: 32px">Rp225.000</h1>
                <div class="mx-auto my-6 w-32 bg-gray-200" style="height: 1px"></div>
                <div class="flex w-full flex-col items-start gap-3 pt-5">
                    <div class="flex items-start gap-2">
                        <img
                            src="{{ asset("assets/images/landing/produk/premium-class/check.png") }}"
                            alt="Checkmark"
                            class="object-contain"
                            style="height: 22px; width: 18px"
                        />
                        <p class="text-base font-medium leading-normal text-[#70787D]">
                            Pembelajaran
                            <i>data analyst</i>
                            <br />
                            tahap lanjutan menggunakan
                            <i>tools-tools</i>
                        </p>
                    </div>
                </div>
                <div class="mt-6 flex items-center justify-center">
                    <button
                        class="justify-self-center rounded-xl bg-gradient-to-r from-[#F7B23B] to-[#AD7D29] px-6 py-2 text-base font-medium text-white"
                    >
                        Mulai Sekarang
                    </button>
                </div>
            </div>

            <!-- Card 3 -->
            <div
                class="relative mx-3 flex w-full flex-col rounded-2xl bg-white px-6 pb-6 text-black shadow-lg"
                style="opacity: 0.9 opacity: 0.9; width: 297px; height: 350px"
            >
                <p class="mb-5 mt-6 text-center text-xl font-semibold text-neutral-700">Fullstack</p>
                <h1 class="text-center font-semibold text-[#3986A3]" style="font-size: 32px">Rp360.000</h1>
                <div class="mx-auto my-6 w-32 bg-gray-200" style="height: 1px"></div>
                <div class="flex w-full flex-col items-start gap-3 pt-5">
                    <div class="flex items-start gap-2">
                        <img
                            src="{{ asset("assets/images/landing/produk/premium-class/check.png") }}"
                            alt="Checkmark"
                            class="object-contain"
                            style="height: 22px; width: 18px"
                        />
                        <p class="text-base font-medium leading-normal text-[#70787D]">
                            Pembelajaran kelas FUNDAMENTAL dan
                            <br />
                            <i>EXCELLENT</i>
                        </p>
                    </div>
                </div>
                <div class="mt-6 flex items-center justify-center">
                    <button
                        class="justify-self-center rounded-xl bg-gradient-to-r from-[#F7B23B] to-[#AD7D29] px-6 py-2 text-base font-medium text-white"
                    >
                        Mulai Sekarang
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Harga Section-End (Desktop) -->

    <!-- Harga Section-Start (Mobile) -->
    <section class="block w-full p-6 md:hidden">
        <div class="relative left-1/2 w-full max-w-[400px]" style="min-height: 600px; transform: translateX(-50%)">
            <!-- Background image sebagai lapisan paling bawah -->
            <img
                src="{{ asset("assets/images/landing/produk/emo/pricebg-mobile.png") }}"
                class="absolute h-full w-full rounded-3xl object-cover"
                style="z-index: -20"
            />

            <!-- Konten -->
            <div class="relative z-10 flex flex-col items-center gap-4 px-6 py-6 text-white">
                <h1 class="mb-5 text-center font-[inter] text-xl font-semibold text-white">
                    Layanan
                    <i>Premium Class</i>
                </h1>

                <!-- Card container -->
                <div class="flex w-full flex-col items-center gap-6">
                    <!-- Card 1 -->
                    <div class="w-full rounded-2xl bg-white px-5 text-black shadow-lg">
                        <p class="mt-5 text-center text-base font-semibold text-neutral-700">Fundamental</p>
                        <h1 class="mb-8 mt-4 text-center text-2xl text-[#3986A3]">Rp250.000</h1>
                        <div class="mx-auto mt-5 w-28 bg-[#D7E6ED]" style="height: 1px"></div>

                        <!-- Benefit list -->
                        <div class="mt-9 flex flex-col items-start gap-3 text-sm text-[#70787D]">
                            <div class="flex items-start gap-2">
                                <img
                                    src="{{ asset("assets/images/landing/produk/premium-class/check.png") }}"
                                    alt="Checkmark"
                                    class="h-5 w-5 object-contain"
                                />
                                <p>
                                    Pembelajaran dasar-dasar
                                    <br />
                                    <i>data analyst</i>
                                </p>
                            </div>
                        </div>

                        <div class="mb-5 mt-9 flex items-center justify-center">
                            <button
                                class="rounded-xl bg-gradient-to-r from-[#F7B23B] to-[#AD7D29] px-6 py-2 text-base font-medium text-white"
                            >
                                Mulai Sekarang
                            </button>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="w-full rounded-2xl bg-white px-5 text-black shadow-lg">
                        <p class="mt-5 text-center text-base font-semibold text-neutral-700">Excellent</p>
                        <h1 class="mb-8 mt-4 text-center text-2xl text-[#3986A3]">Rp225.000</h1>
                        <div class="mx-auto mt-5 w-28 bg-[#D7E6ED]" style="height: 1px"></div>

                        <div class="mt-9 flex flex-col items-start gap-3 text-sm text-[#70787D]">
                            <div class="flex items-start gap-2">
                                <img
                                    src="{{ asset("assets/images/landing/produk/premium-class/check.png") }}"
                                    alt="Checkmark"
                                    class="h-5 w-5 object-contain"
                                />
                                <p>
                                    Pembelajaran
                                    <i>data analyst</i>
                                    tahap lanjutan menggunakan
                                    <i>tools-tools</i>
                                </p>
                            </div>
                        </div>

                        <div class="mb-5 mt-9 flex items-center justify-center">
                            <button
                                class="rounded-xl bg-gradient-to-r from-[#F7B23B] to-[#AD7D29] px-6 py-2 text-base font-medium text-white"
                            >
                                Mulai Sekarang
                            </button>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="w-full rounded-2xl bg-white px-4 text-black shadow-lg">
                        <p class="mt-5 text-center text-base font-semibold text-neutral-700">Fullstack</p>
                        <h1 class="mb-8 mt-4 text-center text-2xl text-[#3986A3]">Rp360.000</h1>
                        <div class="mx-auto mt-5 w-28 bg-[#D7E6ED]" style="height: 1px"></div>

                        <div class="mt-9 flex flex-col items-start gap-3 text-sm text-[#70787D]">
                            <div class="flex items-start gap-2">
                                <img
                                    src="{{ asset("assets/images/landing/produk/premium-class/check.png") }}"
                                    alt="Checkmark"
                                    class="h-5 w-5 object-contain"
                                />
                                <p>
                                    Pembelajaran kelas
                                    <i>FUNDAMENTAL</i>
                                    dan
                                    <i>EXCELLENT</i>
                                </p>
                            </div>
                        </div>

                        <div class="mb-5 mt-9 flex items-center justify-center">
                            <button
                                class="rounded-xl bg-gradient-to-r from-[#F7B23B] to-[#AD7D29] px-6 py-2 text-base font-medium text-white"
                            >
                                Mulai Sekarang
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Harga Section-End (Mobile) -->

    <!-- Benefit Section-Start -->
    <section class="mt-12 w-full md:mt-20">
        <div class="flex flex-col px-4 py-10 md:px-16">
            <h1 class="mb-10 w-full text-center text-2xl font-semibold text-black md:text-4xl">
                Benefit
                <span class="bg-gradient-to-r from-[#F7B23B] to-[#AD7D29] px-2 text-white">Premium Class</span>
            </h1>

            <!-- Grid Card -->
            <div class="grid grid-cols-1 gap-4 pt-0 md:grid-cols-2 md:pt-6 lg:grid-cols-4">
                <!-- Card 1 -->
                <div
                    class="flex h-[68px] w-80 items-center gap-4 rounded-xl bg-white p-5 shadow-md md:w-full md:flex-col md:items-center md:px-9 md:py-9 md:text-justify"
                >
                    <!-- Mobile Icon -->
                    <div
                        class="flex flex-shrink-0 items-center justify-center overflow-hidden md:hidden"
                        style="height: 44px; width: 45px"
                    >
                        <img
                            src="{{ asset("assets/images/landing/produk/premium-class/intensif-icon.png") }}"
                            class="h-full w-full object-contain"
                        />
                    </div>

                    <!-- Desktop Icon -->
                    <div
                        class="hidden items-center justify-center overflow-hidden md:block md:pt-5"
                        style="height: 100px; width: 102px"
                    >
                        <img
                            src="{{ asset("assets/images/landing/produk/premium-class/intensif-icon.png") }}"
                            class="h-full w-full object-contain"
                        />
                    </div>

                    <div class="hidden w-3/4 items-center bg-gray-200 md:block" style="height: 1px"></div>
                    <p
                        class="flex-grow text-justify text-sm font-medium text-black md:mx-auto md:mt-4 md:max-w-[230px] md:pb-7 md:text-lg"
                    >
                        4 kali
                        <i>live session</i>
                        (10 jam belajar
                        <i>private</i>
                        )
                    </p>
                </div>

                <!-- Card 2 -->
                <div
                    class="flex h-[68px] w-80 items-center gap-4 rounded-xl bg-white p-5 shadow-md md:w-full md:flex-col md:items-center md:px-9 md:py-9 md:pb-12 md:text-justify"
                >
                    <!-- Mobile Icon -->
                    <div
                        class="flex flex-shrink-0 items-center justify-center overflow-hidden md:hidden"
                        style="height: 44px; width: 45px"
                    >
                        <img
                            src="{{ asset("assets/images/landing/produk/premium-class/intensif-icon.png") }}"
                            class="h-full w-full object-contain"
                        />
                    </div>

                    <!-- Desktop Icon -->
                    <div
                        class="hidden items-center justify-center overflow-hidden md:block md:pt-5"
                        style="height: 100px; width: 102px"
                    >
                        <img
                            src="{{ asset("assets/images/landing/produk/premium-class/konsultasi-icon.png") }}"
                            class="h-full w-full object-contain"
                        />
                    </div>

                    <div class="hidden w-3/4 items-center bg-gray-200 md:block" style="height: 1px"></div>

                    <p class="flex-grow text-justify text-sm leading-relaxed text-black md:hidden">
                        Kesempatan bertanya langsung dan berdiskusi seputar topik yang kalian butuhkan
                    </p>

                    <p
                        class="mt-1 hidden text-justify text-lg font-medium text-black md:mx-auto md:mt-4 md:block md:max-w-[230px] md:pb-7"
                    >
                        Kesempatan bertanya dan berdiskusi secara langsung
                    </p>
                </div>

                <!-- Card 3 -->
                <div
                    class="flex h-[68px] w-80 items-center gap-4 rounded-xl bg-white p-5 shadow-md md:w-full md:flex-col md:items-center md:px-9 md:py-9 md:pb-12 md:text-justify"
                >
                    <!-- Mobile Icon -->
                    <div
                        class="flex flex-shrink-0 items-center justify-center overflow-hidden md:hidden"
                        style="height: 44px; width: 45px"
                    >
                        <img
                            src="{{ asset("assets/images/landing/produk/premium-class/pdf-icon.png") }}"
                            class="h-full w-full object-contain"
                        />
                    </div>

                    <!-- Desktop Icon -->
                    <div
                        class="hidden items-center justify-center overflow-hidden md:block md:pt-5"
                        style="height: 100px; width: 102px"
                    >
                        <img
                            src="{{ asset("assets/images/landing/produk/premium-class/pdf-icon.png") }}"
                            class="h-full w-full object-contain"
                        />
                    </div>

                    <div class="hidden w-3/4 items-center bg-gray-200 md:block" style="height: 1px"></div>
                    <p
                        class="flex-grow text-justify text-sm font-medium text-black md:mx-auto md:mt-4 md:max-w-[230px] md:pb-7 md:text-lg"
                    >
                        Jadwal fleksibel sesuai keinginan kalian
                    </p>
                </div>

                <!-- Card 4 -->
                <div
                    class="flex h-[68px] w-80 items-center gap-4 rounded-xl bg-white p-5 shadow-md md:w-full md:flex-col md:items-center md:px-9 md:py-9 md:pb-12 md:text-justify"
                >
                    <!-- Mobile Icon -->

                    <div
                        class="flex flex-shrink-0 items-center justify-center overflow-hidden md:hidden"
                        style="height: 44px; width: 45px"
                    >
                        <img
                            src="{{ asset("assets/images/landing/produk/premium-class/Portofolio.png") }}"
                            class="h-full w-full object-contain"
                        />
                    </div>

                    <!-- Dekstop Icon -->
                    <div
                        class="hidden items-center justify-center overflow-hidden md:block md:pt-5"
                        style="height: 100px; width: 102px"
                    >
                        <img
                            src="{{ asset("assets/images/landing/produk/premium-class/Portofolio.png") }}"
                            class="h-full w-full object-contain"
                        />
                    </div>

                    <div class="hidden w-3/4 items-center bg-gray-200 md:block" style="height: 1px"></div>
                    <p class="flex-grow text-justify text-sm font-medium text-black md:hidden">
                        Studi kasus nyata untuk mengasah kemampuan analisis data
                    </p>
                    <p
                        class="mt-1 hidden text-justify text-lg font-medium text-black md:mx-auto md:mt-4 md:block md:max-w-[230px] md:pb-7"
                    >
                        Studi kasus nyata untuk asah kemampuan analisis
                    </p>
                </div>
            </div>
            <!-- Benefit Tambahan (Desktop) -->
            <div class="hidden w-full md:block">
                <h2 class="mb-8 mt-10 text-start text-xl font-semibold text-[#F7B23B]">Benefit Tambahan</h2>
                <div class="flex w-full flex-wrap justify-center gap-4">
                    <div
                        class="flex flex-none items-center gap-3 rounded-full px-4 py-2 text-white"
                        style="background-color: #5b8da0"
                    >
                        <div class="flex h-8 w-8 items-center justify-center rounded-full bg-white">
                            <span class="text-lg">📹</span>
                        </div>
                        <span class="text-base font-semibold">
                            <i>Zoom Class</i>
                            Bersama
                            <i>Expert</i>
                            (
                            <i>Private Class</i>
                            )
                        </span>
                    </div>
                    <div
                        class="flex flex-none items-center gap-3 rounded-full px-4 py-2 text-white"
                        style="background-color: #5b8da0"
                    >
                        <div class="flex h-8 w-8 items-center justify-center rounded-full bg-white">
                            <span class="text-lg">📘</span>
                        </div>
                        <span class="text-base font-semibold">
                            Materi dalam Bentuk
                            <i>PDF</i>
                        </span>
                    </div>
                    <div
                        class="flex flex-none items-center gap-3 rounded-full px-4 py-2 text-white"
                        style="background-color: #5b8da0"
                    >
                        <div class="flex h-8 w-8 items-center justify-center rounded-full bg-white">
                            <span class="text-lg">🤝</span>
                        </div>
                        <span class="text-base font-semibold"><i>Intensive Project Mentoring</i></span>
                    </div>
                    <div
                        class="flex flex-none items-center gap-3 rounded-full px-4 py-2 text-white"
                        style="background-color: #5b8da0"
                    >
                        <div class="flex h-8 w-8 items-center justify-center rounded-full bg-white">
                            <span class="text-lg">🗂️</span>
                        </div>
                        <span class="text-base font-semibold"><i>Real Project Portofolio</i></span>
                    </div>
                    <div
                        class="flex flex-none items-center gap-3 rounded-full px-4 py-2 text-white"
                        style="background-color: #5b8da0"
                    >
                        <div class="flex h-8 w-8 items-center justify-center rounded-full bg-white">
                            <span class="text-lg">👨‍💼</span>
                        </div>
                        <span class="text-base font-semibold">Konsultasi ke Mentor</span>
                    </div>
                    <div
                        class="flex flex-none items-center gap-3 rounded-full px-4 py-2 text-white"
                        style="background-color: #5b8da0"
                    >
                        <div class="flex h-8 w-8 items-center justify-center rounded-full bg-white shadow">
                            <span class="text-lg">📜</span>
                        </div>
                        <span class="text-base font-semibold"><i>E-Certificate</i></span>
                    </div>
                </div>
            </div>

            <!-- Benefit Tambahan (Mobile) -->
            <div class="pt-6 md:hidden">
                <h2 class="mb-6 text-start text-base font-semibold text-[#F7B23B]">Benefit Tambahan</h2>

                <div class="mb-1 mt-2 flex justify-center">
                    <div
                        class="inline-flex items-center gap-1 rounded-full px-2 py-1 text-[10px] text-white"
                        style="background-color: #5b8da0"
                    >
                        <div class="flex h-5 w-5 items-center justify-center rounded-full bg-white">
                            <span class="text-[9px]">📹</span>
                        </div>
                        <span class="whitespace-nowrap font-semibold">Zoom Class Bersama Expert (Private Class)</span>
                    </div>
                </div>

                <div class="mb-1 flex justify-center gap-1">
                    <div
                        class="inline-flex items-center gap-1 rounded-full px-2 py-1 text-[10px] text-white"
                        style="background-color: #5b8da0"
                    >
                        <div class="flex h-5 w-5 items-center justify-center rounded-full bg-white">
                            <span class="text-[9px]">📘</span>
                        </div>
                        <span class="whitespace-nowrap font-semibold">Materi dalam Bentuk PDF</span>
                    </div>
                    <div
                        class="inline-flex items-center gap-1 rounded-full px-2 py-1 text-[10px] text-white"
                        style="background-color: #5b8da0"
                    >
                        <div class="flex h-5 w-5 items-center justify-center rounded-full bg-white">
                            <span class="text-[9px]">📜</span>
                        </div>
                        <span class="whitespace-nowrap font-semibold">E-Certificate</span>
                    </div>
                </div>

                <div class="mb-1 flex justify-center gap-1">
                    <div
                        class="inline-flex items-center gap-1 rounded-full px-2 py-1 text-[10px] text-white"
                        style="background-color: #5b8da0"
                    >
                        <div class="flex h-5 w-5 items-center justify-center rounded-full bg-white">
                            <span class="text-[9px]">🗂️</span>
                        </div>
                        <span class="whitespace-nowrap font-semibold">Real Project Portofolio</span>
                    </div>
                    <div
                        class="inline-flex items-center gap-1 rounded-full px-2 py-1 text-[10px] text-white"
                        style="background-color: #5b8da0"
                    >
                        <div class="flex h-5 w-5 items-center justify-center rounded-full bg-white">
                            <span class="text-[9px]">👨‍💼</span>
                        </div>
                        <span class="whitespace-nowrap font-semibold">Konsultasi ke Mentor</span>
                    </div>
                </div>

                <div class="mb-1 flex justify-center">
                    <div
                        class="inline-flex items-center gap-1 rounded-full px-2 py-1 text-[10px] text-white"
                        style="background-color: #5b8da0"
                    >
                        <div class="flex h-5 w-5 items-center justify-center rounded-full bg-white">
                            <span class="text-[9px]">🤝</span>
                        </div>
                        <span class="whitespace-nowrap font-semibold">Intensive Project Mentoring</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Benefit Section-End -->

    <!-- FAQ -->
    <section class="z-10 mx-4 pb-[50px] pt-[50px] sm:mx-20 md:pb-[75px] md:pt-[75px]">
        <ul class="flex flex-col">
            <!-- FAQ 1 -->
            <li
                x-data="accordion(0)"
                :class="`bg-white py-2 shadow-sm rounded-lg my-2 border ${isActive() ? 'border-2 border-blue-500' : 'border'}`"
            >
                <div class="mx-2 flex flex-row sm:mx-5">
                    <div class="flex w-full flex-col p-3 max-sm:p-2">
                        <h2 @click="handleClick()" class="cursor-pointer text-lg text-neutral-800 max-sm:text-[16.5px]">
                            <span>Apakah hasil tugas dapat saya lampirkan sebagai portofolio?</span>
                        </h2>
                        <div
                            class="w-full bg-gray-200 transition-all duration-300 md:hidden"
                            :class="isActive() ? 'opacity-100' : 'opacity-0'"
                            style="height: 1px; margin-top: 10px"
                        ></div>
                        <div
                            x-ref="tab"
                            :style="handleToggle()"
                            class="max-h-0 overflow-hidden transition-all duration-500"
                        >
                            <p class="mt-5 text-justify text-neutral-600 max-sm:mt-2 max-sm:text-[15px]">
                                Tentu, SobatBinar diperbolehkan menggunakan tugas yang dikerjakan selama kelas sebagai
                                bagian dari portofolio. Ini bisa menjadi bukti nyata atas keterampilan yang telah
                                dipelajari dan dikembangkan selama mengikuti program
                                <i>Premium Class.</i>
                            </p>
                        </div>
                    </div>
                    <div class="ml-6 hidden items-center sm:flex">
                        <template x-if="$store.accordion.tab === idx">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                                <path
                                    d="M20 20L4 4M20 4L4 20"
                                    stroke="#3986A3"
                                    stroke-width="3"
                                    stroke-linecap="round"
                                />
                            </svg>
                        </template>
                        <template x-if="$store.accordion.tab !== idx">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                                <path
                                    d="M22.4 8L12 19.2 1.6 8"
                                    stroke="#3986A3"
                                    stroke-width="3"
                                    stroke-linecap="square"
                                />
                            </svg>
                        </template>
                    </div>
                </div>
            </li>

            <!-- FAQ 2 -->
            <li
                x-data="accordion(1)"
                :class="`bg-white py-2 shadow-sm rounded-lg my-2 border ${isActive() ? 'border-2 border-blue-500' : 'border'}`"
            >
                <div class="mx-2 flex flex-row sm:mx-5">
                    <div class="flex w-full flex-col p-3 max-sm:p-2">
                        <h2 @click="handleClick()" class="cursor-pointer text-lg text-neutral-800 max-sm:text-[16.5px]">
                            <span>Bisakah saya menjadwalkan ulang sesi kelas ketika saya berhalangan hadir?</span>
                        </h2>
                        <div
                            class="w-full bg-gray-200 transition-all duration-300 md:hidden"
                            :class="isActive() ? 'opacity-100' : 'opacity-0'"
                            style="height: 1px; margin-top: 10px"
                        ></div>
                        <div
                            x-ref="tab"
                            :style="handleToggle()"
                            class="max-h-0 overflow-hidden transition-all duration-500"
                        >
                            <p class="mt-3 text-justify text-neutral-600 max-sm:mt-2 max-sm:text-[15px]">
                                Ya, penjadwalan ulang kelas dapat dilakukan berdasarkan kesepakatan dengan mentor.
                                SobatBinar disarankan memberi konfirmasi sebelumnya agar proses penjadwalan berjalan
                                lancar dan sesuai ketentuan yang berlaku.
                            </p>
                        </div>
                    </div>
                    <div class="ml-6 hidden items-center sm:flex">
                        <template x-if="$store.accordion.tab === idx">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                                <path
                                    d="M20 20L4 4M20 4L4 20"
                                    stroke="#3986A3"
                                    stroke-width="3"
                                    stroke-linecap="round"
                                />
                            </svg>
                        </template>
                        <template x-if="$store.accordion.tab !== idx">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                                <path
                                    d="M22.4 8L12 19.2 1.6 8"
                                    stroke="#3986A3"
                                    stroke-width="3"
                                    stroke-linecap="square"
                                />
                            </svg>
                        </template>
                    </div>
                </div>
            </li>

            <!-- FAQ 3 -->
            <li
                x-data="accordion(2)"
                :class="`bg-white py-2 shadow-sm rounded-lg my-2 border ${isActive() ? 'border-2 border-blue-500' : 'border'}`"
            >
                <div class="mx-2 flex flex-row sm:mx-5">
                    <div class="flex w-full flex-col p-3 max-sm:p-2">
                        <h2 @click="handleClick()" class="cursor-pointer text-lg text-neutral-800 max-sm:text-[16.5px]">
                            <span>Kapan sertifikat akan diberikan?</span>
                        </h2>
                        <div
                            class="w-full bg-gray-200 transition-all duration-300 md:hidden"
                            :class="isActive() ? 'opacity-100' : 'opacity-0'"
                            style="height: 1px; margin-top: 10px"
                        ></div>
                        <div
                            x-ref="tab"
                            :style="handleToggle()"
                            class="max-h-0 overflow-hidden transition-all duration-500"
                        >
                            <p class="mt-3 text-justify text-neutral-600 max-sm:mt-2 max-sm:text-[15px]">
                                Setelah pembelajaran berakhir serta telah menyelesaikan tugas dengan baik maka
                                SobatBinar dapat memperoleh sertifikat.
                            </p>
                        </div>
                    </div>
                    <div class="ml-6 hidden items-center sm:flex">
                        <template x-if="$store.accordion.tab === idx">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                                <path
                                    d="M20 20L4 4M20 4L4 20"
                                    stroke="#3986A3"
                                    stroke-width="3"
                                    stroke-linecap="round"
                                />
                            </svg>
                        </template>
                        <template x-if="$store.accordion.tab !== idx">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                                <path
                                    d="M22.4 8L12 19.2 1.6 8"
                                    stroke="#3986A3"
                                    stroke-width="3"
                                    stroke-linecap="square"
                                />
                            </svg>
                        </template>
                    </div>
                </div>
            </li>

            <!-- FAQ 4 -->
            <li
                x-data="accordion(3)"
                :class="`bg-white py-2 shadow-sm rounded-lg my-2 border ${isActive() ? 'border-2 border-blue-500' : 'border'}`"
            >
                <div class="mx-2 flex flex-row sm:mx-5">
                    <div class="flex w-full flex-col p-3 max-sm:p-2">
                        <h2 @click="handleClick()" class="cursor-pointer text-lg text-neutral-800 max-sm:text-[16.5px]">
                            <span>Apakah ada batas waktu untuk mengerjakan studi kasus?</span>
                        </h2>
                        <div
                            class="w-full bg-gray-200 transition-all duration-300 md:hidden"
                            :class="isActive() ? 'opacity-100' : 'opacity-0'"
                            style="height: 1px; margin-top: 10px"
                        ></div>
                        <div
                            x-ref="tab"
                            :style="handleToggle()"
                            class="max-h-0 overflow-hidden transition-all duration-500"
                        >
                            <p class="mt-3 text-justify text-neutral-600 max-sm:mt-2 max-sm:text-[15px]">
                                Ya, studi kasus memiliki batas waktu penyelesaian yang telah ditentukan. Informasi
                                mengenai
                                <i>deadline</i>
                                akan disampaikan di awal kelas dan tercantum dalam panduan program.
                            </p>
                        </div>
                    </div>
                    <div class="ml-6 hidden items-center sm:flex">
                        <template x-if="$store.accordion.tab === idx">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                                <path
                                    d="M20 20L4 4M20 4L4 20"
                                    stroke="#3986A3"
                                    stroke-width="3"
                                    stroke-linecap="round"
                                />
                            </svg>
                        </template>
                        <template x-if="$store.accordion.tab !== idx">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                                <path
                                    d="M22.4 8L12 19.2 1.6 8"
                                    stroke="#3986A3"
                                    stroke-width="3"
                                    stroke-linecap="square"
                                />
                            </svg>
                        </template>
                    </div>
                </div>
            </li>

            <!-- FAQ 5 -->
            <li
                x-data="accordion(4)"
                :class="`bg-white py-2 shadow-sm rounded-lg my-2 border ${isActive() ? 'border-2 border-blue-500' : 'border'}`"
            >
                <div class="mx-2 flex flex-row sm:mx-5">
                    <div class="flex w-full flex-col p-3 max-sm:p-2">
                        <h2 @click="handleClick()" class="cursor-pointer text-lg text-neutral-800 max-sm:text-[16.5px]">
                            <span>Apakah mentor tersedia setiap waktu untuk menjawab pertanyaan saya?</span>
                        </h2>
                        <div
                            class="w-full bg-gray-200 transition-all duration-300 md:hidden"
                            :class="isActive() ? 'opacity-100' : 'opacity-0'"
                            style="height: 1px; margin-top: 10px"
                        ></div>
                        <div
                            x-ref="tab"
                            :style="handleToggle()"
                            class="max-h-0 overflow-hidden transition-all duration-500"
                        >
                            <p class="mt-3 text-justify text-neutral-600 max-sm:mt-2 max-sm:text-[15px]">
                                Mentor tidak tersedia setiap waktu. Namun, SobatBinar tetap dapat mengajukan pertanyaan
                                kapan saja, dan mentor akan merespons sesuai dengan jadwal atau jam operasional yang
                                telah ditentukan.
                            </p>
                        </div>
                    </div>
                    <div class="ml-6 hidden items-center sm:flex">
                        <template x-if="$store.accordion.tab === idx">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                                <path
                                    d="M20 20L4 4M20 4L4 20"
                                    stroke="#3986A3"
                                    stroke-width="3"
                                    stroke-linecap="round"
                                />
                            </svg>
                        </template>
                        <template x-if="$store.accordion.tab !== idx">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                                <path
                                    d="M22.4 8L12 19.2 1.6 8"
                                    stroke="#3986A3"
                                    stroke-width="3"
                                    stroke-linecap="square"
                                />
                            </svg>
                        </template>
                    </div>
                </div>
            </li>
        </ul>
    </section>

    <!-- Style -->
    <style>
        @media (min-width: 768px) {
            #customSection {
                padding-top: 10rem;
            }
        }
        .marquee-container {
            width: 100%;
            overflow: hidden;
            position: relative;
        }

        .marquee-content {
            display: flex;
            animation: marquee 25s linear infinite;
        }

        .benefit-card {
            flex: 0 0 auto;
            width: calc(33.333% - 20px);
            min-width: 300px;
            margin: 0 10px;
        }

        @keyframes marquee {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(-50%); /* Move exactly half the width */
            }
        }

        /* Styling untuk garis putus-putus antar badge */
        @media (min-width: 768px) {
            .swiper-slide:not(:first-child) .flex-col.items-center.gap-8 {
                position: relative;
            }

            .swiper-slide:not(:first-child) .flex-col.items-center.gap-8::before {
                content: '';
                position: absolute;
                top: 32px; /* Tengah badge */
                left: -95px;
                width: 170px;
                height: 4px;
                border-top: 6px dashed #f7b23b;
                z-index: 1;
            }

            .swiper-slide .relative.z-20 {
                z-index: 3;
            }

            .swiper-slide {
                width: 224px !important;
            }
        }

        .swiper-pagination-mobile .swiper-pagination-bullet {
            width: 20px;
            height: 20px;
            border-radius: 9999px;
            background: rgba(255, 255, 255, 0.5);
            opacity: 1;
            transition: background-color 0.3s ease;
        }

        .swiper-pagination-mobile .swiper-pagination-bullet-active {
            background-color: #f7b23b !important; /* Tambahkan !important untuk pastikan override */
        }

        .swiper-pagination-mobile {
            position: absolute;
            bottom: 10px;
            left: 0;
            right: 0;
            margin: auto;
            display: flex;
            justify-content: center;
            gap: 5px;
            width: 100%; /* ⬅️ ini penting banget */
        }

        /* Responsive adjustments */
        @media (max-width: 1023px) {
            .benefit-card {
                width: calc(50% - 20px);
                min-width: 250px;
            }
        }

        @media (max-width: 767px) {
            .benefit-card {
                width: calc(80% - 20px);
                min-width: 220px;
            }

            .marquee-content {
                animation: marquee 20s linear infinite;
            }
        }
    </style>
    <!-- Include Swiper CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />

    <!-- Include Swiper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.min.js"></script>
    <!-- Initialize Swiper -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var swiper = new Swiper('.mySwiper', {
                direction: 'horizontal',
                slidesPerView: 1,
                spaceBetween: 20,

                mousewheel: true,
                loop: false,
                pagination: {
                    el: '.swiper-pagination-mobile',
                    clickable: true,
                },
                mousewheel: {
                    forceToAxis: true, // Biar nggak scroll vertikal jadi swipe
                },
            });

            var swiper = new Swiper('.classSwiper', {
                direction: 'vertical',
                slidesPerView: 'auto',
                spaceBetween: 10,
                initialSlide: 0,
                loop: false,
                slidesPerGroup: 1,
                scrollbar: {
                    el: '.swiper-scrollbar',
                    hide: false,
                    draggable: true,
                },
                // Prevent slider from showing partial slides
                watchOverflow: true,
                allowTouchMove: true,
                grabCursor: true,
            });
            const premiumClassSwiper = new Swiper('.premiumClassSwiper', {
                slidesPerView: 5,
                spaceBetween: 20,
                initialSlide: 0,
                loop: false,
                slidesPerGroup: 1, // Move only one slide at a time
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                watchOverflow: true,
                allowTouchMove: true,
                grabCursor: true,
            });
            const swiperBenefit = new Swiper('.mySwiper-benefit', {
                slidesPerView: 'auto',
                spaceBetween: 16,
                freeMode: true,
                loop: true,
                grabCursor: true,
            });
        });
    </script>
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
        document.getElementById('openModal').addEventListener('click', function () {
            document.getElementById('modal').classList.remove('hidden');
        });

        document.getElementById('closeModal').addEventListener('click', function () {
            document.getElementById('modal').classList.add('hidden');
        });

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
@endsection
