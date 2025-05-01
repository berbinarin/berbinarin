<?php

namespace Database\Seeders\KeluargaBerbinar;

use Illuminate\Database\Seeder;
use App\Models\KeluargaBerbinar\Division;
use App\Models\KeluargaBerbinar\SubDivision;

class DivisiAndSubDivisiSeeder extends Seeder
{
    public function run()
    {
        // Data Divisi 
        $division1 = Division::create(['nama_divisi' => 'TikTok Creator']);
        $division2 = Division::create(['nama_divisi' => 'Finance']);
        $division3 = Division::create(['nama_divisi' => 'Marketing']);
        $division4 = Division::create(['nama_divisi' => 'Web and Mobile Apps Developer']);
        $division5 = Division::create(['nama_divisi' => 'Graphic Designer']);
        $division6 = Division::create(['nama_divisi' => 'Psychological Testing Product Management']);
        $division7 = Division::create(['nama_divisi' => 'Counseling Product Management']);
        $division8 = Division::create(['nama_divisi' => 'Class Product Management']);

        // Sub Divisi 
        SubDivision::create([
            'nama_subdivisi' => 'Recruitment',
            'division_id' => $division1->id,
        ]);
        SubDivision::create([
            'nama_subdivisi' => 'Employee Relations',
            'division_id' => $division1->id,
        ]);
        SubDivision::create([
            'nama_subdivisi' => 'Training and Development',
            'division_id' => $division1->id,
        ]);

        SubDivision::create([
            'nama_subdivisi' => 'Staff',
            'division_id' => $division2->id,
        ]);
        SubDivision::create([
            'nama_subdivisi' => 'Manager',
            'division_id' => $division2->id,
        ]);

        SubDivision::create([
            'nama_subdivisi' => 'Digital Marketing',
            'division_id' => $division3->id,
        ]);
        SubDivision::create([
            'nama_subdivisi' => 'Content Creation',
            'division_id' => $division3->id,
        ]);
        SubDivision::create([
            'nama_subdivisi' => 'Manager',
            'division_id' => $division3->id,
        ]);
        SubDivision::create([
            'nama_subdivisi' => 'Social Media Management',
            'division_id' => $division3->id,
        ]);

        SubDivision::create([
            'nama_subdivisi' => 'Full-Stack',
            'division_id' => $division4->id,
        ]);
        SubDivision::create([
            'nama_subdivisi' => 'Back-End',
            'division_id' => $division4->id,
        ]);
        SubDivision::create([
            'nama_subdivisi' => 'Front-End',
            'division_id' => $division4->id,
        ]);

        SubDivision::create([
            'nama_subdivisi' => 'Logistics',
            'division_id' => $division5->id,
        ]);
        SubDivision::create([
            'nama_subdivisi' => 'Supply Chain Management',
            'division_id' => $division5->id,
        ]);

        SubDivision::create([
            'nama_subdivisi' => 'Retail Sales',
            'division_id' => $division6->id,
        ]);
        SubDivision::create([
            'nama_subdivisi' => 'Corporate Sales',
            'division_id' => $division6->id,
        ]);

        SubDivision::create([
            'nama_subdivisi' => 'Technical Support',
            'division_id' => $division7->id,
        ]);
        SubDivision::create([
            'nama_subdivisi' => 'Customer Success',
            'division_id' => $division7->id,
        ]);

        SubDivision::create([
            'nama_subdivisi' => 'Product Design',
            'division_id' => $division8->id,
        ]);
        SubDivision::create([
            'nama_subdivisi' => 'Product Management',
            'division_id' => $division8->id,
        ]);
    }
}