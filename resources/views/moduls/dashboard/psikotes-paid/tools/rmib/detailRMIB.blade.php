@extends('moduls.dashboard.layouts.main', [
    'title' => 'Detail Jawaban RMIB',
    'active' => 'Dashboard',
    'modul' => 'Psikotest Paid RMIB',
])

@section('content-dashboard')
<section class="flex w-full">
    <div class="flex flex-col w-full">
        <div class="w-full">
            <div class="py-4 md:pt-12 md:pb-7">
                <div>
                    <p tabindex="0"
                        class="focus:outline-none text-base sm:text-lg md:text-2xl lg:text-4xl font-bold leading-normal text-gray-800 mb-2">
                        Detail Data Jawaban Alat Test RMIB</p>
                    <p class="w-2/4 text-disabled">Halaman dashboard ini menampilkan jawaban yang telah dikumpulkan dari
                        pengguna.</p>
                    <a href="{{ route('dashboard.psikotespaid.datarmib') }}">
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
                            <h2 class="font-semibold text-2xl">Morgan Vero</h2>
                            <p class="mt-4">Berikut merupakan 3 peringkat kategori dengan nilai terendah, yaitu <b>Outdoor, Mechanical, Aesthetic, Social, Medical, Scientific</b> dan <b>Computational.</b></p>
                            <div>
                                {{-- Dalam sini  --}}
                                <?php
                                // Dummy data
                                $categories = [
                                    ['name' => 'Outdoor',       'point' => 13],
                                    ['name' => 'Mechanical',    'point' => 9],
                                    ['name' => 'Aesthetic',     'point' => 9],
                                    ['name' => 'Social',        'point' => 9],
                                    ['name' => 'Medical',       'point' => 9],
                                    ['name' => 'Scientific',    'point' => 9],
                                    ['name' => 'Computational', 'point' => 13],
                                ];

                                usort($categories, function ($a, $b) {
                                    return $b['point'] <=> $a['point'];
                                });
                                ?>
                                <ul class="flex flex-col gap-2 pt-4">
                                    <?php foreach ($categories as $index => $cat): ?>
                                        <li class="flex gap-2 items-center">
                                            <div class="bg-primary px-2 py-1 flex justify-center rounded-full">
                                                <span class="text-white"><?= $index + 1 ?>.</span>
                                            </div>
                                            <div class="flex justify-between w-full">
                                                <p class="pl-2"><?= $cat['name'] ?></p>
                                                
                                                <p class="pr-20 font-bold"> <?= $cat['point'] ?> poin</p>
                                            </div>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                            <h2 class="font-semibold text-2xl pt-4">Kesimpulan</h2>
                            <h3 class="font-semibold text-xl text-primary-alt pt-2">Outdoor</h3>
                            <p>Pekerjaan yang aktivitasnya dilakukan diluar atau udara terbuka, atau pekerjaan yang tidak berhubungan dengan hal-hal yang rutin sifatnya.
                                Contoh: petani, penjaga hutan, guru olah raga</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white shadow-lg p-8 rounded-lg max-h-[500px] overflow-hidden flex flex-col"
                    style="width: 60%">
                    <h2 class="font-semibold text-2xl mb-4">Detail Jawaban</h2>

                    @include('moduls.dashboard.psikotes-paid.tools.rmib.tablayout')
                </div>
            </div>
        </div>
    </div>
    @endsection