@extends('layouts.main-new', [
    'title' => 'Berbinar Insightful Indonesia',
    'active' => 'Produk Berbinar',
    'page' => 'Produk Berbinar',
])

@section('content')
<div class="bg-mobile md:hidden"></div>
<section class="header-produk mt-32 mx-20 rounded-3xl max-md:py-0 h-auto bg-cover" >
    <div class="flex flex-col text-left gap-y-1 h-full justify-center max-sm:p-4 p-10 max-md:p-9">
        <h1 class="max-sm:text-[30px] max-md:text-[42px] text-[42px] font-semibold text-black">Produk <span class="bg-[#3886A3] text-white px-2 ">Berbinar</span></h1>
        <section>
            <div class="swiper-container swiperProdukBerbinar hidden max-md:flex max-w-3xl overflow-hidden">
                <div class="swiper-wrapper">
                    <div class="swiper-slide produkBerbinar">
                        <div class="relative">
                            <img src="{{ asset('assets/images/landing/asset-produk/webinar.png') }}" alt="Webinar" class="h-72 w-full object-cover rounded-xl">
                            <p class="absolute left-4 top-4 bg-[#FEF7EB] text-[#C78E2E] px-2 py-1 rounded-md text-sm">Workshop</p>
                        </div>
                    </div>
                    
                    <div class="swiper-slide produkBerbinar">
                        <div class="relative">
                            <img src="{{ asset('assets/images/landing/asset-produk/workshop.JPG') }}" alt="Workshop" class="h-72 w-full object-cover rounded-xl">
                            <p class="absolute left-4 top-4 bg-[#FEF7EB] text-[#C78E2E] px-2 py-1 rounded-md text-sm">Workshop</p>
                        </div>
                    </div>

                    <div class="swiper-slide produkBerbinar">
                        <div class="relative">
                            <img src="{{ asset('assets/images/landing/asset-produk/psikotes-offline.png') }}" alt="Psikotes Offline" class="h-72 w-full object-cover rounded-xl">
                            <p class="absolute left-4 top-4 bg-[#FEF7EB] text-[#C78E2E] px-2 py-1 rounded-md text-sm">Psikotes Offline</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <p class="text-[#3F3F3F] text-justify max-sm:text-[15px] text-lg">
            Adanya kesulitan dalam jangkauan bagi masyarakat mengenai mahalnya biaya konsultasi yang tentunya menjadi penghalang untuk mengakses bantuan profesional. 
            Kini <span class="font-bold">Berbinar Insightful Indonesia</span> hadir dalam memberikan layanan konseling, psikotes, kelas edukasi, dan consulting professional yang dirancang fleksibel tanpa beban biaya tinggi juga menyesuaikan kebutuhan klien sebagai prioritas perusahaan.
        </p>
    </div>
</section>

{{-- TAMPILAN DESKTOP --}}
<section>
    <div class="mx-20 my-5 max-lg:my-8 max-md:hidden">
        <div class="flex flex-wrap justify-center items-center w-full gap-x-8 gap-y-5 ">
            <div class="relative">
                <img src="{{ asset('assets/images/landing/asset-produk/webinar.png') }}" alt="Webinar" class="h-52 w-[345px] max-lg:w-[450px] max-lg:h-[250px] object-cover rounded-xl">
                <p class="absolute left-4 top-4 bg-[#FEF7EB] text-[#C78E2E] px-2 py-1 rounded-md text-sm">Webinar</p>
            </div>

            <div class="relative">
                <img src="{{ asset('assets/images/landing/asset-produk/workshop.JPG') }}" alt="Workshop" class="h-52 w-[345px] max-lg:w-[450px] max-lg:h-[250px] object-cover rounded-xl">
                <p class="absolute left-4 top-4 bg-[#FEF7EB] text-[#C78E2E] px-2 py-1 rounded-md text-sm">Workshop</p>
            </div>

            <div class="relative">
                <img src="{{ asset('assets/images/landing/asset-produk/psikotes-offline.png') }}" alt="Psikotes Offline" class="h-52 w-[345px] max-lg:w-[450px] max-lg:h-[250px] object-cover rounded-xl">
                <p class="absolute left-4 top-4 bg-[#FEF7EB] text-[#C78E2E] px-2 py-1 rounded-md text-sm">Psikotes Offline</p>
            </div>
        </div>
    </div>
</section>


{{-- Produk Berbinar --}}
<section class="max-md:mt-40 mt-10">
      <div x-data="{ tab: 'konseling' }" class="mx-auto">
        <!-- Tab Navigation -->
        <div class="flex justify-between max-md:justify-center mb-4 p-2 bg-white shadow-md flex-wrap max-w-[680px] rounded-2xl items-center mx-auto max-sm:mx-4 max-md:mx-20 max-sm:max-w-full">
            <button 
                @click="tab = 'konseling'" 
                :class="{'bg-[#3986A3] font-medium text-white': tab === 'konseling'}" 
                class="p-2 rounded-xl text-black font-medium">
                Konseling
            </button>
            <button 
                @click="tab = 'psikotes'" 
                :class="{'bg-[#3986A3] font-medium text-white': tab === 'psikotes'}" 
                class="p-2 rounded-xl text-black font-medium">
                Psikotes
            </button>
            <button 
                @click="tab = 'class'" 
                :class="{'bg-[#3986A3] font-medium text-white': tab === 'class'}" 
                class="p-2 rounded-xl text-black font-medium italic">
                Class
            </button>
            <button 
                @click="tab = 'consulting'" 
                :class="{'bg-[#3986A3] font-medium text-white': tab === 'consulting'}" 
                class="p-2 rounded-xl text-black font-medium italic">
                Consulting
            </button>
            <button 
                @click="tab = 'moodscantees'" 
                :class="{'bg-[#3986A3] font-medium text-white': tab === 'moodscantees'}" 
                class="p-2 rounded-xl text-black font-medium">
                MoodScan Tees
            </button>
            <button 
                @click="tab = 'emoshuffle'" 
                :class="{'bg-[#3986A3] font-medium text-white': tab === 'emoshuffle'}" 
                class="p-2 rounded-xl text-black font-medium">
                EmoShuffle
            </button>
        </div>
    
        <!-- Card Layout -->
        <div class="max-sm:mx-4 mx-20 my-8 max-sm:mt-4 max-sm:mb-8 rounded-3xl shadow-md border relative items-center overflow-hidden transition-all duration-300 ease-in-out">
        {{-- <div class="max-sm:mx-4 mx-14 my-8 rounded-3xl shadow-md border min-h-[400px] max-xl:min-h-[440px] max-lg:min-h-[670px] max-md:min-h-[680px] max-sm:min-h-[690px] relative items-center overflow-hidden"> --}}
            {{-- <div :class="{
                'min-h-[400px] max-xl:min-h-[440px] max-lg:min-h-[670px] max-md:min-h-[680px] max-sm:min-h-[690px]': tab === 'konseling', 
                'min-h-[700px]': tab === 'psikotes', 
                'min-h-[400px]': tab === 'kelas'
            }" 
            class="max-sm:mx-4 mx-14 my-8 rounded-3xl shadow-md border relative items-center overflow-hidden transition-all duration-300 ease-in-out"> --}}


            
            
            <!-- BERBINAR KONSELING -->
            <div 
                x-show="tab === 'konseling'" 
                x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="translate-x-full opacity-0" 
                x-transition:enter-end="translate-x-0 opacity-100"
                x-transition:leave="transition ease-in duration-300 transform"
                x-transition:leave-start="translate-x-0 opacity-100" 
                x-transition:leave-end="-translate-x-full opacity-0"
                x-cloak
                class="p-8 max-sm:p-4">
                <div class="flex flex-col gap-4">
                    <div class="relative">
                        {{-- IMAGE --}}
                        <div class="max-md:hidden">
                            <img src="{{ asset('assets/images/landing/asset-beranda/produk/konseling.png') }}" alt="Konseling" class="float-right w-[320px] max-lg:w-[280px] h-auto ml-6 object-contain"/>
                        </div>

                        <!-- DESCRIPTION -->
                        <h1 class="text-3xl max-sm:text-2xl font-bold text-gradient mb-2 max-sm:mb-0">Berbinar Konseling</h1>
                        <div class="flex justify-center my-2 md:hidden">
                            <img src="{{ asset('assets/images/landing/asset-beranda/produk/konseling.png') }}" alt="Psikotes" class="w-[280px] h-auto object-contain">
                        </div>
                        <p class="text-[#70787D] max-sm:text-[15px] text-justify">
                            Layanan psikolog dan konselor sebaya untuk konsultasi permasalahan mental yang dialami oleh klien secara online dan offline.
                        </p>
                        <h1 class="text-2xl max-sm:text-xl font-bold text-gradient-yellow mb-2 max-sm:mb-0 mt-2">Fokus</h1>
                        <p class="text-[#70787D] max-sm:text-[15px] text-justify">
                            Meningkatkan pengetahuan tentang kesehatan mental dengan memberikan dukungan emosional dan membantu menyelesaikan masalah yang dialami.
                        </p>
                        <h1 class="text-2xl max-sm:text-xl font-bold text-gradient-yellow mb-2 max-sm:mb-0 mt-2">Jenis</h1>
                        <ul class="space-y-3 max-sm:space-y-1 list-disc pl-5 text-[#3F3F3F] marker:text-[#3986A3] max-sm:text-[15px] text-justify">
                            <li>
                                <p class="font-semibold">Konseling bersama Psikolog</p>
                                <p class="text-[#70787D]">
                                    Layanan konseling bersama Psikolog yang berizin praktik (Surat Izin Praktik Psikologi) dan telah bekerja sama dengan Berbinar.
                                </p>
                            </li>
                            <li>
                                <p class="font-semibold">Konseling bersama Peer Counselor</p>
                                <p class="text-[#70787D]">
                                    Layanan konseling bersama Peer Counselor yang dilatih secara ketat dan disupervisi  oleh Psikolog Berbinar.
                                </p>
                            </li>
                            <li>
                                <p class="font-semibold">Berbinar For U</p>
                                <p class="text-[#70787D]">
                                    Layanan konseling bersama dengan Peer Counselor yang, dengan harga gratis dan terjamin profesionalitasnya.
                                </p>
                            </li>
                            <li>
                                <p class="font-semibold">Coba Ungkapkan New</p>
                                <p class="text-[#70787D]">
                                    Wadah curhatan secara anonim secara daring disini dan akan di jawab melalui reels Instagram oleh Psikolog.
                                </p>
                            </li>
                            <li>
                                <p class="font-semibold ">Training Peer Counselor</p>
                                <p class="text-[#70787D]">
                                    Acara tahunan yang menyelenggarakan pelatihan Peer Counselor secara online dan diselenggarakan dengan mengundang berbagai komunitas Psikolog.
                                </p>
                            </li>
                        </ul>
                    </div>
            
                    <div class="flex justify-start">
                        <a href="{{ route('konseling-new') }}">
                            <button class="text-white bg-gradient-to-r max-sm:text-[15px] text-md from-[#3986A3] to-[#225062] py-2 px-4 rounded-xl max-sm:w-full">
                                Lihat Selengkapnya
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- BERBINAR PSIKOTES -->
            <div 
                x-show="tab === 'psikotes'" 
                x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="translate-x-full opacity-0" 
                x-transition:enter-end="translate-x-0 opacity-100"
                x-transition:leave="transition ease-in duration-300 transform"
                x-transition:leave-start="translate-x-0 opacity-100" 
                x-transition:leave-end="-translate-x-full opacity-0"
                x-cloak
                class="p-8 max-sm:p-4">
                <div class="flex flex-col gap-4">
                    <div class="relative">
                        {{-- IMAGE --}}
                        <div class="max-md:hidden">
                            <img src="{{ asset('assets/images/landing/asset-beranda/produk/psikotest.png') }}" alt="Psikotes" class="float-right w-[320px] max-lg:w-[280px] h-auto ml-6 object-contain"/>
                        </div>

                        <!-- DESCRIPTION -->
                        <h1 class="text-3xl max-sm:text-2xl font-bold text-gradient mb-2 max-sm:mb-0">Berbinar Psikotes</h1>
                        <div class="flex justify-center my-2 md:hidden">
                            <img src="{{ asset('assets/images/landing/asset-beranda/produk/psikotest.png') }}" alt="Psikotes" class="w-[280px] h-auto object-contain">
                        </div>
                        <p class="text-[#70787D] max-sm:text-[15px] text-justify">
                            Terdapat empat kategori psikotes yang ditawarkan oleh <span class="font-bold">PT Berbinar insightful Indonesia</span>, di antaranya: Psikotes Individu, Psikotes Perusahaan, Psikotes Instansi Pendidikan, dan Psikotes Komunitas.
                        </p>
                        <h1 class="text-2xl max-sm:text-xl font-bold text-gradient-yellow mb-2 max-sm:mb-0 mt-2">Jenis</h1>
                        <ul class="space-y-3 max-sm:space-y-1 list-disc pl-5 text-[#3F3F3F] marker:text-[#3986A3] max-sm:text-[15px] text-justify">
                            <li>
                                <p class="font-semibold">Psikotes Individu</p>
                                <p class="text-[#70787D]">
                                    Psikotes ini digunakan untuk melihat potensi yang dimiliki dalam pencapaian hasil belajar atau kemampuan di masa yang akan datang.
                                </p>
                            </li>
                            <li>
                                <p class="font-semibold">Psikotes Perusahaan</p>
                                <p class="text-[#70787D]">
                                    Psikotes ini digunakan untuk melihat potensi, kelebihan dan kekurangan, kepribadian, dan kecocokan kandidat di suatu posisi pekerjaan.
                                </p>
                            </li>
                            <li>
                                <p class="font-semibold">Psikotes Instansi Pendidikan</p>
                                <p class="text-[#70787D]">
                                    Psikotes ini digunakan untuk mengenal gaya belajar, cita-cita, jurusan, minat bakat yang sesuai dengan kebutuhan klien.
                                </p>
                            </li>
                            <li>
                                <p class="font-semibold">Psikotes Komunitas</p>
                                <p class="text-[#70787D]">
                                    Psikotes ini bertujuan untuk mengetahui kesiapan pernikahan, menjadi orangtua, kecocokan bersama pasangan, tingkat stress, depresi, kecemasan, memori, dan demensia.
                                </p>
                            </li>
                        </ul>
                    </div>
            
                    <div class="flex justify-start">
                        <a href="{{ route('psikotest-new') }}">
                            <button class="text-white bg-gradient-to-r max-sm:text-[15px] text-md from-[#3986A3] to-[#225062] py-2 px-4 rounded-xl max-sm:w-full">
                                Lihat Selengkapnya
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- BERBINAR CLASS -->
            <div 
                x-show="tab === 'class'" 
                x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="translate-x-full opacity-0" 
                x-transition:enter-end="translate-x-0 opacity-100"
                x-transition:leave="transition ease-in duration-300 transform"
                x-transition:leave-start="translate-x-0 opacity-100" 
                x-transition:leave-end="-translate-x-full opacity-0"
                x-cloak
                class="p-8 max-sm:p-4">
                <div class="flex flex-col gap-4">
                    <div class="relative">
                        {{-- IMAGE --}}
                        <div class="max-md:hidden">
                            <img src="{{ asset('assets/images/landing/asset-beranda/produk/kelas.png') }}" alt="Class" class="float-right w-[320px] max-lg:w-[280px] h-auto ml-6 object-contain"/>
                        </div>

                        <!-- DESCRIPTION -->
                        <h1 class="text-3xl max-sm:text-2xl font-bold text-gradient mb-2 max-sm:mb-0">Berbinar <span class="italic">Class</span></h1>
                        <div class="flex justify-center my-2 md:hidden">
                            <img src="{{ asset('assets/images/landing/asset-beranda/produk/kelas.png') }}" alt="Class" class="w-[280px] h-auto object-contain">
                        </div>
                        <p class="text-[#70787D] max-sm:text-[15px] text-justify">
                            Layanan platform persiapan karir dan peningkatan skill dengan meningkatkan kompetensi secara psikologis edukasi yang begitu mudah diikuti oleh semua kalangan.
                        </p>
                        <h1 class="text-2xl max-sm:text-xl font-bold text-gradient-yellow mb-2 max-sm:mb-0 mt-2">Fokus</h1>
                        <p class="text-[#70787D] max-sm:text-[15px] text-justify">
                            Pembelajaran yang interaktif dengan praktik di setiap sesi ditemani pendampingan program hingga selesai bersama tutor yang berpengalaman dalam bidangnya.
                        </p>
                        <h1 class="text-2xl max-sm:text-xl font-bold text-gradient-yellow mb-2 max-sm:mb-0 mt-2">Jenis</h1>
                        <ul class="space-y-3 max-sm:space-y-1 list-disc pl-5 text-[#3F3F3F] marker:text-[#3986A3] max-sm:text-[15px] text-justify">
                            <li>
                                <p class="font-semibold">Berbinar+</p>
                                <p class="text-[#70787D]">
                                    Layanan satu paket yang terdiri dari kelas daring berbasis video pembelajaran, konseling, dan psikotes.
                                </p>
                            </li>
                            <li>
                                <p class="font-semibold italic">Premium <span class="italic">Class</span></p>
                                <p class="text-[#70787D]">
                                    Layanan kelas pribadi yang menyediakan materi softskill secara mendalam dan disediakan oleh mentor Premium Class secara online dan fleksibel.
                                </p>
                            </li>
                            <li>
                                <p class="font-semibold">101 <span class="italic">Class Journey</span></p>
                                <p class="text-[#70787D]">
                                    Webinar berbayar yang diadakan pengenalan terkait suatu materi dan dibahas lebih mendalam dengan bimbingan para ahli selama 3 pertemuan.
                                </p>
                            </li>
                            <li>
                                <p class="font-semibold">BISIKAN</p>
                                <p class="text-[#70787D]">
                                    “Bicara Asik Psikologi Ala Berbinar” hadir untuk memperkaya wawasan yang membahas fenomena psikologis secara live Instagram setiap hari Sabtu pukul 15.00 WIB.
                                </p>
                            </li>
                            <li>
                                <p class="font-semibold ">BERARTY</p>
                                <p class="text-[#70787D]">
                                    “Berbinar Hears To You” membahas fenomena psikologis dengan sesi tanya jawab secara live TikTok setiap hari Minggu pukul 20.00 WIB.
                                </p>
                            </li>
                        </ul>
                    </div>
            
                    <div class="flex justify-start">
                        <a href="{{ route('kelas-new') }}">
                            <button class="text-white bg-gradient-to-r max-sm:text-[15px] text-md from-[#3986A3] to-[#225062] py-2 px-4 rounded-xl max-sm:w-full">
                                Lihat Selengkapnya
                            </button>
                        </a>
                    </div>
                </div>
            </div>

            <!-- BERBINAR CONSULTING -->
            <div 
                x-show="tab === 'consulting'" 
                x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="translate-x-full opacity-0" 
                x-transition:enter-end="translate-x-0 opacity-100"
                x-transition:leave="transition ease-in duration-300 transform"
                x-transition:leave-start="translate-x-0 opacity-100" 
                x-transition:leave-end="-translate-x-full opacity-0"
                x-cloak
                class="p-8 max-sm:p-4">
                <div class="flex flex-col gap-4">
                    <div class="relative">
                        {{-- IMAGE --}}
                        <div class="max-md:hidden">
                            <img src="{{ asset('assets/images/landing/asset-beranda/produk/consulting.png') }}" alt="Consulting" class="float-right w-[320px] max-lg:w-[280px] h-auto ml-6 object-contain"/>
                        </div>

                        <!-- DESCRIPTION -->
                        <h1 class="text-3xl max-sm:text-2xl font-bold text-gradient mb-2 max-sm:mb-0">Berbinar <span class="italic">Consulting</span></h1>
                        <div class="flex justify-center my-2 md:hidden">
                            <img src="{{ asset('assets/images/landing/asset-beranda/produk/consulting.png') }}" alt="Consulting" class="w-[280px] h-auto object-contain">
                        </div>
                        <p class="text-[#70787D] max-sm:text-[15px] text-justify">
                            Layanan yang membantu perusahaan, organisasi, hingga komunitas dalam mengatasi masalah dan meningkatkan kinerja sumber daya manusia.
                        </p>
                        <h1 class="text-2xl max-sm:text-xl font-bold text-gradient-yellow mb-2 max-sm:mb-0 mt-2">Fokus</h1>
                        <p class="text-[#70787D] max-sm:text-[15px] text-justify">
                            Peningkatan keterampilan dengan strategi jangka panjang yang disesuaikan dengan kebutuhan spesifik klien.
                        </p>
                        <h1 class="text-2xl max-sm:text-xl font-bold text-gradient-yellow mb-2 max-sm:mb-0 mt-2">Jenis</h1>
                        <ul class="space-y-3 max-sm:space-y-1 list-disc pl-5 text-[#3F3F3F] marker:text-[#3986A3] max-sm:text-[15px] text-justify">
                            <li>
                                <p class="font-semibold">Rekrutmen dan Seleksi</p>
                                <p class="text-[#70787D]">
                                    Membantu proses perekrutan calon karyawan sesuai kebutuhan dan kriteria perusahaan.
                                </p>
                            </li>
                            <li>
                                <p class="font-semibold italic">Pelatihan dan Pengembangan</p>
                                <p class="text-[#70787D]">
                                    Rancangan proses terkait tugas kepada karyawan untuk memaksimalkan potensi.
                                </p>
                            </li>
                            <li>
                                <p class="font-semibold">Analisis Beban Kerja & Perencanaan Organisasi</p>
                                <p class="text-[#70787D]">
                                    Analisis mendalam terkait beban kerja, struktur organisasi, dan perencanaan kebutuhan sumber daya manusia.
                                </p>
                            </li>
                            <li>
                                <p class="font-semibold italic">Coaching</p>
                                <p class="text-[#70787D]">
                                    Membantu dalam menggali potensi bisnis/karir, menetapkan tujuan, dan mewujudkannya dengan strategi dari ahlinya.
                                </p>
                            </li>
                            <li>
                                <p class="font-semibold ">Penilaian Kinerja</p>
                                <p class="text-[#70787D]">
                                    Proses evaluasi kinerja karyawan secara sistematis dan berkesinambungan sebagai dukungan pengembangan karir.
                                </p>
                            </li>
                            <li>
                                <p class="font-semibold ">Kompensasi dan <span class="italic">Benefit</span> (perusahaan)</p>
                                <p class="text-[#70787D]">
                                    Perencanaan dan sistem administrasi mengenai program yang bermanfaat untuk menjaga motivasi dan kinerja karyawan.
                                </p>
                            </li>
                            <li>
                                <p class="font-semibold ">Standar Operasional Prosedur (SOP)</p>
                                <p class="text-[#70787D]">
                                    Panduan standar yang bertujuan memastikan pekerjaan dan kegiatan operasional organisasi.
                                </p>
                            </li>
                        </ul>
                    </div>
            
                    <div class="flex justify-start">
                        <a href="{{ route('consulting-new') }}">
                            <button class="text-white bg-gradient-to-r max-sm:text-[15px] text-md from-[#3986A3] to-[#225062] py-2 px-4 rounded-xl max-sm:w-full">
                                Lihat Selengkapnya
                            </button>
                        </a>
                    </div>
                </div>
            </div>

            <!-- BERBINAR MOODSCAN TEES -->
            <div 
                x-show="tab === 'moodscantees'" 
                x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="translate-x-full opacity-0" 
                x-transition:enter-end="translate-x-0 opacity-100"
                x-transition:leave="transition ease-in duration-300 transform"
                x-transition:leave-start="translate-x-0 opacity-100" 
                x-transition:leave-end="-translate-x-full opacity-0"
                x-cloak
                class="p-8 max-sm:p-4">
                <div class="flex flex-col gap-4">
                    <div class="relative">
                        {{-- IMAGE --}}
                        <div class="max-md:hidden">
                            <img src="{{ asset('assets/images/landing/asset-beranda/produk/moodscantees.png') }}" alt="MoodScan Tees" class="float-right w-[320px] max-lg:w-[280px] h-auto ml-6 object-contain"/>
                        </div>

                        <!-- DESCRIPTION -->
                        <h1 class="text-3xl max-sm:text-2xl font-bold text-gradient mb-2 max-sm:mb-0">MoodScan Tees</h1>
                        <div class="flex justify-center my-2 md:hidden">
                            <img src="{{ asset('assets/images/landing/asset-beranda/produk/moodscantees.png') }}" alt="MoodScan Tees" class="w-[280px] h-auto object-contain">
                        </div>
                        <p class="text-[#70787D] max-sm:text-[15px] text-justify">
                            MoodScan Tees adalah kaos nyaman dengan desain psikologis hasil kolaborasi ciamik antara Berbinar Insightful Indonesia dengan Esize. Tidak hanya tampil gaya, kaos ini juga dapat memberikan kebahagiaan dan dukungan psikologis setiap kali dikenakan.<br>
                            Hanya mulai dari Rp 79.900, kamu sudah bisa mendapatkan kaos MoodScan Tees yang siap mendukung dan menginspirasimu sepanjang hari! 
                        </p>
                        <h1 class="text-2xl max-sm:text-xl font-bold text-gradient-yellow mb-2 max-sm:mb-0 mt-2">Fitur</h1>
                        <ul class="space-y-3 max-sm:space-y-1 list-disc pl-5 text-[#3F3F3F] marker:text-[#3986A3] max-sm:text-[15px] text-justify">
                            <li>
                                <p class="text-[#70787D]">
                                    Berdesain psikologis untuk meningkatkan kesehatan mental sekaligus menciptakan gaya yang unik dan penuh makna.
                                </p>
                            </li>
                            <li>
                                <p class="text-[#70787D]">
                                    Barcode QR yang menyimpan berbagai kutipan-kutipan psikologis inspiratif dan memberikan refleksi.
                                </p>
                            </li>
                            <li>
                                <p class="text-[#70787D]">
                                    Berbahan 100% Cotton Combed berkualitas tinggi yang memberikan kenyamanan maksimal untuk digunakan sehari-hari.
                                </p>
                            </li>
                            <li>
                                <p class="text-[#70787D]">
                                    Tersedia variasi ukuran yang dapat disesuaikan dengan kebutuhan dan cocok untuk berbagai bentuk tubuh.
                                </p>
                            </li>
                        </ul>
                    </div>
            
                    <div class="flex justify-start">
                        <a href="https://tokopedia.link/gwgtSs9oUOb" target="_blank">
                            <button class="text-white bg-gradient-to-r max-sm:text-[15px] text-md from-[#3986A3] to-[#225062] py-2 px-4 rounded-xl max-sm:w-full">
                                Lihat Selengkapnya
                            </button>
                        </a>
                    </div>
                </div>
            </div>


            <!-- BERBINAR EMOSHUFFLE -->
            <div 
                x-show="tab === 'emoshuffle'" 
                x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="translate-x-full opacity-0" 
                x-transition:enter-end="translate-x-0 opacity-100"
                x-transition:leave="transition ease-in duration-300 transform"
                x-transition:leave-start="translate-x-0 opacity-100" 
                x-transition:leave-end="-translate-x-full opacity-0"
                x-cloak
                class="p-8 max-sm:p-4">
                <div class="flex flex-col gap-4">
                    <div class="relative">
                        {{-- IMAGE --}}
                        <div class="max-md:hidden">
                            <img src="{{ asset('assets/images/landing/asset-beranda/produk/emoshuffle.png') }}" alt="EmoShuffle" class="float-right w-[200px] max-lg:w-[200px] h-auto max-xl:ml-6 mx-14 object-contain"/>
                        </div>

                        <!-- DESCRIPTION -->
                        <h1 class="text-3xl max-sm:text-2xl font-bold text-gradient mb-2 max-sm:mb-0">EmoShuffle</h1>
                        <div class="flex justify-center my-2 md:hidden">
                            <img src="{{ asset('assets/images/landing/asset-beranda/produk/emoshuffle.png') }}" alt="EmoShuffle" class="w-[280px] h-auto object-contain">
                        </div>
                        <p class="text-[#70787D] max-sm:text-[15px] text-justify max-xl:leading-normal leading-relaxed">
                            Permainan kartu untuk individu maupun kelompok yang dirancang dengan desain menarik, berupa pertanyaan, kutipan, atau aksi yang meningkatkan kepedulian akan kesehatan mental serta mendalami dan mengekspresikan perasaan pemain.<br>
                            EmoShuffle hadir untuk menjadi pengingat akan pentingnya merawat kesehatan mental kita dengan mengurangi stress, tekanan, dan kecemasan dalam setiap pengguna.
                        </p>
                    </div>
            
                    {{-- <div class="flex justify-start">
                        <a href="{{ route('konseling-new') }}">
                            <button class="text-white bg-gradient-to-r max-sm:text-[15px] text-md from-[#3986A3] to-[#225062] py-2 px-4 rounded-xl max-sm:w-full">
                                Lihat Selengkapnya
                            </button>
                        </a>
                    </div> --}}
                </div>
            </div>

            </div>
        </div>
    </div>
</section>

@endsection