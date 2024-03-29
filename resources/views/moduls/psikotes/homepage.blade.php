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

    {{-- ISI DATA DIRI --}}
    <div class="modalTes h-screen w-full fixed left-0 top-0 flex justify-center items-center bg-black bg-opacity-50 z-50 hidden" style="padding: 1rem;">
        <div class="bg-white rounded-xl shadow-lg w-[560px]"> <!-- Menyesuaikan margin atas menjadi 2rem -->
            <div class="text-right p-3 closemodalTes">
                <i class='bx bxs-x-circle text-[40px] text-[#F34949]'></i>
            </div>
            <div class="text-center">
                <h1 class="text-primary text-center text-3xl mb-4 mt-2">Isi Data Diri</h1> <!-- Menyesuaikan margin atas menjadi 4rem -->
                <div class="flex flex-col items-center justify-center space-y-4 px-4 md:px-8">
                    <input type="text" placeholder="Nama Lengkap" class="rounded-md bg-[#F3F4F6] text-[#9B9B9B] w-full h-12 p-4">
                    <input type="email" placeholder="Email" class="rounded-md bg-[#F3F4F6] text-[#9B9B9B] w-full h-12 p-4">
                    <input type="number" placeholder="Umur" class="rounded-md bg-[#F3F4F6] text-[#9B9B9B] w-full h-12 p-4">
                    <textarea name="alasan" placeholder="Alasan Mengikuti Tes" rows="5" class="rounded-md bg-[#F3F4F6] text-[#9B9B9B] w-full h-30 p-4"></textarea>
                </div>
            </div>
            <div class="flex justify-center items-center w-full p-3">
                <button class="text-lg text-white bg-green-500 rounded-md hover:bg-primary duration-700 px-6 py-2" id="saveButton">Simpan</button>
            </div>
            <div class="flex justify-center items-center w-full p-3">
                <a href="{{ route('psikotestHome') }}" class="text-white font-medium rounded-md border-2 border-white hover:bg-white hover:text-primary hover:cursor-pointer px-6 py-2">Kembali ke Beranda</a>
            </div>
        </div>
    </div>
    {{-- <style>
        @media screen and (max-width: 760px) {
            .modalTes {
                display: hidden;
                align-items: center;
            }
    
            .modalTes .bg-white {
                width: 560px;
                margin-top: 4rem;
                margin-bottom: 4rem;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
            }
    
            .modalTes .bg-white {
                margin-top: 0.3rem; /* Menambahkan margin bawah */
                margin-bottom: 2rem; /* Menambahkan margin bawah */
            }
        }
    </style> --}}
    {{-- TUTUP ISI DATA DIRI --}}
    
    {{-- PENJELASAN PSIKOTEST --}}
    <div class="notificationPopup h-screen w-full fixed left-0 top-0 flex justify-center items-center bg-opacity-50 z-50 hidden overflow-y-auto" style="padding: 1rem;">
        <div class="bg-primary rounded-xl shadow-lg max-w-3xl w-full md:max-w-md" style="margin-top: 5vh; margin-bottom: 5vh;"> <!-- Tambahkan margin-bottom untuk memberikan jarak dari bawah -->
            <div class="text-right p-3 closeNotification">
                <i class='bx bxs-x-circle text-[48px] text-[#F34949]'></i>
            </div>
            <div class="text-center px-6 md:px-0">
                <h2 class="font-medium text-4xl mb-8 -mt-8 leading-tight text-white">Penjelasan Psikotes</h2>
                <p class="font-normal m-12 text-justify text-white">Apa itu Tes Kepribadian Big 5 OCEAN? <br>
                    Tes ini merupakan model dari tes lima dimensi kepribadian yang dapat mengungkapkan potensi karir yang sesuai dengan kepribadian Anda. Tes Lima Dimensi Kepribadian secara luas dianggap sebagai cara paling kuat untuk menggambarkan perbedaan kepribadian yang Anda miliki.
                    <br><br> Tes Lima Dimensi Kepribadian adalah salah satu alat tes untuk mengungkap kepribadian berdasarkan teori Big Five Personality yang dikemukakan oleh seorang psikolog terkenal, yaitu Lewis Goldberg. Dalam teori sifat kepribadian "The Big Five Personality Traits Model" tersebut terdiri dari lima dimensi kunci diantaranya seperti, Openness (O), Conscientiousness (C), Extraversion (E), Agreeableness (A) dan Neuroticism (N).
                    <br>Ikuti kuis ini untuk mengeksplorasi kepribadian Anda dengan Tes Lima Kepribadian, Anda akan melihat bagaimana lima dimensi kepribadian utama: Openness (O), Conscientiousness (C), Extraversion (E), Agreeableness (A) dan Neuroticism (N).</p>
            </div>
            <div class="flex justify-center md:justify-start gap-4 m-12"> <!-- Modifikasi di sini: justify-center diubah menjadi justify-start -->
                <button class="text-lg text-white bg-green-500 rounded-md hover:bg-white hover:text-primary duration-700 px-6 py-2 w-fit showModal">
                    Mulai Tes
                </button>
                <a href="{{ route('psikotestHome') }}" class="text-white font-medium rounded-md border-2 border-white hover:bg-white hover:text-primary hover:cursor-pointer px-6 py-2 w-fit">
                    Kembali ke Beranda
                </a>
            </div>
        </div>
    </div>

    <style>
    @media screen and (max-width: 760px) {
        .notificationPopup {
            display: hidden;
            align-items: center;
            justify-content: center;
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            /* padding-top: 16rem; */
            background-color: rgba(0, 0, 0, 0.5); /* Memberikan latar belakang semi-transparan */
            z-index: 50;
            overflow-y: auto; /* Tidak ada scroll vertikal */
        }

        .notificationPopup .bg-primary {
            max-width: calc(100%); /* Mengurangi margin kiri dan kanan */
            padding: 1rem 1rem 1rem 1rem; /* Mengurangi padding */
        }

        .notificationPopup h2 {
            margin-top: -2rem; /* Memperkecil jarak atas judul */
        }

        .notificationPopup p {
            margin: 0.5rem 0; /* Menambahkan margin atas dan bawah */
            font-size: 1rem;
            padding-left: 1rem; /* Menambahkan padding horizontal */
            padding-right: 1rem; /* Menambahkan padding horizontal */
        }

        .notificationPopup .flex {
            margin-top: 1.5rem; /* Memperkecil jarak atas tombol */
            margin-bottom: 1rem; /* Menambahkan jarak bawah tombol */
        }
    }
    </style>
    {{-- TUTUP PENJELASAN PSIKOTEST --}}


<div class="modal h-screen w-full fixed left-0 top-0 flex justify-center items-center bg-black bg-opacity-50 z-50 hidden overflow-y-auto" style="padding: 2rem;">
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
            <a href="{{ route('psikotestFreeTest') }}" class="text-lg text-white bg-green-500 rounded-md hover:bg-primary duration-700 px-8 mt-0 mb-4 py-2 w-fit">Mulai</a>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // JavaScript code here
        const modalTes = document.querySelector('.modalTes');
        const notificationPopup = document.querySelector('.notificationPopup');
        const modal = document.querySelector('.modal');
        const showmodalTes = document.querySelector('.showmodalTes');
        const closemodalTes = document.querySelector('.closemodalTes');
        const closeNotification = document.querySelector('.closeNotification');
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
            notificationPopup.classList.remove('hidden');
        });

        closeNotification.addEventListener('click', function() {
            notificationPopup.classList.add('hidden');
        });
    });

</script>
@endsection