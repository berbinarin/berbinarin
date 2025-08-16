<?php

namespace App\Http\Controllers\Landing\Product\Counseling;

use App\Http\Controllers\Controller;
use App\Models\KonsellingPsikolog;
use App\Models\jadwalPeer;
use App\Models\KonsellingPeer;
use App\Models\BerbinarForU;
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
                'region' => 'Surabaya'
            ],
            [
                'name' => "Rizka Arista Sabilla ",
                'image' => 'assets/images/landing/asset-konseling/image/peer-counselor/rizka.png',
                'region' => 'Nganjuk'
            ],
            [
                'name' => 'Melisa Nur Amelia',
                'image' => 'assets/images/landing/asset-konseling/image/peer-counselor/melisa.png',
                'region' => 'Jombang'
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
                'image' => 'assets/images/landing/asset-konseling/vector/peercounselor.png',
                'nama' => 'Peer Counselor',
                'deskripsi' => 'Konseling bersama Peer Counselor yang dilatih secara langsung oleh Psikolog Berbinar dan merupakan mahasiswa yang telah lulus mata kuliah konseling',
            ],
        ];

        return view('landing.product.counseling.registration')->with([
            'konselings' => $konselings
        ]);
    }

    public function registrationPsikolog()
    {
        $konselings = [
            [
                'image' => 'assets/images/landing/asset-konseling/vector/psikolog.png',
                'nama' => 'Psikolog Umum',
                'deskripsi' => 'Konseling bersama Psikolog berizin praktek aktif (SIPP) dan berpengalaman dalam menghadapi berbagai permasalahan yang berkaitan dengan konseling',
            ],
            [
                'image' => 'assets/images/landing/asset-konseling/vector/psikolog-staff.png',
                'nama' => 'Psikolog Staff',
                'deskripsi' => 'Salah satu benefit ekslusif bagi setiap staf yang bekerja di PT Berbinar Insightful Indonesia untuk melakukan konseling bersama Psikolog berizin prakter aktif (SIPP)',
            ],
        ];

        return view('landing.product.counseling.registration-psikolog')->with([
            'konselings' => $konselings
        ]);
    }

    public function registrationPeer()
    {
        $konselings = [
            [
                'image' => 'assets/images/landing/asset-konseling/vector/peercounselor.png',
                'nama' => 'Umum',
                'deskripsi' => 'Konseling bersama Peer Counselor yang dilatih secara langsung oleh Psikolog Berbinar dan merupakan mahasiswa yang telah lulus mata kuliah konseling',
            ],
            [
                'image' => 'assets/images/landing/asset-konseling/vector/berbinarforu.png',
                'nama' => 'Berbinar For U',
                'deskripsi' => 'Berbinar For U adalah layanan konseling bersama dengan Peer Counselor yang, dengan harga gratis dan terjamin profesionalitasnya, bagi kamu yang beruntung!',
            ],
        ];

        return view('landing.product.counseling.registration-peer')->with([
            'konselings' => $konselings
        ]);
    }

    public function showPsikologForm()
    {
        return view('landing.product.counseling.psikolog.registration-psikolog');
    }

    public function showPsikologStaffForm()
    {
        return view('landing.product.counseling.staff.registration-psikolog-staff');
    }

    public function showPeerForm()
    {
        $jadwalPeerCounselors = jadwalPeer::all();
        return view('landing.product.counseling.peer.registration-peer', compact('jadwalPeerCounselors'));
    }

    public function ShowBerbinarForUForm()
    {
        return view('landing.product.counseling.berbinarForU.registration-berbinarForU');
    }

    public function schedule_psikolog()
    {
        return view('landing.product.counseling.psikolog.schadule');
    }

    public function showPsikologRegistration()
    {
        return view('landing.product.counseling.psikolog.registrasi-psikolog');
    }

    public function storePsikologRegistration(Request $request)
    {
        $request->validate([
            'jadwal_tanggal' => 'required',
            'jadwal_pukul' => 'required',
            'metode' => 'required',
            'daerah' => 'nullable',
            'sesi' => 'required',
            'harga' => 'required',
            'nama' => 'required',
            'email' => 'required',
            'tanggal_Lahir' => 'required',
            'tempat_lahir' => 'required',
            'alamat' => 'required',
            'status_pernikahan' => 'required',
            'jenis_kelamin' => 'required',
            'no_wa' => 'required',
            'suku' => 'required',
            'agama' => 'required',
            'posisi_anak' => 'required',
            'hobi' => 'required',
            'pendidikan' => 'required',
            'asal_sekolah' => 'required',
            'riwayat_pekerjaan' => 'required',
            'kegiatan_sosial' => 'required',
            'cerita' => 'required',
            'kategori' => 'required'
        ]);

        try {
            // Convert date format from d/m/Y to Y-m-d
            $tanggalLahir = \DateTime::createFromFormat('d/m/Y', $request->tanggal_Lahir);
            $jadwalTanggal = \DateTime::createFromFormat('d/m/Y', $request->jadwal_tanggal);

            $data = $request->all();
            $data['tanggal_Lahir'] = $tanggalLahir ? $tanggalLahir->format('Y-m-d') : null;
            $data['jadwal_tanggal'] = $jadwalTanggal ? $jadwalTanggal->format('Y-m-d') : null;
            $data['sesi'] = intval($data['sesi']); // pastikan sesi integer

            // Jika metode online, daerah ikut 'Online'
            if ($data['metode'] === 'online') {
                $data['daerah'] = 'Online';
            }

            // dd($data);
            KonsellingPsikolog::create($data);

            return view('landing.product.counseling.summary-konseling');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Terjadi kesalahan saat menyimpan data. Silakan coba lagi.')
                ->withInput();
        }
    }

    public function storePsikologStaffRegistration(Request $request)
    {
        $request->validate([
            'jadwal_tanggal' => 'required',
            'jadwal_pukul' => 'required',
            'metode' => 'required',
            'daerah' => 'nullable',
            'sesi' => 'required',
            'harga' => 'required',
            'nama' => 'required',
            'email' => 'required',
            'tanggal_Lahir' => 'required',
            'tempat_lahir' => 'required',
            'alamat' => 'required',
            'status_pernikahan' => 'required',
            'jenis_kelamin' => 'required',
            'no_wa' => 'required',
            'suku' => 'required',
            'agama' => 'required',
            'posisi_anak' => 'required',
            'hobi' => 'required',
            'pendidikan' => 'required',
            'asal_sekolah' => 'required',
            'riwayat_pekerjaan' => 'required',
            'kegiatan_sosial' => 'required',
            'cerita' => 'required',
            'kategori' => 'required'
        ]);

        try {
            // Convert date format from d/m/Y to Y-m-d
            $tanggalLahir = \DateTime::createFromFormat('d/m/Y', $request->tanggal_Lahir);
            $jadwalTanggal = \DateTime::createFromFormat('d/m/Y', $request->jadwal_tanggal);

            $data = $request->all();
            $data['tanggal_Lahir'] = $tanggalLahir ? $tanggalLahir->format('Y-m-d') : null;
            $data['jadwal_tanggal'] = $jadwalTanggal ? $jadwalTanggal->format('Y-m-d') : null;
            $data['sesi'] = intval($data['sesi']); // pastikan sesi integer

            // Jika metode online, daerah ikut 'Online'
            if ($data['metode'] === 'online') {
                $data['daerah'] = 'Online';
            }

            // dd($data);
            KonsellingPsikolog::create($data);

            return view('landing.product.counseling.summary-konseling');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Terjadi kesalahan saat menyimpan data. Silakan coba lagi.')
                ->withInput();
        }
    }

    public function storePeerRegistration(Request $request)
    {
        $request->validate([
            'jadwal_tanggal' => 'required',
            'jadwal_pukul' => 'required',
            'metode' => 'required',
            'daerah' => 'nullable',
            'sesi' => 'required',
            'harga' => 'required',
            'nama' => 'required',
            'email' => 'required|email',
            'tanggal_Lahir' => 'required',
            'tempat_lahir' => 'required',
            'alamat' => 'required',
            'status_pernikahan' => 'required',
            'jenis_kelamin' => 'required',
            'no_wa' => 'required',
            'suku' => 'required',
            'agama' => 'required',
            'posisi_anak' => 'required',
            'hobi' => 'required',
            'pendidikan' => 'required',
            'asal_sekolah' => 'required',
            'riwayat_pekerjaan' => 'required',
            'kegiatan_sosial' => 'required',
            'cerita' => 'required',
            'kategori' => 'required'
        ]);

        try {
            // Convert date format from d/m/Y to Y-m-d
            $tanggalLahir = \DateTime::createFromFormat('d/m/Y', $request->tanggal_Lahir);
            $jadwalTanggal = \DateTime::createFromFormat('d/m/Y', $request->jadwal_tanggal);

            $data = $request->all();
            $data['tanggal_Lahir'] = $tanggalLahir ? $tanggalLahir->format('Y-m-d') : null;
            $data['jadwal_tanggal'] = $jadwalTanggal ? $jadwalTanggal->format('Y-m-d') : null;
            $data['sesi'] = intval($data['sesi']); // pastikan sesi integer
            $data['harga'] = intval($data['harga']); // pastikan harga integer

            // Jika metode online, daerah ikut 'Online'
            if ($data['metode'] === 'online') {
                $data['daerah'] = 'Online';
            }

            KonsellingPeer::create($data);

            return view('landing.product.counseling.summary-konseling');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Terjadi kesalahan saat menyimpan data. Silakan coba lagi.')
                ->withInput();
        }
    }

    public function storeBerbinarForURegistration(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'tanggal_lahir' => 'required',
            'tempat_lahir' => 'required',
            'alamat' => 'required',
            'status_pernikahan' => 'required',
            'jenis_kelamin' => 'required',
            'no_wa' => 'required',
            'suku' => 'required',
            'agama' => 'required',
            'posisi_anak' => 'required',
            'hobi' => 'required',
            'pendidikan' => 'required',
            'asal_sekolah' => 'required',
            'riwayat_pekerjaan' => 'required',
            'kegiatan_sosial' => 'required',
            'kategori' => 'required',
            'cerita_utama' => 'required',
            'cerita_tambahan' => 'required',
            'alasan_konseling' => 'required',
            'harapan_konseling' => 'required',
        ]);

        try {
            // Convert date format from d/m/Y to Y-m-d
            $tanggalLahir = \DateTime::createFromFormat('d/m/Y', $request->tanggal_lahir);

            $data = $request->all();
            $data['tanggal_lahir'] = $tanggalLahir ? $tanggalLahir->format('Y-m-d') : null;

            BerbinarForU::create($data);

            return view('landing.product.counseling.summary-konseling');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Terjadi kesalahan saat menyimpan data. Silakan coba lagi.')
                ->withInput();
        }
    }

    // public function summary()
    // {
    //     return view('landing.product.counseling.summary-konseling')->with([]);
    // }
}
