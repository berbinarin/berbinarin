@extends('moduls.dashboard.layouts.main', [
    'title' => 'Dashboard Arteri',
    'active' => 'Dashboard',
    'modul' => '',
])

@section('content-dashboard')

<section class="flex w-full h-full">
    <div class="flex flex-col w-full h-full">
        <div class="py-4 md:pt-12 md:pb-7">
            <div>
                <p class="font-bold text-red-700">( Fitur save tidak ada, sebaiknya jangan pindah halaman saat pembuatan berlangsung ! )</p>
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
            <div
                class="flex items-start justify-between p-5 border-b border-solid border-blueGray-200 rounded-t">
                <h3 class="text-3xl font-semibold">
                    Tambah Postingan
                </h3>
            </div>
            <!--body-->
            <div class="relative p-5 flex-auto">
                <form action=""
                    class="flex flex-col gap-1" method="post">
                    @csrf
                    <div class="flex flex-col gap-7">
                        <div class="col-span-3">
                            <label for="name"
                                class="block text-lg font-semibold leading-6 text-gray-500 ">Nama</label>
                            <div class="mt-2">
                                <input type="text" name="fullname" id="fullname"
                                    class="block w-full rounded-md border-0 py-3 px-3 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary text-base sm:leading-6">
                            </div>
                        </div>
                        <div class="col-span-3">
                            <label for="sampul"
                            class="block text-lg font-semibold leading-6 text-gray-500 ">Unggah Sampul</label>
                            <label for="file-upload"
                                class="flex flex-col items-center justify-center w-full h-48 rounded-md
                                        border-2 mt-2
                                        cursor-pointer hover:bg-gray-100 transition-colors duration-200">
                                <svg id="upload-icon" class="w-12 h-12 text-gray-400 mb-2" fill="none" stroke="currentColor" stroke-width="1.5"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3 16.5v-1.75a2.75 2.75 0 012.75-2.75h3.75A2.75 2.75 0 0112 12.75v1.75h-4.5a1.25 1.25 0 000 2.5h4.5v1.75a2.75 2.75 0 01-2.75 2.75H5.75A2.75 2.75 0 013 19.25v-1.75zm18 1.75v-1.75a2.75 2.75 0 00-2.75-2.75h-3.75A2.75 2.75 0 0012 16.5v1.75h4.5a1.25 1.25 0 010 2.5H12v1.75a2.75 2.75 0 002.75 2.75h3.75A2.75 2.75 0 0021 22.25v-1.75z" />
                                </svg>
        
                                <span id="uploadText" class="font-semibold text-gray-500 underline">
                                    Click to Upload or Drag & Drop
                                </span>
                                <span id="sizeFile" class="text-xs text-gray-400">Max. File Size: 5MB</span>
        
                                <input id="file-upload" name="answer_image" type="file" class="hidden"
                                    onchange="showFilename()" />
                            </label>
                        </div>
                        <div class="grid grid-cols-6 gap-4">
                            <div class="col-span-3">
                                <label for="penulis"
                                    class="block text-lg font-semibold leading-6 text-gray-500 ">Penulis</label>
                                <div class="mt-2">
                                    <input type="text" name="fullname" id="fullname"
                                        class="block w-full rounded-md border-0 py-3 px-3 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary text-base sm:leading-6">
                                </div>
                            </div>
                            <div class="col-span-3">
                                <label for="category_id"
                                    class="block text-lg font-semibold leading-6 text-gray-500 ">Kategori
                                    </label>
                                <div class="mt-2">
                                    <select id="category_id"
                                        name="category_id"
                                        class="block w-full rounded-md border-0 py-3 px-3 text-black shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-primary text-base sm:leading-6">
                                        <option value="1">Class Of Product Management</option>
                                        <option value="2">Graphic Designer</option>
                                        <option value="3">Finance</option>
                                        <option value="4">Operational</option>
                                        <option value="5">Environment</option>
                                        <option value="6">Graphic UI</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--footer-->
                    <div
                        class="flex items-center justify-center pt-7 rounded-b gap-5">
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
                </form>
            </div>
        </div>
    </div>
</div>
<div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-id-backdrop">
</div>

<div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
    id="modal-id">  

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
            }}
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
<script src="https://cdn.tiny.cloud/1/7y3v8c74x8ldew9lmmmw5hxivw4c8b24gw9xzlljbol4bt6r/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

{{-- Jangan lupa ini api-key TinyMCE ganti ke akun berbinar punya + tambahin Berbinar.in di menu Approved Domains --}}

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
</script>

@endsection


