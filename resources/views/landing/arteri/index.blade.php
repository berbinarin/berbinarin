@extends(
    "landing.layouts.app",
    [
        "title" => "Berbinar Insightful Indonesia",
        "active" => "Arteri",
        "page" => "Arteri",
    ]
)

@section("style")
    <style>
          /*remove focus:border-color: blue-ish color*/
        select:focus {
            outline: none !important;
            box-shadow: none !important;
            border-color: inherit !important;
        }

        .swiper {
            @apply relative;
        }

        .swiper-slide {
            box-shadow: 0px 0px 88px -10px rgba(57, 134, 163, 0.72);
            -webkit-box-shadow: 0px 0px 88px -10px rgba(57, 134, 163, 0.72);
            -moz-box-shadow: 0px 0px 88px -10px rgba(57, 134, 163, 0.72);
        }

        .active {
            @apply bg-white;
        }

        .active-mobile {
            @apply bg-primary;
        }

        .filter-container .active {
            @apply bg-primary text-white
        }
    </style>
@endsection

@section("content")
    {{-- hero section --}}

    <x-arteri.hero-arteri :heroArticles="$heroArticles" />

    {{-- list artikel section --}}
    <section class="mb-16 flex flex-col overflow-x-hidden px-4 lg:px-14">
        {{-- heading --}}
        <div class="mb-4 flex w-full flex-col">
            <h1 class="mb-4 bg-gradient-to-r from-[#3886A3] to-[#225062] bg-clip-text text-center text-3xl font-semibold text-transparent md:text-4xl lg:text-start">ArteRi (Artikel Berbinar)</h1>
            <p class="text-center text-base font-normal text-[#606060] lg:text-justify lg:text-lg">Temukan solusi psikologi dengan artikel edukasi, tips, informasi terbaru, dan lain-lain seputar kesehatan mental untuk membantu menjalani kehidupan yang lebih seimbang dan bermakna setiap hari.</p>
        </div>
        {{-- menu filter --}}
        <div class="mb-8 flex w-full flex-col items-center justify-between lg:flex-row lg:gap-x-4">
            {{-- filter button --}}
            <div class="filter-container mb-4 flex flex-wrap items-center justify-center gap-4 lg:mb-0 lg:flex-grow lg:flex-nowrap lg:justify-start lg:overflow-x-scroll lg:scrollbar-hide">
                <a href="{{ route("arteri.index") }}" class="{{ request()->routeIs("arteri") ? "active" : "border-[#606060]/50" }} w-fit rounded-lg border px-8 py-1 font-semibold text-slate-800">Semua</a>
                {{-- @dump($categories) --}}
                @foreach ($categories as $cat)
                    <a href="{{ route("arteri.category", ["slug" => $cat->slug]) }}" class="{{ isset($category) && $category->id === $cat->id ? "active" : "border-[#606060]/50" }} w-fit text-nowrap rounded-lg border px-8 py-1 font-semibold text-slate-800">
                        {{ $cat->name_category }}
                    </a>
                @endforeach
            </div>
            {{-- menu select sort method --}}
            <div class="flex flex-none items-center justify-end gap-4">
                <span class="text-slate-800">Urutkan berdasarkan:</span>
                <select class="w-fit rounded-lg border border-slate-300 bg-white py-2 pe-8 ps-4 text-slate-800 focus:outline-none focus:ring-0 active:outline-none" onchange="window.location.href=this.value">
                    <option value="{{ request()->fullUrlWithQuery(["sort" => "terbaru"]) }}" {{ $sort == "terbaru" ? "selected" : "" }}>Terbaru</option>
                    <option value="{{ request()->fullUrlWithQuery(["sort" => "terlama"]) }}" {{ $sort == "terlama" ? "selected" : "" }}>Terlama</option>
                </select>
            </div>
        </div>

        @if (count($articles) === 0)
            <div class="mt-12 w-full">
                <div class="mx-auto mb-4 flex w-full items-center justify-center">
                    <img src="{{ asset("assets/images/landing/arteri/empty-icon.png") }}" alt="empty image" class="h-32 object-cover sm:h-44 md:h-48 lg:h-52" />
                </div>
                <span class="mx-auto mb-2 block text-center text-lg font-semibold sm:text-xl md:text-2xl lg:text-3xl">Oops!</span>
                <p class="mx-auto block max-w-sm text-center text-[#606060] md:max-w-md">Sepertinya belum ada artikel di sini. Kami sedang menyiapkan konten terbaik untuk Anda. Stay tuned!</p>
            </div>
        @else
            {{-- list artikel --}}
            <div class="mb-8 grid grid-cols-1 gap-x-3 gap-y-4 md:grid-cols-2 lg:grid-cols-3 lg:gap-x-5 lg:gap-y-10">
                {{-- container --}}
                @foreach ($articles as $article)
                    {{-- @dump($article->category->name_category) --}}
                    {{-- @dump($article->author->name_author) --}}
                    {{-- card --}}
                    <a href="{{ route("arteri.detail", ["id" => $article->id]) }}">
                        <div class="relative rounded-xl border border-[#606060]/20 px-5 py-3 shadow-md lg:border-none lg:px-0 lg:py-0 lg:shadow-none">
                            {{-- badge kategori --}}
                            <span class="absolute left-8 top-6 rounded-full bg-[#F7B43F]/90 px-3.5 py-1 text-sm text-white lg:left-3 lg:top-3 lg:px-3.5 lg:py-1.5 lg:text-base">
                                {{ $article->category->name_category }}
                            </span>

                            {{-- image --}}
                            {{-- @dump($article->cover_image) --}}
                            <div class="mx-auto mb-4 w-full max-w-2xl">
                                <div class="relative aspect-video w-full overflow-hidden rounded-lg">
                                    <img src="{{ asset("/image/" . $article->cover_image) }}" loading="lazy" alt="artikel-banner-small" class="absolute inset-0 h-full w-full object-cover" />
                                </div>
                            </div>

                            {{-- artikel description --}}
                            <div class="flex w-full flex-col">
                                {{-- author --}}
                                {{-- @dump($article->author->profil_image) --}}
                                <div class="mb-2 flex w-full items-center justify-between gap-2 lg:justify-start">
                                    <div class="flex items-center justify-center gap-2">
                                        <div class="size-6 overflow-hidden rounded-full">
                                            <img src="{{ $article->author->profil_image ? asset("/image/" . $article->author->profil_image) : asset("assets/images/landing/arteri/dummy.png") }}" alt="profile dummy" class="object-cover" />
                                        </div>
                                        <span class="text-sm text-gray-600">{{ $article->author->name_author }}</span>
                                    </div>
                                    <span class="hidden text-sm text-gray-600 lg:inline-block">&bull;</span>
                                    {{-- @dump($article->created_at->format('d F Y')) --}}
                                    <span class="text-sm text-gray-600">
                                        {{ $article->created_at->format("d F Y") }}
                                    </span>
                                </div>
                                {{-- title --}}
                                {{-- @dump($article->title) --}}
                                <h3 class="mb-2 line-clamp-2 w-full justify-start text-lg font-semibold text-gray-700 lg:w-3/4">
                                    {{ $article->title }}
                                </h3>
                                {{-- short-desc --}}
                                <p class="line-clamp-2 text-sm text-gray-500">
                                    {{ $article->first_paragraph }}
                                </p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
            <div class="flex w-full items-center justify-center">
                {{ $articles->onEachSide(2)->links("vendor.pagination.arteri-pagination") }}
            </div>
        @endif
    </section>
@endsection

@section("script")
    <script>
        var swiper = new Swiper('#swiperArteriHero', {
            loop: true,
            speed: 1000,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
        });

        window.handleSwipeTo = (index) => {
            swiper.slideTo(index, 1000);
        };

        window.handleDetailArticle = (index) => {
            alert(`redirect to detail artikel page id: ${index}`);
        };
    </script>
@endsection
