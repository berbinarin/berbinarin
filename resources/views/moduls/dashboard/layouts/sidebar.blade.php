<nav class="w-56 flex flex-col items-center bg-white py-8 pl-10 pr-6">
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-thin-rounded/css/uicons-thin-rounded.css'>
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-bold-rounded/css/uicons-bold-rounded.css'>
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-bold-rounded/css/uicons-bold-rounded.css'>
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-bold-straight/css/uicons-bold-straight.css'>
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
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
            <a href="{{ route('dashboard.psikotespaid.dashboardtes') }}" class=" flex flex-row items-center @if ($modul === 'Dashboard Tes') text-primary @else text-gray-700 @endif hover:text-primary duration-700">
                <i class="i fi-tr-chart-line-up text-xl mr-2  @if ($modul === 'Dashboard Tes') text-primary @else text-gray-700 @endif text-lg"></i>
                <span class="text-lg font-bold ml-4 leading-5">Dashboard</span>
            </a>
        </li>

        @elseif ($title === 'Dashboard Esai' || $title === 'Pengumpulan')
        <li class="mt-1 p-2 hover:text-primary dark-hover:text-blue-300
        rounded-lg">
            <a href="{{ route('dashboard.psikotespaid.dashboardesai') }}" class=" flex flex-row items-center @if ($modul === 'Dashboard Tes') text-primary @else text-gray-700 @endif hover:text-primary duration-700">
                <i class="fi fi-tr-chart-line-up text-xl mr-2  @if ($modul === 'Dashboard Tes') text-primary @else text-gray-700 @endif text-lg"></i>
                <span class="text-lg font-bold ml-4 leading-5">Dashboard</span>
            </a>
        </li>

         <!-- PAPI KOSTICK SIDEBAR -->
        @elseif (
    $title === 'Dashboard Papikostick'    // main dashboard papikostick
    || $title === 'User Data Papikostick'   // user data papikostick atau yg table user
    || $title === 'Soal Papikostick'             // soal papikostick
)
        <li class="mt-1 p-2 hover:text-primary dark-hover:text-blue-300
        rounded-lg">
            <a href="{{ route('dashboard.psikotespaid.dashboardPapikostick') }}" class=" flex flex-row items-center @if ($modul === 'Dashboard Tes') text-primary @else text-gray-700 @endif hover:text-primary duration-700">
                <i class="fi fi-tr-chart-line-up text-xl mr-2  @if ($modul === 'Dashboard Tes') text-primary @else text-gray-700 @endif text-lg"></i>
                <span class="text-lg font-bold ml-4 leading-5">Dashboard</span>
            </a>
        </li>

        {{-- $title dashboard baru diberi diisini untuk sidebarnya --}}

        @elseif ($title === 'Dashboard VAK' || $title === 'Jawaban VAK' || $title === 'Detail Jawaban VAK')
        <li class="mt-1 p-2 hover:text-primary dark-hover:text-blue-300
        rounded-lg">
            <a href="{{ route('dashboard.psikotespaid.dashboardVAK') }}" class=" flex flex-row items-center @if ($modul === 'Dashboard Tes') text-primary @else text-gray-700 @endif hover:text-primary duration-700">
                <i class="fi fi-tr-chart-line-up text-xl mr-2  @if ($modul === 'Dashboard Tes') text-primary @else text-gray-700 @endif text-lg"></i>
                <span class="text-lg font-bold ml-4 leading-5">Dashboard</span>
            </a>
        </li>

        @elseif ($title === 'Dashboard EPI' || $title === 'Jawaban EPI' || $title === 'Detail Jawaban EPI')
        <li class="mt-1 p-2 hover:text-primary dark-hover:text-blue-300
        rounded-lg">
            <a href="{{ route('dashboard.psikotespaid.epi') }}" class=" flex flex-row items-center @if ($modul === 'Dashboard Tes') text-primary @else text-gray-700 @endif hover:text-primary duration-700">
                <i class="fi fi-tr-chart-line-up text-xl mr-2  @if ($modul === 'Dashboard Tes') text-primary @else text-gray-700 @endif text-lg"></i>
                <span class="text-lg font-bold ml-4 leading-5">Dashboard</span>
            </a>
        </li>

        @elseif ($title === 'Dashboard RMIB' || $title === 'Jawaban RMIB' || $title === 'Detail Jawaban RMIB')
        <li class="mt-1 p-2 hover:text-primary dark-hover:text-blue-300
        rounded-lg">
            <a href="{{ route('dashboard.psikotespaid.epi') }}" class=" flex flex-row items-center @if ($modul === 'Dashboard Tes') text-primary @else text-gray-700 @endif hover:text-primary duration-700">
                <i class="fi fi-tr-chart-line-up text-xl mr-2  @if ($modul === 'Dashboard Tes') text-primary @else text-gray-700 @endif text-lg"></i>
                <span class="text-lg font-bold ml-4 leading-5">Dashboard</span>
            </a>
        </li>
        
        @elseif ($title === 'Dashboard Dass42' || $title === 'Jawaban Dass42' || $title === 'Detail Jawaban Dass42')
        <li class="mt-1 p-2 hover:text-primary dark-hover:text-blue-300
        rounded-lg">
            <a href="{{ route('dashboard.psikotespaid.dass42') }}" class=" flex flex-row items-center @if ($modul === 'Dashboard Tes') text-primary @else text-gray-700 @endif hover:text-primary duration-700">
                <i class="fi fi-tr-chart-line-up text-xl mr-2  @if ($modul === 'Dashboard Tes') text-primary @else text-gray-700 @endif text-lg"></i>
                <span class="text-lg font-bold ml-4 leading-5">Dashboard</span>
            </a>
        </li>

        @elseif ($title === 'Dashboard SSCT' || $title === 'Jawaban SSCT')
        <li class="mt-1 p-2 hover:text-primary dark-hover:text-blue-300
        rounded-lg">
            <a href="{{ route('dashboard.psikotespaid.dashboardSSCT') }}" class=" flex flex-row items-center @if ($modul === 'Dashboard Tes') text-primary @else text-gray-700 @endif hover:text-primary duration-700">
                <i class="bx bx-grid-alt text-xl mr-2  @if ($modul === 'Dashboard Tes') text-primary @else text-gray-700 @endif text-lg"></i>
                <span class="text-base font-bold ml-4 leading-5">Dashboard</span>
            </a>
        </li>
        
        @elseif ($title === 'Dashboard Alat Tes Biodata' || $title === 'Tes Biodata Perusahaan' || $title === 'Tes Biodata Pendidikan' || $title === 'Tes Biodata Komunitas' || $title === 'Tes Biodata Individual' || $title === 'Tes Biodata Klinis' || $title === 'Table Biodata Perusahaan' || $title === 'Table Biodata Pendidikan' || $title === 'Table Biodata Komunitas' || $title === 'Table Biodata Individual' || $title === 'Table Biodata Klinis')
        <li class="mt-1 p-2 hover:text-primary dark-hover:text-blue-300
        rounded-lg">
        <a href="{{ route('dashboard.psikotespaid.dashboardbiodata') }}" class=" flex flex-row items-center @if ($modul === 'Dashboard Tes') text-primary @else text-gray-700 @endif hover:text-primary duration-700">
            <i class="i fi-tr-chart-line-up text-xl mr-2  @if ($modul === 'Dashboard Tes') text-primary @else text-gray-700 @endif text-lg"></i>
            <span class="text-lg font-bold ml-4 leading-5">Dashboard</span>
            </a>
        </li>

        @elseif ($title === 'Dashboard OCEAN' || $title === 'Jawaban OCEAN' || $title === 'Detail Jawaban OCEAN')
        <li class="mt-1 p-2 hover:text-primary dark-hover:text-blue-300
        rounded-lg">
            <a href="{{ route('dashboard.psikotespaid.ocean') }}" class=" flex flex-row items-center @if ($modul === 'Dashboard Tes') text-primary @else text-gray-700 @endif hover:text-primary duration-700">
                <i class="i fi-tr-chart-line-up text-xl mr-2  @if ($modul === 'Dashboard Tes') text-primary @else text-gray-700 @endif text-lg"></i>
                <span class="text-base font-bold ml-4 leading-5">Dashboard</span>
            </a>
        </li>
        
        @elseif ($title === 'Dashboard BDI' || $title === 'Jawaban BDI' || $title === 'Detail Jawaban BDI')
        <li class="mt-1 p-2 hover:text-primary dark-hover:text-blue-300
        rounded-lg">
            <a href="{{ route('dashboard.psikotespaid.bdi') }}" class=" flex flex-row items-center @if ($modul === 'Dashboard Tes') text-primary @else text-gray-700 @endif hover:text-primary duration-700">
                <i class="i fi-tr-chart-line-up text-xl mr-2  @if ($modul === 'Dashboard Tes') text-primary @else text-gray-700 @endif text-lg"></i>
                <span class="text-base font-bold ml-4 leading-5">Dashboard</span>
            </a>
        </li>

        @else
        <li class="mt-1 p-2 hover:text-primary dark-hover:text-blue-300
        rounded-lg">
            <a href="{{ route('dashboard') }}" class=" flex flex-col items-center @if ($modul === 'Dashboard') text-primary @else text-gray-700 @endif hover:text-primary duration-700">
        <!-- @php
        // Tentukan rute berdasarkan modul aktif
        $dashboardRoute = $modul === 'Dashboard Papikostick' | $modul === 'psikotestSoal' | $modul === 'psikotestData' | $modul === 'papikostick' ? 'dashboard.psikotespaid.dashboardPapikostick' : 'dashboard';
        $dashboardTextColor = $modul === 'Dashboard Papikostick' ? 'text-primary' : 'text-gray-700';
        @endphp -->

        <li class="mt-1 p-2 hover:text-primary dark-hover:text-blue-300 rounded-lg">
            <a href="{{ route($dashboardRoute) }}" class="flex items-center {{ $dashboardTextColor }} hover:text-primary duration-700">
                <i class="fi fi-tr-chart-line-up text-xl mr-2 "></i>
                <span class="text-lg font-bold ml-4 leading-5">Dashboard</span>
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
        <li class="my-5 p-2 hover:text-primary dark-hover:text-blue-300 rounded-lg">
            <a href="{{ route('dashboard.positions') }}" class="flex flex-row items-center @if ($modul === 'Positions') text-primary @else text-gray-700 @endif hover:text-primary duration-700">
                <i class="bx bx-briefcase-alt-2 text-xl mr-2 @if ($modul === 'Positions') text-primary @else text-gray-700 @endif text-lg"></i>
                <span class="text-base font-bold ml-4 leading-5">Positions</span>
            </a>
        </li>

        <li class="my-5 p-2 hover:text-primary dark-hover:text-blue-300 rounded-lg">
            <a href="{{ route('dashboard.positions.descriptions') }}" class="flex flex-row items-center @if ($modul === 'Positions Descriptions') text-primary @else text-gray-700 @endif hover:text-primary duration-700">
                <i class="bx bxl-upwork text-xl mr-2 @if ($modul === 'Positions Descriptions') text-primary @else text-gray-700 @endif text-lg"></i>
                <span class="text-base font-bold ml-4 leading-5">Position Descriptions</span>
            </a>
        </li>

        <li class="my-5 p-2 hover:text-primary dark-hover:text-blue-300 rounded-lg">
            <a href="{{ route('dashboard.positions.requirements') }}" class="flex flex-row items-center @if ($modul === 'Positions Requirements') text-primary @else text-gray-700 @endif hover:text-primary duration-700">
                <i class="bx bx-file text-xl mr-2 @if ($modul === 'Positions Requirements') text-primary @else text-gray-700 @endif text-lg"></i>
                <span class="text-base font-bold ml-4 leading-5">Position Requirements</span>
            </a>
        </li>

        <!-- sidebar intenship  -->
        <li class="my-5 p-2 hover:text-primary dark-hover:text-blue-300 rounded-lg">
            <a href="{{ route('dashboard.internship') }}" class=" flex flex-row items-center @if ($modul === 'Internship') text-primary @else text-gray-700 @endif hover:text-primary duration-700">
                <i class="bx bx-book text-xl mr-2 @if ($modul === 'Internship') text-primary @else text-gray-700 @endif text-lg"></i>
                <span class="text-base font-bold ml-4 leading-5">Internship</span>
            </a>
        </li>

        <!-- sidebar keluarga berbinar  -->
        <li class="my-5 p-2 hover:text-primary dark-hover:text-blue-300 rounded-lg">
            <a href="{{ route('dashboard.berbinarFamily') }}" class=" flex flex-row items-center @if ($modul === 'BerbinarFamily') text-primary @else text-gray-700 @endif hover:text-primary duration-700">
                <i class="bx bx-group text-xl mr-2 @if ($modul === 'BerbinarFamily') text-primary @else text-gray-700 @endif text-lg"></i>
                <span class="text-base font-bold ml-4 leading-5">Keluarga Berbinar</span>
            </a>
        </li>

        <!-- sidebar manage division  -->
        <li class="my-5 p-2 hover:text-primary dark-hover:text-blue-300 rounded-lg">
            <a href="{{ route('dashboard.manageDivision') }}" class=" flex flex-row items-center @if ($modul === 'Manage Division') text-primary @else text-gray-700 @endif hover:text-primary duration-700">
                <i class="bi bi-files text-xl mr-2 @if ($modul === 'Manage Division') text-primary @else text-gray-700 @endif text-lg"></i>
                <span class="text-base font-bold ml-4 leading-5">Manage Division</span>
            </a>
        </li>
        @endif

        @if (auth()->user()->role == 'Konselling')
        <li class="my-5 p-2 hover:text-primary dark-hover:text-blue-300 rounded-lg">
            <a href="{{ route('dashboard.PeerConsellorSchedule') }}" class=" flex flex-row items-center @if ($modul === 'Peer Conselor Schedule') text-primary @else text-gray-700 @endif hover:text-primary duration-700">
                <i class="bx bx-calendar text-xl mr-2 @if ($modul === ' Peer Conselor Schedule') text-primary @else text-gray-700 @endif text-lg"></i>
                <span class="text-base font-bold ml-4 leading-5">Peer Counselor Schedule</span>
            </a>
        </li>

        <li class="my-5 p-2 hover:text-primary dark-hover:text-blue-300 rounded-lg">
            <a href="{{ route('dashboard.PeerConsellorData') }}" class=" flex flex-row items-center @if ($modul === 'Peer Conselor Data') text-primary @else text-gray-700 @endif hover:text-primary duration-700">
                <i class="bx bx-user text-xl mr-2 @if ($modul === ' Peer Conselor Data') text-primary @else text-gray-700 @endif text-lg"></i>
                <span class="text-base font-bold ml-4 leading-5">Peer Counselor Data</span>
            </a>
        </li>

        <li class="my-5 p-2 hover:text-primary dark-hover:text-blue-300 rounded-lg">
            <a href="{{ route('dashboard.PsikologData') }}" class=" flex flex-row items-center @if ($modul === 'Psikolog Data') text-primary @else text-gray-700 @endif hover:text-primary duration-700">
                <i class="bx bx-user text-xl mr-2 @if ($modul === ' Psikolog Data') text-primary @else text-gray-700 @endif text-lg"></i>
                <span class="text-base font-bold ml-4 leading-5">Psikolog Data</span>
            </a>
        </li>
        @endif


        @if (auth()->user()->role == 'PsikotestFree')
        <li class="my-5 p-2 hover:text-primary dark-hover:text-blue-300 rounded-lg">
            <a href="{{ route('dashboard.psikotestfree.data') }}" class=" flex flex-row items-center @if ($modul === 'Psikotest Free Data') text-primary @else text-gray-700 @endif hover:text-primary duration-700">
                <i class="bx bxs-user text-xl mr-2 @if ($modul === 'Psikotest Free Data') text-primary @else text-gray-700 @endif text-lg"></i>
                <span class="text-base font-bold ml-4 leading-5">Data</span>
            </a>

        </li>

        <li class="my-5 p-2 hover:text-primary dark-hover:text-blue-300 rounded-lg">
            <a href="{{ route('dashboard.psikotestfree.question.index') }}" class=" flex flex-row items-center @if ($modul === 'Psikotest Free Soal') text-primary @else text-gray-700 @endif hover:text-primary duration-700">
                <i class="bx bxs-message-rounded-dots text-xl mr-2 @if ($modul === 'Psikotest Free Soal') text-primary @else text-gray-700 @endif text-lg"></i>
                <span class="text-base font-bold ml-4 leading-5">Soal</span>
            </a>
        </li>
        @endif

        @if (auth()->user()->role == 'BerbinarPlus')
        <li class="my-5 p-2 hover:text-primary dark-hover:text-blue-300 rounded-lg">
            <a href="{{ route('dashboard.berbinarplus.data') }}" class=" flex flex-row items-center @if ($modul === 'Berbinar Plus User Data') text-primary @else text-gray-700 @endif hover:text-primary duration-700">
                <i class="bx bx-user text-xl mr-2 @if ($modul === ' Berbinar Plus User Data') text-primary @else text-gray-700 @endif text-lg"></i>
                <span class="text-base font-bold ml-4 leading-5">User Data</span>
            </a>
        </li>
        @endif

        {{-- Nambahin menu sidebar ini diberi != agar tampil --}}
        @if ((((((((((((((((((((((((((((auth()->user()->role == 'PsikotestPaid' && $title != 'Dashboard Tes') && $title != 'BAUM') && $title != 'HTP') && $title != 'DAP' ) && $title != 'Dashboard Esai') && $title != 'Pengumpulan') && $title != 'Dashboard VAK' ) && $title != 'Jawaban VAK') && $title != 'Detail Jawaban VAK') && $title != 'Dashboard SSCT') && $title != 'Jawaban SSCT') && $title != 'Dashboard Alat Tes Biodata') && $title != 'Tes Biodata Perusahaan') && $title != 'Tes Biodata Pendidikan') && $title != 'Tes Biodata Komunitas') && $title != 'Tes Biodata Individual') && $title != 'Tes Biodata Klinis') && $title != 'Table Biodata Perusahaan') && $title != 'Table Biodata Pendidikan') && $title != 'Table Biodata Komunitas') && $title != 'Table Biodata Individual') && $title != 'Table Biodata Klinis') && $title != 'Dashboard OCEAN') && $title != 'Dashboard BDI') && $title != 'Jawaban OCEAN') && $title != 'Jawaban BDI') && $title != 'Detail Jawaban OCEAN') && $title != 'Detail Jawaban BDI' && $title != 'Dashboard Papikostick' && $title != 'User Data Papikostick' && $title != 'Soal Papikostick' && $title != 'Dashboard Dass42' && $title != 'Jawaban Dass42' && $title != 'Detail Jawaban Dass42' && $title != 'Dashboard EPI' && $title != 'Jawaban EPI' && $title != 'Detail Jawaban EPI' && $title != 'Dashboard RMIB' && $title != 'Jawaban RMIB' && $title != 'Detail Jawaban RMIB')
        <li class="my-5 p-2 hover:text-primary dark-hover:text-blue-300 rounded-lg">
            <a href="{{ route('dashboard.psikotespaid.data') }}" class=" flex items-center @if ($modul === 'Psikotest Paid Data') text-primary @else text-gray-700 @endif hover:text-primary duration-700">
                <i class="fi fi-br-ballot text-xl mr-2 @if ($modul === 'Psikotest Paid Data') text-primary @else text-gray-700 @endif text-lg"></i>
                <span class="text-base font-bold ml-4 leading-5">Data<br>Pendaftar</span>
            </a>
        </li>


        <!-- Psikotest Data INIIIIIIIII -->
        <!-- @php
        $dataRoute = $modul === 'psikotestSoal' | $modul === 'psikotestData' | $modul === 'Dashboard Papikostick' | $modul === 'papikostick' ? 'dashboard.psikotespaid.psikotestData' : 'dashboard.psikotespaid.data';
        $dataText = ($modul === 'psikotestData' || $modul === 'psikotestSoal' || $modul === 'papikostick') ? 'Data' : 'Data';
        $dataTextColor = $modul === 'psikotestData' ? 'text-primary' : 'text-gray-700';
        @endphp -->

        <li class="my-5 p-2 hover:text-primary dark-hover:text-blue-300 rounded-lg">
            <a href="{{ route('dashboard.psikotespaid.data-test') }}" class=" flex items-center @if ($modul === 'Psikotest Paid Data Test') text-primary @else text-gray-700 @endif hover:text-primary duration-700">
                <i class="fi fi-br-database text-xl mr-2  @if ($modul === 'Psikotest Paid Data Test') text-primary @else text-gray-700 @endif text-lg"></i>
                <span class="text-base font-bold ml-4 leading-5">Data Test</span>
            </a>
        </li>

        <!-- Psikotest Soal INIIIIIIIII -->
        <!-- @php
        $activeModule = $modul === 'psikotestData' | $modul === 'psikotestSoal' | $modul === 'Dashboard Papikostick' | $modul === 'papikostick' ? 'dashboard.psikotespaid.psikotestSoal' : 'dashboard.psikotespaid.data-test';
        $activeText = ($modul === 'psikotestSoal' || $modul === 'psikotestData' || $modul === 'papikostick' || $modul === 'Dashboard Papikostick') ? 'Soal' : 'Data Test';
        $textColor = $modul === 'psikotestSoal' ? 'text-primary' : 'text-gray-700';
        @endphp -->

        {{-- <li class="my-5 p-2 hover:text-primary dark-hover:text-blue-300 rounded-lg">
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
        </li> --}}

        {{-- @php (punya kakfat yang bikin if nya ga abis2)
        // Tentukan apakah modul saat ini termasuk dalam daftar yang perlu disembunyikan
        if (!$hidePriceList)
        $hidePriceList = in_array($modul, ['psikotestSoal', 'psikotestData', 'Dashboard Papikostick', 'papikostick']);
        @endphp --}}

        <li class="my-5 p-2 hover:text-primary dark:hover:text-blue-300 rounded-lg relative">
        <!-- Dropdown Button -->
            <a href="#" onclick="toggleDropdown(event)" class="flex justify-between items-center @if ($modul === 'papikostick' || $modul === 'dashboardPapikostick') text-primary @else text-gray-700 @endif hover:text-primary duration-700">
            <div class="flex items-center space-x-2">
                <i class="bx bxs-purchase-tag text-xl mr-4  @if ($modul === 'papikostick' || $modul === 'dashboardPapikostick') text-primary @else text-gray-700 @endif text-lg"></i>
                <span class="text-base font-bold ml-4 leading-5">Price List</span>
            </div>
            <!-- Dropdown Icon -->
            <i class="bx bx-chevron-down"></i>
            </a>

            <!-- Dropdown Menu -->
            <div id="dropdown-menu" class="absolute left-0 mt-2 w-48 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg shadow-lg hidden">
                <a href="{{ route('dashboard.psikotespaid.price-list') }}" class="group flex justify-between items-center px-4 py-2 text-gray-700">
                Komunitas
                    <i class="bx bx-radio-circle text-gray-500 group-hover:bx-radio-circle-marked group-hover:text-blue-500"></i>
                </a>
                <a href="{{ route('dashboard.psikotespaid.price-list') }}" class="group flex justify-between items-center px-4 py-2 text-gray-700">
                Individu
                    <i class="bx bx-radio-circle text-gray-500 group-hover:bx-radio-circle-marked group-hover:text-blue-500"></i>
                </a>
                <a href="{{ route('dashboard.psikotespaid.price-list') }}" class="group flex justify-between items-center px-4 py-2 text-gray-700">
                Instansi Pendidikan
                    <i class="bx bx-radio-circle text-gray-500 group-hover:bx-radio-circle-marked group-hover:text-blue-500"></i>
                </a>
                <a href="{{ route('dashboard.psikotespaid.price-list') }}" class="group flex justify-between items-center px-4 py-2 text-gray-700">
                Perusahaan
                    <i class="bx bx-radio-circle text-gray-500 group-hover:bx-radio-circle-marked group-hover:text-blue-500"></i>
                </a>
            </div>
        </li>

        <li class="my-5 p-2 hover:text-primary dark-hover:text-blue-300 rounded-lg">
            <a href="{{ route('dashboard.psikotespaid.testimoni') }}" class="flex items-center @if ($modul === 'dashboard.psikotespaid.testimoni') text-primary @else text-gray-700 @endif hover:text-primary duration-700">
                <i class="fi fi-bs-feedback-alt text-xl mr-2  @if ($modul === 'dashboard.psikotespaid.testimoni') text-primary @else text-gray-700 @endif text-lg mr-2"></i>
                <span class="text-base font-bold ml-4 leading-5">Testimoni</span>
            </a>
        </li>

        @elseif ($title === 'Dashboard Esai' || $title === 'Pengumpulan')
        <li class="my-5 p-2 hover:text-primary dark-hover:text-blue-300 rounded-lg">
            <a href="{{ route('dashboard.psikotespaid.pengumpulan') }}" class=" flex flex-row items-center @if ($modul === 'Psikotest Paid Pengumpulan') text-primary @else text-gray-700 @endif hover:text-primary duration-700">
                <i class="bx bx-edit text-xl mr-2 @if ($modul === 'Psikotest Paid Pengumpulan') text-primary @else text-gray-700 @endif text-lg"></i>
                <span class="text-base font-bold ml-4 leading-5">Pengumpulan</span>
            </a>
        </li>

        @elseif ($title === 'Dashboard Tes' || $title === 'BAUM' || $title === 'DAP' || $title === 'HTP' )
        <li class="my-5 p-2 hover:text-primary dark-hover:text-blue-300 rounded-lg">
            <a href="{{ route('dashboard.psikotespaid.baum') }}" class=" flex flex-row items-center @if ($modul === 'Psikotest Paid BAUM') text-primary @else text-gray-700 @endif hover:text-primary duration-700">
                <i class="bx bx-edit-alt text-xl mr-2 @if ($modul === 'Psikotest Paid BAUM') text-primary @else text-gray-700 @endif text-lg"></i>
                <span class="text-base font-bold ml-4 leading-5">BAUM</span>
            </a>
        </li>
        <li class="my-5 p-2 hover:text-primary dark-hover:text-blue-300 rounded-lg">
            <a href="{{ route('dashboard.psikotespaid.dap') }}" class=" flex flex-row items-center @if ($modul === 'Psikotest Paid DAP') text-primary @else text-gray-700 @endif hover:text-primary duration-700">
                <i class="bx bx-file text-xl mr-2 @if ($modul === 'Psikotest Paid DAP') text-primary @else text-gray-700 @endif text-lg"></i>
                <span class="text-base font-bold ml-4 leading-5">DAP</span>
            </a>
        </li>
        <li class="my-5 p-2 hover:text-primary dark-hover:text-blue-300 rounded-lg">
            <a href="{{ route('dashboard.psikotespaid.htp') }}" class=" flex flex-row items-center @if ($modul === 'Psikotest Paid HTP') text-primary @else text-gray-700 @endif hover:text-primary duration-700">
                <i class="bx bx-edit text-xl mr-2 @if ($modul === 'Psikotest Paid HTP') text-primary @else text-gray-700 @endif text-lg"></i>
                <span class="text-base font-bold ml-4 leading-5">HTP</span>
            </a>
        </li>

        <!-- PAPI KOSTICK SIDEBAR -->
        @elseif (
    $title === 'Dashboard Papikostick'    // main dashboard papikostick
    || $title === 'User Data Papikostick'   // user data papikostick atau yg table user
    || $title === 'Soal Papikostick'             // soal papikostick
)

    <!-- Menu "Data" Papikostick -->
    <li class="my-5 p-2 hover:text-primary dark-hover:text-blue-300 rounded-lg">
        <a href="{{ route('dashboard.psikotespaid.psikotestData') }}"
           class="flex flex-row items-center 
                  @if ($modul === 'psikotestData') text-primary @else text-gray-700 @endif 
                  hover:text-primary duration-700">
            <i class="bx bx-clipboard text-xl mr-2 
               @if ($modul === 'psikotestData') text-primary @else text-gray-700 @endif 
               text-lg">
            </i>
            <span class="text-base font-bold ml-4 leading-5">Data</span>
        </a>
    </li>

    <!-- Menu "Soal" Papikostick -->
    <li class="my-5 p-2 hover:text-primary dark-hover:text-blue-300 rounded-lg">
        <a href="{{ route('dashboard.psikotespaid.psikotestSoal') }}"
           class="flex flex-row items-center
                  @if ($modul === 'psikotestSoal') text-primary @else text-gray-700 @endif 
                  hover:text-primary duration-700">
            <i class="bx bx-edit text-xl mr-2 
               @if ($modul === 'psikotestSoal') text-primary @else text-gray-700 @endif 
               text-lg">
            </i>
            <span class="text-lg font-bold ml-4 leading-5">Soal</span>
        </a>
    </li>

    {{-- disini tambahan sub menu sidebar dari dashboard yg baru --}}

        @elseif ($title === 'Dashboard VAK' || $title === 'Jawaban VAK' || $title === 'Detail Jawaban VAK')
        <li class="my-5 p-2 hover:text-primary dark-hover:text-blue-300 rounded-lg">
            <a href="{{ route('dashboard.psikotespaid.jawabanVAK') }}" class=" flex flex-row items-center @if ($modul === 'Psikotest Paid VAK') text-primary @else text-gray-700 @endif hover:text-primary duration-700">
                <i class="bx bx-receipt text-xl mr-2 @if ($modul === 'Psikotest Paid VAK') text-primary @else text-gray-700 @endif text-lg"></i>
                <span class="text-base font-bold ml-4 leading-5">Respon</span>
            </a>
        </li>

        @elseif ($title === 'Dashboard Dass42' || $title === 'Jawaban Dass42' || $title === 'Detail Jawaban Dass42')
        <li class="my-5 p-2 hover:text-primary dark-hover:text-blue-300 rounded-lg">
            <a href="{{ route('dashboard.psikotespaid.datadass42') }}" class=" flex flex-row items-center @if ($modul === 'Psikotest Paid Dass42') text-primary @else text-gray-700 @endif hover:text-primary duration-700">
                <i class="bx bx-receipt text-xl mr-2 @if ($modul === 'Psikotest Paid Dass42') text-primary @else text-gray-700 @endif text-lg"></i>
                <span class="text-base font-bold ml-4 leading-5">Pengumpulan</span>
            </a>
        </li>

        @elseif ($title === 'Dashboard EPI' || $title === 'Jawaban EPI' || $title === 'Detail Jawaban EPI')
        <li class="my-5 p-2 hover:text-primary dark-hover:text-blue-300 rounded-lg">
            <a href="{{ route('dashboard.psikotespaid.dataepi') }}" class=" flex flex-row items-center @if ($modul === 'Psikotest Paid EPI') text-primary @else text-gray-700 @endif hover:text-primary duration-700">
                <i class="bx bx-receipt text-xl mr-2 @if ($modul === 'Psikotest Paid Dass42') text-primary @else text-gray-700 @endif text-lg"></i>
                <span class="text-base font-bold ml-4 leading-5">Pengumpulan</span>
            </a>
        </li>

        @elseif ($title === 'Dashboard RMIB' || $title === 'Jawaban RMIB' || $title === 'Detail Jawaban RMIB')
        <li class="my-5 p-2 hover:text-primary dark-hover:text-blue-300 rounded-lg">
            <a href="{{ route('dashboard.psikotespaid.datarmib') }}" class=" flex flex-row items-center @if ($modul === 'Psikotest Paid RMIB') text-primary @else text-gray-700 @endif hover:text-primary duration-700">
                <i class="bx bx-receipt text-xl mr-2 @if ($modul === 'Psikotest Paid Dass42') text-primary @else text-gray-700 @endif text-lg"></i>
                <span class="text-base font-bold ml-4 leading-5">Pengumpulan</span>
            </a>
        </li>

        @elseif ($title === 'Dashboard SSCT' || $title === 'Jawaban SSCT')
        <li class="my-5 p-2 hover:text-primary dark-hover:text-blue-300 rounded-lg">
            <a href="{{ route('dashboard.psikotespaid.jawabanSSCT') }}" class=" flex flex-row items-center @if ($modul === 'Psikotest Paid SSCT') text-primary @else text-gray-700 @endif hover:text-primary duration-700">
                <i class="bx bx-receipt text-xl mr-2 @if ($modul === 'Psikotest Paid SSCT') text-primary @else text-gray-700 @endif text-lg"></i>
                <span class="text-base font-bold ml-4 leading-5">Pengumpulan</span>
            </a>
        </li>

        @elseif ($title === 'Dashboard Alat Tes Biodata' || $title === 'Tes Biodata Perusahaan' || $title === 'Tes Biodata Pendidikan' || $title === 'Tes Biodata Komunitas' || $title === 'Tes Biodata Individual' || $title === 'Tes Biodata Klinis' || $title === 'Table Biodata Perusahaan'|| $title === 'Table Biodata Pendidikan' || $title === 'Table Biodata Komunitas' || $title === 'Table Biodata Individual' || $title === 'Table Biodata Klinis')
        <li class="my-5 p-2 hover:text-primary dark-hover:text-blue-300 rounded-lg">
            <a href="{{ route('dashboard.psikotespaid.biodataperusahaan') }}" class=" flex items-center @if ($modul === 'Psikotest Paid Perusahaan') text-primary @else text-gray-700 @endif hover:text-primary duration-700">
                <i class="bx bxs-business text-xl mr-2 @if ($modul === 'Psikotest Paid Perusahaan') text-primary @else text-gray-700 @endif text-lg"></i>
                <span class="text-base font-bold ml-4 leading-5">Perusahaan</span>
            </a>
        </li>
        <li class="my-5 p-2 hover:text-primary dark-hover:text-blue-300 rounded-lg">
            <a href="{{ route('dashboard.psikotespaid.biodatapendidikan') }}" class=" flex items-center @if ($modul === 'Psikotest Paid Pendidikan') text-primary @else text-gray-700 @endif hover:text-primary duration-700">
                <i class="bx bxs-school text-xl mr-2 @if ($modul === 'Psikotest Paid Pendidikan') text-primary @else text-gray-700 @endif text-lg"></i>
                <span class="text-base font-bold ml-4 leading-5">Pendidikan</span>
            </a>
        </li>
        <li class="my-5 p-2 hover:text-primary dark-hover:text-blue-300 rounded-lg">
            <a href="{{ route('dashboard.psikotespaid.biodatakomunitas') }}" class=" flex items-center @if ($modul === 'Psikotest Paid Komunitas') text-primary @else text-gray-700 @endif hover:text-primary duration-700">
                <i class="bx bxs-group text-xl mr-2 @if ($modul === 'Psikotest Paid Komunitas') text-primary @else text-gray-700 @endif text-lg"></i>
                <span class="text-base font-bold ml-4 leading-5">Komunitas</span>
            </a>
        </li>
        <li class="my-5 p-2 hover:text-primary dark-hover:text-blue-300 rounded-lg">
            <a href="{{ route('dashboard.psikotespaid.biodataindividual') }}" class=" flex items-center @if ($modul === 'Psikotest Paid Individual') text-primary @else text-gray-700 @endif hover:text-primary duration-700">
                <i class="bx bxs-user text-xl mr-2 @if ($modul === 'Psikotest Paid Individual') text-primary @else text-gray-700 @endif text-lg"></i>
                <span class="text-base font-bold ml-4 leading-5">Individual</span>
            </a>
        </li>
        <li class="my-5 p-2 hover:text-primary dark-hover:text-blue-300 rounded-lg">
            <a href="{{ route('dashboard.psikotespaid.biodataklinis') }}" class=" flex items-center @if ($modul === 'Psikotest Paid Klinis') text-primary @else text-gray-700 @endif hover:text-primary duration-700">
                <i class="bx bxs-home-heart text-xl mr-2 @if ($modul === 'Psikotest Paid Klinis') text-primary @else text-gray-700 @endif text-lg"></i>
                <span class="text-base font-bold ml-4 leading-5">Klinis</span>
            </a>
        </li>

        @elseif ($title === 'Dashboard OCEAN' || $title === 'Jawaban OCEAN' || $title === 'Detail Jawaban OCEAN')
        <li class="my-5 p-2 hover:text-primary dark-hover:text-blue-300 rounded-lg">
            <a href="{{ route('dashboard.psikotespaid.dataocean') }}" class=" flex flex-row items-center @if ($modul === 'Psikotest Paid OCEAN') text-primary @else text-gray-700 @endif hover:text-primary duration-700">
                <i class="bx bx-receipt text-xl mr-2 @if ($modul === 'Psikotest Paid OCEAN') text-primary @else text-gray-700 @endif text-lg"></i>
                <span class="text-base font-bold ml-4 leading-5">Pengumpulan</span>
            </a>
        </li>

        @elseif ($title === 'Dashboard BDI' || $title === 'Jawaban BDI' || $title === 'Detail Jawaban BDI')
        <li class="my-5 p-2 hover:text-primary dark-hover:text-blue-300 rounded-lg">
            <a href="{{ route('dashboard.psikotespaid.databdi') }}" class=" flex flex-row items-center @if ($modul === 'Psikotest Paid BDI') text-primary @else text-gray-700 @endif hover:text-primary duration-700">
                <i class="bx bx-receipt text-xl mr-2 @if ($modul === 'Psikotest Paid BDI') text-primary @else text-gray-700 @endif text-lg"></i>
                <span class="text-base font-bold ml-4 leading-5">Pengumpulan</span>
            </a>
        </li>
        @endif

        {{-- klo nambahin button kembali, tambahin $title disini --}}
        @if ($title === 'Dashboard Tes' || $title === 'BAUM' || $title === 'DAP' || $title === 'HTP' || $title === 'Dashboard Esai' || $title === 'Pengumpulan' || $title === 'Dashboard VAK' || $title === 'Jawaban VAK' || $title === 'Dashboard SSCT' || $title === 'Jawaban SSCT' || $title === 'Dashboard Alat Tes Biodata' || $title === 'Tes Biodata Perusahaan' || $title === 'Tes Biodata Pendidikan' || $title === 'Tes Biodata Komunitas' || $title === 'Tes Biodata Individual' || $title === 'Tes Biodata Klinis'  || $title === 'Table Biodata Klinis' || $title === 'Dashboard OCEAN' || $title === 'Dashboard BDI' || $title === 'Jawaban OCEAN' || $title === 'Jawaban BDI' || $title === 'Dashboard Papikostick' || $title === 'User Data Papikostick' || $title === 'Soal Papikostick' || $title === 'Dashboard Dass42' || $title === 'Jawaban Dass42' || $title === 'Detail Jawaban Dass42' || $title === 'Dashboard EPI' || $title === 'Jawaban EPI' || $title === 'Detail Jawaban EPI' || $title === 'Dashboard RMIB' || $title === 'Jawaban RMIB' || $title === 'Detail Jawaban RMIB')
        <li class="mt-20 p-2 hover:text-primary dark-hover:text-blue-300 rounded-lg">
            <a href="{{ route('dashboard') }}" class=" flex flex-col items-center">
                <button type="submit" class="fixed bottom-5 left-14  bg-blue-500 text-white rounded-full px-6 py-2 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-300">
                    <i class='bx bx-log-out text-xl mr-2'></i>
                    <span class="text-base text-center">Kembali</span>
                </button>
            </a>
        </li>
        @elseif ($title === 'Detail Jawaban VAK' || $title === 'Table Biodata Perusahaan'|| $title === 'Table Biodata Pendidikan' || $title === 'Table Biodata Komunitas' || $title === 'Table Biodata Individual' || $title === 'Table Biodata Klinis' || $title === 'Detail Jawaban OCEAN' || $title === 'Detail Jawaban BDI')
        @else
        <li class="mt-20 p-2 hover:text-primary dark-hover:text-blue-300 rounded-lg">
            <form action="/logout" method="POST">
        @csrf
            <button type="submit" class="fixed bottom-5 left-14 items-center gap-2 bg-blue-500 text-white rounded-full px-6 py-2 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-300">
                <i class='bx bx-log-out text-lg'></i>
                <span class="text-base text-center">Logout</span>
            </button>
        </form>
        </li>
        @endif
    </ul>

    <script>
        function toggleDropdown(event) {
            event.stopPropagation();  // Untuk mencegah event bubbling
            var dropdown = event.target.closest('li').querySelector('#dropdown-menu');
            dropdown.classList.toggle('hidden');
        }

    // Close dropdown if clicked outside
        document.addEventListener('click', function(event) {
            var dropdown = document.getElementById('dropdown-menu');
            var dropdownButton = document.querySelector('a[onclick^="toggleDropdown"]');
                if (!dropdownButton.contains(event.target) && !dropdown.contains(event.target)) {
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
