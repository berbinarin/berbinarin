@extends(
    "dashboard.layouts.app",
    [
        "title" => "Dashboard Arteri",
    ]
)
@section("content")
    <section class="flex w-full">
        <div class="flex w-full flex-col">
            <div class="w-full">
                <div class="py-4 md:pb-7 md:pt-12">
                    <div>
                        <p tabindex="0" class="mb-2 text-base font-bold leading-normal text-gray-800 focus:outline-none sm:text-lg md:text-2xl lg:text-4xl">Kategori</p>
                        <p class="w-2/4 text-disabled">Halaman yang menampilkan dan mengelola daftar kategori artikel.</p>
                        <button onclick="bukaModalTambah()" type="button" class="mt-8 inline-flex items-start justify-start rounded-lg bg-primary px-6 py-3 text-white hover:bg-primary focus:outline-none focus:ring-2 focus:ring-offset-2 sm:mt-3">
                            <p class="text-dark font-medium leading-none">Tambah Kategori</p>
                        </button>
                    </div>
                </div>
                <div class="rounded-lg shadow-md bg-white px-4 py-4 md:px-8 md:py-7 xl:px-10 mb-7">
                    <div class="mt-4 overflow-x-auto">
                        <table id="example" class="display w-full" style="overflow-x: scroll">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th class="text-left">Nama Kategori</th>
                                    <th>Jumlah Artikel</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $index => $category)
                                    <tr class="data-consume">
                                        <td class="text-center font-bold">{{ $index + 1 }}.</td>
                                        <td class="whitespace-normal break-words" style="max-width: 300px">{{ $category->name_category }}</td>
                                        <td class="text-center">{{ $category->articles_count }}</td>
                                        <td class="whitespace-no-wrap px-6 py-4 text-center">
                                            <div class="flex items-center justify-center gap-2">
                                                <button onclick="bukaModalEdit({{ $category->id }}, '{{ $category->name_category }}')" type="button" class="inline-flex items-center justify-center rounded p-2 hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-offset-2" style="background-color: #e9b306">
                                                    <i class="bx bxs-edit-alt text-white"></i>
                                                </button>
                                                <button onclick="bukaModalHapus({{ $category->id }})" type="button" class="inline-flex items-center justify-center rounded p-2 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2" style="background-color: #ef4444">
                                                    <i class="bx bxs-trash-alt text-white"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal untuk Tambah Kategori -->
    <div class="fixed inset-0 z-50 hidden items-center justify-center overflow-y-auto overflow-x-hidden outline-none focus:outline-none" id="tambah-kategori-modal">
        <div class="relative mx-auto my-5 items-center justify-center" style="width: 500px">
            <!--content-->
            <div class="relative flex w-full flex-col rounded-lg border-0 bg-white shadow-lg outline-none focus:outline-none">
                <!--header-->
                <div class="flex items-center justify-between rounded-t border-b border-solid border-gray-300 p-5">
                    <div class="flex justify-center gap-3">
                        <img src="{{ asset("assets/images/dashboard/svg-icon/kategori-icon.png") }}" />
                        <h3 class="text-xl font-semibold">Tambah Kategori</h3>
                    </div>
                    <button class="float-right ml-auto border-0 bg-transparent p-1 text-3xl font-semibold leading-none text-black outline-none focus:outline-none" onclick="tutupModalTambah()">
                        <span class="block h-6 w-6 text-2xl text-black">×</span>
                    </button>
                </div>
                <!--body-->
                <div class="relative flex-auto p-6">
                    <form method="POST" action="{{ route("dashboard.arteri.categories.store") }}">
                        @csrf
                        <div class="mb-4">
                            <label class="mb-2 block text-sm font-bold text-gray-700" for="nama_kategori">Nama Kategori</label>
                            <input class="focus:shadow-outline w-full appearance-none rounded border px-3 py-2 leading-tight text-gray-700 shadow focus:outline-none" id="nama_kategori" type="text" name="name_category" placeholder="Masukkan nama kategori" required />
                        </div>
                        <div class="flex items-center justify-end rounded-b border-t border-solid border-gray-300 pt-6">
                            <button class="background-transparen mr-2 rounded border border-black px-6 py-2 text-base font-bold outline-none focus:outline-none" type="button" onclick="tutupModalTambah()">Batal</button>
                            <button type="submit" name="submit" class="inline-flex rounded border border-primary bg-primary px-6 py-3 hover:bg-primary focus:outline-none">
                                <p class="text-base font-semibold leading-none text-white">Simpan</p>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="fixed inset-0 z-40 hidden bg-black opacity-25" id="tambah-kategori-backdrop"></div>

    <!-- Modal untuk Edit Kategori -->
    <div class="fixed inset-0 z-50 hidden items-center justify-center overflow-y-auto overflow-x-hidden outline-none focus:outline-none" id="edit-kategori-modal">
        <div class="relative mx-auto my-5 items-center justify-center" style="width: 500px">
            <div class="relative flex w-full flex-col rounded-lg border-0 bg-white shadow-lg outline-none focus:outline-none">
                <div class="flex items-center justify-between rounded-t border-b border-solid border-gray-300 p-5">
                    <div class="flex justify-center gap-3">
                        <img src="{{ asset("assets/images/dashboard/svg-icon/kategori-icon.png") }}" />
                        <h3 class="text-xl font-semibold">Edit Kategori</h3>
                    </div>
                    <button class="float-right ml-auto border-0 bg-transparent p-1 text-3xl font-semibold leading-none text-black outline-none focus:outline-none" onclick="tutupModalEdit()">
                        <span class="block h-6 w-6 text-2xl text-black">×</span>
                    </button>
                </div>
                <div class="relative flex-auto p-6">
                    <form method="POST" action="" id="edit-category-form">
                        @csrf
                        @method("PUT")
                        <div class="mb-4">
                            <label class="mb-2 block text-sm font-bold text-gray-700" for="edit_nama_kategori">Nama Kategori</label>
                            <input class="focus:shadow-outline w-full appearance-none rounded border px-3 py-2 leading-tight text-gray-700 shadow focus:outline-none" id="edit_nama_kategori" type="text" name="name_category" placeholder="Masukkan nama kategori" required />
                        </div>
                        <div class="flex items-center justify-end rounded-b border-t border-solid border-gray-300 pt-6">
                            <button class="background-transparent mr-2 rounded border border-black px-6 py-2 text-base font-bold outline-none focus:outline-none" type="button" onclick="tutupModalEdit()">Batal</button>
                            <button type="submit" name="submit" class="inline-flex rounded border border-primary bg-primary px-6 py-3 hover:bg-primary focus:outline-none">
                                <p class="text-base font-semibold leading-none text-white">Simpan</p>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="fixed inset-0 z-40 hidden bg-black opacity-25" id="edit-kategori-backdrop"></div>

    <!-- Modal untuk Konfirmasi Hapus -->
    <div class="fixed inset-0 z-50 hidden items-center justify-center overflow-y-auto overflow-x-hidden outline-none focus:outline-none" id="hapus-modal">
        <div class="relative mx-auto my-5 items-center justify-center" style="width: 500px">
            <!--content-->
            <div class="relative flex w-full flex-col rounded-lg border-0 bg-white shadow-lg outline-none focus:outline-none">
                <!--body-->
                <div class="relative flex-auto p-5">
                    <div class="flex flex-col items-center gap-1">
                        <img class="w-16" src="{{ asset("assets/images/dashboard/arteri/warning.png") }}" />
                        <p class="pt-5">Apakah Anda yakin ingin menghapus item ini?</p>
                        <!--footer-->
                        <form method="POST" action="" id="delete-category-form" class="flex items-center justify-center gap-5 rounded-b pt-7">
                            @csrf
                            @method("DELETE")
                            <input type="hidden" name="category_id" id="delete_category_id" value="" />
                            <button type="submit" name="submit" class="inline-flex rounded bg-primary px-6 py-3 hover:bg-primary focus:outline-none">
                                <p class="text-base font-semibold leading-none text-white">Ya</p>
                            </button>
                            <button class="background-transparent rounded border border-black px-6 py-2 text-base font-bold outline-none focus:outline-none" type="button" onclick="tutupModalHapus()">Tidak</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="fixed inset-0 z-40 hidden bg-black opacity-25" id="hapus-modal-backdrop"></div>

    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function () {
            // Pastikan DOM sudah dimuat sepenuhnya
            console.log('DOM fully loaded');
        });

        // Fungsi untuk modal Tambah Kategori
        function bukaModalTambah() {
            document.getElementById('tambah-kategori-modal').classList.remove('hidden');
            document.getElementById('tambah-kategori-modal').classList.add('flex');
            document.getElementById('tambah-kategori-backdrop').classList.remove('hidden');
            document.getElementById('tambah-kategori-backdrop').classList.add('flex');
        }

        function tutupModalTambah() {
            document.getElementById('tambah-kategori-modal').classList.add('hidden');
            document.getElementById('tambah-kategori-modal').classList.remove('flex');
            document.getElementById('tambah-kategori-backdrop').classList.add('hidden');
            document.getElementById('tambah-kategori-backdrop').classList.remove('flex');
        }

        // Fungsi untuk modal Hapus
        function bukaModalHapus(categoryId) {
            // Jika ada ID kategori, isi input hidden dengan ID tersebut
            const form = document.getElementById('delete-category-form');
            let baseUrl = '{{ route("dashboard.arteri.categories.destroy", ":categoryIdPlaceholder") }}';
            form.action = baseUrl.replace(':categoryIdPlaceholder', categoryId);

            document.getElementById('hapus-modal').classList.remove('hidden');
            document.getElementById('hapus-modal').classList.add('flex');
            document.getElementById('hapus-modal-backdrop').classList.remove('hidden');
            document.getElementById('hapus-modal-backdrop').classList.add('flex');
        }

        function tutupModalHapus() {
            document.getElementById('hapus-modal').classList.add('hidden');
            document.getElementById('hapus-modal').classList.remove('flex');
            document.getElementById('hapus-modal-backdrop').classList.add('hidden');
            document.getElementById('hapus-modal-backdrop').classList.remove('flex');
        }

        function bukaModalEdit(categoryId, categoryName) {
            const form = document.getElementById('edit-category-form');
            const namaKategoriInput = document.getElementById('edit_nama_kategori');

            // Isi form action dan input dengan data kategori

            let baseUrl = '{{ route("dashboard.arteri.categories.update", ":categoryIdPlaceholder") }}';
            form.action = baseUrl.replace(':categoryIdPlaceholder', categoryId);
            namaKategoriInput.value = categoryName;

            // Tampilkan modal
            document.getElementById('edit-kategori-modal').classList.remove('hidden');
            document.getElementById('edit-kategori-modal').classList.add('flex');
            document.getElementById('edit-kategori-backdrop').classList.remove('hidden');
            document.getElementById('edit-kategori-backdrop').classList.add('flex');
        }

        function tutupModalEdit() {
            document.getElementById('edit-kategori-modal').classList.add('hidden');
            document.getElementById('edit-kategori-modal').classList.remove('flex');
            document.getElementById('edit-kategori-backdrop').classList.add('hidden');
            document.getElementById('edit-kategori-backdrop').classList.remove('flex');
        }
    </script>
@endsection
