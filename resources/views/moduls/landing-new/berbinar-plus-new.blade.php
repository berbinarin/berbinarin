@extends(
  "layouts.main-new",
  [
    "title" => "Berbinar Insightful Indonesia",
    "active" => "Produk Berbinar",
    "page" => "berbinar+",
  ]
)

@section("content")
  {{-- HERO SECTION --}}
  <section class="relative mb-12 max-md:overflow-hidden">
    <div class="absolute left-0 top-5 z-0 max-sm:top-32">
      <img
        src="{{ asset("assets/images/landing/asset-konseling/vector/vector-hero1.svg") }}"
        alt="Vector"
        class="h-[500px] w-auto max-sm:h-[250px]"
      />
    </div>

    <div class="absolute right-0 top-8 z-0 max-md:-right-28 max-sm:-right-20 max-sm:top-40">
      <img
        src="{{ asset("assets/images/landing/asset-konseling/vector/vector-hero2.svg") }}"
        alt="Vector"
        class="h-[500px] w-auto max-sm:h-[250px]"
      />
    </div>

    <div class="relative">
      <div
        class="z-10 mx-20 mt-40 flex flex-row items-center justify-between gap-x-10 max-sm:mx-4 max-sm:mt-32"
      >
        <div class="max-lg:min-w-auto flex max-w-xl flex-1 flex-col space-y-6 max-sm:space-y-2">
          <a href="{{ route("produk-new") }}">
            <div class="flex cursor-pointer items-center space-x-2 lg:order-1">
              <img
                src="{{ asset("assets/images/landing/asset-konseling/vector/left-arrow.svg") }}"
                alt="Left Arrow"
                class="h-3 w-auto"
              />
              <p class="text-[15px] font-semibold text-[#3986A3]">Produk Berbinar</p>
            </div>
          </a>

          <div
            class="hidden w-full items-center justify-center max-lg:flex-none max-md:flex lg:order-2 lg:w-auto"
          >
            <img
              src="{{ asset("assets/images/landing/asset-kelas/berbinar-plus/hero.png") }}"
              alt="Class"
              class="h-[340px] w-auto object-contain max-sm:h-[320px]"
            />
          </div>

          <div class="lg:order-3">
            <h2 class="text-gradient py-2 text-5xl font-bold max-sm:text-3xl">Berbinar+</h2>
          </div>

          <div class="lg:order-4">
            <p
              class="text-justify text-lg text-[#70787D] max-lg:text-[17px] max-sm:text-[15px] max-sm:leading-normal"
            >
              Berbinar+ adalah layanan One-Package yang terdiri dari kelas daring berbasis video
              pembelajaran, konseling materi secara langsung, dan psikotes yang disediakan oleh
              Berbinar Insightful Indonesia. Peserta bebas memilih kelas yang ditawarkan serta
              layanan apa saja yang akan diambil.
            </p>
          </div>
        </div>

        <div
          class="flex w-full flex-initial items-center justify-center max-lg:flex-1 max-md:hidden lg:w-auto"
        >
          <img
            src="{{ asset("assets/images/landing/asset-kelas/berbinar-plus/hero.png") }}"
            alt="Class"
            class="h-[340px] w-auto object-contain max-lg:h-[320px]"
          />
        </div>
      </div>
    </div>
  </section>

  {{-- PRODUK BERBINAR PLUS --}}
  <section class="relative mb-12">
    <div class="absolute left-0 top-4 z-0 max-sm:top-40">
      <img
        src="{{ asset('assets/images/landing/asset-konseling/vector/vector-line.svg') }}"
        alt="Vector Image"
        class=""
      />
    </div>

    <h2
      class="font relative z-10 mx-20 mb-12 mt-14 text-center text-4xl font-semibold text-black max-sm:mx-2 max-sm:text-[29px]"
    >
      Daftar Kelas
      <span class="bg-primary px-2 text-white">Berbinar +</span>
    </h2>

    <div x-data="{ tab: 'DM' }" class="relative z-20 mx-auto">
      <!-- Tab Navigation -->
      <div
        class="mx-auto mb-4 flex flex-wrap items-center justify-between rounded-2xl bg-white p-2 shadow-md max-lg:mx-20 max-md:justify-center max-sm:mx-4 max-sm:max-w-full lg:max-w-screen-lg"
      >
        <button
          @click="tab = 'SS'"
          :class="{'bg-[#3986A3] font-medium text-white': tab === 'SS'}"
          class="rounded-xl p-2 font-medium text-black"
        >
          Socmed Specialist
        </button>
        <button
          @click="tab = 'PM'"
          :class="{'bg-[#3986A3] font-medium text-white': tab === 'PM'}"
          class="rounded-xl p-2 font-medium text-black"
        >
          Product Management
        </button>
        <button
          @click="tab = 'HR'"
          :class="{'bg-[#3986A3] font-medium text-white': tab === 'HR'}"
          class="rounded-xl p-2 font-medium text-black"
        >
          Human Resource
        </button>
        <button
          @click="tab = 'GD'"
          :class="{'bg-[#3986A3] font-medium text-white': tab === 'GD'}"
          class="rounded-xl p-2 font-medium text-black"
        >
          Graphic Designer
        </button>
        <button
          @click="tab = 'DM'"
          :class="{'bg-[#3986A3] font-medium text-white': tab === 'DM'}"
          class="rounded-xl p-2 font-medium text-black"
        >
          Digital Marketing
        </button>
      </div>

      <!-- Card Layout -->
      <div
        class="relative mx-20 my-8 items-center overflow-hidden rounded-3xl border bg-white shadow-md transition-all duration-300 ease-in-out max-sm:mx-4 max-sm:mb-8 max-sm:mt-4"
      >
        <!-- Socmed Specialist(SS) -->
        <div
          x-show="tab === 'SS'"
          x-transition:enter="transform transition duration-300 ease-out"
          x-transition:enter-start="translate-x-full opacity-0"
          x-transition:enter-end="translate-x-0 opacity-100"
          x-transition:leave="transform transition duration-300 ease-in"
          x-transition:leave-start="translate-x-0 opacity-100"
          x-transition:leave-end="-translate-x-full opacity-0"
          x-cloak
          class="p-8 max-sm:p-4"
        >
          <div class="flex flex-col gap-4">
            <div class="relative">
              {{-- IMAGE --}}
              <div class="max-md:hidden">
                <img
                  src="{{ asset("assets/images/landing/asset-kelas/berbinar-plus/ss.png") }}"
                  alt="Konseling"
                  class="float-right ml-6 h-auto w-[320px] object-contain max-lg:w-[280px]"
                />
              </div>

              <!-- DESCRIPTION -->
              <h1 class="text-gradient mb-2 text-3xl font-bold max-sm:mb-0 max-sm:text-2xl">
                Social Media Specialist
              </h1>
              <div class="my-2 flex justify-center md:hidden">
                <img
                  src="{{ asset("assets/images/landing/asset-kelas/berbinar-plus/ss.png") }}"
                  alt="Psikotes"
                  class="h-auto w-[280px] object-contain"
                />
              </div>
              <p class="mb-4 text-justify text-[#70787D] max-sm:text-[15px]">
                Kelas yang ditawarkan untuk membantu dalam merencanakan, membuat, dan mengelola
                konten yang sesuai di platform media sosial.
              </p>
              <ul
                class="list-disc space-y-3 pl-5 text-justify text-[#3F3F3F] marker:text-[#3986A3] max-sm:space-y-1 max-sm:text-[15px]"
              >
                <li>
                  <p class="font-semibold">
                    Strategi Pemasaran Konten yang Efektif dan Pemasaran Digital
                  </p>
                  <p class="text-[#70787D]">
                    Pelajari dasar-dasar strategi pemasaran konten, merancang ide kreatif dan
                    memanfaatkan platform digital untuk menjangkau audiens yang lebih luas.
                  </p>
                </li>
                <li>
                  <p class="font-semibold">Pemasaran Influencer dan Kemitraan</p>
                  <p class="text-[#70787D]">
                    Temukan cara mudah untuk bekerja sama dengan influencer dan membangun kemitraan
                    yang mendukung pemasaran.
                  </p>
                </li>
                <li>
                  <p class="font-semibold">Copywriting for Social Media Content & Campaign</p>
                  <p class="text-[#70787D]">
                    Pelajari trik dasar menulis teks menarik untuk konten media sosial dan ciptakan
                    postingan yang berkesan dan mendorong lebih banyak interaksi di platform
                    favoritmu.
                  </p>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Product Management(PM) -->
        <div
          x-show="tab === 'PM'"
          x-transition:enter="transform transition duration-300 ease-out"
          x-transition:enter-start="translate-x-full opacity-0"
          x-transition:enter-end="translate-x-0 opacity-100"
          x-transition:leave="transform transition duration-300 ease-in"
          x-transition:leave-start="translate-x-0 opacity-100"
          x-transition:leave-end="-translate-x-full opacity-0"
          x-cloak
          class="p-8 max-sm:p-4"
        >
          <div class="flex flex-col gap-4">
            <div class="relative">
              {{-- IMAGE --}}
              <div class="max-md:hidden">
                <img
                  src="{{ asset("assets/images/landing/asset-kelas/berbinar-plus/pm.png") }}"
                  alt="Psikotes"
                  class="float-right ml-6 h-auto w-[320px] object-contain max-lg:w-[280px]"
                />
              </div>

              <!-- DESCRIPTION -->
              <h1 class="text-gradient mb-2 text-3xl font-bold max-sm:mb-0 max-sm:text-2xl">
                Product Management
              </h1>
              <div class="my-2 flex justify-center md:hidden">
                <img
                  src="{{ asset("assets/images/landing/asset-kelas/berbinar-plus/pm.png") }}"
                  alt="Psikotes"
                  class="h-auto w-[280px] object-contain"
                />
              </div>
              <p class="mb-4 text-justify text-[#70787D] max-sm:text-[15px]">
                Kelas yang ditawarkan untuk membantu dalam menentukan strategi perusahaan yang
                berhubungan dengan pengembangan & peluncuran suatu produk bisnis.
              </p>
              <ul
                class="list-disc space-y-3 pl-5 text-justify text-[#3F3F3F] marker:text-[#3986A3] max-sm:space-y-1 max-sm:text-[15px]"
              >
                <li>
                  <p class="font-semibold">Pengembangan Produk Digital</p>
                  <p class="text-[#70787D]">
                    Pelajari langkah-langkah sederhana untuk mengembangkan produk digital Cocok
                    untuk kamu yang baru ingin mengenal dunia teknologi dan ingin tahu bagaimana ide
                    bisa menjadi solusi nyata.
                  </p>
                </li>
                <li>
                  <p class="font-semibold">
                    Pengenalan & Strategi Product Management dalam Dunia Kerja
                  </p>
                  <p class="text-[#70787D]">
                    Pelajari peran Product Manager dan dasar-dasar strategi manajemen produk dengan
                    cara yang ringan dan praktis, cocok untuk Kamu yang ingin memahami profesi ini
                    lebih dalam.
                  </p>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Human Resource(HR) -->
        <div
          x-show="tab === 'HR'"
          x-transition:enter="transform transition duration-300 ease-out"
          x-transition:enter-start="translate-x-full opacity-0"
          x-transition:enter-end="translate-x-0 opacity-100"
          x-transition:leave="transform transition duration-300 ease-in"
          x-transition:leave-start="translate-x-0 opacity-100"
          x-transition:leave-end="-translate-x-full opacity-0"
          x-cloak
          class="p-8 max-sm:p-4"
        >
          <div class="flex flex-col gap-4">
            <div class="relative">
              {{-- IMAGE --}}
              <div class="max-md:hidden">
                <img
                  src="{{ asset("assets/images/landing/asset-kelas/berbinar-plus/hr.png") }}"
                  alt="Class"
                  class="float-right ml-6 h-auto w-[320px] object-contain max-lg:w-[280px]"
                />
              </div>

              <!-- DESCRIPTION -->
              <h1 class="text-gradient mb-2 text-3xl font-bold max-sm:mb-0 max-sm:text-2xl">
                Human Resource
              </h1>
              <div class="my-2 flex justify-center md:hidden">
                <img
                  src="{{ asset("assets/images/landing/asset-kelas/berbinar-plus/hr.png") }}"
                  alt="Class"
                  class="h-auto w-[280px] object-contain"
                />
              </div>
              <p class="mb-4 text-justify text-[#70787D] max-sm:text-[15px]">
                Kelas yang ditawarkan untuk membantu individu atau tim dalam mempelajari dan
                meningkatkan keterampilan mengelola produk dan layanan.
              </p>
              <ul
                class="list-disc space-y-3 pl-5 text-justify text-[#3F3F3F] marker:text-[#3986A3] max-sm:space-y-1 max-sm:text-[15px]"
              >
                <li>
                  <p class="font-semibold">Pengantar Sumber Daya Manusia dan Mekanisme Kerja</p>
                  <p class="text-[#70787D]">
                    Pelajari dasar-dasar bidang HR, dan bagaimana perannya mendukung operasional
                    perusahaan.
                  </p>
                </li>
                <li>
                  <p class="font-semibold">Human Resource Recruitment dan Struktur Organisasi</p>
                  <p class="text-[#70787D]">
                    Belajar langkah awal dalam proses rekrutmen, seperti menyaring kandidat dan
                    wawancara sederhana.
                  </p>
                </li>
                <li>
                  <p class="font-semibold">Career Preparation</p>
                  <p class="text-[#70787D]">
                    Persiapkan dirimu untuk karier di bidang HR dengan tips sederhana, mulai dari
                    membuat CV hingga menghadapi wawancara kerja.
                  </p>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Graphic Designer(GD) -->
        <div
          x-show="tab === 'GD'"
          x-transition:enter="transform transition duration-300 ease-out"
          x-transition:enter-start="translate-x-full opacity-0"
          x-transition:enter-end="translate-x-0 opacity-100"
          x-transition:leave="transform transition duration-300 ease-in"
          x-transition:leave-start="translate-x-0 opacity-100"
          x-transition:leave-end="-translate-x-full opacity-0"
          x-cloak
          class="p-8 max-sm:p-4"
        >
          <div class="flex flex-col gap-4">
            <div class="relative">
              {{-- IMAGE --}}
              <div class="max-md:hidden">
                <img
                  src="{{ asset("assets/images/landing/asset-kelas/berbinar-plus/gd.png") }}"
                  alt="Consulting"
                  class="float-right ml-6 h-auto w-[320px] object-contain max-lg:w-[280px]"
                />
              </div>

              <!-- DESCRIPTION -->
              <h1 class="text-gradient mb-2 text-3xl font-bold max-sm:mb-0 max-sm:text-2xl">
                Design Graphic
              </h1>
              <div class="my-2 flex justify-center md:hidden">
                <img
                  src="{{ asset("assets/images/landing/asset-kelas/berbinar-plus/gd.png") }}"
                  alt="Consulting"
                  class="h-auto w-[280px] object-contain"
                />
              </div>
              <p class="text-justify text-[#70787D] max-sm:text-[15px]">
                Kelas yang ditawarkan untuk membantu dalam mempelajari dasar-dasar desain grafis dan
                teknik desain grafis yang lebih kompleks.
              </p>
              <ul
                class="list-disc space-y-3 pl-5 text-justify text-[#3F3F3F] marker:text-[#3986A3] max-sm:space-y-1 max-sm:text-[15px]"
              >
                <li>
                  <p class="font-semibold">
                    Prinsip-prinsip Desain Grafis & Jenis Elemen Desain Grafis
                  </p>
                  <p class="text-[#70787D]">
                    Kenali dasar-dasar desain grafis, seperti warna, tipografi, dan elemen visual
                    lainnya.
                  </p>
                </li>
                <li>
                  <p class="font-semibold italic">
                    Presentasi Desain & Portofolio Desain Grafis yang Efektif
                  </p>
                  <p class="text-[#70787D]">
                    Pelajari cara menyusun portofolio sederhana namun menarik yang bisa memamerkan
                    kreativitasmu.
                  </p>
                </li>
                <li>
                  <p class="font-semibold">
                    Desain Grafis untuk Sosial Media & Teknik Ilustrasi Digital
                  </p>
                  <p class="text-[#70787D]">
                    Kenali teknik desain sederhana yang bisa langsung diterapkan untuk media sosial,
                    mulai dari membuat postingan hingga ilustrasi digital yang menarik perhatian.
                  </p>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Digital Marketing(DM) -->
        <div
          x-show="tab === 'DM'"
          x-transition:enter="transform transition duration-300 ease-out"
          x-transition:enter-start="translate-x-full opacity-0"
          x-transition:enter-end="translate-x-0 opacity-100"
          x-transition:leave="transform transition duration-300 ease-in"
          x-transition:leave-start="translate-x-0 opacity-100"
          x-transition:leave-end="-translate-x-full opacity-0"
          x-cloak
          class="p-8 max-sm:p-4"
        >
          <div class="flex flex-col gap-4">
            <div class="relative">
              {{-- IMAGE --}}
              <div class="max-md:hidden">
                <img
                  src="{{ asset("assets/images/landing/asset-kelas/berbinar-plus/dm.png") }}"
                  alt="MoodScan Tees"
                  class="float-right ml-6 h-auto w-[320px] object-contain max-lg:w-[280px]"
                />
              </div>

              <!-- DESCRIPTION -->
              <h1 class="text-gradient mb-2 text-3xl font-bold max-sm:mb-0 max-sm:text-2xl">
                Digital Marketing
              </h1>
              <div class="my-2 flex justify-center md:hidden">
                <img
                  src="{{ asset("assets/images/landing/asset-kelas/berbinar-plus/dm.png") }}"
                  alt="MoodScan Tees"
                  class="h-auto w-[280px] object-contain"
                />
              </div>
              <ul
                class="list-disc space-y-3 pl-5 text-justify text-[#3F3F3F] marker:text-[#3986A3] max-sm:space-y-1 max-sm:text-[15px]"
              >
                <li>
                  <p class="font-semibold">
                    Knowing Digital Marketing: Understanding the Essentials
                  </p>
                  <p class="text-[#70787D]">
                    Pelajari dasar-dasar hingga elemen penting seperti media sosial, SEO, dan
                    strategi digital yang simpel namun impactful. Pelajari juga tren terbaru dan
                    alat populer seperti Google Analytics untuk langkah awal yang tepat!
                  </p>
                </li>
                <li>
                  <p class="font-semibold italic">
                    Mastering Social Media Marketing: Strategy, Campaigns, and Engagement
                  </p>
                  <p class="text-[#70787D]">
                    Kamu akan belajar membuat kampanye kreatif di platform populer seperti Instagram
                    dan TikTok, sambil memahami strategi engagement yang tepat.
                  </p>
                </li>
                <li>
                  <p class="font-semibold">
                    SEO Basics: Boosting Your Visibility on Search Engines
                  </p>
                  <p class="text-[#70787D]">
                    Pelajari dasar-dasar SEO dengan cara yang simpel! Mulai dari riset kata kunci
                    hingga cara optimasi konten.
                  </p>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- LAYANAN BERBINAR PLUS --}}
  <section class="bg-layanan-desktop relative mx-20 h-[280px] rounded-3xl bg-cover p-10 max-md:my-5 max-md:h-[600px] max-md:overflow-hidden max-sm:mx-4 max-sm:h-[500px] mb-12">
    <img
      src="{{asset('assets/images/landing/vector-curling-mobile.png')}}"
      alt="Background"
      class="absolute -top-[150px] left-0 hidden w-[1000px] rounded-t-3xl object-cover max-md:-top-[220px] max-md:flex max-md:h-[700px] max-sm:-top-[200px] max-sm:h-[600px] max-sm:w-[1500px]"
    />
    <div class="absolute inset-0 flex rounded-3xl bg-[#2D6B8280] max-md:hidden"></div>

    <div class="relative flex flex-col justify-center items-center space-y-4 text-center">
      <h1 class="text-3xl font-semibold text-white max-sm:text-2xl mb-4">
        Layanan Berbinar
        <span class="italic">Consulting</span>
      </h1>
        <div class="w-full h-96 lg:max-w-screen-lg flex flex-col items-center lg:flex-row lg:justify-center gap-4 lg:overflow-visible overflow-y-scroll scrollbar-hide">
            <div class="w-full lg:w-1/3 h-96 bg-white shadow-lg rounded-xl p-10 lg:overflow-scroll lg:scrollbar-hide">
                <h3 class="text-lg font-semibold leading-tight text-black mb-4">Kelas Daring 👩‍💻</h3>
                <img
                    src="{{ asset("assets/images/landing/asset-consulting/line.png") }}"
                    alt="line"
                    class="mb-4 hidden scale-y-150 lg:block"
                />
                <p class="font-base text-justify text-[#70787D]">
                    Pemberian akses video materi yang disampaikan oleh narasumber sekaligus mentor kompeten sesuai dengan topik kelas yang tersedia. Kelas yang kami sediakan cukup bervariatif misal kelas Jobseekers yang dapat membantu dirimu untuk menemukan pekerjaan.
                </p>

            </div>
            <div class="w-full lg:w-1/3 h-96 bg-white shadow-lg rounded-xl p-10 lg:overflow-scroll lg:scrollbar-hide">
                <h3 class="text-lg font-semibold leading-tight text-black mb-4">Konseling 💬</h3>
                <img
                    src="{{ asset("assets/images/landing/asset-consulting/line.png") }}"
                    alt="line"
                    class="mb-4 hidden scale-y-150 lg:block"
                />
                <ul class="space-y-4 text-gray-600 text-base">
                    <li class="flex items-start gap-2">
                        <svg class="w-5 h-5 text-[#2D6B82] mt-1 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                        </svg>
                        <div>
                            <p class="font-base text-justify text-[#70787D]">
                                Psikolog Counseling: Layanan dari ahli untuk membantu individu dengan masalah kepribadian, mental, dll.
                            </p>
                        </div>
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-5 h-5 text-[#2D6B82] mt-1 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                        </svg>
                        <div>
                            <p class="font-base text-justify text-[#70787D]">
                                Peer Counseling: Konseling oleh sebaya yang dilatih oleh psikolog berizin, untuk melayani klien seusia.
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="w-full lg:w-1/3 h-96 bg-white shadow-lg rounded-xl p-10 lg:overflow-scroll lg:scrollbar-hide">
                <h3 class="text-lg font-semibold leading-tight text-black mb-4">Psikotes 🧠️</h3>
                <img
                    src="{{ asset("assets/images/landing/asset-consulting/line.png") }}"
                    alt="line"
                    class="mb-4 hidden scale-y-150 lg:block"
                />
                <p class="font-base text-justify text-[#70787D]">
                    Paket upgrade ketiga yang ditawarkan oleh Berbinar Insightful Indonesia ini tersedia apabila peserta masih ingin mencari informasi tambahan yang mendalam terkait materi yang telah diterima setelah melewati dua tahap sebelumnya.
                </p>

            </div>
        </div>
    </div>
  </section>

    {{--PEMATERI BERBINAR PLUS--}}
  <section class="relative w-full lg:mt-52 mb-12">
      <div class="relative justify-center text-center mx-[320px] max-sm:mt-12 max-sm:mx-3 max-xl:mx-12 mt-8 z-10">
          <h1 class="max-sm:text-[29px] text-4xl font font-semibold text-black mb-8">Pemateri <span class="bg-[#3886A3] text-white px-2 ">Berbinar +</span></h1>
          <p class="text-[#70787D] max-sm:text-[15px] text-lg max-sm:leading-snug max-w-screen-lg mb-4">
              Berbinar+ menghadirkan para pemateri profesional yang ahli di bidangnya, dengan pengalaman yang relevan dan pendekatan psikologis, setiap sesi dirancang untuk memberikan wawasan mendalam serta keterampilan praktis yang dapat langsung diterapkan dalam pengembangan diri maupun karier peserta.
          </p>
      </div>

      <div class="swiperContainer md:overflow-scroll md:scrollbar-hide">
          <div class="swiper mt-10" id="swiperPsikolog">
              <div class="swiper-wrapper">
                  @foreach ($psikologs as $psikolog)
                      <div class="swiper-slide">
                          <div class="flex flex-col items-center">
                              <img src="{{ asset($psikolog['image']) }}" alt="{{ $psikolog['name'] }}" class="h-[180px] max-sm:h-[140px] w-auto">
                              <p class="text-lg max-sm:text-[16px] text-black font-semibold text-center mt-2 max-sm:leading-snug">
                                  {{ $psikolog['name'] }}
                              </p>
{{--                              @dump($psikolog['title'] === '-')--}}
{{--                              @dump($psikolog['field'])--}}
                              <span class="font-xs text-sm text-center text-[#70787D]">{{ $psikolog['field'] }}</span>
                              @if($psikolog['title'] !== '-')
                                  <span class="font-xs text-sm text-center text-[#70787D]">"{{ $psikolog['title'] }}"</span>
                              @endif
                          </div>
                      </div>
                  @endforeach
              </div>

              <div class="flex max-lg:hidden">
                  <div class="swiper-button-prev">
                      <img src="{{ asset('assets/images/landing/asset-konseling/vector/left-navigation.svg') }}" alt="prev-button" class="w-3 h-auto" />
                  </div>
                  <div class="swiper-button-next">
                      <img src="{{ asset('assets/images/landing/asset-konseling/vector/right-navigation.svg') }}" alt="next-button" class="w-3 h-auto" />
                  </div>
              </div>

              <div class="pt-10 max-sm:pt-4">
                  <div class="swiper-scrollbar hidden max-lg:flex"></div>
              </div>
          </div>
      </div>
  </section>

    {{--HARGA LAYANAN BERBINAR PLUS--}}
  <section class="bg-layanan-desktop relative mx-20 h-96 rounded-3xl bg-cover p-10 max-md:my-5 max-md:h-[600px] max-md:overflow-hidden max-sm:mx-4 max-sm:h-[500px] mb-12">
      <img
          src="{{asset('assets/images/landing/vector-curling-mobile.png')}}"
          alt="Background"
          class="absolute -top-[150px] left-0 hidden w-[1000px] rounded-t-3xl object-cover max-md:-top-[220px] max-md:flex max-md:h-[700px] max-sm:-top-[200px] max-sm:h-[600px] max-sm:w-[1500px]"
      />
      <div class="absolute inset-0 flex rounded-3xl bg-[#2D6B8280] max-md:hidden"></div>

      <div class="relative flex flex-col justify-center items-center space-y-4 text-center mb-4">
          <h1 class="text-3xl font-semibold text-white max-sm:text-2xl mb-4">
              Layanan Berbinar +
          </h1>
      </div>
      <div class="relative z-20 w-full h-96 lg:h-auto overflow-y-scroll lg:overflow-y-visible scrollbar-hide lg:flex lg:flex-row lg:gap-4 lg:py-4 lg:items-stretch">
        <div class="flex flex-col justify-between w-full lg:w-1/4 bg-white/90 mb-4 rounded-2xl shadow-lg p-6 lg:mt-20">
          <h3 class="mx-auto text-center font-semibold text-2xl mb-4">{{$layanan_berbinar_plus['insight']['name']}}</h3>
              <span class="block mx-auto font-semibold text-3xl text-primary text-center mb-8">{{$layanan_berbinar_plus['insight']['price']}}</span>
              <img src="{{asset('assets/images/landing/asset-kelas/berbinar-plus/line-plus.png')}}" alt="line-plus" class="mb-8 mx-auto">
              <ul class="space-y-4 text-gray-600 text-base h-24 w-full overflow-y-scroll scrollbar-hide mb-12">
                  @foreach($layanan_berbinar_plus['insight']['services'] as $item)
                  <li class="flex items-start gap-2">
                      <svg class="w-5 h-5 text-green-600 mt-1 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                          <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm13.707-1.293a1 1 0 0 0-1.414-1.414L11 12.586l-1.793-1.793a1 1 0 0 0-1.414 1.414l2.5 2.5a1 1 0 0 0 1.414 0l4-4Z" clip-rule="evenodd"/>
                      </svg>
                      <div>
                          <p class="font-base text-justify text-[#70787D]">
                              {{ $item }}
                          </p>
                      </div>
                  </li>
                  @endforeach
              </ul>
              <a href="#" class="block w-full py-1">
                  <div class="mx-auto w-fit py-2 px-8  bg-gradient-to-l from-[#AD7D29] hover:from-[#AD7D29]/80 to-[#F7B23B] hover:to-[#F7B23B]/80 rounded-lg flex justify-center items-center hover:shadow-lg">
                      <span class="text-white">Mulai Sekarang</span>
                  </div>
              </a>
          </div>
          <div class="w-full lg:w-1/2 flex flex-col bg-transparent mb-4 pt-2">
            <div x-data="{ tab: 'online' }" class="relative z-20 mx-auto w-full">
                <!-- Tab Navigation -->
                <div class="mx-auto flex flex-wrap items-center rounded-2xl bg-white p-1.5 shadow-md max-lg:mx-20 max-md:justify-center max-sm:mx-4 max-sm:max-w-full lg:max-w-screen-lg">
                    <button
                        @click="tab = 'online'"
                        :class="{'bg-gradient-to-l from-[#193A46] to-[#37829E] font-medium text-white': tab === 'online'}"
                        class="rounded-xl p-2 font-medium text-black w-1/2"
                    >
                        Online
                    </button>
                    <button
                        @click="tab = 'offline'"
                        :class="{'bg-gradient-to-l from-[#193A46] to-[#37829E] font-medium text-white': tab === 'offline'}"
                        class="rounded-xl p-2 font-medium text-black w-1/2"
                    >
                        Offline
                    </button>
                </div>

                <!-- Card Layout -->
                <div
                    class="relative border mt-5 bg-white/90 rounded-2xl shadow-md transition-all duration-300 ease-in-out pb-5"
                >
                    <!-- oneline -->
                    <div
                        x-show="tab === 'online'"
                        x-cloak
                        class="p-8 max-sm:p-4"
                    >
                        <div class="gap-4  w-full">
                            <h3 class="mx-auto text-center font-semibold text-2xl mb-4">{{$layanan_berbinar_plus['A+']['name']}}</h3>
                            <div class="w-full lg:flex lg:flex-row lg:justify-evenly lg:items-center  mb-4">
                                <div class="mx-auto mb-2 lg:mb-0 w-full lg:w-2/5 ">
                                    <h4 class="mx-auto text-center font-semibold text-lg mb-4"><span class="italic">Weekday</span> ☀️</h4>
                                    <span class="block mx-auto font-semibold text-2xl text-primary text-center mb-8">{{$layanan_berbinar_plus['A+']['price']['online']['weekday']}}</span>
                                </div>
                                <div class="hidden lg:block  h-32 overflow-hidden">
                                    <img src="{{asset('assets/images/landing/asset-kelas/berbinar-plus/line-plus-vec.png')}}" alt="line-plus" class="mb-8 mx-auto">
                                </div>
                                <div class="mx-auto w-full lg:w-2/5 ">
                                    <h4 class="mx-auto text-center font-semibold text-lg mb-4"><span class="italic">Weekend</span> 🕶️</h4>
                                    <span class="block mx-auto font-semibold text-2xl text-primary text-center mb-8">{{$layanan_berbinar_plus['A+']['price']['online']['weekend']}}</span>
                                </div>
                            </div>
                            <ul class="space-y-4 text-gray-600 text-base h-24 w-full overflow-y-scroll scrollbar-hide">
                                @foreach($layanan_berbinar_plus['A+']['services'] as $item)
                                    <li class="flex items-start gap-2">
                                        <svg class="w-5 h-5 text-green-600 mt-1 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm13.707-1.293a1 1 0 0 0-1.414-1.414L11 12.586l-1.793-1.793a1 1 0 0 0-1.414 1.414l2.5 2.5a1 1 0 0 0 1.414 0l4-4Z" clip-rule="evenodd"/>
                                        </svg>
                                        <div>
                                            <p class="font-base text-justify text-[#70787D]">
                                                {{ $item }}
                                            </p>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                            <a href="#" class="block w-full py-1">
                                <div class="mx-auto w-fit py-2 px-8  bg-gradient-to-l from-[#AD7D29] hover:from-[#AD7D29]/80 to-[#F7B23B] hover:to-[#F7B23B]/80 rounded-lg flex justify-center items-center hover:shadow-lg">
                                    <span class="text-white">Mulai Sekarang</span>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- offline -->
                    <div
                        x-show="tab === 'offline'"
                        x-cloak
                        class="p-8 max-sm:p-4"
                    >
                        <div class="gap-4  w-full">
                            <h3 class="mx-auto text-center font-semibold text-2xl mb-4">{{$layanan_berbinar_plus['A+']['name']}}</h3>
                            <div class="w-full lg:flex lg:flex-row lg:justify-evenly lg:items-center  mb-4">
                                <div class="mx-auto mb-2 lg:mb-0 w-full lg:w-2/5 ">
                                    <h4 class="mx-auto text-center font-semibold text-lg mb-4"><span class="italic">Weekday</span> ☀️</h4>
                                    <span class="block mx-auto font-semibold text-2xl text-primary text-center mb-8">{{$layanan_berbinar_plus['A+']['price']['offline']['weekday']}}</span>
                                </div>
                                <div class="hidden lg:block  h-32 overflow-hidden">
                                    <img src="{{asset('assets/images/landing/asset-kelas/berbinar-plus/line-plus-vec.png')}}" alt="line-plus" class="mb-8 mx-auto">
                                </div>
                                <div class="mx-auto w-full lg:w-2/5">
                                    <h4 class="mx-auto text-center font-semibold text-lg mb-4"><span class="italic">Weekend</span> 🕶️</h4>
                                    <span class="block mx-auto font-semibold text-2xl text-primary text-center mb-8">{{$layanan_berbinar_plus['A+']['price']['offline']['weekend']}}</span>
                                </div>
                            </div>
                            <ul class="space-y-4 text-gray-600 text-base h-24 w-full overflow-y-scroll scrollbar-hide">
                                @foreach($layanan_berbinar_plus['A+']['services'] as $item)
                                    <li class="flex items-start gap-2">
                                        <svg class="w-5 h-5 text-green-600 mt-1 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm13.707-1.293a1 1 0 0 0-1.414-1.414L11 12.586l-1.793-1.793a1 1 0 0 0-1.414 1.414l2.5 2.5a1 1 0 0 0 1.414 0l4-4Z" clip-rule="evenodd"/>
                                        </svg>
                                        <div>
                                            <p class="font-base text-justify text-[#70787D]">
                                                {{ $item }}
                                            </p>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                            <a href="#" class="block w-full py-1">
                                <div class="mx-auto w-fit py-2 px-8  bg-gradient-to-l from-[#AD7D29] hover:from-[#AD7D29]/80 to-[#F7B23B] hover:to-[#F7B23B]/80 rounded-lg flex justify-center items-center hover:shadow-lg">
                                    <span class="text-white">Mulai Sekarang</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col justify-between w-full lg:w-1/4 bg-white/90 mb-4 rounded-2xl shadow-lg p-6 lg:mt-20">
          <h3 class="mx-auto text-center font-semibold text-2xl mb-4">{{$layanan_berbinar_plus['complete']['name']}}</h3>
          <span class="block mx-auto font-semibold text-3xl text-primary text-center mb-8">{{$layanan_berbinar_plus['complete']['price']}}</span>
          <img src="{{asset('assets/images/landing/asset-kelas/berbinar-plus/line-plus.png')}}" alt="line-plus" class="mb-8 mx-auto">
          <ul class="space-y-4 text-gray-600 text-base  h-24 w-full overflow-y-scroll scrollbar-hide mb-12">
              @foreach($layanan_berbinar_plus['complete']['services'] as $item)
                  <li class="flex items-start gap-2">
                      <svg class="w-5 h-5 text-green-600 mt-1 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                          <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm13.707-1.293a1 1 0 0 0-1.414-1.414L11 12.586l-1.793-1.793a1 1 0 0 0-1.414 1.414l2.5 2.5a1 1 0 0 0 1.414 0l4-4Z" clip-rule="evenodd"/>
                      </svg>
                      <div>
                          <p class="font-base text-justify text-[#70787D]">
                              {{ $item }}
                          </p>
                      </div>
                  </li>
              @endforeach
          </ul>
          <a href="#" class="block w-full py-1">
              <div class="mx-auto w-fit py-2 px-8  bg-gradient-to-l from-[#AD7D29] hover:from-[#AD7D29]/80 to-[#F7B23B] hover:to-[#F7B23B]/80 rounded-lg flex justify-center items-center hover:shadow-lg">
                  <span class="text-white">Mulai Sekarang</span>
              </div>
          </a>
        </div>
      </div>
  </section>

  {{--  DIV HELPER--}}
  <div class="w-full bg-transparent h-3 md:mb-12 md:mt-32 lg:mt-64 mb-4"></div>

  {{--BENEFIT BERBINAR PLUS--}}
  <section class="w-full bg-clip-content px-4 sm:px-14 mb-20 lg:mb-40">
      <h1 class="max-sm:text-[29px] text-4xl font font-semibold text-black mb-20 text-center">Benefit <span class="bg-[#3886A3] text-white px-2 ">Berbinar +</span></h1>
      <div class="w-full  flex flex-col md:flex-row md:gap-4 items-center justify-center lg:justify-around">
          @foreach($benefit_berbinar_plus as $benefit)
              <div class="w-full md:w-1/4 lg:1/3 p-2 rounded-lg bg-white mb-4 lg:mb-0 flex justify-start items-center gap-4 shadow-lg">
                  <div class="size-16 lg:size-20 p-2 {{$loop->iteration === 2 ? 'pt-3 px-2 pb-2 lg:pt-4' : 'pb-2'}} rounded-full bg-primary">
                      <img src="{{ asset('assets/images/landing/asset-kelas/berbinar-plus/'. $benefit['image']) }}" alt="icon-certificate" class="object-cover">
                  </div>
                  <span>{{$benefit['name']}}</span>
              </div>
          @endforeach
      </div>
  </section>

    {{--CTA--}}
    <section class="w-full  sm:px-14 px-4 bg-clip-content h-12 mb-40">
        <div class="bg-cta w-full bg-cover flex flex-col items-center justify-start py-12 px-2 rounded-3xl shadow-lg overflow-hidden">
            <h3 class="text-center text-white text-3xl font-semibold mb-8 lg:mb-12">Hubungi Kami Sekarang</h3>
            <p class="text-center text-white text-base md:text-lg font-light max-w-screen-sm md:max-w-screen-md mb-8">Buat janji dan lakukan konseling dengan tim Berbinar Insightful Indonesia untuk layanan konseling online ataupun offline.</p>
            <a href="#" class="block w-full">
                <div class=" mx-auto w-fit font-semibold py-3 px-8 bg-white rounded-lg flex items-center justify-center hover:bg-opacity-80 hover:shadow-lg">
                    <span>Lihat Produk Berbinar</span>
                </div>
            </a>
        </div>
    </section>

  {{--  DIV HELPER--}}
  <div class="w-full bg-transparent h-3 mb-20 lg:mb-0 md:mt-32"></div>

  {{-- FAQS START --}}
  <section class="z-10 mx-4 my-14 mt-16 sm:mx-20">
      <ul class="flex flex-col">
          @php
              $index = 0;
          @endphp

          @foreach ($faqs as $faq)
              <li
                  class="my-2 rounded-lg border bg-white py-2 shadow-sm"
                  x-data="accordion({{ $index }})"
                  :class="isActive()"
              >
                  <div class="mx-2 flex flex-row sm:mx-5">
                      <div class="flex w-full flex-col p-3 max-sm:p-2">
                          <h2
                              @click="handleClick()"
                              class="cursor-pointer text-lg font-medium max-sm:text-[16.5px]"
                          >
                              <span>{{ $faq["question"] }}</span>
                          </h2>
                          <div
                              x-ref="tab"
                              :style="handleToggle()"
                              class="max-h-0 overflow-hidden transition-all duration-500"
                          >
                              <p
                                  class="mt-3 text-justify text-[#6F6C90] max-sm:mt-2 max-sm:text-[15px]"
                              >
                                  {{ $faq["answer"] }}
                              </p>
                          </div>
                      </div>

                      <div class="ml-6 hidden items-center sm:flex">
                          <template x-if="$store.accordion.tab === idx">
                              <svg
                                  width="20"
                                  height="20"
                                  viewBox="0 0 24 24"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                              >
                                  <path
                                      d="M20 20L4 4M20 4L4 20"
                                      stroke="#3986A3"
                                      stroke-width="3"
                                      stroke-linecap="round"
                                  />
                              </svg>
                          </template>
                          <template x-if="$store.accordion.tab !== idx">
                              <svg
                                  width="20"
                                  height="20"
                                  viewBox="0 0 24 24"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                              >
                                  <g clip-path="url(#clip0_7503_13741)">
                                      <path
                                          d="M22.3996 8L11.9996 19.2L1.59961 8"
                                          stroke="#3986A3"
                                          stroke-width="3"
                                          stroke-linecap="square"
                                      />
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
                  this.$store.accordion.tab =
                      this.$store.accordion.tab === this.idx ? 0 : this.idx;
              },
              handleRotate() {
                  return this.$store.accordion.tab === this.idx ? 'rotate-180' : '';
              },
              handleToggle() {
                  return this.$store.accordion.tab === this.idx
                      ? `max-height: ${this.$refs.tab.scrollHeight}px`
                      : '';
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
