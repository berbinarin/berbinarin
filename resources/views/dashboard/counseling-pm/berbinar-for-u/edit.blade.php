@extends(
    "dashboard.layouts.app",
    [
        "title" => "Edit Data Berbinar For U",
    ]
)

@section("content")
    <section class="flex w-full">
        <div class="flex w-full flex-col">
            <div class="py-4 md:pb-7 md:pt-12">
                <div class="mb-2 flex items-center gap-2">
                    <a href="{{ route("dashboard.berbinar-for-u.index") }}">
                        <img src="{{ asset("assets/images/dashboard/svg-icon/dashboard-back.webp") }}" alt="Back Btn" />
                    </a>
                    <p class="text-base font-bold leading-normal text-gray-800 sm:text-lg md:text-2xl lg:text-4xl">Ubah Data Berbinar For U</p>
                </div>
                <p class="w-full text-disabled">Halaman untuk mengedit data peserta Berbinar For U.</p>
            </div>
            <div class="rounded-md bg-white px-4 py-4 shadow-lg shadow-gray-400 mb-7 md:px-8 md:py-7 xl:px-10">
                <form action="{{ route('dashboard.berbinar-for-u.update', $BerbinarForUDataDetails->id) }}" method="POST">
                    @csrf
                    @method("PUT")
                    <input type="hidden" name="kategori" value="berbinar-for-u" />

                    <!-- Data Diri -->
                    <h1 class="mb-6 text-center text-2xl font-bold">Data Diri</h1>
                    <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                        <div>
                            <label class="font-semibold">Nama Lengkap</label>
                            <input required type="text" name="nama" value="{{ $BerbinarForUDataDetails->nama }}" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Masukkan Nama Lengkap" />
                        </div>
                        <div>
                            <label class="font-semibold">Email</label>
                            <input required type="email" name="email" value="{{ $BerbinarForUDataDetails->email }}" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Masukkan Email" />
                        </div>
                        <div>
                            <label class="font-semibold">Tanggal Lahir</label>
                            <input required type="text" id="tanggal_lahir" name="tanggal_lahir" value="{{ \Carbon\Carbon::parse($BerbinarForUDataDetails->tanggal_lahir)->format("d/m/Y") }}" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="dd/mm/yy" readonly />
                        </div>
                        <div>
                            <label class="font-semibold">Tempat Lahir</label>
                            <input required type="text" name="tempat_lahir" value="{{ $BerbinarForUDataDetails->tempat_lahir }}" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Masukkan Kota Domisili" />
                        </div>
                        <div>
                            <label class="font-semibold">Alamat Domisili</label>
                            <input required type="text" name="alamat" value="{{ $BerbinarForUDataDetails->alamat }}" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Masukkan Alamat Domisili" />
                        </div>
                        <div>
                            <label class="font-semibold">Status Pernikahan</label>
                            <select required name="status_pernikahan" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm">
                                <option value="" disabled>Pilih Status Pernikahan</option>
                                <option value="Belum Menikah" {{ $BerbinarForUDataDetails->status_pernikahan == "Belum Menikah" ? "selected" : "" }}>Belum Menikah</option>
                                <option value="Sudah Menikah" {{ $BerbinarForUDataDetails->status_pernikahan == "Sudah Menikah" ? "selected" : "" }}>Sudah Menikah</option>
                            </select>
                        </div>
                        <div>
                            <label class="font-semibold">Jenis Kelamin</label>
                            <select required name="jenis_kelamin" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm">
                                <option value="" disabled>Pilih Jenis Kelamin</option>
                                <option value="laki-laki" {{ $BerbinarForUDataDetails->jenis_kelamin == "laki-laki" ? "selected" : "" }}>Laki-laki</option>
                                <option value="perempuan" {{ $BerbinarForUDataDetails->jenis_kelamin == "perempuan" ? "selected" : "" }}>Perempuan</option>
                            </select>
                        </div>
                        <div>
                            <label class="font-semibold">Nomor WhatsApp</label>
                            <input required type="number" name="no_wa" value="{{ $BerbinarForUDataDetails->no_wa }}" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Masukkan Nomor WhatsApp" />
                        </div>
                        <div>
                            <label class="font-semibold">Suku Bangsa</label>
                            <input required type="text" name="suku" value="{{ $BerbinarForUDataDetails->suku }}" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Masukkan Suku Bangsa" />
                        </div>
                        <div>
                            <label class="font-semibold">Agama</label>
                            <select required name="agama" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm">
                                <option value="" disabled>Pilih Agama</option>
                                <option value="Islam" {{ $BerbinarForUDataDetails->agama == "Islam" ? "selected" : "" }}>Islam</option>
                                <option value="Kristen" {{ $BerbinarForUDataDetails->agama == "Kristen" ? "selected" : "" }}>Kristen</option>
                                <option value="Katolik" {{ $BerbinarForUDataDetails->agama == "Katolik" ? "selected" : "" }}>Katolik</option>
                                <option value="Hindu" {{ $BerbinarForUDataDetails->agama == "Hindu" ? "selected" : "" }}>Hindu</option>
                                <option value="Budha" {{ $BerbinarForUDataDetails->agama == "Budha" ? "selected" : "" }}>Budha</option>
                                <option value="Khonghucu" {{ $BerbinarForUDataDetails->agama == "Khonghucu" ? "selected" : "" }}>Khonghucu</option>
                            </select>
                        </div>
                        <div>
                            <label class="font-semibold">Anak ke-</label>
                            <input required type="text" name="posisi_anak" value="{{ $BerbinarForUDataDetails->posisi_anak }}" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Anak ke-x dari x bersaudara" />
                        </div>
                        <div>
                            <label class="font-semibold">Hobi</label>
                            <input required type="text" name="hobi" value="{{ $BerbinarForUDataDetails->hobi }}" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Masukkan Hobi" />
                        </div>
                    </div>

                    <!-- Riwayat pendidikan -->
                    <h1 class="my-8 text-center text-2xl font-bold">Riwayat Pendidikan</h1>
                    <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                        <div>
                            <label class="font-semibold">Pendidikan Terakhir</label>
                            <select required name="pendidikan" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm">
                                <option value="" disabled>Pilih Pendidikan Terakhir</option>
                                <option value="S1/D4 - Sarjana" {{ $BerbinarForUDataDetails->pendidikan == "S1/D4 - Sarjana" ? "selected" : "" }}>S1/D4 - Sarjana</option>
                                <option value="D3 - Diploma" {{ $BerbinarForUDataDetails->pendidikan == "D3 - Diploma" ? "selected" : "" }}>D3 - Diploma</option>
                                <option value="SMA/SMK" {{ $BerbinarForUDataDetails->pendidikan == "SMA/SMK" ? "selected" : "" }}>SMA/SMK</option>
                                <option value="SMP" {{ $BerbinarForUDataDetails->pendidikan == "SMP" ? "selected" : "" }}>SMP</option>
                                <option value="SD" {{ $BerbinarForUDataDetails->pendidikan == "SD" ? "selected" : "" }}>SD</option>
                            </select>
                        </div>
                        <div>
                            <label class="font-semibold">Asal Sekolah/Universitas</label>
                            <input required type="text" name="asal_sekolah" value="{{ $BerbinarForUDataDetails->asal_sekolah }}" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Universitas Berbinar" />
                        </div>
                        <div>
                            <label class="font-semibold">Pekerjaan Saat Ini</label>
                            <input required type="text" name="riwayat_pekerjaan" value="{{ $BerbinarForUDataDetails->riwayat_pekerjaan }}" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Karyawan Swasta" />
                        </div>
                        <div>
                            <label class="font-semibold">Kegiatan Sosial yang Pernah/Sedang Diikuti</label>
                            <input required type="text" name="kegiatan_sosial" value="{{ $BerbinarForUDataDetails->kegiatan_sosial }}" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" placeholder="Pengabdian Pemuda Masyarakat" />
                        </div>
                    </div>

                    <!-- Topik Konseling -->
                    <h1 class="my-8 text-center text-2xl font-bold">Topik Konseling</h1>
                    <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                        <div>
                            <label class="font-semibold">Tuliskan Apa yang Ingin Anda Ceritakan</label>
                            <textarea required name="cerita_utama" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" rows="4" placeholder="Tuliskan hal utama yang ingin Anda konsultasikan">{{ $BerbinarForUDataDetails->cerita_utama }}</textarea>
                        </div>
                        <div class="">
                            <label class="font-semibold">Tuliskan Informasi Tambahan</label>
                            <textarea required name="cerita_tambahan" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" rows="4" placeholder="Informasi tambahan yang dapat membantu Peer Counselor">{{ $BerbinarForUDataDetails->cerita_tambahan }}</textarea>
                        </div>
                        <div class="">
                            <label class="font-semibold">Apa yang Mendorong Anda untuk Konseling?</label>
                            <textarea required name="alasan_konseling" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" rows="4" placeholder="Alasan mencari dukungan Peer Counselor">{{ $BerbinarForUDataDetails->alasan_konseling }}</textarea>
                        </div>
                        <div class="">
                            <label class="font-semibold">Harapan Setelah Konseling</label>
                            <textarea required name="harapan_konseling" class="w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm" rows="4" placeholder="Harapan setelah mengikuti konseling">{{ $BerbinarForUDataDetails->harapan_konseling }}</textarea>
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
            <p class="mt-2 text-base font-medium text-black">Apakah Anda yakin ingin membatalkan perubahan data ini?</p>

            <!-- Actions -->
            <div class="mt-6 flex justify-center gap-3">
                <button id="cancelCancel" class="rounded-lg border border-stone-300 px-6 py-2 text-stone-700">Tidak</button>
                <button id="confirmCancel" class="rounded-[5px] bg-gradient-to-r from-[#74AABF] to-[#3986A3] px-6 py-2 font-medium text-white">Ya</button>
            </div>
        </div>
    </div>
@endsection

@section("script")
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
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
                window.location.href = '{{ route("dashboard.berbinar-for-u.show", $BerbinarForUDataDetails->id) }}';
            });

            cancelCancel.addEventListener('click', function () {
                confirmModal.classList.add('hidden');
            });
        });
    </script>
@endsection
