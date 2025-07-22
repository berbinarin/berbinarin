@extends(
    "dashboard.layouts.app",
    [
        "title" => "Edit Keluarga Berbinar",
    ]
)


@section("content")
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
                    const rows = riwayatContainer.querySelectorAll('.riwayat-row');
                    if (rows.length > 1) {
                        const row = e.target.closest('.riwayat-row');
                        if (row) {
                            row.remove();
                        }
                    } else {
                        Swal.fire({
                            icon: 'warning',
                            iconColor: '#3986A3',
                            title: 'Perhatian',
                            text: 'Minimal harus ada satu riwayat jabatan.',
                            confirmButtonColor: '#3986A3'
                        });
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

            // Photo preview functionality
            const photoInput = document.getElementById('photoInput');
            const photoLabel = document.getElementById('photoLabel');
            const photoPreviewContainer = document.getElementById('photoPreviewContainer');
            const photoName = document.getElementById('photoName');

            photoInput.addEventListener('change', function () {
                if (this.files && this.files[0]) {
                    // Hide upload label
                    photoLabel.style.display = 'none';

                    // Create image preview
                    const reader = new FileReader();
                    reader.onload = function (e) {
                        photoPreviewContainer.innerHTML = `
                            <img src="${e.target.result}" alt="Preview Foto" class="rounded-lg object-cover w-40 h-40 border border-gray-300 shadow" />
                        `;
                    };
                    reader.readAsDataURL(this.files[0]);
                } else {
                    // If no file, show upload label again
                    photoLabel.style.display = 'inline-block';
                    photoPreviewContainer.innerHTML = '';
                    photoName.textContent = '';
                }
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
                        <p tabindex="0" class="text-base font-bold leading-normal text-gray-800 focus:outline-none sm:text-lg md:text-2xl lg:text-4xl">Edit Staff Data</p>
                    </div>
                    <p class="w-3/4 text-disabled">
                        Admin dapat mengedit data staff dengan menyertakan input yang sesuai untuk setiap form.
                        <br />
                        Data tersebut meliputi informasi data diri dan riwayat jabatan.
                    </p>
                </div>
            </div>
            <div class="rounded-md bg-white px-4 py-4 shadow-lg shadow-gray-400 md:px-8 md:py-7 xl:px-10">
                <form action="{{ route("dashboard.keluarga-berbinar.update", $staff->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method("PUT")
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
                                    @if($staff->photo)
                                        <div id="photoPreviewContainer" class="mt-3">
                                            <img src="{{ asset('storage/' . $staff->photo) }}" alt="Current Photo" class="rounded-lg object-cover w-40 h-40 border border-gray-300 shadow" />
                                        </div>
                                    @else
                                        <div id="photoPreviewContainer" class="mt-3"></div>
                                    @endif
                                    <span id="photoName" class="ml-3 text-gray-600"></span>
                                </div>

                                <!-- Name Field -->
                                <div class="flex flex-col gap-2">
                                    <p class="flex gap-1 text-lg font-semibold">
                                        Nama Lengkap
                                        <i class="bx bxs-star text-xs text-red-600"></i>
                                    </p>
                                    <input type="text" name="name" value="{{ $staff->name }}" class="rounded-lg border-gray-300 px-3 py-2 shadow-sm focus:border-transparent focus:outline-none focus:ring-0" placeholder="John Doe" required />
                                </div>

                                <!-- LinkedIn Field -->
                                <div class="flex flex-col gap-2">
                                    <p class="flex gap-1 text-lg font-semibold">
                                        LinkedIn
                                        <i class="bx bxs-star text-xs text-red-600"></i>
                                    </p>
                                    <input type="text" name="linkedin" value="{{ $staff->linkedin }}" class="rounded-lg border-gray-300 px-3 py-2 shadow-sm focus:border-transparent focus:outline-none focus:ring-0" placeholder="linkedin.com/in/johndoe/" required />
                                </div>
                            </div>
                        </div>

                        <!-- Riwayat Jabatan Section -->
                        <div class="mb-8">
                            <h1 class="text-2xl font-bold">Riwayat Jabatan</h1>

                            <div id="riwayatContainer">
                                @foreach ($staff->records as $record)
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
                                                    <option value="{{ $division->id }}" class="text-black" {{ $record->division_id == $division->id ? "selected" : "" }}>
                                                        {{ $division->nama_divisi }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <!-- Sub Division -->
                                        <div class="flex flex-col gap-2">
                                            <p class="flex gap-1 text-lg font-semibold">
                                                Sub divisi
                                                <i class="text-xs text-red-600"></i>
                                            </p>
                                            <select name="sub_division[]" class="sub-division-select rounded-lg border-gray-300 px-3 py-2 text-gray-500 shadow-sm focus:border-blue-500 focus:outline-none">
                                                <option value="" disabled selected class="text-black">Pilih subdivisi</option>
                                                @if ($record->division && $record->division->subDivisions)
                                                    @foreach ($record->division->subDivisions as $subDivision)
                                                        <option value="{{ $subDivision->id }}" class="text-black" {{ $record->subdivision_id == $subDivision->id ? "selected" : "" }}>
                                                            {{ $subDivision->nama_subdivisi }}
                                                        </option>
                                                    @endforeach
                                                @endif
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
                                                <option value="active" class="text-black" {{ $record->status == 'active' ? 'selected' : '' }}>Active</option>
                                                <option value="inactive" class="text-black" {{ $record->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                                            </select>
                                        </div>

                                        <!-- Date Fields -->
                                        <div class="flex flex-col gap-2">
                                            <p class="flex gap-1 text-lg font-semibold">
                                                Awal Menjabat
                                                <i class="bx bxs-star text-xs text-red-600"></i>
                                            </p>
                                            <input type="date" name="date_start[]" value="{{ $record->date_start }}" class="rounded-lg border-gray-300 px-3 py-2" required />
                                        </div>

                                        <div class="flex flex-col gap-2">
                                            <p class="flex gap-1 text-lg font-semibold">
                                                Akhir Menjabat
                                                <i class="bx bxs-star text-xs text-red-600"></i>
                                            </p>
                                            <input type="date" name="date_end[]" value="{{ $record->date_end }}" class="rounded-lg border-gray-300 px-3 py-2" required />
                                        </div>
                                        <div class="flex items-end gap-2 mt-2">
                                            <button type="button"
                                                class="btn-delete-riwayat flex items-center gap-2 rounded-lg border border-red-200 bg-red-50 px-3 py-2 text-sm font-semibold text-red-600 transition hover:bg-red-600 hover:text-white hover:border-red-600 shadow-sm"
                                                title="Hapus riwayat jabatan">
                                                <i class="bx bx-trash text-lg"></i>
                                                <span>Hapus</span>
                                            </button>
                                        </div>

                                        <!-- Awards Field (MOTM) -->
                                        @if($loop->first)
                                        <div class="col-span-2 flex flex-col gap-2">
                                            <p class="flex gap-1 text-lg font-semibold">
                                                Pernah mendapat MOTM/EOTM/MOTY/EOTY?
                                                <i class="bx bxs-star text-xs text-red-600"></i>
                                            </p>
                                            <div class="flex items-center gap-4">
                                                <input type="hidden" name="motm" value="{{ $staff->motm }}" id="motmHidden" />
                                                <label class="relative inline-flex cursor-pointer items-center">
                                                    <input type="checkbox" id="motmToggle" class="peer sr-only" {{ $staff->motm == 'yes' ? 'checked' : '' }} />
                                                    <div class="peer h-8 w-16 rounded-full bg-gray-200 after:absolute after:left-[2px] after:top-[2px] after:h-7 after:w-7 after:rounded-full after:border after:border-gray-300 after:bg-white after:transition-all after:content-[''] peer-checked:bg-blue-500 peer-checked:after:translate-x-8 peer-checked:after:border-white peer-focus:outline-none"></div>
                                                </label>
                                            </div>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                                @endforeach
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
                                                Sub divisi
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

                        <!-- Submit Button -->
                        <div class="mt-8 flex justify-end border-t-2 border-t-gray-400 pt-5">
                            <button type="submit" class="flex items-center gap-2 rounded-xl bg-blue-500 px-3 py-2 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-300">Perbarui Data</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection