<?php

namespace Database\Seeders\PsikotestPaid\HTP;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class QuestionHtpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('question_htp')->insert([
            [
                'question' => 'Sebelum masuk ke subtes selanjutnya, silahkan kesampingkan dulu kertas yang pertama dan kertas kedua. Kemudian silahkan ambil kertas HVS yang ketiga. pastikan bahwa kertas tersebut telah terisi identitas.',
            ],
            [
                'question' => 'Pada tes ini, <b>tugas Anda adalah menggambar manusia, pohon dan rumah dalam satu kertas tersebut.</b>'
            ],
            [
                'question' => 'Apabila sudah selesai, silahkan pada lembaran kertas yang ada identitasnya atau di halaman kertas sebaliknya, <b>tuliskan atau ceritakan gambar yang baru Anda gambar dengan satu kalimat. Satu kalimat yang menggambarkan gambar yang telah anda buat.</b>'
            ],
            [
                'question' => 'Jika sudah, silakan foto kedua sisi kertas tersebut, baik bagian identitas maupun gambar Anda dan jika sudah di foto, silahkan mengunggah foto tersebut.'
            ]
        ]);
    }
}
