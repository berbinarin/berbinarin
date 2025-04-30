@extends('moduls.psikotes.layouts.mainn', [
    'title' => 'Instruksi EPI',
    'active' => 'one psikotest',
])

@section('content')
<div class="relative h-11/12 md:min-h-screen flex flex-col items-center bg-gray-100 justify-center">
    <!-- bg-internship -->
    <img src="{{ asset('assets/images/psikotes/paid/psikotest-soal-bg.png') }}" alt="Latar Belakang Berbinar"
        class="absolute inset-0 hidden md:block md:w-full md:h-full object-cover z-0">

    <!-- Container untuk ikon di atas card -->
    <div class="absolute top-0 left-0 right-0 flex items-center justify-center mt-8 z-10">
        <div class="bg-white h-[50px] rounded-full px-4 py-2 flex items-center">
            <img src="{{ asset('assets/images/psikotes/paid/logo-berbinar.png') }}" alt="Ikon"
                class="w-8 h-8 rounded-full">
            <img src="{{ asset('assets/images/psikotes/paid/logo-berbinar-psikotest.png') }}" alt="Ikon"
                class="w-8 h-8 rounded-full ml-2">
        </div>
    </div>

    <p class="font-bold text-2xl text-center text-gray-800 mt-16 z-20 relative">Tes XX</p>

    <!-- Card Transparant -->
    <div class="relative text-justify z-10 w-3xl mx-auto bg-white bg-opacity-50 shadow-lg rounded-lg p-6 mt-8"
        style="width: 750px;">

        {{-- <p class="text-black mt-4 px-5">
            Hai {{ $user->fullname }}, berikut adalah instruksi untuk test {{ $tool->name }}
        </p> --}}
        <p class="text-black mt-6 px-5">
            Berikut ini, terdapat pertanyaan-pertanyaan yang menyangkut tingkah laku, perasaan dan perbuatan Anda. Di
            bawah setiap pertanyaan disediakan tempat untuk menjawab:
        <div class="flex justify-center gap-1 font-bold">
            <span class="text-green-500">YA</span> <b>atau</b> <span class="text-red-500">TIDAK</span>
        </div>
        </p>
        <p class="text-black mt-2 px-5">
            Hendaknya Anda mencoba menentukan jawaban manakah yang <b>paling tepat</b> dengan yang Anda rasakan atau
            Anda
            lakukan, pilihlah opsi “<span class="text-green-500 font-bold">YA</span>”, jika jawaban Anda adalah YA,
            dan <b>pilihlah opsi</b> “<span class="text-red-500 font-bold">TIDAK</span>” jika jawaban Anda
            adalah TIDAK.
        </p>
        <p class="text-black mt-2 px-5">
            Pilihlah jawaban setiap Anda selesai membaca pertanyaan sehingga <b>Anda tidak perlu untuk melakukan proses
                pemikiran panjang.</b>
        </p>
        <p class="text-black mt-2 px-5">
            Untuk menyelesaikan daftar pertanyaan ini diperlukan waktu yang terbatas. Silahkan Anda membaca halaman
            berikutnya dan mulailah menjawab setiap pertanyaan. <b>Dalam hal ini tidak ada penilaian yang salah terhadap
                tiap jawaban yang Anda berikan.</b> Pertanyaan-pertanyaan ini bukanlah untuk tes inteligensi atau tes kecakapan,
            hal ini melainkan semata-mata bertujuan hanya untuk mengukur cara perilaku, perasaan, dan pikiran Anda.
        </p>

        <div class="mb-4 flex justify-center mt-10">
            <form action="{{ route('psikotest-paid.tool.EPI.start') }}" method="POST">
                @csrf
                <button type="submit"
                    class="w-xl bg-primary items-center text-white py-2 px-10 rounded-full hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
                    Selanjutnya
                </button>
            </form>
            {{-- <form action="{{ route('psikotest-paid.papi-kostick.start') }}" method="POST">
                @csrf
                <button type="submit"
                    class="w-xl bg-primary items-center text-white py-2 px-10 rounded-full hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Selanjutnya</button>
            </form> --}}
        </div>

    </div>
</div>
@endsection