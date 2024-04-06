{{-- NAVBAR --}}
<header class="header w-full font-plusJakartaSans bg-white border-b-2 border-b-[#dedede] py-5 fixed z-50 top-0" id="header">
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

        <div class="flex md:hidden items-center justify-center p-4" onclick="Open()">
            <i class='bx bx-menu text-[35px] text-disabled'>
                
            </i>
            
        </div>
        <div class="sidebar text-center justify-center items-center fixed top-0 bottom-0 w-screen lg-right-0 p-2 overflow-y-auto right-full bg-white">
            <div class="p-2.5 mt-3 flex rounded-md px-4 duration-300 cursor-pointer text-gray-700">
                <div class="flex ml-auto p-8">
                    <i class="bx bx-x align-items-end text-[35px] text-disabled" onclick="Open()"></i>
                </div>  
            </div>
            <div class="m-auto text-lg flex items-center justify-center p-4 duration-300 cursor-pointer hover:text-primary text-gray-700" onclick="navigateToPage('home')">
                Home
            </div>
            <div class="m-auto text-lg flex items-center justify-center p-4 duration-300 cursor-pointer hover:text-primary text-gray-700" onclick="navigateToPage('about-us')">
                Tentang Kami
            </div>
            <div class="m-auto text-lg flex items-center justify-center p-4 duration-300 cursor-pointer hover:text-primary text-gray-700" onclick="navigateToPage('products')">
                Produk Berbinar
            </div>
            <div class="m-auto text-lg flex items-center justify-center p-4 duration-300 cursor-pointer hover:text-primary text-gray-700" onclick="navigateToPage('contact')">
                Kontak
            </div>
            <div class="m-auto text-lg flex items-center justify-center p-4 duration-300 cursor-pointer hover:text-primary text-gray-700" onclick="navigateToPage('career')">
                Berbinar Careers
            </div>
            <div class="m-auto flex items-center justify-center rounded-md p-4 w-44 duration-300 cursor-pointer bg-primary hover:bg-sky-950 text-white" onclick="navigateToPage('work-with-us')">
                <span class="text-lg">Work With Us</span>
            </div>
        </div>

        <script type="text/javascript">
            function Open() {
                document.querySelector('.sidebar').classList.toggle('right-full');
            }

            function navigateToPage(page) {
                switch (page) {
                    case 'home':
                        window.location.href = '/';
                        break;
                    case 'about-us':
                        window.location.href = '/about-us';
                        break;
                    case 'products':
                        window.location.href = '/products';
                        break;
                    case 'contact':
                        window.location.href = '/contact';
                        break;
                    case 'career':
                        window.location.href = '/careers';
                        break;
                    case 'work-with-us':
                        window.location.href = '/work-with-us';
                        break;
                }
            }
        </script>
    </nav>
</header>
