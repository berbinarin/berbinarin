@extends('layouts.main-new', [
    'title' => 'Berbinar Insightful Indonesia',
    'active' => 'Produk Berbinar',
    'page' => 'EMO',
])

@section('content')

    <section id="customSection" class="mb-12 w-full overflow-x-hidden">
        <div class="absolute left-0 top-0 h-fit md:block w-1/2 md:w-1/3 lg:w-1/4 pt-32 md:pt-0">
            <img
                src="{{ asset("assets/images/landing/produk/emo/blop-1.png") }}"
                alt="top-left-texture"
                class="object-cover"
            />
        </div>
        <div class="absolute right-0 top-0 h-fit md:block w-1/2 md:w-1/3 lg:w-1/4 pt-32 md:pt-0">
            <img
                src="{{ asset("assets/images/landing/produk/emo/blop-2.png") }}"
                alt="top-right-texture"
                class="object-cover"
            />
        </div>
        <div class="relative">
            <div class="flex flex-row justify-between items-center max-sm:mt-32 mx-20 max-sm:mx-4 gap-x-10 z-10">
                <div class="flex flex-col flex-1 space-y-6 max-sm:space-y-2 max-w-xl max-lg:min-w-auto">
                    <a href="{{ route('produk-new') }}">
                        <div class="flex lg:order-1 items-center space-x-2 cursor-pointer">
                            <img src="{{ asset('assets/images/landing/asset-konseling/vector/left-arrow.svg') }}" alt="Left Arrow" class="h-3 w-auto">
                            <p class="text-[15px] font-semibold text-[#3986A3]">Produk Berbinar</p>  
                        </div>
                    </a>
    
                    <div class="hidden max-md:flex max-lg:flex-none items-center justify-center w-full lg:w-auto lg:order-2">
                        <img src="{{ asset('assets/images/landing/asset-konseling/vector/hero.png') }}" alt="Konseling" class="h-[340px] max-sm:h-[320px] w-auto object-contain">
                    </div>
                    
                    <div class="lg:order-3">
                        <h2 class="mb-4 bg-gradient-to-r from-[#1C4352] to-[#3986A3] bg-clip-text py-1 font-[inter] text-4xl font-semibold text-transparent lg:text-5xl lg:tracking-wide">EmoShuffle</h2>  
                    </div>
    
                    <div class="lg:order-4">
                        <p class="text-[#70787D] text-justify max-sm:text-[15px] max-sm:leading-normal text-lg max-lg:text-[17px]">
                            Merasa bosan bermain kartu yang itu-itu saja? EmoShuffle solusinya! Dengan kartu EmoShuffle kamu dapat saling bermain kartu sembari mengungkapkan perasaan satu sama lainnya. Karena dalam kartu EmoShuffle terdapat tiga jenis kartu yang salah satunya berbentuk pertanyaan seputar psikologis dalam diri.
                        </p>
                    </div>
                </div>
    
                <div class="flex max-md:hidden flex-initial max-lg:flex-1 items-center justify-center w-full lg:w-auto">
                    <img src="{{ asset('assets/images/landing/produk/emo/banner.png') }}" alt="Konseling" class="h-[340px] max-lg:h-[320px] w-auto">
                </div>
            </div>
        </div>
    </section>
    {{-- Mobile screen mini map  --}}
    <section class="mb-12 w-full relative block md:hidden">
        <div class="absolute pt-4 ">
            <img
                src="{{ asset("assets/images/landing/produk/emo/path.png") }}"
                alt="top-texture"
                class="object-cover"
            />
        </div>
        <div class="mx-auto relative">
            <h1
                class="mb-4 bg-gradient-to-r from-[#1C4352] to-[#3986A3] bg-clip-text py-1 font-[inter] text-4xl font-semibold text-transparent lg:text-5xl lg:tracking-wide text-center md:px-0 px-4"
            >
            Cara Memainkan Emoshuffle 
            </h1>
            <div class="flex justify-start pl-4 md:pl-0 md:justify-center w-1/2 md:w-3/4 md:pt-16">
                <img 
                class="object-cover h-24 md:pr-20"
                src="{{ asset("assets/images/landing/produk/emo/flag.png") }}"/>
            </div>
            <div class="relative grid font-semibold gap-4" style="grid-template-columns: repeat(3, minmax(0,1fr)); grid-template-rows: repeat(4, minmax(0,1fr))">
                <img src="{{ asset("assets/images/landing/produk/emo/mobile-line.png") }}" class="absolute" style="padding-left: 50px"/>
                <div class="z-10 flex items-center text-sm pr-8" style="grid-column: span 3">
                    <img class="object-cover h-28" src="{{ asset("assets/images/landing/produk/emo/reload-icon.png") }}"/>
                    <p class="leading-relaxed">Sebelum permainan dimulai, kartu dikocok terlebih dahulu agar urutan kartu tidak dapat diprediksi oleh pemain</p>
                </div>
                <div class="z-10 flex items-center text-sm pr-8" style="grid-column: span 3">
                    <img class="object-cover h-28" src="{{ asset("assets/images/landing/produk/emo/upload-icon.png") }}"/>
                    <p class="leading-relaxed">Letakkan tumpukan kartu di tengah. Setiap pemain kemudian mengambil 5 hingga 7 kartu secara bergiliran</p>
                </div>
                <div class="z-10 flex items-center text-sm pr-8" style="grid-column: span 3">
                    <img class="object-cover h-28" src="{{ asset("assets/images/landing/produk/emo/book-icon.png") }}"/>
                    <p class="leading-relaxed">Setiap pemain akan secara bergiliran membacakan satu kartu miliknya kepada semua pemain.</p>
                </div>
                <div class="z-10 flex items-center text-sm pr-8" style="grid-column: span 3">
                    <img class="object-cover h-28" src="{{ asset("assets/images/landing/produk/emo/comment-icon.png") }}"/>
                    <p class="leading-relaxed">Pemain lain memberikan jawaban sesuai isi kartu yang dibacakan. Ada tiga jenis kartu berbeda yang mungkin muncul dalam permainan ini.</p>
                </div>
            </div>
            <div class="px-6 pt-10">
                <h1 class="bg-gradient-to-r from-[#1C4352] to-[#3986A3] bg-clip-text font-[inter] text-3xl text-transparent font-semibold lg:tracking-wide text-center">3 Jenis Kartu</h1>
                <div class="swiper-container card-swiper mt-8">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/images/landing/produk/emo/card-1.png') }}" alt="Kartu Question" class="rounded-lg shadow-md w-full"/>
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/images/landing/produk/emo/card-2.png') }}" alt="Kartu Quote" class="rounded-lg shadow-md w-full"/>
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/images/landing/produk/emo/card-3.png') }}" alt="Kartu Challenge" class="rounded-lg shadow-md w-full"/>
                        </div>
                    </div>
                    <div class="swiper-pagination mt-6" style="position: relative; height: 8px; margin-top: 20px;"></div>
                </div>
            </div>
            <div class="relative grid font-semibold gap-4 py-10" style="grid-template-columns: repeat(3, minmax(0,1fr)); grid-template-rows: repeat(3, minmax(0,1fr))">
                <img src="{{ asset("assets/images/landing/produk/emo/mobile-line.png") }}" class="absolute" style="padding-left: 50px"/>
                <div class="z-10 flex items-center px-4" style="grid-column: span 3">
                    <div class="border border-[#B3B3B3] shadow-md shadow-[#B3B3B3] bg-white flex rounded-lg w-full">
                        <div class="bg-[#F7B23B] flex justify-center items-center pr-4" style="border-top-right-radius: 9999px; border-bottom-right-radius: 9999px;">
                            <img class="w-20 h-20 pl-2 py-2" src="{{ asset('assets/images/landing/produk/emo/phone-icon.png') }}"/>
                        </div>
                        <div class="py-2 px-3 text-[#70787D] text-xs text-start" style="max-width: 300px">
                            Jika ada pemain yang merasa tidak nyaman untuk menjawab, berikan kesempatan untuk mengambil kartu <span class="font-extrabold">Do It Now!</span> untuk menggantikan <span class="font-extrabold">kartu Question</span>, lakukan apa yang diperintahkan dalam kartu tersebut.
                        </div>
                    </div>
                </div>
                <div class="z-10 flex items-center px-4" style="grid-column: span 3">
                    <div class="border border-[#B3B3B3] shadow-md shadow-[#B3B3B3] bg-white flex rounded-lg w-full">
                        <div class="bg-[#F7B23B] flex justify-center items-center pr-4" style="border-top-right-radius: 9999px; border-bottom-right-radius: 9999px;">
                            <img class="w-20 h-20 pl-2 py-2" src="{{ asset('assets/images/landing/produk/emo/phone-icon.png') }}"/>
                        </div>
                        <div class="py-2 px-3 text-gray-800 text-xs text-start" style="max-width: 300px">
                            Teruskan permainan hingga semua kartu di tumpukan EmoShuffle telah diambil dan kartu-kartu tersebut telah dibacakan atau tindakan yang diinstruksikan telah dilakukan.
                        </div>
                    </div>
                </div>
                <div class="z-10 flex items-center text-sm pr-8" style="grid-column: span 3">
                    <img class="object-cover h-28" src="{{ asset("assets/images/landing/produk/emo/warning-icon.png") }}"/>
                    <p class="leading-relaxed">Jika seorang pemain tidak menjawab pertanyaan, ia harus mengambil 1 kartu perintah dan menjalankan instruksinya.</p>
                </div>
            </div>
        </div>
    </section>
    {{-- Desktop screen mini map  --}}
    <section class="mb-12 w-full relative hidden md:block">
        <div class="absolute pt-8 md:pt-0">
            <img
                src="{{ asset("assets/images/landing/produk/emo/path.png") }}"
                alt="top-texture"
                class="object-cover"
            />
        </div>
        <div class="mx-auto md:mx-14 md:pt-14 3xl:pt-6 relative">
            <h1
                class="mb-4 bg-gradient-to-r from-[#1C4352] to-[#3986A3] bg-clip-text py-1 font-[inter] text-4xl font-semibold text-transparent lg:text-5xl lg:tracking-wide text-center md:px-0 px-4"
            >
            Cara Memainkan Emoshuffle 
            </h1>
            <div class="flex justify-center w-1/2 md:w-3/4 md:pt-16" style="padding-left: 200px">
                <img 
                class="object-cover"
                src="{{ asset("assets/images/landing/produk/emo/flag.png") }}"/>
            </div>
            <div class="grid relative font-semibold" style="grid-template-columns: repeat(12, minmax(0,1fr)); grid-template-rows: repeat(10, minmax(0,1fr))">
                <div>
                    <img
                        src="{{ asset("assets/images/landing/produk/emo/dotted-line.png") }}" class="absolute left-1/2 -translate-x-1/2"
                    />
                </div>
                <div class="z-10" style="grid-column: span 7">
                    <img src="{{ asset("assets/images/landing/produk/emo/reload-icon.png") }}" class="object-cover h-44 justify-self-end" style="justify-self: end"/>
                </div>
                <div class="flex items-center" style="grid-column: span 4">
                    <p style="padding-right: 70px">Sebelum permainan dimulai, kartu dikocok terlebih dahulu agar urutan kartu tidak dapat diprediksi oleh pemain</p>
                </div>
                <div class="z-10" style="grid-row: span 1; grid-column: span 6">
                    <div class="flex items-center" style="justify-self: end">
                        <p style="padding-left: 70px">Letakkan tumpukan kartu di tengah. Setiap pemain kemudian mengambil 5 hingga 7 kartu secara bergiliran.</p>
                        <img src="{{ asset("assets/images/landing/produk/emo/upload-icon.png") }}"/>
                    </div>
                </div>
                <div class="z-10" style="grid-column: span 8;">
                    <img src="{{ asset("assets/images/landing/produk/emo/book-icon.png") }}" class="object-cover h-44 justify-self-end" style="justify-self: end"/>
                </div>
                <div class="flex items-center" style="grid-column: span 3">
                    <p style="padding-right: 70px">Setiap pemain akan secara bergiliran membacakan satu kartu miliknya kepada semua pemain.</p>
                </div>
                <div class="z-10" style="grid-column: span 7">
                    <div class="flex items-center" style="justify-self: end">
                        <p style="padding-left: 150px">Pemain lain memberikan jawaban sesuai isi kartu yang dibacakan. Ada tiga jenis kartu berbeda yang mungkin muncul dalam permainan ini.</p>
                        <img src="{{ asset("assets/images/landing/produk/emo/comment-icon.png") }}"/>
                    </div>
                </div>
                <div class="z-10" style="grid-column: span 12; grid-row: span 5">
                    <div class="p-4 border backdrop-blur-sm rounded-3xl" style="border-color: #74AABF; background-color: #D7E6ED90;">
                        <h1 class="bg-gradient-to-r from-[#1C4352] to-[#3986A3] bg-clip-text py-4 font-[inter] text-4xl font-semibold text-transparent lg:text-5xl lg:tracking-wide text-center">3 Jenis Kartu</h1>
                        <div class="flex justify-center gap-16 pt-4">
                            <img src="{{ asset("assets/images/landing/produk/emo/card-1.png") }}" class="hover:scale-100"/>
                            <img src="{{ asset("assets/images/landing/produk/emo/card-2.png") }}" class="hover:p-4"/>
                            <img src="{{ asset("assets/images/landing/produk/emo/card-3.png") }}" class="hover:p-4"/>
                        </div>
                        <div class="pt-8 flex flex-col gap-4 font-light text-[#70787D]" style="padding-left: 130px; padding-right: 130px">
                            <div class="border border-[#B3B3B3] shadow-md shadow-[#B3B3B3] bg-white flex rounded-lg">
                                <div class="rounded-r-full bg-[#F7B23B] flex justify-center p-4">
                                    <img src="{{ asset("assets/images/landing/produk/emo/phone-icon.png") }}"/>
                                </div>
                                <div class="py-2 px-4">Jika ada pemain yang merasa tidak nyaman untuk menjawab, berikan kesempatan untuk mengambil kartu <span class="font-extrabold">Do It Now!</span> untuk menggantikan <span class="font-extrabold">kartu Question</span>, lakukan apa yang diperintahkan dalam kartu tersebut.</div>
                            </div>
                            <div class="border border-[#B3B3B3] shadow-md shadow-[#B3B3B3] bg-white flex rounded-lg">
                                <div class="rounded-r-full bg-[#F7B23B] flex justify-center p-4">
                                    <img src="{{ asset("assets/images/landing/produk/emo/phone-icon.png") }}"/>
                                </div>
                                <div class="py-2 px-4">Teruskan permainan hingga semua kartu di tumpukan EmoShuffle telah diambil dan kartu-kartu tersebut telah dibacakan atau tindakan yang diinstruksikan telah dilakukan.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="z-10" style="grid-column: span 8">
                    <div class="flex justify-end">
                        <img src="{{ asset("assets/images/landing/produk/emo/flag.png") }}" class="pr-8 pb-8"/>
                        <img src="{{ asset("assets/images/landing/produk/emo/warning-icon.png") }}" class="object-cover h-44" />
                    </div>
                </div>
                <div class="flex items-center" style="grid-column: span 3">
                    <p style="padding-right: 10px">Jika seorang pemain tidak menjawab pertanyaan, ia harus mengambil 1 kartu perintah dan menjalankan instruksinya.</p>
                </div>
            </div>
        </div>
    </section>
    {{-- Mobile screen price --}}
    <section class="p-6 w-full block md:hidden">
        <div class="relative left-1/2" style=" min-height: 650px; width: 90%; transform: translateX(-50%)">
            <img src="{{ asset("assets/images/landing/produk/emo/pricebg-mobile.png") }}" class="object-cover w-full h-full absolute rounded-3xl" style="z-index: -20;" />
            <div class="flex flex-col items-center px-8 py-5 gap-4 text-white">
                <h1 class="bg-clip-text font-[inter] text-2xl font-semibold text-white lg:text-4xl lg:tracking-wide text-center">Dapatkan Segera EmoShuffle Milikmu!</h1>
                <div class="flex flex-col gap-2">
                    <p class="text-center text-xl py-2">Standar 🃏</p>
                    <div class="bg-white py-6 px-8 rounded-2xl relative shadow-md shadow-black" style="opacity: 0.9">
                        <h1 class="text-xl text-black text-center">Online/Offline</h1>
                        <h1 class="text-xl text-[#3986A3] text-center">Rp40.500</h1>
                        <div class="flex flex-col text-sm text-center text-[#70787D] pt-5">
                            <p><i class="bx bx-check"></i> 55 Kartu EmoShuffle</p>
                            <p><i class="bx bx-check"></i> Packaging Standar</p>
                        </div>
                        <div class="flex items-center justify-center pt-10">
                            <button class="bg-gradient-to-r from-[#F7B23B] to-[#AD7D29] text-white text-xs font-medium py-2 px-6 rounded-xl justify-self-center">
                                Coming Soon
                            </button>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <p class="text-center text-xl py-2">Eksklusif 💎️</p>
                    <div class="bg-white py-6 px-8 rounded-2xl relative shadow-md shadow-black" style="opacity: 0.9">
                        <h1 class="text-xl text-black text-center">Online/Offline</h1>
                        <h1 class="text-xl text-[#3986A3] text-center">Rp70.500</h1>
                        <div class="flex flex-col text-sm text-center text-[#70787D] pt-5">
                            <p><i class="bx bx-check"></i> 55 Kartu EmoShuffle</p>
                            <p><i class="bx bx-check"></i> Packaging Premiun dan Elegan</p>
                        </div>
                        <div class="flex items-center justify-center pt-10">
                            <button class="bg-gradient-to-r from-[#F7B23B] to-[#AD7D29] text-white text-xs font-medium py-2 px-6 rounded-xl justify-self-center">
                                Coming Soon
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Desktop screen price --}}
    <section class="mb-12 w-full hidden md:block">
        <div class="relative left-1/2" style=" min-height: 400px; width: 90%; transform: translateX(-50%)">
            <img src="{{ asset("assets/images/landing/produk/emo/price-bg.png") }}" class="object-cover w-full h-full absolute rounded-3xl" style="z-index: -20;" />
            <div class="absolute inset-0 rounded-3xl" style="opacity: 0.7; z-index: -19; background-color: #205467"></div>
            <div class="px-5 pt-10 w-full flex-col flex justify-center">
                <h1 class="bg-clip-text font-[inter] text-2xl font-semibold text-white lg:text-4xl lg:tracking-wide text-center">Dapatkan Segera EmoShuffle Milikmu!</h1>
                <div class="flex justify-center pt-10 px-16 text-white">
                    <div class="w-1/2 flex flex-col justify-center items-center text-2xl">
                        <p class="text-center">Standar 🃏</p>
                        <div class="bg-white py-6 px-16 rounded-2xl relative shadow-md shadow-black" style="bottom: -40px; opacity: 0.9">
                            <h1 class="text-4xl text-[#3986A3] text-center">Rp40.500</h1>
                            <div class="flex flex-col text-lg text-[#70787D] pt-10">
                                <p><i class="bx bx-check"></i> 55 Kartu EmoShuffle</p>
                                <p><i class="bx bx-check"></i> Packaging Standar</p>
                            </div>
                            <div class="flex items-center justify-center pt-10">
                                <button class="bg-gradient-to-r from-[#F7B23B] to-[#AD7D29] text-white text-base font-medium py-2 px-6 rounded-xl justify-self-center">
                                    Coming Soon
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="w-1/2 flex flex-col justify-center items-center text-2xl">
                        <p class="text-center">Eksklusif 💎️</p>
                        <div class="bg-white py-6 px-16 rounded-2xl relative shadow-md shadow-black" style="bottom: -40px; opacity: 0.9">
                            <h1 class="text-4xl text-[#3986A3] text-center">Rp70.500</h1>
                            <div class="flex flex-col text-lg text-[#70787D] pt-10" style="max-width: 200px">
                                <p><i class="bx bx-check"></i> 55 Kartu EmoShuffle</p>
                                <p><i class="bx bx-check"></i> Packaging Premiun dan Elegan</p>
                            </div>
                            <div class="flex items-center justify-center pt-10">
                                <button class="bg-gradient-to-r from-[#F7B23B] to-[#AD7D29] text-white text-base font-medium py-2 px-6 rounded-xl justify-self-center">
                                    Coming Soon
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mb-12 w-full">
        <div class="px-6 md:px-16 flex flex-col gap-6 md:pt-44" style="padding-top: 40px">
            <div class="md:py-8 md:px-16 p-4 border border-[#3986A3] rounded-lg bg-white">
                <h1 class="text-xl pb-2 md:pb-0 border-b border-b-black" style="border-bottom: none">Apa perbedaan Standar dan Eksklusif?</h1>
                <p class="md:pr-24 md:pt-10 leading-relaxed text-[#6F6C90]">Keduanya memiliki ukuran kartu 9 x 5,5 cm, dicetak di atas art paper 260 gsm, dan berisi 55 kartu per set. Perbedaan terletak pada kemasannya: EmoShuffle Standar menggunakan box biasa dengan penutup manual, sedangkan EmoShuffle Eksklusif hadir dalam kemasan box magnetik yang lebih premium.</p>
            </div>
            <div class="md:py-8 md:px-16 p-4 border rounded-lg shadow-md shadow-black bg-white">
                <h1 class="text-xl">Apakah EmoShuffle bisa digunakan sebagai terapi?</h1>
            </div>
            <div class="md:py-8 md:px-16 p-4 border rounded-lg shadow-md shadow-black bg-white">
                <h1 class="text-xl">Apa saja isi dalam satu box EmoShuffle?</h1>
            </div>
        </div>
    </section>
    <div class="flex justify-center items-center relative" style="padding-top: 100px; height: 350px">
        <img src="{{ asset("assets/images/landing/produk/emo/footer.png") }}"/>
    </div>

    <style>
        .swiper {
            width: 100%;
            height: 400px;
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
            background: #9DD4EE;
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

    <script>
            document.addEventListener('DOMContentLoaded', function() {
            const swiper = new Swiper('.card-swiper', {
                slidesPerView: 1.2,
                centeredSlides: true,
                spaceBetween: 20,
                loop: true,
                pagination: {
                    el: '.swiper-pagination',
                    type: 'progressbar',
                },
                breakpoints: {
                    640: {
                        slidesPerView: 1.5,
                    },
                    768: {
                        slidesPerView: 1.8,
                    },
                    1024: {
                        slidesPerView: 2.2,
                    },
                }
            });
        });
    </script>

@endsection