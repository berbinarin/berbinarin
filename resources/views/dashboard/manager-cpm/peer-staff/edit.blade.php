@extends('dashboard.layouts.app', [
    'title' => 'Edit Data Psikolog Staff',
])

@section('content')
    <section class="flex w-full h-full overflow-hidden">
        <div class="flex w-full flex-col">
            <div class="py-4 md:pb-7 md:pt-12">
                <div class="mb-2 flex items-center gap-2">
                    <a href="{{ route('dashboard.peer-staff.index') }}">
                        <img src="{{ asset('assets/images/dashboard/svg-icon/dashboard-back.png') }}" alt="Back Btn" />
                    </a>
                    <p class="text-base font-bold leading-normal text-gray-800 sm:text-lg md:text-2xl lg:text-4xl">Edit Data
                        Peer Staff</p>
                </div>
                <p class="w-3/4 text-disabled">
                    Halaman yang digunakan untuk mengedit, mengelola, dan melengkapi seluruh data pribadi, latar belakang,
                    serta informasi penting lainnya dari psikolog secara detail untuk keperluan administrasi dan monitoring.
                </p>
            </div>
            <div
                class="rounded-md bg-white px-4 py-4 shadow-lg shadow-gray-400 md:px-8 md:py-7 xl:px-10 flex-1 overflow-y-auto">
                <form action="{{ route('dashboard.peer-staff.update', $PsikologDataDetails->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <!-- Data Diri -->
                    <h1 class="mb-6 text-center text-2xl font-bold">Data Diri</h1>
                    <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                        <div>
                            <label class="font-normal text-sm">Nama Lengkap</label>
                            <input required type="text" name="nama"
                                class="w-full rounded-lg border-[#e5e5e5] px-3 py-[13.5px] mt-2 shadow-sm text-xs text-slate-500"
                                placeholder="Masukkan Nama Lengkap" />
                        </div>
                        <div>
                            <label class="font-normal text-sm">Nomor WhatsApp</label>
                            <input required type="number" name="no_wa"
                                class="w-full rounded-lg border-[#e5e5e5] px-3 py-[13.5px] mt-2 shadow-sm text-xs text-slate-500"
                                placeholder="Masukkan Nomor WhatsApp" />
                        </div>
                        <div>
                            <label class="font-normal text-sm py-1">Email</label>
                            <input required type="email" name="email"
                                class="w-full rounded-lg border-[#e5e5e5] px-3 py-[13.5px] shadow-sm text-xs text-slate-500"
                                placeholder="Masukkan Email" />
                        </div>
                        <div>
                            <label class="font-normal text-sm">Umur</label>
                            <input required type="number" name="umur"
                                class="w-full rounded-lg border-[#e5e5e5] px-3 py-[13.5px] mt-2 shadow-sm text-xs text-slate-500"
                                placeholder="Masukkan Umur" />
                        </div>
                        <div>
                            <label class="font-normal text-sm">Tempat Lahir</label>
                            <input required type="text" name="tempat_lahir"
                                class="w-full rounded-lg border-[#e5e5e5] px-3 py-[13.5px] mt-2 shadow-sm text-xs text-slate-500"
                                placeholder="Masukkan Tempat Lahir" />
                        </div>
                        <div>
                            <label class="font-normal text-sm">Tanggal Lahir</label>
                            <input required type="date" id="tgllahir" name="tanggal_Lahir"
                                class="w-full rounded-lg border-[#e5e5e5] px-3 py-[13.5px] mt-2 shadow-sm text-xs text-slate-500"
                                placeholder="dd/mm/yy" readonly />
                        </div>
                        <div>
                            <label class="font-normal text-sm">Anak ke-</label>
                            <input required type="text" name="posisi_anak"
                                class="w-full rounded-lg border-[#e5e5e5] px-3 py-[13.5px] mt-2 shadow-sm text-xs text-slate-500"
                                placeholder="Anak ke-x dari x bersaudara" />
                        </div>
                        <div>
                            <label class="font-normal text-sm">Pendidikan Saat Ini</label>
                            <input required type="text" name="posisi_anak"
                                class="w-full rounded-lg border-[#e5e5e5] px-3 py-[13.5px] mt-2 shadow-sm text-xs text-slate-500"
                                placeholder="SMA" />
                        </div>

                        <div>
                            <label class="font-normal text-sm">Alamat Domisili</label>
                            <input required type="text" name="alamat"
                                class="w-full rounded-lg border-[#e5e5e5] px-3 py-[13.5px] mt-2 shadow-sm text-xs text-slate-500"
                                placeholder="Masukkan Alamat Domisili Anda" />
                        </div>
                        <div>
                            <label class="font-normal text-sm">Agama</label>
                            <select required name="agama"
                                class="w-full rounded-lg border-[#e5e5e5] px-3 py-[13.5px] mt-2 shadow-sm text-xs text-slate-500">
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
                            <label class="font-normal text-sm">Suku</label>
                            <input required type="text" name="suku"
                                class="w-full rounded-lg border-[#e5e5e5] px-3 py-[13.5px] mt-2 shadow-sm text-xs text-slate-500"
                                placeholder="Contoh: Jawa" />
                        </div>
                        <div>
                            <label class="font-normal text-smd">Status Pernikahan</label>
                            <select required name="status_pernikahan"
                                class="w-full rounded-lg border-[#e5e5e5] px-3 py-[13.5px] mt-2 shadow-sm text-xs text-slate-500">
                                <option value="" disabled selected>Pilih Status Pernikahan</option>
                                <option value="Belum Menikah">Belum Menikah</option>
                                <option value="Sudah Menikah">Sudah Menikah</option>
                            </select>
                        </div>
                        <div>
                            <label class="font-normal text-sm">Riwayat Pekerjaan</label>
                            <input required type="text" name="riwayat_pekerjaan"
                                class="w-full rounded-lg border-[#e5e5e5] px-3 py-[13.5px] mt-2 shadow-sm text-xs text-slate-500"
                                placeholder="PT Berbinar Insighfull Indonesia" />
                        </div>
                        <div>
                            <label class="font-normal text-sm">Divisi dan Posisi</label>
                            <input required type="text" name="divisi"
                                class="w-full rounded-lg border-[#e5e5e5] px-3 py-[13.5px] mt-2 shadow-sm text-xs text-slate-500"
                                placeholder="Counseling PM (Staff)" />
                        </div>
                        <div>
                            <label class="font-normal text-sm">Kegiatan Sosial yang diikuti</label>
                            <input required type="text" name="hobi"
                                class="w-full rounded-lg border-[#e5e5e5] px-3 py-[13.5px] mt-2 shadow-sm text-xs text-slate-500"
                                placeholder="Masukkan Hobi atau Kegiatan Sosial yang diikuti" />
                        </div>
                        <div>
                            <label class="font-normal text-sm">Hobi</label>
                            <input required type="text" name="hobi"
                                class="w-full rounded-lg border-[#e5e5e5] px-3 py-[13.5px] mt-2 shadow-sm text-xs text-slate-500"
                                placeholder="Masukkan Hobi atau Kegiatan Sosial yang diikuti" />
                        </div>
                    </div>

                    <!-- Data Konseling -->
                    <h1 class="mb-6 text-center text-2xl font-bold mt-6">Data Konseling</h1>
                    <div class="mb-8 grid grid-cols-1 gap-6 md:grid-cols-2">
                        <div>
                            <label class="font-normal text-sm">Tanggal Pengajuan Konseling <span
                                    class="font-semibold text-sm">(minimal 5 hari setelah
                                    pengisian
                                    form)</span></label>
                            <input required type="date" name="jadwal_tanggal" id="tglkonseling"
                                class="w-full rounded-lg border-[#e5e5e5] px-3 py-[13.5px] mt-2 shadow-sm text-xs text-slate-500"
                                placeholder="dd/mm/yy" readonly />
                        </div>
                        <div>
                            <label class="font-normal text-sm">Waktu Pengajuan Konseling</label>
                            <input required type="time" id="waktukonseling" name="jadwal_pukul"
                                class="w-full rounded-lg border-[#e5e5e5] px-3 py-[13.5px] mt-2 shadow-sm text-xs text-slate-500"
                                placeholder="12:00" />
                        </div>
                        <div>
                            <label class="font-normal text-sm">Topik Pengajuan</label>
                            <input type="text" name="hari" id="hari_konseling"
                                class="w-full rounded-lg border-[#e5e5e5] px-3 py-[13.5px] mt-2 shadow-sm text-xs text-slate-500"
                                placeholder="Kecemasan" />
                        </div>
                    </div>

                    <!-- Topik Konseling -->
                    <h1 class="my-8 text-center text-2xl font-bold">Topik Konseling</h1>
                    <div class="mb-6">
                        <label class="font-normal text-sm">Cerita Permasalahan yang ingin dikonsultasikan</label>
                        <textarea required name="topik_pengajuan"
                            class="w-full rounded-lg border-[#e5e5e5] px-3 py-[13.5px] mt-2 shadow-sm text-xs text-slate-500" rows="1"
                            placeholder="Review CV / Overthinking / Insecurities / Kecemasan / DLL"></textarea>
                    </div>

                    <div class="mt-8 flex gap-4 border-none pt-5">
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
                <img src="{{ asset('assets/images/dashboard/svg-icon/warning.svg') }}" alt="Warning Icon"
                    class="h-12 w-12">
            </div>
            <p class="text-lg mb-6">Apakah Anda yakin ingin membatalkan perubahan data ini?</p>
            <div class="flex justify-center gap-4">
                <button id="confirmCancel" class="px-6 py-2 bg-[#3986A3] text-white rounded-lg">OK</button>
                <button id="cancelCancel"
                    class="px-6 py-2 border border-[#3986A3] text-[#3986A3] rounded-lg">Cancel</button>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
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
                window.location.href = "{{ route('dashboard.peer-staff.index') }}";
            });

            cancelCancel.addEventListener('click', function() {
                confirmModal.classList.add('hidden');
            });
        });
    </script>
@endsection
