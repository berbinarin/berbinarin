@extends('dashboard.layouts.app', [
    'title' => 'Tambah Data Psikolog',
    'modul' => 'Psikolog Data',
])

@section('content')
<section class="flex w-full">
    <div class="flex w-full flex-col">
        <div class="py-4 md:pb-7 md:pt-12">
            <div class="mb-2 flex items-center gap-2">
                <a href="{{ route('dashboard.psychologists-staff.index') }}">
                    <img src="{{ asset('assets/images/dashboard/svg-icon/dashboard-back.png') }}" alt="Back Btn" />
                </a>
                <p class="text-base font-bold leading-normal text-gray-800 sm:text-lg md:text-2xl lg:text-4xl">Tambah Data Peer</p>
            </div>
            <p class="w-3/4 text-disabled">
                Halaman yang digunakan untuk menambahkan, mengelola, dan melengkapi seluruh data pribadi, latar belakang, serta informasi penting lainnya dari psikolog secara detail untuk keperluan administrasi dan monitoring.
            </p>
        </div>
        <div class="rounded-md bg-white px-4 py-4 shadow-lg shadow-gray-400 md:px-8 md:py-7 xl:px-10">
            <form action="{{ route('dashboard.peer-staff.store') }}" method="POST">
                @csrf

                <!-- Data Konseling -->
                <h1 class="my-8 text-center text-2xl font-bold">Data Konseling</h1>
                <div class="mb-8 grid grid-cols-1 gap-6 md:grid-cols-2">
                    <div>
                        <label class="font-semibold">Tanggal Konseling</label>
                        <input required type="date" name="jadwal_tanggal" id="tglkonseling" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="dd/mm/yy" readonly/>
                    </div>
                    <div>
                        <label class="font-semibold">Hari Konseling</label>
                        <input type="text" name="hari" id="hari_konseling" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm bg-gray-100" readonly />
                    </div>
                    <div>
                        <label class="font-semibold">Jam Konseling</label>
                        <input required type="time" id="waktukonseling" name="jadwal_pukul" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" />
                    </div>
                    <div class="flex flex-col space-y-1" id="daerah-container" style="display: none;">
                        <label for="daerah-select" class="font-semibold">Daerah Konseling</label>
                        <div class="relative">
                            <select name="daerah" id="daerah-select" class="dropdown-select w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm">
                                <option value="">Pilih Daerah Konseling</option>
                                <option value="Surabaya">Surabaya</option>
                                <option value="Kediri">Kediri</option>
                                <option value="Sidoarjo">Sidoarjo</option>
                                <option value="Makassar">Makassar</option>
                                <option value="Samarinda">Samarinda</option>
                                <option value="Jakarta">Jakarta</option>
                                <option value="Malang">Malang</option>
                                <option value="Tangerang Selatan">Tangerang Selatan</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Data Diri -->
                <h1 class="mb-6 text-center text-2xl font-bold">Data Diri</h1>
                <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                    <div>
                        <label class="font-semibold">Nama Lengkap</label>
                        <input required type="text" name="nama" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Masukkan Nama Lengkap" />
                    </div>
                    <div>
                        <label class="font-semibold">Email</label>
                        <input required type="email" name="email" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Masukkan Email" />
                    </div>
                    <div>
                        <label class="font-semibold">Tanggal Lahir</label>
                        <input required type="date" id="tgllahir" name="tanggal_Lahir" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="dd/mm/yy" readonly/>
                    </div>
                    <div>
                        <label class="font-semibold">Tempat Lahir</label>
                        <input required type="text" name="tempat_lahir" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Masukkan Tempat Lahir" />
                    </div>
                    <div>
                        <label class="font-semibold">Alamat Domisili</label>
                        <input required type="text" name="alamat" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Masukkan Alamat Domisili" />
                    </div>
                    <div>
                        <label class="font-semibold">Umur</label>
                        <input required type="number" name="umur" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Masukkan Umur" />
                    </div>
                    <div>
                        <label class="font-semibold">Agama</label>
                        <select required name="agama" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm">
                            <option value="" disabled selected>Pilih Agama</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Khonghucu">Khonghucu</option>
                        </select>
                    </div>
                    <div>
                        <label class="font-semibold">Status Pernikahan</label>
                        <select required name="status_pernikahan" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm">
                            <option value="" disabled selected>Pilih Status Pernikahan</option>
                            <option value="Belum Menikah">Belum Menikah</option>
                            <option value="Sudah Menikah">Sudah Menikah</option>
                        </select>
                    </div>
                    <div>
                        <label class="font-semibold">Nomor WhatsApp</label>
                        <input required type="number" name="no_wa" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Masukkan Nomor WhatsApp" />
                    </div>
                    <div>
                        <label class="font-semibold">Suku</label>
                        <input required type="text" name="suku" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Contoh: Jawa" />
                    </div>
                    <div>
                        <label class="font-semibold">Anak ke-</label>
                        <input required type="text" name="posisi_anak" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Anak ke-x dari x bersaudara" />
                    </div>
                    <div>
                        <label class="font-semibold">Hobi</label>
                        <input required type="text" name="hobi" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Masukkan Hobi Anda" />
                    </div>
                    <div>
                        <label class="font-semibold">Pendidikan Terakhir</label>
                        <select required name="pendidikan" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm">
                            <option value="" disabled selected>Pilih Pendidikan Terakhir</option>
                            <option value="S1/D4 - Sarjana">S1/D4 - Sarjana</option>
                            <option value="D3 - Diploma">D3 - Diploma</option>
                            <option value="SMA/SMK">SMA/SMK</option>
                            <option value="SMP">SMP</option>
                            <option value="SD">SD</option>
                        </select>
                    </div>
                    <div>
                        <label class="font-semibold">Riwayat Pekerjaan</label>
                        <input required type="text" name="riwayat_pekerjaan" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Sales - PT. Berbinar Insightful Indonesia (2022)" />
                    </div>
                    <div>
                        <label class="font-semibold">Kegiatan Sosial yang Diikuti</label>
                        <input required type="text" name="kegiatan_sosial" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Pengabdian Pemuda Masa Kini (2023)" />
                    </div>
                    <div>
                        <label class="font-semibold">Divisi</label>
                        <input required type="text" name="divisi" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Web And Mobile Apps" />
                    </div>
                    <div>
                        <label class="font-semibold">Posisi</label>
                        <input required type="text" name="posisi" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Staff" />
                    </div>
                </div>

                <!-- Topik Konseling -->
                <h1 class="my-8 text-center text-2xl font-bold">Topik Konseling</h1>
                <div class="mb-6">
                    <label class="font-semibold">Topik Pengajuan</label>
                    <textarea required name="topik_pengajuan" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" rows="4" placeholder="Review CV / Overthinking / Insecurities / Kecemasan / DLL"></textarea>
                </div>
                <div>
                    <label class="font-semibold">Cerita Tentang Hal yang Ingin Dikonsultasikan</label>
                    <textarea required name="cerita" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" rows="4" placeholder="Tulislah hal yang ingin Anda konsultasikan"></textarea>
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
        <p class="text-lg mb-6">Apakah Anda yakin ingin membatalkan penambahan data ini?</p>
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

    //  FLATPICKR JAM KONSELING 
    flatpickr("#waktukonseling", {
        enableTime: true,
        noCalendar: true,
        dateFormat: "H:i",
        time_24hr: true
    });

    // FLATPICKR TANGGAL KONSELING (minimal 7 hari dari sekarang) 
    const today = new Date();
    const minDate = new Date();
    minDate.setDate(today.getDate() + 7);

    flatpickr("#tglkonseling", {
        dateFormat: "d-m-Y",
        allowInput: true,
        minDate: minDate,
        disable: [
            {
                from: "1900-01-01",
                to: minDate.fp_incr(-1)
            }
        ],
        onOpen: function(selectedDates, dateStr, instance) {
            const tooltip = document.createElement('span');
            tooltip.classList.add('custom-tooltip');
            tooltip.textContent = 'Pemesanan minimal 7 hari dari sekarang';
            instance.calendarContainer.appendChild(tooltip);
        },
        onClose: function(selectedDates, dateStr, instance) {
            const tooltip = instance.calendarContainer.querySelector('.custom-tooltip');
            if (tooltip) {
                tooltip.remove();
            }
        }
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
        window.location.href = "{{ route('dashboard.peer-staff.index') }}";
    });

    cancelCancel.addEventListener('click', function() {
        confirmModal.classList.add('hidden');
    });
});
</script>
@endsection
