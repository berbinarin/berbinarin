<?php

namespace App\Http\Controllers\Landing\Product\Class\Class101Journey;

use App\Http\Controllers\Controller;

class Class101JourneyController extends Controller
{
        public function  index() {

        $layanan_class_journey = [
            [
                'name' => 'Early Bird',
                'price' => 'Rp24.000',
                'icon' => 'assets/images/landing/asset-kelas/class-journey/early-bird.webp'
            ],
            [
                'name' => 'Bundling Bertiga',
                'price' => 'Rp84.000',
                'icon' => 'assets/images/landing/asset-kelas/class-journey/bundle-bertiga.webp'
            ],
            [
                'name' => 'Normal Price',
                'price' => 'Rp30.000',
                'icon' => 'assets/images/landing/asset-kelas/class-journey/normal-price.webp'
            ],
        ];

        $benefit_class_journey = [
            [
                'name' => 'E-Certificate',
                'image' => 'certificate.webp'
            ],
            [
                'name' => 'Hands-On Experience',
                'image' => 'hands-on.webp'
            ],
            [
                'name' => 'Upgrade Skill',
                'image' => 'upgrade.webp'
            ],
            [
                'name' => 'Tips & Trick dari Ahli',
                'image' => 'tips-n-trick.webp'
            ],
            [
                'name' => 'Networking',
                'image' => 'networking.webp'
            ],
        ];

            $bidang_pembelajaran = [
                'Digital Marketing',
                'Graphic Design',
                'Human Resource (HR)',
                'Product Management',
                'Social Media Specialist',
            ];

        $faqs = [
            [
                'question' => 'Apakah akan ada sertifikat setelah mengikuti kelas?',
                'answer' => 'Untuk webinar reguler, tidak disediakan sertifikat. Namun, SobatBinar yang mengikuti 101 Class Journey dan memenuhi ketentuan akan mendapatkan E-certificate sebagai bukti partisipasi.'
            ],
            [
                'question' => 'Apakah saya bisa berkomunikasi langsung dengan pemateri?',
                'answer' => 'Tentu! Di setiap sesi, kami menyediakan waktu khusus untuk sesi tanya jawab (Q&A), di mana SobatBinar bisa mengajukan pertanyaan langsung kepada pemateri dan berinteraksi lebih dekat. Selain itu, SobatBinar juga dapat menghubungi pemateri melalui WhatsApp setelah sesi berakhir untuk diskusi lebih lanjut.'
            ],
            [
                'question' => 'Apakah 101 Class Journey ini bisa diikuti oleh umum?',
                'answer' => 'Ya, 101 Class Journey terbuka untuk umum. Siapa saja yang ingin belajar dan mengembangkan diri, baik dari latar belakang pelajar, mahasiswa, maupun profesional, dipersilakan untuk bergabung'
            ],
            [
                'question' => 'Apa Perbedaan Webinar dan 101 Class Journey?',
                'answer' => 'Webinar adalah program gratis yang dapat diakses oleh siapa saja. Materi yang disampaikan bersifat umum dan mencakup berbagai topik menarik. Webinar juga dapat ditonton ulang melalui kanal YouTube Berbinar. Sementara, 101 Class Journey adalah layanan berbayar dengan pendekatan belajar yang lebih mendalam dengan fokus yang lebih terstruktur dan sistematis.'
            ]
        ];

        $poster = 'public/assets/images/landing/asset-kelas/class-journey/poster-maret.webp';

        $link_pendaftaran = 'https://bit.ly/Pendaftaran_101ClassJourney';


        return view('landing.product.class.class-journey', compact('layanan_class_journey', 'benefit_class_journey', 'faqs', 'poster', 'link_pendaftaran', 'bidang_pembelajaran'));
    }

}
