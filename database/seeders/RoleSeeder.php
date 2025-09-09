<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            [
                'name' => 'class-pm'
            ],
            [
                'name' => 'counseling-pm'
            ],
            [
                'name' => 'gdve'
            ],
            [
                'name' => 'hr_recruitment'
            ],
            [
                'name' => 'hr_data-analyst'
            ],
            [
                'name' => 'socmed-creator'
            ],
            [
                'name' => 'marketing'
            ],
            [
                'name' => 'ptpm'
            ],
            [
                'name' => 'sec-fin'
            ],
            [
                'name' => 'web-dev'
            ],
            [
                'name' => 'manager-cpm'
            ],            
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}
