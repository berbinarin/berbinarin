<!-- Navbar -->
<nav
    class="fixed top-0 left-0 right-0 max-sm:mx-4 mx-14 flex items-center max-sm:px-4 px-4 max-sm:py-2 py-2.5 bg-white bg-opacity-90 backdrop-blur-sm rounded-3xl shadow-md z-30 mt-7">
    <!-- Logo -->
    <div class="flex items-center">
        <img src="{{ asset('assets/images/landing/logo-berbinar.png') }}" alt="Logo" class="max-sm:h-8 h-12 w-auto ">
    </div>

    <!-- Burger Menu -->
    <div class="ml-auto flex md:hidden">
        <button id="burgerMenu" class="text-[#3986A3] focus:outline-none">
            <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                 xmlns="http://www.w3.org/2000/svg">
                <line x1="4" y1="6" x2="20" y2="6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <line x1="4" y1="12" x2="20" y2="12" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <line x1="4" y1="18" x2="20" y2="18" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </button>
    </div>

    <!-- Navigasi Link -->
    <div id="navLinks" class="hidden md:flex ml-auto items-center max-lg:space-x-7 space-x-14">
        <a href="{{ route('index') }}"
           class="@if ($active == 'Beranda') text-[#3886A3] font-semibold border-b-2 border-[#3886A3]
                @else text-gray-600 font-semibold @endif">
            Beranda
        </a>
        <a href="{{ route('about_us.index') }}"
           class="@if ($active == 'Tentang Kami') text-[#3886A3] font-semibold border-b-2 border-[#3886A3]
                @else text-gray-600 font-semibold @endif">
            Tentang Kami
        </a>
        <a href="{{ route('product.index') }}"
           class="@if ($active == 'Produk Berbinar') text-[#3886A3] font-semibold border-b-2 border-[#3886A3]
                @else text-gray-600 font-semibold @endif">
            Produk
        </a>
        <a href="{{route('career.index')}}"
           class="@if ($active == 'Karir') text-[#3886A3] font-semibold border-b-2 border-[#3886A3]
                @else text-gray-600 font-semibold @endif">
            Karier
        </a>
        <a href="{{route('arteri')}}"
           class="@if ($active == 'Arteri') text-[#3886A3] font-semibold border-b-2 border-[#3886A3]
                @else text-gray-600 font-semibold @endif">
            ArteRi
        </a>
        <div>
            <a href="https://linktr.ee/berbinarinsight" target="_blank">
                <button class="bg-gradient-to-r from-[#F7B23B] to-[#AD7D29] text-black font-medium py-2 px-6 rounded-full">
                    Ajukan Kolaborasi
                </button>
            </a>
        </div>
    </div>
</nav>

<!-- Screen Mobile Menu -->
<div id="mobileMenu" class="fixed inset-0 bg-white bg-opacity-90 hidden z-40 flex flex-col justify-center items-center">
    <a href="{{ route('index') }}"
       class="@if ($active == 'Beranda') block text-[#3886A3] font-medium text-2xl py-4
            @else block text-gray-600 font-medium text-2xl py-4 @endif">
        Beranda
    </a>
    <a href="{{ route('about_us.index') }}"
       class="@if ($active == 'Tentang Kami') block text-[#3886A3] font-medium text-2xl py-4
            @else block text-gray-600 font-medium text-2xl py-4 @endif">
        Tentang Kami
    </a>
    <a href="{{ route('product.index') }}"
       class="@if ($active == 'Produk Berbinar') block text-[#3886A3] font-medium text-2xl py-4
            @else block text-gray-600 font-medium text-2xl py-4 @endif">
        Produk
    </a>
    <a href="{{route('career.index')}}"
       class="@if ($active == 'Karir') block text-[#3886A3] font-medium text-2xl py-4
            @else block text-gray-600 font-medium text-2xl py-4 @endif">
        Karier
    </a>
    <a href="{{route('arteri')}}"
       class="@if ($active == 'Arteri') block text-[#3886A3] font-medium text-2xl py-4
            @else block text-gray-600 font-medium text-2xl py-4 @endif">
        ArteRi
    </a>
    <a href="https://linktr.ee/berbinarinsight" target="_blank">
        <button class="bg-gradient-to-r from-[#F7B23B] to-[#AD7D29] text-black font-medium py-2 px-6 rounded-full mt-8">
            Ajukan Kolaborasi
        </button>
    </a>
    <button id="closeMenu" class="absolute top-4 right-4 text-gray-600 focus:outline-none">
        <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
    </button>
</div>


<script>
    document.getElementById('burgerMenu').addEventListener('click', function () {
        const mobileMenu = document.getElementById('mobileMenu');
        mobileMenu.classList.remove('hidden');
    });

    document.getElementById('closeMenu').addEventListener('click', function () {
        const mobileMenu = document.getElementById('mobileMenu');
        mobileMenu.classList.add('hidden');
    });
</script>


{{-- <!-- Navbar -->
<nav class="fixed top-0 left-0 right-0 mx-14 flex items-center px-8 py-3.5 bg-white bg-opacity-90 backdrop-blur-sm rounded-3xl shadow-md z-30 mt-10">
    <!-- Logo -->
    <div class="flex items-center">
      <img src="{{ asset('assets/images/landing/logo-berbinar.png') }}" alt="Logo" class="h-12 w-auto">
    </div>

    <div class="ml-auto">
        <!-- Navigation Links -->
        <div class="flex items-center space-x-14">
        <a href="#" class="text-[#3886A3] font-medium border-b-2 border-[#3886A3]">Beranda</a>
        <a href="#" class="text-gray-600 font-medium">Tentang Kami</a>
        <a href="#" class="text-gray-600 font-medium">Produk Berbinar</a>
        <!-- Collaborate Button -->
        <div>
            <button class="bg-gradient-to-r from-[#F7B23B] to-[#AD7D29] text-black font-medium py-2 px-6 rounded-full">
                Collaborate with Us
            </button>
        </div>
        </div>
    </div>
</nav> --}}
