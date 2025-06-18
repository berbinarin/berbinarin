@extends('dashboard.layouts.app', [
    'title' => 'Edit Data Psikolog',
    'modul' => 'Psikolog Data',
])

@section('content')
<section class="flex w-full">
    <div class="flex w-full flex-col">
        <div class="py-4 md:pb-7 md:pt-12">
            <div class="mb-2 flex items-center gap-2">
                <a href="{{ route('dashboard.psychologists.index') }}">
                    <img src="{{ asset('assets/images/dashboard/svg-icon/dashboard-back.png') }}" alt="Back Btn" />
                </a>
                <p class="text-base font-bold leading-normal text-gray-800 sm:text-lg md:text-2xl lg:text-4xl">Edit Data Psikolog</p>
            </div>
            <p class="w-3/4 text-disabled">
                Halaman yang digunakan untuk mengedit, mengelola, dan melengkapi seluruh data pribadi, latar belakang, serta informasi penting lainnya dari psikolog secara detail untuk keperluan administrasi dan monitoring.
            </p>
        </div>
        <div class="rounded-md bg-white px-4 py-4 shadow-lg shadow-gray-400 md:px-8 md:py-7 xl:px-10">
            <form action="{{ route('dashboard.psychologists.update', $PsikologDataDetails[0]->id) }}" method="POST">
                @csrf
                @method('PUT')

                <!-- Data Diri -->
                <h1 class="mb-6 text-center text-2xl font-bold">Data Diri</h1>
                <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                    <div>
                        <label class="font-semibold">Nama Lengkap</label>
                        <input required type="text" name="nama" value="{{ $PsikologDataDetails[0]->nama }}" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Masukkan Nama Lengkap" />
                    </div>
                    <div>
                        <label class="font-semibold">Nomor WhatsApp</label>
                        <input required type="number" name="no_wa" value="{{ $PsikologDataDetails[0]->no_wa }}" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Masukkan Nomor WhatsApp" />
                    </div>
                    <div>
                        <label class="font-semibold">Email</label>
                        <input required type="email" name="email" value="{{ $PsikologDataDetails[0]->email }}" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Masukkan Email" />
                    </div>
                    <div>
                        <label class="font-semibold">Jenis Kelamin</label>
                        <select required name="jenis_kelamin" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm">
                            <option value="" disabled>Pilih Jenis Kelamin</option>
                            <option value="laki-laki" {{ $PsikologDataDetails[0]->jenis_kelamin == 'laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                            <option value="perempuan" {{ $PsikologDataDetails[0]->jenis_kelamin == 'perempuan' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                    </div>
                    <div>
                        <label class="font-semibold">Tanggal Lahir</label>
                        <input required type="text" id="tgllahir" name="tanggal_lahir"
                            value="{{ \Carbon\Carbon::parse($PsikologDataDetails[0]->tanggal_lahir)->format('d/m/Y') }}"
                            class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="dd/mm/yy" readonly/>
                    </div>
                    <div>
                        <label class="font-semibold">Tempat Lahir</label>
                        <input required type="text" name="tempat_lahir" value="{{ $PsikologDataDetails[0]->tempat_lahir }}" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Masukkan Tempat Lahir" />
                    </div>
                    <div>
                        <label class="font-semibold">Agama</label>
                        <select required name="agama" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm">
                            <option value="" disabled>Pilih Agama</option>
                            <option value="Islam" {{ $PsikologDataDetails[0]->agama == 'Islam' ? 'selected' : '' }}>Islam</option>
                            <option value="Kristen" {{ $PsikologDataDetails[0]->agama == 'Kristen' ? 'selected' : '' }}>Kristen</option>
                            <option value="Katolik" {{ $PsikologDataDetails[0]->agama == 'Katolik' ? 'selected' : '' }}>Katolik</option>
                            <option value="Hindu" {{ $PsikologDataDetails[0]->agama == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                            <option value="Budha" {{ $PsikologDataDetails[0]->agama == 'Budha' ? 'selected' : '' }}>Budha</option>
                            <option value="Khonghucu" {{ $PsikologDataDetails[0]->agama == 'Khonghucu' ? 'selected' : '' }}>Khonghucu</option>
                        </select>
                    </div>
                    <div>
                        <label class="font-semibold">Suku</label>
                        <input required type="text" name="suku" value="{{ $PsikologDataDetails[0]->suku }}" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Contoh: Jawa" />
                    </div>
                    <div>
                        <label class="font-semibold">Status Pernikahan</label>
                        <select required name="status_pernikahan" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm">
                            <option value="" disabled>Pilih Status Pernikahan</option>
                            <option value="Belum Menikah" {{ $PsikologDataDetails[0]->status_pernikahan == 'Belum Menikah' ? 'selected' : '' }}>Belum Menikah</option>
                            <option value="Sudah Menikah" {{ $PsikologDataDetails[0]->status_pernikahan == 'Sudah Menikah' ? 'selected' : '' }}>Sudah Menikah</option>
                        </select>
                    </div>
                    <div>
                        <label class="font-semibold">Alamat Domisili</label>
                        <input required type="text" name="alamat" value="{{ $PsikologDataDetails[0]->alamat }}" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Masukkan Alamat Domisili" />
                    </div>
                    <div>
                        <label class="font-semibold">Anak ke-</label>
                        <input required type="text" name="posisi_anak" value="{{ $PsikologDataDetails[0]->posisi_anak }}" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Anak ke-x dari x bersaudara" />
                    </div>
                    <div>
                        <label class="font-semibold">Pendidikan Terakhir</label>
                        <select required name="pendidikan" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm">
                            <option value="" disabled>Pilih Pendidikan Terakhir</option>
                            <option value="S1/D4 - Sarjana" {{ old('pendidikan', $PsikologDataDetails[0]->pendidikan ?? '') == 'S1/D4 - Sarjana' ? 'selected' : '' }}>S1/D4 - Sarjana</option>
                            <option value="D3 - Diploma" {{ old('pendidikan', $PsikologDataDetails[0]->pendidikan ?? '') == 'D3 - Diploma' ? 'selected' : '' }}>D3 - Diploma</option>
                            <option value="SMA/SMK" {{ old('pendidikan', $PsikologDataDetails[0]->pendidikan ?? '') == 'SMA/SMK' ? 'selected' : '' }}>SMA/SMK</option>
                            <option value="SMP" {{ old('pendidikan', $PsikologDataDetails[0]->pendidikan ?? '') == 'SMP' ? 'selected' : '' }}>SMP</option>
                            <option value="SD" {{ old('pendidikan', $PsikologDataDetails[0]->pendidikan ?? '') == 'SD' ? 'selected' : '' }}>SD</option>
                        </select>
                    </div>
                    <div>
                        <label class="font-semibold">Hobi</label>
                        <input required type="text" name="hobi" value="{{ $PsikologDataDetails[0]->hobi }}" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Masukkan Hobi Anda" />
                    </div>
                    <div>
                        <label class="font-semibold">Riwayat Pekerjaan</label>
                        <input required type="text" name="riwayat_pekerjaan" value="{{ $PsikologDataDetails[0]->riwayat_pekerjaan }}" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Sales - PT. Berbinar Insightful Indonesia (2022)" />
                    </div>
                    <div>
                        <label class="font-semibold">Kegiatan Sosial yang Diikuti</label>
                        <input required type="text" name="kegiatan_sosial" value="{{ $PsikologDataDetails[0]->kegiatan_sosial }}" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Pengabdian Pemuda Masa Kini (2023)" />
                    </div>
                </div>

                <!-- Data Konseling -->
                <h1 class="my-8 text-center text-2xl font-bold">Data Konseling</h1>
                <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                    <div>
                        <label class="font-semibold">Tanggal Konseling</label>
                        <input required type="text" name="jadwal_tanggal" id="tglkonseling"
                            value="{{ \Carbon\Carbon::parse($PsikologDataDetails[0]->jadwal_tanggal)->format('d-m-Y') }}"
                            class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="dd-mm-yy" readonly/>
                    </div>
                    <div>
                        <label class="font-semibold">Hari Konseling</label>
                        <input type="text" name="hari" id="hari_konseling"
                            value="{{ old('hari', \Carbon\Carbon::parse($PsikologDataDetails[0]->jadwal_tanggal)->translatedFormat('l')) }}"
                            class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm bg-gray-100" readonly />
                    </div>
                    <div>
                        <label class="font-semibold">Jam Konseling</label>
                        <input required type="text" id="waktukonseling" name="jadwal_pukul"
                        value="{{ $PsikologDataDetails[0]->jadwal_pukul }}"
                        class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Contoh: 14:00 - 15:00" />
                    </div>
                    <div>
                        <label class="font-semibold">Metode Konseling</label>
                        <select required name="metode" id="metode-select" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm">
                            <option value="" disabled>Pilih Metode Konseling</option>
                            <option value="online" {{ $PsikologDataDetails[0]->metode == 'online' ? 'selected' : '' }}>Online</option>
                            <option value="offline" {{ $PsikologDataDetails[0]->metode == 'offline' ? 'selected' : '' }}>Offline</option>
                        </select>
                    </div>
                    <div>
                        <label class="font-semibold">Sesi Konseling (Jam)</label>
                        <select name="sesi" id="sesi-select"
                            class="dropdown-select w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm cursor-pointer">
                            <option value="1" {{ $PsikologDataDetails[0]->daerah == '1 Jam' ? 'selected' : '' }}>1 Jam</option>
                            <option value="2" {{ $PsikologDataDetails[0]->daerah == '2 Jam' ? 'selected' : '' }}>2 Jam</option>
                            <option value="3" {{ $PsikologDataDetails[0]->daerah == '3 Jam' ? 'selected' : '' }}>3 Jam</option>
                        </select>
                    </div>
                    <div class="flex flex-col space-y-1" id="daerah-container" style="display: none;">
                        <label for="daerah-select" class="font-semibold">Daerah Konseling</label>
                        <div class="relative">
                            <select name="daerah" id="daerah-select"
                                class="dropdown-select w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm cursor-pointer">
                                <option value="">Pilih Daerah Konseling</option>
                                <option value="Surabaya" {{ $PsikologDataDetails[0]->daerah == 'Surabaya' ? 'selected' : '' }}>Surabaya</option>
                                <option value="Kediri" {{ $PsikologDataDetails[0]->daerah == 'Kediri' ? 'selected' : '' }}>Kediri</option>
                                <option value="Sidoarjo" {{ $PsikologDataDetails[0]->daerah == 'Sidoarjo' ? 'selected' : '' }}>Sidoarjo</option>
                                <option value="Makassar" {{ $PsikologDataDetails[0]->daerah == 'Makassar' ? 'selected' : '' }}>Makassar</option>
                                <option value="Samarinda" {{ $PsikologDataDetails[0]->daerah == 'Samarinda' ? 'selected' : '' }}>Samarinda</option>
                                <option value="Jakarta" {{ $PsikologDataDetails[0]->daerah == 'Jakarta' ? 'selected' : '' }}>Jakarta</option>
                                <option value="Malang" {{ $PsikologDataDetails[0]->daerah == 'Malang' ? 'selected' : '' }}>Malang</option>
                                <option value="Tangerang Selatan" {{ $PsikologDataDetails[0]->daerah == 'Tangerang Selatan' ? 'selected' : '' }}>Tangerang Selatan</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <label class="font-semibold">Harga Konseling</label>
                        <input required name="harga" id="harga-input"
                            value="{{ $PsikologDataDetails[0]->harga }}"
                            class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm bg-gray-100" placeholder="Rp 0,00" readonly/>
                    </div>
                </div>

                <!-- Topik Konseling -->
                <h1 class="my-8 text-center text-2xl font-bold">Topik Konseling</h1>
                <div>
                    <label class="font-semibold">Cerita Tentang Hal yang Ingin Dikonsultasikan</label>
                    <textarea required name="cerita" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" rows="4" placeholder="Tulislah hal yang ingin Anda konsultasikan">{{ $PsikologDataDetails[0]->cerita }}</textarea>
                </div>

                <div class="mt-8 flex gap-4 border-t-2 border-t-gray-400 pt-5">
                    <button type="submit"
                        class="rounded-xl flex-1 flex items-center justify-center h-12 text-lg"
                        style="width: 50%; background: #3986A3; color: #fff;">
                        Simpan
                    </button>
                    <button type="button" id="cancelButton"
                        class="rounded-xl flex-1 flex items-center justify-center h-12 text-lg"
                        style="width: 50%; border: 2px solid #3986A3; color: #3986A3;">
                        Batal
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- Modal Konfirmasi -->
<div id="confirmModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
    <div class="bg-white rounded-lg p-6 max-w-md w-full text-center">
        <div class="flex justify-center mb-4">
            <img src="{{ asset('assets/images/dashboard/svg-icon/warning.svg') }}" alt="Warning Icon" class="h-12 w-12">
        </div>
        <p class="text-lg mb-6">Apakah Anda yakin ingin membatalkan perubahan data ini?</p>
        <div class="flex justify-center gap-4">
            <button id="confirmCancel" class="px-6 py-2 bg-[#3986A3] text-white rounded-lg">OK</button>
            <button id="cancelCancel" class="px-6 py-2 border border-[#3986A3] text-[#3986A3] rounded-lg">Cancel</button>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    function getDayName(dateString) {
        const days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
        const date = new Date(dateString);
        return days[date.getDay()];
    }

    document.addEventListener('DOMContentLoaded', function () {
        const cancelButton = document.getElementById('cancelButton');
        const confirmModal = document.getElementById('confirmModal');
        const confirmCancel = document.getElementById('confirmCancel');
        const cancelCancel = document.getElementById('cancelCancel');
        const tanggalInput = document.getElementById('jadwalTanggal');
        const hariInput = document.getElementById('hariKonseling');

        cancelButton.addEventListener('click', function(e) {
            e.preventDefault();
            confirmModal.classList.remove('hidden');
        });

        confirmCancel.addEventListener('click', function() {
            window.location.href = "{{ route('dashboard.psychologists.index') }}";
        });

        cancelCancel.addEventListener('click', function() {
            confirmModal.classList.add('hidden');
        });

        tanggalInput.addEventListener('change', function() {
            if (this.value) {
                hariInput.value = getDayName(this.value);
            } else {
                hariInput.value = '';
            }
        });

        if (tanggalInput.value) {
            hariInput.value = getDayName(tanggalInput.value);
        }
    });

    // logika inputan psikolog
    document.addEventListener("DOMContentLoaded", function () {
    flatpickr("#tgllahir", {
        dateFormat: "d/m/Y",
        allowInput: true
    });
    flatpickr("#tglkonseling", {
        dateFormat: "d-m-Y",
        allowInput: true,
        minDate: new Date().fp_incr(7)
    });

    // Hari konseling otomatis
    document.getElementById('tglkonseling').addEventListener('change', function() {
        const tanggal = this.value;
        const hariInput = document.getElementById('hari_konseling');
        if (!tanggal) {
            hariInput.value = '';
            return;
        }
        const parts = tanggal.split('-');
        if (parts.length !== 3) {
            hariInput.value = '';
            return;
        }
        const dateObj = new Date(parts[2], parts[1] - 1, parts[0]);
        const hariMap = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
        hariInput.value = hariMap[dateObj.getDay()];
    });

    // Harga otomatis
    function updateHarga() {
        const tanggal = document.getElementById('tglkonseling').value;
        const metode = document.getElementById('metode-select').value;
        const sesi = document.getElementById('sesi-select').value;
        const hargaInput = document.getElementById('harga-input');

        if (!tanggal || !metode || !sesi) {
            hargaInput.value = '';
            return;
        }

        const parts = tanggal.split('-');
        const dateObj = new Date(parts[2], parts[1] - 1, parts[0]);
        const day = dateObj.getDay();
        const isWeekend = (day === 0 || day === 6);

        let harga = 0;
        if (!isWeekend) {
            if (metode === 'online') {
                harga = {1: 150000, 2: 300000, 3: 450000}[sesi];
            } else if (metode === 'offline') {
                harga = {1: 175000, 2: 350000, 3: 525000}[sesi];
            }
        } else {
            if (metode === 'online') {
                harga = {1: 200000, 2: 340000, 3: 500000}[sesi];
            } else if (metode === 'offline') {
                harga = {1: 225000, 2: 340000, 3: 500000}[sesi];
            }
        }
        hargaInput.value = 'Rp ' + harga.toLocaleString('id-ID');
    }

    document.getElementById('tglkonseling').addEventListener('change', updateHarga);
    document.getElementById('metode-select').addEventListener('change', updateHarga);
    document.getElementById('sesi-select').addEventListener('change', updateHarga);

    // Tampilkan/hidden daerah
    document.getElementById('metode-select').addEventListener('change', function() {
        const daerahContainer = document.getElementById('daerah-container');
        const daerahSelect = document.getElementById('daerah-select');
        if (this.value === 'offline') {
            daerahContainer.style.display = 'block';
            daerahSelect.required = true;
        } else {
            daerahContainer.style.display = 'none';
            daerahSelect.required = false;
            daerahSelect.value = '';
        }
    });

    // Trigger saat load jika ada value tersimpan
    if (document.getElementById('metode-select').value === 'offline') {
        document.getElementById('daerah-container').style.display = 'block';
    }
});
</script>
@endsection