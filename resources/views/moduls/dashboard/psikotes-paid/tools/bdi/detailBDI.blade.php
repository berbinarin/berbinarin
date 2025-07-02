@extends('dashboard.layouts.app', [
'title' => 'Detail Jawaban BDI',
'active' => 'Dashboard',
'modul' => 'Psikotest Paid BDI',
])


@section('content')
<section class="flex w-full">
    <div class="flex flex-col w-full">
        <div class="w-full">
            <div class="py-4 md:pt-12 md:pb-7">
                <div>
                    <p tabindex="0"
                        class="focus:outline-none text-base sm:text-lg md:text-2xl lg:text-4xl font-bold leading-normal text-gray-800 mb-2">
                        Detail Data Jawaban Alat Test BDI</p>
                    <p class="w-2/4 text-disabled">Halaman dashboard ini menampilkan jawaban yang telah dikumpulkan dari pengguna.</p>
                    <a href="{{ route('dashboard.psikotespaid.databdi') }}">
                        <button type="button"
                            class="focus:ring-2 focus:ring-offset-2 mt-4 sm:mt-8 inline-flex items-start justify-start p-3 bg-blue-500 hover:bg-blue-500 focus:outline-none rounded">
                            <p class="font-medium leading-none text-white">Kembali</p>
                        </button>
                    </a>
                </div>
            </div>
            
            <div class="flex justify-center mt-2 space-x-8">
                <div class="bg-white shadow-lg p-8 rounded-lg w-1/2 max-h-[500px] overflow-hidden flex flex-col">
                    <div class="overflow-y-auto flex-1" style="max-height: 400px;">
                        <div class="mb-6">
                            <h2 class="font-semibold text-2xl">Morgan Vero</h2>
                            <p class="text-lg text-gray-500">Visual</p>
                        </div>
                        <div class="space-y-4 mb-4 relative" style="padding-left: 0;">
                            {{-- Diagram --}}
                            <div class="flex items-center">
                                <div class="bg-blue-300 h-10 w-[400px] rounded-r-lg ml-1"></div>
                                <span class="ml-2 text-gray-700 font-medium">35%</span>
                            </div>
                            <div class="flex items-center">
                                <div class="bg-purple-300 h-10 w-[300px] rounded-r-lg ml-1"></div>
                                <span class="ml-2 text-gray-700 font-medium">25%</span>
                            </div>
                            <div class="flex items-center">
                                <div class="bg-red-300 h-10 w-[350px] rounded-r-lg ml-1"></div>
                                <span class="ml-2 text-gray-700 font-medium">30%</span>
                            </div>
                            <div class="flex items-center">
                                <div class="bg-yellow-400 h-10 w-[100px] rounded-r-lg ml-1"></div>
                                <span class="ml-2 text-gray-700 font-medium">10%</span>
                            </div>
                        
                            {{-- Garis Pinggir --}}
                            <div class="absolute left-0 bottom-0 h-56 w-1 bg-gray-300"></div>
                            <div class="absolute left-0 bottom-0 w-full h-1 bg-gray-300"></div>
                        </div>
                        
                        <div class="flex">
                            <div class="w-1/3">
                                <div class="flex items-center space-x-2 mb-2">
                                    <div class="w-4 h-4 rounded-full bg-blue-300"></div>
                                    <p class="text-lg text-gray-700">1</p>
                                </div>
                                <div class="flex items-center space-x-2 mb-2">
                                    <div class="w-4 h-4 rounded-full bg-purple-300"></div>
                                    <p class="text-lg text-gray-700">2</p>
                                </div>
                                <div class="flex items-center space-x-2 mb-2">
                                    <div class="w-4 h-4 rounded-full bg-red-300"></div>
                                    <p class="text-lg text-gray-700">3</p>
                                </div>
                                <div class="flex items-center space-x-2 mb-2">
                                    <div class="w-4 h-4 rounded-full bg-yellow-400"></div>
                                    <p class="text-lg text-gray-700">4</p>
                                </div>
                            </div>
                            <div class="w-2/3">
                                <p class="text-lg text-gray-700 mb-4">
                                    Total skor yang didapatkan adalah <b>32 poin</b><br>
                                </p>
                                <p class="text-lg text-gray-700 mb-4">
                                    Kesimpulan: <br>Depresi berat/Perlu meluangkan waktu untuk bertemu dengan psikolog
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="bg-white shadow-lg p-8 rounded-lg w-1/2 max-h-[500px] overflow-hidden flex flex-col">
                    <h2 class="font-semibold text-2xl mb-4">Detail Jawaban</h2>
                
                    <div class="overflow-y-auto flex-1" style="max-height: 350px;">
                        <table class="w-full text-lg">
                            <thead>
                                <tr class="border-b">
                                    <th class="text-center text-gray-500 p-4">No</th>
                                    <th class="text-center text-gray-500 p-4">Poin</th>
                                    <th class="text-center text-gray-500 p-4">Jawaban</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b">
                                    <td class="text-center p-4">1.</td>
                                    <td class="text-center p-4">1</td>
                                    <td class="p-4">Saya merasa sedih</td>
                                </tr>
                                <tr class="border-b">
                                    <td class="text-center p-4">2.</td>
                                    <td class="text-center p-4">0</td>
                                    <td class="p-4">Saya tidak merasa berkecil hati terhadap masa depan</td>
                                </tr>
                                <tr class="border-b">
                                    <td class="text-center p-4">3.</td>
                                    <td class="text-center p-4">2</td>
                                    <td class="p-4">Saat saya menengok masa lalu, maka yang terlihat oleh saya hanyalah kegagalan</td>
                                </tr>
                                <tr class="border-b">
                                    <td class="text-center p-4">4.</td>
                                    <td class="text-center p-4">2</td>
                                    <td class="p-4">Saya merasa bahwa ada perubahan-perubahan permanen pada penampilan saya sehingga membuat saya tampak tidak menarik</td>
                                </tr>
                                <tr class="border-b">
                                    <td class="text-center p-4">5.</td>
                                    <td class="text-center p-4">0</td>
                                    <td class="p-4">Saya tidak merasa bersalah</td>
                                </tr>
                                <tr class="border-b">
                                    <td class="text-center p-4">6.</td>
                                    <td class="text-center p-4">3</td>
                                    <td class="p-4">Saya merasa bahwa saya sedang dihukum</td>
                                </tr>
                                <tr class="border-b">
                                    <td class="text-center p-4">7.</td>
                                    <td class="text-center p-4">1</td>
                                    <td class="p-4">Saya merasa kecewa terhadap diri saya sendiri</td>
                                </tr>
                                <tr class="border-b">
                                    <td class="text-center p-4">8.</td>
                                    <td class="text-center p-4">1</td>
                                    <td class="p-4">Saya tidak merasa bahwa saya lebih buruk daripada orang lain</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
@endsection