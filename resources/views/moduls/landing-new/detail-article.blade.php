@extends('layouts.landing')

@section('content')
<section class="py-10">
    <div class="container mx-auto">
        <div class="bg-white rounded-lg shadow-md p-6">
            <h1 class="text-3xl font-bold mb-4">{{ $article->title }}</h1>
            <p class="text-sm text-gray-500 mb-4">Kategori: {{ $article->category->name_category }}</p>
            <p class="text-sm text-gray-500 mb-4">Penulis: {{ $article->author->name_author }}</p>
            <img src="{{ asset('storage/' . $article->cover_image) }}" alt="{{ $article->title }}" class="w-full h-96 object-cover mb-6">
            <div class="prose max-w-none">
                {!! $article->content !!}
            </div>
        </div>
    </div>
</section>
@endsection