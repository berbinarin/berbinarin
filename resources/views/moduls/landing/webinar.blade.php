@extends('layouts.main', [
'title' => 'Webinar - Berbinar Insightful Indonesia',
'active' => 'Produk Berbinar',
'page' => 'Kelas',
])

@section('content')
{{-- HERO SECTION --}}
<section class="max-w-6xl mx-auto flex flex-col md:flex-row items-center justify-center relative px-5 md:px-0 mt-28 md:mt-13">
    {{-- HERO IMG MOBILE --}}
    <img src="{{ asset('assets/images/products/ilustrasi-webinar.png') }}" alt="Ilustrasi Konseling Berbinar" title="Ilustrasi Konseling Berbinar" class="w-full block md:hidden" data-aos="fade-up" data-aos-duration="1500">

    {{-- HERO CONTENT --}}
    <div class="relative flex items-center">
        <div class="bg-blur-bg rounded-[700px] blur-[55px] w-[300px] md:w-[600px] h-[250px] md:h-[600px] absolute">
        </div>
        <div class="flex flex-col gap-5 z-40 relative">
            <h1 class="font-semibold text-black text-[40px] md:text-[64px] leading-[100%] md:leading-[120%]">
                Webinar<span class="text-primary font-bold"> Berbinar</span>
            </h1>
            <p class="text-lg text-disabled">Jelajahi dan perluas keterampilan Anda dengan bimbingan para ahli. Gali
                ilmu dan asah keterampilan melalui pengalaman yang membangkitkan semangat anda. Temukan potensi
                tersembunyi diri Anda dan berkembang Bersama ahli. Bentuk cerita perjalanan ilmu yang tak terlupakan!
            </p>
            <a href="https://bit.ly/CounselingWithBerbinar" class="text-lg text-white bg-primary-alt rounded-md hover:bg-primary duration-700 px-5 py-2 w-fit">Ikuti
                Webinar</a>
        </div>
    </div>

    {{-- HERO IMG DESKTOP --}}
    <img src="{{ asset('assets/images/products/ilustrasi-webinar.png') }}" alt="Ilustrasi Konseling Berbinar" title="Ilustrasi Konseling Berbinar" class="w-1/2 hidden md:block" data-aos="fade-left" data-aos-duration="1500">
</section>

{{-- UPCOMING SECTION --}}
<section class="max-w-6xl mx-auto flex flex-col md:flex-row items-center justify-center relative px-5 py-5 md:px-0 -mt-5 gap-10">
    {{-- HERO IMG MOBILE --}}
    <img src="{{ asset('assets/images/products/webinar/webinar-1.png') }}" alt="Ilustrasi Konseling Berbinar" title="Ilustrasi Konseling Berbinar" class="w-full block md:hidden" data-aos="fade-up" data-aos-duration="1500">

    {{-- HERO CONTENT --}}
    <div class="relative flex items-center ">
        <div class="bg-blur-bg rounded-[700px] blur-[55px] w-[300px] md:w-[600px] h-[250px] md:h-[600px] absolute">
        </div>
        <div class="flex flex-col gap-5 z-40 relative">
            <h1 class="text-black fomt-semibold text-3xl">
                Webinar "The Art Of <span class="text-primary">Self-Love</span>"
            </h1>
            <p class="text-lg text-disabled">Salah satu webinar yang kami selenggarakan dengan judu “The Art of
                Self-Love” merupakan webinar yang memiliki tujuan untuk membahas dan memandu peserta dalam memahami
                serta mengembangkan cinta pada diri sendiri. Melalui pembicaraan yang mendalam, webinar ini akan
                mengeksplorasi berbagai aspek self-love, termasuk cara meningkatkan kepercayaan diri, mengelola stres,
                dan membentuk pola pikir positif.
            </p>
            <a href="https://www.youtube.com/live/nfKC0Udhnfk?si=Vozb1x_jkiIhGTg0" class="text-lg text-white bg-primary-alt rounded-md hover:bg-primary duration-700 px-5 py-2 w-fit">Tonton
                Webinar</a>
        </div>
    </div>

    {{-- HERO IMG DESKTOP --}}
    <img src="{{ asset('assets/images/products/webinar/webinar-1.png') }}" alt="Ilustrasi Konseling Berbinar" title="Ilustrasi Konseling Berbinar" class="w-1/2 hidden md:block" data-aos="fade-left" data-aos-duration="1500">
</section>

{{-- PILIHAN WEBINAR SECTION --}}
<section class="max-w-6xl mx-auto flex flex-col gap-10 z-40 mt-5">
    <div class="flex items-center justify-center flex-col gap-1">
        <h1 class="text-black fomt-semibold text-3xl px-5 md:px-0 text-center">
            Konten - Konten Webinar <span class="text-primary font-bold">Berbinar</span>
        </h1>
        <p class="text-disabled text-lg text-center">Berikut adalah konten - konten webinar dari kami : </p>
    </div>

    <div class="flex flex-col md:flex-row gap-5 md:gap-3">
        <div class="flex flex-col gap-4 mx-8 md:mx-0  rounded-xl bg-white shadow-md relative pb-6 flex-1" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="500">

            <img src="{{ asset('assets/images/products/webinar/webinar-2.png') }}" alt="Ilustrasi Peer Counselor Berbinar" title="Ilustrasi Peer Counselor Berbinar" class="w-full rounded-tl-xl rounded-tr-xl p-4">

            <div class="flex flex-col gap-1 text-center px-5 items-center justify-center">
                <h3 class="text-black text-xl font-medium">Webinar : “Start the New Me”</h3>
                <p class="text-disabled text-base pb-12">
                    Bersama : Novia Solichah, M. Psi
                </p>
                <a href="https://youtu.be/qQalLh7eFYk?si=nfZmEnjTJyKKmE0R" class="text-base text-white bg-primary-alt rounded-md hover:bg-primary duration-700 px-5 py-2 absolute bottom-5">Lihat</a>
            </div>
        </div>

        <div class="flex flex-col gap-4 mx-8 md:mx-0  rounded-xl bg-white shadow-md relative pb-6 flex-1" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="1000">

            <img src="{{ asset('assets/images/products/webinar/webinar-4.png') }}" alt="Ilustrasi Asesmen Psikologi Berbinar" title="Ilustrasi Asesmen Psikologi Berbinar" class="w-full rounded-tl-xl rounded-tr-xl p-4">

            <div class="flex flex-col gap-1 text-center px-5 items-center justify-center">
                <h3 class="text-black text-xl font-medium">Webinar : “Finding the Right Career”</h3>
                <p class="text-disabled text-base pb-12">
                    Bersama : Nessia Ragil Trifiani, S. Psi
                </p>
                <a href="https://www.youtube.com/live/N-tDIkQw90s?si=Po4rJOjrOVN3X2Ot" class="text-base text-white bg-primary-alt rounded-md hover:bg-primary duration-700 px-5 py-2 absolute bottom-5">Lihat</a>
            </div>
        </div>

        <div class="flex flex-col gap-4 mx-8 md:mx-0  rounded-xl bg-white shadow-md relative pb-6 flex-1" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="1500">

            <img src="{{ asset('assets/images/products/webinar/webinar-3.png') }}" alt="Ilustrasi Kelas Berbinar" title="Ilustrasi Kelas Berbinar" class="w-full rounded-tl-xl rounded-tr-xl p-4">
            <div class="flex flex-col gap-1 text-center px-5 items-center justify-center">
                <h3 class="text-black text-xl font-medium">Webinar : “Freedom Before 30”</h3>
                <p class="text-disabled text-base pb-12">
                    Bersama : Christopher Jose Lorenzo
                </p>
                <a href="https://www.youtube.com/live/p3bhLaNkxs0?si=xpkflM_j289QBoSB" class="text-base text-white bg-primary-alt rounded-md hover:bg-primary duration-700 px-5 py-2 absolute bottom-5">Lihat</a>
            </div>
        </div>
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
            <h2 @click="handleClick()" class="flex flex-row justify-between items-center font-medium p-3 cursor-pointer text-lg">
                <span>{{ $faq['question'] }}</span>
                <svg :class="handleRotate()" class="fill-[#3986a3] text-[#3986a3] h-6 w-6 transform transition-transform duration-500" viewBox="0 0 20 20">
                    <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                    </path>
                </svg>
            </h2>
            <div x-ref="tab" :style="handleToggle()" class="border-l-2 border-[#3986a3] overflow-hidden max-h-0 duration-500 transition-all">
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