<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SoalBdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Kita akan memasukkan 20 data soal,
        // dan setiap 4 data soal memiliki nomor_bdi_id yang sama.
        // Sehingga total 5 nomor_bdi_id x 4 soal = 20 baris.

        $now = Carbon::now();

        $data = [
            // Nomor BDI ID: 1
            [
                'pernyataan' => 'Saya merasa sedih.',
                'bobot' => '1',
                'nomor_bdi_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'pernyataan' => 'Saya kehilangan minat dalam kegiatan sehari-hari.',
                'bobot' => '1',
                'nomor_bdi_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'pernyataan' => 'Saya merasa cemas berlebihan.',
                'bobot' => '1',
                'nomor_bdi_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'pernyataan' => 'Saya sulit berkonsentrasi.',
                'bobot' => '1',
                'nomor_bdi_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],

            // Nomor BDI ID: 2
            [
                'pernyataan' => 'Saya sering merasa tidak berharga.',
                'bobot' => '1',
                'nomor_bdi_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'pernyataan' => 'Saya sulit untuk beristirahat.',
                'bobot' => '1',
                'nomor_bdi_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'pernyataan' => 'Saya cepat marah pada hal-hal kecil.',
                'bobot' => '1',
                'nomor_bdi_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'pernyataan' => 'Saya merasa sendirian.',
                'bobot' => '1',
                'nomor_bdi_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ],

            // Nomor BDI ID: 3
            [
                'pernyataan' => 'Saya merasa putus asa dengan masa depan.',
                'bobot' => '1',
                'nomor_bdi_id' => 3,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'pernyataan' => 'Saya sulit tidur di malam hari.',
                'bobot' => '1',
                'nomor_bdi_id' => 3,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'pernyataan' => 'Saya sering merasa bersalah.',
                'bobot' => '1',
                'nomor_bdi_id' => 3,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'pernyataan' => 'Saya tidak tertarik pada hal-hal yang dulu menyenangkan.',
                'bobot' => '1',
                'nomor_bdi_id' => 3,
                'created_at' => $now,
                'updated_at' => $now,
            ],

            // Nomor BDI ID: 4
            [
                'pernyataan' => 'Saya sulit menjaga motivasi.',
                'bobot' => '1',
                'nomor_bdi_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'pernyataan' => 'Saya cepat lelah saat beraktivitas.',
                'bobot' => '1',
                'nomor_bdi_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'pernyataan' => 'Saya sering berpikir negatif.',
                'bobot' => '1',
                'nomor_bdi_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'pernyataan' => 'Saya kehilangan nafsu makan.',
                'bobot' => '1',
                'nomor_bdi_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],

            // Nomor BDI ID: 5
            [
                'pernyataan' => 'Saya lebih sering menangis dari biasanya.',
                'bobot' => '1',
                'nomor_bdi_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'pernyataan' => 'Saya merasa takut tanpa alasan jelas.',
                'bobot' => '1',
                'nomor_bdi_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'pernyataan' => 'Saya mengalami perubahan berat badan.',
                'bobot' => '1',
                'nomor_bdi_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'pernyataan' => 'Saya merasa tidak berdaya.',
                'bobot' => '1',
                'nomor_bdi_id' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ];

        DB::table('soal_bdi')->insert($data);
    }
}
