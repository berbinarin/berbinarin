{{-- NAVBAR --}}
<header class="w-full font-plusJakartaSans bg-white border-b-2 border-b-[#dedede] py-5 fixed z-50 top-0">
    <nav class="max-w-6xl mx-auto px-5 md:px-0 items-center flex justify-between">
        <a href="/">
            <img src="{{ asset('assets/images/logo-berbinar.png') }}" alt="Logo Berbinar Insightful Indonesia"
                title="Logo Berbinar Insightful Indonesia" class="w-[60px]">
        </a>

        <div class="flex-row gap-8 items-center hidden md:flex">
            <a href="{{ route('home') }}"
                class="@if ($active == 'Home') text-primary @else text-disabled @endif text-base font-medium hover:text-primary hover:cursor-pointer block">
                Home
            </a>
            <a href="{{ route('about') }}"
                class="@if ($active == 'Tentang Kami') text-primary @else text-disabled @endif text-base font-medium hover:text-primary hover:cursor-pointer block">
                Tentang Kami
            </a>
            <a href="{{ route('products') }}"
                class="@if ($active == 'Produk Berbinar') text-primary @else text-disabled @endif text-base font-medium hover:text-primary hover:cursor-pointer block">
                Produk Berbinar
            </a>
            <a href="{{ route('contact') }}"
                class="@if ($active == 'Kontak') text-primary @else text-disabled @endif text-base font-medium hover:text-primary hover:cursor-pointer block">
                Kontak
            </a>
            <a href="{{ route('hiring') }}"
                class="@if ($active == 'Hiring') text-primary @else text-disabled @endif text-base font-medium hover:text-primary hover:cursor-pointer block">
                Berbinar Careers
            </a>
            <a href="{{ route('workWithUs') }}"
                class="text-base text-white bg-primary-alt rounded-md hover:bg-primary duration-700 px-5 py-2 w-fit mx-5 md:mx-0">Work
                With Us</a>
        </div>

        <div class="flex md:hidden items-center justify-center p-4">
            <i class='bx bx-menu text-[35px] text-disabled'></i>
        </div>
    </nav>
</header>
