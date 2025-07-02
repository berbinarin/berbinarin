<?php

namespace App\Http\Controllers\Landing\Product\Class\Berarty;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BerartyController extends Controller
{
    public function index() {

        $faqs = [
            [
                'question' => 'Saya ketinggalan untuk menonton live tiktok BERARTY. Bagaimana cara saya mengakses BERARTY?',
                'answer' => 'Materi tersedia dalam bentuk live session di Tiktok Berbinar dan SobatBinar bisa mengakses video replay di kanal Youtube Berbinar.'
            ],
            [
                'question' => 'Apakah BERARTY hanya untuk orang yang sedang punya masalah?',
                'answer' => 'Tidak. BERARTY  ditujukan untuk semua individu, baik yang sedang menghadapi tantangan emosional maupun yang ingin menjaga kesehatan mentalnya secara preventif.'
            ],
            [
                'question' => 'Apakah kontennya aman untuk remaja?',
                'answer' => 'Ya. Seluruh konten disusun secara edukatif dan sesuai dengan nilai-nilai etika komunikasi publik. Kami memastikan materi yang disampaikan dapat dipahami oleh remaja maupun orang dewasa dengan aman.'
            ],
            [
                'question' => 'Bagaimana saya dapat berpartisipasi dalam Tiktok Live BERARTY?',
                'answer' => 'SobatBinar dapat berpartisipasi dengan mengikuti akun Instagram Berbinar (@berbinar.in). Selama sesi live, kirimkan pertanyaan atau komentar SobatBinar dan kami akan merespons komentar dalam IG live bersama narasumber yang expert di bidangnya.'
            ]
        ];

        return view('landing.product.class.berarty', compact('faqs'));


    }
}
