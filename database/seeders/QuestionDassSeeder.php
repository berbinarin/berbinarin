<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionDassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('question_dass')->insert([
            [
                "id" => 1,
                "category" => "depression",
                "question_order" => 1,
                "question" => "Saya merasa bahwa diri saya menjadi marah karena hal-hal sepele.",
                "created_at" => now()
            ],
            [
                "id" => 2,
                "category" => "anxiety",
                "question_order" => 2,
                "question" => "Saya merasa bibir saya sering kering.",
                "created_at" => now()
            ],
            [
                "id" => 3,
                "category" => "stress",
                "question_order" => 3,
                "question" => "Saya sama sekali tidak dapat merasakan perasaan positif.",
                "created_at" => now()
            ],
            [
                "id" => 4,
                "category" => "anxiety",
                "question_order" => 4,
                "question" => "Saya mengalami kesulitan bernafas (misalnya: seringkali terengah-engah atau tidak dapat bernafas padahal tidak melakukan aktivitas fisik sebelumnya).",
                "created_at" => now()
            ],
            [
                "id" => 5,
                "category" => "stress",
                "question_order" => 5,
                "question" => "Saya sepertinya tidak kuat lagi untuk melakukan suatu kegiatan.",
                "created_at" => now()
            ],
            [
                "id" => 6,
                "category" => "depression",
                "question_order" => 6,
                "question" => "Saya cenderung bereaksi berlebihan terhadap suatu situasi.",
                "created_at" => now()
            ],
            [
                "id" => 7,
                "category" => "anxiety",
                "question_order" => 7,
                "question" => "Saya merasa goyah (misalnya, kaki terasa mau 'copot').",
                "created_at" => now()
            ],
            [
                "id" => 8,
                "category" => "depression",
                "question_order" => 8,
                "question" => "Saya merasa sulit untuk bersantai.",
                "created_at" => now()
            ],
            [
                "id" => 9,
                "category" => "anxiety",
                "question_order" => 9,
                "question" => "Saya menemukan diri saya berada dalam situasi yang membuat saya merasa sangat cemas dan saya akan merasa sangat lega jika semua ini berakhir. ",
                "created_at" => now()
            ],
            [
                "id" => 10,
                "category" => "stress",
                "question_order" => 10,
                "question" => "Saya merasa tidak ada hal yang dapat diharapkan di masa depan. ",
                "created_at" => now()
            ],
            [
                "id" => 11,
                "category" => "depression",
                "question_order" => 11,
                "question" => "Saya menemukan diri saya mudah merasa kesal.",
                "created_at" => now()
            ],
            [
                "id" => 12,
                "category" => "depression",
                "question_order" => 12,
                "question" => "Saya merasa telah menghabiskan banyak energi untuk merasa cemas.",
                "created_at" => now()
            ],
            [
                "id" => 13,
                "category" => "stress",
                "question_order" => 13,
                "question" => "Saya merasa sedih dan tertekan.",
                "created_at" => now()
            ],
            [
                "id" => 14,
                "category" => "depression",
                "question_order" => 14,
                "question" => "Saya menemukan diri saya menjadi tidak sabar ketika mengalami penundaan (misalnya: kemacetan lalu lintas, menunggu sesuatu).",
                "created_at" => now()
            ],
            [
                "id" => 15,
                "category" => "anxiety",
                "question_order" => 15,
                "question" => "Saya merasa lemas seperti mau pingsan.",
                "created_at" => now()
            ],
            [
                "id" => 16,
                "category" => "stress",
                "question_order" => 16,
                "question" => "Saya merasa saya kehilangan minat akan segala hal.",
                "created_at" => now()
            ],
            [
                "id" => 17,
                "category" => "stress",
                "question_order" => 17,
                "question" => "Saya merasa bahwa saya tidak berharga sebagai seorang manusia.",
                "created_at" => now()
            ],
            [
                "id" => 18,
                "category" => "depression",
                "question_order" => 18,
                "question" => "Saya merasa bahwa saya mudah tersinggung.",
                "created_at" => now()
            ],
            [
                "id" => 19,
                "category" => "anxiety",
                "question_order" => 19,
                "question" => "Saya berkeringat secara berlebihan (misalnya: tangan berkeringat), padahal temperatur tidak panas atau tidak melakukan aktivitas fisik sebelumnya. ",
                "created_at" => now()
            ],
            [
                "id" => 20,
                "category" => "anxiety",
                "question_order" => 20,
                "question" => "Saya merasa takut tanpa alasan yang jelas.",
                "created_at" => now()
            ],
            [
                "id" => 21,
                "category" => "stress",
                "question_order" => 21,
                "question" => "Saya merasa bahwa hidup tidak bermanfaat.",
                "created_at" => now()
            ],
        ]);
    }
}
