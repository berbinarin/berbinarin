<?php

namespace Database\Seeders\PsikotestPaid;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoryPsikotestTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('category_psikotest_types')->insert([
            [
                'id' => 1,
                'name' => 'Komunitas',
            ],
            [
                'id' => 2,
                'name' => 'Individu',
            ],
            [
                'id' => 3,
                'name' => 'Instansi Pendidikan',
            ],
            [
                'id' => 4,
                'name' => 'Perusahaan',
            ]
        ]);
    }
}
