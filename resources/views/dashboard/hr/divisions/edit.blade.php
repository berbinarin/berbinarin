@extends(
    "dashboard.layouts.app",
    [
        "title" => "Edit Division",
    ]
)

@section("content")
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const subDivisiContainer = document.getElementById('subDivisiContainer');
            const addSubDivisiButton = document.getElementById('addSubDivisiButton');
            const subDivisiTemplate = document.getElementById('subDivisiTemplate');

            // Add subdivision button
            addSubDivisiButton.addEventListener('click', function () {
                if (subDivisiTemplate) {
                    const clone = subDivisiTemplate.content.cloneNode(true);
                    subDivisiContainer.appendChild(clone);
                }
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

                    if (row) {
                        row.remove();
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
                        <a href="{{ route("dashboard.divisions.index") }}">
                            <img src="{{ asset("assets/images/svg-icon/dashboard-back.png") }}" alt="Back Btn" />
                        </a>
                        <p tabindex="0" class="text-base font-bold leading-normal text-gray-800 focus:outline-none sm:text-lg md:text-2xl lg:text-4xl">Edit Division Data</p>
                    </div>
                </div>
                <div class="rounded-md bg-white px-4 py-4 shadow-lg shadow-gray-400 md:px-8 md:py-7 xl:px-10">
                    <form action="{{ route("dashboard.divisions.update", $division->id) }}" method="POST">
                        @csrf
                        @method("put")
                        <div class="flex pb-5">
                            <div class="flex w-1/2 flex-col gap-10">
                                <div>
                                    <h1 class="text-2xl font-bold">Divisi</h1>
                                    <div class="flex w-full flex-col gap-2 pt-5">
                                        <p class="flex gap-1 text-lg font-semibold">
                                            Nama Divisi
                                            <i class="bx bxs-star text-xs text-red-600"></i>
                                        </p>
                                        <input type="text" name="divisi" value="{{ $division->nama_divisi }}" class="rounded-lg border-gray-300 px-3 py-2 shadow-sm focus:border-transparent focus:outline-none focus:ring-0" placeholder="Contoh: Marketing" required />
                                    </div>
                                </div>
                                <div>
                                    <h1 class="text-2xl font-bold">Sub Divisi</h1>
                                    <div id="subDivisiContainer">
                                        @foreach ($division->subDivisions as $subDivision)
                                            <div class="subdivisi-row flex w-full flex-col gap-2 pt-5">
                                                <p class="flex gap-1 text-lg font-semibold">
                                                    Nama Sub Divisi
                                                    <i class="text-xs text-red-600"></i>
                                                </p>
                                                <div class="flex w-full items-center">
                                                    <input type="text" name="subdivisi[]" value="{{ $subDivision->nama_subdivisi }}" class="mr-3 w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm focus:border-transparent focus:outline-none focus:ring-0" placeholder="Contoh: Tim Frontend" />
                                                    <button type="button" class="btn-delete-subdivisi" data-id="{{ $subDivision->id }}">
                                                        <i class="bx bxs-trash-alt rounded-lg border border-red-700 px-2 py-1 text-lg text-red-700"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <input type="hidden" id="deletedSubDivisions" name="deleted_subdivisions" value="" />
                                    <template id="subDivisiTemplate">
                                        <div class="subdivisi-row flex w-full flex-col gap-2 pt-5">
                                            <p class="flex gap-1 text-lg font-semibold">
                                                Nama Sub Divisi
                                                <i class="text-xs text-red-600"></i>
                                            </p>
                                            <div class="flex w-full items-center">
                                                <input type="text" name="subdivisi[]" class="mr-3 w-full rounded-lg border-gray-300 px-3 py-2 shadow-sm focus:border-transparent focus:outline-none focus:ring-0" placeholder="Contoh: Tim Frontend" />
                                                <button type="button" class="btn-delete-subdivisi">
                                                    <i class="bx bxs-trash-alt rounded-lg border border-red-700 px-2 py-1 text-lg text-red-700"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </template>
                                    <div id="addSubDivisiButton" class="mt-4 flex cursor-pointer items-center justify-center rounded-lg border border-dashed border-blue-500 py-2 text-blue-500">
                                        <h1>
                                            <i class="bx bx-plus-circle"></i>
                                            Tambahkan Sub Divisi
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-8 flex justify-end border-t-2 border-t-gray-400 pt-5">
                            <button type="submit" class="flex items-center gap-2 rounded-xl bg-blue-500 px-3 py-2 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-300">Simpan Perubahan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
