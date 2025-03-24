<?php

namespace Database\Seeders\PsikotestPaid\EPI;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EpiQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('epi_questions')->insert([
            [
                'statement' => 'Apakah Anda sering merasa cemas?',
                'category' => 'Neuroticism',
            ],
            [
                'statement' => 'Apakah Anda suka bertemu orang baru?',
                'category' => 'Extroversion',
            ],
            [
                'statement' => 'Apakah Anda sering berbohong?',
                'category' => 'Lie',
            ],
            [
                'statement' => 'Apakah Anda merasa nyaman berbicara di depan umum?',
                'category' => 'Extroversion',
            ],
            [
                'statement' => 'Apakah Anda sering merasa sedih tanpa alasan yang jelas?',
                'category' => 'Neuroticism',
            ],
        ]);
    }
}