<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\KeluargaBerbinar\TableStaff;
use App\Models\KeluargaBerbinar\TableRecord;

class TableStaffSeeder extends Seeder
{
    // public function run()
    // {
    //     // Data Dummy Staff 1
    //     $staff1 = TableStaff::create([
    //         'name' => 'Frans Longworth',
    //         'status' => true,
    //         'linkedin' => 'https://www.linkedin.com/in/frans-longworth/',
    //         'photo' => 'photos/VmvKierVdEiWXyROrInzDB5LISPxbEyaJS8QOj4q.png',
    //         'motm' => 'yes',
    //     ]);

    //     $staff1->records()->createMany([
    //         [
    //             'division_id' => 1, // ID dari tabel divisions
    //             'subdivision_id' => null, // ID dari tabel subdivisions (jika ada)
    //             'date_start' => '2024-06-01',
    //             'date_end' => '2024-12-01',
    //         ],
    //         [
    //             'division_id' => 2,
    //             'subdivision_id' => null,
    //             'date_start' => '2024-08-01',
    //             'date_end' => '2025-08-01',
    //         ]
    //     ]);

    //     // Data Dummy Staff 2
    //     $staff2 = TableStaff::create([
    //         'name' => 'Caprice Cromblehome',
    //         'status' => false,
    //         'linkedin' => 'https://www.linkedin.com/in/caprice-cromblehome/',
    //         'photo' => 'photos/VmvKierVdEiWXyROrInzDB5LISPxbEyaJS8QOj4q.png',
    //         'motm' => 'no',
    //     ]);

    //     $staff2->records()->createMany([
    //         [
    //             'division_id' => 3,
    //             'subdivision_id' => null,
    //             'date_start' => '2024-11-01',
    //             'date_end' => '2025-05-01',
    //         ],
    //         [
    //             'division_id' => 4,
    //             'subdivision_id' => null,
    //             'date_start' => '2024-10-01',
    //             'date_end' => '2025-10-01',
    //         ],
    //         [
    //             'division_id' => 5,
    //             'subdivision_id' => null,
    //             'date_start' => '2024-04-01',
    //             'date_end' => '2024-10-01',
    //         ]
    //     ]);

    //     // Data Dummy Staff 3
    //     $staff3 = TableStaff::create([
    //         'name' => 'Colan Goodbourn',
    //         'status' => true,
    //         'linkedin' => 'https://www.linkedin.com/in/colan-goodbourn/',
    //         'photo' => 'photos/VmvKierVdEiWXyROrInzDB5LISPxbEyaJS8QOj4q.png',
    //         'motm' => 'yes',
    //     ]);

    //     $staff3->records()->createMany([
    //         [
    //             'division_id' => 6,
    //             'subdivision_id' => null,
    //             'date_start' => '2024-06-01',
    //             'date_end' => '2024-12-01',
    //         ]
    //     ]);

    //     // Data Dummy Staff 4
    //     $staff4 = TableStaff::create([
    //         'name' => 'Ernesto McClary',
    //         'status' => false,
    //         'linkedin' => 'https://www.linkedin.com/in/ernesto-mcclary/',
    //         'photo' => 'photos/VmvKierVdEiWXyROrInzDB5LISPxbEyaJS8QOj4q.png',
    //         'motm' => 'no',
    //     ]);

    //     $staff4->records()->createMany([
    //         [
    //             'division_id' => 7,
    //             'subdivision_id' => null,
    //             'date_start' => '2024-10-01',
    //             'date_end' => '2025-04-01',
    //         ],
    //         [
    //             'division_id' => 8,
    //             'subdivision_id' => 1, // ID dari tabel subdivisions
    //             'date_start' => '2024-09-01',
    //             'date_end' => '2025-03-01',
    //         ]
    //     ]);
    // }
}