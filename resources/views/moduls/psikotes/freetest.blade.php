@extends('moduls.psikotes.layouts.main', [
    'title' => 'Psikotest Berbinar',
    'active' => 'Test',
])

<style>
    .orange-line {
        width: 100px;
        height: 4px;
        background-color: orange;
        border: none;
        float: left;
    }
    .blue-line {
        height: 4px;
        background-color: rgb(57, 134, 163);
        border: none;
        float: left;
        width: calc(100% - 100px); /* Calculate the width of the blue line */
    }
    /* Modify quest-container size */
    .quest-container {
        width: 900px; /* Reduce width */
        height: 400px; /* Reduce height */
    }
</style>
</style>

@section('content')
    <section>
        <div class="flex">
            <div class="t-container mt-10 ml-18 z-10">
                <h2 class="text-white text-4xl">Psikotes Berbinar</h2>
                <p class="text-white font-light text-2x mt-3">Kerjakan soal dengan cermat dan teliti</p>
                <div class="quest-container mt-6 w-[1100px] h-[410px] bg-white rounded-3xl p-16">
                    <form action="{{ route('psikotes.testGratis') }}">
                        {{-- Deactivate item and question variables --}}
                        <div>
                            <div class="orange-line"></div>
                            <div class="blue-line"></div>
                        </div>
                        <br>
                        <p class="question " style="font-size: 1.5em;">Saya mudah berteman dengan siapapun *</p>
                        <div class="quest-choice flex gap-10 mt-6">
                            <button class="opt1 rounded-full bg-slate-200 text-slate-700 hover:bg-slate-400 w-12 h-12">1</button>
                            <button class="opt2 rounded-full bg-slate-200 text-slate-700 hover:bg-slate-400 w-12 h-12">2</button>
                            <button class="opt3 rounded-full bg-slate-200 text-slate-700 hover:bg-slate-400 w-12 h-12">3</button>
                            <button class="opt4 rounded-full bg-primary text-white hover:bg-slate-400 w-12 h-12">4</button>
                            <button class="opt5 rounded-full bg-slate-200 text-slate-700 hover:bg-slate-400 w-12 h-12">5</button>
                        </div>  
                        <div class="helper-text flex text-slate-500 text-xs mt-3 gap-[280px]">
                            <p>Sangat <br>tidak sesuai</p>
                            <p>Sangat sesuai</p>
                        </div>
                        <br>
                        <div class="button-test flex justify-start"></div>
                        <div class="button-test flex justify-between mt-8">
                            <button class="px-10 py-3 text-primary bg-white border-primary border-[1px] rounded-2xl hover:bg-sky-950 hover:text-white">Kembali</button>
                            <button class="px-10 py-3 text-white bg-primary rounded-2xl hover:bg-sky-950">Selanjutnya</button>
                        </div>
                    </form>
                </div>   
                <p class="mt-10 text-white text-lg font-light">Copyright © PT Berbinar Insightful Indonesia. 2023</p>
            </div>
        </div>
    </section>
@endsection