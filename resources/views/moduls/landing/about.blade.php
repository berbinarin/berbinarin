@extends('layouts.main', [
    'title' => 'Tentang Kami - Berbinar Insightful Indonesia',
    'active' => 'Tentang Kami',
    'page' => 'Tentang Kami',
])

@section('content')
    {{-- HERO SECTION --}}
    <section
        class="max-w-6xl mx-auto h-screen flex flex-col md:flex-row items-center justify-center relative px-5 md:px-0 mt-28 md:mt-10">
        {{-- HERO IMG MOBILE --}}
        <img src="{{ asset('assets/images/logo-berbinar.png') }}" alt="Logo Berbinar" title="Logo Berbinar"
            class="w-[300px] block md:hidden" data-aos="fade-up" data-aos-duration="1500">

        {{-- HERO CONTENT --}}
        <div class="relative flex items-center mt-10 md:mt-0">
            <div class="bg-blur-bg rounded-[700px] blur-[55px] w-[300px] md:w-[600px] h-[250px] md:h-[600px] absolute">
            </div>
            <div class="flex flex-col gap-5 z-40 relative text-center md:text-left items-center md:items-start">
                <h1 class="font-semibold text-black text-[40px] md:text-[64px] leading-[100%] md:leading-[120%]">
                    Tentang <span class="text-primary font-bold">Berbinar</span>
                </h1>
                <p class="text-lg text-disabled">Berbinar bergerak dalam edukasi dan layanan psikologi yang memberikan jasa dalam kelas seminar, workshop, training secara daring, serta konseling, dan psikotes.</p>
                <a href="#visiMisi"
                    class="text-lg text-white bg-primary-alt rounded-md hover:bg-primary duration-700 px-5 py-2 w-fit">Kenali
                    Kami Lebih Lanjut</a>
            </div>
        </div>

        {{-- HERO IMG DESKTOP --}}
        <img src="{{ asset('assets/images/logo-berbinar.png') }}" alt="Logo Berbinar" title="Logo Berbinar"
            class="w-[500px] hidden md:block" data-aos="fade-left" data-aos-duration="1500">
    </section>

    {{-- VISI MISI SECTION --}}
    <section class="max-w-6xl mx-5 md:mx-auto md:px-0 flex flex-col md:flex-row-reverse md:gap-10 md:items-center md:-mt-28"
        id="visiMisi">
        {{-- VISI MISI CONTENT --}}
        <div class="flex flex-col gap-5 z-40">
            <h1 class="text-black fomt-semibold text-3xl px-5 md:px-0 text-center md:text-left">
                Visi & Misi <span class="text-primary font-bold">Berbinar</span>
            </h1>
            <ul class="flex flex-col">
                <li class="border bg-white py-2 shadow-sm rounded-lg my-2" x-data="accordion(1)">
                    <h2 @click="handleClick()"
                        class="flex flex-row justify-between items-center font-medium p-3 cursor-pointer text-lg">
                        <span>Visi</span>
                        <svg :class="handleRotate()"
                            class="fill-[#3986a3] text-[#3986a3] h-6 w-6 transform transition-transform duration-500"
                            viewBox="0 0 20 20">
                            <path
                                d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                            </path>
                        </svg>
                    </h2>
                    <div x-ref="tab" :style="handleToggle()"
                        class="border-l-2 border-[#3986a3] overflow-hidden max-h-0 duration-500 transition-all">
                        <p class="p-3 text-gray-900">
                            Terdepan dalam menyediakan layanan psikologi yang berkualitas, berintegritas, dan mudah diakses oleh seluruh kalangan masyarakat.
                        </p>
                    </div>
                </li>
                <li class="border bg-white py-2 shadow-sm border-[#3986a3] rounded-lg my-2" x-data="accordion(2)">
                    <h2 @click="handleClick()"
                        class="flex flex-row justify-between items-center font-medium p-3 cursor-pointer text-lg">
                        <span>Misi</span>
                        <svg :class="handleRotate()"
                            class="fill-[#3986a3] text-[#3986a3] h-6 w-6 transform transition-transform duration-500"
                            viewBox="0 0 20 20">
                            <path
                                d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                            </path>
                        </svg>
                    </h2>
                    <div class="border-l-2 border-[#3986a3] overflow-hidden max-h-0 duration-500 transition-all"
                        x-ref="tab" :style="handleToggle()">
                        <p class="p-3 text-gray-900">
                            • Memberikan layanan terstandar berkualitas tinggi yang sesuai dengan kebutuhan customer.<br>
                            • Mengembangkan produk psikologi yang berlandaskan Kode Etik Psikologi Indonesia dan dijalankan oleh sumber daya manusia yang berintegritas.<br>
                            • Menciptakan akses layanan yang mudah dijangkau oleh seluruh lapisan masyarakat dengan harga yang bersaing.
                        </p>
                    </div>
                </li>
            </ul>
        </div>

        {{-- VISI MISI IMG DESKTOP --}}
        <img src="{{ asset('assets/images/ilustrasi-hiring.png') }}" alt="Ilustrasi Logo Berbinar"
            title="Ilustrasi Logo Berbinar" class="w-[500px] hidden md:block" data-aos="fade-right"
            data-aos-duration="1500">
    </section>

    {{-- VALUES SECTION --}}
    <section class="max-w-6xl mx-auto flex flex-col gap-10 z-40">
        <h1 class="text-black fomt-semibold text-3xl px-5 md:px-0 text-center">
            Nilai <span class="text-primary font-bold">Berbinar</span>
        </h1>

        <div class="flex flex-col md:flex-row flex-wrap gap-5 md:gap-3 items-center justify-center mx-5 md:mx-0">
            @foreach ($values as $value)
                <div
                    class="flex items-center justify-center bg-gradient-to-r from-primary flex-col w-full py-7 md:py-0 md:w-[250px] md:h-[250px] to-[#75BADB] rounded-xl text-center px-2">
                    <h1 class="text-white fomt-semibold px-5 md:px-0 text-2xl">
                        {{ $value['name'] }}
                    </h1>
                    <p class="text-white px-7 md:px-0 text-center text-base">
                        {{ $value['desc'] }}
                    </p>
                </div>
            @endforeach
        </div>
    </section>

    {{-- TESTIMONIALS SECTION --}}
    <section class="max-w-6xl mx-auto flex-col gap-10 z-40 mt-12 hidden md:flex">
        <h1 class="text-black fomt-semibold text-3xl px-5 md:px-0 text-center">
            Apa Yang Mereka Katakan Tentang <span class="text-primary font-bold">Berbinar</span>
        </h1>

        <div
            class="flex-1 xl:mx-8 swiper mySwiper max-w-7xl md:w-full w-full mx-auto flex items-center justify-center -mt-7 z-40 pb-12">
            <div class="swiper-wrapper w-full">
                @foreach ($testimonials as $testimonial)
                    <div class="p-6 swiper-slide w-full md:w-full h-full">
                        <div class="container max-w-xl mx-auto w-[350px]">
                            <div
                                class="flex flex-col items-center w-full p-6 space-y-8  lg:h-full lg:p-8 shadow-lg rounded-xl pb-8">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="38" viewBox="0 0 50 38"
                                    fill="none">
                                    <path
                                        d="M15.625 6.25L18.75 0H12.5C5.59375 0 0 8.71875 0 15.625V37.5H21.875V15.625H9.375C9.375 6.25 15.625 6.25 15.625 6.25ZM37.5 15.625C37.5 6.25 43.75 6.25 43.75 6.25L46.875 0H40.625C33.7188 0 28.125 8.71875 28.125 15.625V37.5H50V15.625H37.5Z"
                                        fill="#3986A3" />
                                </svg>
                                <blockquote
                                    class="max-w-lg text-lg italic text-center border-b-2 pb-5 text-black border-b-[#70787D]">
                                    "{{ $testimonial['testimonial'] }}"</blockquote>
                                <div class="text-center dark:text-gray-400 flex flex-col items-center">
                                    <img src="{{ $testimonial['image'] }}" alt=""
                                        class="w-20 h-20 rounded-full dark:bg-gray-500 object-cover">
                                    <p class="text-black text-lg font-medium mt-2">{{ $testimonial['name'] }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </section>

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
                }
            }));
        })
    </script>
@endsection
