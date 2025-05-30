<?php

namespace App\Http\Controllers\Landing\Product\Class;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function class()
    {
        $products = [
            [
                'vector' => 'assets/images/landing/asset-kelas/produk/vector-class-journey.png',
                'produk' => '101 Class Journey',
                'deskripsi' => 'Memperluas wawasan keilmuan dan keterampilan yang berasal dari ahli',
                'route' => 'product.class.101-class-journey.index' // name of the sub routes
            ],
            [
                'vector' => 'assets/images/landing/asset-kelas/produk/vector-bisikan.png',
                'produk' => 'BISIKAN',
                'deskripsi' => 'Sharing session terkait psikologi lewat instagram Berbinar dan tersedia juga di youtube channel',
                'route' => 'product.class.bisikan.index'
            ],
            [
                'vector' => 'assets/images/landing/asset-kelas/produk/vector-berbinar.png',
                'produk' => 'Berbinar+',
                'deskripsi' => 'Bundling package dimana customer bisa menggunakan produk kelas, konseling, dan psikotes.',
                'route' => 'product.class.berbinar-plus.index'
            ],
            [
                'vector' => 'assets/images/landing/asset-kelas/produk/vector-berarty.png',
                'produk' => 'BERARTY',
                'deskripsi' => 'Sharing session terkait psikologi lewat instagram Berbinar dan tersedia juga di youtube channel',
                'route' => 'product.class.berarty.index'
            ],
            [
                'vector' => 'assets/images/landing/asset-kelas/produk/vector-premium-class.png',
                'produk' => 'Premium Class',
                'deskripsi' => 'Sharing session terkait psikologi lewat instagram Berbinar dan tersedia juga di youtube channel',
                'route' => 'product.class.premium-class.index'
            ],
        ];

        $faqs = [
            [
                'question' => 'Apakah semua kelas berbayar?',
                'answer' => 'Tidak. Kelas Berbinar seperti BISIKAN dan BERARTY dapat diakses secara gratis. Namun, program seperti Premium Class dan beberapa Berbinar+ memerlukan biaya.'
            ],
            [
                'question' => 'Apakah boleh ikut lebih dari satu kelas?',
                'answer' => 'Boleh banget! Setiap peserta diperbolehkan untuk memilih lebih dari satu kelas sesuai dengan bidang yang menjadi ketertarikan untuk dipelajari.
            '
            ],
            [
                'question' => 'Apakah nanti akan mendapatkan sertifikat?',
                'answer' => 'Pasti! Peserta dapat melakukan klaim sertifikat setelah menyelesaikan rangkaian kelas BERBINAR+. Sertifikat ini dapat digunakan sebagai dokumen pendukung CV sekaligus menjadi portofolio building.
            '
            ],
            [
                'question' => 'Apakah bisa terhubung dengan narasumbernya juga?',
                'answer' => 'Bisa, dong. BERBINAR+ menyediakan wadah personal mentoring dimana peserta mendapatkan kesempatan untuk melakukan sesi tanya jawab bersama mentor sesuai dengan bidang kelas yang diambil.
            '
            ],
            [
                'question' => 'Proses pembelajarannya ribet gak, ya?',
                'answer' => 'Mudah, kok! Peserta bisa akses video pembelajarannya kapanpun dan dimanapun. Peserta hanya perlu melalui proses berikut: Selesaikan video pembelajaran dan mengisi post-test, Melakukan personal mentoring bersama mentor, Klaim sertifikat dan peserta dapat memilih untuk lanjut ke layanan konseling dan psikotes.
            '
            ],
            [
                'question' => 'Jika mau upgrade ke konseling dan psikotes gimana ya?',
                'answer' => 'Peserta dapat berkomunikasi dengan narahubung untuk proses upgrade layanan. Setelah itu, akan ada arahan dan informasi lebih lanjut.
            '
            ],
            [
                'question' => 'Jika mau mengetahui informasi lebih lanjut secara lebih rincinya gimana ya?',
                'answer' => 'Peserta dapat mengunjungi linktr.ee/BerbinarPlus atau menghubungi narahubung melalui whatsapp dengan nomor 0813-1435-4623 (Wulan).
            '
            ],
        ];

        $participants = [
            [
                'name' => 'Mahasiswa',
                'icon' => '🎓'
            ],
            [
                'name' => 'Pelajar',
                'icon' => '🎓'
            ],
            [
                'name' => 'Fresh Graduate',
                'icon' => '👩‍🎓'
            ],
            [
                'name' => 'Job Seeker',
                'icon' => '💼'
            ],
            [
                'name' => 'Pencari Magang (Internship)',
                'icon' => '🧳'
            ],
            [
                'name' => 'Pencari Beasiswa',
                'icon' => '🎯'
            ],
            [
                'name' => 'Freelancer',
                'icon' => '🧑‍🎨'
            ],
            [
                'name' => 'Karyawan',
                'icon' => '👩‍💻'
            ]

        ];

        return view('landing.product.class.index')->with([
            'faqs' => $faqs,
            'products' => $products,
            'participants' => $participants,
        ]);
    }
}
