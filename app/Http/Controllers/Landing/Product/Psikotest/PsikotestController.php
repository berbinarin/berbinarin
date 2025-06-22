<?php

namespace App\Http\Controllers\Landing\Product\Psikotest;

use App\Http\Controllers\Controller;
use App\Models\PsikotestPaid\UserPsikotestPaid;
use App\Models\PsikotestPaid\CategoryPsikotestType;
use App\Models\PsikotestPaid\PsikotestType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class PsikotestController extends Controller
{
    public function index()
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
                        'total' => '40 Klien',
                    ],
                    [
                        'logo' => 'assets/images/landing/asset-tentang/mitra-afiliasi/mitra15.png',
                        'name' => 'PT Bara Blasting Perkasa',
                        'total' => '7 Klien',
                    ],
                ],
            ],
            [
                'category' => 'Instansi Pendidikan',
                'mitra' => [
                    [
                        'logo' => 'assets/images/landing/asset-tentang/mitra-afiliasi/mitra3.png',
                        'name' => 'Calon Dosen Non PNS UNAIR',
                        'total' => '1 Klien',
                    ],
                    [
                        'logo' => 'assets/images/landing/asset-psikotes/yayasan-darussalam.png',
                        'name' => 'Calon Guru Yayasan Darussalam',
                        'total' => '55 Klien',
                    ],
                    [
                        'logo' => 'assets/images/landing/asset-psikotes/yayasan-darussalam.png',
                        'name' => 'Calon Kepala Sekolah Yayasan Darussalam',
                        'total' => '4 Klien',
                    ],
                ],
            ],
            [
                'category' => 'Individu',
                'mitra' => [
                    [
                        'logo' => 'assets/images/landing/asset-psikotes/vector-person2.png',
                        'name' => 'Individu',
                        'total' => '8 Klien',
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
                'jenis_tes' => 'Tes Demensia',
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
                'paket' => 'Tes Demensia',
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

        return view('landing.product.psikotest.index')->with([
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

    public function registration()
    {
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

        return view('landing.product.psikotest.registration')->with([
            'layanan_psikotes' => $layanan_psikotes
        ]);
    }

    public function schedule()
    {
        $psikotestCategoryTypes = CategoryPsikotestType::all();
        $psikotestTypes = PsikotestType::all();
        return view('landing.product.psikotest.schedule', compact('psikotestTypes', 'psikotestCategoryTypes'))->with([]);
    }

    public function personalData()
    {
        return view('landing.product.psikotest.personal-data')->with([]);
    }

    public function summary()
    {
        return view('landing.product.psikotest.summary')->with([]);
    }

    public function storeSchedule(Request $request) {
        $request->validate([
            'service' => 'required',
            'psikotest_type_id' => 'required',
            'preference_date' => 'required|date_format:d/m/Y',
            'preference_time' => 'required',
        ]);

        $preferenceDate = $request->input('preference_date');
        $preferenceTime = $request->input('preference_time');

        $carbonDate = Carbon::createFromFormat('d/m/Y H:i', $preferenceDate . ' ' . $preferenceTime);
        $preferenceSchedule = $carbonDate->format('Y-m-d H:i:s');

        $data = [
            'service' => $request->input('service'),
            'psikotest_type_id' => $request->input('psikotest_type_id'),
            'preference_schedule' => $preferenceSchedule,
        ];

        $sessionData = array_merge($request->session()->get('psikotest-paid', []), $data);
        $request->session()->put('psikotest-paid', $sessionData);

        return redirect()->route('product.psikotest.personal_data');
    }

    public function storePersonalData(Request $request) {
        $request->validate([
            'fullname' => 'required',
            'email' => 'required|email',
            'gender' => 'required',
            'domicile' => 'required',
            'age' => 'required',
            'phone_number' => 'required',
            'reason' => 'required',
        ]);

        $data = $request->all();
        $sessionData = array_merge($request->session()->get('psikotest-paid'), $data);

        $password = $this->generatePassword($sessionData['fullname']);
        $hashedPassword = Hash::make($password);

        $this->saveUserData($sessionData, $hashedPassword);

        $request->session()->forget('psikotest-paid');

        return redirect()->route('product.psikotest.summary');
    }

    private function saveUserData(array $data, string $hashedPassword)
    {
        UserPsikotestPaid::create([
            'fullname' => $data['fullname'],
            'email' => $data['email'],
            'gender' => $data['gender'],
            'domicile' => $data['domicile'],
            'age' => $data['age'],
            'phone_number' => $data['phone_number'],
            'service' => $data['service'],
            'psikotest_type_id' => $data['psikotest_type_id'],
            'preference_schedule' => $data['preference_schedule'],
            'reason' => $data['reason'],
            'password' => $hashedPassword,
        ]);
    }

    private function generatePassword($fullname)
    {
        $firstName = explode(' ', trim($fullname))[0];
        return $firstName . 'berbinar123!';
    }
}
