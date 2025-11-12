@extends('dashboard.layouts.app', [
    'title' => 'Dashboard',
])

@section('content')
    <section class="flex w-full">
        <div class="flex flex-col w-full">
            <div class="w-full">
                <div class="py-10">

                    {{-- Header Dashboard --}}
                    <div class="">
                        @role('hr_recruitment')
                            <p tabindex="0" class="focus:outline-none text-4xl font-bold leading-normal text-gray-800 mb-2">
                                Dashboard Rekrutmen</p>
                            <p class="w-full text-disabled">Fitur ini digunakan untuk menampilkan jumlah data posisi,
                                deskripsi pekerjaan, serta kebutuhan
                                yang sedang
                                atau akan
                                dibuka atau telah dibuka yang ditampilkan pada website karir Berbinarin.</p>
                        @endrole

                        @role('hr_data-analyst')
                            <p tabindex="0" class="focus:outline-none text-4xl font-bold leading-normal text-gray-800 mb-2">
                                Dashboard Keluarga Berbinar</p>
                            <p class="w-full text-disabled">Ringkasan waktu nyata status staf, divisi, dan aktivitas keluarga
                                Berbinar dalam satu tampilan.</p>
                        @endrole

                        @role('counseling-pm')
                            <p tabindex="0" class="focus:outline-none text-4xl font-bold leading-normal text-gray-800 mb-2">
                                Dashboard</p>
                            <p class="w-full text-disabled">Fitur ini digunakan untuk menampilkan data pendaftar konseling
                                yang mendaftar melalui situs web Berbinar</p>
                        @endrole


                        @role('manager-cpm')
                            <p tabindex="0" class="focus:outline-none text-4xl font-bold leading-normal text-gray-800">
                                Dashboard</p>
                            <p class="w-full text-disabled">Fitur ini digunakan untuk menampilkan data pendaftar konseling yang
                                mendaftar melalui situs Web Berbinar.</p>
                        @endrole


                        @role('class-pm')
                            <p tabindex="0" class="focus:outline-none text-4xl font-bold leading-normal text-gray-800 mb-2">
                                Dashboard Berbinar +</p>
                            <p class="w-full text-disabled">
                                Halaman utama yang menampilkan ringkasan data program Berbinar+
                                serta akses cepat untuk mengelola kelas, pendaftar, dan paket layanan secara efisien.
                            </p>
                        @endrole
                        @role('marketing')
                            <p tabindex="0" class="focus:outline-none text-4xl font-bold leading-normal text-gray-800 mb-2">
                                Dashboard ArteRi</p>
                            <p class="text-base text-disabled">Dashboard ini menampilkan ringkasan statistik, daftar artikel,
                                penulis, dan kategori.</p>
                        @endrole

                        {{--
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
                        @endif --}}

                    </div>
                </div>
            </div>

            {{-- Section Dashboard --}}

            @role('hr_recruitment')
                <div class="flex flex-col xl:w-[80vw] gap-6">
                    <div class="flex flex-row w-full gap-6 mt-[-20px]">
                        <div class="flex w-1/3 items-center p-8 bg-white h-[100px] shadow rounded-lg">
                            <div
                                class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-primary bg-blur-bg rounded-md mr-6">
                                <i class='bx bx-briefcase-alt-2 text-3xl'></i>
                            </div>
                            <div>
                                <span class="block text-2xl font-bold" id="positions-count">{{ $HiringPosisitons }}</span>
                                <span class="block text-gray-500">Posisi Terbuka</span>
                            </div>
                        </div>

                        <div class="flex w-1/3 items-center p-8 bg-white h-[100px] shadow rounded-lg">
                            <div
                                class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-primary bg-blur-bg rounded-md mr-6">
                                <i class='bx bxl-upwork text-3xl'></i>
                            </div>
                            <div>
                                <span class="block text-2xl font-bold"
                                    id="job-descriptions-count">{{ $UserInternship }}</span>
                                <span class="block text-gray-500">Total Pendaftar</span>
                            </div>
                        </div>

                        <div class="flex w-1/3 items-center p-8 bg-white h-[100px] shadow rounded-lg">
                            <div
                                class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-primary bg-blur-bg rounded-md mr-6">
                                <i class='bx bx-file text-3xl'></i>
                            </div>
                            <div>
                                <span class="block text-2xl font-bold"
                                    id="requirements-count">{{ $HiringPosisitonsRequirement }}</span>
                                <span class="block text-gray-500">Total Pendaftar Diterima</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- chart section -->
                    <div class="grid grid-cols-1 gap-6">
                        <div class="flex h-[360px] flex-col rounded-xl bg-white  px-6 py-4 shadow">

                            <div class="flex justify-end mb-3 w-full">
                                <select id="yearFilter" class="border border-gray-300 rounded-lg text-sm focus:ring focus:ring-blue-200">
                                    <option value="2025" selected>2025</option>
                                    <option value="2024">2024</option>
                                    <option value="2023">2023</option>
                                </select>
                            </div>

                            <div class="flex w-full flex-col items-center h-full">
                                <canvas id="hrRecruitmentChart" class="mb-1 w-full h-[250px]"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                @section('script')
                    <!-- MASIH STATIS!! BELUM DINAMIS SOALNYA GA NGOTAK-ATIK CONTROLLERNYA -->
                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                    <script>
                        document.addEventListener('DOMContentLoaded', () => {

                            const labels = ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'];

                            const positionsData = {!! $monthlyPositions ?? '[10, 12, 5, 8, 15, 10, 7, 14, 9, 11, 13, 6]' !!};
                            const applicantsData = {!! $monthlyApplicants ?? '[50, 65, 40, 75, 90, 80, 60, 100, 70, 85, 95, 55]' !!};
                            const requirementsData = {!! $monthlyRequirements ?? '[20, 22, 15, 25, 30, 28, 18, 35, 22, 27, 32, 20]' !!};

                            const datasets = [
                                {
                                    label: 'Posisi Terbuka',
                                    data: positionsData,
                                    backgroundColor: 'rgba(54, 162, 235, 0.8)',
                                    borderColor: 'rgba(54, 162, 235, 1)',
                                    borderWidth: 1,
                                },
                                {
                                    label: 'Total Pendaftar',
                                    data: applicantsData,
                                    backgroundColor: 'rgba(255, 99, 132, 0.8)',
                                    borderColor: 'rgba(255, 99, 132, 1)',
                                    borderWidth: 1,
                                },
                                {
                                    label: 'Total Pendaftar Diterima',
                                    data: requirementsData,
                                    backgroundColor: 'rgba(255, 206, 86, 0.8)',
                                    borderColor: 'rgba(255, 206, 86, 1)',
                                    borderWidth: 1,
                                }
                            ];

                            const ctx = document.getElementById('hrRecruitmentChart').getContext('2d');
                            const chart = new Chart(ctx, {
                                type: 'bar',
                                data: {
                                    labels: labels,
                                    datasets: datasets
                                },
                                options: {
                                    responsive: true,
                                    maintainAspectRatio: false,
                                    plugins: {
                                        title: {
                                            display: true,
                                            text: 'Distribusi Data Rekrutmen Bulanan',
                                            font: { size: 16 }
                                        },
                                        legend: {
                                            display: true,
                                            position: 'top',
                                            onClick: null 
                                        },
                                        tooltip: {
                                            mode: 'index',
                                            intersect: false,
                                        }
                                    },
                                    scales: {
                                        x: {
                                            stacked: false, 
                                            title: {
                                                display: true,
                                                text: 'Bulan',
                                                font: { size: 14 }
                                            }
                                        },
                                        y: {
                                            beginAtZero: true,
                                            stacked: false,
                                            title: {
                                                display: true,
                                                text: 'Jumlah',
                                                font: { size: 14 }
                                            }
                                        }
                                    }
                                }
                            });

                            const yearFilter = document.getElementById('yearFilter');
                            yearFilter.addEventListener('change', (e) => {
                                const selectedYear = e.target.value;
                                console.log('Filter tahun:', selectedYear);

                            });
                        });
                    </script>
                @endsection
            @endrole


            @role('hr_data-analyst')
                <div class="flex flex-col xl:w-[80vw] gap-6">
                    <div class="flex flex-row w-full gap-6">

                        <div class="flex w-1/3 items-center p-8 bg-white shadow rounded-lg">
                            <div
                                class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-primary bg-blur-bg rounded-md mr-6">
                                <i class='bx bx-user text-3xl'></i>
                            </div>
                            <div>
                                <span class="block text-2xl font-bold">{{ $totalStafAktif }}</span>
                                <span class="block text-gray-500">Staf aktif</span>
                            </div>
                        </div>

                        <div class="flex w-1/3 items-center p-8 bg-white shadow rounded-lg">
                            <div
                                class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-primary bg-blur-bg rounded-md mr-6">
                                <i class='bx bxs-graduation text-3xl'></i>
                            </div>
                            <div>
                                <span class="block text-2xl font-bold">{{ $totalStafTidakAktif }}</span>
                                <span class="block text-gray-500">Staf tidak aktif</span>
                            </div>
                        </div>

                        <div class="flex w-1/3 items-center p-8 bg-white shadow rounded-lg">
                            <div
                                class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-primary bg-blur-bg rounded-md mr-6">
                                <i class='bx bxs-buildings text-3xl'></i>
                            </div>
                            <div>
                                <span class="block text-2xl font-bold">{{ $subDivisions }}</span>
                                <span class="block text-gray-500">Subdivisi</span>
                            </div>
                        </div>

                    </div>

                    <!-- Charts Section -->
                    <div class="w-full grid grid-cols-1 gap-6">
                        <div class="flex h-[340px] flex-col rounded-xl bg-white px-6 py-4 shadow">
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
                                    @foreach ($chartLabels as $i => $label)
                                        <div class="flex items-center gap-1">
                                            <span class="inline-block h-3 w-3 rounded"
                                                style="background: {{ $chartColors[$i] }}"></span>
                                            {{ $label }}
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <p class="text-sm">Total Staff: 1000</p> 
                            <!-- angka dinamis karena aku ndk tahu apa yang harus tampilin (cuma ikutin desain aja) -->
                        </div>
                    </div>
                </div>
                @section('script')
                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                    <script>
                        document.addEventListener('DOMContentLoaded', () => {
                            const chartDataValues = [{{ $totalStafAktif }}, {{ $totalStafTidakAktif }}, {{ $subDivisions }}];
                            const chartColors = ['rgba(16, 102, 129, 0.6)', 'rgba(233, 179, 6, 0.6)', 'rgba(35, 42, 202, 0.6)'];
                            const solidColors = ['#106681', '#E9B306', '#232ACA'];
                            const chartLabels = ['Staf aktif', 'Staf tidak aktif', 'Subdivisi'];

                            const ctx = document.getElementById('marketingChart').getContext('2d');
                            const chartData = {
                                labels: chartLabels,
                                datasets: [{
                                    label: 'Jumlah',
                                    data: chartDataValues,
                                    backgroundColor: chartColors,
                                    borderRadius: 0,
                                    barThickness: 30,
                                }, ],
                            };

                            new Chart(ctx, {
                                type: 'bar',
                                data: chartData,
                                options: {
                                    indexAxis: 'y',
                                    scales: {
                                        x: {
                                            beginAtZero: true,
                                            grid: {
                                                color: '#eee'
                                            },
                                            position: 'top',
                                            ticks: {
                                                stepSize: 50,
                                                callback: function(value) {
                                                    return value % 50 === 0 ? value : '';
                                                }
                                            },
                                            min: 0,
                                            max: 250, // Fixed maximum scale at 250
                                            suggestedMax: 250 // Ensure the scale always goes up to 250
                                        },
                                        y: {
                                            grid: {
                                                color: '#eee'
                                            },
                                        },
                                    },
                                    plugins: {
                                        legend: {
                                            display: false
                                        },
                                    },
                                    animation: false,
                                },
                                plugins: [{
                                    afterDatasetsDraw: function(chart) {
                                        const ctx = chart.ctx;
                                        chart.data.datasets.forEach(function(dataset, i) {
                                            const meta = chart.getDatasetMeta(i);
                                            meta.data.forEach(function(bar, index) {
                                                const value = dataset.data[index];
                                                ctx.save();
                                                ctx.font = 'bold 14px sans-serif';
                                                if (value >= Math.max(...chartDataValues) *
                                                    0.8) {
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
                                                    const solidColor = solidColors[index %
                                                        solidColors.length];
                                                    const barHeight = bar.height || (bar.base -
                                                        bar.y) * 2;
                                                    ctx.fillStyle = solidColor;
                                                    ctx.fillRect(bar.x - 6, bar.y - barHeight /
                                                        2, 12, barHeight);
                                                }
                                                ctx.restore();
                                            });
                                        });
                                    },
                                }, ],
                            });
                        });
                    </script>
                @endsection
            @endrole

            @role('counseling-pm')
                <div class="flex flex-col w-full gap-6">
                    <div class="flex flex-row w-full gap-6">
                        <div class="flex w-1/3 items-center p-8 bg-white shadow rounded-lg">
                            <div
                                class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-primary bg-blur-bg rounded-full mr-6">
                                <i class='bx bx-calendar text-2xl'></i>
                            </div>
                            <div>
                                <span class="block text-2xl font-bold">{{ $PeerConsellorSchedule }}</span>
                                <span class="block text-gray-500">Jadwal Peer Counselor</span>
                            </div>
                        </div>

                        <div class="flex w-1/3 items-center p-8 bg-white shadow rounded-lg">
                            <div
                                class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-primary bg-blur-bg rounded-full mr-6">
                                <i class='bx bx-user text-2xl'></i>
                            </div>
                            <div>
                                <span class="block text-2xl font-bold">{{ $KonselingData }}</span>
                                <span class="block text-gray-500">Data</span>
                            </div>
                        </div>

                        <div class="flex w-1/3 items-center p-8 bg-white shadow rounded-lg">
                            <div
                                class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-primary bg-blur-bg rounded-full mr-6">
                                <i class='bx bx-calendar text-2xl'></i>
                            </div>
                            <div>
                                <span class="block text-2xl font-bold">{{ $KodeVoucherData }}</span>
                                <span class="block text-gray-500">Kode Voucher</span>
                            </div>
                        </div>
                    </div>


                    <!-- Charts Section -->
                    <div class="w-full grid grid-cols-1 gap-6">
                        <div class="flex h-[330px] flex-col rounded-xl bg-white px-6 py-4 shadow">
                            <div class="mb-4">
                                <h1 class="text-[28px] text-[#75BADB]"><b>Data Pendaftar Konseling</b></h1>
                                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-2">
                                    <p class="text-[14px]">Berikut ini merupakan visualisasi jumlah pendaftar layanan konseling
                                        Peer Conselor dan Psikolog.</p>
                                </div>
                            </div>
                            <div class="flex w-full flex-col items-center h-full">
                                <canvas id="marketingChart" class="mb-1" style="max-height: 180px;"></canvas>
                                <div class="mb-4 flex gap-4 text-xs">
                                    @php
                                        $chartLabels = ['Peer Counselor', 'Psikolog', 'Berbinar For U'];
                                        $chartColors = ['#106681', '#E9B306', '#232ACA'];
                                    @endphp
                                    @foreach ($chartLabels as $i => $label)
                                        <div class="flex items-center gap-1">
                                            <span class="inline-block h-3 w-3 rounded"
                                                style="background: {{ $chartColors[$i] }}"></span>
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
                            const chartDataValues = [{{ $PeerConsellorData }}, {{ $PsikologData }}, {{ $BerbinarForU }}];
                            const chartColors = ['rgba(16, 102, 129, 0.6)', 'rgba(233, 179, 6, 0.6)', 'rgba(35, 42, 202, 0.6)'];
                            const solidColors = ['#106681', '#E9B306', '#232ACA'];
                            const chartLabels = ['Peer Counselor', 'Psikolog', 'Berbinar For U'];

                            const ctx = document.getElementById('marketingChart').getContext('2d');
                            const chartData = {
                                labels: chartLabels,
                                datasets: [{
                                    label: 'Jumlah',
                                    data: chartDataValues,
                                    backgroundColor: chartColors,
                                    borderRadius: 0,
                                    barThickness: 30,
                                }, ],
                            };

                            new Chart(ctx, {
                                type: 'bar',
                                data: chartData,
                                options: {
                                    indexAxis: 'y',
                                    scales: {
                                        x: {
                                            beginAtZero: true,
                                            grid: {
                                                color: '#eee'
                                            },
                                            position: 'top',
                                            ticks: {
                                                stepSize: 50,
                                                callback: function(value) {
                                                    return value % 50 === 0 ? value : '';
                                                }
                                            },
                                            min: 0,
                                            max: 250, // Fixed maximum scale at 250
                                            suggestedMax: 250 // Ensure the scale always goes up to 250
                                        },
                                        y: {
                                            grid: {
                                                color: '#eee'
                                            },
                                        },
                                    },
                                    plugins: {
                                        legend: {
                                            display: false
                                        },
                                    },
                                    animation: false,
                                },
                                plugins: [{
                                    afterDatasetsDraw: function(chart) {
                                        const ctx = chart.ctx;
                                        chart.data.datasets.forEach(function(dataset, i) {
                                            const meta = chart.getDatasetMeta(i);
                                            meta.data.forEach(function(bar, index) {
                                                const value = dataset.data[index];
                                                ctx.save();
                                                ctx.font = 'bold 14px sans-serif';
                                                if (value >= Math.max(...chartDataValues) *
                                                    0.8) {
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
                                                    const solidColor = solidColors[index %
                                                        solidColors.length];
                                                    const barHeight = bar.height || (bar.base -
                                                        bar.y) * 2;
                                                    ctx.fillStyle = solidColor;
                                                    ctx.fillRect(bar.x - 6, bar.y - barHeight /
                                                        2, 12, barHeight);
                                                }
                                                ctx.restore();
                                            });
                                        });
                                    },
                                }, ],
                            });
                        });
                    </script>
                @endsection
            @endrole


            @role('manager-cpm')
                <div class="flex flex-col w-full gap-6">
                    <div class="flex flex-row w-full gap-6">

                        <div class="flex items-center p-[18px] bg-white shadow rounded-xl w-[293px] h-[94px]">
                            <div
                                class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-primary bg-blur-bg rounded-xl mr-6">
                                <img src={{ asset('assets/images/dashboard/psikolog.png') }} alt=""
                                    class="h-8 w-5" />
                            </div>
                            <div>
                                <span class="block text-xl font-bold">{{ $PsikologDataStaff }}</span>
                                <span class="block text-[#717a7e] font-medium text-base">Psikolog</span>
                            </div>
                        </div>
                        <div class="flex items-center p-[18px] bg-white shadow rounded-xl w-[293px] h-[94px]">
                            <div
                                class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-primary bg-blur-bg rounded-xl mr-6">
                                <img src={{ asset('assets/images/dashboard/people.png') }} alt=""
                                    class="h-10 w-10" />
                            </div>
                            <div>
                                <span class="block text-xl font-bold">{{ $PeerDataStaff }}</span>
                                <span class="block text-[#717a7e] font-medium text-base">Peer Counselor</span>
                            </div>
                        </div>

                    </div>

                    {{-- ===================== CHART SECTION ===================== --}}
                    <div class="w-full grid grid-cols-1 gap-6">
                        <div
                            class="flex lg:h-[300px] xl:h-[340px] 2xl:h-[370px] w-full flex-col rounded-xl bg-white px-6 py-6 shadow">
                            <div class="mb-4">
                                <h1 class="text-[28px] text-[#75BADB] font-bold">Data Pendaftar Konseling</h1>
                                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-2">
                                    <p class="text-sm text-black font-medium">
                                        Berikut ini merupakan visualisasi jumlah pendaftar layanan konseling
                                        Peer Counselor dan Psikolog.
                                    </p>
                                </div>
                            </div>

                            <div class="flex w-full flex-col h-full">
                                <!-- Chart -->
                                <canvas id="marketingChart" class="max-h-[155px]"></canvas>

                                <!-- Legend -->
                                <div class="mb-4 flex gap-4 text-xs justify-center">
                                    <div class="flex items-center gap-1">
                                        <span class="inline-block h-3 w-3 rounded" style="background: #106681"></span>
                                        Psikolog
                                    </div>
                                    <div class="flex items-center gap-1">
                                        <span class="inline-block h-3 w-3 rounded" style="background: #E9B306"></span>
                                        Peer Counselor
                                    </div>
                                </div>

                                <!-- Total -->
                                <div class="flex items-start justify-start">
                                    <span class="font-normal text-xs xl:text-sm 2xl:text-base 3xl:text-lg 4xl:text-xl">
                                        Total pendaftar layanan konseling saat ini adalah
                                        <span class="font-bold text-xs xl:text-sm 2xl:text-base 3xl:text-lg 4xl:text-xl">{{ $PsikologDataStaff + $PeerDataStaff }}
                                            pendaftar.</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- ========================================================= --}}
                </div>

                @section('script')
                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                    <script>
                        document.addEventListener('DOMContentLoaded', () => {
                            const chartDataValues = [{{ $PsikologDataStaff }}, {{ $PeerDataStaff }}];
                            const chartColors = ['rgba(16, 102, 129, 0.6)', 'rgba(233, 179, 6, 0.6)'];
                            const solidColors = ['#106681', '#E9B306'];
                            const chartLabels = ['Psikolog', 'Peer Counselor'];

                            const ctx = document.getElementById('marketingChart').getContext('2d');
                            const chartData = {
                                labels: chartLabels,
                                datasets: [{
                                    label: 'Jumlah',
                                    data: chartDataValues,
                                    backgroundColor: chartColors,
                                    borderRadius: 0,
                                    barThickness: 25,
                                }],
                            };

                            new Chart(ctx, {
                                type: 'bar',
                                data: chartData,
                                options: {
                                    indexAxis: 'y',
                                    scales: {
                                        x: {
                                            beginAtZero: true,
                                            grid: {
                                                color: '#eee'
                                            },
                                            position: 'top',
                                            ticks: {
                                                stepSize: 20,
                                                callback: (value) => (value % 20 === 0 ? value : ''),
                                            },
                                            min: 0,
                                            max: 100,
                                            suggestedMax: 100,
                                        },
                                        y: {
                                            grid: {
                                                color: '#eee'
                                            },
                                            ticks: {
                                                align: 'start', // ⬅️ ini yang penting
                                                crossAlign: 'near', // ⬅️ bantu supaya nempel di kiri
                                                padding: 5, // bisa ubah sesuai jarak yang diinginkan
                                            }
                                        },
                                    },
                                    plugins: {
                                        legend: {
                                            display: false
                                        }
                                    },
                                    animation: false,
                                    maintainAspectRatio: false,
                                },

                                plugins: [{
                                    afterDatasetsDraw: (chart) => {
                                        const ctx = chart.ctx;
                                        chart.data.datasets.forEach((dataset, i) => {
                                            const meta = chart.getDatasetMeta(i);
                                            meta.data.forEach((bar, index) => {
                                                const value = dataset.data[index];
                                                ctx.save();
                                                ctx.font = 'normal 12px sans-serif';
                                                ctx.fillStyle = '#444';
                                                ctx.textAlign = 'left';
                                                ctx.textBaseline = 'middle';
                                                ctx.fillText(value, bar.x + 30, bar.y);
                                                ctx.restore();
                                            });
                                        });
                                    }

                                }],
                            });
                        });
                    </script>
                @endsection
            @endrole


            @role('class-pm')
                <div class="flex flex-col w-full gap-6">
                    <div class="flex flex-row w-full gap-6">
                        <div class="flex w-1/3 items-center p-8 bg-white shadow rounded-lg">
                            <div
                                class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-primary bg-blur-bg rounded-full mr-6">
                                <i class='bx bx-file text-2xl'></i>
                            </div>
                            <div>
                                <span class="block text-2xl font-bold">{{ $totalBerbinarPlusClass }}</span>
                                <span class="block text-gray-500">Kelas Berbinar+</span>
                            </div>
                        </div>

                        <div class="flex w-1/3 items-center p-8 bg-white shadow rounded-lg">
                            <div
                                class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-primary bg-blur-bg rounded-full mr-6">
                                <i class='bx bx-user text-2xl'></i>
                            </div>
                            <div>
                                <span class="block text-2xl font-bold">{{ $totalBerbinarPlusUser }}</span>
                                <span class="block text-gray-500">Pendaftar Berbinar+</span>
                            </div>
                        </div>

                    </div>
                    <!-- Charts Section -->
                    <div class="w-full grid grid-cols-1 gap-6">
                        <div class="flex h-[330px] flex-col rounded-xl bg-white px-6 py-4 shadow">
                            <div class="mb-4">
                                <h1 class="text-[28px] text-[#75BADB]"><b>Data Berbinar+</b></h1>
                                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-2">
                                    <p class="text-[14px]">Berikut ini merupakan visualisasi jumlah pendaftar dan kelas Berbinar+</p>
                                </div>
                            </div>
                            <div class="flex w-full flex-col items-center h-full">
                                <canvas id="marketingChart" class="mb-1" style="max-height: 180px;"></canvas>
                                <div class="mb-4 flex gap-4 text-xs">
                                    @php
                                        $chartLabels = ['Kelas Berbinar+', 'Pendaftar Berbinar+'];
                                        $chartColors = ['#106681', '#E9B306'];
                                    @endphp
                                    @foreach ($chartLabels as $i => $label)
                                        <div class="flex items-center gap-1">
                                            <span class="inline-block h-3 w-3 rounded"
                                                style="background: {{ $chartColors[$i] }}"></span>
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
                            const chartDataValues = [{{ $totalBerbinarPlusClass }}, {{ $totalBerbinarPlusUser }}];
                            const chartColors = ['rgba(16, 102, 129, 0.6)', 'rgba(233, 179, 6, 0.6)'];
                            const solidColors = ['#106681', '#E9B306'];
                            const chartLabels = ['Kelas', 'Pendaftar'];

                            const ctx = document.getElementById('marketingChart').getContext('2d');
                            const chartData = {
                                labels: chartLabels,
                                datasets: [{
                                    label: 'Jumlah',
                                    data: chartDataValues,
                                    backgroundColor: chartColors,
                                    borderRadius: 0,
                                    barThickness: 30,
                                }, ],
                            };

                            new Chart(ctx, {
                                type: 'bar',
                                data: chartData,
                                options: {
                                    indexAxis: 'y',
                                    scales: {
                                        x: {
                                            beginAtZero: true,
                                            grid: {
                                                color: '#eee'
                                            },
                                            position: 'top',
                                            ticks: {
                                                stepSize: 50,
                                                callback: function(value) {
                                                    return value % 50 === 0 ? value : '';
                                                }
                                            },
                                            min: 0,
                                            max: 250, // Fixed maximum scale at 250
                                            suggestedMax: 250 // Ensure the scale always goes up to 250
                                        },
                                        y: {
                                            grid: {
                                                color: '#eee'
                                            },
                                        },
                                    },
                                    plugins: {
                                        legend: {
                                            display: false
                                        },
                                    },
                                    animation: false,
                                },
                                plugins: [{
                                    afterDatasetsDraw: function(chart) {
                                        const ctx = chart.ctx;
                                        chart.data.datasets.forEach(function(dataset, i) {
                                            const meta = chart.getDatasetMeta(i);
                                            meta.data.forEach(function(bar, index) {
                                                const value = dataset.data[index];
                                                ctx.save();
                                                ctx.font = 'bold 14px sans-serif';
                                                if (value >= Math.max(...chartDataValues) *
                                                    0.8) {
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
                                                    const solidColor = solidColors[index %
                                                        solidColors.length];
                                                    const barHeight = bar.height || (bar.base -
                                                        bar.y) * 2;
                                                    ctx.fillStyle = solidColor;
                                                    ctx.fillRect(bar.x - 6, bar.y - barHeight /
                                                        2, 12, barHeight);
                                                }
                                                ctx.restore();
                                            });
                                        });
                                    },
                                }, ],
                            });
                        });
                    </script>
                @endsection
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
                                    <img src="{{ asset('assets/images/dashboard/arteri/artikel.svg') }}" alt="arrow down">
                                </div>
                            </div>
                        </div>
                        <div class="flex h-[150px] flex-col justify-between rounded-xl bg-white p-4 shadow">
                            <span class="text-left text-[20px] font-semibold text-gray-800">Penulis Artikel</span>
                            <div class="flex items-center justify-between mt-auto">
                                <span class="text-[36px] font-bold text-gray-900">{{ $authorCount }}</span>
                                <div class="flex h-[64px] w-[64px] items-center justify-center rounded-xl">
                                    <img src="{{ asset('assets/images/dashboard/arteri/penulis-artikel.svg') }}"
                                        alt="arrow down">
                                </div>
                            </div>
                        </div>
                        <div class="flex h-[150px] flex-col justify-between rounded-xl bg-white p-4 shadow">
                            <span class="text-left text-[20px] font-semibold text-gray-800">Kategori Artikel</span>
                            <div class="flex items-center justify-between mt-auto">
                                <span class="text-[36px] font-bold text-gray-900">{{ $categoryCount }}</span>
                                <div class="flex h-[64px] w-[64px] items-center justify-center rounded-xl">
                                    <img src="{{ asset('assets/images/dashboard/arteri/kategori-artikel.png') }}"
                                        alt="arrow down">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="relative flex-grow overflow-hidden w-full">
                        <!-- Card Section -->
                        <div class="mb-5 grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                            <div class="flex h-[150px] flex-col justify-between rounded-xl bg-white p-4 shadow">
                                <span class="text-left text-[20px] font-semibold text-gray-800">Artikel</span>
                                <div class="flex items-center justify-between mt-auto">
                                    <span class="text-[36px] font-bold text-gray-900">{{ $articleCount }}</span>
                                    <div class="flex h-[64px] w-[64px] items-center justify-center rounded-xl">
                                        <img src="{{ asset('assets/images/dashboard/arteri/artikel.svg') }}"
                                            alt="arrow down">
                                    </div>
                                </div>
                            </div>
                            <div class="flex h-[150px] flex-col justify-between rounded-xl bg-white p-4 shadow">
                                <span class="text-left text-[20px] font-semibold text-gray-800">Penulis Artikel</span>
                                <div class="flex items-center justify-between mt-auto">
                                    <span class="text-[36px] font-bold text-gray-900">{{ $authorCount }}</span>
                                    <div class="flex h-[64px] w-[64px] items-center justify-center rounded-xl">
                                        <img src="{{ asset('assets/images/dashboard/arteri/penulis-artikel.svg') }}"
                                            alt="arrow down">
                                    </div>
                                </div>
                            </div>
                            <div class="flex h-[150px] flex-col justify-between rounded-xl bg-white p-4 shadow">
                                <span class="text-left text-[20px] font-semibold text-gray-800">Kategori Artikel</span>
                                <div class="flex items-center justify-between mt-auto">
                                    <span class="text-[36px] font-bold text-gray-900">{{ $categoryCount }}</span>
                                    <div class="flex h-[64px] w-[64px] items-center justify-center rounded-xl">
                                        <img src="{{ asset('assets/images/dashboard/arteri/kategori-artikel.png') }}"
                                            alt="arrow down">
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
                                        <p class="text-[14px]">Berikut ini merupakan visualisasi diagram Analisis Pembaca
                                            ArteRi
                                        </p>
                                        <div class="relative w-full sm:w-auto">
                                            <select
                                                class="block w-full px-3 py-2 text-sm border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-[#75BADB] focus:border-[#75BADB]">
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
                                        @foreach ($chartLabels as $i => $label)
                                            <div class="flex items-center gap-1">
                                                <span class="inline-block h-3 w-3 rounded"
                                                    style="background: {{ $chartColors[$i] }}"></span>
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
                                    datasets: [{
                                        label: 'Jumlah',
                                        data: chartDataValues,
                                        backgroundColor: chartColors,
                                        borderRadius: 0,
                                        barThickness: 30,
                                    }, ],
                                };

                                new Chart(ctx, {
                                    type: 'bar',
                                    data: chartData,
                                    options: {
                                        indexAxis: 'y',
                                        scales: {
                                            x: {
                                                beginAtZero: true,
                                                grid: {
                                                    color: '#eee'
                                                },
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
                                                grid: {
                                                    color: '#eee'
                                                },
                                            },
                                        },
                                        plugins: {
                                            legend: {
                                                display: false
                                            },
                                        },
                                        animation: false,
                                    },
                                    plugins: [{
                                        afterDatasetsDraw: function(chart) {
                                            const ctx = chart.ctx;
                                            chart.data.datasets.forEach(function(dataset, i) {
                                                const meta = chart.getDatasetMeta(i);
                                                meta.data.forEach(function(bar, index) {
                                                    const value = dataset.data[index];
                                                    ctx.save();
                                                    ctx.font = 'bold 14px sans-serif';
                                                    if (value >= Math.max(...chartDataValues) *
                                                        0.8) {
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
                                                        const solidColor = solidColors[index %
                                                            solidColors.length];
                                                        const barHeight = bar.height || (bar.base -
                                                            bar.y) * 2;
                                                        ctx.fillStyle = solidColor;
                                                        ctx.fillRect(bar.x - 6, bar.y - barHeight /
                                                            2, 12, barHeight);
                                                    }
                                                    ctx.restore();
                                                });
                                            });
                                        },
                                    }, ],
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
                            <div
                                class="w-full flex flex-col justify-between items-center p-10 bg-[#6482AD] shadow-lg rounded-lg">
                                <div class="w-full flex flex-row justify-between">
                                    <div class="block text-white text-2xl font-semibold">Individu</div>
                                    <i class='bx bxs-user text-3xl text-white'></i>
                                </div>
                                <div class="w-full flex flex-col justify-start items-start mt-4">
                                    <span class="block text-white text-4xl font-bold">{{ $individu }}</span>
                                    <span class="block text-white text-2xl font-semibold">Pendaftar</span>
                                </div>
                            </div>

                            <div
                                class="w-full flex flex-col justify-between items-center p-10 bg-[#7FA1C3] shadow-lg rounded-lg">
                                <div class="w-full flex flex-row justify-between">
                                    <div class="block text-white text-2xl font-semibold">Instansi Pendidikan</div>
                                    <i class='bx bxs-graduation text-3xl text-white'></i>
                                </div>
                                <div class="w-full flex flex-col justify-start items-start mt-4">
                                    <span class="block text-white text-4xl font-bold">{{ $educationalInstitution }}</span>
                                    <span class="block text-white text-2xl font-semibold">Pendaftar</span>
                                </div>
                            </div>

                            <div
                                class="w-full flex flex-col justify-between items-center p-10 bg-[#85B3E2] shadow-lg rounded-lg">
                                <div class="w-full flex flex-row justify-between">
                                    <div class="block text-white text-2xl font-semibold">Perusahaan</div>
                                    <i class='bx bxs-business text-3xl text-white'></i>
                                </div>
                                <div class="w-full flex flex-col justify-start items-start mt-4">
                                    <span class="block text-white text-4xl font-bold">{{ $corporate }}</span>
                                    <span class="block text-white text-2xl font-semibold">Pendaftar</span>
                                </div>
                            </div>

                            <div
                                class="w-full flex flex-col justify-between items-center p-10 bg-[#94c8fb] shadow-lg rounded-lg">
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
                        <div class="relative flex-grow bg-white shadow-md p-10 overflow-hidden"
                            style="width: 1150px; height: 470px">
                            <div class="grid grid-cols-3 gap-5 h-full">
                                <div class="text-white rounded-lg flex flex-col justify-between p-6 relative"
                                    style="background-color: #48576A;">
                                    <h3 class="block text-2xl font-bold">Buat Artikel</h3>
                                    <div class="absolute p-6 bottom-2 right-2 flex flex-col gap-4 font-semibold">
                                        <p class="text-end text-5xl">{{ $articleCount }}</p>
                                        <p>Postingan Artikel</p>
                                    </div>
                                </div>
                                <div class="text-white rounded-lg flex flex-col justify-between p-6 relative"
                                    style="background-color: #6482AD;">
                                    <h3 class="block text-2xl font-bold">Draft Arteri</h3>
                                    <div class="absolute p-6 bottom-2 right-2 flex flex-col gap-4 font-semibold">
                                        <p class="text-end text-5xl">{{ $authorCount }}</p>
                                        <p>Postingan Artikel</p>
                                    </div>
                                </div>
                                <div class="text-white rounded-lg flex flex-col justify-between p-6 relative"
                                    style="background-color: #9E866A;">
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
