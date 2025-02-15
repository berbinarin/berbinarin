<?php

namespace Database\Seeders\PsikotestPaid\HTP;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class QuestionHtpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('question_htp')->insert([
            [
                'id' => 1,
                'question' => 'tugas Anda adalah menggambar manusia, pohon dan rumah dalam satu kertas tersebut.'
            ],
        ]);
    }
}
