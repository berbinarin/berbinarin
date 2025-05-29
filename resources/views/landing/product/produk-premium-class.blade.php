@extends('landing.layouts.app', [
    'title' => 'Berbinar Insightful Indonesia',
    'active' => 'Produk Berbinar',
    'page' => 'Premium Class',
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
                <a href="{{ route('product.index') }}">
                    <div class="flex lg:order-1 items-center space-x-2 cursor-pointer">
                        <img src="{{ asset('assets/images/landing/asset-konseling/vector/left-arrow.svg') }}" alt="Left Arrow" class="h-3 w-auto">
                        <p class="text-[15px] font-semibold text-[#3986A3]">Produk Berbinar</p>  
                    </div>
                </a>

                <div class="hidden max-md:flex max-lg:flex-none items-center justify-center w-full lg:w-auto lg:order-2">
                    <img src="{{ asset('assets/images/landing/asset-konseling/vector/hero.png') }}" alt="Konseling" class="h-[340px] max-sm:h-[320px] w-auto object-contain">
                </div>
                
                <div class="lg:order-3">
                    <h2 class="mb-4 bg-gradient-to-r from-[#1C4352] to-[#3986A3] bg-clip-text py-1 font-[inter] text-4xl font-semibold text-transparent lg:text-5xl lg:tracking-wide">Premium Class</h2>  
                </div>

                <div class="lg:order-4">
                    <p class="text-[#70787D] text-justify max-sm:text-[15px] max-sm:leading-normal text-lg max-lg:text-[17px]">
                        Premium Class adalah layanan private class untuk mengembangkan potensi diri yang terdiri dari kelas daring berbasis zoom, konseling materi secara langsung, dan pemberian tugas yang disediakan oleh mentor Premium Class.
                    </p>
                </div>
            </div>

            <div class="flex max-md:hidden flex-initial max-lg:flex-1 items-center justify-center w-full lg:w-auto">
                <img src="{{ asset('assets/images/landing/produk/premium-class/banner.png') }}" alt="Konseling" class="h-[340px] max-lg:h-[320px] w-auto">
            </div>
        </div>
    </div>
</section>
<section id="customSection" class="mb-12 w-full relative">
    <div class="absolute pt-4 w-full">
        <img
            src="{{ asset("assets/images/landing/produk/emo/path.png") }}"
            alt="top-texture"
            class="object-cover w-full"
        />
    </div>
    <div class="relative font-[inter]">
        <h1 class="text-3xl font-semibold lg:text-5xl text-center text-black">
            Mentor <span class="bg-gradient-to-r from-[#F7B23B] to-[#AD7D29] px-2 text-white">Premium Class</span>
        </h1>
        <div class="py-10 px-4 flex flex-col md:flex-row justify-center gap-4">
            <img src="{{ asset('assets/images/landing/produk/premium-class/banner-2.png') }}" class="object-cover"/>
            <div class="py-4">
                <h1 class="text-4xl lg:text-5xl text-black font-semibold text-center md:text-start">Sherina Anugerah Putri, S.Mat</h1>
                <div class="md:px-10 px-2 pt-8">
                    <div class="flex items-center gap-4">
                        <img class="object-cover" src="{{ asset('assets/images/landing/produk/premium-class/kelas-icon.png') }}"/>
                        <div class="">
                            <p class="text-2xl text-[#F7B23B]">Kelas</p>
                            <p class="text-lg text-black">Data Analyst at PRMN</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-4 pt-6">
                        <img class="object-cover" src="{{ asset('assets/images/landing/produk/premium-class/topik-icon.png') }}"/>
                        <div class="">
                            <p class="text-2xl text-[#F7B23B]">Topik</p>
                            <p class="text-lg text-black">Data Analyst & Big Data</p>
                        </div>
                    </div>
                    <div class="flex flex-col gap-1 pt-6">
                        <p>Dapatlkan layanan private class dengan mentor berkualitas</p>
                        <p>Belajar lebih fokus, fleksibel, dan sesuai kebutuhanmu bersama mentor berpengalaman</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    {{-- Desktop screen price --}}
    <section class="mb-12 w-full hidden md:block">
        <div class="relative left-1/2" style=" min-height: 400px; width: 90%; transform: translateX(-50%)">
            <img src="{{ asset("assets/images/landing/produk/premium-class/banner-3.png") }}" class="object-cover w-full h-full absolute rounded-3xl" style="z-index: -20;" />
            <div class="absolute inset-0 rounded-3xl" style="opacity: 0.7; z-index: -19; background-color: #205467"></div>
            <div class="px-5 pt-10 w-full flex-col flex justify-center">
                <h1 class="bg-clip-text font-[inter] text-2xl font-semibold text-white lg:text-4xl lg:tracking-wide text-center">Jenis Layanan Premium Class</h1>
                <div class="flex justify-center px-16 text-white gap-6">
                    <div class="w-1/2 flex flex-col justify-center items-center text-2xl">
                        <div class="bg-white py-6 px-16 rounded-2xl relative shadow-md shadow-black h-full" style="bottom: -100px; opacity: 0.9">
                            <h1 class="text-2xl text-black font-semibold text-center">Kelas Daring </h1>
                            <div class="flex flex-col text-lg text-[#70787D] gap-5 pt-5">
                                <div class="bg-gray-200 w-full" style="height: 2px"></div>
                                <h1>Model produk ini berupa akses materi pembelajaran dari narasumber sekaligus mentor kompeten sesuai topik kelas. Materi disampaikan secara daring melalui Zoom dan dapat dilanjutkan dengan sesi personal mentoring secara privat melalui chat WhatsApp, sesuai syarat dan ketentuan yang berlaku.</h1>
                            </div>
                        </div>
                    </div>
                    <div class="w-1/2 flex flex-col justify-center items-center text-2xl">
                        <div class="bg-white py-6 px-16 rounded-2xl relative shadow-md shadow-black h-full" style="bottom: -100px; opacity: 0.9">
                            <h1 class="text-2xl text-black font-semibold text-center">Konseling Materi Secara Langsung</h1>
                            <div class="flex flex-col text-lg text-[#70787D] gap-5 pt-5">
                                <div class="bg-gray-200 w-full" style="height: 2px"></div>
                                <h1>Peserta dapat berdiskusi langsung dengan mentor berkompeten selama sesi pembelajaran daring, untuk memperdalam pemahaman materi. Diskusi berlangsung sesuai jadwal dan mengikuti syarat serta ketentuan yang berlaku.</h1>
                            </div>
                        </div>
                    </div>
                    <div class="w-1/2 flex flex-col justify-center items-center text-2xl">
                        <div class="bg-white py-6 px-16 rounded-2xl relative shadow-md shadow-black h-full" style="bottom: -100px; opacity: 0.9">
                            <h1 class="text-2xl text-black font-semibold text-center">Pemberian Tugas ( Study Case )</h1>
                            <div class="flex flex-col text-lg text-[#70787D] gap-5 pt-5">
                                <div class="bg-gray-200 w-full" style="height: 2px"></div>
                                <h1>Setiap peserta akan menerima studi kasus setelah menyelesaikan sesi mentoring. Studi kasus ini dirancang untuk menguji pemahaman dan kemampuan peserta dalam menerapkan materi ke situasi nyata. Tujuannya adalah memastikan peserta mampu mengaplikasikannya secara praktis.</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<section class="p-6 w-full block md:hidden">
    <div class="relative left-1/2" style="min-height: 450px; width: 90%; transform: translateX(-50%)">
        <img src="{{ asset("assets/images/landing/produk/emo/pricebg-mobile.png") }}" class="object-cover w-full h-full absolute rounded-3xl" style="z-index: -20;" />
        <div class="flex flex-col items-center px-8 py-5 gap-4 text-white">
            <h1 class="bg-clip-text font-[inter] text-2xl font-semibold text-white lg:text-4xl lg:tracking-wide text-center">Jenis Layanan Premium Class</h1>
            
            <!-- Swiper container -->
            <div class="swiper mySwiper w-full h-96" style="height: 450px">
                <div class="swiper-wrapper">
                    <!-- Slide 1 -->
                    <div class="swiper-slide">
                        <div class="bg-white py-6 px-8 rounded-2xl relative shadow-md shadow-black" style="opacity: 0.9">
                            <h1 class="text-xl text-black text-center">Kelas Daring</h1>
                            <div class="bg-gray-200 w-full mt-5" style="height: 2px"></div>
                            <div class="flex flex-col text-sm text-start text-[#70787D] pt-5">
                                <h1>Model produk ini berupa akses materi pembelajaran dari narasumber sekaligus mentor kompeten sesuai topik kelas. Materi disampaikan secara daring melalui Zoom dan dapat dilanjutkan dengan sesi personal mentoring secara privat melalui chat WhatsApp, sesuai syarat dan ketentuan yang berlaku.</h1>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-white py-6 px-8 rounded-2xl relative shadow-md shadow-black" style="opacity: 0.9">
                            <h1 class="text-xl text-black text-center">Konseling Materi Secara Langsung</h1>
                            <div class="bg-gray-200 w-full mt-5" style="height: 2px"></div>
                            <div class="flex flex-col text-sm text-start text-[#70787D] pt-5">
                                <h1>Peserta dapat berdiskusi langsung dengan mentor berkompeten selama sesi pembelajaran daring, untuk memperdalam pemahaman materi. Diskusi berlangsung sesuai jadwal dan mengikuti syarat serta ketentuan yang berlaku.</h1>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-white py-6 px-8 rounded-2xl relative shadow-md shadow-black" style="opacity: 0.9">
                            <h1 class="text-xl text-black text-center">Pemberian Tugas ( Study Case )</h1>
                            <div class="bg-gray-200 w-full mt-5" style="height: 2px"></div>
                            <div class="flex flex-col text-sm text-start text-[#70787D] pt-5">
                                <h1>Setiap peserta akan menerima studi kasus setelah menyelesaikan sesi mentoring. Studi kasus ini dirancang untuk menguji pemahaman dan kemampuan peserta dalam menerapkan materi ke situasi nyata. Tujuannya adalah memastikan peserta mampu mengaplikasikannya secara praktis.</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="w-full hidden md:block" style="padding-top: 200px">
    <div class="py-10 px-4 flex flex-col">
        <h1 class="text-3xl font-semibold lg:text-5xl text-center text-black w-full">
            Alur Pendaftaran <span class="bg-gradient-to-r from-[#F7B23B] to-[#AD7D29] px-2 text-white">Premium Class</span>
        </h1>
        
        <!-- Swiper container -->
        <div class="px-8 relative" style="padding-top: 60px">
            <!-- Swiper wrapper -->
            <div class="swiper premiumClassSwiper">
                <div class="swiper-wrapper">
                    <!-- Card 1 -->
                    <div class="swiper-slide">
                        <div class="flex flex-col gap-6">
                            <div class="relative w-full h-16 flex items-center justify-center drop-shadow-lg">
                                <div class="absolute w-16 h-16 inset-0 rounded-full justify-self-center" style="background: linear-gradient(to bottom, #74AABF 0%, #3986A3 23%, #163641 100%)"></div>
                                <span class="relative text-4xl font-bold text-white">1</span>
                            </div>
                            <div class="bg-white py-6 px-8 rounded-2xl relative shadow-md shadow-black" style="opacity: 0.9">
                                <img src="{{ asset('assets/images/landing/produk/premium-class/search-icon.png') }}" class="object-cover justify-self-center"/>
                                <div class="bg-gray-200 w-full mt-5" style="height: 2px"></div>
                                <div class="flex flex-col text-sm text-start text-[#70787D] pt-5">
                                    <h1 style="min-height: 100px">Calon peserta dapat memilih  kelas yang telah disediakan oleh Berbinar Insightful Indonesia melalui link pendaftaran yang telah disediakan.</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Card 2 -->
                    <div class="swiper-slide">
                        <div class="flex flex-col gap-6">
                            <div class="relative w-full h-16 flex items-center justify-center drop-shadow-lg">
                                <div class="absolute w-16 h-16 inset-0 rounded-full justify-self-center" style="background: linear-gradient(to bottom, #74AABF 0%, #3986A3 23%, #163641 100%)"></div>
                                <span class="relative text-4xl font-bold text-white">2</span>
                            </div>
                            <div class="bg-white py-6 px-8 rounded-2xl relative shadow-md shadow-black" style="opacity: 0.9">
                                <img src="{{ asset('assets/images/landing/produk/premium-class/openbook-icon.png') }}" class="object-cover justify-self-center"/>
                                <div class="bg-gray-200 w-full mt-5" style="height: 2px"></div>
                                <div class="flex flex-col text-sm text-start text-[#70787D] pt-5">
                                    <h1 style="min-height: 100px">Calon peserta wajib membaca booklet PREMIUM CLASS dengan cermat guna kejelasan teknis dari layanan yang akan diambil.</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Card 3 -->
                    <div class="swiper-slide">
                        <div class="flex flex-col gap-6">
                            <div class="relative w-full h-16 flex items-center justify-center drop-shadow-lg">
                                <div class="absolute w-16 h-16 inset-0 rounded-full justify-self-center" style="background: linear-gradient(to bottom, #74AABF 0%, #3986A3 23%, #163641 100%)"></div>
                                <span class="relative text-4xl font-bold text-white">3</span>
                            </div>
                            <div class="bg-white py-6 px-8 rounded-2xl relative shadow-md shadow-black" style="opacity: 0.9">
                                <img src="{{ asset('assets/images/landing/produk/premium-class/pen-icon.png') }}" class="object-cover justify-self-center"/>
                                <div class="bg-gray-200 w-full mt-5" style="height: 2px"></div>
                                <div class="flex flex-col text-sm text-start text-[#70787D] pt-5">
                                    <h1 style="min-height: 100px">Calon peserta wajib mengisi data form pendaftaran dengan jelas dan benar guna keperluan dokumen peserta kedepannya.</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Card 4 -->
                    <div class="swiper-slide">
                        <div class="flex flex-col gap-6">
                            <div class="relative w-full h-16 flex items-center justify-center drop-shadow-lg">
                                <div class="absolute w-16 h-16 inset-0 rounded-full justify-self-center" style="background: linear-gradient(to bottom, #74AABF 0%, #3986A3 23%, #163641 100%)"></div>
                                <span class="relative text-4xl font-bold text-white">4</span>
                            </div>
                            <div class="bg-white py-6 px-8 rounded-2xl relative shadow-md shadow-black" style="opacity: 0.9">
                                <img src="{{ asset('assets/images/landing/produk/premium-class/checkmark-icon.png') }}" class="object-cover justify-self-center"/>
                                <div class="bg-gray-200 w-full mt-5" style="height: 2px"></div>
                                <div class="flex flex-col text-sm text-start text-[#70787D] pt-5">
                                    <h1 style="min-height: 100px">Calon peserta wajib memilih jenis kelas yang telah disediakan.</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Card 5 -->
                    <div class="swiper-slide">
                        <div class="flex flex-col gap-6">
                            <div class="relative w-full h-16 flex items-center justify-center drop-shadow-lg">
                                <div class="absolute w-16 h-16 inset-0 rounded-full justify-self-center" style="background: linear-gradient(to bottom, #74AABF 0%, #3986A3 23%, #163641 100%)"></div>
                                <span class="relative text-4xl font-bold text-white">5</span>
                            </div>
                            <div class="bg-white py-6 px-8 rounded-2xl relative shadow-md shadow-black" style="opacity: 0.9">
                                <img src="{{ asset('assets/images/landing/produk/premium-class/creditcard-icon.png') }}" class="object-cover justify-self-center"/>
                                <div class="bg-gray-200 w-full mt-5" style="height: 2px"></div>
                                <div class="flex flex-col text-sm text-start text-[#70787D] pt-5">
                                    <h1 style="min-height: 100px">Calon peserta wajib membayar harga kelas lalu dilampirkan pada form pendaftaran.</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="w-full block md:hidden" style="padding-top: 75px">
    <div class="py-10 px-4 flex flex-col">
        <h1 class="text-3xl font-semibold lg:text-5xl text-center text-black w-full">
            Alur Pendaftaran <span class="bg-gradient-to-r from-[#F7B23B] to-[#AD7D29] px-2 text-white">Premium Class</span>
        </h1>
        <div class="flex flex-col gap-4" style="padding-top: 50px">
            <div class="bg-white py-6 px-8 rounded-2xl relative shadow-md shadow-black" style="opacity: 0.9">
                <img src="{{ asset('assets/images/landing/produk/premium-class/search-icon.png') }}" class="object-cover justify-self-center"/>
                <div class="bg-gray-200 w-full mt-5" style="height: 2px"></div>
                <div class="flex flex-col text-sm text-start text-[#70787D] pt-5">
                    <h1>Calon peserta dapat memilih  kelas yang telah disediakan oleh Berbinar Insightful Indonesia melalui link pendaftaran yang telah disediakan</h1>
                </div>
            </div>
            <div class="bg-white py-6 px-8 rounded-2xl relative shadow-md shadow-black" style="opacity: 0.9">
                <img src="{{ asset('assets/images/landing/produk/premium-class/openbook-icon.png') }}" class="object-cover justify-self-center"/>
                <div class="bg-gray-200 w-full mt-5" style="height: 2px"></div>
                <div class="flex flex-col text-sm text-start text-[#70787D] pt-5">
                    <h1>Calon peserta wajib membaca booklet PREMIUM CLASS dengan cermat guna kejelasan teknis dari layanan yang akan diambil.</h1>
                </div>
            </div>
            <div class="bg-white py-6 px-8 rounded-2xl relative shadow-md shadow-black" style="opacity: 0.9">
                <img src="{{ asset('assets/images/landing/produk/premium-class/pen-icon.png') }}" class="object-cover justify-self-center"/>
                <div class="bg-gray-200 w-full mt-5" style="height: 2px"></div>
                <div class="flex flex-col text-sm text-start text-[#70787D] pt-5">
                    <h1>Calon peserta wajib mengisi data form pendaftaran dengan jelas dan benar guna keperluan dokumen peserta kedepannya.</h1>
                </div>
            </div>
            <div class="bg-white py-6 px-8 rounded-2xl relative shadow-md shadow-black" style="opacity: 0.9">
                <img src="{{ asset('assets/images/landing/produk/premium-class/checkmark-icon.png') }}" class="object-cover justify-self-center"/>
                <div class="bg-gray-200 w-full mt-5" style="height: 2px"></div>
                <div class="flex flex-col text-sm text-start text-[#70787D] pt-5">
                    <h1>Calon peserta wajib memilih jenis kelas yang telah disediakan.</h1>
                </div>
            </div>
            <div class="bg-white py-6 px-8 rounded-2xl relative shadow-md shadow-black" style="opacity: 0.9">
                <img src="{{ asset('assets/images/landing/produk/premium-class/creditcard-icon.png') }}" class="object-cover justify-self-center"/>
                <div class="bg-gray-200 w-full mt-5" style="height: 2px"></div>
                <div class="flex flex-col text-sm text-start text-[#70787D] pt-5">
                    <h1>Calon peserta wajib membayar harga kelas lalu dilampirkan pada form pendaftaran.</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="w-full" style="padding-top: 50px">
    <div class="py-10 px-4 md:px-16 flex flex-col">
        <h1 class="text-3xl font-semibold lg:text-5xl text-center text-black w-full mb-8">
            Benefit <span class="bg-gradient-to-r from-[#F7B23B] to-[#AD7D29] px-2 text-white">Premium Class</span>
        </h1>
        
        <!-- Swiper container -->
        <div class="marquee-container overflow-hidden">
            <div class="marquee-content">
                <!-- Card 1 -->
                <div class="benefit-card">
                    <div class="bg-white p-2 md:p-6 rounded-2xl shadow-md shadow-black flex gap-4 items-center h-full" style="opacity: 0.9">
                        <img src="{{ asset('assets/images/landing/produk/premium-class/intensif-icon.png') }}" class="object-cover w-16 h-16"/>
                        <p class="leading-relaxed text-xs md:text-lg">4 kali live session (10 <br> jam belajar private)</p>
                    </div>
                </div>
                
                <!-- Card 2 -->
                <div class="benefit-card">
                    <div class="bg-white p-2 md:p-6 rounded-2xl shadow-md shadow-black flex gap-4 items-center h-full" style="opacity: 0.9">
                        <img src="{{ asset('assets/images/landing/produk/premium-class/konsultasi-icon.png') }}" class="object-cover w-16 h-16"/>
                        <p class="leading-relaxed text-xs md:text-lg">Kesempatan bertanya langsung dan berdiskusi seputar topik yang kalian butuhkan</p>
                    </div>
                </div>
                
                <!-- Card 3 -->
                <div class="benefit-card">
                    <div class="bg-white p-2 md:p-6 rounded-2xl shadow-md shadow-black flex gap-4 items-center h-full" style="opacity: 0.9">
                        <img src="{{ asset('assets/images/landing/produk/premium-class/pdf-icon.png') }}" class="object-cover w-16 h-16"/>
                        <p class="leading-relaxed text-xs md:text-lg">Jadwal fleksibel sesuai keinginan kalian</p>
                    </div>
                </div>
                
                <!-- Duplicate cards for seamless loop -->
                <!-- Card 1 (duplicate) -->
                <div class="benefit-card">
                    <div class="bg-white p-4 md:p-6 rounded-2xl shadow-md shadow-black flex gap-4 items-center h-full" style="opacity: 0.9">
                        <img src="{{ asset('assets/images/landing/produk/premium-class/intensif-icon.png') }}" class="object-cover w-16 h-16"/>
                        <p class="leading-relaxed text-xs md:text-lg">4 kali live session (10 <br> jam belajar private)</p>
                    </div>
                </div>
                
                <!-- Card 2 (duplicate) -->
                <div class="benefit-card">
                    <div class="bg-white p-4 md:p-6 rounded-2xl shadow-md shadow-black flex gap-4 items-center h-full" style="opacity: 0.9">
                        <img src="{{ asset('assets/images/landing/produk/premium-class/konsultasi-icon.png') }}" class="object-cover w-16 h-16"/>
                        <p class="leading-relaxed text-xs md:text-lg">Kesempatan bertanya langsung dan berdiskusi seputar topik yang kalian butuhkan</p>
                    </div>
                </div>
                
                <!-- Card 3 (duplicate) -->
                <div class="benefit-card">
                    <div class="bg-white p-4 md:p-6 rounded-2xl shadow-md shadow-black flex gap-4 items-center h-full" style="opacity: 0.9">
                        <img src="{{ asset('assets/images/landing/produk/premium-class/pdf-icon.png') }}" class="object-cover w-16 h-16"/>
                        <p class="leading-relaxed text-xs md:text-lg">Jadwal fleksibel sesuai keinginan kalian</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="pt-8 flex flex-col gap-2 justify-center">
            <!-- Judul Benefit Tambahan -->
            <h2 class="text-2xl font-semibold text-[#F7B23B] text-center mb-2">Benefit Tambahan</h2>
            
            <!-- Baris 1 - tampil sebagai kolom pada mobile -->
            <div class="flex flex-col md:flex-row justify-center gap-3 md:gap-2 px-4 md:px-0">
                <div class="py-1">
                    <div class="flex items-center gap-2 px-3 py-2 rounded-full text-white" style="background-color: #5B8DA0">
                        <div class="min-w-8 h-8 flex items-center justify-center bg-white rounded-full">
                            <span class="text-lg">📹</span>
                        </div>
                        <span class="text-sm md:text-base font-semibold">Zoom Class Bersama Expert</span>
                    </div>
                </div>
                <div class="py-1">
                    <div class="flex items-center gap-2 px-3 py-2 rounded-full text-white" style="background-color: #5B8DA0">
                        <div class="min-w-8 h-8 flex items-center justify-center bg-white rounded-full">
                            <span class="text-lg">📘</span>
                        </div>
                        <span class="text-sm md:text-base font-semibold">Materi dalam Bentuk PDF</span>
                    </div>
                </div>
                <div class="py-1">
                    <div class="flex items-center gap-2 px-3 py-2 rounded-full text-white" style="background-color: #5B8DA0">
                        <div class="min-w-8 h-8 flex items-center justify-center bg-white rounded-full">
                            <span class="text-lg">🤝</span>
                        </div>
                        <span class="text-sm md:text-base font-semibold">Intensive Project Mentoring</span>
                    </div>
                </div>
            </div>
            
            <!-- Baris 2 - tampil sebagai kolom pada mobile -->
            <div class="flex flex-col md:flex-row justify-center gap-3 md:gap-2 px-4 md:px-0">
                <div class="py-1">
                    <div class="flex items-center gap-2 px-3 py-2 rounded-full text-white" style="background-color: #5B8DA0">
                        <div class="min-w-8 h-8 flex items-center justify-center bg-white rounded-full">
                            <span class="text-lg">🗂️</span>
                        </div>
                        <span class="text-sm md:text-base font-semibold">Real Project Portofolio</span>
                    </div>
                </div>
                <div class="py-1">
                    <div class="flex items-center gap-2 px-3 py-2 rounded-full text-white" style="background-color: #5B8DA0">
                        <div class="min-w-8 h-8 flex items-center justify-center bg-white rounded-full">
                            <span class="text-lg">👨‍💼</span>
                        </div>
                        <span class="text-sm md:text-base font-semibold">Konsultasi ke Mentor</span>
                    </div>
                </div>
                <div class="py-1">
                    <div class="flex items-center gap-2 px-3 py-2 rounded-full text-white" style="background-color: #5B8DA0">
                        <div class="min-w-8 h-8 flex items-center justify-center bg-white rounded-full">
                            <span class="text-lg">📜</span>
                        </div>
                        <span class="text-sm md:text-base font-semibold">E-Certificate</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="mb-12 w-full hidden md:block" style="padding-top: 100px">
    <div class="relative left-1/2" style=" min-height: 400px; width: 90%; transform: translateX(-50%)">
        <img src="{{ asset("assets/images/landing/produk/premium-class/banner-4.png") }}" class="object-cover w-full h-full absolute rounded-3xl" style="z-index: -20;" />
        <div class="absolute inset-0 rounded-3xl" style="opacity: 0.7; z-index: -19; background-color: #205467"></div>
        <div class="px-5 pt-10 w-full flex-col flex justify-center">
            <h1 class="bg-clip-text font-[inter] text-2xl font-semibold text-white lg:text-4xl lg:tracking-wide text-center">Layanan Premium Class</h1>
            <div class="flex justify-center px-16 text-white gap-6">
                <div class="w-1/2 flex flex-row gap-10 justify-center items-center text-2xl">
                    <div class="bg-white py-6 px-16 rounded-2xl relative shadow-md shadow-black text-black" style="bottom: -100px; opacity: 0.9">
                        <p class="text-center text-2xl font-semibold">Fundamental</p>
                        <h1 class="text-4xl text-[#3986A3] text-center pt-6">Rp250.000</h1>
                        <div class="flex flex-col text-lg text-[#70787D] pt-10">
                            <p>✅ Pembelajaran dasar-dasar data analyst</p>
                        </div>
                        <div class="flex items-center justify-center pt-10">
                            <button class="bg-gradient-to-r from-[#F7B23B] to-[#AD7D29] text-white text-base font-medium py-2 px-6 rounded-xl justify-self-center">
                                Mulai Sekarang
                            </button>
                        </div>
                    </div>
                    <div class="bg-white py-6 px-16 rounded-2xl relative shadow-md shadow-black text-black" style="bottom: -100px; opacity: 0.9">
                        <p class="text-center text-2xl font-semibold">Excellent</p>
                        <h1 class="text-4xl text-[#3986A3] text-center pt-6">Rp225.000</h1>
                        <div class="flex flex-col text-lg text-[#70787D] pt-10">
                            <p>✅ Pembelajaran data analyst tahap lanjutan menggunakan tools-tools</p>
                        </div>
                        <div class="flex items-center justify-center pt-10">
                            <button class="bg-gradient-to-r from-[#F7B23B] to-[#AD7D29] text-white text-base font-medium py-2 px-6 rounded-xl justify-self-center">
                                Mulai Sekarang
                            </button>
                        </div>
                    </div>
                    <div class="bg-white py-6 px-16 rounded-2xl relative shadow-md shadow-black text-black" style="bottom: -100px; opacity: 0.9">
                        <p class="text-center text-2xl font-semibold">Fullstack</p>
                        <h1 class="text-4xl text-[#3986A3] text-center pt-6">Rp360.000</h1>
                        <div class="flex flex-col text-lg text-[#70787D] pt-10">
                            <p>✅ Pembelajaran kelas FUNDAMENTAL dan EXCELLENT</p>
                        </div>
                        <div class="flex items-center justify-center pt-10">
                            <button class="bg-gradient-to-r from-[#F7B23B] to-[#AD7D29] text-white text-base font-medium py-2 px-6 rounded-xl justify-self-center">
                                Mulai Sekarang
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="p-6 w-full block md:hidden">
    <div class="relative left-1/2" style="min-height: 450px; width: 90%; transform: translateX(-50%)">
        <img src="{{ asset("assets/images/landing/produk/emo/pricebg-mobile.png") }}" class="object-cover w-full h-full absolute rounded-3xl" style="z-index: -20;" />
        <div class="flex flex-col items-center px-8 py-5 gap-4 text-white">
            <h1 class="bg-clip-text font-[inter] text-2xl font-semibold text-white lg:text-4xl lg:tracking-wide text-center">Jenis Layanan Premium Class</h1>
            
            <!-- Swiper container -->
            <div class="swiper mySwiper w-full h-96" style="height: 350px">
                <div class="swiper-wrapper">
                    <!-- Slide 1 -->
                    <div class="swiper-slide">
                        <div class="bg-white py-6 px-8 rounded-2xl relative shadow-md shadow-black text-black" style="opacity: 0.9">
                            <p class="text-center text-xl font-semibold">Excellent</p>
                            <h1 class="text-2xl text-[#3986A3] text-center pt-6">Rp225.000</h1>
                            <div class="flex flex-col text-base text-[#70787D] pt-10">
                                <p>✅ Pembelajaran data analyst tahap lanjutan menggunakan tools-tools</p>
                            </div>
                            <div class="flex items-center justify-center pt-10">
                                <button class="bg-gradient-to-r from-[#F7B23B] to-[#AD7D29] text-white text-base font-medium py-2 px-6 rounded-xl justify-self-center">
                                    Mulai Sekarang
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-white py-6 px-8 rounded-2xl relative shadow-md shadow-black text-black" style="opacity: 0.9">
                            <p class="text-center text-xl font-semibold">Fundamental</p>
                            <h1 class="text-2xl text-[#3986A3] text-center pt-6">Rp250.000</h1>
                            <div class="flex flex-col text-base text-[#70787D] pt-10">
                                <p>✅ Pembelajaran dasar-dasar data analyst</p>
                            </div>
                            <div class="flex items-center justify-center pt-10">
                                <button class="bg-gradient-to-r from-[#F7B23B] to-[#AD7D29] text-white text-base font-medium py-2 px-6 rounded-xl justify-self-center">
                                    Mulai Sekarang
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-white py-6 px-8 rounded-2xl relative shadow-md shadow-black text-black" style="opacity: 0.9">
                            <p class="text-center text-xl font-semibold">Fullstack</p>
                            <h1 class="text-2xl text-[#3986A3] text-center pt-6">Rp360.000</h1>
                            <div class="flex flex-col text-base text-[#70787D] pt-10">
                                <p>✅ Pembelajaran kelas FUNDAMENTAL dan EXCELLENT</p>
                            </div>
                            <div class="flex items-center justify-center pt-10">
                                <button class="bg-gradient-to-r from-[#F7B23B] to-[#AD7D29] text-white text-base font-medium py-2 px-6 rounded-xl justify-self-center">
                                    Mulai Sekarang
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="z-10 mx-4 sm:mx-20" style="padding-top: 150px; padding-bottom: 100px">
    <ul class="flex flex-col">
        @php
            $index = 0;
        @endphp
        @foreach ($faqs as $faq)
            <li class="border bg-white py-2 shadow-sm rounded-lg my-2" x-data="accordion({{ $index }})" :class="isActive()">
                <div class="flex flex-row mx-2 sm:mx-5">
                    <div class="flex flex-col w-full p-3 max-sm:p-2">
                        <h2 @click="handleClick()" class="font-medium cursor-pointer text-lg max-sm:text-[16.5px]">
                            <span>{{ $faq['ask'] }}</span>
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
<style>
    @media (min-width: 768px) {
        #customSection {
            padding-top: 10rem;
        }
    }
    .marquee-container {
        width: 100%;
        overflow: hidden;
        position: relative;
    }
    
    .marquee-content {
        display: flex;
        animation: marquee 25s linear infinite;
    }
    
    .benefit-card {
        flex: 0 0 auto;
        width: calc(33.333% - 20px);
        min-width: 300px;
        margin: 0 10px;
    }
    
    @keyframes marquee {
        0% {
            transform: translateX(0);
        }
        100% {
            transform: translateX(-50%); /* Move exactly half the width */
        }
    }
    
    /* Responsive adjustments */
    @media (max-width: 1023px) {
        .benefit-card {
            width: calc(50% - 20px);
            min-width: 250px;
        }
    }
    
    @media (max-width: 767px) {
        .benefit-card {
            width: calc(80% - 20px);
            min-width: 220px;
        }
        
        .marquee-content {
            animation: marquee 20s linear infinite;
        }
    }
</style>
<!-- Include Swiper CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.min.css" />

<!-- Include Swiper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var swiper = new Swiper(".mySwiper", {
            direction: "vertical",  // Set vertical direction
            slidesPerView: 1,
            spaceBetween: 16,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            mousewheel: true,       // Enable mousewheel control
            autoplay: {
                delay: 3000,        // Auto change slides every 3 seconds
                disableOnInteraction: false,
            },
            loop: true,             // Enable infinite loop
        });
        const premiumClassSwiper = new Swiper('.premiumClassSwiper', {
            slidesPerView: 4,
            spaceBetween: 16,
            initialSlide: 0,
            loop: false,
            slidesPerGroup: 1, // Move only one slide at a time
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
                dynamicBullets: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            // Prevent slider from showing partial slides
            watchOverflow: true,
            allowTouchMove: true,
            grabCursor: true,
            // Responsive breakpoints
            breakpoints: {
                // when window width is >= 768px (md)
                768: {
                    slidesPerView: 2,
                    spaceBetween: 10
                },
                // when window width is >= 1024px (lg)
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 15
                },
                // when window width is >= 1280px (xl)
                1280: {
                    slidesPerView: 4,
                    spaceBetween: 16
                }
            }
        });
    });
</script>
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