@extends(
    "dashboard.layouts.app",
    [
        "title" => "Keluarga Berbinar",
    ]
)

@section("content")
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const addRiwayatButton = document.getElementById('addRiwayatButton');
            const riwayatContainer = document.getElementById('riwayatContainer');
            const riwayatTemplate = document.getElementById('riwayatTemplate');

            addRiwayatButton.addEventListener('click', function () {
                const clone = riwayatTemplate.content.cloneNode(true);
                riwayatContainer.appendChild(clone);
            });

            riwayatContainer.addEventListener('click', function (e) {
                if (e.target.closest('.btn-delete-riwayat')) {
                    const row = e.target.closest('.riwayat-row');
                    if (row) {
                        row.remove();
                    }
                }
            });

            // Filter sub divisi berdasarkan divisi yang dipilih
            const divisions = @json($divisions);

            document.addEventListener('change', function (e) {
                if (e.target.classList.contains('division-select')) {
                    const divisionId = e.target.value;
                    const subDivisionSelect = e.target.closest('.riwayat-row').querySelector('.sub-division-select');

                    subDivisionSelect.innerHTML = '<option value="" disabled selected class="text-black">Pilih subdivisi</option>';

                    const selectedDivision = divisions.find((division) => division.id == divisionId);
                    if (selectedDivision) {
                        selectedDivision.sub_divisions.forEach(function (subDivision) {
                            const option = document.createElement('option');
                            option.value = subDivision.id;
                            option.textContent = subDivision.nama_subdivisi;
                            subDivisionSelect.appendChild(option);
                        });
                    }
                }
            });

            // Handle MOTM toggle
            document.getElementById('motmToggle').addEventListener('change', function () {
                document.getElementById('motmHidden').value = this.checked ? 'yes' : 'no';
            });
        });
    </script>

    <section class="flex w-full">
        <div class="flex w-full flex-col">
            <div class="py-4 md:pb-7 md:pt-12">
                <div class="">
                    <div class="mb-2 flex items-center gap-2">
                        <a href="{{ route("dashboard.keluarga-berbinar.index") }}">
                            <img src="{{ asset("assets/images/dashboard/svg-icon/dashboard-back.png") }}" alt="Back Btn" />
                        </a>
                        <p tabindex="0" class="text-base font-bold leading-normal text-gray-800 focus:outline-none sm:text-lg md:text-2xl lg:text-4xl">Tambah Data Staf</p>
                    </div>
                    <p class="w-full text-disabled">
                        Admin dapat menambahkan data staf dengan menyertakan input yang sesuai untuk setiap form.
                        Data tersebut meliputi informasi data diri dan riwayat jabatan.
                    </p>
                </div>
            </div>
            <div class="rounded-lg bg-white px-4 py-4 shadow mb-7 md:px-8 md:py-7 xl:px-10">
                <form action="{{ route("dashboard.keluarga-berbinar.store") }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4 mt-4 overflow-x-auto">
                        <!-- Data Diri Section -->
                        <div class="mb-8">
                            <h1 class="text-2xl font-bold">Data Diri</h1>

                            <div class="grid grid-cols-1 gap-6 pt-5 md:grid-cols-2">
                                <!-- Photo Upload -->
                                <div class="col-span-2">
                                    <p class="flex gap-1 text-lg font-semibold">
                                        Foto Pribadi
                                        <i class="text-xs text-red-600"></i>
                                    </p>
                                    <p class="pb-3 text-lg text-gray-400">Ukuran foto maksimal 1 MB dengan resolusi minimal 300x300 piksel. Format file yang diperbolehkan: JPG, PNG.</p>
                                    <input type="file" name="photo" id="photoInput" accept="image/png, image/jpeg" class="hidden" />
                                    <label for="photoInput" id="photoLabel" class="inline-block cursor-pointer rounded-lg bg-blue-500 px-5 py-3 font-semibold text-white transition hover:bg-blue-600">Pilih Foto</label>
                                    <div id="photoPreviewContainer" class="mt-3"></div>
                                    <span id="photoName" class="ml-3 text-gray-600"></span>
                                </div>

                                <!-- Name Field -->
                                <div class="flex flex-col gap-2">
                                    <p class="flex gap-1 text-lg font-semibold">
                                        Nama Lengkap
                                        <i class="bx bxs-star text-xs text-red-600"></i>
                                    </p>
                                    <input type="text" name="name" class="rounded-lg border-gray-300 px-3 py-2 shadow-sm focus:border-transparent focus:outline-none focus:ring-0" placeholder="John Doe" required />
                                </div>

                                <!-- LinkedIn Field -->
                                <div class="flex flex-col gap-2">
                                    <p class="flex gap-1 text-lg font-semibold">
                                        LinkedIn
                                        <i class="bx bxs-star text-xs text-red-600"></i>
                                    </p>
                                    <input type="text" name="linkedin" class="rounded-lg border-gray-300 px-3 py-2 shadow-sm focus:border-transparent focus:outline-none focus:ring-0" placeholder="linkedin.com/in/johndoe/" required />
                                </div>
                            </div>
                        </div>

                        <!-- Riwayat Jabatan Section -->
                        <div class="mb-8">
                            <h1 class="text-2xl font-bold">Riwayat Jabatan</h1>

                            <div id="riwayatContainer">
                                <div class="riwayat-row pt-5">
                                    <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                                        <!-- Division -->
                                        <div class="flex flex-col gap-2">
                                            <p class="flex gap-1 text-lg font-semibold">
                                                Divisi
                                                <i class="bx bxs-star text-xs text-red-600"></i>
                                            </p>
                                            <select name="division[]" class="division-select rounded-lg border-gray-300 px-3 py-2 text-gray-500 shadow-sm focus:border-blue-500 focus:outline-none" required>
                                                <option value="" disabled selected class="text-black">Pilih divisi</option>
                                                @foreach ($divisions as $division)
                                                    <option value="{{ $division->id }}" class="text-black">{{ $division->nama_divisi }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <!-- Sub Division -->
                                        <div class="flex flex-col gap-2">
                                            <p class="flex gap-1 text-lg font-semibold">
                                                Subdivisi
                                                <i class="text-xs text-red-600"></i>
                                            </p>
                                            <select name="sub_division[]" class="sub-division-select rounded-lg border-gray-300 px-3 py-2 text-gray-500 shadow-sm focus:border-blue-500 focus:outline-none">
                                                <option value="" disabled selected class="text-black">Pilih subdivisi</option>
                                            </select>
                                        </div>

                                        <!-- Status -->
                                        <div class="flex flex-col gap-2">
                                            <p class="flex gap-1 text-lg font-semibold">
                                                Status
                                                <i class="bx bxs-star text-xs text-red-600"></i>
                                            </p>
                                            <select name="status[]" class="rounded-lg border-gray-300 px-3 py-2 text-gray-500 shadow-sm focus:border-blue-500 focus:outline-none" required>
                                                <option value="" disabled selected class="text-black">Pilih status</option>
                                                <option value="active" class="text-black">Active</option>
                                                <option value="inactive" class="text-black">Inactive</option>
                                            </select>
                                        </div>

                                        <!-- Date Fields -->
                                        <div class="flex flex-col gap-2">
                                            <p class="flex gap-1 text-lg font-semibold">
                                                Awal Menjabat
                                                <i class="bx bxs-star text-xs text-red-600"></i>
                                            </p>
                                            <input type="date" name="date_start[]" class="rounded-lg border-gray-300 px-3 py-2" required />
                                        </div>

                                        <div class="flex flex-col gap-2">
                                            <p class="flex gap-1 text-lg font-semibold">
                                                Akhir Menjabat
                                                <i class="bx bxs-star text-xs text-red-600"></i>
                                            </p>
                                            <input type="date" name="date_end[]" class="rounded-lg border-gray-300 px-3 py-2" required />
                                        </div>

                                        <!-- Awards Field (MOTM) -->
                                        <div class="col-span-2 flex flex-col gap-2">
                                            <p class="flex gap-1 text-lg font-semibold">
                                                Pernah mendapat MOTM/EOTM/MOTY/EOTY?
                                                <i class="bx bxs-star text-xs text-red-600"></i>
                                            </p>
                                            <div class="flex items-center gap-4">
                                                <input type="hidden" name="motm" value="no" id="motmHidden" />
                                                <label class="relative inline-flex cursor-pointer items-center">
                                                    <input type="checkbox" id="motmToggle" class="peer sr-only" />
                                                    <div class="peer h-8 w-16 rounded-full bg-gray-200 after:absolute after:left-[2px] after:top-[2px] after:h-7 after:w-7 after:rounded-full after:border after:border-gray-300 after:bg-white after:transition-all after:content-[''] peer-checked:bg-blue-500 peer-checked:after:translate-x-8 peer-checked:after:border-white peer-focus:outline-none"></div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Template for new rows -->
                            <template id="riwayatTemplate">
                                <div class="riwayat-row pt-5">
                                    <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                                        <!-- Division -->
                                        <div class="flex flex-col gap-2">
                                            <p class="flex gap-1 text-lg font-semibold">
                                                Divisi
                                                <i class="bx bxs-star text-xs text-red-600"></i>
                                            </p>
                                            <select name="division[]" class="division-select rounded-lg border-gray-300 px-3 py-2 text-gray-500 shadow-sm focus:border-blue-500 focus:outline-none" required>
                                                <option value="" disabled selected class="text-black">Pilih divisi</option>
                                                @foreach ($divisions as $division)
                                                    <option value="{{ $division->id }}" class="text-black">{{ $division->nama_divisi }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <!-- Status -->
                                        <div class="flex flex-col gap-2">
                                            <p class="flex gap-1 text-lg font-semibold">
                                                Status
                                                <i class="bx bxs-star text-xs text-red-600"></i>
                                            </p>
                                            <select name="status[]" class="rounded-lg border-gray-300 px-3 py-2 text-gray-500 shadow-sm focus:border-blue-500 focus:outline-none" required>
                                                <option value="" disabled selected class="text-black">Pilih status</option>
                                                <option value="active" class="text-black">Active</option>
                                                <option value="inactive" class="text-black">Inactive</option>
                                            </select>
                                        </div>
                                        <!-- Sub Division -->
                                        <div class="flex flex-col gap-2">
                                            <p class="flex gap-1 text-lg font-semibold">
                                                Subdivisi
                                                <i class="text-xs text-red-600"></i>
                                            </p>
                                            <select name="sub_division[]" class="sub-division-select rounded-lg border-gray-300 px-3 py-2 text-gray-500 shadow-sm focus:border-blue-500 focus:outline-none">
                                                <option value="" disabled selected class="text-black">Pilih subdivisi</option>
                                            </select>
                                        </div>
                                        <!-- Date Fields -->
                                        <div class="flex flex-col gap-2">
                                            <p class="flex gap-1 text-lg font-semibold">
                                                Awal Menjabat
                                                <i class="bx bxs-star text-xs text-red-600"></i>
                                            </p>
                                            <input type="date" name="date_start[]" class="rounded-lg border-gray-300 px-3 py-2" required />
                                        </div>

                                        <div class="flex flex-col gap-2">
                                            <p class="flex gap-1 text-lg font-semibold">
                                                Akhir Menjabat
                                                <i class="bx bxs-star text-xs text-red-600"></i>
                                            </p>
                                            <input type="date" name="date_end[]" class="rounded-lg border-gray-300 px-3 py-2" required />
                                        </div>
                                        <div class="flex items-end gap-2 mt-2">
                                            <button type="button"
                                                class="btn-delete-riwayat flex items-center gap-2 rounded-lg border border-red-200 bg-red-50 px-3 py-2 text-sm font-semibold text-red-600 transition hover:bg-red-600 hover:text-white hover:border-red-600 shadow-sm"
                                                title="Hapus riwayat jabatan">
                                                <i class="bx bx-trash text-lg"></i>
                                                <span>Hapus</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </template>

                            <!-- Add More Button -->
                            <div class="mt-6 flex cursor-pointer items-center justify-center rounded-lg border border-dashed border-blue-500 py-2 text-blue-500" id="addRiwayatButton">
                                <h1 class="">
                                    <i class="bx bx-plus-circle"></i>
                                    Tambahkan Riwayat Jabatan
                                </h1>
                            </div>
                        </div>

                        <hr class="border-t-2 border-t-gray-400">

                        <!-- Submit Button -->
                        <div class="mt-3 flex gap-4 pt-5">
                            <button type="button" id="cancelButton" class="rounded-xl flex-1 flex items-center justify-center h-12 text-lg" style="width: 50%; border: 2px solid #3986A3; color: #3986A3;">
                                Batal
                            </button>
                            <button type="submit" class="rounded-xl flex-1 flex items-center justify-center h-12 text-lg" style="width: 50%; background: #3986A3; color: #fff;">
                                Simpan
                            </button>
                        </div>
                    </div>
                </form>

                <!-- Modal Konfirmasi -->
                <div id="confirmModal" class="fixed inset-0 z-50 flex hidden items-center justify-center bg-black bg-opacity-50">
                    <div class="w-full max-w-md rounded-lg bg-white p-6 text-center">
                        <div class="mb-4 flex justify-center">
                            <img src="{{ asset("assets/images/dashboard/svg-icon/warning.svg") }}" alt="Warning Icon" class="h-12 w-12" />
                        </div>
                        <p class="mb-6 text-lg">Apakah Anda yakin ingin membatalkan penambahan data ini?</p>
                        <div class="flex justify-center gap-4">
                            <button id="confirmCancel" class="w-1/3 rounded-lg bg-[#3986A3] px-6 py-2 text-white">OK</button>
                            <button id="cancelCancel" class="w-1/3 rounded-lg border border-[#3986A3] px-6 py-2 text-[#3986A3]">Cancel</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const photoInput = document.getElementById('photoInput');
            const photoLabel = document.getElementById('photoLabel');
            const photoPreviewContainer = document.getElementById('photoPreviewContainer');
            const photoName = document.getElementById('photoName');

            photoInput.addEventListener('change', function () {
                if (this.files && this.files[0]) {
                    // Hilangkan label upload
                    photoLabel.style.display = 'none';

                    // Buat preview gambar
                    const reader = new FileReader();
                    reader.onload = function (e) {
                        photoPreviewContainer.innerHTML = `
                        <img src="${e.target.result}" alt="Preview Foto" class="rounded-lg object-cover w-40 h-40 border border-gray-300 shadow" />
                    `;
                    };
                    reader.readAsDataURL(this.files[0]);
                } else {
                    // Jika tidak ada file, tampilkan kembali label upload
                    photoLabel.style.display = 'inline-block';
                    photoPreviewContainer.innerHTML = '';
                    photoName.textContent = '';
                }
            });
            riwayatContainer.addEventListener('click', function (e) {
                if (e.target.closest('.btn-delete-riwayat')) {
                    const row = e.target.closest('.riwayat-row');
                    if (row) {
                        row.remove();
                    }
                }
            });
        });
    </script>

    <script>
        const cancelButton = document.getElementById('cancelButton');
        const confirmModal = document.getElementById('confirmModal');
        const confirmCancel = document.getElementById('confirmCancel');
        const cancelCancel = document.getElementById('cancelCancel');

            cancelButton.addEventListener('click', function(e) {
                e.preventDefault();
                confirmModal.classList.remove('hidden');
            });

            confirmCancel.addEventListener('click', function() {
                window.location.href = "{{ route('dashboard.keluarga-berbinar.index') }}";
            });

            cancelCancel.addEventListener('click', function() {
                confirmModal.classList.add('hidden');
            });
    </script>
@endsection
