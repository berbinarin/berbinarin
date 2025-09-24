@extends(
    "landing.layouts.app",
    [
        "title" => "Berbinar Insightful Indonesia",
        "active" => "Produk Berbinar",
        "page" => "Consulting",
    ]
)

@section("style")
    <style>
        .text-gradient {
            background: linear-gradient(to right, #3886a3, #225062);
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
        }

        .bg-psikolog {
            background-image: url('/assets/images/landing/asset-konseling/image/bg-psikolog.png');
        }

        .bg-wave {
            background-image: url('/assets/images/landing/asset-konseling/vector/vector-wave.svg');
            background-repeat: no-repeat;
            background-position: center;
        }

        .swiperContainer {
            overflow: hidden;
        }

        #swiperConsulting {
            width: 900px;
            overflow: hidden;
            margin: 20px auto;
            padding-bottom: 35px;
        }

        .swiper-pagination {
            position: relative;
            padding-top: 20px;
        }

        .swiper-pagination-bullet {
            background-color: #d0d0d0;
            opacity: 1;
            height: 8px;
            width: 8px;
            transition:
                width 0.3s,
                height 0.3s,
                background-color 0.3s;
        }

        .swiper-pagination-bullet-active {
            background-color: #3886a3;
            width: 16px;
            height: 8px;
            border-radius: 10px;
        }

        @media (max-width: 640px) {
            .bg-psikolog {
                background-image: none;
            }

            #swiperConsulting {
                width: 450px;
            }
        }

        @media (min-width: 641px) and (max-width: 767px) {
            .bg-psikolog {
                background-image: none;
            }

            #swiperConsulting {
                width: 500px;
            }
        }

        @media (max-width: 992px) {
        }

        @media (min-width: 768px) and (max-width: 1024px) {
            #swiperConsulting {
                width: 750px;
            }
        }
    </style>
@endsection

@section("content")
    {{-- HERO SECTION --}}
    <section class="relative overflow-x-hidden md:overflow-visible">
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
                        <img src="{{ asset("assets/images/landing/asset-consulting/hero.png") }}" alt="Consulting" class="h-[340px] w-auto object-contain max-sm:h-[320px]" />
                    </div>

                    <div class="lg:order-3">
                        <h2 class="text-gradient py-2 text-5xl font-bold max-sm:text-3xl">Berbinar Consulting</h2>
                    </div>

                    <div class="lg:order-4">
                        <p class="text-justify text-lg text-[#70787D] max-lg:text-[17px] max-sm:text-[15px] max-sm:leading-normal">Layanan yang bertujuan untuk membantu suatu perusahaan/komunitas/organisasi yang berkaitan dengan Sumber Daya Manusia. Layanan ini menekankan pada proses consulting oleh Human Resource yang berpengalaman agar pengetahuan yang diberikan dapat diterima dan dimengerti dengan baik oleh klien.</p>
                    </div>
                </div>

                <div class="flex w-full flex-initial items-center justify-center max-lg:flex-1 max-md:hidden lg:w-auto">
                    <img src="{{ asset("assets/images/landing/asset-consulting/hero.png") }}" alt="Consulting" class="h-[340px] w-auto object-contain max-lg:h-[320px]" />
                </div>
            </div>
        </div>
    </section>

    {{-- LAYANAN --}}
    <section class="bg-psikolog relative mx-20 my-56 mt-24 h-[280px] rounded-3xl bg-cover p-10 max-md:my-5 max-md:h-[600px] max-md:overflow-hidden max-sm:mx-4 max-sm:h-[500px]">
        <img src="/assets/images/landing/asset-produk/vector-curling-mobile.png" alt="Background" class="absolute -top-[150px] left-0 hidden w-[1000px] rounded-t-3xl object-cover max-md:-top-[220px] max-md:flex max-md:h-[700px] max-sm:-top-[200px] max-sm:h-[600px] max-sm:w-[1500px]" />
        <div class="absolute inset-0 flex rounded-3xl bg-[#2D6B8280] max-md:hidden"></div>

        <div class="relative flex flex-col justify-center space-y-4 text-center">
            <h1 class="text-3xl font-semibold text-white max-sm:text-2xl">
                Layanan Berbinar
                <span class="italic">Consulting</span>
            </h1>

            <div class="swiperContainer">
                <div class="" id="swiperConsulting">
                    <div class="swiper-wrapper">
                        @foreach ($layanan_consultings as $layanan_consulting)
                            <div class="swiper-slide">
                                <div class="flex h-full min-h-[313px] flex-col rounded-xl bg-white bg-opacity-90 px-6 py-4 shadow-md backdrop-blur-sm max-xl:w-[95%] max-lg:min-h-[375px] max-lg:w-full max-sm:min-h-[300px] max-sm:px-4 max-sm:py-3">
                                    <p class="min-h-[45px] text-lg font-semibold leading-tight text-black max-lg:min-h-[67px] max-sm:min-h-[40px] max-sm:text-[17px]">
                                        {{ $layanan_consulting["category"] }}
                                    </p>
                                    <p class="mb-4 mt-3 text-[30px] font-semibold leading-none text-[#3986A3] max-lg:text-2xl max-sm:mt-1.5">
                                        {{ $layanan_consulting["price"] }}
                                        <span class="align-top text-[18px] text-[#70787D]">*</span>
                                    </p>
                                    {{-- @dump($layanan_consulting['icon']) --}}
                                    <div class="mx-auto mb-4">
                                        <img src="{{ asset($layanan_consulting["icon"]) }}" alt="{{ $layanan_consulting["category"] }}" class="h-20 object-cover" />
                                    </div>
                                    {{-- list --}}
                                    @foreach ($layanan_consulting["description"] as $desc)
                                        <div class="flex flex-row items-start gap-x-2">
                                            <img src="{{ asset("assets/images/landing/asset-tentang/green-check.svg") }}" alt="Vector" class="h-[18px] w-[18px] max-sm:h-4 max-sm:w-4" />
                                            <p class="-mt-0.5 text-justify text-[16px] text-[#70787D] max-sm:text-[15px]">{{ $desc }}</p>
                                        </div>
                                    @endforeach

                                    {{-- list --}}
                                    <a href="{{ $layanan_consulting["link"] }}" target="_blank">
                                        <div class="mb-1 mt-4 flex justify-center max-sm:mt-2">
                                            <button class="rounded-lg bg-gradient-to-r from-[#F7B23B] to-[#AD7D29] px-4 py-1.5 text-sm text-white">Mulai Sekarang</button>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <p class="mt-2 text-left text-[16px] text-[#4F4F4F] max-sm:text-[14px]">*Harga masih bisa dinegosiasikan dan menyesuaikan dengan benefit yang ingin didapatkan.</p>
                    <div class="swiper-pagination max-sm:hidden"></div>
                </div>
            </div>
        </div>
    </section>

    {{-- PAKET BUNDLING --}}
    <section class="relative my-10 lg:mt-72">
        <p class="font relative z-10 mx-20 mb-5 mt-5 bg-gradient-to-r from-[#1C4352] to-[#3986A3] bg-clip-text py-2 text-center text-4xl font-semibold text-transparent max-sm:mx-2 max-sm:my-4 max-sm:text-[29px]">
            Paket
            <span class="italic">Bundling</span>
        </p>

        <div class="mx-40 max-lg:mx-20 max-sm:mx-4">
            <div class="grid w-full grid-cols-1 justify-center gap-5 sm:grid-cols-2">
                @foreach ($bundlings as $bundling)
                    <div class="flex flex-col rounded-xl bg-white p-5 text-center shadow-md max-sm:p-3">
                        <p class="customheight min-h-[43px] text-lg font-semibold leading-tight text-black max-sm:min-h-[43px] max-sm:text-[17px]">
                            {{ $bundling["category"] }}
                        </p>
                        <p class="mt-3 text-lg font-semibold leading-none text-[#70787D] max-sm:mt-1.5 max-sm:text-[16px]">
                            <del>{{ $bundling["discount"] }}</del>
                            <span class="rounded-md bg-[#EF5350] p-1 text-white">10%</span>
                        </p>
                        <p class="mt-3 flex-grow text-[30px] font-semibold leading-none text-[#3986A3] max-sm:mt-1.5 max-sm:text-[22px]">
                            {{ $bundling["price"] }}
                        </p>
                        <img src="{{ asset("assets/images/landing/asset-konseling/vector/vector-divider.svg") }}" alt="Vector" class="my-2 w-full sm:my-4" />
                        <a href="{{ $bundling["link"] }}" target="_blank">
                            <div class="mb-1 flex justify-center">
                                <button class="rounded-lg bg-gradient-to-r from-[#F7B23B] to-[#AD7D29] px-4 py-1.5 text-sm text-white">Mulai Sekarang</button>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <p class="mt-2 text-left text-[16px] text-[#4F4F4F] max-sm:text-[14px]">*Harga masih bisa dinegosiasikan dan menyesuaikan dengan benefit yang ingin didapatkan.</p>
        </div>
    </section>

    {{-- ALUR PENDAFTARAN CONSULTING --}}
    <section class="relative w-full overflow-x-hidden overflow-y-hidden bg-clip-content px-4 sm:px-14">
        {{-- Ellipse ornamen top-right --}}
        <img src="{{ asset("assets/images/landing/asset-consulting/Ellipse.png") }}" alt="ellipse ornament" class="absolute right-0 top-0 z-10 hidden size-[500px] -translate-y-3 translate-x-40 scale-125 lg:block" />
        {{-- Ellipse ornamen bottom-left --}}
        <img src="{{ asset("assets/images/landing/asset-consulting/Ellipse.png") }}" alt="ellipse ornament" class="absolute bottom-0 left-0 z-10 hidden size-[500px] -translate-x-40 translate-y-4 scale-125 lg:block" />

        {{-- TITLE --}}
        <div class="mb-6 flex w-full items-center justify-center text-center">
            <h1 class="bg-gradient-to-r from-[#1C4352] to-[#3986A3] to-70% bg-clip-text py-4 text-3xl font-bold text-transparent lg:text-5xl">Alur Pendaftaran Consulting</h1>
        </div>

        {{-- LIST ALUR PENDAFTARAN & IMAGE --}}
        <div class="relative flex flex-col gap-4 overflow-x-auto py-6 scrollbar-hide lg:gap-8 lg:py-20">
            <!-- Image in its own flex item -->
            <div class="relative z-20 hidden justify-center lg:flex lg:translate-x-72 xl:translate-x-44 3xl:translate-x-10 2xl:translate-x-0">
                <img src="{{ asset("assets/images/landing/asset-consulting/alur_pendaftaran.png") }}" alt="ornament alur pendaftaran" class="h-auto lg:max-w-screen-xl" />
            </div>

            <!-- Steps in flex-row on large screen -->
            <div class="relative z-20 flex flex-col gap-4 lg:flex-row lg:gap-8 xl:gap-6">
                @foreach ($alur_pendaftaran as $step)
                    <div class="lg:odd:pt-20">
                        <div class="flex shrink-0 flex-col items-center justify-center rounded-xl bg-white p-6 text-center shadow-lg lg:w-56 lg:p-4">
                            <img src="{{ asset($step["link"]) }}" alt="icon" class="mb-3 hidden size-12 lg:block" />
                            <img src="{{ asset("assets/images/landing/asset-consulting/line.png") }}" alt="line" class="mb-4 hidden scale-y-150 lg:block" />
                            <h1 class="mb-4 text-lg font-semibold text-slate-900">{{ $step["title"] }}</h1>
                            <p class="font-base text-justify text-[#70787D]">{{ $step["description"] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

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

@endsection

@section('script')
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
        var swiper = new Swiper('#swiperConsulting', {
            slidesPerView: 3,
            spaceBetween: 10,
            loop: true,
            speed: 300,
            mousewheel: {
                forceToAxis: true,
                sensitivity: 0.5,
                thresholdDelta: 30,
                thresholdTime: 400,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            slidesPerGroup: 1,
            breakpoints: {
                0: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                },
                640: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 10,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                },
            },
        });
    </script>
@endsection
