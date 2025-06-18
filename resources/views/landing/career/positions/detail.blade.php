@extends(
    "landing.layouts.app",
    [
        "title" => "Berbinar Insightful Indonesia",
        "active" => "Karir",
        "page" => "Positions Details",
    ]
)

@section("content")
    {{-- @dd($position) --}}

    {{-- job desc start --}}
    <section class="mx-auto mt-24 w-full overflow-hidden font-inter lg:mt-32">
        {{-- banner & CTA start --}}
        <div class="w-full lg:ps-14">
            <div class="mx-auto w-full lg:flex lg:flex-wrap lg:items-center lg:justify-center">
                <div class="relative z-20 mb-4 w-full p-4 sm:px-16 md:px-14 lg:w-1/2 lg:p-0">
                    <div class="flex w-full items-center justify-center overflow-hidden rounded-2xl lg:rounded-3xl">
                        @php
                            if (isset($position)) {
                                $imageName = $position->name === "UI/UX Designer" ? "UIUX Designer" : $position->name;
                            }
                        @endphp

                        <img src="{{ asset("assets/images/landing/karir/banner/" . $imageName . ".jpg") }}" alt="banner" class="h-40 w-full object-cover sm:h-48 md:h-60 lg:h-64 xl:h-72" />
                    </div>
                    <div class="absolute -bottom-2 right-10 rounded-full bg-white sm:right-20 lg:-bottom-6 lg:left-8 lg:right-auto">
                        <img src="{{ asset("assets/images/landing/logo/logo-berbinar.png") }}" alt="logo berbinar" class="size-14 object-cover" />
                    </div>
                </div>
                {{-- deskripsi pekerjaan badge --}}
                <div class="w-full lg:w-1/2 lg:ps-20">
                    <h1 class="mb-4 bg-gradient-to-r from-[#FBB03B] to-[#956823] bg-clip-text text-center text-3xl font-semibold text-transparent [text-shadow:_0_2px_4px_rgb(0_0_0_/_0.25)] sm:text-4xl lg:py-2 lg:text-start lg:text-5xl">
                        {{ $position->name }}
                    </h1>
                    <h2 class="mb-4 bg-gradient-to-r from-[#3986A3] to-[#15323D] bg-clip-text text-center text-2xl font-semibold text-transparent [text-shadow:_0_2px_4px_rgb(0_0_0_/_0.25)] sm:text-3xl lg:text-start lg:text-4xl">
                        {{ $position->divisi }}
                    </h2>
                    <div class="mx-auto mb-8 w-full">
                        <img src="{{ asset("assets/images/landing/karir/wave-detail.png") }}" alt="wave-detail" class="lg:-translate-x-16 lg:scale-x-125 lg:scale-y-75" />
                    </div>

                    <div class="mx-auto hidden w-full lg:flex lg:items-center lg:justify-start">
                        <a href="{{ route("career.positions.daftar", $position->id) }}" class="inline-block w-full rounded-lg bg-gradient-to-r from-[#FBB03B] to-[#956823] px-4 py-3 text-center text-lg font-semibold text-white hover:opacity-80 hover:shadow-lg lg:w-3/4">Daftar Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
        {{-- banner & CTA end --}}

        {{-- description start --}}
        <div class="w-full gap-8 p-4 md:flex lg:mt-8 lg:px-20">
            <div class="mx-auto mb-4 w-full">
                <h3 class="mb-4 bg-gradient-to-r from-[#3986A3] to-[#15323D] bg-clip-text text-center text-xl font-semibold text-transparent sm:text-2xl md:text-start">Deskripsi Pekerjaan</h3>
                <ul class="mx-auto mb-4 list-outside list-decimal px-8 md:px-5">
                    @foreach ($position->HiringPositionsJobDescription as $responsibility)
                        <li class="mb-2 text-sm font-normal sm:text-base">{{ $responsibility->job_description }}</li>
                    @endforeach
                </ul>
                <div class="mx-auto mb-4 flex w-full px-4 sm:px-10 lg:hidden lg:items-center lg:justify-start">
                    <a href="{{ route("career.positions.detail", $position->id) }}" class="inline-block w-full rounded-lg bg-gradient-to-r from-[#FBB03B] to-[#956823] px-4 py-3 text-center text-lg font-normal text-white hover:opacity-80 hover:shadow-lg lg:w-3/4">Daftar Sekarang</a>
                </div>
            </div>

            <div class="mb-4 w-full rounded-2xl bg-[#E1EFF6] p-4 md:h-1/2 md:max-w-xs lg:h-auto lg:max-w-md">
                <div class="mb-4 flex items-center justify-start gap-2 text-sm font-normal sm:text-base md:mb-6 lg:mb-8">
                    <img src="{{ asset("assets/images/landing/karir/banner/detail/icon-location.png") }}" alt="icon-location" class="size-4 sm:size-5" />
                    Surabaya, Indonesia — Remote
                </div>
                <div class="mb-4 flex items-center justify-start gap-2 break-all text-sm font-normal sm:text-base md:mb-6 lg:mb-8">
                    <img src="{{ asset("assets/images/landing/karir/banner/detail/icon-email.png") }}" alt="icon-location" class="size-4 sm:size-5" />
                    humanresource2.berbinar.in@gmail.com
                </div>
                <div class="mb-4 flex items-center justify-start gap-2 text-sm font-normal sm:text-base md:mb-6 lg:mb-8">
                    <img src="{{ asset("assets/images/landing/karir/banner/detail/icon-user.png") }}" alt="icon-location" class="size-4 sm:size-5" />
                    {{ $position->divisi }}
                </div>
                <div class="mb-4 flex items-center justify-start gap-2 text-sm font-normal sm:text-base md:mb-6 lg:mb-8">
                    <img src="{{ asset("assets/images/landing/karir/banner/detail/icon-clock.png") }}" alt="icon-location" class="size-4 sm:size-5" />
                    Remote (WFH/WFA)
                </div>
                <div class="mb-4 flex items-center justify-start gap-2 text-sm font-normal sm:text-base md:mb-6 lg:mb-8">
                    <img src="{{ asset("assets/images/landing/karir/banner/detail/icon-bag.png") }}" alt="icon-location" class="size-4 sm:size-5" />
                    Unpaid
                </div>
                <div class="center flex items-center justify-center gap-2 px-4 text-center text-sm font-normal sm:text-base">Silakan kirim CV lengkap anda kepada kami untuk melamar posisi ini</div>
            </div>
        </div>
        {{-- description end --}}

        {{-- persyaratan start --}}
        <div class="w-full p-4 lg:px-20">
            <div class="mx-auto mb-4 w-full">
                <h3 class="mb-4 bg-gradient-to-r from-[#3986A3] to-[#15323D] bg-clip-text text-center text-xl font-semibold text-transparent sm:text-2xl md:text-4xl">Persyaratan</h3>
                <ul class="mx-auto mb-4 list-outside list-decimal px-8 md:px-5">
                    @foreach ($position->Hiring_Positions_Requirement as $requirement)
                        <li class="mb-2 text-sm font-normal sm:text-base">{{ $requirement->requirement }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        {{-- persyaratan end --}}
    </section>
    {{-- job desc end --}}

    {{-- FAQS START --}}
    <section class="z-10 mx-4 my-14 mt-12 sm:mx-20">
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
    <section class="mx-auto mb-12 flex w-full items-center justify-center px-2 md:px-16 lg:mt-12">
        <a href="{{ route("career.keluarga-berbinar.index") }}">
            <div class="cursor-pointer">
                <img src="{{ asset("assets/images/landing/karir/banner-keluarga-berbinar.png") }}" alt="banner keluarga berbinar" class="object-cover" />
            </div>
        </a>
    </section>
    {{-- BANNER KELUARGA BERBINAR END --}}

    <script>
        const positionsObj = @json($position);
        console.log(positionsObj);
    </script>

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
