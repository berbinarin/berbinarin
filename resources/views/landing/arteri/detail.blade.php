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
            text-align: justify;
            color: #0f172a; /* text-slate-900 */
        }

        @media (max-width: 768px) {
            .prose blockquote p {
                font-size: 1.25rem; /* md:text-2xl */
            }
            .prose p {
                font-size: 1rem; /* md:text-2xl */
            }

        }

        .prose blockquote {
            position: relative;
            border-left: 4px solid #06b6d4; /* border-cyan-500 */
            padding-left: 2rem; /* px-8 */
            font-size: 1.25rem; /* text-xl */
            color: #374151; /* text-gray-700 */
            max-width: 72rem; /* lg:max-w-6xl */
        }
        @media (min-width: 768px) {
            .prose blockquote {
                font-size: 1.5rem; /* md:text-2xl */
            }
        }
        @media (min-width: 1024px) {
            .prose blockquote {
                font-size: 1.875rem; /* lg:text-3xl */
            }
        }

        /* Adding quote symbols */
        .prose blockquote p {
            position: relative;
            display: inline-block;
            font-style: normal;
            color: #1c1917; /* text-stone-900 */
        }

        .prose blockquote p::before {
            content: "\201C"; /* Opening quote */
            position: absolute;
            left: -1rem;
            top: -0.5rem;
            font-size: 2.25rem; /* text-4xl */
            color: #06b6d4; /* text-cyan-500 */
        }

        .prose blockquote p::after {
            content: "\201E"; /* Closing quote */
            position: absolute;
            bottom: -0.5rem;
            right: -1rem;
            font-size: 2.25rem; /* text-4xl */
            color: #06b6d4; /* text-cyan-500 */
        }
    </style>
@endsection

@section("content")
    {{-- @dump($article) --}}
    {{-- @dump($article->category->name_category) --}}
    <section class="relative mb-12 h-full w-full px-4 pt-24 lg:px-20 lg:pt-32 overflow-visible">
        {{-- heading --}}
        <div class="flex h-full w-full flex-col items-center justify-center">
            <div class="w-full flex flex-col">
                <!-- BLUR SETENGAH LINGKARAN PEMBATAS KANAN -->
                <div class="relative hidden -top-64 h-0 lg:block">
                    <div class="absolute -right-32 top-0 z-0 md:-right-40" style="width: 300px; height: 500px; border-top-left-radius: 420px; border-bottom-left-radius: 420px; border-top-right-radius: 420px; background: #a2d7f0; filter: blur(60px); opacity: 0.4; top: -100px; z-index: 0;"></div>
                </div>
            </div>
            <div class="mb-4 flex w-full flex-wrap items-center justify-center gap-4">
                {{-- color for category ? --}}
                <span class="rounded-xl bg-[#FD9399D9]/90 px-3 py-1 text-sm text-white lg:text-lg">
                    {{ $article->category->name_category }}
                </span>
            </div>
            <h1 class="mb-4 text-center text-xl font-bold text-slate-900 md:text-2xl lg:text-4xl">
                {{ $article->title }}
            </h1>
            <div class="mb-8 hidden w-full items-center justify-center gap-2 lg:flex">
                <img src="{{ asset("assets/images/landing/arteri/" . $article->author->profil_image) }}" alt="profile dummy" class="size-6 rounded-full object-cover" />
                <span class="text-slate-700">{{ $article->author->name_author }}</span>
                <span class="text-slate-700">&bull;</span>
                <span class="text-slate-700">{{ $article->created_at->format("d F Y") }}</span>
            </div>
            <img src="{{ asset("assets/images/landing/arteri/" . $article->cover_image) }}" alt="cover" class="mb-4 z-10 aspect-video w-full rounded-xl object-cover" />
            {{-- [MOBILE] published_at and author --}}
            <div class="flex w-full items-center justify-between lg:hidden">
                <span class="text-sm text-slate-700">{{ $article->created_at->format("d F Y") }}</span>
                <span class="flex items-center justify-start gap-2">
                    <img src="{{ asset("assets/images/landing/arteri/" . $article->author->profil_image) }}" alt="writer profile" class="size-5 rounded-full object-cover" />
                    <span class="text-sm text-slate-700">{{ $article->author->name_author }}</span>
                </span>
            </div>
        </div>

        <!-- BLUR SETENGAH LINGKARAN PEMBATAS KIRI -->
        <div class="relative hidden h-0 lg:block">
            <div class="absolute -left-32 top-0 z-0 md:-left-40" style="width: 300px; height: 500px; border-top-left-radius: 420px; border-bottom-left-radius: 420px; border-top-right-radius: 420px; background: #c7f8ff; filter: blur(60px); opacity: 0.6; top: -200px; z-index: 0;"></div>
        </div>

        <div class="mb-4 flex w-full flex-col z-10 items-center justify-center">
            <article class="prose prose-sm z-10 max-w-none md:prose-base lg:prose-lg">
                <div class="z-10">
                    {!! $article->content !!}
                </div>
            </article>

            <div class="w-full flex flex-row justify-between">
                <!-- BLUR SETENGAH LINGKARAN PEMBATAS KIRI -->
                <div class="relative hidden -top-64 h-0 lg:block">
                    <div class="absolute -left-32 top-0 z-0 md:-left-40" style="width: 300px; height: 500px; border-top-left-radius: 420px; border-bottom-left-radius: 420px; border-top-right-radius: 420px; background: #c7f8ff; filter: blur(60px); opacity: 0.6; top: -100px; z-index: 0;"></div>
                </div>
                <!-- BLUR SETENGAH LINGKARAN PEMBATAS KANAN -->
                <div class="relative hidden -top-64 h-0 lg:block">
                    <div class="absolute -right-32 top-0 z-0 md:-right-40" style="width: 300px; height: 500px; border-top-left-radius: 420px; border-bottom-left-radius: 420px; border-top-right-radius: 420px; background: #a2d7f0; filter: blur(60px); opacity: 0.6; top: -100px; z-index: 0;"></div>
                </div>
            </div>

        </div>
    </section>
@endsection
