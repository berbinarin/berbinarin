@extends('moduls.dashboard.layouts.main', [
    'title' => 'Dashboard Arteri',
    'active' => 'Dashboard',
    'modul' => 'Postingan',
])

@section('content-dashboard')

<section class="flex w-full">
    <div class="flex flex-col w-full">
        <div class="py-4 md:pt-12 md:pb-7 w-full">
            <div class="pb-5">
                <div class="flex items-center justify-between mb-2 gap-2">
                    <p tabindex="0"
                        class="focus:outline-none text-base sm:text-lg md:text-2xl lg:text-4xl font-bold leading-normal text-gray-800 ">
                        Detail Artikel</p>
                        <a href="{{ route('dashboard.article.update', $article->id) }}">
                            <button type="button"
                                class="focus:ring-2 focus:ring-offset-2  mt-8 sm:mt-3 inline-flex items-start justify-start px-6 py-3 text-white bg-primary hover:bg-primary focus:outline-none rounded-lg">
                                <p class=" font-medium leading-none text-dark">Edit Artikel</p>
                            </button>
                        </a>
                </div>
            </div>
            <div class="flex gap-10 w-full" style="color: #9B9B9B">
                <div class="flex flex-col gap-2 w-full">
                    <p>Kredensial</p>
                    <div class="bg-white text-black rounded-md p-6 shadow-md shadow-black flex flex-col gap-2">
                        <p class="font-bold text-xl">Judul : <span class="font-bold text-xl">{{ $article->title }}</span></p>
                        <p class="font-semibold">Penulis : <span class="font-semibold">{{ $article->author->name_author }}</span></p>
                        <p class="font-semibold">Kategori : <span class="font-semibold">{{ $article->category->name_category }}</span></p>
                    </div>
                </div>
                <div class="flex flex-col gap-2 w-full" style="color: #9B9B9B">
                    <p>Sampul</p>
                    <img src="{{ asset('/image/' . $article->cover_image) }}" class="rounded object-cover shadow-md shadow-black" style="height: 300px;"/>
                </div>
            </div>
            <div class="bg-white shadow-md shadow-black px-20 py-8 w-full mt-5">
                <div class="prose max-w-none">
                    {!! $article->content !!}
                </div>
            </div>
        </div>
</section>

@endsection