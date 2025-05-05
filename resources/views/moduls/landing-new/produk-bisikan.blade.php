@extends(
  "layouts.main-new",
  [
    "title" => "Berbinar Insightful Indonesia",
    "active" => "Produk Berbinar",
    "page" => "Bisikan",
  ]
)

@section("content")
  @section("content")
    {{-- HERO SECTION --}}
    <section class="relative mb-20 max-md:overflow-hidden">
      <div class="absolute left-0 top-5 z-0 max-sm:top-32">
        <img src="{{ asset("assets/images/landing/asset-konseling/vector/vector-hero1.svg") }}" alt="Vector" class="h-[500px] w-auto max-sm:h-[250px]" />
      </div>

      <div class="absolute right-0 top-8 z-0 max-md:-right-28 max-sm:-right-20 max-sm:top-40">
        <img src="{{ asset("assets/images/landing/asset-konseling/vector/vector-hero2.svg") }}" alt="Vector" class="h-[500px] w-auto max-sm:h-[250px]" />
      </div>

      <div class="relative">
        <div class="z-10 mx-20 mt-40 flex flex-row items-center justify-between gap-x-10 max-sm:mx-4 max-sm:mt-32">
          <div class="max-lg:min-w-auto flex max-w-xl flex-1 flex-col space-y-6 max-sm:space-y-2">
            <a href="{{ route("produk-new") }}">
              <div class="flex cursor-pointer items-center space-x-2 lg:order-1">
                <img src="{{ asset("assets/images/landing/asset-konseling/vector/left-arrow.svg") }}" alt="Left Arrow" class="h-3 w-auto" />
                <p class="text-[15px] font-semibold text-[#3986A3]">Produk Berbinar</p>
              </div>
            </a>

            <div class="hidden w-full items-center justify-center max-lg:flex-none max-md:flex lg:order-2 lg:w-auto">
              <img src="{{ asset("assets/images/landing/produk/bisikan/banner-1.png") }}" alt="Class" class="h-[340px] w-auto object-contain max-sm:h-[320px]" />
            </div>

            <div class="lg:order-3">
              <h2 class="text-gradient py-2 text-5xl font-bold max-sm:text-3xl">Bisikan</h2>
            </div>

            <div class="lg:order-4">
              <p class="text-justify text-lg text-[#70787D] max-lg:text-[17px] max-sm:text-[15px] max-sm:leading-normal">Selamat datang dalam petualangan psikologi bersama Bisikan Jangan lewatkan sharing session eksklusif kami di Instagram, di mana kita akan bersama-sama merambah ke dalam lapisan terdalam pikiran dan emosi. Temukan rahasia-rahasia kehidupan yang penuh warna bersama kami.</p>
            </div>
          </div>

          <div class="flex w-full flex-initial items-center justify-center max-lg:flex-1 max-md:hidden lg:w-auto">
            <img src="{{ asset("assets/images/landing/produk/bisikan/banner-1.png") }}" alt="Bisikan Hero" class="h-[340px] w-auto object-contain max-lg:h-[320px]" />
          </div>
        </div>
      </div>
    </section>

    {{-- KONTEN BISIKAN BERBINAR --}}
    <section class="px-4">
      <h1 class="mb-4 text-center text-2xl font-semibold">
        Konten BISIKAN
        <span class="inline-block bg-[#3986A3] px-2 py-1 text-white">Berbinar</span>
      </h1>

      <div class="rounded-3xl bg-white px-6 pb-8 pt-6 shadow-lg">
        <h2 class="text-center text-lg font-semibold">
          Bisikan
          <span class="text-primary">Episode 1</span>
        </h2>
        <div>
          <img src="{{ asset("assets/images/landing/produk/bisikan/bisikan-episode1.png") }}" alt="" />
        </div>
        <p class="my-3 text-justify text-sm text-[#70787D]">Dalam BISIKAN “Eps 1 :'Mental Health: Penting Banget Ya?”, kami merangkul pembahasannya dengan fokus pada kesadaran akan pentingnya kesehatan mental dalam kehidupan sehari-hari. Diskusi mencakup pemahaman mendalam tentang tanda-tanda dan gejala yang menandakan kesehatan mental yang baik, sekaligus memberikan pandangan tentang bagaimana mengidentifikasi potensi masalah. Mari saksikan BISIKAN episode selanjutnya.</p>
        <div>
          <a href="#" class="block rounded-lg bg-[#F7B23B] py-2 text-center font-semibold text-white">Tonton BISIKAN</a>
        </div>
      </div>
    </section>

    {{-- SWIPER KONTEN BISIKAN BERBINAR --}}
    <section>
      <div class="px-6 pt-10">
        <div class="swiper-container content-bisikan-swiper mt-8">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="rounded-2xl p-2 shadow-lg">
                <div>
                  <img src="{{ asset("assets/images/landing/produk/bisikan/bisikan-episode1.png") }}" alt="" />
                </div>
                <div class="flex flex-col gap-2 px-4 text-center">
                  <h2 class="text-center font-semibold">BISIKAN Episode 2</h2>
                  <p class="text-sm text-[#70787D]">Bersama: Danny Sanjaya Arfensia, S. Psi., M.Psi., Psikolog</p>
                </div>
                <a href="#" class="mt-3 block rounded-lg bg-orange-400 py-2 text-center text-sm font-semibold text-white">Tonton BISIKAN</a>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="rounded-2xl p-2 shadow-lg">
                <div>
                  <img src="{{ asset("assets/images/landing/produk/bisikan/bisikan-episode1.png") }}" alt="" />
                </div>
                <div class="flex flex-col gap-2 px-4 text-center">
                  <h2 class="text-center font-semibold">BISIKAN Episode 2</h2>
                  <p class="text-sm text-[#70787D]">Bersama: Danny Sanjaya Arfensia, S. Psi., M.Psi., Psikolog</p>
                </div>
                <a href="#" class="mt-3 block rounded-lg bg-orange-400 py-2 text-center text-sm font-semibold text-white">Tonton BISIKAN</a>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="rounded-2xl p-2 shadow-lg">
                <div>
                  <img src="{{ asset("assets/images/landing/produk/bisikan/bisikan-episode1.png") }}" alt="" />
                </div>
                <div class="flex flex-col gap-2 px-4 text-center">
                  <h2 class="text-center font-semibold">BISIKAN Episode 2</h2>
                  <p class="text-sm text-[#70787D]">Bersama: Danny Sanjaya Arfensia, S. Psi., M.Psi., Psikolog</p>
                </div>
                <a href="#" class="mt-3 block rounded-lg bg-orange-400 py-2 text-center text-sm font-semibold text-white">Tonton BISIKAN</a>
              </div>
            </div>
          </div>
          <div class="swiper-pagination mt-6" style="position: relative; height: 8px; margin-top: 20px"></div>
        </div>
      </div>
    </section>

    {{-- TOPIK KONTEN BISIKAN --}}
    <section>
      <div class="px-6 pt-10">
        <h1 class="bg-gradient-to-r from-[#3986A3] to-[#1C4352] bg-clip-text text-center font-[inter] text-3xl font-semibold text-transparent lg:tracking-wide">Topik Konten Bisikan</h1>
        <div class="swiper-container topic-content-swiper mt-8">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="flex flex-col items-center gap-5">
                <img src="{{ asset("assets/images/landing/produk/bisikan/konten-kesehatan-mental.png") }}" alt="" class="h-16" />
                <span class="inline-block text-center text-sm font-semibold">Kesehatan Mental</span>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="flex flex-col items-center gap-5">
                <img src="{{ asset("assets/images/landing/produk/bisikan/konten-regulasi-emosi.png") }}" alt="" class="h-16" />
                <span class="inline-block text-center text-sm font-semibold">Regulasi Emosi</span>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="flex flex-col items-center gap-5">
                <img src="{{ asset("assets/images/landing/produk/bisikan/konten-hubungan-interpersonal.png") }}" alt="" class="h-16" />
                <span class="inline-block text-center text-sm font-semibold">Hubungan Interpersonal</span>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="flex flex-col items-center gap-5">
                <img src="{{ asset("assets/images/landing/produk/bisikan/konten-self-growth.png") }}" alt="" class="h-16" />
                <span class="inline-block text-center text-sm font-semibold">Selft Growth</span>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="flex flex-col items-center gap-5">
                <img src="{{ asset("assets/images/landing/produk/bisikan/konten-mengenal-diri.png") }}" alt="" class="w-16" />
                <span class="inline-block text-center text-sm font-semibold">Mengenal diri lewat psikologi</span>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="flex flex-col items-center gap-5">
                <img src="{{ asset("assets/images/landing/produk/bisikan/konten-cerita-nyata.png") }}" alt="" class="w-16" />
                <span class="inline-block text-center text-sm font-semibold">Cerita nyata dan tips praktis dari narasumbe terpercaya</span>
              </div>
            </div>
          </div>
          <div class="swiper-pagination mt-6" style="position: relative; height: 8px; margin-top: 20px"></div>
        </div>
      </div>
    </section>

    {{-- MANFAAT MENDENGAR BISIKAN --}}
    <section class="px-4 mt-16">
      <h1 class="bg-gradient-to-r from-[rgb(57,134,163)] to-[#1C4352] bg-clip-text text-center font-[inter] text-3xl font-semibold text-transparent lg:tracking-wide">Manfaat Mendengar Bisikan</h1>
      <div class="flex flex-wrap justify-between gap-y-8 mt-8">
        <div class="relative basis-[calc(50%-0.25rem)] rounded-lg border-[2px] border-[#d7e6ed] px-2 pb-3 pt-8">
          <div class="absolute left-1/2 top-0 flex h-11 w-11 -translate-x-1/2 -translate-y-1/2 items-center justify-center rounded-full bg-white shadow-md">
            <img src="{{ asset("assets/images/landing/produk/bisikan/envelop.svg") }}" alt="" class="h-6 w-6" />
          </div>
          <div class="flex flex-col gap-1 text-center">
            <h3 class="font-semibold text-primary">Wawasan</h3>
            <span class="text-sm">Menambah wawasan tentang kesehatan mental</span>
          </div>
        </div>
        <div class="relative basis-[calc(50%-0.25rem)] rounded-lg border-[2px] border-[#d7e6ed] px-2 pb-3 pt-8">
          <div class="absolute left-1/2 top-0 flex h-11 w-11 -translate-x-1/2 -translate-y-1/2 items-center justify-center rounded-full bg-white shadow-md">
            <img src="{{ asset("assets/images/landing/produk/bisikan/envelop.svg") }}" alt="" class="h-6 w-6" />
          </div>
          <div class="flex flex-col gap-1 text-center">
            <h3 class="font-semibold text-primary">Self-healing</h3>
            <span class="text-sm">Memberi ruang refleksi dan self-healing</span>
          </div>
        </div>
        <div class="relative basis-[calc(50%-0.25rem)] rounded-lg border-[2px] border-[#d7e6ed] px-2 pb-3 pt-8">
          <div class="absolute left-1/2 top-0 flex h-11 w-11 -translate-x-1/2 -translate-y-1/2 items-center justify-center rounded-full bg-white shadow-md">
            <img src="{{ asset("assets/images/landing/produk/bisikan/envelop.svg") }}" alt="" class="h-6 w-6" />
          </div>
          <div class="flex flex-col gap-1 text-center">
            <h3 class="font-semibold text-primary">Pengetahuan</h3>
            <span class="text-sm">Mendapat pengetahuan dari praktisi dan ahli terpercaya</span>
          </div>
        </div>
        <div class="relative basis-[calc(50%-0.25rem)] rounded-lg border-[2px] border-[#d7e6ed] px-2 pb-3 pt-8">
          <div class="absolute left-1/2 top-0 flex h-11 w-11 -translate-x-1/2 -translate-y-1/2 items-center justify-center rounded-full bg-white shadow-md">
            <img src="{{ asset("assets/images/landing/produk/bisikan/envelop.svg") }}" alt="" class="h-6 w-6" />
          </div>
          <div class="flex flex-col gap-1 text-center">
            <h3 class="font-semibold text-primary">Teman Perjalanan</h3>
            <span class="text-sm">Menjadi teman perjalanan saat bekerja, belajar, atau santi</span>
          </div>
        </div>
        <div class="relative basis-[calc(50%-0.25rem)] rounded-lg border-[2px] border-[#d7e6ed] px-2 pb-3 pt-8">
          <div class="absolute left-1/2 top-0 flex h-11 w-11 -translate-x-1/2 -translate-y-1/2 items-center justify-center rounded-full bg-white shadow-md">
            <img src="{{ asset("assets/images/landing/produk/bisikan/envelop.svg") }}" alt="" class="h-6 w-6" />
          </div>
          <div class="flex flex-col gap-1 text-center">
            <h3 class="font-semibold text-primary">Mindful Living</h3>
            <span class="text-sm">Mendukung gaya hidup yang lebih mindful dan seimbang</span>
          </div>
        </div>
      </div>
    </section>

    {{-- FAQS START --}}
    <section class="z-10 mx-4 sm:mx-20 lg:my-14">
      <ul class="flex flex-col">
        @php
          $index = 0;
        @endphp

        @foreach ($faqs as $faq)
          <li class="my-2 rounded-lg border bg-white py-2 shadow-sm" x-data="accordion({{ $index }})" :class="isActive()">
            <div class="mx-2 flex flex-row sm:mx-5">
              <div class="flex w-full flex-col p-3 max-sm:p-2">
                <h2 @click="handleClick()" class="cursor-pointer text-lg font-medium max-sm:text-[16.5px]">
                  <span>{{ $faq["question"] }}</span>
                </h2>
                <div x-ref="tab" :style="handleToggle()" class="max-h-0 overflow-hidden transition-all duration-500">
                  <p class="mt-3 text-justify text-[#6F6C90] max-sm:mt-2 max-sm:text-[15px]">
                    {{ $faq["answer"] }}
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
          @php
            $index++;
          @endphp
        @endforeach
      </ul>
    </section>

    {{-- FAQS END --}}

    {{-- SWIPER STYLE --}}
    <style>
      .swiper {
        width: 100%;
        height: 400px;
        margin-left: auto;
        margin-right: auto;
        position: relative;
        overflow: hidden;
        list-style: none;
        padding: 0;
        z-index: 1;
      }

      .swiper-wrapper {
        position: relative;
        width: 100%;
        height: 85%;
        z-index: 1;
        display: flex;
        transition-property: transform;
        box-sizing: content-box;
      }

      .swiper-slide {
        flex-shrink: 0;
        width: 100%;
        height: 100%;
        position: relative;
        transition-property: transform, opacity;
        display: flex;
        justify-content: center;
        align-items: center;
        opacity: 0.6;
        transform: scale(0.85);
        transition: all 0.3s ease;
      }

      .swiper-slide-active {
        opacity: 1 !important;
        transform: scale(1) !important;
      }

      .swiper-pagination {
        position: relative;
        text-align: center;
        transition: 300ms opacity;
        transform: translate3d(0, 0, 0);
        z-index: 10;
        height: 8px;
        width: 100%;
        margin-top: 20px;
      }

      .swiper-pagination-progressbar {
        background: rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        position: relative;
        height: 8px !important;
      }

      .swiper-pagination-progressbar .swiper-pagination-progressbar-fill {
        background: #f7b23b;
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        transform: scale(0);
        transform-origin: left top;
        border-radius: 10px;
      }

      .topic-content-swiper .swiper-pagination-progressbar .swiper-pagination-progressbar-fill {
        background: #9dd4ee;
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        transform: scale(0);
        transform-origin: left top;
        border-radius: 10px;
      }

      @media (min-width: 768px) {
        #customSection {
          padding-top: 10rem; /* setara dengan md:pt-20 di Tailwind */
        }
      }
    </style>
    <script>
      document.addEventListener('DOMContentLoaded', function () {
        const contentBisikanSwiper = new Swiper('.content-bisikan-swiper', {
          slidesPerView: 1.2,
          centeredSlides: true,
          spaceBetween: 20,
          loop: true,
          pagination: {
            el: '.swiper-pagination',
            type: 'progressbar',
          },
          breakpoints: {
            640: {
              slidesPerView: 1.5,
            },
            768: {
              slidesPerView: 1.8,
            },
            1024: {
              slidesPerView: 2.2,
            },
          },
        });

        const topicContentBisikan = new Swiper('.topic-content-swiper', {
          spaceBetween: 20,
          loop: true,
          pagination: {
            el: '.swiper-pagination',
            type: 'progressbar',
          },
          breakpoints: {
            0: {
              slidesPerGroup: 1,
              slidesPerView: 3.5,
            },
            640: {
              slidesPerView: 1.5,
            },
            768: {
              slidesPerView: 1.8,
            },
            1024: {
              slidesPerView: 2.2,
            },
          },
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
    {{-- SCRIPT ACCORDION FAQS --}}
  @endsection
@endsection
