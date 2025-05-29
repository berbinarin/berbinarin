@extends('landing.layouts.app', [
    'title' => 'Berbinar Insightful Indonesia',
    'active' => 'Produk Berbinar',
    'page' => 'Kelas',
])

@section('content')
{{-- HERO SECTION --}}
<section class="relative max-md:overflow-hidden">
    <div class="absolute left-0 top-5 max-sm:top-32 z-0 ">
        <img src="{{ asset('assets/images/landing/asset-konseling/vector/vector-hero1.svg') }}" alt="Vector" class="h-[500px] max-sm:h-[250px] w-auto">
    </div>

    <div class="absolute right-0 max-sm:-right-20 max-md:-right-28 top-8 max-sm:top-40 z-0 ">
        <img src="{{ asset('assets/images/landing/asset-konseling/vector/vector-hero2.svg') }}" alt="Vector" class="h-[500px] max-sm:h-[250px] w-auto">
    </div>

    <div class="relative">
        <div class="flex flex-row justify-between items-center mt-40 max-sm:mt-32 mx-20 max-sm:mx-4 gap-x-10 z-10">
            <div class="flex flex-col flex-1 space-y-6 max-sm:space-y-2 max-w-xl max-lg:min-w-auto">
                <a href="{{ route('product.index') }}">
                    <div class="flex lg:order-1 items-center space-x-2 cursor-pointer">
                        <img src="{{ asset('assets/images/landing/asset-konseling/vector/left-arrow.svg') }}" alt="Left Arrow" class="h-3 w-auto">
                        <p class="text-[15px] font-semibold text-[#3986A3]">Produk Berbinar</p>
                    </div>
                </a>

                <div class="hidden max-md:flex max-lg:flex-none items-center justify-center w-full lg:w-auto lg:order-2">
                    <img src="{{ asset('assets/images/landing/asset-kelas/hero.png') }}" alt="Class" class="h-[340px] max-sm:h-[320px] w-auto object-contain">
                </div>

                <div class="lg:order-3">
                    <h2 class="text-5xl max-sm:text-3xl font-bold text-gradient py-2">Berbinar Class</h2>
                </div>

                <div class="lg:order-4">
                    <p class="text-[#70787D] text-justify max-sm:leading-normal max-sm:text-[15px] text-lg max-lg:text-[17px]">
                        Layanan yang bertujuan untuk membantu suatu perusahaan/komunitas/organisasi yang berkaitan dengan Sumber Daya Manusia.
                        Layanan ini menekankan pada proses consulting oleh Human Resource yang berpengalaman agar pengetahuan yang diberikan dapat diterima dan dimengerti dengan baik oleh klien.
                    </p>
                </div>
            </div>

            <div class="flex max-md:hidden flex-initial max-lg:flex-1 items-center justify-center w-full lg:w-auto">
                <img src="{{ asset('assets/images/landing/asset-kelas/hero.png') }}" alt="Class" class="h-[340px] max-lg:h-[320px] w-auto object-contain">
            </div>
        </div>
    </div>
</section>

{{-- PRODUK KELAS --}}
<section class="mt-10 relative w-full mb-12">
    <div class="absolute top-4 max-sm:top-40 left-0 z-0">
        <img src="/assets/images/landing/asset-konseling/vector/vector-line.svg" alt="Vector Image" class="">
    </div>

    <h2 class="max-sm:text-[29px] text-4xl font font-semibold text-black text-center mt-14 max-sm:mx-2 mx-20 relative z-10">Pilihan Terbaik Produk Kelas <span class="bg-primary text-white px-2 ">Berbinar</span></h2>
    <div class="swiperContainer">
        <div class="swiper relative z-10" id="swiperKelas">
            <div class="swiper-wrapper max-sm:pb-8 pb-1">
                @foreach ($products as $product)
                <div class="swiper-slide">
                    <div class="bg-white rounded-3xl shadow-md flex flex-col justify-center items-center h-auto w-auto max-sm:max-w-[240px] max-sm:max-h-[355px]">
                        <div class="bg-gradient-to-b from-[#75BADB] to-[#AFCFDA] flex justify-center py-7 max-sm:py-5 rounded-t-3xl w-full">
                            <img src="{{ asset($product['vector']) }}" alt="{{ $product['produk'] }}" class="max-sm:h-[110px] h-32 w-auto">
                        </div>

                        <div class="max-sm:px-3 px-4 max-sm:py-3 py-4 text-center flex flex-col flex-grow">
                            <h2 class="max-sm:text-[15px] text-md font-semibold text-black items-center justify-center flex">{{ $product['produk'] }}</h2>
                            <p class="max-sm:mt-2 mt-3 max-sm:text-[15px] text-md text-[#70787D] flex-grow max-sm:min-h-[90px] min-h-[96px]">
                                {{ $product['deskripsi'] }}
                            </p>
                            @php
                                $href = $product['route'] !== '#' && Route::has($product['route']) ? route($product['route']) : '#';
                            @endphp
                            <a href="{{ $href }}"
                               class="max-sm:mt-4 mt-6 bg-[#75BADB] text-white rounded-full max-sm:w-full text-[18px] font-semibold text-sm px-4 py-2 shadow self-center">
                                Pelajari Selengkapnya
                            </a>
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

{{--peserta program kelas--}}
<section class="w-full px-4 sm:px-14 py-8">
    {{--title--}}
    <h2 class="text-center mx-auto py-4 font-bold text-2xl lg:text-3xl lg:max-w-3xl text-black mb-4 lg:leading-10">Siapa saja yang bisa dapat mengikuti program-program Kelas <span class="bg-primary text-white px-2">Berbinar</span></h2>
    <div class="flex flex-wrap justify-center items-center py-2 gap-x-2 gap-y-4 lg:max-w-screen-lg mx-auto">
        @foreach($participants as $participant)
            <div class="flex gap-2 items-center py-1 px-2 bg-primary rounded-full text-start text-white font-semibold">
                <span class="w-8 h-8 rounded-full shadow-xl bg-white flex items-center justify-center text-black text-sm lg:text-lg">
                    {{ $participant['icon'] }}
                </span>
                <p class="text-xs md:text-base">{{ $participant['name'] }}</p>
            </div>
        @endforeach
    </div>

</section>

{{-- FAQS --}}
<section class="z-10 mx-4 max-md:mt-10 my-14 sm:mx-20">
    <ul class="flex flex-col">
        @php
            $index = 0;
        @endphp
        @foreach ($faqs as $faq)
            <li class="border bg-white py-2 shadow-sm rounded-lg my-2" x-data="accordion({{ $index }})" :class="isActive()">
                <div class="flex flex-row mx-2 sm:mx-5">
                    <div class="flex flex-col w-full p-3 max-sm:p-2">
                        <h2 @click="handleClick()" class="font-medium cursor-pointer text-lg max-sm:text-[16.5px]">
                            <span>{{ $faq['question'] }}</span>
                        </h2>
                        <div x-ref="tab" :style="handleToggle()" class="overflow-hidden max-h-0 duration-500 transition-all">
                            <p class="mt-3 max-sm:mt-2 text-[#6F6C90] text-justify max-sm:text-[15px]">{{ $faq['answer'] }}</p>
                        </div>
                    </div>

                    <div class="items-center ml-6 hidden sm:flex">
                        <template x-if="$store.accordion.tab === idx">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20 20L4 4M20 4L4 20" stroke="#3986A3" stroke-width="3" stroke-linecap="round"/>
                            </svg>
                        </template>
                        <template x-if="$store.accordion.tab !== idx">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_7503_13741)">
                                <path d="M22.3996 8L11.9996 19.2L1.59961 8" stroke="#3986A3" stroke-width="3" stroke-linecap="square"/></g><defs><clipPath id="clip0_7503_13741"><rect width="24" height="24" fill="white"/></clipPath></defs>
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
    <div class="bg-[#3986A3] hover:bg-[#3986A3]/80 text-white p-2 lg:p-4 size-12 lg:size-16 rounded-full shadow-xl flex items-center justify-center">
        <img src="{{asset('assets/images/landing/asset-beranda/sosmed-icon/whatsapp.png')}}" alt="whatsapp icon" class="object-cover">
    </div>
    </a>
</div>

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
@endsection
