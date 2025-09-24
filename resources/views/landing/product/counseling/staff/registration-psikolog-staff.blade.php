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

    {{-- Modal untuk syarat dan ketentuan --}}

        <div id="modal" class="fixed bg-gray-900 bg-opacity-50 backdrop-blur-md hidden inset-0 flex items-center justify-center z-30">
        <div class="h-auto max-sm:max-h-[90%] max-h-screen w-[70%] overflow-y-auto rounded-2xl bg-white p-6 max-sm:px-2 shadow-md max-lg:h-[90%] max-sm:w-[86%]">
            <h1 class="bg-gradient-to-r from-amber-400 to-yellow-700 bg-clip-text text-transparent pb-4 text-center text-3xl font-bold max-sm:text-2xl">Syarat dan Ketentuan</h1>
            <div class="mb-6">
                <div class="flex items-start gap-2">
                    <img src="{{ asset('assets/images/landing/asset-konseling/vector/location.png') }}" alt="Lokasi" class="h-5 w-5 mt-0.5" />
                    <span class="font-semibold">Lokasi offline Konseling</span>
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

        {{-- Modal untuk syarat dan ketentuan --}}
        <div id="voucher"
            class="fixed bg-gray-900 bg-opacity-50 backdrop-blur-md hidden inset-0 flex items-center justify-center z-30">
            <div
                class="h-auto max-sm:max-h-[90%] max-h-screen w-[70%] overflow-y-auto rounded-2xl bg-white p-6 max-sm:px-2 shadow-md max-lg:h-[90%] max-sm:w-[86%]">
                <h1
                    class="bg-gradient-to-r from-[#3986A3] to-[#15323D] bg-clip-text text-transparent pb-6 text-center text-3xl font-bold max-sm:text-lg">
                    Promo KTM dan Kartu Pelajar <br class=""> Produk Konseling Bersama Psikolog</h1>
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
                                    <li>Daftar melalui website berbinar konseling <br> <a
                                            href="https://berbinar.in/produk/konseling"
                                            class="text-blue-500">https://berbinar.in/produk/<br
                                                class="hidden max-sm:block">konseling</a></li>
                                    <li>Upload KTM/kartu pelajar saat pendaftaran.</li>
                                    <li>Cantumkan kode promo #KONSELINGPELAJAR</li>
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
        <form id="multiStepForm" action="{{ route('product.counseling.psikolog.store') }}" method="POST"
            class="flex flex-col" enctype="multipart/form-data">
            @csrf

            <div>
                {{-- Data diri --}}
                <h1 class="max-sm:text-2xl text-3xl font font-bold text-center max-sm:mx-2 text-gradient my-6">Data Diri
                </h1>
                <div class="mx-4 my-12 grid grid-cols-1 md:grid-cols-2 gap-5">
                    {{-- nama lengkap --}}
                    <div class="flex flex-col space-y-1">
                        <p class="text-black text-base mb-2">Tanggal Konseling</p>
                        <div class="relative">
                            <input type="text" required name="nama" id="nama"
                                class="bg-[#F1F3F6] border-none shadow-md text-base md:shadow-none rounded-[10px] w-full px-3 py-[15px] focus:outline-none truncate"
                                placeholder="Carlotta Montelli">
                        </div>
                    </div>
                    {{-- Agama --}}
                    <div class="flex flex-col space-y-1">
                        <p class="text-black text-base mb-2">Agama</p>
                        <div class="relative">
                            <select required name="agama" id="agama"
                                class="dropdown-select bg-[#F1F3F6] md:shadow-none shadow-md border-none rounded-lg w-full px-3 py-3 cursor-pointer focus:ring-[#3986A3] appearance-none text-base">
                                <option value="" disabled selected hidden>Pilih Agama</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Konghucu">Konghucu</option>
                            </select>
                            <img src="{{ asset('assets/images/landing/asset-konseling/vector/dropdown.png') }}"
                                class="dropdown-icon h-2 w-auto object-contain absolute right-5 top-1/2 -translate-y-1/2 pointer-events-none transition-transform duration-300">
                        </div>
                    </div>
                    {{-- Tempat Lahir --}}
                    <div class="flex flex-col space-y-1">
                        <p class="text-black text-base mb-2">Tempat Lahir</p>
                        <div class="relative">
                            <input type="text" required name="tempat_lahir" id="tempat_lahir"
                                class="bg-[#F1F3F6] border-none shadow-md text-base md:shadow-none rounded-[10px] w-full px-3 py-[15px] focus:outline-none truncate"
                                placeholder="Surabaya">
                        </div>
                    </div>
                    {{-- Tanggal Lahir --}}
                    <div class="flex flex-col space-y-1">
                        <p class="text-black text-base mb-2">Tanggal Lahir</p>
                        <div class="relative">
                            <input type="date" required name="tanggal_lahir" id="tanggal_lahir"
                                class="bg-[#F1F3F6] border-none shadow-md text-base md:shadow-none rounded-[10px] w-full px-3 py-[15px] focus:outline-none cursor-pointer appearance-none">
                        </div>
                    </div>
                    {{-- Umur --}}
                    <div class="flex flex-col space-y-1">
                        <p class="text-black text-base mb-2">Umur</p>
                        <div class="relative">
                            <input type="text" required name="umur" id="umur"
                                class="bg-[#F1F3F6] border-none shadow-md text-base md:shadow-none rounded-[10px] w-full px-3 py-[15px] focus:outline-none"
                                placeholder="21">
                        </div>
                    </div>
                    {{-- Status Pernikahan --}}
                    <div class="flex flex-col space-y-1">
                        <p class="text-black text-base mb-2">Status Pernikahan</p>
                        <div class="relative">
                            <select required name="status_pernikahan" id="status_pernikahan"
                                class="dropdown-select bg-[#F1F3F6] md:shadow-none shadow-md border-none rounded-lg w-full px-3 py-3 cursor-pointer focus:ring-[#3986A3] appearance-none text-base">
                                <option value="" disabled selected hidden>Status Pernikahan</option>
                                <option value="belum">Belum menikah</option>
                                <option value="sudah">Sudah menikah</option>
                            </select>
                            <img src="{{ asset('assets/images/landing/asset-konseling/vector/dropdown.png') }}"
                                class="dropdown-icon h-2 w-auto object-contain absolute right-5 top-1/2 -translate-y-1/2 pointer-events-none transition-transform duration-300">
                        </div>
                    </div>
                    {{-- Anak ke berapa --}}
                    <div class="flex flex-col space-y-1">
                        <p class="text-black text-base mb-2">Posisi Anak (Anak ke ... dari ... bersaudara)</p>
                        <div class="relative">
                            <input type="text" required name="posisi_anak" id="posisi_anak"
                                class="bg-[#F1F3F6] border-none shadow-md text-base md:shadow-none rounded-[10px] w-full px-3 py-[15px] focus:outline-none truncate"
                                placeholder="Anak ke 2 dari 4 bersaudara">
                        </div>
                    </div>
                    {{-- Suku --}}
                    <div class="flex flex-col space-y-1">
                        <p class="text-black text-base mb-2">Suku</p>
                        <div class="relative">
                            <input type="text" required name="suku" id="suku"
                                class="bg-[#F1F3F6] border-none shadow-md text-base md:shadow-none rounded-[10px] w-full px-3 py-[15px] focus:outline-none truncate"
                                placeholder="Jawa">
                        </div>
                    </div>
                    {{-- Alamat Domisili --}}
                    <div class="flex flex-col space-y-1">
                        <p class="text-black text-base mb-2">Alamat Domisili</p>
                        <div class="relative">
                            <input type="text" required name="alamat" id="alamat"
                                class="bg-[#F1F3F6] border-none shadow-md text-base md:shadow-none rounded-[10px] w-full px-3 py-[15px] focus:outline-none truncate"
                                placeholder="Jl. Mawar No. 69, Surabaya......">
                        </div>
                    </div>
                    {{-- Kegiatan --}}
                    <div class="flex flex-col space-y-1">
                        <p class="text-black text-base mb-2">Kegiatan Sosial</p>
                        <div class="relative">
                            <input type="text" required name="kegiatan" id="kegiatan"
                                class="bg-[#F1F3F6] border-none shadow-md text-base md:shadow-none rounded-[10px] w-full px-3 py-[15px] focus:outline-none truncate"
                                placeholder="Cth: Organisasi, Komunitas, UKM, DLL">
                        </div>
                    </div>
                    {{-- Nomor WhatsApp --}}
                    <div class="flex flex-col space-y-1">
                        <p class="text-black text-base mb-2">Nomor WhatsApp</p>
                        <div class="relative">
                            <input type="text" required name="nomor" id="momor"
                                class="bg-[#F1F3F6] border-none shadow-md text-base md:shadow-none rounded-[10px] w-full px-3 py-[15px] focus:outline-none truncate"
                                placeholder="0812345XXXXX">
                        </div>
                    </div>
                    {{-- Hobi --}}
                    <div class="flex flex-col space-y-1">
                        <p class="text-black text-base mb-2">Hobi</p>
                        <div class="relative">
                            <input type="text" required name="hobi" id="hobi"
                                class="bg-[#F1F3F6] border-none shadow-md text-base md:shadow-none rounded-[10px] w-full px-3 py-[15px] focus:outline-none truncate"
                                placeholder="Cth: Menghina Fisalia">
                        </div>
                    </div>
                    {{-- Email --}}
                    <div class="flex flex-col space-y-1">
                        <p class="text-black text-base mb-2">Email</p>
                        <div class="relative">
                            <input type="email" required name="email" id="email"
                                class="bg-[#F1F3F6] border-none shadow-md text-base md:shadow-none rounded-[10px] w-full px-3 py-[15px] focus:outline-none truncate"
                                placeholder="Carlotta@gmail.com">
                        </div>
                    </div>
                </div>
                {{-- Riwayat Pendidikan dan Pekerjaan --}}
                <h1 class="max-sm:text-2xl text-3xl font font-bold text-center max-sm:mx-2 text-gradient my-6">Riwayat
                    Pendidikan dan Pekerjaan
                </h1>
                <div class="mx-4 my-12 grid grid-cols-1 md:grid-cols-2 gap-5">
                    {{-- Pendidikan Terakhir --}}
                    <div class="flex flex-col space-y-1">
                        <p class="text-black text-base mb-2">Pendidikan Terakhir</p>
                        <div class="relative">
                            <input type="text" required name="riwayat_pendidikan" id="riwayat_pendidikan"
                                class="bg-[#F1F3F6] border-none shadow-md text-base md:shadow-none rounded-[10px] w-full px-3 py-[15px] focus:outline-none truncate"
                                placeholder="Cth: Semester 5 Psikologi Univers....">
                        </div>
                    </div>
                    {{-- Riwayat Pekerjaan --}}
                    <div class="flex flex-col space-y-1">
                        <p class="text-black text-base mb-2">Riwayat Pekerjaan</p>
                        <div class="relative">
                            <input type="text" required name="riwayat_pekerjaan" id="riwayat_pekerjaan"
                                class="bg-[#F1F3F6] border-none shadow-md text-base md:shadow-none rounded-[10px] w-full px-3 py-[15px] focus:outline-none truncate"
                                placeholder="Cth: Peer Counselor, Berbinar Insightful Indonesia 2022-2....">
                        </div>
                    </div>
                </div>
                {{-- Jadwal dan Preferensi Konseling --}}
                <h1 class="max-sm:text-2xl text-3xl font font-bold text-center max-sm:mx-2 text-gradient my-6">Jadwal dan
                    Preferensi Konseling
                </h1>
                <div class="mx-4 my-12 grid grid-cols-1 md:grid-cols-2 gap-5">
                    {{-- Divisi --}}
                    <div class="flex flex-col space-y-1">
                        <p class="text-black text-base mb-2">Divisi</p>
                        <div class="relative">
                            <input type="text" required name="divisi" id="divisi"
                                class="bg-[#F1F3F6] border-none shadow-md text-base md:shadow-none rounded-[10px] w-full px-3 py-[15px] focus:outline-none truncate"
                                placeholder="Web & Mobile Apps Developer">
                        </div>
                    </div>
                    {{-- Posisi --}}
                    <div class="flex flex-col space-y-1">
                        <p class="text-black text-base mb-2">Posisi</p>
                        <div class="relative">
                            <input type="text" required name="posisi" id="posisi"
                                class="bg-[#F1F3F6] border-none shadow-md text-base md:shadow-none rounded-[10px] w-full px-3 py-[15px] focus:outline-none truncate"
                                placeholder="Front-End Developer">
                        </div>
                    </div>
                    {{-- Waktu Pengajuan Konseling --}}
                    <div class="flex flex-col space-y-1">
                        <p class="text-black text-base mb-2">Waktu Pengajuan Konseling</p>
                        <div class="relative">
                            <select name="waktu_pengajuan" id="waktu_pengajuan"
                                class="bg-[#F1F3F6] border-none shadow-md text-base md:shadow-none rounded-[10px] w-full px-3 py-[15px] focus:outline-none cursor-pointer appearance-none">
                                <option value="">Pilih Waktu</option>
                                @for ($i = 1; $i <= 24; $i++)
                                    <option value="{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}:00">
                                        {{ str_pad($i, 2, '0', STR_PAD_LEFT) }}:00 WIB
                                    </option>
                                @endfor
                            </select>
                        </div>
                    </div>
                    {{-- Tanggal Pengajuan Konseling --}}
                    <div class="flex flex-col space-y-1">
                        <p class="text-black text-base mb-2">
                            Tanggal Pengajuan Konseling (Hanya 5 Hari setelah pengisian form)
                        </p>
                        <div class="relative">
                            <input type="date" required name="tanggal_pengajuan" id="tanggal_pengajuan"
                                class="bg-[#F1F3F6] border-none shadow-md text-base md:shadow-none rounded-[10px] w-full px-3 py-[15px] focus:outline-none cursor-pointer appearance-none">
                        </div>
                    </div>
                </div>
                <div class="mx-4 my-12 flex flex-col gap-5">
                    {{-- Topik Pengajuan --}}
                    <div class="flex flex-col space-y-1">
                        <p class="text-black text-base mb-2">Topik Pengajuan</p>
                        <div class="relative">
                            <input type="text" required name="topik" id="topik"
                                class="bg-[#F1F3F6] border-none shadow-md text-base md:shadow-none
                       rounded-[10px] w-full px-3 py-[15px] focus:outline-none truncate"
                                placeholder="Cth: Review CV / Overthinking / Insecurities / Kecemasan / DLL">
                        </div>
                    </div>

                    {{-- Cerita / Permasalahan --}}
                    <div class="flex flex-col space-y-1">
                        <p class="text-black text-base mb-2">Cerita/Permasalahan yang ingin dikonsultasikan</p>
                        <div class="relative">
                            <textarea required name="permasalahan" id="permasalahan"
                                class="bg-[#F1F3F6] border-none shadow-md text-[14px] md:text-base
                   md:shadow-none rounded-[10px] w-full h-[149px] md:h-[76px] px-3 py-[15px]
                   focus:outline-none resize-y"
                                placeholder="Fisalia ngejek saya mulu"></textarea>
                        </div>
                    </div>

                </div>

                {{-- Button Kirim --}}
                <div class="mb-2 justify-center flex lg:gap-x-3">
                    <button
                        class="bg-gradient-to-r from-[#3986A3] to-[#15323D] w-full h-[45px] md:w-[413px] md:h-14 rounded-xl text-white font-medium text-xl md:text-2xl">Kirim</button>
                </div>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- Eror handling Jika data gagal di simpan ke DB --}}
    @if (session('error'))
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
        // --- Konstanta Harga ---
        const HARGA = {
            online: {
                weekdays: [150000, 300000, 450000],
                weekend: [200000, 340000, 500000]
            },
            offline: {
                weekdays: [175000, 350000, 525000],
                weekend: [225000, 340000, 500000]
            }
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

    // Falidasi Step 2
    function validateStep2() {
        const requiredFields = [
                'jadwal_tanggal', 'jadwal_pukul',
                'nama', 'email', 'tanggal_Lahir', 'tempat_lahir', 'alamat', 'umur', 'agama','status_pernikahan',
                'no_wa', 'suku', 'posisi_anak', 'hobi',
                'pendidikan', 'riwayat_pekerjaan', 'kegiatan_sosial','divisi','posisi',
            ];

            for (let fieldName of requiredFields) {
                let field = document.querySelector(`[name="${fieldName}"]`);
                if (!field || field.value.trim() === '') {
                    return 'Anda belum mengisi "' + getFieldLabel(fieldName) + '" ';
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

    // Validasi Step 3
    function validateStep3() {
        const requiredFields = ['topik_pengajuan', 'cerita'];
        for (let fieldName of requiredFields) {
            let field = document.querySelector(`[name="${fieldName}"]`);
            if (!field || field.value.trim() === '') {
                return 'Anda belum mengisi "' + getFieldLabel(fieldName) + '"';
            }
        }
        return null;
    }

    // Validasi email
    function isValidEmail(email) {
        return /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(email);
    }
    function isValidPhoneNumber(number) {
        return /^(\+62|62|0)8[1-9][0-9]{6,11}$/.test(number);
    }

    // Helper Validasi
    function getFieldLabel(fieldName) {
        const field = document.querySelector(`[name="${fieldName}"]`);
        if (field) {
                const container = field.closest('.flex.flex-col.space-y-1') ;
                if (container) {
                    const label = container.querySelector('p');
                    if (label) return label.textContent.trim();
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

        // --- Validasi Step ---
        function validateStep1() {
            const requiredFields = ['jadwal_tanggal', 'jadwal_pukul', 'metode', 'sesi'];
            const metode = document.getElementById('metode-select').value;
            if (metode === 'offline') requiredFields.push('daerah');
            const kategoriVoucher = document.getElementById('bukti-kartu-pelajar-container').style.display === 'block' ?
                'pelajar' : '';
            for (let fieldName of requiredFields) {
                let field;
                if (fieldName === 'metode') field = document.getElementById('metode-select');
                else if (fieldName === 'sesi') field = document.getElementById('sesi-select');
                else if (fieldName === 'daerah') field = document.getElementById('daerah-select');
                else field = document.querySelector(`[name="${fieldName}"]`);
                if (!field || field.value.trim() === '' || field.value === 'Pilih metode konseling') {
                    return 'Data "' + getFieldLabel(fieldName) + '" belum diisi.';
                }
            }
            if (kategoriVoucher === 'pelajar') {
                const buktiKartu = document.getElementById('bukti_kartu_pelajar');
                if (!buktiKartu.files || buktiKartu.files.length === 0) {
                    return 'Bukti Kartu Pelajar wajib diupload untuk kategori pelajar.';
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

        // --- Navigasi Step ---
        function showStep(step) {
            document.querySelectorAll('.step-section').forEach(el => el.classList.remove('active'));
            document.getElementById('step-' + step).classList.add('active');
            document.getElementById('step-1-header').style.display = step === 1 ? 'flex' : 'none';
            document.getElementById('step-2-header').style.display = step === 2 ? 'flex' : 'none';
            document.getElementById('step-3-header').style.display = step === 3 ? 'flex' : 'none';
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
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

        // --- Harga ---
        function getHarga(tanggal, metode, sesi) {
            if (!tanggal || !metode || !sesi) return 0;
            const [d, m, y] = tanggal.split('/');
            const dateObj = new Date(y, m - 1, d);
            const day = dateObj.getDay();
            const isWeekend = (day === 0 || day === 6);
            const tipeHari = isWeekend ? 'weekend' : 'weekdays';
            return HARGA[metode][tipeHari][sesi - 1];
        }

        function updateHargaDisplay(harga, diskon) {
            const hargaAsliSpan = document.getElementById('harga-asli');
            const hargaDiskonSpan = document.getElementById('harga-diskon');
            const hargaInput = document.getElementById('harga-input');
            if (diskon) {
                hargaAsliSpan.textContent = 'Rp' + harga.toLocaleString();
                hargaAsliSpan.className = 'harga-coret';
                hargaDiskonSpan.textContent = 'Rp' + diskon.toLocaleString();
                hargaInput.value = diskon;
                hargaInput.dataset.hargaFinal = diskon;
            } else {
                hargaAsliSpan.textContent = 'Rp' + harga.toLocaleString();
                hargaAsliSpan.className = '';
                hargaDiskonSpan.textContent = '';
                hargaInput.value = harga;
                hargaInput.dataset.hargaFinal = harga;
            }
        }

        function updateHarga() {
            const tanggal = document.getElementById('tglkonseling').value;
            const metode = document.getElementById('metode-select').value;
            const sesi = document.getElementById('sesi-select').value;
            const harga = getHarga(tanggal, metode, sesi);
            const hargaInput = document.getElementById('harga-input');
            hargaInput.dataset.hargaAsli = harga;
            updateHargaDisplay(harga, null);
        }

        // --- Voucher ---
        function isVoucherEligible(voucher, tanggal, metode, sesi) {
            if (!voucher.valid || voucher.jenis_pendaftaran !== 'psikolog') return false;
            if (voucher.tipe === 'tanggal') {
                const [d, m, y] = tanggal.split('/');
                const dateObj = new Date(y, m - 1, d);
                const day = dateObj.getDay();
                const isWeekend = (day === 0 || day === 6);
                if (isWeekend && voucher.detail.toLowerCase() === 'weekend') return true;
                if (!isWeekend && voucher.detail.toLowerCase() === 'weekdays') return true;
            } else if (voucher.tipe === 'metode') {
                return metode.toLowerCase() === voucher.detail.toLowerCase();
            } else if (voucher.tipe === 'sesi') {
                return voucher.detail.replace(/\s/g, '') === ('sesi' + sesi).replace(/\s/g, '');
            }
            return false;
        }

        function redeemVoucher() {
            const kode = document.getElementById('kode_promo').value.trim();
            const tanggal = document.getElementById('tglkonseling').value;
            const metode = document.getElementById('metode-select').value;
            const sesi = document.getElementById('sesi-select').value;
            const hargaInput = document.getElementById('harga-input');
            const harga = getHarga(tanggal, metode, sesi);

            if (!kode) {
                Swal.fire({
                    toast: true,
                    position: "top-end",
                    icon: "error",
                    title: "Masukkan kode promo terlebih dahulu.",
                    showConfirmButton: false,
                    timer: 4000
                });
                return;
            }
            if (!harga) {
                Swal.fire({
                    toast: true,
                    position: "top-end",
                    icon: "error",
                    title: "Silakan pilih jadwal, metode, dan sesi terlebih dahulu.",
                    showConfirmButton: false,
                    timer: 4000
                });
                return;
            }

            fetch('/produk/konseling/psikolog/cek-voucher?code=' + encodeURIComponent(kode))
                .then(res => res.json())
                .then(voucher => {
                    if (isVoucherEligible(voucher, tanggal, metode, sesi)) {
                        const diskon = harga - (harga * voucher.percentage / 100);
                        updateHargaDisplay(harga, diskon);

                        // Set hidden input voucher info
                        document.getElementById('kategori_voucher').value = voucher.category || '';
                        document.getElementById('code_voucher').value = voucher.code || kode;
                        document.getElementById('presentase_diskon').value = voucher.percentage || 0;

                        // Tampilkan bukti kartu pelajar jika kategori pelajar
                        if (voucher.category && voucher.category.toLowerCase() === 'pelajar') {
                            document.getElementById('bukti-kartu-pelajar-container').style.display = 'block';
                            document.getElementById('bukti_kartu_pelajar').setAttribute('required', 'required');
                            document.getElementById('bukti_kartu_pelajar').removeAttribute('disabled');
                            document.getElementById('voucher').classList.remove('hidden');

                            const syaratButtons = ['openModal', 'openModal2', 'openModal3'];
                            syaratButtons.forEach(id => {
                                const btn = document.getElementById(id);
                                if (btn) {
                                    btn.onclick = function() {
                                        document.getElementById('voucher').classList.remove('hidden');
                                        document.getElementById('modal').classList.add('hidden');
                                    };
                                }
                            });
                        } else {
                            document.getElementById('bukti-kartu-pelajar-container').style.display = 'none';
                            document.getElementById('bukti_kartu_pelajar').removeAttribute('required');
                            document.getElementById('bukti_kartu_pelajar').removeAttribute('disabled');
                        }
                        Swal.fire({
                            toast: true,
                            position: "top-end",
                            icon: "success",
                            title: "Kode voucher berhasil digunakan!",
                            showConfirmButton: false,
                            timer: 4000
                        });
                    } else {
                        // Kosongkan jika tidak eligible
                        document.getElementById('kategori_voucher').value = '';
                        document.getElementById('code_voucher').value = '';
                        document.getElementById('presentase_diskon').value = '';
                        updateHargaDisplay(harga, null);
                        document.getElementById('bukti-kartu-pelajar-container').style.display = 'none';
                        document.getElementById('bukti_kartu_pelajar').removeAttribute('required');
                        Swal.fire({
                            toast: true,
                            position: "top-end",
                            icon: "error",
                            title: "Kode voucher tidak berlaku!",
                            showConfirmButton: false,
                            timer: 4000
                        });
                    }
                })
                .catch(() => {
                    Swal.fire({
                        toast: true,
                        position: "top-end",
                        icon: "error",
                        title: "Kode voucher tidak valid!",
                        showConfirmButton: false,
                        timer: 4000
                    });
                });
        }

        // --- Event Listener ---
        document.getElementById('tglkonseling').addEventListener('change', updateHarga);
        document.getElementById('metode-select').addEventListener('change', updateHarga);
        document.getElementById('sesi-select').addEventListener('change', updateHarga);

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
                    timer: 4000
                });
                return;
            }
            const metode = document.getElementById('metode-select').value;
            const daerahSelect = document.getElementById('daerah-select');
            if (metode === 'online') daerahSelect.value = 'Online';
            const hargaInput = document.getElementById('harga-input');
            hargaInput.value = hargaInput.dataset.hargaFinal || hargaInput.dataset.hargaAsli;
            this.submit();
        });

        // --- Modal S&K ---
        ['openModal', 'openModal2', 'openModal3'].forEach(id => {
            document.getElementById(id).addEventListener('click', () => {
                document.getElementById('modal').classList.remove('hidden');
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

        // --- Flatpickr ---
        document.addEventListener("DOMContentLoaded", function() {
            flatpickr("#tglkonseling", {
                dateFormat: "d/m/Y",
                allowInput: true,
                minDate: new Date().fp_incr(7)
            });
            flatpickr("#waktukonseling", {
                enableTime: true,
                noCalendar: true,
                dateFormat: "H:i",
                time_24hr: true
            });
            flatpickr("#tanggal_lahir", {
                dateFormat: "d/m/Y",
                allowInput: true
            });
        });

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
