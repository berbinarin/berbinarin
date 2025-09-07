@extends(
    "dashboard.layouts.app",
    [
        "title" => "Tambah Data Berbinar For U",
    ]
)

@section("content")
    <section class="flex w-full">
        <div class="flex w-full flex-col">
            <div class="py-4 md:pb-7 md:pt-12">
                <div class="mb-2 flex items-center gap-2">
                    <a href="{{ route("dashboard.berbinar-for-u.index") }}">
                        <img src="{{ asset("assets/images/dashboard/svg-icon/dashboard-back.png") }}" alt="Back Btn" />
                    </a>
                    <p class="text-base font-bold leading-normal text-gray-800 sm:text-lg md:text-2xl lg:text-4xl">Add Berbinar For U Data</p>
                </div>
                <p class="w-full text-disabled">Halaman untuk menambahkan entri baru ke dalam layanan Berbinar For U, baik untuk mencatat curhatan yang masuk secara manual maupun input dari pihak psikolog.</p>
            </div>
            <div class="rounded-md bg-white px-4 py-4 shadow-lg shadow-gray-400 mb-7 md:px-8 md:py-7 xl:px-10">
                <form action="{{ route('dashboard.berbinar-for-u.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="kategori" value="berbinar-for-u" />

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
                            <input required type="text" id="tanggal_lahir" name="tanggal_lahir" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="dd/mm/yy" readonly />
                        </div>
                        <div>
                            <label class="font-semibold">Tempat Lahir</label>
                            <input required type="text" name="tempat_lahir" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Masukkan Kota Domisili" />
                        </div>
                        <div>
                            <label class="font-semibold">Alamat Domisili</label>
                            <input required type="text" name="alamat" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Masukkan Alamat Domisili" />
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
                            <label class="font-semibold">Jenis Kelamin</label>
                            <select required name="jenis_kelamin" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm">
                                <option value="" disabled selected>Pilih Jenis Kelamin</option>
                                <option value="laki-laki">Laki-laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div>
                            <label class="font-semibold">Nomor WhatsApp</label>
                            <input required type="number" name="no_wa" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Masukkan Nomor WhatsApp" />
                        </div>
                        <div>
                            <label class="font-semibold">Suku Bangsa</label>
                            <input required type="text" name="suku" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Masukkan Suku Bangsa" />
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
                            <label class="font-semibold">Anak ke-</label>
                            <input required type="text" name="posisi_anak" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Anak ke-x dari x bersaudara" />
                        </div>
                        <div>
                            <label class="font-semibold">Hobi</label>
                            <input required type="text" name="hobi" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Masukkan Hobi" />
                        </div>
                    </div>

                    <!-- Riwayat pendidikan -->
                    <h1 class="my-8 text-center text-2xl font-bold">Riwayat Pendidikan</h1>
                    <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
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
                            <label class="font-semibold">Asal Sekolah/Universitas</label>
                            <input required type="text" name="asal_sekolah" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Universitas Berbinar" />
                        </div>
                        <div>
                            <label class="font-semibold">Pekerjaan Saat Ini</label>
                            <input required type="text" name="riwayat_pekerjaan" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Karyawan Swasta" />
                        </div>
                        <div>
                            <label class="font-semibold">Kegiatan Sosial yang Pernah/Sedang Diikuti</label>
                            <input required type="text" name="kegiatan_sosial" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Pengabdian Pemuda Masyarakat" />
                        </div>
                    </div>

                    <!-- Topik Konseling -->
                    <h1 class="my-8 text-center text-2xl font-bold">Topik Konseling</h1>
                    <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                        <div>
                            <label class="font-semibold">Tuliskan Apa yang Ingin Anda Ceritakan</label>
                            <textarea required name="cerita_utama" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" rows="3" placeholder="Tuliskan hal utama yang ingin Anda konsultasikan">{{ old('cerita_utama') }}</textarea>
                        </div>
                        <div>
                            <label class="font-semibold">Tuliskan Informasi Tambahan</label>
                            <textarea required name="cerita_tambahan" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" rows="3" placeholder="Informasi tambahan yang dapat membantu Peer Counselor">{{ old('cerita_tambahan') }}</textarea>
                        </div>
                        <div>
                            <label class="font-semibold">Apa yang Mendorong Anda untuk Konseling?</label>
                            <textarea required name="alasan_konseling" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" rows="3" placeholder="Alasan mencari dukungan Peer Counselor">{{ old('alasan_konseling') }}</textarea>
                        </div>
                        <div>
                            <label class="font-semibold">Harapan Setelah Konseling</label>
                            <textarea required name="harapan_konseling" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" rows="3" placeholder="Harapan setelah mengikuti konseling">{{ old('harapan_konseling') }}</textarea>
                        </div>
                    </div>

                    <div class="mt-8 flex gap-4 border-t-2 border-t-gray-400 pt-5">
                        <button type="button" id="cancelButton" class="flex h-12 flex-1 items-center justify-center rounded-xl text-lg" style="width: 50%; border: 2px solid #3986a3; color: #3986a3">Batal</button>
                        <button type="submit" class="flex h-12 flex-1 items-center justify-center rounded-xl text-lg" style="width: 50%; background: #3986a3; color: #fff">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Modal Konfirmasi -->
    <div id="confirmModal" class="fixed inset-0 z-50 flex hidden items-center justify-center bg-black bg-opacity-50">
        <div class="w-full max-w-md rounded-lg bg-white p-6 text-center">
            <div class="mb-4 flex justify-center">
                <img src="{{ asset("assets/images/dashboard/svg-icon/warning.svg") }}" alt="Warning Icon" class="h-12 w-12" />
            </div>
            <p class="mb-6 text-lg">Apakah Anda yakin ingin membatalkan penambahan data ini?</p>
            <div class="flex justify-center gap-4">
                <button id="confirmCancel" class="w-1/3 rounded-lg bg-[#3986A3] px-6 py-2 text-white">OK</button>
                <button id="cancelCancel" class="w-1/3 rounded-lg border border-[#3986A3] px-6 py-2 text-[#3986A3]">Cancel</button>
            </div>
        </div>
    </div>
@endsection

@section("script")
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            flatpickr("#tanggal_lahir", {
                dateFormat: "d/m/Y",
                allowInput: true,
            });

            const cancelButton = document.getElementById('cancelButton');
            const confirmModal = document.getElementById('confirmModal');
            const confirmCancel = document.getElementById('confirmCancel');
            const cancelCancel = document.getElementById('cancelCancel');

            cancelButton.addEventListener('click', function(e) {
                e.preventDefault();
                confirmModal.classList.remove('hidden');
            });

            confirmCancel.addEventListener('click', function() {
                window.location.href = "{{ route('dashboard.berbinar-for-u.index') }}";
            });

            cancelCancel.addEventListener('click', function() {
                confirmModal.classList.add('hidden');
            });
        });
    </script>
@endsection
