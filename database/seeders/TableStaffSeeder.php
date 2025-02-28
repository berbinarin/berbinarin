<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TableStaff;
use App\Models\TableRecord;

class TableStaffSeeder extends Seeder
{
    public function run()
    {
        // Data Dummy Staff 1
        $staff1 = TableStaff::create([
            'name' => 'Frans Longworth',
            'status' => true,
            'linkedin' => 'https://www.linkedin.com/in/frans-longworth/',
            'photo' => 'photos/VmvKierVdEiWXyROrInzDB5LISPxbEyaJS8QOj4q.png',
            'motm' => 'yes',
        ]);

        $staff1->records()->createMany([
            [
                'division' => 'Secretary and Finance',
                'subdivision' => null,
                'date_start' => '2024-06-01',
                'date_end' => '2024-12-01',
            ],
            [
                'division' => 'Psychological Testing Product Management',
                'subdivision' => null,
                'date_start' => '2024-08-01',
                'date_end' => '2025-08-01',
            ]
        ]);

        // Data Dummy Staff 2
        $staff2 = TableStaff::create([
            'name' => 'Caprice Cromblehome',
            'status' => false,
            'linkedin' => 'https://www.linkedin.com/in/caprice-cromblehome/',
            'photo' => 'photos/VmvKierVdEiWXyROrInzDB5LISPxbEyaJS8QOj4q.png',
            'motm' => 'no',
        ]);

        $staff2->records()->createMany([
            [
                'division' => 'TikTok Creator',
                'subdivision' => null,
                'date_start' => '2024-11-01',
                'date_end' => '2025-05-01',
            ],
            [
                'division' => 'Marketing Strategist and Sales',
                'subdivision' => null,
                'date_start' => '2024-10-01',
                'date_end' => '2025-10-01',
            ],
            [
                'division' => 'Instagram Creator',
                'subdivision' => null,
                'date_start' => '2024-04-01',
                'date_end' => '2024-10-01',
            ]
        ]);

        // Data Dummy Staff 3
        $staff3 = TableStaff::create([
            'name' => 'Colan Goodbourn',
            'status' => true,
            'linkedin' => 'https://www.linkedin.com/in/colan-goodbourn/',
            'photo' => 'photos/VmvKierVdEiWXyROrInzDB5LISPxbEyaJS8QOj4q.png',
            'motm' => 'yes',
        ]);

        $staff3->records()->createMany([
            [
                'division' => 'Graphic Designer',
                'subdivision' => null,
                'date_start' => '2024-06-01',
                'date_end' => '2024-12-01',
            ]
        ]);

        // Data Dummy Staff 4
        $staff4 = TableStaff::create([
            'name' => 'Ernesto McClary',
            'status' => false,
            'linkedin' => 'https://www.linkedin.com/in/ernesto-mcclary/',
            'photo' => 'photos/VmvKierVdEiWXyROrInzDB5LISPxbEyaJS8QOj4q.png',
            'motm' => 'no',
        ]);

        $staff4->records()->createMany([
            [
                'division' => 'HR Training and Development',
                'subdivision' => null,
                'date_start' => '2024-10-01',
                'date_end' => '2025-04-01',
            ],
            [
                'division' => 'Web & Mobile App Developer',
                'subdivision' => 'Full Stack Developer',
                'date_start' => '2024-09-01',
                'date_end' => '2025-03-01',
            ]
        ]);

        // Data Dummy Staff 5
        $staff5 = TableStaff::create([
            'name' => 'Zola Barkess',
            'status' => true,
            'linkedin' => 'https://www.linkedin.com/in/zola-barkess/',
            'photo' => 'photos/VmvKierVdEiWXyROrInzDB5LISPxbEyaJS8QOj4q.png',
            'motm' => 'yes',
        ]);

        $staff5->records()->createMany([
            [
                'division' => 'TikTok Creator',
                'subdivision' => null,
                'date_start' => '2024-12-01',
                'date_end' => '2025-06-01',
            ],
            [
                'division' => 'Secretary and Finance',
                'subdivision' => null,
                'date_start' => '2024-11-01',
                'date_end' => '2025-05-01',
            ],
            [
                'division' => 'TikTok Creator',
                'subdivision' => null,
                'date_start' => '2024-02-01',
                'date_end' => '2024-08-01',
            ]
        ]);

        // Data Dummy Staff 6
        $staff6 = TableStaff::create([
            'name' => 'Reg Caesman',
            'status' => false,
            'linkedin' => 'https://www.linkedin.com/in/reg-caesman/',
            'photo' => 'photos/VmvKierVdEiWXyROrInzDB5LISPxbEyaJS8QOj4q.png',
            'motm' => 'no',
        ]);

        $staff6->records()->createMany([
            [
                'division' => 'Counseling Product Management',
                'subdivision' => null,
                'date_start' => '2024-06-01',
                'date_end' => '2024-12-01',
            ],
            [
                'division' => 'Psychological Testing Product Management',
                'subdivision' => null,
                'date_start' => '2025-01-01',
                'date_end' => '2026-01-01',
            ],
            [
                'division' => 'TikTok Creator',
                'subdivision' => null,
                'date_start' => '2024-10-01',
                'date_end' => '2025-10-01',
            ]
        ]);

        // Data Dummy Staff 7
        $staff7 = TableStaff::create([
            'name' => 'Boycie Larkworthy',
            'status' => false,
            'linkedin' => 'https://www.linkedin.com/in/boycie-larkworthy/',
            'photo' => 'photos/VmvKierVdEiWXyROrInzDB5LISPxbEyaJS8QOj4q.png',
            'motm' => 'no',
        ]);

        $staff7->records()->createMany([
            [
                'division' => 'Counseling Product Management',
                'subdivision' => null,
                'date_start' => '2024-01-01',
                'date_end' => '2025-01-01',
            ]
        ]);

        // Data Dummy Staff 8
        $staff8 = TableStaff::create([
            'name' => 'Keelby Zannuto',
            'status' => false,
            'linkedin' => 'https://www.linkedin.com/in/keelby-zannuto/',
            'photo' => 'photos/VmvKierVdEiWXyROrInzDB5LISPxbEyaJS8QOj4q.png',
            'motm' => 'no',
        ]);

        $staff8->records()->createMany([
            [
                'division' => 'Counseling Product Management',
                'subdivision' => null,
                'date_start' => '2024-01-01',
                'date_end' => '2024-07-01',
            ]
        ]);

        // Data Dummy Staff 9
        $staff9 = TableStaff::create([
            'name' => 'Bendix Dunley',
            'status' => false,
            'linkedin' => 'https://www.linkedin.com/in/bendix-dunley/',
            'photo' => 'photos/VmvKierVdEiWXyROrInzDB5LISPxbEyaJS8QOj4q.png',
            'motm' => 'no',
        ]);

        $staff9->records()->createMany([
            [
                'division' => 'Psychological Testing Product Management',
                'subdivision' => null,
                'date_start' => '2024-08-01',
                'date_end' => '2025-02-01',
            ]
        ]);

        // Data Dummy Staff 10
        $staff10 = TableStaff::create([
            'name' => 'Berkley Hufton',
            'status' => false,
            'linkedin' => 'https://www.linkedin.com/in/berkley-hufton/',
            'photo' => 'photos/VmvKierVdEiWXyROrInzDB5LISPxbEyaJS8QOj4q.png',
            'motm' => 'no',
        ]);

        $staff10->records()->createMany([
            [
                'division' => 'Class Product Management',
                'subdivision' => null,
                'date_start' => '2024-04-01',
                'date_end' => '2025-04-01',
            ],
            [
                'division' => 'TikTok Creator',
                'subdivision' => null,
                'date_start' => '2024-05-01',
                'date_end' => '2025-05-01',
            ],
            [
                'division' => 'Human Resource',
                'subdivision' => 'HR Performance Appraisal',
                'date_start' => '2024-07-01',
                'date_end' => '2025-01-01',
            ]
        ]);
    }
}