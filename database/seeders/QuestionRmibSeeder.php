<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionRmibSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
DB::table('question_rmib')->insert(        [
    [
        'subtest' => 'A',
        'instruction' => 'Tim mengadakan persiapan perjalanan. Rapat-rapat perlu diadakan. Dana dari sponsor, kendaraan, peralatan dan sebagainya perlu diurus.<br><br>Bacalah terlebih dahulu semua tugas yang ada, lalu urutkan tugas yang paling Anda senangi dengan menggunakan opsi "urutan __". Pastikan tidak ada pekerjaan yang mendapat urutan yang sama.
'
    ],
    [
        'subtest' => 'B',
        'instruction' => 'Anggota yang melakukan tawar-menawar dana mengabarkan bahwa keduabelasan Anda diminta membantu pelaksanaan "bazar malam" untuk menjual barang-barang simpanan sponsor. Kedua-belasan Anda akan mendapat 20% hasil penjualan sebagai tambahan bekal.<br><br>Pilih sendiri tugas yang Anda sukai.'
    ],
    [
        'subtest' => 'C',
        'instruction' => 'Persiapan berjalan mulus. Perjalanan juga menyenangkan. Di Kecamatan Depok, Pak Camat meminta agar tim WKN membenahi wisma padepokan KLH tempat tim Anda menginap serta mengadakan pameran dan kampanye KLH.<br><br>Urutkan pilihan tugas Anda.'
    ],
    [
        'subtest' => 'D',
        'instruction' => 'Kampanye di Wisma direncanakan terdiri atas beberapa acara, antara lain penghijauan, kependudukan, dan masalah polusi.<br><br>Urutkan tugas-tugas yang Anda pilih.'
    ],
    [
        'subtest' => 'E',
        'instruction' => 'Bagi para remaja dan anak-anak, KLH diperkenalkan dengan mengadakan berbagai lomba.<br><br>Urutkan pilihan tugas anda.'
    ],
    [
        'subtest' => 'F',
        'instruction' => 'Guru SD perlu mendapat pengetahuan lebih mendalam mengenai KLH. Mereka mendapat penataran, dan Anda-Anda perlu menggantikan tugas mereka.<br><br>Urutkan pilihan Anda.'
    ],
    [
        'subtest' => 'G',
        'instruction' => 'Tim Anda diminta menjadi agen rahasia untuk menyelidiki satu keluarga pedagang kaya raya yang diduga terlibat dalam masalah narkotika. Keluarga ini akan mengadakan pesta besar-besaran di salah satu pulau di Pulau Seribu. Setiap anggota tim menyamar sebagai petugas.<br><br>Urutkan pilihan tugas Anda.'
    ],
    [
        'subtest' => 'H',
        'instruction' => 'Di suatu daerah, terjadi musibah gempa yang diikuti dangan tanah longsor yang melanda daerah pemukiman. Tim Anda diminta membantu.<br><br>Urutkan tugas pilihan Anda.'
    ],
]);
        
    }
}
