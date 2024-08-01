<?php

namespace Database\Seeders\PsikotestPaid\BAUM;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class QuestionBaumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('question_baum')->insert([
            [
                'id' => 1,
                'question' => 'Pada tes ini, tugas Anda adalah menggambar sebuah pohon dan apabila Anda sudah selesai menggambar pohon, silahkan tuliskan nama pohon yang Anda gambar di halaman kertas yang ada identitasnya atau di halaman kertas sebaliknya.'
            ],
        ]);
    }
}
