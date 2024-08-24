<?php

namespace Database\Seeders\PsikotestPaid\DAP;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class QuestionDapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('question_dap')->insert([
            [
                'id' => 1,
                'question' => 'Gambar Manusia'
            ],
            [
                'id' => 2,
                'question' => 'Alasan menggambar'
            ]
        ]);
    }
}
