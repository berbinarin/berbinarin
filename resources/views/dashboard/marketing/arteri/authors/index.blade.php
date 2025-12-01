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
                        <p tabindex="0" class="mb-2 text-base font-bold leading-normal text-gray-800 focus:outline-none sm:text-lg md:text-2xl lg:text-4xl">Data Penulis</p>
                        <p class="w-full text-disabled">Menampilkan daftar penulis, memungkinkan admin untuk mengelola kontributor dan kontennya.</p>
                        <button onclick="bukaModalTambahPenulis()" type="button" class="mt-8 inline-flex items-start justify-start rounded-lg bg-primary px-6 py-3 text-white hover:bg-primary focus:outline-none focus:ring-2 focus:ring-offset-2 sm:mt-3">
                            <p class="text-dark font-medium leading-none">Tambah Penulis</p>
                        </button>
                    </div>
                </div>
                <div class="rounded-lg shadow-md bg-white px-4 py-4 md:px-8 md:py-7 xl:px-10 mb-7">
                    <div class="mt-4 overflow-x-auto">
                        <table id="example" class="display w-full" style="overflow-x: scroll">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Profil</th>
                                    <th class="text-left">Nama Penulis</th>
                                    <th>Jumlah Artikel</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($authors as $index => $author)
                                    <tr class="data-consume">
                                        <td class="text-center font-bold">{{ $index + 1 }}.</td>
                                        <td class="flex justify-center">
                                            <img src="{{ $author->profil_image ? asset('image/artikel/penulis/' . $author->profil_image) : asset('assets/images/landing/arteri/dummy.webp') }}" alt="Foto Penulis" class="h-12 w-12 rounded-full" />
                                        </td>
                                        <td class="whitespace-normal break-words text-left font-semibold" style="min-width: 300px">{{ $author->name_author }}</td>
                                        <td class="whitespace-normal break-words text-center font-semibold" style="min-width: 300px">{{ $author->articles_count }}</td>
                                        <td class="whitespace-no-wrap px-6 py-4 text-center">
                                            <div class="flex items-center justify-center gap-2">
                                                <!-- Tombol Edit -->
                                                <button onclick="bukaModalEditPenulis({{ $author->id }}, '{{ $author->name_author }}', '{{ asset('image/artikel/penulis/' . $author->profil_image) }}')" type="button" class="inline-flex items-center justify-center rounded p-2 hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-offset-2" style="background-color: #e9b306">
                                                    <i class="bx bxs-edit-alt text-white"></i>
                                                </button>
                                                <button onclick="bukaModalHapus({{ $author->id }})" type="button" class="inline-flex items-center justify-center rounded p-2 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2" style="background-color: #ef4444">
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

    <!-- Modal untuk Tambah Penulis (Desain Baru) -->
    <div class="fixed inset-0 z-50 hidden items-center justify-center overflow-y-auto overflow-x-hidden outline-none focus:outline-none" id="tambah-penulis-modal">
        <div class="relative mx-auto my-5 items-center justify-center" style="width: 400px">
            <!--content-->
            <div class="relative flex w-full flex-col rounded-lg border-0 bg-white shadow-lg outline-none focus:outline-none">
                <!--header-->
                <div class="flex flex-col items-center justify-center p-5">
                    <div class="mb-4 flex items-center justify-center">
                        <img src="{{ asset("assets/images/dashboard/svg-icon/penulis-icon.webp") }}" class="mr-2 h-8 w-8" />
                        <span class="text-lg font-semibold">Tambah Penulis</span>
                    </div>
                </div>
                <!--body-->
                <div class="relative flex-auto px-6 pb-6">
                    <form method="POST" action="{{ route("dashboard.arteri.authors.store") }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-6">
                            <div class="mb-4 flex justify-center">
                                <div class="relative">
                                    <div class="flex h-24 w-24 items-center justify-center overflow-hidden rounded-full bg-gray-200">
                                        <img src="{{ asset("assets/images/dashboard/svg-icon/user.webp") }}" alt="Avatar" class="h-full w-full object-cover" id="preview-avatar" />
                                    </div>
                                    <label for="foto_profil" class="absolute bottom-0 right-0 cursor-pointer rounded-full bg-primary p-1 text-white">
                                        <i class="bx bx-pencil"></i>
                                    </label>
                                    <input type="file" id="foto_profil" name="profil_image" class="hidden" accept="image/*" onchange="previewImage(event)" />
                                </div>
                            </div>
                            <div class="mb-2 text-xs text-gray-500 text-center">
                                 <span class="font-semibold">jpeg, jpg, png</span> &bull; Maksimal <span class="font-semibold">1 MB</span>
                            </div>

                            <label class="mb-2 block text-sm font-medium text-gray-700" for="nama_penulis">Nama Penulis</label>
                            <input class="focus:shadow-outline w-full appearance-none rounded-lg border bg-gray-100 px-4 py-3 leading-tight text-gray-700 shadow focus:outline-none" id="nama_penulis" type="text" name="name_author" placeholder="Masukkan nama penulis" required />
                        </div>


                        <div class="flex items-center justify-between gap-3">
                            <button type="button" onclick="tutupModalTambahPenulis()" class="w-1/2 rounded-lg border border-gray-300 bg-white px-4 py-3 font-medium text-gray-800 hover:bg-gray-100 focus:outline-none">Batal</button>
                            <button type="submit" name="submit" class="hover:bg-primary-dark w-1/2 rounded-lg bg-primary px-4 py-3 font-medium text-white focus:outline-none">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="fixed inset-0 z-40 hidden bg-black opacity-25" id="tambah-penulis-backdrop"></div>

    <!-- Modal untuk Edit Penulis -->
    <div class="fixed inset-0 z-50 hidden items-center justify-center overflow-y-auto overflow-x-hidden outline-none focus:outline-none" id="edit-penulis-modal">
        <div class="relative mx-auto my-5 items-center justify-center" style="width: 400px">
            <!--content-->
            <div class="relative flex w-full flex-col rounded-lg border-0 bg-white shadow-lg outline-none focus:outline-none">
                <!--header-->
                <div class="flex flex-col items-center justify-center p-5">
                    <div class="mb-4 flex items-center justify-center">
                        <img src="{{ asset("assets/images/dashboard/svg-icon/penulis-icon.webp") }}" class="mr-2 h-8 w-8" />
                        <span class="text-lg font-semibold">Ubah Penulis</span>
                    </div>
                </div>
                <!--body-->
                <div class="relative flex-auto px-6 pb-6">
                    <form method="POST" action="" enctype="multipart/form-data" id="edit-penulis-form">
                        @csrf
                        @method("PUT")
                        <div class="mb-6">
                            <div class="mb-4 flex justify-center">
                                <div class="relative">
                                    <div class="flex h-24 w-24 items-center justify-center overflow-hidden rounded-full bg-gray-200">
                                        <img src="{{ asset("assets/images/dashboard/svg-icon/user.webp") }}" alt="Avatar" class="h-full w-full object-cover" id="edit-preview-avatar" />
                                    </div>
                                    <label for="edit_foto_profil" class="absolute bottom-0 right-0 cursor-pointer rounded-full bg-primary p-1 text-white">
                                        <i class="bx bx-pencil"></i>
                                    </label>
                                    <input type="file" id="edit_foto_profil" name="profil_image" class="hidden" accept="image/*" onchange="previewEditImage(event)" />
                                </div>
                            </div>
                            <div class="mb-2 text-xs text-gray-500 text-center">
                                 <span class="font-semibold">jpeg, jpg, png</span> &bull; Maksimal <span class="font-semibold">1 MB</span>
                            </div>
                            <label class="mb-2 block text-sm font-medium text-gray-700" for="edit_nama_penulis">Nama Penulis</label>
                            <input class="focus:shadow-outline w-full appearance-none rounded-lg border bg-gray-100 px-4 py-3 leading-tight text-gray-700 shadow focus:outline-none" id="edit_nama_penulis" type="text" name="name_author" placeholder="Masukkan nama penulis" required />
                        </div>


                        <div class="flex items-center justify-between gap-3">
                            <button type="button" onclick="tutupModalEditPenulis()" class="w-1/2 rounded-lg border border-gray-300 bg-white px-4 py-3 font-medium text-gray-800 hover:bg-gray-100 focus:outline-none">Batal</button>
                            <button type="submit" name="submit" class="hover:bg-primary-dark w-1/2 rounded-lg bg-primary px-4 py-3 font-medium text-white focus:outline-none">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="fixed inset-0 z-40 hidden bg-black opacity-25" id="edit-penulis-backdrop"></div>

    <!-- Modal untuk Konfirmasi Hapus -->
    <div class="fixed inset-0 z-50 hidden items-center justify-center overflow-y-auto overflow-x-hidden outline-none focus:outline-none" id="hapus-modal">
        <div class="relative mx-auto my-5 items-center justify-center" style="width: 500px">
            <!--content-->
            <div class="relative flex w-full flex-col rounded-lg border-0 bg-white shadow-lg outline-none focus:outline-none">
                <!--body-->
                <div class="relative flex-auto p-5">
                    <div class="flex flex-col items-center gap-1">
                        <img class="w-16" src="{{ asset("assets/images/dashboard/arteri/warning.webp") }}" />
                        <p class="pt-5">Apakah Anda yakin ingin menghapus penulis ini?</p>
                        <!--footer-->
                        <form method="POST" action="" id="delete-penulis-form" class="flex items-center justify-center gap-5 rounded-b pt-7">
                            @csrf
                            @method("DELETE")
                            <input type="hidden" name="penulis_id" id="delete_penulis_id" value="" />
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

        // Fungsi untuk preview gambar
        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function () {
                var output = document.getElementById('preview-avatar');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        }

        // Fungsi untuk modal Tambah Penulis
        function bukaModalTambahPenulis() {
            var modal = document.getElementById('tambah-penulis-modal');
            var backdrop = document.getElementById('tambah-penulis-backdrop');

            if (modal && backdrop) {
                modal.classList.remove('hidden');
                modal.classList.add('flex');
                backdrop.classList.remove('hidden');
                backdrop.classList.add('flex');
            } else {
                console.error('Modal tambah penulis atau backdrop tidak ditemukan');
            }
        }

        function tutupModalTambahPenulis() {
            var modal = document.getElementById('tambah-penulis-modal');
            var backdrop = document.getElementById('tambah-penulis-backdrop');

            if (modal && backdrop) {
                modal.classList.add('hidden');
                modal.classList.remove('flex');
                backdrop.classList.add('hidden');
                backdrop.classList.remove('flex');
            } else {
                console.error('Modal tambah penulis atau backdrop tidak ditemukan');
            }
        }

        // Fungsi untuk modal Hapus
        function bukaModalHapus(penulisId) {
            const form = document.getElementById('delete-penulis-form');

            let baseUrl = '{{ route("dashboard.arteri.authors.destroy", ":penulisIdPlaceholder") }}';

            // Ganti placeholder dengan nilai penulisId yang sebenarnya
            form.action = baseUrl.replace(':penulisIdPlaceholder', penulisId);

            // Tampilkan modal hapus
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

        // Fungsi untuk preview gambar di modal Edit Penulis
        function previewEditImage(event) {
            var reader = new FileReader();
            reader.onload = function () {
                var output = document.getElementById('edit-preview-avatar');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        }

        function bukaModalEditPenulis(penulisId, penulisName, penulisImageUrl) {
            const form = document.getElementById('edit-penulis-form');
            const namaPenulisInput = document.getElementById('edit_nama_penulis');
            const avatarPreview = document.getElementById('edit-preview-avatar');

            let baseUrl = '{{ route("dashboard.arteri.authors.update", ":penulisIdPlaceholder") }}';
            form.action = baseUrl.replace(':penulisIdPlaceholder', penulisId);
            namaPenulisInput.value = penulisName;
            avatarPreview.src = penulisImageUrl || '{{ asset("assets/images/dashboard/svg-icon/user.webp") }}';

            document.getElementById('edit-penulis-modal').classList.remove('hidden');
            document.getElementById('edit-penulis-modal').classList.add('flex');
            document.getElementById('edit-penulis-backdrop').classList.remove('hidden');
            document.getElementById('edit-penulis-backdrop').classList.add('flex');
        }

        // Fungsi untuk menutup modal Edit Penulis
        function tutupModalEditPenulis() {
            var modal = document.getElementById('edit-penulis-modal');
            var backdrop = document.getElementById('edit-penulis-backdrop');

            modal.classList.add('hidden');
            modal.classList.remove('flex');
            backdrop.classList.add('hidden');
            backdrop.classList.remove('flex');
        }
    </script>
@endsection
