<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class BerbinarPlusUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('berbinarp_users')->insert([
            [
                'id' => 1,
                'email' => 'test@email.com',
                'password' => Hash::make('pass123'),
                'first_name' => 'jhon',
                'last_name' => 'doe',
                'gender' => 'Laki-laki',
                'age' => 12,
                'wa_number' => '0808212108',
                'last_education' => 'SMA',
                'knowing_source' => 'Friends' 
            ],
        ]);
    }
}
