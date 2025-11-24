@extends(
    "dashboard.layouts.app",
    [
        "title" => "Kode Voucher",
        "active" => "Dashboard",
    ]
)

@section("content")
    <section class="flex w-full">
        <div class="flex flex-col">
            <div class="w-full">
                <div class="py-4 md:pb-7 md:pt-12">
                    <div class="">
                        <p tabindex="0" class="mb-2 text-base font-bold leading-normal text-gray-800 focus:outline-none sm:text-lg md:text-2xl lg:text-4xl">Kode Voucher</p>
                        <p class="text-disabled">Halaman yang menampilkan dan mengelola Kode Voucher.</p>
                        <a href="{{ route("dashboard.code-voucher.create") }}" class="mt-8 inline-flex items-start justify-start rounded bg-primary px-6 py-3 text-white hover:bg-primary focus:outline-none focus:ring-2 focus:ring-offset-2 sm:mt-3">
                            <p class="text-dark font-medium leading-none">Tambah Data</p>
                        </a>
                    </div>
                </div>
                <div class="mb-7 w-[80vw] rounded-md bg-white px-4 py-4 md:px-8 md:py-7 xl:px-10">
                    <div class="mt-4 overflow-x-auto">
                        <table id="example" class="display" style="overflow-x: scroll">
                            <thead>
                                <tr>
                                    <th style="text-align: center">No</th>
                                    <th style="text-align: center">Jenis Pendaftaran</th>
                                    <th style="text-align: center">Kategori Voucher</th>
                                    <th style="text-align: center">Nama Voucher</th>
                                    <th style="text-align: center">Kode Voucher</th>
                                    <th style="text-align: center">Persentase Diskon</th>
                                    <th style="text-align: center">Tipe Voucher</th>
                                    <th style="text-align: center">Detail Voucher</th>
                                    <th style="text-align: center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($vouchers as $i => $voucher)
                                <tr>
                                    <td class="text-center">{{ $i+1 }}</td>
                                    <td class="text-center">{{ $voucher->jenis_pendaftaran }}</td>
                                    <td class="text-center">{{ $voucher->category }}</td>
                                    <td class="text-center">{{ $voucher->nama_voucher }}</td>
                                    <td class="text-center">{{ $voucher->code }}</td>
                                    <td class="text-center">{{ $voucher->percentage }}%</td>
                                    <td class="text-center">
                                        @php
                                            $tipe = json_decode($voucher->tipe, true);
                                        @endphp
                                        {{ $tipe ? implode(', ', $tipe) : '-' }}
                                    </td>
                                    <td class="text-center">
                                        @php
                                            $detail = json_decode($voucher->detail, true);
                                        @endphp
                                        {{ $detail ? implode(', ', $detail) : '-' }}
                                    </td>
                                    <td class="text-center flex flex-row justify-center gap-2">
                                        <a href="{{ route('dashboard.code-voucher.edit', $voucher->id) }}" class="inline-flex items-start justify-start p-3 bg-yellow-500 hover:bg-yellow-600 rounded">
                                            <i class='bx bx-edit text-white'></i>
                                        </a>
                                        <button type="button" onclick="openDeleteModal({{ $voucher->id }})" class="inline-flex items-start justify-start p-3 bg-red-500 hover:bg-red-600 rounded">
                                            <i class="bx bx-trash-alt text-white"></i>
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>


                        <!-- Modal Konfirmasi Hapus -->
                        <div id="deleteModal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/40">
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
                                <h2 class="mt-4 text-2xl font-bold text-stone-900">Konfirmasi Hapus</h2>

                                <!-- Message -->
                                <p class="mt-2 text-base font-medium text-black">Apakah Anda yakin ingin menghapus kelas ini? Semua data terkait juga akan dihapus.</p>

                                <!-- Actions -->
                                <div class="mt-6 flex justify-center gap-3">
                                    <form id="deleteForm" method="POST" class="w-1/2">
                                        @csrf
                                        @method("DELETE")
                                        <button type="submit" class="w-full rounded-[5px] bg-gradient-to-r from-[#74AABF] to-[#3986A3] px-6 py-2 font-medium text-white">Hapus</button>
                                    </form>
                                    <button type="button" class="w-1/2 rounded-lg border border-stone-300 px-6 py-2 text-stone-700" onclick="closeDeleteModal()">Batal</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        let deleteModal = document.getElementById('deleteModal');
        let deleteForm = document.getElementById('deleteForm');

        function openDeleteModal(voucherId) {
            deleteForm.action = `/dashboard/code-voucher/${voucherId}`;
            deleteModal.classList.remove('hidden');
        }

        function closeDeleteModal() {
            deleteModal.classList.add('hidden');
        }
    </script>

@endsection
