<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    /*
        1. Agreeableness,
        2. Conscientiousness,
        3. Extraversion,
        4. Neuroticism,
        5. Openness
     */
    public function run(): void
    {
        DB::table('questions')->insert([
            [
                'id' => 1,
                'rn' => 'N',
                'question_text' => 'Saya mudah berteman dengan siapapun',
                'dimension_id' => 3,
            ],
            [
                'id' => 2,
                'rn' => 'R',
                'question_text' => 'Saya suka mencari-cari kesalahan orang lain',
                'dimension_id' => 1,
            ],
            [
                'id' => 3,
                'rn' => 'N',
                'question_text' => 'Saya melakukan pekerjaan secara menyeluruh hingga selesai',
                'dimension_id' => 2,
            ],
            [
                'id' => 4,
                'rn' => 'N',
                'question_text' => 'Saya sering merasa sedih',
                'dimension_id' => 4,
            ],
            [
                'id' => 5,
                'rn' => 'N',
                'question_text' => 'Saya selalu memiliki ide-ide baru',
                'dimension_id' => 5,
            ],
            [
                'id' => 6,
                'rn' => 'R',
                'question_text' => 'Saya sering merasa tertinggal',
                'dimension_id' => 3,
            ],
            [
                'id' => 7,
                'rn' => 'N',
                'question_text' => 'Saya lebih suka untuk membantu orang lain, dibandingkan mementingkan diri sendiri',
                'dimension_id' => 1,
            ],
            [
                'id' => 8,
                'rn' => 'R',
                'question_text' => 'Saya seorang yang ceroboh',
                'dimension_id' => 2,
            ],
            [
                'id' => 9,
                'rn' => 'R',
                'question_text' => 'Saya mampu menangani stres dengan baik',
                'dimension_id' => 4,
            ],
            [
                'id' => 10,
                'rn' => 'N',
                'question_text' => 'Saya memiliki rasa ingin tahu yang tinggi',
                'dimension_id' => 5,
            ],
            [
                'id' => 11,
                'rn' => 'N',
                'question_text' => 'Saya seorang yang energik',
                'dimension_id' => 3,
            ],
            [
                'id' => 12,
                'rn' => 'R',
                'question_text' => 'Saya suka memulai pertengkaran dengan orang lain',
                'dimension_id' => 1,
            ],
            [
                'id' => 13,
                'rn' => 'N',
                'question_text' => 'Saya handal dalam pekerjaan yang saya lakukan',
                'dimension_id' => 2,
            ],
            [
                'id' => 14,
                'rn' => 'N',
                'question_text' => 'Saya seorang yang tegang',
                'dimension_id' => 4,
            ],
            [
                'id' => 15,
                'rn' => 'N',
                'question_text' => 'Saya seorang yang pemikir',
                'dimension_id' => 5,
            ],
            [
                'id' => 16,
                'rn' => 'N',
                'question_text' => 'Saya seorang yang selalu meramaikan pesta',
                'dimension_id' => 3,
            ],
            [
                'id' => 17,
                'rn' => 'N',
                'question_text' => 'Saya seorang yang pemaaf',
                'dimension_id' => 1,
            ],
            [
                'id' => 18,
                'rn' => 'R',
                'question_text' => 'Saya cenderung tidak terorganisir',
                'dimension_id' => 2,
            ],
            [
                'id' => 19,
                'rn' => 'N',
                'question_text' => 'Saya selalu merasa khawatir terhadap berbagai hal',
                'dimension_id' => 4,
            ],
            [
                'id' => 20,
                'rn' => 'N',
                'question_text' => 'Saya seorang yang imaginatif',
                'dimension_id' => 5,
            ],
            [
                'id' => 21,
                'rn' => 'R',
                'question_text' => 'Saya seorang yang tenang',
                'dimension_id' => 3,
            ],
            [
                'id' => 22,
                'rn' => 'N',
                'question_text' => 'Saya mudah percaya dengan orang lain',
                'dimension_id' => 1,
            ],
            [
                'id' => 23,
                'rn' => 'R',
                'question_text' => 'Saya seorang yang pemalas',
                'dimension_id' => 2,
            ],
            [
                'id' => 24,
                'rn' => 'N',
                'question_text' => 'Saya tidak mudah marah',
                'dimension_id' => 4,
            ],
            [
                'id' => 25,
                'rn' => 'N',
                'question_text' => 'Saya suka menciptakan hal-hal yang baru/inventif',
                'dimension_id' => 5,
            ],
            [
                'id' => 26,
                'rn' => 'N',
                'question_text' => 'Saya seorang yang tegas',
                'dimension_id' => 3,
            ],
            [
                'id' => 27,
                'rn' => 'R',
                'question_text' => 'Saya lebih suka untuk menyendiri',
                'dimension_id' => 1,
            ],
            [
                'id' => 28,
                'rn' => 'N',
                'question_text' => 'Saya sukses dalam menyelesaikan tugas',
                'dimension_id' => 2,
            ],
            [
                'id' => 29,
                'rn' => 'N',
                'question_text' => 'Saya suka moody',
                'dimension_id' => 4,
            ],
            [
                'id' => 30,
                'rn' => 'N',
                'question_text' => 'Saya percaya terhadap pentingnya nilai seni dan estetika',
                'dimension_id' => 5,
            ],
            [
                'id' => 31,
                'rn' => 'R',
                'question_text' => 'Saya seorang yang pemalu',
                'dimension_id' => 3,
            ],
            [
                'id' => 32,
                'rn' => 'N',
                'question_text' => 'Saya perhatian dengan siapapun',
                'dimension_id' => 1,
            ],
            [
                'id' => 33,
                'rn' => 'N',
                'question_text' => 'Saya melakukan berbagai hal secara efisien',
                'dimension_id' => 2,
            ],
            [
                'id' => 34,
                'rn' => 'N',
                'question_text' => 'Saya mampu bersikap tenang di dalam situasi yang tegang',
                'dimension_id' => 4,
            ],
            [
                'id' => 35,
                'rn' => 'R',
                'question_text' => 'Saya lebih suka dengan rutinitas',
                'dimension_id' => 5,
            ],
            [
                'id' => 36,
                'rn' => 'N',
                'question_text' => 'Saya suka bersosialisasi dan jalan-jalan',
                'dimension_id' => 3,
            ],
            [
                'id' => 37,
                'rn' => 'R',
                'question_text' => 'Terkadang saya kasar dengan orang lain',
                'dimension_id' => 1,
            ],
            [
                'id' => 38,
                'rn' => 'N',
                'question_text' => 'Ketika saya memiliki rencana, saya cenderung menindaklanjutinya',
                'dimension_id' => 2,
            ],
            [
                'id' => 39,
                'rn' => 'N',
                'question_text' => 'Saya mudah merasa gugup',
                'dimension_id' => 4,
            ],
            [
                'id' => 40,
                'rn' => 'N',
                'question_text' => 'Saya suka merenung',
                'dimension_id' => 5,
            ],
            [
                'id' => 41,
                'rn' => 'R',
                'question_text' => 'Saya memiliki ketertarikan terhadap seni',
                'dimension_id' => 5,
            ],
            [
                'id' => 42,
                'rn' => 'N',
                'question_text' => 'Saya lebih suka bekerja sama dalam melakukan pekerjaan saya',
                'dimension_id' => 1,
            ],
            [
                'id' => 43,
                'rn' => 'R',
                'question_text' => 'Saya mudah terdistraksi',
                'dimension_id' => 2,
            ],
            [
                'id' => 44,
                'rn' => 'N',
                'question_text' => 'Saya ahli dalam seni, musik, atau sastra',
                'dimension_id' => 5,
            ]
        ]);
    }
}
