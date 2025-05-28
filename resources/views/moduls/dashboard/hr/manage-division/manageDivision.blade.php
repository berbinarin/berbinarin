@extends('moduls.dashboard.layouts.main', [
    'title' => 'Manage Division',
    'active' => 'Dashboard',
    'modul' => 'Manage Division',
])

@section('content-dashboard')
    <style>
        .w-80 {
            width: 20rem;
        }

        .sticky-col {
            position: -webkit-sticky;
            position: sticky;
            background-color: white;
            z-index: 1;
        }

        .sticky-col-1 {
            left: 0;
            width: 50px;
        }

        .sticky-col-2 {
            left: 50px;
        }
    </style>

    <section class="flex w-full">
        <div class="flex flex-col w-full">
            <div class="py-4 md:pt-12 md:pb-7">
                <div class="">
                    <p tabindex="0"
                        class="focus:outline-none text-base sm:text-lg md:text-2xl lg:text-4xl font-bold leading-normal text-gray-800 mb-2">
                        Division Management</p>
                    <p class="w-3/4 text-disabled">Pada halaman ini, admin dapat melakukan tambah, edit, ataupun hapus
                        terhadap divisi yang ada pada Keluarga Berbinar. Data tersebut yang menjadi bahan untuk ditampilkan
                        pada website resmi Berbinar pada bagian Keluarga Berbinar.</p>
                    <a href="{{ route('dashboard.divisions.create') }}">
                        <button type="button"
                            class="focus:ring-2 focus:ring-offset-2 mt-8 sm:mt-3 inline-flex items-start justify-start px-6 py-3 text-white bg-primary hover:bg-primary focus:outline-none rounded-lg">
                            <p class="font-medium leading-none text-dark">Tambah Data</p>
                        </button>
                    </a>
                </div>
            </div>



            <div class="bg-white py-4 md:py-7 px-4 md:px-8 xl:px-10 rounded-md">
                <div class="mt-4 mb-4 overflow-x-auto">
                    <table id="example" class="min-w-full leading-normal pt-5">
                        <thead>
                            <tr class="mt-4">
                                <th
                                    class="px-6 py-3 bg-white text-center text-base leading-4 font-bold text-black tracking-wider sticky-col sticky-col-1">
                                    No</th>
                                <th
                                    class="px-6 py-3 bg-white text-center text-base leading-4 font-bold text-black tracking-wider sticky-col sticky-col-2">
                                    Nama Divisi</th>
                                <th
                                    class="px-6 py-3 bg-white text-center text-base leading-4 font-bold text-black tracking-wider">
                                    Sub Divisi</th>
                                <th
                                    class="px-6 py-3 bg-white text-center text-base leading-4 font-bold text-black tracking-wider w-80">
                                    Tanggal Dibuat</th>
                                <th
                                    class="px-6 py-3 bg-white text-center text-base leading-4 font-bold text-black tracking-wider">
                                    Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($divisions as $index => $division)
                                <tr class="border-b border-gray-200 hover:bg-gray-100">
                                    <td class="px-6 py-4 whitespace-no-wrap sticky-col sticky-col-1">
                                        {{ $index + 1 }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap sticky-col sticky-col-2">
                                        {{ $division->nama_divisi }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap">
                                        @if ($division->subDivisions->isNotEmpty())
                                            <span>{{ $division->subDivisions->first()->nama_subdivisi }}</span>
                                        @else
                                            <span>-</span>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap w-80">
                                        {{ $division->created_at->format('d M Y') }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap flex justify-center items-center gap-2">
                                        <!-- Tombol Detail -->
                                        <a href="{{ route('dashboard.divisions.show', $division->id) }}"
                                            class="focus:ring-2 focus:ring-offset-2 inline-flex items-start justify-start p-2 focus:outline-none rounded hover:bg-blue-700"
                                            style="background-color: #3B82F6;">
                                            <i class='bx bx-show text-white'></i>
                                        </a>

                                        <!-- Tombol Edit -->
                                        <a href="{{ route('dashboard.divisions.edit', $division->id) }}"
                                            class="focus:ring-2 focus:ring-offset-2 inline-flex items-start justify-start p-2 focus:outline-none rounded hover:bg-yellow-700"
                                            style="background-color: #E9B306;">
                                            <i class='bx bx-edit-alt text-black'></i>
                                        </a>

                                        <!-- Tombol Hapus -->
                                        <button type="button" onclick="openDeleteModal({{ $division->id }})"
                                            class="focus:ring-2 focus:ring-offset-2 inline-flex items-start justify-start p-2 focus:outline-none rounded hover:bg-red-700"
                                            style="background-color: #EF4444;">
                                            <i class='bx bx-trash-alt text-white'></i>
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
    <div id="deleteModal" class="fixed z-10 inset-0 overflow-y-auto hidden">
        <div class="flex items-center justify-center min-h-screen px-4 text-center">
            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
            <div class="bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:max-w-lg sm:w-full">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div
                            class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                            <svg class="h-6 w-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 16h-1v-4h-1m1-4h.01M12 2a10 10 0 100 20 10 10 0 000-20z" />
                            </svg>
                        </div>
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                            <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">Konfirmasi Hapus</h3>
                            <div class="mt-2">
                                <p class="text-sm text-gray-500">Apakah Anda yakin ingin menghapus divisi ini? Semua sub
                                    divisi terkait juga akan dihapus.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <form id="deleteForm" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
                            Hapus
                        </button>
                    </form>
                    <button type="button"
                        class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:w-auto sm:text-sm"
                        onclick="closeDeleteModal()">
                        Batal
                    </button>
                </div>
            </div>
        </div>
    </div>

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
