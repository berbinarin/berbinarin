@extends('moduls.psikotes.layouts.main', [
    'title' => 'Psikotest Berbinar',
    'active' => 'Test',
])

@section('content')
    <section>
        <div class="flex">
            <div class="t-container mt-24 ml-28 z-10">
                <h2 class="text-white text-5xl">Psikotes Berbinar</h2>
                <p class="text-white font-light text-lg mt-3">Kerjakan soal dengan cermat dan teliti</p>
                <div class="quest-container mt-6 w-[690px] h-[390px] bg-white rounded-3xl p-16">
                    <p class="question ">Saya mudah berteman dengan siapapun</p>
                    <div class="quest-choice flex gap-10 mt-6">
                        <button class="opt1 rounded-full bg-slate-200 text-slate-700 hover:bg-slate-400 w-12 h-12">1</button>
                        <button class="opt2 rounded-full bg-slate-200 text-slate-700 hover:bg-slate-400 w-12 h-12">2</button>
                        <button class="opt3 rounded-full bg-slate-200 text-slate-700 hover:bg-slate-400 w-12 h-12">3</button>
                        <button class="opt4 rounded-full bg-slate-200 text-slate-700 hover:bg-slate-400 w-12 h-12">4</button>
                        <button class="opt5 rounded-full bg-slate-200 text-slate-700 hover:bg-slate-400 w-12 h-12">5</button>
                    </div>
                    <div class="helper-text flex text-slate-500 text-xs mt-3 gap-[280px]">
                        <p>Sangat <br>tidak sesuai</p>
                        <p>Sangat sesuai</p>
                    </div>
                    <hr class="h-px mt-8 border-0 bg-slate-200">
                    <div class="button-test flex gap-64 mt-8">
                        <button class="px-10 py-3 text-white bg-primary rounded-3xl hover:bg-sky-950">Kembali</button>
                        <button class="px-10 py-3 text-primary bg-white border-primary border-[1px] rounded-3xl hover:bg-sky-950 hover:text-white">Selanjutnya</button>
                    </div>
                </div>
                <p class="mt-20 text-white text-lg font-light">Copyright © PT Berbinar Insightful Indonesia. 2023</p>
            </div>
            <div>
                <img src="{{ asset('assets/images/psikotes/ilustrasi-soal.png') }}"  class="-ml-36 w-[880px]">
            </div>
        </div>
    </section>
@endsection