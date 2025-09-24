@extends('landing.layouts.app', [
    'title' => 'Berbinar Insightful Indonesia',
    'active' => 'Produk Berbinar',
    'page' => 'Registrasi Konseling',
])

@section('content')
    <style>
        .step-section {
            display: none;
        }

        .step-section.active {
            display: block;
        }

        .text-gradient {
            background: linear-gradient(to right, #F7B23B, #916823);
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
        }

        select {
            background-image: none !important;
        }

        .harga-coret {
            text-decoration: line-through;
            color: #b3b3b3;
            font-size: 15px;
            margin-right: 8px;
        }

        .harga-diskon {
            color: #3986A3;
            font-weight: bold;
            font-size: 17px;
        }

        #harga-tampil,
        #harga-input {
            min-height: 48px;
            font-size: 17px;
            display: flex;
            align-items: center;
        }
    </style>

    <div
        class="sm:mt-36 mt-24 sm:mb-20 mb-8 sm:mx-24 mx-4 md:bg-white bg-none justify-center flex flex-col md:shadow-lg shadow-none rounded-2xl px-12 max-md:px-1 py-6">
        {{-- Navigation Header --}}
        <div class="flex flex-row justify-between" id="step-1-header">
            <a href="{{ route('product.counseling.psikolog.registration-umum') }}">
                <div class="flex items-center space-x-2 cursor-pointer">
                    <img src="{{ asset('assets/images/landing/asset-konseling/vector/left-arrow.svg') }}" alt="Left Arrow"
                        class="h-3 w-auto">
                    <p class="text-[15px] flex font-semibold text-[#3986A3]">Kembali <span
                            class="sm:block hidden ml-0.5">pilih konseling</span></p>
                </div>
                <ol class="list-decimal mt-1 space-y-1 pl-7">
                    <li class="max-sm:text-sm">a. Psikolog : Subaraya, Kediri, Sidoarjo, dan Jakarta</li>
                    <li class="max-sm:text-sm">b. <i>Peer Counselor</i>: Jakarta, Makassar, dan Nganjuk</li>
                </ol>
            </div>

            <div class="flex items-center space-x-1 cursor-pointer" id="openModal">
                <img src="{{ asset('assets/images/landing/asset-konseling/vector/sk-vector.png') }}"
                    alt="Syarat & Ketentuan" class="h-3 w-auto">
                <p class="text-[15px] font-semibold text-[#3986A3]"><span class="sm:block hidden">Syarat &
                        Ketentuan</span><span class="sm:hidden block">S&K</span></p>
            </div>
        </div>

        <div class="flex flex-row justify-between" id="step-2-header" style="display: none;">
            <div class="flex items-center space-x-2 cursor-pointer" onclick="prevStep(1)">
                <img src="{{ asset('assets/images/landing/asset-konseling/vector/left-arrow.svg') }}" alt="Left Arrow"
                    class="h-3 w-auto">
                <p class="text-[15px] flex font-semibold text-[#3986A3]">Kembali <span class="sm:block hidden ml-0.5">isi
                        jadwal</span></p>
            </div>

            <div class="flex items-center space-x-1 cursor-pointer" id="openModal2">
                <img src="{{ asset('assets/images/landing/asset-konseling/vector/sk-vector.png') }}"
                    alt="Syarat & Ketentuan" class="h-3 w-auto">
                <p class="text-[15px] font-semibold text-[#3986A3]"><span class="sm:block hidden">Syarat &
                        Ketentuan</span><span class="sm:hidden block">S&K</span></p>
            </div>
        </div>

        <div class="flex flex-row justify-between" id="step-3-header" style="display: none;">
            <div class="flex items-center space-x-2 cursor-pointer" onclick="prevStep(2)">
                <img src="{{ asset('assets/images/landing/asset-konseling/vector/left-arrow.svg') }}" alt="Left Arrow"
                    class="h-3 w-auto">
                <p class="text-[15px] flex font-semibold text-[#3986A3]">Kembali <span class="sm:block hidden ml-0.5">isi
                        data diri</span></p>
            </div>

            <div class="flex items-center space-x-1 cursor-pointer" id="openModal3">
                <img src="{{ asset('assets/images/landing/asset-konseling/vector/sk-vector.png') }}"
                    alt="Syarat & Ketentuan" class="h-3 w-auto">
                <p class="text-[15px] font-semibold text-[#3986A3]"><span class="sm:block hidden">Syarat &
                        Ketentuan</span><span class="sm:hidden block">S&K</span></p>
            </div>
        </div>

        {{-- Modal untuk syarat dan ketentuan --}}

        <div id="modal"
            class="fixed bg-gray-900 bg-opacity-50 backdrop-blur-md hidden inset-0 flex items-center justify-center z-30">
            <div
                class="h-auto max-sm:max-h-[90%] max-h-screen w-[70%] overflow-y-auto rounded-2xl bg-white p-6 max-sm:px-2 shadow-md max-lg:h-[90%] max-sm:w-[86%]">
                <h1
                    class="bg-gradient-to-r from-amber-400 to-yellow-700 bg-clip-text text-transparent pb-4 text-center text-3xl font-bold max-sm:text-2xl">
                    Syarat dan Ketentuan</h1>
                <div class="mb-6">
                    <div class="flex items-start gap-2">
                        <img src="{{ asset('assets/images/landing/asset-konseling/vector/location.png') }}" alt="Lokasi"
                            class="h-5 w-5 mt-0.5" />
                        <span class="font-semibold">Lokasi offline Konseling</span>
                    </div>
                    <ol class="list-decimal mt-1 space-y-1 pl-7">
                        <li class="max-sm:text-sm">a. Psikolog : Subaraya, Kediri, Sidoarjo, dan Jakarta</li>
                        <li class="max-sm:text-sm">b. <i>Peer Counselor</i>: Surabaya, Jombang, dan Nganjuk</li>
                    </ol>
                </div>

                <div class="mb-6">
                    <div class="flex items-start gap-2">
                        <img src="{{ asset('assets/images/landing/asset-konseling/vector/payment.png') }}" alt="Pembayaran"
                            class="h-5 w-5 mt-0.5" />
                        <span class="font-semibold">Pembayaran</span>
                    </div>
                    <ol class="list-decimal mt-1 space-y-1 pl-7">
                        <li class="max-sm:text-sm">Melakukan pembayaran ke Bank Mandiri dengan no rekening 1400020763711
                            a.n. Berbinar Insightful Indonesia dengan aturan transfer 1×24 jam.</li>
                    </ol>
                </div>

                <div class="mb-6">
                    <div class="flex items-start gap-2">
                        <img src="{{ asset('assets/images/landing/asset-konseling/vector/chat.png') }}"
                            alt="Pembalasan Pesan" class="h-5 w-5 mt-0.5" />
                        <span class="font-semibold">Pembalasan Pesan</span>
                    </div>
                    <ol class="list-decimal mt-1 space-y-1 pl-7">
                        <li class="max-sm:text-sm">Tidak membalas pesan admin dalam 1×24 jam, pendaftaran oleh klien secara
                            otomatis dibatalkan.</li>
                        <li class="max-sm:text-sm">Tidak membalas pesan admin dalam 1×24 jam, jadwal yang sudah ditentukan
                            oleh klien berhak untuk diubah oleh Tim Berbinar dan kesepakatan dari klien.</li>
                        <li class="max-sm:text-sm">Tidak membalas pesan admin dalam 2×24 jam setelah melakukan pembayaran,
                            pembayaran dianggap hangus.</li>
                    </ol>
                </div>

                <div class="mb-6">
                    <div class="flex items-start gap-2">
                        <img src="{{ asset('assets/images/landing/asset-konseling/vector/cancel.png') }}"
                            alt="Pengajuan Pembatalan" class="h-5 w-5 mt-0.5" />
                        <span class="font-semibold">Pengajuan Pembatalan</span>
                    </div>
                    <ol class="list-decimal mt-1 space-y-1 pl-7">
                        <li class="max-sm:text-sm">Pengajuan proses pembatalan layanan konseling dapat dilakukan dalam kurun
                            waktu 1×24 jam setelah proses administrasi dan dana yang telah dibayarkan akan dikembalikan
                            100%.</li>
                    </ol>
                </div>


                <div class="mt-4 justify-center flex lg:gap-x-3">
                    <button id="closeModal"
                        class="w-[90%] lg:w-1/4 rounded-xl border-[1.5px] bg-gradient-to-r from-[#3986A3] to-[#15323D] border-[#225062] bg-transparent px-4 py-1.5 font-medium text-white max-sm:text-[15px]">Saya
                        Mengerti</button>
                </div>
            </div>
        </div>

    {{-- Modal untuk promo KTM --}}
    <div id="voucher" class="fixed bg-gray-900 bg-opacity-50 backdrop-blur-md hidden inset-0 flex items-center justify-center z-30">
        <div class="h-auto max-sm:max-h-[90%] max-h-screen w-[70%] overflow-y-auto rounded-2xl bg-white p-6 max-sm:px-2 shadow-md max-lg:h-[90%] max-sm:w-[86%]">
            <h1 class="bg-gradient-to-r from-[#3986A3] to-[#15323D] bg-clip-text text-transparent pb-6 text-center text-3xl font-bold max-sm:text-lg">Promo KTM dan Kartu Pelajar <br class=""> Produk Konseling Bersama Psikolog</h1>
            <div class="mb-6">
                <div class="max-h-[440px] lg:max-h-96 overflow-y-auto">

                        <h2
                            class="bg-gradient-to-r from-amber-400 to-yellow-700 bg-clip-text text-transparent pb-4 text-2xl font-bold max-sm:text-lg">
                            Syarat dan Ketentuan</h2>
                        <ul class="list-disc text-black marker:text-primary pl-6">
                            <li class="mb-2">
                                <p class="font-semibold">Promo Berlaku untuk:</p>
                                <p class="max-sm:text-sm text-disabled pl-7">
                                <ol class="list-decimal text-gray-600 marker:text-disabled pl-5">
                                    <li>Siswa aktif jenjang SMP/SMA/sederajat.</li>
                                    <li>Mahasiswa aktif jenjang D3, D4, atau S1.</li>
                                    <li>Dibuktikan dengan mengupload Kartu Tanda Mahasiswa (KTM) atau Kartu Pelajar yang
                                        masih berlaku saat melakukan pendaftaran</li>
                                </ol>
                                </p>

                            </li>
                            <li class="mb-2">
                                <p class="font-semibold">Diskon/Penawaran:</p>
                                <p class="max-sm:text-sm text-disabled pl-7">
                                <ol class="list-decimal text-gray-600 marker:text-disabled pl-5">
                                    <li>Potongan harga sebesar 20% untuk setiap sesi konseling individu.</li>
                                    <li>Promo hanya berlaku untuk layanan konseling online.</li>
                                </ol>
                                </p>
                            </li>

                    <li class="mb-2">
                        <p class="font-semibold">Cara Menggunakan Promo:</p>
                        <p class="max-sm:text-sm text-disabled pl-7">
                            <ol class="list-decimal text-gray-600 marker:text-disabled pl-5">
                                <li>Daftar melalui website berbinar konseling</li>
                                <li>Cantumkan kode promo</li>
                                <li>Upload KTM/kartu pelajar saat pendaftaran.</li>
                            </ol>
                        </p>
                    </li>

                            <li class="mb-2">
                                <p class="font-semibold">Ketentuan Tambahan:</p>
                                <p class="max-sm:text-sm text-disabled pl-7">
                                <ol class="list-decimal text-gray-600 marker:text-disabled pl-5">
                                    <li>Promo hanya berlaku untuk 1x sesi per individu, kecuali dinyatakan lain.</li>
                                    <li>Tidak dapat memilih Psikolog yang akan menangani</li>
                                    <li>Tidak dapat digabungkan dengan promo lainnya.</li>
                                    <li>Tidak berlaku untuk layanan lanjutan atau paket konseling tertentu.</li>
                                    <li>Pihak penyelenggara berhak membatalkan promo jika ditemukan penyalahgunaan (misalnya
                                        kartu tidak valid atau sudah tidak aktif).</li>
                                </ol>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="mt-4 justify-center flex lg:gap-x-3">
                    <button id="closeVoucher"
                        class="w-[90%] lg:w-1/4 rounded-xl border-[1.5px] bg-gradient-to-r from-[#3986A3] to-[#15323D] border-[#225062] bg-transparent px-4 py-1.5 font-medium text-white max-sm:text-[15px]">Saya
                        Mengerti</button>
                </div>
            </div>
        </div>


{{-- Form Input Pendafataran --}}
<form id="multiStepForm" action="{{ route('product.counseling.psikolog.store') }}" method="POST" class="flex flex-col" enctype="multipart/form-data">
        @csrf

        {{-- STEP 1: Pilih Jadwal Konseling --}}


        <div id="step-1" class="step-section active">
            <h1 class="max-sm:text-[29px] text-3xl font font-semibold text-center max-sm:mx-2 text-gradient my-6">Isi Jadwal Konseling</h1>
            <input type="hidden" name="kategori" value="psikolog">
            <div class="space-y-3 flex flex-col">
                {{-- Tanggal Konseling --}}
                <div class="flex flex-col space-y-1">
                    <p class="text-[#333333] sm:text-[17px] text-sm">Tanggal Konseling</p>
                    <div class="relative">
                        <input type="text" required name="jadwal_tanggal" id="tglkonseling" class="bg-[#F1F3F6] border-none md:shadow-none shadow-md rounded-lg w-full px-3 py-3 cursor-pointer focus:ring-[#3986A3]" placeholder="dd/mm/yy" autocomplete="off" readonly>
                        <img src="{{ asset('assets/images/landing/asset-konseling/vector/date.png') }}" class="h-4 w-auto object-contain absolute max-sm:hidden right-5 top-1/2 -translate-y-1/2" onclick="document.getElementById('tglkonseling').focus()">
                    </div>
                </div>
                {{-- Waktu Konseling --}}
                <div class="flex flex-col space-y-1">
                    <p class="text-[#333333] sm:text-[17px] text-sm">Waktu Konseling</p>
                    <div class="relative">
                        <input type="text" id="waktukonseling" name="jadwal_pukul" required class="bg-[#F1F3F6] border-none md:shadow-none shadow-md rounded-lg w-full px-3 py-3 cursor-pointer focus:ring-[#3986A3]" placeholder="--:--" autocomplete="off" readonly>
                        <span class="absolute left-[64px] top-1/2 -translate-y-1/2 text-[#333] text-base pointer-events-none">WIB</span>
                        <img src="{{ asset('assets/images/landing/asset-konseling/vector/clock.png') }}" class="h-4 w-auto object-contain absolute max-sm:hidden right-5 top-1/2 -translate-y-1/2" onclick="document.getElementById('waktukonseling').focus()">
                    </div>
                </div>
                {{-- Metode Konseling --}}
                <div class="flex flex-col space-y-1">
                    <p class="text-[#333333] sm:text-[17px] text-sm">Metode Konseling</p>
                    <div class="relative">
                        <select name="metode" class="dropdown-select bg-[#F1F3F6] md:shadow-none shadow-md border-none rounded-lg w-full px-3 py-3 cursor-pointer focus:ring-[#3986A3] appearance-none" id="metode-select">
                            <option selected disabled>Pilih metode konseling</option>
                            <option value="offline">Offline</option>
                            <option value="online">Online</option>
                        </select>
                        <img src="{{ asset('assets/images/landing/asset-konseling/vector/dropdown.png') }}" class="dropdown-icon h-2 w-auto object-contain absolute right-5 top-1/2 -translate-y-1/2 pointer-events-none transition-transform duration-300">
                    </div>
                </div>
                {{-- Daerah Konseling --}}
                <div class="flex flex-col space-y-1" id="daerah-container" style="display: none;">
                    <p class="text-[#333333] sm:text-[17px] text-sm">Daerah Konseling</p>
                    <div class="relative">
                        <select name="daerah" id="daerah-select" class="dropdown-select bg-[#F1F3F6] md:shadow-none shadow-md border-none rounded-lg w-full px-3 py-3 cursor-pointer focus:ring-[#3986A3] appearance-none">
                            <option value="">Pilih Daerah Konseling</option>
                            <option value="Surabaya">Surabaya</option>
                            <option value="Kediri">Kediri</option>
                            <option value="Sidoarjo">Sidoarjo</option>
                            <option value="Jakarta">Jakarta</option>
                        </select>
                        <img src="{{ asset('assets/images/landing/asset-konseling/vector/dropdown.png') }}" class="dropdown-icon h-2 w-auto object-contain absolute right-5 top-1/2 -translate-y-1/2 pointer-events-none transition-transform duration-300">
                    </div>
                </div>
                {{-- Sesi --}}
                <div class="flex flex-col space-y-1">
                    <p class="text-[#333333] sm:text-[17px] text-sm">Sesi</p>
                    <div class="relative">
                        <select name="sesi" class="dropdown-select bg-[#F1F3F6] md:shadow-none shadow-md border-none rounded-lg w-full px-3 py-3 cursor-pointer focus:ring-[#3986A3] appearance-none" id="sesi-select">
                            <option value="1">1 Jam</option>
                            <option value="2">2 Jam</option>
                            <option value="3">3 Jam</option>
                        </select>
                        <img src="{{ asset('assets/images/landing/asset-konseling/vector/dropdown.png') }}" class="dropdown-icon h-2 w-auto object-contain absolute right-5 top-1/2 -translate-y-1/2 pointer-events-none transition-transform duration-300">
                    </div>
                </div>
                {{-- Harga --}}
                <div class="flex flex-col space-y-1">
                    <p class="text-[#333333] sm:text-[17px] text-sm">Harga</p>
                    <div class="relative">
                        <div id="harga-tampil" class="bg-[#F1F3F6] md:shadow-none shadow-md sm:text-[17px] border-none rounded-lg w-full px-3 py-3">
                            <span id="harga-asli" class="" style="">Rp.0,00</span>
                            <span id="harga-diskon" class="harga-diskon"></span>
                        </div>
                        <input type="hidden" name="harga" id="harga-input">
                    </div>
                </div>
                {{-- Kode Promo --}}
                <div class="flex flex-col space-y-1">
                    <p class="text-[#333333] sm:text-[17px] text-sm">Kode Promo</p>
                    <div class="relative">
                        <input type="text" id="kode_promo" name="kode_promo" class="bg-[#F1F3F6] md:shadow-none shadow-md border-none rounded-lg w-full px-3 py-3 cursor-pointer focus:ring-[#3986A3]" placeholder="Berbinar">
                        <button type="button" onclick="redeemVoucher()" class="absolute right-2 top-1/2 -translate-y-1/2 cursor-pointer flex bg-[#106681] text-white justify-between gap-2 py-[4px] px-2  rounded-md items-center">Redeem Code</button>
                    </div>
                </div>
                <input type="hidden" name="kategori_voucher" id="kategori_voucher">
                <input type="hidden" name="code_voucher" id="code_voucher">
                <input type="hidden" name="presentase_diskon" id="presentase_diskon">
                {{-- Bukti Kartu Pelajar --}}
                <div class="mb-4 rounded-lg" id="bukti-kartu-pelajar-container" style="background-color: white;display:none;">
                    <label for="bukti_kartu_pelajar">Bukti Kartu Pelajar</label>
                    <div class="relative w-full flex items-center">
                        <input type="file" id="bukti_kartu_pelajar" name="bukti_kartu_pelajar" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" />
                        <div class="mt-1 block w-full h-12 pl-2 bg-gray-100 border border-gray-100 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary pointer-events-none cursor-pointer content-center flex items-center">
                            <button type="button" class="pointer-events-none border flex justify-between gap-2 py-[4px] px-2 border-[#B3B3B3] rounded-md cursor-pointer items-center">
                                <img src="{{ asset('assets/images/landing/produk/emo/upload-line-icon.png') }}" alt="" class="w-4 h-4">
                                Upload
                            </button>
                            <span id="fileName" class="ml-3 text-base text-gray-600 truncate"></span>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center items-center pt-10">
                    <button type="button"
                        class="text-white bg-gradient-to-r max-sm:text-[15px] text-md from-[#3986A3] to-[#225062] py-2 px-24 sm:w-auto w-full rounded-xl"
                        onclick="validateAndNextStep(3)">Selanjutnya</button>
                </div>
            </div>

            {{-- STEP 3: Cerita Konseling --}}

            <div id="step-3" class="step-section">
                <h1 class="max-sm:text-[29px] text-3xl font font-semibold text-center max-sm:mx-2 text-gradient my-6">Mari
                    Cerita</h1>
                <div class="flex flex-col space-y-1">
                    <p class="text-[#333333] sm:text-[17px] text-sm">Tuliskan Apa yang Ingin Anda Ceritakan</p>
                    <div class="relative">
                        <textarea name="cerita"
                            class="bg-[#F1F3F6] md:shadow-none shadow-md border-none rounded-lg w-full px-3 pt-3 h-96 cursor-pointer focus:ring-[#3986A3] text-start resize-none"
                            placeholder="Tidak ada minimum/batas jumlah kata"></textarea>
                    </div>
                </div>
                <div class="flex justify-center items-center pt-10">
                    <div class="w-full flex justify-center">
                        <button type="submit"
                            class="text-white bg-gradient-to-r max-sm:text-[15px] text-md from-[#3986A3] to-[#225062] py-2 px-24 sm:w-auto w-full rounded-xl">Kirim</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

        {{-- STEP 3: Cerita Konseling --}}

        <div id="step-3" class="step-section">
            <h1 class="max-sm:text-[29px] text-3xl font font-semibold text-center max-sm:mx-2 text-gradient my-6">Mari Cerita</h1>
            <div class="flex flex-col space-y-1">
                <p class="text-[#333333] sm:text-[17px] text-sm">Tuliskan Apa yang Ingin Anda Ceritakan</p>
                <div class="relative">
                    <textarea name="cerita" class="bg-[#F1F3F6] md:shadow-none shadow-md border-none rounded-lg w-full px-3 pt-3 h-96 cursor-pointer focus:ring-[#3986A3] text-start resize-none" placeholder="Tidak ada minimum/batas jumlah kata"></textarea>
                </div>
            </div>
            <div class="flex justify-center items-center pt-10">
                <div class="w-full flex justify-center">
                    <button type="submit" class="text-white bg-gradient-to-r max-sm:text-[15px] text-md from-[#3986A3] to-[#225062] py-2 px-24 sm:w-auto w-full rounded-xl">Kirim</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection


@section('script')

    {{-- Script untuk validasi kode voucher --}}
    @include('landing.product.counseling.script-code-voucher.voucher')

    {{-- Script untuk validasi inputan step 1,2,3 --}}
    @include('landing.product.counseling.script-validasi-inputan.validasi')

{{-- Script untuk logika form --}}
<script>

    // KONSTANTA HARGA
    const HARGA = {
        online: { weekdays: [150000, 300000, 450000], weekend: [200000, 340000, 500000] },
        offline: { weekdays: [175000, 350000, 525000], weekend: [225000, 340000, 500000] }
    };

    // MODAL SYARAT & KETENTUAN
    ['openModal', 'openModal2', 'openModal3'].forEach(id => {
        document.getElementById(id)?.addEventListener('click', function() {
            document.getElementById('modal').classList.remove('hidden');
        });
    });
    // Tutup modal S&K
    document.getElementById('closeModal').addEventListener('click', function() {
        document.getElementById('modal').classList.add('hidden');
    });

    // MODAL VOUCHER PROMO
    document.getElementById('closeVoucher').addEventListener('click', function() {
        document.getElementById('voucher').classList.add('hidden');
    });

    // FUNGSI TAMPILKAN HARGA
    function tampilkanHarga(hargaAsli, hargaDiskon) {
        document.getElementById('harga-asli').textContent = 'Rp' + hargaAsli.toLocaleString();
        document.getElementById('harga-diskon').textContent = 'Rp' + hargaDiskon.toLocaleString();
        document.getElementById('harga-input').value = hargaDiskon;
    }

    // FUNGSI STEP FORM
    function nextStep(step) {
        let errorMessage = null;
        if (step === 2) errorMessage = validateStep1();
        else if (step === 3) errorMessage = validateStep2();

        if (errorMessage) {
            Swal.fire({
                toast: true,
                position: "top-end",
                icon: "error",
                title: errorMessage,
                showConfirmButton: false,
                showCloseButton: true,
                timer: 4000
            });
            return;
        }
        showStep(step);
    }

    function validateAndNextStep(step) {
        let errorMessage = null;
        if (step === 2) errorMessage = validateStep1();
        else if (step === 3) errorMessage = validateStep2();

        if (errorMessage) {
            Swal.fire({
                toast: true,
                position: "top-end",
                icon: "error",
                title: errorMessage,
                showConfirmButton: false,
                showCloseButton: true,
                timer: 4000
            });
            return;
        }
        showStep(step);
    }

    function prevStep(step) {
        showStep(step);
    }

    function showStep(step) {
    // Sembunyikan semua step-section
    document.querySelectorAll('.step-section').forEach(function(section) {
        section.classList.remove('active');
    });
    // Tampilkan step yang dipilih
    const currentStep = document.getElementById('step-' + step);
    if (currentStep) {
        currentStep.classList.add('active');
    }
    // Sembunyikan semua header
    document.querySelectorAll('[id^="step-"][id$="-header"]').forEach(function(header) {
        header.style.display = 'none';
    });
    // Tampilkan header step yang aktif
    const currentHeader = document.getElementById('step-' + step + '-header');
    if (currentHeader) {
        currentHeader.style.display = 'flex';
    }
    }

    // VALIDASI SUBMIT FORMULIR
    document.getElementById('multiStepForm').addEventListener('submit', function(event) {
        event.preventDefault();
        const errorMessage = validateStep3();
        if (errorMessage) {
            Swal.fire({
                toast: true,
                position: "top-end",
                icon: "error",
                title: errorMessage,
                showConfirmButton: false,
                showCloseButton: true,
                timer: 4000
            });
            return;
        }
        // Set daerah ke 'Online' jika metode online
        const metode = document.getElementById('metode-select').value;
        const daerahSelect = document.getElementById('daerah-select');
        if (metode === 'online') daerahSelect.value = 'Online';

        // Set harga final
        const hargaInput = document.getElementById('harga-input');
        hargaInput.value = hargaInput.dataset.hargaFinal || hargaInput.dataset.hargaAsli;

        this.submit();
    });

    // FLATPICKR (DATEPICKER)
    document.addEventListener("DOMContentLoaded", function () {
        // Tanggal Jadwal Konseling
        flatpickr("#tglkonseling", {
            dateFormat: "d/m/Y",
            allowInput: true,
            minDate: new Date().fp_incr(7),
        });
        // Waktu Jadwal Konseling
        flatpickr("#waktukonseling", {
            enableTime: true,
            noCalendar: true,
            dateFormat: "H:i",
            time_24hr: true
        });
        // Tanggal Lahir Data Diri
        flatpickr("#tanggal_lahir", {
            dateFormat: "d/m/Y",
            allowInput: true,
        });
    });

    // TAMPILKAN/SEMBUNYIKAN DAERAH KONSELING
    document.getElementById('metode-select').addEventListener('change', function() {
        const daerahContainer = document.getElementById('daerah-container');
        const daerahSelect = document.getElementById('daerah-select');
        if (this.value === 'offline') {
            daerahContainer.style.display = 'block';
            daerahSelect.required = true;
            daerahSelect.value = '';
        } else {
            daerahContainer.style.display = 'none';
            daerahSelect.required = false;
            daerahSelect.value = 'Online';
        }
        updateHarga();
    });


    // LOGIKA PENENTUAN HARGA
    function updateHarga() {
        const tanggal = document.getElementById('tglkonseling').value;
        const metode = document.getElementById('metode-select').value;
        const sesi = document.getElementById('sesi-select').value;
        const hargaInput = document.getElementById('harga-input');
        const hargaAsliSpan = document.getElementById('harga-asli');
        const hargaDiskonSpan = document.getElementById('harga-diskon');

        if (!tanggal || !metode || !sesi) {
            hargaInput.value = '';
            hargaInput.dataset.hargaAsli = '';
            hargaInput.dataset.hargaFinal = '';
            hargaAsliSpan.textContent = '';
            hargaDiskonSpan.textContent = '';
            return;
        }
        const dateParts = tanggal.split('/');
        if (dateParts.length !== 3) {
            hargaInput.value = '';
            hargaInput.dataset.hargaAsli = '';
            hargaInput.dataset.hargaFinal = '';
            hargaAsliSpan.textContent = '';
            hargaDiskonSpan.textContent = '';
            return;
        }
        const dateObj = new Date(dateParts[2], dateParts[1] - 1, dateParts[0]);
        const day = dateObj.getDay();
        const isWeekend = (day === 0 || day === 6);
        let harga = 0;
        if (!isWeekend) {
            if (metode === 'online') harga = {1: 150000, 2: 300000, 3: 450000}[sesi];
            else if (metode === 'offline') harga = {1: 175000, 2: 350000, 3: 525000}[sesi];
        } else {
            if (metode === 'online') harga = {1: 200000, 2: 340000, 3: 500000}[sesi];
            else if (metode === 'offline') harga = {1: 225000, 2: 340000, 3: 500000}[sesi];
        }
        hargaInput.value = harga;
        hargaInput.dataset.hargaAsli = harga;
        hargaInput.dataset.hargaFinal = harga;
        hargaAsliSpan.textContent = harga ? 'Rp' + harga.toLocaleString() : '';
        hargaDiskonSpan.textContent = '';
    }
    document.getElementById('tglkonseling').addEventListener('change', updateHarga);
    document.getElementById('metode-select').addEventListener('change', updateHarga);
    document.getElementById('sesi-select').addEventListener('change', updateHarga);

    // FILE UPLOAD KARTU PELAJAR
    const fileNameSpan = document.getElementById('fileName');
    fileNameSpan.textContent = "No File";
    document.getElementById('bukti_kartu_pelajar').addEventListener('change', function(e) {
        if (this.files && this.files.length > 0) {
            // Validasi ukuran file max 1MB
            if (this.files[0].size > 1024 * 1024) {
                Swal.fire({
                    toast: true,
                    position: "top-end",
                    icon: "error",
                    title: "Ukuran file maksimal 1 MB!",
                    showConfirmButton: false,
                    timer: 4000
                });
                this.value = "";
                fileNameSpan.textContent = "No File";
            } else {
                fileNameSpan.textContent = this.files[0].name;
            }
        } else {
            fileNameSpan.textContent = "No File";
        }
    });

    // ERROR HANDLING DARI BACKEND JIKA ADA KESALAHAN DALAM SUBMIT FORM
    @if(session('error'))
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: '{{ session('error') }}',
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            showCloseButton: true,
            timer: 4000
        });
    @endif

</script>
@endsection
