<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class BerbinarPlusCLassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('berbinarp_class')->insert([
            [
                'id' => 1,
                'title' => 'Jobseekers',
                'description' => 'this is jobseekers class description',
                'price' => 15000,
                'thumbnail' => 'www.google.com',
            ],
            [
                'id' => 2,
                'title' => 'Product Management',
                'description' => 'this is Product Management class description',
                'price' => 15000,
                'thumbnail' => 'www.google.com',
            ],
            [
                'id' => 3,
                'title' => 'Human Resources',
                'description' => 'this is Human Resources class description',
                'price' => 15000,
                'thumbnail' => 'www.google.com',
            ],
            [
                'id' => 4,
                'title' => 'Graphic Design',
                'description' => 'this is Graphic Design class description',
                'price' => 15000,
                'thumbnail' => 'www.google.com',
            ]
        ]);
    }
}
