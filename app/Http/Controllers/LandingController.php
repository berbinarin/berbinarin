<?php

namespace App\Http\Controllers;

use App\Models\Soal;
use App\Models\KeluargaBerbinar\TableStaff;
use App\Models\Test;
use App\Models\Question;
use App\Models\Dimension;
use App\Models\jadwalPeer;
use DateTime;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Models\UserPsikotest;
use App\Models\KonsellingPeer;
use App\Models\Hiring_Positions;
use App\Models\KonsellingPsikolog;
use Illuminate\Support\Facades\Http;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Hiring_Positions_Requirements;
use App\Models\Hiring_Positions_Job_Descriptions;

class LandingController extends Controller
{
    // NEW LANDING PAGE
    public function landing_new(Request $request)
    {
        $visimisis = [
            [
                'moto' => 'Profesional',
            ],
            [
                'moto' => 'Alat Tes Terstandar',
            ],
            [
                'moto' => 'Biaya Terjangkau',
            ],
            [
                'moto' => 'Fleksibel',
            ],
        ];

        $products = [
            [
                'vector' => 'assets/images/landing/asset-beranda/produk/logo-konseling.png',
                'produk' => 'Berbinar Konseling',
                'deskripsi' => 'Tempat konsultasi kesehatan mental klien dengan memilih psikolog maupun peer counselor yang sudah terjamin kualitas dan profesionalitasnya.',
                'link' => route('konseling-new'),
            ],
            [
                'vector' => 'assets/images/landing/asset-beranda/produk/logo-class.png',
                'produk' => 'Berbinar Class',
                'deskripsi' => 'Rintis perkembangan karier klien dengan kelas edukasi Berbinar yang terdiri beberapa topik untuk meningkatkan soft skill dan hard skill.',
                'link' => route('kelas-new'),
            ],
            [
                'vector' => 'assets/images/landing/asset-beranda/produk/logo-psikotes.png',
                'produk' => 'Berbinar Psikotes',
                'deskripsi' => 'Serangkaian tes untuk mengukur, menentukan, dan mempersiapkan karier dengan mengidentifikasi potensi yang dimiliki setiap klien.',
                'link' => route('psikotest-new'),
            ],
            [
                'vector' => 'assets/images/landing/asset-beranda/produk/logo-consulting.png',
                'produk' => 'Berbinar Consulting',
                'deskripsi' => 'Suatu layanan dalam membantu suatu perusahaan, komunitas, dan organisasi yang berkaitan kinerja sumber daya manusia.',
                'link' => route('consulting-new'),
            ],
            [
                'vector' => 'assets/images/landing/asset-beranda/produk/logo-emoshuffle.png',
                'produk' => 'EmoShuffle',
                'deskripsi' => 'Kartu yang dirancang dengan desain menarik dan dapat mendalami juga mengekspresikan perasaan klien saat bermain.',
                'link' => route('konseling-new'),
            ],
            [
                'vector' => 'assets/images/landing/asset-beranda/produk/logo-moodscantees.png',
                'produk' => 'MoodScan Tees',
                'deskripsi' => 'Kaos super nyaman yang memiliki desain konsep psikologis juga fitur QR Code untuk menyimpan pesan motivasi agar tampil bergaya.',
                'link' => route('konseling-new'),
            ],
        ];

        $testimonis = [
            [
                'comment' => '“Saya sangat senang bisa menggunakan produk dan layanan di Berbinar. Dengan melakukan psikotes di Berbinar, saya dapat mengetahui diri saya sendiri. Sehingga saya tahu apa yang harus dilakukan kedepannya.”',
                'name' => 'Ezra Renita Sitorus',
                'image' => 'assets/images/landing/asset-beranda/testimoni/ezra.png',
            ],
            [
                'comment' => '“Pengalaman saya menggunakan produk psikotes secara online ini cukup menyenangkan. Karena tesnya interaktif, hasilnya memberikan wawasan baru tentang potensi diri saya dan membantu saya dalam memahami kelebihan dan kekurangan saya.”',
                'name' => 'Yeni Triyastuti',
                'image' => 'assets/images/landing/asset-beranda/testimoni/yeni.png',
            ],
            [
                'comment' => '“Psikotes dari Berbinar membantu aku banget buat lebih mengenal diriku sendiri. Selain itu, konseling nya juga benar-benar membantu aku banget untuk menemukan solusi dari masalah yang sedang aku hadapi."',
                'name' => 'Nurchaliza Rizqiani',
                'image' => 'assets/images/landing/asset-beranda/testimoni/nurchaliza.png',
            ],
            [
                'comment' => '“Good for psikotest but sesuai masukan yang pernah aku isi, aku sempat salah sangka. Kukira akan dikabarin kalau aku masih kebagian kuota atau tidak. Ternyata aku yang inisiatif nanya, tapi gapapa. Buat kegiatan psikotesnya oke, aman-aman aja. Rate 10/10.”',
                'name' => 'Golda Safira Indraswari',
                'image' => 'assets/images/landing/asset-beranda/testimoni/golda.png',
            ],
            [
                'comment' => '“Rasa ingin tahu tentang diri sendiri jadi meningkat, karena hasil tesnya kadang bikin bertanya-tanya, ‘Ini memang aku seperti ini ya?’ atau ‘Kok rasanya nggak aku banget, tapi setelah dipikir-pikir, masuk akal juga kalau aku suka hal ini.’”',
                'name' => 'Latief Ghilfawan Defianto',
                'image' => 'assets/images/landing/asset-beranda/testimoni/latief.png',
            ],
            [
                'comment' => '“Produk Berbinar pun sangat beragam dan pastinya ramah di kantong. Menurut saya produk-produk Berbinar telah sesuai dengan kebutuhan masyarakat sekarang ini. Selain itu dengan harga yang affordable sehingga dapat dibeli oleh semua kalangan usia.”',
                'name' => 'Regina Amanda Sharen',
                'image' => 'assets/images/landing/asset-beranda/testimoni/regina.png',
            ],
            [
                'comment' => '“Layanan konseling yang diadakan Berbinar juga sangat membantu untuk menyelesaikan masalah mental dan kesehatan pikiran. Dengan harga yang terjangkau, kita bisa mendapatkan konselor dan bisa juga mendapatkan solusi dari permasalahan yang dihadapi.”',
                'name' => 'Dhila Aprilianti',
                'image' => 'assets/images/landing/asset-beranda/testimoni/dhilla.png',
            ],
            [
                'comment' => '“Setelah menggunakan produk dan layanan Berbinar, saya menjadi lebih tau apa yang harus dilakukan terhadap problem yang sedang saya alami dan lebih menerima kenyataan.”',
                'name' => 'Ghina Yulianty',
                'image' => 'assets/images/landing/asset-beranda/testimoni/ghina.png',
            ],
            [
                'comment' => '“Produk psikotes Berbinar sangat baik dengan berbagai macam pilihan tes sesuai kebutuhan individu. Dengan menggunakan tes psikotes Berbinar, saya lebih bisa memahami diri saya lebih baik dari sebelumnya.”',
                'name' => 'Felicia Amarantha',
                'image' => 'assets/images/landing/asset-beranda/testimoni/felicia.png',
            ],
            [
                'comment' => '“Konseling di Berbinar bener-bener bantu aku buat cari solusi ketika aku lagi ga baik-baik saja. Aku bener-bener merasa didengarkan dengan baik dan diberikan solusi yang solutif dan implementatif.”',
                'name' => 'Barita Davitya Setiawati',
                'image' => 'assets/images/landing/asset-beranda/testimoni/barita.png',
            ],
            [
                'comment' => '“Psikotes yang dilakukan sangat aman dan hasilnya cepat diolah untuk dikirimkan kembali ke peserta yang melakukan tes tersebut.”',
                'name' => 'Raisha Hayyunindita',
                'image' => 'assets/images/landing/asset-beranda/testimoni/raisha.png',
            ],
            [
                'comment' => '“Setelah mencoba produk dan layanan Berbinar, saya sangat puas. Proses psikotes mudah diakses, hasilnya cepat dan akurat. Layanan klaim konseling juga sangat membantu dengan panduan dan solusi mendalam untuk memahami diri lebih baik.”',
                'name' => 'Noor Fajrin Rukhairani',
                'image' => 'assets/images/landing/asset-beranda/testimoni/noor.png',
            ],
        ];

        return view('moduls.landing-new.index')->with([
            'products' => $products,
            'testimonis' => $testimonis,
            'visimisis' => $visimisis,
        ]);
    }

    public function tentang_new(Request $request)
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

        return view('moduls.landing-new.tentang-kami')->with([
            'values' => $values,
        ]);
    }

    public function produk_new(Request $request)
    {
        return view('moduls.landing-new.produk')->with([]);
    }

    public function konseling_new(Request $request)
    {
        $konselings = [
            [
                'name' => 'Konseling Psikolog',
                'image' => 'assets/images/landing/asset-tentang/konseling/psikolog.png',
                'description' => [
                    'Memiliki pelatihan dan kualifikasi profesional untuk menangani masalah kesehatan mental yang lebih kompleks.',
                    'Menyediakan pendekatan yang lebih formal dan terstandarisasi dalam konseling.',
                ],
            ],
            [
                'name' => 'Konseling Peer Counselor',
                'image' => 'assets/images/landing/asset-tentang/konseling/peer-counselor.png',
                'description' => [
                    'Menawarkan dukungan dari teman sebaya dengan empati yang kuat sehingga lebih mudah terbuka dengan klien.',
                    'Fokus pada masalah sehari-hari seperti penyesuaian diri.',
                ],
            ],
            [
                'name' => 'Konseling Daring',
                'image' => 'assets/images/landing/asset-tentang/konseling/daring.png',
                'description' => [
                    'Fleksibilitas yang memudahkan klien menjadwalkan sesi sesuai dengan ketersediaan klien dan dapat dilakukan dari mana saja.',
                    'Aksesibilitas dengan menyediakan pilihan bagi klien yang tinggal di daerah susah dijangkau dan mengurangi kecemasan yang mungkin dirasakan saat bertemu langsung.',
                ],
            ],
            [
                'name' => 'Konseling Luring',
                'image' => 'assets/images/landing/asset-tentang/konseling/psikolog.png',
                'description' => [
                    'Adanya interaksi yang mungkinkan komunikasi yang lebih nyaman dengan bahasa tubuh secara langsung.',
                    'Lingkungan yang terjamin untuk kenyamanan dan privasi sehingga mengurangi gangguan seperti saat sesi daring.',
                ],
            ],
        ];

        $psikologs = [
            [
                'name' => 'Danny Sanjaya Arfensia',
                'title' => 'S.Psi., M.Psi., Psikolog',
                'image' => 'assets/images/landing/asset-konseling/image/psikolog/danny.png'
            ],
            [
                'name' => 'B. Primandini Y. H.',
                'title' => 'S.Psi., M.Psi., Psikolog',
                'image' => 'assets/images/landing/asset-konseling/image/psikolog/primandini.png'
            ],
            [
                'name' => 'Yusandi Rezki Fadhli',
                'title' => 'S.Psi., M.Psi., Psikolog',
                'image' => 'assets/images/landing/asset-konseling/image/psikolog/yusandi.png'
            ],
            [
                'name' => 'Satria Kamal Agassi',
                'title' => 'S.Psi., M.Psi., Psikolog',
                'image' => 'assets/images/landing/asset-konseling/image/psikolog/satria.png'
            ],
            [
                'name' => 'Virginia Sukma Dewi',
                'title' => 'S.Psi., M.Psi., Psikolog',
                'image' => 'assets/images/landing/asset-konseling/image/psikolog/virginia.png'
            ],
            [
                'name' => 'Kasmayani Karim',
                'title' => 'M.Psi., Psikolog',
                'image' => 'assets/images/landing/asset-konseling/image/psikolog/kasmayani.png'
            ],
            [
                'name' => 'Ira Mayang Sari',
                'title' => 'S.Psi., M.Psi., Psikolog',
                'image' => 'assets/images/landing/asset-konseling/image/psikolog/ira.png'
            ],
            [
                'name' => 'Adismara Putri Pradiri',
                'title' => 'S.Psi., M.Psi., Psikolog',
                'image' => 'assets/images/landing/asset-konseling/image/psikolog/adismara.png'
            ],
            [
                'name' => 'Ramadhani Lucky Al Kahfi',
                'title' => 'S.Psi., M.Psi., Psikolog',
                'image' => 'assets/images/landing/asset-konseling/image/psikolog/ramadhani.png'
            ]
        ];

        $weeksOn = [
            [
                'description' => 'Konseling dengan psikolog fleksibel sesuai kenyamanan Anda'
            ],
            [
                'description' => 'Data pribadi Anda akan dijaga kerahasiaannya'
            ],
            [
                'description' => 'Psikolog akan menavigasi hidup Anda dengan bijaksana'
            ],
            [
                'description' => 'Memberikan dukungan emosional untuk Anda'
            ],
        ];

        $weeksOff = [
            [
                'description' => 'Sesi tatap muka untuk pengalaman konseling lebih personal dengan psikolog'
            ],
            [
                'description' => 'Data pribadi Anda akan dijaga kerahasiaannya'
            ],
            [
                'description' => 'Psikolog akan menavigasi hidup Anda dengan bijaksana'
            ],
            [
                'description' => 'Memberikan dukungan emosional untuk Anda'
            ],
        ];

        $weekdayPricesOn = [
            [
                'session' => '⏱️  1 Sesi (1 jam)',
                'price' => 'Rp150.000',
            ],
            [
                'session' => '⏱️  2 Sesi (2 jam)',
                'price' => 'Rp300.000',
            ],
            [
                'session' => '⏱️  3 Sesi (3 jam)',
                'price' => 'Rp450.000',
            ],
        ];

        $weekdayPricesOff = [
            [
                'session' => '⏱️  1 Sesi (1 jam)',
                'price' => 'Rp175.000',
            ],
            [
                'session' => '⏱️  2 Sesi (2 jam)',
                'price' => 'Rp350.000',
            ],
            [
                'session' => '⏱️  3 Sesi (3 jam)',
                'price' => 'Rp525.000',
            ],
        ];

        $weekendPricesOn = [
            [
                'session' => '⏱️  1 Sesi (1 jam)',
                'price' => 'Rp200.000',
            ],
            [
                'session' => '⏱️  2 Sesi (2 jam)',
                'price' => 'Rp340.000',
            ],
            [
                'session' => '⏱️  3 Sesi (3 jam)',
                'price' => 'Rp500.000',
            ],
        ];

        $weekendPricesOff = [
            [
                'session' => '⏱️  1 Sesi (1 jam)',
                'price' => 'Rp225.000',
            ],
            [
                'session' => '⏱️  2 Sesi (2 jam)',
                'price' => 'Rp340.000',
            ],
            [
                'session' => '⏱️  3 Sesi (3 jam)',
                'price' => 'Rp500.000',
            ],
        ];

        $peers = [
            [
                'name' => "Shafiyyah Muthi'ah",
                'image' => 'assets/images/landing/asset-konseling/image/peer-counselor/shafiyyah.png',
                'region' => 'Tangerang Selatan'
            ],
            [
                'name' => "Nabila Farah Atiqah",
                'image' => 'assets/images/landing/asset-konseling/image/peer-counselor/nabila.png',
                'region' => 'Malang'
            ],
            [
                'name' => 'Thahira Raudhatunissa',
                'image' => 'assets/images/landing/asset-konseling/image/peer-counselor/thahira.png',
                'region' => 'Surabaya'
            ],
            [
                'name' => 'Najwa Chana Indica',
                'image' => 'assets/images/landing/asset-konseling/image/peer-counselor/najwa.png',
                'region' => 'Malang'
            ]
        ];

        $peerOnlines = [
            [
                'description' => 'Konseling dimanapun dan kapanpun sesuai dengan kenyamanan Anda'
            ],
            [
                'description' => 'Data pribadi Anda akan dijaga kerahasiaannya'
            ],
            [
                'description' => 'Membantu memberikan dukungan emosional untuk Anda'
            ],
            [
                'description' => 'Peer counselor akan menjadi teman bicara dan membantu permasalahan Anda sehari-hari'
            ],
        ];

        $peerOfflines = [
            [
                'description' => 'Pengalaman konseling tatap muka yang lebih personal dengan peer counselor'
            ],
            [
                'description' => 'Data pribadi Anda akan dijaga kerahasiaannya'
            ],
            [
                'description' => 'Membantu memberikan dukungan emosional untuk Anda'
            ],
            [
                'description' => 'Waktu dan tempat bisa fleksibel sesuai dengan kesepakatan antara Anda dengan peer counselor'
            ],
        ];

        $testimonis = [
            [
                'comment' => '"Sesi konseling merubah pandang: tak masalah berubah demi orang lain. Dorongan jadi lebih baik. Lakukan yang dinginkan, tetap aman. Belajarlah. Lampiaskan sakit, geser ke positif, hargai diri dan peduli orang”',
                'image' => 'assets/images/landing/asset-konseling/image/anonim.png',
                'name' => 'Anonim'
            ],
            [
                'comment' => '"Konseling sangat membantu, konselor ramah. Pertama kali cerita, terbantu menceritakan masalah yang selama ini takut dibagikan sebelumnya. Rasanya lega, tanpa beban dan validasi. Kakak konselor memberi waktu dan kenyamanan."',
                'image' => 'assets/images/landing/asset-konseling/image/anonim.png',
                'name' => 'Anonim'
            ],
            [
                'comment' => '"Konselor mendengarkan dan memerhatikan dengan seksama, memberi saran dan bimbingan spesifik. Dituntun dengan pertanyaan terkait permasalahan, sangat terbantu. Akan segera menyelesaikan tugas setelah konseling hari ini."',
                'image' => 'assets/images/landing/asset-konseling/image/anonim.png',
                'name' => 'Anonim'
            ],
            [
                'comment' => '"Psikolognya mendengar dan menyimak cerita saya selama proses konseling dan juga menjelaskan masalah saya dengan cara yang mudah dipahami. Saya merasa nyaman dan tidak merasa dihakimi ketika saya menceritakan semua masalah saya."',
                'image' => 'assets/images/landing/asset-konseling/image/anonim.png',
                'name' => 'Anonim'
            ],
            [
                'comment' => '"Psikolog mendengarkan semua cerita dengan baik, bisa leluasa cerita dan mengungkapkan perasaan jadi lebih tenang, psikolog memperhatikan detail cerita sehingga bisa membantu menemukan akar permasalahannya"',
                'image' => 'assets/images/landing/asset-konseling/image/anonim.png',
                'name' => 'Anonim'
            ],
            [
                'comment' => '"Saya sangat senang dan terbantu, konselor ramah, ini pertama kali saya berkonsultasi dan berani cerita permasalahan yang saya alami. Sebelumnya saya takut untuk cerita permasalahan. Disini rasanya bisa cerita tanpa ada beban."',
                'image' => 'assets/images/landing/asset-konseling/image/anonim.png',
                'name' => 'Anonim'
            ],
        ];

        $faqs = [
            [
                'question' => 'Apa perbedaan Psikolog dan Peer Counselor?',
                'answer' => 'Psikolog merupakan tenaga profesional yang telah menyelesaikan pendidikan S1 Psikologi dan melanjutkan kuliah di program studi profesi untuk mendapatkan gelar Psikolog dan M.Psi. Sedangkan Peer Counselor merupakan individu yang telah mendapatkan pelatihan dari psikolog sehingga mempunyai kemampuan dasar untuk melakukan konseling termasuk dalam mengidentifikasi permasalahan dengan usia sebaya.
            '
            ],
            [
                'question' => 'Apabila sesi konseling telah berakhir, dan saya ingin menambah durasi sesi konseling apalah boleh?',
                'answer' => 'Menambah durasi konseling sangat diperbolehkan. Namun, durasi konseling ditentukan berdasarkan kebutuhan dalam penanganan suatu masalah. Sehingga, yang dapat merekomendasikan adalah psikolog dan keputusan dibuat bersama antara klien dengan psikolog atau peer counselor. Jika klien bersedia, maka durasi konseling akan dilanjutkan.
            '
            ],
            [
                'question' => 'Apakah privasi saya akan terjamin?',
                'answer' => 'Tentu saja, seluruh hal yang akan kamu sampaikan saat sesi konseling akan dijaga kerahasiaannya oleh psikolog/peer counsellor kami. Selain itu, psikolog serta peer counsellor kami sangat menjunjung tinggi kode etik psikologi, sehingga kamu dapat bebas dalam menyampaikan sesuatu saat sesi konseling berlangsung.
            '
            ],
            [
                'question' => 'Apakah ada batasan usia untuk konseling?',
                'answer' => 'Tidak ada batasan usia dalam konseling, sehingga konseling bisa digunakan untuk berbagai usia.
            '
            ],
            [
                'question' => 'Apakah saya bisa memilih psikolog yang menangani?',
                'answer' => "SobatBinar tidak dapat memilih psikolog dengan nama tertentu. Namun demi kenyamanan SobatBinar, SobatBinar diperbolehkan mengajukan karakter psikolog yang diinginkan (Seperti: Jenis kelamin tertentu, agama tertentu, usia tertentu, maupun psikolog yang sudah menikah ataupun belum)
            "
            ],
        ];

        return view('moduls.landing-new.produk-konseling')->with([
            'psikologs' => $psikologs,
            'weeksOn' => $weeksOn,
            'weeksOff' => $weeksOff,
            'weekdayPricesOn' => $weekdayPricesOn,
            'weekdayPricesOff' => $weekdayPricesOff,
            'weekendPricesOn' => $weekendPricesOn,
            'weekendPricesOff' => $weekendPricesOff,
            'peerOnlines' => $peerOnlines,
            'peerOfflines' => $peerOfflines,
            'peers' => $peers,
            'faqs' => $faqs,
            'konselings' => $konselings,
            'testimonis' => $testimonis,
        ]);
    }

    public function psikotest_new(Request $request)
    {
        $visimisis = [
            [
                'moto' => 'Profesional',
            ],
            [
                'moto' => 'Alat Tes Terstandar',
            ],
            [
                'moto' => 'Biaya Terjangkau',
            ],
            [
                'moto' => 'Fleksibel',
            ],
        ];

        $testimoni_psikotes = [
            [
                'category' => 'Perusahaan',
                'mitra' => [
                    [
                        'logo' => 'assets/images/landing/asset-tentang/mitra-afiliasi/mitra10.png',
                        'name' => 'PT Parna Maspion Sejahtera',
                        'total' => '40 Karyawan',
                    ],
                    [
                        'logo' => 'assets/images/landing/asset-tentang/mitra-afiliasi/mitra15.png',
                        'name' => 'PT Bara Blasting Perkasa',
                        'total' => '7 Karyawan',
                    ],
                ],
            ],
            [
                'category' => 'Instansi Pendidikan',
                'mitra' => [
                    [
                        'logo' => 'assets/images/landing/asset-tentang/mitra-afiliasi/mitra3.png',
                        'name' => 'Calon Dosen Non PNS UNAIR',
                        'total' => '1 Karyawan',
                    ],
                    [
                        'logo' => 'assets/images/landing/asset-psikotes/yayasan-darussalam.png',
                        'name' => 'Calon Guru Yayasan Darussalam',
                        'total' => '55 Karyawan',
                    ],
                    [
                        'logo' => 'assets/images/landing/asset-psikotes/yayasan-darussalam.png',
                        'name' => 'Calon Kepala Sekolah Yayasan Darussalam',
                        'total' => '4 Karyawan',
                    ],
                ],
            ],
            [
                'category' => 'Individu',
                'mitra' => [
                    [
                        'logo' => 'assets/images/landing/asset-psikotes/vector-person2.png',
                        'name' => 'Individu',
                        'total' => '8 Karyawan',
                    ],
                ],
            ],
        ];

        $individus = [
            [
                'illustrasi' => 'assets/images/landing/asset-psikotes/illustrasi/psikotes-individu/tes-memori.png',
                'jenis_tes' => 'Tes Memori‍',
                'harga' => 'Rp129.999',
                'keterangan' => [
                    'laporan_tertulis' => true,
                    'konseling_hasil_tes' => false,
                ],
            ],
            [
                'illustrasi' => 'assets/images/landing/asset-psikotes/illustrasi/psikotes-individu/tes-selflove.png',
                'jenis_tes' => 'Tes Self-Love‍',
                'harga' => 'Rp99.000',
                'keterangan' => [
                    'laporan_tertulis' => true,
                    'konseling_hasil_tes' => false,
                ],
            ],
            [
                'illustrasi' => 'assets/images/landing/asset-psikotes/illustrasi/psikotes-individu/tes-dimensia.png',
                'jenis_tes' => 'Tes Dimensia',
                'harga' => 'Rp199.999',
                'keterangan' => [
                    'laporan_tertulis' => true,
                    'konseling_hasil_tes' => false,
                ],
            ],
            [
                'illustrasi' => 'assets/images/landing/asset-psikotes/illustrasi/psikotes-individu/tes-stress.png',
                'jenis_tes' => 'Tes Stress‍',
                'harga' => 'Rp159.000',
                'keterangan' => [
                    'laporan_tertulis' => true,
                    'konseling_hasil_tes' => true,
                ],
            ],
            [
                'illustrasi' => 'assets/images/landing/asset-psikotes/illustrasi/psikotes-individu/tes-depresi.png',
                'jenis_tes' => 'Tes Depresi',
                'harga' => 'Rp159.000',
                'keterangan' => [
                    'laporan_tertulis' => true,
                    'konseling_hasil_tes' => true,
                ],
            ],
            [
                'illustrasi' => 'assets/images/landing/asset-psikotes/illustrasi/psikotes-individu/tes-kecemasan.png',
                'jenis_tes' => 'Tes Kecemasan',
                'harga' => 'Rp159.000',
                'keterangan' => [
                    'laporan_tertulis' => true,
                    'konseling_hasil_tes' => false,
                ],
            ],
            [
                'illustrasi' => 'assets/images/landing/asset-psikotes/illustrasi/psikotes-individu/tes-kecemasanplus.png',
                'jenis_tes' => 'Tes Kecemasan+',
                'harga' => 'Rp229.000',
                'keterangan' => [
                    'laporan_tertulis' => true,
                    'konseling_hasil_tes' => true,
                ],
            ],
            [
                'illustrasi' => 'assets/images/landing/asset-psikotes/illustrasi/psikotes-individu/tes-fungsikognitif.png',
                'jenis_tes' => 'Tes Fungsi Kognitif',
                'harga' => 'Rp129.999',
                'keterangan' => [
                    'laporan_tertulis' => true,
                    'konseling_hasil_tes' => false,
                ],
            ],
        ];

        $staffs = [
            [
                'paket' => 'Paket 1',
                'harga' => 'Rp450.000',
                'keterangan' => [
                    'tes_intelegensi' => true,
                    'tes_sikap_kerja' => true,
                    'tes_kepribadian' => true,
                    'focus_group_discussion' => true,
                    'wawancara' => false,
                    'psikogram' => true,
                    'deskripsi' => true,
                    'proyeksi_pengembangan' => false,
                    'saran_pengembangan' => false,
                ],
            ],
            [
                'paket' => 'Paket 2',
                'harga' => 'Rp600.000',
                'keterangan' => [
                    'tes_intelegensi' => true,
                    'tes_sikap_kerja' => true,
                    'tes_kepribadian' => true,
                    'focus_group_discussion' => true,
                    'wawancara' => false,
                    'psikogram' => true,
                    'deskripsi' => true,
                    'proyeksi_pengembangan' => true,
                    'saran_pengembangan' => true,
                ],
            ],
            [
                'paket' => 'Paket 3',
                'harga' => 'Rp550.000',
                'keterangan' => [
                    'tes_intelegensi' => true,
                    'tes_sikap_kerja' => true,
                    'tes_kepribadian' => true,
                    'focus_group_discussion' => false,
                    'wawancara' => true,
                    'psikogram' => true,
                    'deskripsi' => true,
                    'proyeksi_pengembangan' => true,
                    'saran_pengembangan' => true,
                ],
            ],
            [
                'paket' => 'Paket 4',
                'harga' => 'Rp750.000',
                'keterangan' => [
                    'tes_intelegensi' => true,
                    'tes_sikap_kerja' => true,
                    'tes_kepribadian' => true,
                    'focus_group_discussion' => true,
                    'wawancara' => true,
                    'psikogram' => true,
                    'deskripsi' => true,
                    'proyeksi_pengembangan' => true,
                    'saran_pengembangan' => true,
                ],
            ],
        ];

        $supervisors = [
            [
                'paket' => 'Paket 1',
                'harga' => 'Rp650.000',
                'keterangan' => [
                    'tes_intelegensi' => true,
                    'tes_sikap_kerja' => true,
                    'tes_kepribadian' => true,
                    'focus_group_discussion' => false,
                    'wawancara' => true,
                    'psikogram' => true,
                    'deskripsi' => true,
                    'proyeksi_pengembangan' => false,
                    'saran_pengembangan' => false,
                ],
            ],
            [
                'paket' => 'Paket 2',
                'harga' => 'Rp600.000',
                'keterangan' => [
                    'tes_intelegensi' => true,
                    'tes_sikap_kerja' => true,
                    'tes_kepribadian' => true,
                    'focus_group_discussion' => false,
                    'wawancara' => true,
                    'psikogram' => true,
                    'deskripsi' => true,
                    'proyeksi_pengembangan' => true,
                    'saran_pengembangan' => true,
                ],
            ],
        ];

        $pendidikans = [
            [
                'illustrasi' => 'assets/images/landing/asset-psikotes/illustrasi/psikotes-pendidikan/paket-wowgayabelajar.png',
                'paket' => 'Paket WOW Gaya Belajar',
                'harga' => 'Rp99.999',
                'keterangan' => [
                    'laporan_tertulis' => false,
                    'tes_gaya_belajar' => true,
                    'konseling_hasil_tes' => false,
                ],
            ],
            [
                'illustrasi' => 'assets/images/landing/asset-psikotes/illustrasi/psikotes-pendidikan/paket-hematcitacita.png',
                'paket' => 'Paket Hemat Cita-Cita',
                'harga' => 'Rp99.999',
                'keterangan' => [
                    'laporan_tertulis' => true,
                    'tes_gaya_belajar' => false,
                    'konseling_hasil_tes' => false,
                ],
            ],
            [
                'illustrasi' => 'assets/images/landing/asset-psikotes/illustrasi/psikotes-pendidikan/paket-lengkapteskepribadian.png',
                'paket' => 'Paket Lengkap Tes Kepribadian',
                'harga' => 'Rp129.999',
                'keterangan' => [
                    'laporan_tertulis' => true,
                    'tes_gaya_belajar' => false,
                    'konseling_hasil_tes' => true,
                ],
            ],
            [
                'illustrasi' => 'assets/images/landing/asset-psikotes/illustrasi/psikotes-pendidikan/tes-memori.png',
                'paket' => 'Tes Memori',
                'harga' => 'Rp99.999',
                'keterangan' => [
                    'laporan_tertulis' => true,
                    'tes_gaya_belajar' => false,
                    'konseling_hasil_tes' => false,
                ],
            ],
            [
                'illustrasi' => 'assets/images/landing/asset-psikotes/illustrasi/psikotes-pendidikan/tes-paketminipenjurusan.png',
                'paket' => 'Tes Paket Mini Penjurusan',
                'harga' => 'Rp255.500',
                'keterangan' => [
                    'laporan_tertulis' => true,
                    'tes_gaya_belajar' => false,
                    'konseling_hasil_tes' => false,
                ],
            ],
            [
                'illustrasi' => 'assets/images/landing/asset-psikotes/illustrasi/psikotes-pendidikan/tes-paketgoldpenjurusan.png',
                'paket' => 'Tes Paket Gold Penjurusan',
                'harga' => 'Rp319.000',
                'keterangan' => [
                    'laporan_tertulis' => true,
                    'tes_gaya_belajar' => false,
                    'konseling_hasil_tes' => false,
                ],
            ],
            [
                'illustrasi' => 'assets/images/landing/asset-psikotes/illustrasi/psikotes-pendidikan/paket-tahuminatbakat.png',
                'paket' => 'Paket Tahu Bakat Minat',
                'harga' => 'Rp351.000',
                'keterangan' => [
                    'laporan_tertulis' => true,
                    'tes_gaya_belajar' => true,
                    'konseling_hasil_tes' => true,
                ],
            ],
            [
                'illustrasi' => 'assets/images/landing/asset-psikotes/illustrasi/psikotes-pendidikan/paket-lengkappenjurusan.png',
                'paket' => 'Paket Lengkap Penjurusan',
                'harga' => 'Rp399.000',
                'keterangan' => [
                    'laporan_tertulis' => true,
                    'tes_gaya_belajar' => true,
                    'konseling_hasil_tes' => true,
                ],
            ],
        ];

        $communitys = [
            [
                'illustrasi' => 'assets/images/landing/asset-psikotes/illustrasi/psikotes-komunitas/tes-kesiapanpernikahan.png',
                'paket' => 'Tes Kesiapan Pernikahan',
                'harga' => 'Rp299.999',
                'keterangan' => [
                    'laporan_tertulis' => true,
                    'konseling_hasil_tes' => true,
                ],
            ],
            [
                'illustrasi' => 'assets/images/landing/asset-psikotes/illustrasi/psikotes-komunitas/tes-kesiapanorangtua.png',
                'paket' => 'Tes Kesiapan Menjadi Orang Tua',
                'harga' => 'Rp299.999',
                'keterangan' => [
                    'laporan_tertulis' => true,
                    'konseling_hasil_tes' => true,
                ],
            ],
            [
                'illustrasi' => 'assets/images/landing/asset-psikotes/illustrasi/psikotes-komunitas/tes-kecocokanpasangan.png',
                'paket' => 'Tes Kecocokan Pasangan',
                'harga' => 'Rp299.999',
                'keterangan' => [
                    'laporan_tertulis' => true,
                    'konseling_hasil_tes' => true,
                ],
            ],
            [
                'illustrasi' => 'assets/images/landing/asset-psikotes/illustrasi/psikotes-komunitas/tes-stress.png',
                'paket' => 'Tes Stress',
                'harga' => 'Rp159.999',
                'keterangan' => [
                    'laporan_tertulis' => true,
                    'konseling_hasil_tes' => true,
                ],
            ],
            [
                'illustrasi' => 'assets/images/landing/asset-psikotes/illustrasi/psikotes-komunitas/tes-depresi.png',
                'paket' => 'Tes Depresi',
                'harga' => 'Rp159.999',
                'keterangan' => [
                    'laporan_tertulis' => true,
                    'konseling_hasil_tes' => true,
                ],
            ],
            [
                'illustrasi' => 'assets/images/landing/asset-psikotes/illustrasi/psikotes-komunitas/tes-kecemasan.png',
                'paket' => 'Tes Kecemasan',
                'harga' => 'Rp159.999',
                'keterangan' => [
                    'laporan_tertulis' => true,
                    'konseling_hasil_tes' => true,
                ],
            ],
            [
                'illustrasi' => 'assets/images/landing/asset-psikotes/illustrasi/psikotes-komunitas/tes-kecemasanplus.png',
                'paket' => 'Tes Kecemasan+',
                'harga' => 'Rp299.999',
                'keterangan' => [
                    'laporan_tertulis' => true,
                    'konseling_hasil_tes' => true,
                ],
            ],
            [
                'illustrasi' => 'assets/images/landing/asset-psikotes/illustrasi/psikotes-komunitas/tes-fungsikognitif.png',
                'paket' => 'Tes Fungsi Kognitif',
                'harga' => 'Rp129.999',
                'keterangan' => [
                    'laporan_tertulis' => true,
                    'konseling_hasil_tes' => false,
                ],
            ],
            [
                'illustrasi' => 'assets/images/landing/asset-psikotes/illustrasi/psikotes-komunitas/tes-memori.png',
                'paket' => 'Tes Memori',
                'harga' => 'Rp129.999',
                'keterangan' => [
                    'laporan_tertulis' => true,
                    'konseling_hasil_tes' => false,
                ],
            ],
            [
                'illustrasi' => 'assets/images/landing/asset-psikotes/illustrasi/psikotes-komunitas/tes-dimensia.png',
                'paket' => 'Tes Dimensia',
                'harga' => 'Rp199.999',
                'keterangan' => [
                    'laporan_tertulis' => true,
                    'konseling_hasil_tes' => false,
                ],
            ],
        ];

        $dokumentasis = [
            [
                'image' => 'assets/images/landing/asset-psikotes/dokumentasi-psikotes/dokumentasi1.png',
                'jenis_psikotes' => 'Psikotes Offline'
            ],
            [
                'image' => 'assets/images/landing/asset-psikotes/dokumentasi-psikotes/dokumentasi2.png',
                'jenis_psikotes' => 'Psikotes Offline'
            ],
            [
                'image' => 'assets/images/landing/asset-psikotes/dokumentasi-psikotes/dokumentasi3.png',
                'jenis_psikotes' => 'Psikotes Offline'
            ],
            [
                'image' => 'assets/images/landing/asset-psikotes/dokumentasi-psikotes/dokumentasi4.png',
                'jenis_psikotes' => 'Psikotes Online'
            ],
            [
                'image' => 'assets/images/landing/asset-psikotes/dokumentasi-psikotes/dokumentasi5.png',
                'jenis_psikotes' => 'Psikotes Online'
            ],
        ];

        $testimonis = [
            [
                'comment' => '“Untuk saya yang baru pertama kali ikut tes, merasa sangat terbantu karena dibimbing dari awal dan diajari terlebih dahulu bahkan juga dikasih contoh sebelum memulai tes, jadi tidak seperti orang kebingungan”',
                'image' => 'assets/images/landing/asset-konseling/image/anonim.png',
            ],
            [
                'comment' => '“Pengalaman mengikuti tes ini benar-benar mengesankan, proses seru dan asik, ditambah lagi para staf yang ramah dan tidak memaksa, menciptakan suasana yang nyaman sehingga saya merasa lebih terbuka”',
                'image' => 'assets/images/landing/asset-konseling/image/anonim.png',
            ],
            [
                'comment' => '“Psikotes berjalan cukup baik. Dengan adanya penjelasan petunjuk yang diberikan membuat saya lebih memahami jenis soal yang nantinya dikerjakan”',
                'image' => 'assets/images/landing/asset-konseling/image/anonim.png',
            ],
            [
                'comment' => '“Jujur pengalaman pertama kali mengikuti psikotes secara online. Meskipun dilakukan secara virtual, semuanya berjalan lancar berkat panduan yang jelas”',
                'image' => 'assets/images/landing/asset-konseling/image/anonim.png',
            ],
        ];

        $faqs = [
            [
                'question' => 'Apa yang dimaksud dengan ‘Psikotes’?',
                'answer' => 'Kegiatan psikotes merupakan suatu bentuk asesmen psikologi yang digunakan untuk mengukur aspek-aspek psikologi dari seorang individu, seperti kemampuan kognitif, kepribadian, keadaan emosional, dan lainnya.
            '
            ],
            [
                'question' => 'Apa manfaat dari mengikuti kegiatan psikotes?',
                'answer' => 'Tes psikologi dapat memberikan informasi mengenai kemampuan kognitif, kepribadian, keadaan emosional, dan kesehatan mental dari seorang individu. Hasil psikotes juga dapat membantu dalam mengidentifikasi potensi diri yang dapat digunakan untuk membantu dalam membuat keputusan tentang masalah pribadi atau profesional.
            '
            ],
            [
                'question' => 'Apa saja jenis layanan psikotes pada Berbinar?',
                'answer' => 'PT. Berbinar Insightful Indonesia menyediakan 4 kategori layanan psikotes, yaitu asesmen psikologi individu, asesmen psikologi perusahaan, asesmen psikologi instansi pendidikan, dan asesmen psikologi komunitas. Asesmen psikologi individu tersedia 8 jenis tes, termasuk di dalamnya adalah tes memori dan tes kecemasan. Asesmen psikologi perusahaan, kami menyediakan 4 paket tes untuk level staff dan 2 paket tes untuk level supervisor. Asesmen psikologi instansi pendidikan tersedia 8 jenis tes, termasuk tes gaya belajar dan tes penjurusan. Lalu asesmen psikologi komunitas tersedia 8 jenis tes, termasuk tes kesiapan pernikahan dan tes kesiapan menjadi orang tua.
            '
            ],
            [
                'question' => 'Berapa harga layanan psikotes Berbinar?',
                'answer' => 'Untuk informasi mengenai harga layanan psikotes Berbinar, silakan klik link berikut ini Pricelist atau pricelist yang tertera pada halaman ini
            '
            ],
            [
                'question' => 'Apakah tes dilaksanakan secara individual atau kelompok?',
                'answer' => 'Kegiatan psikotes dapat dilaksanakan secara individual maupun kelompok, tergantung dari layanan psikotes yang diambil. Sebagai contoh, untuk tes minat bakat, pada umumnya dilaksanakan secara individual, sedangkan
            '
            ],
            [
                'question' => 'Apakah tes dilaksanakan secara Online atau Offline?',
                'answer' => 'Kegiatan psikotes dari PT. Berbinar Insightful Indonesia dapat dilaksanakan secara Online maupun Offline.
            '
            ],
            [
                'question' => 'Apa saja yang perlu dipersiapkan dalam pelaksanaan psikotes Online?',
                'answer' => 'Bagi peserta psikotes yang melaksanakan secara Online, peserta wajib menyiapkan jaringan internet yang kuat, laptop yang stabil, dan baterai yang penuh. Jika peserta tidak menyiapkan ketiga hal tersebut, dapat mempengaruhi dalam keoptimalan pelaksanaan dan hasil psikotes tersebut.
            '
            ],
            [
                'question' => 'Bagaimana cara mendaftar?',
                'answer' => 'Untuk mendaftar psikotes, silahkan mengisi data diri Anda di Google Form pada link berikut: bit.ly/DaftarPsikotesBerbinar
            '
            ],
        ];

        return view('moduls.landing-new.produk-psikotest')->with([
            'visimisis' => $visimisis,
            'testimoni_psikotes' => $testimoni_psikotes,
            'individus' => $individus,
            'staffs' => $staffs,
            'supervisors' => $supervisors,
            'pendidikans' => $pendidikans,
            'communitys' => $communitys,
            'dokumentasis' => $dokumentasis,
            'testimonis' => $testimonis,
            'faqs' => $faqs,
        ]);
    }

    public function kelas_new(Request $request)
    {
        $products = [
            [
                'vector' => 'assets/images/landing/asset-kelas/produk/vector-class-journey.png',
                'produk' => '101 Class Journey',
                'deskripsi' => 'Memperluas wawasan keilmuan dan keterampilan yang berasal dari ahli',
                'route' => '101-class-journey' // name of the sub routes
            ],
            [
                'vector' => 'assets/images/landing/asset-kelas/produk/vector-bisikan.png',
                'produk' => 'BISIKAN',
                'deskripsi' => 'Sharing session terkait psikologi lewat instagram Berbinar dan tersedia juga di youtube channel',
                'route' => '#'
            ],
            [
                'vector' => 'assets/images/landing/asset-kelas/produk/vector-berbinar.png',
                'produk' => 'Berbinar+',
                'deskripsi' => 'Bundling package dimana customer bisa menggunakan produk kelas, konseling, dan psikotes.',
                'route' => 'berbinar-plus-new'
            ],
            [
                'vector' => 'assets/images/landing/asset-kelas/produk/vector-berarty.png',
                'produk' => 'BERARTY',
                'deskripsi' => 'Sharing session terkait psikologi lewat instagram Berbinar dan tersedia juga di youtube channel',
                'route' => '#'
            ],
            [
                'vector' => 'assets/images/landing/asset-kelas/produk/vector-premium-class.png',
                'produk' => 'Premium Class',
                'deskripsi' => 'Sharing session terkait psikologi lewat instagram Berbinar dan tersedia juga di youtube channel',
                'route' => '#'
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

        return view('moduls.landing-new.produk-kelas')->with([
            'faqs' => $faqs,
            'products' => $products,
            'participants' => $participants,
        ]);
    }

    public function berbinar_plus_new(){
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

    public function  class_journey_new() {

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


        return view('moduls.landing-new.class-journey', compact('layanan_class_journey', 'benefit_class_journey', 'faqs', 'poster', 'link_pendaftaran'));
    }

    public function consulting_new(Request $request)
    {
        $layanan_consultings = [
            [
                'category' => 'Rekrutmen & Seleksi',
                'price' => 'Rp1.800.000',
                'description' => ['Penyusunan kriteria jabatan dan deskripsi pekerjaan', 'Membuat proses rekrutmen dari sistem tes hingga wawancara', 'Melaporkan evaluasi kandidat berdasarkan kompetensi'],
                'link' => 'https://forms.gle/6fiypk4DtqJLs4mAA',
                'icon' => 'assets/images/landing/asset-consulting/icon-produk/Rekrutmen dan Seleksi.png'
            ],
            [
                'category' => 'Pelatihan & Pengembangan',
                'price' => 'Rp1.500.000',
                'description' => ['Menyusun kurikulum pelatihan', 'Menganalisa kebutuhan pelatihan berdasarkan kinerja dan target bisnis', 'Evaluasi pasca-pelatihan untuk  menilai peningkatan keterampilan'],
                'link' => 'https://forms.gle/6fiypk4DtqJLs4mAA',
                'icon' => 'assets/images/landing/asset-consulting/icon-produk/Pelatihan & Pengembangan.png'
            ],
            [
                'category' => 'Analisis Beban Kerja & Perencanaan Organisasi',
                'price' => 'Rp1.800.000',
                'description' => ['Menganalisa beban kerja setiap jabatan', 'Peninjauan dan perencanaan struktur organisasi yang lebih efektif', 'Rekomendasi jumlah optimal staf berdasarkan beban kerja'],
                'link' => 'https://forms.gle/6fiypk4DtqJLs4mAA',
                'icon' => 'assets/images/landing/asset-consulting/icon-produk/Analisis Beban Kerja & Perencanaan Organisasi.png'
            ],
            [
                'category' => 'Coaching',
                'price' => 'Rp2.000.000',
                'description' => ['Melakukan sesi coaching personal untuk individu atau tim secara tatap muka', 'Pembahasan tujuan dan perencanaan pengembangan dengan berbagai metode penyesuaian strategi berdasarkan progress'],
                'link' => 'https://forms.gle/6fiypk4DtqJLs4mAA',
                'icon' => 'assets/images/landing/asset-consulting/icon-produk/Coaching.png'
            ],
            [
                'category' => 'Penilaian Kinerja',
                'price' => 'Rp2.150.000',
                'description' => ['Penyusunan indikator kinerja utama (KPI) yang jelas dan terukur', 'Implementasi metode evaluasi kinerja', 'Laporan performa karyawan dengan rekomendasi pengembangan', 'Feedback terstruktur yang membantu peningkatan kompetensi'],
                'link' => 'https://forms.gle/6fiypk4DtqJLs4mAA',
                'icon' => 'assets/images/landing/asset-consulting/icon-produk/Penilaian Kerja.png'
            ],
            [
                'category' => 'Kompensasi & Benefit',
                'price' => 'Rp1.780.000',
                'description' => ['Analisis dan benchmark terhadap standar industri terkait gaji dan benefit', 'Penyusunan paket kompensasi yang adil dan menarik bagi karyawan', 'Rekomendasi mengenai insentif dan benefit tambahan yang relevan'],
                'link' => 'https://forms.gle/6fiypk4DtqJLs4mAA',
                'icon' => 'assets/images/landing/asset-consulting/icon-produk/Kompensasi & Benefit.png'
            ],
            [
                'category' => 'Standar Operasional Prosedur (SOP)',
                'price' => 'Rp1.600.000',
                'description' => ['Identifikasi dan dokumentasi alur proses kerja', 'Penyusunan dokumen SOP yang jelas dan terstruktur', 'Implementasi dan sosialisasi SOP kepada seluruh staf', 'Evaluasi dan update SOP secara berkala sesuai perubahan kondisi bisnis'],
                'link' => 'https://forms.gle/6fiypk4DtqJLs4mAA',
                'icon' => 'assets/images/landing/asset-consulting/icon-produk/Standar Operasional Prosedur.png'
            ],
        ];

        $bundlings = [
            [
                'category' => 'Rekrutmen & Seleksi + SOP',
                'discount' => 'Rp3.400.000',
                'price' => 'Rp3.060.000',
                'link' => 'https://forms.gle/6fiypk4DtqJLs4mAA'
            ],
            [
                'category' => 'Analisis Beban Kerja & Perencanaan Organisasi + Penilaian Kerja',
                'discount' => 'Rp3.950.000',
                'price' => 'Rp3.555.000',
                'link' => 'https://forms.gle/6fiypk4DtqJLs4mAA'
            ],
            [
                'category' => 'Pelatihan & Pengembangan + Coaching',
                'discount' => 'Rp3.500.000',
                'price' => 'Rp3.150.000',
                'link' => 'https://forms.gle/6fiypk4DtqJLs4mAA'
            ],
            [
                'category' => 'Penilaian Kinerja + Kompensasi & Benefit',
                'discount' => 'Rp3.930.000',
                'price' => 'Rp3.537.000',
                'link' => 'https://forms.gle/6fiypk4DtqJLs4mAA'
            ],
        ];

        $alur_pendaftaran = [
            [
                'title' => "Pengisian Link Google Form",
                'description' => "klik mulai sekarang pada layanan berbinar consulting dan isi data diri sobatbinar secara lengkap dan jelas sesuai yang tersedia dalam link",
                'link' => "assets/images/landing/asset-consulting/link-google-form.png"
            ],
            [
                'title' => "Konfirmasi Pendaftaran",
                'description' => "lakukan konfirmasi kepada (cp) tim berbinar dan tunggu 1x24 jam untuk dapatkan informasi selengkapnya",
                'link' => "assets/images/landing/asset-consulting/check-mark-pendaftaran.png"
            ],
            [
                'title' => "Informasi Jadwal dan Pembayaran",
                'description' => "(cp) tim berbinar akan melakukan konfirmasi untuk pemberitahuan mengenai ketersediaan jadwal consulting dan melakukan pembayaran pada rekening bank yang tersedia",
                'link' => "assets/images/landing/asset-consulting/jadwal-dan-pembayaran.png"
            ],
            [
                'title' => "Verifikasi Pembayaran",
                'description' => "kirimkan bukti pembayaran kepada (cp) tim berbinar untuk melakukan pengecekan",
                'link' => "assets/images/landing/asset-consulting/check-mark-pembayaran.png"
            ],
            [
                'title' => "Jadwal pelaksanaan",
                'description' => "(cp) tim berbinar akan mengirimkan jadwal yang telah ditentukan beserta dengan link yang akan diakses dan teknis pelaksanaan",
                'link' => "assets/images/landing/asset-consulting/jadwal-pelaksanaan.png"
            ],
            [
                'title' => "Pelaksanaan Layanan Consulting",
                'description' => "setelah mengetahui keseluruhan informasi, sobatbinar bisa memulai layanan consulting bersama konsultan sesuai jadwal yang telah ditentukan",
                'link' => "assets/images/landing/asset-consulting/layanan-consulting.png"
            ]
        ];

        $faqs = [
            [
                'question' => 'Apakah saya bisa mendapatkan tawaran paket bundling di setiap minggunya dalam satu bulan?',
                'answer' => 'Tidak, paket bundling hanya tersedia pada tiap minggu pertama di bulan genap saja. SobatBinar bisa dapatkan informasi lebih lengkap dengan mengunjungi website atau seluruh media sosial Berbinar Insightful Indonesia.'
            ],
            [
                'question' => 'Bagaimana keamanan database bagi perusahaan/komunitas/organisasi yang menggunakan layanan consulting?',
                'answer' => 'Keamanan Database Perusahaan/Komunitas/Organisasi milik SobatBinar pada layanan Consulting dapat dipastikan bergaransi aman. Karena Berbinar Insightful Indonesia termasuk dalam Perusahaan Layanan Psikolog yang diatur dalam Kode Etik Himpunan Psikologi Indonesia.'
            ],
            [
                'question' => 'Berapa jumlah karyawan yang bisa melakukan pendaftaran pada layanan consulting?',
                'answer' => 'Jumlah karyawan yang bisa SobatBinar ajukan saat pendaftaran layanan consulting dengan minimal 10 hingga lebih dari 100 karyawan.'
            ]
        ];

        return view('moduls.landing-new.produk-consulting')->with([
            'layanan_consultings' => $layanan_consultings,
            'bundlings' => $bundlings,
            'alur_pendaftaran' => $alur_pendaftaran,
            'faqs' => $faqs,
        ]);
    }

    public function emoShuffle() {
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

    public function bisikan_new() {
        
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

    public function faq_new(Request $request)
    {
        return view('moduls.landing-new.faq')->with([]);
    }

    public function term_condition_new(Request $request)
    {
        $term_conditions = [
            [
                'description' => 'Melakukan pembayaran ke Bank Mandiri dengan no rekening 1400020763711 a.n. Berbinar Insightful Indonesia dengan aturan transfer 1x24 jam.'
            ],
            [
                'description' => 'Tidak membalas pesan admin dalam 1x24 jam, pendaftaran oleh klien secara otomatis dibatalkan.'
            ],
            [
                'description' => 'Tidak membalas pesan admin dalam 1x24 jam, jadwal yang sudah ditentukan oleh klien berhak untuk dirubah oleh Berbinar dan kesepakatan dari klien.'
            ],
            [
                'description' => 'Tidak membalas pesan admin dalam 2x24 jam setelah melakukan pembayaran, pembayaran dianggap hangus.'
            ],
            [
                'description' => 'Pengajuan proses pembatalan layanan konseling dapat dilakukan dalam kurun waktu 1x24 jam setelah proses administrasi dan dana yang telah dibayarkan akan dikembalikan 100%.'
            ],
            [
                'description' => 'Setiap sesi konseling memiliki durasi standar 60 (enam puluh) menit.'
            ],
            [
                'description' => 'Apabila sesi konseling berlangsung melebihi sesi yang sudah disepakati, waktu yang melebihi akan dihitung sebagai sesi baru, dan biaya tambahan akan diberlakukan sesuai tarif yang berlaku.'
            ],
            [
                'description' => 'Setiap sesi psikotes diwajibkan mempersiapkan dua device untuk kebutuhan psikotes dan menyiapkan perlengkapan yang telah diinformasikan saat proses pendaftaran layanan psikotes.'
            ],
            [
                'description' => 'Apabila sesi psikotes berlangsung peserta diharapkan mendengarkan instruksi pengerjaan psikotes terlebih dahulu sebelum mengerjakan setiap bagian soal psikotes.'
            ],
            [
                'description' => 'Setiap sesi kelas, peserta akan diberikan waktu selama 3 (tiga) hari kerja untuk memanfaatkan sesi personal mentoring bersama mentor.'
            ],
            [
                'description' => 'Peserta dapat memberikan pertanyaan dalam grup whatsapp pada jam 09.00 WIB hingga 16.00 WIB.'
            ],
            [
                'description' => 'Mentor akan merespon pertanyaan pada pukul 18.00 WIB hingga 20.00 WIB, namun dimungkinkan di luar jam tersebut jika mentor berkenan.'
            ],
            [
                'description' => 'Peserta akan diberikan perpanjangan waktu personal mentoring apabila mentor kurang responsif selama sesi personal mentoring. Jumlah perpanjangan waktu akan dipertimbangkan oleh Berbinar Insightful Indonesia.'
            ],
            [
                'description' => 'Narahubung akan mendampingi peserta dalam grup WhatsApp bersama mentor hingga akhir sesi.'
            ],
            [
                'description' => 'Setelah sesi personal mentoring berakhir, peserta dapat mengklaim sertifikat.'
            ],
        ];

        $locations = [
            [
                'address' => 'Alamat Utama',
                'address_detail' => [
                    'Jl. Kebonsari III No.1F, Kebonsari, Kec. Jambangan, Kota Surabaya, Jawa Timur, 60233'
                ]
            ],
            [
                'address' => 'Alamat yang bisa dikunjungi',
                'address_detail' => [
                    'Psikolog: Surabaya, Kediri, Sidoarjo, Samarinda, Jakarta, dan Malang',
                    'Konseling: Surabaya, Malang, dan Jakarta'
                ]
            ],
        ];

        return view('moduls.landing-new.term-condition')->with([
            'term_conditions' => $term_conditions,
            'locations' => $locations
        ]);
    }

    public function privacy_policy_new(Request $request)
    {
        return view('moduls.landing-new.privacy-policy')->with([]);
    }


    public function karir_new()
    {
        $positions = Hiring_Positions::with(['HiringPositionsJobDescription', 'Hiring_Positions_Requirement'])->where('is_active', true)->get();

        //get list of field photo where the motm field is true
        $list_image = TableStaff::where('motm', 'yes')->pluck('photo')->map(function ($photo) {
            return $photo ? '/image/' . $photo : '/assets/images/landing/keluarga-berbinar/dummy.png';
        });
        
        $testimonis = [
            [
                'comment' => 'Banyak ilmu dan pengalaman baru yang didapat di Berbinar. Bukan hanya terkait hardskill, tapi juga softskill seperti kedisiplinan, kerjasama tim, dan komunikasi. Temen-temen disini juga ramah dan asik-asik semua. Magang di Berbinar bisa jadi opsi terbaik buat yang baru mau terjun ke dunia kerja biar nggak terlalu kaget.',
                'name' => 'Khalisah Oktavia',
                'image' => 'assets/images/landing/karir/testimoni/magang-oktavia.png',
                'division' => 'Secretary and Finance',
            ]
            ,
            [
                'comment' => 'Selama bekerja di Berbinar, saya selalu merasa tertantang keluar dari zona nyaman dan menjadi "the best version of yourself". Selain itu, banyak hal yang saya pelajari sebagai posisi manager yaitu task management, mengatur waktu, mengeluarkan ide baru dan pendapat.',
                'name' => 'Ismail Ridwan Arayana',
                'image' => 'assets/images/landing/karir/testimoni/magang-arayana.png',
                'division' => 'Human Resource',
            ],
            [
                'comment' => 'Lingkungan yang suportif, kesempatan bagi yang kurang pengalaman supaya bisa memiliki pengalaman yang sangat berharga.',
                'name' => 'Hairul Anam',
                'image' => 'assets/images/landing/karir/testimoni/magang-irul.png',
                'division' => 'Web and Mobile Apps Developer',
            ],
            [
                'comment' => 'They said: Never forget your first company. YAA Will Never Forget You! Aku selalu bersyukur pernah menjadi bagian perjalanan Berbinar. Langkah pertama yang membawaku sejauh ini . Walaupun perjalanannya tidak sempurna, tapi disini ku mendapatkan banyak pengalaman, teman dan pembelajaran. Senang sekali bertemu orang-orang profesional yang menyenangkan. Best Experience Ever!',
                'name' => 'Alifa Fatimatun Nazar',
                'image' => 'assets/images/landing/karir/testimoni/magang-alifa.png',
                'division' => 'Tiktok Creator',
            ],
            [
                'comment' => 'Magang di Berbinar sebagai Counseling Product Management memberi saya pengalaman luar biasa, terutama sebagai peer counselor. Saya belajar mendengarkan dengan empati, mendukung klien, sekaligus memahami pengelolaan layanan kesehatan mental. Selain memperkuat soft skill seperti komunikasi dan empati, saya juga mengasah keterampilan strategis dalam merancang program konseling. Berbinar adalah tempat yang sempurna untuk berkembang di bidang kesehatan mental!',
                'name' => "Shafiyyah Muthi'ah",
                'image' => 'assets/images/landing/karir/testimoni/magang-shfiyyah.png',
                'division' => 'Counseling Product Management',
            ],
            [
                'comment' => 'Banyak insight yang didapat, workflow juga jelas dan terstruktur. Anggotanya juga baik dan suportif juga sangat membantu karena saling backup jika terdapat kendala. Selama magang disini saya nyaman karena manfaatnya banyak sekali.',
                'name' => 'Kiara Allegria',
                'image' => 'assets/images/landing/karir/testimoni/magang-kiara.png',
                'division' => 'Instagram Creator',
            ],
            [
                'comment' => 'Selama magang di Berbinar sebagai Graphic Designer, saya banyak belajar hal-hal baru. Tim desain sangat solid dan kolaboratif, selalu bertukar pikiran untuk menghasilkan karya terbaik.',
                'name' => 'Fadhilah Putri Haryanti',
                'image' => 'assets/images/landing/karir/testimoni/magang-fadhillah.png',
                'division' => 'Graphic Designer',
            ],
            [
                'comment' => 'Ini honest review ya. Di waktu awal join itu masih bingung harus adaptasi dan kayak amaze sama rekan se-tim. Soalnya waktu aku cek daily report mereka itu progres kerjaannya bagus dan terstruktur banget. Terus aku juga amaze sama culture perusahaan yang sangat menjunjung tinggi kedisiplinan. Nah dari kebiasaan ngerjain tugas sebelum deadline, ngisi daily report tepat waktu, rutin ikut weekly meeting itu sekarang ngebentuk aku jadi sosok yang amat disiplin dan tanggung jawab terhadap tugas yang diberikan. Ohiya rekan se-tim ku asik dan seru banget orang-orangnya, kadang kita kalau udah selesai bahas kerjaan juga coba main game buat cooling down xixi. And next, I think buat pekerjaannya itu ngga terlalu memberatkan kita-kita yang masih pemula ini karena nantinya di awal bakal ada training sama manager divisi terus juga terkait jobdesc sebenarnya bisa dikerjakan kapan-kapan aja (fleksibel) tapi tetep harus inget deadline yang dikasih hehee',
                'name' => 'Wilda Maulidiyah',
                'image' => 'assets/images/landing/karir/testimoni/magang-wilda.png',
                'division' => 'Marketing Strategist & Sales',
            ],
            [
                'comment' => 'Berbinar itu jadi tempat pertama kali aku magang dan pengalamannya magang di Berbinar itu seru, menegangkan waktu pertama kali melayani klien, work flownya gak nyangka secepet itu dan untungnya aku bisa adaptasi, banyak belajar lagi tentang alat tes, staf-staf di Berbinar juga baik-baik, pokoknya ini jadi pengalaman magang yang seru dan challenging untuk aku',
                'name' => 'Talitha Aurelia Artedi',
                'image' => 'assets/images/landing/karir/testimoni/magang-talitha.png',
                'division' => 'Psychological Testing Product Management',
            ],
            [
                'comment' => 'Seru banget, ketemu temen-temen baru dari berbagai daerah. intern di Berbinar juga bikin lebih produktif karena ada daily report wajib yang harus diisi tiap harinya. Lovee banget intinya sama Berbinar.',
                'name' => 'Safitri',
                'image' => 'assets/images/landing/karir/testimoni/magang-safitri.png',
                'division' => 'Class Product Management',
            ],
        ];

        $faqs = [
            [
                'question' => 'Apakah magang di Berbinar dapat dikonversi ke SKS perkuliahan?',
                'answer' => 'Apabila SobatBinar nantinya menghendaki untuk mengkonversikan magang di Berbinar ke SKS atau KRS perkuliahan, SobatBinar bisa mengajukan proposal kerjasama, seperti MoU atau MoA kepada Berbinar.'
            ],
            [
                'question' => 'Pengumuman kelulusan magang diberitahukan kapan dan melalui media apa?',
                'answer' => 'Untuk tahapan kelulusan dari proses rekrutmen akan dikabarkan secara talent pool, dimana SobatBinar akan dihubungi oleh tim rekruter saat posisi pekerjaan sedang kosong melalui e-mail atau WhatsApp.'
            ],
            [
                'question' => 'Apakah ada peraturan perusahaan mengenai jam kerja magang?',
                'answer' => 'Sesuai peraturan perusahaan, staf Berbinar bekerja minimal 16 jam/minggu dan maksimal 21 jam/minggu, namun jam kerja akan disesuaikan kembali secara fleksibel apabila terdapat pekerjaan yang bersifat urgent atau genting.'
            ],
            [
                'question' => 'Bagaimana sistem magang di Berbinar?',
                'answer' => 'Sistem magang di Berbinar saat ini masih bersifat work from anywhere dan unpaid (tidak dibayar).'
            ],
            [
                'question' => 'Berapa lama durasi magang di Berbinar?',
                'answer' => 'Terdapat 2 pilihan durasi magang di Berbinar, yaitu selama 6 bulan atau 1 tahun.'
            ],
        ];
        // dd($list_image);

            return view('moduls.landing-new.karir')->with([
            'testimonis' => $testimonis,
            'faqs' => $faqs,
            'positions' => $positions,
            'list_image' => $list_image
        ]);
    }

    public function positions_new()
    {

        $positions = Hiring_Positions::with(['HiringPositionsJobDescription', 'Hiring_Positions_Requirement'])->where('is_active', true)->get();

        $faqs = [
            [
                'question' => 'Apakah magang di Berbinar dapat dikonversi ke SKS perkuliahan?',
                'answer' => 'Apabila SobatBinar nantinya menghendaki untuk mengkonversikan magang di Berbinar ke SKS atau KRS perkuliahan, SobatBinar bisa mengajukan proposal kerjasama, seperti MoU atau MoA kepada Berbinar.'
            ],
            [
                'question' => 'Pengumuman kelulusan magang diberitahukan kapan dan melalui media apa?',
                'answer' => 'Untuk tahapan kelulusan dari proses rekrutmen akan dikabarkan secara talent pool, dimana SobatBinar akan dihubungi oleh tim rekruter saat posisi pekerjaan sedang kosong melalui e-mail atau WhatsApp.'
            ],
            [
                'question' => 'Apakah ada peraturan perusahaan mengenai jam kerja magang?',
                'answer' => 'Sesuai peraturan perusahaan, staf Berbinar bekerja minimal 16 jam/minggu dan maksimal 21 jam/minggu, namun jam kerja akan disesuaikan kembali secara fleksibel apabila terdapat pekerjaan yang bersifat urgent atau genting.'
            ],
            [
                'question' => 'Bagaimana sistem magang di Berbinar?',
                'answer' => 'Sistem magang di Berbinar saat ini masih bersifat work from anywhere dan unpaid (tidak dibayar).'
            ],
            [
                'question' => 'Berapa lama durasi magang di Berbinar?',
                'answer' => 'Terdapat 2 pilihan durasi magang di Berbinar, yaitu selama 6 bulan atau 1 tahun.'
            ],
        ];

        return view('moduls.landing-new.positions')->with([
            'faqs' => $faqs,
            'positions' => $positions,
        ]);
    }

    public function positions_detail_new($id)
    {

        $position = Hiring_Positions::where('id', $id)->first();

        if (!$position) {
            return redirect()->back()->with('error', 'Position not found or inactive');
        }

        // todo: production please fetch actual description & requirments from db
        $HiringPositionsJobDescription = Hiring_Positions_Job_Descriptions::where('position_id', $id)->get();
        $Hiring_Positions_Requirement = Hiring_Positions_Requirements::where('position_id', $id)->get();

        //dd($position->toArray());

        $faqs = [
            [
                'question' => 'Apakah magang di Berbinar dapat dikonversi ke SKS perkuliahan?',
                'answer' => 'Apabila SobatBinar nantinya menghendaki untuk mengkonversikan magang di Berbinar ke SKS atau KRS perkuliahan, SobatBinar bisa mengajukan proposal kerjasama, seperti MoU atau MoA kepada Berbinar.'
            ],
            [
                'question' => 'Pengumuman kelulusan magang diberitahukan kapan dan melalui media apa?',
                'answer' => 'Untuk tahapan kelulusan dari proses rekrutmen akan dikabarkan secara talent pool, dimana SobatBinar akan dihubungi oleh tim rekruter saat posisi pekerjaan sedang kosong melalui e-mail atau WhatsApp.'
            ],
            [
                'question' => 'Apakah ada peraturan perusahaan mengenai jam kerja magang?',
                'answer' => 'Sesuai peraturan perusahaan, staf Berbinar bekerja minimal 16 jam/minggu dan maksimal 21 jam/minggu, namun jam kerja akan disesuaikan kembali secara fleksibel apabila terdapat pekerjaan yang bersifat urgent atau genting.'
            ],
            [
                'question' => 'Bagaimana sistem magang di Berbinar?',
                'answer' => 'Sistem magang di Berbinar saat ini masih bersifat work from anywhere dan unpaid (tidak dibayar).'
            ],
            [
                'question' => 'Berapa lama durasi magang di Berbinar?',
                'answer' => 'Terdapat 2 pilihan durasi magang di Berbinar, yaitu selama 6 bulan atau 1 tahun.'
            ],
        ];

        // for development only
//        $deskripsiPejeraan = [
//            'Bertanggung jawab proses pengembangan aplikasi',
//            'Melakukan manajemen dan maintenance database hostinger',
//            'Melakukan report jika website sedang mengalami troubleshooting dan debugging',
//            'Membuat ERD (Entity Relationship Diagram) atau alur database untuk memtakan struktur dan hubungan antar tabel dalam database',
//            'Melakukan wiring test atau menyambungkan dengan front end website.',
//            'Menulis kode back end untuk mengolah data dan menjalankan logika aplikasi',
//            'Melakukan testing untuk memastikan fungsionalitas back end atau database.',
//            'Membuat report hasil testing yang telah dilakukan.'
//        ];
//        $persyaratan = [
//            'Terbuka untuk siswa/siswi SMA, SMK, MA, atau yang Sederajat; mahasiswa/mahasiswi aktif dan fresh-graduate dengan kelulusan maksimal 1 tahun.',
//            'Mampu berkomitmen tinggi untuk berkontribusi di Berbinar selama 6 bulan atau 1 tahun.',
//            'Mampu bekerja secara mandiri maupun bekerja secara tim.',
//            'Mampu bekerja di bawah tekanan dan deadline',
//            'Memiliki kemampuan manajemen waktu dan komunikasi yang baik.',
//            'Tertarik untuk mempelajari hal baru.',
//            'Tertarik pada bidang psikologi / kesehatan mental.',
//            'Memiliki ketertarikan pada kepemimpinan dan pengembangan skill.'
//        ];


        return view('moduls.landing-new.positions-detail')->with([
            'faqs' => $faqs,
            'position' => $position,
            'HiringPositionsJobDescription' => $HiringPositionsJobDescription,
            'Hiring_Positions_Requirement' => $Hiring_Positions_Requirement,
        ]);
    }

    function getAvailableDivisionsPerYear($data): array
    {
        $divisionsPerYear = [];

        foreach ($data as $staff) {
            // Extract the year from date_start
            $year = explode(' ', $staff['date_start'])[1];

            // Initialize the array if the year is not set yet
            if (!isset($divisionsPerYear[$year])) {
                $divisionsPerYear[$year] = [];
            }

            // Check if division already exists in that year
            $existingDivisionKey = array_search($staff['division'], array_column($divisionsPerYear[$year], 'division'));

            if ($existingDivisionKey === false) {
                // If division does not exist, add it with an empty subdivision array
                $divisionsPerYear[$year][] = [
                    'division' => $staff['division'],
                    'subdivision' => !empty($staff['subdivision']) ? [$staff['subdivision']] : []
                ];
            } else {
                // If division exists and subdivision is not empty, add it if not already present
                if (!empty($staff['subdivision']) && !in_array($staff['subdivision'], $divisionsPerYear[$year][$existingDivisionKey]['subdivision'])) {
                    $divisionsPerYear[$year][$existingDivisionKey]['subdivision'][] = $staff['subdivision'];
                }
            }
        }

        // Sort divisions for each year
        foreach ($divisionsPerYear as &$divisions) {
            usort($divisions, fn($a, $b) => strcmp($a['division'], $b['division']));
        }

        // Sort years
        ksort($divisionsPerYear);

        return $divisionsPerYear;
    }

    public function keluarga_berbinar(Request $request)
    {
        // todo: fetch dari db!!

        // fetch from api
        //$response = Http::get('http://localhost:3004/dataStaff');
        //$data = $response->json();


        // sementara pakai data dummy json dulu
        $jsonPath = public_path('assets/js/dummyStaff.json');
        $jsonContent = File::exists($jsonPath) ? File::get($jsonPath) : '[]';
        $data = json_decode($jsonContent, true)['dataStaff'];

        // debug data
        //dd($data)

        //available year, e.g ["2019", "2020", "2021"], dummy data start from 2022
        $availableYears = collect(array_map(fn($staff) => explode(' ', $staff['date_start'])[1], $data))
            ->unique()
            ->sort()
            ->values()
            ->all();
        // available division per year dd to look the data
        $availableDivision = $this->getAvailableDivisionsPerYear($data);
        //dd($availableDivision.toArray());

        return view('moduls.landing-new.keluarga-berbinar')->with([
            'listStaff' => $data,
            'availableYears' => $availableYears,
            'availableDivision' => $availableDivision,
        ]);
    }

    public function daftar_konseling(Request $request) {
        $konselings = [
            [
                'image' => 'assets/images/landing/asset-konseling/vector/psikolog.png',
                'nama' => 'Psikolog',
                'deskripsi' => 'Konseling bersama Psikolog berizin praktek aktif (SIPP) dan berpengalaman dalam menghadapi berbagai permasalahan yang berkaitan dengan konseling',
                'link' => route('konseling-new/jadwal-konseling')
            ],
            [
                'image' => 'assets/images/landing/asset-konseling/vector/peercounselor.png',
                'nama' => 'Peer Counselor',
                'deskripsi' => 'Konseling bersama Peer Conselor yang dilatih secara langsung oleh Psikolog Berbinar dan merupakan mahasiswa yang telah lulus mata kuliah konseling',
                'link' => route('konseling-new/jadwal-konseling')
            ],
        ];

        return view('moduls.landing-new.daftar-konseling')->with([
            'konselings' => $konselings
        ]);
    }

    public function jadwal_konseling(Request $request) {
        return view('moduls.landing-new.jadwal-konseling')->with([]);
    }

    public function data_diri_konseling(Request $request) {
        return view('moduls.landing-new.data-diri')->with([]);
    }

    public function cerita_konseling(Request $request) {
        return view('moduls.landing-new.cerita')->with([]);
    }

    public function summary_konseling(Request $request) {
        return view('moduls.landing-new.summary-konseling')->with([]);
    }

    public function daftar_psikotes(Request $request) {
        $layanan_psikotes = [
            [
                'image' => 'assets/images/landing/asset-psikotes/illustrasi/individu.png',
                'name' => 'Individu'
            ],
            [
                'image' => 'assets/images/landing/asset-psikotes/illustrasi/perusahaan.png',
                'name' => 'Perusahaan'
            ],
            [
                'image' => 'assets/images/landing/asset-psikotes/illustrasi/komunitas.png',
                'name' => 'Komunitas'
            ],
            [
                'image' => 'assets/images/landing/asset-psikotes/illustrasi/Pendidikan.png',
                'name' => 'Pendidikan'
            ],
        ];

        return view('moduls.landing-new.daftar-psikotes')->with([
            'layanan_psikotes' => $layanan_psikotes
        ]);
    }

    public function jadwal_psikotes(Request $request) {
        return view('moduls.landing-new.jadwal-psikotes')->with([]);
    }

    public function data_diri_psikotes(Request $request) {
        return view('moduls.landing-new.data-diri-psikotes')->with([]);
    }

    public function summary_psikotes(Request $request) {
        return view('moduls.landing-new.summary-psikotes')->with([]);
    }

    public function index(Request $request)
    {
        $products = [
            [
                "name" => "Konseling dengan Psikolog",
                "description" => "Konsultasikan permasalahan psikologis kamu ke psikolog partner Berbinar.",
                "route" => "konseling",
            ],

            [
                "name" => "Konseling dengan Peer Counselor",
                "description" => "Konsultasikan permasalahan psikologis kamu ke counselor Berbinar.",
                "route" => "konseling",
            ],

            [
                "name" => "Asesmen Psikologi",
                "description" => "Assessmen psikologi individu dapat memprediksi potensi yang dimiliki",
                "route" => "psikotes",
            ],

            [
                "name" => "Kelas Berbinar",
                "description" => "Meningkatkan soft skill dan hard skill yang dimiliki untuk meningkatkan kemampuan bersaing",
                "route" => "kelas",
            ],
        ];

        $whySection = [
            "title" => 'Kenapa Memilih Berbinar Insightful Indonesia?',
            "description" => 'Kesehatan mental sering timbul di kalangan masyarakat. Namun, masih banyak dari kita yang merasa ragu untuk mencari bantuan. Mahalnya biaya konsultasi dan jasa psikotes menjadi penghalang utama untuk mencari pertolongan lebih lanjut. Permasalahan ini menjadi alasan berdirinya Berbinar Insightful Indonesia. Berbinar memberikan layanan psikotes, konseling, dan kelas, yang fleksibel dan sesuai kebutuhan customer, namun tetap kredibel.',
            "image" => '',
            "achievements" => [
                ["name" => 'Media Partner', "count" => 12],
                ["name" => 'Jumlah Produk', "count" => 3],
                ["name" => 'Jumlah Sub Produk', "count" => 8],
            ],
        ];

        $notif = $request->session()->get('notif');
        $request->session()->put('notif', '0');

        return view('moduls.landing.index', [
            'products' => $products,
            'whySection' => $whySection,
            'notif' => $notif,
        ]);
    }


    public function tentangKami()
    {
        $testimonials = [
            [
                "name" => "Ace Pebri Ala",
                "jabatan" => "Manager",
                "divisi" => "Tiktok Creator",
                "testimonial" => "Saya memang baru memakai produk dari Berbinar yaitu layanan psikotes, dan untuk kualitasnya menurut saya sangat bagus.",
                "image" => "assets/images/ImgLandingController/Ace-Pebri.png"
            ],
            [
                "name" => "Mellynda Silanur Rohmah",
                "jabatan" => "Manager",
                "divisi" => "Human Resource",
                "testimonial" => "Tentunya produk dari berbinar itu memiliki kualitas unggul karena ditangani langsung oleh seorang psikolog, tetapi dengan harga yang terjangkau.",
                "image" => "assets/images/ImgLandingController/Mellynda.png"
            ],
            [
                "name" => "Caroline Athalia Rianda",
                "jabatan" => "Manager",
                "divisi" => "Graphic Designer",
                "testimonial" => "Sejauh yang aku tau di berbinar sendiri itu udah nyediain beragam banget layanan psikologi  untuk sobat binar semua ",
                "image" => "assets/images/ImgLandingController/Caroline.png"
            ],
            [
                "name" => "Mawaliatul Khasanah",
                "jabatan" => "Manager",
                "divisi" => "IG Creator",
                "testimonial" => "Produknya keren, kualitas dan kuantitas bisa di tingkatkan",
                "image" => "assets/images/ImgLandingController/Mawaliatul.png"
            ],
            [
                "name" => "Regina Amanda Sharen",
                "jabatan" => "Manager",
                "divisi" => "Secretary & Finance",
                "testimonial" => "Produk Berbinar pun sgt beragam dan pastiny ramah di kantong. Menurut saya produk-produk Berbinar telah sesuai dengan kebutuhan masyarakat skrng ini. Selain itu dengan harga yg affordable sehingga dapat dibeli oleh semua kalangan usia.",
                "image" => "assets/images/ImgLandingController/Regina.png"
            ],
            [
                "name" => "Zalfa Qanita",
                "jabatan" => "Manager",
                "divisi" => "PTPM",
                "testimonial" => "Produk dan layanan di Berbinar itu lengkap banget mulai dari konseling, asesmen psikologi, sampai kelas-kelas yang bisa nambah skill dan pengetahuan. Selain itu, produk dan layanan di Berbinar juga punya harga relatif terjangkau dan berkualitas.",
                "image" => "assets/images/ImgLandingController/Zalfa.png"
            ],
            [
                "name" => "Ghina",
                "jabatan" => "Manager",
                "divisi" => "Class Product Management",
                "testimonial" => "Saya memang baru memakai produk dari Berbinar yaitu layanan psikotes, dan untuk kualitasnya menurut saya yang baru pertama kali melakukan psikotes sangat bagus dan mudah dipahami. Dan mengikuti layanan psikotes di Berbinar seras santai dan tidak tertekan.",
                "image" => "assets/images/ImgLandingController/Ghina.png"
            ],
            [
                "name" => "Dhila Aprilianti ",
                "jabatan" => "Staff",
                "divisi" => "Graphic Designer ",
                "testimonial" => "Layanan konseling yang diadakan berbinar juga sangat membantu untuk menyelesaikan masalah mental dan kesehatan pikiran, dengan harga yang terjangkau kita bisa mendapatkan konselor dan bisa juga mendapatkan solusi dari permasalahan yang dihadapi.",
                "image" => "assets/images/ImgLandingController/Dhila-Aprilianti.jpg"
            ],
            [
                "name" => "Fransiska Dian Nurfala",
                "jabatan" => "Staff",
                "divisi" => "Graphic Designer",
                "testimonial" => "Produk Berbinar menarik dan bermanfaat bagi yang membutuhkan layanan psikologi serta konten-konten yang disajikan memberikan insight bagi pembacanya.",
                "image" => "assets/images/ImgLandingController/Fransiska.jpg"
            ],
            [
                "name" => "Ananda Deshinta Rasyid",
                "jabatan" => "Staff",
                "divisi" => "Class Product Management",
                "testimonial" => "Berbinar salah satu layanan edukasi psikologi yang dibilang cukup lengkap, dan produk produknya sangat dibutuhkan oleh anak remaja jaman sekarang.",
                "image" => "assets/images/ImgLandingController/Deshinta.jpg"
            ],
        ];

        $values = [
            [
                "name" => "Honest",
                "desc" => "Membangun kepercayaan dengan mengembangkan komunikasi dan hubungan yang jujur.",
            ],
            [
                "name" => "Empathetic",
                "desc" => "Memahami orang lain, melihat sudut pandang orang tersebut, dan membayangkan berada di posisi orang tersebut.",
            ],
            [
                "name" => "Innovative",
                "desc" => "Menciptakan ide, pemikiran, dan cara baru untuk diterapkan dalam pelaksanaan dan penyelesaian pekerjaan.",
            ],
            [
                "name" => "Learn and be Curious",
                "desc" => "Mau untuk terus belajar untuk berkembang jadi lebih baik, dilandasi rasa ingin tahu yang tinggi.",
            ],
            [
                "name" => "Impactful",
                "desc" => "Memberikan pengaruh positif untuk lingkungan sekitar dan tetap berlandaskan pada kode etik yang berlaku.",
            ],
            [
                "name" => "Initiative",
                "desc" => "Memulai suatu tindakan yang selaras dengan tujuan organisasi, namun tetap sesuai dengan fungsi dan wewenangnya.",
            ],
            [
                "name" => "Collaborative",
                "desc" => "Melakukan interaksi, komunikasi, dan diskusi dengan setiap individu dan kelompok, baik yang terlibat secara langsung maupun tidak langsung.",
            ],
            [
                "name" => "Customer Oriented",
                "desc" => "Menjadikan kebutuhan konsumen sebagai dasar untuk merencanakan dan mendesain strategi bisnis.",
            ],
        ];

        return view('moduls.landing.about', [
            'testimonials' => $testimonials,
            'values' => $values,
        ]);
    }

    public function products()
    {
        return view('moduls.landing.products');
    }

    public function contact()
    {
        return view('moduls.landing.contact');
    }

    public function workWithUs()
    {
        return view('moduls.landing.work-with-us');
    }

    public function artikel()
    {
        return view('moduls.landing.artikel');
    }

    public function konseling()
    {
        $testimonials = [
            [
                "name" => "Anonim",
                "jabatan" => "-",
                "divisi" => "-",
                "testimonial" => "Sesi konseling merubah pandang: tak masalah berubah demi orang lain. Dorongan jadi lebih baik. Lakukan yang diinginkan, tetap aman. Belajarlah. Lampiaskan sakit, geser ke positif, hargai diri dan peduli orang.",
                "image" => "assets/images/ImgLandingController/Anonim-Pria.png"
            ],
            [
                "name" => "Anonim",
                "jabatan" => "-",
                "divisi" => "-",
                "testimonial" => "Konseling sangat membantu, konselor ramah. Pertama kali cerita, terbantu menceritakan masalah yang selama ini takut dibagikan sebelumnya. Rasanya lega, tanpa beban dan validasi. Kakak konselor memberi waktu dan kenyamanan.",
                "image" => "assets/images/ImgLandingController/Anonim-Pria.png"
            ],
            [
                "name" => "Anonim",
                "jabatan" => "-",
                "divisi" => "-",
                "testimonial" => "Konselor mendengarkan dan memerhatikan dengan seksama, memberi saran dan bimbingan spesifik. Dituntun dengan pertanyaan terkait permasalahan, sangat terbantu. Akan segera menyelesaikan tugas setelah konseling hari ini.",
                "image" => "assets/images/ImgLandingController/Anomim-Wanita.png"
            ],
            [
                "name" => "Anonim",
                "jabatan" => "-",
                "divisi" => "-",
                "testimonial" => "Psikolognya mendengar dan menyimak cerita saya selama proses konseling dan juga menjelaskan masalah saya dengan cara yang mudah dipahami. Saya merasa nyaman dan tidak merasa dihakimi ketika saya menceritakan semua masalah saya.",
                "image" => "assets/images/ImgLandingController/Anonim-Pria.png"
            ],
            [
                "name" => "Anonim",
                "jabatan" => "-",
                "divisi" => "-",
                "testimonial" => "Psikolog mendengarkan semua cerita dengan baik, bisa leluasa cerita dan mengungkapkan perasaan jadi lebih tenang, psikolog memperhatikan detail cerita sehingga bisa membantu menemukan akar permasalahannya",
                "image" => "assets/images/ImgLandingController/Anomim-Wanita.png"
            ],
            [
                "name" => "Anonim",
                "jabatan" => "-",
                "divisi" => "-",
                "testimonial" => "Saya sangat senang dan terbantu, konselor ramah, ini pertama kali saya berkonsultasi dan berani cerita permasalahan yang saya alami. Sebelumnya saya takut untuk cerita permasalahan. Disini rasanya bisa cerita tanpa ada beban. Konselor memberi waktu kita untuk bercerita dan membuat kita nyaman selama sesi konseling.",
                "image" => "assets/images/ImgLandingController/Anomim-Wanita.png"
            ],
        ];

        $faqs = [
            [
                'question' => 'Apa perbedaan Psikolog dan Peer Counselor?',
                'answer' => 'Psikolog merupakan tenaga profesional yang telah menyelesaikan pendidikan S1 Psikologi dan melanjutkan kuliah di program studi profesi untuk mendapatkan gelar Psikolog dan M.Psi. Sedangkan Peer Counselor merupakan individu yang telah mendapatkan pelatihan dari psikolog sehingga mempunyai kemampuan dasar untuk melakukan konseling termasuk dalam mengidentifikasi permasalahan dengan usia sebaya.
            '
            ],
            [
                'question' => 'Apabila sesi konseling telah berakhir, dan saya ingin menambah durasi sesi konseling apalah boleh?',
                'answer' => 'Menambah durasi konseling sangat diperbolehkan. Namun, durasi konseling ditentukan berdasarkan kebutuhan dalam penanganan suatu masalah. Sehingga, yang dapat merekomendasikan adalah psikolog dan keputusan dibuat bersama antara klien dengan psikolog atau peer counselor. Jika klien bersedia, maka durasi konseling akan dilanjutkan.
            '
            ],
            [
                'question' => 'Apakah privasi saya akan terjamin?',
                'answer' => 'Tentu saja, seluruh hal yang akan kamu sampaikan saat sesi konseling akan dijaga kerahasiaannya oleh psikolog/peer counsellor kami. Selain itu, psikolog serta peer counsellor kami sangat menjunjung tinggi kode etik psikologi, sehingga kamu dapat bebas dalam menyampaikan sesuatu saat sesi konseling berlangsung.
            '
            ],
            [
                'question' => 'Apakah ada batasan usia untuk konseling?',
                'answer' => 'Tidak ada batasan usia dalam konseling, sehingga konseling bisa digunakan untuk berbagai usia.
            '
            ],
            [
                'question' => 'Apakah saya bisa memilih psikolog yang menangani?',
                'answer' => "SobatBinar tidak dapat memilih psikolog dengan nama tertentu. Namun demi kenyamanan SobatBinar, SobatBinar diperbolehkan mengajukan karakter psikolog yang diinginkan (Seperti: Jenis kelamin tertentu, agama tertentu, usia tertentu, maupun psikolog yang sudah menikah ataupun belum)
            "
            ],
        ];
        return view('moduls.landing.konseling', [
            'faqs' => $faqs,
            'testimonials' => $testimonials,
        ]);
    }

    public function psikotest()
    {
        $faqs = [
            [
                'question' => 'Apa yang dimaksud dengan ‘Psikotes’?',
                'answer' => 'Kegiatan psikotes merupakan suatu bentuk asesmen psikologi yang digunakan untuk mengukur aspek-aspek psikologi dari seorang individu, seperti kemampuan kognitif, kepribadian, keadaan emosional, dan lainnya.
            '
            ],
            [
                'question' => 'Apa manfaat dari mengikuti kegiatan psikotes?',
                'answer' => 'Tes psikologi dapat memberikan informasi mengenai kemampuan kognitif, kepribadian, keadaan emosional, dan kesehatan mental dari seorang individu. Hasil psikotes juga dapat membantu dalam mengidentifikasi potensi diri yang dapat digunakan untuk membantu dalam membuat keputusan tentang masalah pribadi atau profesional.
            '
            ],
            [
                'question' => 'Apa saja jenis layanan psikotes pada Berbinar?',
                'answer' => 'PT. Berbinar Insightful Indonesia menyediakan 4 kategori layanan psikotes, yaitu asesmen psikologi individu, asesmen psikologi perusahaan, asesmen psikologi instansi pendidikan, dan asesmen psikologi komunitas. Asesmen psikologi individu tersedia 8 jenis tes, termasuk di dalamnya adalah tes memori dan tes kecemasan. Asesmen psikologi perusahaan, kami menyediakan 4 paket tes untuk level staff dan 2 paket tes untuk level supervisor. Asesmen psikologi instansi pendidikan tersedia 8 jenis tes, termasuk tes gaya belajar dan tes penjurusan. Lalu asesmen psikologi komunitas tersedia 8 jenis tes, termasuk tes kesiapan pernikahan dan tes kesiapan menjadi orang tua.
            '
            ],
            [
                'question' => 'Berapa harga layanan psikotes Berbinar?',
                'answer' => 'Untuk informasi mengenai harga layanan psikotes Berbinar, silakan klik link berikut ini Pricelist atau pricelist yang tertera pada halaman ini
            '
            ],
            [
                'question' => 'Apakah tes dilaksanakan secara individual atau kelompok?',
                'answer' => "Kegiatan psikotes dapat dilaksanakan secara individual maupun kelompok, tergantung dari layanan psikotes yang diambil. Sebagai contoh, untuk tes minat bakat, pada umumnya dilaksanakan secara individual, sedangkan
            "
            ],
            [
                'question' => 'Apakah tes dilaksanakan secara Online atau Offline?',
                'answer' => 'Kegiatan psikotes dari PT. Berbinar Insightful Indonesia dapat dilaksanakan secara Online maupun Offline.
            '
            ],
            [
                'question' => 'Apa saja yang perlu dipersiapkan dalam pelaksanaan psikotes Online?',
                'answer' => 'Bagi peserta psikotes yang melaksanakan secara Online, peserta wajib menyiapkan jaringan internet yang kuat, laptop yang stabil, dan baterai yang penuh. Jika peserta tidak menyiapkan ketiga hal tersebut, dapat mempengaruhi dalam keoptimalan pelaksanaan dan hasil psikotes tersebut.'
            ],
            [
                'question' => 'Bagaimana cara mendaftar?',
                'answer' => 'Untuk mendaftar psikotes, silahkan mengisi data diri Anda di Google Form pada link berikut: bit.ly/DaftarPsikotesBerbinar'
            ],
        ];
        return view('moduls.landing.psikotes', [
            'faqs' => $faqs
        ]);
    }

    public function class()
    {
        $faqs = [
            [
                'question' => 'Durasi kelasnya berapa lama?',
                'answer' => 'Peserta diberikan waktu sekitar ± 7 hari untuk menyelesaikan seluruh rangkaian kelas BERBINAR+. Apabila peserta melanjutkan ke layanan konseling dan psikotes, akan ada informasi lebih lanjut.
                '
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
                'answer' => "Mudah, kok! Peserta bisa akses video pembelajarannya kapanpun dan dimanapun. Peserta hanya perlu melalui proses berikut:
                Selesaikan video pembelajaran dan mengisi post-test, Melakukan personal mentoring bersama mentor, Klaim sertifikat dan peserta dapat memilih untuk lanjut ke layanan konseling dan psikotes.
                "
            ],
            [
                'question' => 'Jika mau upgrade ke konseling dan psikotes gimana ya?',
                'answer' => 'Peserta dapat berkomunikasi dengan narahubung untuk proses upgrade layanan. Setelah itu, akan ada arahan dan informasi lebih lanjut.
                '
            ],
            [
                'question' => 'Jika mau mengetahui informasi lebih lanjut secara lebih rincinya gimana ya?',
                'answer' => 'Peserta dapat mengunjungi linktr.ee/BerbinarPlus atau menghubungi narahubung melalui whatsapp dengan nomor 0813-1435-4623 (Wulan).'
            ],
        ];

        return view('moduls.landing.class', [
            'faqs' => $faqs
        ]);
    }

    public function classWebinar()
    {
        $faqs = [
            [
                'question' => 'Apa perbedaan Psikolog dan Peer Counselor?',
                'answer' => 'Psikolog merupakan tenaga profesional yang telah menyelesaikan pendidikan S1 Psikologi dan melanjutkan kuliah di program studi profesi untuk mendapatkan gelar Psikolog dan M.Psi. Sedangkan Peer Counselor merupakan individu yang telah mendapatkan pelatihan dari psikolog sehingga mempunyai kemampuan dasar untuk melakukan konseling termasuk dalam mengidentifikasi permasalahan dengan usia sebaya.
                '
            ],
            [
                'question' => 'Apabila sesi konseling telah berakhir, dan saya ingin menambah durasi sesi konseling apalah boleh?',
                'answer' => 'Menambah durasi konseling sangat diperbolehkan. Namun, durasi konseling ditentukan berdasarkan kebutuhan dalam penanganan suatu masalah. Sehingga, yang dapat merekomendasikan adalah psikolog dan keputusan dibuat bersama antara klien dengan psikolog atau peer counselor. Jika klien bersedia, maka durasi konseling akan dilanjutkan.
                '
            ],
            [
                'question' => 'Apakah privasi saya akan terjamin?',
                'answer' => 'Tentu saja, seluruh hal yang akan kamu sampaikan saat sesi konseling akan dijaga kerahasiaannya oleh psikolog/peer counsellor kami. Selain itu, psikolog serta peer counsellor kami sangat menjunjung tinggi kode etik psikologi, sehingga kamu dapat bebas dalam menyampaikan sesuatu saat sesi konseling berlangsung.
                '
            ],
            [
                'question' => 'Apakah ada batasan usia untuk konseling?',
                'answer' => 'Tidak ada batasan usia dalam konseling, sehingga konseling bisa digunakan untuk berbagai usia.
                '
            ],
            [
                'question' => 'Apakah saya bisa memilih psikolog yang menangani?',
                'answer' => "SobatBinar tidak dapat memilih psikolog dengan nama tertentu. Namun demi kenyamanan SobatBinar, SobatBinar diperbolehkan mengajukan karakter psikolog yang diinginkan (Seperti: Jenis kelamin tertentu, agama tertentu, usia tertentu, maupun psikolog yang sudah menikah ataupun belum)
                "
            ],
        ];

        return view('moduls.landing.webinar', [
            'faqs' => $faqs,
        ]);
    }

    public function classBisikan()
    {
        $faqs = [
            [
                'question' => 'Apa perbedaan Psikolog dan Peer Counselor?',
                'answer' => 'Psikolog merupakan tenaga profesional yang telah menyelesaikan pendidikan S1 Psikologi dan melanjutkan kuliah di program studi profesi untuk mendapatkan gelar Psikolog dan M.Psi. Sedangkan Peer Counselor merupakan individu yang telah mendapatkan pelatihan dari psikolog sehingga mempunyai kemampuan dasar untuk melakukan konseling termasuk dalam mengidentifikasi permasalahan dengan usia sebaya.
                '
            ],
            [
                'question' => 'Apabila sesi konseling telah berakhir, dan saya ingin menambah durasi sesi konseling apalah boleh?',
                'answer' => 'Menambah durasi konseling sangat diperbolehkan. Namun, durasi konseling ditentukan berdasarkan kebutuhan dalam penanganan suatu masalah. Sehingga, yang dapat merekomendasikan adalah psikolog dan keputusan dibuat bersama antara klien dengan psikolog atau peer counselor. Jika klien bersedia, maka durasi konseling akan dilanjutkan.
                '
            ],
            [
                'question' => 'Apakah privasi saya akan terjamin?',
                'answer' => 'Tentu saja, seluruh hal yang akan kamu sampaikan saat sesi konseling akan dijaga kerahasiaannya oleh psikolog/peer counsellor kami. Selain itu, psikolog serta peer counsellor kami sangat menjunjung tinggi kode etik psikologi, sehingga kamu dapat bebas dalam menyampaikan sesuatu saat sesi konseling berlangsung.
                '
            ],
            [
                'question' => 'Apakah ada batasan usia untuk konseling?',
                'answer' => 'Tidak ada batasan usia dalam konseling, sehingga konseling bisa digunakan untuk berbagai usia.
                '
            ],
            [
                'question' => 'Apakah saya bisa memilih psikolog yang menangani?',
                'answer' => "SobatBinar tidak dapat memilih psikolog dengan nama tertentu. Namun demi kenyamanan SobatBinar, SobatBinar diperbolehkan mengajukan karakter psikolog yang diinginkan (Seperti: Jenis kelamin tertentu, agama tertentu, usia tertentu, maupun psikolog yang sudah menikah ataupun belum)
                "
            ],
        ];

        return view('moduls.landing.bisikan', [
            'faqs' => $faqs,
        ]);
    }

    public function classBerbinarPlus()
    {
        $faqs = [
            [
                'question' => 'Apa perbedaan Psikolog dan Peer Counselor?',
                'answer' => 'Psikolog merupakan tenaga profesional yang telah menyelesaikan pendidikan S1 Psikologi dan melanjutkan kuliah di program studi profesi untuk mendapatkan gelar Psikolog dan M.Psi. Sedangkan Peer Counselor merupakan individu yang telah mendapatkan pelatihan dari psikolog sehingga mempunyai kemampuan dasar untuk melakukan konseling termasuk dalam mengidentifikasi permasalahan dengan usia sebaya.
                '
            ],
            [
                'question' => 'Apabila sesi konseling telah berakhir, dan saya ingin menambah durasi sesi konseling apalah boleh?',
                'answer' => 'Menambah durasi konseling sangat diperbolehkan. Namun, durasi konseling ditentukan berdasarkan kebutuhan dalam penanganan suatu masalah. Sehingga, yang dapat merekomendasikan adalah psikolog dan keputusan dibuat bersama antara klien dengan psikolog atau peer counselor. Jika klien bersedia, maka durasi konseling akan dilanjutkan.
                '
            ],
            [
                'question' => 'Apakah privasi saya akan terjamin?',
                'answer' => 'Tentu saja, seluruh hal yang akan kamu sampaikan saat sesi konseling akan dijaga kerahasiaannya oleh psikolog/peer counsellor kami. Selain itu, psikolog serta peer counsellor kami sangat menjunjung tinggi kode etik psikologi, sehingga kamu dapat bebas dalam menyampaikan sesuatu saat sesi konseling berlangsung.
                '
            ],
            [
                'question' => 'Apakah ada batasan usia untuk konseling?',
                'answer' => 'Tidak ada batasan usia dalam konseling, sehingga konseling bisa digunakan untuk berbagai usia.
                '
            ],
            [
                'question' => 'Apakah saya bisa memilih psikolog yang menangani?',
                'answer' => "SobatBinar tidak dapat memilih psikolog dengan nama tertentu. Namun demi kenyamanan SobatBinar, SobatBinar diperbolehkan mengajukan karakter psikolog yang diinginkan (Seperti: Jenis kelamin tertentu, agama tertentu, usia tertentu, maupun psikolog yang sudah menikah ataupun belum)
                "
            ],
        ];

        return view('moduls.landing.berbinar-plus', [
            'faqs' => $faqs,
        ]);
    }

    public function termCondition()
    {

        return view('coming-soon');
    }

    public function privacyPolicy()
    {

        return view('coming-soon');
    }

    public function creditWeb()
    {
        return view('credit-web');
    }

    public function hiring()
    {
        $positions = Hiring_Positions::with(['HiringPositionsJobDescription', 'Hiring_Positions_Requirement'])->where('is_active', true)->get();
        $HiringPositionsJobDescription = Hiring_Positions_Job_Descriptions::all();
        $Hiring_Positions_Requirement = Hiring_Positions_Requirements::all();


        $testimonials = [
            [
                "name" => "Oktaviani Dwi Wulansari",
                "jabatan" => "Staff",
                "divisi" => "Marketing Strategist and Sales",
                "testimonial" => "Selama bekerja di Berbinar, impact yang saya rasakan adalah skill time management, kolaborasi dan juga decision making yang semakin terasah. Meskipun dilaksanakan secara daring pun experience bekerja disini sangat terasa, banyak sekali yang saya pelajari.",
                "image" => "assets/images/testimoni/Oktaviani.png"
            ],
            [
                "name" => "Zalfa Qanita",
                "jabatan" => "Manager",
                "divisi" => "PTPM",
                "testimonial" => "Selama bekerja di Berbinar, saya selalu merasa tertantang keluar dari zona nyaman dan menjadi 'the best version of yourself'. Selain itu, banyak hal yang saya pelajari sebagai posisi manager yaitu task management, mengatur waktu, mengeluarkan ide baru dan pendapat.",
                "image" => "assets/images/testimoni/Zalfa.png"
            ],
            [
                "name" => "Ghina",
                "jabatan" => "Manager",
                "divisi" => "Class Product Management",
                "testimonial" => "Selama di berbinar, aku belajar banyak banget. mulai dari hal hal yang sebelumnya ada basic sampe hal hal yang baru dan belum pernah aku dapetin. berbinar punya banyak acara yang menarik yang bisa diikutin. temen temennya juga asik dan seru banget!",
                "image" => "assets/images/testimoni/Ghina.png"
            ],
        ];

        $faqs = [
            [
                'question' => 'Apakah Internship Berbinar dapat dikonversi ke SKS perkuliahan?',
                'answer' => 'Apabila SobatBinar nantinya menghendaki untuk mengkonversikan internship Berbinar ke SKS atau KRS perkuliahan, SobatBinar bisa mengajukan proposal kerjasama, seperti MoU atau MoA kepada Berbinar.
                '
            ],
            [
                'question' => 'Pengumuman kelulusan internship diberitahukan kapan dan lewat apa?',
                'answer' => 'Untuk tahapan kelulusan dari proses rekrutmen akan dikabarkan secara talent pool, dimana SobatBinar akan dihubungi oleh tim rekruter saat posisi pekerjaan sedang kosong melalui email atau whatsapp'
            ],
            [
                'question' => 'Apakah bisa melamar satu posisi saja?',
                'answer' => 'Apabila SobatBinar menghendaki mendaftar satu posisi saja, silahkan memilih posisi yang sama pada pilihan satu dan dua di google formulir pendaftaran.'
            ],
            [
                'question' => 'Apakah ada peraturan perusahaan mengenai jam kerja internship?',
                'answer' => 'Sesuai peraturan perusahaan, staf Berbinar bekerja minimal 16 jam/minggu dan maksimal 21 jam/minggu, namun akan disesuaikan kembali jam kerja secara fleksibel apabila terdapat pekerjaan yang bersifat urgent.'
            ],
            [
                'question' => 'Sistem internship Berbinar bersifat paid / unpaid?',
                'answer' => 'Untuk sistem internship di Berbinar saat ini masih bersifat unpaid (tidak dibayar).'
            ],
            [
                'question' => 'Berapa lama durasi internship di Berbinar?',
                'answer' => 'Terdapat 2 pilihan durasi internship di Berbinar, di antaranya 6 bulan atau 1 tahun.'
            ],
            [
                'question' => 'Sistem kerja internship di Berbinar?',
                'answer' => 'Saat ini internship Berbinar masih bersifat work from home.'
            ],
            [
                'question' => 'Apakah Berbinar menyediakan event offline?',
                'answer' => 'Selain event online, Berbinar juga menyediakan event offline pada SobatBinar yang saat ini berdomisili di Surabaya.'
            ],
            [
                'question' => 'Cara mengetahui informasi lebih jelas terkait jobdesc dan requirement posisi yang dibuka?',
                'answer' => 'SobatBinar bisa menjelajahi laman website berbinar pada bagian careers dan memilih “posisi yang dibuka”.'
            ],
            [
                'question' => 'Apabila terdapat informasi yang dibingungkan terkait rekrutmen, kemana harus bertanya?',
                'answer' => 'SobatBinar bisa menghubungi CP yang tersedia atau menghubungi MinNar melalui sosial media Berbinar.'
            ],
        ];

        $generalRequirements = [
            "Terbuka untuk siswa/siswi SMA, SMK, MA, atau yang Sederajat; mahasiswa/mahasiswi aktif; dan fresh-graduate dengan kelulusan maksimal 1 tahun.",
            "Mampu berkomitmen tinggi untuk berkontribusi di Berbinar selama 6 bulan/1 tahun.",
            "Mampu bekerja secara mandiri maupun bekerja secara tim.",
            "Mampu bekerja di bawah tekanan dan deadline.",

        ];

        $benefits = [
            "Memiliki kemampuan manajemen waktu yang baik.",
            "Tertarik untuk mempelajari hal baru.",
            "Tertarik pada bidang psikologi / kesehatan mental.",
            "Memiliki keterampilan komunikasi yang kuat",
            "Memiliki ketertarikan pada kepemimpinan dan pengembangan skill.",
        ];

        return view('moduls.hiring.hiring', [
            'testimonials' => $testimonials,
            'faqs' => $faqs,
            'positions' => $positions,
            'HiringPositionsJobDescription' => $HiringPositionsJobDescription,
            'Hiring_Positions_Requirement' => $Hiring_Positions_Requirement,
            'generalRequirements' => $generalRequirements,
            'benefits' => $benefits
        ]);
    }

    public function hiringPositions()
    {
        $positions = Hiring_Positions::with(['HiringPositionsJobDescription', 'Hiring_Positions_Requirement'])->where('is_active', true)->get();
        $HiringPositionsJobDescription = Hiring_Positions_Job_Descriptions::all();
        $Hiring_Positions_Requirement = Hiring_Positions_Requirements::all();


        $faqs = [
            [
                'question' => 'Apakah Internship Berbinar dapat dikonversi ke SKS perkuliahan?',
                'answer' => 'Apabila SobatBinar nantinya menghendaki untuk mengkonversikan internship Berbinar ke SKS atau KRS perkuliahan, SobatBinar bisa mengajukan proposal kerjasama, seperti MoU atau MoA kepada Berbinar.
                '
            ],
            [
                'question' => 'Pengumuman kelulusan internship diberitahukan kapan dan lewat apa?',
                'answer' => 'Untuk tahapan kelulusan dari proses rekrutmen akan dikabarkan secara talent pool, dimana SobatBinar akan dihubungi oleh tim rekruter saat posisi pekerjaan sedang kosong melalui email atau whatsapp'
            ],
            [
                'question' => 'Apakah bisa melamar satu posisi saja?',
                'answer' => 'Apabila SobatBinar menghendaki mendaftar satu posisi saja, silahkan memilih posisi yang sama pada pilihan satu dan dua di google formulir pendaftaran.'
            ],
            [
                'question' => 'Apakah ada peraturan perusahaan mengenai jam kerja internship?',
                'answer' => 'Sesuai peraturan perusahaan, staf Berbinar bekerja minimal 16 jam/minggu dan maksimal 21 jam/minggu, namun akan disesuaikan kembali jam kerja secara fleksibel apabila terdapat pekerjaan yang bersifat urgent.'
            ],
            [
                'question' => 'Sistem internship Berbinar bersifat paid / unpaid?',
                'answer' => 'Untuk sistem internship di Berbinar saat ini masih bersifat unpaid (tidak dibayar).'
            ],
            [
                'question' => 'Berapa lama durasi internship di Berbinar?',
                'answer' => 'Terdapat 2 pilihan durasi internship di Berbinar, di antaranya 6 bulan atau 1 tahun.'
            ],
            [
                'question' => 'Sistem kerja internship di Berbinar?',
                'answer' => 'Saat ini internship Berbinar masih bersifat work from home.'
            ],
            [
                'question' => 'Apakah Berbinar menyediakan event offline?',
                'answer' => 'Selain event online, Berbinar juga menyediakan event offline pada SobatBinar yang saat ini berdomisili di Surabaya.'
            ],
            [
                'question' => 'Cara mengetahui informasi lebih jelas terkait jobdesc dan requirement posisi yang dibuka?',
                'answer' => 'SobatBinar bisa menjelajahi laman website berbinar pada bagian careers dan memilih “posisi yang dibuka”.'
            ],
            [
                'question' => 'Apabila terdapat informasi yang dibingungkan terkait rekrutmen, kemana harus bertanya?',
                'answer' => 'SobatBinar bisa menghubungi CP yang tersedia atau menghubungi MinNar melalui sosial media Berbinar.'
            ],
        ];

        return view('moduls.hiring.positions', [
            'faqs' => $faqs,
            'positions' => $positions,
            'HiringPositionsJobDescription' => $HiringPositionsJobDescription,
            'Hiring_Positions_Requirement' => $Hiring_Positions_Requirement,
        ]);
    }

    public function getImagePath($position)
    {
        if ($position == 'Web and Mobile Apps Developer') {
            return 'assets/images/internship/banner/web';
        }
        if ($position == 'TikTok Creator') {
            return 'assets/images/internship/banner/tiktok';
        }
        if ($position == 'Secretary n Finance') {
            return 'assets/images/internship/banner/secrefin';
        }
        if ($position == 'Psychological Testing Product Management') {
            return 'assets/images/internship/banner/ptpm';
        }
        if ($position == 'Marketing Strategist dan Sales') {
            return 'assets/images/internship/banner/msds';
        }
        if ($position == 'IG Creator') {
            return 'assets/images/internship/banner/instagram';
        }
        if ($position == 'Human Resource') {
            return 'assets/images/internship/banner/hr';
        }
        if ($position == 'Graphic Designer') {
            return 'assets/images/internship/banner/graphic';
        }
        if ($position == 'Class Product Management') {
            return 'assets/images/internship/banner/class';
        }
        if ($position == 'Counseling Product Management') {
            return 'assets/images/internship/banner/counseling';
        }
    }

    public function positionsDetail($id)
    {
        $position = Hiring_Positions::where('id', $id)->first();

        if (!$position) {
            return redirect()->back()->with('error', 'Position not found or inactive');
        }
        $imagePath = $this->getImagePath($position->divisi);
        $imagePathMobile = $imagePath . '-mobile.png';
        $imagePath = $imagePath . '.png';
        $HiringPositionsJobDescription = Hiring_Positions_Job_Descriptions::where('position_id', $id)->get();
        $Hiring_Positions_Requirement = Hiring_Positions_Requirements::where('position_id', $id)->get();

        return view(
            'moduls.hiring.positions-detail',
            [
                'imagePathMobile' => $imagePathMobile,
                'imagePath' => $imagePath,
                'position' => $position,
                'HiringPositionsJobDescription' => $HiringPositionsJobDescription,
                'Hiring_Positions_Requirement' => $Hiring_Positions_Requirement,
            ]
        );
    }

    public function layanan()
    {
        return view('moduls.konseling.layanan');
    }

    public function peerPilihJadwal(Request $request)
    {
        $senin = jadwalPeer::where('hari', 'Senin')->orderBy('pukul_mulai')->get();
        $selasa = jadwalPeer::where('hari', 'Selasa')->orderBy('pukul_mulai')->get();
        $rabu = jadwalPeer::where('hari', 'Rabu')->orderBy('pukul_mulai')->get();
        $kamis = jadwalPeer::where('hari', 'Kamis')->orderBy('pukul_mulai')->get();
        $jumat = jadwalPeer::where('hari', 'Jumat')->orderBy('pukul_mulai')->get();
        $sabtu = jadwalPeer::where('hari', 'Sabtu')->orderBy('pukul_mulai')->get();
        $minggu = jadwalPeer::where('hari', 'Minggu')->orderBy('pukul_mulai')->get();

        $konseling = $request->session()->get('konseling');

        return view('moduls.konseling.peer-jadwal', compact('senin', 'selasa', 'rabu', 'kamis', 'jumat', 'sabtu', 'minggu', 'konseling'));
    }

    public function postPeerPilihJadwal(Request $request)
    {
        $validatedData = $request->validate([
            'jadwal_tanggal' => 'required',
            'jadwal_pukul' => 'required',
            'metode' => 'required|not_in:default_value',
            'harga' => 'required|numeric',
            'daerah' => 'required_if:metode,offline|nullable|string',
        ], [
            'daerah.required_if' => 'Daerah is required when the method is offline.',
        ]);

        if (empty($request->session()->get('konseling'))) {
            $konseling = new KonsellingPeer();
            $konseling->fill($validatedData);
            $request->session()->put('konseling', $konseling);
        } else {
            $konseling = $request->session()->get('konseling');
            $konseling->fill($validatedData);
            $request->session()->put('konseling', $konseling);
        }

        return redirect()->route('peer-regData1');
    }

    public function peerRegData1(Request $request)
    {
        $konseling = $request->session()->get('konseling');
        return view('moduls.konseling.peer-regdata1', compact('konseling'));
    }

    public function postPeerRegData1(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'no_wa' => 'required',
            'email' => 'required',
            'jenis_kelamin' => 'required|not_in:default',
            'agama' => 'required',
        ]);

        $konseling = $request->session()->get('konseling');
        $konseling->fill($validatedData);
        $request->session()->put('konseling', $konseling);

        return redirect()->route('peer-regData2');
    }

    public function peerRegData2(Request $request)
    {
        $konseling = $request->session()->get('konseling');
        return view('moduls.konseling.peer-regdata2', compact('konseling'));
    }

    public function postPeerRegData2(Request $request)
    {
        $validatedData = $request->validate([
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'suku' => 'required',
            'status_pernikahan' => 'required',
            'alamat' => 'required',
        ]);

        $konseling = $request->session()->get('konseling');
        $konseling->fill($validatedData);
        $request->session()->put('konseling', $konseling);

        return redirect()->route('peer-regData3');
    }

    public function peerRegData3(Request $request)
    {
        $konseling = $request->session()->get('konseling');
        return view('moduls.konseling.peer-regdata3', compact('konseling'));
    }

    public function postPeerRegData3(Request $request)
    {
        $validatedData = $request->validate([
            'posisi_anak' => 'required',
            'pendidikan' => 'required',
            'riwayat_pekerjaan' => 'required',
            'hobi' => 'required',
            'kegiatan_sosial' => 'required',
        ]);

        $konseling = $request->session()->get('konseling');
        $konseling->fill($validatedData);
        $request->session()->put('konseling', $konseling);

        return redirect()->route('peer-regData4');
    }

    public function peerRegData4(Request $request)
    {
        $konseling = $request->session()->get('konseling');
        return view('moduls.konseling.peer-regdata4', compact('konseling'));
    }

    public function postPeerRegData4(Request $request)
    {
        $validatedData = $request->validate([
            'cerita' => 'required',
        ]);

        $konseling = $request->session()->get('konseling');
        $konseling->fill($validatedData);
        $konseling->save();

        $request->session()->forget('konseling');
        $request->session()->put('notif', 'VerifKonseling');
        return redirect()->route('home');
    }

    public function psiPilihJadwal(Request $request)
    {
        $konselling = $request->session()->get('konselling');
        return view('moduls.konseling.psi-jadwal', compact('konselling'));
    }

    // public function postPsiPilihJadwal(Request $request)
    // {
    //     $validatedData = $request->validate([
    //         'jadwal_tanggal' => 'required',
    //         'jadwal_pukul' => 'required',
    //         'metode' => 'required|not_in:default_value',
    //         'daerah' => 'nullable|required_if:metode,offline|not_in:default_value',
    //         'sesi' => 'required|int|between:1,3',
    //     ]);

    //     $jamMenit = substr($validatedData['jadwal_pukul'], 0, 5);
    //     $validatedData['jadwal_pukul'] = $jamMenit;

    //     // Calculate price
    //     $date = new \DateTime($validatedData['jadwal_tanggal']);
    //     $dayOfWeek = $date->format('N'); // 1 (for Monday) through 7 (for Sunday)
    //     $isWeekend = ($dayOfWeek == 6 || $dayOfWeek == 7);
    //     $isWeekday = !$isWeekend;

    //     if ($validatedData['metode'] == 'online') {
    //         $validatedData['harga'] = $isWeekday ? 150000 : 200000;
    //     } else if ($validatedData['metode'] == 'offline') {
    //         $validatedData['harga'] = $isWeekday ? 175000 : 225000;
    //     }

    //     if (empty($request->session()->get('konselling'))) {
    //         $konselling = new KonsellingPsikolog();
    //         $konselling->fill($validatedData);
    //         $request->session()->put('konselling', $konselling);
    //     } else {
    //         $konselling = $request->session()->get('konselling');
    //         $konselling->fill($validatedData);
    //         $request->session()->put('konselling', $konselling);
    //     }

    //     return redirect()->route('psi-regData1');
    // }

    public function postPsiPilihJadwal(Request $request)
    {
        $validatedData = $request->validate([
            'jadwal_tanggal' => 'required',
            'jadwal_pukul' => 'required',
            'metode' => 'required|not_in:default_value',
            'daerah' => 'nullable|required_if:metode,offline|not_in:default_value',
            'sesi' => 'required|int|between:1,3',
        ]);

        $jamMenit = substr($validatedData['jadwal_pukul'], 0, 5);
        $validatedData['jadwal_pukul'] = $jamMenit;

        // Calculate price
        $date = new DateTime($validatedData['jadwal_tanggal']);
        $dayOfWeek = $date->format('N'); // 1 (for Monday) through 7 (for Sunday)
        $isWeekend = ($dayOfWeek == 6 || $dayOfWeek == 7);
        $isWeekday = !$isWeekend;

        if ($validatedData['metode'] == 'online') {
            if ($isWeekday) {
                if ($validatedData['sesi'] == 1) {
                    $validatedData['harga'] = 150000;
                } elseif ($validatedData['sesi'] == 2) {
                    $validatedData['harga'] = 255000;
                } elseif ($validatedData['sesi'] == 3) {
                    $validatedData['harga'] = 360000;
                }
            } else {
                if ($validatedData['sesi'] == 1) {
                    $validatedData['harga'] = 200000;
                } elseif ($validatedData['sesi'] == 2) {
                    $validatedData['harga'] = 360000;
                } elseif ($validatedData['sesi'] == 3) {
                    $validatedData['harga'] = 520000;
                }
            }
        } elseif ($validatedData['metode'] == 'offline') {
            if ($isWeekday) {
                if ($validatedData['sesi'] == 1) {
                    $validatedData['harga'] = 175000;
                } elseif ($validatedData['sesi'] == 2) {
                    $validatedData['harga'] = 325000;
                } elseif ($validatedData['sesi'] == 3) {
                    $validatedData['harga'] = 475000;
                }
            } else {
                if ($validatedData['sesi'] == 1) {
                    $validatedData['harga'] = 225000;
                } elseif ($validatedData['sesi'] == 2) {
                    $validatedData['harga'] = 425000;
                } elseif ($validatedData['sesi'] == 3) {
                    $validatedData['harga'] = 625000;
                }
            }
        }

        if (empty($request->session()->get('konselling'))) {
            $konselling = new KonsellingPsikolog();
            $konselling->fill($validatedData);
            $request->session()->put('konselling', $konselling);
        } else {
            $konselling = $request->session()->get('konselling');
            $konselling->fill($validatedData);
            $request->session()->put('konselling', $konselling);
        }

        return redirect()->route('psi-regData1');
    }


    public function psiRegData1(Request $request)
    {
        $konselling = $request->session()->get('konselling');
        return view('moduls.konseling.psi-regdata1', compact('konselling'));
    }

    public function postPsiRegData1(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'no_wa' => 'required',
            'email' => 'required',
            'jenis_kelamin' => 'required|not_in:default',
            'agama' => 'required',
        ]);

        $konselling = $request->session()->get('konselling');
        $konselling->fill($validatedData);
        $request->session()->put('konselling', $konselling);

        return redirect()->route('psi-regData2');
    }

    public function psiRegData2(Request $request)
    {
        $konselling = $request->session()->get('konselling');
        return view('moduls.konseling.psi-regdata2', compact('konselling'));
    }

    public function postPsiRegData2(Request $request)
    {
        $validatedData = $request->validate([
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'suku' => 'required',
            'status_pernikahan' => 'required',
            'alamat' => 'required',
        ]);

        $konselling = $request->session()->get('konselling');
        $konselling->fill($validatedData);
        $request->session()->put('konselling', $konselling);

        return redirect()->route('psi-regData3');
    }

    public function psiRegData3(Request $request)
    {
        $konselling = $request->session()->get('konselling');
        return view('moduls.konseling.psi-regdata3', compact('konselling'));
    }

    public function postPsiRegData3(Request $request)
    {
        $validatedData = $request->validate([
            'posisi_anak' => 'required',
            'pendidikan' => 'required',
            'riwayat_pekerjaan' => 'required',
            'hobi' => 'required',
            'kegiatan_sosial' => 'required',
        ]);

        $konselling = $request->session()->get('konselling');
        $konselling->fill($validatedData);
        $request->session()->put('konselling', $konselling);

        return redirect()->route('psi-regData4');
    }

    public function psiRegData4(Request $request)
    {
        $konselling = $request->session()->get('konselling');
        return view('moduls.konseling.psi-regdata4', compact('konselling'));
    }

    public function postPsiRegData4(Request $request)
    {
        $validatedData = $request->validate([
            'cerita' => 'required',
        ]);

        $konselling = $request->session()->get('konselling');
        $konselling->fill($validatedData);
        $konselling->save();

        $request->session()->forget('konselling');

        $request->session()->put('notif', 'VerifKonseling');
        return redirect()->route('home');
    }

    public function instruksi()
    {
        return view('moduls.psikotes-paid.instruksi');
    }

    public function soal()
    {
        return view('moduls.psikotes-paid.soal');
    }

    public function end()
    {
        return view('moduls.psikotes-paid.end');
    }

    public function psikotestHome()
    {
        return view('moduls.psikotes.homepage');
    }

    public function psikotestFreeStart()
    {
        return view('moduls.psikotes.start');
    }

    public function psikotestFreeTest()
    {
        $questions = Question::all();
        return view('moduls.psikotes.freetest', ["question" => $questions]);
    }

    public function psikotestBiodata()
    {
        return view('moduls.psikotes.biodata');
    }

    public function psikotestFeedback()
    {
        return view('moduls.psikotes.feedback');
    }

    public function psikotestHasilTest()
    {
        return view('moduls.psikotes.hasiltes');
    }

    public function psikotestLogin()
    {
        return view('moduls.psikotes-paid.login');
    }

    public function psikotestSignUp()
    {
        return view('moduls.psikotes-paid.registrasi.page-1');
    }

    public function psikotestSchedule()
    {
        return view('moduls.psikotes-paid.registrasi.page-2');
    }

    public function psikotestMotive()
    {
        return view('moduls.psikotes-paid.registrasi.page-3');
    }

    public function psikotestSignupSuccess()
    {
        return view('moduls.psikotes-paid.registrasi.page-4');
    }

    public function psikotestTest()
    {
        return view('moduls.psikotes-paid.test');
    }

    public function psikotestPaidData()
    {
        return view('moduls.dashboard.psikotes-paid.data');
    }

    public function psikotestPaidDataTest()
    {
        return view('moduls.dashboard.psikotes-paid.data-test');
    }

    public function LandingBDI()
    {
        return view('moduls.psikotes-paid.tools.BDI.landing');
    }

    public function TestBDI()
    {
        return view('moduls.psikotes-paid.tools.bdi.test');
    }

    public function EndBDI()
    {
        return view('moduls.psikotes-paid.tools.bdi.summary');
    }
}
