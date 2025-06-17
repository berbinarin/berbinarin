@extends('landing.layouts.app', [
    'title' => 'Berbinar Insightful Indonesia',
    'active' => 'Karir',
    'page' => 'Positions',
])

@section('content')

    {{--AVAIABLE POSITIONS START--}}
    <section class="w-full pt-32 lg:pt-48 mx-auto flex items-center justify-center">
        <div class="container mx-auto md:mx-14">
            {{--caption START--}}
            <div class="w-full mx-auto mb-8 md:mb-12 lg:mb-16">
                <h1 class="font-semibold text-4xl bg-clip-text text-center md:text-4xl lg:text-5xl text-transparent bg-gradient-to-r from-[#1C4352] to-[#3986A3] font-plusJakartaSans mb-4 lg:tracking-wide py-1">
                    Posisi Tersedia
                </h1>
            </div>
            {{--caption END--}}

            {{--list START--}}
            <div
                class="w-full border-orange-500 pt-4 pb-12 mx-auto flex flex-wrap gap-x-8 gap-y-8 md:gap-y-12 justify-center items-center">
                @foreach ($positions as $position)
                    {{--card start--}}
                    <div class="bg-white rounded-xl shadow-benefit-icon w-72 p-2 flex-col">
                        {{--banner start--}}
                        <div class="w-full h-24 mb-8 relative md:h-32 md:mb-4">
                            {{--image-banner start--}}
                            <div class="w-full h-full rounded-t-lg overflow-hidden">
                                @php
                                    if(isset($position)){
                                        $imageName = ($position->name === 'UI/UX Designer') ? 'UIUX Designer' : $position->name;
                                    }
                                @endphp
                                    <img src="{{ asset('image/' . $position->banner_path) }}" alt="{{ $position->name . ' banner' }}" class="object-cover h-full w-full">
                            </div>
                            {{--image-banner end--}}
                            <img src="{{ asset("assets/images/landing/logo/logo-berbinar.png") }}" alt="berbinar logo"
                                 class="absolute z-20 bg-white size-10 right-4 -bottom-5 rounded-full shadow-primary-light">
                        </div>
                        {{--banner end--}}

                        {{--md:status start--}}
                        <div class="hidden w-full mb-4 md:flex items-start">
                            <div
                                class="py-1 px-2 bg-[#F7B23B4D] rounded-full flex items-center justify-center shadow-magang">
                                    <span
                                        class="font-normal text-xs text-[#ED810D] self-center">{{$position->type === 'Internship' ? 'Magang' : $position->type}}</span>
                            </div>
                        </div>
                        {{--md:status end--}}

                        {{--caption start--}}
                        <div class="w-full mb-8 md:mb-4">
                            <h3 class="font-normal text-base font-inter text-black text-center md:text-start h-10">
                                {{$position->name}}</h3>
                        </div>
                        {{--caption end--}}

                        {{--md:remote start--}}
                        <div class="hidden w-full mb-4 md:flex md:items-start">
                                <span class="font-normal text-xs text-remote italic">
                                    <img src="{{ asset("assets/images/landing/karir/remote.png") }}" alt="remote icon"
                                         class="inline-block size-4">{{$position->location}}
                                </span>
                        </div>
                        {{--md:remote end--}}

                        {{--button start--}}
                        <div class="w-full flex justify-center items-center mb-4 md:mb-1">
                            <a
                                href="{{route('career.positions.detail', $position->id)}}"
                                class="w-3/4 py-2 px-2 rounded-lg bg-primary font-normal text-sm text-white text-center hover:opacity-80 hover:shadow-lg md:w-full">
                                Lihat Selengkapnya
                            </a>
                        </div>
                        {{--button end--}}

                        {{--short detail start--}}
                        <div class="w-full flex items-center justify-center mb-2 md:hidden">
                                <span class="font-normal text-xs text-remote italic">
                                    <img src="{{ asset("assets/images/landing/karir/remote.png") }}" alt="remote icon"
                                         class="inline-block size-4">
                                    {{$position->location}}
                                </span>
                            <div
                                class="py-1 px-2 bg-[#F7B23B4D] rounded-full ms-2 flex items-center justify-center shadow-magang">
                                    <span class="font-normal text-xs text-[#ED810D] self-center">
                                        {{$position->type === 'Internship' ? 'Magang' : $position->type}}
                                    </span>
                            </div>
                        </div>
                        {{--short detail end--}}
                    </div>
                    {{--card start--}}
                @endforeach


            </div>
            {{--list END--}}

        </div>
    </section>
    {{--AVAIABLE POSITIONS END--}}

    {{-- FAQS START --}}
    <section class="z-10 mx-4 mt-16 lg:mt-32 my-14 sm:mx-20">
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
        <a href="{{route('career.keluarga-berbinar.index')}}">
            <div class=" cursor-pointer">
                <img src="{{asset('assets/images/landing/karir/banner-keluarga-berbinar.png')}}"
                     alt="banner keluarga berbinar" class="object-cover">
            </div>
        </a>
    </section>
    {{--BANNER KELUARGA BERBINAR END--}}

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

