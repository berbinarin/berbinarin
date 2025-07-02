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
        <a href="{{ route('product.counseling.schedule') }}">
            <div class="flex items-center space-x-2 cursor-pointer">
                <img src="{{ asset('assets/images/landing/asset-konseling/vector/left-arrow.svg') }}" alt="Left Arrow" class="h-3 w-auto">
                <p class="text-[15px] flex font-semibold text-[#3986A3]">Kembali <span class="sm:block hidden ml-0.5">pilih jadwal</span></p>
            </div>
        </a>

        <div class="flex items-center space-x-1 cursor-pointer" id="openModal">
            <img src="{{ asset('assets/images/landing/asset-konseling/vector/sk-vector.png') }}" alt="Syarat & Ketentuan" class="h-3 w-auto">
            <p class="text-[15px] font-semibold text-[#3986A3]"><span class="sm:block hidden">Syarat & Ketentuan</span><span class="sm:hidden block">S&K</span></p>
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
                </div>
            </div>
        </div>
    </div>

    <h1 class="max-sm:text-[29px] text-3xl font font-semibold text-center max-sm:mx-2 text-gradient my-6">Data Diri</h1>
<form action="{{ route('product.counseling.submit_personal_data') }}" method="POST">
    @csrf
    <div class="grid md:grid-cols-2 grid-cols-1 gap-4">
        <div class="flex flex-col space-y-1">
            <p class="text-[#333333] sm:text-[17px] text-sm">Nama Lengkap</p>
            <div class="relative">
                <input name="nama" value="{{ old('nama', $personal['nama'] ?? '') }}" required type="text" class="bg-[#F1F3F6] md:shadow-none shadow-md border-none rounded-lg w-full px-3 py-3 cursor-pointer focus:ring-[#3986A3]" placeholder="Budi Berbinar">
            </div>
        </div>

        <div class="flex flex-col space-y-1">
            <p class="text-[#333333] sm:text-[17px] text-sm">Email Aktif</p>
            <div class="relative">
                <input name="email" value="{{ old('email', $personal['email'] ?? '') }}" required type="email" class="bg-[#F1F3F6] md:shadow-none shadow-md border-none rounded-lg w-full px-3 py-3 cursor-pointer focus:ring-[#3986A3]" placeholder="email.anda@gmail.com">
            </div>
        </div>

        <div class="flex flex-col space-y-1">
            <p class="text-[#333333] sm:text-[17px] text-sm">Tanggal Lahir</p>
            <div class="relative">
                <input name="tanggal_lahir" value="{{ old('tanggal_lahir', isset($personal['tanggal_lahir']) ? \Carbon\Carbon::parse($personal['tanggal_lahir'])->format('d/m/Y') : '') }}"
                autocomplete="off" required type="text" id="tanggal_lahir" class="bg-[#F1F3F6] border-none md:shadow-none shadow-md rounded-lg w-full px-3 py-3 cursor-pointer focus:ring-[#3986A3]" placeholder="dd/mm/yy" readonly>
                <img src="{{ asset('assets/images/landing/asset-konseling/vector/date.png') }}" class="h-4 w-auto object-contain absolute lg:right-5 top-1/3 max-sm:hidden" onclick="document.getElementById('tglkonseling').focus()">
            </div>
        </div>

        <div class="flex flex-col space-y-1">
            <p class="text-[#333333] sm:text-[17px] text-sm">Kota Domisili</p>
            <div class="relative">
                <input name="tempat_lahir" value="{{ old('tempat_lahir', $personal['tempat_lahir'] ?? '') }}" type="text" class="bg-[#F1F3F6] md:shadow-none shadow-md border-none rounded-lg w-full px-3 py-3 cursor-pointer focus:ring-[#3986A3]" placeholder="Surabaya">
            </div>
        </div>

        <div class="flex flex-col space-y-1">
            <p class="text-[#333333] sm:text-[17px] text-sm">Alamat Domisili</p>
            <div class="relative">
                <input type="text" name="alamat" value="{{ old('alamat', $personal['alamat'] ?? '') }}" class="bg-[#F1F3F6] md:shadow-none shadow-md border-none rounded-lg w-full px-3 py-3 cursor-pointer focus:ring-[#3986A3]" placeholder="Jalan berbinar blok x">
            </div>
        </div>

        <div class="flex flex-col space-y-1">
            <p class="text-[#333333] sm:text-[17px] text-sm">Status Pernikahan</p>
            <div class="relative">
                <select name="status_pernikahan" class="dropdown-select bg-[#F1F3F6] md:shadow-none shadow-md border-none rounded-lg w-full px-3 py-3 cursor-pointer focus:ring-[#3986A3] appearance-none">
                    <option value="" disabled {{ !isset($personal['status_pernikahan']) ? 'selected' : '' }}>Pilih Status</option>
                    <option value="Belum Menikah" {{ (old('status_pernikahan', $personal['status_pernikahan'] ?? '') == 'Belum Menikah') ? 'selected' : '' }}>Belum Menikah</option>
                    <option value="Sudah Menikah" {{ (old('status_pernikahan', $personal['status_pernikahan'] ?? '') == 'Sudah Menikah') ? 'selected' : '' }}>Sudah Menikah</option>
                </select>
                <img src="{{ asset('assets/images/landing/asset-konseling/vector/dropdown.png') }}" class="dropdown-icon h-2 w-auto object-contain absolute right-5 top-1/2 -translate-y-1/2 pointer-events-none transition-transform duration-300">
            </div>
        </div>

        <div class="flex flex-col space-y-1">
            <p class="text-[#333333] sm:text-[17px] text-sm">Jenis Kelamin</p>
            <div class="relative">
                <select name="jenis_kelamin" class="dropdown-select bg-[#F1F3F6] md:shadow-none shadow-md border-none rounded-lg w-full px-3 py-3 cursor-pointer focus:ring-[#3986A3] appearance-none">
                    <option value="" disabled {{ !isset($personal['jenis_kelamin']) ? 'selected' : '' }}>Pilih Jenis Kelamin</option>
                    <option value="laki-laki" {{ (old('jenis_kelamin', $personal['jenis_kelamin'] ?? '') == 'laki-laki') ? 'selected' : '' }}>Laki-laki</option>
                    <option value="perempuan" {{ (old('jenis_kelamin', $personal['jenis_kelamin'] ?? '') == 'perempuan') ? 'selected' : '' }}>Perempuan</option>
                </select>
                <img src="{{ asset('assets/images/landing/asset-konseling/vector/dropdown.png') }}" class="dropdown-icon h-2 w-auto object-contain absolute right-5 top-1/2 -translate-y-1/2 pointer-events-none transition-transform duration-300">
            </div>
        </div>

        <div class="flex flex-col space-y-1">
            <p class="text-[#333333] sm:text-[17px] text-sm">Nomor WhatsApp</p>
            <div class="relative">
                <input name="no_wa" value="{{ old('no_wa', $personal['no_wa'] ?? '') }}" required type="number" class="bg-[#F1F3F6] md:shadow-none shadow-md border-none rounded-lg w-full px-3 py-3 cursor-pointer focus:ring-[#3986A3]" placeholder="08112345XXXX">
            </div>
        </div>

        <div class="flex flex-col space-y-1">
            <p class="text-[#333333] sm:text-[17px] text-sm">Suku</p>
            <div class="relative">
                <input type="text" name="suku" value="{{ old('suku', $personal['suku'] ?? '') }}" required class="bg-[#F1F3F6] md:shadow-none shadow-md border-none rounded-lg w-full px-3 py-3 cursor-pointer focus:ring-[#3986A3]" placeholder="Jawa">
            </div>
        </div>

        <div class="flex flex-col space-y-1">
            <p class="text-[#333333] sm:text-[17px] text-sm">Agama</p>
            <div class="relative">
                <select name="agama" class="dropdown-select bg-[#F1F3F6] md:shadow-none shadow-md border-none rounded-lg w-full px-3 py-3 cursor-pointer focus:ring-[#3986A3] appearance-none">
                    <option value="" disabled {{ !isset($personal['agama']) ? 'selected' : '' }}>Pilih Agama</option>
                    <option value="Islam" {{ (old('agama', $personal['agama'] ?? '') == 'Islam') ? 'selected' : '' }}>Islam</option>
                    <option value="Kristen" {{ (old('agama', $personal['agama'] ?? '') == 'Kristen') ? 'selected' : '' }}>Kristen</option>
                    <option value="Katolik" {{ (old('agama', $personal['agama'] ?? '') == 'Katolik') ? 'selected' : '' }}>Katolik</option>
                    <option value="Hindu" {{ (old('agama', $personal['agama'] ?? '') == 'Hindu') ? 'selected' : '' }}>Hindu</option>
                    <option value="Budha" {{ (old('agama', $personal['agama'] ?? '') == 'Budha') ? 'selected' : '' }}>Budha</option>
                    <option value="Khonghucu" {{ (old('agama', $personal['agama'] ?? '') == 'Khonghucu') ? 'selected' : '' }}>Khonghucu</option>

                </select>
                <img src="{{ asset('assets/images/landing/asset-konseling/vector/dropdown.png') }}" class="dropdown-icon h-2 w-auto object-contain absolute right-5 top-1/2 -translate-y-1/2 pointer-events-none transition-transform duration-300">
            </div>
        </div>

        <div class="flex flex-col space-y-1">
            <p class="text-[#333333] sm:text-[17px] text-sm">Anak ke-dari Berapa Bersaudara</p>
            <div class="relative">
                <input type="text" name="posisi_anak" value="{{ old('posisi_anak', $personal['posisi_anak'] ?? '') }}" required class="bg-[#F1F3F6] md:shadow-none shadow-md border-none rounded-lg w-full px-3 py-3 cursor-pointer focus:ring-[#3986A3]" placeholder="Anak ke 2 dari 3 bersaudara">
            </div>
        </div>

        <div class="flex flex-col space-y-1">
            <p class="text-[#333333] sm:text-[17px] text-sm">Hobi</p>
            <div class="relative">
                <input type="text" name="hobi" value="{{ old('hobi', $personal['hobi'] ?? '') }}" required class="bg-[#F1F3F6] md:shadow-none shadow-md border-none rounded-lg w-full px-3 py-3 cursor-pointer focus:ring-[#3986A3]" placeholder="Membaca Buku">
            </div>
        </div>
    </div>

    <h1 class="max-sm:text-[29px] text-3xl font font-semibold text-center max-sm:mx-2 text-gradient my-10">Riwayat Pendidikan</h1>

    <div class="grid md:grid-cols-2 grid-cols-1 gap-4">
        <div class="flex flex-col space-y-1">
            <p class="text-[#333333] sm:text-[17px] text-sm">Pendidikan Terakhir</p>
            <div class="relative">
                <select name="pendidikan" required class="dropdown-select bg-[#F1F3F6] md:shadow-none shadow-md border-none rounded-lg w-full px-3 py-3 cursor-pointer focus:ring-[#3986A3] appearance-none">
                    <option value="" disabled {{ !isset($personal['pendidikan']) ? 'selected' : '' }}>Pilih Pendidikan Terakhir</option>
                    <option value="S1/D4 - Sarjana" {{ (old('pendidikan', $personal['pendidikan'] ?? '') == 'S1/D4 - Sarjana') ? 'selected' : '' }}>S1/D4 - Sarjana</option>
                    <option value="D3 - Diploma" {{ (old('pendidikan', $personal['pendidikan'] ?? '') == 'D3 - Diploma') ? 'selected' : '' }}>D3 - Diploma</option>
                    <option value="SMA/SMK" {{ (old('pendidikan', $personal['pendidikan'] ?? '') == 'SMA/SMK') ? 'selected' : '' }}>SMA/SMK</option>
                    <option value="SMP" {{ (old('pendidikan', $personal['pendidikan'] ?? '') == 'SMP') ? 'selected' : '' }}>SMP</option>
                    <option value="SD" {{ (old('pendidikan', $personal['pendidikan'] ?? '') == 'SD') ? 'selected' : '' }}>SD</option>
                </select>
                <img src="{{ asset('assets/images/landing/asset-konseling/vector/dropdown.png') }}" class="dropdown-icon h-2 w-auto object-contain absolute right-5 top-1/2 -translate-y-1/2 pointer-events-none transition-transform duration-300">
            </div>
        </div>

        <div class="flex flex-col space-y-1">
            <p class="text-[#333333] sm:text-[17px] text-sm">Asal Sekolah/Universitas</p>
            <div class="relative">
                <input type="text" name="asal_sekolah" value="{{ old('asal_sekolah', $personal['asal_sekolah'] ?? '') }}" required class="bg-[#F1F3F6] md:shadow-none shadow-md border-none rounded-lg w-full px-3 py-3 cursor-pointer focus:ring-[#3986A3]" placeholder="Universitas Berbinar">
            </div>
        </div>

        <div class="flex flex-col space-y-1">
            <p class="text-[#333333] sm:text-[17px] text-sm">Pekerjaan Saat Ini</p>
            <div class="relative">
                <input type="text" name="riwayat_pekerjaan" value="{{ old('riwayat_pekerjaan', $personal['riwayat_pekerjaan'] ?? '') }}" required class="bg-[#F1F3F6] md:shadow-none shadow-md border-none rounded-lg w-full px-3 py-3 cursor-pointer focus:ring-[#3986A3]" placeholder="Karyawan Swasta">
            </div>
        </div>

        <div class="flex flex-col space-y-1">
            <p class="text-[#333333] sm:text-[17px] text-sm">Kegiatan Sosial yang Pernah/Sedang diikuti</p>
            <div class="relative">
                <input type="text" name="kegiatan_sosial" value="{{ old('kegiatan_sosial', $personal['kegiatan_sosial'] ?? '') }}" required class="bg-[#F1F3F6] md:shadow-none shadow-md border-none rounded-lg w-full px-3 py-3 cursor-pointer focus:ring-[#3986A3]" placeholder="Pengabdian Pemuda Masyarakat">
            </div>
        </div>
    </div>

    <div class="flex justify-center items-center pt-10">
        <div class="w-full flex justify-center">
            <button type="submit" class="text-white bg-gradient-to-r max-sm:text-[15px] text-md from-[#3986A3] to-[#225062] py-2 px-24 sm:w-auto w-full rounded-xl">Selanjutnya</button>
        </div>
    </div>
</form>
</div>

@if ($errors->any())
    <div style="color: red; margin-bottom: 1em;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<script>
    document.addEventListener("DOMContentLoaded", function () {
        flatpickr("#tanggal_lahir", {
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
