@extends('landing.layouts.app', [
    'title' => 'Berbinar Insightful Indonesia',
    'active' => 'Produk Berbinar',
    'page' => 'Jadwal Konseling',
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
    <div class="flex flex-row justify-between">
        <a href="{{ route('product.counseling.registration') }}">
            <div class="flex items-center space-x-2 cursor-pointer">
                <img src="{{ asset('assets/images/landing/asset-konseling/vector/left-arrow.svg') }}" alt="Left Arrow" class="h-3 w-auto">
                <p class="text-[15px] flex font-semibold text-[#3986A3]">Kembali <span class="sm:block hidden ml-0.5">pilih konseling</span></p>
            </div>
        </a>

        <div class="flex items-center space-x-1 cursor-pointer" id="openModal">
            <img src="{{ asset('assets/images/landing/asset-konseling/vector/sk-vector.png') }}" alt="Syarat & Ketentuan" class="h-3 w-auto">
            <p class="text-[15px] font-semibold text-[#3986A3]"><span class="sm:block hidden">Syarat & Ketentuan</span><span class="sm:hidden block">S&K</span></p>
        </div>

        <div id="modal" class="fixed hidden inset-0 flex items-center justify-center z-30">
            <div class="h-auto max-h-screen w-[70%] overflow-y-auto rounded-2xl bg-white p-6 max-sm:px-2 shadow-md max-lg:h-[90%] max-sm:w-[86%]">
                <h1 class="bg-gradient-to-r from-amber-400 to-yellow-700 bg-clip-text text-transparent pb-4 text-center text-3xl font-bold max-sm:text-2xl">Syarat dan Ketentuan</h1>
                <div class="mb-6">
                    <div class="flex items-start gap-2">
                        <img src="{{ asset('assets/images/landing/asset-konseling/vector/location.png') }}" alt="Lokasi" class="h-5 w-5 mt-0.5" />
                        <span class="font-semibold">Lokasi offline Konseling</span>
                    </div>
                    <ol class="list-decimal mt-1 space-y-1 pl-7">
                        <li class="max-sm:text-sm">a. Psikolog: Surabaya, Kediri, Sidoarjo, Denpasar, Samarinda, Jakarta, Malang, dan Kalimantan Utara (Tarakan)</li>
                        <li class="max-sm:text-sm">b. Peer Counselor: Bekasi, Jakarta, Tangerang Selatan, Padang, Wonogiri, dan Malang</li>
                    </ol>
                </div>

                <div class="mb-6">
                    <div class="flex items-start gap-2">
                        <img src="{{ asset('assets/images/landing/asset-konseling/vector/payment.png') }}" alt="Pembayaran" class="h-5 w-5 mt-0.5" />
                        <span class="font-semibold">Pembayaran</span>
                    </div>
                    <ol class="list-decimal mt-1 space-y-1 pl-7">
                        <li class="max-sm:text-sm">Melakukan pembayaran ke Bank Mandiri dengan no rekening 1400020763711 a.n. Berbinar Insightful Indonesia dengan aturan transfer 1×24 jam.</li>
                    </ol>
                </div>

                <div class="mb-6">
                    <div class="flex items-start gap-2">
                        <img src="{{ asset('assets/images/landing/asset-konseling/vector/chat.png') }}" alt="Pembalasan Pesan" class="h-5 w-5 mt-0.5" />
                        <span class="font-semibold">Pembalasan Pesan</span>
                    </div>
                    <ol class="list-decimal mt-1 space-y-1 pl-7">
                        <li class="max-sm:text-sm">Tidak membalas pesan admin dalam 1×24 jam, pendaftaran oleh klien secara otomatis dibatalkan.</li>
                        <li class="max-sm:text-sm">Tidak membalas pesan admin dalam 1×24 jam, jadwal yang sudah ditentukan oleh klien berhak untuk diubah oleh Tim Berbinar dan kesepakatan dari klien.</li>
                        <li class="max-sm:text-sm">Tidak membalas pesan admin dalam 2×24 jam setelah melakukan pembayaran, pembayaran dianggap hangus.</li>
                    </ol>
                </div>

                <div class="mb-6">
                    <div class="flex items-start gap-2">
                        <img src="{{ asset('assets/images/landing/asset-konseling/vector/cancel.png') }}" alt="Pengajuan Pembatalan" class="h-5 w-5 mt-0.5" />
                        <span class="font-semibold">Pengajuan Pembatalan</span>
                    </div>
                    <ol class="list-decimal mt-1 space-y-1 pl-7">
                        <li class="max-sm:text-sm">Pengajuan proses pembatalan layanan konseling dapat dilakukan dalam kurun waktu 1×24 jam setelah proses administrasi dan dana yang telah dibayarkan akan dikembalikan 100%.</li>
                    </ol>
                </div>


                <div class="mt-4 justify-center flex lg:gap-x-3">
                    <button id="closeModal" class="rounded-md border-[1.5px] border-[#225062] bg-transparent px-4 py-1.5 font-medium text-black max-sm:text-[15px]">Tutup</button>
                    <!-- <a href="{{ route('product.counseling.registration') }}">
                        <button id="" class="rounded-md bg-gradient-to-r from-[#3986A3] to-[#225062] px-20 py-1.5 font-medium text-white max-sm:text-[15px]">Saya Mengerti</button>
                    </a> -->
                </div>
            </div>
        </div>
    </div>

    <h1 class="max-sm:text-[29px] text-3xl font font-semibold text-center max-sm:mx-2 text-gradient my-6">Isi Jadwal Psikolog</h1>

    <div class="space-y-3 flex flex-col">
        <div class="flex flex-col space-y-1">
            <p class="text-[#333333] sm:text-[17px] text-sm">Tanggal Konseling</p>
            <div class="relative">
                <input type="date" id="tglkonseling" placeholder="dd/mm/yy" class="bg-[#F1F3F6] border-none md:shadow-none shadow-md rounded-lg w-full px-3 py-3 cursor-pointer focus:ring-[#3986A3]" readonly>
                <img src="{{ asset('assets/images/landing/asset-konseling/vector/date.png') }}" class="h-4 w-auto object-contain absolute lg:right-5 top-1/3 max-sm:hidden" onclick="document.getElementById('tglkonseling').focus()">
            </div>
        </div>

        <div class="flex flex-col space-y-1">
            <p class="text-[#333333] sm:text-[17px] text-sm">Waktu Konseling</p>
            <div class="relative">
                <input type="time" id="waktukonseling" class="bg-[#F1F3F6] border-none md:shadow-none shadow-md rounded-lg w-full px-3 py-3 cursor-pointer focus:ring-[#3986A3]" placeholder="--:--" readonly>
                <img src="{{ asset('assets/images/landing/asset-konseling/vector/clock.png') }}" class="h-4 w-auto object-contain absolute lg:right-5 top-1/3 max-sm:hidden" onclick="document.getElementById('waktukonseling').focus()">
            </div>
        </div>

        <div class="flex flex-col space-y-1">
            <p class="text-[#333333] sm:text-[17px] text-sm">Metode Konseling</p>
            <div class="relative">
                <select class="dropdown-select bg-[#F1F3F6] md:shadow-none shadow-md border-none rounded-lg w-full px-3 py-3 cursor-pointer focus:ring-[#3986A3] appearance-none">
                    <option selected disabled>Pilih metode konseling</option>
                    <option value="offline">Offline</option>
                    <option value="online">Online</option>
                </select>
                <img src="{{ asset('assets/images/landing/asset-konseling/vector/dropdown.png') }}" class="dropdown-icon h-2 w-auto object-contain absolute right-5 top-1/2 -translate-y-1/2 pointer-events-none transition-transform duration-300">
            </div>
        </div>

        <div class="flex flex-col space-y-1">
            <p class="text-[#333333] sm:text-[17px] text-sm">Sesi</p>
            <div class="relative">
                <select class="dropdown-select bg-[#F1F3F6] md:shadow-none shadow-md border-none rounded-lg w-full px-3 py-3 cursor-pointer focus:ring-[#3986A3] appearance-none">
                    <option value="offline">1 Jam</option>
                    <option value="online">2 Jam</option>
                    <option value="online">3 Jam</option>
                </select>
                <img src="{{ asset('assets/images/landing/asset-konseling/vector/dropdown.png') }}" class="dropdown-icon h-2 w-auto object-contain absolute right-5 top-1/2 -translate-y-1/2 pointer-events-none transition-transform duration-300">
            </div>
        </div>

        <div class="flex flex-col space-y-1">
            <p class="text-[#333333] sm:text-[17px] text-sm">Harga</p>
            <div class="relative">
                <input class="bg-[#F1F3F6] md:shadow-none shadow-md border-none rounded-lg w-full px-3 py-3 cursor-pointer focus:ring-[#3986A3]" placeholder="Rp 0,00" readonly>
            </div>
        </div>

        <div class="flex justify-center items-center pt-10">
            <a href="{{ route('product.counseling.personal_data') }}" class="w-full flex justify-center">
                <button class="text-white bg-gradient-to-r max-sm:text-[15px] text-md from-[#3986A3] to-[#225062] py-2 px-24 sm:w-auto w-full rounded-xl">Selanjutnya</button>
            </a>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        flatpickr("#tglkonseling", {
            dateFormat: "d/m/Y",
            allowInput: true
        });
    });

    document.addEventListener("DOMContentLoaded", function () {
        flatpickr("#waktukonseling", {
            enableTime: true,
            noCalendar: true,
            dateFormat: "H:i",
            time_24hr: true
        });
    });

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
