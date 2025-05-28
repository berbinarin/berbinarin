@extends(
  "layouts.main-new",
  [
    "title" => "Berbinar Insightful Indonesia",
    "active" => "Produk Berbinar",
    "page" => "berbinar+",
  ]
)

@section("content")
    {{-- HERO SECTION --}}
    <section class="relative mb-20 max-md:overflow-hidden">
        <div class="absolute left-0 top-5 z-0 max-sm:top-32">
            <img
                src="{{ asset("assets/images/landing/asset-konseling/vector/vector-hero1.svg") }}"
                alt="Vector"
                class="h-[500px] w-auto max-sm:h-[250px]"
            />
        </div>

        <div class="absolute right-0 top-8 z-0 max-md:-right-28 max-sm:-right-20 max-sm:top-40">
            <img
                src="{{ asset("assets/images/landing/asset-konseling/vector/vector-hero2.svg") }}"
                alt="Vector"
                class="h-[500px] w-auto max-sm:h-[250px]"
            />
        </div>

        <div class="relative">
            <div
                class="z-10 mx-20 mt-40 flex flex-row items-center justify-between gap-x-10 max-sm:mx-4 max-sm:mt-32"
            >
                <div class="max-lg:min-w-auto flex max-w-xl flex-1 flex-col space-y-6 max-sm:space-y-2">
                    <a href="{{ route("product.index") }}">
                        <div class="flex cursor-pointer items-center space-x-2 lg:order-1">
                            <img
                                src="{{ asset("assets/images/landing/asset-konseling/vector/left-arrow.svg") }}"
                                alt="Left Arrow"
                                class="h-3 w-auto"
                            />
                            <p class="text-[15px] font-semibold text-[#3986A3]">Produk Berbinar</p>
                        </div>
                    </a>

                    <div
                        class="hidden w-full items-center justify-center max-lg:flex-none max-md:flex lg:order-2 lg:w-auto"
                    >
                        <img
                            src="{{ asset("assets/images/landing/asset-kelas/class-journey/hero-class-journey.png") }}"
                            alt="Class"
                            class="h-[340px] w-auto object-contain max-sm:h-[320px]"
                        />
                    </div>

                    <div class="lg:order-3">
                        <h2 class="text-gradient py-2 text-5xl font-bold max-sm:text-3xl">101 Class Journey</h2>
                    </div>

                    <div class="lg:order-4">
                        <p
                            class="text-justify text-lg text-[#70787D] max-lg:text-[17px] max-sm:text-[15px] max-sm:leading-normal"
                        >
                            101 Class Journey adalah webinar berbayar yang diadakan secara berurutan. Pertama dengan
                            memberikan pengenalan terkait materi kemudian sesi selanjutnya akan membahas lebih mendalam
                            terkait materi tersebut.
                        </p>
                    </div>
                </div>

                <div
                    class="flex w-full flex-initial items-center justify-center max-lg:flex-1 max-md:hidden lg:w-auto"
                >
                    <img
                        src="{{ asset("assets/images/landing/asset-kelas/class-journey/hero-class-journey.png") }}"
                        alt="Class"
                        class="h-[340px] w-auto object-contain max-lg:h-[320px]"
                    />
                </div>
            </div>
        </div>
    </section>

    {{-- LAYANAN 101 CLASS JOURNEY --}}
    <section class="relative w-full px-4 sm:px-14 mb-20">

        {{--ORNAMENT PATH--}}
        <div class="absolute bottom-0 lg:top-0 lg:scale-y-75 left-0 z-0 w-full mx-auto">
            <img src="{{ asset('assets/images/landing/asset-kelas/class-journey/path.png') }}"
                 alt="ornament path"
                 class="w-full h-auto object-contain" />
        </div>

        <h1 class="text-center text-black font-semibold text-2xl sm:text-3xl lg:text-5xl mb-4 lg:mb-8">Layanan 101 Class Journey</h1>

        <div class="w-full relative gap-2 flex flex-col md:flex-row md:gap-2 lg:gap-4 sm:max-w-screen-lg mx-auto">
            {{--CARD--}}
            @foreach($layanan_class_journey as $layanan)
                <div class="w-full bg-white shadow-lg flex flex-col items-center justify-start py-8 gap-y-2 rounded-xl">
                    <div class="mb-4">
                        <img src="{{ asset($layanan['icon']) }}" alt="{{$layanan['name']}}" class="object-cover size-12">
                    </div>
                    <span class="text-xl text-black font-semibold mb-4">{{$layanan['name']}}</span>
                    <p class="block mx-auto font-semibold text-2xl text-primary text-center mb-4">{{$layanan['price']}}<span class="text-black/60 font-light">*</span></p>
                    <img
                        src="{{ asset("assets/images/landing/asset-consulting/line.png") }}"
                        alt="line"
                        class="mb-4 w-3/4"
                    />
                    <a href="{{$link_pendaftaran}}" target="_blank" class="block w-full py-1">
                        <div class="mx-auto w-fit py-2 px-8  bg-gradient-to-l from-[#AD7D29] hover:from-[#AD7D29]/80 to-[#F7B23B] hover:to-[#F7B23B]/80 rounded-lg flex justify-center items-center hover:shadow-lg">
                            <span class="text-white">Mulai Sekarang</span>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </section>
    {{--BENEFIT 101 CLASS JOURNEY--}}
    <section class="w-full px-4 sm:px-14 mb-12 lg:mb-16">
        <h1 class="text-center text-black font-semibold text-2xl sm:text-3xl lg:text-5xl mb-4 lg:mb-4">Benefit 101 Class Journey</h1>
        <div class="w-full overflow-x-auto scrollbar-hide mx-auto lg:max-w-screen-xl py-12">
            <div class="flex flex-row gap-4 items-center justify-start whitespace-nowrap py-5">
                @foreach($benefit_class_journey as $benefit)
                    <div class="min-w-80 p-2 rounded-lg bg-white flex justify-start items-center gap-4 shadow-lg">
                        <div class="size-16 lg:size-20 p-2 rounded-full bg-primary flex items-center justify-center">
                            <img src="{{ asset('assets/images/landing/asset-kelas/berbinar-plus/' . $benefit['image']) }}"
                                 alt="icon"
                                 class="w-full h-full object-contain object-center" />
                        </div>
                        <span>{{ $benefit['name'] }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- FAQS START --}}
    <section class="z-10 mx-4 lg:my-14 sm:mx-20">
        <ul class="flex flex-col">
            @php
                $index = 0;
            @endphp

            @foreach ($faqs as $faq)
                <li
                    class="my-2 rounded-lg border bg-white py-2 shadow-sm"
                    x-data="accordion({{ $index }})"
                    :class="isActive()"
                >
                    <div class="mx-2 flex flex-row sm:mx-5">
                        <div class="flex w-full flex-col p-3 max-sm:p-2">
                            <h2
                                @click="handleClick()"
                                class="cursor-pointer text-lg font-medium max-sm:text-[16.5px]"
                            >
                                <span>{{ $faq["question"] }}</span>
                            </h2>
                            <div
                                x-ref="tab"
                                :style="handleToggle()"
                                class="max-h-0 overflow-hidden transition-all duration-500"
                            >
                                <p
                                    class="mt-3 text-justify text-[#6F6C90] max-sm:mt-2 max-sm:text-[15px]"
                                >
                                    {{ $faq["answer"] }}
                                </p>
                            </div>
                        </div>

                        <div class="ml-6 hidden items-center sm:flex">
                            <template x-if="$store.accordion.tab === idx">
                                <svg
                                    width="20"
                                    height="20"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M20 20L4 4M20 4L4 20"
                                        stroke="#3986A3"
                                        stroke-width="3"
                                        stroke-linecap="round"
                                    />
                                </svg>
                            </template>
                            <template x-if="$store.accordion.tab !== idx">
                                <svg
                                    width="20"
                                    height="20"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <g clip-path="url(#clip0_7503_13741)">
                                        <path
                                            d="M22.3996 8L11.9996 19.2L1.59961 8"
                                            stroke="#3986A3"
                                            stroke-width="3"
                                            stroke-linecap="square"
                                        />
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
                    this.$store.accordion.tab =
                        this.$store.accordion.tab === this.idx ? 0 : this.idx;
                },
                handleRotate() {
                    return this.$store.accordion.tab === this.idx ? 'rotate-180' : '';
                },
                handleToggle() {
                    return this.$store.accordion.tab === this.idx
                        ? `max-height: ${this.$refs.tab.scrollHeight}px`
                        : '';
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

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        Swal.fire({
            imageUrl: '/assets/images/landing/asset-kelas/class-journey/poster-maret.png',
            imageAlt: 'Poster Class Journey',
            imageWidth: '100%',
            showCloseButton: true,
            showConfirmButton: false,
            background: '#fff',
            customClass: {
                popup: 'shadow-lg',
            }
        });
    });
</script>
