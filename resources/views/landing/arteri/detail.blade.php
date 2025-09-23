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
            height: 60px;
            width: 60px;
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
        <div class="z-10 relative mx-auto w-full max-w-[88rem]">
            <div class="flex flex-col w-full">

                <div class="w-full flex flex-col lg:flex-row lg:gap-5">
                    <!-- Article Container -->
                    <div class="w-full lg:w-2/3 mb-4 lg:mb-0 rounded-xl bg-white p-6 shadow-sm md:p-8 lg:p-10">
                        <!-- Category Tag -->
                        <div class="mb-4 flex w-full flex-wrap items-center justify-start gap-4">
                            <span class="rounded-xl px-3 py-1 text-sm text-white lg:text-lg" style="background-color: {{ $categoryColors[$article->category->id] ?? "#FD9399D9" }}">
                                {{ $article->category->name_category }}
                            </span>
                        </div>

                        <!-- Article Title -->
                        <h1 class="mb-4 text-start text-xl font-bold text-slate-900 md:text-2xl lg:text-4xl">
                            {{ $article->title }}
                        </h1>

                        <hr class="border mb-4">

                        <!-- Desktop Author & Date -->
                        <div class="mb-4 hidden w-full items-center justify-between gap-2 lg:flex">
                            <div class="flex items-center justify-start gap-2">
                                <img src="{{ asset("/image/" . $article->author->profil_image) }}" alt="profile dummy" class="size-6 rounded-full object-cover" />
                                <span class="text-slate-700">{{ $article->author->name_author }}</span>
                                <span class="text-slate-700">&bull;</span>
                                <span class="text-slate-700">{{ $article->created_at->format("d F Y") }}</span>
                            </div>
                            <div class="flex flex-row items-center justify-center">
                                <a href="javascript:void(0)" onclick="toggleShareModal(true)" class="flex items-center justify-center gap-2 rounded-lg bg-gradient-to-r from-[#3886A3] to-[#225062] px-2 lg:px-6 py-2 font-medium text-white md:w-auto">
                                    <span>Bagikan</span>
                                    <img src="{{ asset("assets/images/landing/arteri/upload.svg") }}" class="h-5 w-5" />
                                </a>
                            </div>
                        </div>

                        <hr class="border mb-6 hidden lg:block">

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

                    <!-- Latest Articles Section -->
                    <div class="bg-white lg:w-1/3 rounded-xl max-h-fit p-4 shadow-sm lg:p-6 lg:pb-1"
                        style="position: sticky; top: 8rem; z-index: 20;">
                        <div class="mb-4 flex items-center">
                            <div class="mr-2 h-6 w-1 rounded-full bg-primary"></div>
                            <h2 class="lg:text-xl font-semibold">Artikel Terbaru</h2>
                        </div>

                        {{-- Artikel Terbaru --}}
                        @foreach ($latestArticles->filter(fn($latest) => $latest->id !== $article->id)->take(3) as $latest)
                            <a href="{{ route('arteri.detail', ['slug' => Str::slug($latest->title)]) }}" class="block mb-6 rounded-lg bg-white hover:bg-gray-50 shadow transition">
                                <div class="flex min-h-28">
                                    <img src="{{ asset('/image/' . $latest->cover_image) }}" alt="cover" class="h-auto w-1/2 rounded object-cover" />
                                    <div class="w-1/2 flex flex-col min-h-max items-start justify-between p-2">
                                        <h3 class="text-base font-medium text-slate-900 line-clamp-3">{{ $latest->title }}</h3>
                                        <div
                                            class="mt-1 inline-block rounded-[0.6rem] px-2 py-1 text-xs font-semibold text-white"
                                            style="background-color: {{ $articlesCategoryColors[$latest->category->id] ?? '#3986A3' }}">
                                            {{ $latest->category->name_category }}
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endforeach

                    </div>


                </div>

                <div class="lg:flex lg:flex-row gap-5">

                    <!-- Reaction Section -->
                    <div class="mt-4 lg:mt-8 w-full flex flex-col lg:justify-center rounded-xl bg-white px-4 lg:p-6 shadow-sm py-3 lg:w-2/3">
                        <div class="mb-4 flex pl-2 items-center">
                            <div class="mr-2 h-6 w-1 rounded-full bg-primary"></div>
                            <h2 class="lg:text-xl font-semibold">Tanggapan & Komentar</h2>
                        </div>

                        <div class="rating_list z-0 relative flex lg:w-[90%] flex-row mb-1 lg:mb-12 justify-self-center justify-between md:gap-4">

                        @foreach([
                            1 => 'pissed',
                            2 => 'bummed',
                            3 => 'neutral',
                            4 => 'happy',
                            5 => 'wahoo'
                        ] as $val => $label)
                        <div class="rating_item flex flex-col items-center">
                            <input class="hidden peer" id="rating-{{ $val }}-1" type="radio" value="{{ $val }}" name="rating">
                            <label for="rating-{{ $val }}-1"
                                class="cursor-pointer transition-all duration-300 ease-in-out hover:scale-105
                                rounded-full group hover:bg-gradient-to-b
                                relative w-14 h-14 md:w-24 md:h-24 lg:w-28 lg:h-28 xl:w-32 xl:h-32 flex items-center justify-center peer-checked:scale-110
                                peer-checked:bg-gradient-to-b
                                @if($val == 1) from-[#FF004F] to-[#F7B23B]
                                @elseif($val == 2) from-[#FF543E] to-[#F7B23B]
                                @elseif($val == 3) from-[#FFE500] to-[#F7B23B]
                                @elseif($val == 4) from-[#4CAF50] to-[#F7B23B]
                                @elseif($val == 5) from-[#75BADB] to-[#F7B23B]
                                @endif
                                ">
                                <span class="block w-full h-full relative">
                                    <img src="{{ asset('assets/images/landing/arteri/feedback/' . (6-$val) . '-' . $label . '.png') }}"
                                        alt="{{ $label }}"
                                        class="absolute inset-0 z-0 w-full h-full text-xs object-contain transition duration-200 scale-150" />
                                    <div class="text flex inset-8 w-full h-full justify-center items-end z-20 mt-6 lg:mt-2">
                                        <p class="bg-white px-2 text-[0.5rem] text-center md:text-[10px] xl:text-[15px] rounded-3xl py-1 shadow-md font-bold
                                            @if($val == 1) text-[#FF004F]
                                            @elseif($val == 2) text-[#FF543E]
                                            @elseif($val == 3) text-[#FFE500]
                                            @elseif($val == 4) text-[#4CAF50]
                                            @elseif($val == 5) text-[#75BADB]
                                            @endif

                                            @if($val == 1) shadow-[#FF004F]
                                            @elseif($val == 2) shadow-[#FF543E]
                                            @elseif($val == 3) shadow-[#FFE500]
                                            @elseif($val == 4) shadow-[#4CAF50]
                                            @elseif($val == 5) shadow-[#75BADB]
                                            @endif"
                                        id="reaction-label-{{ $val }}">
                                            {{ $reactionCounts[$val] ?? 0 }}
                                        </p>
                                    </div>
                                </span>
                            </label>
                        </div>
                        @endforeach


                    </div>

                        <div class="px-4 mt-10 lg:mt-4">
                            <div class="mb-4 flex flex-col items-start">
                                <label for="nama" class="font-medium">Nama</label>
                                <input type="text" id="nama" name="nama" class="form-input mt-1 block w-full p-1 pl-2 border-2 border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary" placeholder="Masukkan nama Anda...">
                            </div>

                            <div class="mb-4 flex flex-col items-start">
                                <label for="komentar" class="font-medium">Komentar</label>
                                <textarea name="komentar" id="komentar" class="form-input mt-1 block w-full p-1 pl-2 border-2 border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary text-disabled">Tambah komentar...</textarea>
                            </div>

                            <div class="mb-4 flex justify-end">
                                <a href="" class="mt-6 flex items-center justify-center gap-2 rounded-lg bg-gradient-to-r from-[#3886A3] to-[#225062] px-4 lg:px-6 py-2 font-medium text-white md:w-auto">
                                    <span>Kirim</span>
                                </a>
                            </div>

                        </div>

                        <!-- Komentar -->

                        <div class="px-4 mt-4">

                            <h3 class="mb-4 text-lg font-semibold lg:pb-4">Komentar (1{{--{{ count($comments) }}--}})</h3>

                            {{-- Komentar --}}

                            <div class="w-full mb-4 flex flex-row items-start">
                                <span class="w-1/6 lg:w-[10%] items-center justify-start gap-2">
                                    <img src="{{ asset("/image/" . $article->author->profil_image) }}" alt="writer profile" class="size-5 rounded-full object-cover" />
                                </span>
                                <div class="w-5/6 lg:w-[90%]">
                                    <div class="flex flex-row gap-1 lg:gap-2 pb-2">
                                        <span class="text-sm lg:text-base font-semibold">{{ $article->author->name_author }}</span>
                                        <div class="flex justify-center items-center">
                                        <span class="text-slate-700">&bull;</span>
                                        </div>
                                        <span class="text-sm lg:text-base text-slate-700">{{ $article->created_at->diffForHumans() }}</span>
                                    </div>
                                    <p class="text-sm lg:text-base">Ini untuk caption komentarnya. Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus nobis voluptates magni nam vel illum.</p>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="w-1/3"></div>

                </div>

            </div>
        </div>
    </section>

    <!-- Modal Share -->
    <div id="shareModal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/50">
        <div class="relative w-[300px] rounded-xl bg-white p-5">
            <div class="flex flex-row justify-between">

                <h2 class="text-bold mb-1 text-xl font-bold">Bagikan Artikel</h2>

                <button onclick="toggleShareModal(false)" class="flex flex-col h-6 w-6 items-center justify-center text-center rounded border border-gray-400 hover:border-gray-600">
                    <i class="bx bx-x text-xl text-gray-400 text-center hover:text-gray-600"></i>
                </button>

            </div>
            <hr />

            <p class="my-3 mb-6 text-sm">Bagikan tautan ini melalui</p>

            <div class="mb-8 flex justify-between">
                <a href="{{ $shareButtons["twitter"] ?? "#" }}" target="_blank" rel="noopener noreferrer" onclick="trackShare()" class="border-gray flex h-10 w-10 items-center justify-center rounded-full border-2 border-solid hover:bg-gray-200">
                    <img src="{{ asset("assets/images/landing/logo/sosmed-icon/x.png") }}" class="h-5 w-5" />
                </a>
                <a href="{{ $shareButtons["instagram"] ?? "#" }}" target="_blank" rel="noopener noreferrer" onclick="trackShare()" class="border-gray flex h-10 w-10 items-center justify-center rounded-full border-2 border-solid hover:bg-gray-200">
                    <img src="{{ asset("assets/images/landing/logo/sosmed-icon/instagram.png") }}" class="h-5 w-5" />
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

            <p class="mb-2 text-sm">Atau salin tautan</p>
            <div class="flex">
                <input id="shareLink" type="text" class="w-full hidden rounded-md border border-gray-300 p-2" value="{{ url("/arteri/" . $article->id . "/detail") }}" readonly>
                <button onclick="copyShareLink(); trackShare()" class="w-full rounded-md p-1.5 bg-gradient-to-r from-[#3886A3] to-[#225062] text-white"><i class="bx bx-link text-white text-base align-bottom"></i> Salin Tautan</button>
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

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Data jumlah orang per reaction
            const reactionCounts = @json($reactionCounts);

            // Label reaction
            const reactionLabels = {
                1: 'Tidak Suka',
                2: 'Bosan',
                3: 'Biasa Saja',
                4: 'Senang',
                5: 'Sangat Senang'
            };

            // Saat memilih reaction
            document.querySelectorAll('input[name="rating"]').forEach(function(input) {
                input.addEventListener('change', function() {
                    for (let val = 1; val <= 5; val++) {
                        const labelEl = document.getElementById('reaction-label-' + val);
                        if (parseInt(this.value) === val) {
                            labelEl.textContent = reactionLabels[val];
                        } else {
                            labelEl.textContent = (reactionCounts[val] ?? 0);
                        }
                    }
                });
            });
        });
    </script>
@endsection
