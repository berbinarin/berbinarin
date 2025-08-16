@extends(
    "landing.layouts.app",
    [
        "title" => "Berbinar Insightful Indonesia",
        "active" => "Arteri",
        "page" => "Arteri Detail",
    ]
)

@section("meta")
    <!-- Open Graph Meta Tags untuk sharing -->
    <meta property="og:title" content="{{ $article->title }}" />
    <meta property="og:description" content="{{ $description }}" />
    <meta property="og:image" content="{{ $imageUrl }}" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:url" content="{{ $currentUrl }}" />
    <meta property="og:type" content="article" />
    <meta property="og:site_name" content="Berbinar Insightful Indonesia" />

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="{{ $article->title }}" />
    <meta name="twitter:description" content="{{ $description }}" />
    <meta name="twitter:image" content="{{ $imageUrl }}" />

    <!-- WhatsApp Meta Tags -->
    <meta property="og:image:alt" content="{{ $article->title }}" />
    <meta name="description" content="{{ $description }}" />
@endsection

@section("style")
    <style>
        /* Base Styles */
        .prose {
            max-width: 100%;
            width: 100%;
        }

        .prose p {
            text-align: justify;
            color: #0f172a;
            max-width: 100%;
            word-wrap: break-word;
        }

        /* Media Queries untuk Mobile */
        @media (max-width: 768px) {
            .prose blockquote {
                padding-left: 1.5rem;
                /* margin-left: 0.5rem; */
                font-size: 1rem;
            }

            .prose blockquote p::before {
                left: -1.2rem;
                font-size: 2rem;
            }

            .prose blockquote p::after {
                right: -0.8rem;
                font-size: 2rem;
            }
        }

        /* Blockquote Styles */
        .prose blockquote {
            position: relative;
            border-left: 4px solid #06b6d4;
            padding-left: 2rem;
            font-size: 1.25rem;
            color: #374151;
            max-width: 80%;
            quotes: '\201C' '\201D' '\2018' '\2019';
        }

        @media (min-width: 768px) {
            .prose blockquote {
                font-size: 1.5rem;
            }

            .reaction-img {
                height: 90px !important;
                width: 90px !important;
            }
        }

        @media (min-width: 1024px) {
            .prose blockquote {
                font-size: 1.875rem;
            }
        }

        .prose blockquote p {
            position: relative;
            display: inline;
            font-style: normal;
            color: #1c1917;
            max-width: 100%;
            padding: 0.5rem 0;
        }

        .prose blockquote p::before {
            content: open-quote;
            position: absolute;
            left: -1.5rem;
            top: 0;
            font-size: 2.5rem;
            color: #06b6d4;
            line-height: 1;
        }

        .prose blockquote p::after {
            content: close-quote;
            position: absolute;
            right: -4rem;
            bottom: 0;
            font-size: 2.5rem;
            color: #06b6d4;
            line-height: 1;
        }

        /* Content Containers */
        .rounded-xl {
            overflow: hidden;
        }

        /* Media Elements */
        .prose img,
        .prose iframe,
        .prose video {
            max-width: 100%;
            height: auto;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        /* Tables */
        .prose table {
            display: block;
            width: 100%;
            overflow-x: auto;
            white-space: nowrap;
            margin: 1rem 0;
        }

        .reaction-img {
            transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
            cursor: pointer;
            transform: scale(1);
            height: 72px;
            width: 72px;
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

        /* Background Elements */
        .pointer-events-none {
            pointer-events: none;
        }

        /* Utility Classes */
        .max-w-full {
            max-width: 100%;
        }

        .overflow-x-auto {
            overflow-x: auto;
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
                    <span class="rounded-xl px-3 py-1 text-sm text-white lg:text-lg" style="background-color: {{ $categoryColors[$article->category->id] ?? "#FD9399D9" }}">
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
                <img src="{{ asset("/image/" . $article->cover_image) }}" alt="cover" class="z-10 mb-4 aspect-video w-full max-w-full rounded-xl object-cover" />

                <!-- Mobile Author & Date -->
                <div class="mb-6 flex w-full items-center justify-between lg:hidden">
                    <span class="flex items-center justify-start gap-2">
                        <img src="{{ asset("/image/" . $article->author->profil_image) }}" alt="writer profile" class="size-5 rounded-full object-cover" />
                        <span class="text-sm text-slate-700">{{ $article->author->name_author }}</span>
                    </span>
                    <span class="text-sm text-slate-700">{{ $article->created_at->format("d F Y") }}</span>
                </div>

                <!-- Article Content - Fixed Section -->
                <div class="z-10 mb-4 flex w-full flex-col items-center justify-center">
                    <article class="prose prose-sm z-10 w-full max-w-full md:prose-base lg:prose-lg">
                        <div class="z-10 w-full max-w-full overflow-x-auto">
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
                            @php
                                $reactions = [
                                    ["label" => "sangat senang", "img" => "1-wahoo.png", "hover" => "1-wahoo2.png"],
                                    ["label" => "senang", "img" => "2-happy.png", "hover" => "2-happy2.png"],
                                    ["label" => "biasa saja", "img" => "3-neutral.png", "hover" => "3-neutral2.png"],
                                    ["label" => "bosan", "img" => "4-bummed.png", "hover" => "4-bummed2.png"],
                                    ["label" => "tidak suka", "img" => "5-pissed.png", "hover" => "5-pissed2.png"],
                                ];
                            @endphp

                            {{-- Debugg --}}
                            {{--
                                <pre>
                                userReaction: {{ $userReaction ? $userReaction->reaction_type : 'null' }}
                                </pre>
                            --}}
                            @foreach ($reactions as $idx => $reaction)
                                <form action="{{ url("/arteri/" . $article->id . "/reaction") }}" method="POST" style="display: inline">
                                    @csrf
                                    <input type="hidden" name="reaction_type" value="{{ $reaction["label"] }}" />
                                    <button type="submit" style="background: none; border: none; padding: 0; margin: 0" class="reaction-btn">
                                        <img id="reaction-img-{{ $idx }}" src="{{ asset("assets/images/landing/arteri/feedback/" . $reaction["img"]) }}" data-hover="{{ asset("assets/images/landing/arteri/feedback/" . $reaction["hover"]) }}" data-normal="{{ asset("assets/images/landing/arteri/feedback/" . $reaction["img"]) }}" class="reaction-img {{ isset($userReaction) && $userReaction->reaction_type === $reaction["label"] ? "active" : "" }}" alt="{{ $reaction["label"] }}" />
                                    </button>
                                </form>
                            @endforeach
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
                <a href="{{ $shareButtons["twitter"] ?? "#" }}" target="_blank" rel="noopener noreferrer" onclick="trackShare()" class="border-gray flex h-10 w-10 items-center justify-center rounded-full border-2 border-solid hover:bg-gray-200">
                    <img src="{{ asset("assets/images/landing/logo/sosmed-icon/x.png") }}" class="h-5 w-5" />
                </a>
                <a href="{{ $shareButtons["linkedin"] ?? "#" }}" target="_blank" rel="noopener noreferrer" onclick="trackShare()" class="border-gray flex h-10 w-10 items-center justify-center rounded-full border-2 border-solid hover:bg-gray-200">
                    <img src="{{ asset("assets/images/landing/logo/sosmed-icon/linkedin.png") }}" class="h-5 w-5" />
                </a>
                <a href="{{ $shareButtons["whatsapp"] ?? "#" }}" target="_blank" rel="noopener noreferrer" onclick="trackShare()" class="border-gray flex h-10 w-10 items-center justify-center rounded-full border-2 border-solid hover:bg-gray-200">
                    <img src="{{ asset("assets/images/landing/logo/sosmed-icon/whatsapp.png") }}" class="h-5 w-5" />
                </a>
                <a href="{{ $shareButtons["facebook"] ?? "#" }}" target="_blank" rel="noopener noreferrer" onclick="trackShare()" class="border-gray flex h-10 w-10 items-center justify-center rounded-full border-2 border-solid hover:bg-gray-200">
                    <img src="{{ asset("assets/images/landing/logo/sosmed-icon/facebook.png") }}" class="h-5 w-5" />
                </a>
                <a href="{{ $shareButtons["telegram"] ?? "#" }}" target="_blank" rel="noopener noreferrer" onclick="trackShare()" class="border-gray flex h-10 w-10 items-center justify-center rounded-full border-2 border-solid hover:bg-gray-200">
                    <img src="{{ asset("assets/images/landing/logo/sosmed-icon/telegram.png") }}" class="h-5 w-5" />
                </a>
            </div>

            <p class="mb-2 text-sm text-gray-600">Or copy link</p>
            <div class="flex">
                <input type="text" id="shareLink" value="{{ $currentUrl }}" class="flex-1 rounded-l border px-2 py-1 text-sm" readonly />
                <button onclick="copyShareLink(); trackShare()" class="w-20 rounded-r bg-[#225062] text-white">Copy</button>
            </div>
        </div>
    </div>
    <form id="shareTrackForm" action="{{ url("/arteri/" . $article->id . "/share") }}" method="POST" style="display: none">
        @csrf
    </form>
@endsection

@section("script")
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        let activeReaction = null;

        document.addEventListener('DOMContentLoaded', function () {
            let activeReaction = document.querySelector('.reaction-img.active');
            if (activeReaction) {
                activeReaction.src = activeReaction.dataset.hover;
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

                img.closest('button').addEventListener('click', function () {
                    if (activeReaction && activeReaction !== img) {
                        activeReaction.classList.remove('active');
                        activeReaction.src = activeReaction.dataset.normal;
                    }
                    img.classList.add('active');
                    img.src = img.dataset.hover;
                    activeReaction = img;
                });
            });

            // AJAX Reaction
            document.querySelectorAll('.reaction-btn').forEach(function (btn) {
                btn.addEventListener('click', function (e) {
                    e.preventDefault();
                    var form = this.closest('form');
                    var formData = new FormData(form);

                    fetch(form.action, {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                            Accept: 'application/json',
                        },
                        body: formData,
                    })
                        .then((response) => response.text())
                        .then((text) => {
                            // console.log("Isi respon:", text);
                        })
                        .catch((error) => console.error('Terjadi kesalahan:', error));
                });
            });
        });

        function toggleShareModal(show) {
            document.getElementById('shareModal').classList.toggle('hidden', !show);
            document.getElementById('shareModal').classList.toggle('flex', show);
        }

        function copyShareLink() {
            const copyText = document.getElementById('shareLink');
            const copyButton = copyText.nextElementSibling;

            if (navigator.clipboard && window.isSecureContext) {
                navigator.clipboard
                    .writeText(copyText.value)
                    .then(() => {
                        showSuccessToast();
                        updateCopyButton(copyButton);
                    })
                    .catch(() => {
                        fallbackCopyTextToClipboard(copyText, copyButton);
                    });
            } else {
                fallbackCopyTextToClipboard(copyText, copyButton);
            }
        }

        function fallbackCopyTextToClipboard(copyText, copyButton) {
            copyText.select();
            copyText.setSelectionRange(0, 99999);

            try {
                document.execCommand('copy');
                showSuccessToast();
                updateCopyButton(copyButton);
            } catch (err) {
                console.error('Fallback: Could not copy text: ', err);
                showErrorToast();
            }
        }

        function showSuccessToast() {
            Swal.fire({
                icon: 'success',
                title: 'Link berhasil disalin!',
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                showCloseButton: true,
                timer: 2000,
                timerProgressBar: true,
                background: '#ffffff',
                color: '#374151',
                customClass: {
                    popup: 'colored-toast',
                },
            });
        }

        function updateCopyButton(button) {
            const originalText = button.innerHTML;
            const originalColor = button.style.backgroundColor;

            button.innerHTML = 'Copied!';
            button.style.backgroundColor = '#3986A3';
            button.disabled = true;

            setTimeout(() => {
                button.innerHTML = originalText;
                button.style.backgroundColor = originalColor || '#225062';
                button.disabled = false;
            }, 2000);
        }

        document.getElementById('shareModal').addEventListener('click', function (e) {
            if (e.target === this) {
                toggleShareModal(false);
            }
        });

        function trackShare() {
            fetch('{{ url("/arteri/" . $article->id . "/share") }}', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    Accept: 'application/json',
                },
            })
                .then((response) => response.json())
                .then((data) => {
                    // console.log(data.success || 'Share tercatat!');
                })
                .catch((error) => {
                    // console.error(error);
                });
        }
    </script>
@endsection
