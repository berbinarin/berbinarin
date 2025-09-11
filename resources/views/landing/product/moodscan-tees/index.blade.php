@extends(
    "landing.layouts.app",
    [
        "title" => "Berbinar Insightful Indonesia",
    ]
)

@section("content")
    {{-- HERO SECTION --}}

    <section class="lg:mt-32 mb-12 lg:mb-36 w-full overflow-x-hidden">
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
                        <img src="{{ asset("assets/images/landing/produk/moodscan-tees/banner-moodscan-tees.png") }}" alt="Moodscan Tees" class="h-[340px] w-auto object-contain max-sm:h-[320px] scale-110" />
                    </div>

                    <div class="lg:order-3">
                        <h2 class="mb-4 bg-gradient-to-r from-[#1C4352] to-[#3986A3] bg-clip-text py-1 font-[inter] text-4xl font-semibold text-transparent lg:text-5xl lg:tracking-wide">MoodScan Tees</h2>
                    </div>

                    <div class="lg:order-4">
                        <p class="text-justify text-lg text-[#70787D] max-lg:text-[17px] max-sm:text-[15px] max-sm:leading-normal">
                            Moodscan Tees merupakan kaos yang nyaman dan mampu memperbaiki suasana hati suatu individu ataupun kelompok dengan pesan motivasi khusus yang diungkap melalui tindakan pemindaian gambar QR Code.
                        </p>
                    </div>
                </div>

                <div class="flex w-full flex-initial items-center justify-center max-lg:flex-1 max-md:hidden lg:w-auto">
                    <img src="{{ asset("assets/images/landing/produk/moodscan-tees/banner-moodscan-tees.png") }}" alt="Moodscan Tees" class="h-[340px] w-auto max-lg:h-[320px]" />
                </div>
            </div>
        </div>
    </section>

    <div class="relative">
        <img src="/assets/images/landing/asset-konseling/vector/vector-line.svg" alt="Vector Image" class="pointer-events-none absolute left-0 z-0 w-full select-none object-fill max-sm:top-40" />
    </div>
    {{-- QR Code --}}

    <section class="relative w-full px-0 mb-8 lg:mb-28">
        <div class="block px-4">
            <div class="mx-auto max-w-3xl rounded-xl border lg:border-2 border-cyan-950 bg-white px-3 pb-4 pt-3 shadow-lg shadow-sky-300 lg:max-w-5xl lg:h-auto">
                <video class="lg:w-full rounded-xl" controls autoplay muted loop playsinline>
                    <source src="{{ asset('assets/images/landing/produk/moodscan-tees/fitur-moodscan-tees.mp4') }}" type="video/mp4">
                    Browser Anda tidak mendukung video.
                </video>
            </div>
        </div>
    </section>

    <section class="relative w-full px-4 mb-6 lg:mb-72 overflow-x-clip">
        <img src="{{ asset("assets/images/landing/produk/moodscan-tees/Squiggly-line.png") }}" alt="" class="absolute left-0 top-10 lg:top-6 z-0 w-full lg:w-[80%] object-fill scale-90 lg:scale-75">
        <div class="relative flex flex-col w-full lg:px-16 lg:gap-60">
            <div class="flex flex-row mb-6 w-full justify-start z-10">
                <div class="w-[85%] lg:w-[60%] h-20 mb-6">
                    <img src="{{ asset("assets/images/landing/produk/moodscan-tees/Mood-Card.png") }}" alt="Mood">
                </div>
            </div>

            <!-- BLUR SETENGAH LINGKARAN PEMBATAS KANAN -->
            <div class="absolute w-full hidden h-0 lg:flex lg:flex-row">
                <div class="absolute top-0 z-0 md:-right-40" style="width: 300px; height: 300px; border-top-left-radius: 420px; border-bottom-left-radius: 420px; border-top-right-radius: 420px; background: #a2d7f0; filter: blur(60px); opacity: 0.9; top: 100px"></div>
            </div>

            <div class="flex flex-row mb-6 w-full justify-end z-10">
                <div class="w-[85%] lg:w-[60%] h-20 mb-6">
                    <img src="{{ asset("assets/images/landing/produk/moodscan-tees/Scan-Card.png") }}" alt="Scan">
                </div>
            </div>

            <!-- BLUR SETENGAH LINGKARAN PEMBATAS KIRI -->
            <div class="absolute translate-y-96 z-0 hidden h-0 lg:flex lg:flex-row">
                <div class="absolute translate-y-96 -left-32 z-0 md:-left-40" style="width: 300px; height: 300px; border-top-left-radius: 420px; border-bottom-left-radius: 420px; border-top-right-radius: 420px; background: #c7f8ff; filter: blur(60px); opacity: 0.9; top: -100px"></div>
            </div>

            <div class="flex flex-row mb-6 w-full justify-start z-10">
                <div class="w-[85%] lg:w-[60%] h-20 mb-6">
                    <img src="{{ asset("assets/images/landing/produk/moodscan-tees/Tees-Card.png") }}" alt="Tees">
                </div>
            </div>

        </div>
    </section>

    <section class="relative flex flex-row justify-center mb-10 lg:mb-20 overflow-x-clip">
        <div class="w-[90%] rounded-xl shadow-2xl p-3 lg:px-32 lg:py-10 z-10" style="background: linear-gradient(90deg,rgba(223, 245, 253, 1) 0%, rgba(66, 102, 115, 1) 100%);">
            <div class="flex flex-row justify-between w-full gap-5 lg:gap-10">
                <div class="flex flex-col  lg:w-1/3">
                    <h3 class="text-lg lg:text-2xl font-bold mb-1">Ukuran Baju</h3>
                    <table class="mb-1 w-full">
                        <thead class="bg-white text-xs lg:text-lg font-semibold">
                            <th class="rounded-l-md lg:rounded-l-2xl px-1 lg:p-2">Size</th>
                            <th class="px-1 lg:p-2">Panjang</th>
                            <th class="rounded-r-md lg:rounded-r-2xl px-1 lg:p-2">Lebar</th>
                        </thead>
                        <tbody class="text-xs lg:text-base font-semibold">
                            <tr class="bg-primary/50">
                                <td class="text-center rounded-l-md lg:rounded-l-2xl lg:p-2">S</td>
                                <td class="text-center lg:p-2">66</td>
                                <td class="text-center rounded-r-md lg:rounded-r-2xl lg:p-2">48</td>
                            </tr>
                            <tr class="bg-white">
                                <td class="text-center rounded-l-md lg:rounded-l-2xl lg:p-2">M</td>
                                <td class="text-center lg:p-2">68</td>
                                <td class="text-center rounded-r-md lg:rounded-r-2xl lg:p-2">50</td>
                            </tr>
                            <tr class="bg-primary/50">
                                <td class="text-center rounded-l-md lg:rounded-l-2xl lg:p-2">L</td>
                                <td class="text-center lg:p-2">70</td>
                                <td class="text-center rounded-r-md lg:rounded-r-2xl lg:p-2">52</td>
                            </tr>
                            <tr class="bg-white">
                                <td class="text-center rounded-l-md lg:rounded-l-2xl lg:p-2">XL</td>
                                <td class="text-center lg:p-2">73</td>
                                <td class="text-center rounded-r-md lg:rounded-r-2xl lg:p-2">54</td>
                            </tr>
                            <tr class="bg-primary/50">
                                <td class="text-center rounded-l-md lg:rounded-l-2xl lg:p-2">2XL</td>
                                <td class="text-center lg:p-2">75</td>
                                <td class="text-center rounded-r-md lg:rounded-r-2xl lg:p-2">56</td>
                            </tr>
                            <tr class="bg-white">
                                <td class="text-center rounded-l-md lg:rounded-l-2xl lg:p-2">3XL</td>
                                <td class="text-center lg:p-2">77</td>
                                <td class="text-center rounded-r-md lg:rounded-r-2xl lg:p-2">58</td>
                            </tr>
                            <tr class="bg-primary/50">
                                <td class="text-center rounded-l-md lg:rounded-l-2xl lg:p-2">4XL</td>
                                <td class="text-center lg:p-2">79</td>
                                <td class="text-center rounded-r-md lg:rounded-r-2xl lg:p-2">60</td>
                            </tr>
                            <tr class="bg-white">
                                <td class="text-center rounded-l-md lg:rounded-l-2xl lg:p-2">5XL</td>
                                <td class="text-center lg:p-2">81</td>
                                <td class="text-center rounded-r-md lg:rounded-r-2xl lg:p-2">62</td>
                            </tr>
                        </tbody>
                    </table>
                    <h3 class="text-sm lg:text-lg font-bold mb-1">*Limited Stocks</h3>
                </div>
                <div class="flex flex-col  lg:w-1/3">
                    <img src="{{ asset("assets/images/landing/produk/moodscan-tees/T-shirt.png") }}" alt="T-shirt" class="mb-4">
                    <a href="https://www.tokopedia.com/berbinarin/moodscan-tees-by-berbinar-in-x-esize-kaos-edukatif-unisex-m-ea46b" target="_blank" class="w-full bg-gradient-to-r from-[#F7B23B] to-[#AD7D29] text-white px-2 py-1 lg:py-2 lg:text-lg text-center rounded-lg shadow hover:scale-110 transition-all">Beli Sekarang</a>
                </div>
            </div>
        </div>
        <!-- BLUR SETENGAH LINGKARAN PEMBATAS KANAN -->
        <div class="absolute w-full hidden h-0 lg:flex lg:flex-row">
            <div class="absolute top-0 z-0 md:-right-40" style="width: 300px; height: 300px; border-top-left-radius: 420px; border-bottom-left-radius: 420px; border-top-right-radius: 420px; background: #a2d7f0; filter: blur(60px); opacity: 0.9; top: 100px"></div>
        </div>
    </section>

    <section class="w-full flex flex-row justify-center mb-7 lg:mb-20 overflow-x-clip">
        <div class="w-[90%] flex flex-row justify-between lg:justify-center gap-4 lg:gap-20">
            <a href="https://www.tokopedia.com/berbinarin/moodscan-tees-by-berbinar-in-x-esize-kaos-edukatif-unisex-m-ea46b" target="_blank" class="bg-white rounded-xl shadow border p-2 lg:w-1/4 hover:scale-110 hover:rotate-3 transition-all">
                <div class="w-full flex flex-row justify-end">
                    <div class="absolute -translate-y-2 translate-x-1 rounded-l-lg lg:rounded-l-xl bg-white px-2 py-1">
                        <div class="bg-gray-300 rounded-full"><i class="bx bxs-heart text-red-500 text-lg lg:text-4xl px-1"></i></div>
                    </div>
                </div>
                <img src="{{ asset("assets/images/landing/produk/moodscan-tees/T-shirt-front.png") }}" alt="T-shirt front" class="rounded-xl lg:w-full">
                <div class="absolute -translate-y-7 lg:-translate-y-11 rounded-r-lg lg:rounded-r-xl bg-white px-2 py-1">
                    <div class="bg-black rounded-2xl px-4 py-1 text-white text-sm lg:text-3xl lg:px-6">Beli</div>
                </div>
            </a>

            <a href="https://www.tokopedia.com/berbinarin/moodscan-tees-by-berbinar-in-x-esize-kaos-edukatif-unisex-m-ea46b" target="_blank" class="bg-white rounded-xl shadow border p-2 lg:w-1/4 hover:scale-110 hover:rotate-3 transition-all">
                <div class="w-full flex flex-row justify-end">
                    <div class="absolute -translate-y-2 translate-x-1 rounded-l-lg lg:rounded-l-xl bg-white px-2 py-1">
                        <div class="bg-gray-300 rounded-full"><i class="bx bxs-heart text-red-500 text-lg lg:text-4xl px-1"></i></div>
                    </div>
                </div>
                <img src="{{ asset("assets/images/landing/produk/moodscan-tees/T-shirt-back.png") }}" alt="T-shirt front" class="rounded-xl lg:w-full">
                <div class="absolute -translate-y-7 lg:-translate-y-11 rounded-r-lg lg:rounded-r-xl bg-white px-2 py-1">
                    <div class="bg-black rounded-2xl px-4 py-1 text-white text-sm lg:text-3xl lg:px-6">Beli</div>
                </div>
            </a>
        </div>

        <div class="absolute w-full flex flex-row">
            <!-- BLUR SETENGAH LINGKARAN PEMBATAS KIRI -->
                <div class="absolute translate-y-40 z-0 hidden h-0 lg:flex lg:flex-row">
                    <div class="absolute -left-32 z-0 md:-left-40" style="width: 300px; height: 300px; border-top-left-radius: 420px; border-bottom-left-radius: 420px; border-top-right-radius: 420px; background: #c7f8ff; filter: blur(60px); opacity: 0.9; top: -100px"></div>
                </div>
        </div>


    </section>

    <section class="relative w-full flex flex-col justify-center overflow-x-clip">

        <h1 class="bg-gradient-to-r from-[rgb(57,134,163)] to-[#1C4352] bg-clip-text text-center font-[inter] text-3xl font-semibold text-transparent lg:tracking-wide mb-8">Alasan Mengapa Produk Ini Spesial</h1>
        <div class="w-full lg:hidden flex flex-col justify-center items-center gap-4">
            <div class="w-[90%] flex flex-row justify-center items-start rounded-xl shadow">
                <div class="w-1/5 flex flex-row justify-center pt-6 px-2">
                    <img src="{{ asset("assets/images/landing/produk/moodscan-tees/reason-1.png") }}" alt="" class="w-auto h-auto">
                </div>
                <div class="w-4/5 flex flex-col justify-center py-4">
                    <h3 class="text-lg font-bold">Inovasi QR code psikologi di kaos</h3>
                    <p class="text-disabled">Scan QR di belakang kaos untuk akses kutipan psikologi inspiratif yang selalu berganti</p>
                </div>
            </div>

            <div class="w-[90%] flex flex-row justify-center items-start rounded-xl shadow">
                <div class="w-1/5 flex flex-row justify-center pt-6 px-2">
                    <img src="{{ asset("assets/images/landing/produk/moodscan-tees/reason-2.png") }}" alt="" class="w-auto h-auto">
                </div>
                <div class="w-4/5 flex flex-col justify-center py-4">
                    <h3 class="text-lg font-bold">Design psikologi yang simple tapi penuh makna</h3>
                    <p class="text-disabled">Kaos ini memadukan psikologi mode dan desain minimalis untuk menghadirkan kesan reflektif yang berbicara tentang dirimu</p>
                </div>
            </div>

            <div class="w-[90%] flex flex-row justify-center items-start rounded-xl shadow">
                <div class="w-1/5 flex flex-row justify-center pt-6 px-2">
                    <img src="{{ asset("assets/images/landing/produk/moodscan-tees/reason-3.png") }}" alt="" class="w-auto h-auto">
                </div>
                <div class="w-4/5 flex flex-col justify-center py-4">
                    <h3 class="text-lg font-bold">Bahan premium 100% cotton combed</h3>
                    <p class="text-disabled">comfort is king (nyaman dipakai untuk berbagai aktivitas)</p>
                </div>
            </div>

            <div class="w-[90%] flex flex-row justify-center items-start rounded-xl shadow">
                <div class="w-1/5 flex flex-row justify-center pt-6 px-2">
                    <img src="{{ asset("assets/images/landing/produk/moodscan-tees/reason-4.png") }}" alt="" class="w-auto h-auto">
                </div>
                <div class="w-4/5 flex flex-col justify-center py-4">
                    <h3 class="text-lg font-bold">Unisex dan size lengkap hingga 5XL</h3>
                    <p class="text-disabled">mampu menjangkau pasar lebih luas, termasuk pasangan serta kategori ukuran plus size</p>
                </div>
            </div>

            <div class="w-[90%] flex flex-row justify-center items-start rounded-xl shadow">
                <div class="w-1/5 flex flex-row justify-center pt-6 px-2">
                    <img src="{{ asset("assets/images/landing/produk/moodscan-tees/reason-5.png") }}" alt="" class="w-auto h-auto">
                </div>
                <div class="w-4/5 flex flex-col justify-center py-4">
                    <h3 class="text-lg font-bold">Limited colaboration</h3>
                    <p class="text-disabled">kolaborasi antara Berbinar Insightful Indonesia dan Esize yang dapat meningkatkan nilai ekslusivitas.</p>
                </div>
            </div>
        </div>


        <!-- BLUR SETENGAH LINGKARAN PEMBATAS KANAN -->
        <div class="absolute w-full -translate-y-40 hidden h-0 lg:flex lg:flex-row">
            <div class="absolute top-0 z-0 md:-right-40" style="width: 300px; height: 300px; border-top-left-radius: 420px; border-bottom-left-radius: 420px; border-top-right-radius: 420px; background: #a2d7f0; filter: blur(60px); opacity: 0.9; top: 100px"></div>
        </div>

        <div class="w-full px-20 hidden lg:flex flex-row justify-center items-start gap-4 mb-4 z-10 min-h-80 lg:h-[22rem] xl:h-80">
            <div class="w-1/3 flex flex-row justify-center items-start rounded-xl shadow bg-white h-full">
                <div class="w-full px-5 flex flex-col justify-center py-4 h-auto">
                    <img src="{{ asset("assets/images/landing/produk/moodscan-tees/reason-1.png") }}" alt="" class="w-20 h-20 mb-10">
                    <h3 class="text-xl font-bold mb-4 h-16">Inovasi QR code psikologi di kaos</h3>
                    <p class="text-disabled">Scan QR di belakang kaos untuk akses kutipan psikologi inspiratif yang selalu berganti</p>
                </div>
            </div>

            <div class="w-1/3 flex flex-row justify-center items-start rounded-xl shadow bg-white h-full">
                <div class="w-full px-5 flex flex-col justify-center py-4 h-auto">
                    <img src="{{ asset("assets/images/landing/produk/moodscan-tees/reason-2.png") }}" alt="" class="w-20 h-20 mb-10">
                    <h3 class="text-xl font-bold mb-4 h-16">Design psikologi yang simple tapi penuh makna</h3>
                    <p class="text-disabled">Kaos ini memadukan psikologi mode dan desain minimalis untuk menghadirkan kesan reflektif yang berbicara tentang dirimu</p>
                </div>
            </div>

            <div class="w-1/3 flex flex-row justify-center items-start rounded-xl shadow bg-white h-full">
                <div class="w-full px-5 flex flex-col justify-center py-4 h-auto">
                    <img src="{{ asset("assets/images/landing/produk/moodscan-tees/reason-3.png") }}" alt="" class="w-20 h-20 mb-10">
                    <h3 class="text-xl font-bold mb-4 h-16">Bahan premium 100% cotton combed</h3>
                    <p class="text-disabled">comfort is king (nyaman dipakai untuk berbagai aktivitas)</p>
                </div>
            </div>
        </div>

        <div class="w-full px-20 hidden lg:flex flex-row justify-center items-start gap-4 z-10">
            <div class="w-1/2 flex flex-row justify-center items-start rounded-xl shadow bg-white h-full">
                <div class="w-full px-5 flex flex-col justify-center py-4 h-auto">
                    <img src="{{ asset("assets/images/landing/produk/moodscan-tees/reason-4.png") }}" alt="" class="w-20 h-20 mb-10">
                    <h3 class="text-xl font-bold mb-4 h-16">Unisex dan size lengkap hingga 5XL</h3>
                    <p class="text-disabled">mampu menjangkau pasar lebih luas, termasuk pasangan serta kategori ukuran plus size</p>
                </div>
            </div>

            <div class="w-1/2 flex flex-row justify-center items-start rounded-xl shadow bg-white h-full">
                <div class="w-full px-5 flex flex-col justify-center py-4 h-auto">
                    <img src="{{ asset("assets/images/landing/produk/moodscan-tees/reason-5.png") }}" alt="" class="w-20 h-20 mb-10">
                    <h3 class="text-xl font-bold mb-4 h-16">Limited colaboration</h3>
                    <p class="text-disabled">kolaborasi antara Berbinar Insightful Indonesia dan Esize yang dapat meningkatkan nilai ekslusivitas.</p>
                </div>
            </div>

        </div>

    </section>
@endsection
