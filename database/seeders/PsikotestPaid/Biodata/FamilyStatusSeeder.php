<?php

namespace Database\Seeders\PsikotestPaid\Biodata;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FamilyStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('family_statuses')->insert([
            [
                'name' => 'Kepala Keluarga',
            ],
            [
                'name' => 'Suami',
            ],
            [
                'name' => 'Istri',
            ],
            [
                'name' => 'Anak',
            ],
            [
                'name' => 'Menantu',
            ],
            [
                'name' => 'Cucu',
            ],
            [
                'name' => 'Orangtua',
            ],
            [
                'name' => 'Mertua',
            ],
        ]);
    }
}
