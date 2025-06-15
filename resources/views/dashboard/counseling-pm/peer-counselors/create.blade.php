@extends(
    "dashboard.layouts.app",
    [
        "title" => "Tambah Data Peer Counselor",
    ]
)

@section("content")
<section class="flex w-full">
    <div class="flex w-full flex-col">
        <div class="py-4 md:pb-7 md:pt-12">
            <div class="mb-2 flex items-center gap-2">
                <a href="{{ route('dashboard.peer-counselors.index') }}">
                    <img src="{{ asset('assets/images/dashboard/svg-icon/dashboard-back.png') }}" alt="Back Btn" />
                </a>
                <p class="text-base font-bold leading-normal text-gray-800 sm:text-lg md:text-2xl lg:text-4xl">Tambah Data Peer Counselor</p>
            </div>
            <p class="w-3/4 text-disabled">
                Halaman yang digunakan untuk menambahkan, mengelola, dan melengkapi seluruh data pribadi, latar belakang, serta informasi penting lainnya dari peer counselor secara detail untuk keperluan administrasi dan monitoring.
            </p>
        </div>
        <div class="rounded-md bg-white px-4 py-4 shadow-lg shadow-gray-400 md:px-8 md:py-7 xl:px-10">
            <form action="{{ route('dashboard.peer-counselors.store') }}" method="POST">
                @csrf

                <!-- Data Diri -->
                <h1 class="mb-6 text-center text-2xl font-bold">Data Diri</h1>
                <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                    <div>
                        <label class="font-semibold">Nama Lengkap</label>
                        <input required type="text" name="nama" value="{{ old('nama') }}" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Masukkan Nama Lengkap" />
                    </div>
                    <div>
                        <label class="font-semibold">Nomor WhatsApp</label>
                        <input required type="number" name="no_wa" value="{{ old('no_wa') }}" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Masukkan Nomor WhatsApp" />
                    </div>
                    <div>
                        <label class="font-semibold">Email</label>
                        <input required type="email" name="email" value="{{ old('email') }}" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Masukkan Email" />
                    </div>
                    <div>
                        <label class="font-semibold">Jenis Kelamin</label>
                        <select required name="jenis_kelamin" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm">
                            <option value="" disabled selected>Pilih Jenis Kelamin</option>
                            <option value="Laki-laki" {{ old('jenis_kelamin') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                            <option value="Perempuan" {{ old('jenis_kelamin') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                    </div>
                    <div>
                        <label class="font-semibold">Tanggal Lahir</label>
                        <input required type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" />
                    </div>
                    <div>
                        <label class="font-semibold">Tempat Lahir</label>
                        <input required type="text" name="tempat_lahir" value="{{ old('tempat_lahir') }}" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Masukkan Tempat Lahir" />
                    </div>
                    <div>
                        <label class="font-semibold">Agama</label>
                        <select required name="agama" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm">
                            <option value="" disabled selected>Pilih Agama</option>
                            <option value="Islam" {{ old('agama') == 'Islam' ? 'selected' : '' }}>Islam</option>
                            <option value="Kristen" {{ old('agama') == 'Kristen' ? 'selected' : '' }}>Kristen</option>
                            <option value="Katolik" {{ old('agama') == 'Katolik' ? 'selected' : '' }}>Katolik</option>
                            <option value="Hindu" {{ old('agama') == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                            <option value="Budha" {{ old('agama') == 'Budha' ? 'selected' : '' }}>Budha</option>
                            <option value="Khonghucu" {{ old('agama') == 'Khonghucu' ? 'selected' : '' }}>Khonghucu</option>
                        </select>
                    </div>
                    <div>
                        <label class="font-semibold">Suku Bangsa</label>
                        <input required type="text" name="suku" value="{{ old('suku') }}" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Masukkan Suku Bangsa" />
                    </div>
                    <div>
                        <label class="font-semibold">Status Pernikahan</label>
                        <select required name="status_pernikahan" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm">
                            <option value="" disabled selected>Pilih Status Pernikahan</option>
                            <option value="Belum Menikah" {{ old('status_pernikahan') == 'Belum Menikah' ? 'selected' : '' }}>Belum Menikah</option>
                            <option value="Sudah Menikah" {{ old('status_pernikahan') == 'Sudah Menikah' ? 'selected' : '' }}>Sudah Menikah</option>
                        </select>
                    </div>
                    <div>
                        <label class="font-semibold">Alamat Domisili</label>
                        <input required type="text" name="alamat" value="{{ old('alamat') }}" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Masukkan Alamat Domisili" />
                    </div>
                    <div>
                        <label class="font-semibold">Anak ke-</label>
                        <input required type="text" name="posisi_anak" value="{{ old('posisi_anak') }}" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Anak ke-x dari x bersaudara" />
                    </div>
                    <div>
                        <label class="font-semibold">Pendidikan Saat Ini</label>
                        <input required type="text" name="pendidikan" value="{{ old('pendidikan') }}" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Contoh: SMA/Universitas" />
                    </div>
                    <div>
                        <label class="font-semibold">Hobi</label>
                        <input required type="text" name="hobi" value="{{ old('hobi') }}" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Masukkan Hobi" />
                    </div>
                    <div>
                        <label class="font-semibold">Riwayat Pekerjaan</label>
                        <input required type="text" name="riwayat_pekerjaan" value="{{ old('riwayat_pekerjaan') }}" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Masukkan Riwayat Pekerjaan" />
                    </div>
                    <div>
                        <label class="font-semibold">Kegiatan Sosial yang Diikuti</label>
                        <input required type="text" name="kegiatan_sosial" value="{{ old('kegiatan_sosial') }}" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Masukkan Kegiatan Sosial" />
                    </div>
                </div>

                <!-- Data Konseling -->
                <h1 class="my-8 text-center text-2xl font-bold">Data Konseling</h1>
                <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                    <div>
                        <label class="font-semibold">Tanggal Konseling</label>
                        <input required type="date" name="jadwal_tanggal" id="jadwalTanggal" value="{{ old('jadwal_tanggal') }}" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" />
                    </div>
                    <div>
                        <label class="font-semibold">Hari Konseling</label>
                        <input required type="text" name="hari" id="hariKonseling" value="{{ old('hari') }}" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm bg-gray-100" readonly />
                    </div>
                    <div>
                        <label class="font-semibold">Jam Konseling</label>
                        <select required name="jadwal_pukul" id="jamSelect" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm">
                            <option value="" disabled selected>Pilih Jam Konseling</option>
                            {{-- Option akan diisi oleh JS --}}
                        </select>
                    </div>
                    <div>
                        <label class="font-semibold">Metode Konseling</label>
                        <select required name="metode" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm">
                            <option value="" disabled selected>Pilih Metode Konseling</option>
                            <option value="online" {{ old('metode') == 'online' ? 'selected' : '' }}>Online</option>
                            <option value="offline" {{ old('metode') == 'offline' ? 'selected' : '' }}>Offline</option>
                        </select>
                    </div>
                    <div>
                        <label class="font-semibold">Daerah Konseling</label>
                        <select required name="daerah" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm">
                            <option value="" disabled selected>Pilih Daerah Konseling</option>
                            <option value="Online" {{ old('daerah') == 'Online' ? 'selected' : '' }}>Online</option>
                            <option value="Bekasi" {{ old('daerah') == 'Bekasi' ? 'selected' : '' }}>Bekasi</option>
                            <option value="Tangerang Selatan" {{ old('daerah') == 'Tangerang Selatan' ? 'selected' : '' }}>Tangerang Selatan</option>
                            <option value="Padang" {{ old('daerah') == 'Padang' ? 'selected' : '' }}>Padang</option>
                        </select>
                    </div>
                    <div>
                        <label class="font-semibold">Harga Konseling</label>
                        <input required type="number" name="harga" value="{{ old('harga') }}" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Masukkan Harga" />
                    </div>
                </div>

                <!-- Topik Konseling -->
                <h1 class="my-8 text-center text-2xl font-bold">Topik Konseling</h1>
                <div>
                    <label class="font-semibold">Cerita Tentang Hal yang Ingin Dikonsultasikan</label>
                    <textarea required name="cerita" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" rows="4" placeholder="Tulislah hal yang ingin Anda konsultasikan">{{ old('cerita') }}</textarea>
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
        <p class="text-lg mb-6">Apakah Anda yakin ingin membatalkan penambahan data ini?</p>
        <div class="flex justify-center gap-4">
            <button id="confirmCancel" class="px-6 py-2 bg-[#3986A3] text-white rounded-lg">OK</button>
            <button id="cancelCancel" class="px-6 py-2 border border-[#3986A3] text-[#3986A3] rounded-lg">Cancel</button>
        </div>
    </div>
</div>

<script>
    const jadwalData = {
        @if($senin) 'Senin': @json($senin), @endif
        @if($selasa) 'Selasa': @json($selasa), @endif
        @if($rabu) 'Rabu': @json($rabu), @endif
        @if($kamis) 'Kamis': @json($kamis), @endif
        @if($jumat) 'Jumat': @json($jumat), @endif
        @if($sabtu) 'Sabtu': @json($sabtu), @endif
        @if($minggu) 'Minggu': @json($minggu), @endif
    };

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
        const jamSelect = document.getElementById('jamSelect');

        // Handle cancel button click
        cancelButton.addEventListener('click', function(e) {
            e.preventDefault();
            confirmModal.classList.remove('hidden');
        });

        // Handle confirm cancel
        confirmCancel.addEventListener('click', function() {
            window.location.href = "{{ route('dashboard.peer-counselors.index') }}";
        });

        // Handle cancel cancel
        cancelCancel.addEventListener('click', function() {
            confirmModal.classList.add('hidden');
        });

        function updateHariDanJam() {
            const tanggal = tanggalInput.value;
            if (!tanggal) {
                hariInput.value = '';
                jamSelect.innerHTML = '<option value="" disabled selected>Pilih Jam Konseling</option>';
                return;
            }
            const hari = getDayName(tanggal);
            hariInput.value = hari;

            jamSelect.innerHTML = '<option value="" disabled selected>Pilih Jam Konseling</option>';
            if (jadwalData[hari]) {
                jadwalData[hari].forEach(function(jadwal) {
                    const waktuMulai = jadwal.pukul_mulai.substring(0,5);
                    const waktuSelesai = jadwal.pukul_selesai.substring(0,5);
                    const label = waktuMulai + ' - ' + waktuSelesai;
                    const option = document.createElement('option');
                    option.value = label;
                    option.textContent = label;
                    jamSelect.appendChild(option);
                });
            }
        }

        tanggalInput.addEventListener('change', updateHariDanJam);

        @if(old('jadwal_tanggal'))
            updateHariDanJam();
            jamSelect.value = "{{ old('jadwal_pukul') }}";
        @endif
    });
</script>
@endsection