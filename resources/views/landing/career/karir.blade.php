@extends(
    "landing.layouts.app",
    [
        "title" => "Berbinar Insightful Indonesia",
        "active" => "Karir",
        "page" => "Karir",
    ]
)

@section("content")

    {{-- HERO START --}}
    <section class="relative mb-12 mt-24 w-full overflow-x-hidden">
        {{-- hexagon texture atas --}}
        <div class="absolute left-0 top-0 hidden h-fit md:block md:w-1/3 lg:w-1/5">
            <img
                src="{{ asset("assets/images/landing/karir/hexagon-texture.png") }}"
                alt="top-left-texture"
                class="object-cover"
            />
        </div>
        {{-- hexagon texture bawah --}}
        <div class="absolute bottom-0 right-0 hidden h-fit rotate-180 md:block md:w-1/3 lg:w-1/5">
            <img
                src="{{ asset("assets/images/landing/karir/hexagon-texture.png") }}"
                alt="top-left-texture"
                class="object-cover"
            />
        </div>

        <div class="mx-auto md:mx-14 md:pt-14 3xl:pt-6">
            <div class="w-full text-center md:flex md:flex-wrap md:items-center md:justify-center">
                {{-- image atas --}}
                <div class="flex w-full items-center justify-center px-4 md:hidden">
                    <img
                        src="{{ asset("assets/images/landing/karir/mobile-hexagon-top.png") }}"
                        class="max-h-36 object-cover"
                    />
                </div>

                {{-- tulisan --}}
                <div class="md:z-10 md:w-1/2 md:items-start md:justify-start md:text-start">
                    {{-- judul --}}
                    <div class="mb-2 md:mb-8">
                        <h1
                            class="mb-4 bg-gradient-to-r from-[#1C4352] to-[#3986A3] bg-clip-text py-1 font-[inter] text-4xl font-semibold text-transparent lg:text-5xl lg:tracking-wide"
                        >
                            Gabung & Jadilah
                            <span class="block"></span>
                            Bagian dari Berbinar!
                        </h1>
                    </div>
                    {{-- button --}}
                    <a
                        href="{{ route("career.positions.index") }}"
                        class="mx-auto flex h-12 w-fit items-center justify-center rounded-lg bg-gradient-to-tr from-[#F7B23B] to-[#AD7D29] px-4 py-2 text-center text-lg text-white transition duration-300 hover:opacity-80 hover:shadow-lg md:mx-0 lg:text-xl"
                    >
                        Lihat Posisi Tersedia
                    </a>
                </div>

                {{-- hexagon banner --}}
                <div class="relative z-20 hidden md:flex md:w-1/2 lg:w-fit">
                    <img
                        src="{{ asset("assets/images/landing/karir/hexa-banner-rev-20-04-2025.png") }}"
                        alt="hexagon banner"
                        class="h-96 3xl:h-[600px]"
                    />
                </div>

                {{-- image bawah --}}
                <div class="flex w-full items-center justify-center px-4 md:hidden">
                    <img
                        src="{{ asset("assets/images/landing/karir/mobile-hexagon-bottom.png") }}"
                        class="max-h-36 object-cover"
                    />
                </div>
            </div>
        </div>
    </section>
    {{-- HERO END --}}

    {{-- profile slider [component] --}}
    <section class="w-full overflow-hidden">
        <div class="mx-auto w-full">
            <div class="flex gap-1">
                {{-- profile slider component --}}
                <x-karir-new.profile-slider :listImage="$list_image" />
            </div>
        </div>
    </section>
    {{-- profile slider --}}

    {{-- ALUR PENDAFTARAN START --}}
    <section class="mx-auto mt-16 flex w-full items-center justify-center overflow-hidden lg:mt-32">
        <div class="container mx-auto md:mx-14">
            {{-- caption --}}
            <div class="mb-12 md:mb-32">
                <h1
                    class="mb-4 bg-gradient-to-r from-[#1C4352] to-[#3986A3] bg-clip-text py-3 text-center font-plusJakartaSans text-3xl font-semibold text-transparent md:text-4xl lg:text-5xl lg:tracking-wide"
                >
                    Alur Pendaftaran
                    <span class="block md:inline-block"></span>
                    Magang
                </h1>
            </div>
            {{-- flex alur pendaftara component --}}
            <x-karir-new.alur-pendaftaran />
        </div>
    </section>
    {{-- ALUR PENDAFTARAN END --}}

    {{-- YOUR BENEFIT START --}}
    <section class="mx-auto mt-16 flex w-full items-center justify-center overflow-hidden lg:mt-32">
        <div class="container mx-auto md:mx-14">
            {{-- captions --}}
            <div class="mb-12 md:mb-32">
                <h1
                    class="mb-4 bg-gradient-to-r from-[#1C4352] to-[#3986A3] bg-clip-text py-1 text-center font-plusJakartaSans text-3xl font-semibold text-transparent md:text-4xl lg:text-5xl lg:tracking-wide"
                >
                    Manfaat Bergabung di Berbinar
                </h1>
            </div>
            {{-- grid benefit --}}
            <x-karir-new.benefit-magang />
        </div>
    </section>
    {{-- YOUR BENEFIT END --}}

    {{-- AVAIABLE POSITIONS START --}}
    <section class="mx-auto mt-16 flex w-full items-center justify-center lg:mt-32">
        <div class="container mx-auto md:mx-14">
            {{-- caption START --}}
            <div class="mx-auto mb-4 w-full md:mb-8">
                <h2
                    class="mb-4 bg-gradient-to-r from-[#1C4352] to-[#3986A3] bg-clip-text py-1 text-center font-plusJakartaSans text-3xl font-semibold text-transparent md:text-4xl lg:text-5xl lg:tracking-wide"
                >
                    Posisi Tersedia
                </h2>
            </div>
            {{-- caption END --}}

            {{-- list START --}}
            <div
                class="mx-auto flex w-full flex-wrap items-center justify-center gap-x-8 gap-y-12 border-orange-500 py-12"
            >
                @forelse ($positions->take($positions->count() / 2)->chunk(ceil($positions->count() / 2)) as $chunk)
                    @foreach ($chunk as $position)
                        {{-- card start --}}
                        <div
                            id="{{ $position->id }}"
                            class="w-72 flex-col rounded-xl bg-white p-2 shadow-benefit-icon"
                        >
                            {{-- banner start --}}
                            <div class="relative mb-8 h-24 w-full md:mb-4 md:h-32">
                                {{-- image-banner start --}}
                                <div class="h-full w-full overflow-hidden rounded-t-lg">
                                    @php
                                        if (isset($position)) {
                                            $imageName = $position->name === "UI/UX Designer" ? "UIUX Designer" : $position->name;
                                        }
                                    @endphp

                                    <img
                                        src="{{ asset("assets/images/landing/karir/banner/" . $imageName . ".jpg") }}"
                                        alt="1"
                                        class="h-full w-full object-cover"
                                    />
                                </div>
                                {{-- image-banner end --}}
                                <img
                                    src="{{ asset("assets/images/landing/logo-berbinar.png") }}"
                                    alt="berbinar logo"
                                    class="absolute -bottom-5 right-4 z-20 size-10 rounded-full bg-white shadow-primary-light"
                                />
                            </div>
                            {{-- banner end --}}

                            {{-- md:status start --}}
                            <div class="mb-4 hidden w-full items-start md:flex">
                                <div
                                    class="flex items-center justify-center rounded-full bg-[#F7B23B4D] px-2 py-1 shadow-magang"
                                >
                                    <span class="self-center text-xs font-normal text-[#ED810D]">
                                        {{ $position->type === "Internship" ? "Magang" : $position->type }}
                                    </span>
                                </div>
                            </div>
                            {{-- md:status end --}}

                            {{-- caption start --}}
                            <div class="mb-8 w-full md:mb-4">
                                <h3
                                    class="h-10 text-center font-inter text-base font-normal text-black md:text-start"
                                >
                                    {{ $position->name }}
                                </h3>
                            </div>
                            {{-- caption end --}}

                            {{-- md:remote start --}}
                            <div class="mb-4 hidden w-full md:flex md:items-start">
                                <span class="text-xs font-normal italic text-remote">
                                    <img
                                        src="{{ asset("assets/images/landing/karir/remote.png") }}"
                                        alt="remote icon"
                                        class="inline-block size-4"
                                    />
                                    {{ $position->location }}
                                </span>
                            </div>
                            {{-- md:remote end --}}

                            {{-- button start --}}
                            <div class="mb-4 flex w-full items-center justify-center md:mb-1">
                                <a
                                    href="{{ route("career.positions.detail", $position->id) }}"
                                    class="w-3/4 rounded-lg bg-primary px-2 py-2 text-center text-sm font-normal text-white hover:opacity-80 hover:shadow-lg md:w-full"
                                >
                                    Lihat Selengkapnya
                                </a>
                            </div>
                            {{-- button end --}}

                            {{-- short detail start --}}
                            <div class="mb-2 flex w-full items-center justify-center md:hidden">
                                <span class="text-xs font-normal italic text-remote">
                                    <img
                                        src="{{ asset("assets/images/landing/karir/remote.png") }}"
                                        alt="remote icon"
                                        class="inline-block size-4"
                                    />
                                    {{ $position->location }}
                                </span>
                                <div
                                    class="ms-2 flex items-center justify-center rounded-full bg-[#F7B23B4D] px-2 py-1 shadow-magang"
                                >
                                    <span class="self-center text-xs font-normal text-[#ED810D]">
                                        {{ $position->type === "Internship" ? "Magang" : $position->type }}
                                    </span>
                                </div>
                            </div>
                            {{-- short detail end --}}
                        </div>
                        {{-- card start --}}
                    @endforeach
                @empty
                    <!-- Handle empty positions -->
                @endforelse
            </div>
            {{-- list END --}}

            {{-- posissi lainnya start --}}
            <div class="flex w-full items-center justify-center py-4">
                <a
                    href="{{ route("career.positions.index") }}"
                    class="rounded-xl bg-gradient-to-r from-[#3986A3] to-[#15323D] px-12 py-3 font-plusJakartaSans text-base font-normal tracking-wide text-white hover:opacity-70 hover:shadow-lg md:px-16 md:text-lg"
                >
                    Posisi Lainnya
                </a>
            </div>
            {{-- posissi lainnya end --}}
        </div>
    </section>
    {{-- AVAIABLE POSITIONS END --}}

    {{-- TESTIMONI MAGANG START --}}
    <section class="mx-auto mt-16 flex w-full items-center justify-center lg:mt-32">
        <div class="container mx-auto md:mx-14">
            {{-- caption START --}}
            <div class="mx-auto mb-10 w-full md:mb-16">
                <h2
                    class="mb-4 bg-gradient-to-r from-[#1C4352] to-[#3986A3] bg-clip-text py-1 text-center font-plusJakartaSans text-3xl font-semibold tracking-wide text-transparent md:text-4xl md:tracking-normal lg:text-5xl lg:tracking-wide"
                >
                    Kata Mereka Tentang Magang di Berbinar
                </h2>
            </div>
            {{-- caption END --}}

            {{-- testimoni irul --}}
            <div class="swiperContainer px-4 sm:px-0">
                <div class="swiper" id="swiperTestimoniKarir">
                    <div class="swiper-wrapper pb-12">
                        @foreach ($testimonis as $testimoni)
                            <div class="swiper-slide">
                                <div
                                    class="relative h-96 w-full max-w-sm rounded-3xl bg-white px-4 pb-2 pt-4 shadow-md md:h-[480px]"
                                >
                                    <img
                                        src="{{ asset("assets/images/landing/vector-kutip.png") }}"
                                        alt="Kutip"
                                        class="mx-auto mb-4 block h-8 w-auto max-sm:h-7"
                                    />

                                    <div class="py-4 text-center">
                                        <p
                                            class="line-clamp-6 text-justify text-sm font-medium text-black xl:line-clamp-[11]"
                                        >
                                            "{{ $testimoni["comment"] }}"
                                        </p>
                                    </div>

                                    <div class="absolute bottom-4 left-1/2 w-full -translate-x-1/2">
                                        <img
                                            src="{{ asset($testimoni["image"]) }}"
                                            alt="Kutip"
                                            class="mx-auto -mt-3 mb-4 h-[70px] w-[70px] rounded-full object-cover max-sm:h-[62px] max-sm:w-[62px]"
                                        />
                                        <p
                                            class="mx-auto mb-2 block text-center text-base font-semibold text-black"
                                        >
                                            {{ $testimoni["name"] }}
                                        </p>
                                        <p class="mx-auto block text-center text-sm text-[#70787D]">
                                            {{ $testimoni["division"] }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            {{-- testimoni irul --}}
        </div>
    </section>
    {{-- TESTIMONI MAGANG END --}}

    {{-- FAQS START --}}
    <section class="z-10 mx-4 my-14 mt-16 sm:mx-20">
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

    {{-- BANNER KELUARGA BERBINAR START --}}
    <section class="mx-auto mb-12 flex w-full items-center justify-center px-2 md:px-16">
        <a href="{{ route("career.keluarga_berbinar.index") }}">
            <div class="cursor-pointer">
                <img
                    src="{{ asset("assets/images/landing/karir/banner-keluarga-berbinar.png") }}"
                    alt="banner keluarga berbinar"
                    class="object-cover"
                />
            </div>
        </a>
    </section>
    {{-- BANNER KELUARGA BERBINAR END --}}

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
