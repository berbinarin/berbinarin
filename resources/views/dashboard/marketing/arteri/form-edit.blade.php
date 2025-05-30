@extends('dashboard.layouts.app', [
    'title' => 'Dashboard Arteri',
    'active' => 'Dashboard',
    'modul' => 'Postingan',
])

@section('content')
    <form action="{{ route('dashboard.article.update.store', $article->id) }}" enctype="multipart/form-data" method="POST">
        @csrf
        @method('POST')
        <section class="flex w-full h-full">
            <div class="flex flex-col w-full h-full">
                <div class="py-4 md:pt-12 md:pb-7">
                    <div class="flex flex-col">
                        <p class="font-bold text-red-700">( Fitur save tidak ada, sebaiknya jangan pindah halaman saat
                            perubahan berlangsung ! )</p>
                        <div class="flex items-center justify-between pt-2">
                            <p class="text-4xl font-bold">Edit Artikel</p>
                            <a>
                                <button type="submit"
                                    class="focus:ring-2 focus:ring-offset-2  mt-8 sm:mt-3 inline-flex items-start justify-start px-6 py-3 text-white bg-primary hover:bg-primary focus:outline-none rounded-lg">
                                    <p class=" font-medium leading-none text-dark">Update</p>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="grid-cols-2 grid gap-10 w-full" style="color: #9B9B9B">
                    <div class="flex flex-col gap-2 w-full">
                        <p>Judul</p>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="nama_judul" type="text" name="title" value="{{ $article->title }}" required>
                    </div>
                    <div class="flex flex-col gap-2 w-full">
                        <p>Penulis</p>
                        <div class="relative">
                            <select
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="nama_penulis" name="author_id" required>
                                @foreach ($authors as $author)
                                    <option value="{{ $author->id }}"
                                        {{ $article->author_id == $author->id ? 'selected' : '' }}>
                                        {{ $author->name_author }}
                                    </option>
                                @endforeach
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                <i class='bx bx-chevron-down'></i>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col gap-2 w-full" style="color: #9B9B9B">
                        <p>Sampul</p>
                        <label for="file-upload"
                            class="flex flex-col items-center justify-center w-full h-48 rounded border-2 border-gray-300 bg-white cursor-pointer hover:bg-gray-100 transition-colors duration-200"
                            style="height: 300px">
                            <div id="iconText" class="p-3 bg-gray-100 rounded-full">
                                <div class="p-4 bg-gray-200 rounded-full">
                                    <i class="bx bx-upload text-gray-500 text-4xl"></i>
                                </div>
                            </div>
                            <span id="uploadText" class="font-semibold text-gray-500">
                                Unggah sampul ukuran 16:9
                            </span>
                            <img id="image-preview" class="hidden w-full h-full object-contain rounded" />
                            <input id="file-upload" name="cover_image" type="file" class="hidden" accept="image/*"
                                onchange="showFilename()" />
                        </label>
                        @if ($article->cover_image)
                            <p class="mt-2 text-sm text-gray-500">Sampul saat ini: <a
                                    href="{{ asset('/image/' . $article->cover_image) }}" target="_blank"
                                    class="text-primary underline">Lihat Sampul</a></p>
                        @endif
                    </div>
                    <div class="flex flex-col gap-2 w-full">
                        <p>Kategori</p>
                        <div class="relative">
                            <select
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="nama_kategori" name="category_id" required>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ $article->category_id == $category->id ? 'selected' : '' }}>
                                        {{ $category->name_category }}
                                    </option>
                                @endforeach
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                <i class='bx bx-chevron-down'></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-10">
                    <textarea id="my-editor" name="content" rows="10" cols="80">
                        {{ $article->content }}
            </textarea>
                </div>
            </div>
        </section>
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
        @include('moduls.dashboard.arteri.warning')
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.tiny.cloud/1/uy9sjhjaxq12cc39rm7y0870rohtequenkkgp68a67aweqr3/tinymce/6/tinymce.min.js"
            referrerpolicy="origin"></script>

        <script>
            $(document).ready(function() {
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
                                    const directUrl = 'https://lh3.googleusercontent.com/d/' + fileId + '?t=' + new Date().getTime();
                                    editor.insertContent('<img src="' + directUrl + '" alt="Google Drive Image" />');
                                    modal.classList.add('hidden'); 
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

            });

            function showFilename() {
                const input = document.getElementById('file-upload');
                const uploadText = document.getElementById('uploadText');
                const iconText = document.getElementById('iconText');
                const imagePreview = document.getElementById('image-preview');
                const filenameDisplay = document.getElementById('filename-display');

                if (input.files && input.files.length > 0) {
                    // Hide the icon and text
                    iconText.classList.add('hidden');
                    uploadText.classList.add('hidden');

                    // Show the image preview
                    imagePreview.classList.remove('hidden');
                    imagePreview.src = URL.createObjectURL(input.files[0]);

                    // Show and update the filename display
                    filenameDisplay.textContent = input.files[0].name;
                    filenameDisplay.classList.remove('hidden');
                } else {
                    // Reset to initial state
                    iconText.classList.remove('hidden');
                    uploadText.classList.remove('hidden');
                    imagePreview.classList.add('hidden');
                    filenameDisplay.classList.add('hidden');
                    uploadText.textContent = "Unggah sampul ukuran 16:9";
                }
            }
        </script>
    @endsection
