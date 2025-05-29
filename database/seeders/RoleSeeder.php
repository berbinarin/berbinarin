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
                'name' => 'gd'
            ],
            [
                'name' => 'gdve'
            ],
            [
                'name' => 'hr'
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
            
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}
