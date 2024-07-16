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
                'name' => 'Tes kesiapan pernikahan',
            ],
        ]);
    }
}
