<?php

namespace Database\Seeders\PsikotestPaid;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PsikotestToolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('psikotest_tools')->insert([
            [
                'id' => 1,
                'name' => 'PAPI Kostick',
            ],
            [
                'id' => 2,
                'name' => 'BAUM',
            ],
            [
                'id' => 3,
                'name' => 'DAP',
            ],
            [
                'id' => 4,
                'name' => 'HTP',
            ],
            [
                'id' => 5,
                'name' => 'SSCT',
            ],
            [
                'id' => 6,
                'name' => 'HEXACO',
            ],
            [
                'id' => 7,
                'name' => 'OCEAN',
            ],
            [
                'id' => 8,
                'name' => 'BDI',
            ],
            [
                'id' => 9,
                'name' => 'Dass-42',
            ],
            [
                'id' => 10,
                'name' => 'Hamilton',
            ],
            [
                'id' => 11,
                'name' => 'MMSE',
            ],
            [
                'id' => 12,
                'name' => 'IST',
            ],
            [
                'id' => 13,
                'name' => 'VAK',
            ],
            [
                'id' => 14,
                'name' => 'DISC',
            ],
            [
                'id' => 15,
                'name' => 'CFIT',
            ],
            [
                'id' => 16,
                'name' => 'D4',
            ],
            [
                'id' => 17,
                'name' => 'Tes Esai',
            ],
            [
                'id' => 18,
                'name' => 'RMIB',
            ],
            [
                'id' => 19,
                'name' => 'MSDT',
            ],
            [
                'id' => 20,
                'name' => 'SPM',
            ],
            [
                'id' => 21,
                'name' => 'BAI',
            ],
            [
                'id' => 22,
                'name' => 'BIODATA_PERUSAHAAN'
            ],
            [
                'id' => 23,
                'name' => 'BIODATA_PENDIDIKAN'
            ],
            [
                'id' => 24,
                'name' => 'BIODATA_KOMUNITAS'
            ],
            [
                'id' => 25,
                'name' => 'BIODATA_INDIVIDUAL'
            ],
            [
                'id' => 26,
                'name' => 'BIODATA_KLINIS'
            ]
        ]);
    }
}
