@extends('dashboard.layouts.app', [
    'title' => 'Peer Counselor Staff',
    'active' => 'Dashboard',
])

@section('content')
    <section class="flex w-full">
        <div class="flex flex-col w-full">
            <div class="py-4 md:pt-12 md:pb-7 px-4 md:px-8 xl:px-10">
                <div class="-ml-10">
                    <div class="flex flex-row gap-2">
                        <p tabindex="0"
                            class="mb-2 font-bold leading-normal text-black focus:outline-none text-base md:text-lg lg:text-xl xl:text-3xl">
                            Konseling Peer Counselor Data
                        </p>
                    </div>
                    <p class="w-full text-disabled text-xs sm:text-xs md:text-sm lg:text-md xl:text-base">
                        Halaman yang menampilkan dan mengelola data pendaftar konseling Peer Counselor.
                    </p>

                    <a href="{{ route('dashboard.peer-staff.create') }}" type="button"
                        class="focus:ring-2 focus:ring-offset-2 mt-8 sm:mt-3 inline-flex items-start justify-start px-4 py-2 text-white bg-primary hover:bg-primary focus:outline-none rounded-md">
                        <p class="font-medium leading-none text-dark text-xs xl:text-sm">Tambah Data</p>
                    </a>
                </div>
            </div>

            <div class="bg-white py-4 md:py-7 px-4 md:px-8 xl:px-10 rounded-md drop-shadow-lg">
                <div class="mt-4 overflow-x-auto">
                    <table id="example" class="min-w-full border-collapse">
                        <thead class="bg-none">
                            <tr class="text-center">
                                <th class="py-3 px-2 text-xs sm:text-sm md:text-md lg:text-base ">No</th>
                                <th class="py-3 px-2 text-xs sm:text-sm md:text-md lg:text-base">Nama Lengkap</th>
                                <th class="py-3 px-2 text-xs sm:text-sm md:text-md lg:text-base">Nomor WhatsApp</th>
                                <th class="py-3 px-2 text-xs sm:text-sm md:text-md lg:text-base">Email</th>
                                <th class="py-3 px-2 text-xs sm:text-sm md:text-md lg:text-base">Tanggal Konseling</th>
                                <th class="py-3 px-2 text-xs sm:text-sm md:text-md lg:text-base">Jam Konseling</th>
                                <th class="py-3 px-2 text-xs sm:text-sm md:text-md lg:text-base">Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 text-gray-700">
                            @forelse ($PeerData as $key => $item)
                                <tr class="hover:bg-gray-50 transition text-md lg:text-base">
                                    <td class="py-3 text-center">{{ $key + 1 }}.</td>
                                    <td class="text-start">{{ $item->nama }}</td>
                                    <td class="text-center">
                                        <a href="https://wa.me/62{{ ltrim($item->no_wa, '0') }}" target="_blank" class="text-blue-500 hover:text-blue-700 underline">{{ $item->no_wa }}</a>
                                    </td>
                                    <td class="text-center">{{ $item->email }}</td>
                                    <td class="text-center">{{ \Carbon\Carbon::parse($item->jadwal_tanggal)->format("d-m-Y") }}</td>
                                    <td class="text-center">{{ $item->jadwal_pukul }}</td>
                                    <td class="flex justify-center gap-2">
                                        <a href="{{ route('dashboard.peer-staff.show', $item->id) }}" class="p-2 bg-blue-500 hover:bg-blue-600 rounded"><i
                                                class="bx bx-show text-white"></i></a>
                                        <a href="{{ route('dashboard.peer-staff.edit', $item->id) }}" class="p-2 bg-yellow-500 hover:bg-yellow-600 rounded"><i
                                                class="bx bx-edit text-white"></i></a>
                                        <form id="deleteForm-{{ $item->id }}" action="{{ route('dashboard.peer-staff.destroy', $item->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="p-2 bg-red-500 hover:bg-red-600 rounded focus:outline-none"><i
                                                                                            class="bx bx-trash-alt text-white"></i></button>
                                        </form>

                                    </td>
                                </tr>
                            @empty

                            @endforelse
                        </tbody>
                    </table>

                    <!-- Modal Konfirmasi Hapus -->
                    <div id="confirmModal" class="fixed inset-0 z-50 flex hidden items-center justify-center bg-black/40">
                        <div class="relative w-[560px] rounded-[20px] bg-white p-6 text-center font-plusJakartaSans shadow-lg"
                            style="
                            background:
                                linear-gradient(to right, #74aabf, #3986a3) top/100% 6px no-repeat,
                                white;
                            border-radius: 20px;
                            background-clip: padding-box, border-box;
                        ">
                            <!-- Warning Icon -->
                            <img src="{{ asset('assets/images/dashboard/warning.webp') }}" alt="Warning Icon"
                                class="mx-auto h-[83px] w-[83px]" />

                            <!-- Title -->
                            <h2 class="mt-4 text-2xl font-bold text-stone-900">Konfirmasi Batal</h2>

                            <!-- Message -->
                            <p class="mt-2 text-base font-medium text-black">Apakah Anda yakin ingin membatalkan penambahan
                                data ini?</p>

                            <!-- Actions -->
                            <div class="mt-6 flex justify-center gap-3">
                                <button id="cancelCancel"
                                    class="rounded-lg border border-stone-300 px-6 py-2 text-stone-700">Tidak</button>
                                <button id="confirmCancel"
                                    class="rounded-[5px] bg-gradient-to-r from-[#74AABF] to-[#3986A3] px-6 py-2 font-medium text-white">Ya</button>
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
            deleteForm.action = `/dashboard/psychologists-staff/${classId}`;
            deleteModal.classList.remove('hidden');
        }

        function closeDeleteModal() {
            deleteModal.classList.add('hidden');
        }
    </script>
@endsection
