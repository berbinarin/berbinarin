@extends('moduls.psikotes.layouts.main', [
'title' => 'Psikotest Berbinar',
'active' => 'Home',
'page' => 'Homepage',
])

@section('content')
<section class="h-full">
    <div class="max-w-6xl mx-auto p-5 md:pt-0 h-fit flex flex-col sm:flex-row relative items-center">
        {{-- HERO IMG MOBILE --}}

        <img src="{{ asset('assets/images/konseling/regist/ilustrasi1.png') }}" alt="Ilustrasi Logo Berbinar" title="Ilustrasi Logo Berbinar" class="w-full block sm:hidden " data-aos="fade-up" data-aos-duration="1500">


        {{-- HERO CONTENT --}}
        <div class="relative flex items-center">
            <div class="rounded-[700px] blur-[55px] w-[300px] md:w-[600px] h-[250px] md:h-fit absolute">
            </div>
            <div class="flex flex-col gap-5 z-40 relative my-5">
                <h1 class="font-semibold text-black text-[40px] md:text-[64px] leading-[120%]">
                    Tingkatkan <br> Potensi dengan <br> Psikotes <span class="text-primary font-bold">Berbinar</span>
                </h1>
                <p class="text-lg text-disabled ">Berbinar hadir untuk SobatBinar yang ingin meningkatkan potensi diri
                    melalui
                    layanan psikotes individu dan perusahaan.</p>
                <div class="flex flex-col lg:flex-row gap-4">
                    <a href="{{ route('psikotestFreeStart') }}" class="text-lg text-[#70787D] bg-[#C1C1C1] rounded-full font-medium hover:bg-amber-300 hover:text-primary duration-700 px-5 py-2 w-fit">Ikuti
                        Tes Gratis</a>
                    <a href="https://forms.gle/aabDZ5DmmhJs8obk8" target="_blank" rel="noopener noreferrer" class="text-lg text-white bg-primary rounded-full font-semibold hover:bg-amber-300 hover:text-primary hover:font-semibold duration-500 px-5 py-2 w-fit">Daftar
                        Tes Berbayar</a>
                </div>
            </div>
        </div>

        {{-- HERO IMG DESKTOP --}}

        <img src="{{ asset('assets/images/konseling/regist/ilustrasi1.png') }}" alt="Ilustrasi-Test" class="w-1/2 hidden sm:block" data-aos="fade-left" data-aos-duration="1500">

    </div>
</section>


<!-- {{-- START INSTRUKSI PENGISIAN --}}
            <div
                class="modal h-screen w-full fixed left-0 top-0 flex justify-center items-center bg-black bg-opacity-50 z-50 hidden overflow-y-auto p-4">
                <div class="bg-white rounded-xl shadow-lg w-[560px]">
                    <div class="text-right p-3 closeModal">
                        <i class='bx bxs-x-circle text-[40px] text-[#F34949]'></i>
                    </div>
                    <div>
                        <div class="text-center">
                            <h1 class="text-primary text-center text-3xl mb-8 -mt-6">Instruksi Pengisian</h1>
                            <p class="font-bold px-16" style="font-size: 16px; @media (min-width: 768px) { font-size: 18px; }">
                                Perhatikan dengan seksama instruksi pengisian berikut untuk mengisi free tes psikotes berbinar</p>
                        </div>
                        <div class="px-10 py-10">
                            <p class="text-justify" style="font-size: 14px; @media (min-width: 768px) { font-size: 16px; }">Pada tes
                                ini, setiap nomor berisikan satu pernyataan beserta lima pilihan skor jawaban. Tugas SobatBinar
                                adalah
                                menentukan <span class="font-bold">skor kesesuaian</span> setiap pernyataan dengan keadaan diri Kamu
                                yang sebenarnya. Tiap pilihan skor kesesuaian yang SobatBinar pilih memiliki kriterianya
                                masing-masing.
                            </p>
                            <p class="font-bold" style="font-size: 14px; @media (min-width: 768px) { font-size: 16px; }">
                                <br>Keterangan Skor:
                            </p>
                            <p style="font-size: 14px; @media (min-width: 768px) { font-size: 16px; }">1: Sangat tidak sesuai</p>
                            <p style="font-size: 14px; @media (min-width: 768px) { font-size: 16px; }">2: Tidak sesuai</p>
                            <p style="font-size: 14px; @media (min-width: 768px) { font-size: 16px; }">3: Ragu-ragu</p>
                            <p style="font-size: 14px; @media (min-width: 768px) { font-size: 16px; }">4: Sesuai</p>
                            <p style="font-size: 14px; @media (min-width: 768px) { font-size: 16px; }">5: Sangat sesuai</p>
                        </div>
                    </div>
                    <div class="flex justify-center items-center w-100">
                        <a href="{{ route('test.index') }}"
                            class="text-lg text-white bg-green-500 rounded-md hover:bg-primary duration-700 px-8 mt-0 mb-2 py-2 w-fit">Mulai</a>
                    </div>
                </div>
            </div>
            {{-- END INSTRUKSI PENGISIAN --}} -->

@if (session('notif') === 'VerifPsikotes')
{{-- POP UP FEEDBACK PSIKOTES --}}
<section>
    <div id="close-psikotes" class="modal fixed top-0 left-0 right-0 z-[60] flex justify-center items-center w-full h-full">
        <div class="modal-dialog overflow-hidden m-4 modal-xl bg-linear rounded-xl shadow-lg p-4" style="background-color: white">
            <div class="modal overflow-hidden">
                <div style="max-width: 40rem">
                    <div class="px-4">
                        <div class="flex md:mt-5">
                            <div class="flex-none mr-6 mb-4 hidden md:block">
                                <img src="{{ asset('assets/images/logo-berbinar-text.png') }}" alt="Logo Berbinar Insightful Indonesia" title="Logo Berbinar Insightful Indonesia" style="width: 8rem">
                            </div>
                            <div class="flex-1 overflow-hidden">
                                <h1 class="text-left text-3xl font-semibold mb-5">Terima Kasih</h1>
                                <div class="text-justify text-pretty font-light">
                                    Atas kesediannya dalam mengikuti tes kepribadian gratis.<br><br>
                                    Untuk SobatBinar yang ingin mengetahui kepribadian lebih dalam atau ingin
                                    mengetahui
                                    aspek-aspek psikologis lain seperti, minat bakat, tes kecocokan pasangan, tes
                                    penjurusan, dan lainnya.<br><br>SobatBinar bisa melakukan pendaftaran link
                                    berikut
                                    ya!<br><a href="https://forms.gle/aabDZ5DmmhJs8obk8" target="_blank" rel="noopener noreferrer" class="text-blue-600 dark:text-blue-500 hover:underline">Psikotes
                                        Berbinar</a>
                                    <br><br>Terima kasih, semoga harimu menyenangkan
                                    <br><br>Jika ada hal yang ingin disampaikan, SobatBinar dapat menghubungi
                                    narahubung
                                    di bawah ini:<br>
                                    <div class="font-semibold text-left">082351088413 (Diah)</div>
                                </div>
                                <div class="ml-auto my-2 md:my-4 rounded-md px-4 py-2 w-fit duration-300 cursor-pointer bg-primary hover:bg-sky-950 text-white" onclick="closeModal('close-psikotes')">
                                    <span>Tutup</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<div class="modalin opacity-25 fixed inset-0 z-50 bg-black" id="close-psikotes-backdrop"></div>
@endif

<script>
    const hero = document.querySelector('.hero');
    const header = document.querySelector('#header');

    window.addEventListener('DOMContentLoaded', (event) => {
        @if(session('notif') === 'VerifPsikotes')
        header.classList.remove('fixed');
        hero.style.height = '33rem';
        document.getElementById('close-konseling').classList.remove('hidden');
        document.getElementById('close-konseling-backdrop').classList.remove('hidden');
        @endif
    });

    function closeModal(modalID) {
        const modal = document.getElementById(modalID);
        modal.classList.add("hidden");
        document.getElementById(modalID + "-backdrop").classList.add("hidden");
        header.classList.add('fixed');
        hero.style.height = '';
    }
</script>
@endsection