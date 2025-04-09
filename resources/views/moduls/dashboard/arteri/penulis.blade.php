@extends('moduls.dashboard.layouts.main', [
    'title' => 'Dashboard Arteri',
    'active' => 'Dashboard',
    'modul' => 'Penulis',
])

@section('content-dashboard')
    <section class="flex w-full">
        <div class="flex flex-col w-full">
            <div class="w-full">
                <div class="py-4 md:pt-12 md:pb-7">
                    <div>
                        <p tabindex="0"
                            class="focus:outline-none text-base sm:text-lg md:text-2xl lg:text-4xl font-bold leading-normal text-gray-800 mb-2">
                            Data Penulis</p>
                        <p class="w-2/4 text-disabled">Menampilkan daftar penulis, memungkinkan admin untuk mengelola
                            kontributor dan kontennya.</p>
                        <button onclick="bukaModalTambahPenulis()" type="button"
                            class="focus:ring-2 focus:ring-offset-2 mt-8 sm:mt-3 inline-flex items-start justify-start px-6 py-3 text-white bg-primary hover:bg-primary focus:outline-none rounded-lg">
                            <p class="font-medium leading-none text-dark">Tambah Penulis</p>
                        </button>
                    </div>
                </div>
                <div class="bg-white py-4 md:py-7 px-4 md:px-8 xl:px-10 rounded-md">
                    <div class="mt-4 overflow-x-auto">
                        <table id="example" class="display w-full" style="overflow-x: scroll;">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Profil</th>
                                    <th class="text-left">Nama Penulis</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($authors as $index => $author)
                                    <tr class="data-consume">
                                        <td class="text-center font-bold">{{ $index + 1 }}.</td>
                                        <td class="flex justify-center">
                                            <img src="{{ asset('storage/' . $author->profil_image) }}" alt="Foto Profil"
                                                class="w-12 h-12 rounded-full" />
                                        </td>
                                        <td class="break-words whitespace-normal font-semibold" style="min-width: 300px">
                                            {{ $author->name_author }}</td>
                                        <td class="px-6 py-4 whitespace-no-wrap text-center">
                                            <div class="flex justify-center items-center gap-2">
                                                <!-- Tombol Edit -->
                                                <button
                                                    onclick="bukaModalEditPenulis({{ $author->id }}, '{{ $author->name_author }}', '{{ asset('storage/' . $author->profil_image) }}')"
                                                    type="button"
                                                    class="focus:ring-2 focus:ring-offset-2 inline-flex items-center justify-center p-2 focus:outline-none rounded hover:bg-yellow-700"
                                                    style="background-color: #E9B306;">
                                                    <i class='bx bx-edit-alt text-white'></i>
                                                </button>
                                                <button onclick="bukaModalHapus({{ $author->id }})" type="button"
                                                    class="focus:ring-2 focus:ring-offset-2 inline-flex items-center justify-center p-2 focus:outline-none rounded hover:bg-red-700"
                                                    style="background-color: #EF4444;">
                                                    <i class='bx bx-trash-alt text-white'></i>
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
    <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
        id="tambah-penulis-modal">
        <div class="relative my-5 mx-auto justify-center items-center" style="width: 400px">
            <!--content-->
            <div
                class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                <!--header-->
                <div class="flex flex-col items-center justify-center p-5">
                    <div class="flex items-center justify-center  mb-4">
                        <img src="{{ asset('assets/images/svg-icon/penulis-icon.png') }}" class="w-8 h-8 mr-2" />
                        <span class="font-semibold text-lg">Tambah Penulis</span>
                    </div>
                </div>
                <!--body-->
                <div class="relative px-6 pb-6 flex-auto">
                    <form method="POST" action="{{ route('dashboard.article.addpenulis') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-6">
                            <div class="flex justify-center mb-4">
                                <div class="relative">
                                    <div
                                        class="w-24 h-24 rounded-full bg-gray-200 flex items-center justify-center overflow-hidden">
                                        <img src="{{ asset('assets/images/svg-icon/user.svg') }}" alt="Avatar"
                                            class="w-full h-full object-cover" id="preview-avatar">
                                    </div>
                                    <label for="foto_profil"
                                        class="absolute bottom-0 right-0 bg-primary text-white p-1 rounded-full cursor-pointer">
                                        <i class='bx bx-pencil'></i>
                                    </label>
                                    <input type="file" id="foto_profil" name="profil_image" class="hidden"
                                        accept="image/*" onchange="previewImage(event)">
                                </div>
                            </div>

                            <label class="block text-gray-700 text-sm font-medium mb-2" for="nama_penulis">
                                Nama Penulis
                            </label>
                            <input
                                class="shadow appearance-none border rounded-lg w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-gray-100"
                                id="nama_penulis" type="text" name="name_author" placeholder="Masukkan nama penulis"
                                required>
                        </div>

                        <div class="flex items-center justify-between gap-3">
                            <button type="submit" name="submit"
                                class="w-1/2 py-3 px-4 bg-primary hover:bg-primary-dark text-white font-medium rounded-lg focus:outline-none">
                                Simpan
                            </button>
                            <button type="button" onclick="tutupModalTambahPenulis()"
                                class="w-1/2 py-3 px-4 bg-white hover:bg-gray-100 text-gray-800 font-medium rounded-lg border border-gray-300 focus:outline-none">
                                Tidak
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="tambah-penulis-backdrop"></div>


    <!-- Modal untuk Edit Penulis -->
    <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
        id="edit-penulis-modal">
        <div class="relative my-5 mx-auto justify-center items-center" style="width: 400px">
            <!--content-->
            <div
                class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                <!--header-->
                <div class="flex flex-col items-center justify-center p-5">
                    <div class="flex items-center justify-center mb-4">
                        <img src="{{ asset('assets/images/svg-icon/penulis-icon.png') }}" class="w-8 h-8 mr-2" />
                        <span class="font-semibold text-lg">Edit Penulis</span>
                    </div>
                </div>
                <!--body-->
                <div class="relative px-6 pb-6 flex-auto">
                    <form method="POST" action="" enctype="multipart/form-data" id="edit-penulis-form">
                        @csrf
                        @method('PUT')
                        <div class="mb-6">
                            <div class="flex justify-center mb-4">
                                <div class="relative">
                                    <div
                                        class="w-24 h-24 rounded-full bg-gray-200 flex items-center justify-center overflow-hidden">
                                        <img src="{{ asset('assets/images/svg-icon/user.svg') }}" alt="Avatar"
                                            class="w-full h-full object-cover" id="edit-preview-avatar">
                                    </div>
                                    <label for="edit_foto_profil"
                                        class="absolute bottom-0 right-0 bg-primary text-white p-1 rounded-full cursor-pointer">
                                        <i class='bx bx-pencil'></i>
                                    </label>
                                    <input type="file" id="edit_foto_profil" name="profil_image" class="hidden"
                                        accept="image/*" onchange="previewEditImage(event)">
                                </div>
                            </div>

                            <label class="block text-gray-700 text-sm font-medium mb-2" for="edit_nama_penulis">
                                Nama Penulis
                            </label>
                            <input
                                class="shadow appearance-none border rounded-lg w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-gray-100"
                                id="edit_nama_penulis" type="text" name="name_author"
                                placeholder="Masukkan nama penulis" required>
                        </div>

                        <div class="flex items-center justify-between gap-3">
                            <button type="submit" name="submit"
                                class="w-1/2 py-3 px-4 bg-primary hover:bg-primary-dark text-white font-medium rounded-lg focus:outline-none">
                                Simpan
                            </button>
                            <button type="button" onclick="tutupModalEditPenulis()"
                                class="w-1/2 py-3 px-4 bg-white hover:bg-gray-100 text-gray-800 font-medium rounded-lg border border-gray-300 focus:outline-none">
                                Tidak
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="edit-penulis-backdrop"></div>

    <!-- Modal untuk Konfirmasi Hapus -->
    <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
        id="hapus-modal">
        <div class="relative my-5 mx-auto justify-center items-center" style="width: 500px">
            <!--content-->
            <div
                class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                <!--body-->
                <div class="relative p-5 flex-auto">
                    <div class="flex flex-col items-center gap-1">
                        <img class="w-16" src="{{ asset('assets/images/warning.png') }}" />
                        <p class="pt-5">Apakah Anda yakin ingin menghapus penulis ini?</p>
                        <!--footer-->
                        <form method="POST" action="" id="delete-penulis-form"
                            class="flex items-center justify-center pt-7 rounded-b gap-5">
                            @csrf
                            @method('DELETE')
                            <input type="hidden" name="penulis_id" id="delete_penulis_id" value="">
                            <button type="submit" name="submit"
                                class="inline-flex px-6 py-3 bg-primary hover:bg-primary focus:outline-none rounded">
                                <p class="text-base font-semibold leading-none text-white">
                                    Ya</p>
                            </button>
                            <button
                                class="background-transparent font-bold px-6 py-2 text-base outline-none focus:outline-none border border-black rounded"
                                type="button" onclick="tutupModalHapus()">
                                Tidak
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="hapus-modal-backdrop"></div>

    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            // Pastikan DOM sudah dimuat sepenuhnya
            console.log('DOM fully loaded');
        });

        // Fungsi untuk preview gambar
        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function() {
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
            form.action = `/dashboard/admin/article/penulis/${penulisId}`;

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
            reader.onload = function() {
                var output = document.getElementById('edit-preview-avatar');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        }

        function bukaModalEditPenulis(penulisId, penulisName, penulisImageUrl) {
            const form = document.getElementById('edit-penulis-form');
            const namaPenulisInput = document.getElementById('edit_nama_penulis');
            const avatarPreview = document.getElementById('edit-preview-avatar');

            form.action = `/dashboard/admin/article/penulisUpdate/${penulisId}`;
            namaPenulisInput.value = penulisName;
            avatarPreview.src = penulisImageUrl || "{{ asset('assets/images/svg-icon/user.svg') }}";

            document.getElementById('edit-penulis-modal').classList.remove('hidden');
            document.getElementById('edit-penulis-backdrop').classList.remove('hidden');
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
