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
        // Class Product Management
        User::create([
            'username' => 'classpm',
            'email' => 'classpm@gmail.com',
            'password' => Hash::make('berbinar123'),
        ])->assignRole('class-pm');

        // Counseling Product Management
        User::create([
            'username' => 'counselingpm',
            'email' => 'counselingpm@gmail.com',
            'password' => Hash::make('berbinar123'),
        ])->assignRole('counseling-pm');

        // Human Resource
        User::create([
            'username' => 'hrberbinar2005',
            'email' => 'hr@gmail.com',
            'password' => Hash::make('berbinaradabuatkamu'),
        ])->assignRole('hr');

        // Pyschological Testing Product Management
        User::create([
            'username' => 'ptpm',
            'email' => 'ptpm@gmail.com',
            'password' => Hash::make('berbinar123'),
        ])->assignRole('ptpm');
    }
}
