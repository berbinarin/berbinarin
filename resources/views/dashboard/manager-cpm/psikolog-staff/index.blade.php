@extends('dashboard.layouts.app', [
    'title' => 'Psikolog Staff',
    'active' => 'Dashboard',
])

@section('content')
    <section class="flex w-full">
        <div class="flex flex-col w-full">
            <!-- Header -->
            <div class="py-4 md:pt-12 md:pb-7">
                <div>
                    <div class="flex flex-row gap-2">
                        <p tabindex="0"
                            class="mb-2 text-base font-bold leading-normal text-gray-800 focus:outline-none sm:text-lg md:text-2xl lg:text-4xl">
                            Psikolog Staff
                        </p>
                    </div>
                    <p class="w-full text-gray-500 text-sm">
                        Halaman yang menampilkan dan mengelola data Psikolog Staff
                    </p>
                    <button type="button"
                        class="focus:ring-2 focus:ring-offset-2 mt-8 sm:mt-3 inline-flex items-center justify-center px-4 py-2 text-white bg-primary hover:bg-primary focus:outline-none rounded-lg text-sm font-medium">
                        Tambah Data
                    </button>
                </div>
            </div>

            <!-- Table -->
            <div class="bg-white py-4 md:py-7 px-4 md:px-8 xl:px-10 rounded-md">
                <div class="mt-4 overflow-x-auto">
                    <table id="example" class="display" style="overflow-x: scroll;">
                        <thead>
                            <tr>
                                <th class="text-center font-extrabold text-sm">No</th>
                                <th class="text-center font-extrabold text-sm">Nama Lengkap</th>
                                <th class="text-center font-extrabold text-sm">Jenis Kelamin</th>
                                <th class="text-center font-extrabold text-sm">Nomor WhatsApp</th>
                                <th class="text-center font-extrabold text-sm">Email</th>
                                <th class="text-center font-extrabold text-sm">Tanggal Konseling</th>
                                <th class="text-center font-extrabold text-sm">Jam Konseling</th>
                                <th class="text-center font-extrabold text-sm">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-start font-medium text-sm">1</td>
                                <td>Dr. Clara Anjani</td>
                                <td class="text-center">Perempuan</td>
                                <td class="text-center">
                                    <a href="https://wa.me/6281234567890" target="_blank"
                                        class="text-blue-500 hover:text-blue-700 underline">0812-3456-7890</a>
                                </td>
                                <td class="text-center">clara@berbinar.id</td>
                                <td class="text-center">15-10-2025</td>
                                <td class="text-center">10:00</td>
                                <td class="flex justify-center gap-2">
                                    <button class="p-2 bg-gray-500 rounded hover:bg-gray-600"><i
                                            class="bx bx-show text-white"></i></button>
                                    <button class="p-2 bg-yellow-500 rounded hover:bg-yellow-600"><i
                                            class="bx bx-edit text-white"></i></button>
                                    <button class="p-2 bg-red-500 rounded hover:bg-red-600"><i
                                            class="bx bx-trash-alt text-white"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
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
            deleteForm.action = `/dashboard/psychologists-staff/${classId}`;
            deleteModal.classList.remove('hidden');
        }

        function closeDeleteModal() {
            deleteModal.classList.add('hidden');
        }
    </script>
@endsection
