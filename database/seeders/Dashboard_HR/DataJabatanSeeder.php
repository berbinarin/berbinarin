<?php

namespace Database\Seeders\Dashboard_HR;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class DataJabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Ambil semua data staff yang sudah dibuat
        $staffs = DB::table('data_staff')->get();

        // Untuk setiap staff, buat data jabatan yang terkait
        foreach ($staffs as $staff) {
            DB::table('data_jabatan')->insert([
                'data_staff_id'  => $staff->id,
                'posisi'         => $faker->jobTitle,
                'divisi'         => 'Divisi ' . ucfirst($faker->word),
                'sub_divisi'     => 'Sub Divisi ' . ucfirst($faker->word),
                'awal_menjabat'  => $faker->date('Y-m-d', 'now'),
                'akhir_menjabat' => $faker->date('Y-m-d', '+1 years'),
            ]);
        }
    }
}
