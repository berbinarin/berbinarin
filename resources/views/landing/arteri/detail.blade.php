@extends(
    "landing.layouts.app",
    [
        "title" => "Berbinar Insightful Indonesia",
        "active" => "Arteri",
        "page" => "Arteri Detail",
    ]
)

@section("style")
    <style>
        .prose p {
            @apply text-justify text-slate-900;
        }

        .prose blockquote {
            @apply relative border-l-4 border-cyan-500 px-8 text-xl text-gray-700 md:text-2xl lg:max-w-6xl lg:text-3xl;
        }

        /* Adding quote symbols */
        .prose blockquote p {
            @apply relative inline-block not-italic text-stone-900;
        }

        .prose blockquote p::before {
            content: "\201C"; /* Opening quote */
            @apply absolute left-[-1rem] top-[-0.5rem] text-4xl text-cyan-500;
        }

        .prose blockquote p::after {
            content: "\201E"; /* Closing quote */
            @apply absolute bottom-[-0.5rem] right-[-1rem] text-4xl text-cyan-500;
        }
    </style>
@endsection

@section("content")
    {{-- @dump($article) --}}
    {{-- @dump($article->category->name_category) --}}
    <section class="relative mb-12 h-full w-full overflow-hidden px-4 pt-24 lg:px-14 lg:pt-32">
        {{-- heading --}}
        <div class="flex h-full w-full flex-col items-center justify-center">
            <div class="mb-4 flex w-full flex-wrap items-center justify-center gap-4">
                {{-- color for category ? --}}
                <span class="rounded-xl bg-[#F7B43F]/90 px-3 py-1 text-sm text-white lg:text-lg">
                    {{ $article->category->name_category }}
                </span>
            </div>
            <h1 class="mb-4 text-center text-xl font-bold text-slate-900 md:text-2xl lg:text-4xl">
                {{ $article->title }}
            </h1>
            <div class="mb-8 hidden w-full items-center justify-center gap-2 lg:flex">
                <img src="{{ asset("/image/" . $article->author->profil_image) }}" alt="profile dummy" class="size-6 rounded-full object-cover" />
                <span class="text-slate-700">{{ $article->author->name_author }}</span>
                <span class="text-slate-700">&bull;</span>
                <span class="text-slate-700">{{ $article->created_at->format("d F Y") }}</span>
            </div>
            <img src="{{ asset("/image/" . $article->cover_image) }}" alt="cover" class="mb-4 aspect-video w-full rounded-xl object-cover" />
            {{-- [MOBILE] published_at and author --}}
            <div class="mb-8 flex w-full items-center justify-between lg:hidden">
                <span class="text-sm text-slate-700">{{ $article->created_at->format("d F Y") }}</span>
                <span class="flex items-center justify-start gap-2">
                    <img src="{{ asset("/image/" . $article->author->profil_image) }}" alt="writer profile" class="size-5 rounded-full object-cover" />
                    <span class="text-sm text-slate-700">{{ $article->author->name_author }}</span>
                </span>
            </div>
        </div>

        <div class="mb-4 flex w-full flex-col items-center justify-center">
            <article class="prose prose-sm max-w-none md:prose-base lg:prose-lg">
                {!! $article->content !!}
            </article>
        </div>
    </section>
@endsection
