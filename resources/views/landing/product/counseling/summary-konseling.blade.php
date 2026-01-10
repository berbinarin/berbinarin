@extends('landing.layouts.app', [
    'title' => 'Berbinar Insightful Indonesia',
    'active' => 'Produk Berbinar',
    'page' => 'Cerita Konseling',
])

@section('content')
    <style>
        .text-gradient {
            background: linear-gradient(to right, #f7b23b, #916823);
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
        }

        select {
            background-image: none !important;
        }
    </style>

    <div
        class="mx-4 mb-8 mt-24 flex flex-col justify-center rounded-2xl bg-none px-12 py-6 shadow-none max-md:px-1 sm:mx-24 sm:mb-20 sm:mt-36 md:bg-white md:shadow-lg">
        <div class="flex justify-end">
            <div class="flex cursor-pointer items-center space-x-1" id="openModal">
                <img src="{{ asset('assets/images/landing/asset-konseling/vector/sk-vector.webp') }}" alt="Syarat & Ketentuan"
                    class="h-3 w-auto" />
                <p class="text-[15px] font-semibold text-[#3986A3]">
                    <span class="hidden sm:block">Syarat & Ketentuan</span>
                    <span class="block sm:hidden">S&K</span>
                </p>
            </div>
        </div>

        <div id="modal"
            class="fixed inset-0 z-30 hidden items-center justify-center bg-gray-900 bg-opacity-50 backdrop-blur-md"
            style="display: none">
            <div
                class="h-auto max-h-screen w-[70%] overflow-y-auto rounded-2xl bg-white p-6 shadow-md max-lg:h-[90%] max-sm:w-[86%] max-sm:px-2">
                <h1
                    class="bg-gradient-to-r from-amber-400 to-yellow-700 bg-clip-text pb-4 text-center text-3xl font-bold text-transparent max-sm:text-2xl">
                    Syarat dan Ketentuan</h1>
                <div class="mb-6">
                    <div class="flex items-start gap-2">
                        <img src="{{ asset('assets/images/landing/asset-konseling/vector/payment.webp') }}" alt="Pembayaran"
                            class="mt-0.5 h-5 w-5" />
                        <span class="font-semibold">Pembayaran</span>
                    </div>
                    <ul class="mt-1 list-disc space-y-1 pl-7">
                        <li class="max-sm:text-sm">Melakukan pembayaran ke Bank Mandiri dengan no rekening 1400020763711
                            a.n. Berbinar Insightful Indonesia dengan aturan transfer 1×24 jam.</li>
                    </ul>
                </div>

                <div class="mb-6">
                    <div class="flex items-start gap-2">
                        <img src="{{ asset('assets/images/landing/asset-konseling/vector/chat.webp') }}"
                            alt="Pembalasan Pesan" class="mt-0.5 h-5 w-5" />
                        <span class="font-semibold">Pembalasan Pesan</span>
                    </div>
                    <ul class="mt-1 list-disc space-y-1 pl-7">
                        <li class="max-sm:text-sm">Tidak membalas pesan admin dalam 1×24 jam, pendaftaran oleh klien secara
                            otomatis dibatalkan.</li>
                        <li class="max-sm:text-sm">Tidak membalas pesan admin dalam 1×24 jam, jadwal yang sudah ditentukan
                            oleh klien berhak untuk diubah oleh Tim Berbinar dan kesepakatan dari klien.</li>
                        <li class="max-sm:text-sm">Tidak membalas pesan admin dalam 2×24 jam setelah melakukan pembayaran,
                            pembayaran dianggap hangus.</li>
                    </ul>
                </div>

                <div class="mb-6">
                    <div class="flex items-start gap-2">
                        <img src="{{ asset('assets/images/landing/asset-konseling/vector/cancel.webp') }}"
                            alt="Pengajuan Pembatalan" class="mt-0.5 h-5 w-5" />
                        <span class="font-semibold">Pengajuan Pembatalan</span>
                    </div>
                    <ul class="mt-1 list-disc space-y-1 pl-7">
                        <li class="max-sm:text-sm">Pengajuan proses pembatalan layanan konseling dapat dilakukan dalam kurun
                            waktu 1×24 jam setelah proses administrasi dan dana yang telah dibayarkan akan dikembalikan
                            100%.</li>
                    </ul>
                </div>

                <div class="mt-4 flex justify-center lg:gap-x-3">
                    <button id="closeModal"
                        class="text-md w-full rounded-xl bg-gradient-to-r from-[#3986A3] to-[#225062] px-24 py-2 text-white max-sm:text-[15px] sm:w-auto">Saya
                        Mengerti</button>
                </div>
            </div>
        </div>

        <div class="flex flex-col space-y-4">
            <h1 class="text-gradient text-center text-3xl font-bold md:text-4xl drop-shadow-lg">Terima Kasih</h1>
            <img src="{{ asset('assets/images/landing/logo/logo-berbinar.webp') }}" alt="Berbinar"
                class="h-[120px] w-auto object-contain" />
            <p class="text-gradient text-center text-base font-medium md:text-2xl drop-shadow-lg">
                Setelah melakukan pendaftaran, SobatBinar akan dihubungi oleh staff konseling Berbinar maksimal 1x24jam
                terkait pembayaran dan informasi lebih lanjut mengenai pelaksanaan psikotes.
                <br />
                <br />
                Jika ada hal yang ingin disampaikan, silahkan hubungi narahubung di bawah ini: 085121005396 (Qay Azneen)
            </p>
        </div>

        <div class="flex items-center justify-center pt-10">
            <a href="{{ route('product.counseling.index') }}" class="flex w-full justify-center">
                <button
                    class="text-md w-full rounded-xl bg-gradient-to-r from-[#3986A3] to-[#225062] px-24 py-2 text-white max-sm:text-[15px] sm:w-auto">Beranda</button>
            </a>
        </div>
    </div>

    <script>
        document.getElementById('openModal').addEventListener('click', function() {
            var modal = document.getElementById('modal');
            modal.style.display = 'flex';
        });

        document.getElementById('closeModal').addEventListener('click', function() {
            var modal = document.getElementById('modal');
            modal.style.display = 'none';
        });
    </script>
@endsection
