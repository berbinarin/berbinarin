@extends(
    "dashboard.layouts.app",
    [
        "title" => "Tambah Data Berbinar Plus User",
    ]
)

@section("content")
    <section class="flex w-full">
        <div class="flex w-full flex-col">
            <div class="py-4 md:pb-7 md:pt-12">
                <div class="mb-2 flex items-center gap-2">
                    <a href="{{ route("dashboard.berbinar-plus.index") }}">
                        <img src="{{ asset("assets/images/dashboard/svg-icon/dashboard-back.png") }}" alt="Back Btn" />
                    </a>
                    <p class="text-base font-bold leading-normal text-gray-800 sm:text-lg md:text-2xl lg:text-4xl">Tambah Data Pendaftar</p>
                </div>
                <p class="w-full text-disabled">Formulir untuk menambahkan peserta baru ke program Berbinar+ secara manual, lengkap dengan informasi pribadi, pilihan kelas, dan paket layanan yang dipilih.</p>
            </div>
            <div class="rounded-3xl bg-white px-4 py-4 shadow-lg shadow-gray-400 md:px-8 md:py-7 xl:px-10">
                <form action="{{ route('dashboard.berbinar-plus-users.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="kategori" value="berbinar-for-u" />

                    <h1 class="mb-6 text-center text-3xl font-bold">Berbinar+ <span class="italic">Class</span></h1>
                    <div class="flex flex-col">
                        <div class="grid grid-cols-1 mb-10 gap-6 md:grid-cols-2">

                            <div>
                                <label class="text-lg">Nama Lengkap</label>
                                <div class="relative w-full">
                                    <input type="text" id="nama" name="nama" placeholder="Budi Berbinar" class="peer w-full rounded-lg border-gray-300 px-4 py-4 shadow-sm" />
                                </div>
                            </div>

                            <div>
                                <label class="text-lg">Nomor WhatsApp</label>
                                <div class="relative w-full">
                                    <input type="text" id="wa" name="wa" placeholder="Masukkan Nomor WhatsApp " class="peer w-full rounded-lg border-gray-300 px-4 py-4 shadow-sm" />
                                </div>
                            </div>

                            <div>
                                <label class="text-lg">Email</label>
                                <div class="relative w-full">
                                    <input type="email" id="email" name="email" placeholder="Berbinar@gmail.com" class="peer w-full rounded-lg border-gray-300 px-4 py-4 shadow-sm" />
                                </div>
                            </div>

                            <div>
                                <label for="genderToggle" class="text-lg">Jenis Kelamin</label>
                                <button type="button"
                                    id="genderToggle"
                                    class="flex justify-between items-center w-full rounded-lg border border-gray-300 bg-white px-4 py-4 shadow-sm focus:outline-none">
                                    <span id="genderSelected" class="text-gray-500">Pilih Jenis Kelamin</span>
                                    <img src="{{ asset('assets/images/landing/produk/emo/chevron.png') }}" alt=""
                                        class="transform transition-transform w-[.9rem] mr-1" id="genderIcon">
                                </button>
                                <div class="absolute bg-white border border-gray-300 rounded-md mt-2 w-full z-10 hidden"
                                    id="genderDropdown">
                                    <div class="p-2" style="background-color: white;">
                                        <label class="flex items-center mb-2">
                                            <input class="form-check-input mr-2" type="radio" name="gender" value="Laki-laki" required>
                                            Laki-laki
                                        </label>
                                        <label class="flex items-center">
                                            <input class="form-check-input mr-2" type="radio" name="gender" value="Perempuan" required>
                                            Perempuan
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <label class="text-lg">Pendidikan Terakhir</label>
                                <div class="relative w-full">
                                    <input type="text" id="education" name="education" placeholder="SMA" class="peer w-full rounded-lg border-gray-300 px-4 py-4 shadow-sm" />
                                </div>
                            </div>

                            <div>
                                <label class="text-lg">Usia</label>
                                <div class="relative w-full">
                                    <input type="text" id="age" name="age" placeholder="Usia Kamu Sekarang" class="peer w-full rounded-lg border-gray-300 px-4 py-4 shadow-sm" />
                                </div>
                            </div>

                        </div>

                        <h1 class="mb-6 text-center text-3xl font-bold">Pilih Kelas</h1>

                        <div class="grid grid-cols-1 gap-6 md:grid-cols-2">

                            <div>
                                <label class="text-lg">Kelas Berbinar+</label>
                                <div class="relative w-full">
                                    <input type="text" id="kelas" name="kelas" placeholder="Pilih Kelas Berbinar+" class="peer w-full rounded-lg border-gray-300 px-4 py-4 shadow-sm" />
                                </div>
                            </div>

                            <div>
                                <label class="text-lg">Paket Layanan</label>
                                <div class="relative w-full">
                                    <input type="text" id="paket" name="paket" placeholder="Pilih Paket Layanan" class="peer w-full rounded-lg border-gray-300 px-4 py-4 shadow-sm" />
                                </div>
                            </div>

                            <div>
                                <label class="text-lg">Bukti Pembayaran</label>
                                <div class="relative w-full">
                                    <input type="text" id="bukti" name="bukti" placeholder="Berikan Bukti Pembayaran" class="peer w-full rounded-lg border-gray-300 px-4 py-4 shadow-sm" />
                                </div>
                            </div>

                            <div>
                                <label class="text-lg">Darimana SobatBinar mengetahui layanan produk BERBINAR+</label>
                                <div class="relative w-full">
                                    <input type="text" id="darimana" name="darimana" placeholder="Dari mana nihh" class="peer w-full rounded-lg border-gray-300 px-4 py-4 shadow-sm" />
                                </div>
                            </div>

                        </div>



                        <div class="mt-8 flex gap-4 pt-5">
                            <button type="button" id="submitButton" class="flex h-12 flex-1 items-center justify-center rounded-xl text-lg" style="width: 50%; background: #3986a3; color: #fff">Simpan</button>
                            <a href="{{ route("dashboard.berbinar-plus.index") }}" id="cancelButton" class="flex h-12 flex-1 items-center justify-center rounded-xl text-lg" style="width: 50%; border: 2px solid #3986a3; color: #3986a3">Batal</a>
                        </div>

                            <!-- Modal Konfirmasi -->
                            <div id="confirmModal" class="fixed inset-0 z-50 flex hidden items-center justify-center bg-black bg-opacity-50">
                            <div class="w-full max-w-md rounded-lg bg-white p-6 text-center">
                                <div class="mb-4 flex justify-center">
                                <img src="{{ asset('assets/images/dashboard/svg-icon/warning.svg') }}" alt="Warning Icon" class="h-12 w-12" />
                                </div>
                                <p class="mb-6 text-lg">Apakah Anda yakin ingin menyimpan data ini?</p>
                                <div class="flex w-full justify-center gap-4">
                                <button id="confirmSubmit" class="rounded-lg bg-[#3986A3] w-1/2 px-6 py-2 text-white">OK</button>
                                <button type="button" id="cancelSubmit" class="rounded-lg border border-[#3986A3] w-1/2 px-6 py-2 text-[#3986A3]">Cancel</button>
                                </div>
                            </div>
                            </div>


                    </div>

                </form>
            </div>
        </div>
    </section>


@endsection

@section("script")
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    // === DROPDOWN GENDER ===
    const genderToggle = document.getElementById('genderToggle');
    const genderDropdown = document.getElementById('genderDropdown');
    const genderIcon = document.getElementById('genderIcon');
    const genderRadios = document.querySelectorAll('input[name="gender"]');
    const genderSelected = document.getElementById('genderSelected');

    genderToggle.addEventListener('click', function (e) {
        e.stopPropagation();
        genderDropdown.classList.toggle('hidden');
        genderIcon.classList.toggle('rotate-180');
    });

    genderRadios.forEach(radio => {
        radio.addEventListener('change', function () {
            genderSelected.textContent = this.value;
            genderSelected.classList.remove('text-gray-500');
            genderSelected.classList.add('text-black');
            genderDropdown.classList.add('hidden');
            genderIcon.classList.remove('rotate-180');
        });
    });

    document.addEventListener('click', function(e) {
        if (!genderToggle.contains(e.target) && !genderDropdown.contains(e.target)) {
            genderDropdown.classList.add('hidden');
            genderIcon.classList.remove('rotate-180');
        }
    });

    // === MODAL KONFIRMASI SUBMIT ===
    const submitButton = document.getElementById('submitButton');
    const confirmModal = document.getElementById('confirmModal');
    const confirmSubmit = document.getElementById('confirmSubmit');
    const cancelSubmit = document.getElementById('cancelSubmit');
    const form = document.querySelector('form');

    submitButton.addEventListener('click', function(e) {
        e.preventDefault();
        confirmModal.classList.remove('hidden');
    });

    cancelSubmit.addEventListener('click', function() {
        confirmModal.classList.add('hidden');
    });

    confirmSubmit.addEventListener('click', function() {
        form.submit();
    });
});
</script>
@endsection
