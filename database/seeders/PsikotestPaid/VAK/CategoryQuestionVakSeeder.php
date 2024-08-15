<?php

namespace Database\Seeders\PsikotestPaid\VAK;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoryQuestionVakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('category_question_vaks')->insert([
            [
                'id' => 1,
                'name' => 'Visual',
                'created_at' => now(),
            ],
            [
                'id' => 2,
                'name' => 'Auditori',
                'created_at' => now(),
            ],
            [
                'id' => 3,
                'name' => 'Kinestetik',
                'created_at' => now(),
            ],
        ]);
    }
}
