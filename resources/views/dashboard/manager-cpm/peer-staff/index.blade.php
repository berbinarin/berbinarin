@extends('dashboard.layouts.app', [
    'title' => 'Psikolog Staff',
    'active' => 'Dashboard',
])

@section("content")
    <section class="flex w-full">
        <div class="flex flex-col">
            <div class="w-full">
                <div class="py-4 md:pt-12 md:pb-7">
                    <div class="">
                        <div class="flex flex-row gap-2">
                            <p tabindex="0" class="mb-2 text-base font-bold leading-normal text-gray-800 focus:outline-none sm:text-lg md:text-2xl lg:text-4xl">Konseling Peer Data</p>
                        </div>
                        <p class="w-full text-disabled">Fitur ini digunakan untuk menampilkan data pendaftar konseling yang
                            mendaftar melalui situs web Berbinar.</p>
                        <a href="{{ route('dashboard.peer-staff.create') }}" type="button"
                            class="focus:ring-2 focus:ring-offset-2  mt-8 sm:mt-3 inline-flex items-start justify-start px-6 py-3 text-white bg-primary hover:bg-primary focus:outline-none rounded">
                            <p class=" font-medium leading-none text-dark">Tambah Data</p>
                        </a>
                    </div>
                </div>
                <div class="bg-white py-4 md:py-7 px-4 md:px-8 xl:px-10 rounded-md">
                    <div class="mt-4 overflow-x-auto">
                        <table id="example" class="display" style="overflow-x: scroll;">
                            <thead>
                                <tr>
                                    <th style="text-align: center">No</th>
                                    <th style="text-align: center">Nama Lengkap</th>
                                    <th style="text-align: center">Tanggal Konseling</th>
                                    <th style="text-align: center">Pukul</th>
                                    <th style="text-align: center">Tanggal Pendaftaran</th>
                                    <th style="text-align: center">Nomor WhatsApp</th>
                                    <th style="text-align: center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($PsikologData as $key=>$item)
                                    <tr class="data-consume">
                                        <td class="text-center"style="height: 40px">{{ $key + 1 }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ \Carbon\Carbon::parse($item->jadwal_tanggal)->format('d-m-Y') }}</td>
                                        <td class="text-center">{{ $item->jadwal_pukul }}</td>
                                        <td class="text-center">{{ \Carbon\Carbon::parse($item->created_at)->format("d-m-Y") }}</td>
                                        <td class="text-center">
                                            <a href="https://wa.me/62{{ ltrim($item->no_wa, '0') }}" target="_blank" class="text-blue-500 hover:text-blue-700 underline">{{ $item->no_wa }}</a>
                                        </td>
                                        <td class="flex flex-row justify-center gap-2">
                                            <a href="{{ route('dashboard.peer-staff.show', $item->id) }}"
                                                class="focus:ring-2 focus:ring-offset-2 inline-flex items-start justify-start p-3 bg-gray-500 hover:bg-gray-600 focus:outline-none rounded">
                                                <i class='bx bx-show text-white'></i>
                                            </a>
                                            <a href="{{ route("dashboard.peer-staff.edit", $item->id) }}" class="inline-flex items-start justify-start rounded bg-yellow-500 p-3 hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-offset-2">
                                                <i class="bx bx-edit text-white"></i>
                                            </a>
                                            <button type="button" onclick="openDeleteModal({{ $item->id }})" class="focus:ring-2 focus:ring-offset-2 inline-flex items-start justify-start p-3 bg-red-500 hover:bg-red-600 focus:outline-none rounded">
                                                <i class="bx bx-trash-alt text-white"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @empty
                                @endforelse
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
@endsection

@section('script')
    <script>
        let deleteModal = document.getElementById('deleteModal');
        let deleteForm = document.getElementById('deleteForm');

        function openDeleteModal(classId) {
            deleteForm.action = `/dashboard/peer-staff/${classId}`;
            deleteModal.classList.remove('hidden');
        }

        function closeDeleteModal() {
            deleteModal.classList.add('hidden');
        }
    </script>
@endsection

