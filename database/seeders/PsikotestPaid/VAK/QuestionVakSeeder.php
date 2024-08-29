<?php

namespace Database\Seeders\PsikotestPaid\VAK;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class QuestionVakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('question_vaks')->insert([
            [
                'id' => 1,
                'question_text' => 'Saya menikmati mencorat-coret, dan bahkan buku catatan saya penuh dengan gambar di dalamnya.',
                'category_question_vak_id' => 1,
                'created_at' => now(),
            ],
            [
                'id' => 2,
                'question_text' => 'Saya akan lebih baik dalam mengingat sesuatu jika saya menuliskannya.',
                'category_question_vak_id' => 1,
                'created_at' => now(),
            ],
            [
                'id' => 3,
                'question_text' => 'Saya akan tersesat atau terlambat jika seseorang memberitahu saya untuk menuju ke suatu tempat baru dan saya tidak menuliskan petunjuknya.',
                'category_question_vak_id' => 1,
                'created_at' => now(),
            ],
            [
                'id' => 4,
                'question_text' => 'Ketika mencoba mengingat nomor telepon seseorang, atau mengingat sesuatu yang baru, saya menghubungkannya dengan sebuah gambar atau simbol di dalam pikiran.',
                'category_question_vak_id' => 1,
                'created_at' => now(),
            ],
            [
                'id' => 5,
                'question_text' => 'Jika saya mengikuti suatu ujian, saya dapat mengingat halaman buku teks dan dimana letak jawabannya berada.',
                'category_question_vak_id' => 1,
                'created_at' => now(),
            ],
            [
                'id' => 6,
                'question_text' => 'Melihat seseorang sambil mendengarkan, membuat saya tetap fokus.',
                'category_question_vak_id' => 1,
                'created_at' => now(),
            ],
            [
                'id' => 7,
                'question_text' => 'Menggunakan kartu bantuan saat belajar membantu saya mengingat materi untuk ujian.',
                'category_question_vak_id' => 1,
                'created_at' => now(),
            ],
            [
                'id' => 8,
                'question_text' => 'Sulit bagi saya untuk mengerti apa yang orang katakan manakala di saat yang sama ada seseorang yang berbicara atau bermain musik.',
                'category_question_vak_id' => 1,
                'created_at' => now(),
            ],
            [
                'id' => 9,
                'question_text' => 'Sulit bagi saya untuk mengerti sebuah lelucon ketika seseorang menceritakannya kepada saya.',
                'category_question_vak_id' => 1,
                'created_at' => now(),
            ],
            [
                'id' => 10,
                'question_text' => 'Lebih baik bagi saya untuk bekerja di tempat yang sepi.',
                'category_question_vak_id' => 1,
                'created_at' => now(),
            ],
            [
                'id' => 11,
                'question_text' => 'Tulisan tangan saya tidak terlihat rapi. Catatan saya dipenuhi dengan coretan dan hapusan.',
                'category_question_vak_id' => 2,
                'created_at' => now(),
            ],
            [
                'id' => 12,
                'question_text' => 'Jika saya sedang membaca, saya harus dibantu oleh jari untuk menunjuk ke arah bacaan.',
                'category_question_vak_id' => 2,
                'created_at' => now(),
            ],
            [
                'id' => 13,
                'question_text' => 'Catatan saya berisi tulisan yang sangat kecil, terdapat bercak kotoran atau salinan yang buruk ada pada tulisan saya.',
                'category_question_vak_id' => 2,
                'created_at' => now(),
            ],
            [
                'id' => 14,
                'question_text' => 'Saya mengerti bagaimana cara mengerjakan sesuatu jika seseorang menjelaskan langsung kepada saya, daripada harus saya harus membacanya buku petunjuknya sendiri.',
                'category_question_vak_id' => 2,
                'created_at' => now(),
            ],
            [
                'id' => 15,
                'question_text' => 'Saya lebih mudah mengingat dari hal-hal yang saya dengar,dibandingkan dari hal-hal yang saya lihat atau saya baca.',
                'category_question_vak_id' => 2,
                'created_at' => now(),
            ],
            [
                'id' => 16,
                'question_text' => 'Menulis sangat melelahkan karena saya menekan terlalu keras pensil.',
                'category_question_vak_id' => 2,
                'created_at' => now(),
            ],
            [
                'id' => 17,
                'question_text' => 'Mata saya mudah lelah, meskipun dokter mata bilang kalau mata saya baik-baik saja.',
                'category_question_vak_id' => 2,
                'created_at' => now(),
            ],
            [
                'id' => 18,
                'question_text' => 'Ketika saya membaca, saya sering keliru membaca kata-kata yang mempunyai bunyi serupa.',
                'category_question_vak_id' => 2,
                'created_at' => now(),
            ],
            [
                'id' => 19,
                'question_text' => 'Sulit bagi saya untuk membaca tulisan tangan orang lain.',
                'category_question_vak_id' => 2,
                'created_at' => now(),
            ],
            [
                'id' => 20,
                'question_text' => 'Jika saya mempunyai pilihan untuk mempelajari informasi baru melalui penjelasan guru atau buku, saya akan memilih untuk mendengarkan dari guru daripada membaca dari buku.',
                'category_question_vak_id' => 2,
                'created_at' => now(),
            ],
            [
                'id' => 21,
                'question_text' => 'Saya tidak suka membaca petunjuk pengerjaan suatu tugas, saya lebih suka untuk langsung mulai melaksanakannya.',
                'category_question_vak_id' => 3,
                'created_at' => now(),
            ],
            [
                'id' => 22,
                'question_text' => 'Saya belajar tentang sesuatu secara lebih baik pada saat saya memiliki kesempatan untuk mencoba melakukannya dan menunjukkan kepada orang lain cara melakukannya.',
                'category_question_vak_id' => 3,
                'created_at' => now(),
            ],
            [
                'id' => 23,
                'question_text' => 'Saya tidak terbiasa untuk belajar di meja belajar.',
                'category_question_vak_id' => 3,
                'created_at' => now(),
            ],
            [
                'id' => 24,
                'question_text' => 'Ketika menyelesaikan suatu permasalahan biasanya saya lebih sering mencoba-coba untuk menyelesaikannya daripada menggunakan buku panduan untuk memecahkannya.',
                'category_question_vak_id' => 3,
                'created_at' => now(),
            ],
            [
                'id' => 25,
                'question_text' => 'Sebelum saya mengikuti buku petunjuk, ada baiknya saya melihat orang lain melaksanakannya terlebih dahulu.',
                'category_question_vak_id' => 3,
                'created_at' => now(),
            ],
            [
                'id' => 26,
                'question_text' => 'Saya membutuhkan lebih banyak istirahat ketika sedang belajar.',
                'category_question_vak_id' => 3,
                'created_at' => now(),
            ],
            [
                'id' => 27,
                'question_text' => 'Saya tidak pandai dalam memberikan penjelasan atau arahan secara lisan.',
                'category_question_vak_id' => 3,
                'created_at' => now(),
            ],
            [
                'id' => 28,
                'question_text' => 'Saya tidak mudah tersesat, bahkan di lingkungan yang tidak pernah saya datangi.',
                'category_question_vak_id' => 3,
                'created_at' => now(),
            ],
            [
                'id' => 29,
                'question_text' => 'Saya bisa berpikir lebih baik ketika saya diberikan kebebasan untuk bergerak.',
                'category_question_vak_id' => 3,
                'created_at' => now(),
            ],
            [
                'id' => 30,
                'question_text' => 'Ketika saya tidak dapat memikirkan kata-kata tertentu, saya akan banyak menggunakan tangan untuk mengisyaratkan sesuatu dan menyebut sesuatu seperti “ehm-ah-eh”.',
                'category_question_vak_id' => 3,
                'created_at' => now(),
            ],
        ]);
    }
}
