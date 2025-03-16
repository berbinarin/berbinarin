<?php

namespace Database\Seeders;

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
        DB::table('users')->insert([
            [
                'id' => 1,
                'username' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('Admin123'),
                'role' => 'Admin'
            ],

            [
                'id' => 2,
                'username' => 'hrberbinar2005',
                'email' => 'hr@gmail.com',
                'password' => Hash::make('berbinaradabuatkamu'),
                'role' => 'HR'
            ],

            [
                'id' => 3,
                'username' => 'Konselling',
                'email' => 'Konselling@gmail.com',
                'password' => Hash::make('Konselling123'),
                'role' => 'Konselling'
            ],

            [
                'id' => 4,
                'username' => 'PsikotestFree',
                'email' => 'psikotestfree@gmail.com',
                'password' => Hash::make('PsikotestFree123'),
                'role' => 'PsikotestFree'
            ],

            [
                'id' => 5,
                'username' => 'BerbinarPlus',
                'email' => 'berbinarplus@gmail.com',
                'password' => Hash::make('BerbinarPlus123'),
                'role' => 'BerbinarPlus'
            ],

            [
                'id' => 6,
                'username' => 'PsikotestPaid',
                'email' => 'psikotestpaid@gmail.com',
                'password' => Hash::make('PsikotestPaid123'),
                'role' => 'PsikotestPaid'
            ],
            [
                'id' => 7,
                'username' => 'BerbinarSatu',
                'email' => 'berbinarsatu@gmail.com',
                'password' => Hash::make('BerbinarSatu123'),
                'role' => 'BerbinarSatu'
            ],

        ]);
    }
}