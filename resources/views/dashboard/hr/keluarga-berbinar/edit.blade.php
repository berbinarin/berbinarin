@extends(
    "dashboard.layouts.app",
    [
        "title" => "Edit Keluarga Berbinar",
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
                        <h1 class="text-2xl font-bold">Data Diri</h1>
                        <p class="flex gap-1 pt-5 text-lg font-semibold">
                            Foto Pribadi
                            <i class="text-xs text-red-600"></i>
                        </p>
                        <p class="pb-3 text-lg text-gray-400">Ukuran foto maksimal 1 MB dengan resolusi minimal 300x300 piksel. Format file yang diperbolehkan: JPG, PNG.</p>
                        <input type="file" name="photo" class="rounded-lg border-gray-300 px-3 py-2 shadow-sm focus:border-transparent focus:outline-none focus:ring-0" />
                        <div class="mb-4 flex w-full gap-10 pt-5">
                            <div class="flex w-full flex-col gap-2">
                                <p class="flex gap-1 text-lg font-semibold">
                                    Nama Lengkap
                                    <i class="bx bxs-star text-xs text-red-600"></i>
                                </p>
                                <input type="text" name="name" value="{{ $staff->name }}" class="rounded-lg border-gray-300 px-3 py-2 shadow-sm focus:border-transparent focus:outline-none focus:ring-0" placeholder="John Doe" required />
                            </div>
                            <div class="flex w-full flex-col gap-2">
                                <p class="flex gap-1 text-lg font-semibold">
                                    LinkedIn
                                    <i class="bx bxs-star text-xs text-red-600"></i>
                                </p>
                                <input type="text" name="linkedin" value="{{ $staff->linkedin }}" class="rounded-lg border-gray-300 px-3 py-2 shadow-sm focus:border-transparent focus:outline-none focus:ring-0" placeholder="linkedin.com/in/johndoe/" required />
                            </div>
                            <div class="w-1/4"></div>
                        </div>
                        <div class="flex w-full flex-col gap-2">
                            <p class="flex gap-1 text-lg font-semibold">
                                MOTM (Member of the Month)
                                <i class="bx bxs-star text-xs text-red-600"></i>
                            </p>
                            <div class="flex items-center">
                                <input type="radio" name="motm" value="yes" class="mr-2" {{ $staff->motm == "yes" ? "checked" : "" }} required />
                                Ya
                                <input type="radio" name="motm" value="no" class="ml-4 mr-2" {{ $staff->motm == "no" ? "checked" : "" }} required />
                                Tidak
                            </div>
                        </div>
                        <h1 class="pt-10 text-2xl font-bold">Riwayat Jabatan</h1>
                        <div id="riwayatContainer">
                            @foreach ($staff->records as $record)
                                <div class="riwayat-row flex pb-5">
                                    <div class="grid w-full grid-cols-2 gap-x-10 gap-y-5 pt-5 lg:grid-cols-2">
                                        <div class="flex w-full flex-col gap-2">
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

                                        <div class="flex w-full flex-col gap-2">
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

                                        <div class="flex w-full flex-col gap-2">
                                            <p class="flex gap-1 text-lg font-semibold">
                                                Awal Menjabat
                                                <i class="bx bxs-star text-xs text-red-600"></i>
                                            </p>
                                            <div class="flex w-full items-center">
                                                <div class="mr-3 flex w-full justify-between rounded-lg border border-gray-300 shadow-sm focus:border-transparent focus:outline-none focus:ring-0">
                                                    <input type="date" name="date_start[]" value="{{ $record->date_start }}" class="w-full rounded-lg border-none text-gray-500" required />
                                                </div>
                                                <button type="button" class="btn-delete-riwayat">
                                                    <i class="bx bxs-trash-alt rounded-lg border border-red-700 px-2 py-1 text-lg text-red-700"></i>
                                                </button>
                                            </div>
                                        </div>

                                        <div class="flex w-full flex-col gap-2">
                                            <p class="flex gap-1 text-lg font-semibold">
                                                Akhir Menjabat
                                                <i class="bx bxs-star text-xs text-red-600"></i>
                                            </p>
                                            <div class="flex justify-between rounded-lg border border-gray-300 shadow-sm focus:border-transparent focus:outline-none focus:ring-0">
                                                <input type="date" name="date_end[]" value="{{ $record->date_end }}" class="w-full rounded-lg border-none text-gray-500" required />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-1/6"></div>
                                </div>
                            @endforeach
                        </div>

                        <template id="riwayatTemplate">
                            <div class="riwayat-row flex pb-5">
                                <div class="grid w-full grid-cols-2 gap-x-10 gap-y-5 pt-5 lg:grid-cols-2">
                                    <div class="flex w-full flex-col gap-2">
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

                                    <div class="flex w-full flex-col gap-2">
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

                                    <div class="flex w-full flex-col gap-2">
                                        <p class="flex gap-1 text-lg font-semibold">
                                            Awal Menjabat
                                            <i class="bx bxs-star text-xs text-red-600"></i>
                                        </p>
                                        <div class="flex w-full items-center">
                                            <div class="mr-3 flex w-full justify-between rounded-lg border border-gray-300 shadow-sm focus:border-transparent focus:outline-none focus:ring-0">
                                                <input type="date" name="date_start[]" class="w-full rounded-lg border-none text-gray-500" required />
                                            </div>
                                            <button type="button" class="btn-delete-riwayat">
                                                <i class="bx bxs-trash-alt rounded-lg border border-red-700 px-2 py-1 text-lg text-red-700"></i>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="flex w-full flex-col gap-2">
                                        <p class="flex gap-1 text-lg font-semibold">
                                            Akhir Menjabat
                                            <i class="bx bxs-star text-xs text-red-600"></i>
                                        </p>
                                        <div class="flex justify-between rounded-lg border border-gray-300 shadow-sm focus:border-transparent focus:outline-none focus:ring-0">
                                            <input type="date" name="date_end[]" class="w-full rounded-lg border-none text-gray-500" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="w-1/6"></div>
                            </div>
                        </template>

                        <div class="flex cursor-pointer items-center justify-center rounded-lg border border-dashed border-blue-500 py-2 text-blue-500" id="addRiwayatButton">
                            <h1 class="">
                                <i class="bx bx-plus-circle"></i>
                                Tambahkan Riwayat Jabatan
                            </h1>
                        </div>
                        <div class="mt-8 flex justify-end border-t-2 border-t-gray-400 pt-5">
                            <button type="submit" class="flex items-center gap-2 rounded-xl bg-blue-500 px-3 py-2 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-300">Perbarui Data</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
