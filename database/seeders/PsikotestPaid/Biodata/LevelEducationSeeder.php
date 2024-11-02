<?php

namespace Database\Seeders\PsikotestPaid\Biodata;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class LevelEducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('level_education')->insert([
            [
                'name' => 'TK',
            ],
            [
                'name' => 'SD',
            ],
            [
                'name' => 'SMP',
            ],
            [
                'name' => 'SMA',
            ],
            [
                'name' => 'D1/D2/D3',
            ],
            [
                'name' => 'D4/S1',
            ],
            [
                'name' => 'S2',
            ],
            [
                'name' => 'S3',
            ],
        ]);
    }
}
