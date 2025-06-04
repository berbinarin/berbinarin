@extends('landing.layouts.app', [
    'title' => 'Berbinar Insightful Indonesia',
    'active' => 'Produk Berbinar',
    'page' => 'Data Diri',
])

@section('content')
<style>
    .text-gradient {
        background: linear-gradient(to right, #F7B23B, #916823); 
        background-clip: text;
        -webkit-background-clip: text; 
        color: transparent; 
    }

    select {
        background-image: none !important;
    }
</style>

<div class="sm:mt-36 mt-24 sm:mb-20 mb-8 sm:mx-16 mx-4 md:bg-white bg-none justify-center flex flex-col md:shadow-lg shadow-none rounded-2xl px-12 max-md:px-1 py-6">
    <div class="flex flex-row justify-between">
        <a href="{{ route('product.psikotest.schedule') }}">
            <div class="flex items-center space-x-2 cursor-pointer">
                <img src="{{ asset('assets/images/landing/asset-konseling/vector/left-arrow.svg') }}" alt="Left Arrow" class="h-3 w-auto">
                <p class="text-[15px] flex font-semibold text-[#3986A3]">Kembali <span class="sm:block hidden ml-0.5">pilih jadwal</span></p>  
            </div>
        </a>

        <div class="flex items-center space-x-1 cursor-pointer" id="openModal">
            <img src="{{ asset('assets/images/landing/asset-konseling/vector/sk-vector.png') }}" alt="Syarat & Ketentuan" class="h-3 w-auto">
            <p class="text-[15px] font-semibold text-[#3986A3]"><span class="sm:block hidden">Syarat & Ketentuan</span><span class="sm:hidden block">S&K</span></p>  
        </div>
        
        <div id="modal" class="fixed hidden inset-0 flex items-center justify-center z-30">
            <div class="bg-[#D7E6ED] p-6 rounded-xl shadow-md overflow-y-auto max-h-screen h-auto w-[70%] max-lg:h-[90%] max-sm:w-[86%]">
                <h2 class="text-2xl max-sm:text-xl font-bold text-gradient py-2 text-center">Syarat dan Ketentuan</h2>  
                <div class="list-decimal pl-2 mt-2 text-justify space-y-3 text-black max-sm:text-[15px]">
                    <div class="flex flex-col">
                        <div class="flex gap-x-2 items-center">
                            <img src="{{ asset('assets/images/landing/asset-konseling/vector/location.png') }}" alt="Vector" class="h-5 w-auto">
                            <p class="text-black font-semibold sm:text-[16px] text-[15px] text-justify max-sm:leading-normal">Lokasi Offline Psikotes</p>
                        </div>
                        <div class="pl-6">  
                            <ul class="list-decimal list-outside">
                                <li>Psikolog : Subaraya, Kediri, Sidoarjo, Makassar, Samarinda, Jakarta, dan Malang</li>
                                <li>Peer Counselor : Tangerang Selatan, Malang, dan Surabaya</li>        
                            </ul>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <div class="flex gap-x-2 items-center">
                            <img src="{{ asset('assets/images/landing/asset-konseling/vector/payment.png') }}" alt="Vector" class="h-4 w-auto">
                            <p class="text-black font-semibold sm:text-[16px] text-[15px] text-justify max-sm:leading-normal">Pembayaran</p>
                        </div>  
                        <div class="pl-6">
                            <ul class="list-decimal list-outside">
                                <li>Melakukan pembayaran ke Bank Mandiri dengan no rekening 1400020763711 a.n Berbinar Insightful Indonesia dengan aturan transfer 1x24 jam.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <div class="flex gap-x-2 items-center">
                            <img src="{{ asset('assets/images/landing/asset-konseling/vector/chat.png') }}" alt="Vector" class="h-4 w-auto">
                            <p class="text-black font-semibold sm:text-[16px] text-[15px] text-justify max-sm:leading-normal">Pembalasan Pesan</p>
                        </div>  
                        <div class="pl-6"> 
                            <ul class="list-decimal list-outside"> 
                                <li>Tidak membalas pesan admin dalam 1x24 jam, pendaftaran oleh klien secara otomatis dibatalkan</li>
                                <li>Tidak membalas pesan admindalam 1x24 jam, jadwal yang sudah ditentukan oleh klien berhak untuk dirubah oleh Tim Berbinar dan kesepakatan dari klien</li>        
                                <li>Tidak membalasa pesan admin dalam 2x24 jam setelah melakukan pembayaran, pembayaran dianggap hangus</li>        
                            </ul>
                        </div>    
                    </div>
                    <div class="flex flex-col">
                        <div class="flex gap-x-2 items-center">
                            <img src="{{ asset('assets/images/landing/asset-konseling/vector/cancel.png') }}" alt="Vector" class="h-4 w-auto">
                            <p class="text-black font-semibold sm:text-[16px] text-[15px] text-justify max-sm:leading-normal">Pengajuan Pembatalan</p>
                        </div>  
                        <div class="pl-6">  
                            <ul class="list-decimal list-outside">
                                <li>Pengajuan proses pembatalan layanan konseling dapat dilakukan dalam kurun waktu 1x24 jam setelah proses administrasi dan dana yang telah dibayarkan akan dikembalkan 100%</li> 
                            </ul>
                        </div>    
                    </div>
                </div>
                <div class="flex justify-center gap-x-3 mt-4">
                    <button id="closeModal" class="px-8 py-1.5 text-white max-sm:text-[15px] font-medium rounded-md bg-gradient-to-r from-[#3986A3] to-[#225062]">Saya Mengerti</button>
                </div>
            </div>
        </div>
    </div>

    <h1 class="max-sm:text-[29px] text-3xl font font-semibold text-center max-sm:mx-2 text-gradient my-6">Data Diri</h1>

    <div class="grid md:grid-cols-2 grid-cols-1 gap-4">
        <div class="flex flex-col space-y-1">
            <p class="text-[#333333] sm:text-[17px] text-sm">Nama Lengkap</p>
            <div class="relative">
                <input type="text" class="bg-[#F1F3F6] md:shadow-none shadow-md border-none rounded-lg w-full px-3 py-3 cursor-pointer focus:ring-[#3986A3]" placeholder="Budi Berbinar">
            </div>
        </div>

        <div class="flex flex-col space-y-1">
            <p class="text-[#333333] sm:text-[17px] text-sm">Email Aktif</p>
            <div class="relative">
                <input type="email" class="bg-[#F1F3F6] md:shadow-none shadow-md border-none rounded-lg w-full px-3 py-3 cursor-pointer focus:ring-[#3986A3]" placeholder="email.anda@gmail.com">
            </div>
        </div>

        <div class="flex flex-col space-y-1">
            <p class="text-[#333333] sm:text-[17px] text-sm">Usia</p>
            <div class="relative">
                <input type="text" class="bg-[#F1F3F6] md:shadow-none shadow-md border-none rounded-lg w-full px-3 py-3 cursor-pointer focus:ring-[#3986A3]" placeholder="20">
            </div>
        </div>

        <div class="flex flex-col space-y-1">
            <p class="text-[#333333] sm:text-[17px] text-sm">Kota Domisili</p>
            <div class="relative">
                <input type="text" class="bg-[#F1F3F6] md:shadow-none shadow-md border-none rounded-lg w-full px-3 py-3 cursor-pointer focus:ring-[#3986A3]" placeholder="Surabaya">
            </div>
        </div>

        <div class="flex flex-col space-y-1">
            <p class="text-[#333333] sm:text-[17px] text-sm">Jenis Kelamin</p>
            <div class="relative">
                <select class="dropdown-select bg-[#F1F3F6] md:shadow-none shadow-md border-none rounded-lg w-full px-3 py-3 cursor-pointer focus:ring-[#3986A3] appearance-none">
                    <option value="offline">Laki-Laki</option>
                    <option value="online">Perempuan</option>
                </select>
                <img src="{{ asset('assets/images/landing/asset-konseling/vector/dropdown.png') }}" class="dropdown-icon h-2 w-auto object-contain absolute right-5 top-1/2 -translate-y-1/2 pointer-events-none transition-transform duration-300">
            </div>
        </div>

        <div class="flex flex-col space-y-1">
            <p class="text-[#333333] sm:text-[17px] text-sm">Nomor WhatsApp</p>
            <div class="relative">
                <input type="number" class="bg-[#F1F3F6] md:shadow-none shadow-md border-none rounded-lg w-full px-3 py-3 cursor-pointer focus:ring-[#3986A3]" placeholder="08112345XXXX">
            </div>
        </div>
    </div>

    <h1 class="max-sm:text-[29px] text-3xl font font-semibold text-center max-sm:mx-2 text-gradient my-10">Alasan Mengikuti Psikotes</h1>

    <div class="relative">
        <textarea class="bg-[#F1F3F6] md:shadow-none shadow-md border-none rounded-lg w-full px-3 pt-3 h-72 cursor-pointer focus:ring-[#3986A3] text-start resize-none" placeholder="Tidak ada minimum/batas jumlah kata"></textarea>
    </div>

    <div class="flex justify-center items-center pt-10">
        <a href="{{ route('product.psikotest.summary') }}" class="w-full flex justify-center">
            <button class="text-white bg-gradient-to-r max-sm:text-[15px] text-md from-[#3986A3] to-[#225062] py-2 px-24 sm:w-auto w-full rounded-xl">Selanjutnya</button>
        </a>
    </div>
    
</div>

<script>
    document.querySelectorAll(".dropdown-select").forEach((select, index) => {
        const icon = document.querySelectorAll(".dropdown-icon")[index];

        select.addEventListener("click", function () {
            icon.classList.toggle("rotate-180");
        });

        select.addEventListener("blur", function () {
            icon.classList.remove("rotate-180");
        });
    });

    document.getElementById('openModal').addEventListener('click', function() {
        document.getElementById('modal').classList.remove('hidden');
    });

    document.getElementById('closeModal').addEventListener('click', function() {
        document.getElementById('modal').classList.add('hidden');
    });
</script>
@endsection