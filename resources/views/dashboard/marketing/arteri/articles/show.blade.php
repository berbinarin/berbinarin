@extends(
    "dashboard.layouts.app",
    [
        "title" => "Dashboard Arteri",
    ]
)

@section("content")
    <section class="flex h-full w-full">
        <div class="flex h-full w-full flex-col">
            <div class="py-4 md:pb-7 md:pt-12">
                <div>
                    <div class="mb-2 flex items-center gap-2">
                        <a href="{{ route("dashboard.arteri.articles.index") }} ">
                            <img src="{{ asset("assets/images/dashboard/svg-icon/dashboard-back.png") }}" alt="Back Btn" />
                        </a>
                        <p tabindex="0" class="text-base font-bold leading-normal text-gray-800 focus:outline-none sm:text-lg md:text-2xl lg:text-4xl">Detail Artikel</p>
                    </div>
                    <p class="w-3/4 text-disabled">Halaman ini hanya untuk melihat detail data Artikel seperti Judul, Penulis, Kategori, Tautan, dan Sampul Artikel.</p>
                    <a href="{{ route("dashboard.arteri.articles.edit", $article->id) }}">
                        <button type="button" class="mt-4 inline-flex items-center rounded-lg bg-primary px-6 py-3 text-white hover:bg-primary focus:outline-none">
                            <span class="font-medium leading-none">Edit Artikel</span>
                        </button>
                    </a>
                </div>
            </div>
            <div class="max-h-[65vh] overflow-y-auto rounded-lg border bg-white p-6 shadow-sm">
                <div class="mb-6">
                    <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                        <!-- Judul -->
                        <div>
                            <label class="mb-2 block text-lg font-semibold leading-6 text-gray-500">Judul</label>
                            <div class="block w-full rounded-lg border border-gray-200 bg-gray-100 px-4 py-3 text-base text-black shadow-sm">{{ $article->title }}</div>
                        </div>
                        <!-- Penulis -->
                        <div>
                            <label class="mb-2 block text-lg font-semibold leading-6 text-gray-500">Penulis</label>
                            <div class="block w-full rounded-lg border border-gray-200 bg-gray-100 px-4 py-3 text-base text-black shadow-sm">{{ $article->author->name_author }}</div>
                        </div>
                    </div>
                    <div class="mt-6 grid grid-cols-1 gap-6 md:grid-cols-2">
                        <!-- Unggah Sampul -->
                        <div class="row-span-2">
                            <label class="mb-2 block text-lg font-semibold leading-6 text-gray-500">Sampul</label>
                            <div class="flex h-40 w-full items-center justify-center overflow-hidden rounded-lg border border-gray-200 bg-gray-100">
                                @if ($article->cover_image)
                                    <img src="{{ asset("/image/" . $article->cover_image) }}" alt="Sampul" class="h-full w-full object-cover" />
                                @else
                                    <span class="text-gray-400">Tidak ada sampul</span>
                                @endif
                            </div>
                        </div>
                        <div>
                            <label class="mb-2 block text-lg font-semibold leading-6 text-gray-500">Kategori</label>
                            <div class="block w-full">
                                <button type="button" class="inline-flex items-center justify-center rounded-3xl px-4 py-2 focus:outline-none focus:ring-2 focus:ring-offset-2" style="background: {{ $categoryColors[$article->category->id] ?? "#E9B306" }}">
                                    <span class="font-medium leading-none text-white">
                                        {{ $article->category->name_category }}
                                    </span>
                                </button>
                            </div>
                        </div>
                        <div>
                            <label class="mb-2 block text-lg font-semibold leading-6 text-gray-500">Tautan</label>
                            <div class="block w-full break-all rounded-lg border border-gray-200 bg-gray-100 px-4 py-3 text-base text-black shadow-sm">
                                <a href="{{ $currentUrl }}" target="_blank" class="text-primary underline hover:text-blue-700">
                                    {{ $currentUrl }}
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Chart Section -->
                    <div class="mt-10 flex w-full gap-8">
                        <!-- Left Chart -->
                        <div x-data="{ graph: 'demografi' }" class="flex-1 rounded-xl bg-white p-6 shadow-lg">
                            <div class="mb-4 flex items-center justify-between">
                                <h2 class="text-xl font-semibold text-[#106681]">Demografi Pembaca</h2>
                                <div class="relative">
                                    <select x-model="graph" class="rounded-lg border border-gray-300 bg-white px-3 py-1 text-sm focus:outline-none focus:ring-2 focus:ring-[#106681]">
                                        <option selected>All</option>
                                        <option value="pembaca">Pembaca</option>
                                        <option value="reaksi">Reaksi</option>
                                        <option value="dibagikan">Di bagikan</option>
                                    </select>
                                </div>
                            </div>

                            <div x-show="graph === 'demografi'" x-cloak>
                                <canvas id="ageChart" class="w-full" style="height: 350px"></canvas>
                                <div class="mt-2 flex justify-center gap-4 text-xs">
                                    <div class="flex items-center gap-1">
                                        <span class="inline-block h-3 w-3 rounded bg-[#106681]"></span>
                                        Pembaca
                                    </div>
                                    <div class="flex items-center gap-1">
                                        <span class="inline-block h-3 w-3 rounded bg-[#E9B306]"></span>
                                        Reaksi
                                    </div>
                                    <div class="flex items-center gap-1">
                                        <span class="inline-block h-3 w-3 rounded bg-[#232ACA]"></span>
                                        Di bagikan
                                    </div>
                                </div>
                            </div>

                            <div x-show="graph === 'gender'" x-cloak>
                                <canvas id="genderChart" class="w-full" style="height: 250px"></canvas>
                                <div class="mt-2 flex justify-center gap-4 text-xs">
                                    <div class="flex items-center gap-1">
                                        <span class="inline-block h-3 w-3 rounded bg-[#106681]"></span>
                                        Laki-laki
                                    </div>
                                    <div class="flex items-center gap-1">
                                        <span class="inline-block h-3 w-3 rounded bg-[#232ACA]"></span>
                                        Perempuan
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Right Chart -->
                        <div x-data="{ graph: 'interaksi' }" class="flex-1 rounded-xl bg-white p-6 shadow-lg">
                            <div class="mb-4">
                                <div class="mb-4 flex items-center justify-between">
                                    <h2 class="text-xl font-semibold text-[#75BADB]">Interaksi Pembaca</h2>
                                    <div class="relative">
                                        <select x-model="graph" class="rounded-lg border border-gray-300 bg-white px-3 py-1 text-sm focus:outline-none focus:ring-2 focus:ring-[#106681]">
                                            <option selected>All</option>
                                            <option value="tidak-suka">Tidak Suka</option>
                                            <option value="bosan">Bosan</option>
                                            <option value="biasa-saja">Biasa Saja</option>
                                            <option value="senang">Senang</option>
                                            <option value="sangat-senang">Sangat Senang</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-2 flex justify-center gap-1">
                                <img src="{{ asset("assets/images/dashboard/arteri/tidak-suka.svg") }}" alt="Tidak Suka" class="h-560 w-60" />
                                <img src="{{ asset("assets/images/dashboard/arteri/bosan.svg") }}" alt="Bosan" class="h-560 w-60" />
                                <img src="{{ asset("assets/images/dashboard/arteri/biasa-saja.svg") }}" alt="Biasa Saja" class="h-560 w-60" />
                                <img src="{{ asset("assets/images/dashboard/arteri/senang.svg") }}" alt="Senang" class="h-560 w-60" />
                                <img src="{{ asset("assets/images/dashboard/arteri/sangat-senang.svg") }}" alt="Sangat Senang" class="h-560 w-60" />
                            </div>

                            <div x-show="graph === 'interaksi'" x-cloak>
                                <canvas id="timeChart" class="w-full" style="height: 250px"></canvas>
                                <div class="mt-2 flex justify-center gap-4 text-xs">
                                    <div class="flex items-center gap-1">
                                        <span class="inline-block h-3 w-3 rounded bg-[#FF064F]"></span>
                                        Tidak Suka
                                    </div>
                                    <div class="flex items-center gap-1">
                                        <span class="inline-block h-3 w-3 rounded bg-[#FF573E]"></span>
                                        Bosan
                                    </div>
                                    <div class="flex items-center gap-1">
                                        <span class="inline-block h-3 w-3 rounded bg-[#FFE501]"></span>
                                        Biasa Saja
                                    </div>
                                    <div class="flex items-center gap-1">
                                        <span class="inline-block h-3 w-3 rounded bg-[#51AF4F]"></span>
                                        Senang
                                    </div>
                                    <div class="flex items-center gap-1">
                                        <span class="inline-block h-3 w-3 rounded bg-[#78BAD7]"></span>
                                        Sangat Senang
                                    </div>
                                </div>
                            </div>

                            <div x-show="graph === 'rating'" x-cloak>
                                <canvas id="ratingChart" class="w-full" style="height: 250px"></canvas>
                                <div class="mt-2 flex justify-center gap-4 text-xs">
                                    <div class="flex items-center gap-1">
                                        <span class="inline-block h-3 w-3 rounded bg-[#FF6B6B]"></span>
                                        1 Bintang
                                    </div>
                                    <div class="flex items-center gap-1">
                                        <span class="inline-block h-3 w-3 rounded bg-[#FF9A3C]"></span>
                                        2 Bintang
                                    </div>
                                    <div class="flex items-center gap-1">
                                        <span class="inline-block h-3 w-3 rounded bg-[#FFE066]"></span>
                                        3 Bintang
                                    </div>
                                    <div class="flex items-center gap-1">
                                        <span class="inline-block h-3 w-3 rounded bg-[#A685E2]"></span>
                                        4 Bintang
                                    </div>
                                    <div class="flex items-center gap-1">
                                        <span class="inline-block h-3 w-3 rounded bg-[#75BADB]"></span>
                                        5 Bintang
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="my-10 flex justify-center">
                    <hr class="w-[95%] border border-gray-300 opacity-50" />
                </div>

                <div class="mt-6">
                    <div class="bg-white-100 prose block w-full max-w-none border border-gray-200 p-10 text-base text-black shadow-sm">
                        {!! $article->content !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section("script")
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Data dummy chart kiri
            const ageCtx = document.getElementById('ageChart').getContext('2d');
            new Chart(ageCtx, {
                type: 'bar',
                data: {
                labels: ['Pembaca', 'Reaksi', 'Di bagikan'],
                datasets: [
                    {
                        label: 'Jumlah Pembaca',
                        data: [
                            {{ $viewers }},
                            {{ collect($reactionCounts)->sum() }},
                            {{ $totalShare }}
                        ],
                        backgroundColor: [
                            'rgba(16, 102, 129, 0.6)', // Pembaca
                            'rgba(233, 179, 6, 0.6)',  // Reaksi
                            'rgba(35, 42, 202, 0.6)'   // Di bagikan
                        ],
                    },
                ],
            },
                options: {
                    indexAxis: 'y',
                    responsive: true,
                    scales: {
                        x: {
                            beginAtZero: true,
                            max: 100,
                            grid: { color: '#eee' },
                            position: 'top',
                            ticks: {
                                stepSize: 20,
                            },
                        },
                        y: {
                            grid: { display: false },
                        },
                    },
                    plugins: {
                        legend: { display: false },
                    },
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
                                    if (value >= chart.options.scales.x.max) {
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
                                        ctx.fillStyle = dataset.backgroundColor[index].replace('0.6', '1');
                                        const barHeight = bar.height || (bar.base - bar.y) * 2;
                                        ctx.fillRect(bar.x - 6, bar.y - barHeight / 2, 12, barHeight);
                                    }
                                    ctx.restore();
                                });
                            });
                        },
                    },
                ],
            });

            // Data dummy chart kanan
            const timeCtx = document.getElementById('timeChart').getContext('2d');
            const gradients = [
                (() => {
                    // Tidak Suka
                    const grad = timeCtx.createLinearGradient(0, 0, 400, 0);
                    grad.addColorStop(0, 'rgba(255, 6, 79, 0.5)');
                    grad.addColorStop(1, 'rgba(249, 152, 62, 0.5)');
                    return grad;
                })(),
                (() => {
                    // Bosan
                    const grad = timeCtx.createLinearGradient(0, 0, 400, 0);
                    grad.addColorStop(0, 'rgba(255, 87, 62, 0.4)');
                    grad.addColorStop(1, 'rgba(233, 178, 79, 0.4)');
                    return grad;
                })(),
                (() => {
                    // Biasa Saja
                    const grad = timeCtx.createLinearGradient(0, 0, 400, 0);
                    grad.addColorStop(0, 'rgba(255, 229, 1, 0.4)');
                    grad.addColorStop(1, 'rgba(249, 183, 51, 0.4)');
                    return grad;
                })(),
                (() => {
                    // Senang
                    const grad = timeCtx.createLinearGradient(0, 0, 400, 0);
                    grad.addColorStop(0, 'rgba(81, 175, 79, 0.4)');
                    grad.addColorStop(1, 'rgba(228, 177, 61, 0.4)');
                    return grad;
                })(),
                (() => {
                    // Sangat Senang
                    const grad = timeCtx.createLinearGradient(0, 0, 400, 0);
                    grad.addColorStop(0, 'rgba(120, 186, 215, 0.4)');
                    grad.addColorStop(1, 'rgba(233, 178, 79, 0.4)');
                    return grad;
                })(),
            ];

            new Chart(timeCtx, {
                type: 'bar',
                data: {
                    labels: ['Tidak Suka', 'Bosan', 'Biasa Saja', 'Senang', 'Sangat Senang'],
                    datasets: [
                        {
                            label: 'Jumlah Pembaca',
                            data: [
                                {{ $reactionCounts[0] }},
                                {{ $reactionCounts[1] }},
                                {{ $reactionCounts[2] }},
                                {{ $reactionCounts[3] }},
                                {{ $reactionCounts[4] }}
                            ],
                            backgroundColor: gradients,
                        },
                    ],
                },
                options: {
                    indexAxis: 'y',
                    responsive: true,
                    scales: {
                        x: {
                            beginAtZero: true,
                            max: 100,
                            grid: { color: '#eee' },
                            position: 'top',
                            ticks: {
                                stepSize: 20,
                            },
                        },
                        y: {
                            grid: { display: false },
                        },
                    },
                    plugins: {
                        legend: { display: false },
                    },
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
                                    if (value >= chart.options.scales.x.max) {
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
                                        const solidColors = ['rgba(255, 6, 79, 1)', 'rgba(255, 87, 62, 1)', 'rgba(255, 229, 1, 1)', 'rgba(81, 175, 79, 1)', 'rgba(120, 186, 215, 1)'];
                                        ctx.fillStyle = solidColors[index];
                                        const barHeight = bar.height || (bar.base - bar.y) * 2;
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
