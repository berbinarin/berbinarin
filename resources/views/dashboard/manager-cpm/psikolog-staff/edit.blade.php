@extends('dashboard.layouts.app', [
    'title' => 'Edit Data Psikolog',
    'modul' => 'Psikolog Data',
])

@section('content')
    <section class="flex w-full h-full overflow-hidden">
        <div class="flex w-full flex-col">
            <div class="py-4 md:pb-7 md:pt-5 flex-shrink-0">
                <div class="mb-2 flex items-center gap-2">
                    <a href="{{ route('dashboard.psychologists-staff.index') }}">
                        <img src="{{ asset('assets/images/dashboard/svg-icon/dashboard-back.png') }}" alt="Back Btn" />
                    </a>
                    <p class="xl:text-3xl lg:text-xl md:text-lg sm:text-base font-bold leading-normal text-gray-800">
                        Edit Data Psikolog Staff
                    </p>
                </div>
                <p class="w-full text-disabled text-sm xl:text-base font-normal">
                    Halaman yang digunakan untuk menambahkan, mengelola, dan melengkapi seluruh data pribadi, latar
                    belakang,
                    serta informasi penting lainnya dari Psikolog Staff secara detail untuk keperluan administrasi dan
                    monitoring.
                </p>
            </div>

            <!-- Form Section -->
            <div class="rounded-[18px] bg-white px-4 py-4 drop-shadow-lg md:px-8 md:py-5 xl:px-10 flex-1 overflow-y-auto">
                <form action="{{ route('dashboard.psychologists-staff.update', $PsikologDataDetails->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <!-- Data Diri -->
                    <h1 class="mb-6 text-center sm:text-sm md:text-base lg:text-lg xl:text-xl font-bold">Data Diri</h1>
                    <div class="grid grid-cols-1 gap-5 md:grid-cols-2">
                        <div>
                            <label class="font-normal sm:text-sm md:text-md lg:text-base xl:text-lg">Nama Lengkap</label>
                            <input required type="text" name="nama" value="{{ old('nama', $PsikologDataDetails->nama) }}"
                                class="w-full rounded-lg border-[#e5e5e5] px-3 py-[13.5px] mt-2 shadow-sm text-sm md:text-sm lg:text-md xl:text-base text-slate-500"
                                placeholder="Masukkan Nama Lengkap" />
                        </div>
                        <div>
                            <label class="font-normal sm:text-sm md:text-md lg:text-base xl:text-lg">Nomor WhatsApp</label>
                            <input required type="number" name="no_wa" value="{{ old('no_wa', $PsikologDataDetails->no_wa) }}"
                                class="w-full rounded-lg border-[#e5e5e5] px-3 py-[13.5px] mt-2 shadow-sm text-sm md:text-sm lg:text-md xl:text-base text-slate-500"
                                placeholder="Masukkan Nomor WhatsApp" />
                        </div>
                        <div>
                            <label class="font-normal sm:text-sm md:text-md lg:text-base xl:text-lg">Email</label>
                            <input required type="email" name="email" value="{{ old('email', $PsikologDataDetails->email) }}"
                                class="w-full rounded-lg border-[#e5e5e5] px-3 py-[13.5px] mt-2 shadow-sm text-sm md:text-sm lg:text-md xl:text-base text-slate-500"
                                placeholder="Masukkan Email" />
                        </div>
                        <div>
                            <label class="font-normal sm:text-sm md:text-md lg:text-base xl:text-lg">Umur</label>
                            <input required type="number" name="umur" value="{{ old('umur', $PsikologDataDetails->umur) }}"
                                class="w-full rounded-lg border-[#e5e5e5] px-3 py-[13.5px] mt-2 shadow-sm text-sm md:text-sm lg:text-md xl:text-base text-slate-500"
                                placeholder="Masukkan Umur" />
                        </div>
                        <div>
                            <label class="font-normal sm:text-sm md:text-md lg:text-base xl:text-lg">Tempat Lahir</label>
                            <input required type="text" name="tempat_lahir" value="{{ old('tempat_lahir', $PsikologDataDetails->tempat_lahir) }}"
                                class="w-full rounded-lg border-[#e5e5e5] px-3 py-[13.5px] mt-2 shadow-sm text-sm md:text-sm lg:text-md xl:text-base text-slate-500"
                                placeholder="Masukkan Tempat Lahir" />
                        </div>
                        <div>
                            <label class="font-normal sm:text-sm md:text-md lg:text-base xl:text-lg">Tanggal Lahir</label>
                            <input required type="text" id="tgllahir" name="tanggal_Lahir" value="{{ old('tanggal_Lahir', \Carbon\Carbon::parse($PsikologDataDetails->tanggal_Lahir)->format('d/m/Y')) }}"
                                class="w-full rounded-lg border-[#e5e5e5] px-3 py-[13.5px] mt-2 shadow-sm text-sm md:text-sm lg:text-md xl:text-base text-slate-500"
                                placeholder="dd/mm/yy" readonly />
                        </div>
                        <div>
                            <label class="font-normal sm:text-sm md:text-md lg:text-base xl:text-lg">Anak ke-</label>
                            <input required type="text" name="posisi_anak" value="{{ old('posisi_anak', $PsikologDataDetails->posisi_anak) }}"
                                class="w-full rounded-lg border-[#e5e5e5] px-3 py-[13.5px] mt-2 shadow-sm text-sm md:text-sm lg:text-md xl:text-base text-slate-500"
                                placeholder="Anak ke-x dari x bersaudara" />
                        </div>
                        <div>
                            <label class="font-normal sm:text-sm md:text-md lg:text-base xl:text-lg">Pendidikan Saat
                                Ini</label>
                            <input required type="text" name="pendidikan" value="{{ old('pendidikan', $PsikologDataDetails->pendidikan) }}"
                                class="w-full rounded-lg border-[#e5e5e5] px-3 py-[13.5px] mt-2 shadow-sm text-sm md:text-sm lg:text-md xl:text-base text-slate-500"
                                placeholder="SMA" />
                        </div>

                        <div>
                            <label class="font-normal sm:text-sm md:text-md lg:text-base xl:text-lg">Alamat Domisili</label>
                            <input required type="text" name="alamat" value="{{ old('alamat', $PsikologDataDetails->alamat) }}"
                                class="w-full rounded-lg border-[#e5e5e5] px-3 py-[13.5px] mt-2 shadow-sm text-sm md:text-sm lg:text-md xl:text-base text-slate-500"
                                placeholder="Masukkan Alamat Domisili Anda" />
                        </div>
                        <div>
                            <label class="font-normal sm:text-sm md:text-md lg:text-base xl:text-lg">Agama</label>
                            <select required name="agama"
                                class="w-full rounded-lg border-[#e5e5e5] px-3 py-[13.5px] mt-2 shadow-sm text-sm md:text-sm lg:text-md xl:text-base text-slate-500">
                                <option value="" disabled selected>Pilih Agama</option>
                                <option value="Islam" {{ old('agama', $PsikologDataDetails->agama) == 'Islam' ? 'selected' : '' }}>Islam</option>
                                <option value="Kristen" {{ old('agama', $PsikologDataDetails->agama) == 'Kristen' ? 'selected' : '' }}>Kristen</option>
                                <option value="Katolik" {{ old('agama', $PsikologDataDetails->agama) == 'Katolik' ? 'selected' : '' }}>Katolik</option>
                                <option value="Hindu" {{ old('agama', $PsikologDataDetails->agama) == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                                <option value="Budha" {{ old('agama', $PsikologDataDetails->agama) == 'Budha' ? 'selected' : '' }}>Budha</option>
                                <option value="Khonghucu" {{ old('agama', $PsikologDataDetails->agama) == 'Khonghucu' ? 'selected' : '' }}>Khonghucu</option>
                            </select>
                        </div>
                        <div>
                            <label class="font-normal sm:text-sm md:text-md lg:text-base xl:text-lg">Suku</label>
                            <input required type="text" name="suku" value="{{ old('suku', $PsikologDataDetails->suku) }}"
                                class="w-full rounded-lg border-[#e5e5e5] px-3 py-[13.5px] mt-2 shadow-sm text-sm md:text-sm lg:text-md xl:text-base text-slate-500"
                                placeholder="Contoh: Jawa" />
                        </div>
                        <div>
                            <label class="font-normal sm:text-sm md:text-md lg:text-base xl:text-lg">Status
                                Pernikahan</label>
                            <select required name="status_pernikahan"
                                class="w-full rounded-lg border-[#e5e5e5] px-3 py-[13.5px] mt-2 shadow-sm text-sm md:text-sm lg:text-md xl:text-base text-slate-500">
                                <option value="" disabled selected>Pilih Status Pernikahan</option>
                                <option value="Belum Menikah" {{ old('status_pernikahan', $PsikologDataDetails->status_pernikahan) == 'Belum Menikah' ? 'selected' : '' }}>Belum Menikah</option>
                                <option value="Sudah Menikah" {{ old('status_pernikahan', $PsikologDataDetails->status_pernikahan) == 'Sudah Menikah' ? 'selected' : '' }}>Sudah Menikah</option>
                            </select>
                        </div>
                        <div>
                            <label class="font-normal sm:text-sm md:text-md lg:text-base xl:text-lg">Riwayat
                                Pekerjaan</label>
                            <input required type="text" name="riwayat_pekerjaan" value="{{ old('riwayat_pekerjaan', $PsikologDataDetails->riwayat_pekerjaan) }}"
                                class="w-full rounded-lg border-[#e5e5e5] px-3 py-[13.5px] mt-2 shadow-sm text-sm md:text-sm lg:text-md xl:text-base text-slate-500"
                                placeholder="PT Berbinar Insighful Indonesia" />
                        </div>
                        <div>
                            <label class="font-normal sm:text-sm md:text-md lg:text-base xl:text-lg">
                                Divisi</label>
                            <input required type="text" name="divisi" value="{{ old('divisi', $PsikologDataDetails->divisi) }}"
                                class="w-full rounded-lg border-[#e5e5e5] px-3 py-[13.5px] mt-2 shadow-sm text-sm md:text-sm lg:text-md xl:text-base text-slate-500"
                                placeholder="Counseling PM" />
                        </div>
                        <div>
                            <label class="font-normal sm:text-sm md:text-md lg:text-base xl:text-lg">
                                Posisi</label>
                            <input required type="text" name="posisi" value="{{ old('posisi', $PsikologDataDetails->posisi) }}"
                                class="w-full rounded-lg border-[#e5e5e5] px-3 py-[13.5px] mt-2 shadow-sm text-sm md:text-sm lg:text-md xl:text-base text-slate-500"
                                placeholder="Staff" />
                        </div>
                        <div>
                            <label class="font-normal sm:text-sm md:text-md lg:text-base xl:text-lg">Kegiatan Sosial yang
                                diikuti</label>
                            <input required type="text" name="kegiatan_sosial" value="{{ old('kegiatan_sosial', $PsikologDataDetails->kegiatan_sosial) }}"
                                class="w-full rounded-lg border-[#e5e5e5] px-3 py-[13.5px] mt-2 shadow-sm text-sm md:text-sm lg:text-md xl:text-base text-slate-500"
                                placeholder="Masukkan Kegiatan Sosial yang diikuti" />
                        </div>
                        <div>
                            <label class="font-normal sm:text-sm md:text-md lg:text-base xl:text-lg">Hobi</label>
                            <input required type="text" name="hobi" value="{{ old('hobi', $PsikologDataDetails->hobi) }}"
                                class="w-full rounded-lg border-[#e5e5e5] px-3 py-[13.5px] mt-2 shadow-sm text-sm md:text-sm lg:text-md xl:text-base text-slate-500"
                                placeholder="Masukkan Hobi" />
                        </div>
                    </div>

                    <!-- Data Konseling -->
                    <h1 class="mb-6 text-center sm:text-sm md:text-base lg:text-lg xl:text-xl font-bold mt-6">Data Konseling
                    </h1>
                    <div class="mb-8 grid grid-cols-1 gap-6 md:grid-cols-2">
                        <div>
                            <label class="font-normal sm:text-xs md:text-sm  xl:text-md">Tanggal Pengajuan
                                Konseling <span class="font-semibold sm:text-xs md:text-sm  xl:text-md">(minimal
                                    5
                                    hari setelah pengisian
                                    form)</span></label>
                            <input required type="text" name="jadwal_tanggal" id="tglkonseling" value="{{ old('jadwal_tanggal', \Carbon\Carbon::parse($PsikologDataDetails->jadwal_tanggal)->format('d-m-Y')) }}"
                                class="w-full rounded-lg border-[#e5e5e5] px-3 py-[13.5px] mt-2 shadow-sm text-sm md:text-sm lg:text-md xl:text-base text-slate-500"
                                placeholder="dd/mm/yy" readonly />
                        </div>
                        <div>
                            <label class="font-normal sm:text-sm md:text-md lg:text-base xl:text-lg">Waktu Pengajuan
                                Konseling</label>
                            <input required type="time" id="waktukonseling" name="jadwal_pukul" value="{{ old('jadwal_pukul', \Carbon\Carbon::parse($PsikologDataDetails->jadwal_pukul)->format('H:i')) }}"
                                class="w-full rounded-lg border-[#e5e5e5] px-3 py-[13.5px] mt-2 shadow-sm text-sm md:text-sm lg:text-md xl:text-base text-slate-500"
                            />
                        </div>
                        <div>
                            <label class="font-normal sm:text-sm md:text-md lg:text-base xl:text-lg">Topik
                                Pengajuan</label>
                            <input required type="text" name="topik_pengajuan" value="{{ old('topik_pengajuan', $PsikologDataDetails->topik_pengajuan) }}"
                                class="w-full rounded-lg border-[#e5e5e5] px-3 py-[13.5px] mt-2 shadow-sm text-sm md:text-sm lg:text-md xl:text-base text-slate-500"
                                placeholder="Kecemasan" />
                        </div>
                    </div>

                    <!-- Topik Konseling -->
                    <h1 class="my-8 text-center sm:text-sm md:text-base lg:text-lg xl:text-xl font-bold">Topik Konseling
                    </h1>
                    <div class="mb-6">
                        <label class="font-normal sm:text-sm md:text-md lg:text-base xl:text-lg">Cerita Permasalahan yang
                            ingin dikonsultasikan</label>
                        <textarea required name="cerita"
                            class="w-full rounded-lg border-[#e5e5e5] px-3 py-[13.5px] mt-2 shadow-sm text-sm md:text-sm lg:text-md xl:text-base text-slate-500"
                            rows="1" placeholder="Review CV / Overthinking / Insecurities / Kecemasan / DLL">{{ old('cerita', $PsikologDataDetails->cerita) }}</textarea>
                    </div>

                    <div class="mt-8 flex gap-4 border-none pt-5">
                        <button type="button" id="cancelButton"
                            class="w-1/3 rounded-xl flex-1 flex items-center justify-center h-12 xl:text-xl lg:text-lg md:text-base sm:text-base font-medium"
                            style="width: 50%; border: 2px solid #3986A3; color: #3986A3;">
                            Batal
                        </button>
                        <button type="submit"
                            class="w-1/3 rounded-xl flex-1 flex items-center justify-center h-12 xl:text-xl lg:text-lg md:text-base sm:text-base font-medium"
                            style="width: 50%; background: #3986A3; color: #fff;">
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
            <div class="pt-2"></div>
        </div>
    </section>

    <!-- Modal Konfirmasi -->
    <div id="confirmModal" class="fixed inset-0 z-50 flex hidden items-center justify-center bg-black/40">
        <div class="relative w-[560px] rounded-[20px] bg-white p-6 text-center font-plusJakartaSans shadow-lg"
            style="
                            background:
                                linear-gradient(to right, #74aabf, #3986a3) top/100% 6px no-repeat,
                                white;
                            border-radius: 20px;
                            background-clip: padding-box, border-box;
                        ">
            <!-- Warning Icon -->
            <img src="{{ asset('assets/images/dashboard/warning.png') }}" alt="Warning Icon"
                class="mx-auto h-[83px] w-[83px]" />

            <!-- Title -->
            <h2 class="mt-4 text-2xl font-bold text-stone-900">Konfirmasi Batal</h2>

            <!-- Message -->
            <p class="mt-2 text-base font-medium text-black">Apakah Anda yakin ingin membatalkan perubahan data ini?</p>

            <!-- Actions -->
            <div class="mt-6 flex justify-center gap-3">
                <button id="cancelCancel"
                    class="rounded-lg border border-stone-300 px-6 py-2 text-stone-700">Tidak</button>
                <button id="confirmCancel"
                    class="rounded-[5px] bg-gradient-to-r from-[#74AABF] to-[#3986A3] px-6 py-2 font-medium text-white">Ya</button>
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

            // FLATPICKR JAM KONSELING
            flatpickr("#waktukonseling", {
                enableTime: true,
                noCalendar: true,
                dateFormat: "H:i",
                time_24hr: true
            });

            // FLATPICKR TANGGAL KONSELING (minimal 5 hari dari sekarang)
            const today = new Date();
            const minDate = new Date();
            minDate.setDate(today.getDate() + 5);

            flatpickr("#tglkonseling", {
                dateFormat: "d-m-Y",
                allowInput: true,
                minDate: minDate,
                disable: [{
                    from: "1900-01-01",
                    to: minDate.fp_incr(-1)
                }],
                onOpen: function(selectedDates, dateStr, instance) {
                    const tooltip = document.createElement('span');
                    tooltip.classList.add('custom-tooltip');
                    tooltip.textContent = 'Pemesanan minimal 5 hari dari sekarang';
                    instance.calendarContainer.appendChild(tooltip);
                },
                onClose: function(selectedDates, dateStr, instance) {
                    const tooltip = instance.calendarContainer.querySelector('.custom-tooltip');
                    if (tooltip) {
                        tooltip.remove();
                    }
                }
            });

            // HARI KONSELING OTOMATIS
            function getDayName(dateStr) {
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
