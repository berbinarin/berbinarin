<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Human Resource
        User::create([
            'username' => 'hrberbinar2005',
            'email' => 'hr@gmail.com',
            'password' => Hash::make('berbinaradabuatkamu'),
        ])->assignRole('human_resource');

        // PsikotestTestProductManagement
        User::create([
            'username' => 'ptpm',
            'email' => 'ptpm@gmail.com',
            'password' => Hash::make('berbinar123'),
        ])->assignRole('psikotest_test_product_management');
    }
}
