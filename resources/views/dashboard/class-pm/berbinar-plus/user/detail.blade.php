@extends(
    "dashboard.layouts.app",
    [
        "title" => "Detail Berbinar Plus User",
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
                    <p class="text-base font-bold leading-normal text-gray-800 sm:text-lg md:text-2xl lg:text-4xl">Detail Data Pendaftar</p>
                </div>
                <p class="w-full text-disabled">Halaman ini menampilkan informasi detail mengenai data peserta yang berhasil mendaftar BERBINAR+. Admin dapat melihat Informasi lengkap seputar Data diri dan Pilihan Kelas pengguna.</p>
            </div>
            <div class="rounded-3xl bg-white px-4 py-4 shadow-lg shadow-gray-400 md:px-8 md:py-7 xl:px-10">

                <h1 class="mb-6 text-3xl text-primary-alt font-bold">Data Diri</h1>
                <div class="grid grid-cols-1 mb-10 gap-6 md:grid-cols-2">

                    <div class="flex flex-col mb-2">
                        <h2 class="font-semibold text-lg mb-2 text-gray-500">Nama Lengkap</h2>
                        <p class="font-semibold text-lg">Morgan Vero</p>
                    </div>

                    <div class="flex flex-col mb-2">
                        <h2 class="font-semibold text-lg mb-2 text-gray-500">Telepon/HP</h2>
                        <p class="font-semibold text-lg">081234567890</p>
                    </div>

                    <div class="flex flex-col mb-2">
                        <h2 class="font-semibold text-lg mb-2 text-gray-500">Alamat Email</h2>
                        <p class="font-semibold text-lg">berbinar@gmail.com</p>
                    </div>

                    <div class="flex flex-col mb-2">
                        <h2 class="font-semibold text-lg mb-2 text-gray-500">Jenis Kelamin</h2>
                        <p class="font-semibold text-lg">Laki-laki</p>
                    </div>

                    <div class="flex flex-col mb-2">
                        <h2 class="font-semibold text-lg mb-2 text-gray-500">Pendidikan Terakhir</h2>
                        <p class="font-semibold text-lg">SMA</p>
                    </div>

                    <div class="flex flex-col mb-2">
                        <h2 class="font-semibold text-lg mb-2 text-gray-500">Usia</h2>
                        <p class="font-semibold text-lg">18</p>
                    </div>

                </div>

                <h1 class="mb-6 text-3xl text-primary-alt font-bold">Pilih Kelas</h1>
                <div>

                    <div class="grid grid-cols-1 gap-6 md:grid-cols-2">

                        <div class="flex flex-col mb-2">
                            <h2 class="font-semibold text-lg mb-2 text-gray-500">Kelas Berbinar+</h2>
                            <p class="font-semibold text-lg">Human Resource</p>
                        </div>

                        <div class="flex flex-col mb-2">
                            <h2 class="font-semibold text-lg mb-2 text-gray-500">Paket Layanan</h2>
                            <p class="font-semibold text-lg">A+ 200.000</p>
                        </div>

                        <div class="flex flex-col mb-2">
                            <h2 class="font-semibold text-lg mb-2 text-gray-500">Bukti Pembayaran</h2>
                            <p class="font-semibold text-lg">berbinar@gmail.com</p>
                        </div>

                        <div class="flex flex-col mb-2">
                            <h2 class="font-semibold text-lg mb-2 text-gray-500">Darimana SobatBinar mengetahui layanan produk BERBINAR+</h2>
                            <p class="font-semibold text-lg">Instagram</p>
                        </div>

                    </div>


                </div>

            </div>
        </div>
    </section>


@endsection

@section("script")
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
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


        const input = document.getElementById('title');
        const labelNama = document.getElementById('label-nama');

        function toggleLabelNama() {
        if (input.value.trim() !== '') {
            labelNama.classList.add('hidden');
        } else {
            labelNama.classList.remove('hidden');
        }
        }

        input.addEventListener('input', toggleLabelNama);
        window.addEventListener('load', toggleLabelNama);


        const textarea = document.getElementById('description');
        const labelDeskripsi = document.getElementById('label-deskripsi');

        function toggleLabelDeskripsi() {
        if (textarea.value.trim() !== '') {
            labelDeskripsi.classList.add('hidden');
        } else {
            labelDeskripsi.classList.remove('hidden');
        }
        }

        textarea.addEventListener('input', toggleLabelDeskripsi);
        window.addEventListener('load', toggleLabelDeskripsi);
    </script>
@endsection
