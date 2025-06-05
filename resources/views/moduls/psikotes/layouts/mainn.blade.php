<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} - Berbinar Insightful Indonesia</title>
    <link rel="shortcut icon" href="{{ asset('assets/images/old/logo-berbinar.png') }}" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />


    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')

</head>


{{-- Menghapus dib class --}}

<body class="relative overflow-x-hidden w-full">
    @if ($active === 'Home' || $active === 'one psikotest')
    <main class="w-full bg-white font-plusJakartaSans gap-8 flex flex-col relative">
        @yield('content')
    </main>
    @endif


    {{-- Menambahkan script AOS --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        AOS.init();
    </script>


    @if ($active === 'HasilTes')
    <div class="h-screen w-full flex">
        <main class="bg-primary t-container z-38 w-full">
            @yield('content')
        </main>
    </div>
    @endif

    @include('sweetalert::alert')
</body>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</html>