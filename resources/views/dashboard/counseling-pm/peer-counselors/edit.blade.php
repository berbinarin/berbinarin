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
                <a href="{{ route('dashboard.peer-counselors.show', $PeerConsellorDataDetails->id) }}">
                    <img src="{{ asset('assets/images/dashboard/svg-icon/dashboard-back.png') }}" alt="Back Btn" />
                </a>
                <p class="text-base font-bold leading-normal text-gray-800 sm:text-lg md:text-2xl lg:text-4xl">Ubah Data Konseling Peer Counselor</p>
            </div>
            <p class="w-full text-disabled">
                Halaman yang digunakan untuk mengedit, mengelola, dan melengkapi seluruh data pribadi, latar belakang, serta informasi penting lainnya dari peer counselor secara detail untuk keperluan administrasi dan monitoring.
            </p>
        </div>
        <div class="rounded-md bg-white px-4 py-4 shadow-lg shadow-gray-400 mb-7 md:px-8 md:py-7 xl:px-10">
            <form action="{{ route('dashboard.peer-counselors.update', $PeerConsellorDataDetails->id) }}" method="POST" id="editForm">
                @csrf
                @method('PUT')
                <input type="hidden" name="kategori" value="peer-counselor">

                <!-- Data Diri -->
                <h1 class="mb-6 text-center text-2xl font-bold">Data Diri</h1>
                <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                    <div>
                        <label class="font-semibold">Nama Lengkap</label>
                        <input required type="text" name="nama" value="{{ $PeerConsellorDataDetails->nama }}" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Masukkan Nama Lengkap" />
                    </div>
                    <div>
                        <label class="font-semibold">Email Aktif</label>
                        <input required type="email" name="email" value="{{ $PeerConsellorDataDetails->email }}" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Masukkan Email" />
                    </div>
                    <div>
                        <label class="font-semibold">Tanggal Lahir</label>
                        <input required type="text" id="tanggal_lahir" name="tanggal_lahir"
                            value="{{ \Carbon\Carbon::parse($PeerConsellorDataDetails->tanggal_Lahir)->format('d/m/Y') }}"
                            class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="dd/mm/yy" readonly/>
                    </div>
                    <div>
                        <label class="font-semibold">Tempat Lahir</label>
                        <input required type="text" name="tempat_lahir" value="{{ $PeerConsellorDataDetails->tempat_lahir }}" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Masukkan Tempat Lahir" />
                    </div>
                    <div>
                        <label class="font-semibold">Alamat Domisili</label>
                        <input required type="text" name="alamat" value="{{ $PeerConsellorDataDetails->alamat }}" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Masukkan Alamat Domisili" />
                    </div>
                    <div>
                        <label class="font-semibold">Status Pernikahan</label>
                        <select required name="status_pernikahan" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm">
                            <option value="" disabled>Pilih Status Pernikahan</option>
                            <option value="Belum Menikah" {{ $PeerConsellorDataDetails->status_pernikahan == 'Belum Menikah' ? 'selected' : '' }}>Belum Menikah</option>
                            <option value="Sudah Menikah" {{ $PeerConsellorDataDetails->status_pernikahan == 'Sudah Menikah' ? 'selected' : '' }}>Sudah Menikah</option>
                        </select>
                    </div>
                    <div>
                        <label class="font-semibold">Jenis Kelamin</label>
                        <select required name="jenis_kelamin" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm">
                            <option value="" disabled>Pilih Jenis Kelamin</option>
                            <option value="laki-laki" {{ $PeerConsellorDataDetails->jenis_kelamin == 'laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                            <option value="perempuan" {{ $PeerConsellorDataDetails->jenis_kelamin == 'perempuan' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                    </div>
                    <div>
                        <label class="font-semibold">Nomor WhatsApp</label>
                        <input required type="text" name="no_wa" id="no_wa" value="{{ $PeerConsellorDataDetails->no_wa }}" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Masukkan Nomor WhatsApp" />
                        <small class="text-gray-500">Format: 08xxxxxxxxxx</small>
                    </div>
                    <div>
                        <label class="font-semibold">Suku</label>
                        <input required type="text" name="suku" value="{{ $PeerConsellorDataDetails->suku }}" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Contoh: Jawa" />
                    </div>
                    <div>
                        <label class="font-semibold">Agama</label>
                        <select required name="agama" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm">
                            <option value="" disabled>Pilih Agama</option>
                            <option value="Islam" {{ $PeerConsellorDataDetails->agama == 'Islam' ? 'selected' : '' }}>Islam</option>
                            <option value="Kristen" {{ $PeerConsellorDataDetails->agama == 'Kristen' ? 'selected' : '' }}>Kristen</option>
                            <option value="Katolik" {{ $PeerConsellorDataDetails->agama == 'Katolik' ? 'selected' : '' }}>Katolik</option>
                            <option value="Hindu" {{ $PeerConsellorDataDetails->agama == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                            <option value="Budha" {{ $PeerConsellorDataDetails->agama == 'Budha' ? 'selected' : '' }}>Budha</option>
                            <option value="Khonghucu" {{ $PeerConsellorDataDetails->agama == 'Khonghucu' ? 'selected' : '' }}>Khonghucu</option>
                        </select>
                    </div>
                    <div>
                        <label class="font-semibold">Anak ke-dari Berapa Bersaudara</label>
                        <input required type="text" name="posisi_anak" value="{{ $PeerConsellorDataDetails->posisi_anak }}" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Anak ke-x dari x bersaudara" />
                    </div>
                    <div>
                        <label class="font-semibold">Hobi</label>
                        <input required type="text" name="hobi" value="{{ $PeerConsellorDataDetails->hobi }}" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Masukkan Hobi Anda" />
                    </div>
                    <div>
                        <label class="font-semibold">Pendidikan Terakhir</label>
                        <select required name="pendidikan" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm">
                            <option value="" disabled>Pilih Pendidikan Terakhir</option>
                            <option value="S1/D4 - Sarjana" {{ $PeerConsellorDataDetails->pendidikan == 'S1/D4 - Sarjana' ? 'selected' : '' }}>S1/D4 - Sarjana</option>
                            <option value="D3 - Diploma" {{ $PeerConsellorDataDetails->pendidikan == 'D3 - Diploma' ? 'selected' : '' }}>D3 - Diploma</option>
                            <option value="SMA/SMK" {{ $PeerConsellorDataDetails->pendidikan == 'SMA/SMK' ? 'selected' : '' }}>SMA/SMK</option>
                            <option value="SMP" {{ $PeerConsellorDataDetails->pendidikan == 'SMP' ? 'selected' : '' }}>SMP</option>
                            <option value="SD" {{ $PeerConsellorDataDetails->pendidikan == 'SD' ? 'selected' : '' }}>SD</option>
                        </select>
                    </div>
                    <div>
                        <label class="font-semibold">Asal Sekolah/Universitas</label>
                        <input required type="text" name="asal_sekolah" value="{{ $PeerConsellorDataDetails->asal_sekolah }}" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Masukkan Asal Sekolah Anda" />
                    </div>
                    <div>
                        <label class="font-semibold">Pekerjaan Saat Ini</label>
                        <input required type="text" name="riwayat_pekerjaan" value="{{ $PeerConsellorDataDetails->riwayat_pekerjaan }}" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Sales - PT. Berbinar Insightful Indonesia (2022)" />
                    </div>
                    <div>
                        <label class="font-semibold">Kegiatan Sosial yang Diikuti</label>
                        <input required type="text" name="kegiatan_sosial" value="{{ $PeerConsellorDataDetails->kegiatan_sosial }}" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Pengabdian Pemuda Masa Kini (2023)" />
                    </div>
                </div>

                <!-- Data Konseling -->
                <h1 class="my-8 text-center text-2xl font-bold">Data Konseling</h1>
                <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                    <div>
                        <label class="font-semibold">Tanggal Konseling</label>
                        <input required type="text" name="jadwal_tanggal" id="tglkonseling"
                            value="{{ \Carbon\Carbon::parse($PeerConsellorDataDetails->jadwal_tanggal)->format('d/m/Y') }}"
                            class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="dd/mm/yy" readonly/>
                    </div>
                    <div>
                        <label class="font-semibold">Hari Konseling</label>
                        <input type="text" name="hari" id="hari_konseling"
                            value="{{ \Carbon\Carbon::parse($PeerConsellorDataDetails->jadwal_tanggal)->translatedFormat('l') }}"
                            class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm bg-gray-100" readonly />
                    </div>
                    <select name="jadwal_pukul" id="waktu-konseling" required class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm">
                        <option value="" disabled>Pilih Waktu Konseling</option>
                        @foreach($jadwalHariIni as $jadwal)
                            <option value="{{ $jadwal['waktu'] }}" {{ $PeerConsellorDataDetails->jadwal_pukul == $jadwal['waktu'] ? 'selected' : '' }}>
                                {{ $jadwal['waktu'] }}
                            </option>
                        @endforeach
                    </select>
                    <div>
                        <label class="font-semibold">Metode Konseling</label>
                        <select required name="metode" id="metode-select" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm">
                            <option value="" disabled>Pilih Metode Konseling</option>
                            <option value="online" {{ $PeerConsellorDataDetails->metode == 'online' ? 'selected' : '' }}>Online</option>
                            <option value="offline" {{ $PeerConsellorDataDetails->metode == 'offline' ? 'selected' : '' }}>Offline</option>
                        </select>
                    </div>
                    <div>
                        <label class="font-semibold">Sesi Konseling (Jam)</label>
                        <select name="sesi" id="sesi-select" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm">
                            <option value="" disabled>Pilih Sesi</option>
                            <option value="1" {{ $PeerConsellorDataDetails->sesi == '1' ? 'selected' : '' }}>1 Jam</option>
                            <option value="2" {{ $PeerConsellorDataDetails->sesi == '2' ? 'selected' : '' }}>2 Jam</option>
                            <option value="3" {{ $PeerConsellorDataDetails->sesi == '3' ? 'selected' : '' }}>3 Jam</option>
                        </select>
                    </div>
                    <div class="flex flex-col space-y-1" id="daerah-container" style="display: none;">
                        <label for="daerah-select" class="font-semibold">Daerah Konseling</label>
                        <select name="daerah" id="daerah-select" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm">
                            <option value="">Pilih Daerah Konseling</option>
                            <option value="Bekasi" {{ $PeerConsellorDataDetails->daerah == 'Bekasi' ? 'selected' : '' }}>Bekasi</option>
                            <option value="Jakarta" {{ $PeerConsellorDataDetails->daerah == 'Jakarta' ? 'selected' : '' }}>Jakarta</option>
                            <option value="Tangerang Selatan" {{ $PeerConsellorDataDetails->daerah == 'Tangerang Selatan' ? 'selected' : '' }}>Tangerang Selatan</option>
                            <option value="Padang" {{ $PeerConsellorDataDetails->daerah == 'Padang' ? 'selected' : '' }}>Padang</option>
                            <option value="Wonogiri" {{ $PeerConsellorDataDetails->daerah == 'Wonogiri' ? 'selected' : '' }}>Wonogiri</option>
                            <option value="Malang" {{ $PeerConsellorDataDetails->daerah == 'Malang' ? 'selected' : '' }}>Malang</option>
                        </select>
                    </div>
                    <div>
                        <label class="font-semibold">Harga Konseling</label>
                        <input required name="harga" id="harga-input"
                            value="Rp {{ number_format($PeerConsellorDataDetails->harga, 0, ',', '.') }}"
                            class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm bg-gray-100" placeholder="Rp 0,00" readonly/>
                    </div>
                </div>

                <!-- Topik Konseling -->
                <h1 class="my-8 text-center text-2xl font-bold">Topik Konseling</h1>
                <div>
                    <label class="font-semibold">Cerita Tentang Hal yang Ingin Dikonsultasikan</label>
                    <textarea required name="cerita" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" rows="4" placeholder="Tulislah hal yang ingin Anda konsultasikan">{{ $PeerConsellorDataDetails->cerita }}</textarea>
                </div>

                <div class="mt-8 flex gap-4 border-t-2 border-t-gray-400 pt-5">
                    <button type="button" id="cancelButton"
                        class="rounded-xl flex-1 flex items-center justify-center h-12 text-lg"
                        style="width: 50%; border: 2px solid #3986A3; color: #3986A3;">
                        Batal
                    </button>
                    <button type="submit"
                        class="rounded-xl flex-1 flex items-center justify-center h-12 text-lg"
                        style="width: 50%; background: #3986A3; color: #fff;">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

    <!-- Modal Konfirmasi -->
    <div id="confirmModal" class="fixed inset-0 z-50 flex hidden items-center justify-center bg-black/40">
        <div
            class="relative w-[560px] rounded-[20px] bg-white p-6 text-center font-plusJakartaSans shadow-lg"
            style="
                background:
                    linear-gradient(to right, #74aabf, #3986a3) top/100% 6px no-repeat,
                    white;
                border-radius: 20px;
                background-clip: padding-box, border-box;
            "
        >
            <!-- Warning Icon -->
            <img src="{{ asset("assets/images/dashboard/warning.png") }}" alt="Warning Icon" class="mx-auto h-[83px] w-[83px]" />

            <!-- Title -->
            <h2 class="mt-4 text-2xl font-bold text-stone-900">Konfirmasi Batal</h2>

            <!-- Message -->
            <p class="mt-2 text-base font-medium text-black">Apakah Anda yakin ingin membatalkan perubahan data ini?</p>

            <!-- Actions -->
            <div class="mt-6 flex justify-center gap-3">
                <button id="cancelCancel" class="rounded-lg border border-stone-300 px-6 py-2 text-stone-700">Tidak</button>
                <button id="confirmCancel" class="rounded-[5px] bg-gradient-to-r from-[#74AABF] to-[#3986A3] px-6 py-2 font-medium text-white">Ya</button>
            </div>
        </div>
    </div>
@endsection

@section('script')
<script>
    const jadwalPeerData = @json($jadwalPeerCounselors);

        // Simple WhatsApp validation function
        function validateWhatsApp(number) {
            const cleanNumber = number.replace(/\D/g, '');
            return cleanNumber.length >= 10 && cleanNumber.length <= 13 && cleanNumber.startsWith('08');
        }

        // Form submission validation
        function validateForm() {
            const whatsappInput = document.getElementById('no_wa');
            const number = whatsappInput.value;

            if (number && !validateWhatsApp(number)) {
                Swal.fire({
                    title: 'Nomor WhatsApp Tidak Valid',
                    text: 'Format nomor WhatsApp harus diawali dengan 08 dan memiliki 10-13 digit.',
                    icon: 'error',
                    confirmButtonColor: '#3986A3',
                    confirmButtonText: 'OK',
                });
                whatsappInput.focus();
                return false;
            }

            return true;
        }

        document.addEventListener('DOMContentLoaded', function () {
            const cancelButton = document.getElementById('cancelButton');
            const confirmModal = document.getElementById('confirmModal');
            const confirmCancel = document.getElementById('confirmCancel');
            const cancelCancel = document.getElementById('cancelCancel');

            cancelButton.addEventListener('click', function (e) {
                e.preventDefault();
                confirmModal.classList.remove('hidden');
            });

            confirmCancel.addEventListener('click', function () {
                window.location.href = '{{ route("dashboard.peer-counselors.show", $PeerConsellorDataDetails->id) }}';
            });

            cancelCancel.addEventListener('click', function () {
                confirmModal.classList.add('hidden');
            });
            // Form submission validation
            document.getElementById('editForm').addEventListener('submit', function (e) {
                if (!validateForm()) {
                    e.preventDefault();
                    return false;
                }
            });

            flatpickr('#tanggal_lahir', {
                dateFormat: 'd/m/Y',
                allowInput: true,
            });

            flatpickr('#tglkonseling', {
                dateFormat: 'd/m/Y',
                allowInput: true,
                minDate: new Date().fp_incr(7),
                onChange: function (selectedDates, dateStr, instance) {
                    updateAvailableTimes(dateStr);
                },
            });

            // Initialize times for current date
            const currentDate = document.getElementById('tglkonseling').value;
            if (currentDate) {
                updateAvailableTimes(currentDate);
            }

            // Show/hide daerah
            document.getElementById('metode-select').addEventListener('change', function () {
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

            // Initialize daerah visibility
            if (document.getElementById('metode-select').value === 'offline') {
                document.getElementById('daerah-container').style.display = 'block';
            }

            document.getElementById('sesi-select').addEventListener('change', updateHarga);

            // Update hari when date changes
            document.getElementById('tglkonseling').addEventListener('change', function () {
                const tanggal = this.value;
                const hariInput = document.getElementById('hari_konseling');
                if (!tanggal) {
                    hariInput.value = '';
                    return;
                }
                const parts = tanggal.split('/');
                if (parts.length !== 3) {
                    hariInput.value = '';
                    return;
                }
                const dateObj = new Date(parts[2], parts[1] - 1, parts[0]);
                const hariMap = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
                hariInput.value = hariMap[dateObj.getDay()];
            });

            function updateAvailableTimes(dateStr) {
                const waktuSelect = document.getElementById('waktu-konseling');
                waktuSelect.innerHTML = '<option value="" disabled selected>Pilih Waktu Konseling</option>';

                if (!dateStr) return;

                // Ambil hari dari tanggal
                const parts = dateStr.split('/');
                if (parts.length !== 3) return;
                const dateObj = new Date(parts[2], parts[1] - 1, parts[0]);
                const hariMap = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
                const hari = hariMap[dateObj.getDay()];

                // Filter jadwal sesuai hari
                const jadwalHariIni = jadwalPeerData.filter((j) => j.hari === hari);

                // Isi pilihan jadwal
                jadwalHariIni.forEach((jadwal) => {
                    const waktu = jadwal.pukul_mulai.substring(0, 5) + ' - ' + jadwal.pukul_selesai.substring(0, 5);
                    const option = document.createElement('option');
                    option.value = waktu;
                    option.textContent = waktu;
                    // Pilih value jika sama dengan data user
                    if (waktu === '{{ $PeerConsellorDataDetails->jadwal_pukul }}') {
                        option.selected = true;
                    }
                    waktuSelect.appendChild(option);
                });
            }
        });
    </script>
@endsection
