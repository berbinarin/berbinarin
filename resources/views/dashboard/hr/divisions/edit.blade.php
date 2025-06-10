@extends(
    "dashboard.layouts.app",
    [
        "title" => "Edit Division",
    ]
)

@section("content")
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

            let editingRow = null;
            let originalRow = null;

            // Tampilkan tombol edit & hapus di container utama
            function showEditDeleteButtons() {
                subDivisiContainer.querySelectorAll('.subdivisi-row').forEach((row) => {
                    const editBtn = row.querySelector('.btn-edit-subdivisi');
                    const deleteBtn = row.querySelector('.btn-delete-subdivisi');
                    if (editBtn) editBtn.style.display = '';
                    if (deleteBtn) deleteBtn.style.display = '';
                });
            }
            showEditDeleteButtons();

            addSubDivisiButton.addEventListener('click', function () {
                const clone = subDivisiTemplate.content.cloneNode(true);
                modalSubDivisiContent.innerHTML = '';
                modalSubDivisiContent.appendChild(clone);
                subDivisiModal.classList.remove('hidden');
                editingRow = null;
                originalRow = null;
                modalSubDivisiContent.querySelectorAll('.btn-edit-subdivisi, .btn-delete-subdivisi').forEach((btn) => (btn.style.display = 'none'));
            });

            closeSubDivisiModal.addEventListener('click', function () {
                subDivisiModal.classList.add('hidden');
                modalSubDivisiContent.innerHTML = '';
                editingRow = null;
                originalRow = null;
            });

            subDivisiContainer.addEventListener('click', function (e) {
                if (e.target.closest('.btn-delete-subdivisi')) {
                    const button = e.target.closest('.btn-delete-subdivisi');
                    const row = button.closest('.subdivisi-row');
                    const subDivisiId = button.getAttribute('data-id');

                    if (subDivisiId) {
                        const deletedSubDivisionsInput = document.getElementById('deletedSubDivisions');
                        const deletedIds = deletedSubDivisionsInput.value ? deletedSubDivisionsInput.value.split(',') : [];
                        deletedIds.push(subDivisiId);
                        deletedSubDivisionsInput.value = deletedIds.join(',');
                    }

                    row.remove();
                }

                // Edit sub divisi
                if (e.target.closest('.btn-edit-subdivisi')) {
                    const row = e.target.closest('.subdivisi-row');
                    originalRow = row;
                    editingRow = row.cloneNode(true);

                    // Aktifkan input fields di modal
                    const inputs = editingRow.querySelectorAll('input');
                    inputs.forEach((input) => {
                        input.disabled = false;
                        input.readOnly = false;
                    });

                    // Sembunyikan tombol edit & hapus di modal
                    editingRow.querySelectorAll('.btn-edit-subdivisi, .btn-delete-subdivisi').forEach((btn) => (btn.style.display = 'none'));

                    // Masukkan ke modal
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
                        input.disabled = false;
                    });

                    editedRow.querySelectorAll('.btn-edit-subdivisi, .btn-delete-subdivisi').forEach((btn) => (btn.style.display = ''));

                    if (originalRow) {
                        originalRow.replaceWith(editedRow.cloneNode(true));
                    } else {
                        const newRow = editedRow.cloneNode(true);

                        // Nonaktifkan input text
                        const newInputs = newRow.querySelectorAll('input[type="text"]');
                        newInputs.forEach((input) => {
                            input.readOnly = true;
                            input.disabled = false;
                        });

                        // Tampilkan tombol edit & hapus
                        newRow.querySelectorAll('.btn-edit-subdivisi, .btn-delete-subdivisi').forEach((btn) => (btn.style.display = ''));

                        subDivisiContainer.appendChild(newRow);
                    }
                }

                editingRow = null;
                originalRow = null;
                subDivisiModal.classList.add('hidden');
                modalSubDivisiContent.innerHTML = '';
            });

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
                        <p tabindex="0" class="text-base font-bold leading-normal text-gray-800 focus:outline-none sm:text-lg md:text-2xl lg:text-4xl">Edit Division Data</p>
                    </div>
                    <p class="w-3/4 text-disabled">Admin dapat mengedit data divisi dengan menyertakan input yang sesuai untuk setiap form. Data tersebut meliputi nama divisi dan subdivisi jika ada.</p>
                </div>
            </div>
            <div class="rounded-md bg-white px-4 py-4 shadow-lg shadow-gray-400 md:px-8 md:py-7 xl:px-10">
                <form action="{{ route("dashboard.divisions.update", $division->id) }}" method="POST">
                    @csrf
                    @method("put")
                    <div class="flex items-start gap-4">
                        <!-- Input Nama Divisi -->
                        <div class="w-full">
                            <label for="nama_divisi" class="mb-2 block text-lg font-medium text-gray-700">Nama Divisi</label>
                            <input type="text" id="nama_divisi" name="divisi" value="{{ $division->nama_divisi }}" class="w-full rounded-md border border-gray-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Masukkan nama divisi" required />
                        </div>
                        <div class="w-full">
                            <label class="mb-2 block text-lg font-medium text-gray-700">Sub Divisi</label>
                            <!-- Container untuk sub divisi yang sudah ditambahkan -->
                            <div id="subDivisiContainer">
                                @foreach ($division->subDivisions as $subDivision)
                                    <div class="subdivisi-row relative mb-3 rounded-xl border border-gray-300 bg-white p-4 shadow-sm">
                                        <div class="mb-2 flex items-start justify-between">
                                            <label class="block text-base font-medium text-gray-700">Nama Sub Divisi</label>
                                            <div class="flex gap-2">
                                                <!-- Tombol edit -->
                                                <button type="button" class="btn-edit-subdivisi mr-1 rounded border border-blue-500 p-1 text-blue-600 hover:bg-blue-50">
                                                    <i class="bx bx-pencil"></i>
                                                </button>
                                                <!-- Tombol hapus -->
                                                <button type="button" class="btn-delete-subdivisi rounded border border-red-500 p-1 text-red-600 hover:bg-red-50" data-id="{{ $subDivision->id }}">
                                                    <i class="bx bx-trash"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <input type="text" name="subdivisi[]" value="{{ $subDivision->nama_subdivisi }}" class="mb-3 w-full rounded-md border border-gray-200 px-3 py-2 shadow focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Nama Sub Divisi" required disabled readonly />
                                        <input type="hidden" name="subdivisi_id[]" value="{{ $subDivision->id }}" />
                                    </div>
                                @endforeach
                            </div>
                            <!-- Button tambah sub divisi -->
                            <button type="button" id="addSubDivisiButton" class="flex w-full cursor-pointer items-center justify-center rounded-lg border border-dashed border-blue-500 py-2 text-blue-500">
                                <h1 class="flex items-center gap-2 text-base font-medium">
                                    <i class="bx bx-plus-circle text-xl"></i>
                                    Tambahkan Sub Divisi
                                </h1>
                            </button>
                        </div>
                    </div>
                    <hr class="my-6 border-t-2 border-gray-400" />
                    <!-- Hidden input untuk menyimpan ID subdivisi yang dihapus -->
                    <input type="hidden" id="deletedSubDivisions" name="deleted_subdivisions" value="" />
                    <!-- Tombol submit -->
                    <div class="flex justify-end">
                        <button type="submit" class="rounded-md bg-blue-600 px-6 py-2 text-white hover:bg-blue-700">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Template Sub Divisi untuk di clone -->
    <template id="subDivisiTemplate">
        <div class="subdivisi-row relative mb-3 rounded-xl border border-gray-300 bg-white p-4 shadow-sm">
            <div class="mb-2 flex items-start justify-between">
                <label class="block text-base font-medium text-gray-700">Nama Sub Divisi</label>
                <div class="flex gap-2">
                    <!-- Tombol edit -->
                    <button type="button" class="btn-edit-subdivisi mr-1 rounded border border-blue-500 p-1 text-blue-600 hover:bg-blue-50">
                        <i class="bx bx-pencil"></i>
                    </button>
                    <!-- Tombol hapus -->
                    <button type="button" class="btn-delete-subdivisi rounded border border-red-500 p-1 text-red-600 hover:bg-red-50">
                        <i class="bx bx-trash"></i>
                    </button>
                </div>
            </div>
            <input type="text" name="subdivisi[]" class="mb-3 w-full rounded-md border border-gray-200 px-3 py-2 shadow focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Nama Sub Divisi" required />
            <input type="hidden" name="subdivisi_id[]" value="" />
        </div>
    </template>

    <!-- Modal Popup Sub Divisi -->
    <div id="subDivisiModal" class="fixed inset-0 z-50 flex hidden items-center justify-center bg-black bg-opacity-40">
        <div class="relative w-full max-w-lg rounded-xl bg-white p-6 shadow-lg">
            <button id="closeSubDivisiModal" type="button" class="absolute right-2 top-2 text-2xl text-gray-400 hover:text-red-500">&times;</button>
            <div id="modalSubDivisiContent"></div>
            <div class="mt-4 flex justify-end">
                <button id="saveSubDivisiModal" type="button" class="rounded-md bg-blue-600 px-6 py-2 text-white hover:bg-blue-700 w-full">Simpan Sub Divisi</button>
            </div>
        </div>
    </div>
@endsection