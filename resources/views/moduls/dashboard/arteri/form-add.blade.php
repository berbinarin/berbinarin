@extends('moduls.dashboard.layouts.main', [
    'title' => 'Dashboard Arteri',
    'active' => 'Dashboard',
    'modul' => 'Postingan',
])

@section('content-dashboard')
    <form action="{{ route('dashboard.article.store') }}" enctype="multipart/form-data" method="post">
        @csrf
        <section class="flex w-full h-full">
            <div class="flex flex-col w-full h-full">
                <div class="py-4 md:pt-12 md:pb-7">
                    <div>
                        <p class="font-bold text-red-700">( Fitur save tidak ada, sebaiknya jangan pindah halaman saat
                            pembuatan
                            berlangsung ! )</p>
                        <a>
                            <button onclick="toggleModal('modal-id')" type="button"
                                class="focus:ring-2 focus:ring-offset-2  mt-8 sm:mt-3 inline-flex items-start justify-start px-6 py-3 text-white bg-primary hover:bg-primary focus:outline-none rounded-lg">
                                <p class=" font-medium leading-none text-dark">Upload</p>
                            </button>
                        </a>
                    </div>
                </div>
                <div>
                    <textarea id="my-editor" name="content" rows="10" cols="80">
                <!-- Contoh konten awal -->
                <h2>Lorem ipsum dolor sit amet consectetur. Nulla erat commodo viverra in non sagittis cum. Id aliquam scelerisque lorem ut elementum orci</h2>
                <p>Isi artikel di sini...</p>
            </textarea>
                </div>
            </div>
        </section>
        <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
            id="modal-id">
            <div class="relative my-5 mx-48 justify-center items-center" style="width: 750px">
                <!--content-->
                <div
                    class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                    <!--header-->
                    <div class="flex items-start justify-between p-5 border-b border-solid border-blueGray-200 rounded-t">
                        <h3 class="text-3xl font-semibold">
                            Tambah Postingan
                        </h3>
                    </div>
                    <!--body-->
                    <div class="relative p-5 flex-auto">
                        <div class="flex flex-col gap-1">
                            <div class="flex flex-col gap-7">
                                <div class="col-span-3">
                                    <label for="name"
                                        class="block text-lg font-semibold leading-6 text-gray-500 ">Judul</label>
                                    <div class="mt-2">
                                        <input type="text" name="title" id="fullname"
                                            class="block w-full rounded-md border-0 py-3 px-3 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary text-base sm:leading-6">
                                    </div>
                                </div>
                                <div class="col-span-3">
                                    <label for="sampul"
                                        class="block text-lg font-semibold leading-6 text-gray-500 ">Unggah
                                        Sampul</label>
                                    <label for="file-upload"
                                        class="flex flex-col items-center justify-center w-full h-48 rounded-md
                                        border-2 mt-2
                                        cursor-pointer hover:bg-gray-100 transition-colors duration-200">
                                        <svg id="upload-icon" class="w-12 h-12 text-gray-400 mb-2" fill="none"
                                            stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M3 16.5v-1.75a2.75 2.75 0 012.75-2.75h3.75A2.75 2.75 0 0112 12.75v1.75h-4.5a1.25 1.25 0 000 2.5h4.5v1.75a2.75 2.75 0 01-2.75 2.75H5.75A2.75 2.75 0 013 19.25v-1.75zm18 1.75v-1.75a2.75 2.75 0 00-2.75-2.75h-3.75A2.75 2.75 0 0012 16.5v1.75h4.5a1.25 1.25 0 010 2.5H12v1.75a2.75 2.75 0 002.75 2.75h3.75A2.75 2.75 0 0021 22.25v-1.75z" />
                                        </svg>

                                        <span id="uploadText" class="font-semibold text-gray-500 underline">
                                            Click to Upload or Drag & Drop
                                        </span>
                                        <span id="sizeFile" class="text-xs text-gray-400">Max. File Size: 5MB</span>

                                        <input id="file-upload" name="cover_image" type="file" class="hidden"
                                            onchange="showFilename()" />
                                    </label>
                                </div>
                                <div class="grid grid-cols-6 gap-4">
                                    <div class="col-span-3">
                                        <label for="penulis"
                                            class="block text-lg font-semibold leading-6 text-gray-500 ">Penulis</label>
                                        <div class="mt-2">
                                            <select id="author_id" name="author_id" required
                                                class="block w-full rounded-md border-0 py-3 px-3 text-black shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-primary text-base sm:leading-6">
                                                <option value="" disabled selected>Pilih Penulis</option>
                                                @foreach ($authors as $author)
                                                    <option value="{{ $author->id }}">{{ $author->name_author }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-span-3">
                                        <label for="category_id"
                                            class="block text-lg font-semibold leading-6 text-gray-500 ">Kategori
                                        </label>
                                        <div class="mt-2">
                                            <select id="category_id" name="category_id" required
                                                class="block w-full rounded-md border-0 py-3 px-3 text-black shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-primary text-base sm:leading-6">
                                                <option value="" disabled selected>Pilih Kategori</option>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name_category }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--footer-->
                            <div class="flex items-center justify-center pt-7 rounded-b gap-5">
                                <button type="submit" name="submit"
                                    class="inline-flex px-6 py-3 bg-primary hover:bg-primary focus:outline-none rounded">
                                    <p class="text-base font-semibold leading-none text-white">
                                        Posting</p>
                                </button>
                                <button
                                    class="background-transparent font-bold  px-6 py-2 text-base outline-none focus:outline-none border border-black rounded"
                                    type="button" onclick="toggleModal('modal-id')">
                                    Kembali Edit
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-id-backdrop">
        </div>

        <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
            id="modal-id">
        </div>
        
        <!-- Modal untuk memasukkan URL Google Drive -->
        <div id="gdrive-modal" class="hidden fixed inset-0 z-50 bg-black bg-opacity-50">
            <div class="flex items-center justify-center min-h-screen">
                <div class="bg-white rounded-lg shadow-lg w-96 p-6">
                    <h2 class="text-lg font-semibold mb-4 text-gray-800">Masukkan URL Google Drive</h2>
                    <input id="gdrive-url" type="text" placeholder="Masukkan URL Google Drive"
                        class="w-full border border-gray-300 rounded-lg p-2 mb-4 focus:outline-none focus:ring-2 focus:ring-primary">
                    <div id="gdrive-error" class="hidden text-red-500 text-sm mb-4"></div>
                    <div class="flex justify-end gap-2">
                        <button id="gdrive-cancel" type="button"
                                class="px-4 py-2 bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400 focus:outline-none">
                            Batal
                        </button>
                        <button id="gdrive-insert" type="button"
                                class="px-4 py-2 bg-primary text-white rounded-lg hover:bg-primary-dark focus:outline-none">
                            Tambahkan
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <script>
        function showFilename() {
            const input = document.getElementById('file-upload');
            const uploadText = document.getElementById('uploadText');
            const uploadIcon = document.getElementById('upload-icon');
            const idSize = document.getElementById('sizeFile');

            if (input.files && input.files.length > 0) {
                uploadText.textContent = input.files[0].name;
                uploadIcon.classList.add('hidden');
                idSize.classList.add('hidden');
            } else {
                uploadText.textContent = "Click to Upload or Drag & Drop";
                uploadIcon.classList.remove('hidden');
                idSize.classList.remove('hidden');
            }
        }

        function toggleModal(modalId) {
            var modal = document.getElementById(modalId);
            if (modal.style.display === "none" || modal.style.display === "") {
                modal.style.display = "block";
            } else {
                modal.style.display = "none";
            }
        }
    </script>

    <script type="text/javascript">
        function toggleModal(modalID) {
            document.getElementById(modalID).classList.toggle("hidden");
            document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
            document.getElementById(modalID).classList.toggle("flex");
            document.getElementById(modalID + "-backdrop").classList.toggle("flex");
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/7y3v8c74x8ldew9lmmmw5hxivw4c8b24gw9xzlljbol4bt6r/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>

    {{-- Jangan lupa ini api-key TinyMCE ganti ke akun berbinar punya + tambahin Berbinar.in di menu Approved Domains --}}

    <script>
            tinymce.init({
            selector: '#my-editor',
            height: 500,
            plugins: 'lists link image table code help wordcount fontselect fontsizeselect',
            toolbar: 'undo redo | formatselect | ' +
                'fontselect fontsizeselect | ' +
                'bold italic underline | forecolor backcolor | ' +
                'alignleft aligncenter alignright alignjustify | ' +
                'bullist numlist outdent indent | ' +
                'image gdrive link table | ' +
                'removeformat | help',
            font_size_formats: '8pt 10pt 12pt 14pt 18pt 24pt 36pt 48pt 72pt',
            // Custom google drive image 
            setup: function (editor) {
                editor.ui.registry.addButton('gdrive', {
                    text: 'GDrive Image',
                    tooltip: 'Insert Google Drive Image',
                    onAction: function () {
                        // Tampilkan modal
                        const modal = document.getElementById('gdrive-modal');
                        const input = document.getElementById('gdrive-url');
                        const errorContainer = document.getElementById('gdrive-error');
                        const cancelButton = document.getElementById('gdrive-cancel');
                        const insertButton = document.getElementById('gdrive-insert');

                        modal.classList.remove('hidden'); // Tampilkan modal
                        input.value = ''; // Reset input
                        errorContainer.classList.add('hidden'); // Sembunyikan pesan kesalahan

                        // Tombol batal
                        cancelButton.onclick = function () {
                            modal.classList.add('hidden'); // Sembunyikan modal
                        };

                        // Tombol tambahkan
                        insertButton.onclick = function () {
                            const driveUrl = input.value.trim();
                            if (!driveUrl) {
                                // Tampilkan pesan kesalahan jika URL kosong
                                errorContainer.textContent = "URL tidak boleh kosong.";
                                errorContainer.classList.remove('hidden');
                                return;
                            }

                            // Ekstrak fileId dari URL Google Drive
                            let fileId = '';
                            if (driveUrl.includes('/file/d/')) {
                                fileId = driveUrl.split('/file/d/')[1].split('/')[0];
                            } else if (driveUrl.includes('id=')) {
                                fileId = driveUrl.split('id=')[1].split('&')[0];
                            } else if (driveUrl.match(/[-\w]{25,}/)) {
                                fileId = driveUrl.match(/[-\w]{25,}/)[0];
                            }

                            if (fileId) {
                                // Format URL untuk embed
                                const directUrl = 'https://lh3.googleusercontent.com/d/' + fileId + '?t=' + new Date().getTime();
                                editor.insertContent('<img src="' + directUrl + '" alt="Google Drive Image" />');
                                modal.classList.add('hidden'); // Sembunyikan modal
                            } else {
                                // Tampilkan pesan kesalahan jika format URL tidak valid
                                errorContainer.textContent = "Format URL Google Drive tidak valid.";
                                errorContainer.classList.remove('hidden');
                            }
                        };
                    }
                });
            }
        });
        </script>
@endsection
