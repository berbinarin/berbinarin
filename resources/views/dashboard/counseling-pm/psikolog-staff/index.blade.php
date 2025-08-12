@extends('dashboard.layouts.app', [
    'title' => 'Psikolog Staff',
    'active' => 'Dashboard',
])

@section("content")
    <section class="flex w-full">
        <div class="flex flex-col">
            <div class="w-full">
                <div class="py-4 md:pb-7 md:pt-12">
                    <div class="">
                        <p tabindex="0" class="mb-2 text-base font-bold leading-normal text-gray-800 focus:outline-none sm:text-lg md:text-2xl lg:text-4xl">Psikolog Staff</p>
                        <p class="text-disabled">Halaman yang menampilkan dan mengelola data Psikolog Staff</p>
                        <a href="{{ route('dashboard.psikolog-staff.create') }}" class="mt-8 inline-flex items-start justify-start rounded bg-primary px-6 py-3 text-white hover:bg-primary focus:outline-none focus:ring-2 focus:ring-offset-2 sm:mt-3">
                            <p class="text-dark font-medium leading-none">Tambah Data</p>
                        </a>
                    </div>
                </div>
                <div class="rounded-md bg-white px-4 py-4 mb-7 md:px-8 md:py-7 xl:px-10">
                    <div class="mt-4 overflow-x-auto">
                        <table id="example" class="display" style="overflow-x: scroll">
                            <thead>
                                <tr>
                                    <th style="text-align: center">No</th>
                                    <th style="text-align: center">Nama Lengkap</th>
                                    <th style="text-align: center">Tanggal Counseling</th>
                                    <th style="text-align: center">Pukul</th>
                                    <th style="text-align: center">Tanggal Pendaftaran</th>
                                    <th style="text-align: center">Metode</th>
                                    <th style="text-align: center">Sesi</th>
                                    <th style="text-align: center">Daerah</th>
                                    <th style="text-align: center">Harga</th>
                                    <th style="text-align: center">Nomor WhatsApp</th>
                                    <th style="text-align: center">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                    <tr class="data-consume">
                                        <td class="text-center" style="height: 40px">1</td>
                                        <td>Dummy name</td>
                                        <td>Dummy date</td>
                                        <td class="text-center">Dummy time</td>
                                        <td class="text-center">Dummy date</td>
                                        <td style="text-transform: capitalize">Dummy method</td>
                                        <td style="text-transform: capitalize">Dummy session Jam</td>
                                        <td style="text-transform: capitalize">Dummy region</td>
                                        <td style="text-transform: capitalize">Rp. Dummy price</td>
                                        <td class="text-center">
                                            <a href="dummy wa" target="_blank" class="text-blue-500 hover:text-blue-700 underline">Dummy WA number</a>
                                        </td>
                                        <td class="flex flex-row justify-center gap-2">
                                            <a href="{{ route("dashboard.psikolog-staff.show") }}" class="inline-flex items-start justify-start rounded bg-blue-500 p-3 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2">
                                                <i class="bx bx-show text-white"></i>
                                            </a>
                                            <a href="{{ route("dashboard.psikolog-staff.edit") }}" class="inline-flex items-start justify-start rounded bg-yellow-500 p-3 hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-offset-2">
                                                <i class="bx bx-edit text-white"></i>
                                            </a>
                                            <button type="button" onclick="openDeleteModal()" class="focus:ring-2 focus:ring-offset-2 inline-flex items-start justify-start p-3 bg-red-500 hover:bg-red-600 focus:outline-none rounded">
                                                <i class="bx bx-trash-alt text-white"></i>
                                            </button>
                                        </td>
                                    </tr>




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

        function openDeleteModal(classId) {
            deleteForm.action = `/dashboard/berbinar-class/${classId}`;
            deleteModal.classList.remove('hidden');
        }

        function closeDeleteModal() {
            deleteModal.classList.add('hidden');
        }
    </script>

@endsection
