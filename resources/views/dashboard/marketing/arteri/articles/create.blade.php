@extends(
    "dashboard.layouts.app",
    [
        "title" => "Dashboard Arteri",
    ]
)

@section("content")
    <form action="{{ route("dashboard.arteri.articles.store") }}" enctype="multipart/form-data" method="post">
        @csrf
        <section class="flex h-full w-full">
            <div class="flex h-full w-full flex-col">
                <div class="py-4 md:pb-7 md:pt-12">
                    <div class="">
                        <div class="mb-2 flex items-center gap-2">
                            <a href="{{ route("dashboard.arteri.articles.index") }}">
                                <img src="{{ asset("assets/images/dashboard/svg-icon/dashboard-back.webp") }}" alt="Back Btn" />
                            </a>
                            <p tabindex="0" class="text-base font-bold leading-normal text-gray-800 focus:outline-none sm:text-lg md:text-2xl lg:text-4xl">Tambah Artikel</p>
                        </div>
                        <p class="w-3/4 text-disabled">Fitur ini digunakan untuk tambah data artikel seperti judul, penulis, kategori, tautan, dan sampul artikel.</p>
                    </div>
                </div>

                <!-- Container form -->
                <div class="max-h-[74vh] overflow-y-auto rounded-lg border bg-white p-6 shadow-sm">
                    <div class="mb-6">
                        <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                            <!-- Judul -->
                            <div>
                                <label for="title" class="mb-2 block text-lg font-semibold leading-6 text-gray-500">Judul</label>
                                <input type="text" name="title" id="title" class="block w-full rounded-lg border border-gray-300 px-4 py-3 text-base text-black shadow-sm placeholder:text-gray-400 focus:ring-2 focus:ring-primary" placeholder="Masukkan Judul" />
                            </div>
                            <!-- Penulis -->
                            <div>
                                <label for="author_id" class="mb-2 block text-lg font-semibold leading-6 text-gray-500">Penulis</label>
                                <select id="author_id" name="author_id" required class="block w-full rounded-lg border border-gray-300 px-4 py-3 text-base text-black shadow-sm focus:ring-2 focus:ring-primary">
                                    <option value="" disabled selected>Pilih Penulis</option>
                                    @foreach ($authors as $author)
                                        <option value="{{ $author->id }}">{{ $author->name_author }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="mt-6 grid grid-cols-1 gap-6 md:grid-cols-2">
                            <!-- Unggah Sampul -->
                            <div class="row-span-2">
                                <label for="cover_image" class="mb-2 block text-lg font-semibold leading-6 text-gray-500">Unggah Sampul</label>
                                <label for="file-upload" class="flex h-40 w-full cursor-pointer flex-col items-center justify-center rounded-lg border border-gray-300 transition-colors duration-200 hover:bg-gray-100">
                                    <svg id="upload-icon" class="mb-2 h-12 w-12 text-gray-300" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v-1.75a2.75 2.75 0 012.75-2.75h3.75A2.75 2.75 0 0112 12.75v1.75h-4.5a1.25 1.25 0 000 2.5h4.5v1.75a2.75 2.75 0 01-2.75 2.75H5.75A2.75 2.75 0 013 19.25v-1.75zm18 1.75v-1.75a2.75 2.75 0 00-2.75-2.75h-3.75A2.75 2.75 0 0012 16.5v1.75h4.5a1.25 1.25 0 010 2.5H12v1.75a2.75 2.75 0 002.75 2.75h3.75A2.75 2.75 0 0021 22.25v-1.75z" />
                                    </svg>
                                    <span id="uploadText" class="font-semibold text-gray-400">Unggah sampul ukuran 16:9</span>
                                    <span id="uploadText" class="font-semibold text-gray-400 text-xs">Ukuran file gambar maksimal 2MB</span>
                                    <span id="uploadText" class="font-semibold text-gray-400 text-xs">Format jpg,png,jpeg</span>
                                    <input id="file-upload" name="cover_image" type="file" class="hidden" onchange="showFilename()" />
                                </label>
                            </div>
                            <div>
                                <label for="category_id" class="mb-2 block text-lg font-semibold leading-6 text-gray-500">Kategori</label>
                                <select id="category_id" name="category_id" required class="block w-full rounded-lg border border-gray-300 px-4 py-3 text-base text-black shadow-sm focus:ring-2 focus:ring-primary">
                                    <option value="" disabled selected>Pilih Kategori</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name_category }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                {{-- <label for="url" class="mb-2 block text-lg font-semibold leading-6 text-gray-500">Tautan</label> --}}
                                <input type="hidden" name="url" id="url" class="block w-full rounded-lg border border-gray-300 px-4 py-3 text-base text-black shadow-sm placeholder:text-gray-400 focus:ring-2 focus:ring-primary" placeholder="Url Artikel" />
                            </div>
                        </div>
                    </div>

                    <!-- Textarea -->
                    <div class="mt-6">
                        <textarea id="my-editor" name="content" rows="10" cols="80">
                            <!-- Contoh konten awal -->
                            <h2>Lorem ipsum dolor sit amet consectetur. Nulla erat commodo viverra in non sagittis cum. Id aliquam scelerisque lorem ut elementum orci</h2>
                            <p>Isi artikel di sini...</p>
                        </textarea>
                    </div>

                    <!-- Submit button -->
                    <div class="bottom-0 mt-6 flex justify-end bg-white pb-2 pt-4">
                        <button type="submit" name="submit" class="inline-flex rounded bg-primary px-6 py-3 hover:bg-primary focus:outline-none">
                            <p class="text-base font-semibold leading-none text-white">Posting</p>
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Modal untuk memasukkan URL Google Drive -->
        <div id="gdrive-modal" class="fixed inset-0 z-50 hidden bg-black bg-opacity-50">
            <div class="flex min-h-screen items-center justify-center">
                <div class="w-96 rounded-lg bg-white p-6 shadow-lg">
                    <h2 class="mb-4 text-lg font-semibold text-gray-800">Masukkan URL Google Drive</h2>
                    <input id="gdrive-url" type="text" placeholder="Masukkan URL Google Drive" class="mb-4 w-full rounded-lg border border-gray-300 p-2 focus:outline-none focus:ring-2 focus:ring-primary" />
                    <div id="gdrive-error" class="mb-4 hidden text-sm text-red-500"></div>
                    <div class="flex justify-end gap-2">
                        <button id="gdrive-cancel" type="button" class="rounded-lg bg-gray-300 px-4 py-2 text-gray-700 hover:bg-gray-400 focus:outline-none">Batal</button>
                        <button id="gdrive-insert" type="button" class="hover:bg-primary-dark rounded-lg bg-primary px-4 py-2 text-white focus:outline-none">Tambahkan</button>
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
                uploadText.textContent = 'Click to Upload or Drag & Drop';
                uploadIcon.classList.remove('hidden');
                idSize.classList.remove('hidden');
            }
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/uy9sjhjaxq12cc39rm7y0870rohtequenkkgp68a67aweqr3/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
        tinymce.init({
            selector: '#my-editor',
            height: 500,
            plugins: 'lists link image table code help wordcount fontselect fontsizeselect',
            toolbar: 'undo redo | formatselect | ' + 'fontselect fontsizeselect | ' + 'bold italic underline | forecolor backcolor | ' + 'alignleft aligncenter alignright alignjustify | ' + 'bullist numlist outdent indent | ' + 'image gdrive link table | ' + 'removeformat | help',
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
                                errorContainer.textContent = 'URL tidak boleh kosong.';
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
                                errorContainer.textContent = 'Format URL Google Drive tidak valid.';
                                errorContainer.classList.remove('hidden');
                            }
                        };
                    },
                });
            },
        });
    </script>
@endsection
