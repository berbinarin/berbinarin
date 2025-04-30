@extends('moduls.psikotes.layouts.mainn', [
    'title' => 'Instruksi RMIB',
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

    <p class="font-bold text-2xl text-center text-gray-800 mt-16 z-20 relative">Tes {{ $tool->id }}</p>

    <!-- Card Transparant -->
    <div class="relative text-justify z-10 w-3xl mx-auto bg-white bg-opacity-50 shadow-lg rounded-lg p-6 mt-8"
        style="width: 900px;">

        {{-- <p class="text-black mt-4 px-5">
            Hai {{ $user->fullname }}, berikut adalah instruksi untuk test {{ $tool->name }}
        </p> --}}
        <p class="text-black mt-6 px-5">
            
            Bayangkan Anda dikelompokkan dengan sebelas orang mahasiswa <b>{{ $user->gender == 'laki-laki' ? 'PRIA' : 'WANITA' }}</b> dalam proyek "Wisma Kerja
            Nyata"
            (disingkat WKN), yang bertujuan menyadari makna Kelestarian Lingkungan Hidup (KLH). Perjalanan akan
            berlangsung ke beberapa tempat.
        </p>
        <p class="text-black mt-4 px-5">
            Di tempat-tempat tertentu, tim atau "keduabelasan" Anda akan mengerjakan proyek dan mendapat  bantuan
            ahli-ahli yang akan membimbing dan melatih anggota-anggota tim bila diperlukan. Perusahaan "Supra Motor"
            telah bersedia menjadi sponsor kegiatan ini.
        </p>
        <p class="text-black mt-4 px-5">
            Setiap ada kegiatan tim, anggota-anggota membagi tugas sesuai dengan kesediaan masing-masing. Caranya adalah
            disajikan daftar tugas, kemudian setiap anggota mengurutkan tugas yang paling ia senangi sampai tugas yang
            paling tidak ia senangi, tidak peduli apakah dia mampu melakukannya (karena akan dilatih). Yang penting
            adalah minat dan kesediaan Anda melakukan tugas-tugas tersebut.
        </p>
        <p class="text-black mt-4 px-5">
            Urutkan pilihan tugas, mulai dari yang paling Anda senangi (nomor 1), nomor 2 Anda senangi, nomor 3, dan
            seterusnya, sampai pilihan paling akhir nomor 12, ialah yang paling tidak Anda senangi. Kemudian teliti
            kembali, jangan sampai ada yang Anda lewati, sebab keberhasilan WKN ini sangat tergantung pada kesadaran
            anggota.‌
        </p>
        <div class="mb-4 flex justify-center mt-10">
            <form action="{{ route('psikotest-paid.tool.RMIB.startTest') }}" method="POST">
                @csrf
                <button type="submit"
                    class="w-xl bg-primary items-center text-white py-2 px-10 rounded-full hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Selanjutnya</button>
            </form>
        </div>

    </div>
</div>
@endsection