<?php

namespace Database\Seeders\PsikotestPaid\TesEsai;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class QuestionTesEsaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('question_tes_esai')->insert([
            [
                'id' => 1,
                'question' => 'Jelaskan pandangan Anda mengenai peran Anda dalam perubahan ini nantinya dan apa saja yang harus dilakukan sebagai seorang karyawan di posisi tersebut?'
            ],
            [
                'id' => 2,
                'question' => 'Bagaimana cara Anda agar dapat menguasai prosedur kerja di posisi Anda?',
            ],
            [
                'id' => 3,
                'question' => 'Tuliskan 1 prestasi terbaik yang pernah Anda raih dalam 2 tahun terakhir!',
            ],
            [
                'id' => 4,
                'question' => 'Jika Anda perlu untuk menyelesaikan suatu urusan yang ada di rumah, sementara saat ini Anda sedang di tengah jam kerja, apa yang akan Anda lakukan?',
            ],
            [
                'id' => 5,
                'question' => 'Ketika Anda ditegur di depan pada staf lainnya oleh atasan, bagaimana reaksi Anda setelahnya?',
            ],
            [
                'id' => 6,
                'question' => 'Berikan satu contoh dimana Anda berhasil menyelesaikan tugas di dalam tim!',
            ],
        ]);
    }
}
