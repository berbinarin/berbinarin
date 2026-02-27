@extends(
    "landing.layouts.app",
    [
        "title" => "404 - Halaman Tidak Ditemukan",
    ]
)

@section("content")
    @php
        $theme = [
            "navbar" => [
                "active" => "#3886A3",
                "burger_menu" => "#3886A3",
            ],
        ];
    @endphp

    @include("landing.partials.navbar")

    
    <main class="flex min-h-screen flex-col items-center justify-center gap-8 bg-[#F7F9FA] px-4 pb-12 pt-24 text-center md:flex-row md:gap-16 md:pt-32 lg:gap-36">
        <div class="order-2 flex items-center justify-center md:order-1">
            <img src="{{ asset("assets/images/errors/404.webp") }}" alt="Halaman tidak ditemukan" class="h-auto w-64 max-w-xs object-contain sm:w-72 md:w-80 md:max-w-sm lg:h-[500px] lg:w-auto lg:max-w-none xl:h-[600px]" />
        </div>

        <div class="order-1 flex flex-col items-center md:order-2">
            {{-- Teks error --}}
            <h1 class="mb-4 text-4xl font-bold text-[#106681] sm:text-5xl md:mb-6 md:text-6xl lg:text-7xl">Oops!</h1>
            <p class="mb-2 text-xl sm:text-2xl md:mb-3 md:text-3xl">Halaman Tidak Ditemukan.</p>
            <p class="mb-4 text-sm text-gray-600 sm:text-base md:mb-5">Halaman yang anda tuju tidak tersedia</p>

            {{-- Button desktop --}}
            <a href="{{ route("home.index") }}" class="hidden rounded-xl bg-gradient-to-r from-[#F7B23B] to-[#AD7D29] px-6 py-3 text-sm font-medium text-white transition-opacity hover:opacity-90 sm:text-base md:inline-block md:px-8">Kembali ke Halaman Utama</a>
        </div>

        {{-- Button Mobile --}}
        <div class="order-3 flex w-full justify-center md:hidden">
            <a href="{{ route("home.index") }}" class="inline-block rounded-xl bg-gradient-to-r from-[#F7B23B] to-[#AD7D29] px-8 py-3 text-sm font-medium text-white transition-opacity hover:opacity-90">Kembali ke Halaman Utama</a>
        </div>
    </main>
@endsection
