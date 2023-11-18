<!DOCTYPE html>
    <html lang="en">
    <head>
        <!--========== META TAG ==========-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">

        <!--=========== TITLE ============-->
        <title>{{ $title }}</title>

        <!--============ ICON ============-->
        <link rel="shortcut icon" href="{{ asset('assets/images/logo-berbinar.png') }}" type="icon">

        <!--=========== VENDORS ==========-->
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

        <!--============ SWIPER ==========-->
        <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
        />

        <!--=========== STYLES ===========-->
        @vite('resources/css/app.css')
        @if($page == 'Kelas')
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        @endif
        <link rel="stylesheet" href="assets/css/styles.css">

        <!--=========== ALPHINE ===========-->
        <script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>

        @if($page == 'Produk Berbinar')
            <link rel="stylesheet" href="{{ asset('assets/css/products.css') }}">
        @endif

        @if($page == 'Psikotes')
            <link rel="stylesheet" href="{{ asset('assets/css/psikotest.css') }}">
        @endif

        @if($page == 'Tentang Kami')
            <link rel="stylesheet" href="{{ asset('assets/css/about-us.css') }}">
        @endif

        @if($page == 'Konseling')
            <link rel="stylesheet" href="{{ asset('assets/css/konseling.css') }}">
        @endif

        @if($page == 'Kelas')
            <link rel="stylesheet" href="{{ asset('assets/css/kelas.css') }}">
            <style>
                .accessory__container{
                    grid-template-columns: repeat(3,224px);
                    justify-content: center;
                }
            </style>
        @endif

        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    </head>
    <body class="relative font-poppins bg-white">
        <!--========== SCROLL TOP ========-->
        <a href="#" class="scrolltop" id="scroll-top">
            <i class='bx bx-up-arrow-alt scrolltop__icon'></i>
        </a>
        
        <!--========== NAVBAR ============-->
        @include('layouts.navbar')

        <main class="l-main">
            @yield('content')
        </main>

        @include('layouts.footer')

        @include('layouts.scripts')

        @include('layouts.cta')

        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
    </body>
</html>