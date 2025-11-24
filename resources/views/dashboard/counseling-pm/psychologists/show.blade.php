@extends(
    "dashboard.layouts.app",
    [
        "title" => "Konselling Psikolog Data",
        "active" => "Dashboard",
        "modul" => "Psikolog Data",
    ]
)

@section('content')
    <section class="flex w-full bg-gray-100">
        <div class="flex flex-col w-full">
            <div class="w-full">
                <div class="py-4 md:pb-7 md:pt-12">
                    <div class="mb-2 flex items-center gap-2">
                        <a href="{{ route("dashboard.psychologists.index") }}">
                            <img src="{{ asset("assets/images/dashboard/svg-icon/dashboard-back.webp") }}" alt="Back Btn" />
                        </a>
                        <p class="text-base font-bold leading-normal text-gray-800 sm:text-lg md:text-2xl lg:text-4xl">
                            Data Konseling Psikolog
                        </p>
                    </div>
                    <p class="w-3/4 text-disabled">
                        Fitur ini digunakan untuk menampilkan data pendaftar konseling yang
                        mendaftar melalui situs web Berbinar.
                    </p>
                    <div class="mt-8 sm:mt-3 flex space-x-4">
                        <a href="{{ route('dashboard.psychologists.edit', $PsikologDataDetails->id) }}" type="button"
                            class="mt-8 inline-flex items-start justify-start rounded-lg border-2 border-primary bg-primary px-6 py-3 text-white hover:bg-primary focus:outline-none focus:ring-2 focus:ring-offset-2 sm:mt-3">
                            <p class="font-medium leading-none text-dark">Ubah Data</p>
                        </a>
                        <button type="button" id="deleteButton" data-id="{{ $PsikologDataDetails->id }}"
                            class="mt-8 inline-flex items-start justify-start rounded-lg border-2 border-primary px-6 py-3 text-primary focus:outline-none focus:ring-2 focus:ring-offset-2 sm:mt-3">
                            <p class="font-medium leading-none text-dark">Hapus Data</p>
                        </button>
                    </div>
                </div>
                <div class="bg-white py-4 md:py-7 px-4 md:px-8 xl:px-10 mb-7 rounded-xl shadow-lg">
                    <div class="overflow-x-auto flex flex-col gap-6">

                        <div class="flex flex-row gap-4">
                            <button type="button" class="section-nav-button font-semibold text-lg text-primary-alt border-b-2 border-primary-alt mb-1" data-target="data-konseling">Data Konseling</button>
                            <button type="button" class="section-nav-button font-semibold text-lg text-disabled mb-1" data-target="data-diri">Data Diri</button>
                            <button type="button" class="section-nav-button font-semibold text-lg text-disabled mb-1" data-target="topik-konseling">Topik Konseling</button>
                            <button type="button" class="section-nav-button font-semibold text-lg text-disabled mb-1" data-target="informasi-konseling">Informasi Konseling</button>
                        </div>

                        {{-- Data Konseling --}}
                        <div id="data-konseling" class="mb-10" tabindex="-1">
                            <h1 class="mb-6 text-3xl text-primary-alt font-bold">Data Konseling</h1>
                            <div class="grid grid-cols-3 gap-6">
                                <div>
                                    <p class="font-semibold text-lg text-disabled mb-1">Tanggal Konseling</p>
                                    <p class="font-semibold text-lg mb-6 capitalize">{{ \Carbon\Carbon::parse($PsikologDataDetails->jadwal_tanggal)->format('d-m-Y') }}</p>
                                </div>
                                <div>
                                    <p class="font-semibold text-lg text-disabled mb-1">Tanggal Pendaftaran</p>
                                    <p class="font-semibold text-lg mb-6 capitalize">{{ \Carbon\Carbon::parse($PsikologDataDetails->created_at)->format('d-m-Y') }}</p>
                                </div>
                                <div></div>
                                <div>
                                    <p class="font-semibold text-lg text-disabled mb-1">Waktu</p>
                                    <p class="font-semibold text-lg mb-6">{{ $PsikologDataDetails->jadwal_pukul }} &nbsp;WIB</p>
                                </div>
                                <div>
                                    <p class="font-semibold text-lg text-disabled mb-1">Metode</p>
                                    <p class="font-semibold text-lg mb-6 capitalize">{{ $PsikologDataDetails->metode }}</p>
                                </div>
                                <div></div>
                                <div>
                                    <p class="font-semibold text-lg text-disabled mb-1">Sesi</p>
                                    <p class="font-semibold text-lg mb-6 capitalize">{{ $PsikologDataDetails->sesi }} &nbsp;Jam</p>
                                </div>
                                <div>
                                    <p class="font-semibold text-lg text-disabled mb-1">Daerah</p>
                                    <p class="font-semibold text-lg mb-6 capitalize">{{ $PsikologDataDetails->daerah }}</p>
                                </div>
                                <div></div>
                            </div>
                        </div>

                        {{-- Data Diri --}}
                        <div id="data-diri" class="mb-10" tabindex="-1">
                            <h1 class="mb-6 text-3xl text-primary-alt font-bold">Data Diri</h1>
                            <div class="grid grid-cols-3 gap-6">
                                <div>
                                    <p class="font-semibold text-lg text-disabled mb-1">Nama Lengkap</p>
                                    <p class="font-semibold text-lg mb-6 capitalize">{{ $PsikologDataDetails->nama }}</p>
                                </div>
                                <div>
                                    <p class="font-semibold text-lg text-disabled mb-1">Jenis Kelamin</p>
                                    <p class="font-semibold text-lg mb-6 capitalize">{{ $PsikologDataDetails->jenis_kelamin }}</p>
                                </div>
                                <div></div>
                                <div>
                                    <p class="font-semibold text-lg text-disabled mb-1">Nomor Whatsapp</p>
                                    <p class="font-semibold text-lg mb-6 capitalize"><a href="https://wa.me/62{{ ltrim($PsikologDataDetails->no_wa, '0') }}" target="_blank" class="text-blue-500 hover:text-blue-700 underline">{{ $PsikologDataDetails->no_wa }}</a></p>
                                </div>
                                <div>
                                    <p class="font-semibold text-lg text-disabled mb-1">Email</p>
                                    <p class="font-semibold text-lg mb-6"><a href="mailto:{{ $PsikologDataDetails->email }}" class="text-blue-500 hover:text-blue-700 underline">{{ $PsikologDataDetails->email }}</a></p>
                                </div>
                                <div></div>
                                <div>
                                    <p class="font-semibold text-lg text-disabled mb-1">Tempat Lahir</p>
                                    <p class="font-semibold text-lg mb-6 capitalize">{{ $PsikologDataDetails->tempat_lahir }}</p>
                                </div>
                                <div>
                                    <p class="font-semibold text-lg text-disabled mb-1">Posisi Anak</p>
                                    <p class="font-semibold text-lg mb-6 capitalize">{{ $PsikologDataDetails->posisi_anak }}</p>
                                </div>
                                <div></div>
                                <div>
                                    <p class="font-semibold text-lg text-disabled mb-1">Alamat Domisili</p>
                                    <p class="font-semibold text-lg mb-6 capitalize">{{ $PsikologDataDetails->alamat }}</p>
                                </div>
                                <div>
                                    <p class="font-semibold text-lg text-disabled mb-1">Pendidikan</p>
                                    <p class="font-semibold text-lg mb-6 capitalize">{{ $PsikologDataDetails->pendidikan }}</p>
                                </div>
                                <div></div>
                                <div>
                                    <p class="font-semibold text-lg text-disabled mb-1">Asal Sekolah/Universitas</p>
                                    <p class="font-semibold text-lg mb-6 capitalize">{{ $PsikologDataDetails->asal_sekolah }}</p>
                                </div>
                                <div>
                                    <p class="font-semibold text-lg text-disabled mb-1">Agama</p>
                                    <p class="font-semibold text-lg mb-6 capitalize">{{ $PsikologDataDetails->agama }}</p>
                                </div>
                                <div></div>
                                <div>
                                    <p class="font-semibold text-lg text-disabled mb-1">Suku Bangsa</p>
                                    <p class="font-semibold text-lg mb-6 capitalize">{{ $PsikologDataDetails->suku }}</p>
                                </div>
                                <div>
                                    <p class="font-semibold text-lg text-disabled mb-1">Status Pernikahan</p>
                                    <p class="font-semibold text-lg mb-6 capitalize">{{ $PsikologDataDetails->status_pernikahan }}</p>
                                </div>
                                <div></div>
                                <div>
                                    <p class="font-semibold text-lg text-disabled mb-1">Pekerjaan</p>
                                    <p class="font-semibold text-lg mb-6 capitalize">{{ $PsikologDataDetails->riwayat_pekerjaan }}</p>
                                </div>
                                <div>
                                    <p class="font-semibold text-lg text-disabled mb-1">Hobi</p>
                                    <p class="font-semibold text-lg mb-6 capitalize">{{ $PsikologDataDetails->hobi }}</p>
                                </div>
                                <div>
                                    <p class="font-semibold text-lg text-disabled mb-1">Kegiatan Sosial yang Diikuti</p>
                                    <p class="font-semibold text-lg mb-6 capitalize">{{ $PsikologDataDetails->kegiatan_sosial }}</p>
                                </div>
                            </div>
                        </div>

                        {{-- Topik Konseling --}}
                        <div id="topik-konseling" class="mb-10" tabindex="-1">
                            <h1 class="mb-6 text-3xl text-primary-alt font-bold">Topik Konseling</h1>
                            <h2 class="mb-3 text-xl text-disabled font-semibold">Cerita Tentang Hal yang Ingin Dikonsultasikan</h2>
                            <p class="font-semibold text-lg mb-1">
                                {{ $PsikologDataDetails->cerita }}
                            </p>
                        </div>

                        {{-- Informasi Konseling --}}
                        <div id="informasi-konseling" tabindex="-1">
                            <h1 class="mb-6 text-3xl text-primary-alt font-bold">Informasi Konseling</h1>
                            <div class="grid grid-cols-3 gap-6">
                                <div>
                                    <p class="font-semibold text-lg text-disabled mb-1">Kategori Voucher</p>
                                    <p class="font-semibold text-lg mb-6">{{ $PsikologDataDetails->kategori_voucher ?? '-' }}</p>
                                </div>
                                <div>
                                    <p class="font-semibold text-lg text-disabled mb-1">Kode Voucher</p>
                                    <p class="font-semibold text-lg mb-6">{{ $PsikologDataDetails->code_voucher ?? '-' }}</p>
                                </div>
                                <div></div>
                                <div>
                                    <p class="font-semibold text-lg text-disabled mb-1">Persentasi Diskon</p>
                                    <p class="font-semibold text-lg mb-6">{{ $PsikologDataDetails->presentase_diskon ? $PsikologDataDetails->presentase_diskon . '%' : '-' }}</p>
                                </div>
                                <div>
                                    <p class="font-semibold text-lg text-disabled mb-1">Bukti Kartu Pelajar</p>
                                    <p class="font-semibold text-lg mb-6">
                                        @if($PsikologDataDetails->bukti_kartu_pelajar)
                                            <a href="{{ asset('storage/' . $PsikologDataDetails->bukti_kartu_pelajar) }}" target="_blank">
                                                <img src="{{ asset('storage/' . $PsikologDataDetails->bukti_kartu_pelajar) }}"
                                                    alt="Bukti Kartu Pelajar"
                                                    style="max-width:120px;max-height:120px;border-radius:8px;border:1px solid #ccc;">
                                            </a>
                                        @else
                                            <span>-</span>
                                        @endif
                                    </p>
                                </div>
                            </div>
                        </div>

                        {{-- <div class="border border-gray-500 rounded-3xl overflow-hidden">
                            <div class="bg-[#3986A380] py-3 px-6">Informasi Konseling</div>
                            <div class="w-full flex flex-row">
                                <div class="w-2/3 flex flex-col gap-4 py-4">
                                    <div class="flex flex-row px-6">
                                        <div class="w-1/3">Nama</div>
                                        <div>:</div>
                                        <div class="pl-4 capitalize">{{ $PsikologDataDetails->nama }}</div>
                                    </div>
                                    <div class="flex flex-row px-6">
                                        <div class="w-1/3">Tanggal Konseling</div>
                                        <div>:</div>
                                        <div class="pl-4 capitalize">{{ \Carbon\Carbon::parse($PsikologDataDetails->jadwal_tanggal)->format('d-m-Y') }}</div>
                                    </div>
                                    <div class="flex flex-row px-6">
                                        <div class="w-1/3">Waktu</div>
                                        <div>:</div>
                                        <div class="pl-4 capitalize">{{ $PsikologDataDetails->jadwal_pukul }} &nbsp;WIB</div>
                                    </div>
                                    <div class="flex flex-row px-6">
                                        <div class="w-1/3">Metode</div>
                                        <div>:</div>
                                        <div class="pl-4 capitalize">{{ $PsikologDataDetails->metode }}</div>
                                    </div>
                                    <div class="flex flex-row px-6">
                                        <div class="w-1/3">Sesi</div>
                                        <div>:</div>
                                        <div class="pl-4 capitalize">{{ $PsikologDataDetails->sesi }} &nbsp;Jam</div>
                                    </div>
                                    <div class="flex flex-row px-6">
                                        <div class="w-1/3">Daerah</div>
                                        <div>:</div>
                                        <div class="pl-4 capitalize">{{ $PsikologDataDetails->daerah }}</div>
                                    </div>
                                    <div class="flex flex-row px-6">
                                        <div class="w-1/3">Harga</div>
                                        <div>:</div>
                                        <div class="pl-4 capitalize">Rp. &nbsp;{{ $PsikologDataDetails->harga }}</div>
                                    </div>
                                </div>

                                <div class="py-4 flex flex-row gap-3 italic w-1/3">
                                    <div class="">Tanggal Pendaftaran</div>
                                    <div class="capitalize">{{ \Carbon\Carbon::parse($PsikologDataDetails->created_at)->format('d-m-Y') }}</div>
                                </div>
                            </div>


                        </div>


                        <div class="border border-gray-500 rounded-3xl overflow-hidden">
                            <div class="bg-[#3986A380] py-3 px-6">Informasi Konseling</div>
                            <div class="w-full flex flex-row">
                                <div class="w-full flex flex-col gap-4 py-4">
                                    <div class="flex flex-row px-6">
                                        <div class="w-[21.78%]">Nomor WhatsApp</div>
                                        <div>:</div>
                                        <div class="pl-4 capitalize"><a href="https://wa.me/62{{ ltrim($PsikologDataDetails->no_wa, '0') }}" target="_blank" class="text-blue-500 hover:text-blue-700 underline">{{ $PsikologDataDetails->no_wa }}</a></div>
                                    </div>
                                    <div class="flex flex-row px-6">
                                        <div class="w-[21.78%]">Email</div>
                                        <div>:</div>
                                        <div class="pl-4"><a href="mailto:{{ $PsikologDataDetails->email }}" class="text-blue-500 hover:text-blue-700 underline">{{ $PsikologDataDetails->email }}</a></div>
                                    </div>
                                    <div class="flex flex-row px-6">
                                        <div class="w-[21.78%]">Jenis Kelamin</div>
                                        <div>:</div>
                                        <div class="pl-4 capitalize">{{ $PsikologDataDetails->jenis_kelamin }}</div>
                                    </div>
                                    <div class="flex flex-row px-6">
                                        <div class="w-[21.78%]">Agama</div>
                                        <div>:</div>
                                        <div class="pl-4 capitalize">{{ $PsikologDataDetails->agama }}</div>
                                    </div>
                                    <div class="flex flex-row px-6">
                                        <div class="w-[21.78%]">Tempat Lahir</div>
                                        <div>:</div>
                                        <div class="pl-4 capitalize">{{ $PsikologDataDetails->tempat_lahir }}</div>
                                    </div>
                                    <div class="flex flex-row px-6">
                                        <div class="w-[21.78%]">Suku</div>
                                        <div>:</div>
                                        <div class="pl-4 capitalize">{{ $PsikologDataDetails->suku }}</div>
                                    </div>
                                    <div class="flex flex-row px-6">
                                        <div class="w-[21.78%]">Status Pernikahan</div>
                                        <div>:</div>
                                        <div class="pl-4 capitalize">{{ $PsikologDataDetails->status_pernikahan }}</div>
                                    </div>
                                    <div class="flex flex-row px-6">
                                        <div class="w-[21.78%]">Alamat Domisili</div>
                                        <div>:</div>
                                        <div class="pl-4">{{ $PsikologDataDetails->alamat }}</div>
                                    </div>
                                    <div class="flex flex-row px-6">
                                        <div class="w-[21.78%]">Posisi Anak</div>
                                        <div>:</div>
                                        <div class="pl-4 capitalize">{{ $PsikologDataDetails->posisi_anak }}</div>
                                    </div>
                                    <div class="flex flex-row px-6">
                                        <div class="w-[21.78%]">Pendidikan</div>
                                        <div>:</div>
                                        <div class="pl-4 capitalize">{{ $PsikologDataDetails->pendidikan }}</div>
                                    </div>
                                    <div class="flex flex-row px-6">
                                        <div class="w-[21.78%]">Asal Sekolah/Universitas</div>
                                        <div>:</div>
                                        <div class="pl-4 capitalize">{{ $PsikologDataDetails->asal_sekolah }}</div>
                                    </div>
                                    <div class="flex flex-row px-6">
                                        <div class="w-[21.78%]">Pekerjaan</div>
                                        <div>:</div>
                                        <div class="pl-4 capitalize">{{ $PsikologDataDetails->riwayat_pekerjaan }}</div>
                                    </div>
                                    <div class="flex flex-row px-6">
                                        <div class="w-[21.78%]">Hobi</div>
                                        <div>:</div>
                                        <div class="pl-4 capitalize">{{ $PsikologDataDetails->hobi }}</div>
                                    </div>
                                    <div class="flex flex-row px-6">
                                        <div class="w-[21.78%]">Kegiatan Sosial</div>
                                        <div>:</div>
                                        <div class="pl-4 capitalize">{{ $PsikologDataDetails->kegiatan_sosial }}</div>
                                    </div>
                                </div>
                            </div>


                        </div>


                        <div class="border border-gray-500 rounded-3xl overflow-hidden">
                            <div class="bg-[#3986A380] py-3 px-6">Informasi Konseling</div>
                            <div class="w-full flex flex-row">
                                <div class="w-full flex flex-col gap-4 py-4">
                                    <div class="flex flex-row px-6">
                                        <div class="w-[21.78%]">Hal yang ingin diceritakan</div>
                                        <div>:</div>
                                        <div class="pl-4 capitalize">{{ $PsikologDataDetails->cerita }}</div>
                                    </div>
                                </div>

                            </div>

                        </div>


                        <div class="border border-gray-500 rounded-3xl overflow-hidden">
                            <div class="bg-[#3986A380] py-3 px-6">Informasi Konseling</div>
                            <div class="w-full flex flex-row">
                                <div class="w-full flex flex-col gap-4 py-4">
                                    <div class="flex flex-row px-6">
                                        <div class="w-[21.78%]">Kategori Voucher</div>
                                        <div>:</div>
                                        <div class="pl-4">{{ $PsikologDataDetails->kategori_voucher ?? '-' }}</div>
                                    </div>
                                    <div class="flex flex-row px-6">
                                        <div class="w-[21.78%]">Kode Voucher</div>
                                        <div>:</div>
                                        <div class="pl-4">{{ $PsikologDataDetails->code_voucher ?? '-' }}</div>
                                    </div>
                                    <div class="flex flex-row px-6">
                                        <div class="w-[21.78%]">Persentase Diskon</div>
                                        <div>:</div>
                                        <div class="pl-4">{{ $PsikologDataDetails->presentase_diskon ? $PsikologDataDetails->presentase_diskon . '%' : '-' }}</div>
                                    </div>
                                    <div class="flex flex-row px-6">
                                        <div class="w-[21.78%]">Bukti Kartu Pelajar</div>
                                        <div>:</div>
                                        <div class="pl-4">
                                            @if($PsikologDataDetails->bukti_kartu_pelajar)
                                                <a href="{{ asset('storage/' . $PsikologDataDetails->bukti_kartu_pelajar) }}" target="_blank">
                                                    <img src="{{ asset('storage/' . $PsikologDataDetails->bukti_kartu_pelajar) }}"
                                                        alt="Bukti Kartu Pelajar"
                                                        style="max-width:120px;max-height:120px;border-radius:8px;border:1px solid #ccc;">
                                                </a>
                                            @else
                                                <span>-</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div> --}}

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Delete Confirmation Modal -->
    <div id="deleteModal" class="fixed inset-0 z-50 flex hidden items-center justify-center bg-black bg-opacity-50">
        <div class="bg-white rounded-lg shadow-xl max-w-md w-full mx-4">
            <!-- Modal Header -->
            <div class="text-center p-6">
                <!-- Warning Icon -->
                <div class="flex justify-center mb-4">
                    <img src="{{ asset('assets/images/dashboard/svg-icon/warning.webp') }}" alt="Warning Icon" class="h-12 w-12">
                </div>
                <!-- Title -->
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Konfirmasi Hapus Data</h3>
                <!-- Message -->
                <p class="text-gray-600 mb-6">
                    Apakah Anda yakin ingin menghapus data ini?
                </p>
            </div>

            <!-- Modal Actions -->
            <div class="flex gap-3 px-6 pb-6">
                <button id="cancelDelete" class="flex-1 px-4 py-3 text-gray-700 bg-white border-2 border-gray-300 rounded-lg hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 font-medium transition-colors">
                    Batal
                </button>
                <button id="confirmDelete" class="flex-1 px-4 py-3 text-white rounded-lg font-medium focus:outline-none focus:ring-2 focus:ring-offset-2 transition-colors" style="background-color: #3986A3;" onmouseover="this.style.backgroundColor='#2d6b7a'" onmouseout="this.style.backgroundColor='#3986A3'">
                    Ya, Hapus!
                </button>
            </div>
        </div>
    </div>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const deleteButton = document.getElementById('deleteButton');
    const deleteModal = document.getElementById('deleteModal');
    const cancelDelete = document.getElementById('cancelDelete');
    const confirmDelete = document.getElementById('confirmDelete');

    if (deleteButton) {
        deleteButton.addEventListener('click', function(e) {
            e.preventDefault();
            deleteModal.classList.remove('hidden');
        });
    }

    if (cancelDelete) {
        cancelDelete.addEventListener('click', function() {
            deleteModal.classList.add('hidden');
        });
    }

    if (confirmDelete) {
        confirmDelete.addEventListener('click', function() {
            const id = deleteButton.getAttribute('data-id');

            // Create and submit form
            const form = document.createElement('form');
            form.method = 'POST';
            form.action = `{{ url('dashboard/data/psychologists') }}/${id}`;

            const csrfToken = document.createElement('input');
            csrfToken.type = 'hidden';
            csrfToken.name = '_token';
            csrfToken.value = '{{ csrf_token() }}';

            const methodInput = document.createElement('input');
            methodInput.type = 'hidden';
            methodInput.name = '_method';
            methodInput.value = 'DELETE';

            form.appendChild(csrfToken);
            form.appendChild(methodInput);
            document.body.appendChild(form);
            form.submit();
        });
    }

    // Close modal when clicking outside
    deleteModal.addEventListener('click', function(e) {
        if (e.target === deleteModal) {
            deleteModal.classList.add('hidden');
        }
    });
});
</script>

<script>
    // Enable nav buttons to scroll/focus corresponding sections and toggle active style
    document.addEventListener('DOMContentLoaded', function () {
        const navButtons = document.querySelectorAll('.section-nav-button');
        navButtons.forEach(btn => {
            btn.addEventListener('click', function () {
                // update active classes on buttons
                navButtons.forEach(b => {
                    b.classList.remove('text-primary-alt', 'border-b-2', 'border-primary-alt');
                    b.classList.add('text-disabled');
                });
                this.classList.remove('text-disabled');
                this.classList.add('text-primary-alt', 'border-b-2', 'border-primary-alt');

                const targetId = this.dataset.target;
                const target = document.getElementById(targetId);
                if (target) {
                    // smooth scroll and set focus for accessibility
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    // ensure focusable then focus
                    target.setAttribute('tabindex', '-1');
                    target.focus({ preventScroll: true });
                }
            });
        });
    });
</script>
@endsection
