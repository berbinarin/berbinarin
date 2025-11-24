<?php

namespace App\Http\Controllers\Landing\Product\Class\Bisikan;

use App\Http\Controllers\Controller;

class BisikanController extends Controller
{
    public function index()
    {
        $layanan_class_journey = [
            [
                'name' => 'Early Bird',
                'price' => 'Rp15.000',
                'icon' => 'assets/images/landing/asset-kelas/class-journey/early-bird.webp'
            ],
            [
                'name' => 'Triple Bundle',
                'price' => 'Rp55.000',
                'icon' => 'assets/images/landing/asset-kelas/class-journey/bundle-bertiga.webp'
            ],
            [
                'name' => 'Normal Price',
                'price' => 'Rp20.000',
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
                'name' => 'Tips and Trick dari Ahli',
                'image' => 'tips-n-trick.webp'
            ],
            [
                'name' => 'Networking',
                'image' => 'networking.webp'
            ],
        ];
        $episodes = [
            [
                'title' => 'Episode 19',
                'image' => 'assets/images/landing/produk/bisikan/bisikan-episode19.webp',
                'alt' => '',
                'bersama' => 'Satria Kamal Agassi, S. Psi., M.Psi., Psikolog',
                'link' => 'https://youtu.be/0gE5pq2FPJc?si=LhGl9KJ2xTwO_nDY'
            ],
            [
                'title' => 'Episode 20',
                'image' => 'assets/images/landing/produk/bisikan/bisikan-episode20.webp',
                'alt' => '',
                'bersama' => 'Muhammad Luthfi Fernanda, M.Psi., Psikolog',
                'link' => 'https://youtu.be/u99HBc7i9EA?si=eiNAJ5vNdUGcV2Lh'
            ],
            [
                'title' => 'Episode 21',
                'image' => 'assets/images/landing/produk/bisikan/bisikan-episode21.webp',
                'alt' => '',
                'bersama' => 'Adismara Putri Pradiri, M.Psi., Psikolog',
                'link' => 'https://youtu.be/fpjr6pazye4?si=0I4xyEcoMVEU_Bv3'
            ],
        ];

        $topics = [
            [
                'image' => 'assets/images/landing/produk/bisikan/konten-kesehatan-mental.webp',
                'title' => 'Kesehatan Mental',
            ],
            [
                'image' => 'assets/images/landing/produk/bisikan/konten-regulasi-emosi.webp',
                'title' => 'Regulasi Emosi',
            ],
            [
                'image' => 'assets/images/landing/produk/bisikan/konten-hubungan-interpersonal.webp',
                'title' => 'Hubungan Interpersonal',
            ],
            [
                'image' => 'assets/images/landing/produk/bisikan/konten-self-growth.webp',
                'title' => 'Self Growth',
            ],
            [
                'image' => 'assets/images/landing/produk/bisikan/konten-mengenal-diri.webp',
                'title' => 'Mengenal diri lewat psikologi',
            ],
            [
                'image' => 'assets/images/landing/produk/bisikan/konten-cerita-nyata.webp',
                'title' => 'Cerita nyata dan tips dari narasumber terpercaya',
            ],


        ];

        $manfaat_bisikan = [
            [
                'icon' => 'assets/images/landing/produk/bisikan/envelop.webp',
                'title' => 'Wawasan',
                'manfaat' => 'Menambah wawasan tentang kesehatan mental'
            ],
            [
                'icon' => 'assets/images/landing/produk/bisikan/icon-inspirasi.webp',
                'title' => 'Pengetahuan',
                'manfaat' => 'Mendapat pengetahuan dari praktisi dan ahli terpercaya'
            ],
            [
                'icon' => 'assets/images/landing/produk/bisikan/icon-support.webp',
                'title' => 'Mindful Living',
                'manfaat' => 'Mendukung gaya hidup yang lebih mindful dan seimbang'
            ],
            [
                'icon' => 'assets/images/landing/produk/bisikan/icon-akses.webp',
                'title' => 'Self-healing',
                'manfaat' => 'Memberi ruang refleksi dan self-healing'
            ],
        ];

        $sosmed = [
            [
                'icon' => '/assets/images/landing/produk/bisikan/spotify.webp',
                'platform' => 'Spotify',
                'link' => 'https://open.spotify.com/user/31c274wo5o5x4tujcjrimf4kujhu?si=7110e65c3c01489a'
            ],
            [
                'icon' => '/assets/images/landing/produk/bisikan/instagram.webp',
                'platform' => 'Instagram',
                'link' => 'https://www.instagram.com/berbinar.in/'
            ],
            [
                'icon' => '/assets/images/landing/produk/bisikan/youtube.webp',
                'platform' => 'YouTube',
                'link' => 'https://www.youtube.com/@berbinar'
            ],
        ];

        $faqs = [
            [
                'question' => 'Berapa lama durasi tiap episode?',
                'answer' => 'Setiap episode BISIKAN memiliki durasi antara 30-50 menit, disesuaikan dengan topik dan kedalaman pembahasan.'
            ],
            [
                'question' => 'Apakah saya bisa request topik?',
                'answer' => 'Ya. Podcast Berbinar sangat terbuka terhadap masukan dari pendengar. Usulan topik dapat disampaikan melalui pesan langsung di Instagram @berbinar.in atau melalui email ke Berbinar.in@gmail.com.Setiap masukan akan menjadi bahan pertimbangan tim untuk episode mendatang.'
            ],
            [
                'question' => 'Apakah semua BISIKAN harus didengar secara berurutan?',
                'answer' => 'Tidak. Setiap episode disusun agar dapat dinikmati secara mandiri, sehingga pendengar bebas memilih topik sesuai kebutuhan atau minat saat itu.'
            ],
            [
                'question' => 'Apakah BISIKAN hanya untuk orang yang sedang punya masalah?',
                'answer' => 'Tidak. BISIKAN ditujukan untuk semua individu, baik yang sedang menghadapi tantangan emosional maupun yang ingin menjaga dan meningkatkan kualitas kesehatan mentalnya secara preventif.'
            ],
            [
                'question' => 'Apakah kontennya aman untuk remaja?',
                'answer' => "Ya. Seluruh konten disusun secara edukatif dan sesuai dengan nilai-nilai etika komunikasi publik. Kami memastikan materi yang disampaikan dapat dipahami oleh remaja maupun orang dewasa dengan aman."
            ],
        ];

        $poster = 'public/assets/images/landing/asset-kelas/class-journey/poster-maret.webp';

        $link_pendaftaran = 'https://bit.ly/Pendaftaran_101ClassJourney';
        return view('landing.product.class.bisikan', compact('layanan_class_journey', 'sosmed', 'episodes', 'topics', 'benefit_class_journey', 'faqs', 'poster', 'link_pendaftaran'));
    }
}
