<nav class="w-[10%] flex flex-col items-center bg-white py-8 px-4">
    {{-- LOGO BERBINAR --}}
    <div>
        <img src="{{ asset('assets/images/logo-berbinar.png') }}" alt="Logo Berbinar Insightful Indonesia" title="Logo Berbinar Insightful Indonesia" class="w-14">
    </div>

    {{-- LIST MENU --}}
    <ul class="mt-10 text-gray-700 dark:text-gray-400 capitalize">
        <!-- Links -->
        @if ($title == 'Dashboard Tes' || $title === 'BAUM' || $title === 'DAP' || $title === 'HTP')
        <li class="mt-1 p-2 hover:text-primary dark-hover:text-blue-300
        rounded-lg">
            <a href="{{ route('dashboard.psikotespaid.dashboardtes') }}" class=" flex flex-col items-center @if ($modul === 'Dashboard Tes') text-primary @else text-gray-700 @endif hover:text-primary duration-700">
                <i class="bx bx-grid-alt text-lg  @if ($modul === 'Dashboard Tes') text-primary @else text-gray-700 @endif text-lg"></i>
                <span class="text-base mt-2 text-center">Database</span>
            </a>
        </li>

        @elseif ($title === 'Dashboard Esai' || $title === 'Pengumpulan')
        <li class="mt-1 p-2 hover:text-primary dark-hover:text-blue-300
        rounded-lg">
            <a href="{{ route('dashboard.psikotespaid.dashboardesai') }}" class=" flex flex-col items-center @if ($modul === 'Dashboard Tes') text-primary @else text-gray-700 @endif hover:text-primary duration-700">
                <i class="bx bx-grid-alt text-lg  @if ($modul === 'Dashboard Tes') text-primary @else text-gray-700 @endif text-lg"></i>
                <span class="text-base mt-2 text-center">Database</span>
            </a>
        </li>

        @else
        <li class="mt-1 p-2 hover:text-primary dark-hover:text-blue-300
        rounded-lg">
            <a href="{{ route('dashboard') }}" class=" flex flex-col items-center @if ($modul === 'Dashboard') text-primary @else text-gray-700 @endif hover:text-primary duration-700">
        @php
        // Tentukan rute berdasarkan modul aktif
        $dashboardRoute = $modul === 'Dashboard Papikostick' | $modul === 'psikotestSoal' | $modul === 'psikotestData' | $modul === 'papikostick' ? 'dashboard.psikotespaid.dashboardPapikostick' : 'dashboard';
        $dashboardTextColor = $modul === 'Dashboard Papikostick' ? 'text-primary' : 'text-gray-700';
        @endphp

        <li class="mt-1 p-2 hover:text-primary dark-hover:text-blue-300 rounded-lg">
            <a href="{{ route($dashboardRoute) }}" class="flex flex-col items-center {{ $dashboardTextColor }} hover:text-primary duration-700">
                <i class='bx bx-grid-alt text-lg'></i>
                <span class="text-base mt-2">Dashboard</span>
            </a>
        </li>
        @endif


        @if (auth()->user()->role == 'Admin')
        <li class="mt-6 p-2 text-primary rounded-lg">
            <a href="#" class=" flex flex-col items-center">
                <svg class="fill-current h-5 w-5" viewBox="0 0 24 24">
                    <path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M917v2H5v-2h4M21 3h-8v6h8V3M11 3H3v10h8V3m108h-8v10h8V11m-10 4H3v6h8v-6z">
                    </path>
                </svg>
                <span class="text-base mt-2">dashBoard</span>
            </a>

        </li>

        <li class="mt-1 p-2 hover:text-primary dark-hover:text-blue-300
        rounded-lg">
            <a href="#" class=" flex flex-col items-center">
                <i class='bx bx-user text-gray-700 text-lg'></i>
                <span class="text-base mt-2 text-center">Users Management</span>
            </a>

        </li>

        <li class="mt-1 p-2 hover:text-primary dark-hover:text-blue-300
        rounded-lg">
            <a href="{{ route('dashboard.faqs') }}" class=" flex flex-col items-center">
                <i class='bx bx-question-mark text-gray-700 text-lg'></i>
                <span class="text-base mt-2">FAQs</span>
            </a>

        </li>
        @endif

        @if (auth()->user()->role == 'HR')
        <li class="mt-1 p-2 hover:text-primary dark-hover:text-blue-300
        rounded-lg">
            <a href="{{ route('dashboard.positions') }}" class=" flex flex-col items-center @if ($modul === 'Positions') text-primary @else text-gray-700 @endif hover:text-primary duration-700">
                <i class='bx bx-briefcase-alt-2  text-lg'></i>
                <span class="text-base mt-2">Positions</span>
            </a>

        </li>

        <li class="mt-1 p-2 hover:text-primary dark-hover:text-blue-300
        rounded-lg">
            <a href="{{ route('dashboard.positions.descriptions') }}" class=" flex flex-col items-center @if ($modul === 'Positions Descriptions') text-primary @else text-gray-700 @endif">
                <i class='bx bxl-upwork  text-lg'></i>
                <span class="text-base mt-2 text-center">Position Descriptions</span>
            </a>

        </li>

        <li class="mt-1 p-2 hover:text-primary dark-hover:text-blue-300
        rounded-lg">
            <a href="{{ route('dashboard.positions.requirements') }}" class=" flex flex-col items-center @if ($modul === 'Positions Requirements') text-primary @else text-gray-700 @endif">
                <i class='bx bx-file text-lg'></i>
                <span class="text-base mt-2 text-center">Position Requirements</span>
            </a>

        </li>

        <!-- sidebar intenship  -->
        <li class="mt-1 p-2 hover:text-primary dark-hover:text-blue-300
        rounded-lg">
            <a href="{{ route('dashboard.internship') }}" class=" flex flex-col items-center @if ($modul === 'Internship') text-primary @else text-gray-700 @endif">
                <i class='bx bx-book text-lg'></i>
                <span class="text-base mt-2 text-center">Internship</span>
            </a>
        </li>
        @endif



        @if (auth()->user()->role == 'Konselling')
        <li class="mt-1 p-2 hover:text-primary dark-hover:text-blue-300
        rounded-lg">
            <a href="{{ route('dashboard.PeerConsellorSchedule') }}" class=" flex flex-col items-center @if ($modul === 'Peer Conselor Schedule') text-primary @else text-gray-700 @endif">
                <i class='bx bx-calendar @if ($modul === ' Peer Conselor Schedule') text-primary @else text-gray-700 @endif text-lg'></i>
                <span class="text-base mt-2 text-center">Peer Counselor Schedule</span>
            </a>
        </li>
        <li class="mt-1 p-2 hover:text-primary dark-hover:text-blue-300
        rounded-lg">
            <a href="{{ route('dashboard.PeerConsellorData') }}" class=" flex flex-col items-center @if ($modul === 'Peer Conselor Data') text-primary @else text-gray-700 @endif">
                <i class='bx bx-user @if ($modul === ' Peer Conselor Data') text-primary @else text-gray-700 @endif text-lg'></i>
                <span class="text-base mt-2 text-center">Peer Counselor Data</span>
            </a>
        </li>
        <li class="mt-1 p-2 hover:text-primary dark-hover:text-blue-300
        rounded-lg">
            <a href="{{ route('dashboard.PsikologData') }}" class=" flex flex-col items-center @if ($modul === 'Psikolog Data') text-primary @else text-gray-700 @endif">
                <i class='bx bx-user @if ($modul === ' Psikolog Data') text-primary @else text-gray-700 @endif text-lg'></i>
                <span class="text-base mt-2 text-center">Psikolog Data</span>
            </a>
        </li>
        @endif



        @if (auth()->user()->role == 'PsikotestFree')
        <li class="my-5 p-2 hover:text-primary dark-hover:text-blue-300 rounded-lg">
            <a href="{{ route('dashboard.psikotestfree.data') }}" class=" flex flex-col items-center @if ($modul === 'Psikotest Free Data') text-primary @else text-gray-700 @endif hover:text-primary duration-700">
                <i class="bx bxs-user @if ($modul === 'Psikotest Free Data') text-primary @else text-gray-700 @endif text-lg"></i>
                <span class="text-base mt-2">Data</span>
            </a>

        </li>

        <li class="my-5 p-2 hover:text-primary dark-hover:text-blue-300 rounded-lg">
            <a href="{{ route('dashboard.psikotestfree.question.index') }}" class=" flex flex-col items-center @if ($modul === 'Psikotest Free Soal') text-primary @else text-gray-700 @endif hover:text-primary duration-700">
                <i class="bx bxs-message-rounded-dots  @if ($modul === 'Psikotest Free Soal') text-primary @else text-gray-700 @endif text-lg"></i>
                <span class="text-base mt-2 text-center">Soal</span>
            </a>
        </li>
        @endif



        @if (auth()->user()->role == 'BerbinarPlus')
        <li class="mt-1 p-2 hover:text-primary dark-hover:text-blue-300  rounded-lg">
            <a href="{{ route('dashboard.berbinarplus.data') }}" class=" flex flex-col items-center @if ($modul === 'Berbinar Plus User Data') text-primary @else text-gray-700 @endif">
                <i class='bx bx-user @if ($modul === ' Berbinar Plus User Data') text-primary @else text-gray-700 @endif text-lg'></i>
                <span class="text-base mt-2 text-center">User Data</span>
            </a>
        </li>
        @endif


        @if ((((((auth()->user()->role == 'PsikotestPaid' && $title != 'Dashboard Tes') && $title != 'BAUM') && $title != 'HTP') && $title != 'DAP' ) && $title != 'Dashboard Esai') && $title != 'Pengumpulan')
        <li class="my-5 p-2 hover:text-primary dark-hover:text-blue-300 rounded-lg">
            <a href="{{ route('dashboard.psikotespaid.data') }}" class=" flex flex-col items-center @if ($modul === 'Psikotest Paid Data') text-primary @else text-gray-700 @endif hover:text-primary duration-700">
                <i class="bx bxs-user @if ($modul === 'Psikotest Paid Data') text-primary @else text-gray-700 @endif text-lg"></i>
                <span class="text-base mt-2">Data</span>
            </a>
        </li>

        <!-- Psikotest Data -->
        @php
        $dataRoute = $modul === 'psikotestSoal' | $modul === 'psikotestData' | $modul === 'Dashboard Papikostick' | $modul === 'papikostick' ? 'dashboard.psikotespaid.psikotestData' : 'dashboard.psikotespaid.data';
        $dataText = ($modul === 'psikotestData' || $modul === 'psikotestSoal' || $modul === 'papikostick') ? 'Data' : 'Data';
        $dataTextColor = $modul === 'psikotestData' ? 'text-primary' : 'text-gray-700';
        @endphp

        <li class="my-5 p-2 hover:text-primary dark-hover:text-blue-300 rounded-lg">
            <a href="{{ route('dashboard.psikotespaid.data-test') }}" class=" flex flex-col items-center @if ($modul === 'Psikotest Paid Data Test') text-primary @else text-gray-700 @endif hover:text-primary duration-700">
                <i class="bx bxs-file  @if ($modul === 'Psikotest Paid Data Test') text-primary @else text-gray-700 @endif text-lg"></i>
                <span class="text-base mt-2 text-center">Data Test</span>
            </a>
        </li>

        <!-- Psikotest Soal -->
        @php
        $activeModule = $modul === 'psikotestData' | $modul === 'psikotestSoal' | $modul === 'Dashboard Papikostick' | $modul === 'papikostick' ? 'dashboard.psikotespaid.psikotestSoal' : 'dashboard.psikotespaid.data-test';
        $activeText = ($modul === 'psikotestSoal' || $modul === 'psikotestData' || $modul === 'papikostick' || $modul === 'Dashboard Papikostick') ? 'Soal' : 'Data Test';
        $textColor = $modul === 'psikotestSoal' ? 'text-primary' : 'text-gray-700';
        @endphp

        <li class="my-5 p-2 hover:text-primary dark-hover:text-blue-300 rounded-lg">
            <a href="{{ route('dashboard.psikotespaid.dashboardtes') }}" class=" flex flex-col items-center @if ($modul === 'Dashboard Tes Grafis') text-primary @else text-gray-700 @endif hover:text-primary duration-700">
                <i class="bx bx-server  @if ($modul === 'Dashboard Tes Grafis') text-primary @else text-gray-700 @endif text-lg"></i>
                <span class="text-base mt-2 text-center">Database</span>
            </a>
        </li>

        <li class="my-5 p-2 hover:text-primary dark-hover:text-blue-300 rounded-lg">
            <a href="{{ route('dashboard.psikotespaid.dashboardesai') }}" class=" flex flex-col items-center @if ($modul === 'Dashboard Tes Esai') text-primary @else text-gray-700 @endif hover:text-primary duration-700">
                <i class="bx bx-server  @if ($modul === 'Dashboard Tes Esai') text-primary @else text-gray-700 @endif text-lg"></i>
                <span class="text-base mt-2 text-center">Esai</span>
            </a>
        </li>

        {{-- @php (punya kakfat yang bikin if nya ga abis2)
        // Tentukan apakah modul saat ini termasuk dalam daftar yang perlu disembunyikan
        if (!$hidePriceList)
        $hidePriceList = in_array($modul, ['psikotestSoal', 'psikotestData', 'Dashboard Papikostick', 'papikostick']);
        @endphp --}}

        <li class="my-5 p-2 hover:text-primary dark-hover:text-blue-300 rounded-lg relative">
            <!-- Dropdown Button -->
            <a href="{{ route('dashboard.psikotespaid.price-list') }}" onclick="toggleDropdown()" class="flex flex-col items-center @if ($modul === 'papikostick' || $modul === 'dashboardPapikostick') text-primary @else text-gray-700 @endif hover:text-primary duration-700">
                <i class="bx bxs-purchase-tag @if ($modul === 'papikostick' || $modul === 'dashboardPapikostick') text-primary @else text-gray-700 @endif text-lg"></i>
                <span class="text-base mt-2 text-center">Price List</span>
            </a>

            <!-- Dropdown Menu -->
            {{-- <div id="dropdown-menu" class="absolute left-0 mt-2 w-48 bg-primary border border-primary rounded-lg shadow-lg hidden"> --}}
                {{-- <a href="{{ route('dashboard.psikotespaid.individu') }}" class="block px-4 py-2 text-white hover:bg-gray-100 dark:hover:bg-gray-700">Individu</a>
                <a href="{{ route('dashboard.psikotespaid.pendidikan') }}" class="block px-4 py-2 text-white hover:bg-gray-100 dark:hover:bg-gray-700">Pendidikan</a>
                <a href="{{ route('dashboard.psikotespaid.perusahaan') }}" class="block px-4 py-2 text-white hover:bg-gray-100 dark:hover:bg-gray-700">Perusahaan</a>
                <a href="{{ route('dashboard.psikotespaid.komunitas') }}" class="block px-4 py-2 text-white hover:bg-gray-100 dark:hover:bg-gray-700">Komunitas</a> --}}
                {{-- <a href="" class="block px-4 py-2 text-white hover:bg-gray-100 dark:hover:bg-gray-700">Individu</a>
                <a href="" class="block px-4 py-2 text-white hover:bg-gray-100 dark:hover:bg-gray-700">Pendidikan</a>
                <a href="" class="block px-4 py-2 text-white hover:bg-gray-100 dark:hover:bg-gray-700">Perusahaan</a>
                <a href="" class="block px-4 py-2 text-white hover:bg-gray-100 dark:hover:bg-gray-700">Komunitas</a> --}}
            {{-- </div> --}}
        </li>

        @elseif ($title === 'Dashboard Esai' || $title === 'Pengumpulan')
        <li class="my-5 p-2 hover:text-primary dark-hover:text-blue-300 rounded-lg">
            <a href="{{ route('dashboard.psikotespaid.pengumpulan') }}" class=" flex flex-col items-center @if ($modul === 'Psikotest Paid Pengumpulan') text-primary @else text-gray-700 @endif hover:text-primary duration-700">
                <i class="bx bx-edit  @if ($modul === 'Psikotest Paid Pengumpulan') text-primary @else text-gray-700 @endif text-lg"></i>
                <span class="text-base mt-2 text-center">Pengumpulan</span>
            </a>
        </li>

        @elseif ($title === 'Dashboard Tes' || $title === 'BAUM' || $title === 'DAP' || $title === 'HTP' )
        <li class="my-5 p-2 hover:text-primary dark-hover:text-blue-300 rounded-lg">
            <a href="{{ route('dashboard.psikotespaid.baum') }}" class=" flex flex-col items-center @if ($modul === 'Psikotest Paid BAUM') text-primary @else text-gray-700 @endif hover:text-primary duration-700">
                <i class="bx bx-edit  @if ($modul === 'Psikotest Paid BAUM') text-primary @else text-gray-700 @endif text-lg"></i>
                <span class="text-base mt-2 text-center">BAUM</span>
            </a>
        </li>
        <li class="my-5 p-2 hover:text-primary dark-hover:text-blue-300 rounded-lg">
            <a href="{{ route('dashboard.psikotespaid.dap') }}" class=" flex flex-col items-center @if ($modul === 'Psikotest Paid DAP') text-primary @else text-gray-700 @endif hover:text-primary duration-700">
                <i class="bx bx-edit  @if ($modul === 'Psikotest Paid DAP') text-primary @else text-gray-700 @endif text-lg"></i>
                <span class="text-base mt-2 text-center">DAP</span>
            </a>
        </li>
        <li class="my-5 p-2 hover:text-primary dark-hover:text-blue-300 rounded-lg">
            <a href="{{ route('dashboard.psikotespaid.htp') }}" class=" flex flex-col items-center @if ($modul === 'Psikotest Paid HTP') text-primary @else text-gray-700 @endif hover:text-primary duration-700">
                <i class="bx bx-edit  @if ($modul === 'Psikotest Paid HTP') text-primary @else text-gray-700 @endif text-lg"></i>
                <span class="text-base mt-2 text-center">HTP</span>
            </a>
        </li>
        @endif

        @if ($title === 'Dashboard Tes' || $title === 'BAUM' || $title === 'DAP' || $title === 'HTP' || $title === 'Dashboard Esai' || $title === 'Pengumpulan')
        <li class="mt-20 p-2 hover:text-primary dark-hover:text-blue-300
        rounded-lg">
            <a href="{{ route('dashboard') }}" class=" flex flex-col items-center">
                <button type="submit" class="items-center flex gap-2">
                    <i class='bx bx-log-out text-lg'></i>
                    <span class="text-base text-center">Kembali</span>
                </button>
            </a>
        </li>
        @else
        <li class="mt-20 p-2 hover:text-primary dark-hover:text-blue-300
        rounded-lg">
            <form action="/logout" method="POST">
                @csrf
                <a href="/logout" class=" flex flex-col items-center">
                    <button type="submit" class="items-center flex gap-2">
                        <i class='bx bx-log-out text-lg'></i>
                        <span class="text-base text-center">Logout</span>
                    </button>
                </a>
            </form>
        </li>
        @endif

    </ul>

    <script>
        function toggleDropdown() {
            var dropdown = document.getElementById('dropdown-menu');
            if (dropdown.classList.contains('hidden')) {
                dropdown.classList.remove('hidden');
            } else {
                dropdown.classList.add('hidden');
            }
        }

        // Close dropdown if clicked outside
        document.addEventListener('click', function(event) {
            var dropdown = document.getElementById('dropdown-menu');
            var button = document.querySelector('button');
            if (!button.contains(event.target) && !dropdown.contains(event.target)) {
                dropdown.classList.add('hidden');
            }
        });
    </script>

    <!-- JS SIDEBAR PAPIKOSTICK -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const currentModule = '{{ $modul }}'.toLowerCase(); // Convert module to lowercase for comparison
            const sidebarItems = document.querySelectorAll('.sidebar li');

            sidebarItems.forEach(item => {
                const link = item.querySelector('a') || item.querySelector('button');
                if (link) {
                    const href = link.getAttribute('href') || '';
                    const moduleName = href.split('/').pop().toLowerCase(); // Extract module name from href

                    if (!currentModule || !moduleName || !href.includes(currentModule)) {
                        item.classList.add('hidden'); // Hide items that don't match the current module
                    } else {
                        item.classList.remove('hidden'); // Show items that match the current module
                    }
                }
            });
        });

        function toggleDropdown() {
            const dropdownMenu = document.getElementById('dropdown-menu');
            dropdownMenu.classList.toggle('hidden');
        }
    </script>
</nav>
