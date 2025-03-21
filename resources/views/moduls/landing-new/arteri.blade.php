@extends(
    "layouts.main-new",
    [
        "title" => "Berbinar Insightful Indonesia",
        "active" => "Arteri",
        "page" => "Arteri",
    ]
)

@section("content")
    {{-- hero section --}}
    <section class="mb-16 h-full w-full">
        {{-- !swiper --}}
        <div id="swiperArteriHero" class="swiper">
            <div class="swiper-wrapper">
                {{-- item --}}
                @for ($i = 0; $i < 3; $i++)
                    <div
                        class="swiper-slide relative flex aspect-video items-center justify-center bg-cover bg-center bg-no-repeat"
                        style="
                            background-image: url('{{ asset("assets/images/landing/arteri/arteribannerDummy.png") }}');
                        "
                    >
                        <!-- Dark overlay -->
                        <div class="absolute inset-0 bg-black/50"></div>
                        <div
                            class="relative inset-0 flex h-full w-full items-end justify-start px-4 pb-32 lg:px-14"
                        >
                            <!-- Content container -->
                            <div class="flex w-full flex-col items-start">
                                <!-- Badge dinamis -->
                                <div class="mb-4 flex gap-4">
                                    <span
                                        class="rounded-xl bg-[#FD9399D9] px-4 py-2 text-sm text-white"
                                    >
                                        Psikologi Kesehatan
                                    </span>
                                    <span
                                        class="rounded-xl bg-[#6859B9] px-4 py-2 text-sm text-white"
                                    >
                                        Artikel
                                    </span>
                                </div>
                                {{-- title --}}
                                <h1
                                    class="mb-4 w-3/4 text-start text-3xl font-bold tracking-wider text-white"
                                >
                                    Lorem ipsum dolor sit amet consectetur. Nulla erat commodo
                                    viverra in non sagittis cum. Id aliquam scelerisque lorem ut
                                    elementum orci
                                </h1>

                                {{-- penulis & tanggal --}}
                                <div class="mb-4 flex w-full items-center justify-start gap-2">
                                    <div class="size-8 overflow-hidden rounded-full">
                                        <img
                                            src="{{ asset("assets/images/landing/karir/profile-dummy.jpeg") }}"
                                            alt="profile dummy"
                                            class="object-cover"
                                        />
                                    </div>
                                    <span class="font-semibold text-white">Talitha Dwi Arini</span>
                                    <span class="font-semibold text-white">&bull;</span>
                                    <span class="font-semibold text-white">14 Februari 2025</span>
                                </div>

                                {{-- short desc --}}
                                <p class="mb-12 w-3/4 text-start font-normal text-white">
                                    Lorem ipsum dolor sit amet consectetur. Egestas volutpat
                                    fringilla semper dictumst vel mattis. Cursus sapien malesuada
                                    porttitor in aliquet. Volutpat vitae ornare velit facilisi in
                                    nec. Diam ut nam bibendum pellentesque egestas eleifend in
                                    nulla.
                                </p>

                                {{-- pagination --}}
                                <div
                                    class="absolute bottom-32 left-4 z-10 flex items-center justify-start gap-2 lg:left-14"
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
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </section>
    {{-- list artikel section --}}
    <section class="mb-16 flex flex-col overflow-x-hidden px-4 lg:px-14">
        {{-- heading --}}
        <div class="mb-4 flex w-full flex-col">
            <h1
                class="mb-4 bg-gradient-to-r from-[#3886A3] to-[#225062] bg-clip-text text-center text-3xl font-semibold text-transparent md:text-4xl lg:text-start"
            >
                ArteRi (Artikel Berbinar)
            </h1>
            <p class="text-center text-base font-normal text-[#606060] lg:text-start">
                Disini kami membagikan tips, info kesehatan, berita-berita terbaru mengenai dunia
                psikologi, dan lain sebagainya
            </p>
        </div>
        {{-- menu filter --}}
        <div class="mb-8 flex w-full flex-col items-center justify-between lg:flex-row">
            {{-- filter button --}}
            <div
                class="filter-container mb-4 flex flex-wrap items-center justify-center gap-4 lg:mb-0 lg:flex-nowrap lg:justify-start"
            >
                <button
                    class="{{ true ? "active" : "border-[#606060]/50" }} w-fit rounded-lg border px-8 py-1 font-semibold text-slate-800"
                >
                    Semua
                </button>
                <button
                    class="{{ false ? "active" : "border-[#606060]/50" }} w-fit rounded-lg border px-8 py-1 font-semibold text-slate-800"
                >
                    Tips
                </button>
                <button
                    class="{{ false ? "active" : "border-[#606060]/50" }} w-fit rounded-lg border px-8 py-1 font-semibold text-slate-800"
                >
                    Berita
                </button>
                <button
                    class="{{ false ? "active" : "border-[#606060]/50" }} w-fit rounded-lg border px-8 py-1 font-semibold text-slate-800"
                >
                    Kategori Lain
                </button>
            </div>
            {{-- menu select sort method --}}
            <div class="flex items-center justify-end gap-4">
                <span class="text-slate-800">Urutkan berdasarkan:</span>
                <select class="w-fit rounded-lg py-2 pe-8 ps-4 outline-none active:outline-none">
                    <option value="terbaru">Terbaru</option>
                    <option value="terlama">Terlama</option>
                </select>
            </div>
        </div>

        {{-- list artikel --}}
        <div class="grid grid-cols-1 gap-x-3 gap-y-4 md:grid-cols-2 lg:grid-cols-3 lg:gap-x-5 lg:gap-y-10">
            {{-- container --}}
            @for ($k = 1; $k <= 9; $k++)
                {{-- card --}}
                <div
                    class="relative rounded-xl border border-[#606060]/20 px-5 py-3 shadow-md lg:border-none lg:px-0 lg:py-0 lg:shadow-none"
                    onclick="handleDetailArticle({{ $k }})">
                    {{-- badge kategori --}}
                    <span
                        class="absolute left-8 top-6 rounded-full bg-[#FD9399E5]/90 px-3.5 py-1 text-white lg:left-3 lg:top-3 lg:px-3.5 lg:py-1.5"
                    >
                        Berita
                    </span>

                    {{-- image --}}
                    <img
                        src="{{ asset("assets/images/landing/arteri/artikel-banner-small.png") }}"
                        alt="artikel-banner-small"
                        class="mb-4 rounded-lg object-cover"
                    />

                    {{-- artikel description --}}
                    <div class="flex w-full flex-col">
                        {{-- author --}}
                        <div
                            class="mb-2 flex w-full items-center justify-between gap-2 lg:justify-start"
                        >
                            <div class="flex items-center justify-center gap-2">
                                <div class="size-6 overflow-hidden rounded-full">
                                    <img
                                        src="{{ asset("assets/images/landing/karir/profile-dummy.jpeg") }}"
                                        alt="profile dummy"
                                        class="object-cover"
                                    />
                                </div>
                                <span class="text-sm text-gray-600">Talitha Dwi Arini</span>
                            </div>
                            <span class="hidden text-sm text-gray-600 lg:inline-block">&bull;</span>
                            <span class="text-sm text-gray-600">14 Februari 2025</span>
                        </div>
                        {{-- title --}}
                        <h3
                            class="mb-2 w-full justify-start text-lg font-semibold text-gray-700 lg:w-3/4"
                        >
                            Sedih Berkepanjangan & Kehilangan Motivasi, Apakah Tanda Depresi?
                        </h3>
                        {{-- short-desc --}}
                        <p class="line-clamp-3 text-sm text-gray-500 lg:line-clamp-2">
                            Lorem ipsum dolor sit amet consectetur. Egestas volutpat fringilla
                            semper dictumst vel mattis. Cursus sapien malesuada porttitor in
                            aliquet. Volutpat vitae ornare velit facilisi in nec. Diam ut nam
                            bibendum pellentesque egestas eleifend in nulla.
                        </p>
                    </div>
                </div>
            @endfor
        </div>
    </section>
@endsection
