@extends(
    "dashboard.layouts.app",
    [
        "title" => "Internship",
    ]
)

@section("content")
    <section class="flex w-full">
        <div class="flex w-full flex-col">
            <div class="py-4 md:pb-7 md:pt-12">
                <div>
                    <div class="mb-2 flex items-center gap-2">
                        <a href="{{ route("dashboard.internships.index") }}">
                            <img src="{{ asset("assets/images/dashboard/svg-icon/dashboard-back.png") }}" alt="Back Btn" />
                        </a>
                        <p tabindex="0" class="text-base font-bold leading-normal text-gray-800 focus:outline-none sm:text-lg md:text-2xl lg:text-4xl">Detail Data Pendaftar Magang</p>
                    </div>

                    <p class="w-3/4 text-disabled">Admin dapat melihat detail data pendaftar magang</p>

                    <div class="mt-3 flex gap-4">
                        <form action="{{ route("dashboard.internships.edit", $Internship->id) }}" method="GET">
                            <button type="submit" class="inline-flex items-start justify-start rounded-lg border-2 border-primary bg-primary px-6 py-3 text-white hover:bg-primary focus:outline-none focus:ring-2 focus:ring-offset-2 sm:mt-3">
                                <p class="text-dark font-medium leading-none">Ubah Data</p>
                            </button>
                        </form>

                        <button onclick="openDeleteModal({{ $Internship->id }})" type="button" class="inline-flex items-start justify-start rounded-lg border-2 border-primary px-6 py-3 text-primary focus:outline-none focus:ring-2 focus:ring-offset-2 sm:mt-3">
                            <p class="text-dark font-medium leading-none">Hapus Data</p>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Modal Konfirmasi Hapus -->
            <div id="deleteModal" class="fixed flex inset-0 z-50 hidden items-center justify-center bg-black/40">
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
                    <p class="mt-2 text-base font-medium text-black">Apakah Anda yakin ingin menghapus {{ $Internship->nama_lengkap }}? Semua data terkait juga akan dihapus.</p>

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

            <!-- tabel kiri start -->
            <div class="flex flex-row gap-4">
                <div class="w-full md:w-1/2">
                    <div class="overflow-hidden rounded-lg bg-white p-4 shadow-sm">
                        <div class="mb-4 flex items-center">
                            <div class="flex w-full justify-between">
                                <p class="m-0 w-2/6 flex-grow rounded-l-lg bg-gray-100 px-4 py-1 text-start text-xl font-semibold">Kolom</p>
                                <div class="h-full w-1 bg-gray-300"></div>
                                <p class="m-0 w-4/6 flex-grow rounded-r-lg bg-gray-100 px-4 py-1 text-start text-xl font-semibold">Detail</p>
                            </div>
                        </div>

                        <div class="mb-2 flex flex-col" style="height: 350px; overflow: auto">
                            <table class="w-full">
                                <tr class="border-b border-gray-200" style="height: 80px">
                                    <td class="w-2/6 border-r px-4 py-1">
                                        <label class="font-semibold text-gray-600">Email:</label>
                                    </td>
                                    <td class="px-4 py-1">{{ $Internship->email }}</td>
                                </tr>

                                <tr class="border-b border-gray-200" style="height: 80px">
                                    <td class="border-r px-4 py-1">
                                        <label class="font-semibold text-gray-600">Posisi:</label>
                                    </td>
                                    <td class="px-4 py-1">{{ $position ? $position->name : "-" }}</td>
                                </tr>

                                <tr class="border-b border-gray-200" style="height: 80px">
                                    <td class="border-r px-4 py-1">
                                        <label class="font-semibold text-gray-600">Nama Lengkap:</label>
                                    </td>
                                    <td class="px-4 py-1">{{ $Internship->nama_lengkap }}</td>
                                </tr>

                                <tr class="border-b border-gray-200" style="height: 80px">
                                    <td class="border-r px-4 py-1">
                                        <label class="font-semibold text-gray-600">Nama Panggilan:</label>
                                    </td>
                                    <td class="px-4 py-1">{{ $Internship->nama_panggilan }}</td>
                                </tr>

                                <tr class="border-b border-gray-200" style="height: 80px">
                                    <td class="border-r px-4 py-1">
                                        <label class="font-semibold text-gray-600">Tanggal Lahir:</label>
                                    </td>
                                    <td class="px-4 py-1">{{ $Internship->tanggal_lahir }}</td>
                                </tr>

                                <tr class="border-b border-gray-200" style="height: 80px">
                                    <td class="border-r px-4 py-1">
                                        <label class="font-semibold text-gray-600">Link. WA:</label>
                                    </td>
                                    <td class="py-1 pl-4 pr-8">
                                        <a href="https://wa.me/{{ $Internship->no_whatsapp }}" target="_blank" rel="noopener noreferrer" class="text-blue-500">https://wa.me/{{ $Internship->no_whatsapp }}</a>
                                    </td>
                                </tr>

                                <tr class="border-b border-gray-200" style="height: 80px">
                                    <td class="border-r px-4 py-1">
                                        <label class="font-semibold text-gray-600">Domisili:</label>
                                    </td>
                                    <td class="px-4 py-1">{{ $Internship->asal_kota }}</td>
                                </tr>

                                <tr class="border-b border-gray-200" style="height: 80px">
                                    <td class="border-r px-4 py-1">
                                        <label class="font-semibold text-gray-600">Instansi:</label>
                                    </td>
                                    <td class="px-4 py-1">{{ $Internship->asal_pendidikan }}</td>
                                </tr>

                                <tr class="border-b border-gray-200" style="height: 80px">
                                    <td class="border-r px-4 py-1">
                                        <label class="font-semibold text-gray-600">Status:</label>
                                    </td>
                                    <td class="px-4 py-1">{{ $Internship->status_kelas }}</td>
                                </tr>

                                <tr class="border-b border-gray-200" style="height: 80px">
                                    <td class="border-r px-4 py-1">
                                        <label class="font-semibold text-gray-600">Jurusan:</label>
                                    </td>
                                    <td class="px-4 py-1">{{ $Internship->jurusan }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- tabel kanan start -->
                <div class="w-full md:w-1/2">
                    <div class="overflow-hidden rounded-lg bg-white p-4 shadow-sm">
                        <div class="mb-4 flex items-center">
                            <div class="flex w-full justify-between">
                                <p class="m-0 w-2/6 flex-grow-0 rounded-l-lg bg-gray-100 px-4 py-1 text-start text-xl font-semibold">Kolom</p>
                                <div class="h-full w-1 bg-gray-300"></div>
                                <p class="m-0 w-4/6 flex-grow-0 rounded-r-lg bg-gray-100 px-4 py-1 text-start text-xl font-semibold">Detail</p>
                            </div>
                        </div>

                        <div class="mb-2 flex flex-col" style="height: 340px; overflow: auto">
                            <table class="w-full" style="min-width: 800px">
                                <colgroup>
                                    <col class="w-2/6" />
                                    <col class="w-4/6" />
                                </colgroup>

                                <style>
                                    .multi-line-ellipsis {
                                        display: -webkit-box;
                                        -webkit-line-clamp: 3;
                                        -webkit-box-orient: vertical;
                                        overflow: hidden;
                                        text-overflow: ellipsis;
                                        line-height: 1.5;
                                    }
                                </style>

                                <tr class="border-b border-gray-200" style="height: 80px">
                                    <td class="w-2/6 border-r px-4 py-1">
                                        <label class="font-semibold text-gray-600">Tautan IG:</label>
                                    </td>
                                    <td class="py-1 pl-4 pr-8">
                                        <a href="{{ $Internship->akun_instagram }}" target="_blank" rel="noopener noreferrer" class="text-blue-500">{{ $Internship->akun_instagram }}</a>
                                    </td>
                                </tr>

                                <tr class="border-b border-gray-200" style="height: 80px">
                                    <td class="border-r px-4 py-1">
                                        <label class="font-semibold text-gray-600">Tautan TikTok:</label>
                                    </td>
                                    <td class="py-1 pl-4 pr-8">
                                        <a href="{{ $Internship->akun_tiktok }}" target="_blank" rel="noopener noreferrer" class="text-blue-500">{{ $Internship->akun_tiktok }}</a>
                                    </td>
                                </tr>

                                <tr class="border-b border-gray-200" style="height: 80px">
                                    <td class="border-r px-4 py-1">
                                        <label class="font-semibold text-gray-600">Tautan LinkedIn:</label>
                                    </td>
                                    <td class="py-1 pl-4 pr-8">
                                        <a href="{{ $Internship->akun_linkdin }}" target="_blank" rel="noopener noreferrer" class="text-blue-500">{{ $Internship->akun_linkdin }}</a>
                                    </td>
                                </tr>

                                <tr class="border-b border-gray-200" style="height: 80px">
                                    <td class="border-r px-4 py-1">
                                        <label class="font-semibold text-gray-600">Informasi Rekrutmen:</label>
                                    </td>
                                    <td class="py-1 pl-4 pr-8">{{ $Internship->sumber_informasi }}</td>
                                </tr>

                                <tr class="border-b border-gray-200" style="height: 80px">
                                    <td class="border-r px-4 py-1">
                                        <label class="font-semibold text-gray-600">Tautan CV:</label>
                                    </td>
                                    <td class="py-1 pl-4 pr-8">
                                        <a href="{{ $Internship->tautan_cv }}" target="_blank" rel="noopener noreferrer" class="text-blue-500">{{ $Internship->tautan_cv }}</a>
                                    </td>
                                </tr>

                                <tr class="border-b border-gray-200" style="height: 80px">
                                    <td class="border-r px-4 py-1">
                                        <label class="font-semibold text-gray-600">Tautan Portfolio:</label>
                                    </td>
                                    <td class="py-1 pl-4 pr-8">
                                        <a href="{{ $Internship->tautan_portofolio }}" target="_blank" rel="noopener noreferrer" class="text-blue-500">{{ $Internship->tautan_portofolio }}</a>
                                    </td>
                                </tr>

                                <tr class="border-b border-gray-200" style="height: 80px">
                                    <td class="border-r px-4 py-1">
                                        <label class="font-semibold text-gray-600">Tautan Bukti Follow:</label>
                                    </td>
                                    <td class="py-1 pl-4 pr-8">
                                        <a href="{{ $Internship->tautan_berkas_ss }}" target="_blank" rel="noopener noreferrer" class="text-blue-500">{{ $Internship->tautan_berkas_ss }}</a>
                                    </td>
                                </tr>

                                <tr class="border-b border-gray-200" style="height: 80px">
                                    <td class="border-r px-4 py-1">
                                        <label class="font-semibold text-gray-600">Motivasi:</label>
                                    </td>
                                    <td class="multi-line-ellipsis py-1 pl-4 pr-8" style="word-wrap: break-word; white-space: normal">
                                        {{ $Internship->motivasi }}
                                    </td>
                                </tr>

                                <tr class="border-b border-gray-200" style="height: 80px">
                                    <td class="border-r px-4 py-1">
                                        <label class="font-semibold text-gray-600">Keterangan:</label>
                                    </td>
                                    <td class="multi-line-ellipsis py-1 pl-4 pr-8" style="word-wrap: break-word; white-space: normal">
                                        {{ $Internship->keterangan }}
                                    </td>
                                </tr>
                            </table>
                        </div>

                        <div class="mt-4 flex justify-end"></div>
                    </div>
                </div>
                <!-- tabel kanan end -->
            </div>
        </div>
    </section>

    <!-- Generic Modal placeholders -->
    <div class="fixed inset-0 z-50 hidden items-center justify-center overflow-y-auto overflow-x-hidden outline-none focus:outline-none" id="modal-id">
        <!-- Modal Content -->
    </div>
    <div class="fixed inset-0 z-40 hidden bg-black opacity-25" id="modal-id-backdrop"></div>

    <script>
        let deleteModal = document.getElementById('deleteModal');
        let deleteForm = document.getElementById('deleteForm');

        function openDeleteModal(internshipId) {
            deleteForm.action = `/dashboard/internships/${internshipId}`;
            deleteModal.classList.remove('hidden');
        }

        function closeDeleteModal() {
            deleteModal.classList.add('hidden');
        }
    </script>
@endsection
