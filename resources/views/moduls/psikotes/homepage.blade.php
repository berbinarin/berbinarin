@extends('moduls.psikotes.layouts.main', [
'title' => 'Psikotest Berbinar',
'active' => 'Home',
'page' => 'Homepage',
])

@section('content')
<section class="h-full">
    <div class="max-w-6xl mx-auto p-5 md:pt-0 h-fit flex flex-col relative justify-center items-center text-center">
        {{-- HERO IMG MOBILE --}}

        <img src="{{ asset('assets/images/konseling/regist/Ilustrasi1.png') }}" alt="Ilustrasi Logo Berbinar" title="Ilustrasi Logo Berbinar" class="w-full block sm:hidden " data-aos="fade-up" data-aos-duration="1500">


        {{-- HERO CONTENT --}}
        <div class="relative flex justify-center items-center">
            <div class="rounded-[700px] blur-[55px] w-[300px] md:w-[600px] h-[250px] md:h-fit absolute">
            </div>
            <div class="flex flex-col gap-5 z-40 relative my-5 justify-center items-center text-center object-center">
                <h1 class="font-semibold text-black text-[40px] md:text-[60px] leading-[120%]">
                    Tingkatkan Potensi dengan <br> Psikotes <span class="text-primary font-bold">Berbinar</span>
                </h1>

                {{-- HERO IMG DESKTOP --}}
                <img src="{{ asset('assets/images/konseling/regist/Ilustrasi1.png') }}" alt="Ilustrasi-Test" class="w-[250px] hidden sm:block" data-aos="fade-down" data-aos-duration="1500">

                <p class="text-lg text-disabled ">Berbinar hadir untuk SobatBinar yang ingin meningkatkan potensi diri
                    <br> melalui jenis layanan psikotes yang terdiri dari:
                </p>
                <div class="grid grid-cols-4 gap-14 mb-3">
                    <div class="border-2 border-[#65696c] rounded-full py-2 px-4">
                        <p class="text-[#65696c]">Psikotes Individu</p>
                    </div>
                    <div class="border-2 border-[#65696c] rounded-full py-2 px-4">
                        <p class="text-[#65696c]">Psikotes Individu</p>
                    </div>
                    <div class="border-2 border-[#65696c] rounded-full py-2 px-4">
                        <p class="text-[#65696c]">Psikotes Individu</p>
                    </div>
                    <div class="border-2 border-[#65696c] rounded-full py-2 px-4">
                        <p class="text-[#65696c]">Psikotes Individu</p>
                    </div>

                </div>


                <div class="flex flex-col lg:flex-row gap-4">
                    <a href="https://forms.gle/aabDZ5DmmhJs8obk8" target="_blank" rel="noopener noreferrer" class="text-lg text-white bg-primary rounded-full font-semibold hover:text-amber-400 hover:font-semibold duration-500 px-5 py-2 w-fit">Daftar
                        Tes Berbayar</a>
                    <a href="{{ route('psikotestFreeStart') }}" class="text-lg text-white bg-amber-500 rounded-full font-semibold hover:bg-amber-400 hover:text-primary duration-700 px-5 py-2 w-fit">IKUTI
                        TES KEPRIBADIAN GRATIS</a>

                </div>
            </div>
        </div>

        <!-- {{-- HERO IMG DESKTOP --}}

        <img src="{{ asset('assets/images/konseling/regist/Ilustrasi1.png') }}" alt="Ilustrasi-Test" class="w-[290px] hidden sm:block" data-aos="fade-left" data-aos-duration="1500"> -->

    </div>
</section>


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