@extends('moduls.psikotes.layouts.mainn', [
    'title' => 'instruksi psikotest',
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

        <p class="font-bold text-2xl text-center text-gray-800 mt-16 z-20 relative">Tes 01</p>

        <!-- Card Transparant -->
        <div class="relative text-justify z-10 w-3xl mx-auto bg-white bg-opacity-50 shadow-lg rounded-lg p-6 mt-8"
            style="width: 750px;">

            <p class="text-black mt-4 px-5">
                Hai {{ $user->fullname }}, berikut adalah instruksi untuk test {{ $tool->name }}
            </p>
            <p class="text-black mt-6 px-5">
                Akan terdapat 90 pasang pernyataan. Pilihlah satu pernyataan dari pasangan pernyataan yang Anda rasakan
                paling mendekati gambaran diri Anda, atau yang paling menunjukkan perasaan Anda.

            </p>
            <p class="text-black mt-2 px-5">
                Terkadang Anda akan merasa bahwa kedua pernyataan itu sesuai benar dengan diri Anda, meskipun demikian Anda
                harus tetap memilih satu pernyataan yang paling menunjukkan diri Anda.
            </p>
            <p class="text-black mt-2 px-5">
                Anda <span class="font-bold">HARUS</span> memilih salah satu yang dominan serta mengisi semua nomor.
            </p>

            <div class="mb-4 flex justify-center mt-10">
                <form action="{{ route('psikotest-paid.papi-kostick.start') }}" method="POST">
                    @csrf
                    <button type="submit"
                        class="w-xl bg-primary items-center text-white py-2 px-10 rounded-full hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Selanjutnya</button>
                </form>
            </div>


        </div>
    </div>
@endsection

{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1>{{ $tool->name }} Test</h1>
        <p>Welcome, {{ $user->name }}!</p>
        <form action="{{ route('psikotest-paid.papi-kostick.start') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-primary">Start Test</button>
        </form>
        <a href="{{ route('psikotest-paid.showLanding') }}" class="btn btn-secondary mt-3">Back to Home</a>
    </div>
</body>
@include('sweetalert::alert')

</html> --}}
