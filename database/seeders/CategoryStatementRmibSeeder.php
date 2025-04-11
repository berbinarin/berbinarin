<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryStatementRmibSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('category_statement_rmib')->insert([
            [
                'name' => 'outdoor',
                'description' => 'Pekerjaan yang aktivitasnya dilakukan diluar atau udara terbuka, atau pekerjaan yang tidak berhubungan dengan hal-hal yang rutin sifatnya.
<br>Contoh: petani, penjaga hutan, guru olah raga, juru ukur, tukang kebun, dan lainnya.'
            ],

            [
                'name' => 'mechanical',
                'description' => 'Pekerjaan yang berhubungan dengan atau menggunakan mesin-mesin, alat-alat dan daya mekanik.
<br>Contoh: insinyur sipil, petugas pompa bensin, montir radio, ahli reparasi jam, dan lainnya.'
            ],

            [
                'name' => 'computational',
                'description' => 'Pekerjaan yang berhubungan dengan angka-angka.
<br>Contoh: akuntan, ahli statistik, auditor, kasir, guru ilmu pasti, pegawai pajak, dan lainnya.'
            ],

            [
                'name' => 'science',
                'description' => 'Pekerjaan yang berhubungan dengan keaktifan dalam hal analisa dan penyelidikan, eksperimen, kimia dan ilmu pengetahuan pada umumnya.
<br>Contoh: ilmuwan, ahli botani, ahli pertanian, asisten laboratorium, ahli biologi, dan lainnya.'
            ],

            [
                'name' => 'personal contact',
                'description' => 'Pekerjaan yang berhubungan dengan manusia, diskusi, membujuk, dan bergaul dengan orang lain. Pada dasarnya adalah suatu pekerjaan yang membutuhkan kontak dengan orang lain.
<br>Contoh: manager bidang penjualan, penyiar radio, salesman, petugas humas, agen biro iklan, dan lainnya.'
            ],

            [
                'name' => 'aesthetic',
                'description' => 'Pekerjaan yang berhubungan dengan hal-hal yang bersifat seni dan menciptakan sesuatu.
<br>Contoh: seniman, artis komersil, fotografer, penata panggung, guru kesenian, perancang pakaian, dan lainnya.'
            ],

            [
                'name' => 'musical',
                'description' => 'Pekerjaan yang berhubungan dengan minat memainkan alat-alat musik atau untuk mendengarkan orang lain bernyanyi atau membaca sesuatu yang berhubungan dengan musik, termasuk penghargaan terhadap musik.
<br>Contoh: musisi, pianis konser, komponis, guru musik, pemain organ, pemimpin band, dan lainnya.'
            ],

            [
                'name' => 'literacy',
                'description' => 'Pekerjaan yang berhubungan dengan buku-buku, kegiatan membaca, dan mengarang.
<br>Contoh: wartawan, pengarang, penulis drama, penyair, ahli sejarah, ahli perpustakaan, kritikus, dan lainnya.'
            ],

            [
                'name' => 'social service',
                'description' => 'Pekerjaan yang berhubungan dengan minat terhadap kesejahteraan penduduk, dengan keinginan untuk menolong dan membimbing/menasehati tentang problem dan kesulitan mereka. Berhubungan dengan keinginan untuk mengerti orang lain, dan mempunyai ide yang besar atau kuat tentang pelayanan.
<br>Contoh: guru SD, psikolog, pekerja sosial, organisator kepramukaan, pejabat klub remaja, petugas kesejahteraan social, dan lainnya.'
            ],

            [
                'name' => 'clerical',
                'description' => 'Pekerjaan yang berhubungan dengan minat terhadap tugas-tugas rutin yang menuntut ketepatan.
<br>Contoh: manager bank, petugas arsip, pegawai kantor, juru ketik, pegawai pos, sekertaris pribadi, dan lainnya.'
            ],

            [
                'name' => 'practical',
                'description' => 'Pekerjaan yang berhubungan dengan minat terhadap pekerjaan yang praktis, karya pertukangan dan yang memerlukan keterampilan.
<br>Contoh: tukang kayu, penjahit, juru masak, penata rambut, tukang ledeng, ahli sepatu, ahli bangunan, dan lainnya.'
            ],

            [
                'name' => 'medical',
                'description' => 'Pekerjaan yang berhubungan dengan minat terhadap pengobatan, mengurangi akibat dari pada penyakit, penyembuhan, dan didalam bidang medis serta hal-hal biologis pada umumnya.
<br>Contoh: dokter, ahli bedah, apoteker, mantri kesehatan, ahli kaca mata, perawat orang tua, perawat pusat rehabilitasi, suster, dan lainnya.'
            ],

        ]);
    }
}
