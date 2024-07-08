<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PsikotestTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('psikotest_types')->insert([
            [
                'id' => 1,
                'name' => 'Tes kesiapan pernikahan',
                'description' => 'Tes ini bertujuan untuk mengevaluasi kesiapan SobatBinar dalam menjalani pernikahan dengan mengidentifikasi aspek-aspek psikologis dan kepribadian.'
            ],
            [
                'id' => 2,
                'name' => 'Tes kesiapan menjadi orang tua',
                'description' => 'Tes ini bertujuan untuk menilai kesiapan SobatBinar dalam menjalani peran sebagai orang tua dengan mengidentifikasi aspek kepribadian.'
            ],
            [
                'id' => 3,
                'name' => 'Tes kecocokan pasangan',
                'description' => 'Tes ini membantu dalam menilai kesesuaian antara dua individu dalam sebuah hubungan dengan mengidentifikasi aspek kepribadian.'
            ],
            [
                'id' => 4,
                'name' => 'Tes stress',
                'description' => 'Membantu SobatBinar mengetahui gejala dan tingkat stres yang sedang dialami.'
            ],
            [
                'id' => 5,
                'name' => 'Tes depresi',
                'description' => 'Membantu SobatBinar untuk mengetahui gejala dan tingkat depresi yang dialami.'
            ],
            [
                'id' => 6,
                'name' => 'Tes kecemasan',
                'description' => 'Membantu SobatBinar untuk mengetahui gejala dan tingkat kecemasan.'
            ],
            [
                'id' => 7,
                'name' => 'Tes kecemasan +',
                'description' => 'Membantu SobatBinar untuk mengetahui gejala dan tingkat kecemasan disertai dengan konseling bersama psikolog.'
            ],
            [
                'id' => 8,
                'name' => 'Tes fungsi kognitif',
                'description' => 'Tes ini bertujuan untuk mengevaluasi kemampuan kognitif seseorang, seperti kemampuan problem solving, pemahaman, dan proses berpikir.'
            ],
            [
                'id' => 9,
                'name' => 'Tes memori',
                'description' => 'Membantu SobatBinar untuk menilai kemampuan memori, seperti daya ingat jangka pendek dan jangka panjang.'
            ],
            [
                'id' => 10,
                'name' => 'Tes demensia',
                'description' => 'Tes ini bertujuan untuk menilai kemungkinan adanya demensia.'
            ],
            [
                'id' => 11,
                'name' => 'Tes Self-love',
                'description' => 'Membantu SobatBinar memahami diri sendiri, khususnya dari aspek hubungan sosial, sikap, dan aktivitas.'
            ],
            [
                'id' => 12,
                'name' => 'Paket WOW Gaya Belajar',
                'description' => 'Membantu SobatBinar dalam mengenai gaya belajar yang dominan, sehingga dapat meningkatkan efektivitas dalam belajar.'
            ],
            [
                'id' => 13,
                'name' => 'Paket Hemat Cita-cita',
                'description' => 'Membantu SobatBinar mengenali jenis pekerjaan yang sesuai dengan kepribadian SobatBinar.'
            ],
            [
                'id' => 14,
                'name' => 'Paket Lengkap Tes Kepribadian',
                'description' => 'Tes ini dapat membantu SobatBinar mengenali aspek-aspek psikologis individu, seperti sifat, perilaku, dan preferensi.'
            ],
            [
                'id' => 15,
                'name' => 'Paket Mini Tes Penjurusan',
                'description' => 'Membantu SobatBinar dalam mengetahui pilihan karir atau jurusan kuliah yang sesuai dengan kemampuan dan kepribadian.'
            ],
            [
                'id' => 16,
                'name' => 'Paket Gold Tes Penjurusan',
                'description' => 'Membantu SobatBinar dalam mengetahui pilihan karir atau jurusan kuliah yang sesuai dengan kemampuan, kepribadian, dan gaya belajar.'
            ],
            [
                'id' => 17,
                'name' => 'Paket Lengkap Tes Penjurusan + Minat Bakat',
                'description' => 'Membantu SobatBinar dalam mengetahui pilihan karir atau jurusan kuliah yang sesuai dengan kemampuan, kepribadian, dan gaya belajar serta mendapatkan sesi konseling dengan psikolog.'
            ],
            [
                'id' => 18,
                'name' => 'Asesmen staf: Paket 1',
                'description' => ''
            ],
            [
                'id' => 19,
                'name' => 'Asesmen staf: Paket 2',
                'description' => ''
            ],
            [
                'id' => 20,
                'name' => 'Asesmen staf: Paket 3',
                'description' => ''
            ],
            [
                'id' => 21,
                'name' => 'Asesmen staf: Paket 4',
                'description' => ''
            ],
            [
                'id' => 22,
                'name' => 'Asesmen supervisor: Paket 1',
                'description' => ''
            ],
            [

                'id' => 23,
                'name' => 'Asesmen supervisor: Paket 2',
                'description' => ''
            ]
        ]);
    }
}
