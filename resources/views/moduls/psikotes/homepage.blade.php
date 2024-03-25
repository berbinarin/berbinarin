@extends('moduls.psikotes.layouts.main', [
    'title' => 'Psikotest Berbinar',
    'active' => 'Home',
    'page' => 'Homepage',
])

@section('content')
  
    <section class="max-w-6xl mx-auto h-screen flex flex-col md:flex-row items-center justify-center relative px-5 md:px-0 mt-12 md:mt-10">
        {{-- HERO IMG MOBILE --}}
        <img src="{{ asset('assets/images/konseling/regist/Ilustrasi1.png') }}" alt="Ilustrasi Logo Berbinar"
            title="Ilustrasi Logo Berbinar" class="w-full block md:hidden" data-aos="fade-up" 
            data-aos-duration="1500">

        {{-- HERO CONTENT --}}
        <div class="relative flex items-center">
            <div class="rounded-[700px] blur-[55px] w-[300px] md:w-[600px] h-[250px] md:h-[600px] absolute">
            </div>
            <div class="flex flex-col gap-5 z-40 relative">
                <h1 class="font-medium text-black text-[40px] md:text-[64px] leading-[100%] md:leading-[120%]">
                    Tingkatkan <br> potensi dengan <br> psikotes <span class="text-primary font-semibold">Berbinar</span>
                </h1>
                <p class="text-lg text-disabled">Berbinar hadir untuk kamu yang ingin meningkatkan potensi diri melalui layanan tes psikotes individu dan perusahaan.</p>
                <div class="flex gap-4">
                    <button
                        class="text-lg text-[#70787D] bg-[#C1C1C1] rounded-md hover:bg-primary hover:text-white duration-700 px-5 py-2 w-fit showmodalTes">Ikuti Tes Gratis</button>
                    <a href=""
                        class="text-lg text-white bg-primary rounded-md hover:bg-primary duration-700 px-5 py-2 w-fit">Daftar Tes Berbayar</a>
                </div>
            </div>
        </div>

        {{-- HERO IMG DESKTOP --}}
            <img src="{{ asset('assets/images/konseling/regist/Ilustrasi1.png') }}" alt="Ilustrasi-Test" class="w-1/2 hidden md:block" data-aos="fade-left"
            data-aos-duration="1500">
    </section>

    {{-- POP UP --}}
    <section>
        <div class="modalTes h-screen w-full fixed left-0 top-0 flex justify-center items-center bg-black bg-opacity-50 z-50 hidden">
            <div class="bg-white rounded-xl shadow-lg w-[560px]">
                <div class="text-right p-3 closemodalTes">
                    <i class='bx bxs-x-circle text-[48px] text-[#F34949]'></i>
                </div>
                <div class="text-center">
                    <h1 class="text-primary text-center text-3xl mb-8 mt-8">Isi Data Diri</h1>
                    <input type="text" placeholder="Nama Lengkap" class="items-center justify-center rounded-md bg-[#F3F4F6] text-[#9B9B9B] w-[480px] h-12 p-4 my-1">
                    <input type="email" placeholder="Email" class="items-center justify-center rounded-md bg-[#F3F4F6] text-[#9B9B9B] w-[480px] h-12 p-4 my-1">
                    <input type="number" placeholder="Umur" class="items-center justify-center rounded-md bg-[#F3F4F6] text-[#9B9B9B] w-[480px] h-12 p-4 my-1">
                    <textarea name="alasan" placeholder="Alasan Mengikuti Tes" cols="30" rows="5" class="items-center justify-center rounded-md bg-[#F3F4F6] text-[#9B9B9B] w-[480px] h-30 p-4 my-1"></textarea>
                </div>
                <div class="flex justify-center items-center w-100 p-3 my-4 ">
                    <button class="text-lg text-white bg-green-500 rounded-md hover:bg-primary duration-700 px-5 py-2 w-fit" id="saveButton">Simpan</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Notifikasi Popup -->
    <div id="notificationPopup" class="notificationPopup h-screen w-full fixed left-0 top-0 flex justify-center items-center bg-opacity-50 z-50 hidden">
        <div class="bg-primary rounded-xl shadow-lg max-w-3xl w-full">
            <div class="text-right p-3 closeNotification">
                <i class='bx bxs-x-circle text-[48px] text-[#F34949]'></i>
            </div>
            <div class="text-center">
                <h2 class="font-medium text-4xl mb-8 -mt-8 leading-tight text-white">Penjelasan Psikotes</h2>
                <p class="font-normal m-12 text-justify text-white">Apa itu Tes Kepribadian Big 5 OCEAN? <br>
                    Tes ini merupakan model dari tes lima dimensi kepribadian yang dapat mengungkapkan potensi karir yang sesuai dengan kepribadian Anda. Tes Lima Dimensi Kepribadian secara luas dianggap sebagai cara paling kuat untuk menggambarkan perbedaan kepribadian yang Anda miliki.
                    <br><br> Tes Lima Dimensi Kepribadian adalah salah satu alat tes untuk mengungkap kepribadian berdasarkan teori Big Five Personality yang dikemukakan oleh seorang psikolog terkenal, yaitu Lewis Goldberg. Dalam teori sifat kepribadian "The Big Five Personality Traits Model" tersebut terdiri dari lima dimensi kunci diantaranya seperti, Openness (O), Conscientiousness (C), Extraversion (E), Agreeableness (A) dan Neuroticism (N).
                    <br>Ikuti kuis ini untuk mengeksplorasi kepribadian Anda dengan Tes Lima Kepribadian, Anda akan melihat bagaimana lima dimensi kepribadian utama: Openness (O), Conscientiousness (C), Extraversion (E), Agreeableness (A) dan Neuroticism (N).</p>
               
            </div>
             <div class="flex justify-start gap-4 m-12">
                <button class="text-lg text-white bg-green-500 rounded-md hover:bg-white hover:text-primary duration-700 px-6 py-2 w-fit showModal">
                    Mulai Tes
                </button>
                <a href="{{ route('psikotestHome') }}" class="text-white font-medium rounded-md border-2 border-white hover:bg-white hover:text-primary hover:cursor-pointer px-6 py-2 w-fit">
                    Kembali ke Beranda
                </a>
            </div>
        </div>
    </div>
    <!-- Akhir Notifikasi Popup -->

    <div class="modal h-screen w-full fixed left-0 top-0 flex justify-center items-center bg-black bg-opacity-50 z-50 hidden">
        <div class="bg-white rounded-xl shadow-lg w-[560px]">
            <div class="text-right p-3 closeModal">
                <i class='bx bxs-x-circle text-[48px] text-[#F34949]'></i>
            </div>
            <div>
                <div class="text-center">
                    <h1 class="text-primary text-center text-3xl mb-8 -mt-8">Instruksi Pengisian</h1>
                    <p class="font-bold px-24">Perhatikan dengan seksama instruksi pengisian berikut untuk mengisi free tes psikotes berbinar</p>
                </div>
                <div class="px-16 py-10">
                    <p class="text-justify">Pada tes ini, setiap nomor berisikan satu pernyataan beserta lima pilihan skor jawaban. Tugas Anda adalah menentukan <span class="font-bold">skor kesesuaian</span> setiap pernyataan dengan keadaan diri Kamu yang sebenarnya. Tiap pilihan skor kesesuaian yang Anda pilih memiliki kriterianya masing-masing.</p>
                    <p class="font-bold"><br>Keterangan Skor:</p>
                    <p>1: Sangat tidak sesuai</p>
                    <p>2: Tidak sesuai</p>
                    <p>3: Ragu-ragu</p>
                    <p>4: Sesuai</p>
                    <p>5: Sangat sesuai</p>
                </div>
            </div>
            <div class="flex justify-center items-center w-100 p-3">
                <a href="{{ route('psikotestFreeTest') }}"
                    class="text-lg text-white bg-green-500 rounded-md hover:bg-primary duration-700 px-8 mt-0 mb-4 py-2 w-fit">Mulai</a>
            </div>
        </div>
    </div>

   <!-- Your HTML content -->

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // JavaScript code here
        const modalTes = document.querySelector('.modalTes');
        const notificationPopup = document.getElementById('notificationPopup');
        const modal = document.querySelector('.modal');
        const showmodalTes = document.querySelector('.showmodalTes');
        const closemodalTes = document.querySelector('.closemodalTes');
        const closeNotificationBtn = document.getElementById('closeNotification');
        const showModal = document.querySelector('.showModal');
        const closeModal = document.querySelector('.closeModal');
        const saveButton = document.getElementById('saveButton');

        showmodalTes.addEventListener('click', function(){
            modalTes.classList.remove('hidden')
        });

        closemodalTes.addEventListener('click', function(){
            modalTes.classList.add('hidden')
        });

        showModal.addEventListener('click', function(){
            modal.classList.remove('hidden')
        });

        closeModal.addEventListener('click', function(){
            modal.classList.add('hidden')
        });

        saveButton.addEventListener('click', function(){
            // Tampilkan pop-up notifikasi
            notificationPopup.classList.remove('hidden');
        });

        closeNotificationBtn.addEventListener('click', function() {
            notificationPopup.classList.add('hidden');
        });
    });
</script>

    
@endsection