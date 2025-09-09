@extends('dashboard.layouts.app', [
    'title' => 'Kode Voucher',
    'active' => 'Dashboard',
])

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
                <div class="rounded-md w-[80vw] bg-white mb-7 px-4 py-4 md:px-8 md:py-7 xl:px-10">
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
                        <div id="deleteModal" class="fixed inset-0 z-10 hidden items-center justify-center bg-black bg-opacity-50 flex">
                            <div class="w-full max-w-md rounded-lg bg-white p-6 text-center">
                                <div class="mb-4 flex justify-center">
                                    <img src="{{ asset('assets/images/dashboard/svg-icon/warning.svg') }}" alt="Warning Icon" class="h-12 w-12" />
                                </div>
                                <h3 class="mb-2 text-lg font-medium leading-6 text-gray-900" id="modal-title">Konfirmasi Hapus</h3>
                                <p class="mb-6 text-base text-gray-500">Apakah Anda yakin ingin menghapus kelas ini? Semua data terkait juga akan dihapus.</p>
                                <div class="flex w-full justify-center gap-4">
                                    <form id="deleteForm" method="POST" class="w-1/2">
                                        @csrf
                                        @method("DELETE")
                                        <button type="submit" class="rounded-lg bg-[#3986A3] w-full px-6 py-2 text-white text-center hover:bg-[#3986A3] focus:outline-none focus:ring-2 focus:ring-[#3986A3] focus:ring-offset-2">Hapus</button>
                                    </form>
                                    <button type="button" class="rounded-lg border border-[#3986A3] w-1/2 px-6 py-2 text-[#3986A3] focus:outline-none focus:ring-2 focus:ring-[#3986A3] focus:ring-offset-2" onclick="closeDeleteModal()">Batal</button>
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
