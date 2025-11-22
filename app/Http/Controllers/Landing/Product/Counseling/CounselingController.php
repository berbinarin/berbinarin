<?php

namespace App\Http\Controllers\Landing\Product\Counseling;

use App\Http\Controllers\Controller;
use App\Models\CodeVoucher;
use Illuminate\Http\Request;

class CounselingController extends Controller
{
    public function index()
    {
        $konselings = [
            [
                'name' => 'Konseling Psikolog',
                'image' => 'assets/images/landing/asset-konseling/konseling/Konseling Psikolog.webp',
                'description' => [
                    'Memiliki pelatihan dan kualifikasi profesional untuk menangani masalah kesehatan mental yang lebih kompleks.',
                    'Menyediakan pendekatan yang lebih formal dan terstandarisasi dalam konseling.',
                ],
            ],
            [
                'name' => 'Konseling Peer Counselor',
                'image' => 'assets/images/landing/asset-konseling/konseling/Konseling Peer Counselor.webp',
                'description' => [
                    'Menawarkan dukungan dari teman sebaya dengan empati yang kuat sehingga lebih mudah terbuka dengan klien.',
                    'Fokus pada masalah sehari-hari seperti penyesuaian diri.',
                ],
            ],
            [
                'name' => 'Konseling Daring',
                'image' => 'assets/images/landing/asset-konseling/konseling/Konseling Daring.webp',
                'description' => [
                    'Fleksibilitas yang memudahkan klien menjadwalkan sesi sesuai dengan ketersediaan klien dan dapat dilakukan dari mana saja.',
                    'Aksesibilitas dengan menyediakan pilihan bagi klien yang tinggal di daerah susah dijangkau dan mengurangi kecemasan yang mungkin dirasakan saat bertemu langsung.',
                ],
            ],
            [
                'name' => 'Konseling Luring',
                'image' => 'assets/images/landing/asset-konseling/konseling/Konseling Luring.webp',
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
                'name' => 'Ramadhani Lucky Al Kahfi',
                'title' => 'S.Psi., M.Psi., Psikolog',
                'image' => 'assets/images/landing/asset-konseling/image/psikolog/ramadhani.png'
            ],
            [
                'name' => 'Alto Kusumo Andrian',
                'title' => 'S.Psi., M.Psi., Psikolog',
                'image' => 'assets/images/landing/asset-konseling/image/psikolog/alto.png'
            ],
            [
                'name' => 'Saraswati Stefannie Doho',
                'title' => 'S.Psi., M.Psi., Psikolog',
                'image' => 'assets/images/landing/asset-konseling/image/psikolog/saras.png'
            ],
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
                'name' => "Adinda Fasya Az-zahra D.",
                'image' => 'assets/images/landing/asset-konseling/image/peer-counselor/adinda.png',
                'region' => 'Jakarta'
            ],
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
                'answer' => 'Tentu saja, seluruh hal yang akan kamu sampaikan saat sesi konseling akan dijaga kerahasiaannya oleh psikolog/peer counselor kami. Selain itu, psikolog serta peer counselor kami sangat menjunjung tinggi kode etik psikologi, sehingga kamu dapat bebas dalam menyampaikan sesuatu saat sesi konseling berlangsung.
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

        return view('landing.product.counseling.index')->with([
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

    public function registrationKonseling()
    {
        $konselings = [
            [
                'image' => 'assets/images/landing/asset-konseling/vector/psikolog.png',
                'nama' => 'Psikolog',
                'deskripsi' => 'Konseling bersama Psikolog berizin praktek aktif (SIPP) dan berpengalaman dalam menghadapi berbagai permasalahan yang berkaitan dengan konseling',
            ],
            [
                'image' => 'assets/images/landing/asset-konseling/vector/psikolog-staff.png',
                'nama' => 'Peer Counselor',
                'deskripsi' => 'Konseling bersama Peer Counselor yang dilatih secara langsung oleh Psikolog Berbinar dan merupakan mahasiswa yang telah lulus mata kuliah konseling',
            ],
        ];

        return view('landing.product.counseling.choose-psikolog-umum')->with([
            'konselings' => $konselings
        ]);
    }

    public function registrationPsikologStaff()
    {
        $konselings = [
            [
                'image' => 'assets/images/landing/asset-konseling/vector/psikolog1-new.png',
                'nama' => 'Psikolog',
                'deskripsi' => 'Konseling bersama Psikolog berizin (SIPP) yang berpengalaman menangani keluhan staff.
                Dilaksanakan secara profesional dan rahasia untuk mendukung kesehatan mental serta performa staff.',
            ],
            [
                'image' => 'assets/images/landing/asset-konseling/vector/psikolog3-new.png',
                'nama' => 'Peer Counselor',
                'deskripsi' => 'Sesi bersama Peer Counselor terlatih oleh Psikolog Berbinar, siap menjadi pendengar empatik bagi staff dalam menghadapi tantangan kerja dan menjaga kesejahteraan emosional.',
            ],
        ];

        return view('landing.product.counseling.choose-psikolog-staff')->with([
            'konselings' => $konselings
        ]);
    }



    // Validasi Voucher
    public function cekVoucher(Request $request)
    {
        $code = $request->code;
        $jadwal_tanggal = $request->jadwal_tanggal;
        $metode = $request->metode;
        $sesi = $request->sesi;
        $kategori = $request->kategori; // Mengambil data kategori dari request (psikolog/peer)

        $voucher = CodeVoucher::where('code', $code)->first();

        if (!$voucher) {
            return response()->json(['valid' => false, 'message' => 'Kode voucher tidak valid']);
        }

        // Validasi jenis_pendaftaran voucher dengan kategori pendaftar
        if (
            isset($voucher->jenis_pendaftaran) &&
            strtolower($voucher->jenis_pendaftaran) !== strtolower($kategori)
        ) {
            return response()->json([
                'valid' => false,
                'message' => 'Kode voucher tidak valid.'
            ]);
        }

        $tipeArr = json_decode($voucher->tipe, true);
        $detailArr = json_decode($voucher->detail, true);

        $isValid = true;
        foreach ($tipeArr as $i => $tipe) {
            $detail = $detailArr[$i] ?? null;
            if ($tipe == 'hari') {
                try {
                    $dateObj = \Carbon\Carbon::createFromFormat('d/m/Y', $jadwal_tanggal);
                    $day = $dateObj->dayOfWeek; // 0: Minggu, 6: Sabtu
                    $isWeekend = ($day == 0 || $day == 6);
                    if ($detail == 'weekdays' && $isWeekend) $isValid = false;
                    if ($detail == 'weekend' && !$isWeekend) $isValid = false;
                } catch (\Exception $e) {
                    $isValid = false;
                }
            }
            if ($tipe == 'metode' && strtolower($metode) != strtolower($detail)) $isValid = false;
            if ($tipe == 'sesi' && strval($sesi) != strval($detail)) $isValid = false;
        }

        if (!$isValid) {
            return response()->json(['valid' => false, 'message' => 'Kode voucher tidak valid']);
        }

        return response()->json([
            'valid' => true,
            'category' => $voucher->category,
            'code' => $voucher->code,
            'percentage' => $voucher->percentage,
            'nama_voucher' => $voucher->nama_voucher,
            'jenis_pendaftaran' => $voucher->jenis_pendaftaran,
            'message' => 'Kode voucher valid.'
        ]);
    }
}
