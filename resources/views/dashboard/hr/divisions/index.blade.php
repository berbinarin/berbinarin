@extends(
    "dashboard.layouts.app",
    [
        "title" => "Manage Division",
    ]
)

@section("content")
    <style>
        .w-80 {
            width: 20rem;
        }

        .sticky-col {
            position: -webkit-sticky;
            position: sticky;
            /* background-color: white; */
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
        <div class="flex w-full flex-col">
            <div class="py-4 md:pb-7 md:pt-12">
                <div class="">
                    <p tabindex="0" class="mb-2 text-base font-bold leading-normal text-gray-800 focus:outline-none sm:text-lg md:text-2xl lg:text-4xl">Pengelolaan Divisi</p>
                    <p class="w-full text-disabled">Pada halaman ini, admin dapat melakukan tambah, ubah, ataupun hapus terhadap divisi yang ada pada keluarga Berbinar. Data tersebut yang menjadi bahan untuk ditampilkan pada situs resmi Berbinar pada bagian keluarga Berbinar.</p>
                    <a href="{{ route("dashboard.divisions.create") }}">
                        <button type="button" class="mt-8 inline-flex items-start justify-start rounded-lg bg-primary px-6 py-3 text-white hover:bg-primary focus:outline-none focus:ring-2 focus:ring-offset-2 sm:mt-3">
                            <p class="text-dark font-medium leading-none">Tambah Data</p>
                        </button>
                    </a>
                </div>
            </div>

            <div class="rounded-lg shadow bg-white px-4 py-4 mb-7 md:px-8 md:py-7 xl:px-10">
                <div class="mb-4 mt-4 overflow-x-auto">
                    <table id="example" class="min-w-full pt-5 leading-normal">
                        <thead>
                            <tr class="mt-4">
                                <th class="sticky-col sticky-col-1 bg-white px-6 py-3 text-center text-base font-bold leading-4 tracking-wider text-black">No</th>
                                <th class="sticky-col sticky-col-2 bg-white px-6 py-3 text-center text-base font-bold leading-4 tracking-wider text-black">Nama Divisi</th>
                                <th class="bg-white px-6 py-3 text-center text-base font-bold leading-4 tracking-wider text-black">Subdivisi</th>
                                <th class="w-80 bg-white px-6 py-3 text-center text-base font-bold leading-4 tracking-wider text-black">Tanggal Dibuat</th>
                                <th class="bg-white px-6 py-3 text-center text-base font-bold leading-4 tracking-wider text-black">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($divisions as $index => $division)
                                <tr class="border-b border-gray-200 hover:bg-gray-200 odd:bg-gray-100 even:bg-white">
                                    <td class="whitespace-no-wrap sticky-col sticky-col-1 px-6 py-4">
                                        {{ $index + 1 }}
                                    </td>
                                    <td class="whitespace-no-wrap sticky-col sticky-col-2 px-6 py-4">
                                        {{ $division->nama_divisi }}
                                    </td>
                                    <td class="whitespace-no-wrap px-6 py-4">
                                        @if ($division->subDivisions->isNotEmpty())
                                            <span>{{ $division->subDivisions->first()->nama_subdivisi }}</span>
                                        @else
                                            <span>-</span>
                                        @endif
                                    </td>
                                    <td class="whitespace-no-wrap w-80 px-6 py-4">
                                        {{ $division->created_at->format("d M Y") }}
                                    </td>
                                    <td class="whitespace-no-wrap flex items-center justify-center gap-2 px-6 py-4">
                                        <!-- Tombol Detail -->
                                        <a href="{{ route("dashboard.divisions.show", $division->id) }}" class="inline-flex items-start justify-start rounded p-2 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2" style="background-color: #3b82f6">
                                            <i class="bx bxs-show text-white"></i>
                                        </a>

                                        <!-- Tombol Edit -->
                                        <a href="{{ route("dashboard.divisions.edit", $division->id) }}" class="inline-flex items-start justify-start rounded p-2 hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-offset-2" style="background-color: #e9b306">
                                            <i class="bx bxs-edit-alt text-white"></i>
                                        </a>

                                        <!-- Tombol Hapus -->
                                        <button type="button" onclick="openDeleteModal({{ $division->id }}, '{{ e($division->nama_divisi) }}')" class="inline-flex items-start justify-start rounded p-2 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2" style="background-color: #ef4444">
                                            <i class="bx bxs-trash-alt text-white"></i>
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
                ?
                <br />
                Semua data terkait juga akan dihapus.
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

    <script>
        let deleteModal = document.getElementById('deleteModal');
        let deleteForm = document.getElementById('deleteForm');

        function openDeleteModal(divisionId, divisionName) {
            deleteForm.action = `/dashboard/divisions/${divisionId}`;
            document.getElementById('deleteItemName').textContent = divisionName;
            deleteModal.classList.remove('hidden');
        }

        function closeDeleteModal() {
            deleteModal.classList.add('hidden');
        }
    </script>
@endsection
