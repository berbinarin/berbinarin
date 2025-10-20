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
                            class="mb-2 text-base font-bold leading-normal text-gray-800 focus:outline-none sm:text-lg md:text-3xl lg:text-4xl">
                            Psikolog
                        </p>
                    </div>
                    <p class="w-full text-gray-500 text-base">
                        Halaman yang menampilkan dan mengelola data pendaftar konseling Psikolog.
                    </p>
                    <button type="button"
                        class="focus:ring-2 focus:ring-offset-2 mt-8 sm:mt-3 inline-flex items-center justify-center px-4 py-2 text-white bg-primary hover:bg-primary focus:outline-none rounded-lg text-sm font-medium">
                        Tambah Data
                    </button>
                </div>
            </div>

            <!-- Table Container -->
            <div class="bg-white rounded-xl w-full max-w-full overflow-x-auto py-5 shadow-lg">
                <!-- Header: Show Entries -->
                <div class="flex items-center justify-between mb-5 ">
                    <!-- Kiri: Show Entries -->
                    <div class="flex items-center gap-2 ml-12 ">
                        <label for="entries" class="text-[#333333] text-sm font-medium">Show</label>

                        <div class="relative inline-flex items-center">
                            <select id="entries"
                                class="appearance-none border-none bg-[#edf2f8] rounded-lg px-3 py-2 pr-8 text-sm font-medium text-[#333333] focus:outline-none">
                                <option value="10">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                                <option value="1000">1000</option>
                            </select>
                        </div>

                        <span class="text-[#333333] text-sm font-medium">entries</span>
                    </div>


                    <!-- Kanan: (opsional, bisa untuk search bar nanti) -->
                    <div class="mr-12">
                        <label for="search" class="text-sm font-medium "> Search:</label>
                        <input type="text"
                            class="border-none rounded-[4px] px-3 py-1 text-sm focus:outline-none bg-[#edf2f8]"
                            id="search" name="search" />
                    </div>
                </div>

                <table class="w-full border-collapse">
                    <thead class="text-center border-b-[1px] border-[#111111] px-5">
                        <tr>
                            @foreach (['No.', 'Nama Lengkap', 'Jenis Kelamin', 'Nomor WhatsApp', 'Email', 'Tanggal Konseling', 'Jam Konseling', 'Action'] as $col)
                                <th class="text-[12.44px] font-extrabold py-3 px-3 text-center whitespace-nowrap">
                                    <div class="flex items-center justify-center gap-1">
                                        <span>{{ $col }}</span>
                                        @if ($col !== 'No.' && $col !== 'Action')
                                            <div
                                                class="flex flex-col leading-[8px] text-gray-400 text-[12px] cursor-pointer sort-icon">
                                                <i class='bx bx-chevron-up'></i>
                                                <i class='bx bx-chevron-down -mt-[3px]'></i>
                                            </div>
                                        @endif
                                    </div>
                                </th>
                            @endforeach
                        </tr>
                    </thead>


                    <tbody class="font-semibold text-black text-xs">
                        <tr class="odd:bg-[#f9f9f9] even:bg-white hover:bg-[#f1f5f9] transition-colors duration-200">
                            <td class="py-3 px-3 text-center">1.</td>
                            <td class="py-3 px-3 text-start">Rusdi Ambasing</td>
                            <td class="py-3 px-3 text-start">Laki-laki</td>
                            <td class="py-3 px-3 text-start">0822342323233</td>
                            <td class="py-3 px-3 text-start">HIDUPJOKOWI@gmail.com</td>
                            <td class="py-3 px-3 text-start">25-07-2025</td>
                            <td class="py-3 px-3 text-start">08.00</td>
                            <td class="py-3 px-3">
                                <div class="flex justify-center gap-2">
                                    <button
                                        class="p-[7px] bg-[#3b82f6] rounded hover:bg-opacity-80 transition duration-150 shadow-sm hover:shadow">
                                        <i class="bx bx-show text-white text-lg"></i>
                                    </button>
                                    <button
                                        class="p-[7px] bg-yellow-500 rounded hover:bg-opacity-80 transition duration-150 shadow-sm hover:shadow">
                                        <i class="bx bx-edit text-white text-lg"></i>
                                    </button>
                                    <button
                                        class="p-[7px] bg-red-500 rounded hover:bg-opacity-80 transition duration-150 shadow-sm hover:shadow">
                                        <i class="bx bx-trash-alt text-white text-lg"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <tr class="odd:bg-[#f9f9f9] even:bg-white hover:bg-[#f1f5f9] transition-colors duration-200">
                            <td class="py-3 px-3 text-center">2.</td>
                            <td class="py-3 px-3 text-start">Putri Aisyah</td>
                            <td class="py-3 px-3 text-start">Perempuan</td>
                            <td class="py-3 px-3 text-start">081234567890</td>
                            <td class="py-3 px-3 text-start">putriaisyah@gmail.com</td>
                            <td class="py-3 px-3 text-start">26-07-2025</td>
                            <td class="py-3 px-3 text-start">10.00</td>
                            <td class="py-3 px-3">
                                <div class="flex justify-center gap-2">
                                    <button
                                        class="p-[7px] bg-[#3b82f6] rounded hover:bg-opacity-80 transition duration-150 shadow-sm hover:shadow">
                                        <i class="bx bx-show text-white text-lg"></i>
                                    </button>
                                    <button
                                        class="p-[7px] bg-yellow-500 rounded hover:bg-opacity-80 transition duration-150 shadow-sm hover:shadow">
                                        <i class="bx bx-edit text-white text-lg"></i>
                                    </button>
                                    <button
                                        class="p-[7px] bg-red-500 rounded hover:bg-opacity-80 transition duration-150 shadow-sm hover:shadow">
                                        <i class="bx bx-trash-alt text-white text-lg"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>

                </table>

                <!-- Pagination -->
                <div class="flex justify-end items-center mt-8 mr-5">
                    <nav class="flex items-center space-x-1 text-sm font-medium">
                        <!-- Tombol Previous -->
                        <button
                            class="px-2 py-1 border-none text-[#404B52] rounded-[4px] hover:bg-gray-100 bg-[#f5f5f5] transition">
                            <i class='bx bx-chevron-left'></i>
                        </button>

                        <!-- Nomor halaman -->
                        <button
                            class="px-3 py-1 bg-primary text-white rounded-[4px] hover:bg-opacity-80 transition">1</button>
                        <button
                            class="px-3 py-1 border-none text-[#404B52] rounded-[4px] hover:bg-gray-100 bg-[#f5f5f5] transition">2</button>
                        <button
                            class="px-3 py-1 border-none text-[#404B52] rounded-[4px] hover:bg-gray-100 bg-[#f5f5f5] transition">3</button>
                        <button
                            class="px-3 py-1 border-none text-[#404B52] rounded-[4px] hover:bg-gray-100 bg-[#f5f5f5] transition">4</button>
                        <span class="px-2 text-gray-500">...</span>
                        <button
                            class="px-3 py-1 border-none text-[#404B52] rounded-[4px] hover:bg-gray-100 bg-[#f5f5f5] transition">10</button>

                        <!-- Tombol Next -->
                        <button
                            class="px-2 py-1 border-none text-[#404B52] rounded-[4px] hover:bg-gray-100 bg-[#f5f5f5] transition">
                            <i class='bx bx-chevron-right'></i>
                        </button>
                    </nav>
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

        // === Script tambahan untuk tanda panah sort ===
        document.querySelectorAll('.sort-icon').forEach(icon => {
            icon.addEventListener('click', function() {
                const up = this.querySelector('.bx-chevron-up');
                const down = this.querySelector('.bx-chevron-down');

                // Toggle warna aktif
                if (up.classList.contains('text-blue-500')) {
                    up.classList.remove('text-blue-500');
                    down.classList.add('text-blue-500');
                } else if (down.classList.contains('text-blue-500')) {
                    down.classList.remove('text-blue-500');
                } else {
                    up.classList.add('text-blue-500');
                }
            });
        });
    </script>
@endsection
