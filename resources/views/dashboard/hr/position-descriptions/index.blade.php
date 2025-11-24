@extends(
    "dashboard.layouts.app",
    [
        "title" => "Positions Descriptions Management",
    ]
)

@section("content")
    <section class="flex w-full">
        <div class="flex flex-col">
            <div class="w-full">
                <div class="py-4 md:pb-7 md:pt-12">
                    <div class="">
                        <p tabindex="0" class="mb-2 text-base font-bold leading-normal text-gray-800 focus:outline-none sm:text-lg md:text-2xl lg:text-4xl">Deskripsi Posisi</p>
                        <p class="w-full text-disabled">Fitur ini digunakan untuk mengatur dan memanajemen data deskripsi posisi yang sedang atau akan dibuka atau telah dibuka yang ditampilkan pada situs karir Berbinarin.</p>
                        <a href="{{ route("dashboard.position-descriptions.create") }}" class="mt-8 inline-flex items-start justify-start rounded-lg bg-primary px-6 py-3 text-white hover:bg-primary focus:outline-none focus:ring-2 focus:ring-offset-2 sm:mt-3">
                            <p class="text-dark font-medium leading-none">Tambah Data</p>
                        </a>
                    </div>
                </div>
                <div class="mb-7 rounded-md bg-white px-4 py-4 md:px-8 md:py-7 xl:px-10">
                    <div class="mt-4 overflow-x-auto">
                        <table id="example" class="display" style="overflow-x: scroll">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Posisi</th>
                                    <th>Deskripsi Pekerjaan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($HiringPosisitonsJobDescriptionment as $key => $item)
                                    <tr class="data-consume">
                                        <td class="text-center">{{ $key + 1 }}</td>
                                        <td>{{ $item->HiringPositions->name }}</td>
                                        <td class="text-center">{{ Str::limit($item->job_description, 25) }}</td>
                                        <td class="flex justify-center gap-2">
                                            <a href="{{ route("dashboard.position-descriptions.edit", $item->id) }}" class="mt-4 inline-flex items-start justify-start rounded bg-yellow-500 p-3 hover:bg-yellow-500 focus:outline-none focus:ring-2 focus:ring-offset-2 sm:mt-0">
                                                <i class="bx bxs-edit-alt text-white"></i>
                                            </a>
                                            <button onclick="openDeleteModal({{ $item->id }}, '{{ e($item->HiringPositions->name) }}')" type="button" class="mt-4 inline-flex items-start justify-start rounded bg-red-500 p-3 hover:bg-red-500 focus:outline-none focus:ring-2 focus:ring-offset-2 sm:mt-0">
                                                <i class="bx bxs-trash-alt text-white"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @empty
                                    <!-- Handle empty case if needed -->
                                @endforelse
                            </tbody>

                            <tfoot>
                                {{--
                                    <tr>
                                    <th>No</th>
                                    <th>Nama Posisi</th>
                                    <th>Job Description</th>
                                    <th>Actions</th>
                                    </tr>
                                --}}
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal Konfirmasi Hapus -->
    <div id="deleteModal" class="fixed inset-0 z-50 flex hidden items-center justify-center bg-black/40">
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
            <p class="mt-2 text-base font-medium text-black">
                Apakah Anda yakin ingin menghapus
                <span id="deleteItemName"></span>
                ? Semua data terkait juga akan dihapus.
            </p>

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

    <script type="text/javascript">
        function toggleModal(modalID) {
            document.getElementById(modalID).classList.toggle('hidden');
            document.getElementById(modalID + '-backdrop').classList.toggle('hidden');
            document.getElementById(modalID).classList.toggle('flex');
            document.getElementById(modalID + '-backdrop').classList.toggle('flex');
        }

        let deleteModal = document.getElementById('deleteModal');
        let deleteForm = document.getElementById('deleteForm');

        function openDeleteModal(itemId, itemName) {
            deleteForm.action = `/dashboard/position-descriptions/${itemId}`;
            document.getElementById('deleteItemName').textContent = itemName;
            deleteModal.classList.remove('hidden');
        }

        function closeDeleteModal() {
            deleteModal.classList.add('hidden');
        }
    </script>
@endsection
