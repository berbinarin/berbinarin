@extends('dashboard.layouts.app', [
    'title' => 'Detail Jawaban OCEAN',
    'active' => 'Dashboard',
    'modul' => 'Psikotest Paid OCEAN',
])

<style>
    .subtes-btn {
        border-color: #75BADB;
        color: #75BADB;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    .subtes-btn.selected {
        background-color: #75BADB;
        color: white;
        border-color: #75BADB;
    }

    .subtes-btn:hover {
        background-color: #A0D3E9;
        color: white;
        border-color: #A0D3E9;
    }

    .subtes-btn.selected:hover {
        background-color: #75BADB;
        color: white;
        border-color: #75BADB;
    }

    .subgraph-btn {
        border-color: #75BADB;
        color: #75BADB;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    .subgraph-btn.selected {
        background-color: #75BADB;
        color: white;
        border-color: #75BADB;
    }

    .subgraph-btn:hover {
        background-color: #A0D3E9;
        color: white;
        border-color: #A0D3E9;
    }

    .subgraph-btn.selected:hover {
        background-color: #75BADB;
        color: white;
        border-color: #75BADB;
    }
</style>

@section('content')
    <section class="flex w-full">
        <div class="flex flex-col w-full">
            <div class="w-full">
                <div class="py-4 md:pt-12 md:pb-7">
                    <div>
                        <p tabindex="0"
                            class="focus:outline-none text-base sm:text-lg md:text-2xl lg:text-4xl font-bold leading-normal text-gray-800 mb-2">
                            Detail Data Jawaban Alat Test OCEAN</p>
                        <p class="w-2/4 text-disabled">Halaman dashboard ini menampilkan jawaban yang telah dikumpulkan dari
                            pengguna.</p>
                        <a href="{{ route('dashboard.psikotespaid.dataocean') }}">
                            <button type="button"
                                class="focus:ring-2 focus:ring-offset-2 mt-4 sm:mt-8 inline-flex items-start justify-start p-3 bg-blue-500 hover:bg-blue-500 focus:outline-none rounded">
                                <p class="font-medium leading-none text-white">Kembali</p>
                            </button>
                        </a>
                    </div>
                </div>

                <div class="flex justify-center mt-2 space-x-8">
                    {{-- Graph Section --}}
                    <div class="bg-white shadow-lg p-8 rounded-lg w-1/2">
                        <div class="mb-4">
                            <h2 class="font-semibold text-2xl">{{ $name }}</h2>

                            <div class="flex flex-wrap mt-3 space-x-2 gap-2">
                                <button id="subgraph1"
                                    class="subgraph-btn text-lg font-semibold py-2 px-4 rounded-full border-2 transition">Extraversion</button>
                                <button id="subgraph2"
                                    class="subgraph-btn text-lg font-semibold py-2 px-4 rounded-full border-2 transition">Agreeableness</button>
                                <button id="subgraph3"
                                    class="subgraph-btn text-lg font-semibold py-2 px-4 rounded-full border-2 transition">Neuroticism</button>
                                <button id="subgraph4"
                                    class="subgraph-btn text-lg font-semibold py-2 px-4 rounded-full border-2 transition">Conscientiousness</button>
                                <button id="subgraph5"
                                    class="subgraph-btn text-lg font-semibold py-2 px-4 rounded-full border-2 transition">Openness</button>
                            </div>
                        </div>

                        <div id="subgraph1Detail" class="block">
                            <div class="overflow-y-auto flex-1" style="max-height: 230px;">
                                <p class="text-lg text-gray-500 mb-8">Dimensi Kepribadian Extraversion ini berkaitan dengan
                                    tingkat kenyamanan seseorang dalam berinteraksi dengan orang lain</p>
                                <div class="space-y-4 mt-2 mb-4 relative" style="padding-left: 0;">
                                    {{-- Diagram --}}
                                    <div class="flex items-center">
                                        <div class="bg-blue-300 h-10 w-[400px] rounded-r-lg ml-1"
                                            style="width: {{ $ext_1 }}%"></div>
                                        <span class="ml-2 text-gray-700 font-medium">{{ $ext_1 }}%</span>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="bg-purple-300 h-10 w-[400px] rounded-r-lg ml-1"
                                            style="width: {{ $ext_2 }}%"></div>
                                        <span class="ml-2 text-gray-700 font-medium">{{ $ext_2 }}%</span>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="bg-red-300 h-10 w-[400px] rounded-r-lg ml-1"
                                            style="width: {{ $ext_3 }}%"></div>
                                        <span class="ml-2 text-gray-700 font-medium">{{ $ext_3 }}%</span>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="bg-yellow-400 h-10 w-[400px] rounded-r-lg ml-1"
                                            style="width: {{ $ext_4 }}%"></div>
                                        <span class="ml-2 text-gray-700 font-medium">{{ $ext_4 }}%</span>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="bg-red-900 h-10 w-[400px] rounded-r-lg ml-1"
                                            style="width: {{ $ext_5 }}%"></div>
                                        <span class="ml-2 text-gray-700 font-medium">{{ $ext_5 }}%</span>
                                    </div>

                                    {{-- Garis Pinggir --}}
                                    <div class="absolute left-0 bottom-0 h-72 w-1 bg-gray-300"></div>
                                    <div class="absolute left-0 bottom-0 w-full h-1 bg-gray-300"></div>
                                </div>

                                <div class="flex">
                                    <div class="w-1/3">
                                        <div class="flex items-center space-x-2 mb-2">
                                            <div class="w-4 h-4 rounded-full bg-blue-300"></div>
                                            <p class="text-base text-gray-700">1 = Sangat Tidak Sesuai</p>
                                        </div>
                                        <div class="flex items-center space-x-2 mb-2">
                                            <div class="w-4 h-4 rounded-full bg-purple-300"></div>
                                            <p class="text-base text-gray-700">2 = Tidak Sesuai</p>
                                        </div>
                                        <div class="flex items-center space-x-2 mb-2">
                                            <div class="w-4 h-4 rounded-full bg-red-300"></div>
                                            <p class="text-base text-gray-700">3 = Ragu-ragu</p>
                                        </div>
                                        <div class="flex items-center space-x-2 mb-2">
                                            <div class="w-4 h-4 rounded-full bg-yellow-400"></div>
                                            <p class="text-base text-gray-700">4 = Sesuai</p>
                                        </div>
                                        <div class="flex items-center space-x-2 mb-2">
                                            <div class="w-4 h-4 rounded-full bg-red-900"></div>
                                            <p class="text-base text-gray-700">5 = Sangat Sesuai</p>
                                        </div>
                                    </div>

                                    <div class="w-2/3">
                                        <p class="text-base text-gray-700 mb-4">
                                            Total poin pada Extraversion: <b>{{ $sum_ext }} poin</b>
                                        </p>
                                        <p class="text-base text-gray-700 mb-4">
                                            Rata-rata pada Extraversion: <b>{{ $avg_ext }} poin</b>
                                        </p>
                                        <p class="text-base text-gray-700 mb-4">
                                            Persentase: <b>{{ $perc_ext }}%</b>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="subgraph2Detail" class="block">
                            <div class="overflow-y-auto flex-1" style="max-height: 230px;">
                                <p class="text-lg text-gray-500 mb-8">Dimensi Kepribadian Agreeableness ini berkaitan dengan
                                    tingkat kenyamanan seseorang dalam berinteraksi dengan orang lain</p>
                                <div class="space-y-4 mb-4 relative" style="padding-left: 0;">
                                    {{-- Diagram --}}
                                    <div class="flex items-center">
                                        <div class="bg-blue-300 h-10 w-[400px] rounded-r-lg ml-1"
                                            style="width: {{ $agr_1 }}%"></div>
                                        <span class="ml-2 text-gray-700 font-medium">{{ $agr_1 }}%</span>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="bg-purple-300 h-10 w-[400px] rounded-r-lg ml-1"
                                            style="width: {{ $agr_2 }}%"></div>
                                        <span class="ml-2 text-gray-700 font-medium">{{ $agr_2 }}%</span>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="bg-red-300 h-10 w-[400px] rounded-r-lg ml-1"
                                            style="width: {{ $agr_3 }}%"></div>
                                        <span class="ml-2 text-gray-700 font-medium">{{ $agr_3 }}%</span>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="bg-yellow-400 h-10 w-[400px] rounded-r-lg ml-1"
                                            style="width: {{ $agr_4 }}%"></div>
                                        <span class="ml-2 text-gray-700 font-medium">{{ $agr_4 }}%</span>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="bg-red-900 h-10 w-[400px] rounded-r-lg ml-1"
                                            style="width: {{ $agr_5 }}%"></div>
                                        <span class="ml-2 text-gray-700 font-medium">{{ $agr_5 }}%</span>
                                    </div>

                                    {{-- Garis Pinggir --}}
                                    <div class="absolute left-0 bottom-0 h-72 w-1 bg-gray-300"></div>
                                    <div class="absolute left-0 bottom-0 w-full h-1 bg-gray-300"></div>
                                </div>

                                <div class="flex">
                                    <div class="w-1/3">
                                        <div class="flex items-center space-x-2 mb-2">
                                            <div class="w-4 h-4 rounded-full bg-blue-300"></div>
                                            <p class="text-base text-gray-700">1 = Sangat Tidak Sesuai</p>
                                        </div>
                                        <div class="flex items-center space-x-2 mb-2">
                                            <div class="w-4 h-4 rounded-full bg-purple-300"></div>
                                            <p class="text-base text-gray-700">2 = Tidak Sesuai</p>
                                        </div>
                                        <div class="flex items-center space-x-2 mb-2">
                                            <div class="w-4 h-4 rounded-full bg-red-300"></div>
                                            <p class="text-base text-gray-700">3 = Ragu-ragu</p>
                                        </div>
                                        <div class="flex items-center space-x-2 mb-2">
                                            <div class="w-4 h-4 rounded-full bg-yellow-400"></div>
                                            <p class="text-base text-gray-700">4 = Sesuai</p>
                                        </div>
                                        <div class="flex items-center space-x-2 mb-2">
                                            <div class="w-4 h-4 rounded-full bg-red-900"></div>
                                            <p class="text-base text-gray-700">5 = Sangat Sesuai</p>
                                        </div>
                                    </div>

                                    <div class="w-2/3">
                                        <p class="text-base text-gray-700 mb-4">
                                            Total poin pada Agreeableness: <b>{{ $sum_agr }} poin</b>
                                        </p>
                                        <p class="text-base text-gray-700 mb-4">
                                            Rata-rata pada Agreeableness: <b>{{ $avg_agr }} poin</b>
                                        </p>
                                        <p class="text-base text-gray-700 mb-4">
                                            Persentase: <b>{{ $perc_agr }}%</b>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="subgraph3Detail" class="block">
                            <div class="overflow-y-auto flex-1" style="max-height: 230px;">
                                <p class="text-lg text-gray-500 mb-8">Dimensi Kepribadian Neuroticism ini berkaitan dengan
                                    tingkat kenyamanan seseorang dalam berinteraksi dengan orang lain</p>
                                <div class="space-y-4 mb-4 relative" style="padding-left: 0;">
                                    {{-- Diagram --}}
                                    <div class="flex items-center">
                                        <div class="bg-blue-300 h-10 w-[400px] rounded-r-lg ml-1"
                                            style="width: {{ $neu_1 }}%"></div>
                                        <span class="ml-2 text-gray-700 font-medium">{{ $neu_1 }}%</span>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="bg-purple-300 h-10 w-[400px] rounded-r-lg ml-1"
                                            style="width: {{ $neu_2 }}%"></div>
                                        <span class="ml-2 text-gray-700 font-medium">{{ $neu_2 }}%</span>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="bg-red-300 h-10 w-[400px] rounded-r-lg ml-1"
                                            style="width: {{ $neu_3 }}%"></div>
                                        <span class="ml-2 text-gray-700 font-medium">{{ $neu_3 }}%</span>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="bg-yellow-400 h-10 w-[400px] rounded-r-lg ml-1"
                                            style="width: {{ $neu_4 }}%"></div>
                                        <span class="ml-2 text-gray-700 font-medium">{{ $neu_4 }}%</span>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="bg-red-900 h-10 w-[400px] rounded-r-lg ml-1"
                                            style="width: {{ $neu_5 }}%"></div>
                                        <span class="ml-2 text-gray-700 font-medium">{{ $neu_5 }}%</span>
                                    </div>

                                    {{-- Garis Pinggir --}}
                                    <div class="absolute left-0 bottom-0 h-72 w-1 bg-gray-300"></div>
                                    <div class="absolute left-0 bottom-0 w-full h-1 bg-gray-300"></div>
                                </div>

                                <div class="flex">
                                    <div class="w-1/3">
                                        <div class="flex items-center space-x-2 mb-2">
                                            <div class="w-4 h-4 rounded-full bg-blue-300"></div>
                                            <p class="text-base text-gray-700">1 = Sangat Tidak Sesuai</p>
                                        </div>
                                        <div class="flex items-center space-x-2 mb-2">
                                            <div class="w-4 h-4 rounded-full bg-purple-300"></div>
                                            <p class="text-base text-gray-700">2 = Tidak Sesuai</p>
                                        </div>
                                        <div class="flex items-center space-x-2 mb-2">
                                            <div class="w-4 h-4 rounded-full bg-red-300"></div>
                                            <p class="text-base text-gray-700">3 = Ragu-ragu</p>
                                        </div>
                                        <div class="flex items-center space-x-2 mb-2">
                                            <div class="w-4 h-4 rounded-full bg-yellow-400"></div>
                                            <p class="text-base text-gray-700">4 = Sesuai</p>
                                        </div>
                                        <div class="flex items-center space-x-2 mb-2">
                                            <div class="w-4 h-4 rounded-full bg-red-900"></div>
                                            <p class="text-base text-gray-700">5 = Sangat Sesuai</p>
                                        </div>
                                    </div>

                                    <div class="w-2/3">
                                        <p class="text-base text-gray-700 mb-4">
                                            Total poin pada Neuroticism: <b>{{ $sum_neu }} poin</b>
                                        </p>
                                        <p class="text-base text-gray-700 mb-4">
                                            Rata-rata pada Neuroticism: <b>{{ $avg_neu }} poin</b>
                                        </p>
                                        <p class="text-base text-gray-700 mb-4">
                                            Persentase: <b>{{ $perc_neu }}%</b>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="subgraph4Detail" class="block">
                            <div class="overflow-y-auto flex-1" style="max-height: 230px;">
                                <p class="text-lg text-gray-500 mb-8">Dimensi Kepribadian Conscientiousness ini berkaitan
                                    dengan tingkat kenyamanan seseorang dalam berinteraksi dengan orang lain</p>
                                <div class="space-y-4 mb-4 relative" style="padding-left: 0;">
                                    {{-- Diagram --}}
                                    <div class="flex items-center">
                                        <div class="bg-blue-300 h-10 w-[400px] rounded-r-lg ml-1"
                                            style="width: {{ $con_1 }}%"></div>
                                        <span class="ml-2 text-gray-700 font-medium">{{ $con_1 }}%</span>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="bg-purple-300 h-10 w-[400px] rounded-r-lg ml-1"
                                            style="width: {{ $con_2 }}%"></div>
                                        <span class="ml-2 text-gray-700 font-medium">{{ $con_2 }}%</span>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="bg-red-300 h-10 w-[400px] rounded-r-lg ml-1"
                                            style="width: {{ $con_3 }}%"></div>
                                        <span class="ml-2 text-gray-700 font-medium">{{ $con_3 }}%</span>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="bg-yellow-400 h-10 w-[400px] rounded-r-lg ml-1"
                                            style="width: {{ $con_4 }}%"></div>
                                        <span class="ml-2 text-gray-700 font-medium">{{ $con_4 }}%</span>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="bg-red-900 h-10 w-[400px] rounded-r-lg ml-1"
                                            style="width: {{ $con_5 }}%"></div>
                                        <span class="ml-2 text-gray-700 font-medium">{{ $con_5 }}%</span>
                                    </div>

                                    {{-- Garis Pinggir --}}
                                    <div class="absolute left-0 bottom-0 h-72 w-1 bg-gray-300"></div>
                                    <div class="absolute left-0 bottom-0 w-full h-1 bg-gray-300"></div>
                                </div>

                                <div class="flex">
                                    <div class="w-1/3">
                                        <div class="flex items-center space-x-2 mb-2">
                                            <div class="w-4 h-4 rounded-full bg-blue-300"></div>
                                            <p class="text-base text-gray-700">1 = Sangat Tidak Sesuai</p>
                                        </div>
                                        <div class="flex items-center space-x-2 mb-2">
                                            <div class="w-4 h-4 rounded-full bg-purple-300"></div>
                                            <p class="text-base text-gray-700">2 = Tidak Sesuai</p>
                                        </div>
                                        <div class="flex items-center space-x-2 mb-2">
                                            <div class="w-4 h-4 rounded-full bg-red-300"></div>
                                            <p class="text-base text-gray-700">3 = Ragu-ragu</p>
                                        </div>
                                        <div class="flex items-center space-x-2 mb-2">
                                            <div class="w-4 h-4 rounded-full bg-yellow-400"></div>
                                            <p class="text-base text-gray-700">4 = Sesuai</p>
                                        </div>
                                        <div class="flex items-center space-x-2 mb-2">
                                            <div class="w-4 h-4 rounded-full bg-red-900"></div>
                                            <p class="text-base text-gray-700">5 = Sangat Sesuai</p>
                                        </div>
                                    </div>

                                    <div class="w-2/3">
                                        <p class="text-base text-gray-700 mb-4">
                                            Total poin pada Conscientiousness: <b>{{ $sum_con }} poin</b>
                                        </p>
                                        <p class="text-base text-gray-700 mb-4">
                                            Rata-rata pada Conscientiousness: <b>{{ $avg_con }} poin</b>
                                        </p>
                                        <p class="text-base text-gray-700 mb-4">
                                            Persentase: <b>{{ $perc_con }}%</b>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="subgraph5Detail" class="block">
                            <div class="overflow-y-auto flex-1" style="max-height: 230px;">
                                <p class="text-lg text-gray-500 mb-8">Dimensi Kepribadian Openness ini berkaitan dengan
                                    tingkat kenyamanan seseorang dalam berinteraksi dengan orang lain</p>
                                <div class="space-y-4 mb-4 relative" style="padding-left: 0;">
                                    {{-- Diagram --}}
                                    <div class="flex items-center">
                                        <div class="bg-blue-300 h-10 w-[400px] rounded-r-lg ml-1"
                                            style="width: {{ $ope_1 }}%"></div>
                                        <span class="ml-2 text-gray-700 font-medium">{{ $ope_1 }}%</span>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="bg-purple-300 h-10 w-[300px] rounded-r-lg ml-1"
                                            style="width: {{ $ope_2 }}%"></div>
                                        <span class="ml-2 text-gray-700 font-medium">{{ $ope_2 }}%</span>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="bg-red-300 h-10 w-[350px] rounded-r-lg ml-1"
                                            style="width: {{ $ope_3 }}%"></div>
                                        <span class="ml-2 text-gray-700 font-medium">{{ $ope_3 }}%</span>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="bg-yellow-400 h-10 w-[100px] rounded-r-lg ml-1"
                                            style="width: {{ $ope_4 }}%"></div>
                                        <span class="ml-2 text-gray-700 font-medium">{{ $ope_4 }}%</span>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="bg-red-900 h-10 w-[100px] rounded-r-lg ml-1"
                                            style="width: {{ $ope_5 }}%"></div>
                                        <span class="ml-2 text-gray-700 font-medium">{{ $ope_5 }}%</span>
                                    </div>

                                    {{-- Garis Pinggir --}}
                                    <div class="absolute left-0 bottom-0 h-72 w-1 bg-gray-300"></div>
                                    <div class="absolute left-0 bottom-0 w-full h-1 bg-gray-300"></div>
                                </div>

                                <div class="flex">
                                    <div class="w-1/3">
                                        <div class="flex items-center space-x-2 mb-2">
                                            <div class="w-4 h-4 rounded-full bg-blue-300"></div>
                                            <p class="text-base text-gray-700">1 = Sangat Tidak Sesuai</p>
                                        </div>
                                        <div class="flex items-center space-x-2 mb-2">
                                            <div class="w-4 h-4 rounded-full bg-purple-300"></div>
                                            <p class="text-base text-gray-700">2 = Tidak Sesuai</p>
                                        </div>
                                        <div class="flex items-center space-x-2 mb-2">
                                            <div class="w-4 h-4 rounded-full bg-red-300"></div>
                                            <p class="text-base text-gray-700">3 = Ragu-ragu</p>
                                        </div>
                                        <div class="flex items-center space-x-2 mb-2">
                                            <div class="w-4 h-4 rounded-full bg-yellow-400"></div>
                                            <p class="text-base text-gray-700">4 = Sesuai</p>
                                        </div>
                                        <div class="flex items-center space-x-2 mb-2">
                                            <div class="w-4 h-4 rounded-full bg-red-900"></div>
                                            <p class="text-base text-gray-700">5 = Sangat Sesuai</p>
                                        </div>
                                    </div>

                                    <div class="w-2/3">
                                        <p class="text-base text-gray-700 mb-4">
                                            Total poin pada Openness: <b>{{ $sum_ope }} poin</b>
                                        </p>
                                        <p class="text-base text-gray-700 mb-4">
                                            Rata-rata pada Openness: <b>{{ $avg_ope }} poin</b>
                                        </p>
                                        <p class="text-base text-gray-700 mb-4">
                                            Persentase: <b>{{ $perc_ope }}%</b>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Table Section --}}
                    <div class="bg-white shadow-lg p-8 rounded-lg w-1/2">
                        <h2 class="font-semibold text-2xl">Detail Jawaban</h2>

                        <div class="flex flex-wrap mb-4 mt-4 space-x-2 gap-2">
                            <button id="subtes1"
                                class="subtes-btn text-lg font-semibold py-2 px-4 rounded-full border-2 transition">Extraversion</button>
                            <button id="subtes2"
                                class="subtes-btn text-lg font-semibold py-2 px-4 rounded-full border-2 transition">Agreeableness</button>
                            <button id="subtes3"
                                class="subtes-btn text-lg font-semibold py-2 px-4 rounded-full border-2 transition">Neuroticism</button>
                            <button id="subtes4"
                                class="subtes-btn text-lg font-semibold py-2 px-4 rounded-full border-2 transition">Conscientiousness</button>
                            <button id="subtes5"
                                class="subtes-btn text-lg font-semibold py-2 px-4 rounded-full border-2 transition">Openness</button>
                        </div>

                        <div id="subtes1Detail" class="block">
                            <?php
                            $mapping = [
                                1 => 'Sangat Tidak Sesuai',
                                2 => 'Tidak Sesuai',
                                3 => 'Ragu-Ragu',
                                4 => 'Sesuai',
                                5 => 'Sangat Sesuai',
                            ];
                            ?>
                            <div class="overflow-y-auto flex-1" style="max-height: 250px;">
                                <table class="w-full text-lg">
                                    <thead>
                                        <tr class="border-b">
                                            <th class="text-center text-gray-500 p-4">No</th>
                                            <th class="text-center text-gray-500 p-4">Poin</th>
                                            <th class="text-center text-gray-500 p-4">Jawaban</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($ext_detail as $item)
                                            <tr class="border-b">
                                                <td class="text-center p-4">{{ $item->question_ocean_id }}</td>
                                                <td class="text-center p-4">{{ in_array($item->question_ocean_id, [2, 6, 7, 8, 9, 12, 18, 21, 23, 27, 31, 35, 37, 41]) ? (6 - $item->answer) : $item->answer }}</td>
                                                <td class="p-4">{{ $mapping[$item->answer] ?? "Nilai Tidak Valid" }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div id="subtes2Detail" class="hidden">
                            <div class="overflow-y-auto flex-1" style="max-height: 250px;">
                                <table class="w-full text-lg">
                                    <thead>
                                        <tr class="border-b">
                                            <th class="text-center text-gray-500 p-4">No</th>
                                            <th class="text-center text-gray-500 p-4">Poin</th>
                                            <th class="text-center text-gray-500 p-4">Jawaban</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($agr_detail as $item)
                                            <tr class="border-b">
                                                <td class="text-center p-4">{{ $item->question_ocean_id }}</td>
                                                <td class="text-center p-4">{{ in_array($item->question_ocean_id, [2, 6, 7, 8, 9, 12, 18, 21, 23, 27, 31, 35, 37, 41]) ? (6 - $item->answer) : $item->answer }}</td>
                                                <td class="p-4">{{ $mapping[$item->answer] ?? "Nilai Tidak Valid" }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div id="subtes3Detail" class="hidden">
                            <div class="overflow-y-auto flex-1" style="max-height: 250px;">
                                <table class="w-full text-lg">
                                    <thead>
                                        <tr class="border-b">
                                            <th class="text-center text-gray-500 p-4">No</th>
                                            <th class="text-center text-gray-500 p-4">Poin</th>
                                            <th class="text-center text-gray-500 p-4">Jawaban</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($neu_detail as $item)
                                            <tr class="border-b">
                                                <td class="text-center p-4">{{ $item->question_ocean_id }}</td>
                                                <td class="text-center p-4">{{ in_array($item->question_ocean_id, [2, 6, 7, 8, 9, 12, 18, 21, 23, 27, 31, 35, 37, 41]) ? (6 - $item->answer) : $item->answer }}</td>
                                                <td class="p-4">{{ $mapping[$item->answer] ?? "Nilai Tidak Valid" }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div id="subtes4Detail" class="hidden">
                            <div class="overflow-y-auto flex-1" style="max-height: 250px;">
                                <table class="w-full text-lg">
                                    <thead>
                                        <tr class="border-b">
                                            <th class="text-center text-gray-500 p-4">No</th>
                                            <th class="text-center text-gray-500 p-4">Poin</th>
                                            <th class="text-center text-gray-500 p-4">Jawaban</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($con_detail as $item)
                                            <tr class="border-b">
                                                <td class="text-center p-4">{{ $item->question_ocean_id }}</td>
                                                <td class="text-center p-4">{{ in_array($item->question_ocean_id, [2, 6, 7, 8, 9, 12, 18, 21, 23, 27, 31, 35, 37, 41]) ? (6 - $item->answer) : $item->answer }}</td>
                                                <td class="p-4">{{ $mapping[$item->answer] ?? "Nilai Tidak Valid" }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div id="subtes5Detail" class="hidden">
                            <div class="overflow-y-auto flex-1" style="max-height: 250px;">
                                <table class="w-full text-lg">
                                    <thead>
                                        <tr class="border-b">
                                            <th class="text-center text-gray-500 p-4">No</th>
                                            <th class="text-center text-gray-500 p-4">Poin</th>
                                            <th class="text-center text-gray-500 p-4">Jawaban</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($ope_detail as $item)
                                            <tr class="border-b">
                                                <td class="text-center p-4">{{ $item->question_ocean_id }}</td>
                                                <td class="text-center p-4">{{ in_array($item->question_ocean_id, [2, 6, 7, 8, 9, 12, 18, 21, 23, 27, 31, 35, 37, 41]) ? (6 - $item->answer) : $item->answer }}</td>
                                                <td class="p-4">{{ $mapping[$item->answer] ?? "Nilai Tidak Valid" }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Script Table --}}
        <script>
            const subtes1 = document.getElementById('subtes1');
            const subtes2 = document.getElementById('subtes2');
            const subtes3 = document.getElementById('subtes3');
            const subtes4 = document.getElementById('subtes4');
            const subtes5 = document.getElementById('subtes5');

            const subtes1Detail = document.getElementById('subtes1Detail');
            const subtes2Detail = document.getElementById('subtes2Detail');
            const subtes3Detail = document.getElementById('subtes3Detail');
            const subtes4Detail = document.getElementById('subtes4Detail');
            const subtes5Detail = document.getElementById('subtes5Detail');

            const subtesButtons = [subtes1, subtes2, subtes3, subtes4, subtes5];
            const subtesDetails = [subtes1Detail, subtes2Detail, subtes3Detail, subtes4Detail, subtes5Detail];

            function showSubtes(subtes) {
                subtesDetails.forEach(detail => detail.classList.add('hidden'));
                subtesButtons.forEach(button => button.classList.remove('selected'));

                if (subtes) {
                    const selectedDetail = document.getElementById(`${subtes}Detail`);
                    const selectedButton = document.getElementById(subtes);

                    if (selectedDetail && selectedButton) {
                        selectedDetail.classList.remove('hidden');
                        selectedButton.classList.add('selected');
                    }
                }
            }

            subtes1.addEventListener('click', () => showSubtes('subtes1'));
            subtes2.addEventListener('click', () => showSubtes('subtes2'));
            subtes3.addEventListener('click', () => showSubtes('subtes3'));
            subtes4.addEventListener('click', () => showSubtes('subtes4'));
            subtes5.addEventListener('click', () => showSubtes('subtes5'));

            document.addEventListener('DOMContentLoaded', () => {
                showSubtes('subtes1'); // subtes1 default
            });
        </script>

        {{-- Script Graph --}}
        <script>
            const subgraph1 = document.getElementById('subgraph1');
            const subgraph2 = document.getElementById('subgraph2');
            const subgraph3 = document.getElementById('subgraph3');
            const subgraph4 = document.getElementById('subgraph4');
            const subgraph5 = document.getElementById('subgraph5');

            const subgraph1Detail = document.getElementById('subgraph1Detail');
            const subgraph2Detail = document.getElementById('subgraph2Detail');
            const subgraph3Detail = document.getElementById('subgraph3Detail');
            const subgraph4Detail = document.getElementById('subgraph4Detail');
            const subgraph5Detail = document.getElementById('subgraph5Detail');

            const subgraphButtons = [subgraph1, subgraph2, subgraph3, subgraph4, subgraph5];
            const subgraphDetails = [subgraph1Detail, subgraph2Detail, subgraph3Detail, subgraph4Detail, subgraph5Detail];

            function showsubgraph(subgraph) {
                subgraphDetails.forEach(detail => detail.classList.add('hidden'));
                subgraphButtons.forEach(button => button.classList.remove('selected'));

                const selectedDetail = document.getElementById(`${subgraph}Detail`);
                const selectedButton = document.getElementById(subgraph);

                if (selectedDetail && selectedButton) {
                    selectedDetail.classList.remove('hidden');
                    selectedButton.classList.add('selected');
                }
            }

            subgraph1.addEventListener('click', () => showsubgraph('subgraph1'));
            subgraph2.addEventListener('click', () => showsubgraph('subgraph2'));
            subgraph3.addEventListener('click', () => showsubgraph('subgraph3'));
            subgraph4.addEventListener('click', () => showsubgraph('subgraph4'));
            subgraph5.addEventListener('click', () => showsubgraph('subgraph5'));

            document.addEventListener('DOMContentLoaded', () => {
                showsubgraph('subgraph1'); // subgraph1 default
            });
        </script>
    @endsection
