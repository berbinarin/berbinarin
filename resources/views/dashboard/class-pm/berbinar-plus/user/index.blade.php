@extends('dashboard.layouts.app',[
'title' => 'Dashboard User Berbinar+',
'active' => 'Success',
'page' => 'Success',
])

@section('content')
<section class="flex w-full">
  <div class="flex flex-col w-full bg-gray-100">
    <div class="w-full">
      <div class="py-4 md:pt-12 md:pb-7">
        <div>
          <p tabindex="0" class="focus:outline-none text-base sm:text-lg md:text-2xl lg:text-4xl font-bold leading-normal mb-2 text-gray-800">
            Data Pendaftar
          </p>
          <p class="w-full text-[#333333] lg:text-lg">
            Halaman ini menampilkan data lengkap peserta yang telah mendaftar ke program Berbinar+, termasuk informasi pribadi, kelas yang diikuti, dan paket layanan yang dipilih.
        </p>
        <a href="{{ route("dashboard.berbinar-plus-users.create") }}" class="mt-8 inline-flex items-start justify-start rounded-lg bg-primary px-6 py-3 text-white hover:bg-primary focus:outline-none focus:ring-2 focus:ring-offset-2 sm:mt-3">
            <p class="text-dark font-medium leading-none">Tambah Data</p>
        </a>
    </div>
      </div>
      <div class="flex w-full space-x-4">
        <!-- Left Card -->
        <div class="rounded-2xl bg-white w-full shadow-lg px-4 py-4 md:px-8 md:py-7 xl:px-10">
                <div class="mb-4 mt-4 overflow-x-auto">
                    <table id="example" class="min-w-full pt-5 leading-normal">
                        <thead>
                            <tr class="mt-4">
                                <th class="sticky-col sticky-col-1 bg-white px-6 py-3 text-center text-base font-bold leading-4 tracking-wider text-black">No</th>
                                <th class="sticky-col sticky-col-2 bg-white px-6 py-3 text-start text-base font-bold leading-4 tracking-wider text-black">Nama Lengkap</th>
                                <th class="bg-white px-6 py-3 text-center text-base font-bold leading-4 tracking-wider text-black">Tanggal Daftar</th>
                                <th class="bg-white px-6 py-3 text-center text-base font-bold leading-4 tracking-wider text-black">Email</th>
                                <th class="bg-white px-6 py-3 text-center text-base font-bold leading-4 tracking-wider text-black">Pilihan Kelas</th>
                                <th class="bg-white px-6 right-0 py-3 text-center text-base font-bold leading-4 tracking-wider text-black">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($berbinarpUsers as $index => $user)
                                <tr class="border-b border-gray-200 hover:bg-gray-200 odd:bg-gray-100 even:bg-white">
                                    <td class="whitespace-no-wrap text-center sticky-col sticky-col-1 px-6 py-4">
                                        {{ $index + 1 }}
                                    </td>

                                    <td class="whitespace-no-wrap sticky-col sticky-col-2 px-6 py-4">
                                        Morgan Vero
                                    </td>

                                    <td class="whitespace-no-wrap text-center px-6 py-4">
                                        2025-07-07
                                    </td>

                                    <td class="whitespace-no-wrap text-center px-6 py-4">
                                        Morgan@gmail.com
                                    </td>

                                    <td class="whitespace-no-wrap text-center px-6 py-4">
                                        Product Manager
                                    </td>

                                    <td class="whitespace-no-wrap flex items-center justify-center gap-2 px-6 py-4">
                                        <!-- Tombol Detail -->
                                        <a href="{{ route("dashboard.berbinar-plus-users.show") }}" class="inline-flex items-start justify-start rounded p-2 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2" style="background-color: #3b82f6">
                                            <i class="bx bx-show text-white"></i>
                                        </a>

                                        <!-- Tombol Edit -->
                                        <a href="{{ route("dashboard.berbinar-plus.index") }}" class="inline-flex items-start justify-start rounded p-2 hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-offset-2" style="background-color: #e9b306">
                                            <i class="bx bx-edit-alt text-black"></i>
                                        </a>

                                        <!-- Tombol Hapus -->
                                        <button type="button" onclick="" class="inline-flex items-start justify-start rounded p-2 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2" style="background-color: #ef4444">
                                            <i class="bx bx-trash-alt text-white"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal Konfirmasi Hapus -->
    <div id="deleteModal" class="fixed inset-0 z-10 hidden overflow-y-auto">
        <div class="flex min-h-screen items-center justify-center px-4 text-center">
            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
            <div class="transform overflow-hidden rounded-lg bg-white shadow-xl transition-all sm:w-full sm:max-w-lg">
                <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                            <svg class="h-6 w-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M12 2a10 10 0 100 20 10 10 0 000-20z" />
                            </svg>
                        </div>
                        <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
                            <h3 class="text-lg font-medium leading-6 text-gray-900" id="modal-title">Konfirmasi Hapus</h3>
                            <div class="mt-2">
                                <p class="text-sm text-gray-500">Apakah Anda yakin ingin menghapus divisi ini? Semua sub divisi terkait juga akan dihapus.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                    <form id="deleteForm" method="POST">
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="inline-flex w-full justify-center rounded-md border border-transparent bg-red-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 sm:ml-3 sm:w-auto sm:text-sm">Hapus</button>
                    </form>
                    <button type="button" class="mt-3 inline-flex w-full justify-center rounded-md border border-gray-300 bg-white px-4 py-2 text-base font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:mt-0 sm:w-auto sm:text-sm" onclick="closeDeleteModal()">Batal</button>
                </div>
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

        function openDeleteModal(divisionId) {
            deleteForm.action = `/dashboard/divisions/${divisionId}`;
            deleteModal.classList.remove('hidden');
        }

        function closeDeleteModal() {
            deleteModal.classList.add('hidden');
        }
    </script>
@endsection
