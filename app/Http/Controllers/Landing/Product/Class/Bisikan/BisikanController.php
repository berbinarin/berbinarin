<?php

namespace App\Http\Controllers\Landing\Product\Class\Bisikan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BisikanController extends Controller
{
    //
        public function index()
    {

        $layanan_class_journey = [
            [
                'name' => 'Early Bird',
                'price' => 'Rp15.000',
                'icon' => 'assets/images/landing/asset-kelas/class-journey/early-bird.png'
            ],
            [
                'name' => 'Triple Bundle',
                'price' => 'Rp55.000',
                'icon' => 'assets/images/landing/asset-kelas/class-journey/bundle-bertiga.png'
            ],
            [
                'name' => 'Normal Price',
                'price' => 'Rp20.000',
                'icon' => 'assets/images/landing/asset-kelas/class-journey/normal-price.png'
            ],
        ];

        $benefit_class_journey = [
            [
                'name' => 'E-Certificate',
                'image' => 'certificate.png'
            ],
            [
                'name' => 'Hands-On Experience',
                'image' => 'hands-on.png'
            ],
            [
                'name' => 'Upgrade Skill',
                'image' => 'upgrade.png'
            ],
            [
                'name' => 'Tips and Trick dari Ahli',
                'image' => 'tips-n-trick.png'
            ],
            [
                'name' => 'Networking',
                'image' => 'networking.png'
            ],
        ];

        $faqs = [
            [
                'question' => 'Apakah saya bisa bertanya langsung kepada pemateri?',
                'answer' => 'Tentu! Akan ada sesi Q&A di setiap akhir kelas untuk SobatBinar  yang ingin bertanya langsung kepada pemateri.'
            ],
            [
                'question' => 'Apakah kelas ini cocok untuk pemula tanpa pengalaman di bidang terkait?',
                'answer' => 'Sangat cocok! Kelas ini dirancang dari level dasar hingga intermediate, jadi siapa pun bisa mengikuti tanpa latar belakang teknis sebelumnya.'
            ],
            [
                'question' => 'Apakah materi presentasi dari pemateri akan dibagikan?',
                'answer' => 'Ya, file materi (jika diizinkan oleh pemateri) akan dikirimkan melalui grup peserta setelah kelas berakhir.'
            ],
            [
                'question' => 'Saya belum pernah ikut webinar, apakah akan ada panduan teknis sebelum kelas?',
                'answer' => 'Ya, kami akan mengirimkan panduan teknis dan tata cara mengikuti Zoom (termasuk link, password, dan etika selama kelas) setelah SobatBinar mendaftar.'
            ],
            [
                'question' => 'Apakah saya bisa mendapatkan sertifikat jika tidak mengikuti seluruh sesi?',
                'answer' => 'SobatBinar harus mengikuti minimal 80% durasi kelas agar bisa mendapatkan e-certificate. Hal ini untuk memastikan SobatBinar benar-benar aktif dalam proses pembelajaran.'
            ]
        ];

        $poster = 'public/assets/images/landing/asset-kelas/class-journey/poster-maret.png';

        $link_pendaftaran = 'https://bit.ly/Pendaftaran_101ClassJourney';
        return view('moduls.landing-new.produk-bisikan', compact('layanan_class_journey', 'benefit_class_journey', 'faqs', 'poster', 'link_pendaftaran'));
    }
}
