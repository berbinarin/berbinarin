<?php

namespace Database\Seeders\PsikotestPaid;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

class UserPsikotestPaidSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user_psikotest_paids')->insert([
            [
                'id' => 1,
                'fullname' => 'Ridho Aditya',
                'email' => 'ridhoaditya925@gmail.com',
                'password' => Hash::make('Ridhoberbinar123!'),
                'gender' => 'laki-laki',
                'age' => 12,
                'domicile' => 'manado',
                'phone_number' => '0808080808',
                'service' => 'online',
                'reason' => 'adw',
                'preference_schedule' => '2024-08-20',
                'psikotest_type_id' => 1
            ],
        ]);
    }
}
