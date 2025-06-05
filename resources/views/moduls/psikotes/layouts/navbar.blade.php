{{-- NAVBAR --}}
<header class="sticky top-0 z-50 w-full font-plusJakartaSans bg-white border-b-2 border-b-[#dedede] py-5">
    <nav class="max-w-6xl mx-auto px-5 md:px-0 items-center flex justify-between">
        <a href="/">
            <img src="{{ asset('assets/images/old/logo-berbinar.png') }}" alt="Logo Berbinar Insightful Indonesia" title="Logo Berbinar Insightful Indonesia" class="w-[60px]">
        </a>

        <div class="flex-row gap-8 items-center hidden md:flex">
            <a href="{{ route('psikotest-paid.showLogin') }}" class="text-white bg-primary border-2 border-primary rounded-full py-2 px-5 text-base font-medium hover:text-primary hover:bg-white hover:border-2 hover:border-b-primary hover:cursor-pointer block">
                Login
            </a>
            <!-- <a href="https://forms.gle/aabDZ5DmmhJs8obk8" target="_blank" rel="noopener noreferrer"
                class="@if ($active == 'Tentang Kami') text-primary @else text-disabled @endif text-base font-medium hover:text-primary hover:border-b-4 hover:border-b-primary hover:cursor-pointer block">
                Psikotes Individu
            </a>
            <a href="https://forms.gle/aabDZ5DmmhJs8obk8" target="_blank" rel="noopener noreferrer"
                class="@if ($active == 'Produk Berbinar') text-primary @else text-disabled @endif text-base font-medium hover:text-primary hover:border-b-4 hover:border-b-primary hover:cursor-pointer block">
                Psikotes Perusahaan
            </a> -->
        </div>

        <div class="flex md:hidden items-center justify-center p-4" onclick="Open()">
            <i class='bx bx-menu text-[35px] text-disabled'>

            </i>

        </div>
        <div class="sidebar text-center justify-end items-center fixed md:hidden top-0 bottom-0 z-[70] w-screen lg-right-0 p-2 right-full overflow-y-auto bg-white">
            <div class="p-2.5 mt-3 flex rounded-md px-4 duration-300 cursor-pointer text-gray-700">
                <div class="flex ml-auto p-5">
                    <i class="bx bx-x align-items-end text-[35px] text-disabled" onclick="Open()"></i>
                </div>
            </div>
            <div>
                <div class="m-auto text-lg flex items-center justify-center p-4 duration-300 cursor-pointer hover:text-primary text-gray-700" onclick="navigateToPage('psikotestHome')">
                    Login
                </div>
                <!-- <div class="m-auto text-lg flex items-center justify-center p-4 duration-300 cursor-pointer hover:text-primary text-gray-700"
                    onclick="navigateToPage('psikotesIndividu')">
                    Psikotes Individu
                </div>

                <div class="m-auto text-lg flex items-center justify-center p-4 duration-300 cursor-pointer hover:text-primary text-gray-700"
                    onclick="navigateToPage('psikotesPerusahaan')">
                    Psikotes Perusahaan
                </div> -->

            </div>
        </div>
        <script type="text/javascript">
            function Open() {
                // document.querySelector('.sidebar').classList.toggle('right-full');
                let sidebar = document.querySelector('.sidebar');
                sidebar.classList.toggle('right-full');
                sidebar.classList.toggle('right-0');
            }

            function navigateToPage(page) {
                switch (page) {
                    case 'psikotestHome':
                        window.location.href = '/psikotest/home';
                        break;
                    case 'psikotesIndividu':
                        window.open('https://forms.gle/aabDZ5DmmhJs8obk8', '_blank');
                        break;
                    case 'psikotesPerusahaan':
                        window.open('https://forms.gle/aabDZ5DmmhJs8obk8', '_blank');
                        break;
                }
            }
        </script>
    </nav>
</header>