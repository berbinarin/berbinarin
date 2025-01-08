@extends('layouts.main-new', [
    'title' => 'Berbinar Insightful Indonesia',
    'active' => 'Produk Berbinar',
    'page' => 'Produk Berbinar',
])

@section('content')

{{-- style="background-image: url('/assets/images/landing/vector-curling.png'), linear-gradient(to right, #e1e9ec, #9CC3D1); background-blend-mode: normal, multiply;" --}}
{{-- Header Produk --}}
<div class="bg-mobile md:hidden"></div>
<section class="header-produk mt-32 mx-14 rounded-3xl py-8 max-md:py-0 h-auto bg-cover" >
    <div class="flex flex-col text-left space-y-4 h-full justify-center max-sm:p-4 p-10 max-md:p-9">
        <h1 class="max-sm:text-[30px] max-md:text-[42px] text-5xl font-semibold text-black">Produk <span class="bg-[#3886A3] text-white px-2 ">Berbinar</span></h1>
        
        {{-- Workshop Berbinar --}}
        <section>
            <div class="swiper-container swiperProdukBerbinar hidden max-md:flex max-w-3xl overflow-hidden">
                <div class="swiper-wrapper">
                    <!-- CARD 1 -->
                    <div class="swiper-slide produkBerbinar">
                        <div class="relative">
                            <img src="{{ asset('assets/images/landing/workshop/workshop-1.png') }}" alt="Workshop" class="h-72 w-full object-cover rounded-xl">
                            <p class="absolute left-4 top-4 bg-[#FEF7EB] text-[#C78E2E] px-2 py-1 rounded-md text-sm">Workshop</p>
                        </div>
                    </div>
                    
                    
                    <!-- CARD -->
                    <div class="swiper-slide produkBerbinar">
                        <div class="relative">
                            <img src="{{ asset('assets/images/landing/workshop/workshop-2.png') }}" alt="Workshop" class="h-72 w-full object-cover rounded-xl">
                            <p class="absolute left-4 top-4 bg-[#FEF7EB] text-[#C78E2E] px-2 py-1 rounded-md text-sm">Workshop</p>
                        </div>
                    </div>

                    <!-- CARD 3 -->
                    <div class="swiper-slide produkBerbinar">
                        <div class="relative">
                            <img src="{{ asset('assets/images/landing/workshop/workshop-3.png') }}" alt="Workshop" class="h-72 w-full object-cover rounded-xl">
                            <p class="absolute left-4 top-4 bg-[#FEF7EB] text-[#C78E2E] px-2 py-1 rounded-md text-sm">Workshop</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <p class="text-[#3F3F3F] text-justify max-sm:text-[15px] text-lg">
            Kesehatan mental sering timbul di kalangan masyarakat. Namun, masih banyak dari kita yang merasa ragu untuk mencari bantuan. Mahalnya biaya konsultasi dan jasa 
            psikotes menjadi penghalang utama untuk cari pertolongan lebih lanjut. Permasalahan ini menjadi alasan berdirinya Berbinar Insightful Indonesia. Berbinar memberikan 
            layanan psikotes, konseling, dan kelas, yang fleksibel dan sesuai kebutuhan.
        </p>
    </div>
</section>


<section>
    <div class="mx-14 my-5 max-lg:my-8 max-md:hidden">
        <div class="flex flex-wrap justify-center items-center w-full gap-x-8 gap-y-5 ">
            <div class="relative">
                <img src="{{ asset('assets/images/landing/workshop/workshop-1.png') }}" alt="Workshop" class="h-52 w-[360px] max-lg:w-[450px] max-lg:h-[250px] object-cover rounded-xl">
                <p class="absolute left-4 top-4 bg-[#FEF7EB] text-[#C78E2E] px-2 py-1 rounded-md text-sm">Workshop</p>
            </div>

            <div class="relative">
                <img src="{{ asset('assets/images/landing/workshop/workshop-2.png') }}" alt="Workshop" class="h-52 w-[360px] max-lg:w-[450px] max-lg:h-[250px] object-cover rounded-xl">
                <p class="absolute left-4 top-4 bg-[#FEF7EB] text-[#C78E2E] px-2 py-1 rounded-md text-sm">Workshop</p>
            </div>

            <div class="relative">
                <img src="{{ asset('assets/images/landing/workshop/workshop-4.JPG') }}" alt="Workshop" class="h-52 w-[360px] max-lg:w-[450px] max-lg:h-[250px] object-cover rounded-xl">
                <p class="absolute left-4 top-4 bg-[#FEF7EB] text-[#C78E2E] px-2 py-1 rounded-md text-sm">Workshop</p>
            </div>
        </div>
    </div>
</section>


{{-- Produk Berbinar --}}
<section class="max-md:mt-40 mt-10">
      <div x-data="{ tab: 'konseling' }" class="mx-auto">
        <!-- Tab Navigation -->
        <div class="flex justify-between mb-4 p-2 bg-white shadow-md max-w-64 rounded-2xl items-center mx-auto max-sm:mx-4 max-sm:max-w-full">
            <button 
                @click="tab = 'konseling'" 
                :class="{'bg-[#3986A3] font-medium text-white': tab === 'konseling'}" 
                class="p-2 max-sm:px-4 rounded-xl text-black font-medium">
                Konseling
            </button>
            <button 
                @click="tab = 'psikotes'" 
                :class="{'bg-[#3986A3] font-medium text-white': tab === 'psikotes'}" 
                class="p-2 max-sm:px-4 rounded-xl text-black font-medium">
                Psikotes
            </button>
            <button 
                @click="tab = 'kelas'" 
                :class="{'bg-[#3986A3] font-medium text-white': tab === 'kelas'}" 
                class="p-2 max-sm:px-4 rounded-xl text-black font-medium">
                Kelas
            </button>
        </div>
    
        <!-- Card Layout -->
        <div class="max-sm:mx-4 mx-14 my-8 max-sm:mt-4 max-sm:mb-8 rounded-3xl shadow-md border relative items-center overflow-hidden transition-all duration-300 ease-in-out">
        {{-- <div class="max-sm:mx-4 mx-14 my-8 rounded-3xl shadow-md border min-h-[400px] max-xl:min-h-[440px] max-lg:min-h-[670px] max-md:min-h-[680px] max-sm:min-h-[690px] relative items-center overflow-hidden"> --}}
            {{-- <div :class="{
                'min-h-[400px] max-xl:min-h-[440px] max-lg:min-h-[670px] max-md:min-h-[680px] max-sm:min-h-[690px]': tab === 'konseling', 
                'min-h-[700px]': tab === 'psikotes', 
                'min-h-[400px]': tab === 'kelas'
            }" 
            class="max-sm:mx-4 mx-14 my-8 rounded-3xl shadow-md border relative items-center overflow-hidden transition-all duration-300 ease-in-out"> --}}

            <!-- Konten Konseling -->
            <div 
                x-show="tab === 'konseling'" 
                x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="translate-x-full opacity-0" 
                x-transition:enter-end="translate-x-0 opacity-100"
                x-transition:leave="transition ease-in duration-300 transform"
                x-transition:leave-start="translate-x-0 opacity-100" 
                x-transition:leave-end="-translate-x-full opacity-0"
                x-cloak
                class="p-9 max-sm:p-4">
                {{-- class="absolute inset-0 p-9 max-sm:p-4"> --}}
                <div class="flex flex-row max-lg:flex-col justify-between items-center h-full max-xl:gap-6 gap-10">       
                    <div class="flex flex-col max-lg:flex-none flex-1">
                        <div class="lg:order-1">
                            <h2 class="text-3xl max-sm:text-2xl font-bold text-gradient mb-2 max-sm:mb-0">Konseling</h2>  
                        </div>
                        
                        <div class="hidden max-lg:flex flex-initial max-lg:flex-none items-center justify-center w-full lg:w-auto lg:order-2 my-3">
                            <img src="{{ asset('assets/images/landing/vector-produk/vector-konseling.png') }}" alt="Konseling" class="h-[280px] max-xl:h-[240px] max-md:h-[210px] max-sm:h-[190px] w-auto">
                        </div>

                        <div class="lg:order-3">
                            <p class="text-[#70787D] max-sm:text-[15px] text-justify mb-4">Konsultasikan permasalahan psikologis kamu ke psikolog partner dan peer counselor Berbinar.</p>

                            <div class="flex items-center space-x-1">
                                <img src="{{ asset('assets/images/landing/vector-pin.png') }}" alt="Pin" class="h-4 w-auto">
                                <p class="text-black font-semibold max-sm:text-[15px]">Fokus</p>
                            </div>
                            <p class="text-[#70787D] max-sm:text-[15px] text-justify mb-4 ps-4">Konseling membantu mendorong terjadinya penyelesaian masalah oleh diri klien.</p>

                            <div class="flex items-center space-x-1">
                                <img src="{{ asset('assets/images/landing/vector-pin.png') }}" alt="Pin" class="h-4 w-auto">
                                <p class="text-black font-semibold max-sm:text-[15px]">Jenis</p>
                            </div>
                            <p class="text-[#70787D] max-sm:text-[15px] text-justify mb-4 max-sm:mb-5 ps-4">Di <span class="text-[#3986A3] font-medium">Berbinar</span> terdapat dua jenis konseling yang dapat dipilih oleh sobar binar sesuai kebutuhan dan kenyamanan sobat, diantara lain ada Konseling with Psikolog dan Konseling with Peer Counselor.</p>

                            <a href="konseling-new">
                                <div class="flex justify-start">
                                    <button class="text-white bg-gradient-to-r max-sm:text-[15px] text-md from-[#3986A3] to-[#225062] py-2 px-4 rounded-xl max-sm:w-full">Lihat Selengkapnya</button>
                                </div>
                            </a>
                        </div>
                        
                    </div>

                    <div class="flex max-lg:hidden flex-initial max-lg:flex-none items-center justify-center w-full lg:w-auto lg:order-2">
                        <img src="{{ asset('assets/images/landing/vector-produk/vector-konseling.png') }}" alt="Konseling" class="h-[260px] max-xl:h-[240px] max-md:h-[210px] max-sm:h-[190px] w-auto">
                    </div>
                </div>
            </div>
            
            <!-- Konten Psikotes -->
            <div 
                x-show="tab === 'psikotes'" 
                x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="translate-x-full opacity-0" 
                x-transition:enter-end="translate-x-0 opacity-100"
                x-transition:leave="transition ease-in duration-300 transform"
                x-transition:leave-start="translate-x-0 opacity-100" 
                x-transition:leave-end="-translate-x-full opacity-0"
                x-cloak
                class="p-9 max-sm:p-4">
                <div class="flex flex-row max-lg:flex-col justify-between items-center h-full max-xl:gap-6 gap-10">       
                    <div class="flex flex-col max-lg:flex-none flex-1">
                        <div class="lg:order-1">
                            <h2 class="text-3xl max-sm:text-2xl font-bold text-gradient mb-2 max-sm:-mb-2">Psikotes</h2>  
                        </div>
                        
                        <div class="hidden max-lg:flex flex-initial max-lg:flex-none items-center justify-center w-full lg:w-auto lg:order-2 my-3">
                            <img src="{{ asset('assets/images/landing/vector-produk/vector-psikotest.png') }}" alt="Psikotes" class="h-[280px] max-xl:h-[240px] max-md:h-[210px] max-sm:h-[190px] w-auto">
                        </div>

                        <div class="lg:order-3">
                            <p class="text-[#70787D] max-sm:text-[15px] text-justify mb-4">Terdapat empat jenis psikotes yang ditawarkan oleh <span class="text-[#3986A3] font-medium">Berbinar</span> Insightful Indonesia, Psikotes Individu, Psikotes Perusahaan, Psikotes Instansi Pendidikan, dan Psikotes Komunitas</p>

                            <div class="flex items-center space-x-1">
                                <img src="{{ asset('assets/images/landing/vector-pin.png') }}" alt="Pin" class="h-4 w-auto">
                                <p class="text-black font-semibold max-sm:text-[15px]">Psikotes Individu</p>
                            </div>
                            <p class="text-[#70787D] max-sm:text-[15px] text-justify mb-4 ps-4">Psikotes ini dapat melihat potensi yang dimiliki dalam pencapaian hasil belajar atau kemampuan di masa yang akan datang.</p>
    
                            <div class="flex items-center space-x-1">
                                <img src="{{ asset('assets/images/landing/vector-pin.png') }}" alt="Pin" class="h-4 w-auto">
                                <p class="text-black font-semibold max-sm:text-[15px]">Psikotes Perusahaan</p>
                            </div>
                            <p class="text-[#70787D] max-sm:text-[15px] text-justify mb-4 max-sm:mb-5 ps-4">Psikotes ini digunakan untuk melihat potensi, kelebihan dan kekurangan, kepribadian dan kecocokan posisi kandidat di suatu posisi pekerjaan.</p>
    
                            <div class="flex items-center space-x-1">
                                <img src="{{ asset('assets/images/landing/vector-pin.png') }}" alt="Pin" class="h-4 w-auto">
                                <p class="text-black font-semibold max-sm:text-[15px]">Psikotes Psikologi Instansi Pendidikan</p>
                            </div>
                            <p class="text-[#70787D] max-sm:text-[15px] text-justify mb-4 max-sm:mb-5 ps-4">Psikotes ini digunakan untuk mengenal gaya belajar, cita-cita, jurusan, minat bakat yang sesuai dengan SobatBinar.</p>
    
                            <div class="flex items-center space-x-1">
                                <img src="{{ asset('assets/images/landing/vector-pin.png') }}" alt="Pin" class="h-4 w-auto">
                                <p class="text-black font-semibold max-sm:text-[15px]">Psikotes Komunitas</p>
                            </div>
                            <p class="text-[#70787D] max-sm:text-[15px] text-justify mb-4 max-sm:mb-5 ps-4">Psikotes ini bertujuan untuk mengetahui kesiapan pernikahan, menjadi orang tua, kecocokan bersama pasangan, tingkat stress, depresi, kecemasan, memori, dan dimensia.</p>
    
                            <a href="{{ route('psikotest-new') }}">
                                <div class="flex justify-start">
                                    <button class="text-white bg-gradient-to-r max-sm:text-[15px] text-md from-[#3986A3] to-[#225062] py-2 px-4 rounded-xl max-sm:w-full">Lihat Selengkapnya</button>
                                </div>
                            </a>
                        </div>
                        
                    </div>

                    <div class="flex max-lg:hidden flex-initial max-lg:flex-none items-center justify-center w-full lg:w-auto lg:order-2">
                        <img src="{{ asset('assets/images/landing/vector-produk/vector-psikotest.png') }}" alt="Psikotes" class="h-[360px] max-xl:h-[240px] max-md:h-[210px] max-sm:h-[190px] w-auto">
                    </div>
                </div>
            </div>
            
            <!-- Konten Kelas -->
            <div 
                x-show="tab === 'kelas'" 
                x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="translate-x-full opacity-0" 
                x-transition:enter-end="translate-x-0 opacity-100"
                x-transition:leave="transition ease-in duration-300 transform"
                x-transition:leave-start="translate-x-0 opacity-100" 
                x-transition:leave-end="-translate-x-full opacity-0"
                x-cloak
                class="p-9 max-sm:p-4">
                <div class="flex flex-row max-lg:flex-col justify-between items-center h-full max-xl:gap-6 gap-10">       
                    <div class="flex flex-col max-lg:flex-none flex-1">
                        <div class="lg:order-1">
                            <h2 class="text-3xl max-sm:text-2xl font-bold text-gradient mb-2 max-sm:-mb-4">Kelas</h2>  
                        </div>
                        
                        <div class="hidden max-lg:flex flex-initial max-lg:flex-none items-center justify-center w-full lg:w-auto lg:order-2 my-3">
                            <img src="{{ asset('assets/images/landing/vector-produk/vector-kelas.png') }}" alt="Kelas" class="h-[280px] max-xl:h-[240px] max-md:h-[210px] max-sm:h-[190px] w-auto">
                        </div>

                        <div class="lg:order-3">
                            <p class="text-[#70787D] max-sm:text-[15px] text-justify mb-4">Ikuti dan dapatkan insight serta ilmu baru untuk mempersiapkan karir dan juga meningkatkan skill dan kemampuan diri.</p>

                            <div class="flex items-center space-x-1">
                                <img src="{{ asset('assets/images/landing/vector-pin.png') }}" alt="Pin" class="h-4 w-auto">
                                <p class="text-black font-semibold max-sm:text-[15px]">Fokus</p>
                            </div>
                            <p class="text-[#70787D] max-sm:text-[15px] text-justify mb-4 ps-4">Ikuti kelas untuk mempersiapkan karir dan juga meningkatkan skill dan kemampuan diri.</p>
    
                            <div class="flex items-center space-x-1">
                                <img src="{{ asset('assets/images/landing/vector-pin.png') }}" alt="Pin" class="h-4 w-auto">
                                <p class="text-black font-semibold max-sm:text-[15px]">Jenis</p>
                            </div>
                            <p class="text-[#70787D] max-sm:text-[15px] text-justify mb-4 max-sm:mb-5 ps-4">
                                Berikut kelas - kelas yang pernah diadakan di Berbinar Insighful Indonesia: <br>
                                📓 Psychological First Aid <br>
                                📓 How to be A Good Peer Counselor <br>
                                📓 Self Development <br>
                                📓 Quantitative Research Method <br>
                                📓 Psychological Assessment Course: in HR Setting <br>
                                📓 Training: Be Super Hero as Peer Counselor! <br>
                                Untuk kelas - kelas dengan topik yang lain akan diinfokan melalui instagram <span class="text-[#3986A3] font-medium">Berbinar</span>
                            </p>
    
                            <a href="{{ route('kelas-new') }}">
                                <div class="flex justify-start">
                                    <button class="text-white bg-gradient-to-r max-sm:text-[15px] text-md from-[#3986A3] to-[#225062] py-2 px-4 rounded-xl max-sm:w-full">Lihat Selengkapnya</button>
                                </div>
                            </a>
                        </div>
                        
                    </div>

                    <div class="flex max-lg:hidden flex-initial max-lg:flex-none items-center justify-center w-full lg:w-auto lg:order-2">
                        <img src="{{ asset('assets/images/landing/vector-produk/vector-kelas.png') }}" alt="Kelas" class="h-[360px] max-xl:h-[240px] max-md:h-[210px] max-sm:h-[190px] w-auto">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection