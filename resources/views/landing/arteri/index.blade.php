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
            box-shadow: 0px 0px 66px -10px rgba(57, 134, 163, 0.72);
            -webkit-box-shadow: 0px 0px 44px -10px rgba(57, 134, 163, 0.72);
            -moz-box-shadow: 0px 0px 66px -10px rgba(57, 134, 163, 0.72);
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

    <x-arteri.hero-arteri :heroArticles="$heroArticles" :categoryColors="$categoryColors" class="overflow-visible" />

    {{-- list artikel section --}}
    <section class="mb-16 flex flex-col overflow-x-hidden px-4 lg:px-14">
        {{-- heading --}}
        <div class="mb-4 flex w-full flex-col">
            <h1 class="mb-4 bg-gradient-to-r from-[#3886A3] to-[#225062] bg-clip-text text-center text-3xl font-semibold text-transparent md:text-4xl lg:text-start">ArteRi : Artikel Berbinar</h1>
            <p class="text-center text-base font-normal text-[#606060] lg:text-justify lg:text-lg">Disini kami membagikan tips, info kesehatan, berita-berita terbaru mengenai dunia psikologi, dan lain sebagainya</p>
        </div>
        {{-- menu filter --}}
        <div class="mb-8 flex w-full flex-col items-center justify-between lg:flex-row lg:gap-x-4">
            {{-- filter button --}}
            <div x-data="{
                start: 0,
                visible: 3,
                cats: [{ id: null, slug: '', name_category: 'Semua' }, ...@js($categories)],
                activeId: {{ isset($category) ? $category->id : "null" }},
                get shown() {
                    return this.cats.slice(this.start, this.start + this.visible)
                },
                prev() {
                    if (this.start > 0) this.start--
                },
                next() {
                    if (this.start + this.visible < this.cats.length) this.start++
                },
                init() {
                    const updateVisible = () => {
                        this.visible = window.innerWidth < 768 ? 2 : 3
                    }
                    updateVisible()
                    window.addEventListener('resize', updateVisible)
                },
            }" class="filter-container mb-4 w-full lg:w-auto">
                <div class="relative flex items-center justify-center lg:justify-start gap-2 overflow-x-auto pb-2">
                    {{-- Tombol prev --}}
                    <button type="button" @click="prev" :disabled="start === 0" class="sticky left-0 z-10 rounded bg-gray-200 px-2 py-1 hover:bg-gray-300 disabled:opacity-50" aria-label="Kategori sebelumnya">&lt;</button>

                    {{-- Kategori list --}}
                    <div class="flex gap-2">
                        <template x-for="cat in shown" :key="cat.id ?? 'all'">
                            <a
                                :href="cat.id === null ? '{{ route("arteri.index") }}' : '/arteri/kategori/' + cat.slug"
                                :class="'min-w-[120px] text-center rounded-lg px-4 py-1 font-semibold flex-shrink-0 '
                           + (activeId === cat.id ? 'bg-[#3986A3] text-white' : 'text-slate-800')"
                                x-text="cat.name_category"
                            ></a>
                        </template>
                    </div>

                    {{-- Tombol next --}}
                    <button type="button" @click="next" :disabled="start + visible >= cats.length" class="sticky right-0 z-10 rounded bg-gray-200 px-2 py-1 hover:bg-gray-300 disabled:opacity-50" aria-label="Kategori berikutnya">&gt;</button>
                </div>
            </div>

            {{-- menu select sort method --}}
            <div class="flex flex-none items-center justify-end gap-4">
                <span class="text-slate-800">Urutkan berdasarkan:</span>
                <select class="w-fit rounded-lg border border-slate-500 bg-white py-2 pe-8 ps-4 text-slate-800 focus:outline-none focus:ring-0 active:outline-none" onchange="window.location.href=this.value">
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
                    <a href="{{ route("arteri.detail", ["slug" => Str::slug($article["title"])]) }}" data-id="{{ $article->id }}" class="article-link">
                        <div class="relative rounded-xl border border-[#606060]/20 px-5 py-3 lg:border-none lg:px-0 lg:py-0 lg:shadow-none">
                            {{-- badge kategori --}}
                            <span class="absolute left-8 top-6 z-10 rounded-full px-3.5 py-1 text-sm text-white lg:left-3 lg:top-3 lg:px-3.5 lg:py-1.5 lg:text-base" style="background-color: {{ $categoryColors[$article->category->id] }}">
                                {{ $article->category->name_category }}
                            </span>

                            {{-- image --}}
                            <div class="mx-auto mb-4 w-full max-w-2xl">
                                <div class="relative aspect-video w-full overflow-hidden rounded-lg">
                                    <img src="{{ asset("/image/" . $article->cover_image) }}" loading="lazy" alt="artikel-banner-small" class="absolute inset-0 h-full w-full object-cover" />
                                </div>
                            </div>

                            {{-- artikel description --}}
                            <div class="flex w-full flex-col">
                                {{-- author --}}
                                <div class="mb-2 flex w-full items-center justify-between gap-2 lg:justify-start">
                                    <div class="flex items-center justify-center gap-2">
                                        <div class="size-6 overflow-hidden rounded-full">
                                            <img src="{{ asset("/image/" . $article->author->profil_image) ? asset("/image/" . $article->author->profil_image) : asset("assets/images/landing/arteri/dummy.png") }}" alt="profile dummy" class="object-cover" />
                                        </div>
                                        <span class="text-sm text-gray-600">{{ $article->author->name_author }}</span>
                                    </div>
                                    <span class="hidden text-sm text-gray-600 lg:inline-block">&bull;</span>
                                    <span class="text-sm text-gray-600">
                                        {{ $article->created_at->format("d F Y") }}
                                    </span>
                                </div>
                                {{-- title --}}
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
        document.querySelectorAll('.article-link').forEach(function (link) {
            link.addEventListener('click', function (e) {
                e.preventDefault();
                var articleId = this.getAttribute('data-id');
                var url = this.getAttribute('href');
                fetch(`/arteri/${articleId}/view`, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        Accept: 'application/json',
                    },
                })
                    .then((response) => response.json())
                    .then((data) => {
                        window.location.href = url;
                    })
                    .catch(() => {
                        window.location.href = url; // fallback jika gagal
                    });
            });
        });
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
