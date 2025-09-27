@extends('dashboard.layouts.app', [
    'title' => 'Edit Data Psikolog Staff',
])

@section('content')
<section class="flex w-full">
    <div class="flex w-full flex-col">
        <div class="py-4 md:pb-7 md:pt-12">
            <div class="mb-2 flex items-center gap-2">
                <a href="{{ route('dashboard.psychologists-staff.index') }}">
                    <img src="{{ asset('assets/images/dashboard/svg-icon/dashboard-back.png') }}" alt="Back Btn" />
                </a>
                <p class="text-base font-bold leading-normal text-gray-800 sm:text-lg md:text-2xl lg:text-4xl">Edit Data Psikolog Staff</p>
            </div>
            <p class="w-3/4 text-disabled">
                Halaman yang digunakan untuk mengedit, mengelola, dan melengkapi seluruh data pribadi, latar belakang, serta informasi penting lainnya dari psikolog secara detail untuk keperluan administrasi dan monitoring.
            </p>
        </div>
        <div class="rounded-md bg-white px-4 py-4 shadow-lg shadow-gray-400 md:px-8 md:py-7 xl:px-10">
            <form action="{{ route('dashboard.psychologists-staff.update', $PsikologDataDetails->id) }}" method="POST">
                @csrf
                @method('PUT')

                <!-- Data Konseling -->
                <h1 class="my-8 text-center text-2xl font-bold">Data Konseling</h1>
                <div class="mb-8 grid grid-cols-1 gap-6 md:grid-cols-2">
                    <div>
                        <label class="font-semibold">Tanggal Konseling</label>
                        <input required type="text" name="jadwal_tanggal" id="tglkonseling"
                            value="{{ \Carbon\Carbon::parse($PsikologDataDetails->jadwal_tanggal)->format('d-m-Y') }}"
                            class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="dd-mm-yy" readonly/>
                    </div>
                    @php
                        $hariMap = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
                        $tanggal = \Carbon\Carbon::parse($PsikologDataDetails->jadwal_tanggal);
                        $hariIndo = $hariMap[$tanggal->dayOfWeek];
                    @endphp
                    <div>
                        <label class="font-semibold">Hari Konseling</label>
                        <input type="text" name="hari" id="hari_konseling"
                            value="{{ old('hari', $hariIndo) }}"
                            class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm bg-gray-100" readonly />
                    </div>
                    <div>
                        <label class="font-semibold">Jam Konseling</label>
                        <input required type="text" id="waktukonseling" name="jadwal_pukul"
                        value="{{ $PsikologDataDetails->jadwal_pukul }}"
                        class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Contoh: 14:00 - 15:00" />
                    </div>
                </div>

                <!-- Data Diri -->
                <h1 class="mb-6 text-center text-2xl font-bold">Data Diri</h1>
                <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                    <div>
                        <label class="font-semibold">Nama Lengkap</label>
                        <input required type="text" name="nama" value="{{ $PsikologDataDetails->nama }}" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Masukkan Nama Lengkap" />
                    </div>
                    <div>
                        <label class="font-semibold">Email</label>
                        <input required type="email" name="email" value="{{ $PsikologDataDetails->email }}" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Masukkan Email" />
                    </div>
                    <div>
                        <label class="font-semibold">Tanggal Lahir</label>
                        <input required type="text" id="tgllahir" name="tanggal_Lahir"
                            value="{{ \Carbon\Carbon::parse($PsikologDataDetails->tanggal_Lahir)->format('d/m/Y') }}"
                            class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="dd/mm/yy" readonly/>
                    </div>
                    <div>
                        <label class="font-semibold">Tempat Lahir</label>
                        <input required type="text" name="tempat_lahir" value="{{ $PsikologDataDetails->tempat_lahir }}" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Masukkan Tempat Lahir" />
                    </div>
                    <div>
                        <label class="font-semibold">Alamat Domisili</label>
                        <input required type="text" name="alamat" value="{{ $PsikologDataDetails->alamat }}" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Masukkan Alamat Domisili" />
                    </div>
                    <div>
                        <label class="font-semibold">Umur</label>
                        <input required type="number" name="umur" value="{{ $PsikologDataDetails->umur }}" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Masukkan Umur" />
                    </div>
                    <div>
                        <label class="font-semibold">Agama</label>
                        <select required name="agama" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm">
                            <option value="" disabled>Pilih Agama</option>
                            <option value="Islam" {{ $PsikologDataDetails->agama == 'Islam' ? 'selected' : '' }}>Islam</option>
                            <option value="Kristen" {{ $PsikologDataDetails->agama == 'Kristen' ? 'selected' : '' }}>Kristen</option>
                            <option value="Katolik" {{ $PsikologDataDetails->agama == 'Katolik' ? 'selected' : '' }}>Katolik</option>
                            <option value="Hindu" {{ $PsikologDataDetails->agama == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                            <option value="Budha" {{ $PsikologDataDetails->agama == 'Budha' ? 'selected' : '' }}>Budha</option>
                            <option value="Khonghucu" {{ $PsikologDataDetails->agama == 'Khonghucu' ? 'selected' : '' }}>Khonghucu</option>
                        </select>
                    </div>
                    <div>
                        <label class="font-semibold">Status Pernikahan</label>
                        <select required name="status_pernikahan" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm">
                            <option value="" disabled>Pilih Status Pernikahan</option>
                            <option value="Belum Menikah" {{ $PsikologDataDetails->status_pernikahan == 'Belum Menikah' ? 'selected' : '' }}>Belum Menikah</option>
                            <option value="Sudah Menikah" {{ $PsikologDataDetails->status_pernikahan == 'Sudah Menikah' ? 'selected' : '' }}>Sudah Menikah</option>
                        </select>
                    </div>
                    <div>
                        <label class="font-semibold">Nomor WhatsApp</label>
                        <input required type="number" name="no_wa" value="{{ $PsikologDataDetails->no_wa }}" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Masukkan Nomor WhatsApp" />
                    </div>
                    <div>
                        <label class="font-semibold">Suku</label>
                        <input required type="text" name="suku" value="{{ $PsikologDataDetails->suku }}" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Contoh: Jawa" />
                    </div>
                    <div>
                        <label class="font-semibold">Anak ke-</label>
                        <input required type="text" name="posisi_anak" value="{{ $PsikologDataDetails->posisi_anak }}" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Anak ke-x dari x bersaudara" />
                    </div>
                    <div>
                        <label class="font-semibold">Hobi</label>
                        <input required type="text" name="hobi" value="{{ $PsikologDataDetails->hobi }}" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Masukkan Hobi Anda" />
                    </div>
                    <div>
                        <label class="font-semibold">Pendidikan Terakhir</label>
                        <select required name="pendidikan" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm">
                            <option value="" disabled>Pilih Pendidikan Terakhir</option>
                            <option value="S1/D4 - Sarjana" {{ old('pendidikan', $PsikologDataDetails->pendidikan ?? '') == 'S1/D4 - Sarjana' ? 'selected' : '' }}>S1/D4 - Sarjana</option>
                            <option value="D3 - Diploma" {{ old('pendidikan', $PsikologDataDetails->pendidikan ?? '') == 'D3 - Diploma' ? 'selected' : '' }}>D3 - Diploma</option>
                            <option value="SMA/SMK" {{ old('pendidikan', $PsikologDataDetails->pendidikan ?? '') == 'SMA/SMK' ? 'selected' : '' }}>SMA/SMK</option>
                            <option value="SMP" {{ old('pendidikan', $PsikologDataDetails->pendidikan ?? '') == 'SMP' ? 'selected' : '' }}>SMP</option>
                            <option value="SD" {{ old('pendidikan', $PsikologDataDetails->pendidikan ?? '') == 'SD' ? 'selected' : '' }}>SD</option>
                        </select>
                    </div>
                    <div>
                        <label class="font-semibold">Pekerjaan Saat ini</label>
                        <input required type="text" name="riwayat_pekerjaan" value="{{ $PsikologDataDetails->riwayat_pekerjaan }}" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Sales - PT. Berbinar Insightful Indonesia (2022)" />
                    </div>
                    <div>
                        <label class="font-semibold">Kegiatan Sosial yang Diikuti</label>
                        <input required type="text" name="kegiatan_sosial" value="{{ $PsikologDataDetails->kegiatan_sosial }}" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Pengabdian Pemuda Masa Kini (2023)" />
                    </div>
                    <div>
                        <label class="font-semibold">Divisi</label>
                        <input required type="text" name="divisi" value="{{ $PsikologDataDetails->divisi }}" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Web And Mobile Apps" />
                    </div>
                    <div>
                        <label class="font-semibold">Posisi</label>
                        <input required type="text" name="posisi" value="{{ $PsikologDataDetails->posisi }}" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Staff" />
                    </div>
                </div>

                <!-- Topik Konseling -->
                <h1 class="my-8 text-center text-2xl font-bold">Topik Konseling</h1>
                <div class="mb-6">
                    <label class="font-semibold">Topik Pengajuan</label>
                    <textarea required name="topik_pengajuan" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" rows="4" placeholder="Review CV / Overthinking / Insecurities / Kecemasan / DLL">{{ $PsikologDataDetails->topik_pengajuan }}</textarea>
                </div>
                <div>
                    <label class="font-semibold">Cerita Tentang Hal yang Ingin Dikonsultasikan</label>
                    <textarea required name="cerita" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" rows="4" placeholder="Tulislah hal yang ingin Anda konsultasikan">{{ $PsikologDataDetails->cerita }}</textarea>
                </div>

                <div class="mt-8 flex gap-4 border-t-2 border-t-gray-400 pt-5">
                    <button type="button" id="cancelButton"
                        class="w-1/3 rounded-xl flex-1 flex items-center justify-center h-12 text-lg"
                        style="width: 50%; border: 2px solid #3986A3; color: #3986A3;">
                        Batal
                    </button>
                    <button type="submit"
                        class="w-1/3 rounded-xl flex-1 flex items-center justify-center h-12 text-lg"
                        style="width: 50%; background: #3986A3; color: #fff;">
                        Simpan
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
@endsection

@section('script')
<script>
document.addEventListener("DOMContentLoaded", function () {
    // FLATPICKR TANGGAL LAHIR 
    flatpickr("#tgllahir", {
        dateFormat: "d/m/Y",
        allowInput: true
    });

    //  FLATPICKR TANGGAL KONSELING (minimal 7 hari dari sekarang) 
    const minDate = new Date();
    minDate.setDate(minDate.getDate() + 7);
    flatpickr("#tglkonseling", {
        dateFormat: "d-m-Y",
        allowInput: true,
        minDate: minDate
    });

    //  HARI KONSELING OTOMATIS 
    function getDayName(dateStr) {
        // Format input: d-m-Y
        const parts = dateStr.split('-');
        if (parts.length !== 3) return '';
        const dateObj = new Date(parts[2], parts[1] - 1, parts[0]);
        const hariMap = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
        return hariMap[dateObj.getDay()];
    }

    const tglKonselingInput = document.getElementById('tglkonseling');
    const hariKonselingInput = document.getElementById('hari_konseling');
    tglKonselingInput.addEventListener('change', function() {
        hariKonselingInput.value = getDayName(this.value);
    });

    // MODAL KONFIRMASI BATAL 
    const cancelButton = document.getElementById('cancelButton');
    const confirmModal = document.getElementById('confirmModal');
    const confirmCancel = document.getElementById('confirmCancel');
    const cancelCancel = document.getElementById('cancelCancel');

    cancelButton.addEventListener('click', function(e) {
        e.preventDefault();
        confirmModal.classList.remove('hidden');
    });

    confirmCancel.addEventListener('click', function() {
        window.location.href = "{{ route('dashboard.psychologists-staff.index') }}";
    });

    cancelCancel.addEventListener('click', function() {
        confirmModal.classList.add('hidden');
    });
});
</script>
@endsection
