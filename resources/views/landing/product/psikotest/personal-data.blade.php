@extends('landing.layouts.app', [
    'title' => 'Berbinar Insightful Indonesia',
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
    <form action="{{route('product.psikotest.personal_data.store')}}" method="POST">
        @csrf
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


            <div id="modal" class="fixed bg-gray-900 bg-opacity-50 backdrop-blur-md inset-0 -top-6 z-30 flex hidden items-center justify-center max-sm:-top-2">
                <div class="h-auto max-h-screen w-[70%] overflow-y-auto rounded-2xl bg-white p-6 max-sm:px-2 shadow-md max-lg:h-[90%] max-sm:w-[86%]">
                    <h1 class="bg-gradient-to-r from-amber-400 to-yellow-700 bg-clip-text text-transparent pb-4 text-center text-3xl font-bold max-sm:text-2xl">Syarat dan Ketentuan</h1>
                    <div class="mb-6">
                        <div class="flex items-start gap-2">
                            <img src="{{ asset('assets/images/landing/asset-konseling/vector/location.png') }}" alt="Lokasi" class="h-5 w-5 mt-0.5" />
                            <span class="font-semibold">Lokasi offline Konseling</span>
                        </div>
                        <ol class="list-decimal mt-1 space-y-1 pl-7">
                            <li class="max-sm:text-sm">a. Psikolog : Subaraya, Kediri, Sidoarjo, dan Jakarta</li>
                            <li class="max-sm:text-sm">b. Peer Counselor : Surabaya, Jombang, dan Nganjuk</li>
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
                    </div>
                </div>
            </div>
        </div>

        <h1 class="max-sm:text-[29px] text-3xl font font-semibold text-center max-sm:mx-2 text-gradient my-6">Data Diri</h1>

        <div class="grid md:grid-cols-2 grid-cols-1 gap-4">
            <div class="flex flex-col space-y-1">
                <p class="text-[#333333] sm:text-[17px] text-sm">Nama Lengkap</p>
                <div class="relative">
                    <input type="text" id="fullname" name="fullname" class="bg-[#F1F3F6] md:shadow-none shadow-md border-none rounded-lg w-full px-3 py-3 cursor-pointer focus:ring-[#3986A3]" placeholder="Budi Berbinar">
                </div>
            </div>

            <div class="flex flex-col space-y-1">
                <p class="text-[#333333] sm:text-[17px] text-sm">Email Aktif</p>
                <div class="relative">
                    <input type="email" id="email" name="email" class="bg-[#F1F3F6] md:shadow-none shadow-md border-none rounded-lg w-full px-3 py-3 cursor-pointer focus:ring-[#3986A3]" placeholder="email.anda@gmail.com">
                </div>
            </div>

            <div class="flex flex-col space-y-1">
                <p class="text-[#333333] sm:text-[17px] text-sm">Usia</p>
                <div class="relative">
                    <input type="number" id="age" name="age" class="bg-[#F1F3F6] md:shadow-none shadow-md border-none rounded-lg w-full px-3 py-3 cursor-pointer focus:ring-[#3986A3]" placeholder="20">
                </div>
            </div>

            <div class="flex flex-col space-y-1">
                <p class="text-[#333333] sm:text-[17px] text-sm">Kota Domisili</p>
                <div class="relative">
                    <input type="text" id="domicile" name="domicile" class="bg-[#F1F3F6] md:shadow-none shadow-md border-none rounded-lg w-full px-3 py-3 cursor-pointer focus:ring-[#3986A3]" placeholder="Surabaya">
                </div>
            </div>

            <div class="flex flex-col space-y-1">
                <p class="text-[#333333] sm:text-[17px] text-sm">Jenis Kelamin</p>
                <div class="relative">
                    <select id="gender" name="gender" class="dropdown-select bg-[#F1F3F6] md:shadow-none shadow-md border-none rounded-lg w-full px-3 py-3 cursor-pointer focus:ring-[#3986A3] appearance-none">
                        <option value="Laki-laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                    <img src="{{ asset('assets/images/landing/asset-konseling/vector/dropdown.png') }}" class="dropdown-icon h-2 w-auto object-contain absolute right-5 top-1/2 -translate-y-1/2 pointer-events-none transition-transform duration-300">
                </div>
            </div>

            <div class="flex flex-col space-y-1">
                <p class="text-[#333333] sm:text-[17px] text-sm">Nomor WhatsApp</p>
                <div class="relative">
                    <input type="number" id="phone_number" name="phone_number" class="bg-[#F1F3F6] md:shadow-none shadow-md border-none rounded-lg w-full px-3 py-3 cursor-pointer focus:ring-[#3986A3]" placeholder="08112345XXXX">
                </div>
            </div>
        </div>

        <h1 class="max-sm:text-[29px] text-3xl font font-semibold text-center max-sm:mx-2 text-gradient my-10">Alasan Mengikuti Psikotes</h1>

        <div class="relative">
            <textarea id="reason" name="reason" class="bg-[#F1F3F6] md:shadow-none shadow-md border-none rounded-lg w-full px-3 pt-3 h-72 cursor-pointer focus:ring-[#3986A3] text-start resize-none" placeholder="Tidak ada minimum/batas jumlah kata"></textarea>
        </div>

        <div class="flex justify-center items-center pt-10">
            <div class="w-full flex justify-center">
                <button type="submit" class="text-white bg-gradient-to-r max-sm:text-[15px] text-md from-[#3986A3] to-[#225062] py-2 px-24 sm:w-auto w-full rounded-xl">Kirim</button>
            </div>
        </div>
    </form>
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
