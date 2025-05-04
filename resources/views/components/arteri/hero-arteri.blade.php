{{-- hero section --}}
<section class="mb-4 h-full w-full lg:mb-16">
    {{-- !swiper --}}
    <div id="swiperArteriHero" class="swiper">
        <div class="swiper-wrapper pb-14 pt-28 lg:pb-0 lg:pt-0">
            {{-- item --}}
            @for ($i = 0; $i < 3; $i++)
                <div
                    class="swiper-slide relative flex aspect-video items-center justify-center bg-cover bg-center bg-no-repeat shadow-xl shadow-primary lg:shadow-none"
                    style="background-image: url('{{ asset("/image/" . $heroArticles[$i]->cover_image) }}')"
                >
                    <!-- Dark overlay -->
                    <div class="absolute inset-0 bg-black/50"></div>
                    <div
                        class="relative inset-0 flex h-full w-full items-center justify-center px-4 sm:px-14 lg:items-end lg:justify-start lg:pb-24"
                    >
                        <!-- [LG] Content container -->
                        <div class="hidden w-full flex-col items-start lg:flex">
                            <!-- Badge dinamis -->
                            <div class="mb-4 flex gap-4">
                <span class="rounded-xl bg-[#F7B43F]/90 px-4 py-2 text-sm text-white">
                  {{ $heroArticles[$i]->category->name_category }}
                </span>
                            </div>
                            {{-- title --}}
                            <h1 class="mb-4 w-3/4 text-start text-3xl font-bold tracking-wide text-white">
                                {{ $heroArticles[$i]->title }}
                            </h1>
                            {{-- penulis & tanggal --}}
                            <div class="mb-4 flex w-full items-center justify-start gap-2">
                                <div class="size-6 overflow-hidden rounded-full">
                                    <img
                                    src="{{ $heroArticles[$i]->author->profil_image ? asset('/image/' . $heroArticles[$i]->author->profil_image) : asset('assets/images/landing/arteri/dummy.png') }}"
                                    alt="{{ $heroArticles[$i]->author->name_author }}"
                                        class="object-cover"
                                    />
                                </div>
                                <span class="font-semibold text-white">
                  {{ $heroArticles[$i]->author->name_author }}
                </span>
                                <span class="font-semibold text-white">&bull;</span>
                                <span class="font-semibold text-white">
                  {{ $heroArticles[$i]->created_at->format("d F Y") }}
                </span>
                            </div>

                            {{-- short desc --}}
                            <p class="mb-12 line-clamp-2 w-3/4 text-start font-normal text-white">
                                {{ $heroArticles[$i]->first_paragraph }}
                            </p>

                            {{-- pagination dummy --}}
                            <div
                                class="absolute bottom-24 left-4 z-10 flex items-center justify-start gap-2 lg:left-14"
                            >
                                @for ($j = 0; $j < 3; $j++)
                                    <span
                                        onclick="handleSwipeTo({{ $j }})"
                                        class="{{ $i === $j ? "active" : "" }} size-3 cursor-pointer rounded-full border border-white bg-transparent transition duration-1000 ease-in-out"
                                        data-side="{{ $j }}"
                                    ></span>
                                @endfor
                            </div>
                        </div>
                        <!-- [mobile] Content container -->
                        <div
                            class="relative flex h-full w-full items-end justify-start pb-4 sm:pb-8 md:pb-10 lg:hidden"
                        >
                            {{-- badge & date --}}
                            <div
                                class="absolute top-2 flex w-full items-center justify-between text-white md:top-3"
                            >
                <span class="text-sm font-medium text-white md:text-base">
                  {{ $heroArticles[$i]->created_at->format("d F Y") }}
                </span>
                                <span class="rounded-xl bg-[#F7B43F]/90 px-4 py-1 text-sm text-white md:text-base">
                  {{ $heroArticles[$i]->category->name_category }}
                </span>
                            </div>
                            <div>
                                {{-- author --}}
                                <div class="flex items-center justify-start gap-2 sm:gap-4">
                                    <div class="size-5 overflow-hidden rounded-full sm:size-7">
                                        <img
                                            src="{{ asset("/image/" . $heroArticles[$i]->author->profil_image) }}"
                                            alt="{{ $heroArticles[$i]->author->name_author }}"
                                            class="object-cover"
                                        />
                                    </div>
                                    <span class="text-base font-medium text-white sm:text-lg">
                    {{ $heroArticles[$i]->author->name_author }}
                  </span>
                                </div>
                                {{-- title --}}
                                <h1
                                    class="line-clamp-2 text-start text-lg font-medium tracking-wide text-white sm:text-xl md:text-2xl"
                                >
                                    {{ $heroArticles[$i]->title }}
                                </h1>
                            </div>
                            {{-- pagination dummy --}}
                            <div
                                class="absolute -bottom-12 left-1/2 z-10 flex -translate-x-1/2 items-center justify-start gap-2 lg:left-14"
                            >
                                @for ($j = 0; $j < 3; $j++)
                                    <span
                                        onclick="handleSwipeTo({{ $j }})"
                                        class="{{ $i === $j ? "active-mobile" : "" }} size-3 cursor-pointer rounded-full border-2 border-primary bg-transparent transition duration-1000 ease-in-out"
                                        data-side="{{ $j }}"
                                    ></span>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
</section>
