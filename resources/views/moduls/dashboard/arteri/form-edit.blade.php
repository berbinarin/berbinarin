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
                <p class="font-bold text-red-700">( Fitur save tidak ada, sebaiknya jangan pindah halaman saat perubahan berlangsung ! )</p>
                    <a>
                        <button type="button"
                            class="focus:ring-2 focus:ring-offset-2  mt-8 sm:mt-3 inline-flex items-start justify-start px-6 py-3 text-white bg-primary hover:bg-primary focus:outline-none rounded-lg">
                            <p class=" font-medium leading-none text-dark">Update</p>
                        </button>
                    </a>
                    <a>
                        <button onclick="toggleModal('modal-id')" type="button"
                            class="focus:ring-2 focus:ring-offset-2  mt-8 sm:mt-3 inline-flex items-start justify-start px-6 py-3 text-white focus:outline-none rounded-lg" style="background-color: #EF4444;">
                            <p class=" font-medium leading-none text-dark">Hapus</p>
                        </button>
                    </a>
            </div>
        </div>
        <div>
            <textarea id="my-editor" name="content" rows="10" cols="80">
                <!-- Contoh konten awal -->
                <h2>Judul Artikel</h2>
                <p>Isi artikel di sini...</p>
            </textarea>
        </div>
    </div>
</section>
@include('moduls.dashboard.arteri.warning') 
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


