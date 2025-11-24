@extends(
    "landing.layouts.app",
    [
        "title" => "Berbinar Insightful Indonesia",
        "active" => "Produk Berbinar",
        "page" => "berbinar+",
    ]
)

@section("style")
    <style>
        .border-active {
            border: 2px solid #3986a3 !important;
            box-shadow: 0 0 0 2px #3986a333;
        }

        .swal2-popup {
            background: transparent !important;
            box-shadow: none !important;
        }

        .border-fade-rounded::before {
            content: '';
            position: absolute;
            inset: 0;
            z-index: 0;
            border-radius: 50px;
            padding: 5px;
            background: linear-gradient(to bottom right, #74aabf 0%, rgba(116, 170, 191, 0.3) 10%, rgba(116, 170, 191, 0.1) 40%, transparent 50%);
            -webkit-mask:
                linear-gradient(#fff 0 0) content-box,
                linear-gradient(#fff 0 0);
            -webkit-mask-composite: destination-out;
            mask-composite: exclude;
            mask:
                linear-gradient(#fff 0 0) content-box,
                linear-gradient(#fff 0 0);
            mask-composite: exclude;
            box-sizing: border-box;
            pointer-events: none;
        }

        .text-gradient {
            background: linear-gradient(to right, #3986a3, #000000);
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
        }
    </style>
@endsection

@section("content")
    {{-- HERO SECTION --}}
    <section class="relative mb-20 max-md:overflow-hidden">
        <div class="absolute left-0 top-5 z-0 max-sm:top-32">
            <img src="{{ asset("assets/images/landing/asset-konseling/vector/vector-hero1.webp") }}" alt="Vector" class="h-[500px] w-auto max-sm:h-[250px]" />
        </div>

        <div class="absolute right-0 top-8 z-0 max-md:-right-28 max-sm:-right-20 max-sm:top-40">
            <img src="{{ asset("assets/images/landing/asset-konseling/vector/vector-hero2.webp") }}" alt="Vector" class="h-[500px] w-auto max-sm:h-[250px]" />
        </div>

        <div class="relative">
            <div class="z-10 mx-20 mt-40 flex flex-row items-center justify-between gap-x-10 max-sm:mx-4 max-sm:mt-32">
                <div class="max-lg:min-w-auto flex max-w-xl flex-1 flex-col space-y-6 max-sm:space-y-2">
                    <a href="{{ route("product.index") }}">
                        <div class="flex cursor-pointer items-center space-x-2 lg:order-1">
                            <img src="{{ asset("assets/images/landing/asset-konseling/vector/left-arrow.webp") }}" alt="Left Arrow" class="h-3 w-auto" />
                            <p class="text-[15px] font-semibold text-[#3986A3]">Produk Berbinar</p>
                        </div>
                    </a>

                    <div class="hidden w-full items-center justify-center max-lg:flex-none max-md:flex lg:order-2 lg:w-auto">
                        <img src="{{ asset("assets/images/landing/asset-kelas/class-journey/hero-class-journey.webp") }}" alt="Class" class="h-[340px] w-auto object-contain max-sm:h-[320px]" />
                    </div>

                    <div class="lg:order-3">
                        <h2 class="text-gradient py-2 text-5xl font-bold max-sm:text-3xl">
                            <i>101 Class Journey</i>
                        </h2>
                    </div>

                    <div class="lg:order-4">
                        <p class="text-justify text-lg text-[#70787D] max-lg:text-[17px] max-sm:text-[15px] max-sm:leading-normal">
                            <b>
                                <i>101 Class Journey</i>
                            </b>
                            adalah
                            <i>webinar</i>
                            berbayar yang diadakan secara berurutan. Pertama dengan memberikan pengenalan terkait materi kemudian sesi selanjutnya akan membahas lebih mendalam terkait materi tersebut.
                        </p>
                    </div>
                </div>

                <div class="flex w-full flex-initial items-center justify-center max-lg:flex-1 max-md:hidden lg:w-auto">
                    <img src="{{ asset("assets/images/landing/asset-kelas/class-journey/hero-class-journey.webp") }}" alt="Class" class="h-[340px] w-auto object-contain max-lg:h-[320px]" />
                </div>
            </div>
        </div>
    </section>

    {{-- BENEFIT 101 CLASS JOURNEY --}}
    <section class="relative mb-12 w-full px-4 sm:px-14 lg:mb-16">
        <div class="absolute left-0 top-0 z-0">
            <img src="{{ asset("assets/images/landing/asset-konseling/vector/vector-line.webp") }}" alt="Vector Image" class="max-sm:top-40" />
        </div>

        <div class="relative z-10 w-full">
            <h1 class="mb-4 text-center text-2xl font-semibold text-black sm:text-3xl lg:mb-4 lg:text-5xl">
                Benefit
                <i>101 Class Journey</i>
            </h1>
            <div id="benefit-scroll" class="mx-auto w-full overflow-x-auto px-2 scrollbar-hide">
                <div class="flex min-w-[700px] flex-row items-center gap-x-20 py-5">
                    @php
                        // Daftar kata/kalimat bahasa asing yang ingin di-italic
                        $italicsBenefits = ["E-Certificate", "Hands-On Experience", "Upgrade Skill", "Trick", "Networking"];
                        function italicsBenefits($text, $words)
                        {
                            foreach ($words as $word) {
                                // Case-insensitive, avoid double-wrapping
                                $text = preg_replace("/\b(" . preg_quote($word, "/") . ")\b/i", '<i>$1</i>', $text);
                            }
                            return $text;
                        }
                    @endphp

                    @foreach ($benefit_class_journey as $benefit)
                        <div class="flex h-[107px] min-w-[410px] items-center justify-start gap-4 rounded-lg bg-white p-4 shadow-lg">
                            <div class="flex size-16 items-center justify-center rounded-full bg-primary p-2 lg:size-20">
                                <img src="{{ asset("assets/images/landing/asset-kelas/berbinar-plus/" . $benefit["image"]) }}" alt="icon" class="h-full w-full object-contain object-center" />
                            </div>
                            <span class="text-[16px] font-semibold lg:text-[20px]">{!! italicsBenefits($benefit["name"], $italicsBenefits) !!}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <div class="relative hidden h-0 md:block">
        <div class="absolute -left-32 top-0 z-0 md:-left-40" style="width: 300px; height: 300px; border-top-left-radius: 420px; border-bottom-left-radius: 420px; border-top-right-radius: 420px; background: #c7f8ff; filter: blur(60px); opacity: 0.9; top: -100px"></div>
    </div>

    {{-- BANNER 101 --}}
    <section class="relative mb-12 w-full px-4 sm:px-14 lg:mb-16">
        <div class="relative z-10 w-full">
            {{-- CONTAINER --}}
            <div class="border-fade-rounded relative mx-auto flex w-full flex-col items-center overflow-hidden rounded-[50px] bg-[rgba(215,230,237,0.4)] p-3 py-10 shadow-lg backdrop-blur-md lg:flex-row">
                <div class="flex w-full flex-col gap-4 px-4 lg:flex-row lg:px-10">
                    {{-- Container Gambar --}}
                    <div class="mx-auto h-auto w-full flex-1 overflow-hidden p-0 text-center text-white lg:mr-2 lg:h-[492px] lg:w-[389px] lg:min-w-[389px] lg:max-w-[389px]">
                        <img src="{{ asset("assets/images/landing/asset-kelas/class-journey/poster-maret.webp") }}" alt="Poster Class Journey" class="mx-auto h-auto w-full object-contain lg:h-full" style="border-radius: 24px; box-shadow: none; max-width: 389px" />
                    </div>

                    {{-- Container Teks --}}
                    <div class="flex flex-1 flex-col items-start justify-start lg:ml-2 lg:mt-0 lg:px-0">
                        <div class="w-full text-left">
                            <h3 class="mb-2 text-2xl font-bold text-primary lg:text-3xl">101 Class Journey</h3>
                            <p class="mb-6 text-justify text-base text-[#6F6C90] lg:text-[20px] lg:leading-relaxed">
                                <b>101 Class Journey</b>
                                hadir secara
                                <b>online</b>
                                melalui
                                <i>Zoom</i>
                                , memberikan kemudahan akses di mana pun kamu berada. Setiap sesi dipandu oleh
                                <b>expert</b>
                                berpengalaman yang siap membantumu
                                <b>
                                    meng-
                                    <i>upgrade skill</i>
                                </b>
                                sesuai bidang yang kamu butuhkan.
                            </p>

                            <h3 class="mb-2 text-2xl font-bold text-primary lg:text-3xl">Bidang Pembelajaran</h3>

                            <p class="mb-3.5 text-base text-[#6F6C90] lg:text-[20px] lg:leading-relaxed">Kamu bisa memilih kelas sesuai minat dan tujuan pengembangan diri, antara lain:</p>

                            <ul class="flex flex-col">
                                @php
                                    // Daftar kata/kalimat bahasa asing yang ingin di-italic
                                    $italicsClass = ["Digital Marketing", "Graphics Design", "Human Resource", "HR", "Product Management", "Social Media Specialist"];
                                    function italicsClass($text, $words)
                                    {
                                        foreach ($words as $word) {
                                            $text = preg_replace("/\b(" . preg_quote($word, "/") . ")\b/i", '<i>$1</i>', $text);
                                        }
                                        return $text;
                                    }
                                @endphp

                                @foreach ($bidang_pembelajaran as $i => $bidang)
                                    <li class="flex items-center gap-2" style="margin-bottom: 1.15rem">
                                        <div class="mt-1 flex items-center justify-center text-xl font-bold text-white shadow" style="width: 27px; height: 27px; border-radius: 50%; background: linear-gradient(180deg, #74aabf 0%, #3986a3 30%, #16364d 80%, #102535 100%); box-shadow: 0 6px 12px 0 rgba(22, 54, 77, 0.18)">
                                            {{ $i + 1 }}
                                        </div>
                                        <span class="text-lg font-semibold leading-tight text-[#6F6C90] lg:text-xl">
                                            {!! italicsClass($bidang, $italicsClass) !!}
                                        </span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="relative hidden h-0 md:block">
        <div class="absolute -right-32 top-0 z-0 md:-right-40" style="width: 300px; height: 300px; border-top-left-radius: 420px; border-bottom-left-radius: 420px; border-top-right-radius: 420px; background: #c7f8ff; filter: blur(60px); opacity: 0.9; top: -200px"></div>
    </div>

    {{-- LAYANAN 101 CLASS JOURNEY --}}
    <section class="relative mb-20 w-full px-4 sm:px-14">
        <h1 class="mb-4 text-center text-2xl font-semibold text-black sm:text-3xl lg:mb-8 lg:text-5xl">
            Layanan
            <i>101 Class Journey</i>
        </h1>

        <div class="relative mx-auto flex w-full flex-col gap-2 sm:max-w-screen-lg md:flex-row md:gap-2 lg:gap-4">
            {{-- CARD --}}
            @php
                // Daftar kata/kalimat bahasa asing yang ingin di-italic
                $italicsServices = ["Early Bird", "Bundling", "Normal Price", "Price", "Bundle", "Class", "Journey", "Online", "Session", "Zoom", "Expert", "Upgrade", "Skill", "Start", "Now"];
                function italicsServices($text, $words)
                {
                    foreach ($words as $word) {
                        $text = preg_replace("/\b(" . preg_quote($word, "/") . ")\b/i", '<i>$1</i>', $text);
                    }
                    return $text;
                }
            @endphp

            @foreach ($layanan_class_journey as $layanan)
                <div class="flex w-full flex-col items-center justify-start gap-y-2 rounded-xl bg-white py-8 shadow-lg">
                    <div class="mb-4">
                        <img src="{{ asset($layanan["icon"]) }}" alt="{!! italicsServices($layanan["name"], $italicsServices) !!}" class="size-12 object-cover" />
                    </div>
                    <span class="mb-4 text-xl font-semibold text-black">{!! italicsServices($layanan["name"], $italicsServices) !!}</span>
                    <p class="mx-auto mb-4 block text-center text-2xl font-semibold text-primary">
                        {!! italicsServices($layanan["price"], $italicsServices) !!}
                        <span class="font-light text-black/60">*</span>
                    </p>
                    <img src="{{ asset("assets/images/landing/asset-consulting/line.webp") }}" alt="line" class="mb-4 w-3/4" />
                    <a href="{{ $link_pendaftaran }}" target="_blank" class="block w-full py-1">
                        <div class="mx-auto flex w-fit items-center justify-center rounded-lg bg-gradient-to-l from-[#AD7D29] to-[#F7B23B] px-8 py-2 hover:from-[#AD7D29]/80 hover:to-[#F7B23B]/80 hover:shadow-lg">
                            <span class="text-white">{!! italicsServices("Mulai Sekarang", $italicsServices) !!}</span>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </section>

    {{-- FAQS START --}}
    <section class="z-10 mx-4 sm:mx-20 lg:my-14">
        <ul class="flex flex-col">
            @php
                // Daftar kata/kalimat bahasa asing yang ingin di-italic
                $italicWords = ["self-compassion", "webinar", "Zoom", "Q&A", "e-certificate", "post-test", "Google Form", "WhatsApp", "mentor", "CV", "portfolio building", "upgrade", "linktr.ee", "link", "email", "password", "online", "offline", "session", "class", "YouTube", "Instagram", "Spotify", "intermediate", "live", "tiktok", "replay", "video"];
                function italicizeWords($text, $words)
                {
                    foreach ($words as $word) {
                        // Case-insensitive, avoid double-wrapping
                        $text = preg_replace("/\b(" . preg_quote($word, "/") . ")\b/i", '<i>$1</i>', $text);
                    }
                    return $text;
                }
            @endphp

            @foreach ($faqs as $faq)
                <li class="my-2 rounded-lg border bg-white py-2 shadow-sm" x-data="accordion({{ $loop->index }})" :class="isActive()">
                    <div class="mx-2 flex flex-row sm:mx-5">
                        <div class="flex w-full flex-col p-3 max-sm:p-2">
                            <h2 @click="handleClick()" class="cursor-pointer text-lg font-medium max-sm:text-[16.5px]">
                                <span>{!! italicizeWords($faq["question"], $italicWords) !!}</span>
                            </h2>
                            <div x-ref="tab" :style="handleToggle()" class="max-h-0 overflow-hidden transition-all duration-500">
                                <p class="mt-3 text-justify text-[#6F6C90] max-sm:mt-2 max-sm:text-[15px]">
                                    {!! italicizeWords($faq["answer"], $italicWords) !!}
                                </p>
                            </div>
                        </div>

                        <div class="ml-6 hidden items-center sm:flex">
                            <template x-if="$store.accordion.tab === idx">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20 20L4 4M20 4L4 20" stroke="#3986A3" stroke-width="3" stroke-linecap="round" />
                                </svg>
                            </template>
                            <template x-if="$store.accordion.tab !== idx">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_7503_13741)">
                                        <path d="M22.3996 8L11.9996 19.2L1.59961 8" stroke="#3986A3" stroke-width="3" stroke-linecap="square" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_7503_13741">
                                            <rect width="24" height="24" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </template>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </section>

    {{-- FAQS END --}}
@endsection

@section("script")
    {{-- SCRIPT ACCORDION FAQS --}}
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.store('accordion', {
                tab: 0,
            });

            Alpine.data('accordion', (idx) => ({
                init() {
                    this.idx = idx;
                },
                idx: -1,
                handleClick() {
                    this.$store.accordion.tab = this.$store.accordion.tab === this.idx ? 0 : this.idx;
                },
                handleRotate() {
                    return this.$store.accordion.tab === this.idx ? 'rotate-180' : '';
                },
                handleToggle() {
                    return this.$store.accordion.tab === this.idx ? `max-height: ${this.$refs.tab.scrollHeight}px` : '';
                },
                isActive() {
                    return this.$store.accordion.tab === this.idx ? 'border-active' : '';
                },
            }));
        });
    </script>
    <script>
        allModals = ['.modal1', '.modal2', '.modal3'];
        const modalin = document.querySelector('.modalin');
        const header = document.querySelector('.header');
        const hero = document.querySelector('.hero');

        const openModal = (modal) => {
            const modalOpen = document.querySelector(modal);
            modalOpen.classList.remove('hidden');
            modalin.classList.remove('hidden');
            header.classList.remove('fixed');
            hero.style.height = '33rem';
        };

        const closeModal = (modal) => {
            const modalClose = document.querySelector(modal);
            modalClose.classList.add('hidden');
            modalin.classList.add('hidden');
            header.classList.add('fixed');
            hero.style.height = '';
        };

        document.querySelectorAll('.openModal').forEach((button) => {
            button.addEventListener('click', () => {
                const modalIndex = button.dataset.modalIndex;
                openModal(allModals[modalIndex]);
            });
        });

        document.querySelectorAll('.closeModal').forEach((button) => {
            button.addEventListener('click', () => {
                const modalIndex = button.dataset.modalIndex;
                closeModal(allModals[modalIndex]);
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const slider = document.getElementById('benefit-scroll');
            let isDown = false;
            let startX;
            let scrollLeft;

            slider.addEventListener('mousedown', (e) => {
                isDown = true;
                slider.classList.add('active'); // opsional: bisa tambahkan cursor-grabbing
                startX = e.pageX - slider.offsetLeft;
                scrollLeft = slider.scrollLeft;
                slider.style.cursor = 'grabbing';
                e.preventDefault();
            });
            slider.addEventListener('mouseleave', () => {
                isDown = false;
                slider.style.cursor = 'grab';
            });
            slider.addEventListener('mouseup', () => {
                isDown = false;
                slider.style.cursor = 'grab';
            });
            slider.addEventListener('mousemove', (e) => {
                if (!isDown) return;
                e.preventDefault();
                const x = e.pageX - slider.offsetLeft;
                const walk = (x - startX) * 1.5; // scroll-fast
                slider.scrollLeft = scrollLeft - walk;
            });
        });
    </script>

    {{-- SCRIPT ACCORDION FAQS --}}
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.store('accordion', {
                tab: 0,
            });

            Alpine.data('accordion', (idx) => ({
                init() {
                    this.idx = idx;
                },
                idx: -1,
                handleClick() {
                    this.$store.accordion.tab = this.$store.accordion.tab === this.idx ? 0 : this.idx;
                },
                handleRotate() {
                    return this.$store.accordion.tab === this.idx ? 'rotate-180' : '';
                },
                handleToggle() {
                    return this.$store.accordion.tab === this.idx ? `max-height: ${this.$refs.tab.scrollHeight}px` : '';
                },
                isActive() {
                    return this.$store.accordion.tab === this.idx ? 'border-active' : '';
                },
            }));
        });
    </script>
@endsection

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        Swal.fire({
            html: `
                <div style="position:relative;display:inline-block;">
                    <button id="customSwalClose" style="
                        position:absolute;
                        top:20px;
                        right:20px;
                        z-index:10;
                        background:rgba(255,255,255,0.85);
                        border:none;
                        border-radius:4px;
                        width:16px;
                        height:16px;
                        padding:0;
                        display:flex;
                        align-items:center;
                        justify-content:center;
                        cursor:pointer;
                        box-shadow:0 2px 8px rgba(0,0,0,0.08);
                        transition:background 0.2s;
                        outline:none; /* Menghilangkan outline */
                        " aria-label="Close">
                        <img src="/assets/images/landing/asset-kelas/class-journey/x.webp" alt="Close" style="width:10px;height:10px;object-fit:contain;" />
                    </button>
                    <img src="/assets/images/landing/asset-kelas/class-journey/poster-maret.webp" alt="Poster Class Journey" style="max-width:100%;border-radius:24px;" />
                </div>
            `,
            showCloseButton: false,
            showConfirmButton: false,
            background: 'transparent',
            customClass: {
                popup: 'shadow-lg',
            },
            didOpen: () => {
                const closeBtn = document.getElementById('customSwalClose');
                closeBtn.onclick = () => Swal.close();
                closeBtn.addEventListener('focus', function () {
                    this.style.outline = 'none';
                });
            },
        });
    });
</script>
