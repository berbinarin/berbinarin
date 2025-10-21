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
    </style>

    <div class="sm:mt-36 mt-24 sm:mb-20 mb-8 sm:mx-24 mx-4 md:bg-white bg-none justify-center flex flex-col md:shadow-lg shadow-none rounded-2xl px-12 max-md:px-1 py-6">
        <div class="flex flex-row justify-between">
            <a href="{{ route('product.counseling.registration-staff') }}">
                <div class="flex items-center space-x-2 cursor-pointer">
                    <img src="{{ asset('assets/images/landing/asset-konseling/vector/left-arrow.svg') }}" alt="Left Arrow"
                        class="h-3 w-auto">
                    <p class="text-[15px] flex font-semibold text-[#3986A3]">Kembali <span
                            class="sm:block hidden ml-0.5">pilih konseling</span></p>
                </div>
            </a>

            <div class="flex items-center space-x-1 cursor-pointer" id="openModal">
                <img src="{{ asset('assets/images/landing/asset-konseling/vector/sk-vector.png') }}"
                    alt="Syarat & Ketentuan" class="h-3 w-auto">
                <p class="text-[15px] font-semibold text-[#3986A3]"><span class="sm:block hidden">Syarat &
                        Ketentuan</span><span class="sm:hidden block">S&K</span></p>
            </div>
        </div>


        {{-- Modal untuk syarat dan ketentuan --}}
        <div id="modal" class="fixed inset-0 z-30 flex hidden items-center justify-center bg-gray-900 bg-opacity-50 backdrop-blur-md">
            <div class="h-auto max-h-screen w-[70%] overflow-y-auto rounded-2xl bg-white p-6 shadow-md max-lg:h-[90%] max-sm:max-h-[90%] max-sm:w-[86%] max-sm:px-2">
                <h1 class="bg-gradient-to-r from-amber-400 to-yellow-700 bg-clip-text pb-4 text-center text-3xl font-bold text-transparent max-sm:text-2xl">Syarat dan Ketentuan</h1>
                <div class="mb-6">
                    <div class="flex items-start gap-2">
                        <img src="{{ asset("assets/images/landing/asset-konseling/vector/sk-vector.png") }}" alt="Pembalasan Pesan" class="mt-0.5 h-5 w-5" />
                        <span class="font-semibold">Ketentuan</span>
                    </div>
                    <ol class="mt-1 list-decimal space-y-1 pl-7">
                        <ul class="max-sm:text-sm">
                            Sesuai dengan ketentuan yang ada di kontrak kerja terkait pemberian benefit kepada staff yang bekerja di PT. Berbinar Insightful Indonesia, bagi para staff yang ingin mengambil benefit konseling 1 kali/bulan bersama psikolog (Pak Danny) dan Peer, kalian dapat mengikuti alur dibawah ini
                        </ul>
                    </ol>
                </div>

                <div class="mb-6">
                    <div class="flex items-start gap-2">
                        <img src="{{ asset("assets/images/landing/asset-konseling/vector/chat.png") }}" alt="Pembalasan Pesan" class="mt-0.5 h-5 w-5" />
                        <span class="font-semibold">Alur Pendaftaran</span>
                    </div>
                    <ol class="mt-1 list-decimal space-y-1 pl-7">
                        <li class="max-sm:text-sm">Para staff mengisi terlebih dahulu form pada halaman berikut</li>
                        <li class="max-sm:text-sm">Setelah mengisi form tersebut, para staff diharapkan untuk melakukan konfirmasi apabila telah submit form pengajuan konseling bersama psikolog melalui Counseling Product Management Manager (087876662013 - Dindu)</li>
                        <li class="max-sm:text-sm">Penjadwalan pasti sesi konseling akan diumumkan ketika mendapat konfirmasi dari Pak Danny sebagai Psikolog atau Peer Counselor melalui Counseling Product Management Manager</li>
                    </ol>
                </div>

                <div class="mt-4 flex justify-center lg:gap-x-3">
                    <button id="closeModal" class="w-[90%] rounded-xl border-[1.5px] border-[#225062] bg-transparent bg-gradient-to-r from-[#3986A3] to-[#15323D] px-4 py-1.5 font-medium text-white max-sm:text-[15px] lg:w-1/4">Saya Mengerti</button>
                </div>
            </div>
        </div>

        {{-- Form Input Pendafataran --}}

        <form id="singleForm" action="{{ route('product.counseling.peer-counselor.staff.store') }}" method="POST"
            class="flex flex-col" enctype="multipart/form-data">
            @csrf

            <div class="step-section active">
                {{-- Data Diri --}}
                <h1 class="font text-gradient my-6 text-center text-3xl font-semibold max-sm:mx-2 max-sm:text-[29px]">Data
                    Diri</h1>
                <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                    {{-- Nama Lengkap --}}
                    <div class="flex flex-col space-y-1">
                        <p class="text-base text-[#333333]">Nama Lengkap</p>
                        <div class="relative">
                            <input name="nama" required type="text"
                                class="w-full cursor-pointer rounded-lg border-none bg-[#F1F3F6] px-3 py-3 shadow-md focus:ring-[#3986A3] md:shadow-none"
                                placeholder="Budi Berbinar" />
                        </div>
                    </div>
                    {{-- Agama --}}
                    <div class="flex flex-col space-y-1">
                        <p class="text-base text-[#333333]">Agama</p>
                        <div class="relative">
                            <select name="agama"
                                class="dropdown-select w-full cursor-pointer appearance-none rounded-lg border-none bg-[#F1F3F6] px-3 py-3 shadow-md focus:ring-[#3986A3] md:shadow-none">
                                <option value="" disabled selected>Pilih Agama</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                                <option value="Khonghucu">Khonghucu</option>
                            </select>
                            <img src="{{ asset('assets/images/landing/asset-konseling/vector/dropdown.png') }}"
                                class="dropdown-icon pointer-events-none absolute right-5 top-1/2 h-2 w-auto -translate-y-1/2 object-contain transition-transform duration-300" />
                        </div>
                    </div>
                    {{-- Kota Domisili --}}
                    <div class="flex flex-col space-y-1">
                        <p class="text-base text-[#333333]">Tempat Lahir</p>
                        <div class="relative">
                            <input name="tempat_lahir" type="text"
                                class="w-full cursor-pointer rounded-lg border-none bg-[#F1F3F6] px-3 py-3 shadow-md focus:ring-[#3986A3] md:shadow-none"
                                placeholder="Surabaya" />
                        </div>
                    </div>
                    {{-- Tanggal Lahir --}}
                    <div class="flex flex-col space-y-1">
                        <p class="text-base text-[#333333]">Tanggal Lahir</p>
                        <div class="relative">
                            <input name="tanggal_Lahir" autocomplete="off" required type="text" id="tanggal_lahir"
                                class="w-full cursor-pointer rounded-lg border-none bg-[#F1F3F6] px-3 py-3 shadow-md focus:ring-[#3986A3] md:shadow-none"
                                placeholder="dd/mm/yy" readonly />
                            <img src="{{ asset('assets/images/landing/asset-konseling/vector/date.png') }}"
                                class="absolute top-1/3 h-4 w-auto object-contain max-sm:hidden lg:right-5"
                                onclick="document.getElementById('tanggal_lahir').focus()" />
                        </div>
                    </div>
                    {{-- Umur --}}
                    <div class="flex flex-col space-y-1">
                        <p class="text-base text-[#333333]">Umur</p>
                        <div class="relative">
                            <input type="number" step="1" name="umur"
                                class="w-full cursor-pointer rounded-lg border-none bg-[#F1F3F6] px-3 py-3 shadow-md focus:ring-[#3986A3] md:shadow-none"
                                placeholder="21" />
                        </div>
                    </div>
                    {{-- Status Pernikahan --}}
                    <div class="flex flex-col space-y-1">
                        <p class="text-base text-[#333333]">Status Pernikahan</p>
                        <div class="relative">
                            <select name="status_pernikahan"
                                class="dropdown-select w-full cursor-pointer appearance-none rounded-lg border-none bg-[#F1F3F6] px-3 py-3 shadow-md focus:ring-[#3986A3] md:shadow-none">
                                <option value="" disabled selected>Pilih Status</option>
                                <option value="Belum Menikah">Belum Menikah</option>
                                <option value="Sudah Menikah">Sudah Menikah</option>
                            </select>
                            <img src="{{ asset('assets/images/landing/asset-konseling/vector/dropdown.png') }}"
                                class="dropdown-icon pointer-events-none absolute right-5 top-1/2 h-2 w-auto -translate-y-1/2 object-contain transition-transform duration-300" />
                        </div>
                    </div>
                    {{-- Anak ke-dari Berapa Bersaudara --}}
                    <div class="flex flex-col space-y-1">
                        <p class="text-base text-[#333333]">Posisi Anak (Anak ke... dari ... bersaudara)</p>
                        <div class="relative">
                            <input type="text" name="posisi_anak" required
                                class="w-full cursor-pointer rounded-lg border-none bg-[#F1F3F6] px-3 py-3 shadow-md focus:ring-[#3986A3] md:shadow-none"
                                placeholder="Anak ke 2 dari 3 bersaudara" />
                        </div>
                    </div>
                    {{-- Suku --}}
                    <div class="flex flex-col space-y-1">
                        <p class="text-base text-[#333333]">Suku</p>
                        <div class="relative">
                            <input type="text" name="suku" required
                                class="w-full cursor-pointer rounded-lg border-none bg-[#F1F3F6] px-3 py-3 shadow-md focus:ring-[#3986A3] md:shadow-none"
                                placeholder="Jawa" />
                        </div>
                    </div>
                    {{-- Alamat Domisili --}}
                    <div class="flex flex-col space-y-1">
                        <p class="text-base text-[#333333]">Alamat Domisili</p>
                        <div class="relative">
                            <input type="text" name="alamat"
                                class="w-full cursor-pointer rounded-lg border-none bg-[#F1F3F6] px-3 py-3 shadow-md focus:ring-[#3986A3] md:shadow-none"
                                placeholder="Jalan berbinar blok x" />
                        </div>
                    </div>
                    {{-- Kegiatan Sosial --}}
                    <div class="flex flex-col space-y-1">
                        <p class="text-base text-[#333333]">Kegiatan Sosial</p>
                        <div class="relative">
                            <input type="text" name="kegiatan_sosial"
                                class="w-full cursor-pointer rounded-lg border-none bg-[#F1F3F6] px-3 py-3 shadow-md focus:ring-[#3986A3] md:shadow-none"
                                placeholder="Cth: volunteer, organisasi, dll" />
                        </div>
                    </div>
                    {{-- Nomor WhatsApp --}}
                    <div class="flex flex-col space-y-1">
                        <p class="text-base text-[#333333]">Nomor WhatsApp</p>
                        <div class="relative">
                            <input name="no_wa" required type="number"
                                class="w-full cursor-pointer rounded-lg border-none bg-[#F1F3F6] px-3 py-3 shadow-md focus:ring-[#3986A3] md:shadow-none"
                                placeholder="08112345XXXX" />
                        </div>
                    </div>
                    {{-- Hobi --}}
                    <div class="flex flex-col space-y-1">
                        <p class="text-base text-[#333333]">Hobi</p>
                        <div class="relative">
                            <input type="text" name="hobi" required
                                class="w-full cursor-pointer rounded-lg border-none bg-[#F1F3F6] px-3 py-3 shadow-md focus:ring-[#3986A3] md:shadow-none"
                                placeholder="Membaca Buku" />
                        </div>
                    </div>
                    {{-- Email Aktif --}}
                    <div class="flex flex-col space-y-1">
                        <p class="text-base text-[#333333]">Email Aktif</p>
                        <div class="relative">
                            <input name="email" required type="email"
                                class="w-full cursor-pointer rounded-lg border-none bg-[#F1F3F6] px-3 py-3 shadow-md focus:ring-[#3986A3] md:shadow-none"
                                placeholder="BudiSigmaMewing@gmail.com" />
                        </div>
                    </div>
                </div>
                {{-- Riwayat Pendidikan dan Pekerjaan --}}
                <h1 class="font text-gradient my-10 text-center text-3xl font-semibold max-sm:mx-2 max-sm:text-[29px]">
                    Riwayat Pendidikan dan Pekerjaan </h1>
                <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                    {{-- Pekerjaan Saat Ini --}}
                    <div class="flex flex-col space-y-1">
                        <p class="text-base text-[#333333]">Pendidikan Terakhir</p>
                        <div class="relative">
                            <input type="text" name="pendidikan" required
                                class="w-full cursor-pointer rounded-lg border-none bg-[#F1F3F6] px-3 py-3 shadow-md focus:ring-[#3986A3] md:shadow-none"
                                placeholder="Cth: Semester 5 Fakultas Psikologi Universi..." />
                        </div>
                    </div>
                    {{-- Kegiatan Sosial --}}
                    <div class="flex flex-col space-y-1">
                        <p class="text-base text-[#333333]">Riwayat Pekerjaan</p>
                        <div class="relative">
                            <input type="text" name="riwayat_pekerjaan" required
                                class="w-full cursor-pointer rounded-lg border-none bg-[#F1F3F6] px-3 py-3 shadow-md focus:ring-[#3986A3] md:shadow-none"
                                placeholder="Cth: Peer Counselor, Berbinar Insightful Indonesia 2022-2..." />
                        </div>
                    </div>
                </div>
                {{-- Jadwal dan Preferensi Konseling --}}
                <h1 class="font text-gradient my-10 text-center text-3xl font-semibold max-sm:mx-2 max-sm:text-[29px]">
                    Jadwal dan Preferensi Konseling</h1>
                <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                    {{-- Divisi --}}
                    <div class="flex flex-col space-y-1">
                        <p class="text-base text-[#333333]">Divisi</p>
                        <div class="relative">
                            <input type="text" name="divisi" required
                                class="w-full cursor-pointer rounded-lg border-none bg-[#F1F3F6] px-3 py-3 shadow-md focus:ring-[#3986A3] md:shadow-none"
                                placeholder="Web & Mobile Developer" />
                        </div>
                    </div>
                    {{-- Posisi --}}
                    <div class="flex flex-col space-y-1">
                        <p class="text-base text-[#333333]">Posisi</p>
                        <div class="relative">
                            <input type="text" name="posisi" required
                                class="w-full cursor-pointer rounded-lg border-none bg-[#F1F3F6] px-3 py-3 shadow-md focus:ring-[#3986A3] md:shadow-none"
                                placeholder="Front-End Developer" />
                        </div>
                    </div>
                    {{-- Waktu Pengajuan Konseling --}}
                    <div class="flex flex-col space-y-1">
                        <p class="text-base text-[#333333]">Waktu Pengajuan Konseling</p>
                        <div class="relative">
                            <input type="time" name="jadwal_pukul" value="12:00" required
                                class="w-full cursor-pointer rounded-lg border-none bg-[#F1F3F6] px-3 py-3 shadow-md focus:ring-[#3986A3] md:shadow-none" />
                        </div>
                    </div>
                    {{-- Tanggal Pengajuan Konseling --}}
                    <div class="flex flex-col space-y-1">
                        <p class="text-base text-[#333333]">Tanggal Pengajuan Konseling (Min 5 hari setelah
                            pengisian form) </p>
                        <div class="relative">
                            <input name="jadwal_tanggal" autocomplete="off" required type="text" id="tanggal_konseling"
                                class="w-full cursor-pointer rounded-lg border-none bg-[#F1F3F6] px-3 py-3 shadow-md focus:ring-[#3986A3] md:shadow-none"
                                placeholder="dd/mm/yy" readonly />
                            <img src="{{ asset('assets/images/landing/asset-konseling/vector/date.png') }}"
                                class="absolute top-1/3 h-4 w-auto object-contain max-sm:hidden lg:right-5"
                                onclick="document.getElementById('tanggal_lahir').focus()" />
                        </div>
                    </div>
                </div>

                {{-- Kondisi dan Permasalahan --}}
                <h1 class="font text-gradient my-10 text-center text-3xl font-semibold max-sm:mx-2 max-sm:text-[29px]">
                    Kondisi dan Permasalahan
                </h1>

                <div class="flex flex-col space-y-4">
                    {{-- Topik Pengajuan --}}
                    <div class="flex flex-col space-y-1">
                        <p class="text-base text-[#333333]">Topik Pengajuan</p>
                        <div class="relative">
                            <input type="text" name="topik_pengajuan" required
                                class="w-full rounded-lg border-none bg-[#F1F3F6] px-3 py-3 shadow-md focus:ring-[#3986A3] md:shadow-none"
                                placeholder="Cth: Review CV / Overthinking / Insecurities / Kecemasan / DLL" />
                        </div>
                    </div>

                    {{-- Cerita / Permasalahan --}}
                    <div class="flex flex-col space-y-1">
                        <p class="text-base text-[#333333]">Cerita/Permasalahan yang ingin dikonsultasikan</p>
                        <div class="relative">
                            <textarea name="cerita" rows="3" required
                                class="w-full rounded-lg border-none bg-[#F1F3F6] px-3 py-3 shadow-md focus:ring-[#3986A3] md:shadow-none resize-none"
                                placeholder="Mental saya belakangan ini kurang stabil"></textarea>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center items-center pt-10">
                    <button type="submit"
                        class="text-xl md:text-2xl rounded-xl bg-gradient-to-r from-[#3986A3] to-[#15323D] md:px-[177px] md:py-3 font-medium px-[136px] py-[10px] text-white"
                        >Kirim</button>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('script')
    <script>
        // Modal Syarat & Ketentuan
        ['openModal', 'openModal2', 'openModal3'].forEach(id => {
            document.getElementById(id)?.addEventListener('click', function() {
                document.getElementById('modal').classList.remove('hidden');
            });
        });
        document.getElementById('closeModal').addEventListener('click', function() {
            document.getElementById('modal').classList.add('hidden');
        });

        // Validasi Email & Nomor HP
        function isValidEmail(email) {
            return /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(email);
        }
        function isValidPhoneNumber(number) {
            return /^(\+62|62|0)8[1-9][0-9]{6,11}$/.test(number);
        }

        // Validasi Submit Form Tunggal
        document.getElementById('singleForm').addEventListener('submit', function(event) {
            const requiredFields = [
                'jadwal_tanggal', 'jadwal_pukul',
                'nama', 'email', 'tanggal_Lahir', 'tempat_lahir', 'alamat', 'umur', 'agama', 'status_pernikahan',
                'no_wa', 'suku', 'posisi_anak', 'hobi',
                'pendidikan', 'riwayat_pekerjaan', 'kegiatan_sosial', 'divisi', 'posisi',
                'topik_pengajuan', 'cerita'
            ];

            for (let fieldName of requiredFields) {
                const field = document.querySelector(`[name="${fieldName}"]`);
                if (!field || field.value.trim() === '') {
                    event.preventDefault();
                    Swal.fire({
                        toast: true,
                        position: "top-end",
                        icon: "error",
                        title: `Anda belum mengisi "${getFieldLabel(fieldName)}"`,
                        showConfirmButton: false,
                        timer: 4000
                    });
                    return;
                }
                if (fieldName === 'email' && !isValidEmail(field.value)) {
                    event.preventDefault();
                    Swal.fire({
                        toast: true,
                        position: "top-end",
                        icon: "error",
                        title: 'Format Email tidak valid :(',
                        showConfirmButton: false,
                        timer: 4000
                    });
                    return;
                }
                if (fieldName === 'no_wa' && !isValidPhoneNumber(field.value)) {
                    event.preventDefault();
                    Swal.fire({
                        toast: true,
                        position: "top-end",
                        icon: "error",
                        title: 'Format Nomor WhatsApp tidak valid :(',
                        showConfirmButton: false,
                        timer: 4000
                    });
                    return;
                }
            }
        });

        // Helper ambil label field
        function getFieldLabel(fieldName) {
            const field = document.querySelector(`[name="${fieldName}"]`);
            if (field) {
                const container = field.closest('.flex.flex-col.space-y-1');
                if (container) {
                    const label = container.querySelector('p');
                    if (label) return label.textContent.trim();
                }
            }
            return fieldName.replace(/_/g, ' ');
        }

        // Datepicker
        document.addEventListener("DOMContentLoaded", function() {
            flatpickr("#tanggal_konseling", {
                dateFormat: "d/m/Y",
                allowInput: true,
                minDate: new Date().fp_incr(7),
            });
            flatpickr("#tanggal_lahir", {
                dateFormat: "d/m/Y",
                allowInput: true,
            });
        });

        // Error handling backend
        @if (session('error'))
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
