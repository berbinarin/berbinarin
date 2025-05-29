@extends('layouts.landing')

@section('content')
<section class="py-10">
    <div class="container mx-auto">
        <h1 class="text-3xl font-bold mb-6">Daftar Artikel</h1>
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <table class="table-auto w-full border-collapse border border-gray-300">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="border border-gray-300 px-4 py-2 text-left">#</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">Judul</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">Kategori</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">Penulis</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($articles as $index => $article)
                        <tr class="hover:bg-gray-50">
                            <td class="border border-gray-300 px-4 py-2">{{ $index + 1 }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $article->title }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $article->category->name_category }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $article->author->name_author }}</td>
                            <td class="border border-gray-300 px-4 py-2">
                                <a href="{{ route('moduls.landing-new.detail-article', $article->id) }}" 
                                   class="text-primary font-semibold hover:underline">
                                    Lihat Detail
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection