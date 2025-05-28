@extends('moduls.dashboard.layouts.main', [
    'title' => 'Edit Division',
    'active' => 'Dashboard',
    'modul' => 'Manage Division',
])

@section('content-dashboard')
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
    <div class="flex flex-col w-full">
        <div class="py-4 md:pt-12 md:pb-7">
            <div class="">
                <div class="flex items-center mb-2 gap-2">
                    <a href="{{ route('dashboard.divisions.index') }}">
                        <img src="{{ asset('assets/images/svg-icon/dashboard-back.png') }}" alt="Back Btn" />
                    </a>
                    <p tabindex="0"
                        class="focus:outline-none text-base sm:text-lg md:text-2xl lg:text-4xl font-bold leading-normal text-gray-800 ">
                        Edit Division Data</p>
                </div>
            </div>
            <div class="bg-white py-4 md:py-7 px-4 md:px-8 xl:px-10 rounded-md shadow-gray-400 shadow-lg">
                <form action="{{ route('dashboard.divisions.update', $division->id) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="flex pb-5">
                        <div class="w-1/2 flex flex-col gap-10">
                            <div>
                                <h1 class="text-2xl font-bold">Divisi</h1>
                                <div class="flex flex-col gap-2 w-full pt-5">
                                    <p class="text-lg font-semibold flex gap-1">
                                        Nama Divisi<i class="bx bxs-star text-xs text-red-600"></i>
                                    </p>
                                    <input type="text" name="divisi" value="{{ $division->nama_divisi }}"
                                        class="py-2 px-3 rounded-lg border-gray-300 focus:outline-none focus:border-transparent focus:ring-0 shadow-sm"
                                        placeholder="Contoh: Marketing" required />
                                </div>
                            </div>
                            <div>
                                <h1 class="text-2xl font-bold">Sub Divisi</h1>
                                <div id="subDivisiContainer">
                                    @foreach ($division->subDivisions as $subDivision)
                                        <div class="flex flex-col gap-2 w-full pt-5 subdivisi-row">
                                            <p class="text-lg font-semibold flex gap-1">
                                                Nama Sub Divisi <i class="text-xs text-red-600"></i>
                                            </p>
                                            <div class="flex items-center w-full">
                                                <input type="text" name="subdivisi[]" value="{{ $subDivision->nama_subdivisi }}"
                                                    class="py-2 px-3 rounded-lg border-gray-300 focus:outline-none focus:border-transparent focus:ring-0 shadow-sm w-full mr-3"
                                                    placeholder="Contoh: Tim Frontend" />
                                                <button type="button" class="btn-delete-subdivisi" data-id="{{ $subDivision->id }}">
                                                    <i class="bx bxs-trash-alt text-lg px-2 py-1 border border-red-700 text-red-700 rounded-lg"></i>
                                                </button>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <input type="hidden" id="deletedSubDivisions" name="deleted_subdivisions" value="">
                                <template id="subDivisiTemplate">
                                    <div class="flex flex-col gap-2 w-full pt-5 subdivisi-row">
                                        <p class="text-lg font-semibold flex gap-1">
                                            Nama Sub Divisi <i class="text-xs text-red-600"></i>
                                        </p>
                                        <div class="flex items-center w-full">
                                            <input type="text" name="subdivisi[]"
                                                class="py-2 px-3 rounded-lg border-gray-300 focus:outline-none focus:border-transparent focus:ring-0 shadow-sm w-full mr-3"
                                                placeholder="Contoh: Tim Frontend" />
                                            <button type="button" class="btn-delete-subdivisi">
                                                <i class="bx bxs-trash-alt text-lg px-2 py-1 border border-red-700 text-red-700 rounded-lg"></i>
                                            </button>
                                        </div>
                                    </div>
                                </template>
                                <div id="addSubDivisiButton"
                                    class="py-2 flex items-center justify-center border border-dashed rounded-lg border-blue-500 text-blue-500 cursor-pointer mt-4">
                                    <h1>
                                        <i class="bx bx-plus-circle"></i>
                                        Tambahkan Sub Divisi
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-end pt-5 border-t-2 border-t-gray-400 mt-8">
                        <button type="submit"
                            class="flex items-center gap-2 bg-blue-500 text-white rounded-xl px-3 py-2 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-300">
                            Simpan Perubahan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection