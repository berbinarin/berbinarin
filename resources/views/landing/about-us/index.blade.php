@extends(
    "landing.layouts.app",
    [
        "title" => "Berbinar Insightful Indonesia",
    ]
)

@section("style")
    <style>
        .wrapper {
            width: 90%;
            max-width: 1536px;
            margin-inline: auto;
            position: relative;
            height: 100px;
            overflow: hidden;
            mask-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 1) 10%, rgba(0, 0, 0, 1) 90%, rgba(0, 0, 0, 0));
        }

        @keyframes scrollLeft {
            to {
                left: -160px;
            }
        }

        .item {
            width: 160px;
            height: 80px;
            border-radius: 6px;
            position: absolute;
            left: max(calc(160px * 29), 100%);
            animation-name: scrollLeft;
            animation-duration: 30s;
            animation-delay: calc(30s / 29 * (29 - var(--i)) * -1);
            background-size: contain;
            background-position: center;
            background-repeat: no-repeat;
            animation-timing-function: linear;
            animation-iteration-count: infinite;
        }

        .bg-wave {
            background-image: url('/assets/images/landing/asset-konseling/vector/vector-wave.svg');
            background-repeat: no-repeat;
            background-position: center;
        }

        @media (max-width: 400px) {
            .nilai {
                margin-top: 90px;
            }
        }

        @media (max-width: 420px) {
            .misi {
                top: 110px;
            }
        }

        @media (max-width: 640px) {
            #mitra .item {
                width: 140px;
                height: 60px;
                left: max(calc(150px * 24), 100%);
            }
        }
    </style>
@endsection

@section("content")
    <p class="font relative z-10 mx-20 my-8 mt-36 text-center text-4xl font-semibold text-black max-sm:mx-2 max-sm:mt-28 max-sm:text-[29px]">
        Tentang
        <span class="bg-primary px-2 text-white">Berbinar</span>
    </p>

    <div class="relative z-30 w-full" style="padding-top: 56.25%; position: relative">
        <iframe class="absolute left-0 top-0 h-full w-full" src="https://www.youtube.com/embed/l7gDC0qb8rY?autoplay=1&loop=1&rel=0&modestbranding=1&controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; " allowfullscreen></iframe>
    </div>

    <div class="mx-20 mt-16 flex justify-center max-lg:mt-72 max-md:mt-64 max-sm:mx-4">
        <div class="flex w-full flex-row items-center gap-6 rounded-2xl bg-white pb-8 pr-8 pt-8 shadow-md max-lg:flex-col max-lg:p-5 max-md:gap-y-8 max-sm:rounded-3xl max-sm:p-4">
            <div class="relative flex w-1/3 items-center justify-center max-lg:-top-56 max-lg:w-[75%] max-md:w-[80%] max-sm:-top-52 max-sm:w-[85%]">
                <div class="absolute top-3 h-56 w-56 rounded-full bg-[#AFCFDA]"></div>
                <img src="{{ asset("assets/images/landing/asset-tentang/image/pakdanny.png") }}" alt="Danny Sanjaya Arfensia, M.Psi., Psikolog" class="relative -top-6 z-10 h-56 w-auto" />
                <div class="absolute -bottom-6 z-20 w-full gap-y-3 rounded-e-full bg-gradient-to-r from-[#3986A3] to-[#225062] px-4 py-2 text-left text-white max-lg:rounded-full max-lg:text-center max-sm:px-6 max-sm:py-3">
                    <p class="text-[16px] font-semibold leading-tight">Danny Sanjaya Arfensia, M.Psi., Psikolog</p>
                    <p class="mt-1 text-[14px] font-light">Chief Executive Officer</p>
                    <p class="text-[14px] font-light">PT Berbinar Insightful Indonesia</p>
                </div>
            </div>

            <div class="flex-1 max-lg:-mt-52 max-md:-mt-56 max-sm:-mt-52">
                <p class="text-justify text-[16px] leading-relaxed text-[#3F3F3F] max-sm:text-[15px]">
                    Berbinar yang diambil dari kata bercahaya, dibangun untuk menerangi masyarakat dengan layanan psikologi yang kredibel dan sesuai dengan apa yang dibutuhkan oleh masyarakat. Berbinar dengan logo bola mata yang bersinar, bersemangat dalam memberikan layanan psikologi terbaik untuk masyarakat, menggunakan warna biru yang dikaitkan dengan langit dan laut, yang merupakan ruang terbuka dapat menginspirasi manusia untuk menciptakan lingkungan yang sehat secara fisik dan psikologis. Pemilihan kata Insightful Indonesia dalam nama perusahaan menggambarkan bahwa perusahaan melihat masyarakat Indonesia yang mudah terpapar oleh pengetahuan dari internet, tanpa mengetahui kredibilitasnya, dapat menggunakan produk yang ditawarkan untuk memperluas wawasan mereka. Harapan saya selaku CEO PT Berbinar Insightful Indonesia dengan menawarkan proposal penawaran kerjasama ini kepada perusahaan, sekolah, atau komunitas di berbagai wilayah Indonesia agar dapat mengenalkan produk kami kepada
                    masyarakat dan menjalin kerjasama yang dapat menguntungkan kedua belah pihak.
                </p>
            </div>
        </div>
    </div>

    <section class="relative my-36 max-sm:my-32">
        <div class="h-60 w-full bg-gradient-to-r from-[#1C4352] to-[#3F96B8] max-sm:h-72">
            <div class="visi absolute -top-14 left-1/2 flex w-[80%] -translate-x-1/2 transform flex-col gap-3 rounded-xl bg-white p-5 shadow-md max-sm:-top-20 max-sm:w-[94%]">
                <div class="flex flex-row items-center gap-2">
                    <img src="{{ asset("assets/images/landing/asset-tentang/vector-pin.svg") }}" alt="Vector" class="h-8 w-auto rounded-lg bg-[#EAF3F6] p-2" />
                    <p class="text-2xl font-bold text-[#3986A3] max-sm:text-xl">Visi</p>
                </div>
                <p class="text-[16px] text-[#3F3F3F] max-md:text-justify max-sm:text-[15px]">Terdepan dalam menyediakan layanan psikologi yang berkualitas, berintegritas, dan mudah diakses oleh seluruh kalangan masyarakat.</p>
            </div>

            <div class="misi absolute left-1/2 top-24 flex w-[80%] -translate-x-1/2 transform flex-col gap-3 rounded-xl bg-white p-5 shadow-md max-sm:top-[90px] max-sm:w-[94%]">
                <div class="flex flex-row items-center gap-2">
                    <img src="{{ asset("assets/images/landing/asset-tentang/vector-pin.svg") }}" alt="Vector" class="h-8 w-auto rounded-lg bg-[#EAF3F6] p-2" />
                    <p class="text-2xl font-bold text-[#3986A3] max-sm:text-xl">Misi</p>
                </div>
                <ul class="list-disc pl-5 text-[16px] text-[#3F3F3F] marker:text-[#3986A3] max-md:text-justify max-sm:text-[15px]">
                    <li class="pl-2">Memberikan layanan terstandar berkualitas tinggi yang sesuai dengan kebutuhan customer.</li>
                    <li class="pl-2">Mengembangkan produk psikologi yang berlandaskan Kode Etik Psikologi Indonesia dan dijalankan oleh sumber daya manusia yang berintegritas.</li>
                    <li class="pl-2">Menciptakan akses layanan yang mudah dijangkau oleh seluruh lapisan masyarakat dengan harga yang bersaing.</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="mx-20 my-10 -mt-10 max-sm:mx-4 max-sm:mt-0">
        <p class="nilai font relative z-10 mx-20 my-8 text-center text-4xl font-semibold text-black max-sm:mx-2 max-sm:my-4 max-sm:text-[29px]">
            Nilai
            <span class="bg-primary px-2 text-white">Berbinar</span>
        </p>
        <div class="grid grid-cols-4 gap-4 max-xl:grid-cols-3 max-md:grid-cols-2 max-sm:grid-cols-1">
            @foreach ($values as $index => $value)
                <div class="flex flex-col gap-y-1.5 rounded-xl bg-white p-5 shadow-md max-sm:p-4">
                    <div class="{{ $index % 2 === 0 ? "max-sm:flex-row" : "max-sm:flex-row-reverse" }} flex flex-col items-center gap-2 sm:text-center">
                        <img src="{{ asset($value["vector"]) }}" alt="Vector" class="h-12 w-12 rounded-lg bg-[#EAF3F6] p-2 max-sm:h-10 max-sm:w-10 max-sm:p-1.5" />
                        <p class="{{ $index % 2 === 0 ? "max-sm:text-left" : "max-sm:text-right" }} min-h-[36px] text-lg font-bold leading-tight text-[#3986A3] max-sm:min-h-0">{{ $value["nilai"] }}</p>
                    </div>
                    <p class="min-h-[90px] text-justify text-[15px] text-[#3F3F3F] max-sm:min-h-0 max-sm:text-[14px]">{{ $value["deskripsi"] }}</p>
                </div>
            @endforeach
        </div>
    </section>

    <section id="mitra">
        <p class="font relative z-10 mx-20 my-6 text-center text-4xl font-semibold text-black max-sm:mx-2 max-sm:my-4 max-sm:text-[29px]">Mitra Afiliasi</p>
        <div class="wrapper">
            <div class="item" style="--i: 1; background-image: url('{{ asset("assets/images/landing/asset-tentang/mitra-afiliasi/mitra1.png") }}')"></div>
            <div class="item" style="--i: 2; background-image: url('{{ asset("assets/images/landing/asset-tentang/mitra-afiliasi/mitra2.png") }}')"></div>
            <div class="item" style="--i: 3; background-image: url('{{ asset("assets/images/landing/asset-tentang/mitra-afiliasi/mitra3.png") }}')"></div>
            <div class="item" style="--i: 4; background-image: url('{{ asset("assets/images/landing/asset-tentang/mitra-afiliasi/mitra4.png") }}')"></div>
            <div class="item" style="--i: 5; background-image: url('{{ asset("assets/images/landing/asset-tentang/mitra-afiliasi/mitra5.png") }}')"></div>
            <div class="item" style="--i: 6; background-image: url('{{ asset("assets/images/landing/asset-tentang/mitra-afiliasi/mitra6.png") }}')"></div>
            <div class="item" style="--i: 7; background-image: url('{{ asset("assets/images/landing/asset-tentang/mitra-afiliasi/mitra7.png") }}')"></div>
            <div class="item" style="--i: 8; background-image: url('{{ asset("assets/images/landing/asset-tentang/mitra-afiliasi/mitra8.png") }}')"></div>
            <div class="item" style="--i: 9; background-image: url('{{ asset("assets/images/landing/asset-tentang/mitra-afiliasi/mitra9.png") }}')"></div>
            <div class="item" style="--i: 10; background-image: url('{{ asset("assets/images/landing/asset-tentang/mitra-afiliasi/mitra10.png") }}')"></div>
            <div class="item" style="--i: 11; background-image: url('{{ asset("assets/images/landing/asset-tentang/mitra-afiliasi/mitra11.png") }}')"></div>
            <div class="item" style="--i: 12; background-image: url('{{ asset("assets/images/landing/asset-tentang/mitra-afiliasi/mitra12.png") }}')"></div>
            <div class="item" style="--i: 13; background-image: url('{{ asset("assets/images/landing/asset-tentang/mitra-afiliasi/mitra13.png") }}')"></div>
            <div class="item" style="--i: 14; background-image: url('{{ asset("assets/images/landing/asset-tentang/mitra-afiliasi/mitra14.png") }}')"></div>
            <div class="item" style="--i: 15; background-image: url('{{ asset("assets/images/landing/asset-tentang/mitra-afiliasi/mitra15.png") }}')"></div>
            <div class="item" style="--i: 16; background-image: url('{{ asset("assets/images/landing/asset-tentang/mitra-afiliasi/mitra16.png") }}')"></div>
            <div class="item" style="--i: 17; background-image: url('{{ asset("assets/images/landing/asset-tentang/mitra-afiliasi/mitra17.png") }}')"></div>
            <div class="item" style="--i: 18; background-image: url('{{ asset("assets/images/landing/asset-tentang/mitra-afiliasi/mitra18.png") }}')"></div>
            <div class="item" style="--i: 19; background-image: url('{{ asset("assets/images/landing/asset-tentang/mitra-afiliasi/mitra19.png") }}')"></div>
            <div class="item" style="--i: 20; background-image: url('{{ asset("assets/images/landing/asset-tentang/mitra-afiliasi/mitra20.png") }}')"></div>
            <div class="item" style="--i: 21; background-image: url('{{ asset("assets/images/landing/asset-tentang/mitra-afiliasi/mitra21.png") }}')"></div>
            <div class="item" style="--i: 22; background-image: url('{{ asset("assets/images/landing/asset-tentang/mitra-afiliasi/mitra22.png") }}')"></div>
            <div class="item" style="--i: 23; background-image: url('{{ asset("assets/images/landing/asset-tentang/mitra-afiliasi/mitra23.png") }}')"></div>
            <div class="item" style="--i: 24; background-image: url('{{ asset("assets/images/landing/asset-tentang/mitra-afiliasi/mitra24.png") }}')"></div>
            <div class="item" style="--i: 25; background-image: url('{{ asset("assets/images/landing/asset-tentang/mitra-afiliasi/mitra25.png") }}')"></div>
            <div class="item" style="--i: 26; background-image: url('{{ asset("assets/images/landing/asset-tentang/mitra-afiliasi/mitra26.png") }}')"></div>
            <div class="item" style="--i: 27; background-image: url('{{ asset("assets/images/landing/asset-tentang/mitra-afiliasi/mitra27.png") }}')"></div>
            <div class="item" style="--i: 28; background-image: url('{{ asset("assets/images/landing/asset-tentang/mitra-afiliasi/mitra28.png") }}')"></div>
            <div class="item" style="--i: 29; background-image: url('{{ asset("assets/images/landing/asset-tentang/mitra-afiliasi/mitra29.png") }}')"></div>
        </div>
    </section>

    {{-- CONTACT --}}
    <div class="bg-wave relative mx-20 my-20 h-auto rounded-3xl bg-cover p-7 max-sm:mx-4 max-sm:my-10 max-sm:p-5">
        <div class="absolute inset-0 rounded-3xl bg-gradient-to-b from-[#609EB5] to-[#15323D] mix-blend-multiply"></div>

        <div class="relative flex h-full flex-col items-center justify-center gap-y-3 text-center max-sm:gap-y-3">
            <h1 class="text-3xl font-semibold text-white max-sm:text-2xl">Hubungi Kami</h1>
            <p class="text-lg font-light text-white max-sm:text-[15px] max-sm:leading-snug">Yuk, hubungi kami sekarang untuk mendaftarkan diri dalam layanan Berbinar!</p>
            <div class="mt-6 flex justify-center max-sm:mt-3">
                <a href="https://linktr.ee/berbinarinsight" target="_blank">
                    <button class="rounded-xl bg-white px-5 py-2 font-semibold text-black max-sm:text-[15px]">Hubungi Sekarang</button>
                </a>
            </div>
        </div>
    </div>
@endsection