@extends('moduls.dashboard.layouts.main', [
    'title' => 'Dashboard Arteri',
    'active' => 'Dashboard',
    'modul' => 'Draft',
])
@section('content-dashboard')
<section class="flex w-full">
    <div class="flex flex-col w-full">
        <div class="w-full">
            <div class="py-4 md:pt-12 md:pb-7">
                <div>
                    <p tabindex="0"
                        class="focus:outline-none text-base sm:text-lg md:text-2xl lg:text-4xl font-bold leading-normal text-gray-800 mb-2">
                        Kategori</p>
                    <p class="w-2/4 text-disabled">Halaman yang menampilkan dan mengelola daftar kategori artikel.</p>
                    <button onclick="bukaModalTambah()" type="button"
                        class="focus:ring-2 focus:ring-offset-2 mt-8 sm:mt-3 inline-flex items-start justify-start px-6 py-3 text-white bg-primary hover:bg-primary focus:outline-none rounded-lg">
                        <p class="font-medium leading-none text-dark">Tambah Kategori</p>
                    </button>
                </div>
            </div>
            <div class="bg-white py-4 md:py-7 px-4 md:px-8 xl:px-10 rounded-md">
                <div class="mt-4 overflow-x-auto">
                    <table id="example" class="display w-full" style="overflow-x: scroll;">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th class="text-left">Nama Kategori</th>
                                <th>Jumlah Artikel</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        @php
                            $articles = [
                                ['id' => 1, 'title' => 'Class Of Product Management', 'date' => '11'],
                                ['id' => 2, 'title' => 'Graphic Designer', 'date' => '11'],
                                ['id' => 3, 'title' => 'Class Of Product Management', 'date' => '11'],
                                ['id' => 4, 'title' => 'Graphic Designer', 'date' => '11'],
                                ['id' => 5, 'title' => 'Class Of Product Management', 'date' => '11'],
                                ['id' => 6, 'title' => 'Graphic Designer', 'date' => '11'],
                            ];
                        @endphp

                        <tbody>
                            @foreach($articles as $article)
                                <tr class="data-consume">
                                    <td class="text-center font-bold">{{ $article['id'] }}.</td>
                                    <td class="break-words whitespace-normal" style="max-width: 300px">{{ $article['title'] }}</td>
                                    <td class="text-center">{{ $article['date'] }}</td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-center">
                                        <div class="flex justify-center items-center gap-2">
                                            <a href="{{ route('dashboard.article.update') }}"
                                                class="focus:ring-2 focus:ring-offset-2 inline-flex items-center justify-center p-2 focus:outline-none rounded hover:bg-yellow-700"
                                                style="background-color: #E9B306;">
                                                <i class='bx bx-edit-alt text-white'></i>
                                            </a>
                                            <button onclick="bukaModalHapus()" type="button"
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

<!-- Modal untuk Tambah Kategori -->
<div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
id="tambah-kategori-modal">
    <div class="relative my-5 mx-auto justify-center items-center" style="width: 500px">
        <!--content-->
        <div
            class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
            <!--header-->
            <div class="flex items-center justify-between p-5 border-b border-solid border-gray-300 rounded-t">
                <div class="flex justify-center gap-3">
                    <img src="{{ asset('assets/images/svg-icon/kategori-icon.png') }}"/>
                    <h3 class="text-xl font-semibold">Tambah Kategori</h3>
                </div>
                <button class="p-1 ml-auto bg-transparent border-0 text-black float-right text-3xl leading-none font-semibold outline-none focus:outline-none" 
                    onclick="tutupModalTambah()">
                    <span class="text-black h-6 w-6 text-2xl block">×</span>
                </button>
            </div>
            <!--body-->
            <div class="relative p-6 flex-auto">
                <form method="POST" action="">
                    @csrf
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="nama_kategori">
                            Nama Kategori
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                            id="nama_kategori" type="text" name="nama_kategori" placeholder="Masukkan nama kategori" required>
                    </div>
                    <div class="flex items-center justify-end pt-6 border-t border-solid border-gray-300 rounded-b">
                        <button
                            class="background-transparent font-bold px-6 py-2 text-base outline-none focus:outline-none mr-2 mb-1 border border-black rounded"
                            type="button" onclick="tutupModalTambah()">
                            Batal
                        </button>
                        <button type="submit" name="submit"
                            class="inline-flex px-6 py-3 bg-primary hover:bg-primary focus:outline-none rounded">
                            <p class="text-base font-semibold leading-none text-white">
                                Simpan</p>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="tambah-kategori-backdrop"></div>

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
                    <img class="w-16" src="{{ asset('assets/images/warning.png') }}"/>
                    <p class="pt-5">Apakah Anda yakin ingin menghapus item ini?</p>
                    <!--footer-->
                    <form method="POST" action=""
                        class="flex items-center justify-center pt-7 rounded-b gap-5">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" name="category_id" id="delete_category_id" value="">
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
    if (categoryId) {
        document.getElementById('delete_category_id').value = categoryId;
    }
    
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
</script>
@endsection