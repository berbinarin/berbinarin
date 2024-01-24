{{-- NAVBAR --}}
<header class="w-full font-plusJakartaSans bg-white border-b-2 border-b-[#dedede] py-5 fixed z-30 top-0">
    <nav class="max-w-6xl mx-auto px-5 md:px-0 items-center flex justify-between">
        <a href="/">
            <img src="{{ asset('assets/images/logo-berbinar.png') }}" alt="Logo Berbinar Insightful Indonesia"
                title="Logo Berbinar Insightful Indonesia" class="w-[60px]">
        </a>

        <div class="flex-row gap-8 items-center hidden md:flex">
            <a href="{{ route('psikotestHome') }}"
                class="@if ($active == 'Home') text-primary @else text-disabled @endif text-base font-medium hover:text-primary hover:border-b-4 hover:border-b-primary hover:cursor-pointer block">
                About
            </a>
            <a href=""
                class="@if ($active == 'Tentang Kami') text-primary @else text-disabled @endif text-base font-medium hover:text-primary hover:border-b-4 hover:border-b-primary hover:cursor-pointer block">
                Psikotes Individu
            </a>
            <a href=""
                class="@if ($active == 'Produk Berbinar') text-primary @else text-disabled @endif text-base font-medium hover:text-primary hover:border-b-4 hover:border-b-primary hover:cursor-pointer block">
                Psikotes Perusahaan
            </a>
            <a href=""
                class="@if ($active == 'Produk Berbinar') text-primary @else text-disabled @endif text-base font-medium border-2 border-primary rounded-lg px-5 py-1 hover:bg-primary hover:text-white hover:cursor-pointer block">
                Masuk
            </a>
            <a href=""
                class="@if ($active == 'Produk Berbinar') text-primary @else text-disabled @endif text-white font-medium rounded-lg px-5 py-1 bg-primary hover:bg-primary hover:text-white hover:cursor-pointer block">
                Daftar
            </a>

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
