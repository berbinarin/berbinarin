<?php

namespace App\Http\Controllers\Landing\AboutUs;

use App\Http\Controllers\Controller;

class AboutUsController extends Controller
{
    public function index()
    {
        $values = [
            [
                'vector' => 'assets/images/landing/asset-tentang/nilai-berbinar/jujur.svg',
                'nilai' => 'Jujur',
                'deskripsi' => 'Membangun kepercayaan dengan mengembangkan komunikasi dan hubungan yang jujur.'
            ],
            [
                'vector' => 'assets/images/landing/asset-tentang/nilai-berbinar/empati.svg',
                'nilai' => 'Empati',
                'deskripsi' => 'Memahami apa yang dirasakan orang lain, melihat dari sudut pandang orang tersebut, dan juga membayangkan diri sendiri berada pada posisi orang tersebut.'
            ],
            [
                'vector' => 'assets/images/landing/asset-tentang/nilai-berbinar/innovatif.svg',
                'nilai' => 'Inovatif',
                'deskripsi' => 'Menciptakan ide, pemikiran, dan cara baru untuk diterapkan dalam pelaksanaan dan penyelesaian pekerjaan.'
            ],
            [
                'vector' => 'assets/images/landing/asset-tentang/nilai-berbinar/terusbelajar.svg',
                'nilai' => 'Terus Belajar dan Rasa Ingin Tahu yang Tinggi',
                'deskripsi' => 'Mau untuk terus belajar untuk berkembang jadi lebih baik, dengan dilandasi rasa ingin tahu yang tinggi.'
            ],
            [
                'vector' => 'assets/images/landing/asset-tentang/nilai-berbinar/memberidampak.svg',
                'nilai' => 'Memberi Dampak',
                'deskripsi' => 'Memberikan pengaruh positif untuk lingkungan sekitar dan tetap berlandaskan pada kode etik yang berlaku.'
            ],
            [
                'vector' => 'assets/images/landing/asset-tentang/nilai-berbinar/inisiatif.svg',
                'nilai' => 'Inisiatif',
                'deskripsi' => 'Memulai suatu tindakan yang selaras dengan tujuan organisasi, namun tetap sesuai dengan fungsi dan wewenangnya.'
            ],
            [
                'vector' => 'assets/images/landing/asset-tentang/nilai-berbinar/kolaboratif.svg',
                'nilai' => 'Kolaboratif',
                'deskripsi' => 'Melakukan interaksi, komunikasi, dan diskusi dengan setiap individu dan kelompok, baik yang terlibat secara langsung maupun tidak langsung.'
            ],
            [
                'vector' => 'assets/images/landing/asset-tentang/nilai-berbinar/berorientasi.svg',
                'nilai' => 'Berorientasi Pada Kebutuhan',
                'deskripsi' => 'Menjadikan kebutuhan konsumen sebagai dasar untuk merencanakan dan mendesain strategi bisnis.'
            ],
        ];

        return view('landing.about-us.index')->with([
            'values' => $values,
        ]);
    }
}
