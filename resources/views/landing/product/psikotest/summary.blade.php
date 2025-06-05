@extends('landing.layouts.app', [
    'title' => 'Berbinar Insightful Indonesia',
    'active' => 'Produk Berbinar',
    'page' => 'Cerita Konseling',
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

<div class="sm:mt-36 mt-24 sm:mb-20 mb-8 sm:mx-24 mx-4 md:bg-white bg-none justify-center flex flex-col md:shadow-lg shadow-none rounded-2xl px-12 max-md:px-1 py-6">
    <div class="flex justify-end">
        <div class="flex items-center space-x-1 cursor-pointer" id="openModal">
            <img src="{{ asset('assets/images/landing/asset-konseling/vector/sk-vector.png') }}" alt="Syarat & Ketentuan" class="h-3 w-auto">
            <p class="text-[15px] font-semibold text-[#3986A3]"><span class="sm:block hidden">Syarat & Ketentuan</span><span class="sm:hidden block">S&K</span></p>  
        </div>
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

    <div class="flex flex-col space-y-4">
        <h1 class="max-sm:text-[29px] text-3xl font-semibold text-center max-sm:mx-2 text-gradient">Terima Kasih</h1>
        <img src="{{ asset('assets/images/landing/logo/logo-berbinar.png') }}" alt="Berbinar" class="h-24 w-auto object-contain">  
        <p class="max-sm:text-xl text-xl font-medium text-center text-gradient max-sm:mx-2">
            Setelah melakukan pendaftaran, SobatBinar akan dihubungi oleh Berbinar terkait pembayaran dan informasi lebih lanjut mengenai pelaksanaan psikotes.
        </p>      
    </div>

    <div class="flex justify-center items-center pt-10">
        <a href="{{ route('product.psikotes.index') }}" class="w-full flex justify-center">
            <button class="text-white bg-gradient-to-r max-sm:text-[15px] text-md from-[#3986A3] to-[#225062] py-2 px-24 sm:w-auto w-full rounded-xl">Beranda</button>
        </a>
    </div>
</div>

<script>
    document.getElementById('openModal').addEventListener('click', function() {
        document.getElementById('modal').classList.remove('hidden');
    });

    document.getElementById('closeModal').addEventListener('click', function() {
        document.getElementById('modal').classList.add('hidden');
    });
</script>
@endsection