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
            'username' => 'class-pm',
            'email' => 'class-pm@gmail.com',
            'password' => Hash::make('berbinar123'),
        ])->assignRole('class-pm');

        // Counseling Product Management
        User::create([
            'username' => 'counseling-pm',
            'email' => 'counseling-pm@gmail.com',
            'password' => Hash::make('berbinar123'),
        ])->assignRole('counseling-pm');

        // Graphic Designer & Video Editor
        User::create([
            'username' => 'gdve',
            'email' => 'gdve@gmail.com',
            'password' => Hash::make('berbinar123'),
        ])->assignRole('gdve');

        // Human Resource - Data Analyst
        User::create([
            'username' => 'hr-dataanalyst',
            'email' => 'hr-dataanalyst@gmail.com',
            'password' => Hash::make('Hrnyaberbinar'),
        ])->assignRole('hr_data-analyst');

        // Human Resource - Data Analyst
        User::create([
            'username' => 'hr-recruitment',
            'email' => 'hr-recruitment@gmail.com',
            'password' => Hash::make('Hrnyaberbinar'),
        ])->assignRole('hr_recruitment');

        // Social Media Creator
        User::create([
            'username' => 'socmed-creator',
            'email' => 'socmed-creator@gmail.com',
            'password' => Hash::make('berbinar123'),
        ])->assignRole('socmed-creator');

        // Marketing
        User::create([
            'username' => 'marketing',
            'email' => 'marketing@gmail.com',
            'password' => Hash::make('berbinar123'),
        ])->assignRole('marketing');

        // Psychological Testing Product Management
        User::create([
            'username' => 'ptpm',
            'email' => 'ptpm@gmail.com',
            'password' => Hash::make('berbinar123'),
        ])->assignRole('ptpm');

        // Secretary & Finance
        User::create([
            'username' => 'sec-fin',
            'email' => 'sec-fin@gmail.com',
            'password' => Hash::make('berbinar123'),
        ])->assignRole('sec-fin');

        // Web and Mobile Apps Developer
        User::create([
            'username' => 'web-dev',
            'email' => 'webdev@gmail.com',
            'password' => Hash::make('berbinar123'),
        ])->assignRole('web-dev');

        // Psikolog Staff
        User::create([
            'username' => 'manager-cpm',
            'email' => 'manager-cpm@gmail.com',
            'password' => Hash::make('berbinar123'),
        ])->assignRole('manager-cpm');
    }
}
