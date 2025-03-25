@extends('moduls.dashboard.layouts.main', [
    'title' => 'Dashboard Arteri',
    'active' => 'Dashboard',
    'modul' => 'Postingan',
])

@section('content-dashboard')
<section class="flex w-full">
    <div class="flex flex-col w-full">
        <div class="w-full">
            <div class="py-4 md:pt-12 md:pb-7">
                <div>
                    <p tabindex="0"
                        class="focus:outline-none text-base sm:text-lg md:text-2xl lg:text-4xl font-bold leading-normal text-gray-800 mb-2">
                        Postingan</p>
                    <p class="w-2/4 text-disabled">Halaman yang menampilkan kumpulan artikel yang sudah di publikasikan dalam website Berbinar</p>
                    <a href="{{ route('dashboard.article.create') }}">
                        <button type="button"
                            class="focus:ring-2 focus:ring-offset-2  mt-8 sm:mt-3 inline-flex items-start justify-start px-6 py-3 text-white bg-primary hover:bg-primary focus:outline-none rounded-lg">
                            <p class=" font-medium leading-none text-dark">Tambah Artikel</p>
                        </button>
                    </a>
                </div>
            </div>
            <div class="bg-white py-4 md:py-7 px-4 md:px-8 xl:px-10 rounded-md">
                <div class="mt-4 overflow-x-auto">
                    <table id="example" class="display w-full" style="overflow-x: scroll;">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th class="text-left">Judul</th>
                                <th>Tanggal diposting</th>
                                <th>Penulis</th>
                                <th>Kategori</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        @php
                            $articles = [
                                ['id' => 1, 'title' => 'Sedih Berkepanjangan & Kehilangan Motivasi, Apakah Tanda Depresi?', 'date' => '18-04-2024', 'penulis' => 'Memed'],
                                ['id' => 2, 'title' => 'Artikel Tips atasi demotivation part 1', 'date' => '18-04-2024', 'penulis' => 'Memed'],
                                ['id' => 3, 'title' => 'Sedih Berkepanjangan & Kehilangan Motivasi, Apakah Tanda Depresi?', 'date' => '18-04-2024', 'penulis' => 'Memed'],
                                ['id' => 4, 'title' => 'Artikel Tips atasi demotivation part 1', 'date' => '18-04-2024', 'penulis' => 'Memed'],
                                ['id' => 5, 'title' => 'Sedih Berkepanjangan & Kehilangan Motivasi, Apakah Tanda Depresi?', 'date' => '18-04-2024', 'penulis' => 'Memed'],
                                ['id' => 6, 'title' => 'Artikel Tips atasi demotivation part 1', 'date' => '18-04-2024', 'penulis' => 'Memed'],
                            ];
                        @endphp

                        <tbody>
                            @foreach($articles as $article)
                                <tr class="data-consume">
                                    <td class="text-center font-bold">{{ $article['id'] }}.</td>
                                    <td class="break-words whitespace-normal" style="max-width: 150px">{{ $article['title'] }}</td>
                                    <td class="text-center">{{ $article['date'] }}</td>
                                    <td class="text-center">{{ $article['penulis'] }}</td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-center">
                                        <button type="button"
                                            class="focus:ring-2 focus:ring-offset-2 mt-4 sm:mt-0 inline-flex items-center justify-center py-2 px-4 focus:outline-none rounded-3xl bg-blue-500">
                                            <p class="font-medium leading-none text-white">Class Of Product</p>
                                        </button>
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-center">
                                        <div class="flex justify-center items-center gap-2">
                                            <a href="{{ route('dashboard.article.update') }}"
                                                class="focus:ring-2 focus:ring-offset-2 inline-flex items-center justify-center p-2 focus:outline-none rounded hover:bg-yellow-700"
                                                style="background-color: #E9B306;">
                                                <i class='bx bx-edit-alt text-white'></i>
                                            </a>
                                            <button onclick="toggleModal('modal-id')" type="button"
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
@include('moduls.dashboard.arteri.warning') 
@endsection
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        @if(session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: '{{ session('success') }}',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6'
            });
        @endif
    });
</script>