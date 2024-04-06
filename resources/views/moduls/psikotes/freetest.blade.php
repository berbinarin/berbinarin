@extends('moduls.psikotes.layouts.main', [
    'title' => 'Psikotest Berbinar',
    'active' => 'Test',
])

{{-- Tambahan CSS Internal untuk garis biru dan orange --}}
<style>
    .quest-container {
    position: relative;
}

.absolute-elements {
    position: absolute;
    top: 50px;
    left: 0;
    width: 100%;
}

.orange-line {
    position: absolute;
    top: 50%;
    left: 0;
    width: 16.666666%; /* Persentase lebar garis */
    height: 5px;
    background-color: orange;
    margin-top: -10px;
    clip-path: inset(0px 0px 0px 65px); /* Pemangkasan kiri */
}

.blue-line {
    position: absolute;
    top: 50%;
    left: 16.666666%;
    width: 83.333333%;
    height: 5px;
    background-color: #3986A3;
    margin-top: -10px;
    clip-path: inset(0px 65px 0px 0px); /* Pemangkasan kanan */
}



@media screen and (max-width: 768px) {
    .orange-line {
        width: 16.666666%; /* Tetap menggunakan persentase yang sama pada layar kecil */
        clip-path: inset(0px 0px 0px calc(100% - 16.666666%)); /* Tetap memotong panjang kiri */
    }

    .blue-line {
        width: 83.333333%; /* Tetap menggunakan persentase yang sama pada layar kecil */
        clip-path: inset(0px calc(100% - 83.333333%) 0px 0px); /* Tetap memotong panjang kanan */
    }

    /* Menambahkan responsive btn */
    .button-test button {
            width: 100%;
            margin-bottom: 10px; /* Adjust as needed */
        }

    .helper-text {
        gap: 0;
        flex-direction: column;
        align-items: left;
    }
    
}

/* menambahkan media query untuk bg-white responsive dan mobile*/
@media only screen and (max-width: 600px) {
        .quest-container {
            height: 550px !important;
        }
    }
</style>

@section('content')
    <section class="mt-16">
        <div class="flex justify-start items-left">
            <div class="bg-primary t-container ml-auto z-38 w-full max-w-[1000px] p-8" style="margin-top: 10px; margin-left: 0; @media (max-width: 768px) { margin-left: auto; margin-right: auto; margin-top: 1px; left: 0; right: 0; transform: translateX(-50%); }"> {{-- menambahkan max-w-[1000px] agar tidak menempel sisi kanan&kiri --}}
                <h2 class="text-white text-5xl">Psikotes Berbinar</h2>
                <p class="text-white font-light text-xl mt-3">Kerjakan soal dengan cermat dan teliti</p>
                <div class="quest-container mt-6 w-full bg-white rounded-3xl p-16" style="height: 370px;"> 
                    <div class="absolute-elements">
                        <div class="orange-line"></div>
                        <div class="blue-line"></div>
                    </div>
                    <form action="{{ route('psikotestHasilTest') }}">
                        {{-- Deactivate item and question variables --}}
                        <br>
                        <p class="question text-md md:text-2xl lg:text-3xl xl:text-2xl" style="font-size: 1.3em;">Saya mudah berteman dengan siapapun *</p>
                        <div class="quest-choice flex flex-wrap md-justify-start  gap-4 md:gap-10 mt-6">
                            <button class="opt1 rounded-full bg-slate-200 text-slate-700 hover:bg-slate-400 w-12 h-12">1</button>
                            <button class="opt2 rounded-full bg-slate-200 text-slate-700 hover:bg-slate-400 w-12 h-12">2</button>
                            <button class="opt3 rounded-full bg-slate-200 text-slate-700 hover:bg-slate-400 w-12 h-12">3</button>
                            <button class="opt4 rounded-full bg-primary text-white hover:bg-slate-400 w-12 h-12">4</button>
                            <button class="opt5 rounded-full bg-slate-200 text-slate-700 hover:bg-slate-400 w-12 h-12">5</button>
                        </div>  
                        <div class="helper-text flex text-slate-500 text-xs mt-2 gap-6 md:gap-[280px]"> {{-- mengurangi gap pada tampilan responsive dan mobile --}}
                            <p class="text-sm md:text-base" style="margin-right: -5.5em;">Sangat tidak sesuai</p> {{-- menambahkan ml untuk posisi tepat dibawah angka 5 pada tampilan dkstp --}}
                            <p class="text-sm md:text-base">Sangat sesuai</p>
                        </div>
                        <br>
                        <div class="button-test flex justify-start"></div>
                        <div class="button-test flex flex-col md:flex-row justify-between mt-3">
                            <button class="px-6 md:px-10 py-3 text-primary bg-white border-primary border-[1px] rounded-2xl hover:bg-sky-950 hover:text-white">Kembali</button>
                            <button class="px-6 md:px-10 py-3 text-white bg-primary rounded-2xl hover:bg-sky-950 md:w-auto mt-2 md:mt-0">Selanjutnya</button> {{-- menambahkan md:w-auto mt-2 md:mt-0 untuk responsive btn --}}
                        </div>
                    </form>
                </div>   
                <p class="mt-5 text-white text-lg font-light">Copyright © PT Berbinar Insightful Indonesia. 2023</p>
            </div>
        </div>
    </section>
@endsection