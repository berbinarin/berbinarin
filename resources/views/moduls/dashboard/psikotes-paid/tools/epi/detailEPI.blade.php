@extends('dashboard.layouts.app', [
    'title' => 'Detail Jawaban EPI',
    'active' => 'Dashboard',
    'modul' => 'Psikotest Paid EPI',
])

@section('content')
    <section class="flex w-full">
        <div class="flex flex-col w-full">
            <div class="w-full">
                <div class="py-4 md:pt-12 md:pb-7">
                    <div>
                        <p tabindex="0"
                            class="focus:outline-none text-base sm:text-lg md:text-2xl lg:text-4xl font-bold leading-normal text-gray-800 mb-2">
                            Detail Data Jawaban Alat Test EPI</p>
                        <p class="w-2/4 text-disabled">Halaman dashboard ini menampilkan jawaban yang telah dikumpulkan dari
                            pengguna.</p>
                        <a href="{{ route('dashboard.psikotespaid.dataepi') }}">
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
                                <h2 class="font-semibold text-2xl">{{ $user->fullname }}</h2>
                                <p class="mt-4">Kategori yang paling tinggi nilainya adalah <b>{{ $highestCategory }}</b> dengan
                                    skor
                                    <b>{{ $highestScore }}
                                        poin.</b> Sehingga di dapatkan kesimpulan hasil adalah <b>{{ $overallConclusion }}</b>.
                                </p>
                            </div>
                            <div class="mb-4 relative" style="padding-left: 0;">


                                @foreach ($categoryScores as $category => $score)
                                    <div class="flex items-center pb-4">
                                        <div
                                            class="bg-{{ $categoryColors[$category] }}-300 h-10 w-[{{ $score * 20}}px] rounded-r-lg ml-1">
                                        </div>
                                        <span class="ml-2 text-gray-700 font-medium">{{ $score }} poin</span>
                                    </div>
                                @endforeach

                                {{-- Garis Pinggir --}}
                                <div class="absolute left-0 bottom-0 h-48 w-1 bg-gray-300"></div>
                                <div class="absolute left-0 bottom-0 w-full h-1 bg-gray-300"></div>
                            </div>

                            <div class="flex flex-col ">
                                <div class="">
                                    @foreach ($categoryScores as $category => $score)
                                        <div class="flex items-center space-x-2 mb-2">
                                            <div class="w-4 h-4 rounded-full bg-{{ $categoryColors[$category] }}-300"></div>
                                            <p class="text-lg text-gray-700">{{ $category }}</p>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="pt-2">
                                    @foreach ($categoryScores as $category => $score)
                                        <p class="text-lg text-gray-700 mb-4">
                                            Total poin pada {{ $category }}: <b>{{ $score }} poin</b><br>
                                        </p>
                                    @endforeach
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
                                        <th class="text-center text-gray-500 p-4" style="width: 50%">Pernyataan</th>
                                        <th class="text-center text-gray-500 p-4" style="width: 25%">Jawaban</th>
                                        <th class="text-center text-gray-500 p-4" style="width: 25%">Poin</th>
                                    </tr>
                                </thead>
                            </table>

                            <!-- Kontainer untuk body agar bisa di-scroll -->
                            <div class="overflow-y-auto" style="max-height: 350px;">
                                <table class="w-full text-lg border-collapse table-fixed">
                                    <tbody class="flex flex-col border-b">
                                        @foreach ($answers as $answer)
                                            <tr class="border-b">
                                                <td class="p-4" style="width: 50%">
                                                    {{ $answer->question->statement }}
                                                </td>
                                                <td class="text-center p-4" style="width: 25%">{{ $answer->answer }}</td>
                                                <td class="p-4 text-center" style="width: 25%">{{ $answer->points }}</td>
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
