<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link rel="shortcut icon" href="{{ asset('assets/images/logo-berbinar.png') }}" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    @if ($page === 'Produk Berbinar')
    <link rel="stylesheet" href="{{ asset('assets/css/products.css') }}">
    @endif

    <script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')
    @if ($page === 'Tentang Kami' || $active === 'Hiring' || $page === 'Konseling')
    <link rel="stylesheet" href="{{ asset('assets/css/about.css') }}">
    @endif
</head>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-60HVW4DS4P"></script>
<script>
window.dataLayer = window.dataLayer || [];

function gtag() {
    dataLayer.push(arguments);
}
gtag('js', new Date());

gtag('config', 'G-60HVW4DS4P');
</script>

<body class="relative overflow-x-hidden w-full">
    @if ($page != 'Kontak' && $page != 'Work With Us' && $page != 'Coming Soon')
    @endif

    @if ($page == 'Konseling' && $page != 'Work With Us' && $page != 'Coming Soon')
    @endif

    @include('layouts.navbar')

    <main class="w-full bg-white font-plusJakartaSans flex flex-col relative">
        @yield('content')
    </main>

    @if ($page != 'Work With Us' && $page != 'Coming Soon')
    @include('layouts.cta')
    @endif

    @include('layouts.footer')

    @if ($page != 'Kontak' && $page != 'Work With Us' && $page != 'Coming Soon')
    @endif

    @if ($page == 'Work With Us' || $page == 'Coming Soon')
    @endif

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
    AOS.init();
    </script>

    @if ($page === 'Produk Berbinar')
    <script src="{{ asset('assets/js/products.js') }}"></script>
    @endif

    @if ($page === 'Tentang Kami' || $page === 'Hiring' || $page === 'Konseling')
    <script src="{{ asset('assets/js/about.js') }}"></script>
    @endif
    @include('sweetalert::alert')

</body>
<!-- resources/views/layouts/app.blade.php atau file lainnya -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</html>