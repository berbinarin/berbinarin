<?php

namespace Database\Seeders;

use App\Models\Hiring_Positions;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HiringSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     */

    public function run()
    {
        $hiringData = [
            [
                'name' => 'Counseling Product Management',
                'type' => 'Internship', // Matches ENUM('Internship', 'Fulltime', 'Part Time', 'Contract', 'Freelancer')
                'positions' => 'Staff', // Matches ENUM('Staff', 'Manager', 'Researcher')
                'location' => 'Remote', // Matches ENUM('Remote', 'Surabaya')
                'link' => null,
                'is_active' => true,
                'divisi' => 'Counseling Product Management', // Matches ENUM for 'divisi'
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Psychological Testing Product Management',
                'type' => 'Internship',
                'positions' => 'Staff',
                'location' => 'Remote',
                'link' => null,
                'is_active' => true,
                'divisi' => 'Psychological Testing Product Management',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Class Product Management',
                'type' => 'Internship',
                'positions' => 'Staff',
                'location' => 'Remote',
                'link' => null,
                'is_active' => true,
                'divisi' => 'Class Product Management',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Researcher',
                'type' => 'Internship',
                'positions' => 'Staff',
                'location' => 'Remote',
                'link' => null,
                'is_active' => true,
                'divisi' => 'Researcher',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Secretary and Finance',
                'type' => 'Internship',
                'positions' => 'Staff',
                'location' => 'Remote',
                'link' => null,
                'is_active' => true,
                'divisi' => 'Secretary and Finance',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Marketing Strategist and Sales',
                'type' => 'Internship',
                'positions' => 'Staff',
                'location' => 'Remote',
                'link' => null,
                'is_active' => true,
                'divisi' => 'Marketing Strategist and Sales',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'HR Recruitment',
                'type' => 'Internship',
                'positions' => 'Staff',
                'location' => 'Remote',
                'link' => null,
                'is_active' => true,
                'divisi' => 'HR Recruitment',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'HR Performance Appraisal',
                'type' => 'Internship',
                'positions' => 'Staff',
                'location' => 'Remote',
                'link' => null,
                'is_active' => true,
                'divisi' => 'HR Performance Appraisal',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'HR Data Analyst',
                'type' => 'Internship',
                'positions' => 'Staff',
                'location' => 'Remote',
                'link' => null,
                'is_active' => true,
                'divisi' => 'HR Data Analyst',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'HR Training and Development',
                'type' => 'Internship',
                'positions' => 'Staff',
                'location' => 'Remote',
                'link' => null,
                'is_active' => true,
                'divisi' => 'HR Training and Development',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'LinkedIn Creator',
                'type' => 'Internship',
                'positions' => 'Staff',
                'location' => 'Remote',
                'link' => null,
                'is_active' => true,
                'divisi' => 'LinkedIn Creator',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'X Creator',
                'type' => 'Internship',
                'positions' => 'Staff',
                'location' => 'Remote',
                'link' => null,
                'is_active' => true,
                'divisi' => 'X Creator',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'TikTok Creator',
                'type' => 'Internship',
                'positions' => 'Staff',
                'location' => 'Remote',
                'link' => null,
                'is_active' => true,
                'divisi' => 'TikTok Creator',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Instagram Creator',
                'type' => 'Internship',
                'positions' => 'Staff',
                'location' => 'Remote',
                'link' => null,
                'is_active' => true,
                'divisi' => 'Instagram Creator',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Graphic Designer',
                'type' => 'Internship',
                'positions' => 'Staff',
                'location' => 'Remote',
                'link' => null,
                'is_active' => true,
                'divisi' => 'Graphic Designer',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Front End Developer',
                'type' => 'Internship',
                'positions' => 'Staff',
                'location' => 'Remote',
                'link' => null,
                'is_active' => true,
                'divisi' => 'Front End Developer',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Back End Developer',
                'type' => 'Internship',
                'positions' => 'Staff',
                'location' => 'Remote',
                'link' => null,
                'is_active' => true,
                'divisi' => 'Back End Developer',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Full Stack Developer',
                'type' => 'Internship',
                'positions' => 'Staff',
                'location' => 'Remote',
                'link' => null,
                'is_active' => true,
                'divisi' => 'Full Stack Developer',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'UIUX Designer',
                'type' => 'Internship',
                'positions' => 'Staff',
                'location' => 'Remote',
                'link' => null,
                'is_active' => true,
                'divisi' => 'UI/UX Designer',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];

        DB::table('hiring_positions')->insert($hiringData);
    }

}
