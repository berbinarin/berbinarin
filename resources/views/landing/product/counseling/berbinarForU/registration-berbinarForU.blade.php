@extends(
    "landing.layouts.app",
    [
        "title" => "Berbinar Insightful Indonesia",
        "active" => "Produk Berbinar",
        "page" => "Registrasi BerbinarForU",
    ]
)

@section('style')
    <style>
        .step-section {
            display: none;
        }
        .step-section.active {
            display: block;
        }

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
@endsection

@section("content")
    <div class="mx-4 mb-8 mt-24 flex flex-col justify-center rounded-2xl bg-none px-12 py-6 shadow-none max-md:px-1 sm:mx-24 sm:mb-20 sm:mt-36 md:bg-white md:shadow-lg">
        <div class="flex flex-row justify-between" id="step-1-header">
            <a href="{{ route("product.counseling.peer-counselor.registration") }}">
                <div class="flex cursor-pointer items-center space-x-2">
                    <img src="{{ asset("assets/images/landing/asset-konseling/vector/left-arrow.webp") }}" alt="Left Arrow" class="h-3 w-auto" />
                    <p class="flex text-[15px] font-semibold text-[#3986A3]">
                        Kembali
                        <span class="ml-0.5 hidden sm:block">pilih konseling</span>
                    </p>
                </div>
            </a>

            <div class="flex cursor-pointer items-center space-x-1" id="openModal">
                <img src="{{ asset("assets/images/landing/asset-konseling/vector/sk-vector.webp") }}" alt="Syarat & Ketentuan" class="h-3 w-auto" />
                <p class="text-[15px] font-semibold text-[#3986A3]">
                    <span class="hidden sm:block">Syarat & Ketentuan</span>
                    <span class="block sm:hidden">S&K</span>
                </p>
            </div>
        </div>

        <div class="flex flex-row justify-between" id="step-2-header" style="display: none">
            <div class="flex cursor-pointer items-center space-x-2" onclick="prevStep(1)">
                <img src="{{ asset("assets/images/landing/asset-konseling/vector/left-arrow.webp") }}" alt="Left Arrow" class="h-3 w-auto" />
                <p class="flex text-[15px] font-semibold text-[#3986A3]">
                    Kembali
                    <span class="ml-0.5 hidden sm:block">isi data diri</span>
                </p>
            </div>

            <div class="flex cursor-pointer items-center space-x-1" id="openModal2">
                <img src="{{ asset("assets/images/landing/asset-konseling/vector/sk-vector.webp") }}" alt="Syarat & Ketentuan" class="h-3 w-auto" />
                <p class="text-[15px] font-semibold text-[#3986A3]">
                    <span class="hidden sm:block">Syarat & Ketentuan</span>
                    <span class="block sm:hidden">S&K</span>
                </p>
            </div>
        </div>

        <div id="modal" class="fixed inset-0 z-30 hidden items-center justify-center bg-gray-900 bg-opacity-50 backdrop-blur-md">
            <div class="h-auto max-h-screen w-[70%] overflow-y-auto rounded-2xl bg-white p-6 shadow-md max-lg:h-[90%] max-sm:w-[86%] max-sm:px-2">
                <h1 class="bg-gradient-to-r from-amber-400 to-yellow-700 bg-clip-text pb-4 text-center text-3xl font-bold text-transparent max-sm:text-2xl">Syarat dan Ketentuan</h1>
                <div class="mb-6">
                    <div class="flex items-start gap-2">
                        <img src="{{ asset("assets/images/landing/asset-konseling/vector/payment.webp") }}" alt="Pembayaran" class="mt-0.5 h-5 w-5" />
                        <span class="font-semibold">Pembayaran</span>
                    </div>
                    <ul class="mt-1 list-disc space-y-1 pl-7">
                        <li class="max-sm:text-sm">BerbinarForU merupakan program gratis dari Berbinar Insightful Indonesia.</li>
                    </ul>
                </div>

                <div class="mb-6">
                    <div class="flex items-start gap-2">
                        <img src="{{ asset("assets/images/landing/asset-konseling/vector/chat.webp") }}" alt="Pembalasan Pesan" class="mt-0.5 h-5 w-5" />
                        <span class="font-semibold">Pembalasan Pesan</span>
                    </div>
                    <ul class="mt-1 list-disc space-y-1 pl-7">
                        <li class="max-sm:text-sm">Tidak membalas pesan admin dalam 1×24 jam, pendaftaran oleh klien secara otomatis dibatalkan.</li>
                        <li class="max-sm:text-sm">Tidak membalas pesan admin dalam 1×24 jam, jadwal yang sudah ditentukan oleh klien berhak untuk diubah oleh Tim Berbinar dan kesepakatan dari klien.</li>
                    </ul>
                </div>

                <div class="mb-6">
                    <div class="flex items-start gap-2">
                        <img src="{{ asset("assets/images/landing/asset-konseling/vector/cancel.webp") }}" alt="Pengajuan Pembatalan" class="mt-0.5 h-5 w-5" />
                        <span class="font-semibold">Pengajuan Pembatalan</span>
                    </div>
                    <ul class="mt-1 list-disc space-y-1 pl-7">
                        <li class="max-sm:text-sm">Pengajuan proses pembatalan layanan konseling dapat dilakukan dalam kurun waktu 1×24 jam setelah konfirmasi pendaftaran.</li>
                    </ul>
                </div>

                <div class="mt-4 flex justify-center lg:gap-x-3">
                    <button id="closeModal" class="text-md w-full rounded-xl bg-gradient-to-r from-[#3986A3] to-[#225062] px-24 py-2 text-white max-sm:text-[15px] sm:w-auto">Saya Mengerti</button>
                </div>
            </div>
        </div>

        <form id="multiStepForm" action="{{ route("product.counseling.berbinar-for-u.store") }}" method="POST" class="flex flex-col">
            @csrf

            {{-- STEP 1: Isi Data Diri --}}
            <div id="step-1" class="step-section active">
                <h1 class="font text-gradient my-6 text-center text-3xl font-semibold max-sm:mx-2 max-sm:text-[29px]">Data Diri</h1>
                <input type="hidden" name="kategori" value="berbinar-for-u" />
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
                            <input name="tanggal_lahir" autocomplete="off" required type="text" id="tanggal_lahir" class="w-full cursor-pointer rounded-lg border-none bg-[#F1F3F6] px-3 py-3 shadow-md focus:ring-[#3986A3] md:shadow-none" placeholder="dd/mm/yy" readonly />
                            <img src="{{ asset("assets/images/landing/asset-konseling/vector/date.webp") }}" class="absolute top-1/3 h-4 w-auto object-contain max-sm:hidden lg:right-5" onclick="document.getElementById('tanggal_lahir').focus()" />
                        </div>
                    </div>
                    {{-- Tempat Lahir --}}
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
                            <img src="{{ asset("assets/images/landing/asset-konseling/vector/dropdown.webp") }}" class="dropdown-icon pointer-events-none absolute right-5 top-1/2 h-2 w-auto -translate-y-1/2 object-contain transition-transform duration-300" />
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
                            <img src="{{ asset("assets/images/landing/asset-konseling/vector/dropdown.webp") }}" class="dropdown-icon pointer-events-none absolute right-5 top-1/2 h-2 w-auto -translate-y-1/2 object-contain transition-transform duration-300" />
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
                            <img src="{{ asset("assets/images/landing/asset-konseling/vector/dropdown.webp") }}" class="dropdown-icon pointer-events-none absolute right-5 top-1/2 h-2 w-auto -translate-y-1/2 object-contain transition-transform duration-300" />
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
                            <img src="{{ asset("assets/images/landing/asset-konseling/vector/dropdown.webp") }}" class="dropdown-icon pointer-events-none absolute right-5 top-1/2 h-2 w-auto -translate-y-1/2 object-contain transition-transform duration-300" />
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
                <div class="flex items-center justify-center pt-10">
                    <button type="button" class="text-md w-full rounded-xl bg-gradient-to-r from-[#3986A3] to-[#225062] px-24 py-2 text-white max-sm:text-[15px] sm:w-auto" onclick="nextStep(2)">Selanjutnya</button>
                </div>
            </div>

            {{-- STEP 2: Cerita Konseling --}}
            <div id="step-2" class="step-section">
                <h1 class="font text-gradient my-6 text-center text-3xl font-semibold max-sm:mx-2 max-sm:text-[29px]">Mari Cerita</h1>
                <div class="flex flex-col">
                    <div class="mb-10">
                        <p class="mb-3 text-sm text-[#333333] sm:text-[17px]">Tuliskan Apa yang Ingin Anda Ceritakan</p>
                        <div class="relative">
                            <textarea name="cerita_utama" class="h-36 w-full cursor-pointer resize-none rounded-lg border-none bg-[#F1F3F6] px-3 pt-3 text-start shadow-md focus:ring-[#3986A3] md:shadow-none" placeholder="Tidak ada minimum/batas jumlah kata"></textarea>
                        </div>
                    </div>
                    <div class="mb-10">
                        <p class="mb-3 text-sm text-[#333333] sm:text-[17px]">
                            Tuliskan informasi tambahan mengenai kondisi yang anda alami yang sekiranya dapat membantu
                            <span class="italic">Peer Counselor</span>
                            untuk lebih memahami anda
                        </p>
                        <div class="relative">
                            <textarea name="cerita_tambahan" class="h-36 w-full cursor-pointer resize-none rounded-lg border-none bg-[#F1F3F6] px-3 pt-3 text-start shadow-md focus:ring-[#3986A3] md:shadow-none" placeholder="Tidak ada minimum/batas jumlah kata"></textarea>
                        </div>
                    </div>
                    <div class="mb-10">
                        <p class="mb-3 text-sm text-[#333333] sm:text-[17px]">
                            Apa yang mendorong anda untuk mencari dukungan dari
                            <span class="italic">Peer Counselor</span>
                        </p>
                        <div class="relative">
                            <textarea name="alasan_konseling" class="h-36 w-full cursor-pointer resize-none rounded-lg border-none bg-[#F1F3F6] px-3 pt-3 text-start shadow-md focus:ring-[#3986A3] md:shadow-none" placeholder="Tidak ada minimum/batas jumlah kata"></textarea>
                        </div>
                    </div>
                    <div class="mb-10">
                        <p class="mb-3 text-sm text-[#333333] sm:text-[17px]">Harapan yang diinginkan setelah melakukan konseling</p>
                        <div class="relative">
                            <textarea name="harapan_konseling" class="h-36 w-full cursor-pointer resize-none rounded-lg border-none bg-[#F1F3F6] px-3 pt-3 text-start shadow-md focus:ring-[#3986A3] md:shadow-none" placeholder="Tidak ada minimum/batas jumlah kata"></textarea>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-center pt-10">
                    <div class="flex w-full justify-center">
                        <button type="submit" class="text-md w-full rounded-xl bg-gradient-to-r from-[#3986A3] to-[#225062] px-24 py-2 text-white max-sm:text-[15px] sm:w-auto">Kirim</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- Error handling Jika data gagal di simpan ke DB --}}
    @if (session("error"))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: '{{ session("error") }}',
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                showCloseButton: true,
                timer: 4000,
            });
        </script>
    @endif

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
            const requiredFields = ['nama', 'email', 'tanggal_lahir', 'tempat_lahir', 'alamat', 'status_pernikahan', 'jenis_kelamin', 'no_wa', 'suku', 'agama', 'posisi_anak', 'hobi', 'pendidikan', 'asal_sekolah', 'riwayat_pekerjaan', 'kegiatan_sosial'];

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

        function validateStep2() {
            const requiredFields = ['cerita_utama', 'cerita_tambahan', 'alasan_konseling', 'harapan_konseling'];

            for (let fieldName of requiredFields) {
                const field = document.querySelector(`[name="${fieldName}"]`);
                if (!field || field.value.trim() === '') {
                    return '"' + getFieldLabel(fieldName) + '" belum diisi : (';
                }
            }
            return null;
        }

        function nextStep(step) {
            let errorMessage = null;

            if (step === 2) {
                errorMessage = validateStep1();
            }

            if (errorMessage) {
                Swal.fire({
                    toast: true,
                    position: 'top-end',
                    icon: 'error',
                    title: errorMessage,
                    showConfirmButton: false,
                    showCloseButton: true,
                    timer: 4000,
                });
                return;
            }

            showStep(step);
        }

        function prevStep(step) {
            showStep(step);
        }

        // Validasi pengiriman formulir
        document.getElementById('multiStepForm').addEventListener('submit', function (event) {
            event.preventDefault();

            const errorMessage = validateStep2();
            if (errorMessage) {
                Swal.fire({
                    toast: true,
                    position: 'top-end',
                    icon: 'error',
                    title: errorMessage,
                    showConfirmButton: false,
                    showCloseButton: true,
                    timer: 4000,
                });
                return;
            }

            // Jika validasi berhasil, baru kirim formulir
            this.submit();
        });

        // Flatpickr for tanggal lahir
        document.addEventListener('DOMContentLoaded', function () {
            flatpickr('#tanggal_lahir', {
                dateFormat: 'd/m/Y',
                allowInput: true,
            });
        });

        // Dropdown icon rotate
        document.querySelectorAll('.dropdown-select').forEach((select, index) => {
            const icon = document.querySelectorAll('.dropdown-icon')[index];
            select.addEventListener('click', function () {
                icon.classList.toggle('rotate-180');
            });
            select.addEventListener('blur', function () {
                icon.classList.remove('rotate-180');
            });
        });

        // Modal functionality for all steps
        document.getElementById('openModal').addEventListener('click', function () {
            const modal = document.getElementById('modal');
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        });

        document.getElementById('openModal2').addEventListener('click', function () {
            const modal = document.getElementById('modal');
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        });

        document.getElementById('closeModal').addEventListener('click', function () {
            const modal = document.getElementById('modal');
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        });
    </script>
@endsection
