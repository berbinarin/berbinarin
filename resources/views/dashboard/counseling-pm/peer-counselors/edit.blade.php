@extends(
    "dashboard.layouts.app",
    [
        "title" => "Edit Data Peer Counselor",
    ]
)

@section("content")
<section class="flex w-full">
    <div class="flex w-full flex-col">
        <div class="py-4 md:pb-7 md:pt-12">
            <div class="mb-2 flex items-center gap-2">
                <a href="{{ route('dashboard.peer-counselors.show', $peerCounselor->id) }}">
                    <img src="{{ asset('assets/images/dashboard/svg-icon/dashboard-back.png') }}" alt="Back Btn" />
                </a>
                <p class="text-base font-bold leading-normal text-gray-800 sm:text-lg md:text-2xl lg:text-4xl">Edit Data Peer Counselor</p>
            </div>
            <p class="w-3/4 text-disabled">
                Halaman yang digunakan untuk mengedit, mengelola, dan melengkapi seluruh data pribadi, latar belakang, serta informasi penting lainnya dari peer counselor secara detail untuk keperluan administrasi dan monitoring.
            </p>
        </div>
        <div class="rounded-md bg-white px-4 py-4 shadow-lg shadow-gray-400 md:px-8 md:py-7 xl:px-10">
            <form action="{{ route('dashboard.peer-counselors.update', $peerCounselor->id) }}" method="POST" id="editForm">
                @csrf
                @method('PUT')
                <input type="hidden" name="kategori" value="peer-counselor">

                <!-- Data Diri -->
                <h1 class="mb-6 text-center text-2xl font-bold">Data Diri</h1>
                <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                    <div>
                        <label class="font-semibold">Nama Lengkap</label>
                        <input required type="text" name="nama" value="{{ old('nama', $peerCounselor->nama) }}" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Masukkan Nama Lengkap" />
                    </div>
                    <div>
                        <label class="font-semibold">Nomor WhatsApp</label>
                        <input required type="number" name="no_wa" value="{{ old('no_wa', $peerCounselor->no_wa) }}" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Masukkan Nomor WhatsApp" />
                    </div>
                    <div>
                        <label class="font-semibold">Email</label>
                        <input required type="email" name="email" value="{{ old('email', $peerCounselor->email) }}" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Masukkan Email" />
                    </div>
                    <div>
                        <label class="font-semibold">Jenis Kelamin</label>
                        <select required name="jenis_kelamin" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm">
                            <option value="" disabled>Pilih Jenis Kelamin</option>
                            <option value="Laki-laki" {{ old('jenis_kelamin', $peerCounselor->jenis_kelamin) == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                            <option value="Perempuan" {{ old('jenis_kelamin', $peerCounselor->jenis_kelamin) == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                    </div>
                    <div>
                        <label class="font-semibold">Tanggal Lahir</label>
                        <input required type="text" id="tgllahir" name="tanggal_lahir"
                            value="{{ old('tanggal_lahir', \Carbon\Carbon::parse($peerCounselor->tanggal_lahir)->format('d/m/Y')) }}"
                            class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="dd/mm/yy" autocomplete="off" readonly/>
                    </div>
                    <div>
                        <label class="font-semibold">Tempat Lahir</label>
                        <input required type="text" name="tempat_lahir" value="{{ old('tempat_lahir', $peerCounselor->tempat_lahir) }}" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Masukkan Tempat Lahir" />
                    </div>
                    <div>
                        <label class="font-semibold">Agama</label>
                        <select required name="agama" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm">
                            <option value="" disabled>Pilih Agama</option>
                            <option value="Islam" {{ old('agama', $peerCounselor->agama) == 'Islam' ? 'selected' : '' }}>Islam</option>
                            <option value="Kristen" {{ old('agama', $peerCounselor->agama) == 'Kristen' ? 'selected' : '' }}>Kristen</option>
                            <option value="Katolik" {{ old('agama', $peerCounselor->agama) == 'Katolik' ? 'selected' : '' }}>Katolik</option>
                            <option value="Hindu" {{ old('agama', $peerCounselor->agama) == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                            <option value="Budha" {{ old('agama', $peerCounselor->agama) == 'Budha' ? 'selected' : '' }}>Budha</option>
                            <option value="Khonghucu" {{ old('agama', $peerCounselor->agama) == 'Khonghucu' ? 'selected' : '' }}>Khonghucu</option>
                        </select>
                    </div>
                    <div>
                        <label class="font-semibold">Suku</label>
                        <input required type="text" name="suku" value="{{ old('suku', $peerCounselor->suku) }}" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Masukkan Suku Bangsa" />
                    </div>
                    <div>
                        <label class="font-semibold">Status Pernikahan</label>
                        <select required name="status_pernikahan" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm">
                            <option value="" disabled>Pilih Status Pernikahan</option>
                            <option value="Belum Menikah" {{ old('status_pernikahan', $peerCounselor->status_pernikahan) == 'Belum Menikah' ? 'selected' : '' }}>Belum Menikah</option>
                            <option value="Sudah Menikah" {{ old('status_pernikahan', $peerCounselor->status_pernikahan) == 'Sudah Menikah' ? 'selected' : '' }}>Sudah Menikah</option>
                        </select>
                    </div>
                    <div>
                        <label class="font-semibold">Alamat Domisili</label>
                        <input required type="text" name="alamat" value="{{ old('alamat', $peerCounselor->alamat) }}" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Masukkan Alamat Domisili" />
                    </div>
                    <div>
                        <label class="font-semibold">Anak ke-</label>
                        <input required type="text" name="posisi_anak" value="{{ old('posisi_anak', $peerCounselor->posisi_anak) }}" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Anak ke-x dari x bersaudara" />
                    </div>
                    <div>
                        <label class="font-semibold">Pendidikan Terakhir</label>
                        <select required name="pendidikan" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm">
                            <option value="" disabled>Pilih Pendidikan Terakhir</option>
                            <option value="S1/D4 - Sarjana" {{ old('pendidikan', $peerCounselor->pendidikan ?? '') == 'S1/D4 - Sarjana' ? 'selected' : '' }}>S1/D4 - Sarjana</option>
                            <option value="D3 - Diploma" {{ old('pendidikan', $peerCounselor->pendidikan ?? '') == 'D3 - Diploma' ? 'selected' : '' }}>D3 - Diploma</option>
                            <option value="SMA/SMK" {{ old('pendidikan', $peerCounselor->pendidikan ?? '') == 'SMA/SMK' ? 'selected' : '' }}>SMA/SMK</option>
                            <option value="SMP" {{ old('pendidikan', $peerCounselor->pendidikan ?? '') == 'SMP' ? 'selected' : '' }}>SMP</option>
                            <option value="SD" {{ old('pendidikan', $peerCounselor->pendidikan ?? '') == 'SD' ? 'selected' : '' }}>SD</option>
                        </select>
                    </div>
                    <div>
                        <label class="font-semibold">Hobi</label>
                        <input required type="text" name="hobi" value="{{ old('hobi', $peerCounselor->hobi) }}" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Masukkan Hobi" />
                    </div>
                    <div>
                        <label class="font-semibold">Riwayat Pekerjaan</label>
                        <input required type="text" name="riwayat_pekerjaan" value="{{ old('riwayat_pekerjaan', $peerCounselor->riwayat_pekerjaan) }}" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Masukkan Riwayat Pekerjaan" />
                    </div>
                    <div>
                        <label class="font-semibold">Kegiatan Sosial yang Diikuti</label>
                        <input required type="text" name="kegiatan_sosial" value="{{ old('kegiatan_sosial', $peerCounselor->kegiatan_sosial) }}" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Masukkan Kegiatan Sosial" />
                    </div>
                </div>

                <!-- Data Konseling -->
                <h1 class="my-8 text-center text-2xl font-bold">Data Konseling</h1>
                <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                    <div>
                        <label class="font-semibold">Tanggal Konseling</label>
                        <input required type="text" name="jadwal_tanggal" id="jadwalTanggal"
                            value="{{ old('jadwal_tanggal', \Carbon\Carbon::parse($peerCounselor->jadwal_tanggal)->format('d-m-Y')) }}"
                            class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm bg-gray-100"
                            placeholder="dd-mm-yy" readonly autocomplete="off">
                    </div>
                    <div>
                        <label class="font-semibold">Hari Konseling</label>
                        <input required type="text" name="hari" id="hariKonseling"
                            value="{{ old('hari', $peerCounselor->hari) }}"
                            class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm bg-gray-100" readonly />
                    </div>
                    <div>
                        <label class="font-semibold">Jam Konseling</label>
                        <select required name="jadwal_pukul" id="jamSelect" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm">
                            <option value="" disabled>Pilih Jam Konseling</option>
                            {{-- Option akan diisi oleh JS --}}
                        </select>
                    </div>
                    <div>
                        <label class="font-semibold">Metode Konseling</label>
                        <select required name="metode" id="metodeSelect" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm">
                            <option value="" disabled>Pilih Metode Konseling</option>
                            <option value="online" {{ old('metode', $peerCounselor->metode) == 'online' ? 'selected' : '' }}>Online</option>
                            <option value="offline" {{ old('metode', $peerCounselor->metode) == 'offline' ? 'selected' : '' }}>Offline</option>
                        </select>
                    </div>
                    <div>
                        <label class="font-semibold">Sesi Konseling (Jam)</label>
                        <select name="sesi" id="sesiSelect" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm">
                            <option value="" disabled>Pilih Sesi</option>
                            <option value="1" {{ old('sesi', $peerCounselor->sesi) == '1' ? 'selected' : '' }}>1 Jam</option>
                            <option value="2" {{ old('sesi', $peerCounselor->sesi) == '2' ? 'selected' : '' }}>2 Jam</option>
                            <option value="3" {{ old('sesi', $peerCounselor->sesi) == '3' ? 'selected' : '' }}>3 Jam</option>
                        </select>
                    </div>
                    <div class="flex flex-col space-y-1" id="daerah-container" style="display: none;">
                        <label for="daerahSelect" class="font-semibold">Daerah Konseling</label>
                        <select name="daerah" id="daerahSelect"
                            class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm bg-gray-100">
                            <option value="">Pilih Daerah Konseling</option>
                            <option value="Bekasi" {{ old('daerah', $peerCounselor->daerah) == 'Bekasi' ? 'selected' : '' }}>Bekasi</option>
                            <option value="Jakarta" {{ old('daerah', $peerCounselor->daerah) == 'Jakarta' ? 'selected' : '' }}>Jakarta</option>                            
                            <option value="Tangerang Selatan" {{ old('daerah', $peerCounselor->daerah) == 'Tangerang Selatan' ? 'selected' : '' }}>Tangerang Selatan</option>
                            <option value="Padang" {{ old('daerah', $peerCounselor->daerah) == 'Padang' ? 'selected' : '' }}>Padang</option>
                            <option value="Wonogiri" {{ old('daerah', $peerCounselor->daerah) == 'Wonogiri' ? 'selected' : '' }}>Wonogiri</option>
                            <option value="Malang" {{ old('daerah', $peerCounselor->daerah) == 'Malang' ? 'selected' : '' }}>Malang</option>
                        </select>
                    </div>
                    <div class="flex flex-col space-y-1">
                        <label for="hargaInput" class="font-semibold">Harga Konseling</label>
                        <input type="text" name="harga" id="hargaInput"
                            value="{{ old('harga', $peerCounselor->harga) }}"
                            class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm bg-gray-100"
                            placeholder="Rp 0,00" readonly>
                    </div>
                </div>

                <!-- Topik Konseling -->
                <h1 class="my-8 text-center text-2xl font-bold">Topik Konseling</h1>
                <div>
                    <label class="font-semibold">Cerita Tentang Hal yang Ingin Dikonsultasikan</label>
                    <textarea required name="cerita" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" rows="4" placeholder="Tulislah hal yang ingin Anda konsultasikan">{{ old('cerita', $peerCounselor->cerita) }}</textarea>
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

<!-- Modal Konfirmasi dan Script -->
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
// Cancel Button 
document.addEventListener("DOMContentLoaded", function () {
    const cancelButton = document.getElementById('cancelButton');
    const confirmModal = document.getElementById('confirmModal');
    const confirmCancel = document.getElementById('confirmCancel');
    const cancelCancel = document.getElementById('cancelCancel');

    cancelButton.addEventListener('click', function(e) {
        e.preventDefault();
        confirmModal.classList.remove('hidden');
    });

    confirmCancel.addEventListener('click', function() {
        // Redirect ke halaman index peer-counselor
        window.location.href = "{{ route('dashboard.peer-counselors.index') }}";
    });

    cancelCancel.addEventListener('click', function() {
        confirmModal.classList.add('hidden');
    });
});

// Update hari konseling otomatis saat tanggal diisi
const tglKonselingInput = document.getElementById('jadwalTanggal');
const hariInput = document.getElementById('hariKonseling');
if (tglKonselingInput.value) {
    const parts = tglKonselingInput.value.split('-');
    if (parts.length === 3) {
        const dateObj = new Date(parts[2], parts[1] - 1, parts[0]);
        const hariMap = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
        hariInput.value = hariMap[dateObj.getDay()];
    }
}
document.addEventListener("DOMContentLoaded", function () {
    flatpickr("#tgllahir", {
        dateFormat: "d/m/Y",
        allowInput: true
    });
    flatpickr("#jadwalTanggal", {
        dateFormat: "d-m-Y",
        allowInput: true
    });

    // Hari konseling otomatis
    document.getElementById('jadwalTanggal').addEventListener('change', function() {
        const tanggal = this.value;
        const hariInput = document.getElementById('hariKonseling');
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
        updateJamKonseling();
        updateHarga();
    });

    // Jam konseling otomatis dari jadwal peer
    function updateJamKonseling() {
        const tanggal = document.getElementById('jadwalTanggal').value;
        const jamSelect = document.getElementById('jamSelect');
        jamSelect.innerHTML = '<option value="" disabled selected>Pilih Jam Konseling</option>';
        if (!tanggal) return;
        const parts = tanggal.split('-');
        if (parts.length !== 3) return;
        const dateObj = new Date(parts[2], parts[1] - 1, parts[0]);
        const hariMap = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
        const hari = hariMap[dateObj.getDay()];
        const jadwalData = {
            @if($senin) 'Senin': @json($senin), @endif
            @if($selasa) 'Selasa': @json($selasa), @endif
            @if($rabu) 'Rabu': @json($rabu), @endif
            @if($kamis) 'Kamis': @json($kamis), @endif
            @if($jumat) 'Jumat': @json($jumat), @endif
            @if($sabtu) 'Sabtu': @json($sabtu), @endif
            @if($minggu) 'Minggu': @json($minggu), @endif
        };
        if (jadwalData[hari]) {
            jadwalData[hari].forEach(function(jadwal) {
                const mulai = jadwal.pukul_mulai.substring(0,5);
                const selesai = jadwal.pukul_selesai.substring(0,5);
                const label = mulai + ' - ' + selesai;
                const option = document.createElement('option');
                option.value = label;
                option.textContent = label;
                jamSelect.appendChild(option);
            });
        }
        // Setelah option diisi, pilih value lama jika ada
        const oldValue = "{{ old('jadwal_pukul', $peerCounselor->jadwal_pukul ?? '') }}";
        if (oldValue) {
            for (let i = 0; i < jamSelect.options.length; i++) {
                if (jamSelect.options[i].value === oldValue) {
                    jamSelect.selectedIndex = i;
                    break;
                }
            }
        }
    }
    // Panggil saat halaman load dan saat tanggal berubah
    window.addEventListener('DOMContentLoaded', function() {
        updateJamKonseling();
    });
    document.getElementById('jadwalTanggal').addEventListener('change', updateJamKonseling);


    document.getElementById('jadwalTanggal').addEventListener('change', updateJamKonseling);

    // Tampilkan/hidden daerah sesuai metode
    document.getElementById('metodeSelect').addEventListener('change', function() {
        const daerahContainer = document.getElementById('daerah-container');
        if (this.value === 'offline') {
            daerahContainer.style.display = 'block';
        } else {
            daerahContainer.style.display = 'none';
            document.getElementById('daerahSelect').value = 'Online';
        }
        updateHarga();
    });

    // Harga otomatis
    function updateHarga() {
        const metode = document.getElementById('metodeSelect').value;
        const sesi = document.getElementById('sesiSelect').value;
        const hargaInput = document.getElementById('hargaInput');
        let harga = 0;
        if (metode === 'online') {
            harga = {1: 45000, 2: 90000, 3: 135000}[sesi] || 0;
        } else if (metode === 'offline') {
            harga = {1: 55000, 2: 110000, 3: 165000}[sesi] || 0;
        }
        hargaInput.value = harga ? 'Rp ' + harga.toLocaleString('id-ID') : '';
    }

    document.getElementById('metodeSelect').addEventListener('change', updateHarga);
    document.getElementById('sesiSelect').addEventListener('change', updateHarga);

    // Trigger saat load jika ada value tersimpan
    if (document.getElementById('metodeSelect').value === 'offline') {
        document.getElementById('daerah-container').style.display = 'block';
    }
});

document.addEventListener("DOMContentLoaded", function () {
    // Set tanggal minimal 7 hari dari hari ini
    const today = new Date();
    const minDate = new Date();
    minDate.setDate(today.getDate() + 7);

    flatpickr("#jadwalTanggal", {
        dateFormat: "d-m-Y",
        allowInput: false,
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
});
function selectJamKonselingLama() {
    const jamSelect = document.getElementById('jamSelect');
    const oldValue = "{{ old('jadwal_pukul', $peerCounselor->jadwal_pukul ?? '') }}";
    if (oldValue) {
        for (let i = 0; i < jamSelect.options.length; i++) {
            if (jamSelect.options[i].value === oldValue) {
                jamSelect.selectedIndex = i;
                break;
            }
        }
    }
}

// Panggil setelah jam konseling diisi oleh JS
document.getElementById('jadwalTanggal').addEventListener('change', function() {
    setTimeout(selectJamKonselingLama, 100);
});

// Saat halaman pertama kali load
window.addEventListener('DOMContentLoaded', function() {
    updateJamKonseling();
    setTimeout(selectJamKonselingLama, 200);
});
</script>
@endsection