<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SMCUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // SMC
        User::create([
            'username' => 'smc',
            'email' => 'smc@gmail.com',
            'password' => Hash::make('berbinar123'),
        ])->assignRole('smc');
    }
}
