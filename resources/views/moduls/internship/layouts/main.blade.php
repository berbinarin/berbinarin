<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $title }}</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
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

<body class="bg-gray-100 overflow-y-auto">

  {{-- @if ($active === 'Berbinar+')
    @include('layouts.navbar')
@endif --}}

  <main class="w-full bg-gray-100 font-plusJakartaSans flex flex-col relative">
    @yield('content')
  </main>

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

</body>

</html>