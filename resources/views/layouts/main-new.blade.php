<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>{{ $title }}</title>
    <link
        rel="shortcut icon"
        href="{{ asset("assets/images/logo-berbinar.png") }}"
        type="image/x-icon"
    />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

    <script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>

    @vite("resources/css/app.css")
    {{-- add custom css [VITE]--}}
    @if ($page === "Arteri")
        @vite("resources/css/landing/arteri.css")
    @endif

    @if($page === "Karir")
        @vite("resources/css/landing/karir.css")
        @vite("resources/js/landing/karir.js")
    @endif

    @if($page === "keluarga-berbinar")
        @vite("resources/css/landing/keluarga-berbinar.css")
    @endif

    <link rel="stylesheet" href="{{ asset("assets/css/landing-new.css") }}" />

    {{-- Css Swiper --}}
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    {{-- Css Beranda --}}
    @if ($page === "Beranda")
        <link rel="stylesheet" href="{{ asset("assets/css/landing/beranda.css") }}" />
    @endif

    {{-- Css Tentang Kami --}}
    @if ($page === "Tentang Kami")
        <link rel="stylesheet" href="{{ asset("assets/css/landing/tentang.css") }}" />
    @endif

    {{-- Css Produk Berbinar --}}
    @if ($page === "Produk Berbinar")
        <link rel="stylesheet" href="{{ asset("assets/css/landing/produk.css") }}" />
    @endif

    {{-- Css Produk Konseling --}}
    @if ($page === "Konseling")
        <link rel="stylesheet" href="{{ asset("assets/css/landing/konseling.css") }}" />
    @endif

    {{-- Css Produk Psikotes --}}
    @if ($page === "Psikotes")
        <link rel="stylesheet" href="{{ asset("assets/css/landing/psikotes.css") }}" />
    @endif

    {{-- Css Produk Kelas --}}
    @if ($page === "Kelas")
        <link rel="stylesheet" href="{{ asset("assets/css/landing/kelas.css") }}" />
    @endif

    {{-- Css Produk Consulting --}}
    @if ($page === "Consulting")
        <link rel="stylesheet" href="{{ asset("assets/css/landing/consulting.css") }}" />
    @endif
</head>
<body class="relative w-full overflow-x-hidden">
@include("layouts.navbar-new")

<main class="relative flex w-full flex-col bg-[#F7F9FA] font-plusJakartaSans">
    @yield("content")
</main>

@if ($page !== "keluarga-berbinar")
    @include("layouts.footer-new")
@endif

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

{{-- Script Beranda --}}
@if ($page === "Beranda")
    <script src="{{ asset("assets/js/landing/beranda.js") }}"></script>
@endif

{{-- Script Tentang Kami --}}
@if ($page === "Tentang Kami")
    <script src="{{ asset("assets/js/landing/tentang.js") }}"></script>
@endif

{{-- Script Produk Berbinar --}}
@if ($page === "Produk Berbinar")
    <script src="{{ asset("assets/js/landing/produk.js") }}"></script>
@endif

{{-- Script Produk Konseling --}}
@if ($page === "Konseling")
    <script src="{{ asset("assets/js/landing/konseling.js") }}"></script>
@endif

{{-- Script Produk Psikotes --}}
@if ($page === "Psikotes")
    <script src="{{ asset("assets/js/landing/psikotes.js") }}"></script>
@endif

{{-- Script Produk Kelas --}}
@if ($page === "Kelas")
    <script src="{{ asset("assets/js/landing/kelas.js") }}"></script>
@endif

{{-- Script Produk Kelas --}}
@if ($page === "Consulting")
    <script src="{{ asset("assets/js/landing/consulting.js") }}"></script>
@endif
</body>
</html>
