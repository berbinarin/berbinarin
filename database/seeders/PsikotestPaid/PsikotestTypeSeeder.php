<?php

namespace Database\Seeders\PsikotestPaid;

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
                'description' => 'Tes ini bertujuan untuk mengevaluasi kesiapan SobatBinar dalam menjalani pernikahan dengan mengidentifikasi aspek-aspek psikologis dan kepribadian.',
                'price' => 299000,
                'category_psikotest_type_id' => 1,
            ],
            [
                'id' => 2,
                'name' => 'Tes kesiapan menjadi orang tua',
                'description' => 'Tes ini bertujuan untuk menilai kesiapan SobatBinar dalam menjalani peran sebagai orang tua dengan mengidentifikasi aspek kepribadian.',
                'price' => 299000,
                'category_psikotest_type_id' => 1,
            ],
            [
                'id' => 3,
                'name' => 'Tes kecocokan pasangan',
                'description' => 'Tes ini membantu dalam menilai kesesuaian antara dua individu dalam sebuah hubungan dengan mengidentifikasi aspek kepribadian.',
                'price' => 299000,
                'category_psikotest_type_id' => 1,
            ],
            [
                'id' => 4,
                'name' => 'Tes stress',
                'description' => 'Membantu SobatBinar mengetahui gejala dan tingkat stres yang sedang dialami.',
                'price' => 159999,
                'category_psikotest_type_id' => 1,
            ],
            [
                'id' => 5,
                'name' => 'Tes depresi',
                'description' => 'Membantu SobatBinar untuk mengetahui gejala dan tingkat depresi yang dialami.',
                'price' => 159999,
                'category_psikotest_type_id' => 1,
            ],
            [
                'id' => 6,
                'name' => 'Tes kecemasan',
                'description' => 'Membantu SobatBinar untuk mengetahui gejala dan tingkat kecemasan.',
                'price' => 159999,
                'category_psikotest_type_id' => 1,
            ],
            [
                'id' => 7,
                'name' => 'Tes kecemasan +',
                'description' => 'Membantu SobatBinar untuk mengetahui gejala dan tingkat kecemasan disertai dengan konseling bersama psikolog.',
                'price' => 299000,
                'category_psikotest_type_id' => 1,
            ],
            [
                'id' => 8,
                'name' => 'Tes fungsi kognitif',
                'description' => 'Tes ini bertujuan untuk mengevaluasi kemampuan kognitif seseorang, seperti kemampuan problem solving, pemahaman, dan proses berpikir.',
                'price' => 129999,
                'category_psikotest_type_id' => 1,
            ],
            [
                'id' => 9,
                'name' => 'Tes memori',
                'description' => 'Membantu SobatBinar untuk menilai kemampuan memori, seperti daya ingat jangka pendek dan jangka panjang.',
                'price' => 129999,
                'category_psikotest_type_id' => 1,
            ],
            [
                'id' => 10,
                'name' => 'Tes kepribadian gratis',
                'description' => '',
                'price' => 0,
                'category_psikotest_type_id' => 1,
            ],
            [
                'id' => 11,
                'name' => 'Tes demensia',
                'description' => 'Tes ini bertujuan untuk menilai kemungkinan adanya demensia.',
                'price' => 129999,
                'category_psikotest_type_id' => 1,
            ],
            [
                'id' => 12,
                'name' => 'Tes memori',
                'description' => 'Membantu SobatBinar untuk menilai kemampuan memori, seperti daya ingat jangka pendek dan jangka panjang.',
                'price' => 129999,
                'category_psikotest_type_id' => 2,
            ],
            [
                'id' => 13,
                'name' => 'Tes Self-love',
                'description' => 'Membantu SobatBinar memahami diri sendiri, khususnya dari aspek hubungan sosial, sikap, dan aktivitas.',
                'price' => 99000,
                'category_psikotest_type_id' => 2,
            ],
            [
                'id' => 14,
                'name' => 'Tes demensia',
                'description' => 'Tes ini bertujuan untuk menilai kemungkinan adanya demensia.',
                'price' => 129999,
                'category_psikotest_type_id' => 2,
            ],
            [
                'id' => 15,
                'name' => 'Tes stress',
                'description' => 'Membantu SobatBinar mengetahui gejala dan tingkat stres yang sedang dialami.',
                'price' => 159999,
                'category_psikotest_type_id' => 2,
            ],
            [
                'id' => 16,
                'name' => 'Tes depresi',
                'description' => 'Membantu SobatBinar untuk mengetahui gejala dan tingkat depresi yang dialami.',
                'price' => 159999,
                'category_psikotest_type_id' => 2,
            ],
            [
                'id' => 17,
                'name' => 'Tes kecemasan',
                'description' => 'Membantu SobatBinar untuk mengetahui gejala dan tingkat kecemasan.',
                'price' => 159999,
                'category_psikotest_type_id' => 2,
            ],
            [
                'id' => 18,
                'name' => 'Tes kecemasan +',
                'description' => 'Membantu SobatBinar untuk mengetahui gejala dan tingkat kecemasan disertai dengan konseling bersama psikolog.',
                'price' => 299000,
                'category_psikotest_type_id' => 2,
            ],
            [
                'id' => 19,
                'name' => 'Tes fungsi kognitif',
                'description' => 'Tes ini bertujuan untuk mengevaluasi kemampuan kognitif seseorang, seperti kemampuan problem solving, pemahaman, dan proses berpikir.',
                'price' => 129999,
                'category_psikotest_type_id' => 2,
            ],
            [
                'id' => 20,
                'name' => 'Paket WOW Gaya Belajar',
                'description' => 'Membantu SobatBinar dalam mengenai gaya belajar yang dominan, sehingga dapat meningkatkan efektivitas dalam belajar.',
                'price' => 99000,
                'category_psikotest_type_id' => 3,
            ],
            [
                'id' => 21,
                'name' => 'Paket Hemat Cita-cita',
                'description' => 'Membantu SobatBinar mengenali jenis pekerjaan yang sesuai dengan kepribadian SobatBinar.',
                'price' => 99000,
                'category_psikotest_type_id' => 3,
            ],
            [
                'id' => 22,
                'name' => 'Paket Lengkap Tes Kepribadian',
                'description' => 'Tes ini dapat membantu SobatBinar mengenali aspek-aspek psikologis individu, seperti sifat, perilaku, dan preferensi.',
                'price' => 129999,
                'category_psikotest_type_id' => 3,
            ],
            [
                'id' => 23,
                'name' => 'Tes memori',
                'description' => 'Membantu SobatBinar untuk menilai kemampuan memori, seperti daya ingat jangka pendek dan jangka panjang.',
                'price' => 129999,
                'category_psikotest_type_id' => 3,
            ],
            [
                'id' => 24,
                'name' => 'Paket Mini Tes Penjurusan',
                'description' => 'Membantu SobatBinar dalam mengetahui pilihan karir atau jurusan kuliah yang sesuai dengan kemampuan dan kepribadian.',
                'price' => 255500,
                'category_psikotest_type_id' => 3,
            ],
            [
                'id' => 25,
                'name' => 'Paket Gold Tes Penjurusan',
                'description' => 'Membantu SobatBinar dalam mengetahui pilihan karir atau jurusan kuliah yang sesuai dengan kemampuan, kepribadian, dan gaya belajar.',
                'price' => 319000,
                'category_psikotest_type_id' => 3,
            ],
            [
                'id' => 26,
                'name' => 'Paket Tahu Minat Bakat',
                'description' => '',
                'price' => 351000,
                'category_psikotest_type_id' => 3,
            ],
            [
                'id' => 27,
                'name' => 'Paket Lengkap Tes Penjurusan',
                'description' => 'Membantu SobatBinar dalam mengetahui pilihan karir atau jurusan kuliah yang sesuai dengan kemampuan, kepribadian, dan gaya belajar serta mendapatkan sesi konseling dengan psikolog.',
                'price' => 399000,
                'category_psikotest_type_id' => 3,
            ],
            [
                'id' => 28,
                'name' => 'Asesmen staf: Paket 1',
                'description' => '',
                'price' => 450000,
                'category_psikotest_type_id' => 4,
            ],
            [
                'id' => 29,
                'name' => 'Asesmen staf: Paket 2',
                'description' => '',
                'price' => 600000,
                'category_psikotest_type_id' => 4,
            ],
            [
                'id' => 30,
                'name' => 'Asesmen staf: Paket 3',
                'description' => '',
                'price' => 550000,
                'category_psikotest_type_id' => 4,
            ],
            [
                'id' => 31,
                'name' => 'Asesmen staf: Paket 4',
                'description' => '',
                'price' => 750000,
                'category_psikotest_type_id' => 4,
            ],
            [
                'id' => 32,
                'name' => 'Asesmen supervisor: Paket 1',
                'description' => '',
                'price' => 650000,
                'category_psikotest_type_id' => 4,
            ],
            [

                'id' => 33,
                'name' => 'Asesmen supervisor: Paket 2',
                'description' => '',
                'price' => 850000,
                'category_psikotest_type_id' => 4,
            ]
        ]);
    }
}
