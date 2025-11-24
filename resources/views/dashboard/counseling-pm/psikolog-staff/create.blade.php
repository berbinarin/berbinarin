@extends(
    "dashboard.layouts.app",
    [
        "title" => "Tambah Data Psikolog Staff",
    ]
)

@section("content")
    <section class="flex w-full">
        <div class="flex w-full flex-col">
            <div class="py-4 md:pb-7 md:pt-12">
                <div class="mb-2 flex items-center gap-2">
                    <a href="{{ route("dashboard.psikolog-staff.index") }}">
                        <img src="{{ asset("assets/images/dashboard/svg-icon/dashboard-back.webp") }}" alt="Back Btn" />
                    </a>
                    <p class="text-base font-bold leading-normal text-gray-800 sm:text-lg md:text-2xl lg:text-4xl">Tambah Data Psikolog Staff</p>
                </div>
                <p class="w-3/4 text-disabled">Halaman yang digunakan untuk menambahkan, mengelola, dan melengkapi seluruh data pribadi, latar belakang, serta informasi penting lainnya dari psikolog secara detail untuk keperluan administrasi dan monitoring.</p>
            </div>
            <div class="mb-7 rounded-md bg-white px-4 py-4 shadow-lg shadow-gray-400 md:px-8 md:py-7 xl:px-10">
                <form action="{{ route("dashboard.psikolog-staff.index") }}" method="GET">
                    @csrf
                    <input type="hidden" name="kategori" value="psikolog-staff" />

                    <!-- Data Diri -->
                    <h1 class="mb-6 text-center text-2xl font-bold">Data Diri</h1>
                    <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                        <div>
                            <label class="font-semibold">Nama Lengkap</label>
                            <input required type="text" name="nama" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Masukkan Nama Lengkap" />
                        </div>
                        <div>
                            <label class="font-semibold">Nomor WhatsApp</label>
                            <input required type="number" name="no_wa" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Masukkan Nomor WhatsApp" />
                        </div>
                        <div>
                            <label class="font-semibold">Email</label>
                            <input required type="email" name="email" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Masukkan Email" />
                        </div>
                        <div>
                            <label class="font-semibold">Jenis Kelamin</label>
                            <select required name="jenis_kelamin" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm">
                                <option value="" disabled selected>Pilih Jenis Kelamin</option>
                                <option value="laki-laki">Laki-laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div>
                            <label class="font-semibold">Tanggal Lahir</label>
                            <input required type="date" id="tgllahir" name="tanggal_lahir" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="dd/mm/yy" readonly />
                        </div>
                        <div>
                            <label class="font-semibold">Tempat Lahir</label>
                            <input required type="text" name="tempat_lahir" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Masukkan Tempat Lahir" />
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
                            <label class="font-semibold">Suku Bangsa</label>
                            <input required type="text" name="suku" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Contoh: Jawa" />
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
                            <label class="font-semibold">Alamat Domisili</label>
                            <input required type="text" name="alamat" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Masukkan Alamat Domisili" />
                        </div>
                        <div>
                            <label class="font-semibold">Anak ke-</label>
                            <input required type="text" name="posisi_anak" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Anak ke-x dari x bersaudara" />
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
                            <label class="font-semibold">Asal Sekolah</label>
                            <input required type="text" name="asal_sekolah" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Masukkan Asal Sekolah Anda" />
                        </div>
                        <div>
                            <label class="font-semibold">Hobi</label>
                            <input required type="text" name="hobi" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Masukkan Hobi Anda" />
                        </div>
                        <div>
                            <label class="font-semibold">Riwayat Pekerjaan</label>
                            <input required type="text" name="riwayat_pekerjaan" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Sales - PT. Berbinar Insightful Indonesia (2022)" />
                        </div>
                        <div>
                            <label class="font-semibold">Kegiatan Sosial yang Diikuti</label>
                            <input required type="text" name="kegiatan_sosial" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Pengabdian Pemuda Masa Kini (2023)" />
                        </div>
                    </div>

                    <!-- Data Konseling -->
                    <h1 class="my-8 text-center text-2xl font-bold">Data Konseling</h1>
                    <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                        <div>
                            <label class="font-semibold">Tanggal Konseling</label>
                            <input required type="text" name="jadwal_tanggal" id="tglkonseling" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="dd/mm/yy" readonly />
                        </div>
                        <div>
                            <label class="font-semibold">Hari Konseling</label>
                            <input type="text" name="hari" id="hari_konseling" class="w-full rounded-lg border-gray-300 bg-gray-100 px-3 py-2 shadow-sm" readonly />
                        </div>
                        <div>
                            <label class="font-semibold">Jam Konseling</label>
                            <input required type="time" id="waktu-konseling" name="jadwal_pukul" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" />
                        </div>
                        <div>
                            <label class="font-semibold">Metode Konseling</label>
                            <select required name="metode" id="metode-select" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm">
                                <option value="" disabled selected>Pilih Metode Konseling</option>
                                <option value="online">Online</option>
                                <option value="offline">Offline</option>
                            </select>
                        </div>
                        <div>
                            <label class="font-semibold">Sesi Konseling (Jam)</label>
                            <select name="sesi" id="sesi-select" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm">
                                <option value="" disabled selected>Pilih Sesi</option>
                                <option value="1">1 Jam</option>
                                <option value="2">2 Jam</option>
                                <option value="3">3 Jam</option>
                            </select>
                        </div>
                        <div class="flex flex-col space-y-1" id="daerah-container" style="display: none">
                            <label for="daerah-select" class="font-semibold">Daerah Konseling</label>
                            <select name="daerah" id="daerah-select" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm">
                                <option value="">Pilih Daerah Konseling</option>
                                <option value="Bekasi">Bekasi</option>
                                <option value="Jakarta">Jakarta</option>
                                <option value="Tangerang Selatan">Tangerang Selatan</option>
                                <option value="Padang">Padang</option>
                                <option value="Wonogiri">Wonogiri</option>
                                <option value="Malang">Malang</option>
                            </select>
                        </div>
                        <div>
                            <label class="font-semibold">Harga Konseling</label>
                            <input required name="harga" id="harga-input" class="w-full rounded-lg border-gray-300 bg-gray-100 px-3 py-2 shadow-sm" placeholder="Rp 0,00" readonly />
                        </div>
                    </div>

                    <!-- Topik Konseling -->
                    <h1 class="my-8 text-center text-2xl font-bold">Topik Konseling</h1>
                    <div>
                        <label class="font-semibold">Cerita Tentang Hal yang Ingin Dikonsultasikan</label>
                        <textarea required name="cerita" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" rows="4" placeholder="Tulislah hal yang ingin Anda konsultasikan"></textarea>
                    </div>

                    <div class="mt-8 flex gap-4 pt-5">
                        <button type="button" id="cancelButton" class="flex h-12 w-1/3 flex-1 items-center justify-center rounded-xl text-lg" style="width: 50%; border: 2px solid #3986a3; color: #3986a3">Batal</button>
                        <button type="submit" class="flex h-12 w-1/3 flex-1 items-center justify-center rounded-xl text-lg" style="width: 50%; background: #3986a3; color: #fff">Simpan</button>
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
            <img src="{{ asset("assets/images/dashboard/warning.webp") }}" alt="Warning Icon" class="mx-auto h-[83px] w-[83px]" />

            <!-- Title -->
            <h2 class="mt-4 text-2xl font-bold text-stone-900">Konfirmasi Batal</h2>

            <!-- Message -->
            <p class="mt-2 text-base font-medium text-black">Apakah Anda yakin ingin membatalkan penambahan ini?</p>

            <!-- Actions -->
            <div class="mt-6 flex justify-center gap-3">
                <button id="cancelCancel" class="rounded-lg border border-stone-300 px-6 py-2 text-stone-700">Tidak</button>
                <button id="confirmCancel" class="rounded-[5px] bg-gradient-to-r from-[#74AABF] to-[#3986A3] px-6 py-2 font-medium text-white">Ya</button>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        const jadwalPeerData = @json($jadwalPeerCounselors);

        function getDayName(dateString) {
            const days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
            const dateParts = dateString.split('/');
            const dateObj = new Date(dateParts[2], dateParts[1] - 1, dateParts[0]);
            return days[dateObj.getDay()];
        }

        function formatTime(timeString) {
            const timeParts = timeString.split(':');
            const hours = timeParts[0].padStart(2, '0');
            const minutes = timeParts[1] ? timeParts[1].padStart(2, '0') : '00';
            return `${hours}:${minutes}`;
        }

        function updateAvailableTimes(selectedDate) {
            const waktuSelect = document.getElementById('waktu-konseling');

            // Clear previous options
            waktuSelect.innerHTML = '<option value="" disabled selected>Pilih Waktu Konseling</option>';

            if (selectedDate) {
                const dayName = getDayName(selectedDate);

                // Update hari field
                const hariInput = document.getElementById('hari_konseling');
                hariInput.value = dayName;

                // Filter jadwal based on selected day
                const filteredJadwal = jadwalPeerData.filter((jadwal) => jadwal.hari === dayName);

                if (filteredJadwal.length > 0) {
                    filteredJadwal.forEach((jadwal) => {
                        const option = document.createElement('option');
                        const formattedStartTime = formatTime(jadwal.pukul_mulai);
                        const formattedEndTime = formatTime(jadwal.pukul_selesai);
                        option.value = `${formattedStartTime} - ${formattedEndTime}`;
                        option.textContent = `${formattedStartTime} - ${formattedEndTime}`;
                        waktuSelect.appendChild(option);
                    });

                    waktuSelect.disabled = false;
                } else {
                    const option = document.createElement('option');
                    option.value = '';
                    option.textContent = 'Tidak ada jadwal tersedia untuk hari ini';
                    option.disabled = true;
                    waktuSelect.appendChild(option);
                    waktuSelect.disabled = true;
                }
            } else {
                waktuSelect.disabled = true;
                // Clear hari field
                document.getElementById('hari_konseling').value = '';
            }
            updateHarga();
        }

        function updateHarga() {
            const tanggal = document.getElementById('tglkonseling').value;
            const waktu = document.getElementById('waktu-konseling').value;
            const metode = document.getElementById('metode-select').value;
            const sesi = document.getElementById('sesi-select').value;
            const hargaInput = document.getElementById('harga-input');

            if (!tanggal || !waktu || !metode || !sesi) {
                hargaInput.value = '';
                return;
            }

            let harga = 0;
            if (metode === 'online') {
                harga = { 1: 45000, 2: 90000, 3: 135000 }[parseInt(sesi)];
            } else if (metode === 'offline') {
                harga = { 1: 55000, 2: 110000, 3: 165000 }[parseInt(sesi)];
            }

            hargaInput.value = harga ? 'Rp ' + harga.toLocaleString('id-ID') : '';
        }

        document.addEventListener('DOMContentLoaded', function () {
            flatpickr('#tglkonseling', {
                dateFormat: 'd/m/Y',
                allowInput: true,
                minDate: new Date().fp_incr(7),
                onChange: function (selectedDates, dateStr, instance) {
                    updateAvailableTimes(dateStr);
                },
            });

            flatpickr('#tanggal_lahir', {
                dateFormat: 'd/m/Y',
                allowInput: true,
            });

            const cancelButton = document.getElementById('cancelButton');
            const confirmModal = document.getElementById('confirmModal');
            const confirmCancel = document.getElementById('confirmCancel');
            const cancelCancel = document.getElementById('cancelCancel');

            cancelButton.addEventListener('click', function (e) {
                e.preventDefault();
                confirmModal.classList.remove('hidden');
            });

            confirmCancel.addEventListener('click', function () {
                window.location.href = '{{ route("dashboard.psikolog-staff.index") }}';
            });

            cancelCancel.addEventListener('click', function () {
                confirmModal.classList.add('hidden');
            });

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

            document.getElementById('waktu-konseling').addEventListener('change', updateHarga);
            document.getElementById('sesi-select').addEventListener('change', updateHarga);
        });
    </script>
@endsection
