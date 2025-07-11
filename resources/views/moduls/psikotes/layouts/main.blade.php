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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha384-sZCGxb8q9nX7T3q1uCYkEly3E0m9UnnSkTP+Cpfz1pRY4Y6BZoZ6vFw8bCwS5oZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" crossorigin="" />

    <link rel="canonical" href="https://codepen.io/ocxigin/pen/RwvBLKp" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script src="{{ asset('assets/js/psikotest.js') }}"></script>
    @vite('resources/css/app.css')

    @if (!in_array($active, ['Registrasi', 'Login']))
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    @endif

    @if (in_array($active, ['Test', 'Intro']))
    <link rel="stylesheet" href="{{ asset('assets/css/psikotest.css') }}">
    @endif
</head>

{{-- Menghapus dib class --}}

<body class="relative overflow-x-hidden w-full font-plusJakartaSans">

    {{-- Kondisi untuk menyembunyikan navbar 
    @if ($active !== 'Test' || 'Login' || 'Register')
    @include('moduls.psikotes.layouts.navbar')
    @endif--}}

    @if (!in_array($active, ['Login', 'Registrasi', 'Services', 'Psychotest','Test', 'Biodata' ,'HasilTes']))
    @include('moduls.psikotes.layouts.navbar')
    @endif

    @if ($active === 'Home')
    <main class="w-full bg-white gap-8 flex flex-col relative">
        @yield('content')
    </main>
    @endif

    @if ($active === 'Intro')
    <main class="w-full bg-white gap-8 md:gap-0 pt-0 flex flex-col relative">
        @yield('content')
    </main>
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
        <main class="h-screen w-full bg-primary ml-auto mt-0 z-38 mx-auto">
            {{-- mengubah mt-auto mt-0 --}}
            @yield('content')
        </main>
    </div>
    @endif

    @if ($active === 'Biodata')
    <div class="h-full md:h-screen w-full flex">
        <main class="w-full bg-primary z-38 mx-auto">
            @yield('content')
        </main>
    </div>
    @endif

    @if ($active === 'HasilTes')
    <div class="h-screen md:h-full w-full flex">
        <main class="w-full bg-primary t-container z-38">
            @yield('content')
        </main>
    </div>
    @endif

    @if ($active === 'Login')
    <div class="h-full w-full flex">
        <main class="w-full flex items-center justify-center">
            @yield('content')
        </main>
    </div>
    @endif

    @if ($active === 'Registrasi')
    <div class="flex md:h-screen bg-[#F5F7F9]">
        <main class="flex items-center justify-center bg-[#F5F7F9]">
            @yield('content')
        </main>
    </div>
    @endif

    @if ($active === 'Services')
    <div class="h-screen w-full flex">
        <main class="bg-white w-full flex items-center justify-center">
            @yield('content')
        </main>
    </div>
    @endif

    @if ($page === 'Individual Psychotest')
    <div class="h-screen w-full flex">
        <main class="bg-[#4D6AF6] w-screen flex items-center justify-center">
            @yield('content')
        </main>
    </div>
    @endif

    @include('sweetalert::alert')
    @if (!in_array($active, ['Registrasi']))
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    @endif
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</html>