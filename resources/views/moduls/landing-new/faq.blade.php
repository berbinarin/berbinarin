@extends('layouts.main-new', [
    'title' => 'Berbinar Insightful Indonesia',
    'active' => 'Beranda',
    'page' => 'FAQ',
])

@section('content')
<style>
    .border-active {
        border: 1.5px solid #3986A3
    }
</style>


<h1 class="max-sm:text-[29px] max-md:mx-10 text-4xl font font-semibold text-black text-center mt-28 sm:mt-36 max-sm:mx-2"><span class="italic">Frequently Asked Questions </span><span class="bg-primary text-white px-1 py-1">(FAQ)</span></h1>
{{-- FAQS --}}
<section class="z-10 mx-4 my-10 max-sm:my-5 sm:mx-20">
    <ul class="flex flex-col">
        {{-- FAQ 1 --}}
        <li class="border bg-white py-2 shadow-sm rounded-lg my-2" x-data="accordion(0)" :class="isActive()">
            <div class="flex flex-row mx-2 sm:mx-5">
                <div class="flex flex-col w-full p-3 max-sm:p-2">
                    <h2 @click="handleClick()" class="font-medium cursor-pointer text-lg max-sm:text-[16.5px]">
                        <span>Apa saja programnya?</span>
                    </h2>
                    <div x-ref="tab" :style="handleToggle()" class="overflow-hidden max-h-0 duration-500 transition-all">
                        <p class="mt-3 max-sm:mt-2 text-[#6F6C90] text-justify max-sm:text-[15px]">
                            Ada tiga yang menjadi unggulan di Berbinar yaitu <span class="text-[#3986A3] font-bold">psikotes</span>, <span class="text-[#3986A3] font-bold">konseling</span>, dan <span class="text-[#3986A3] font-bold italic">class</span>. Jika SobatBinar yang membutuhkan bantuan konseling psikologis, <span class="italic">mentoring</span> ataupun psikotes untuk persiapan menuju dunia kerja, bisa segera menghubungi Berbinar di <a href="https://wa.me/628214186980" class="font-bold">0821-4186-980</a>
                        </p>
                    </div>
                </div>

                <div class="items-center ml-6 hidden sm:flex">
                    <template x-if="$store.accordion.tab === 0">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 20L4 4M20 4L4 20" stroke="#3986A3" stroke-width="3" stroke-linecap="round"/>
                        </svg>   
                    </template>
                    <template x-if="$store.accordion.tab !== 0">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_7503_13741)">
                            <path d="M22.3996 8L11.9996 19.2L1.59961 8" stroke="#3986A3" stroke-width="3" stroke-linecap="square"/></g><defs><clipPath id="clip0_7503_13741"><rect width="24" height="24" fill="white"/></clipPath></defs>
                        </svg>                                
                    </template>
                </div>
            </div>
        </li>

        {{-- FAQ 2 --}}
        <li class="border bg-white py-2 shadow-sm rounded-lg my-2" x-data="accordion(1)" :class="isActive()">
            <div class="flex flex-row mx-2 sm:mx-5">
                <div class="flex flex-col w-full p-3 max-sm:p-2">
                    <h2 @click="handleClick()" class="font-medium cursor-pointer text-lg max-sm:text-[16.5px]">
                        <span>Apakah privasi terjamin aman dan dirahasiakan kak?</span>
                    </h2>
                    <div x-ref="tab" :style="handleToggle()" class="overflow-hidden max-h-0 duration-500 transition-all">
                        <p class="mt-3 max-sm:mt-2 text-[#6F6C90] text-justify max-sm:text-[15px]">
                            Tentu saja! Berbinar menghargai penuh privasi dan data diri SobatBinar sesuai kode etik psikologi Indonesia, jadi jangan khawatir ya! Tunggu apalagi? Yuk, daftar sekarang SobatBinar! 
                        </p>
                    </div>
                </div>

                <div class="items-center ml-6 hidden sm:flex">
                    <template x-if="$store.accordion.tab === 1">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 20L4 4M20 4L4 20" stroke="#3986A3" stroke-width="3" stroke-linecap="round"/>
                        </svg>   
                    </template>
                    <template x-if="$store.accordion.tab !== 1">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_7503_13741)">
                            <path d="M22.3996 8L11.9996 19.2L1.59961 8" stroke="#3986A3" stroke-width="3" stroke-linecap="square"/></g><defs><clipPath id="clip0_7503_13741"><rect width="24" height="24" fill="white"/></clipPath></defs>
                        </svg>                                
                    </template>
                </div>
            </div>
        </li>

        {{-- FAQ 3 --}}
        <li class="border bg-white py-2 shadow-sm rounded-lg my-2" x-data="accordion(2)" :class="isActive()">
            <div class="flex flex-row mx-2 sm:mx-5">
                <div class="flex flex-col w-full p-3 max-sm:p-2">
                    <h2 @click="handleClick()" class="font-medium cursor-pointer text-lg max-sm:text-[16.5px]">
                        <span>Bagaimana cara mengajukan kerjasama?</span>
                    </h2>
                    <div x-ref="tab" :style="handleToggle()" class="overflow-hidden max-h-0 duration-500 transition-all">
                        <p class="mt-3 max-sm:mt-2 text-[#6F6C90] text-justify max-sm:text-[15px]">
                            Berbinar terbuka untuk berbagai jenis kerjasama! Kirimkan ide atau proposal melalui <a href="https://wa.me/628214186980" class="font-bold">0821-4186-980</a> atau <a href="mailto:marketing.berbinar.in@gmail.com" class="font-bold">marketing.berbinar.in@gmail.com</a>. Berbinar akan dengan senang hati membahas peluang kerja sama yang bisa menguntungkan kedua belah pihak melalui meeting untuk diskusi selanjutnya. 
                        </p>
                    </div>
                </div>

                <div class="items-center ml-6 hidden sm:flex">
                    <template x-if="$store.accordion.tab === 1">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 20L4 4M20 4L4 20" stroke="#3986A3" stroke-width="3" stroke-linecap="round"/>
                        </svg>   
                    </template>
                    <template x-if="$store.accordion.tab !== 1">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_7503_13741)">
                            <path d="M22.3996 8L11.9996 19.2L1.59961 8" stroke="#3986A3" stroke-width="3" stroke-linecap="square"/></g><defs><clipPath id="clip0_7503_13741"><rect width="24" height="24" fill="white"/></clipPath></defs>
                        </svg>                                
                    </template>
                </div>
            </div>
        </li>
    </ul>
</section>


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
    document.getElementById('openModal').addEventListener('click', function() {
        document.getElementById('modal').classList.remove('hidden');
    });

    document.getElementById('closeModal').addEventListener('click', function() {
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