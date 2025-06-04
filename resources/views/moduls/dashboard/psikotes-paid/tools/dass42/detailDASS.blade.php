@extends('dashboard.layouts.app', [
    'title' => 'Detail Jawaban Dass42',
    'active' => 'Dashboard',
    'modul' => 'Psikotest Paid Dass42',
])

@section('content')
    <section class="flex w-full pb-10">
        <div class="flex flex-col w-full">
            <div class="w-full">
                <div class="py-4 md:pt-12 md:pb-7">
                    <div>
                        <p tabindex="0"
                            class="focus:outline-none text-base sm:text-lg md:text-2xl lg:text-4xl font-bold leading-normal text-gray-800 mb-2">
                            Detail Data Jawaban Alat Test Dass-42</p>
                        <p class="w-2/4 text-disabled">Halaman dashboard ini menampilkan jawaban yang telah dikumpulkan dari
                            pengguna.</p>
                        <a href="{{ route('dashboard.psikotespaid.datadass42') }}">
                            <button type="button"
                                class="focus:ring-2 focus:ring-offset-2 mt-4 sm:mt-8 inline-flex items-start justify-start p-3 bg-blue-500 hover:bg-blue-500 focus:outline-none rounded">
                                <p class="font-medium leading-none text-white">Kembali</p>
                            </button>
                        </a>
                    </div>
                </div>

                <div class="flex mt-1 gap-5 w-full">
                    <div class="bg-white shadow-lg p-8 rounded-lg max-h-[500px] overflow-hidden flex flex-col"
                        style="width: 40%">
                        <div class="overflow-y-auto flex-1" style="max-height: 400px;">
                            <div class="pb-10">
                                <h2 class="font-semibold text-2xl">{{ $psikotest_paid_test_id->userPsikotestPaid->fullname }}</h2>
                                <p class="mt-4">Kategori yang paling tinggi nilainya adalah <b>Anxiety</b> dengan
                                    skor <b>{{ $depressionPoint }} poin</b>. Sehingga di dapatkan kesimpulan berupa <b>Anxiety</b> tipe <b>Moderate</b>.</p>
                            </div>
                            <div class="space-y-4 mb-4 relative" style="padding-left: 0;">
                                {{-- Diagram --}}
                                <div class="flex items-center">
                                    <div class="bg-blue-300 h-10 rounded-r-lg ml-1" style="width: {{ ($depressionPoint / 61) * 100 . '%' }}">
                                </div>
                                    <span class="ml-2 text-gray-700 font-medium">{{ $depressionPoint }} poin</span>
                                </div>
                                <div class="flex items-center">
                                    <div class="bg-purple-300 h-10 rounded-r-lg ml-1"  style="width: {{ ($anxietyPoint / 61) * 100 . '%' }}"></div>
                                    <span class="ml-2 text-gray-700 font-medium">{{ $anxietyPoint }} poin</span>
                                </div>
                                <div class="flex items-center pb-4">
                                    <div class="bg-red-300 h-10 rounded-r-lg ml-1"  style="width: {{ ($stressPoint / 61) * 100 . '%' }}"></div>
                                    <span class="ml-2 text-gray-700 font-medium">{{ $stressPoint }} poin</span>
                                </div>

                                {{-- Garis Pinggir --}}
                                <div class="absolute left-0 bottom-0 h-48 w-1 bg-gray-300"></div>
                                <div class="absolute left-0 bottom-0 w-full h-1 bg-gray-300"></div>
                            </div>

                            <div class="flex flex-col ">
                                <div class="">
                                    <div class="flex items-center space-x-2 mb-2">
                                        <div class="w-4 h-4 rounded-full bg-blue-300"></div>
                                        <p class="text-lg text-gray-700">Depression</p>
                                    </div>
                                    <div class="flex items-center space-x-2 mb-2">
                                        <div class="w-4 h-4 rounded-full bg-purple-300"></div>
                                        <p class="text-lg text-gray-700">Anxiety</p>
                                    </div>
                                    <div class="flex items-center space-x-2 mb-2">
                                        <div class="w-4 h-4 rounded-full bg-red-300"></div>
                                        <p class="text-lg text-gray-700">Stress</p>
                                    </div>
                                </div>
                                <div class="pt-2">
                                    <p class="text-lg text-gray-700 mb-4">
                                        Total poin pada Depression: <b>{{ $depressionPoint }}poin</b><br>
                                        Total poin pada Anxiety: <b>{{ $anxietyPoint }}poin</b><br>
                                        Total poin pada Stress: <b>{{ $stressPoint }}poin</b><br>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white shadow-lg p-8 rounded-lg max-h-[500px] overflow-hidden flex flex-col"
                        style="width: 60%">
                        <h2 class="font-semibold text-2xl mb-4">Detail Jawaban</h2>

                        <!-- Bungkus keseluruhan dengan satu div -->
                        <div class="w-full">
                            <!-- Tabel untuk header saja -->
                            <table class="w-full text-lg border-collapse table-fixed">
                                <thead>
                                    <tr class="border-b flex">
                                        <th class="text-center text-gray-400 p-4" style="width: 50%">Pernyataan</th>
                                        <th class="text-center text-gray-400 p-4" style="width: 25%">Kategori</th>
                                        <th class="text-center text-gray-400 p-4" style="width: 25%">Nilai</th>
                                    </tr>
                                </thead>
                            </table>

                            <!-- Kontainer dengan overflow untuk body -->
                            <div class="overflow-y-auto" style="max-height: 350px;">
                                <table class="w-full text-lg border-collapse table-fixed">
                                    <tbody class="border-b flex flex-col">
                                        @foreach ($dassDataAnswer as $data)
                                        <tr class="border-b">
                                            
                                            <td class="p-4" style="width: 50%">
                                                {{ $data->questionDass->question }}
                                            </td>
                                            <td class="text-center p-4" style="width: 25%">{{  $data->questionDass->category  }}</td>
                                            <td class="p-4 text-center" style="width: 25%">{{ $data->answer }}</td>
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
@endsection