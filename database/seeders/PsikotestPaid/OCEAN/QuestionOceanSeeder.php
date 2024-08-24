<?php

namespace Database\Seeders\PsikotestPaid\OCEAN;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionOceanSeeder extends Seeder
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
        DB::table('question_ocean')->insert([
            [
                'id' => 1,
                'rn' => 'N',
                'question' => 'Saya mudah berteman dengan siapapun',
                'dimension_ocean_id' => 3,
            ],
            [
                'id' => 2,
                'rn' => 'R',
                'question' => 'Saya suka mencari-cari kesalahan orang lain',
                'dimension_ocean_id' => 1,
            ],
            [
                'id' => 3,
                'rn' => 'N',
                'question' => 'Saya melakukan pekerjaan secara menyeluruh hingga selesai',
                'dimension_ocean_id' => 2,
            ],
            [
                'id' => 4,
                'rn' => 'N',
                'question' => 'Saya sering merasa sedih',
                'dimension_ocean_id' => 4,
            ],
            [
                'id' => 5,
                'rn' => 'N',
                'question' => 'Saya selalu memiliki ide-ide baru',
                'dimension_ocean_id' => 5,
            ],
            [
                'id' => 6,
                'rn' => 'R',
                'question' => 'Saya sering merasa tertinggal',
                'dimension_ocean_id' => 3,
            ],
            [
                'id' => 7,
                'rn' => 'N',
                'question' => 'Saya lebih suka untuk membantu orang lain, dibandingkan mementingkan diri sendiri',
                'dimension_ocean_id' => 1,
            ],
            [
                'id' => 8,
                'rn' => 'R',
                'question' => 'Saya seorang yang ceroboh',
                'dimension_ocean_id' => 2,
            ],
            [
                'id' => 9,
                'rn' => 'R',
                'question' => 'Saya mampu menangani stres dengan baik',
                'dimension_ocean_id' => 4,
            ],
            [
                'id' => 10,
                'rn' => 'N',
                'question' => 'Saya memiliki rasa ingin tahu yang tinggi',
                'dimension_ocean_id' => 5,
            ],
            [
                'id' => 11,
                'rn' => 'N',
                'question' => 'Saya seorang yang energik',
                'dimension_ocean_id' => 3,
            ],
            [
                'id' => 12,
                'rn' => 'R',
                'question' => 'Saya suka memulai pertengkaran dengan orang lain',
                'dimension_ocean_id' => 1,
            ],
            [
                'id' => 13,
                'rn' => 'N',
                'question' => 'Saya handal dalam pekerjaan yang saya lakukan',
                'dimension_ocean_id' => 2,
            ],
            [
                'id' => 14,
                'rn' => 'N',
                'question' => 'Saya seorang yang tegang',
                'dimension_ocean_id' => 4,
            ],
            [
                'id' => 15,
                'rn' => 'N',
                'question' => 'Saya seorang yang pemikir',
                'dimension_ocean_id' => 5,
            ],
            [
                'id' => 16,
                'rn' => 'N',
                'question' => 'Saya seorang yang selalu meramaikan pesta',
                'dimension_ocean_id' => 3,
            ],
            [
                'id' => 17,
                'rn' => 'N',
                'question' => 'Saya seorang yang pemaaf',
                'dimension_ocean_id' => 1,
            ],
            [
                'id' => 18,
                'rn' => 'R',
                'question' => 'Saya cenderung tidak terorganisir',
                'dimension_ocean_id' => 2,
            ],
            [
                'id' => 19,
                'rn' => 'N',
                'question' => 'Saya selalu merasa khawatir terhadap berbagai hal',
                'dimension_ocean_id' => 4,
            ],
            [
                'id' => 20,
                'rn' => 'N',
                'question' => 'Saya seorang yang imaginatif',
                'dimension_ocean_id' => 5,
            ],
            [
                'id' => 21,
                'rn' => 'R',
                'question' => 'Saya seorang yang tenang',
                'dimension_ocean_id' => 3,
            ],
            [
                'id' => 22,
                'rn' => 'N',
                'question' => 'Saya mudah percaya dengan orang lain',
                'dimension_ocean_id' => 1,
            ],
            [
                'id' => 23,
                'rn' => 'R',
                'question' => 'Saya seorang yang pemalas',
                'dimension_ocean_id' => 2,
            ],
            [
                'id' => 24,
                'rn' => 'N',
                'question' => 'Saya tidak mudah marah',
                'dimension_ocean_id' => 4,
            ],
            [
                'id' => 25,
                'rn' => 'N',
                'question' => 'Saya suka menciptakan hal-hal yang baru/inventif',
                'dimension_ocean_id' => 5,
            ],
            [
                'id' => 26,
                'rn' => 'N',
                'question' => 'Saya seorang yang tegas',
                'dimension_ocean_id' => 3,
            ],
            [
                'id' => 27,
                'rn' => 'R',
                'question' => 'Saya lebih suka untuk menyendiri',
                'dimension_ocean_id' => 1,
            ],
            [
                'id' => 28,
                'rn' => 'N',
                'question' => 'Saya sukses dalam menyelesaikan tugas',
                'dimension_ocean_id' => 2,
            ],
            [
                'id' => 29,
                'rn' => 'N',
                'question' => 'Saya suka moody',
                'dimension_ocean_id' => 4,
            ],
            [
                'id' => 30,
                'rn' => 'N',
                'question' => 'Saya percaya terhadap pentingnya nilai seni dan estetika',
                'dimension_ocean_id' => 5,
            ],
            [
                'id' => 31,
                'rn' => 'R',
                'question' => 'Saya seorang yang pemalu',
                'dimension_ocean_id' => 3,
            ],
            [
                'id' => 32,
                'rn' => 'N',
                'question' => 'Saya perhatian dengan siapapun',
                'dimension_ocean_id' => 1,
            ],
            [
                'id' => 33,
                'rn' => 'N',
                'question' => 'Saya melakukan berbagai hal secara efisien',
                'dimension_ocean_id' => 2,
            ],
            [
                'id' => 34,
                'rn' => 'N',
                'question' => 'Saya mampu bersikap tenang di dalam situasi yang tegang',
                'dimension_ocean_id' => 4,
            ],
            [
                'id' => 35,
                'rn' => 'R',
                'question' => 'Saya lebih suka dengan rutinitas',
                'dimension_ocean_id' => 5,
            ],
            [
                'id' => 36,
                'rn' => 'N',
                'question' => 'Saya suka bersosialisasi dan jalan-jalan',
                'dimension_ocean_id' => 3,
            ],
            [
                'id' => 37,
                'rn' => 'R',
                'question' => 'Terkadang saya kasar dengan orang lain',
                'dimension_ocean_id' => 1,
            ],
            [
                'id' => 38,
                'rn' => 'N',
                'question' => 'Ketika saya memiliki rencana, saya cenderung menindaklanjutinya',
                'dimension_ocean_id' => 2,
            ],
            [
                'id' => 39,
                'rn' => 'N',
                'question' => 'Saya mudah merasa gugup',
                'dimension_ocean_id' => 4,
            ],
            [
                'id' => 40,
                'rn' => 'N',
                'question' => 'Saya suka merenung',
                'dimension_ocean_id' => 5,
            ],
            [
                'id' => 41,
                'rn' => 'R',
                'question' => 'Saya memiliki ketertarikan terhadap seni',
                'dimension_ocean_id' => 5,
            ],
            [
                'id' => 42,
                'rn' => 'N',
                'question' => 'Saya lebih suka bekerja sama dalam melakukan pekerjaan saya',
                'dimension_ocean_id' => 1,
            ],
            [
                'id' => 43,
                'rn' => 'R',
                'question' => 'Saya mudah terdistraksi',
                'dimension_ocean_id' => 2,
            ],
            [
                'id' => 44,
                'rn' => 'N',
                'question' => 'Saya ahli dalam seni, musik, atau sastra',
                'dimension_ocean_id' => 5,
            ]
        ]);
    }
}
