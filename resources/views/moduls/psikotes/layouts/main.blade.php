<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} - Berbinar Insightful Indonesia</title>
    <link rel="shortcut icon" href="{{ asset('assets/images/logo-berbinar.png') }}" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    @vite('resources/css/app.css')

    <link rel="stylesheet" href="{{ asset('assets/css/dataTables.tailwindcss.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
</head>

<body class="font-plusJakartaSans relative overflow-x-hidden w-full">
    @if ($active === 'Home')
    <div class="h-screen w-full flex">
        @include('moduls.psikotes.layouts.navbar')
        <main class="bg-white w-full items-center justify-center">
            @yield('content')
        </main>
    </div>
    @endif

    @if ($active === 'Intro')
    <div class="h-screen w-full flex">
        <main class="bg-white w-full flex items-center justify-center">
            @yield('content')
        </main>
    </div>
    @endif

    @if ($active === 'Test')
    <div class="h-screen w-full flex">
        <main class="bg-primary w-full flex items-center justify-center">
            @yield('content')
        </main>
    </div>
    @endif

    @include('sweetalert::alert')
</body>

</html>