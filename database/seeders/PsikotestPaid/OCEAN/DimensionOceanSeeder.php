<?php

namespace Database\Seeders\PsikotestPaid\OCEAN;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DimensionOceanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dimension_ocean')->insert([
            [
                'id' => 1,
                'name' => 'Agreeableness',
            ],
            [
                'id' => 2,
                'name' => 'Conscientiousness',
            ],
            [
                'id' => 3,
                'name' => 'Extraversion',
            ],
            [
                'id' => 4,
                'name' => 'Neuroticism',
            ],
            [
                'id' => 5,
                'name' => 'Openness',
            ],
        ]);
    }
}
