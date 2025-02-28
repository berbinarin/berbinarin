@extends('moduls.psikotes.layouts.mainn', [
    'title' => 'Instruksi DASS',
    'active' => 'one psikotest',
])

@section('content')
<div class="relative min-h-screen h-full w-full flex flex-col items-center justify-center">
    <img src="{{ asset('assets/images/psikotes/paid/psikotest-soal-bg.png') }}" alt="Latar Belakang Berbinar"
        class="absolute inset-0 h-full w-full object-cover z-0">

    <div class="absolute top-8 left-0 right-0 flex items-center justify-center z-10">
        <div class="bg-white h-[50px] rounded-full px-4 py-2 flex items-center">
            <img src="{{ asset('assets/images/psikotes/paid/logo-berbinar.png') }}" alt="Ikon"
                class="w-8 h-8 rounded-full">
            <img src="{{ asset('assets/images/psikotes/paid/logo-berbinar-psikotest.png') }}" alt="Ikon"
                class="w-8 h-8 rounded-full ml-2">
        </div>
    </div>

    <p class="font-bold text-2xl text-center text-gray-800 mt-24 z-20 relative">Tes 01</p>

    <div class="relative text-justify z-10 max-sm:w-[90%] max-lg:w-[75%] w-[60%] h-auto mx-auto bg-white shadow-lg rounded-xl sm:p-10 p-4 mt-4 mb-10">
        <p class="text-black max-sm:text-[15px]">
            Tes ini terdiri dari berbagai pernyataan yang mungkin sesuai dengan pengalaman Anda dalam menghadapi situasi hidup sehari-hari. 
            Terdapat empat pilihan jawaban yang disediakan untuk setiap pernyataan yaitu:
        </p>
        <p class="text-black mt-4 max-sm:text-[15px]">
            <span class="font-bold">Keterangan pilihan jawaban:</span><br>
            0 : Tidak sesuai dengan saya sama sekali, atau tidak pernah.<br>
            1 : Sesuai dengan saya sampai tingkat tertentu, atau kadang kadang.<br>
            2 : Sesuai dengan saya sampai batas yang dapat dipertimbangkan, atau lumayan sering.<br>
            3 : Sangat sesuai dengan saya, atau sering sekali.

        </p>
        <p class="text-black mt-4 max-sm:text-[15px]">
            Selanjutnya, Anda diminta untuk <span class="font-bold">memilih salah satu kolom yang paling sesuai</span> dengan pengalaman Anda selama <span class="font-bold">satu minggu belakangan</span> ini. 
            Tidak ada jawaban yang benar ataupun salah, karena itu isilah sesuai dengan keadaan diri Anda yang sesungguhnya, yaitu berdasarkan jawaban pertama yang terlintas dalam pikiran Anda.
        </p>

        <div class="flex justify-center mt-6">
            <a href="{{ route('psikotest-paid.tool.Dass-42.showTest') }}">
                <button type="button"
                    class="w-xl bg-primary items-center text-white py-2 px-10 rounded-full hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
                    Selanjutnya
                </button>
            </a>
        </div>
    </div>

</div>
@endsection