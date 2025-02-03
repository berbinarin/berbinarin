<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NomorBdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nomor_bdi')->insert([
            ['nomor_bdi' => '1', 'created_at' => now(), 'updated_at' => now()],
            ['nomor_bdi' => '2', 'created_at' => now(), 'updated_at' => now()],
            ['nomor_bdi' => '3', 'created_at' => now(), 'updated_at' => now()],
            ['nomor_bdi' => '4', 'created_at' => now(), 'updated_at' => now()],
            ['nomor_bdi' => '5', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
