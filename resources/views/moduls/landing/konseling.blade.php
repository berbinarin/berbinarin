@extends('layouts.main', [
    'title' => 'Konseling - Berbinar Insightful Indonesia',
    'active' => 'Produk Berbinar',
    'page' => 'Konseling',
])

@section('content')
    {{-- HERO SECTION --}}
    <section
        class="max-w-6xl mx-auto h-screen flex flex-col md:flex-row items-center justify-center relative px-5 md:px-0 mt-28 md:mt-10">
        {{-- HERO IMG MOBILE --}}
        <img src="https://i.ibb.co/CwyfsBG/konseling.png" alt="Ilustrasi Konseling Berbinar"
            title="Ilustrasi Konseling Berbinar" class="w-full block md:hidden" data-aos="fade-up" data-aos-duration="1500">

        {{-- HERO CONTENT --}}
        <div class="relative flex items-center">
            <div class="bg-blur-bg rounded-[700px] blur-[55px] w-[300px] md:w-[600px] h-[250px] md:h-[600px] absolute">
            </div>
            <div class="flex flex-col gap-5 z-40 relative">
                <h1 class="font-semibold text-black text-[40px] md:text-[64px] leading-[100%] md:leading-[120%]">
                    Konseling<span class="text-primary font-bold"> Berbinar</span>
                </h1>
                <p class="text-lg text-disabled">Dapatkan konseling yang mengubah hidup dari para psikolog dan peer
                    counselor untuk mencapai pertumbuhan pribadi yang luar biasa. Segera temukan solusi yang tepat untuk
                    masalah yang Anda hadapi dan mulai menapaki jalan menuju hidup yang lebih baik.</p>
                <a href="https://bit.ly/CounselingWithBerbinar"
                    class="text-lg text-white bg-primary-alt rounded-md hover:bg-primary duration-700 px-5 py-2 w-fit">Lakukan
                    Konseling</a>
            </div>
        </div>

        {{-- HERO IMG DESKTOP --}}
        <img src="https://i.ibb.co/CwyfsBG/konseling.png" alt="Ilustrasi Konseling Berbinar"
            title="Ilustrasi Konseling Berbinar" class="w-1/2 hidden md:block" data-aos="fade-left"
            data-aos-duration="1500">
    </section>

    {{-- OUR PSIKOLOG SECTION --}}
    <section class="py-6 z-40 -mt-32">
        <div class="container flex flex-col items-center justify-center p-4 mx-auto  sm:p-10">
            <h1 class="text-black fomt-semibold text-3xl md:px-0 mb-3">Psikolog Kami</h1>
            <p class="text-lg text-disabled text-center md:w-1/2">Tim kami terdiri dari psikolog berpengalaman, membantu
                Anda menavigasi
                hidup
                dengan bijaksana, memberikan dukungan emosional</p>

            <div class="flex flex-col md:grid w-full grid-cols-1 gap-x-6 gap-y-12  lg:grid-cols-4 items-center mt-10">
                <div class="space-y-4 bg-white shadow-md py-7 px-2 rounded-md w-[300px] md:w-full">
                    <img alt="" class="object-cover h-60 mx-auto mb-4 bg-center rounded-xl dark:bg-gray-500"
                        src="{{ asset('assets/images/konseling/psikolog1.jpg') }}">
                    <div class="flex flex-col items-center">
                        <a target="_blank"
                            href="https://drive.google.com/file/d/1mHcJvLoqeISx6GO1Qr8bhUQYd9Watwxm/view?usp=share_link"
                            class="text-xl font-medium text-center">Daniel Reyonald Bungaran, S.Psi., M.Psi. Psikolog</a>
                        <p class="text-sm text-disabled">S1 Unair, Mapro Unair</p>
                    </div>
                </div>
                <div class="space-y-4 bg-white shadow-md py-7 px-2 rounded-md w-[300px] md:w-full">
                    <img alt="" class="object-cover h-60 mx-auto mb-4 bg-center rounded-xl dark:bg-gray-500"
                        src="{{ asset('assets/images/konseling/psikolog2.jpg') }}">
                    <div class="flex flex-col items-center">
                        <a target="_blank"
                            href="https://drive.google.com/file/d/1eSV7AxbEgG92eMrp4SVErcKJ8uacoahP/view?usp=share_link"
                            class="text-xl font-medium text-center">Danny Sanjaya Arfensia, S.Psi., M.Psi. Psikolog</a>
                        <p class="text-sm text-disabled">S1 Unair, Mapro Unair</p>
                    </div>
                </div>
                <div class="space-y-4 bg-white shadow-md py-7 px-2 rounded-md w-[300px] md:w-full">
                    <img alt="" class="object-cover h-60 mx-auto mb-4 bg-center rounded-xl dark:bg-gray-500"
                        src="{{ asset('assets/images/konseling/psikolog7.jpg') }}">
                    <div class="flex flex-col items-center">
                        <a target="_blank"
                            href="https://drive.google.com/file/d/19kMsZlPTv8e-5z9SbpuwcFVOJLtfqtUg/view?usp=share_link"
                            class="text-xl font-medium text-center">Yeni Rahma Dwijayanti, S.Psi., M.Psi. Psikolog</a>
                        <p class="text-sm text-disabled"> S1 Unair, Mapro Unair</p>
                    </div>
                </div>
                <div class="space-y-4 bg-white shadow-md py-7 px-2 rounded-md w-[300px] md:w-full">
                    <img alt="" class="object-cover h-60 mx-auto mb-4 bg-center rounded-xl dark:bg-gray-500"
                        src="{{ asset('assets/images/konseling/psikolog6.jpg') }}">
                    <div class="flex flex-col items-center">
                        <a target="_blank"
                            href="https://drive.google.com/file/d/1VCDlpDB3DHXiYJQfKCcEadqi8BmvbJ5y/view?usp=share_link"
                            class="text-xl font-medium text-center">Putu Diana Wulandari, S.Psi., M.Psi. Psikolog</a>
                        <p class="text-sm text-disabled">S1 Udayana, Mapro Unair
                        </p>
                    </div>
                </div>
                <div class="space-y-4 bg-white shadow-md py-7 px-2 rounded-md w-[300px] md:w-full">
                    <img alt="" class="object-cover h-60 mx-auto mb-4 bg-center rounded-xl dark:bg-gray-500"
                        src="{{ asset('assets/images/konseling/psikolog/istna-anisatul.jpeg') }}">
                    <div class="flex flex-col items-center">
                        <a target="_blank"
                            href="https://drive.google.com/file/d/1qc16eQOkHNw4tK0efUZcmhIk8HHkYt6H/view?usp=drive_link"
                            class="text-xl font-medium text-center">Istna Anisatul Fadillah, S.Psi., M.Psi. Psikolog</a>
                        <p class="text-sm text-disabled">S1 Uinsa, Mapro Unair</p>
                    </div>
                </div>
                <div class="space-y-4 bg-white shadow-md py-7 px-2 rounded-md w-[300px] md:w-full">
                    <img alt="" class="object-cover h-60 mx-auto mb-4 bg-center rounded-xl dark:bg-gray-500"
                        src="{{ asset('assets/images/konseling/psikolog/putu-yoga.jpeg') }}">
                    <div class="flex flex-col items-center">
                        <a target="_blank"
                            href="https://drive.google.com/file/d/1VJ-0ggnyNgURuW0j2eMNFmpoDqrxkOUX/view?usp=drive_link"
                            class="text-xl font-medium text-center">Putu Yoga, S.Psi., M.Psi. Psikolog</a>
                        <p class="text-sm text-disabled">S1 Udayana, Mapro Unair</p>
                    </div>
                </div>
                <div class="space-y-4 bg-white shadow-md py-7 px-2 rounded-md w-[300px] md:w-full">
                    <img alt="" class="object-cover h-60 mx-auto mb-4 bg-center rounded-xl dark:bg-gray-500"
                        src="{{ asset('assets/images/konseling/psikolog/primandini.jpeg') }}">
                    <div class="flex flex-col items-center">
                        <a target="_blank"
                            href="https://drive.google.com/file/d/1JKD2sj5Bm_73OYU9aoTlWHWLdHXR24iY/view?usp=drive_link"
                            class="text-xl font-medium text-center">Primandini Yunanda Harumi, S. Psi., M. Psi. Psikolog</a>
                        <p class="text-sm text-disabled">S1 Udayana, Mapro Unair</p>
                    </div>
                </div>
                <div class="space-y-4 bg-white shadow-md py-7 px-2 rounded-md w-[300px] md:w-full">
                    <img alt="" class="object-cover h-60 mx-auto mb-4 bg-center rounded-xl dark:bg-gray-500"
                        src="{{ asset('assets/images/konseling/psikolog/yusandi.png') }}">
                    <div class="flex flex-col items-center">
                        <a class="text-xl font-medium text-center">Yusandi Rezki Fadhli, S.Psi., M.Psi., Psikolog</a>
                        <p class="text-sm text-disabled">S1 Tarumanegara, Mapro Unair</p>
                    </div>
                </div>
                <div class="space-y-4 bg-white shadow-md py-7 px-2 rounded-md w-[300px] md:w-full">
                    <img alt="" class="object-cover h-60 mx-auto mb-4 bg-center rounded-xl dark:bg-gray-500"
                        src="{{ asset('assets/images/konseling/psikolog/satria.jpeg') }}">
                    <div class="flex flex-col items-center">
                        <a class="text-xl font-medium text-center">Satria Kamal Agassi, S.Psi., M.Psi., Psikolog</a>
                        <p class="text-sm text-disabled">S1 Unair, Mapro Unair</p>
                    </div>
                </div>
            </div>

            
        </div>
    </section>

    {{-- PSIKOLOG PRICE SECTION --}}
    <section class="py-6 z-40 -mt-10 md:-mt-20">
        <div class="container flex flex-col items-center justify-center p-4 mx-auto  sm:p-10">
            <h1 class="text-black fomt-semibold text-center text-3xl md:px-0 mb-3">Konseling Bersama Psikolog</h1>
            <p class="text-lg text-disabled text-center md:w-1/2">Pilih jenis konseling yang sesuai dengan kebutuhan anda
            </p>

            <div class="flex flex-col md:flex-row flex-wrap items-center justify-center gap-5 mt-10">
                <div class="flex flex-col gap-4 md:mx-0  rounded-xl bg-white shadow-md relative pb-8 flex-1 w-full md:w-[500px] "
                    data-aos="fade-right" data-aos-duration="500" data-aos-delay="0">
                    <div class="flex flex-col gap-2 text-center items-center px-5 pt-10">
                        <h3 class="text-black text-xl font-medium">Online Weekday</h3>
                        <h1 class="text-black text-4xl font-medium">IDR 150k/jam</h1>
                        <p class="text-lg text-disabled">Lakukan dimana saja</p>
                        <a href="https://bit.ly/CounselingWithBerbinar"
                            class="text-base text-white bg-primary-alt rounded-md hover:bg-primary duration-700 px-5 py-2 bottom-0">Mulai
                            Sekarang</a>
                    </div>
                </div>
                <div class="flex flex-col gap-4 md:mx-0  rounded-xl bg-white shadow-md relative pb-8 flex-1 w-full md:w-[500px] "
                    data-aos="fade-right" data-aos-duration="500" data-aos-delay="0">
                    <div class="flex flex-col gap-2 text-center items-center px-5 pt-10">
                        <h3 class="text-black text-xl font-medium">Online Weekend</h3>
                        <h1 class="text-black text-4xl font-medium">IDR 200k/jam</h1>
                        <p class="text-lg text-disabled">Lakukan dimana saja</p>
                        <a href="https://bit.ly/CounselingWithBerbinar"
                            class="text-base text-white bg-primary-alt rounded-md hover:bg-primary duration-700 px-5 py-2 bottom-0">Mulai
                            Sekarang</a>
                    </div>
                </div>
                <div class="flex flex-col gap-4 md:mx-0  rounded-xl bg-white shadow-md relative pb-8 flex-1 w-full md:w-[500px] "
                    data-aos="fade-right" data-aos-duration="500" data-aos-delay="0">
                    <div class="flex flex-col gap-2 text-center items-center px-5 pt-10">
                        <h3 class="text-black text-xl font-medium">Offline Weekday</h3>
                        <h1 class="text-black text-4xl font-medium">IDR 175k/jam</h1>
                        <p class="text-lg text-disabled">Khusus wilayah Surabaya</p>
                        <a href="https://bit.ly/CounselingWithBerbinar"
                            class="text-base text-white bg-primary-alt rounded-md hover:bg-primary duration-700 px-5 py-2 bottom-0">Mulai
                            Sekarang</a>
                    </div>
                </div>
                <div class="flex flex-col gap-4 md:mx-0  rounded-xl bg-white shadow-md relative pb-8 flex-1 w-full md:w-[500px] "
                    data-aos="fade-right" data-aos-duration="500" data-aos-delay="0">
                    <div class="flex flex-col gap-2 text-center items-center px-5 pt-10">
                        <h3 class="text-black text-xl font-medium">Offline Weekend</h3>
                        <h1 class="text-black text-4xl font-medium">IDR 225k/jam</h1>
                        <p class="text-lg text-disabled">Khusus wilayah Surabaya</p>
                        <a href="https://bit.ly/CounselingWithBerbinar"
                            class="text-base text-white bg-primary-alt rounded-md hover:bg-primary duration-700 px-5 py-2 bottom-0">Mulai
                            Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- OUR PEER COUNSELOR SECTION --}}
    <section class="py-6 z-40 md:-mt-20">
        <div class="container flex flex-col items-center justify-center p-4 mx-auto  sm:p-10">
            <h1 class="text-black fomt-semibold text-3xl md:px-0 mb-3">Peer Counselor Kami</h1>
            <p class="text-lg text-disabled text-center md:w-1/2">Tim kami terdiri dari peer counselor berpengalaman,
                membantu Anda menavigasi hidup dengan bijaksana, memberikan dukungan emosional</p>

            <div class="flex flex-col md:flex-row md:gap-6 items-center justify-center mt-10">
                <div class="space-y-4 bg-white shadow-md py-7 px-2 rounded-md w-[300px] md:w-full">
                    <img alt="" class="object-cover h-60 mx-auto mb-4 bg-center rounded-xl dark:bg-gray-500"
                        src="{{ asset('assets/images/konseling/peer3.jpeg') }}">
                    <div class="flex flex-col items-center">
                        <a target="_blank" href="#" class="text-xl font-medium text-center">Sofia Zulaikha
                            Salsabila
                        </a>
                        <p class="text-sm text-disabled">Universitas Sumatera Utara</p>
                    </div>
                </div>
                <div class="space-y-4 bg-white shadow-md py-7 px-2 rounded-md w-[300px] md:w-full">
                    <img alt="" class="object-cover h-60 mx-auto mb-4 bg-center rounded-xl dark:bg-gray-500"
                        src="{{ asset('assets/images/konseling/peer4.jpeg') }}">
                    <div class="flex flex-col items-center">
                        <a target="_blank" href="#" class="text-xl font-medium text-center">Rahmadea An Nariya</a>
                        <p class="text-sm text-disabled">Universitas Brawijaya</p>
                    </div>
                </div>
                <div class="space-y-4 bg-white shadow-md py-7 px-2 rounded-md w-[300px] md:w-full">
                    <img alt="" class="object-cover h-60 mx-auto mb-4 bg-center rounded-xl dark:bg-gray-500"
                        src="{{ asset('assets/images/konseling/peer5.jpg') }}">
                    <div class="flex flex-col items-center">
                        <a target="_blank" href="#" class="text-xl font-medium text-center">Greis Meita Pardede
                        </a>
                        <p class="text-sm text-disabled">Universitas Sumatera Utara
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- PEER COUNSELOR PRICE SECTION --}}
    <section class="py-6 z-40 -mt-10 md:-mt-20">
        <div class="container flex flex-col items-center justify-center p-4 mx-auto  sm:p-10">
            <h1 class="text-black fomt-semibold text-center text-3xl md:px-0 mb-3">Konseling Bersama Peer Counselor</h1>
            <p class="text-lg text-disabled text-center md:w-1/2">Pilih jenis konseling yang sesuai dengan kebutuhan anda
            </p>

            <div class="flex flex-col md:flex-row flex-wrap items-center justify-center gap-5 mt-10">
                <div class="flex flex-col gap-4 md:mx-0  rounded-xl bg-white shadow-md relative pb-8 flex-1 w-full md:w-[300px]"
                    data-aos="fade-right" data-aos-duration="500" data-aos-delay="0">
                    <div class="flex flex-col gap-2 text-center items-center px-5 pt-10">
                        <h3 class="text-black text-xl font-medium">Online</h3>
                        <h1 class="text-black text-4xl font-medium">IDR 45k/jam</h1>
                        <p class="text-lg text-disabled">Lakukan dimana saja</p>
                        <a href="https://bit.ly/CounselingWithBerbinar"
                            class="text-base text-white bg-primary-alt rounded-md hover:bg-primary duration-700 px-5 py-2 bottom-0">Mulai
                            Sekarang</a>
                    </div>
                </div>
                <div class="flex flex-col gap-4 md:mx-0  rounded-xl bg-white shadow-md relative pb-8 flex-1 w-full md:w-[300px]"
                    data-aos="fade-right" data-aos-duration="500" data-aos-delay="0">
                    <div class="flex flex-col gap-2 text-center items-center px-5 pt-10">
                        <h3 class="text-black text-xl font-medium">Offline</h3>
                        <h1 class="text-black text-4xl font-medium">IDR 55k/jam</h1>
                        <p class="text-lg text-disabled">Wilayah Medan & Malang</p>
                        <a href="https://bit.ly/CounselingWithBerbinar"
                            class="text-base text-white bg-primary-alt rounded-md hover:bg-primary duration-700 px-5 py-2 bottom-0">Mulai
                            Sekarang</a>
                    </div>
                </div>
            </div>
    </section>

    {{-- TESTIMONIALS SECTION --}}
    <section class="max-w-6xl mx-auto flex flex-col gap-10 z-40 hidden md:flex">
        <h1 class="text-black fomt-semibold text-3xl px-5 md:px-0 text-center">
            Testimonial Konseling <span class="text-primary font-bold">Berbinar</span>
        </h1>

        <div class="flex flex-row gap-3">
            @foreach ($testimonials as $testimonial)
                <div class="p-6 w-full md:w-full h-full">
                    <div class="max-w-xl mx-auto w-[350px]">
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
                                <img src="https://www.sussexcharter.org/wp-content/uploads/2023/02/StaffPlaceholder-girl.jpg"
                                    alt="" class="w-20 h-20 rounded-full dark:bg-gray-500 object-cover">
                                <p class="text-black text-lg font-medium mt-2">{{ $testimonial['name'] }}</p>
                                <p>{{ $testimonial['divisi'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    {{-- FAQ SECTION --}}
    <section class="max-w-6xl z-40 mx-5 md:mx-auto">
        <ul class="flex flex-col">
            @php
                $index = 0;
            @endphp
            @foreach ($faqs as $faq)
                <li class="border bg-white py-2 shadow-sm rounded-lg my-2" x-data="accordion({{ $index }})">
                    <h2 @click="handleClick()"
                        class="flex flex-row justify-between items-center font-medium p-3 cursor-pointer text-lg">
                        <span>{{ $faq['question'] }}</span>
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
                            {{ $faq['answer'] }}
                        </p>
                    </div>
                </li>
                @php
                    $index++;
                @endphp
            @endforeach
        </ul>
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
