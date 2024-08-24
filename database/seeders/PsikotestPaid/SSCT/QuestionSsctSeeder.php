<?php

namespace Database\Seeders\PsikotestPaid\SSCT;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class QuestionSsctSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('question_ssct')->insert([
            ['id' => 1, 'question' => 'Saya merasa bahwa Ayah saya jarang ...'],
            ['id' => 2, 'question' => 'Bila keadaan tidak menguntungkan bagi saya ...'],
            ['id' => 3, 'question' => 'Saya selalu mempunyai keinginan untuk ...'],
            ['id' => 4, 'question' => 'Umpamanya saya ditugaskan untuk ...'],
            ['id' => 5, 'question' => 'Bagi saya hari depan ...'],
            ['id' => 6, 'question' => 'Orang-orang di atas saya ...'],
            ['id' => 7, 'question' => 'Saya sadar bahwa hal tersebut janggal tetapi saya takut akan ...'],
            ['id' => 8, 'question' => 'Saya merasa bahwa seorang teman sejati ...'],
            ['id' => 9, 'question' => 'Waktu saya masih kecil ...'],
            ['id' => 10, 'question' => 'Saya gambarkan sebagai seorang wanita yang sempurna ...'],
            ['id' => 11, 'question' => 'Bila saya melihat seorang wanita dan lelaki bersama-sama ...'],
            ['id' => 12, 'question' => 'Dibandingkan dengan kebanyakan keluarga, keluarga saya ...'],
            ['id' => 13, 'question' => 'Di tempat kerja saya, saya paling cocok dengan ...'],
            ['id' => 14, 'question' => 'Ibu saya ...'],
            ['id' => 15, 'question' => 'Saya mau berbuat apa saja untuk melupakan waktu di mana saya ...'],
            ['id' => 16, 'question' => 'Sekiranya Ayah saya sudi ...'],
            ['id' => 17, 'question' => 'Saya yakin bahwa saya mempunyai kemampuan untuk ...'],
            ['id' => 18, 'question' => 'Saya dapat merasa betul-betul senang kalau ...'],
            ['id' => 19, 'question' => 'Bila orang kerja untuk saya ...'],
            ['id' => 20, 'question' => 'Saya menantikan dengan penuh harapan ...'],
            ['id' => 21, 'question' => 'Di sekolah guru-guru saya ...'],
            ['id' => 22, 'question' => 'Kebanyakan teman-teman tidak mengetahui bahwa saya takut akan ...'],
            ['id' => 23, 'question' => 'Saya tidak senang kepada orang yang ...'],
            ['id' => 24, 'question' => 'Dahulu saya ...'],
            ['id' => 25, 'question' => 'Saya kira kebanyakan anak perempuan ...'],
            ['id' => 26, 'question' => 'Perasaan saya mengenai kehidupan perkawinan adalah ...'],
            ['id' => 27, 'question' => 'Keluarga saya memperlakukan saya sebagai ...'],
            ['id' => 28, 'question' => 'Teman-teman sekerja saya adalah ...'],
            ['id' => 29, 'question' => 'Ibu saya dan saya ...'],
            ['id' => 30, 'question' => 'Kesalahan saya yang terbesar adalah ...'],
            ['id' => 31, 'question' => 'Saya ingin Ayah saya ...'],
            ['id' => 32, 'question' => 'Kelemahan saya yang terbesar adalah ...'],
            ['id' => 33, 'question' => 'Hasrat keinginan saya yang terpendam dalam hidup adalah ...'],
            ['id' => 34, 'question' => 'Orang-orang yang bekerja untuk saya ...'],
            ['id' => 35, 'question' => 'Pada suatu hari saya akan ...'],
            ['id' => 36, 'question' => 'Bila saya melihat majikan saya datang ...'],
            ['id' => 37, 'question' => 'Saya akan menghilangkan ketakutan saya akan ...'],
            ['id' => 38, 'question' => 'Orang-orang yang paling saya sukai ...'],
            ['id' => 39, 'question' => 'Andaikata saya muda kembali ...'],
            ['id' => 40, 'question' => 'Saya percaya kebanyakan wanita ...'],
            ['id' => 41, 'question' => 'Umpamakan saya mempunyai hubungan seksual ...'],
            ['id' => 42, 'question' => 'Kebanyakan keluarga yang saya kenal ...'],
            ['id' => 43, 'question' => 'Saya senang bekerja dengan orang yang ...'],
            ['id' => 44, 'question' => 'Saya kira kebanyakan Ibu ...'],
            ['id' => 45, 'question' => 'Waktu saya masih muda, saya merasa berdosa mengenai ...'],
            ['id' => 46, 'question' => 'Saya merasa bahwa Ayah saya adalah ...'],
            ['id' => 47, 'question' => 'Bila mengalami nasib malang ...'],
            ['id' => 48, 'question' => 'Dalam memberikan perintah pada orang lain saya ...'],
            ['id' => 49, 'question' => 'Yang paling saya inginkan dari hidup ...'],
            ['id' => 50, 'question' => 'Bila saya sudah lebih tua ...'],
            ['id' => 51, 'question' => 'Orang-orang yang saya anggap sebagai atasan saya ...'],
            ['id' => 52, 'question' => 'Rasa ketakutan kadang-kadang memaksa saya ...'],
            ['id' => 53, 'question' => 'Bila saya tidak ada, teman-teman saya ...'],
            ['id' => 54, 'question' => 'Kenangan yang paling jelas dalam hidup dari masa kanak-kanak ...'],
            ['id' => 55, 'question' => 'Yang paling tidak saya sukai mengenai wanita ...'],
            ['id' => 56, 'question' => 'Kehidupan seksual saya ...'],
            ['id' => 57, 'question' => 'Waktu saya masih seorang anak, keluarga saya ...'],
            ['id' => 58, 'question' => 'Orang-orang yang bekerja dengan saya ...'],
            ['id' => 59, 'question' => 'Saya suka kepada Ibu saya tetapi ...'],
            ['id' => 60, 'question' => 'Hal terburuk yang pernah saya lakukan ...'],
        ]);
    }
}
