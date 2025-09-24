@extends(
    "dashboard.layouts.app",
    [
        "title" => "Manage Division",
    ]
)

@section("content")
    <style>
        #subDivisiModal .btn-edit-subdivisi,
        #subDivisiModal .btn-delete-subdivisi {
            display: none;
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const addSubDivisiButton = document.getElementById('addSubDivisiButton');
            const subDivisiContainer = document.getElementById('subDivisiContainer');
            const subDivisiTemplate = document.getElementById('subDivisiTemplate');

            // Modal logic
            const subDivisiModal = document.getElementById('subDivisiModal');
            const modalSubDivisiContent = document.getElementById('modalSubDivisiContent');
            const closeSubDivisiModal = document.getElementById('closeSubDivisiModal');
            const saveSubDivisiModal = document.getElementById('saveSubDivisiModal');

            let editingRow = null; // Untuk menyimpan row yang sedang diedit
            let originalRow = null; // Untuk menyimpan row asli sebelum edit

            addSubDivisiButton.addEventListener('click', function () {
                const clone = subDivisiTemplate.content.cloneNode(true);
                modalSubDivisiContent.innerHTML = '';
                modalSubDivisiContent.appendChild(clone);
                subDivisiModal.classList.remove('hidden');
                editingRow = null; // Reset editing row saat menambah baru
                originalRow = null; // Reset original row
            });

            closeSubDivisiModal.addEventListener('click', function () {
                subDivisiModal.classList.add('hidden');
                modalSubDivisiContent.innerHTML = '';
                editingRow = null;
                originalRow = null;
            });

            subDivisiContainer.addEventListener('click', function (e) {
                // Hapus sub divisi
                if (e.target.closest('.btn-delete-subdivisi')) {
                    const row = e.target.closest('.subdivisi-row');
                    row.remove();
                }

                // Edit sub divisi
                if (e.target.closest('.btn-edit-subdivisi')) {
                    const row = e.target.closest('.subdivisi-row');
                    originalRow = row;
                    editingRow = row.cloneNode(true);

                    const inputs = editingRow.querySelectorAll('input');
                    inputs.forEach((input) => {
                        input.disabled = false;
                        input.readOnly = false;
                    });

                    modalSubDivisiContent.innerHTML = '';
                    modalSubDivisiContent.appendChild(editingRow);
                    subDivisiModal.classList.remove('hidden');
                }
            });

            saveSubDivisiModal.addEventListener('click', function () {
                const editedRow = modalSubDivisiContent.querySelector('.subdivisi-row');
                if (editedRow) {
                    const inputs = editedRow.querySelectorAll('input[type="text"]');
                    inputs.forEach((input) => {
                        input.readOnly = true;
                    });

                    // Jika sedang edit
                    if (originalRow) {
                        originalRow.replaceWith(editedRow.cloneNode(true));
                    } else {
                        const newRow = editedRow.cloneNode(true);

                        // Nonaktifkan input text
                        const newInputs = newRow.querySelectorAll('input[type="text"]');
                        newInputs.forEach((input) => {
                            input.readOnly = true;
                        });

                        subDivisiContainer.appendChild(newRow);
                    }
                }

                editingRow = null;
                originalRow = null;
                subDivisiModal.classList.add('hidden');
                modalSubDivisiContent.innerHTML = '';
            });

            // Tutup modal jika klik di luar modal
            subDivisiModal.addEventListener('click', function (e) {
                if (e.target === subDivisiModal) {
                    subDivisiModal.classList.add('hidden');
                    modalSubDivisiContent.innerHTML = '';
                    editingRow = null;
                    originalRow = null;
                }
            });
        });
    </script>

    <section class="flex w-full">
        <div class="flex w-full flex-col">
            <div class="py-4 md:pb-7 md:pt-12">
                <div class="">
                    <div class="mb-2 flex items-center gap-2">
                        <a href="{{ route("dashboard.divisions.index") }}">
                            <img src="{{ asset("assets/images/dashboard/svg-icon/dashboard-back.png") }}" alt="Back Btn" />
                        </a>
                        <p tabindex="0" class="text-base font-bold leading-normal text-gray-800 focus:outline-none sm:text-lg md:text-2xl lg:text-4xl">Tambah Data Divisi</p>
                    </div>
                    <p class="w-full text-disabled">Admin dapat menambahkan data divisi dengan menyertakan input yang sesuai untuk setiap form. Data tersebut meliputi nama divisi dan subdivisi jika ada.</p>
                </div>
            </div>
            <div class="mb-7 rounded-lg bg-white px-4 py-4 shadow md:px-8 md:py-7 xl:px-10">
                <form action="{{ route("dashboard.divisions.store") }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="flex items-start gap-4">
                        <div class="w-full">
                            <label for="nama_divisi" class="mb-2 block text-lg font-medium text-gray-700">Nama Divisi</label>
                            <input type="text" id="nama_divisi" name="divisi" class="w-full rounded-md border border-gray-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Masukkan nama divisi" required />
                        </div>
                        <div class="w-full">
                            <label class="mb-2 block text-lg font-medium text-gray-700">Subdivisi</label>
                            <div id="subDivisiContainer"></div>
                            <button type="button" id="addSubDivisiButton" class="flex w-full cursor-pointer items-center justify-center rounded-lg border border-dashed border-blue-500 py-2 text-blue-500">
                                <h1 class="flex items-center gap-2 text-base font-medium">
                                    <i class="bx bx-plus-circle text-xl"></i>
                                    Tambahkan Subdivisi
                                </h1>
                            </button>
                        </div>
                    </div>

                    <hr class="mt-7 border-t-2 border-t-gray-400" />

                    <!-- Submit Button -->
                    <div class="mt-3 flex gap-4 pt-5">
                        <button type="button" id="cancelButton" class="flex h-12 flex-1 items-center justify-center rounded-xl text-lg" style="width: 50%; border: 2px solid #3986a3; color: #3986a3">Batal</button>
                        <button type="submit" class="flex h-12 flex-1 items-center justify-center rounded-xl text-lg" style="width: 50%; background: #3986a3; color: #fff">Simpan</button>
                    </div>
                </form>

                <!-- Modal Konfirmasi -->
                <div id="confirmModal" class="fixed inset-0 z-50 flex hidden items-center justify-center bg-black/40">
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
                        <h2 class="mt-4 text-2xl font-bold text-stone-900">Konfirmasi Batal</h2>

                        <!-- Message -->
                        <p class="mt-2 text-base font-medium text-black">Apakah Anda yakin ingin membatalkan penambahan ini?</p>

                        <!-- Actions -->
                        <div class="mt-6 flex justify-center gap-3">
                            <button id="cancelCancel" class="rounded-lg border border-stone-300 px-6 py-2 text-stone-700">Tidak</button>
                            <button id="confirmCancel" class="rounded-[5px] bg-gradient-to-r from-[#74AABF] to-[#3986A3] px-6 py-2 font-medium text-white">Ya</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <template id="subDivisiTemplate">
        <div class="subdivisi-row relative mb-3 rounded-xl border border-gray-300 bg-white p-4 shadow-sm">
            <div class="mb-2 flex items-start justify-between">
                <label class="block text-base font-medium text-gray-700">Nama Subdivisi</label>
                <div class="flex gap-2">
                    <button type="button" class="btn-edit-subdivisi mr-1 rounded border border-blue-500 p-1 text-blue-600 hover:bg-blue-50">
                        <i class="bx bx-pencil"></i>
                    </button>
                    <button type="button" class="btn-delete-subdivisi rounded border border-red-500 p-1 text-red-600 hover:bg-red-50">
                        <i class="bx bx-trash"></i>
                    </button>
                </div>
            </div>
            <input type="text" name="subdivisi[]" class="mb-3 w-full rounded-md border border-gray-200 px-3 py-2 shadow focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Nama Subdivisi" required />
        </div>
    </template>

    <div id="subDivisiModal" class="fixed inset-0 z-50 flex hidden items-center justify-center bg-black bg-opacity-40">
        <div class="relative w-full max-w-lg rounded-xl bg-white p-6 shadow-lg">
            <button id="closeSubDivisiModal" type="button" class="absolute right-2 top-2 text-2xl text-gray-400 hover:text-red-500">&times;</button>
            <div id="modalSubDivisiContent"></div>
            <div class="mt-4 flex justify-end">
                <button id="saveSubDivisiModal" type="button" class="w-full rounded-md bg-blue-600 px-6 py-2 text-white hover:bg-blue-700">Simpan Subdivisi</button>
            </div>
        </div>
    </div>

    <script>
        const cancelButton = document.getElementById('cancelButton');
        const confirmModal = document.getElementById('confirmModal');
        const confirmCancel = document.getElementById('confirmCancel');
        const cancelCancel = document.getElementById('cancelCancel');

        cancelButton.addEventListener('click', function (e) {
            e.preventDefault();
            confirmModal.classList.remove('hidden');
        });

        confirmCancel.addEventListener('click', function () {
            window.location.href = '{{ route("dashboard.divisions.index") }}';
        });

        cancelCancel.addEventListener('click', function () {
            confirmModal.classList.add('hidden');
        });
    </script>
@endsection
