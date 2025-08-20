@extends('dashboard.layouts.app', [
    'title' => 'Dashboard',
])

@section('content')
    <section class="flex w-full">
        <div class="flex flex-col">
            <div class="w-full">
                <div class="py-10">
                    <div class="">
                        <!-- <p tabindex="0" class="focus:outline-none text-5xl font-bold leading-normal text-gray-800 mb-2">
                                                                                        Dashboard</p> -->
                        @role('hr_recruitment')
                            <p tabindex="0" class="focus:outline-none text-4xl font-bold leading-normal text-gray-800 mb-2">
                                Dashboard</p>
                            <p class="w-2/4 text-disabled">Fitur ini digunakan untuk menampilkan jumlah data posisi hiring,
                                job
                                description, serta requirments
                                yang sedang
                                atau akan
                                dibukan atau telah dibuka yang ditampilkan pada website careers Berbinarin.</p>
                        @endrole

                        @role('hr_data-analyst')
                            <p tabindex="0" class="focus:outline-none text-4xl font-bold leading-normal text-gray-800 mb-2">
                                Dashboard Keluarga Berbinar</p>
                            <p class="w-full text-disabled">Ringkasan waktu nyata status staf, divisi, dan aktivitas keluarga Berbinar dalam satu tampilan.</p>
                        @endrole

                        @role ('counseling-pm')
                            <p tabindex="0"
                                class="focus:outline-none text-4xl font-bold leading-normal text-gray-800 mb-2">
                                Dashboard</p>
                            <p class="w-2/4 text-disabled">Fitur ini digunakan untuk menampilkan data pendaftar konseling
                                yang mendaftar melalui situs web Berbinar</p>
                        @endrole

{{--
                        @role ('psikolog-staff-pm')
                            <p tabindex="0"
                                class="focus:outline-none text-4xl font-bold leading-normal text-gray-800 mb-2">
                                Dashboard Psikolog Staff</p>
                            <p class="w-full text-disabled">Dashboard ini menampilkan ringkasan data staf psikolog dan voucher aktif, untuk membantu mengelola data psikolog staff. dan kode voucher dengan lebih mudah.</p>
                        @endrole
--}}

                        @role ('class-pm')
                            <p tabindex="0"
                                class="focus:outline-none text-4xl font-bold leading-normal mx-10 text-gray-800 mb-2">
                                Dashboard Berbinar +</p>
                            <p class="w-5/6 text-[#333333] lg:text-lg mx-10">
                                Halaman utama yang menampilkan ringkasan data program Berbinar+
                                serta akses cepat untuk mengelola kelas, pendaftar, dan paket layanan secara efisien.
                            </p>
                        @endrole
                        @role('marketing')
                            <p tabindex="0"
                                class="focus:outline-none text-4xl font-bold leading-normal text-gray-800 mb-2">
                                Dashboard ArteRi</p>
                            <p class="text-base text-disabled">Dashboard ini menampilkan ringkasan statistik, daftar artikel, penulis, dan kategori.</p>
                        @endrole






                        @if (Auth::user()->role == 'PsikotestFree')
                            <p tabindex="0"
                                class="focus:outline-none text-4xl font-bold leading-normal text-gray-800 mb-2">
                                Dashboard</p>
                            <p class="w-2/4 text-disabled">Fitur ini menampilkan jumlah
                                pendaftar Tes Psikotes Berbinar dan jumlah soal yang ditampilkan pada website Tes Psikotes
                                Berbinar</p>
                        @else
                            <p class="w-2/4 text-disabled"></p>
                        @endif
                        @if (Auth::user()->role == 'PsikotestPaid')
                        <p
                        class="focus:outline-none text-base sm:text-lg md:text-2xl lg:text-4xl font-bold leading-normal text-gray-800 mb-2">
                        Dashboard PsikotestPaid</p>
                    <p class="w-2/4 text-disabled">Dashboard </p>
                        @else
                            <p class="text-disabled"></p>
                        @endif

                    </div>
                </div>
            </div>


            @role ('hr_recruitment')
                <div class="flex flex-row w-full gap-6">
                    <div class="flex items-center p-8 bg-white shadow rounded-lg">
                        <div
                            class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-primary bg-blur-bg rounded-full mr-6">
                            <i class='bx bx-briefcase-alt-2  text-2xl'></i>
                        </div>
                        <div>
                            <span class="block text-2xl font-bold">{{ $HiringPosisitons }}</span>
                            <span class="block text-gray-500">Positions</span>
                        </div>
                    </div>

                    <div class="flex items-center p-8 bg-white shadow rounded-lg">
                        <div
                            class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-primary bg-blur-bg rounded-full mr-6">
                            <i class='bx bxl-upwork  text-2xl'></i>
                        </div>
                        <div>
                            <span class="block text-2xl font-bold">{{ $HiringPosisitonsJobDescriptionment }}</span>
                            <span class="block text-gray-500">Job Descriptions</span>
                        </div>
                    </div>

                    <div class="flex items-center p-8 bg-white shadow rounded-lg">
                        <div
                            class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-primary bg-blur-bg rounded-full mr-6">
                            <i class='bx bx-file text-2xl'></i>
                        </div>
                        <div>
                            <span class="block text-2xl font-bold">{{ $HiringPosisitonsRequirement }}</span>
                            <span class="block text-gray-500">Requirements</span>
                        </div>
                    </div>
                </div>
            @endrole

            @role ('hr_data-analyst')
                <div class="flex flex-col xl:w-[80vw] gap-6">
                    <div class="flex flex-row w-full gap-6">

                        <div class="flex w-1/3 items-center p-8 bg-white shadow rounded-lg">
                            <div
                                class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-primary bg-blur-bg rounded-full mr-6">
                                <i class='bx bx-user text-3xl'></i>
                            </div>
                            <div>
                                <span class="block text-2xl font-bold">{{ $staff->where('status', true)->count() }}</span>
                                <span class="block text-gray-500">Staf aktif</span>
                            </div>
                        </div>

                        <div class="flex w-1/3 items-center p-8 bg-white shadow rounded-lg">
                            <div
                                class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-primary bg-blur-bg rounded-full mr-6">
                                <i class='bx bxs-graduation text-3xl'></i>
                            </div>
                            <div>
                                <span class="block text-2xl font-bold">{{ $staff->where('status', false)->count() }}</span>
                                <span class="block text-gray-500">Staf tidak aktif</span>
                            </div>
                        </div>

                        <div class="flex w-1/3 items-center p-8 bg-white shadow rounded-lg">
                            <div
                                class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-primary bg-blur-bg rounded-full mr-6">
                                <i class='bx bxs-buildings text-3xl'></i>
                            </div>
                            <div>
                                <span class="block text-2xl font-bold">{{ $subDivisions }}</span>
                                <span class="block text-gray-500">Subdivisi</span>
                            </div>
                        </div>

                    </div>

                    <!-- Charts Section -->
                    <div class="grid grid-cols-1 gap-6">
                        <div class="flex h-[330px] flex-col rounded-xl bg-white px-6 py-4 shadow">
                            <div class="mb-4">
                                <h1 class="text-[28px] text-[#75BADB]"><b>Analisis keluarga Berbinar</b></h1>
                                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-2">
                                    <p class="text-[14px]">Berikut ini merupakan visualisasi diagram keluarga Berbinar</p>
                                </div>
                            </div>
                            <div class="flex w-full flex-col items-center h-full">
                                <canvas id="marketingChart" class="mb-1" style="max-height: 180px;"></canvas>
                                <div class="mb-4 flex gap-4 text-xs">
                                    @php
                                        $chartLabels = ['Staf aktif', 'Staf tidak aktif', 'Subdivisi'];
                                        $chartColors = ['#106681', '#E9B306', '#232ACA'];
                                    @endphp
                                    @foreach($chartLabels as $i => $label)
                                        <div class="flex items-center gap-1">
                                            <span class="inline-block h-3 w-3 rounded" style="background: {{ $chartColors[$i] }}"></span>
                                            {{ $label }}
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @section('script')
                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                    <script>
                        document.addEventListener('DOMContentLoaded', () => {
                            const chartDataValues = [{{ $staff->where('status', true)->count() }}, {{ $staff->where('status', false)->count() }}, {{ $subDivisions }}];
                            const chartColors = ['rgba(16, 102, 129, 0.6)', 'rgba(233, 179, 6, 0.6)', 'rgba(35, 42, 202, 0.6)'];
                            const solidColors = ['#106681', '#E9B306', '#232ACA'];
                            const chartLabels = ['Staf aktif', 'Staf tidak aktif', 'Subdivisi'];

                            const ctx = document.getElementById('marketingChart').getContext('2d');
                            const chartData = {
                                labels: chartLabels,
                                datasets: [
                                    {
                                        label: 'Jumlah',
                                        data: chartDataValues,
                                        backgroundColor: chartColors,
                                        borderRadius: 0,
                                        barThickness: 30,
                                    },
                                ],
                            };

                            new Chart(ctx, {
                                type: 'bar',
                                data: chartData,
                                options: {
                                    indexAxis: 'y',
                                    scales: {
                                        x: {
                                            beginAtZero: true,
                                            grid: { color: '#eee' },
                                            position: 'top',
                                            ticks: {
                                                stepSize: 20,
                                                callback: function(value) {
                                                    return value % 20 === 0 ? value : '';
                                                }
                                            },
                                            min: 0,
                                            max: 100, // Fixed maximum scale at 100
                                            suggestedMax: 100 // Ensure the scale always goes up to 100
                                        },
                                        y: {
                                            grid: { color: '#eee' },
                                        },
                                    },
                                    plugins: {
                                        legend: { display: false },
                                    },
                                    animation: false,
                                },
                                plugins: [
                                    {
                                        afterDatasetsDraw: function (chart) {
                                            const ctx = chart.ctx;
                                            chart.data.datasets.forEach(function (dataset, i) {
                                                const meta = chart.getDatasetMeta(i);
                                                meta.data.forEach(function (bar, index) {
                                                    const value = dataset.data[index];
                                                    ctx.save();
                                                    ctx.font = 'bold 14px sans-serif';
                                                    if (value >= Math.max(...chartDataValues) * 0.8) {
                                                        ctx.fillStyle = '#fff';
                                                        ctx.textAlign = 'right';
                                                        ctx.textBaseline = 'middle';
                                                        ctx.fillText(value, bar.x - 10, bar.y);
                                                    } else {
                                                        ctx.fillStyle = '#444';
                                                        ctx.textAlign = 'left';
                                                        ctx.textBaseline = 'middle';
                                                        ctx.fillText(value, bar.x + 10, bar.y);
                                                    }
                                                    if (value > 0) {
                                                        const solidColor = solidColors[index % solidColors.length];
                                                        const barHeight = bar.height || (bar.base - bar.y) * 2;
                                                        ctx.fillStyle = solidColor;
                                                        ctx.fillRect(bar.x - 6, bar.y - barHeight / 2, 12, barHeight);
                                                    }
                                                    ctx.restore();
                                                });
                                            });
                                        },
                                    },
                                ],
                            });
                        });
                    </script>
                @endsection


                                {{--
                                <div class="text-white rounded-lg flex flex-col justify-between p-4 sm:p-6 relative" style="background-color: #ffffff; min-height: 150px;">
                                    <div class="flex justify-between items-center">
                                        <span class="text-sm sm:text-lg font-semibold">Staff Aktif</span>
                                        <i class='bx bx-user text-xl sm:text-2xl'></i>
                                    </div>
                                    <div class="mt-4 sm:mt-8">
                                        <p class="text-3xl sm:text-4xl md:text-5xl font-bold">{{ $staff->where('status', true)->count() }}</p>
                                        <p class="mt-1 text-sm sm:text-base">Staff</p>
                                    </div>
                                </div>
                                <div class="text-white rounded-lg flex flex-col justify-between p-4 sm:p-6 relative" style="background-color: #ffffff; min-height: 150px;">
                                    <div class="flex justify-between items-center">
                                        <span class="text-sm sm:text-lg font-semibold">Staff Tidak Aktif</span>
                                        <i class='bx bxs-graduation text-xl sm:text-2xl'></i>
                                    </div>
                                    <div class="mt-4 sm:mt-8">
                                        <p class="text-3xl sm:text-4xl md:text-5xl font-bold">{{ $staff->where('status', false)->count() }}</p>
                                        <p class="mt-1 text-sm sm:text-base">Staff</p>
                                    </div>
                                </div>
                                <div class="text-white rounded-lg flex flex-col justify-between p-4 sm:p-6 relative sm:col-span-2 md:col-span-1" style="background-color: #ffffff; min-height: 150px;">
                                    <div class="flex justify-between items-center">
                                        <span class="text-sm sm:text-lg font-semibold">Jumlah Subdivisi</span>
                                        <i class='bx bxs-buildings text-xl sm:text-2xl'></i>
                                    </div>
                                    <div class="mt-4 sm:mt-8">
                                        <p class="text-3xl sm:text-4xl md:text-5xl font-bold">{{ $subDivisions }}</p>
                                        <p class="mt-1 text-sm sm:text-base">Subdivisi</p>
                                    </div>
                                </div>
                                --}}


            @endrole

            @role ('counseling-pm')
                <div class="flex flex-row w-full gap-6">
                    <div class="flex items-center p-8 bg-white shadow rounded-lg">
                        <div
                            class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-primary bg-blur-bg rounded-full mr-6">
                            <i class='bx bx-calendar text-2xl'></i>
                        </div>
                        <div>
                            <span class="block text-2xl font-bold">{{ $PeerConsellorSchedule }}</span>
                            <span class="block text-gray-500">Peer Counselor Schedule</span>
                        </div>
                    </div>

                    <div class="flex items-center p-8 bg-white shadow rounded-lg">
                        <div
                            class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-primary bg-blur-bg rounded-full mr-6">
                            <i class='bx bx-user text-2xl'></i>
                        </div>
                        <div>
                            <span class="block text-2xl font-bold">{{ $PeerConsellorData }}</span>
                            <span class="block text-gray-500">Peer Counselor Data</span>
                        </div>
                    </div>

                    <div class="flex items-center p-8 bg-white shadow rounded-lg">
                        <div
                            class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-primary bg-blur-bg rounded-full mr-6">
                            <i class='bx bx-user text-2xl'></i>
                        </div>
                        <div>
                            <span class="block text-2xl font-bold">{{ $PsikologData }}</span>
                            <span class="block text-gray-500">Psikolog Data</span>
                        </div>
                    </div>

                    <div class="flex items-center p-8 bg-white shadow rounded-lg">
                        <div
                            class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-primary bg-blur-bg rounded-full mr-6">
                            <i class='bx bx-user text-2xl'></i>
                        </div>
                        <div>
                            <span class="block text-2xl font-bold">{{ $BerbinarForU }}</span>
                            <span class="block text-gray-500">Berbinar For U Data</span>
                        </div>
                    </div>
                </div>
            @endrole

{{--
            @role ('psikolog-staff-pm')
                <div class="flex flex-row w-full gap-6">
                    <div class="flex items-center p-8 bg-white shadow rounded-lg">
                        <div
                            class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-primary bg-blur-bg rounded-full mr-6">
                            <i class='bx bx-table text-2xl'></i>
                        </div>
                        <div>
                            <span class="block text-2xl font-bold">1</span>
                            <span class="block text-gray-500">Psikolog Staff</span>
                        </div>
                    </div>

                    <div class="flex items-center p-8 bg-white shadow rounded-lg">
                        <div
                            class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-primary bg-blur-bg rounded-full mr-6">
                            <i class='bx bx-credit-card text-2xl'></i>
                        </div>
                        <div>
                            <span class="block text-2xl font-bold">1</span>
                            <span class="block text-gray-500">Voucher</span>
                        </div>
                    </div>

                </div>
            @endrole
--}}

            @role('class-pm')
                <div class="flex flex-row items-center mx-10 py-12 px-20 justify-between gap-12 bg-white shadow-xl rounded-3xl">
                    <div class="bg-[#6482AD] w-1/2 rounded-3xl p-6 h-96"><div class="flex flex-row justify-between"><p class="text-white text-xl font-semibold">Class Berbinar +</p><img src="{{ asset('assets/images/dashboard/svg-icon/person.png') }}" alt=""></div>
                        <div class="h-full flex flex-col justify-end">
                            <span class="block text-4xl text-white font-bold">{{ $totalBerbinarPlusClass }}</span>
                            <p class="text-white text-xl mb-10 font-semibold">Class</p>
                        </div>
                    </div>
                    <div class="bg-[#85B3E2] w-1/2 rounded-3xl p-6 h-96"><div class="flex flex-row justify-between"><p class="text-white text-xl font-semibold">Pendaftar</p><img src="{{ asset('assets/images/dashboard/svg-icon/list.png') }}" alt=""></div>
                        <div class="h-full flex flex-col justify-end">
                            <span class="block text-4xl text-white font-bold">{{ $totalBerbinarPlusUser }}</span>
                            <p class="text-white text-xl mb-10 font-semibold">User</p>
                        </div>
                    </div>
                </div>
            @endrole

            @role('marketing')
            <div class="relative flex-grow overflow-hidden w-[1150px] max-h-[70vh]">
                <!-- Card Section -->
                <div class="mb-5 grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                    <div class="flex h-[150px] flex-col justify-between rounded-xl bg-white p-4 shadow">
                        <span class="text-left text-[20px] font-semibold text-gray-800">Artikel</span>
                        <div class="flex items-center justify-between mt-auto">
                            <span class="text-[36px] font-bold text-gray-900">{{ $articleCount }}</span>
                            <div class="flex h-[64px] w-[64px] items-center justify-center rounded-xl">
                                <img src="{{ asset("assets/images/dashboard/arteri/artikel.svg") }}" alt="arrow down">
                            </div>
                        </div>
                    </div>
                    <div class="flex h-[150px] flex-col justify-between rounded-xl bg-white p-4 shadow">
                        <span class="text-left text-[20px] font-semibold text-gray-800">Penulis Artikel</span>
                        <div class="flex items-center justify-between mt-auto">
                            <span class="text-[36px] font-bold text-gray-900">{{ $authorCount }}</span>
                            <div class="flex h-[64px] w-[64px] items-center justify-center rounded-xl">
                                <img src="{{ asset("assets/images/dashboard/arteri/penulis-artikel.svg") }}" alt="arrow down">
                            </div>
                        </div>
                    </div>
                    <div class="flex h-[150px] flex-col justify-between rounded-xl bg-white p-4 shadow">
                        <span class="text-left text-[20px] font-semibold text-gray-800">Kategori Artikel</span>
                        <div class="flex items-center justify-between mt-auto">
                            <span class="text-[36px] font-bold text-gray-900">{{ $categoryCount }}</span>
                            <div class="flex h-[64px] w-[64px] items-center justify-center rounded-xl">
                                <img src="{{ asset("assets/images/dashboard/arteri/kategori-artikel.png") }}" alt="arrow down">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Charts Section -->
                <div class="grid grid-cols-1 gap-6">
                    <div class="flex h-[340px] flex-col rounded-xl bg-white p-6 shadow">
                        <div class="mb-4">
                            <h1 class="text-[28px] text-[#75BADB]"><b>Analisis Pembaca</b></h1>
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-2">
                                <p class="text-[14px]">Berikut ini merupakan visualisasi diagram Analisis Pembaca ArteRi</p>
                                <div class="relative w-full sm:w-auto">
                                    <select class="block w-full px-3 py-2 text-sm border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-[#75BADB] focus:border-[#75BADB]">
                                        <option selected>All</option>
                                        <option>Pembaca</option>
                                        <option>Reaksi</option>
                                        <option>Di bagikan</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="flex w-full flex-col items-center h-full">
                            <canvas id="marketingChart" class="mb-1" style="max-height: 180px;"></canvas>
                            <div class="mb-4 flex gap-4 text-xs">
                                @php
                                    $chartLabels = ['Artikel', 'Draft', 'Kategori'];
                                    $chartColors = ['#106681', '#E9B306', '#232ACA'];
                                @endphp
                                @foreach($chartLabels as $i => $label)
                                    <div class="flex items-center gap-1">
                                        <span class="inline-block h-3 w-3 rounded" style="background: {{ $chartColors[$i] }}"></span>
                                        {{ $label }}
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @section('script')
                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                <script>
                    document.addEventListener('DOMContentLoaded', () => {
                        const chartDataValues = [{{ $articleCount }}, {{ $authorCount }}, {{ $categoryCount }}];
                        const chartColors = ['rgba(16, 102, 129, 0.6)', 'rgba(233, 179, 6, 0.6)', 'rgba(35, 42, 202, 0.6)'];
                        const solidColors = ['#106681', '#E9B306', '#232ACA'];
                        const chartLabels = ['Artikel', 'Draft', 'Kategori'];

                        const ctx = document.getElementById('marketingChart').getContext('2d');
                        const chartData = {
                            labels: chartLabels,
                            datasets: [
                                {
                                    label: 'Jumlah',
                                    data: chartDataValues,
                                    backgroundColor: chartColors,
                                    borderRadius: 0,
                                    barThickness: 30,
                                },
                            ],
                        };

                        new Chart(ctx, {
                            type: 'bar',
                            data: chartData,
                            options: {
                                indexAxis: 'y',
                                scales: {
                                    x: {
                                        beginAtZero: true,
                                        grid: { color: '#eee' },
                                        position: 'top',
                                        ticks: {
                                            stepSize: 20,
                                            callback: function(value) {
                                                return value % 20 === 0 ? value : '';
                                            }
                                        },
                                        min: 0,
                                        max: 100, // Fixed maximum scale at 100
                                        suggestedMax: 100 // Ensure the scale always goes up to 100
                                    },
                                    y: {
                                        grid: { color: '#eee' },
                                    },
                                },
                                plugins: {
                                    legend: { display: false },
                                },
                                animation: false,
                            },
                            plugins: [
                                {
                                    afterDatasetsDraw: function (chart) {
                                        const ctx = chart.ctx;
                                        chart.data.datasets.forEach(function (dataset, i) {
                                            const meta = chart.getDatasetMeta(i);
                                            meta.data.forEach(function (bar, index) {
                                                const value = dataset.data[index];
                                                ctx.save();
                                                ctx.font = 'bold 14px sans-serif';
                                                if (value >= Math.max(...chartDataValues) * 0.8) {
                                                    ctx.fillStyle = '#fff';
                                                    ctx.textAlign = 'right';
                                                    ctx.textBaseline = 'middle';
                                                    ctx.fillText(value, bar.x - 10, bar.y);
                                                } else {
                                                    ctx.fillStyle = '#444';
                                                    ctx.textAlign = 'left';
                                                    ctx.textBaseline = 'middle';
                                                    ctx.fillText(value, bar.x + 10, bar.y);
                                                }
                                                if (value > 0) {
                                                    const solidColor = solidColors[index % solidColors.length];
                                                    const barHeight = bar.height || (bar.base - bar.y) * 2;
                                                    ctx.fillStyle = solidColor;
                                                    ctx.fillRect(bar.x - 6, bar.y - barHeight / 2, 12, barHeight);
                                                }
                                                ctx.restore();
                                            });
                                        });
                                    },
                                },
                            ],
                        });
                    });
                </script>
            @endsection
            @endrole

            @if (Auth::user()->role == 'PsikotestFree')
                <div class="flex flex-row w-full gap-6">
                    <div class="flex items-center p-8 bg-white shadow rounded-lg">
                        <div
                            class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-primary bg-blur-bg rounded-full mr-6">
                            <i class='bx bx-user text-2xl'></i>
                        </div>
                        <div>
                            <span class="block text-2xl font-bold">{{ $totalUserPsikotest }}</span>
                            <span class="block text-gray-500">Total Users</span>
                        </div>
                    </div>

                    <div class="flex items-center p-8 bg-white shadow rounded-lg">
                        <div
                            class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-primary bg-blur-bg rounded-full mr-6">
                            <i class='bx bx-message-rounded-dots text-2xl'></i>
                        </div>
                        <div>
                            <span class="block text-2xl font-bold">{{ $totalQuestion }}</span>
                            <span class="block text-gray-500">Total Questions</span>
                        </div>
                    </div>

            @elseif (Auth::user()->role == 'PsikotestPaid')
                <div class="grid grid-cols-2 gap-8 p-8 bg-gray-100 rounded-lg shadow-lg w-full ml-20 md-20 ">
                    <div class="w-full flex flex-col justify-between items-center p-10 bg-[#6482AD] shadow-lg rounded-lg">
                        <div class="w-full flex flex-row justify-between">
                            <div class="block text-white text-2xl font-semibold">Individu</div>
                            <i class='bx bxs-user text-3xl text-white'></i>
                        </div>
                        <div class="w-full flex flex-col justify-start items-start mt-4">
                            <span class="block text-white text-4xl font-bold">{{ $individu }}</span>
                            <span class="block text-white text-2xl font-semibold">Pendaftar</span>
                        </div>
                    </div>

                    <div class="w-full flex flex-col justify-between items-center p-10 bg-[#7FA1C3] shadow-lg rounded-lg">
                        <div class="w-full flex flex-row justify-between">
                            <div class="block text-white text-2xl font-semibold">Instansi Pendidikan</div>
                            <i class='bx bxs-graduation text-3xl text-white'></i>
                        </div>
                        <div class="w-full flex flex-col justify-start items-start mt-4">
                            <span class="block text-white text-4xl font-bold">{{ $educationalInstitution }}</span>
                            <span class="block text-white text-2xl font-semibold">Pendaftar</span>
                        </div>
                    </div>

                    <div class="w-full flex flex-col justify-between items-center p-10 bg-[#85B3E2] shadow-lg rounded-lg">
                        <div class="w-full flex flex-row justify-between">
                            <div class="block text-white text-2xl font-semibold">Perusahaan</div>
                            <i class='bx bxs-business text-3xl text-white'></i>
                        </div>
                        <div class="w-full flex flex-col justify-start items-start mt-4">
                            <span class="block text-white text-4xl font-bold">{{ $corporate }}</span>
                            <span class="block text-white text-2xl font-semibold">Pendaftar</span>
                        </div>
                    </div>

                    <div class="w-full flex flex-col justify-between items-center p-10 bg-[#94c8fb] shadow-lg rounded-lg">
                        <div class="w-full flex flex-row justify-between">
                            <div class="block text-white text-2xl font-semibold">Komunitas</div>
                            <i class='bx bxs-group text-3xl text-white'></i>
                        </div>
                        <div class="w-full flex flex-col justify-start items-start mt-4">
                            <span class="block text-white text-4xl font-bold">{{ $community }}</span>
                            <span class="block text-white text-2xl font-semibold">Pendaftar</span>
                        </div>
                    </div>
                </div>
                @elseif (Auth::user()->role == 'BerbinarSatu')
                <div class="relative flex-grow bg-white shadow-md p-10 overflow-hidden" style="width: 1150px; height: 470px">
                    <div class="grid grid-cols-3 gap-5 h-full">
                        <div class="text-white rounded-lg flex flex-col justify-between p-6 relative" style="background-color: #48576A;">
                            <h3 class="block text-2xl font-bold">Buat Artikel</h3>
                            <div class="absolute p-6 bottom-2 right-2 flex flex-col gap-4 font-semibold">
                                <p class="text-end text-5xl">{{ $articleCount}}</p>
                                <p>Postingan Artikel</p>
                            </div>
                        </div>
                        <div class="text-white rounded-lg flex flex-col justify-between p-6 relative" style="background-color: #6482AD;">
                            <h3 class="block text-2xl font-bold">Draft Arteri</h3>
                            <div class="absolute p-6 bottom-2 right-2 flex flex-col gap-4 font-semibold">
                                <p class="text-end text-5xl">{{ $authorCount }}</p>
                                <p>Postingan Artikel</p>
                            </div>
                        </div>
                        <div class="text-white rounded-lg flex flex-col justify-between p-6 relative" style="background-color: #9E866A;">
                            <h3 class="block text-2xl font-bold">Terupload</h3>
                            <div class="absolute p-6 bottom-2 right-2 flex flex-col gap-4 font-semibold">
                                <p class="text-end text-5xl">{{ $categoryCount }}</p>
                                <p>Postingan Artikel</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endif


        </div>
    </section>
@endsection
