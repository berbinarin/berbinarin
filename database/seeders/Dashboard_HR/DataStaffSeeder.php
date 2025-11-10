<?php

namespace Database\Seeders\Dashboard_HR;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class DataStaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 1; $i <= 5; $i++) {
            DB::table('data_staff')->insert([
                'nama_lengkap' => $faker->name,
                'linkedin'     => $faker->url,
                'foto'         => 'default.jpg', 
                'motm'         => 'no',
            ]);
        }
    }
}
