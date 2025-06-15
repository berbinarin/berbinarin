@extends(
    "dashboard.layouts.app",
    [
        "title" => "Positions",
    ]
)

@section("content")
    <style>
        .progress-bar-striped {
            background: repeating-linear-gradient(-45deg, #a6caef, #a6caef 10px, #e3f0fa 10px, #e3f0fa 20px);
            color: #1e3a8a;
        }

        #subDivisiModal .btn-edit-subdivisi,
        #subDivisiModal .btn-delete-subdivisi {
            display: none;
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
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

            function showEditDeleteButtons() {
                subDivisiContainer.querySelectorAll('.subdivisi-row').forEach((row) => {
                    const editBtn = row.querySelector('.btn-edit-subdivisi');
                    const deleteBtn = row.querySelector('.btn-delete-subdivisi');
                    if (editBtn) editBtn.style.display = '';
                    if (deleteBtn) deleteBtn.style.display = '';
                });
            }
            showEditDeleteButtons();

            addSubDivisiButton.addEventListener('click', function() {
                const clone = subDivisiTemplate.content.cloneNode(true);
                modalSubDivisiContent.innerHTML = '';
                modalSubDivisiContent.appendChild(clone);
                subDivisiModal.classList.remove('hidden');
                editingRow = null;
                originalRow = null;
                modalSubDivisiContent.querySelectorAll('.btn-edit-subdivisi, .btn-delete-subdivisi').forEach((btn) => (btn.style.display = 'none'));
            });

            closeSubDivisiModal.addEventListener('click', function() {
                subDivisiModal.classList.add('hidden');
                modalSubDivisiContent.innerHTML = '';
                editingRow = null;
                originalRow = null;
            });
            
            // LOGIKA UPLOAD GAMBAR DARI KODE 1
            modalSubDivisiContent.addEventListener('change', function(e) {
                if (e.target.classList.contains('cover-input')) {
                    const input = e.target;
                    const file = input.files[0];
                    const wrapper = input.parentElement;

                    const oldPreview = wrapper.querySelector('.cover-preview-img');
                    if (oldPreview) oldPreview.remove();

                    const progressContainer = wrapper.querySelector('.progress-container');
                    const progressBar = wrapper.querySelector('.progress-bar');
                    progressContainer.classList.remove('hidden');
                    progressBar.style.width = '0%';
                    progressBar.textContent = '0%';
                    progressBar.classList.remove('bg-white', 'text-green-500', 'bg-blue-600', 'text-blue-100');
                    progressBar.classList.add('progress-bar-striped');

                    const changeOverlay = wrapper.querySelector('.change-image-overlay');

                    if (file) {
                        const reader = new FileReader();
                        reader.onload = function(ev) {
                            const img = document.createElement('img');
                            img.src = ev.target.result;
                            img.className = 'cover-preview-img absolute inset-0 w-full h-full object-cover rounded-xl z-0 opacity-50';
                            img.style.pointerEvents = 'none';
                            wrapper.insertBefore(img, changeOverlay);

                            setTimeout(() => {
                                img.classList.remove('opacity-50');
                                img.classList.add('opacity-100');
                            }, 1500);
                        };
                        reader.readAsDataURL(file);

                        let progress = 0;
                        const interval = setInterval(() => {
                            progress += 5;
                            progressBar.style.width = `${progress}%`;

                            if (progress < 100) {
                                progressBar.textContent = `${progress}%`;
                            } else {
                                progressBar.textContent = 'Done';
                                const checkIcon = document.createElement('img');
                                checkIcon.src = 'https://img.icons8.com/?size=100&id=3061&format=png&color=40C057';
                                checkIcon.alt = 'Done';
                                checkIcon.style.width = '20px';
                                checkIcon.style.height = '20px';
                                checkIcon.style.display = 'inline-block';
                                checkIcon.style.marginBottom = '3px';
                                checkIcon.style.marginLeft = '5px';
                                progressBar.appendChild(checkIcon);

                                progressBar.classList.remove('progress-bar-striped');
                                progressBar.classList.add('bg-white', 'text-green-500');
                                clearInterval(interval);

                                setTimeout(() => {
                                    progressContainer.classList.add('hidden');
                                }, 1500);
                            }
                        }, 100);
                    }
                }
            });


            subDivisiContainer.addEventListener('click', function(e) {
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

                if (e.target.closest('.btn-edit-subdivisi')) {
                    const row = e.target.closest('.subdivisi-row');
                    originalRow = row;
                    editingRow = row.cloneNode(true);

                    const inputs = editingRow.querySelectorAll('input');
                    inputs.forEach((input) => {
                        input.disabled = false;
                        input.readOnly = false;
                    });

                    editingRow.querySelectorAll('.btn-edit-subdivisi, .btn-delete-subdivisi').forEach((btn) => (btn.style.display = 'none'));

                    modalSubDivisiContent.innerHTML = '';
                    modalSubDivisiContent.appendChild(editingRow);
                    subDivisiModal.classList.remove('hidden');
                }
            });

            saveSubDivisiModal.addEventListener('click', function() {
                const editedRow = modalSubDivisiContent.querySelector('.subdivisi-row');
                if (editedRow) {
                    // Sembunyikan progress bar saat menyimpan
                    const progressContainer = editedRow.querySelector('.progress-container');
                    if (progressContainer) progressContainer.classList.add('hidden');
                    
                    // Jadikan input text readonly
                    const inputs = editedRow.querySelectorAll('input[type="text"]');
                    inputs.forEach((input) => {
                        input.readOnly = true;
                        input.disabled = false; 
                    });
                    
                    // Nonaktifkan input file
                    const fileInputs = editedRow.querySelectorAll('input[type="file"]');
                    fileInputs.forEach((input) => {
                        input.disabled = true;
                    });
                    
                    editedRow.querySelectorAll('.btn-edit-subdivisi, .btn-delete-subdivisi').forEach((btn) => (btn.style.display = ''));

                    if (originalRow) {
                        originalRow.replaceWith(editedRow.cloneNode(true));
                    } else {
                        const newRow = editedRow.cloneNode(true);
                        subDivisiContainer.appendChild(newRow);
                    }
                }

                editingRow = null;
                originalRow = null;
                subDivisiModal.classList.add('hidden');
                modalSubDivisiContent.innerHTML = '';
            });

            subDivisiModal.addEventListener('click', function(e) {
                if (e.target === subDivisiModal) {
                    subDivisiModal.classList.add('hidden');
                    modalSubDivisiContent.innerHTML = '';
                    editingRow = null;
                    originalRow = null;
                }
            });
            
            modalSubDivisiContent.addEventListener('mouseover', function(e) {
                if (e.target.closest('.group')) {
                    const wrapper = e.target.closest('.group');
                    const hasImage = wrapper.querySelector('.cover-preview-img') !== null;
                    const changeOverlay = wrapper.querySelector('.change-image-overlay');

                    if (hasImage && changeOverlay) {
                        changeOverlay.classList.remove('opacity-0');
                        changeOverlay.classList.add('opacity-100');
                    }
                }
            });

            modalSubDivisiContent.addEventListener('mouseout', function(e) {
                if (e.target.closest('.group')) {
                    const wrapper = e.target.closest('.group');
                    const changeOverlay = wrapper.querySelector('.change-image-overlay');

                    if (changeOverlay) {
                        changeOverlay.classList.remove('opacity-100');
                        changeOverlay.classList.add('opacity-0');
                    }
                }
            });
        });
    </script>

    <section class="flex w-full">
        <div class="flex w-full flex-col">
            <div class="py-4 md:pb-7 md:pt-12">
                <div class="">
                    <div class="mb-2 flex items-center gap-2">
                        <a href="{{ route('dashboard.positions.index') }}">
                            <img src="{{ asset('assets/images/dashboard/svg-icon/dashboard-back.png') }}" alt="Back Btn" />
                        </a>
                        <p tabindex="0" class="text-base font-bold leading-normal text-gray-800 focus:outline-none sm:text-lg md:text-2xl lg:text-4xl">Add Data Positions</p>
                    </div>
                    <p class="w-3/4 text-disabled">
                        Admin dapat menambahkan data posisi hiring yang akan ditampilkan pada website careers Berbinarin.
                    </p>
                </div>
            </div>
            <div class="rounded-md bg-white px-4 py-4 shadow-lg shadow-gray-400 md:px-8 md:py-7 xl:px-10">
                <form action="{{ route('dashboard.positions.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="flex items-start gap-4">
                        <div class="w-full">
                            <div class="mb-8">
                                <h1 class="text-2xl font-bold">Data Posisi</h1>
                                <div class="grid grid-cols-1 gap-6 pt-5 md:grid-cols-2">
                                    <div class="flex flex-col gap-2">
                                        <p class="flex gap-1 text-lg font-semibold">
                                            Nama Posisi
                                            <i class="bx bxs-star text-xs text-red-600"></i>
                                        </p>
                                        <input id="name" name="name" type="text" placeholder="Human Resource Development" class="rounded-lg border-gray-300 px-3 py-2 shadow-sm focus:border-blue-500 focus:outline-none" required />
                                    </div>
                                    <div class="flex flex-col gap-2">
                                        <p class="flex gap-1 text-lg font-semibold">
                                            Tipe Pekerjaan
                                            <i class="bx bxs-star text-xs text-red-600"></i>
                                        </p>
                                        <select id="type" name="type" class="rounded-lg border-gray-300 px-3 py-2 shadow-sm focus:border-blue-500 focus:outline-none" required>
                                            <option value="" disabled selected>Pilih Tipe Pekerjaan</option>
                                            <option value="Internship">Internship</option>
                                            <option value="Fulltime">Fulltime</option>
                                            <option value="Part Time">Part Time</option>
                                            <option value="Contract">Contract</option>
                                            <option value="Freelancer">Freelancer</option>
                                        </select>
                                    </div>
                                    <div class="flex flex-col gap-2">
                                        <p class="flex gap-1 text-lg font-semibold">
                                            Jabatan
                                            <i class="bx bxs-star text-xs text-red-600"></i>
                                        </p>
                                        <select id="positions" name="positions" class="rounded-lg border-gray-300 px-3 py-2 shadow-sm focus:border-blue-500 focus:outline-none" required>
                                            <option value="" disabled selected>Pilih Jenis Jabatan</option>
                                            <option value="Staff">Staff</option>
                                            <option value="Manager">Manager</option>
                                            <option value="Researcher">Researcher</option>
                                        </select>
                                    </div>
                                    <div class="flex flex-col gap-2">
                                        <p class="flex gap-1 text-lg font-semibold">
                                            Lokasi
                                            <i class="bx bxs-star text-xs text-red-600"></i>
                                        </p>
                                        <select id="location" name="location" class="rounded-lg border-gray-300 px-3 py-2 shadow-sm focus:border-blue-500 focus:outline-none" required>
                                            <option value="" disabled selected>Pilih Lokasi</option>
                                            <option value="Remote">Remote</option>
                                            <option value="Surabaya">Surabaya</option>
                                        </select>
                                    </div>
                                    <div class="flex flex-col gap-2 md:col-span-2">
                                        <p class="flex gap-1 text-lg font-semibold">
                                            Divisi
                                            <i class="bx bxs-star text-xs text-red-600"></i>
                                        </p>
                                        <select id="divisi" name="divisi" class="rounded-lg border-gray-300 px-3 py-2 shadow-sm focus:border-blue-500 focus:outline-none" required>
                                            <option value="" disabled selected>Pilih Divisi</option>
                                            <option value="Web and Mobile Apps Developer">Web and Mobile Apps Developer</option>
                                            <option value="TikTok Creator">TikTok Creator</option>
                                            <option value="Secretary n Finance">Secretary n Finance</option>
                                            <option value="Psychological Testing Product Management">Psychological Testing Product Management</option>
                                            <option value="Marketing Strategist dan Sales">Marketing Strategist dan Sales</option>
                                            <option value="IG Creator">IG Creator</option>
                                            <option value="Human Resource">Human Resource</option>
                                            <option value="Graphic Designer">Graphic Designer</option>
                                            <option value="Class Product Management">Class Product Management</option>
                                            <option value="Counseling Product Management">Counseling Product Management</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="w-full">
                            <label class="mb-2 block text-2xl font-bold text-gray-700">Sub Divisi</label>
                            <div id="subDivisiContainer" class="mt-12">
                            </div>
                            <button type="button" id="addSubDivisiButton" class="flex w-full cursor-pointer items-center justify-center rounded-lg border border-dashed border-blue-500 py-2 text-blue-500">
                                <h1 class="flex items-center gap-2 text-base font-medium">
                                    <i class="bx bx-plus-circle text-xl"></i>
                                    Tambahkan Sub Divisi
                                </h1>
                            </button>
                        </div>
                    </div>

                    <input type="hidden" id="deletedSubDivisions" name="deleted_subdivisions" value="" />

                    <div class="mt-8 flex justify-end border-t-2 border-t-gray-400 pt-5">
                        <button type="submit" class="flex items-center gap-2 rounded-xl bg-blue-500 px-3 py-2 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-300">Unggah Data</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <template id="subDivisiTemplate">
        <div class="subdivisi-row relative mb-3 rounded-xl border border-gray-300 bg-white p-4 shadow-sm">
            <div class="mb-2 flex items-start justify-between">
                <label class="block text-base font-medium text-gray-700">Nama Sub Divisi</label>
                <div class="flex gap-2">
                    <button type="button" class="btn-edit-subdivisi mr-1 rounded border border-blue-500 p-1 text-blue-600 hover:bg-blue-50">
                        <i class="bx bx-pencil"></i>
                    </button>
                    <button type="button" class="btn-delete-subdivisi rounded border border-red-500 p-1 text-red-600 hover:bg-red-50">
                        <i class="bx bx-trash"></i>
                    </button>
                </div>
            </div>
            <input type="text" name="subdivisi[]" class="mb-3 w-full rounded-md border border-gray-200 px-3 py-2 shadow focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Nama Sub Divisi" required />
            <input type="hidden" name="subdivisi_id[]" value="" />

            <label class="mb-1 block text-base font-medium text-gray-700">Cover Sub Divisi</label>
            <div class="group relative mb-2 flex min-h-[120px] w-1/2 cursor-pointer flex-col items-center justify-center overflow-hidden rounded-xl border-2 border-dashed border-blue-400 transition duration-200 hover:bg-blue-50">
                <input type="file" accept="image/*" name="subdivisi_cover[]" class="cover-input absolute inset-0 z-10 cursor-pointer opacity-0" />
                <div class="change-image-overlay pointer-events-none absolute inset-0 z-20 flex items-center justify-center bg-black bg-opacity-40 text-lg font-semibold text-white opacity-0 transition-opacity duration-200">Change image</div>
                <div class="pointer-events-none flex flex-col items-center justify-center py-6">
                    <i class="bx bx-image-add mb-2 text-4xl text-blue-400"></i>
                    <span class="font-semibold text-blue-400">Tap To Upload Photo</span>
                    <span class="text-sm text-gray-400">Rasio: 1200 X 300</span>
                </div>
                <div class="pointer-events-none absolute inset-0 bg-black bg-opacity-0 transition duration-200 group-hover:bg-opacity-20"></div>
                <div class="progress-container absolute bottom-2 left-2 hidden w-full rounded-[10px] bg-gray-200" style="width: calc(100% - 1rem); height: 2rem">
                    <div class="progress-bar flex h-full items-center justify-center rounded-[10px] bg-blue-600 text-center text-sm font-medium leading-none text-blue-100 ring-2 ring-inset ring-white transition-all duration-300" style="width: 0%">0%</div>
                </div>
            </div>
        </div>
    </template>

    <div id="subDivisiModal" class="fixed inset-0 z-50 flex hidden items-center justify-center bg-black bg-opacity-40">
        <div class="relative w-full max-w-lg rounded-xl bg-white p-6 shadow-lg">
            <button id="closeSubDivisiModal" type="button" class="absolute right-2 top-2 text-2xl text-gray-400 hover:text-red-500">&times;</button>
            <div id="modalSubDivisiContent"></div>
            <div class="mt-4 flex justify-end">
                <button id="saveSubDivisiModal" type="button" class="w-full rounded-md bg-blue-600 px-6 py-2 text-white hover:bg-blue-700">Simpan Sub Divisi</button>
            </div>
        </div>
    </div>
@endsection