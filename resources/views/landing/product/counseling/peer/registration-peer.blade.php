@extends('landing.layouts.app', [
    'title' => 'Berbinar Insightful Indonesia',
    'active' => 'Produk Berbinar',
    'page' => 'Registrasi Konseling',
])

@section('content')
<style>
    .step-section { display: none; }
    .step-section.active { display: block; }

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
    <div class="flex flex-row justify-between" id="step-1-header">
        <a href="{{ route('product.counseling.peer-counselor.registration') }}">
            <div class="flex items-center space-x-2 cursor-pointer">
                <img src="{{ asset('assets/images/landing/asset-konseling/vector/left-arrow.svg') }}" alt="Left Arrow" class="h-3 w-auto">
                <p class="text-[15px] flex font-semibold text-[#3986A3]">Kembali <span class="sm:block hidden ml-0.5">pilih konseling</span></p>
            </div>
        </a>

        <div class="flex items-center space-x-1 cursor-pointer" id="openModal">
            <img src="{{ asset('assets/images/landing/asset-konseling/vector/sk-vector.png') }}" alt="Syarat & Ketentuan" class="h-3 w-auto">
            <p class="text-[15px] font-semibold text-[#3986A3]"><span class="sm:block hidden">Syarat & Ketentuan</span><span class="sm:hidden block">S&K</span></p>
        </div>
    </div>

    <div class="flex flex-row justify-between" id="step-2-header" style="display: none;">
        <div class="flex items-center space-x-2 cursor-pointer" onclick="prevStep(1)">
            <img src="{{ asset('assets/images/landing/asset-konseling/vector/left-arrow.svg') }}" alt="Left Arrow" class="h-3 w-auto">
            <p class="text-[15px] flex font-semibold text-[#3986A3]">Kembali <span class="sm:block hidden ml-0.5">isi jadwal</span></p>
        </div>

        <div class="flex items-center space-x-1 cursor-pointer" id="openModal2">
            <img src="{{ asset('assets/images/landing/asset-konseling/vector/sk-vector.png') }}" alt="Syarat & Ketentuan" class="h-3 w-auto">
            <p class="text-[15px] font-semibold text-[#3986A3]"><span class="sm:block hidden">Syarat & Ketentuan</span><span class="sm:hidden block">S&K</span></p>
        </div>
    </div>

    <div class="flex flex-row justify-between" id="step-3-header" style="display: none;">
        <div class="flex items-center space-x-2 cursor-pointer" onclick="prevStep(2)">
            <img src="{{ asset('assets/images/landing/asset-konseling/vector/left-arrow.svg') }}" alt="Left Arrow" class="h-3 w-auto">
            <p class="text-[15px] flex font-semibold text-[#3986A3]">Kembali <span class="sm:block hidden ml-0.5">isi data diri</span></p>
        </div>

        <div class="flex items-center space-x-1 cursor-pointer" id="openModal3">
            <img src="{{ asset('assets/images/landing/asset-konseling/vector/sk-vector.png') }}" alt="Syarat & Ketentuan" class="h-3 w-auto">
            <p class="text-[15px] font-semibold text-[#3986A3]"><span class="sm:block hidden">Syarat & Ketentuan</span><span class="sm:hidden block">S&K</span></p>
        </div>
    </div>

    <div id="modal" class="fixed bg-gray-900 bg-opacity-50 backdrop-blur-md hidden inset-0 flex items-center justify-center z-30">
        <div class="h-auto max-h-screen w-[70%] overflow-y-auto rounded-2xl bg-white p-6 max-sm:px-2 shadow-md max-lg:h-[90%] max-sm:w-[86%]">
            <h1 class="bg-gradient-to-r from-amber-400 to-yellow-700 bg-clip-text text-transparent pb-4 text-center text-3xl font-bold max-sm:text-2xl">Syarat dan Ketentuan</h1>
            <div class="mb-6">
                <div class="flex items-start gap-2">
                    <img src="{{ asset('assets/images/landing/asset-konseling/vector/location.png') }}" alt="Lokasi" class="h-5 w-5 mt-0.5" />
                    <span class="font-semibold">Lokasi offline Konseling</span>
                </div>
                <ol class="list-decimal mt-1 space-y-1 pl-7">
                    <li class="max-sm:text-sm">a. Psikolog : Subaraya, Kediri, Sidoarjo, Makassar, Samarinda, Jakarta, dan Malang</li>
                    <li class="max-sm:text-sm">b. Peer Counselor : Tangerang Selatan, Malang, dan Surabaya</li>
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

    <form id="multiStepForm" action="{{ route('product.counseling.peer-counselor.store') }}" method="POST" class="flex flex-col">
        @csrf

        {{-- STEP 1: Pilih Jadwal Konseling --}}
        <div id="step-1" class="step-section active">
            <h1 class="max-sm:text-[29px] text-3xl font font-semibold text-center max-sm:mx-2 text-gradient my-6">Isi Jadwal Konseling</h1>
            <input type="hidden" name="kategori" value="peer-counselor">
            <div class="space-y-3 flex flex-col">
                {{-- Tanggal Konseling --}}
                <div class="flex flex-col space-y-1">
                    <p class="text-[#333333] sm:text-[17px] text-sm">Tanggal Konseling</p>
                    <div class="relative">
                        <input type="text" required name="jadwal_tanggal" id="tglkonseling" class="bg-[#F1F3F6] border-none md:shadow-none shadow-md rounded-lg w-full px-3 py-3 cursor-pointer focus:ring-[#3986A3]" placeholder="dd/mm/yy" autocomplete="off" readonly>
                        <img src="{{ asset('assets/images/landing/asset-konseling/vector/date.png') }}" class="h-4 w-auto object-contain absolute right-5 top-1/2 -translate-y-1/2" onclick="document.getElementById('tglkonseling').focus()">
                    </div>
                </div>
                {{-- Waktu Konseling --}}
                <div class="flex flex-col space-y-1">
                    <p class="text-[#333333] sm:text-[17px] text-sm">Waktu Konseling</p>
                    <div class="relative">
                        <select name="jadwal_pukul" id="waktu-konseling" required class="dropdown-select bg-[#F1F3F6] md:shadow-none shadow-md border-none rounded-lg w-full px-3 py-3 cursor-pointer focus:ring-[#3986A3] appearance-none" disabled>
                            <option value="" disabled selected>Pilih tanggal terlebih dahulu</option>
                        </select>
                        <img src="{{ asset('assets/images/landing/asset-konseling/vector/dropdown.png') }}" class="dropdown-icon h-2 w-auto object-contain absolute right-5 top-1/2 -translate-y-1/2 pointer-events-none transition-transform duration-300">
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
                            <option value="Bekasi">Bekasi</option>
                            <option value="Jakarta">Jakarta</option>
                            <option value="Tangerang Selatan">Tangerang Selatan</option>
                            <option value="Padang">Padang</option>
                            <option value="Wonogiri">Wonogiri</option>
                            <option value="Malang">Malang</option>
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
                        <input id="harga-input" class="bg-[#F1F3F6] md:shadow-none shadow-md border-none rounded-lg w-full px-3 py-3 cursor-pointer focus:ring-[#3986A3]" placeholder="Rp 0,00" readonly>
                    </div>
                </div>
                <div class="flex justify-center items-center pt-10">
                    <button type="button" class="text-white bg-gradient-to-r max-sm:text-[15px] text-md from-[#3986A3] to-[#225062] py-2 px-24 sm:w-auto w-full rounded-xl" onclick="validateAndNextStep(2)">Selanjutnya</button>
                </div>
            </div>
        </div>

        {{-- STEP 2: Isi Data Diri --}}
        <div id="step-2" class="step-section">
            <h1 class="font text-gradient my-6 text-center text-3xl font-semibold max-sm:mx-2 max-sm:text-[29px]">Data Diri</h1>
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                {{-- Nama Lengkap --}}
                <div class="flex flex-col space-y-1">
                    <p class="text-sm text-[#333333] sm:text-[17px]">Nama Lengkap</p>
                    <div class="relative">
                        <input name="nama" required type="text" class="w-full cursor-pointer rounded-lg border-none bg-[#F1F3F6] px-3 py-3 shadow-md focus:ring-[#3986A3] md:shadow-none" placeholder="Budi Berbinar" />
                    </div>
                </div>
                {{-- Email Aktif --}}
                <div class="flex flex-col space-y-1">
                    <p class="text-sm text-[#333333] sm:text-[17px]">Email Aktif</p>
                    <div class="relative">
                        <input name="email" required type="email" class="w-full cursor-pointer rounded-lg border-none bg-[#F1F3F6] px-3 py-3 shadow-md focus:ring-[#3986A3] md:shadow-none" placeholder="email.anda@gmail.com" />
                    </div>
                </div>
                {{-- Tanggal Lahir --}}
                <div class="flex flex-col space-y-1">
                    <p class="text-sm text-[#333333] sm:text-[17px]">Tanggal Lahir</p>
                    <div class="relative">
                        <input name="tanggal_Lahir" autocomplete="off" required type="text" id="tanggal_lahir" class="w-full cursor-pointer rounded-lg border-none bg-[#F1F3F6] px-3 py-3 shadow-md focus:ring-[#3986A3] md:shadow-none" placeholder="dd/mm/yy" readonly />
                        <img src="{{ asset('assets/images/landing/asset-konseling/vector/date.png') }}" class="absolute top-1/3 h-4 w-auto object-contain max-sm:hidden lg:right-5" onclick="document.getElementById('tanggal_lahir').focus()" />
                    </div>
                </div>
                {{-- Kota Domisili --}}
                <div class="flex flex-col space-y-1">
                    <p class="text-sm text-[#333333] sm:text-[17px]">Tempat Lahir</p>
                    <div class="relative">
                        <input name="tempat_lahir" type="text" class="w-full cursor-pointer rounded-lg border-none bg-[#F1F3F6] px-3 py-3 shadow-md focus:ring-[#3986A3] md:shadow-none" placeholder="Surabaya" />
                    </div>
                </div>
                {{-- Alamat Domisili --}}
                <div class="flex flex-col space-y-1">
                    <p class="text-sm text-[#333333] sm:text-[17px]">Alamat Domisili</p>
                    <div class="relative">
                        <input type="text" name="alamat" class="w-full cursor-pointer rounded-lg border-none bg-[#F1F3F6] px-3 py-3 shadow-md focus:ring-[#3986A3] md:shadow-none" placeholder="Jalan berbinar blok x" />
                    </div>
                </div>
                {{-- Status Pernikahan --}}
                <div class="flex flex-col space-y-1">
                    <p class="text-sm text-[#333333] sm:text-[17px]">Status Pernikahan</p>
                    <div class="relative">
                        <select name="status_pernikahan" class="dropdown-select w-full cursor-pointer appearance-none rounded-lg border-none bg-[#F1F3F6] px-3 py-3 shadow-md focus:ring-[#3986A3] md:shadow-none">
                            <option value="" disabled selected>Pilih Status</option>
                            <option value="Belum Menikah">Belum Menikah</option>
                            <option value="Sudah Menikah">Sudah Menikah</option>
                        </select>
                        <img src="{{ asset('assets/images/landing/asset-konseling/vector/dropdown.png') }}" class="dropdown-icon pointer-events-none absolute right-5 top-1/2 h-2 w-auto -translate-y-1/2 object-contain transition-transform duration-300" />
                    </div>
                </div>
                {{-- Jenis Kelamin --}}
                <div class="flex flex-col space-y-1">
                    <p class="text-sm text-[#333333] sm:text-[17px]">Jenis Kelamin</p>
                    <div class="relative">
                        <select name="jenis_kelamin" class="dropdown-select w-full cursor-pointer appearance-none rounded-lg border-none bg-[#F1F3F6] px-3 py-3 shadow-md focus:ring-[#3986A3] md:shadow-none">
                            <option value="" disabled selected>Pilih Jenis Kelamin</option>
                            <option value="laki-laki">Laki-laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>
                        <img src="{{ asset('assets/images/landing/asset-konseling/vector/dropdown.png') }}" class="dropdown-icon pointer-events-none absolute right-5 top-1/2 h-2 w-auto -translate-y-1/2 object-contain transition-transform duration-300" />
                    </div>
                </div>
                {{-- Nomor WhatsApp --}}
                <div class="flex flex-col space-y-1">
                    <p class="text-sm text-[#333333] sm:text-[17px]">Nomor WhatsApp</p>
                    <div class="relative">
                        <input name="no_wa" required type="number" class="w-full cursor-pointer rounded-lg border-none bg-[#F1F3F6] px-3 py-3 shadow-md focus:ring-[#3986A3] md:shadow-none" placeholder="08112345XXXX" />
                    </div>
                </div>
                {{-- Suku --}}
                <div class="flex flex-col space-y-1">
                    <p class="text-sm text-[#333333] sm:text-[17px]">Suku</p>
                    <div class="relative">
                        <input type="text" name="suku" required class="w-full cursor-pointer rounded-lg border-none bg-[#F1F3F6] px-3 py-3 shadow-md focus:ring-[#3986A3] md:shadow-none" placeholder="Jawa" />
                    </div>
                </div>
                {{-- Agama --}}
                <div class="flex flex-col space-y-1">
                    <p class="text-sm text-[#333333] sm:text-[17px]">Agama</p>
                    <div class="relative">
                        <select name="agama" class="dropdown-select w-full cursor-pointer appearance-none rounded-lg border-none bg-[#F1F3F6] px-3 py-3 shadow-md focus:ring-[#3986A3] md:shadow-none">
                            <option value="" disabled selected>Pilih Agama</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Khonghucu">Khonghucu</option>
                        </select>
                        <img src="{{ asset('assets/images/landing/asset-konseling/vector/dropdown.png') }}" class="dropdown-icon pointer-events-none absolute right-5 top-1/2 h-2 w-auto -translate-y-1/2 object-contain transition-transform duration-300" />
                    </div>
                </div>
                {{-- Anak ke-dari Berapa Bersaudara --}}
                <div class="flex flex-col space-y-1">
                    <p class="text-sm text-[#333333] sm:text-[17px]">Anak ke-dari Berapa Bersaudara</p>
                    <div class="relative">
                        <input type="text" name="posisi_anak" required class="w-full cursor-pointer rounded-lg border-none bg-[#F1F3F6] px-3 py-3 shadow-md focus:ring-[#3986A3] md:shadow-none" placeholder="Anak ke 2 dari 3 bersaudara" />
                    </div>
                </div>
                {{-- Hobi --}}
                <div class="flex flex-col space-y-1">
                    <p class="text-sm text-[#333333] sm:text-[17px]">Hobi</p>
                    <div class="relative">
                        <input type="text" name="hobi" required class="w-full cursor-pointer rounded-lg border-none bg-[#F1F3F6] px-3 py-3 shadow-md focus:ring-[#3986A3] md:shadow-none" placeholder="Membaca Buku" />
                    </div>
                </div>
            </div>
            <h1 class="font text-gradient my-10 text-center text-3xl font-semibold max-sm:mx-2 max-sm:text-[29px]">Riwayat Pendidikan</h1>
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                {{-- Pendidikan Terakhir --}}
                <div class="flex flex-col space-y-1">
                    <p class="text-sm text-[#333333] sm:text-[17px]">Pendidikan Terakhir</p>
                    <div class="relative">
                        <select name="pendidikan" required class="dropdown-select w-full cursor-pointer appearance-none rounded-lg border-none bg-[#F1F3F6] px-3 py-3 shadow-md focus:ring-[#3986A3] md:shadow-none">
                            <option value="" disabled selected>Pilih Pendidikan Terakhir</option>
                            <option value="S1/D4 - Sarjana">S1/D4 - Sarjana</option>
                            <option value="D3 - Diploma">D3 - Diploma</option>
                            <option value="SMA/SMK">SMA/SMK</option>
                            <option value="SMP">SMP</option>
                            <option value="SD">SD</option>
                        </select>
                        <img src="{{ asset('assets/images/landing/asset-konseling/vector/dropdown.png') }}" class="dropdown-icon pointer-events-none absolute right-5 top-1/2 h-2 w-auto -translate-y-1/2 object-contain transition-transform duration-300" />
                    </div>
                </div>
                {{-- Asal Sekolah/Universitas --}}
                <div class="flex flex-col space-y-1">
                    <p class="text-sm text-[#333333] sm:text-[17px]">Asal Sekolah/Universitas</p>
                    <div class="relative">
                        <input type="text" name="asal_sekolah" required class="w-full cursor-pointer rounded-lg border-none bg-[#F1F3F6] px-3 py-3 shadow-md focus:ring-[#3986A3] md:shadow-none" placeholder="Universitas Berbinar" />
                    </div>
                </div>
                {{-- Pekerjaan Saat Ini --}}
                <div class="flex flex-col space-y-1">
                    <p class="text-sm text-[#333333] sm:text-[17px]">Pekerjaan Saat Ini</p>
                    <div class="relative">
                        <input type="text" name="riwayat_pekerjaan" required class="w-full cursor-pointer rounded-lg border-none bg-[#F1F3F6] px-3 py-3 shadow-md focus:ring-[#3986A3] md:shadow-none" placeholder="Karyawan Swasta" />
                    </div>
                </div>
                {{-- Kegiatan Sosial --}}
                <div class="flex flex-col space-y-1">
                    <p class="text-sm text-[#333333] sm:text-[17px]">Kegiatan Sosial yang Pernah/Sedang diikuti</p>
                    <div class="relative">
                        <input type="text" name="kegiatan_sosial" required class="w-full cursor-pointer rounded-lg border-none bg-[#F1F3F6] px-3 py-3 shadow-md focus:ring-[#3986A3] md:shadow-none" placeholder="Pengabdian Pemuda Masyarakat" />
                    </div>
                </div>
            </div>
            <div class="flex justify-center items-center pt-10">
                <button type="button" class="text-white bg-gradient-to-r max-sm:text-[15px] text-md from-[#3986A3] to-[#225062] py-2 px-24 sm:w-auto w-full rounded-xl" onclick="validateAndNextStep(3)">Selanjutnya</button>
            </div>
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

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
{{-- Eror handling Jika data gagal di simpan ke DB --}}
@if(session('error'))
    <script>
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
    </script>
@endif

{{-- Script untuk logika form --}}
<script>
    // Step navigation logic
    function showStep(step) {
        document.querySelectorAll('.step-section').forEach(function (el) {
            el.classList.remove('active');
        });
        document.getElementById('step-' + step).classList.add('active');

        // Show/hide appropriate headers
        document.getElementById('step-1-header').style.display = step === 1 ? 'flex' : 'none';
        document.getElementById('step-2-header').style.display = step === 2 ? 'flex' : 'none';
        document.getElementById('step-3-header').style.display = step === 3 ? 'flex' : 'none';

        window.scrollTo({ top: 0, behavior: 'smooth' });
    }

    // Validasi formulir
    function getFieldLabel(fieldName) {
        const field = document.querySelector(`[name="${fieldName}"]`);
        if (field) {
            const container = field.closest('.flex.flex-col.space-y-1');
            if (container) {
                const label = container.querySelector('p');
                if (label) {
                    return label.textContent.trim();
                }
            }
        }
        return fieldName.replace(/_/g, ' ');
    }

    function isValidEmail(email) {
        return /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(email);
    }

    function isValidPhoneNumber(number) {
        return /^(\+62|62|0)8[1-9][0-9]{6,11}$/.test(number);
    }

    function validateStep1() {
        const requiredFields = ['jadwal_tanggal', 'jadwal_pukul', 'metode', 'sesi'];
        const metode = document.getElementById('metode-select').value;

        if (metode === 'offline') {
            requiredFields.push('daerah');
        }

        for (let fieldName of requiredFields) {
            let field;
            if (fieldName === 'metode') {
                field = document.getElementById('metode-select');
            } else if (fieldName === 'sesi') {
                field = document.getElementById('sesi-select');
            } else if (fieldName === 'daerah') {
                field = document.getElementById('daerah-select');
            } else {
                field = document.querySelector(`[name="${fieldName}"]`);
            }

            if (!field || field.value.trim() === '' || field.value === 'Pilih metode konseling') {
                return 'Data "' + getFieldLabel(fieldName) + '" belum diisi.';
            }
        }
        return null;
    }

    function validateStep2() {
        const requiredFields = [
            'nama', 'email', 'tanggal_Lahir', 'tempat_lahir', 'alamat', 'status_pernikahan',
            'jenis_kelamin', 'no_wa', 'suku', 'agama', 'posisi_anak', 'hobi',
            'pendidikan', 'asal_sekolah', 'riwayat_pekerjaan', 'kegiatan_sosial'
        ];

        for (let fieldName of requiredFields) {
            let field = document.querySelector(`[name="${fieldName}"]`);
            if (!field || field.value.trim() === '') {
                return '"' + getFieldLabel(fieldName) + '" belum diisi :(';
            }

            // Validasi format tambahan untuk email dan nomor telepon
            if (fieldName === 'email' && !isValidEmail(field.value)) {
                return 'Format ' + getFieldLabel(fieldName) + ' tidak valid :(';
            }

            if (fieldName === 'no_wa' && !isValidPhoneNumber(field.value)) {
                return 'Format ' + getFieldLabel(fieldName) + ' tidak valid :(';
            }
        }
        return null;
    }

    function validateStep3() {
        const cerita = document.querySelector('[name="cerita"]');
        if (!cerita || cerita.value.trim() === '') {
            return '" ' + getFieldLabel('cerita') + '" belum diisi :(';
        }
        return null;
    }

    function nextStep(step) {
        let errorMessage = null;

        if (step === 2) {
            errorMessage = validateStep1();
        } else if (step === 3) {
            errorMessage = validateStep2();
        }

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

        if (step === 2) {
            errorMessage = validateStep1();
        } else if (step === 3) {
            errorMessage = validateStep2();
        }

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

    // Validasi pengiriman formulir
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

        // Memastikan daerah diatur ke 'Online' jika metode online
        const metode = document.getElementById('metode-select').value;
        const daerahSelect = document.getElementById('daerah-select');

        if (metode === 'online') {
            daerahSelect.value = 'Online';
        }

        // Ensure price is stored as integer
        const hargaDisplayInput = document.getElementById('harga-input');
        hargaDisplayInput.disabled = true; // Don't submit the display input

        // Jika validasi berhasil, baru kirim formulir
        this.submit();
    });

    // Jadwal peer counselor data
    const jadwalPeerData = @json($jadwalPeerCounselors);

    // Function to get day name from date
    function getDayName(dateString) {
        const days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
        const dateParts = dateString.split('/');
        const dateObj = new Date(dateParts[2], dateParts[1] - 1, dateParts[0]);
        return days[dateObj.getDay()];
    }

    // Function to format time to HH:MM
    function formatTime(timeString) {
        // Remove seconds if present and ensure HH:MM format
        const timeParts = timeString.split(':');
        const hours = timeParts[0].padStart(2, '0');
        const minutes = timeParts[1] ? timeParts[1].padStart(2, '0') : '00';
        return `${hours}:${minutes}`;
    }

    // Flatpickr initialization
    document.addEventListener("DOMContentLoaded", function () {
        // Jadwal Konseling Date
        flatpickr("#tglkonseling", {
            dateFormat: "d/m/Y",
            allowInput: true,
            minDate: new Date().fp_incr(7),
            onChange: function(selectedDates, dateStr, instance) {
                updateAvailableTimes(dateStr);
            }
        });

        // Data Diri Tanggal Lahir
        flatpickr("#tanggal_lahir", {
            dateFormat: "d/m/Y",
            allowInput: true,
        });
    });

    // Update available times based on selected date
    function updateAvailableTimes(selectedDate) {
        const waktuSelect = document.getElementById('waktu-konseling');

        // Clear previous options
        waktuSelect.innerHTML = '<option value="" disabled selected>Pilih Waktu Konseling</option>';

        if (selectedDate) {
            const dayName = getDayName(selectedDate);

            // Filter jadwal based on selected day
            const filteredJadwal = jadwalPeerData.filter(jadwal => jadwal.hari === dayName);

            if (filteredJadwal.length > 0) {
                filteredJadwal.forEach(jadwal => {
                    const option = document.createElement('option');
                    const formattedStartTime = formatTime(jadwal.pukul_mulai);
                    const formattedEndTime = formatTime(jadwal.pukul_selesai);
                    option.value = `${formattedStartTime} - ${formattedEndTime}`;
                    option.textContent = `${formattedStartTime} - ${formattedEndTime}`;
                    waktuSelect.appendChild(option);
                });

                waktuSelect.disabled = false;
            } else {
                const option = document.createElement('option');
                option.value = '';
                option.textContent = 'Tidak ada jadwal tersedia untuk hari ini';
                option.disabled = true;
                waktuSelect.appendChild(option);
                waktuSelect.disabled = true;
            }
        } else {
            waktuSelect.disabled = true;
        }

        // Reset price when date changes
        updateHarga();
    }

    // Show/hide daerah konseling
    document.getElementById('metode-select').addEventListener('change', function() {
        const daerahContainer = document.getElementById('daerah-container');
        if (this.value === 'offline') {
            daerahContainer.style.display = 'block';
            document.getElementById('daerah-select').required = true;
        } else {
            daerahContainer.style.display = 'none';
            document.getElementById('daerah-select').required = false;
            document.getElementById('daerah-select').value = '';
        }
        updateHarga();
    });

    // Harga calculation for peer counselor
    function updateHarga() {
        const tanggal = document.getElementById('tglkonseling').value;
        const waktu = document.getElementById('waktu-konseling').value;
        const metode = document.getElementById('metode-select').value;
        const sesi = document.getElementById('sesi-select').value;
        const hargaInput = document.getElementById('harga-input');
        const hargaHidden = document.getElementById('harga-hidden');

        if (!tanggal || !waktu || !metode || !sesi) {
            hargaInput.value = '';
            if (hargaHidden) hargaHidden.value = '';
            return;
        }

        let harga = 0;

        // Peer Counselor pricing (no weekend difference)
        if (metode === 'online') {
            harga = {1: 45000, 2: 90000, 3: 135000}[parseInt(sesi)];
        } else if (metode === 'offline') {
            harga = {1: 55000, 2: 110000, 3: 165000}[parseInt(sesi)];
        }

        // Display formatted price
        hargaInput.value = harga ? 'Rp ' + harga.toLocaleString('id-ID') : '';

        // Store raw integer value for form submission
        if (!hargaHidden) {
            const hiddenInput = document.createElement('input');
            hiddenInput.type = 'hidden';
            hiddenInput.name = 'harga';
            hiddenInput.id = 'harga-hidden';
            document.getElementById('multiStepForm').appendChild(hiddenInput);
        }
        document.getElementById('harga-hidden').value = harga;
    }

    // Add event listeners for price updates
    document.getElementById('waktu-konseling').addEventListener('change', updateHarga);
    document.getElementById('sesi-select').addEventListener('change', updateHarga);

    // Dropdown icon rotate
    document.querySelectorAll('.dropdown-select').forEach((select, index) => {
        const icon = document.querySelectorAll('.dropdown-icon')[index];
        select.addEventListener('click', function () { icon.classList.toggle('rotate-180'); });
        select.addEventListener('blur', function () { icon.classList.remove('rotate-180'); });
    });

    // Modal functionality for all steps
    document.getElementById('openModal').addEventListener('click', function() {
        document.getElementById('modal').classList.remove('hidden');
    });

    document.getElementById('openModal2').addEventListener('click', function() {
        document.getElementById('modal').classList.remove('hidden');
    });

    document.getElementById('openModal3').addEventListener('click', function() {
        document.getElementById('modal').classList.remove('hidden');
    });

    document.getElementById('closeModal').addEventListener('click', function() {
        document.getElementById('modal').classList.add('hidden');
    });
</script>
@endsection
