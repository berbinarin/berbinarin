<?php

namespace App\Http\Controllers\Landing\Product\Counseling;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\KonsellingPsikolog;
use Illuminate\Support\Carbon;
use App\Models\jadwalPeer;


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
                'name' => "Shafiyyah Muthi'ah",
                'image' => 'assets/images/landing/asset-konseling/image/peer-counselor/shafiyyah.png',
                'region' => 'Tangerang Selatan'
            ],
            [
                'name' => "Firda Annisapriyanti",
                'image' => 'assets/images/landing/asset-konseling/image/peer-counselor/firda.png',
                'region' => 'Palembang'
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

    public function registration()
    {
        $konselings = [
            [
                'image' => 'assets/images/landing/asset-konseling/vector/psikolog.png',
                'nama' => 'Psikolog',
                'deskripsi' => 'Konseling bersama Psikolog berizin praktek aktif (SIPP) dan berpengalaman dalam menghadapi berbagai permasalahan yang berkaitan dengan konseling',
                'link' => route('product.counseling.schedule', ['kategori' => 'psikolog', 'reset' => 1])
            ],
            [
                'image' => 'assets/images/landing/asset-konseling/vector/peercounselor.png',
                'nama' => 'Peer Counselor',
                'deskripsi' => 'Konseling bersama Peer Conselor yang dilatih secara langsung oleh Psikolog Berbinar dan merupakan mahasiswa yang telah lulus mata kuliah konseling',
                'link' => route('product.counseling.schedule', ['kategori' => 'peer-counselor', 'reset' => 1])
            ],
        ];

        return view('landing.product.counseling.registration')->with([
            'konselings' => $konselings
        ]);
    }

    // Jadwal konseling
    public function schedule(Request $request)
    {
        if ($request->has('reset')) {
            session()->forget('jadwal_konseling');
            session()->forget('personal_konseling');
            session()->forget('cerita_konseling');
        }

        $jadwal = session('jadwal_konseling');
        $kategori = $jadwal['kategori'] ?? $request->get('kategori', 'psikolog');
        $jadwalPeers = [];
        if ($kategori === 'peer-counselor') {
            $jadwalPeers = jadwalPeer::orderBy('hari')->orderBy('pukul_mulai')->get();
        }

        return view('landing.product.counseling.schedule', compact('jadwal', 'kategori', 'jadwalPeers'));
    }

    // Input Jadwal Konseling - Daftar Psikotes
    public function storeSchedule(Request $request)
    {
        $validatedData = $request->validate([
            'jadwal_tanggal' => 'required',
            'jadwal_pukul' => 'required',
            'metode' => 'required|in:online,offline',
            'daerah' => 'required_if:metode,offline',
            'sesi' => 'required|in:1,2,3',
            'kategori' => 'required',
        ]);

        // Jika metode online, isi daerah dengan 'Online'
        if ($validatedData['metode'] === 'online') {
            $validatedData['daerah'] = 'Online';
        }

        // Konversi tanggal dari d/m/Y (flatpickr format) ke Y-m-d untuk penyimpanan dan perhitungan
        $parsedTanggal = Carbon::createFromFormat('d-m-Y', $validatedData['jadwal_tanggal'])->format('Y-m-d');

        // Menentukan weekday/weekend
        $tanggal = Carbon::parse($parsedTanggal);
        $isWeekend = in_array($tanggal->dayOfWeek, [Carbon::SATURDAY, Carbon::SUNDAY]);

        $harga = 0;
        if ($validatedData['kategori'] === 'peer-counselor') {
            $harga = $validatedData['metode'] === 'online'
                ? [1 => 45000, 2 => 90000, 3 => 135000][$validatedData['sesi']]
                : [1 => 55000, 2 => 110000, 3 => 165000][$validatedData['sesi']];
        } else { // psikolog
            if (!$isWeekend) {
                $harga = $validatedData['metode'] === 'online'
                    ? [1 => 150000, 2 => 300000, 3 => 450000][$validatedData['sesi']]
                    : [1 => 175000, 2 => 350000, 3 => 525000][$validatedData['sesi']];
            } else {
                $harga = $validatedData['metode'] === 'online'
                    ? [1 => 200000, 2 => 340000, 3 => 500000][$validatedData['sesi']]
                    : [1 => 225000, 2 => 340000, 3 => 500000][$validatedData['sesi']];
            }
        }

        session([
            'jadwal_konseling' => [
                'jadwal_tanggal' => $parsedTanggal,
                'jadwal_pukul' => $validatedData['jadwal_pukul'],
                'metode' => $validatedData['metode'],
                'daerah' => $validatedData['metode'] === 'offline' ? $validatedData['daerah'] : 'Online',
                'sesi' => $validatedData['sesi'],
                'harga' => $harga,
                'kategori' => $validatedData['kategori'],
            ]
        ]);
        // dd(session('jadwal_konseling'));
        return redirect()->route('product.counseling.personal_data');
    }


    public function personalData()
    {
        $personal = session('personal_konseling');
        $jadwal = session('jadwal_konseling');
        $kategori = $jadwal['kategori'] ?? 'psikolog'; // default psikolog jika tidak ada
        return view('landing.product.counseling.personal-data', compact('personal', 'kategori'));
    }


    public function storePersonalData(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'tanggal_lahir' => 'required',
            'tempat_lahir' => 'required',
            'alamat' => 'required',
            'status_pernikahan' => 'required',
            'jenis_kelamin' => 'required',
            'no_wa' => 'required',
            'suku' => 'nullable',
            'agama' => 'nullable',
            'posisi_anak' => 'nullable',
            'hobi' => 'nullable',
            'pendidikan' => 'nullable',
            'asal_sekolah' => 'nullable',
            'riwayat_pekerjaan' => 'nullable',
            'kegiatan_sosial' => 'nullable',
        ]);

        // Konversi tanggal_lahir dari d/m/Y ke Y-m-d
        $parsedTanggal = \Carbon\Carbon::createFromFormat('d/m/Y', $validatedData['tanggal_lahir'])->format('Y-m-d');
        $validatedData['tanggal_lahir'] = $parsedTanggal;

        session([
            'personal_konseling' => [
                'nama' => $validatedData['nama'],
                'email' => $validatedData['email'],
                'tanggal_lahir' => $validatedData['tanggal_lahir'],
                'tempat_lahir' => $validatedData['tempat_lahir'],
                'alamat' => $validatedData['alamat'],
                'status_pernikahan' => $validatedData['status_pernikahan'],
                'jenis_kelamin' => $validatedData['jenis_kelamin'],
                'no_wa' => $validatedData['no_wa'],
                'suku' => $validatedData['suku'] ?? null,
                'agama' => $validatedData['agama'] ?? null,
                'posisi_anak' => $validatedData['posisi_anak'] ?? null,
                'hobi' => $validatedData['hobi'] ?? null,
                'pendidikan' => $validatedData['pendidikan'] ?? null,
                'asal_sekolah' => $validatedData['asal_sekolah'] ?? null,
                'riwayat_pekerjaan' => $validatedData['riwayat_pekerjaan'] ?? null,
                'kegiatan_sosial' => $validatedData['kegiatan_sosial'] ?? null,
            ]
        ]);

        // dd(session('personal_konseling'));
        return redirect()->route('product.counseling.story');
    }


    public function story()
    {
        $cerita = session('cerita_konseling');
        return view('landing.product.counseling.story', compact('cerita'));
    }

    public function storeStory(Request $request)
    {
        $request->validate([
            'cerita' => 'required',
        ]);

        session(['cerita_konseling' => $request->cerita]);

        $jadwal = session('jadwal_konseling');
        $personal = session('personal_konseling');

        if (!$jadwal || !$personal) {
            return redirect()->route('product.counseling.schedule')->with('error', 'Lengkapi jadwal dan data diri terlebih dahulu.');
        }


        $daerah = $jadwal['daerah'] ?? null;
        if (($jadwal['metode'] ?? '') === 'online') {
            $daerah = 'Online';
        }

        $data = array_merge($jadwal, $personal, [
            'cerita' => $request->cerita,
            'daerah' => $daerah,
        ]);

        KonsellingPsikolog::create($data);

        // Hapus semua session step
        session()->forget(['jadwal_konseling', 'personal_konseling', 'cerita_konseling']);

        return redirect()->route('product.counseling.summary');
    }

    public function summary()
    {
        return view('landing.product.counseling.summary-konseling')->with([]);
    }
}
