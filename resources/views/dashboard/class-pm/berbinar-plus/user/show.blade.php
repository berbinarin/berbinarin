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
                <h1 class="mb-6 text-3xl font-bold text-primary-alt">Data Diri</h1>
                <div class="mb-10 grid grid-cols-1 gap-6 md:grid-cols-2">
                    <div class="mb-2 flex flex-col">
                        <h2 class="mb-2 text-lg font-semibold text-gray-500">Nama Lengkap</h2>
                        <p class="text-lg font-semibold">{{ $berbinarpUsers->first_name }} {{ $berbinarpUsers->last_name }}</p>
                    </div>

                    <div class="mb-2 flex flex-col">
                        <h2 class="mb-2 text-lg font-semibold text-gray-500">Telepon/HP</h2>
                        <p class="text-lg font-semibold">{{ $berbinarpUsers->wa_number }}</p>
                    </div>

                    <div class="mb-2 flex flex-col">
                        <h2 class="mb-2 text-lg font-semibold text-gray-500">Alamat Email</h2>
                        <p class="text-lg font-semibold">{{ $berbinarpUsers->email }}</p>
                    </div>

                    <div class="mb-2 flex flex-col">
                        <h2 class="mb-2 text-lg font-semibold text-gray-500">Jenis Kelamin</h2>
                        <p class="text-lg font-semibold">{{ $berbinarpUsers->gender }}</p>
                    </div>

                    <div class="mb-2 flex flex-col">
                        <h2 class="mb-2 text-lg font-semibold text-gray-500">Pendidikan Terakhir</h2>
                        <p class="text-lg font-semibold">{{ $berbinarpUsers->last_education }}</p>
                    </div>

                    <div class="mb-2 flex flex-col">
                        <h2 class="mb-2 text-lg font-semibold text-gray-500">Usia</h2>
                        <p class="text-lg font-semibold">{{ $berbinarpUsers->age }}</p>
                    </div>
                </div>

                <h1 class="mb-6 text-3xl font-bold text-primary-alt">Pilih Kelas</h1>
                <div>
                    <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                        <div class="mb-2 flex flex-col">
                            <h2 class="mb-2 text-lg font-semibold text-gray-500">Kelas Berbinar+</h2>
                            <p class="text-lg font-semibold">{{ $berbinarpUsers->enrollment->class->title }}</p>
                        </div>

                        <div class="mb-2 flex flex-col">
                            <h2 class="mb-2 text-lg font-semibold text-gray-500">Paket Layanan</h2>
                            <p class="text-lg font-semibold">{{ $berbinarpUsers->enrollment->service_package }}</p>
                        </div>

                        <div class="mb-2 flex flex-col">
                            <h2 class="mb-2 text-lg font-semibold text-gray-500">Bukti Pembayaran</h2>

                            @if ($berbinarpUsers->enrollment->transfer_evidance)
                                <div class="group relative h-32 w-32">
                                    <img src="{{ asset("storage/" . $berbinarpUsers->enrollment->transfer_evidance) }}" alt="Bukti Pembayaran" class="h-32 w-32 cursor-pointer rounded border object-cover" id="buktiTransferThumb" />
                                    <div class="pointer-events-none absolute inset-0 flex items-center justify-center rounded bg-black bg-opacity-40 opacity-0 transition-opacity group-hover:opacity-100">
                                        <svg class="h-10 w-10 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                            <circle cx="11" cy="11" r="8" />
                                            <line x1="21" y1="21" x2="16.65" y2="16.65" stroke-linecap="round" />
                                        </svg>
                                    </div>
                                </div>
                                <!-- Modal -->
                                <div id="buktiTransferModal" class="fixed inset-0 z-50 flex hidden items-center justify-center bg-black bg-opacity-80">
                                    <div class="relative flex w-full max-w-4xl justify-center">
                                        <button id="closeBuktiTransfer" class="absolute -right-6 -top-6 z-10 rounded-full bg-white p-2 shadow-lg">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </button>
                                        <img src="{{ asset("storage/" . $berbinarpUsers->enrollment->transfer_evidance) }}" alt="Bukti Pembayaran Besar" class="max-h-[90vh] w-auto rounded shadow-2xl" />
                                    </div>
                                </div>
                            @else
                                <p class="text-lg font-semibold text-gray-400">Tidak ada bukti pembayaran</p>
                            @endif
                        </div>

                        <div class="mb-2 flex flex-col">
                            <h2 class="mb-2 text-lg font-semibold text-gray-500">Darimana SobatBinar mengetahui layanan produk BERBINAR+</h2>
                            <p class="text-lg font-semibold">{{ $berbinarpUsers->knowing_source }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section("script")
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const thumb = document.getElementById('buktiTransferThumb');
            const modal = document.getElementById('buktiTransferModal');
            const closeBtn = document.getElementById('closeBuktiTransfer');
            if (thumb && modal && closeBtn) {
                thumb.addEventListener('click', function () {
                    modal.classList.remove('hidden');
                });
                closeBtn.addEventListener('click', function (e) {
                    e.stopPropagation();
                    modal.classList.add('hidden');
                });
                modal.addEventListener('click', function (e) {
                    if (e.target === modal) {
                        modal.classList.add('hidden');
                    }
                });
            }
        });
    </script>
@endsection
