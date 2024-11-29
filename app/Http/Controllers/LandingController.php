<?php

namespace App\Http\Controllers;

use App\Models\Soal;
use App\Models\Test;
use App\Models\Question;
use App\Models\Dimension;
use App\Models\jadwalPeer;
use Illuminate\Http\Request;
use App\Models\UserPsikotest;
use App\Models\KonsellingPeer;
use App\Models\Hiring_Positions;
use App\Models\KonsellingPsikolog;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Hiring_Positions_Requirements;
use App\Models\Hiring_Positions_Job_Descriptions;

class LandingController extends Controller
{
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
        $date = new \DateTime($validatedData['jadwal_tanggal']);
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

    public function instruksiVak()
    {
        return view('moduls.dashboard.psikotes-paid.tools.vak.instruksiVAK');
    }

    public function soalVak()
    {
        return view('moduls.dashboard.psikotes-paid.tools.vak.soalVAK');
    }

    public function endVak()
    {
        return view('moduls.dashboard.psikotes-paid.tools.vak.endVAK');
    }

    public function instruksiSSCT()
    {
        return view('moduls.dashboard.psikotes-paid.tools.ssct.instruksiSSCT');
    }

    public function soalSSCT()
    {
        return view('moduls.dashboard.psikotes-paid.tools.ssct.soalSSCT');
    }

    public function endSSCT()
    {
        return view('moduls.dashboard.psikotes-paid.tools.ssct.endSSCT');
    }

    public function instruksiCompBio()
    {
        return view('moduls.dashboard.psikotes-paid.tools.biodata.perusahaan.instruksi-bio');
    }

    public function dataDiriCompBio()
    {
        return view('moduls.dashboard.psikotes-paid.tools.biodata.perusahaan.dataDiri-bio');
    }
    
    public function dataLanjutanCompBio()
    {
        return view('moduls.dashboard.psikotes-paid.tools.biodata.perusahaan.dataLanjutan-bio');
    }

    public function riwayatPendCompBio()
    {
        return view('moduls.dashboard.psikotes-paid.tools.biodata.perusahaan.riwayatPend-bio');
    }

    public function riwayatPend2CompBio()
    {
        return view('moduls.dashboard.psikotes-paid.tools.biodata.perusahaan.riwayatPend2-bio');
    }

    public function riwayatPend3CompBio()
    {
        return view('moduls.dashboard.psikotes-paid.tools.biodata.perusahaan.riwayatPend3-bio');
    }

    public function riwayatPend4CompBio()
    {
        return view('moduls.dashboard.psikotes-paid.tools.biodata.perusahaan.riwayatPend4-bio');
    }

    public function isian1CompBio()
    {
        return view('moduls.dashboard.psikotes-paid.tools.biodata.perusahaan.isian1-bio');
    }

    public function isian2CompBio()
    {
        return view('moduls.dashboard.psikotes-paid.tools.biodata.perusahaan.isian2-bio');
    }

    public function isian3CompBio()
    {
        return view('moduls.dashboard.psikotes-paid.tools.biodata.perusahaan.isian3-bio');
    }

    public function isian4CompBio()
    {
        return view('moduls.dashboard.psikotes-paid.tools.biodata.perusahaan.isian4-bio');
    }

    public function isian5CompBio()
    {
        return view('moduls.dashboard.psikotes-paid.tools.biodata.perusahaan.isian5-bio');
    }

    public function endCompBio()
    {
        return view('moduls.dashboard.psikotes-paid.tools.biodata.perusahaan.end-bio');
    }
    
    public function instruksiPendBio()
    {
        return view('moduls.dashboard.psikotes-paid.tools.biodata.pendidikan.instruksi-bio');
    }

    public function dataDiriPendBio()
    {
        return view('moduls.dashboard.psikotes-paid.tools.biodata.pendidikan.dataDiri-bio');
    }
    
    public function dataLanjutanPendBio()
    {
        return view('moduls.dashboard.psikotes-paid.tools.biodata.pendidikan.dataLanjutan-bio');
    }

    public function riwayatPendPendBio()
    {
        return view('moduls.dashboard.psikotes-paid.tools.biodata.pendidikan.riwayatPend-bio');
    }

    public function riwayatPend2PendBio()
    {
        return view('moduls.dashboard.psikotes-paid.tools.biodata.pendidikan.riwayatPend2-bio');
    }

    public function riwayatPend3PendBio()
    {
        return view('moduls.dashboard.psikotes-paid.tools.biodata.pendidikan.riwayatPend3-bio');
    }

    public function isian1PendBio()
    {
        return view('moduls.dashboard.psikotes-paid.tools.biodata.pendidikan.isian1-bio');
    }

    public function isian2PendBio()
    {
        return view('moduls.dashboard.psikotes-paid.tools.biodata.pendidikan.isian2-bio');
    }

    public function isian3PendBio()
    {
        return view('moduls.dashboard.psikotes-paid.tools.biodata.pendidikan.isian3-bio');
    }

    public function isian4PendBio()
    {
        return view('moduls.dashboard.psikotes-paid.tools.biodata.pendidikan.isian4-bio');
    }

    public function isian5PendBio()
    {
        return view('moduls.dashboard.psikotes-paid.tools.biodata.pendidikan.isian5-bio');
    }

    public function isian6PendBio()
    {
        return view('moduls.dashboard.psikotes-paid.tools.biodata.pendidikan.isian6-bio');
    }

    public function isian7PendBio()
    {
        return view('moduls.dashboard.psikotes-paid.tools.biodata.pendidikan.isian7-bio');
    }

    public function endPendBio()
    {
        return view('moduls.dashboard.psikotes-paid.tools.biodata.pendidikan.end-bio');
    }

    public function instruksiCommBio()
    {
        return view('moduls.dashboard.psikotes-paid.tools.biodata.komunitas.instruksi-bio');
    }

    public function dataDiriCommBio()
    {
        return view('moduls.dashboard.psikotes-paid.tools.biodata.komunitas.dataDiri-bio');
    }
    
    public function dataLanjutanCommBio()
    {
        return view('moduls.dashboard.psikotes-paid.tools.biodata.komunitas.dataLanjutan-bio');
    }

    public function riwayatPendCommBio()
    {
        return view('moduls.dashboard.psikotes-paid.tools.biodata.komunitas.riwayatPend-bio');
    }

    public function riwayatPend2CommBio()
    {
        return view('moduls.dashboard.psikotes-paid.tools.biodata.komunitas.riwayatPend2-bio');
    }

    public function riwayatPend3CommBio()
    {
        return view('moduls.dashboard.psikotes-paid.tools.biodata.komunitas.riwayatPend3-bio');
    }

    public function riwayatKeg1CommBio()
    {
        return view('moduls.dashboard.psikotes-paid.tools.biodata.komunitas.riwayatKeg1-bio');
    }

    public function riwayatKeg2CommBio()
    {
        return view('moduls.dashboard.psikotes-paid.tools.biodata.komunitas.riwayatKeg2-bio');
    }

    public function isian1CommBio()
    {
        return view('moduls.dashboard.psikotes-paid.tools.biodata.komunitas.isian1-bio');
    }

    public function isian2CommBio()
    {
        return view('moduls.dashboard.psikotes-paid.tools.biodata.komunitas.isian2-bio');
    }

    public function isian3CommBio()
    {
        return view('moduls.dashboard.psikotes-paid.tools.biodata.komunitas.isian3-bio');
    }

    public function isian4CommBio()
    {
        return view('moduls.dashboard.psikotes-paid.tools.biodata.komunitas.isian4-bio');
    }

    public function isian5CommBio()
    {
        return view('moduls.dashboard.psikotes-paid.tools.biodata.komunitas.isian5-bio');
    }

    public function isian6CommBio()
    {
        return view('moduls.dashboard.psikotes-paid.tools.biodata.komunitas.isian6-bio');
    }

    public function isian7CommBio()
    {
        return view('moduls.dashboard.psikotes-paid.tools.biodata.komunitas.isian7-bio');
    }

    public function endCommBio()
    {
        return view('moduls.dashboard.psikotes-paid.tools.biodata.komunitas.end-bio');
    }

    public function instruksiIndvBio()
    {
        return view('moduls.dashboard.psikotes-paid.tools.biodata.individual.instruksi-bio');
    }

    public function dataDiriIndvBio()
    {
        return view('moduls.dashboard.psikotes-paid.tools.biodata.individual.dataDiri-bio');
    }
    
    public function dataLanjutanIndvBio()
    {
        return view('moduls.dashboard.psikotes-paid.tools.biodata.individual.dataLanjutan-bio');
    }

    public function riwayatPendIndvBio()
    {
        return view('moduls.dashboard.psikotes-paid.tools.biodata.individual.riwayatPend-bio');
    }

    public function riwayatPend2IndvBio()
    {
        return view('moduls.dashboard.psikotes-paid.tools.biodata.individual.riwayatPend2-bio');
    }

    public function riwayatPend3IndvBio()
    {
        return view('moduls.dashboard.psikotes-paid.tools.biodata.individual.riwayatPend3-bio');
    }

    public function isian1IndvBio()
    {
        return view('moduls.dashboard.psikotes-paid.tools.biodata.individual.isian1-bio');
    }

    public function isian2IndvBio()
    {
        return view('moduls.dashboard.psikotes-paid.tools.biodata.individual.isian2-bio');
    }

    public function isian3IndvBio()
    {
        return view('moduls.dashboard.psikotes-paid.tools.biodata.individual.isian3-bio');
    }

    public function isian4IndvBio()
    {
        return view('moduls.dashboard.psikotes-paid.tools.biodata.individual.isian4-bio');
    }

    public function isian5IndvBio()
    {
        return view('moduls.dashboard.psikotes-paid.tools.biodata.individual.isian5-bio');
    }

    public function isian6IndvBio()
    {
        return view('moduls.dashboard.psikotes-paid.tools.biodata.individual.isian6-bio');
    }

    public function isian7IndvBio()
    {
        return view('moduls.dashboard.psikotes-paid.tools.biodata.individual.isian7-bio');
    }

    public function isian8IndvBio()
    {
        return view('moduls.dashboard.psikotes-paid.tools.biodata.individual.isian8-bio');
    }

    public function endIndvBio()
    {
        return view('moduls.dashboard.psikotes-paid.tools.biodata.individual.end-bio');
    }

    public function instruksiKlinBio()
    {
        return view('moduls.dashboard.psikotes-paid.tools.biodata.klinis.instruksi-bio');
    }

    public function dataDiriKlinBio()
    {
        return view('moduls.dashboard.psikotes-paid.tools.biodata.klinis.dataDiri-bio');
    }
    
    public function dataLanjutanKlinBio()
    {
        return view('moduls.dashboard.psikotes-paid.tools.biodata.klinis.dataLanjutan-bio');
    }

    public function riwayatPendKlinBio()
    {
        return view('moduls.dashboard.psikotes-paid.tools.biodata.klinis.riwayatPend-bio');
    }

    public function riwayatPend2KlinBio()
    {
        return view('moduls.dashboard.psikotes-paid.tools.biodata.klinis.riwayatPend2-bio');
    }

    public function riwayatPend3KlinBio()
    {
        return view('moduls.dashboard.psikotes-paid.tools.biodata.klinis.riwayatPend3-bio');
    }

    public function riwayatKeg1KlinBio()
    {
        return view('moduls.dashboard.psikotes-paid.tools.biodata.klinis.riwayatKeg1-bio');
    }

    public function riwayatKeg2KlinBio()
    {
        return view('moduls.dashboard.psikotes-paid.tools.biodata.klinis.riwayatKeg2-bio');
    }

    public function DataPasangan1Bio()
    {
        return view('moduls.dashboard.psikotes-paid.tools.biodata.klinis.dataPasangan1-bio');
    }

    public function DataPasangan2Bio()
    {
        return view('moduls.dashboard.psikotes-paid.tools.biodata.klinis.dataPasangan2-bio');
    }

    public function dataAyah1KlinBio()
    {
        return view('moduls.dashboard.psikotes-paid.tools.biodata.klinis.dataAyah1-bio');
    }

    public function dataAyah2KlinBio()
    {
        return view('moduls.dashboard.psikotes-paid.tools.biodata.klinis.dataAyah2-bio');
    }

    public function dataIbu1KlinBio()
    {
        return view('moduls.dashboard.psikotes-paid.tools.biodata.klinis.dataIbu1-bio');
    }

    public function dataIbu2KlinBio()
    {
        return view('moduls.dashboard.psikotes-paid.tools.biodata.klinis.dataIbu2-bio');
    }

    public function isian1KlinBio()
    {
        return view('moduls.dashboard.psikotes-paid.tools.biodata.klinis.isian1-bio');
    }

    public function isian2KlinBio()
    {
        return view('moduls.dashboard.psikotes-paid.tools.biodata.klinis.isian2-bio');
    }

    public function isian3KlinBio()
    {
        return view('moduls.dashboard.psikotes-paid.tools.biodata.klinis.isian3-bio');
    }

    public function isian4KlinBio()
    {
        return view('moduls.dashboard.psikotes-paid.tools.biodata.klinis.isian4-bio');
    }

    public function endKlinBio()
    {
        return view('moduls.dashboard.psikotes-paid.tools.biodata.klinis.end-bio');
    }

    public function instruksiOCEAN()
    {
        return view('moduls.dashboard.psikotes-paid.tools.ocean.instruksiOCEAN');
    }

    public function soalOCEAN()
    {
        return view('moduls.dashboard.psikotes-paid.tools.ocean.soalOCEAN');
    }

    public function soal2OCEAN()
    {
        return view('moduls.dashboard.psikotes-paid.tools.ocean.soal2OCEAN');
    }

    public function endOCEAN()
    {
        return view('moduls.dashboard.psikotes-paid.tools.ocean.endOCEAN');
    }
}