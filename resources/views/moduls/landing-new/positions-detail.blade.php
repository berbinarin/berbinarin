@extends('layouts.main-new', [
    'title' => 'Berbinar Insightful Indonesia',
    'active' => 'Karir',
    'page' => 'Positions Details',
])


@section('content')

    {{--    @dd($position)--}}


    {{--job desc start--}}
    <section class="w-full mx-auto mt-24 lg:mt-32 font-inter overflow-hidden">
        {{--banner & CTA start--}}
        <div class="w-full lg:ps-14">
            <div class="mx-auto w-full lg:flex lg:flex-wrap lg:justify-center lg:items-center">
                <div class="w-full p-4 sm:px-16 md:px-14 lg:p-0 relative mb-4 lg:w-1/2 z-20">
                    <div class="w-full rounded-2xl overflow-hidden flex justify-center items-center lg:rounded-3xl">
                        @php
                            if(isset($position)){
                                $imageName = ($position->name === 'UI/UX Designer') ? 'UIUX Designer' : $position->name;
                            }
                        @endphp
                        <img
                            src="{{asset('assets/images/landing/karir/banner/'.$imageName.'.jpg')}}"
                            alt="banner"
                            class="object-cover w-full h-40 sm:h-48 md:h-60 lg:h-64 xl:h-72">
                    </div>
                    <div
                        class="absolute -bottom-2 right-10 rounded-full bg-white sm:right-20 lg:-bottom-6 lg:right-auto lg:left-8">
                        <img src="{{asset('assets/images/landing/logo-berbinar.png')}}" alt="logo berbinar"
                             class="object-cover size-14">
                    </div>
                </div>
                {{--deskripsi pekerjaan badge--}}
                <div class="w-full lg:w-1/2 lg:ps-20">
                    <h1 class="font-semibold text-3xl sm:text-4xl text-center lg:py-2 lg:text-start lg:text-5xl text-transparent bg-clip-text bg-gradient-to-r from-[#FBB03B] to-[#956823] [text-shadow:_0_2px_4px_rgb(0_0_0_/_0.25)] mb-4">
                        {{$position->name}}
                    </h1>
                    <h2 class="font-semibold text-2xl sm:text-3xl text-center lg:text-start lg:text-4xl text-transparent bg-clip-text bg-gradient-to-r from-[#3986A3] to-[#15323D] [text-shadow:_0_2px_4px_rgb(0_0_0_/_0.25)] mb-4">
                        {{$position->divisi}}
                    </h2>
                    <div class="w-full mx-auto mb-8">
                        <img src="{{asset('assets/images/landing/karir/wave-detail.png')}}" alt="wave-detail"
                             class="lg:scale-y-75 lg:scale-x-125 lg:-translate-x-16">
                    </div>

                    <div class="hidden lg:flex lg:items-center lg:justify-start w-full mx-auto">
                        <a
                            href="{{route('hiring.position.detail', $position->id)}}"
                            class="inline-block text-center font-semibold text-lg text-white py-3 px-4 bg-gradient-to-r from-[#FBB03B] to-[#956823] rounded-lg w-full lg:w-3/4 hover:shadow-lg hover:opacity-80">
                            Daftar Sekarang
                        </a>
                    </div>
                </div>
            </div>
        </div>
        {{--banner & CTA end--}}

        {{--description start--}}
        <div class="w-full p-4 md:flex lg:px-20 gap-8 lg:mt-8">
            <div class="w-full mx-auto mb-4">
                <h3 class="font-semibold text-xl sm:text-2xl text-center md:text-start text-transparent bg-clip-text bg-gradient-to-r from-[#3986A3] to-[#15323D] mb-4">
                    Deskripsi Pekerjaan</h3>
                <ul class="mx-auto mb-4 list-decimal list-outside px-8 md:px-5">
                    @foreach ($position -> HiringPositionsJobDescription as $responsibility)
                        <li class="font-normal text-sm mb-2 sm:text-base">{{ $responsibility->job_description}}</li>
                    @endforeach
                </ul>
                <div class="flex lg:hidden lg:items-center lg:justify-start w-full mx-auto px-4 sm:px-10 mb-4">
                    <a
                        href="{{route('hiring.position.detail', $position->id)}}"
                        class="inline-block text-center font-normal text-lg text-white py-3 px-4 bg-gradient-to-r from-[#FBB03B] to-[#956823] rounded-lg w-full lg:w-3/4 hover:shadow-lg hover:opacity-80">
                        Daftar Sekarang
                    </a>
                </div>
            </div>

            <div class="w-full mb-4 rounded-2xl bg-[#E1EFF6] p-4 md:h-1/2 lg:h-auto md:max-w-xs lg:max-w-md">
                <div
                    class="flex gap-2 justify-start items-center font-normal text-sm sm:text-base mb-4 md:mb-6 lg:mb-8">
                    <img
                        src="{{asset("assets/images/landing/karir/banner/detail/icon-location.png")}}"
                        alt="icon-location" class="size-4 sm:size-5"> Surabaya, Indonesia — Remote
                </div>
                <div
                    class="flex gap-2 justify-start items-center font-normal text-sm sm:text-base mb-4 md:mb-6 lg:mb-8 break-all">
                    <img
                        src="{{asset("assets/images/landing/karir/banner/detail/icon-email.png")}}"
                        alt="icon-location"
                        class="size-4 sm:size-5"> humanresource2.berbinar.in@gmail.com
                </div>
                <div
                    class="flex gap-2 justify-start items-center font-normal text-sm sm:text-base mb-4 md:mb-6 lg:mb-8">
                    <img
                        src="{{asset("assets/images/landing/karir/banner/detail/icon-user.png")}}"
                        alt="icon-location"
                        class="size-4 sm:size-5"> {{$position->divisi}}
                </div>
                <div
                    class="flex gap-2 justify-start items-center font-normal text-sm sm:text-base mb-4 md:mb-6 lg:mb-8">
                    <img
                        src="{{asset("assets/images/landing/karir/banner/detail/icon-clock.png")}}"
                        alt="icon-location"
                        class="size-4 sm:size-5"> Remote (WFH/WFA)
                </div>
                <div
                    class="flex gap-2 justify-start items-center font-normal text-sm sm:text-base mb-4 md:mb-6 lg:mb-8">
                    <img
                        src="{{asset("assets/images/landing/karir/banner/detail/icon-bag.png")}}"
                        alt="icon-location"
                        class="size-4 sm:size-5"> Unpaid
                </div>
                <div
                    class="flex justify-center items-center gap-2 center font-normal text-sm sm:text-base text-center px-4">
                    Silakan kirim CV lengkap anda kepada kami
                    untuk melamar posisi ini
                </div>
            </div>

        </div>
        {{--description end--}}

        {{--persyaratan start--}}
        <div class="w-full p-4 lg:px-20">
            <div class="w-full mx-auto mb-4">
                <h3 class="font-semibold text-xl sm:text-2xl md:text-4xl text-center text-transparent bg-clip-text bg-gradient-to-r from-[#3986A3] to-[#15323D] mb-4">
                    Persyaratan</h3>
                <ul class="mx-auto mb-4 list-decimal list-outside px-8 md:px-5">
                    @foreach ($position -> Hiring_Positions_Requirement as $requirement)
                        <li class="font-normal text-sm mb-2 sm:text-base">{{ $requirement->requirement }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        {{--persyaratan end--}}
    </section>
    {{--job desc end--}}

    {{-- FAQS START --}}
    <section class="z-10 mx-4 mt-12 my-14 sm:mx-20">
        <ul class="flex flex-col">
            @php
                $index = 0;
            @endphp
            @foreach ($faqs as $faq)
                <li class="border bg-white py-2 shadow-sm rounded-lg my-2" x-data="accordion({{ $index }})"
                    :class="isActive()">
                    <div class="flex flex-row mx-2 sm:mx-5">
                        <div class="flex flex-col w-full p-3 max-sm:p-2">
                            <h2 @click="handleClick()" class="font-medium cursor-pointer text-lg max-sm:text-[16.5px]">
                                <span>{{ $faq['question'] }}</span>
                            </h2>
                            <div x-ref="tab" :style="handleToggle()"
                                 class="overflow-hidden max-h-0 duration-500 transition-all">
                                <p class="mt-3 max-sm:mt-2 text-[#6F6C90] text-justify max-sm:text-[15px]">{{ $faq['answer'] }}</p>
                            </div>
                        </div>

                        <div class="items-center ml-6 hidden sm:flex">
                            <template x-if="$store.accordion.tab === idx">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20 20L4 4M20 4L4 20" stroke="#3986A3" stroke-width="3"
                                          stroke-linecap="round"/>
                                </svg>
                            </template>
                            <template x-if="$store.accordion.tab !== idx">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_7503_13741)">
                                        <path d="M22.3996 8L11.9996 19.2L1.59961 8" stroke="#3986A3" stroke-width="3"
                                              stroke-linecap="square"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_7503_13741">
                                            <rect width="24" height="24" fill="white"/>
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

    {{--BANNER KELUARGA BERBINAR START--}}
    <section class="w-full lg:mt-12 mx-auto flex items-center justify-center px-2 md:px-16 mb-12">
        <a href="{{route('career.keluarga_berbinar.index')}}">
            <div class=" cursor-pointer">
                <img src="{{asset('assets/images/landing/karir/banner-keluarga-berbinar.png')}}"
                     alt="banner keluarga berbinar" class="object-cover">
            </div>
        </a>
    </section>
    {{--BANNER KELUARGA BERBINAR END--}}

    <script>
        const positionsObj = @json($position);
        console.log(positionsObj);
    </script>

    {{-- SCRIPT ACCORDION FAQS --}}
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
                },
                isActive() {
                    return this.$store.accordion.tab === this.idx ? 'border-active' : '';
                },
            }));
        })
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
        }

        const closeModal = (modal) => {
            const modalClose = document.querySelector(modal);
            modalClose.classList.add('hidden');
            modalin.classList.add('hidden');
            header.classList.add('fixed');
            hero.style.height = '';
        }

        document.querySelectorAll('.openModal').forEach(button => {
            button.addEventListener('click', () => {
                const modalIndex = button.dataset.modalIndex;
                openModal(allModals[modalIndex]);
            });
        });


        document.querySelectorAll('.closeModal').forEach(button => {
            button.addEventListener('click', () => {
                const modalIndex = button.dataset.modalIndex;
                closeModal(allModals[modalIndex]);
            });
        });
    </script>
    {{-- SCRIPT ACCORDION FAQS --}}

@endsection
