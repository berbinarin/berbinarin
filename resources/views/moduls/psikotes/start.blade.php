@extends('moduls.psikotes.layouts.main', [
    'title' => 'Psikotest Berbinar',
    'active' => 'Intro',
])

@section('content')
{{-- 
    <section class="intro_container">
        <div class="flex flex-col items-center">
            <h2 class="intro_title md:w-full w-[90%] text-center font-medium text-6xl m-12 leading-tight ">Free Tes Psikotes Berbinar</h2>
            <p class="intro_description md:w-[70%] w-[85%] font-normal m-4 text-justify">Tes ini merupakan model dari tes lima dimensi kepribadian yang dapat mengungkapkan potensi karir yang sesuai dengan kepribadian Anda. Tes Lima Dimensi Kepribadian secara luas dianggap sebagai cara paling kuat untuk menggambarkan perbedaan kepribadian yang Anda miliki. Ini adalah dasar penelitian kepribadian paling modern. <br><br> Tes Lima Dimensi Kepribadian adalah salah satu alat tes untuk mengungkap kepribadian berdasarkan teori Big Five Personality yang dikemukakan oleh seorang psikolog terkenal, yaitu Lewis Goldberg. Dalam teori sifat kepribadian "The Big Five Personality Traits Model" tersebut terdiri dari lima dimensi kunci diantaranya seperti, Openness (O), Conscientiousness (C), Extraversion (E), Agreeableness (A) dan Neuroticism (N).</p>    
            <div class="flex gap-4 my-12">
                <button class="text-lg text-white bg-green-500 rounded-md hover:bg-white hover:text-primary duration-700 px-6 py-2 w-fit showModal">
                    Mulai Tes
                </button>
                <a href="{{ route('psikotestHome') }}" class="text-white font-medium rounded-md border-2 border-white hover:bg-white hover:text-primary hover:cursor-pointer px-6 py-2 w-fit block">
                    Kembali ke Beranda
                </a>
            </div>
        </div>
    </div>
    </section> --}}

    <!--========== POP UP ==========-->
    <section>
        {{-- <div class="modal h-screen w-full fixed left-0 top-0 flex justify-center items-center bg-black bg-opacity-50 z-40 hidden">
            <div class="bg-white rounded-xl shadow-lg w-[560px]">
                <div class="text-right p-3 closeModal">
                    <i class='bx bxs-x-circle text-[48px] text-[#F34949]'></i>
                </div>
                <div>
                    <div class="text-center">
                        <h1 class="text-primary text-center text-3xl mb-4 -mt-10">Instruksi Pengisian</h1>
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
        </div> --}}
    </section>

    {{-- <script>
        const modal = document.querySelector('.modal');
        const showModal = document.querySelector('.showModal');
        const closeModal = document.querySelector('.closeModal');

        showModal.addEventListener('click', function(){
            modal.classList.remove('hidden')
        });

        closeModal.addEventListener('click', function(){
            modal.classList.add('hidden')
        });
    </script> --}}

@endsection