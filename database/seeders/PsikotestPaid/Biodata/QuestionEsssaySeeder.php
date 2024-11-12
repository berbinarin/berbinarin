<?php

namespace Database\Seeders\PsikotestPaid\Biodata;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionEsssaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('question_essays')->insert([
            [
                'question_category_id' => 1,
                'question' => 'Sebutkan kelebihan/kekuatan dari pribadi Anda yang mendukung tugas anda saat ini(minimal 3)',
            ],
            [
                'question_category_id' => 1,
                'question' => 'Sebutkan faktor yang sering menghambat keberhasilan/kelancaran pelaksanaan tugas Anda saat ini!',
            ],
            [
                'question_category_id' => 1,
                'question' => 'Target capaian anda untuk 5 tahun ke depan',
            ],
            [
                'question_category_id' => 1,
                'question' => 'Tuliskan satu pengalaman keberhasilan anda dalam menjalankan tugas, yang menurut anda merupakan tugas yang sangat sulit. Jelaskan tugas tersebut dan faktor -faktor yang membantu anda menemukan penyelesaian atas tugas yang sulit tersebut',
            ],
            [
                'question_category_id' => 1,
                'question' => 'Apakah anda sudah pernah melakukan tes psikologi sebelumnya? Jika Ya, untuk keperluan apa?',
            ],
            [
                'question_category_id' => 2,
                'question' => 'Pelatihan yang pernah diikuti',
            ],
            [
                'question_category_id' => 2,
                'question' => 'Riwayat pekerjaan dalam 10 tahun terakhir',
            ],
            [
                'question_category_id' => 2,
                'question' => 'Sebutkan kelebihan/kekuatan dari pribadi Anda yang mendukung tugas anda saat ini! (Minimal 3)',
            ],
            [
                'question_category_id' => 2,
                'question' => 'Sebutkan faktor yang sering menghambat keberhasilan/kelancaran pelaksanaan tugas anda saat ini!',
            ],
            [
                'question_category_id' => 2,
                'question' => 'Target capaian anda untuk 5 tahun kedepan!',
            ],
            [
                'question_category_id' => 2,
                'question' => 'Tuliskan satu pengalaman keberhasilan anda dalam menjalankan tugas, yang menurut anda merupakan tugas yang sangat sulit. Jelaskan tugas tersebut dan faktor -faktor yang membantu anda menemukan penyelesaian atas tugas yang sulit tersebut',
            ],
            [
                'question_category_id' => 2,
                'question' => 'Sebutkan apa yang ingin anda lakukan tapi takut untuk mencoba',
            ],
            [
                'question_category_id' => 3,
                'question' => 'Sebutkan kelebihan/kekuatan dari pribadi Anda yang mendukung tugas Anda saat ini!',
            ],
            [
                'question_category_id' => 3,
                'question' => 'Sebutkan faktor yang sering menghambat keberhasilan/kelancaran pelaksanaan tugas anda saat ini!',
            ],
            [
                'question_category_id' => 3,
                'question' => 'Target pencapaian anda untuk lima (5) tahun ke depan',
            ],
            [
                'question_category_id' => 3,
                'question' => 'Tuliskan satu pengalaman keberhasilan anda dalam menjalankan tugas, yang menurut anda merupakan tugas yang sangat sulit. Jelaskan tugas tersebut dan faktor -faktor yang membantu anda menemukan penyelesaian atas tugas yang sulit tersebut',
            ],
            [
                'question_category_id' => 3,
                'question' => 'Sudah pernah melakukan pemeriksaan psikologis sebelumnya? Jika Iya, untuk keperluan apa?',
            ],
            [
                'question_category_id' => 3,
                'question' => 'Mengetahui informasi ini darimana?',
            ],
            [
                'question_category_id' => 3,
                'question' => 'Hubungan anda dengan komunitas?',
            ],
            [
                'question_category_id' => 4,
                'question' => 'Pelatihan yang pernah diikuti',
            ],
            [
                'question_category_id' => 4,
                'question' => 'Riwayat pekerjaan dalam 10 tahun terakhir',
            ],
            [
                'question_category_id' => 4,
                'question' => 'Sebutkan kelebihan/kekuatan dari pribadi Anda yang mendukung tugas Anda saat ini! (Minimal 3)',
            ],
            [
                'question_category_id' => 4,
                'question' => 'Sebutkan faktor yang sering menghambat keberhasilan/kelancaran pelaksanaan tugas anda saat ini!',
            ],
            [
                'question_category_id' => 4,
                'question' => 'Target capaian anda untuk lima (5) tahun ke depan',
            ],
            [
                'question_category_id' => 4,
                'question' => 'Tuliskan satu pengalaman keberhasilan anda dalam menjalankan tugas, yang menurut anda merupakan tugas yang sangat sulit. Jelaskan tugas tersebut dan faktor -faktor yang membantu anda menemukan penyelesaian atas tugas yang sulit tersebut',
            ],
            [
                'question_category_id' => 4,
                'question' => 'Sebutkan tujuan karier Anda di perusahaan!',
            ],
            [
                'question_category_id' => 4,
                'question' => 'Bagaimana langkah untuk mencapai tujuan tersebut?',
            ],
            [
                'question_category_id' => 5,
                'question' => 'Apakah saudara pernah melakukan pemeriksaan psikologis sebelumnya?',
            ],
            [
                'question_category_id' => 5,
                'question' => 'Jika pernah melakukan pemeriksaan psikologis, kapan pemeriksaan itu dilakukan?',
            ],
            [
                'question_category_id' => 5,
                'question' => 'Jika pernah melakukan pemeriksaan psikologis, dimana pemeriksaan itu dilakukan?',
            ],
            [
                'question_category_id' => 5,
                'question' => 'Jika pernah melakukan pemeriksaan psikologis, silakan saudara jelaskan mengenai hasil pemeriksaan psikologis yang pernah dilakukan. Apabila belum pernah, silahkan beri tanda (-)',
            ],
        ]);
    }
}
