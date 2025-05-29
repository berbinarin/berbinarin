<?php

namespace App\Http\Controllers\Landing\Product\EmoShuffle;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmoShuffleController extends Controller
{
        public function index() {
        $faqs = [
            [
                'ask' => 'Apa perbedaan Standar dan Eksklusif?',
                'answer' => 'Perbedaan terletak pada kemasannya: EmoShuffle Standar menggunakan box biasa dengan penutup manual, sedangkan EmoShuffle Eksklusif hadir dalam kemasan box magnetik yang lebih premium.'
            ],
            [
                'ask' => 'Apakah EmoShuffle bisa digunakan sebagai terapi?',
                'answer' => 'EmoShuffle bukan alat diagnosis atau terapi medis. Permainan ini merupakan media edukatif dan rekreatif yang dirancang untuk mendukung kesadaran diri dan ekspresi emosi secara positif, sebagai bagian dari upaya menjaga kesehatan mental.'
            ],
            [
                'ask' => 'Apa saja isi dalam satu box EmoShuffle?',
                'answer' => 'Satu box EmoShuffle berisi 55 kartu, terdiri dari 45 kartu pertanyaan, 5 kartu kutipan inspiratif, dan 5 kartu aksi “Do It Now!”. Seluruhnya dilengkapi dengan panduan bermain untuk memudahkan penggunaan baik secara individu maupun kelompok.'
            ],
        ];
        return view('moduls.landing-new.emo', compact('faqs'));
    }
}
