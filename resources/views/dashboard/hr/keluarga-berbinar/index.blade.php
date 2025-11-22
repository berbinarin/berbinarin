@extends(
    "dashboard.layouts.app",
    [
        "title" => "Keluarga Berbinar",
    ]
)

@section("content")
    <style>
        .w-80 {
            width: 20rem;
            /* Adjust as needed for your specific requirements */
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
            /* Adjust width if necessary */
        }

        .sticky-col-2 {
            left: 50px;
            /* Adjust this value to match the width of the first column */
        }
    </style>

    <section class="flex w-full">
        <div class="flex w-full flex-col">
            <div class="py-4 md:pb-7 md:pt-12">
                <div class="">
                    <p tabindex="0" class="mb-2 text-base font-bold leading-normal text-gray-800 focus:outline-none sm:text-lg md:text-2xl lg:text-4xl">Pengelolaan Data Staf</p>
                    <p class="w-full text-disabled">Pada halaman ini, admin dapat melakukan tambah, ubah, ataupun hapus terhadap data seluruh staf di Berbinar. Data tersebut yang menjadi bahan untuk ditampilkan pada situs resmi Berbinar pada bagian keluarga Berbinar</p>
                    <a href="{{ route("dashboard.keluarga-berbinar.create") }}">
                        <button type="button" class="mt-8 inline-flex items-start justify-start rounded-lg bg-primary px-6 py-3 text-white hover:bg-primary focus:outline-none focus:ring-2 focus:ring-offset-2 sm:mt-3">
                            <p class="text-dark font-medium leading-none">Tambah Data</p>
                        </button>
                    </a>
                </div>
            </div>
            <div class="mb-7 rounded-lg bg-white px-4 py-4 shadow md:px-8 md:py-7 xl:px-10">
                <div class="mb-4 mt-4 overflow-x-auto">
                    <table id="example" class="min-w-full pt-5 leading-normal">
                        <thead>
                            <tr class="mt-4">
                                <th class="sticky-col sticky-col-1 bg-white px-6 py-3 text-center text-base font-bold leading-4 tracking-wider text-black">No</th>
                                <th class="sticky-col sticky-col-2 bg-white px-6 py-3 text-center text-base font-bold leading-4 tracking-wider text-black">Nama Lengkap</th>
                                <th class="bg-white px-6 py-3 text-center text-base font-bold leading-4 tracking-wider text-black">Divisi</th>
                                <th class="bg-white px-6 py-3 text-center text-base font-bold leading-4 tracking-wider text-black">Waktu Menjabat</th>
                                <th class="bg-white px-6 py-3 text-center text-base font-bold leading-4 tracking-wider text-black">Prestasi</th>
                                <th class="bg-white px-6 py-3 text-center text-base font-bold leading-4 tracking-wider text-black">Status</th>
                                <th class="bg-white px-6 py-3 text-center text-base font-bold leading-4 tracking-wider text-black">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($staffs as $index => $staff)
                                <tr class="border-b border-gray-200 odd:bg-gray-100 even:bg-white hover:bg-gray-200">
                                    <td class="whitespace-no-wrap sticky-col sticky-col-1 px-6 py-4">
                                        {{ $index + 1 }}
                                    </td>
                                    <td class="whitespace-no-wrap sticky-col sticky-col-2 px-6 py-4">
                                        {{ $staff->name }}
                                    </td>
                                    <td class="whitespace-no-wrap px-6 py-4">
                                        {{ $staff->records->first()?->division?->nama_divisi ?? "-" }}
                                    </td>
                                    <td class="whitespace-no-wrap px-6 py-4">
                                        @if ($staff->records->isNotEmpty())
                                            {{ \Carbon\Carbon::parse($staff->records->first()->date_start)->format("Y") }} -
                                            {{ \Carbon\Carbon::parse($staff->records->last()->date_end)->format("Y") }}
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td class="whitespace-no-wrap px-6 py-4 text-center">
                                        {{ $staff->motm == "yes" ? "Pernah" : "Tidak pernah" }}
                                    </td>
                                    <td class="whitespace-no-wrap px-6 py-4 text-center">
                                        @php
                                            // Cek apakah ada record dengan status 'active'
                                            $isActive = $staff->records->contains(fn($rec) => $rec->status === 'active');
                                            $status = $isActive ? 'active' : 'inactive';
                                            $badgeClass = $status === 'active' ? 'bg-green-400' : 'bg-red-400';
                                        @endphp
                                        <span class="px-2 py-1 rounded text-white {{ $badgeClass }}">
                                            {{ ucfirst($status) }}
                                        </span>
                                    </td>
                                    <td class="whitespace-no-wrap flex items-center justify-center gap-2 px-6 py-4">
                                        <a href="{{ route("dashboard.keluarga-berbinar.show", $staff->id) }}" class="inline-flex items-start justify-start rounded p-2 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2" style="background-color: #3b82f6">
                                            <i class="bx bxs-show text-white"></i>
                                        </a>
                                        <a href="{{ route("dashboard.keluarga-berbinar.edit", $staff->id) }}" class="inline-flex items-start justify-start rounded p-2 hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-offset-2" style="background-color: #e9b306">
                                            <i class="bx bxs-edit-alt text-white"></i>
                                        </a>
                                        <button type="button" class="inline-flex items-start justify-start rounded p-2 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2" style="background-color: #ef4444" onclick="openDeleteModal({{ $staff->id }}, '{{ e($staff->name) }}')">
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
            <img src="{{ asset("assets/images/dashboard/warning.png") }}" alt="Warning Icon" class="mx-auto h-[83px] w-[83px]" />

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
@endsection

@section("script")
    <script>
        let deleteModal = document.getElementById('deleteModal');
        let deleteForm = document.getElementById('deleteForm');

        function openDeleteModal(staffId, staffName) {
            deleteForm.action = `/dashboard/keluarga-berbinar/${staffId}`;
            document.getElementById('deleteItemName').textContent = staffName;
            deleteModal.classList.remove('hidden');
        }

        function closeDeleteModal() {
            deleteModal.classList.add('hidden');
        }
    </script>
@endsection
