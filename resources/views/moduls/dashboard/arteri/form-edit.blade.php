@extends('moduls.dashboard.layouts.main', [
    'title' => 'Dashboard Arteri',
    'active' => 'Dashboard',
    'modul' => 'Postingan',
])

@section('content-dashboard')
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
                                    href="{{ asset('storage/' . $article->cover_image) }}" target="_blank"
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
                        'removeformat | help',

                    /* Mengatur daftar ukuran font yang muncul di dropdown */
                    font_size_formats: '8pt 10pt 12pt 14pt 18pt 24pt 36pt 48pt 72pt',
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
