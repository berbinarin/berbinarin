@extends("landing.layouts.app",
    [
        "title" => "Berbinar Insightful Indonesia"
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

        .border-active {
            border: 1.5px solid #3986a3;
        }

        #swiperKelas {
            width: 900px;
            margin: 20px auto;
            overflow: hidden;
            padding-bottom: 10px;
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

        @media (max-width: 640px) {
            .swiperContainer {
                overflow: hidden;
                margin: 0px 16px;
            }

            #swiperKelas {
                width: 500px;
            }
        }

        @media (min-width: 641px) and (max-width: 767px) {
            .swiperContainer {
                overflow: hidden;
                margin: 0px 80px;
            }

            #swiperKelas {
                width: 550px;
            }
        }

        @media (min-width: 768px) and (max-width: 992px) {
            #swiperKelas {
                width: 800px;
                margin: 20px auto;
            }

            .swiperContainer {
                overflow: hidden;
                margin: 0px 80px;
            }
        }

        /* @media (min-width: ) and (max-width: 1024px) {
    #swiperKelas {
        width: 800px;
        margin: 20px auto;
    }
} */
    </style>
@endsection

@section("content")
    {{-- HERO SECTION --}}
    <section class="relative max-md:overflow-hidden">
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
                        <img src="{{ asset("assets/images/landing/asset-kelas/hero.png") }}" alt="Class" class="h-[340px] w-auto object-contain max-sm:h-[320px]" />
                    </div>

                    <div class="lg:order-3">
                        <h2 class="text-gradient py-2 text-5xl font-bold max-sm:text-3xl">Berbinar Class</h2>
                    </div>

                    <div class="lg:order-4">
                        <p class="text-justify text-lg text-[#70787D] max-lg:text-[17px] max-sm:text-[15px] max-sm:leading-normal">Layanan yang bertujuan untuk membantu suatu perusahaan/komunitas/organisasi yang berkaitan dengan Sumber Daya Manusia. Layanan ini menekankan pada proses consulting oleh Human Resource yang berpengalaman agar pengetahuan yang diberikan dapat diterima dan dimengerti dengan baik oleh klien.</p>
                    </div>
                </div>

                <div class="flex w-full flex-initial items-center justify-center max-lg:flex-1 max-md:hidden lg:w-auto">
                    <img src="{{ asset("assets/images/landing/asset-kelas/hero.png") }}" alt="Class" class="h-[340px] w-auto object-contain max-lg:h-[320px]" />
                </div>
            </div>
        </div>
    </section>

    {{-- PRODUK KELAS --}}
    <section class="relative mb-12 mt-10 w-full">
        <div class="absolute left-0 top-4 z-0 max-sm:top-40">
            <img src="/assets/images/landing/asset-konseling/vector/vector-line.svg" alt="Vector Image" class="" />
        </div>

        <h2 class="font relative z-10 mx-20 mt-14 text-center text-4xl font-semibold text-black max-sm:mx-2 max-sm:text-[29px]">
            Pilihan Terbaik Produk Kelas
            <span class="bg-primary px-2 text-white">Berbinar</span>
        </h2>
        <div class="swiperContainer">
            <div class="swiper relative z-10" id="swiperKelas">
                <div class="swiper-wrapper pb-1 max-sm:pb-8">
                    @foreach ($products as $product)
                        <div class="swiper-slide">
                            <div class="flex h-auto w-auto flex-col items-center justify-center rounded-3xl bg-white shadow-md max-sm:max-h-[355px] max-sm:max-w-[240px]">
                                <div class="flex w-full justify-center rounded-t-3xl bg-gradient-to-b from-[#75BADB] to-[#AFCFDA] py-7 max-sm:py-5">
                                    <img src="{{ asset($product["vector"]) }}" alt="{{ $product["produk"] }}" class="h-32 w-auto max-sm:h-[110px]" />
                                </div>

                                <div class="flex flex-grow flex-col px-4 py-4 text-center max-sm:px-3 max-sm:py-3">
                                    <h2 class="text-md flex items-center justify-center font-semibold text-black max-sm:text-[15px]">{{ $product["produk"] }}</h2>
                                    <p class="text-md mt-3 min-h-[96px] flex-grow text-[#70787D] max-sm:mt-2 max-sm:min-h-[90px] max-sm:text-[15px]">
                                        {{ $product["deskripsi"] }}
                                    </p>
                                    @php
                                        $href = $product["route"] !== "#" && Route::has($product["route"]) ? route($product["route"]) : "#";
                                    @endphp

                                    <a href="{{ $href }}" class="mt-6 self-center rounded-full bg-[#75BADB] px-4 py-2 text-[18px] text-sm font-semibold text-white shadow max-sm:mt-4 max-sm:w-full">Pelajari Selengkapnya</a>
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

    {{-- peserta program kelas --}}
    <section class="w-full px-4 py-8 sm:px-14">
        {{-- title --}}
        <h2 class="mx-auto mb-4 py-4 text-center text-2xl font-bold text-black lg:max-w-3xl lg:text-3xl lg:leading-10">
            Siapa saja yang bisa dapat mengikuti program-program Kelas
            <span class="bg-primary px-2 text-white">Berbinar</span>
        </h2>
        <div class="mx-auto flex flex-wrap items-center justify-center gap-x-2 gap-y-4 py-2 lg:max-w-screen-lg">
            @foreach ($participants as $participant)
                <div class="flex items-center gap-2 rounded-full bg-primary px-2 py-1 text-start font-semibold text-white">
                    <span class="flex h-8 w-8 items-center justify-center rounded-full bg-white text-sm text-black shadow-xl lg:text-lg">
                        {{ $participant["icon"] }}
                    </span>
                    <p class="text-xs md:text-base">{{ $participant["name"] }}</p>
                </div>
            @endforeach
        </div>
    </section>

    {{-- FAQS --}}
    <section class="z-10 mx-4 my-14 max-md:mt-10 sm:mx-20">
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
                                <p class="mt-3 text-justify text-[#6F6C90] max-sm:mt-2 max-sm:text-[15px]">{{ $faq["answer"] }}</p>
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
                                        <clipPath id="clip0_7503_13741"><rect width="24" height="24" fill="white" /></clipPath>
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

    <!-- Bottom-Left Corner -->
    <div class="fixed bottom-4 right-4 z-50">
        <a href="https://wa.me/6285694080365" target="_blank">
            <div class="flex size-12 items-center justify-center rounded-full bg-[#3986A3] p-2 text-white shadow-xl hover:bg-[#3986A3]/80 lg:size-16 lg:p-4">
                <img src="{{ asset("assets/images/landing/asset-beranda/sosmed-icon/whatsapp.png") }}" alt="whatsapp icon" class="object-cover" />
            </div>
        </a>
    </div>

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
@endsection

@section("script")
    <script>
        var swiper = new Swiper('#swiperKelas', {
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
            scrollbar: {
                el: '.swiper-scrollbar',
                draggable: true,
                dragSize: 100,
            },
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
                    spaceBetween: 10,
                },
            },
        });
    </script>
@endsection
