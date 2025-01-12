<?php

namespace Database\Seeders\PsikotestPaid\Biodata;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class QuestionCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('question_categories')->insert([
            [
                'name' => 'company',
            ],
            [
                'name' => 'education',
            ],
            [
                'name' => 'community',
            ],
            [
                'name' => 'individu',
            ],
            [
                'name' => 'clinical',
            ],
        ]);
    }
}
