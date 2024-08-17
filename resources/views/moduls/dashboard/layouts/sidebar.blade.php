<nav class="w-[10%] flex flex-col items-center bg-white py-8 px-4">
    {{-- LOGO BERBINAR --}}
    <div>
        <img src="{{ asset('assets/images/logo-berbinar.png') }}" alt="Logo Berbinar Insightful Indonesia"
            title="Logo Berbinar Insightful Indonesia" class="w-14">
    </div>

    {{-- LIST MENU --}}
    <ul class="mt-10 text-gray-700 dark:text-gray-400 capitalize">
        <!-- Links -->
        <li class="mt-1 p-2 hover:text-primary dark-hover:text-blue-300
        rounded-lg">
            <a href="{{ route('dashboard') }}"
                class=" flex flex-col items-center @if ($modul === 'Dashboard') text-primary @else text-gray-700 @endif hover:text-primary duration-700">
                <i class='bx bx-grid-alt text-lg'></i>
                <span class="text-base mt-2">Dashboard</span>
            </a>

        </li>

        @if (auth()->user()->role == 'Admin')
        <li class="mt-6 p-2 text-primary rounded-lg">
            <a href="#" class=" flex flex-col items-center">
                <svg class="fill-current h-5 w-5" viewBox="0 0 24 24">
                    <path
                        d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M917v2H5v-2h4M21 3h-8v6h8V3M11 3H3v10h8V3m108h-8v10h8V11m-10 4H3v6h8v-6z">
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
            <a href="{{ route('dashboard.positions') }}"
                class=" flex flex-col items-center @if ($modul === 'Positions') text-primary @else text-gray-700 @endif hover:text-primary duration-700">
                <i class='bx bx-briefcase-alt-2  text-lg'></i>
                <span class="text-base mt-2">Positions</span>
            </a>

        </li>

        <li class="mt-1 p-2 hover:text-primary dark-hover:text-blue-300
        rounded-lg">
            <a href="{{ route('dashboard.positions.descriptions') }}"
                class=" flex flex-col items-center @if ($modul === 'Positions Descriptions') text-primary @else text-gray-700 @endif">
                <i class='bx bxl-upwork  text-lg'></i>
                <span class="text-base mt-2 text-center">Position Descriptions</span>
            </a>

        </li>

        <li class="mt-1 p-2 hover:text-primary dark-hover:text-blue-300
        rounded-lg">
            <a href="{{ route('dashboard.positions.requirements') }}"
                class=" flex flex-col items-center @if ($modul === 'Positions Requirements') text-primary @else text-gray-700 @endif">
                <i class='bx bx-file text-lg'></i>
                <span class="text-base mt-2 text-center">Position Requirements</span>
            </a>

        </li>

        <!-- sidebar intenship  -->
        <li class="mt-1 p-2 hover:text-primary dark-hover:text-blue-300
        rounded-lg">
            <a href="{{ route('dashboard.internship') }}"
                class=" flex flex-col items-center @if ($modul === 'Internship') text-primary @else text-gray-700 @endif">
                <i class='bx bx-book text-lg'></i>
                <span class="text-base mt-2 text-center">Internship</span>
            </a>
        </li>
        @endif



        @if (auth()->user()->role == 'Konselling')
        <li class="mt-1 p-2 hover:text-primary dark-hover:text-blue-300
        rounded-lg">
            <a href="{{ route('dashboard.PeerConsellorSchedule') }}"
                class=" flex flex-col items-center @if ($modul === 'Peer Conselor Schedule') text-primary @else text-gray-700 @endif">
                <i class='bx bx-calendar @if ($modul === ' Peer Conselor Schedule') text-primary @else text-gray-700
                    @endif text-lg'></i>
                <span class="text-base mt-2 text-center">Peer Counselor Schedule</span>
            </a>
        </li>
        <li class="mt-1 p-2 hover:text-primary dark-hover:text-blue-300
        rounded-lg">
            <a href="{{ route('dashboard.PeerConsellorData') }}"
                class=" flex flex-col items-center @if ($modul === 'Peer Conselor Data') text-primary @else text-gray-700 @endif">
                <i class='bx bx-user @if ($modul === ' Peer Conselor Data') text-primary @else text-gray-700 @endif
                    text-lg'></i>
                <span class="text-base mt-2 text-center">Peer Counselor Data</span>
            </a>
        </li>
        <li class="mt-1 p-2 hover:text-primary dark-hover:text-blue-300
        rounded-lg">
            <a href="{{ route('dashboard.PsikologData') }}"
                class=" flex flex-col items-center @if ($modul === 'Psikolog Data') text-primary @else text-gray-700 @endif">
                <i class='bx bx-user @if ($modul === ' Psikolog Data') text-primary @else text-gray-700 @endif
                    text-lg'></i>
                <span class="text-base mt-2 text-center">Psikolog Data</span>
            </a>
        </li>
        @endif



        @if (auth()->user()->role == 'PsikotestFree')
        <li class="my-5 p-2 hover:text-primary dark-hover:text-blue-300 rounded-lg">
            <a href="{{ route('dashboard.psikotestfree.data') }}"
                class=" flex flex-col items-center @if ($modul === 'Psikotest Free Data') text-primary @else text-gray-700 @endif hover:text-primary duration-700">
                <i
                    class="bx bxs-user @if ($modul === 'Psikotest Free Data') text-primary @else text-gray-700 @endif text-lg"></i>
                <span class="text-base mt-2">Data</span>
            </a>

        </li>

        <li class="my-5 p-2 hover:text-primary dark-hover:text-blue-300 rounded-lg">
            <a href="{{ route('dashboard.psikotestfree.question.index') }}"
                class=" flex flex-col items-center @if ($modul === 'Psikotest Free Soal') text-primary @else text-gray-700 @endif hover:text-primary duration-700">
                <i
                    class="bx bxs-message-rounded-dots  @if ($modul === 'Psikotest Free Soal') text-primary @else text-gray-700 @endif text-lg"></i>
                <span class="text-base mt-2 text-center">Soal</span>
            </a>
        </li>
        @endif



        @if (auth()->user()->role == 'BerbinarPlus')
        <li class="mt-1 p-2 hover:text-primary dark-hover:text-blue-300  rounded-lg">
            <a href="{{ route('dashboard.berbinarplus.data') }}"
                class=" flex flex-col items-center @if ($modul === 'Berbinar Plus User Data') text-primary @else text-gray-700 @endif">
                <i class='bx bx-user @if ($modul === ' Berbinar Plus User Data') text-primary @else text-gray-700 @endif
                    text-lg'></i>
                <span class="text-base mt-2 text-center">User Data</span>
            </a>
        </li>
        @endif


        @if (auth()->user()->role == 'PsikotestPaid')
        <li class="my-3 p-2 hover:text-primary dark-hover:text-blue-300 rounded-lg">
            <a href="{{ route('dashboard.psikotespaid.data') }}"
                class=" flex flex-col items-center @if ($modul === 'Psikotest Paid Data') text-primary @else text-gray-700 @endif hover:text-primary duration-700">
                <i
                    class="bx bxs-user @if ($modul === 'Psikotest Paid Data') text-primary @else text-gray-700 @endif text-lg"></i>
                <span class="text-base mt-2">Data</span>
            </a>
        </li>

        <li class="my-3 p-2 hover:text-primary dark-hover:text-blue-300 rounded-lg">
            <a href="{{ route('dashboard.psikotespaid.data-test') }}"
                class=" flex flex-col items-center @if ($modul === 'Psikotest Paid Data Test') text-primary @else text-gray-700 @endif hover:text-primary duration-700">
                <i
                    class="bx bxs-file  @if ($modul === 'Psikotest Paid Data Test') text-primary @else text-gray-700 @endif text-lg"></i>
                <span class="text-base mt-2 text-center">Data Test</span>
            </a>
        </li>

        <li class="my-3 p-2 hover:text-primary dark-hover:text-blue-300 rounded-lg relative">
            <a href="{{ route('dashboard.psikotespaid.price-list') }}"
                class=" flex flex-col items-center @if ($modul === 'Psikotest Paid Price List') text-primary @else text-gray-700 @endif hover:text-primary duration-700">
                <i
                    class="bx bxs-purchase-tag  @if ($modul === 'Psikotest Paid Price List') text-primary @else text-gray-700 @endif text-lg"></i>
                <span class="text-base mt-2 text-center">Price List</span>
            </a>
        </li>

        <li class="my-3 p-2 hover:text-primary dark-hover:text-blue-300 rounded-lg">
            <a href="{{ route('dashboard.psikotespaid.testimoni') }}"
                class=" flex flex-col items-center @if ($modul === 'Psikotest Paid Testimoni') text-primary @else text-gray-700 @endif hover:text-primary duration-700">
                <i
                    class="bx bxs-comment-detail  @if ($modul === 'Psikotest Paid Testimoni') text-primary @else text-gray-700 @endif text-lg"></i>
                <span class="text-base mt-2 text-center">Testimoni</span>
            </a>
        </li>
        @endif

        @if ($title === '')
        <li class="mt-20 p-2 hover:text-primary dark-hover:text-blue-300
        rounded-lg">
            <a href="" class=" flex flex-col items-center">
                <button type="submit" class="items-center flex gap-2">
                    <i class='bx bx-log-out text-lg'></i>
                    <span class="text-base text-center">Kembali</span>
                </button>
            </a>
        </li>
        @else
        <li class="mt-16 p-2 hover:text-primary dark-hover:text-blue-300
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

</nav>