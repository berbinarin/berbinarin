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
    clip-path: inset(0px 0px 0px 65px); /* Pemangkasan kiri */
}

.blue-line {
    position: absolute;
    top: 50%;
    left: 16.666666%;
    width: 83.333333%;
    height: 5px;
    background-color: #3986A3;
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
}

</style>

@section('content')
    <section class="mt-16">
        <div class="flex justify-center items-center">
            <div class="bg-primary t-container ml-auto z-38 w-full max-w-[1000px] p-8"> {{-- menambahkan max-w-[1000px] agar tidak menempel sisi kanan&kiri --}}
                <h2 class="text-white text-5xl">Psikotes Berbinar</h2>
                <p class="text-white font-light text-lg mt-3">Kerjakan soal dengan cermat dan teliti</p>
                <div class="quest-container mt-6 w-full h-[410px] bg-white rounded-3xl p-16">
                    <div class="absolute-elements">
                        <div class="orange-line"></div>
                        <div class="blue-line"></div>
                    </div>
                    <form action="{{ route('psikotes.testGratis') }}">
                        {{-- Deactivate item and question variables --}}
                        <br>
                        <p class="question text-xl md:text-2xl lg:text-3xl xl:text-4xl" style="font-size: 1.5em;">Saya mudah berteman dengan siapapun *</p>
                        <div class="quest-choice flex gap-10 mt-6">
                            <button class="opt1 rounded-full bg-slate-200 text-slate-700 hover:bg-slate-400 w-12 h-12">1</button>
                            <button class="opt2 rounded-full bg-slate-200 text-slate-700 hover:bg-slate-400 w-12 h-12">2</button>
                            <button class="opt3 rounded-full bg-slate-200 text-slate-700 hover:bg-slate-400 w-12 h-12">3</button>
                            <button class="opt4 rounded-full bg-primary text-white hover:bg-slate-400 w-12 h-12">4</button>
                            <button class="opt5 rounded-full bg-slate-200 text-slate-700 hover:bg-slate-400 w-12 h-12">5</button>
                        </div>  
                        <div class="helper-text flex text-slate-500 text-xs mt-2 gap-10 md:gap-[280px]">
                            <p class="text-sm md:text-base">Sangat tidak sesuai</p>
                            <p class="text-sm md:text-base">Sangat sesuai</p>
                        </div>
                        <br>
                        <div class="button-test flex justify-start"></div>
                        <div class="button-test flex justify-between mt-3">
                            <button class="px-6 md:px-10 py-3 text-primary bg-white border-primary border-[1px] rounded-2xl hover:bg-sky-950 hover:text-white">Kembali</button>
                            <button class="px-6 md:px-10 py-3 text-white bg-primary rounded-2xl hover:bg-sky-950">Selanjutnya</button>
                        </div>
                    </form>
                </div>   
                <p class="mt-5 text-white text-lg font-light">Copyright © PT Berbinar Insightful Indonesia. 2023</p>
            </div>
        </div>
    </section>
@endsection