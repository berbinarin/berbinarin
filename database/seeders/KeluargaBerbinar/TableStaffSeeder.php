<?php

namespace Database\Seeders\KeluargaBerbinar;

use Illuminate\Database\Seeder;
use App\Models\KeluargaBerbinar\TableStaff;
use App\Models\KeluargaBerbinar\TableRecord;

class TableStaffSeeder extends Seeder
{
    public function run()
    {
        // Data Dummy Staff 1
        $staff1 = TableStaff::create([
            'name' => 'Frans Longworth',
            'status' => true,
            'linkedin' => 'https://www.linkedin.com/in/frans-longworth/',
            'photo' => 'photos/VmvKierVdEiWXyROrInzDB5LISPxbEyaJS8QOj4q.webp',
            'motm' => 'yes',
        ]);

        $staff1->records()->createMany([
            [
                'division_id' => 1, // Human Resources
                'subdivision_id' => 2, // Recruitment
                'date_start' => '2024-01-01',
                'date_end' => '2025-12-31',
            ],
        ]);

        $staff2 = TableStaff::create([
            'name' => 'Caprice Cromblehome',
            'status' => true,
            'linkedin' => 'https://www.linkedin.com/in/frans-longworth/',
            'photo' => 'photos/VmvKierVdEiWXyROrInzDB5LISPxbEyaJS8QOj4q.webp',
            'motm' => 'yes',
        ]);

        $staff2->records()->createMany([
            [
                'division_id' => 2, // Human Resources
                'subdivision_id' => 1, // Recruitment
                'date_start' => '2022-01-01',
                'date_end' => '2023-12-31',
            ],
        ]);

    }
}
