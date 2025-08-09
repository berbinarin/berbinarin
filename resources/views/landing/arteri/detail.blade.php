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
            color: #0f172a;
        }

        @media (max-width: 768px) {
            .prose blockquote p {
                font-size: 1.25rem;
            }
            .prose p {
                font-size: 1rem;
            }
        }

        .prose blockquote {
            position: relative;
            border-left: 4px solid #06b6d4;
            padding-left: 2rem;
            font-size: 1.25rem;
            color: #374151;
            max-width: 72rem;
        }

        @media (min-width: 768px) {
            .prose blockquote {
                font-size: 1.5rem;
            }
        }

        @media (min-width: 1024px) {
            .prose blockquote {
                font-size: 1.875rem;
            }
        }

        .prose blockquote p {
            position: relative;
            display: inline-block;
            font-style: normal;
            color: #1c1917;
        }

        .prose blockquote p::before {
            content: '\201C';
            position: absolute;
            left: -1rem;
            top: -0.5rem;
            font-size: 2.25rem;
            color: #06b6d4;
        }

        .prose blockquote p::after {
            content: '\201E';
            position: absolute;
            bottom: -0.5rem;
            right: -1rem;
            font-size: 2.25rem;
            color: #06b6d4;
        }

        .reaction-img {
            transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
            cursor: pointer;
            transform: scale(1);
        }

        .reaction-img:hover,
        .reaction-img.active {
            transform: scale(1.1);
            filter: drop-shadow(0 4px 8px rgba(0, 0, 0, 0.1));
        }

        .reaction-img.active {
            transform: scale(1.15);
            filter: drop-shadow(0 6px 12px rgba(0, 0, 0, 0.15));
        }
    </style>
@endsection

@section("content")
    <section class="relative mb-12 h-full w-full overflow-visible px-4 pt-24 lg:px-20 lg:pt-32">
        <!-- Background Blur Elements -->
        <div class="pointer-events-none fixed inset-0 z-0 overflow-hidden">
            <div class="absolute -left-32 top-0 hidden h-[500px] w-[300px] rounded-full bg-[#c7f8ff] opacity-60 blur-[60px] lg:block"></div>
            <div class="absolute -right-32 top-0 hidden h-[500px] w-[300px] rounded-full bg-[#a2d7f0] opacity-40 blur-[60px] lg:block"></div>
        </div>

        <!-- Main Content Container -->
        <div class="relative z-10 mx-auto w-full max-w-7xl">
            <!-- Article Container -->
            <div class="w-full rounded-xl bg-white p-6 shadow-sm md:p-8 lg:p-10">
                <!-- Category Tag -->
                <div class="mb-4 flex w-full flex-wrap items-center justify-center gap-4">
                    <span class="rounded-xl bg-[#FD9399D9]/90 px-3 py-1 text-sm text-white lg:text-lg">
                        {{ $article->category->name_category }}
                    </span>
                </div>

                <!-- Article Title -->
                <h1 class="mb-4 text-center text-xl font-bold text-slate-900 md:text-2xl lg:text-4xl">
                    {{ $article->title }}
                </h1>

                <!-- Desktop Author & Date -->
                <div class="mb-8 hidden w-full items-center justify-center gap-2 lg:flex">
                    <img src="{{ asset("/image/" . $article->author->profil_image) }}" alt="profile dummy" class="size-6 rounded-full object-cover" />
                    <span class="text-slate-700">{{ $article->author->name_author }}</span>
                    <span class="text-slate-700">&bull;</span>
                    <span class="text-slate-700">{{ $article->created_at->format("d F Y") }}</span>
                </div>

                <!-- Article Cover Image -->
                <img src="{{ asset("/image/" . $article->cover_image) }}" alt="cover" class="z-10 mb-4 aspect-video w-full rounded-xl object-cover" />

                <!-- Mobile Author & Date -->
                <div class="mb-6 flex w-full items-center justify-between lg:hidden">
                    <span class="text-sm text-slate-700">{{ $article->created_at->format("d F Y") }}</span>
                    <span class="flex items-center justify-start gap-2">
                        <img src="{{ asset("/image/" . $article->author->profil_image) }}" alt="writer profile" class="size-5 rounded-full object-cover" />
                        <span class="text-sm text-slate-700">{{ $article->author->name_author }}</span>
                    </span>
                </div>

                <!-- Article Content -->
                <div class="z-10 mb-4 flex w-full flex-col items-center justify-center">
                    <article class="prose prose-sm z-10 max-w-none md:prose-base lg:prose-lg">
                        <div class="z-10">
                            {!! $article->content !!}
                        </div>
                    </article>
                </div>
            </div>

            <!-- Reaction Section -->
            <div class="mt-10 flex flex-col rounded-xl bg-white py-3">
                <!-- Container untuk judul, gambar, dan button -->
                <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                    <div class="flex-1">
                        <div class="mb-4 flex items-center pl-4">
                            <div class="mr-2 h-6 w-1 rounded-full bg-blue-600"></div>
                            <h2 class="text-lg font-semibold">Reaction</h2>
                        </div>

                        <div class="flex flex-wrap justify-center md:justify-start md:pl-6">
                            <!-- Item 1 -->
                            <img src="{{ asset("assets/images/landing/arteri/feedback/1-wahoo.png") }}" data-hover="{{ asset("assets/images/landing/arteri/feedback/1-wahoo2.png") }}" data-normal="{{ asset("assets/images/landing/arteri/feedback/1-wahoo.png") }}" class="reaction-img h-[72px] w-[72px]" onclick="setActiveReaction(this)" />

                            <!-- Item 2 -->
                            <img src="{{ asset("assets/images/landing/arteri/feedback/2-happy.png") }}" data-hover="{{ asset("assets/images/landing/arteri/feedback/2-happy2.png") }}" data-normal="{{ asset("assets/images/landing/arteri/feedback/2-happy.png") }}" class="reaction-img h-[70px] w-[70px]" onclick="setActiveReaction(this)" />

                            <!-- Item 3 -->
                            <img src="{{ asset("assets/images/landing/arteri/feedback/3-neutral.png") }}" data-hover="{{ asset("assets/images/landing/arteri/feedback/3-neutral2.png") }}" data-normal="{{ asset("assets/images/landing/arteri/feedback/3-neutral.png") }}" class="reaction-img h-[72px] w-[72px]" onclick="setActiveReaction(this)" />

                            <!-- Item 4 -->
                            <img src="{{ asset("assets/images/landing/arteri/feedback/4-bummed.png") }}" data-hover="{{ asset("assets/images/landing/arteri/feedback/4-bummed2.png") }}" data-normal="{{ asset("assets/images/landing/arteri/feedback/4-bummed.png") }}" class="reaction-img h-[72px] w-[72px]" onclick="setActiveReaction(this)" />

                            <!-- Item 5 -->
                            <img src="{{ asset("assets/images/landing/arteri/feedback/5-pissed.png") }}" data-hover="{{ asset("assets/images/landing/arteri/feedback/5-pissed2.png") }}" data-normal="{{ asset("assets/images/landing/arteri/feedback/5-pissed.png") }}" class="reaction-img h-[72px] w-[72px]" onclick="setActiveReaction(this)" />
                        </div>
                    </div>

                    <div class="flex justify-center px-4 md:justify-end md:px-0 md:pr-6">
                        <a href="javascript:void(0)" onclick="toggleShareModal(true)" class="mt-6 flex w-[90%] items-center justify-center gap-2 rounded-lg bg-gradient-to-r from-[#3886A3] to-[#225062] px-6 py-2 font-medium text-white md:w-auto">
                            <span>Bagikan</span>
                            <img src="{{ asset("assets/images/landing/arteri/upload.svg") }}" class="h-5 w-5" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal Share -->
    <div id="shareModal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/50">
        <div class="relative w-[300px] rounded-xl bg-white p-5">
            <button onclick="toggleShareModal(false)" class="absolute right-3 top-3 flex h-8 w-8 items-center justify-center rounded border border-gray-400 text-lg font-bold text-gray-500 hover:border-gray-600 hover:text-gray-800">X</button>

            <h2 class="text-bold mb-1 text-lg font-bold">Share</h2>
            <hr />

            <p class="my-3 text-sm text-gray-600">Share this link via</p>

            <div class="mb-4 flex justify-between">
                <a href="https://twitter.com/share?url={{ urlencode(request()->fullUrl()) }}" target="_blank" class="border-gray flex h-10 w-10 items-center justify-center rounded-full border-2 border-solid hover:bg-gray-200">
                    <img src="{{ asset("assets/images/landing/logo/sosmed-icon/x.png") }}" class="h-5 w-5" />
                </a>
                <a href="https://www.instagram.com/" target="_blank" class="border-gray flex h-10 w-10 items-center justify-center rounded-full border-2 border-solid hover:bg-gray-200">
                    <img src="{{ asset("assets/images/landing/logo/sosmed-icon/instagram.png") }}" class="h-5 w-5" />
                </a>
                <a href="https://wa.me/?text={{ urlencode(request()->fullUrl()) }}" target="_blank" class="border-gray flex h-10 w-10 items-center justify-center rounded-full border-2 border-solid hover:bg-gray-200">
                    <img src="{{ asset("assets/images/landing/logo/sosmed-icon/whatsapp.png") }}" class="h-5 w-5" />
                </a>
                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}" target="_blank" class="border-gray flex h-10 w-10 items-center justify-center rounded-full border-2 border-solid hover:bg-gray-200">
                    <img src="{{ asset("assets/images/landing/logo/sosmed-icon/facebook.png") }}" class="h-5 w-5" />
                </a>
                <a href="https://t.me/share/url?url={{ urlencode(request()->fullUrl()) }}" target="_blank" class="border-gray flex h-10 w-10 items-center justify-center rounded-full border-2 border-solid hover:bg-gray-200">
                    <img src="{{ asset("assets/images/landing/logo/sosmed-icon/telegram.png") }}" class="h-5 w-5" />
                </a>
            </div>

            <p class="mb-2 text-sm text-gray-600">Or copy link</p>
            <div class="flex">
                <input type="text" id="shareLink" value="{{ request()->fullUrl() }}" class="flex-1 rounded-l border px-2 py-1 text-sm" readonly />
                <button onclick="copyShareLink()" class="rounded-r bg-[#225062] px-3 text-white">Copy</button>
            </div>
        </div>
    </div>
@endsection

@section("script")
    <script>
        let activeReaction = null;

        function setActiveReaction(element) {
            if (activeReaction === element) {
                element.classList.remove('active');
                element.src = element.dataset.normal;
                activeReaction = null;
                return;
            }

            if (activeReaction) {
                activeReaction.classList.remove('active');
                activeReaction.src = activeReaction.dataset.normal;
            }

            element.classList.add('active');
            element.src = element.dataset.hover;
            activeReaction = element;
        }

        document.querySelectorAll('.reaction-img').forEach((img) => {
            img.addEventListener('mouseover', function () {
                if (this !== activeReaction) {
                    this.src = this.dataset.hover;
                }
            });

            img.addEventListener('mouseout', function () {
                if (this !== activeReaction) {
                    this.src = this.dataset.normal;
                }
            });
        });

        function toggleShareModal(show) {
            document.getElementById('shareModal').classList.toggle('hidden', !show);
            document.getElementById('shareModal').classList.toggle('flex', show);
        }

        function copyShareLink() {
            let copyText = document.getElementById('shareLink');
            copyText.select();
            copyText.setSelectionRange(0, 99999);
            document.execCommand('copy');
            alert('Link disalin ke clipboard!');
        }
    </script>
@endsection
