@extends('moduls.dashboard.layouts.main', [
    'title' => 'BerbinarFamily',
    'active' => 'Dashboard',
    'modul' => 'BerbinarFamily',
])

@section('content-dashboard')

<script>
document.addEventListener('DOMContentLoaded', function() {
    const addRiwayatButton = document.getElementById('addRiwayatButton');
    const riwayatContainer = document.getElementById('riwayatContainer');
    const riwayatTemplate = document.getElementById('riwayatTemplate');

    addRiwayatButton.addEventListener('click', function() {
        const clone = riwayatTemplate.content.cloneNode(true);
        riwayatContainer.appendChild(clone);
    });

    riwayatContainer.addEventListener('click', function(e) {
        if (e.target.closest('.btn-delete-riwayat')) {
            const row = e.target.closest('.riwayat-row');
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
            <div>
                <div class="flex items-center mb-2 gap-2">
                    <a href="{{ route('dashboard.berbinarFamily') }}">
                        <img src="{{ asset('assets/images/svg-icon/dashboard-back.png') }}" alt="Back Btn" />
                    </a>
                    <p tabindex="0"
                        class="focus:outline-none text-base sm:text-lg md:text-2xl lg:text-4xl font-bold leading-normal text-gray-800">
                        Add Staff Data</p>
                </div>
                <p class="w-3/4 text-disabled">
                    Admin dapat menambahkan data staff dengan menyertakan input yang sesuai untuk setiap form. <br /> Data tersebut
                    meliputi informasi data diri dan riwayat jabatan.
                </p>
            </div>
        </div>
        <!-- Main Form -->
        <div class="bg-white py-4 md:py-7 px-4 md:px-8 xl:px-10 rounded-md shadow-gray-400 shadow-lg">
            <form action="{{ route('data_staff.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mt-4 mb-4 overflow-x-auto">
                    <!-- Data Diri -->
                    <h1 class="text-2xl font-bold">Data Diri</h1>
                    <p class="text-lg font-semibold flex gap-1 pt-5">
                        Foto Pribadi<i class="bx bxs-star text-xs text-red-600"></i>
                    </p>
                    <p class="text-lg text-gray-400 pb-3">
                        Ukuran foto maksimal 1 MB dengan resolusi minimal 300x300 piksel. Format file yang diperbolehkan: JPG, PNG.
                    </p>
                    <div>
                        <!-- Sembunyikan input file dan trigger dengan tombol -->
                        <input type="file" name="foto" accept="image/*" class="hidden" id="fotoInput">
                        <button type="button" onclick="document.getElementById('fotoInput').click()"
                            class="flex items-center gap-2 bg-blue-500 text-white rounded-xl px-3 py-2 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-300">
                            <i class="bx bx-upload text-2xl"></i>
                            Unggah Foto
                        </button>
                    </div>
                    <div class="pt-5 flex gap-10 w-full">
                        <div class="flex flex-col gap-2 w-full">
                            <p class="text-lg font-semibold flex gap-1">
                                Nama Lengkap<i class="bx bxs-star text-xs text-red-600"></i>
                            </p>
                            <input type="text" name="nama_lengkap"
                                class="py-2 px-3 rounded-lg border-gray-300 focus:outline-none focus:border-transparent focus:ring-0 shadow-sm"
                                placeholder="John Doe" />
                        </div>
                        <div class="flex flex-col gap-2 w-full">
                            <p class="text-lg font-semibold flex gap-1">
                                LinkedIn<i class="bx bxs-star text-xs text-red-600"></i>
                            </p>
                            <input type="text" name="linkedin"
                                class="py-2 px-3 rounded-lg border-gray-300 focus:outline-none focus:border-transparent focus:ring-0 shadow-sm"
                                placeholder="linkedin.com/in/johndoe/" />
                        </div>
                        <div class="w-1/4"></div>
                    </div>
                    <!-- Riwayat Jabatan -->
                    <h1 class="text-2xl font-bold pt-10">Riwayat Jabatan</h1>
                    <div id="riwayatContainer">
                        <div class="flex pb-5 riwayat-row">
                            <div class="grid grid-cols-2 lg:grid-cols-2 gap-x-10 gap-y-5 w-full">
                                <div class="flex flex-col gap-2 w-full">
                                    <p class="text-lg font-semibold flex gap-1">
                                        Posisi<i class="bx bxs-star text-xs text-red-600"></i>
                                    </p>
                                    <select name="riwayat_jabatan[][posisi]"
                                        class="py-2 px-3 rounded-lg border-gray-300 focus:outline-none focus:border-blue-500 shadow-sm text-gray-500">
                                        <option value="" disabled selected>Pilih posisi jabatan</option>
                                        <option value="frontend">Frontend</option>
                                        <option value="backend">Backend</option>
                                        <option value="fullstack">Fullstack</option>
                                    </select>
                                </div>
                                <div class="flex flex-col gap-2 w-full">
                                    <p class="text-lg font-semibold flex gap-1">
                                        Divisi<i class="bx bxs-star text-xs text-red-600"></i>
                                    </p>
                                    <select name="riwayat_jabatan[][divisi]"
                                        class="py-2 px-3 rounded-lg border-gray-300 focus:outline-none focus:border-blue-500 shadow-sm text-gray-500">
                                        <option value="" disabled selected>Pilih divisi</option>
                                        <option value="frontend">Frontend</option>
                                        <option value="backend">Backend</option>
                                        <option value="fullstack">Fullstack</option>
                                    </select>
                                </div>
                                <div class="flex flex-col gap-2 w-full">
                                    <p class="text-lg font-semibold flex gap-1">
                                        Sub divisi<i class="bx bxs-star text-xs text-red-600"></i>
                                    </p>
                                    <select name="riwayat_jabatan[][sub_divisi]"
                                        class="py-2 px-3 rounded-lg border-gray-300 focus:outline-none focus:border-blue-500 shadow-sm text-gray-500">
                                        <option value="" disabled selected>Pilih subdivisi</option>
                                        <option value="frontend">Frontend</option>
                                        <option value="backend">Backend</option>
                                        <option value="fullstack">Fullstack</option>
                                    </select>
                                </div>
                                <div class="flex flex-col gap-2 w-full">
                                    <p class="text-lg font-semibold flex gap-1">
                                        Awal Menjabat<i class="bx bxs-star text-xs text-red-600"></i>
                                    </p>
                                    <div class="flex items-center w-full">
                                        <div class="rounded-lg border border-gray-300 focus:outline-none focus:border-transparent focus:ring-0 shadow-sm flex justify-between w-full mr-3">
                                            <input type="date" name="riwayat_jabatan[][awal_menjabat]"
                                                class="border-none rounded-lg text-gray-500 w-full" />
                                        </div>
                                        <button type="button" class="btn-delete-riwayat">
                                            <i class="bx bxs-trash-alt text-lg px-2 py-1 border border-red-700 text-red-700 rounded-lg"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-2 w-full">
                                    <p class="text-lg font-semibold flex gap-1">
                                        Akhir Menjabat<i class="bx bxs-star text-xs text-red-600"></i>
                                    </p>
                                    <div class="rounded-lg border border-gray-300 focus:outline-none focus:border-transparent focus:ring-0 shadow-sm flex justify-between">
                                        <input type="date" name="riwayat_jabatan[][akhir_menjabat]"
                                            class="border-none rounded-lg text-gray-500 w-full" />
                                    </div>
                                </div>
                            </div>
                            <div class="w-1/6"></div>
                        </div>
                    </div>
                    <!-- Template untuk menambah baris riwayat jabatan -->
                    <template id="riwayatTemplate">
                        <div class="flex pb-5 riwayat-row">
                            <div class="grid grid-cols-2 lg:grid-cols-2 gap-x-10 gap-y-5 w-full">
                                <div class="flex flex-col gap-2 w-full">
                                    <p class="text-lg font-semibold flex gap-1">
                                        Posisi<i class="bx bxs-star text-xs text-red-600"></i>
                                    </p>
                                    <select name="riwayat_jabatan[][posisi]"
                                        class="py-2 px-3 rounded-lg border-gray-300 focus:outline-none focus:border-blue-500 shadow-sm text-gray-500">
                                        <option value="" disabled selected>Pilih posisi jabatan</option>
                                        <option value="frontend">Frontend</option>
                                        <option value="backend">Backend</option>
                                        <option value="fullstack">Fullstack</option>
                                    </select>
                                </div>
                                <div class="flex flex-col gap-2 w-full">
                                    <p class="text-lg font-semibold flex gap-1">
                                        Divisi<i class="bx bxs-star text-xs text-red-600"></i>
                                    </p>
                                    <select name="riwayat_jabatan[][divisi]"
                                        class="py-2 px-3 rounded-lg border-gray-300 focus:outline-none focus:border-blue-500 shadow-sm text-gray-500">
                                        <option value="" disabled selected>Pilih divisi</option>
                                        <option value="frontend">Frontend</option>
                                        <option value="backend">Backend</option>
                                        <option value="fullstack">Fullstack</option>
                                    </select>
                                </div>
                                <div class="flex flex-col gap-2 w-full">
                                    <p class="text-lg font-semibold flex gap-1">
                                        Sub divisi<i class="bx bxs-star text-xs text-red-600"></i>
                                    </p>
                                    <select name="riwayat_jabatan[][sub_divisi]"
                                        class="py-2 px-3 rounded-lg border-gray-300 focus:outline-none focus:border-blue-500 shadow-sm text-gray-500">
                                        <option value="" disabled selected>Pilih subdivisi</option>
                                        <option value="frontend">Frontend</option>
                                        <option value="backend">Backend</option>
                                        <option value="fullstack">Fullstack</option>
                                    </select>
                                </div>
                                <div class="flex flex-col gap-2 w-full">
                                    <p class="text-lg font-semibold flex gap-1">
                                        Awal Menjabat<i class="bx bxs-star text-xs text-red-600"></i>
                                    </p>
                                    <div class="flex items-center w-full">
                                        <div class="rounded-lg border border-gray-300 focus:outline-none focus:border-transparent focus:ring-0 shadow-sm flex justify-between w-full mr-3">
                                            <input type="date" name="riwayat_jabatan[][awal_menjabat]"
                                                class="border-none rounded-lg text-gray-500 w-full" />
                                        </div>
                                        <button type="button" class="btn-delete-riwayat">
                                            <i class="bx bxs-trash-alt text-lg px-2 py-1 border border-red-700 text-red-700 rounded-lg"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-2 w-full">
                                    <p class="text-lg font-semibold flex gap-1">
                                        Akhir Menjabat<i class="bx bxs-star text-xs text-red-600"></i>
                                    </p>
                                    <div class="rounded-lg border border-gray-300 focus:outline-none focus:border-transparent focus:ring-0 shadow-sm flex justify-between">
                                        <input type="date" name="riwayat_jabatan[][akhir_menjabat]"
                                            class="border-none rounded-lg text-gray-500 w-full" />
                                    </div>
                                </div>
                            </div>
                            <div class="w-1/6"></div>
                        </div>
                    </template>
                    <div class="py-2 flex items-center justify-center border border-dashed rounded-lg border-blue-500 text-blue-500 cursor-pointer" id="addRiwayatButton">
                        <h1>
                            <i class="bx bx-plus-circle"></i>
                            Tambahkan Riwayat Jabatan
                        </h1>
                    </div>
                    <div class="flex justify-end pt-5 border-t-2 border-t-gray-400 mt-8">
                        <button type="submit"
                            class="flex items-center gap-2 bg-blue-500 text-white rounded-xl px-3 py-2 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-300">
                            Unggah Data
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection
