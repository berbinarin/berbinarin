<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} - Berbinar Insightful Indonesia</title>
    <link rel="shortcut icon" href="{{ asset('assets/images/logo-berbinar.png') }}" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
   
    
    <script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')

</head>

<<<<<<< Updated upstream
<body class="font-plusJakartaSans relative overflow-x-hidden w-full">
=======

{{-- Menghapus dib class --}}
<body class="relative overflow-x-hidden w-full">
>>>>>>> Stashed changes
    @if ($active === 'Home')
    <main class="w-full bg-white font-plusJakartaSans gap-8 flex flex-col relative">
        @yield('content')
    </main>
    @endif

    @include('moduls.psikotes.layouts.navbar')

    @if ($active === 'Intro')
    <div class="h-screen w-full flex">
        <main class="bg-white w-full flex items-center justify-center">
            @yield('content')
        </main>
    </div>
    @endif

    {{-- Menambahkan script AOS --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        AOS.init();
    </script>

    {{-- menonaktifkan ml dan mt menjadi auto --}}
    @if ($active === 'Test')
    <div class="h-screen w-full flex">
        <main class="bg-primary t-container ml-auto mt-auto z-38 w-full mx-auto">
            @yield('content')
        </main>
    </div>
    @endif

    @include('sweetalert::alert')
</body>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</html>