<?php

namespace App\Http\Controllers\Landing\Product\Class\BerbinarPlus;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BerbinarPlusController extends Controller
{
    public function index()
    {
        $products = [
            [
                'vector' => 'assets/images/landing/asset-kelas/produk/vector-class-journey.png',
                'produk' => '101 Class Journey',
                'deskripsi' => 'Memperluas wawasan keilmuan dan keterampilan yang berasal dari ahli',
            ],
            [
                'vector' => 'assets/images/landing/asset-kelas/produk/vector-bisikan.png',
                'produk' => 'BISIKAN',
                'deskripsi' => 'Sharing session terkait psikologi lewat instagram Berbinar dan tersedia juga di youtube channel',
            ],
            [
                'vector' => 'assets/images/landing/asset-kelas/produk/vector-berbinar.png',
                'produk' => 'Berbinar+',
                'deskripsi' => 'Bundling package dimana customer bisa menggunakan produk kelas, konseling, dan psikotes.',
            ],
            [
                'vector' => 'assets/images/landing/asset-kelas/produk/vector-bisikan.png',
                'produk' => 'Berarty',
                'deskripsi' => 'Sharing session terkait psikologi lewat instagram Berbinar dan tersedia juga di youtube channel',
            ],
            [
                'vector' => 'assets/images/landing/asset-kelas/produk/vector-bisikan.png',
                'produk' => 'Premium Class',
                'deskripsi' => 'Sharing session terkait psikologi lewat instagram Berbinar dan tersedia juga di youtube channel',
            ],
        ];

        $faqs = [
            [
                'question' => 'Apakah saya boleh mengikuti lebih dari satu kelas?',
                'answer' => 'Ya, SobatBinar diperbolehkan mengikuti lebih dari satu kelas sesuai dengan minat dan bidang yang ingin dipelajari.'
            ],
            [
                'question' => 'Bagaimana cara saya bisa upgrade layanan konseling dan psikotest?',
                'answer' => 'SobatBinar dapat berkomunikasi dengan narahubung untuk proses upgrade layanan.  Setelah itu, akan ada arahan dan informasi lebih lanjut.'
            ],
            [
                'question' => 'Bisakah saya menjadwalkan ulang sesi konseling sesi kelas ketika saya berhalangan hadir di kelas Berbinar+?',
                'answer' => 'Di kelas Berbinar+, SobatBinar akan belajar melalui video pembelajaran yang bisa diakses kapan saja. Namun jika SobatBinar memilih paket bundling dengan konseling, SobatBinar juga bisa menjadwalkan sesi konseling langsung dengan konselor sesuai waktu yang tepat.'
            ],
            [
                'question' => 'Apakah saya dapat memilih psikolog dan peer konselor yang saya inginkan di layanan konseling?',
                'answer' => 'Ya, SobatBinar punya kebebasan untuk memilih sendiri psikolog atau peer konselor yang ingin mereka ajak berdiskusi, sesuai  dengan yang tersedia.'
            ],
            [
                'question' => 'Apakah hasil psikotes dan konseling bersifat rahasia?',
                'answer' => 'Tentu. Semua data dan hasil dari layanan konseling maupun psikotest dijamin kerahasiaannya sesuai dengan kode etik profesi dan kebijakan privasi Berbinar+.'
            ]
        ];

        $psikologs = [
            [
                'name' => 'Erwin Tri Susanto, S.Psi, MBA',
                'field' => 'Human Resources',
                'title' => 'Career Preparation',
                'image' => 'assets/images/landing/asset-kelas/berbinar-plus/pemateri/erwin.png'
            ],
            [
                'name' => 'Sefty Wulandari',
                'field' => 'Social Media Specialist',
                'title' => 'Pemasaran Influencer dan Kemitraan',
                'image' => 'assets/images/landing/asset-kelas/berbinar-plus/pemateri/sefty.png'
            ],
            [
                'name' => 'Dini Amelia Sari',
                'field' => 'Digital Marketing',
                'title' => 'Digital Marketing Essentials',
                'image' => 'assets/images/landing/asset-kelas/berbinar-plus/pemateri/dini.png'
            ],
            [
                'name' => 'Indriana Luqul Jannah',
                'field' => 'Digital Marketing',
                'title' => 'SEO Basics',
                'image' => 'assets/images/landing/asset-kelas/berbinar-plus/pemateri/indriana.png'
            ],
            [
                'name' => 'Shafa Nathaniela Salwa',
                'field' => 'Product management',
                'title' => '-',
                'image' => 'assets/images/landing/asset-konseling/image/psikolog/virginia.png'
            ],
            [
                'name' => 'Hakiki Mahfuzh',
                'field' => 'Product management',
                'title' => '-',
                'image' => 'assets/images/landing/asset-konseling/image/psikolog/kasmayani.png'
            ],
            [
                'name' => 'Abdillah Farhan',
                'field' => 'Digital Marketing',
                'title' => '-',
                'image' => 'assets/images/landing/asset-konseling/image/psikolog/ira.png'
            ]
        ];

        $layanan_berbinar_plus = [
            'insight' => [
                'name' => 'Insight',
                'price' => 'Rp.15.000',
                'services' => [
                    'Layanan video pembelajaran daring dan personal mentoring',
                ]
            ],
            'A+' => [
                'name' => 'A+',
                'price' => [
                    'online' => [
                        'weekday' => 'Rp36.000 - Rp120.000/jam',
                        'weekend' => 'Rp44.000 - Rp140.000/jam'
                    ],
                    'offline' => [
                        'weekday' => 'Rp44.000 - Rp140.000/jam',
                        'weekend' => 'Rp44.000 - Rp180.000/jam'
                    ]
                ],
                'services' => [
                    'Dengan layanan konseling dengan psikolog dan peer counselor',
                ]
            ],
            'complete' => [
                'name' => 'Complete',
                'price' => 'Rp100.000 - Rp280.000',
                'services' => [
                    'Dengan layanan psikotes dan konseling serta laporan tertulis',
                ]
            ]
        ];

        $benefit_berbinar_plus = [
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
        ];

        return view('moduls.landing-new.berbinar-plus-new', compact('faqs', 'products', 'psikologs', 'layanan_berbinar_plus', 'benefit_berbinar_plus'));
    }
}
