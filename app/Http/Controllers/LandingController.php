<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
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
                [ "name" => 'Media Partner', "count" => 12 ],
                [ "name" => 'Jumlah Produk', "count" => 3 ],
                [ "name" => 'Jumlah Sub Produk', "count" => 8 ],
            ],
        ];

        return view('moduls.landing.index', [
            'products' => $products,
            'whySection' => $whySection,
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
                "image" => "https://i.ibb.co/rQydWQt/Ace-Pebri.png"
            ],
            [
                "name" => "Mellynda Silanur Rohmah",
                "jabatan" => "Manager",
                "divisi" => "Human Resource",
                "testimonial" => "Tentunya produk dari berbinar itu memiliki kualitas unggul karena ditangani langsung oleh seorang psikolog, tetapi dengan harga yang terjangkau.",
                "image" => "https://i.ibb.co/wyvBGh6/Mellynda.png"
            ],
            [
                "name" => "Caroline Athalia Rianda",
                "jabatan" => "Manager",
                "divisi" => "Graphic Designer",
                "testimonial" => "Sejauh yang aku tau di berbinar sendiri itu udah nyediain beragam banget layanan psikologi  untuk sobat binar semua ",
                "image" => "https://i.ibb.co/rym84ky/Caroline.png"
            ],
            [
                "name" => "Mawaliatul Khasanah",
                "jabatan" => "Manager",
                "divisi" => "IG Creator",
                "testimonial" => "Produknya keren, kualitas dan kuantitas bisa di tingkatkan",
                "image" => "https://i.ibb.co/s9dPkbj/Mawaliatul.png"
            ],
            [
                "name" => "Regina Amanda Sharen",
                "jabatan" => "Manager",
                "divisi" => "Secretary & Finance",
                "testimonial" => "Produk Berbinar pun sgt beragam dan pastiny ramah di kantong. Menurut saya produk-produk Berbinar telah sesuai dengan kebutuhan masyarakat skrng ini. Selain itu dengan harga yg affordable sehingga dapat dibeli oleh semua kalangan usia.",
                "image" => "https://i.ibb.co/9YckWd6/Regina.png"
            ],
            [
                "name" => "Zalfa Qanita",
                "jabatan" => "Manager",
                "divisi" => "PTPM",
                "testimonial" => "Saya memang baru memakai produk dari Berbinar yaitu layanan psikotes, dan untuk kualitasnya menurut saya yang baru pertama kali melakukan psikotes sangat bagus dan mudah dipahami. Dan mengikuti layanan psikotes di Berbinar seras santai dan tidak tertekan.",
                "image" => "https://i.ibb.co/Qjnwc0q/Zalfa.png"
            ],
            [
                "name" => "Ghina",
                "jabatan" => "Manager",
                "divisi" => "Class Product Management",
                "testimonial" => "Saya memang baru memakai produk dari Berbinar yaitu layanan psikotes, dan untuk kualitasnya menurut saya yang baru pertama kali melakukan psikotes sangat bagus dan mudah dipahami. Dan mengikuti layanan psikotes di Berbinar seras santai dan tidak tertekan.",
                "image" => "https://i.ibb.co/CKzPsdN/Ghina.png"
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
                "image" => ""
            ],
            [
                "name" => "Anonim",
                "jabatan" => "-",
                "divisi" => "-",
                "testimonial" => "Konseling sangat membantu, konselor ramah. Pertama kali cerita, terbantu menceritakan masalah yang selama ini takut dibagikan sebelumnya. Rasanya lega, tanpa beban dan validasi. Kakak konselor memberi waktu dan kenyamanan.",
                "image" => ""
            ],
            [
                "name" => "Anonim",
                "jabatan" => "-",
                "divisi" => "-",
                "testimonial" => "Konselor mendengarkan dan memerhatikan dengan seksama, memberi saran dan bimbingan spesifik. Dituntun dengan pertanyaan terkait permasalahan, sangat terbantu. Akan segera menyelesaikan tugas setelah konseling hari ini.
                ",
                "image" => ""
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
            'answer' => 'PT. Berbinar Insightful Indonesia menyediakan dua kategori layanan psikotes, yaitu psikotes individual dan psikotes perusahaan. Psikotes individual termasuk di dalamnya adalah tes bakat-minat dan tes intelegensi. Lalu untuk, psikotes perusahaan, kami menyediakan psikotes untuk level staff dan supervisor.
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
        
        return view('coming-soon');
    }

    public function classBisikan()
    {
        
        return view('coming-soon');
    }

    public function classBerbinarPlus()
    {
        
        return view('coming-soon');
    }

    public function termCondition()
    {
        
        return view('coming-soon');
    }

    public function privacyPolicy()
    {
        
        return view('coming-soon');
    }

    public function hiring()
    {
        $positions = [
            [
                "id" => 1,
                "name" => "Human Resource",
                "type" => "Internship",
                "positions" => "Staff",
                "location" => "Remote",
                "link" => "link_regis",
                "job_description" => [
                    "Mengerjakan administrasi terkait human resource yang dibutuhkan oleh perusahaan",
                    "Menghandle data staff perusahaan",
                    "Melakukan analisis jabatan",
                    "Melakukan monitoring kinerja serta memberikan penilaian kinerja terhadap staf dan manager ",
                    "Melakukan screening profile kandidat sesuai dengan requirement perusahaan dan divisi",
                    "Melakukan wawancara untuk menentukan kelayakan dalam penerimaan staf",
                    "Membuat dan memanage konten di platform LinkedIn",
                ],
                "requirements" => [
                    "Mahasiswa S1 Psikologi",
                    "Memiliki pengetahuan pada proses rekrutmen dan administrasi human resource",
                    "Dapat mengoperasikan Google Workspace",
                    "Memiliki kemampuan manajemen waktu yang baik",
                    "Memiliki kemampuan pengelolaan data yang baik",
                    "Memiliki kemampuan komunikasi dan menjalin hubungan interpersonal yang baik",
                    "Memiliki inisiatif untuk belajar",
                    "Fast response",
                    "Mengetahui cara penulisan Bahasa Indonesia yang sesuai dengan ejaan yang disempurnakan (EYD)"
                ]
            ],
            [
                    "id" => 2,
                    "name" => "Researcher",
                    "type" => "Internship",
                    "positions" => "Researcher",
                    "location" => "Remote",
                    "link" => "link_regis",
                    "job_description" => [
                        "Melakukan penelitian dan membuat jurnal dengan topik Psikologi hingga tahap publikasi jurnal",
                    ],
                    "requirements" => [
                        "Mahasiswa S1 Psikologi",
                        "Memiliki kemampuan copywriting",
                        "Memiliki pengetahuan dalam pengolahan data",
                        "Mengetahui tata cara penulisan Bahasa Indonesia sesuai dengan ejaan yang disempurnakan (EYD)",
                        "Mampu dalam penggunaan aplikasi pendukung penelitian seperti SPSS, Mendeley, dan Google Workspace",
                        "Teliti dan terorganisir",
                        "Critical Thinking",
                        "Analytical Thinking",
                    ]
                    ],
                    [
                        "id" => 3,
                        "name" => "Marketing Strategist",
                        "type" => "Internship",
                        "positions" => "Staff",
                        "location" => "Remote",
                        "link" => "link_regis",
                        "job_description" => [
                            "Meningkatkan penjualan dengan strategi pemasaran yang sesuai dengan target pasar",
                            "Membuat Power Point (PPT) untuk menawarkan produk yang dimiliki perusahaan",
                            "Mencari dan menjalin kerjasama dengan partnership dan media partner",
                            "Membuat Memorandum of Understanding (MoU) partnership dan media partner",
                            "Mengupload konten media partner",
                            "Membuat konten untuk keperluan postingan  partnership",
                            "Membuat proposal pitching produk untuk sales staff ",
                        ],
                        "requirements" => [
                            "SMA/SMK dan sedang berkuliah semua jurusan",
                            "Mampu berkomunikasi dengan baik, ramah dan berpikir kritis",
                            "Menjadi nilai tambah jika pernah memiliki pengalaman dalam bidang marketing, menghandle event, pengalaman dalam organisasi bagian kesekretariatan",
                            "Mengetahui strategi pembuatan konten yang dapat menarik perhatian klien, dan mengetahui cara mendapatkan media partner agar Berbinar dapat dikenal khalayak umum, mengetahui riset pasar yang benar dan mengetahui cara bernegosiasi",
                            "Memiliki kemampuan pengelolaan data yang baikMengoperasikan google workspace, time management yang baik, dapat fast respon, dan mengetahui penggunaan kalimat-kalimat yang friendlyMemiliki kemampuan komunikasi dan menjalin hubungan interpersonal yang baik",
                        ]
                        ],
                        [
                            "id" => 4,
                            "name" => "Sales",
                            "type" => "Internship",
                            "positions" => "Staff",
                            "location" => "Remote",
                            "link" => "link_regis",
                            "job_description" => [
                                "Mencari calon pelanggan baik individual, perusahaan, komunitas, maupun melalui whatsapp dan email",
                                "Mengumpulkan data dan menyusun database calon pelanggan",
                                "Mengirim proposal untuk menawarkan produk produk perusahaan",
                                "Melakukan pitching dan penawaran produk perusahaan",
                            ],
                            "requirements" => [
                                "SMA/SMK dan sedang berkuliah semua jurusan",
                                "Mampu berkomunikasi dengan baik, teliti, ramah, dan mampu bernegosiasi",
                                "Mengetahui cara menjualkan produk",
                                "Mampu menawarkan produk serta membujuk customer agar mau melakukan pembelian",
                                "Pengalaman dalam bidang marketing dan sales, namun jika tidak ada pengalaman tidak masalah",
                                "Mengetahui cara pengelompokkan organisasi atau perusahaan sesuai dengan latar belakangnya, mengetahui penggunaan Ejaan Yang Disempurnakan (EYD), dan mengetahui cara soft selling",
                                "Terampil dalam menggunakan google workspace, mempromosikan produk dengan baik, dan time management yang baik",
                            ]
                            ],
                            
                                [
                                    "id" => 6,
                                    "name" => "Web Developer",
                                    "type" => "Internship",
                                    "positions" => "Staff",
                                    "location" => "Remote",
                                    "link" => "link_regis",
                                    "job_description" => [
                                        "Bertanggungjawab keseluruhan proses pengembangan aplikasi seperti mencari refernsi database, melakukan coding, membuat database yang telah didapatkan, mengupload ke hosting, memastikan website berjalan dengan baik, serta melakukan evaluasi dan perbaikan",
                                        "Membangun dan memelihara aplikasi web responsive pada mobile untuk organisasi",
                                        "Mengawasi kinerja aplikasi untuk memastikan mereka selalu berjalan dengan baik",
                                        "Berkolaborasi dengan anggota tim lainnya untuk memastikan aplikasi selaras dengan tujuan organisasi serta kebutuhan pelanggan",
                                    ],
                                    "requirements" => [
                                        "SMA/SMK dan sedang berkuliah semua jurusan",
                                        "Menguasai Laravel, Darwin CSS, dan PHP, mampu memahami problem atau request yang diberikan, mampu mengimplementasikan konsep-konsep yang telah dipikirkan sebelumnya, dan mampu menguasai penggunaan hostingan",
                                        "Memiliki self project dan sertifikat kursus",
                                        "Mengetahui cara merancang database dan mengimplementasikannya, mengetahui cara coding menggunakan Laravel, CSS, dan bahasa programmer PHP, mengetahui cara menghosting, dan mengetahui cara mencari design di Figma",
                                        "Berkomunikasi dengan baik, problem solving, dan time management yang baik",
                                    ]
                                    ],
                                    [
                                        "id" => 7,
                                        "name" => "UI/UX Designer",
                                        "type" => "Internship",
                                        "positions" => "Staff",
                                        "location" => "Remote",
                                        "link" => "link_regis",
                                        "job_description" => [
                                            "Melakukan riset dan pengujian desain untuk memahami preferensi dan perilaku pengguna.",
                                            "Merancang desain situs web dan aplikasi seluler sesuai dengan hasil riset dan kebutuhan perusahaan",
                                            "Mendesain dan membuat user interface yang ramah pengguna dan menarik secara visual sesuai dengan tujuan dan kebutuhan perusahaan",
                                            "Membuat wireframe, prototipe interaktif, dan mockups untuk mengilustrasikan konsep desain",
                                            "Melakukan redesign berdasarkan feedback dan kebutuhan perusahaan",
                                            "Memastikan desain akhir memiliki kualitas yang tinggi dan siap untuk dikembangkan",
                                        ],
                                        "requirements" => [
                                            "SMA/SMK dan sedang berkuliah semua jurusan",
                                            "Memiliki pengalaman dan portofolio sebagai UI/UX Designer",
                                            "Dapat mengoperasikan Google Workspace",
                                            "Mahir dalam menggunakan software desain, seperti Figma, Jitter, Adobe Photoshop, Adobe Illustrator, Adobe Effect, dll",
                                            "Memiliki pengalaman dalam membuat ilustrasi",
                                            "Memiliki pemahaman yang kuat tentang prinsip user-centered design",
                                            "Berkomunikasi dengan baik, problem solving, dan time management yang baik",
                                        ]
                                        ],
                                        [
                                            "id" => 8,
                                            "name" => "Secretary",
                                            "type" => "Internship",
                                            "positions" => "Staff",
                                            "location" => "Remote",
                                            "link" => "link_regis",
                                            "job_description" => [
                                                "Membuat administrasi dibutuhkan perusahaan",
                                                "Melakukan pengarsipan dokumen perusahaan ",
                                                "Membuat notulensi dari beberapa divisi ",
                                                "Membantu finance dalam membuat laporan pajak",
                                            ],
                                            "requirements" => [
                                                "Mahasiswa S1 Akuntansi",
                                                "Mengetahui mengenai general administrasi dan perpajakan",
                                                "Mengetahui pengoperasian aplikasi perpajakan dan keuangan
                                                ",
                                                "Disiplin, teliti, terorganisir, dan rapi",
                                            ]
                                            ],
                                            [
                                                "id" => 9,
                                                "name" => "Finance",
                                                "type" => "Internship",
                                                "positions" => "Staff",
                                                "location" => "Remote",
                                                "link" => "link_regis",
                                                "job_description" => [
                                                    "Mengatur, membuat, dan mengarsipkan laporan keuangan perusahaan",
                                                    "Memegang kendali perpajakan perusahaan",
                                                ],
                                                "requirements" => [
                                                    "Mahasiswa S1 Akuntansi",
                                                    "Mengetahui basic-basic pencatatan keuangan dan perpajakan secara manual",
                                                    "Mampu menggunakan aplikasi atau software pencatatan keuangan, perpajakan dan pembukuan",
                                                    "Teiliti, Terorganisir, dan disiplin waktu",
                                                    "Memahami alur proses pelaporan pajak",
                                                    "Mampu mengoperasikan Google Workspace",
                                                    "Bertanggung jawab serta merahasiakan data dalam memegang akun keuangan perusahaan",
                                                ]
                                                ],
                                                [
                                                    "id" => 10,
                                                    "name" => "Class Product Management",
                                                    "type" => "Internship",
                                                    "positions" => "Staff",
                                                    "location" => "Remote",
                                                    "link" => "link_regis",
                                                    "job_description" => [
                                                        "Mengetahui urutan pembuatan suatu acara dari awal hingga akhir (riset, pembuatan dokumen yang dibutuhkan, memastikan semua hal sudah siap, dan launching acara",
                                                        "Mengorganisir program Berbinar+",
                                                        "Membantu dan mengawasi pelaksanaan webinar yang dilakukan oleh divisi lain",
                                                        "Mengedit video Class Product Management ",
                                                    ],
                                                    "requirements" => [
                                                        "SMA/SMK maupun sedang berkuliah dari semua jurusan",
                                                        "Memiliki pengalaman dalam pembuatan acara berbasis kelas atau pernah bergabung dalam divisi Class Product Management menjadi nilai tambah",
                                                        "Mampu mengedit video ",
                                                        "Mampu menyusun kalimat dengan baik dan benar sesuai dengan Ejaan yang Disempurnakan (EYD), Pedoman Umum Ejaan Bahasa Indonesia (PUEBI) dan Kamus Besar Bahasa Indonesia (KBBI) dalam penyusunan dokumen",
                                                        "Mampu berbicara dengan komunikatif untuk menghubungi klien, narasumber, dan staf",
                                                        "Memiliki skill copywriting",
                                                    ]
                                                    ],
                                                    [
                                                        "id" => 11,
                                                        "name" => "Counseling Product Management",
                                                        "type" => "Internship",
                                                        "positions" => "Staff",
                                                        "location" => "Remote",
                                                        "link" => "link_regis",
                                                        "job_description" => [
                                                            "Melakukan administrasi mengenai pendaftaran klien konseling baik psikolog maupun peer counselor",
                                                            "Mempersiapkan dengan baik untuk kegiatan Berbinar Training Peer Counselor mulai dari awal hingga akhir dan memastikan Training Peer Counselor berjalan sesuai yang diinginkan",
                                                            "Menjadi peer counselor",
                                                            "Mengorganisir serta menyiapkan kegiatan Berbinar For U",
                                                            "Mengecek hasil survey kepuasan produk yang telah diisi oleh klien yang telah menggunakan produk Berbinar",
                                                        ],
                                                        "requirements" => [
                                                            "Mahasiswa S1 Psikologi dan Bimbingan Konseling",
                                                            "Mengetahui kode etik psikologi dan teknik-teknik konseling",
                                                            "Mampu mengaplikasikan teknik-teknik konseling dan kode etik dengan benar",
                                                            "Memiliki kemampuan mendengarkan secara asertif dan empati",
                                                            "Memiliki kemampuan public speaking",
                                                            "Memiliki kemampuan problem solving",
                                                            "Mengoperasikan Zoom dan Google Workspace",
                                                        ]
                                                        ],
                                                        [
                                                            "id" => 12,
                                                            "name" => "Psychological Testing Product Management",
                                                            "type" => "Internship",
                                                            "positions" => "Staff",
                                                            "location" => "Remote",
                                                            "link" => "link_regis",
                                                            "job_description" => [
                                                                "Mempersiapkan dan mengembangkan produk dalam bidang asesmen psikologi",
                                                                "Mengelola dan mengeksekusi produk dan program yang dimiliki oleh perusahaan dalam bidang asesmen psikologi",
                                                                "Mengevaluasi kegiatan dan proyek Berbinar yang berkaitan dengan asesmen psikologi",
                                                                "Memfasilitasi keperluan materi perusahaan yang berkaitan dengan bidang psikologi ",
                                                                "Membangun kerja sama dan relasi dengan pihak kedua yang berkaitan dengan asesmen psikologi",
                                                            ],
                                                            "requirements" => [
                                                                "Mahasiswa S1 Psikologi",
                                                                "Mengetahui cara dan alur pengadministrasian alat tes",
                                                                "Bersedia untuk didelegasikan atau mampu menjadi tester dalam pelaksanaan asesmen psikologi perusahaan",
                                                                "Familiar/berpengalaman dalam mengoperasikan alat tes psikologi",
                                                                "Mampu bekerja dalam tim dan memiliki inisiatif yang tinggi untuk mendalami alat tes psikologi",
                                                                "Memiliki inisiatif tinggi untuk belajar tentang administrasi dan skoring asesmen psikologi",
                                                                "Memahami dan mampu mengimplementasikan kode etik psikologi",
                                                            ]
                                                            ],
                                                            [
                "id" => 13,
                "name" => "Twitter Creator",
                "type" => "Internship",
                "positions" => "Staff",
                "location" => "Remote",
                "link" => "link_regis",
                "job_description" => [
                    "Melakukan riset mengenai konten yang akan dibuat",
                    "Mencari ide konten",
                    "Menentukan dan membuat konsep setelah ide ditemukan",
                    "Mencari sumber mengenai topik yang akan dijadikan konten ",
                    "Membuat konten dalam bentuk ilustrasi",
                    "Membuat konten dalam bentuk non-ilustrasi atau hanya tulisan",
                    "Mengetahui tips untuk menaikkan engagement di Twitter",
                ],
                "requirements" => [
                    "SMA/SMK maupun sedang berkuliah dari semua jurusan",
                    "Mampu menggunakan aplikasi Twitter dan Google Workspace",
                    "Mampu membaca trend yang sedang happening",
                    "Mampu membuat tulisan yang menarik dan original",
                    "Teliti dan terorganisir",
                    "Memiliki ketertarikan pada menulis",
                    "Mengetahui cara penulisan Bahasa Indonesia sesuai Pedoman Umum Ejaan Bahasa Indonesia PUEBI",
                    "Mengetahui cara mencari sumber konten yang kredibel dan bisa dipertanggung jawabkan",
                    "Manajemen waktu yang baik"
                ]
                ],
                [
                    "id" => 14,
                    "name" => "Tiktok Creator",
                    "type" => "Internship",
                    "positions" => "Staff",
                    "location" => "Remote",
                    "link" => "link_regis",
                    "job_description" => [
                        "Mencari ide untuk konten Tiktok",
                        "Melakukan riset informasi mengenai konten Tiktok yang akan dibuat",
                        "Membuat naskah mengenai konten video yang akan dibuat",
                        "Bertanggung jawab pada proses produksi konten, mulai dari pembuatan draft video, pengambilan video, hingga video siap diunggah",
                        "Menganalisis tren",
                        "Menganalisis video",
                        "Mengedit tren",
                        "Membuat thumbnail konten Tiktok",
                        "Mengorganisir akun Tiktok Berbinar",
                    ],
                    "requirements" => [
                        "SMA/SMK maupun sedang berkuliah dari semua jurusan",
                        "Mahir dalam mengoperasikan aplikasi Tiktok dan tools video editing",
                        "Mengikuti perkembangan tren di dunia digital",
                        "Memiliki kemampuan copywriting",
                        "Mengetahui cara penulisan Bahasa Indonesia sesuai Pedoman Umum Ejaan Bahasa Indonesia PUEBI",
                        "Memiliki keterampilan berkomunikasi yang baik",
                        "Memiliki kemampuan analisis tren yang baik",
                        "Mengetahui cara riset sumber konten",
                        "Memiliki gadget yang memadai",
                        "Memiliki kreatifitas dalam membuat ide-ide konten yang menarik dan original",
                    ]
                    ],
                    [
                        "id" => 15,
                        "name" => "Instagram Creator",
                        "type" => "Internship",
                        "positions" => "Staff",
                        "location" => "Remote",
                        "link" => "link_regis",
                        "job_description" => [
                            "Bertanggung jawab pada produksi konten, mulai dari pembuatan ide konten, editing, hingga mengunggah konten",
                            "Melakukan revisi jika terdapat kesalahan atau kekurangan dalam ide konten yang akan dibuat",
                            "Berkolaborasi dengan divisi Graphic Designer untuk pembuatan konten",
                            "Menjadi talent dalam konten yang di produksi",
                            "Melakukan repost postingan instagram",
                            "Menjadi admin instagram Berbinar",
                            "Memposting produk-produk Berbinar maupun hal-hal promosi dari divisi lain",
                        ],
                        "requirements" => [
                            "SMA/SMK maupun sedang berkuliah dari semua jurusan",
                            "Memiliki kreatifitas dalam membuat ide-ide feeds/ video tentang psikologi/ pengembangan diri yang menarik dan original",
                            "Mahir dalam mengoperasikan aplikasi Instagram dan aplikasi editing video",
                            "Memiliki skill copywriting",
                            "Mengetahui cara analisis trend",
                            "Memiliki pengetahuan mengenai social media management yang baik dan benar",
                            "Memiliki pengetahuan mengenai penulisan sesuai dengan PUEBI dan juga penulisan yang menarik",
                            "Mampu mengoperasikan Google Workspace dan Instagram",
                            "Mampu menyelesaikan tugas tepat waktu sesuai dengan deadline yang telah ditentukan",
                            "Memiliki gadget yang memadai untuk membuat konten",
                        ]
                        ],
                        [
                            "id" => 16,
                            "name" => "Video Editor",
                            "type" => "Internship",
                            "positions" => "Staff",
                            "location" => "Remote",
                            "link" => "link_regis",
                            "job_description" => [
                                "Menyunting dan mengumpulkan video yang sudah diambil maupun direkam",
                                "Menyusun ulang potongan rekaman video sesuai konsep yang ditentukan",
                                "Menyusun ulang potongan video yang telah disesuaikan dengan durasi",
                                "Membuat informasi tulis atau keterangan lain yang berhubungan dengan materi video",
                                "Memastikan konsistensi hasil editing video dengan konsep dan style perusahaan",
                                "Memastikan musik, sound effect, dan gambar yang digunakan tidak melanggar copyright",
                            ],
                            "requirements" => [
                                "SMA/SMK maupun sedang berkuliah dari semua jurusan",
                                "Memiliki kemampuan pengeditan video yang dapat dibuktikan dengan portofolio",
                                "Kompeten dalam penggunaan software editing (Adobe Premiere Pro/ After Effects / VN/ Capcut, dll)",
                                "Memiliki kreativitas yang tinggi, proaktif, inovatif, dan menyukai tantangan baru",
                                "Adaptif terhadap perubahan trend design",
                                "Kemampuan manajemen waktu dan mengorganisir yang baik dengan memperhatikan detail",
                                "Terbuka dengan revisi yang diberikan",
                                "Memiliki koneksi jaringan yang kuat dan device yang memadai",
                            ]
                            ],
                            [
                                "id" => 17,
                                "name" => "Graphic Designer",
                                "type" => "Internship",
                                "positions" => "Staff",
                                "location" => "Remote",
                                "link" => "link_regis",
                                "job_description" => [
                                    "Menerima request design dari beberapa divisi dan membuat design sesuai dengan konsep dan kebutuhan",
                                ],
                                "requirements" => [
                                    "SMA/SMK maupun sedang berkuliah dari semua jurusan",
                                    "Dapat menggunakan software Figma, dan Adobe Photoshop",
                                    "Mempunyai portofolio baik self project atau project eksternal",
                                    "Mengetahui style design dari Berbinar",
                                    "Memiliki ketertarikan di dunia Psikologi",
                                    "Mampu mengoperasikan software Canva, Google Workspace, dan Adobe Illustrator",
                                ]
                                ],
        ];
        
        $testimonials = [
            [
                "name" => "Oktaviani Dwi Wulansari",
                "jabatan" => "Staff",
                "divisi" => "Marketing Strategist and Sales",
                "testimonial" => "Selama bekerja di Berbinar, impact yang saya rasakan adalah skill time management, kolaborasi dan juga decision making yang semakin terasah. Meskipun dilaksanakan secara daring pun experience bekerja disini sangat terasa, banyak sekali yang saya pelajari.",
                "image" => "https://i.ibb.co/XXRRSrz/Oktaviani.png"
            ],
            [
                "name" => "Zalfa Qanita",
                "jabatan" => "Manager",
                "divisi" => "PTPM",
                "testimonial" => "Selama bekerja di Berbinar, saya selalu merasa tertantang keluar dari zona nyaman dan menjadi 'the best version of yourself'. Selain itu, banyak hal yang saya pelajari sebagai posisi manager yaitu task management, mengatur waktu, mengeluarkan ide baru dan pendapat.",
                "image" => "https://i.ibb.co/Qjnwc0q/Zalfa.png"
            ],
            [
                "name" => "Ghina",
                "jabatan" => "Manager",
                "divisi" => "Class Product Management",
                "testimonial" => "Selama di berbinar, aku belajar banyak banget. mulai dari hal hal yang sebelumnya ada basic sampe hal hal yang baru dan belum pernah aku dapetin. berbinar punya banyak acara yang menarik yang bisa diikutin. temen temennya juga asik dan seru banget!",
                "image" => "https://i.ibb.co/CKzPsdN/Ghina.png"
            ],
        ];

        $faqs = [
            [
                'question' => 'Apakah bisa di konversi ke SKS?',
                'answer' => 'Apabila nantinya menghendaki untuk mengkonversikan magang di Berbinar ke SKS atau KRS, Kandidat bisa mengajukan MoU atau MoA kerjasama antara pihak kampus dengan Berbinar. 
                '
            ],
            [
                'question' => 'Apakah jika Fresh Graduate atau semester 7 boleh mendaftar?',
                'answer' => 'Tentunya kami akan mengutamakan kandidat yang sesuai dengan kualifikasi yang sudah ditetapkan. Namun tidak menutup kemungkinan kami mengambil kandidat semester akhir atau fresh graduate, jadi silahkan mendaftar saja.
                '
            ],
            [
                'question' => 'Pengumumannya kapan dan lewat apa?',
                'answer' => 'Untuk tahapan selanjutnya dari proses rekrutmen akan dikabarkan secara berkala pada kandidat yang lolos tahap screening melalui WA.
                '
            ],
            [
                'question' => 'Apakah bisa melamar satu posisi saja?',
                'answer' => 'Apabila kandidat menghendaki mendaftar satu posisi saja, silahkan memilih posisi yang sama pada pilihan satu dan dua di google form. 
                '
            ],
            [
                'question' => 'Jam kerja?',
                'answer' => 'Apabila nantinya menghendaki untuk mengkonversikan magang di Berbinar ke SKS atau KRS, Kandidat bisa mengajukan MoU atau MoA kerjasama antara pihak kampus dengan Berbinar. 
                '
            ],
            [
                'question' => 'Unpaid / Paid?',
                'answer' => 'Berbinar memiliki waktu kerja yang fleksibel sehingga tidak mengganggu proses perkuliahan. Namun kandidat perlu memiliki perencanaan waktu yang baik sehingga tugas magang dan kuliah bisa diselesaikan dengan baik.
                '
            ],
            [
                'question' => 'Durasi Internship?',
                'answer' => 'Apabila nantinya menghendaki untuk mengkonversikan magang di Berbinar ke SKS atau KRS, Kandidat bisa mengajukan MoU atau MoA kerjasama antara pihak kampus dengan Berbinar. 
                '
            ],
            [
                'question' => 'Dimana saya bisa mengetahui informasi lebih jelas terkait jobdesk dan requirement posisi yang dibuka?',
                'answer' => 'Durasi Internship di Berbinar adalah 6 bulan / 1 tahun 
                '
            ],
            [
                'question' => 'Apabila ada yang saya bingungkan terkait recruitment kemana saya harus bertanya?',
                'answer' => 'Teman-teman bisa menghubungi CP yang tersedia atau menghubungi kami melalui sosial media Berbinar. 
                '
            ],
        ];

        $generalRequirements = [
            "Terbuka untuk mahasiswa aktif semester 1-6",
            "Memiliki ketertarikan pada kepemimpinan dan pengembangan skill",
            "Mampu bekerja secara mandiri maupun bekerja secara tim",
            "Memiliki keterampilan komunikasi yang kuat",
            "Tertarik untuk mempelajari hal baru",
            "Mampu berkomitmen tinggi untuk berkontribusi di Berbinar selama 6 bulan/ 1 tahun",
            "Tertarik pada bidang psikologi/ kesehatan mental",
            "Mampu bekerja dibawah tekanan dan deadline",
        ];

        $benefits = [
            "Sertifikat Elektronik : Staf akan mendapatkan e-certificate di akhir masa jabatan sesuai dengan kontrak kerja yang berlaku",
            "Relasi : Staf dapat memperluas network dan membangun lingkungan yang positif dengan praktisi psikologi dan mahasiswa dari berbagai universitas",
            "Wawasan : Staf dapat menambah wawasan baik pada bidang psikologi maupun pelaksanaan operasional perusahaan",
            "Konseling Gratis : Mendapatkan sesi konseling gratis sebulan sekali",
            "Rekomendasi Linkedin : Staf akan mendapatkan rekomendasi kerja dari CEO Berbinar apabila dalam masa kerjanya mampu menunjukkan kinerja yang baik melalui Linkedin maupun tertulis",
            "Pengalaman : Staf akan mendapatkan pengalaman internship dibawah naungan perusahaan yang andal di bidang Psikologi",
        ];

        return view('moduls.hiring.hiring', [
            'testimonials' => $testimonials,
            'faqs' => $faqs,
            'positions' => $positions,
            'generalRequirements' => $generalRequirements,
            'benefits' => $benefits,
        ]);
    }

    public function hiringPositions()
    {
        $positions = [
            [
                "id" => 1,
                "name" => "Human Resource",
                "type" => "Internship",
                "positions" => "Staff",
                "location" => "Remote",
                "link" => "link_regis",
                "job_description" => [
                    "Mengerjakan administrasi terkait human resource yang dibutuhkan oleh perusahaan",
                    "Menghandle data staff perusahaan",
                    "Melakukan analisis jabatan",
                    "Melakukan monitoring kinerja serta memberikan penilaian kinerja terhadap staf dan manager ",
                    "Melakukan screening profile kandidat sesuai dengan requirement perusahaan dan divisi",
                    "Melakukan wawancara untuk menentukan kelayakan dalam penerimaan staf",
                    "Membuat dan memanage konten di platform LinkedIn",
                ],
                "requirements" => [
                    "Mahasiswa S1 Psikologi",
                    "Memiliki pengetahuan pada proses rekrutmen dan administrasi human resource",
                    "Dapat mengoperasikan Google Workspace",
                    "Memiliki kemampuan manajemen waktu yang baik",
                    "Memiliki kemampuan pengelolaan data yang baik",
                    "Memiliki kemampuan komunikasi dan menjalin hubungan interpersonal yang baik",
                    "Memiliki inisiatif untuk belajar",
                    "Fast response",
                    "Mengetahui cara penulisan Bahasa Indonesia yang sesuai dengan ejaan yang disempurnakan (EYD)"
                ]
            ],
            [
                    "id" => 2,
                    "name" => "Researcher",
                    "type" => "Internship",
                    "positions" => "Researcher",
                    "location" => "Remote",
                    "link" => "link_regis",
                    "job_description" => [
                        "Melakukan penelitian dan membuat jurnal dengan topik Psikologi hingga tahap publikasi jurnal",
                    ],
                    "requirements" => [
                        "Mahasiswa S1 Psikologi",
                        "Memiliki kemampuan copywriting",
                        "Memiliki pengetahuan dalam pengolahan data",
                        "Mengetahui tata cara penulisan Bahasa Indonesia sesuai dengan ejaan yang disempurnakan (EYD)",
                        "Mampu dalam penggunaan aplikasi pendukung penelitian seperti SPSS, Mendeley, dan Google Workspace",
                        "Teliti dan terorganisir",
                        "Critical Thinking",
                        "Analytical Thinking",
                    ]
                    ],
                    [
                        "id" => 3,
                        "name" => "Marketing Strategist",
                        "type" => "Internship",
                        "positions" => "Staff",
                        "location" => "Remote",
                        "link" => "link_regis",
                        "job_description" => [
                            "Meningkatkan penjualan dengan strategi pemasaran yang sesuai dengan target pasar",
                            "Membuat Power Point (PPT) untuk menawarkan produk yang dimiliki perusahaan",
                            "Mencari dan menjalin kerjasama dengan partnership dan media partner",
                            "Membuat Memorandum of Understanding (MoU) partnership dan media partner",
                            "Mengupload konten media partner",
                            "Membuat konten untuk keperluan postingan  partnership",
                            "Membuat proposal pitching produk untuk sales staff ",
                        ],
                        "requirements" => [
                            "SMA/SMK dan sedang berkuliah semua jurusan",
                            "Mampu berkomunikasi dengan baik, ramah dan berpikir kritis",
                            "Menjadi nilai tambah jika pernah memiliki pengalaman dalam bidang marketing, menghandle event, pengalaman dalam organisasi bagian kesekretariatan",
                            "Mengetahui strategi pembuatan konten yang dapat menarik perhatian klien, dan mengetahui cara mendapatkan media partner agar Berbinar dapat dikenal khalayak umum, mengetahui riset pasar yang benar dan mengetahui cara bernegosiasi",
                            "Memiliki kemampuan pengelolaan data yang baikMengoperasikan google workspace, time management yang baik, dapat fast respon, dan mengetahui penggunaan kalimat-kalimat yang friendlyMemiliki kemampuan komunikasi dan menjalin hubungan interpersonal yang baik",
                        ]
                        ],
                        [
                            "id" => 4,
                            "name" => "Sales",
                            "type" => "Internship",
                            "positions" => "Staff",
                            "location" => "Remote",
                            "link" => "link_regis",
                            "job_description" => [
                                "Mencari calon pelanggan baik individual, perusahaan, komunitas, maupun melalui whatsapp dan email",
                                "Mengumpulkan data dan menyusun database calon pelanggan",
                                "Mengirim proposal untuk menawarkan produk produk perusahaan",
                                "Melakukan pitching dan penawaran produk perusahaan",
                            ],
                            "requirements" => [
                                "SMA/SMK dan sedang berkuliah semua jurusan",
                                "Mampu berkomunikasi dengan baik, teliti, ramah, dan mampu bernegosiasi",
                                "Mengetahui cara menjualkan produk",
                                "Mampu menawarkan produk serta membujuk customer agar mau melakukan pembelian",
                                "Pengalaman dalam bidang marketing dan sales, namun jika tidak ada pengalaman tidak masalah",
                                "Mengetahui cara pengelompokkan organisasi atau perusahaan sesuai dengan latar belakangnya, mengetahui penggunaan Ejaan Yang Disempurnakan (EYD), dan mengetahui cara soft selling",
                                "Terampil dalam menggunakan google workspace, mempromosikan produk dengan baik, dan time management yang baik",
                            ]
                            ],
                            
                                [
                                    "id" => 6,
                                    "name" => "Web Developer",
                                    "type" => "Internship",
                                    "positions" => "Staff",
                                    "location" => "Remote",
                                    "link" => "link_regis",
                                    "job_description" => [
                                        "Bertanggungjawab keseluruhan proses pengembangan aplikasi seperti mencari refernsi database, melakukan coding, membuat database yang telah didapatkan, mengupload ke hosting, memastikan website berjalan dengan baik, serta melakukan evaluasi dan perbaikan",
                                        "Membangun dan memelihara aplikasi web responsive pada mobile untuk organisasi",
                                        "Mengawasi kinerja aplikasi untuk memastikan mereka selalu berjalan dengan baik",
                                        "Berkolaborasi dengan anggota tim lainnya untuk memastikan aplikasi selaras dengan tujuan organisasi serta kebutuhan pelanggan",
                                    ],
                                    "requirements" => [
                                        "SMA/SMK dan sedang berkuliah semua jurusan",
                                        "Menguasai Laravel, Darwin CSS, dan PHP, mampu memahami problem atau request yang diberikan, mampu mengimplementasikan konsep-konsep yang telah dipikirkan sebelumnya, dan mampu menguasai penggunaan hostingan",
                                        "Memiliki self project dan sertifikat kursus",
                                        "Mengetahui cara merancang database dan mengimplementasikannya, mengetahui cara coding menggunakan Laravel, CSS, dan bahasa programmer PHP, mengetahui cara menghosting, dan mengetahui cara mencari design di Figma",
                                        "Berkomunikasi dengan baik, problem solving, dan time management yang baik",
                                    ]
                                    ],
                                    [
                                        "id" => 7,
                                        "name" => "UI/UX Designer",
                                        "type" => "Internship",
                                        "positions" => "Staff",
                                        "location" => "Remote",
                                        "link" => "link_regis",
                                        "job_description" => [
                                            "Melakukan riset dan pengujian desain untuk memahami preferensi dan perilaku pengguna.",
                                            "Merancang desain situs web dan aplikasi seluler sesuai dengan hasil riset dan kebutuhan perusahaan",
                                            "Mendesain dan membuat user interface yang ramah pengguna dan menarik secara visual sesuai dengan tujuan dan kebutuhan perusahaan",
                                            "Membuat wireframe, prototipe interaktif, dan mockups untuk mengilustrasikan konsep desain",
                                            "Melakukan redesign berdasarkan feedback dan kebutuhan perusahaan",
                                            "Memastikan desain akhir memiliki kualitas yang tinggi dan siap untuk dikembangkan",
                                        ],
                                        "requirements" => [
                                            "SMA/SMK dan sedang berkuliah semua jurusan",
                                            "Memiliki pengalaman dan portofolio sebagai UI/UX Designer",
                                            "Dapat mengoperasikan Google Workspace",
                                            "Mahir dalam menggunakan software desain, seperti Figma, Jitter, Adobe Photoshop, Adobe Illustrator, Adobe Effect, dll",
                                            "Memiliki pengalaman dalam membuat ilustrasi",
                                            "Memiliki pemahaman yang kuat tentang prinsip user-centered design",
                                            "Berkomunikasi dengan baik, problem solving, dan time management yang baik",
                                        ]
                                        ],
                                        [
                                            "id" => 8,
                                            "name" => "Secretary",
                                            "type" => "Internship",
                                            "positions" => "Staff",
                                            "location" => "Remote",
                                            "link" => "link_regis",
                                            "job_description" => [
                                                "Membuat administrasi dibutuhkan perusahaan",
                                                "Melakukan pengarsipan dokumen perusahaan ",
                                                "Membuat notulensi dari beberapa divisi ",
                                                "Membantu finance dalam membuat laporan pajak",
                                            ],
                                            "requirements" => [
                                                "Mahasiswa S1 Akuntansi",
                                                "Mengetahui mengenai general administrasi dan perpajakan",
                                                "Mengetahui pengoperasian aplikasi perpajakan dan keuangan
                                                ",
                                                "Disiplin, teliti, terorganisir, dan rapi",
                                            ]
                                            ],
                                            [
                                                "id" => 9,
                                                "name" => "Finance",
                                                "type" => "Internship",
                                                "positions" => "Staff",
                                                "location" => "Remote",
                                                "link" => "link_regis",
                                                "job_description" => [
                                                    "Mengatur, membuat, dan mengarsipkan laporan keuangan perusahaan",
                                                    "Memegang kendali perpajakan perusahaan",
                                                ],
                                                "requirements" => [
                                                    "Mahasiswa S1 Akuntansi",
                                                    "Mengetahui basic-basic pencatatan keuangan dan perpajakan secara manual",
                                                    "Mampu menggunakan aplikasi atau software pencatatan keuangan, perpajakan dan pembukuan",
                                                    "Teiliti, Terorganisir, dan disiplin waktu",
                                                    "Memahami alur proses pelaporan pajak",
                                                    "Mampu mengoperasikan Google Workspace",
                                                    "Bertanggung jawab serta merahasiakan data dalam memegang akun keuangan perusahaan",
                                                ]
                                                ],
                                                [
                                                    "id" => 10,
                                                    "name" => "Class Product Management",
                                                    "type" => "Internship",
                                                    "positions" => "Staff",
                                                    "location" => "Remote",
                                                    "link" => "link_regis",
                                                    "job_description" => [
                                                        "Mengetahui urutan pembuatan suatu acara dari awal hingga akhir (riset, pembuatan dokumen yang dibutuhkan, memastikan semua hal sudah siap, dan launching acara",
                                                        "Mengorganisir program Berbinar+",
                                                        "Membantu dan mengawasi pelaksanaan webinar yang dilakukan oleh divisi lain",
                                                        "Mengedit video Class Product Management ",
                                                    ],
                                                    "requirements" => [
                                                        "SMA/SMK maupun sedang berkuliah dari semua jurusan",
                                                        "Memiliki pengalaman dalam pembuatan acara berbasis kelas atau pernah bergabung dalam divisi Class Product Management menjadi nilai tambah",
                                                        "Mampu mengedit video ",
                                                        "Mampu menyusun kalimat dengan baik dan benar sesuai dengan Ejaan yang Disempurnakan (EYD), Pedoman Umum Ejaan Bahasa Indonesia (PUEBI) dan Kamus Besar Bahasa Indonesia (KBBI) dalam penyusunan dokumen",
                                                        "Mampu berbicara dengan komunikatif untuk menghubungi klien, narasumber, dan staf",
                                                        "Memiliki skill copywriting",
                                                    ]
                                                    ],
                                                    [
                                                        "id" => 11,
                                                        "name" => "Counseling Product Management",
                                                        "type" => "Internship",
                                                        "positions" => "Staff",
                                                        "location" => "Remote",
                                                        "link" => "link_regis",
                                                        "job_description" => [
                                                            "Melakukan administrasi mengenai pendaftaran klien konseling baik psikolog maupun peer counselor",
                                                            "Mempersiapkan dengan baik untuk kegiatan Berbinar Training Peer Counselor mulai dari awal hingga akhir dan memastikan Training Peer Counselor berjalan sesuai yang diinginkan",
                                                            "Menjadi peer counselor",
                                                            "Mengorganisir serta menyiapkan kegiatan Berbinar For U",
                                                            "Mengecek hasil survey kepuasan produk yang telah diisi oleh klien yang telah menggunakan produk Berbinar",
                                                        ],
                                                        "requirements" => [
                                                            "Mahasiswa S1 Psikologi dan Bimbingan Konseling",
                                                            "Mengetahui kode etik psikologi dan teknik-teknik konseling",
                                                            "Mampu mengaplikasikan teknik-teknik konseling dan kode etik dengan benar",
                                                            "Memiliki kemampuan mendengarkan secara asertif dan empati",
                                                            "Memiliki kemampuan public speaking",
                                                            "Memiliki kemampuan problem solving",
                                                            "Mengoperasikan Zoom dan Google Workspace",
                                                        ]
                                                        ],
                                                        [
                                                            "id" => 12,
                                                            "name" => "Psychological Testing Product Management",
                                                            "type" => "Internship",
                                                            "positions" => "Staff",
                                                            "location" => "Remote",
                                                            "link" => "link_regis",
                                                            "job_description" => [
                                                                "Mempersiapkan dan mengembangkan produk dalam bidang asesmen psikologi",
                                                                "Mengelola dan mengeksekusi produk dan program yang dimiliki oleh perusahaan dalam bidang asesmen psikologi",
                                                                "Mengevaluasi kegiatan dan proyek Berbinar yang berkaitan dengan asesmen psikologi",
                                                                "Memfasilitasi keperluan materi perusahaan yang berkaitan dengan bidang psikologi ",
                                                                "Membangun kerja sama dan relasi dengan pihak kedua yang berkaitan dengan asesmen psikologi",
                                                            ],
                                                            "requirements" => [
                                                                "Mahasiswa S1 Psikologi",
                                                                "Mengetahui cara dan alur pengadministrasian alat tes",
                                                                "Bersedia untuk didelegasikan atau mampu menjadi tester dalam pelaksanaan asesmen psikologi perusahaan",
                                                                "Familiar/berpengalaman dalam mengoperasikan alat tes psikologi",
                                                                "Mampu bekerja dalam tim dan memiliki inisiatif yang tinggi untuk mendalami alat tes psikologi",
                                                                "Memiliki inisiatif tinggi untuk belajar tentang administrasi dan skoring asesmen psikologi",
                                                                "Memahami dan mampu mengimplementasikan kode etik psikologi",
                                                            ]
                                                            ],
                                                            [
                "id" => 13,
                "name" => "Twitter Creator",
                "type" => "Internship",
                "positions" => "Staff",
                "location" => "Remote",
                "link" => "link_regis",
                "job_description" => [
                    "Melakukan riset mengenai konten yang akan dibuat",
                    "Mencari ide konten",
                    "Menentukan dan membuat konsep setelah ide ditemukan",
                    "Mencari sumber mengenai topik yang akan dijadikan konten ",
                    "Membuat konten dalam bentuk ilustrasi",
                    "Membuat konten dalam bentuk non-ilustrasi atau hanya tulisan",
                    "Mengetahui tips untuk menaikkan engagement di Twitter",
                ],
                "requirements" => [
                    "SMA/SMK maupun sedang berkuliah dari semua jurusan",
                    "Mampu menggunakan aplikasi Twitter dan Google Workspace",
                    "Mampu membaca trend yang sedang happening",
                    "Mampu membuat tulisan yang menarik dan original",
                    "Teliti dan terorganisir",
                    "Memiliki ketertarikan pada menulis",
                    "Mengetahui cara penulisan Bahasa Indonesia sesuai Pedoman Umum Ejaan Bahasa Indonesia PUEBI",
                    "Mengetahui cara mencari sumber konten yang kredibel dan bisa dipertanggung jawabkan",
                    "Manajemen waktu yang baik"
                ]
                ],
                [
                    "id" => 14,
                    "name" => "Tiktok Creator",
                    "type" => "Internship",
                    "positions" => "Staff",
                    "location" => "Remote",
                    "link" => "link_regis",
                    "job_description" => [
                        "Mencari ide untuk konten Tiktok",
                        "Melakukan riset informasi mengenai konten Tiktok yang akan dibuat",
                        "Membuat naskah mengenai konten video yang akan dibuat",
                        "Bertanggung jawab pada proses produksi konten, mulai dari pembuatan draft video, pengambilan video, hingga video siap diunggah",
                        "Menganalisis tren",
                        "Menganalisis video",
                        "Mengedit tren",
                        "Membuat thumbnail konten Tiktok",
                        "Mengorganisir akun Tiktok Berbinar",
                    ],
                    "requirements" => [
                        "SMA/SMK maupun sedang berkuliah dari semua jurusan",
                        "Mahir dalam mengoperasikan aplikasi Tiktok dan tools video editing",
                        "Mengikuti perkembangan tren di dunia digital",
                        "Memiliki kemampuan copywriting",
                        "Mengetahui cara penulisan Bahasa Indonesia sesuai Pedoman Umum Ejaan Bahasa Indonesia PUEBI",
                        "Memiliki keterampilan berkomunikasi yang baik",
                        "Memiliki kemampuan analisis tren yang baik",
                        "Mengetahui cara riset sumber konten",
                        "Memiliki gadget yang memadai",
                        "Memiliki kreatifitas dalam membuat ide-ide konten yang menarik dan original",
                    ]
                    ],
                    [
                        "id" => 15,
                        "name" => "Instagram Creator",
                        "type" => "Internship",
                        "positions" => "Staff",
                        "location" => "Remote",
                        "link" => "link_regis",
                        "job_description" => [
                            "Bertanggung jawab pada produksi konten, mulai dari pembuatan ide konten, editing, hingga mengunggah konten",
                            "Melakukan revisi jika terdapat kesalahan atau kekurangan dalam ide konten yang akan dibuat",
                            "Berkolaborasi dengan divisi Graphic Designer untuk pembuatan konten",
                            "Menjadi talent dalam konten yang di produksi",
                            "Melakukan repost postingan instagram",
                            "Menjadi admin instagram Berbinar",
                            "Memposting produk-produk Berbinar maupun hal-hal promosi dari divisi lain",
                        ],
                        "requirements" => [
                            "SMA/SMK maupun sedang berkuliah dari semua jurusan",
                            "Memiliki kreatifitas dalam membuat ide-ide feeds/ video tentang psikologi/ pengembangan diri yang menarik dan original",
                            "Mahir dalam mengoperasikan aplikasi Instagram dan aplikasi editing video",
                            "Memiliki skill copywriting",
                            "Mengetahui cara analisis trend",
                            "Memiliki pengetahuan mengenai social media management yang baik dan benar",
                            "Memiliki pengetahuan mengenai penulisan sesuai dengan PUEBI dan juga penulisan yang menarik",
                            "Mampu mengoperasikan Google Workspace dan Instagram",
                            "Mampu menyelesaikan tugas tepat waktu sesuai dengan deadline yang telah ditentukan",
                            "Memiliki gadget yang memadai untuk membuat konten",
                        ]
                        ],
                        [
                            "id" => 16,
                            "name" => "Video Editor",
                            "type" => "Internship",
                            "positions" => "Staff",
                            "location" => "Remote",
                            "link" => "link_regis",
                            "job_description" => [
                                "Menyunting dan mengumpulkan video yang sudah diambil maupun direkam",
                                "Menyusun ulang potongan rekaman video sesuai konsep yang ditentukan",
                                "Menyusun ulang potongan video yang telah disesuaikan dengan durasi",
                                "Membuat informasi tulis atau keterangan lain yang berhubungan dengan materi video",
                                "Memastikan konsistensi hasil editing video dengan konsep dan style perusahaan",
                                "Memastikan musik, sound effect, dan gambar yang digunakan tidak melanggar copyright",
                            ],
                            "requirements" => [
                                "SMA/SMK maupun sedang berkuliah dari semua jurusan",
                                "Memiliki kemampuan pengeditan video yang dapat dibuktikan dengan portofolio",
                                "Kompeten dalam penggunaan software editing (Adobe Premiere Pro/ After Effects / VN/ Capcut, dll)",
                                "Memiliki kreativitas yang tinggi, proaktif, inovatif, dan menyukai tantangan baru",
                                "Adaptif terhadap perubahan trend design",
                                "Kemampuan manajemen waktu dan mengorganisir yang baik dengan memperhatikan detail",
                                "Terbuka dengan revisi yang diberikan",
                                "Memiliki koneksi jaringan yang kuat dan device yang memadai",
                            ]
                            ],
                            [
                                "id" => 17,
                                "name" => "Graphic Designer",
                                "type" => "Internship",
                                "positions" => "Staff",
                                "location" => "Remote",
                                "link" => "link_regis",
                                "job_description" => [
                                    "Menerima request design dari beberapa divisi dan membuat design sesuai dengan konsep dan kebutuhan",
                                ],
                                "requirements" => [
                                    "SMA/SMK maupun sedang berkuliah dari semua jurusan",
                                    "Dapat menggunakan software Figma, dan Adobe Photoshop",
                                    "Mempunyai portofolio baik self project atau project eksternal",
                                    "Mengetahui style design dari Berbinar",
                                    "Memiliki ketertarikan di dunia Psikologi",
                                    "Mampu mengoperasikan software Canva, Google Workspace, dan Adobe Illustrator",
                                ]
                                ],
        ];
        
        $faqs = [
            [
                'question' => 'Apakah bisa di konversi ke SKS?',
                'answer' => 'Apabila nantinya menghendaki untuk mengkonversikan magang di Berbinar ke SKS atau KRS, Kandidat bisa mengajukan MoU atau MoA kerjasama antara pihak kampus dengan Berbinar. 
                '
            ],
            [
                'question' => 'Apakah jika Fresh Graduate atau semester 7 boleh mendaftar?',
                'answer' => 'Tentunya kami akan mengutamakan kandidat yang sesuai dengan kualifikasi yang sudah ditetapkan. Namun tidak menutup kemungkinan kami mengambil kandidat semester akhir atau fresh graduate, jadi silahkan mendaftar saja.
                '
            ],
            [
                'question' => 'Pengumumannya kapan dan lewat apa?',
                'answer' => 'Untuk tahapan selanjutnya dari proses rekrutmen akan dikabarkan secara berkala pada kandidat yang lolos tahap screening melalui WA.
                '
            ],
            [
                'question' => 'Apakah bisa melamar satu posisi saja?',
                'answer' => 'Apabila kandidat menghendaki mendaftar satu posisi saja, silahkan memilih posisi yang sama pada pilihan satu dan dua di google form. 
                '
            ],
            [
                'question' => 'Jam kerja?',
                'answer' => 'Apabila nantinya menghendaki untuk mengkonversikan magang di Berbinar ke SKS atau KRS, Kandidat bisa mengajukan MoU atau MoA kerjasama antara pihak kampus dengan Berbinar. 
                '
            ],
            [
                'question' => 'Unpaid / Paid?',
                'answer' => 'Berbinar memiliki waktu kerja yang fleksibel sehingga tidak mengganggu proses perkuliahan. Namun kandidat perlu memiliki perencanaan waktu yang baik sehingga tugas magang dan kuliah bisa diselesaikan dengan baik.
                '
            ],
            [
                'question' => 'Durasi Internship?',
                'answer' => 'Apabila nantinya menghendaki untuk mengkonversikan magang di Berbinar ke SKS atau KRS, Kandidat bisa mengajukan MoU atau MoA kerjasama antara pihak kampus dengan Berbinar. 
                '
            ],
            [
                'question' => 'Dimana saya bisa mengetahui informasi lebih jelas terkait jobdesk dan requirement posisi yang dibuka?',
                'answer' => 'Durasi Internship di Berbinar adalah 6 bulan / 1 tahun 
                '
            ],
            [
                'question' => 'Apabila ada yang saya bingungkan terkait recruitment kemana saya harus bertanya?',
                'answer' => 'Teman-teman bisa menghubungi CP yang tersedia atau menghubungi kami melalui sosial media Berbinar. 
                '
            ],
        ];

        return view('moduls.hiring.positions', [
            'faqs' => $faqs,
            'positions' => $positions
        ]);
    }
}