@extends(
    "landing.layouts.app",
    [
        "title" => "Berbinar Insightful Indonesia",
        "active" => "Produk Berbinar",
        "page" => "EMO",
    ]
)

@section("style")
    <style>
        .swiper {
            width: 100%;
            /* height: auto; */
            margin-left: auto;
            margin-right: auto;
            position: relative;
            overflow: hidden;
            list-style: none;
            padding: 0;
            z-index: 1;
        }

        .swiper-wrapper {
            position: relative;
            width: 100%;
            height: 85%;
            z-index: 1;
            display: flex;
            transition-property: transform;
            box-sizing: content-box;
        }

        .swiper-slide {
            flex-shrink: 0;
            width: 100%;
            height: 100%;
            position: relative;
            transition-property: transform, opacity;
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 0.6;
            transform: scale(0.85);
            transition: all 0.3s ease;
        }

        .swiper-slide-active {
            opacity: 1 !important;
            transform: scale(1) !important;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: auto;
            object-fit: cover;
            max-height: 100%;
        }

        .swiper-pagination {
            position: relative;
            text-align: center;
            transition: 300ms opacity;
            transform: translate3d(0, 0, 0);
            z-index: 10;
            height: 8px;
            width: 100%;
            margin-top: 20px;
        }

        .swiper-pagination-progressbar {
            background: rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            position: relative;
            height: 8px !important;
        }

        .swiper-pagination-progressbar .swiper-pagination-progressbar-fill {
            background: #9dd4ee;
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            transform: scale(0);
            transform-origin: left top;
            border-radius: 10px;
        }

        @media (min-width: 768px) {
            #customSection {
                padding-top: 10rem; /* setara dengan md:pt-20 di Tailwind */
            }
        }
    </style>
@endsection

@section("content")
    <section id="customSection" class="mb-12 w-full overflow-x-hidden">
        <div class="absolute left-0 top-0 h-fit w-1/2 pt-32 md:block md:w-1/3 md:pt-0 lg:w-1/4">
            <img src="{{ asset("assets/images/landing/produk/emo/blop-1.png") }}" alt="top-left-texture" class="object-cover" />
        </div>
        <div class="absolute right-0 top-0 h-fit w-1/2 pt-32 md:block md:w-1/3 md:pt-0 lg:w-1/4">
            <img src="{{ asset("assets/images/landing/produk/emo/blop-2.png") }}" alt="top-right-texture" class="object-cover" />
        </div>
        <div class="relative">
            <div class="z-10 mx-20 flex flex-row items-center justify-between gap-x-10 max-sm:mx-4 max-sm:mt-32">
                <div class="max-lg:min-w-auto flex max-w-xl flex-1 flex-col space-y-6 max-sm:space-y-2">
                    <a href="{{ route("product.index") }}">
                        <div class="flex cursor-pointer items-center space-x-2 lg:order-1">
                            <img src="{{ asset("assets/images/landing/asset-konseling/vector/left-arrow.svg") }}" alt="Left Arrow" class="h-3 w-auto" />
                            <p class="text-[15px] font-semibold text-[#3986A3]">Produk Berbinar</p>
                        </div>
                    </a>

                    <div class="hidden w-full items-center justify-center max-lg:flex-none max-md:flex lg:order-2 lg:w-auto">
                        <img src="{{ asset("assets/images/landing/asset-konseling/vector/hero.png") }}" alt="Konseling" class="h-[340px] w-auto object-contain max-sm:h-[320px]" />
                    </div>

                    <div class="lg:order-3">
                        <h2 class="mb-4 bg-gradient-to-r from-[#1C4352] to-[#3986A3] bg-clip-text py-1 font-[inter] text-4xl font-semibold text-transparent lg:text-5xl lg:tracking-wide">EmoShuffle</h2>
                    </div>

                    <div class="lg:order-4">
                        <p class="text-justify text-lg text-[#70787D] max-lg:text-[17px] max-sm:text-[15px] max-sm:leading-normal">Merasa bosan bermain kartu yang itu-itu saja? EmoShuffle solusinya! Dengan kartu EmoShuffle kamu dapat saling bermain kartu sembari mengungkapkan perasaan satu sama lainnya. Karena dalam kartu EmoShuffle terdapat tiga jenis kartu yang salah satunya berbentuk pertanyaan seputar psikologis dalam diri.</p>
                    </div>
                </div>

                <div class="flex w-full flex-initial items-center justify-center max-lg:flex-1 max-md:hidden lg:w-auto">
                    <img src="{{ asset("assets/images/landing/produk/emo/banner.png") }}" alt="Konseling" class="h-[340px] w-auto max-lg:h-[320px]" />
                </div>
            </div>
        </div>
    </section>
    {{-- Mobile screen mini map --}}
    <section class="relative mb-12 block w-full md:hidden">
        <div class="absolute pt-4">
            <img src="{{ asset("assets/images/landing/produk/emo/path.png") }}" alt="top-texture" class="object-cover" />
        </div>
        <div class="relative mx-auto">
            <h1 class="mb-4 bg-gradient-to-r from-[#1C4352] to-[#3986A3] bg-clip-text px-4 py-1 text-center font-[inter] text-4xl font-semibold text-transparent md:px-0 lg:text-5xl lg:tracking-wide">Cara Memainkan Emoshuffle</h1>
            <div class="flex w-1/2 justify-start pl-4 md:w-3/4 md:justify-center md:pl-0 md:pt-16">
                <img class="h-24 object-cover md:pr-20" src="{{ asset("assets/images/landing/produk/emo/flag.png") }}" />
            </div>
            <div class="relative grid gap-4 font-semibold" style="grid-template-columns: repeat(3, minmax(0, 1fr)); grid-template-rows: repeat(4, minmax(0, 1fr))">
                <img src="{{ asset("assets/images/landing/produk/emo/mobile-line.png") }}" class="absolute" style="padding-left: 50px" />
                <div class="z-10 flex items-center pr-8 text-sm" style="grid-column: span 3">
                    <img class="h-28 object-cover" src="{{ asset("assets/images/landing/produk/emo/reload-icon.png") }}" />
                    <p class="leading-relaxed">Sebelum permainan dimulai, kartu dikocok terlebih dahulu agar urutan kartu tidak dapat diprediksi oleh pemain</p>
                </div>
                <div class="z-10 flex items-center pr-8 text-sm" style="grid-column: span 3">
                    <img class="h-28 object-cover" src="{{ asset("assets/images/landing/produk/emo/upload-icon.png") }}" />
                    <p class="leading-relaxed">Letakkan tumpukan kartu di tengah. Setiap pemain kemudian mengambil 5 hingga 7 kartu secara bergiliran</p>
                </div>
                <div class="z-10 flex items-center pr-8 text-sm" style="grid-column: span 3">
                    <img class="h-28 object-cover" src="{{ asset("assets/images/landing/produk/emo/book-icon.png") }}" />
                    <p class="leading-relaxed">Setiap pemain akan secara bergiliran membacakan satu kartu miliknya kepada semua pemain.</p>
                </div>
                <div class="z-10 flex items-center pr-8 text-sm" style="grid-column: span 3">
                    <img class="h-28 object-cover" src="{{ asset("assets/images/landing/produk/emo/comment-icon.png") }}" />
                    <p class="leading-relaxed">Pemain lain memberikan jawaban sesuai isi kartu yang dibacakan. Ada tiga jenis kartu berbeda yang mungkin muncul dalam permainan ini.</p>
                </div>
            </div>
            <div class="px-6 pt-10">
                <h1 class="bg-gradient-to-r from-[#1C4352] to-[#3986A3] bg-clip-text text-center font-[inter] text-3xl font-semibold text-transparent lg:tracking-wide">3 Jenis Kartu</h1>
                <div class="swiper card-swiper mt-8">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{ asset("assets/images/landing/produk/emo/card-1.png") }}" alt="Kartu Question" class="w-full rounded-lg shadow-md" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset("assets/images/landing/produk/emo/card-2.png") }}" alt="Kartu Quote" class="w-full rounded-lg shadow-md" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset("assets/images/landing/produk/emo/card-3.png") }}" alt="Kartu Challenge" class="w-full rounded-lg shadow-md" />
                        </div>
                    </div>
                    <div class="swiper-pagination mb-[26px] mt-[26px]" style="position: relative; height: 8px"></div>
                </div>
            </div>

            <div class="relative grid gap-4 py-10 font-semibold" style="grid-template-columns: repeat(3, minmax(0, 1fr)); grid-template-rows: repeat(3, minmax(0, 1fr))">
                <img src="{{ asset("assets/images/landing/produk/emo/mobile-line.png") }}" class="absolute" style="padding-left: 50px; clip-path: inset(50px 0px 50px 0px)" />
                <div class="z-10 flex items-center px-4" style="grid-column: span 3">
                    <div class="flex w-full rounded-lg border border-[#B3B3B3] bg-white shadow-md shadow-[#B3B3B3]">
                        <div class="flex items-center justify-center bg-[#F7B23B] pr-4" style="border-top-right-radius: 9999px; border-bottom-right-radius: 9999px">
                            <img class="h-20 w-20 py-2 pl-2" src="{{ asset("assets/images/landing/produk/emo/phone-icon.png") }}" />
                        </div>
                        <div class="px-3 py-2 text-start text-xs text-[#70787D]" style="max-width: 300px">
                            Jika ada pemain yang merasa tidak nyaman untuk menjawab, berikan kesempatan untuk mengambil kartu
                            <span class="font-extrabold">Do It Now!</span>
                            untuk menggantikan
                            <span class="font-extrabold">kartu Question</span>
                            , lakukan apa yang diperintahkan dalam kartu tersebut.
                        </div>
                    </div>
                </div>
                <div class="z-10 flex items-center px-4" style="grid-column: span 3">
                    <div class="flex w-full rounded-lg border border-[#B3B3B3] bg-white shadow-md shadow-[#B3B3B3]">
                        <div class="flex items-center justify-center bg-[#F7B23B] pr-4" style="border-top-right-radius: 9999px; border-bottom-right-radius: 9999px">
                            <img class="h-20 w-20 py-2 pl-2" src="{{ asset("assets/images/landing/produk/emo/phone-icon.png") }}" />
                        </div>
                        <div class="px-3 py-2 text-start text-xs text-gray-800" style="max-width: 300px">Teruskan permainan hingga semua kartu di tumpukan EmoShuffle telah diambil dan kartu-kartu tersebut telah dibacakan atau tindakan yang diinstruksikan telah dilakukan.</div>
                    </div>
                </div>
                <div class="z-10 flex items-center pr-8 text-sm" style="grid-column: span 3">
                    <img class="h-28 object-cover" src="{{ asset("assets/images/landing/produk/emo/warning-icon.png") }}" />
                    <p class="leading-relaxed">Jika seorang pemain tidak menjawab pertanyaan, ia harus mengambil 1 kartu perintah dan menjalankan instruksinya.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Desktop screen mini map --}}
    <section class="relative mb-12 hidden w-full md:block">
        <div class="absolute pt-8 md:pt-0">
            <img src="{{ asset("assets/images/landing/produk/emo/path.png") }}" alt="top-texture" class="object-cover" />
        </div>
        <div class="relative mx-auto md:mx-14 md:pt-14 3xl:pt-6">
            <h1 class="mb-4 bg-gradient-to-r from-[#1C4352] to-[#3986A3] bg-clip-text px-4 py-1 text-center font-[inter] text-4xl font-semibold text-transparent md:px-0 lg:text-5xl lg:tracking-wide">Cara Memainkan Emoshuffle</h1>
            <div class="flex w-1/2 justify-center md:w-3/4 md:pt-16" style="padding-left: 200px">
                <img class="object-cover" src="{{ asset("assets/images/landing/produk/emo/flag.png") }}" />
            </div>
            <div class="relative grid font-semibold" style="grid-template-columns: repeat(12, minmax(0, 1fr)); grid-template-rows: repeat(10, minmax(0, 1fr))">
                <div>
                    <img src="{{ asset("assets/images/landing/produk/emo/dotted-line.png") }}" class="absolute left-1/2 -translate-x-1/2" />
                </div>
                <div class="z-10" style="grid-column: span 7">
                    <img src="{{ asset("assets/images/landing/produk/emo/reload-icon.png") }}" class="h-44 justify-self-end object-cover" style="justify-self: end" />
                </div>
                <div class="flex items-center" style="grid-column: span 4">
                    <p style="padding-right: 70px">Sebelum permainan dimulai, kartu dikocok terlebih dahulu agar urutan kartu tidak dapat diprediksi oleh pemain</p>
                </div>
                <div class="z-10" style="grid-row: span 1; grid-column: span 6">
                    <div class="flex items-center" style="justify-self: end">
                        <p style="padding-left: 70px">Letakkan tumpukan kartu di tengah. Setiap pemain kemudian mengambil 5 hingga 7 kartu secara bergiliran.</p>
                        <img src="{{ asset("assets/images/landing/produk/emo/upload-icon.png") }}" />
                    </div>
                </div>
                <div class="z-10" style="grid-column: span 8">
                    <img src="{{ asset("assets/images/landing/produk/emo/book-icon.png") }}" class="h-44 justify-self-end object-cover" style="justify-self: end" />
                </div>
                <div class="flex items-center" style="grid-column: span 3">
                    <p style="padding-right: 70px">Setiap pemain akan secara bergiliran membacakan satu kartu miliknya kepada semua pemain.</p>
                </div>
                <div class="z-10" style="grid-column: span 7">
                    <div class="flex items-center" style="justify-self: end">
                        <p style="padding-left: 150px">Pemain lain memberikan jawaban sesuai isi kartu yang dibacakan. Ada tiga jenis kartu berbeda yang mungkin muncul dalam permainan ini.</p>
                        <img src="{{ asset("assets/images/landing/produk/emo/comment-icon.png") }}" />
                    </div>
                </div>
                <div class="z-10" style="grid-column: span 12; grid-row: span 5">
                    <div class="rounded-3xl border p-4 backdrop-blur-sm" style="border-color: #74aabf; background-color: #d7e6ed90">
                        <h1 class="bg-gradient-to-r from-[#1C4352] to-[#3986A3] bg-clip-text py-4 text-center font-[inter] text-4xl font-semibold text-transparent lg:text-5xl lg:tracking-wide">3 Jenis Kartu</h1>
                        <div class="flex justify-center gap-16 pt-8">
                            <img src="{{ asset("assets/images/landing/produk/emo/card-1.png") }}" class="transition-all ease-in-out hover:scale-[115%] hover:brightness-125" />
                            <img src="{{ asset("assets/images/landing/produk/emo/card-2.png") }}" class="transition-all ease-in-out hover:scale-[115%] hover:brightness-125" />
                            <img src="{{ asset("assets/images/landing/produk/emo/card-3.png") }}" class="transition-all ease-in-out hover:scale-[115%] hover:brightness-125" />
                        </div>
                        <div class="flex flex-col gap-4 pt-14 font-light text-[#70787D]" style="padding-left: 130px; padding-right: 130px">
                            <div class="flex rounded-lg border border-[#B3B3B3] bg-white shadow-md shadow-[#B3B3B3]">
                                <div class="flex justify-center rounded-r-full bg-[#F7B23B] p-4">
                                    <img src="{{ asset("assets/images/landing/produk/emo/phone-icon.png") }}" />
                                </div>
                                <div class="px-4 py-2">
                                    Jika ada pemain yang merasa tidak nyaman untuk menjawab, berikan kesempatan untuk mengambil kartu
                                    <span class="font-extrabold">Do It Now!</span>
                                    untuk menggantikan
                                    <span class="font-extrabold">kartu Question</span>
                                    , lakukan apa yang diperintahkan dalam kartu tersebut.
                                </div>
                            </div>
                            <div class="flex rounded-lg border border-[#B3B3B3] bg-white shadow-md shadow-[#B3B3B3]">
                                <div class="flex justify-center rounded-r-full bg-[#F7B23B] p-4">
                                    <img src="{{ asset("assets/images/landing/produk/emo/phone-icon.png") }}" />
                                </div>
                                <div class="px-4 py-2">Teruskan permainan hingga semua kartu di tumpukan EmoShuffle telah diambil dan kartu-kartu tersebut telah dibacakan atau tindakan yang diinstruksikan telah dilakukan.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="z-10" style="grid-column: span 8">
                    <div class="flex justify-end">
                        <img src="{{ asset("assets/images/landing/produk/emo/flag.png") }}" class="pb-8 pr-8" />
                        <img src="{{ asset("assets/images/landing/produk/emo/warning-icon.png") }}" class="h-44 object-cover" />
                    </div>
                </div>
                <div class="flex items-center" style="grid-column: span 3">
                    <p style="padding-right: 10px">Jika seorang pemain tidak menjawab pertanyaan, ia harus mengambil 1 kartu perintah dan menjalankan instruksinya.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Mobile screen price --}}
    <section class="block w-full p-6 md:hidden">
        <div class="relative left-1/2" style="min-height: 460px; width: 90%; transform: translateX(-50%)">
            <img src="{{ asset("assets/images/landing/produk/emo/pricebg-mobile-try.png") }}" class="absolute h-full w-full rounded-b-[60px] rounded-t-3xl object-cover" style="z-index: -20" />

            <div class="flex flex-col items-center gap-4 px-8 py-5 text-white">
                <h1 class="bg-clip-text text-center font-[inter] text-2xl font-semibold text-white lg:text-4xl lg:tracking-wide">Dapatkan Segera EmoShuffle Milikmu!</h1>

                <div class="flex flex-col gap-2">
                    <!-- Card Product (ambil dari kode2) -->
                    <div
                        class="relative flex h-[400px] w-[260px] flex-col items-center justify-between overflow-hidden rounded-2xl bg-white px-6 py-4 shadow-md shadow-black"
                        x-data="{
                            images: [
                                '{{ asset("assets/images/landing/produk/emo/card-price.png") }}',
                                '{{ asset("assets/images/landing/produk/emo/card-price2.png") }}',
                                '{{ asset("assets/images/landing/produk/emo/card-price3.png") }}',
                                '{{ asset("assets/images/landing/produk/emo/card-price4.png") }}',
                            ],
                            active: 0,
                            setActive(idx) {
                                this.active = idx
                            },
                            startX: 0,
                            endX: 0,
                            dragging: false,
                            onDragStart(e) {
                                this.dragging = true
                                this.startX = e.type.includes('touch')
                                    ? e.touches[0].clientX
                                    : e.clientX
                            },
                            onDragMove(e) {
                                if (! this.dragging) return
                                this.endX = e.type.includes('touch') ? e.touches[0].clientX : e.clientX
                            },
                            onDragEnd() {
                                if (! this.dragging) return
                                let diff = this.endX - this.startX
                                if (Math.abs(diff) > 50) {
                                    if (diff < 0 && this.active < this.images.length - 1) {
                                        this.active++
                                    } else if (diff > 0 && this.active > 0) {
                                        this.active--
                                    }
                                }
                                this.dragging = false
                                this.startX = 0
                                this.endX = 0
                            },
                        }"
                    >
                        <!-- Product title -->
                        <div class="mb-1 flex w-full items-center justify-center pt-2">
                            <p class="w-full px-4 py-2 text-center text-[16px] font-medium text-black">
                                <b>Emo Shuffle🃏</b>
                                <br />
                                Kartu permainan emosi
                            </p>
                        </div>

                        <!-- Product Image Slider -->
                        <div class="relative flex h-[200px] w-full items-center justify-center overflow-hidden rounded-xl " @mousedown="onDragStart($event)" @mousemove="onDragMove($event)" @mouseup="onDragEnd()" @mouseleave="onDragEnd()" @touchstart="onDragStart($event)" @touchmove="onDragMove($event)" @touchend="onDragEnd()">
                            <template x-for="(img, idx) in images" :key="idx">
                                <img :src="img" class="h-full object-contain transition-all duration-300" :class="active === idx ? 'block' : 'hidden'" draggable="false" />
                            </template>

                            <!-- Pagination -->
                            <div class="absolute bottom-2 left-1/2 flex -translate-x-1/2 transform items-center justify-center space-x-2">
                                <template x-for="(img, idx) in images" :key="idx">
                                    <div @click="setActive(idx)" class="cursor-pointer transition-all" :class="active === idx ? 'h-2 w-5 rounded-full bg-[#3986A3]' : 'h-2 w-2 rounded-full bg-gray-400 opacity-70'"></div>
                                </template>
                            </div>
                        </div>

                        <!-- Price -->
                        <div class="mt-2 flex w-full items-center justify-center">
                            <a class="w-full px-4 py-2 text-center text-[20px] font-bold text-[#F7B23B]">Rp40.500</a>
                        </div>

                        <!-- Buy Button -->
                        <div class="mb-2 flex w-full items-center justify-center pt-1">
                            <a href="https://vt.tokopedia.com/t/ZSSbJ59h6/" class="w-full rounded-xl bg-gradient-to-r from-[#F7B23B] to-[#AD7D29] px-4 py-2 text-center text-[14px] font-medium text-white shadow-md transition-all hover:shadow-lg">Beli Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Desktop screen price --}}
    <section class="mb-20 hidden w-full md:block">
        <div class="relative left-1/2 h-full" style="min-height: 550px; width: 90%; transform: translateX(-50%)">
            <img src="{{ asset("assets/images/landing/produk/emo/price-bg.png") }}" class="absolute h-full w-full rounded-3xl object-cover" style="z-index: -20" />
            <div class="absolute inset-0 rounded-3xl" style="opacity: 0.7; z-index: -19; background-color: #205467"></div>

            <div class="relative flex h-full flex-col items-center justify-center gap-8 px-8 py-10 text-white">
                <h1 class="bg-clip-text text-center font-[inter] text-3xl font-semibold text-white lg:text-4xl lg:tracking-wide">Dapatkan Segera EmoShuffle Milikmu!</h1>

                <div class="flex flex-col gap-6">
                    <!-- Card Product -->
                    <div
                        class="relative flex h-[525px] w-[320px] flex-col items-center justify-between overflow-hidden rounded-2xl bg-white px-8 py-2 shadow-lg shadow-black"
                        style="position: absolute; bottom: -500px; left: 50%; transform: translateX(-50%)"
                        x-data="{
                            images: [
                                '{{ asset("assets/images/landing/produk/emo/card-price.png") }}',
                                '{{ asset("assets/images/landing/produk/emo/card-price2.png") }}',
                                '{{ asset("assets/images/landing/produk/emo/card-price3.png") }}',
                                '{{ asset("assets/images/landing/produk/emo/card-price4.png") }}',
                            ],
                            active: 0,
                            setActive(idx) {
                                this.active = idx
                            },
                            startX: 0,
                            endX: 0,
                            dragging: false,
                            onDragStart(e) {
                                this.dragging = true
                                this.startX = e.type.includes('touch')
                                    ? e.touches[0].clientX
                                    : e.clientX
                            },
                            onDragMove(e) {
                                if (! this.dragging) return
                                this.endX = e.type.includes('touch') ? e.touches[0].clientX : e.clientX
                            },
                            onDragEnd() {
                                if (! this.dragging) return
                                let diff = this.endX - this.startX
                                if (Math.abs(diff) > 50) {
                                    if (diff < 0 && this.active < this.images.length - 1) {
                                        this.active++
                                    } else if (diff > 0 && this.active > 0) {
                                        this.active--
                                    }
                                }
                                this.dragging = false
                                this.startX = 0
                                this.endX = 0
                            },
                        }"
                    >
                        <!-- Product Image Container with Pagination -->
                        <div class="relative w-full select-none" @mousedown="onDragStart($event)" @mousemove="onDragMove($event)" @mouseup="onDragEnd()" @mouseleave="onDragEnd()" @touchstart="onDragStart($event)" @touchmove="onDragMove($event)" @touchend="onDragEnd()">
                            <!-- Buy Button -->
                            <div class="mb-1 flex w-full items-center justify-center pt-2">
                                <p class="w-full px-6 py-3 text-center text-[18px] font-medium text-black">
                                    <b>Emo Shuffle🃏</b>
                                    <br />
                                    Kartu permainan emosi
                                </p>
                            </div>

                            <div class="flex h-[270px] w-full items-center justify-center overflow-hidden rounded-xl">
                                <template x-for="(img, idx) in images" :key="idx">
                                    <img :src="img" class="h-[full] object-contain transition-all duration-300" :class="active === idx ? 'block' : 'hidden'" alt="EmoShuffle Card Deck" draggable="false" />
                                </template>
                            </div>

                            <!-- Pagination Container -->
                            <div class="absolute bottom-3 left-1/2 flex -translate-x-1/2 transform items-center justify-center space-x-2">
                                <template x-for="(img, idx) in images" :key="idx">
                                    <div
                                        @click="setActive(idx)"
                                        class="cursor-pointer transition-all"
                                        :class="active === idx
                                            ? 'h-2 w-6 rounded-full bg-[#3986A3]'
                                            : 'h-2 w-2 rounded-full bg-gray-400 opacity-70'"
                                    ></div>
                                </template>
                            </div>
                        </div>

                        <!-- Buy Button -->
                        <div class="mt-1 flex w-full items-center justify-center pt-2">
                            <a class="w-full px-6 py-3 text-center text-[32px] font-bold text-[#F7B23B]">Rp40.500</a>
                        </div>

                        <!-- Buy Button -->
                        <div class="mb-5 flex w-full items-center justify-center pt-2">
                            <a href="https://vt.tokopedia.com/t/ZSSbJ59h6/" class="w-full rounded-xl bg-gradient-to-r from-[#F7B23B] to-[#AD7D29] px-6 py-3 text-center font-medium text-white shadow-md transition-all hover:shadow-lg">Beli Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="z-10 mx-4 sm:mx-20" style="padding-top: 50px; padding-bottom: 50px">
        <ul class="flex flex-col">
            @php
                $index = 0;
            @endphp

            @foreach ($faqs as $faq)
                <li class="my-2 rounded-lg border bg-white py-2 shadow-sm" x-data="accordion({{ $index }})" :class="isActive()">
                    <div class="mx-2 flex flex-row sm:mx-5">
                        <div class="flex w-full flex-col p-3 max-sm:p-2">
                            <h2 @click="handleClick()" class="cursor-pointer text-lg font-medium max-sm:text-[16.5px]">
                                <span>{{ $faq["ask"] }}</span>
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
                                        <clipPath id="clip0_7503_13741"><rect width="24" height="24" fill="white" /></clipPath>
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

    <div class="relative flex items-center justify-center" style="padding-top: 100px; height: 350px">
        <img src="{{ asset("assets/images/landing/produk/emo/footer-new.png") }}" />
    </div>
@endsection

@section("script")
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const swiper = new Swiper('.card-swiper', {
                slidesPerView: 1.15,
                centeredSlides: true,
                spaceBetween: 16,
                slidesPerGroup: 1,
                rewind: true,
                watchSlidesProgress: true,
                slideToClickedSlide: true,
                speed: 450,
                grabCursor: true,
                observer: true,
                observeParents: true,

                pagination: {
                    el: '.swiper-pagination',
                    type: 'progressbar',
                },

                breakpoints: {
                    640: { slidesPerView: 1.35 },
                    768: { slidesPerView: 1.6 },
                    1024: { slidesPerView: 2 },
                },
            });
        });
    </script>

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
                    return this.$store.accordion.tab === this.idx ? 'border-2 border-[#3986A3]' : '';
                },
            }));
        });
    </script>

    <script>
        document.getElementById('openModal').addEventListener('click', function () {
            document.getElementById('modal').classList.remove('hidden');
        });

        document.getElementById('closeModal').addEventListener('click', function () {
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
@endsection
