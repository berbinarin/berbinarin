<nav class="w-[20%] flex flex-col items-center bg-white py-8 px-4">
    {{-- LOGO BERBINAR --}}
    <div>
        <img src="{{ asset('assets/images/old/logo-berbinar.png') }}" alt="Logo Berbinar Insightful Indonesia" title="Logo Berbinar Insightful Indonesia" class="w-14">
    </div>

    {{-- LIST MENU --}}
    <ul class="mt-10 text-gray-700 dark:text-gray-400 capitalize">
        <!-- Links -->
        <li class="mt-1 p-2 rounded-lg">
            <a href="#" class="flex items-center text-primary text-gray-700 duration-700">
                <img src="{{ asset('assets/images/psikotes/dashboard.png') }}" alt="Ilustrasi Logo Berbinar" title="Ilustrasi Logo Berbinar" class="w-5 h-5 mr-2 text-primary text-gray-700 hover:text-primary" data-aos="fade-up" data-aos-duration="1500">
                <span class="text-black" style="font-weight: 600;">Dashboard</span>
            </a>
        </li>

        <li class="mt-8 p-2 hover:text-primary dark-hover:text-blue-300 rounded-lg">
            <a href="{{ route('psikotes.dashboard.psikotestData') }}" class="flex -ml-2 items-center @if ($modul === 'psikotestData') text-primary @else text-gray-700 @endif hover:text-primary duration-700">
                @if ($modul === 'psikotestData')
                <img src="{{ asset('assets/images/psikotes/data-aktif.png') }}" alt="data" title="data" class="w-5 h-5 mx-2" data-aos="fade-up" data-aos-duration="1500">
                @else
                <img src="{{ asset('assets/images/psikotes/data.png') }}" alt="data" title="data" class="w-5 h-5 mx-2" data-aos="fade-up" data-aos-duration="1500">
                @endif
                <span class="text-bold mt-2 text-center" style="font-weight: 600;">Data</span>
            </a>
        </li>

        <li class="mt-8 p-2 hover:text-primary dark-hover:text-blue-300 rounded-lg">
            <a href="{{ route('psikotes.dashboard.psikotestSoal') }}" class="flex -ml-2 items-center @if ($modul === 'psikotestSoal') text-primary @else text-gray-700 @endif">
                @if ($modul === 'psikotestSoal')
                <img src="{{ asset('assets/images/psikotes/soal-aktif.png') }}" alt="Soal" title="Soal" class="w-5 h-5 mx-2" data-aos="fade-up" data-aos-duration="1500">
                @else
                <img src="{{ asset('assets/images/psikotes/soal.png') }}" alt="Soal" title="Soal" class="w-5 h-5 mx-2" data-aos="fade-up" data-aos-duration="1500">
                @endif
                <span class="text-bold mt-2 text-center" style="font-weight: 600;">Soal</span>
            </a>
        </li>

        <!-- Tambahkan link yang diperlukan di sini -->
        <!-- <li class="mt-1 p-2 hover:text-primary dark-hover:text-blue-300 rounded-lg">
            <a href="{{ route('dashboard.positions.requirements') }}" class="flex flex-col items-center @if ($modul === 'Positions Requirements') text-primary @else text-gray-700 @endif">
                <i class='bx bx-file text-lg'></i>
                <span class="text-base mt-2 text-center">Position Requirements</span>
            </a>
        </li>

        <li class="mt-1 p-2 hover:text-primary dark-hover:text-blue-300 rounded-lg">
            <a href="{{ route('dashboard.internship') }}" class="flex flex-col items-center @if ($modul === 'Internship') text-primary @else text-gray-700 @endif">
                <i class='bx bx-book text-lg'></i>
                <span class="text-base mt-2 text-center">Internship</span>
            </a>
        </li> -->
    </ul>
</nav>