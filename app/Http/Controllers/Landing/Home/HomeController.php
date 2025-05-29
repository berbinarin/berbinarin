<?php

namespace App\Http\Controllers\Landing\Home;

use App\Http\Controllers\Controller;
use App\Models\Hiring_Positions;
use App\Models\KeluargaBerbinar\TableStaff;
use Illuminate\Http\Request;

class HomeController extends Controller
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

        $products = [
            [
                'vector' => 'assets/images/landing/asset-beranda/produk/logo-konseling.png',
                'produk' => 'Berbinar Konseling',
                'deskripsi' => 'Tempat konsultasi kesehatan mental klien dengan memilih psikolog maupun peer counselor yang sudah terjamin kualitas dan profesionalitasnya.',
                'link' => route('product.konseling.index'),
            ],
            [
                'vector' => 'assets/images/landing/asset-beranda/produk/logo-class.png',
                'produk' => 'Berbinar Class',
                'deskripsi' => 'Rintis perkembangan karier klien dengan kelas edukasi Berbinar yang terdiri beberapa topik untuk meningkatkan soft skill dan hard skill.',
                'link' => route('product.class.index'),
            ],
            [
                'vector' => 'assets/images/landing/asset-beranda/produk/logo-psikotes.png',
                'produk' => 'Berbinar Psikotes',
                'deskripsi' => 'Serangkaian tes untuk mengukur, menentukan, dan mempersiapkan karier dengan mengidentifikasi potensi yang dimiliki setiap klien.',
                'link' => route('product.psikotest.index'),
            ],
            [
                'vector' => 'assets/images/landing/asset-beranda/produk/logo-consulting.png',
                'produk' => 'Berbinar Consulting',
                'deskripsi' => 'Suatu layanan dalam membantu suatu perusahaan, komunitas, dan organisasi yang berkaitan kinerja sumber daya manusia.',
                'link' => route('product.consulting.index'),
            ],
            [
                'vector' => 'assets/images/landing/asset-beranda/produk/logo-emoshuffle.png',
                'produk' => 'EmoShuffle',
                'deskripsi' => 'Kartu yang dirancang dengan desain menarik dan dapat mendalami juga mengekspresikan perasaan klien saat bermain.',
                'link' => route('product.konseling.index'),
            ],
            [
                'vector' => 'assets/images/landing/asset-beranda/produk/logo-moodscantees.png',
                'produk' => 'MoodScan Tees',
                'deskripsi' => 'Kaos super nyaman yang memiliki desain konsep psikologis juga fitur QR Code untuk menyimpan pesan motivasi agar tampil bergaya.',
                'link' => route('product.konseling.index'),
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

    public function faq()
    {
        return view('moduls.landing-new.faq')->with([]);
    }

    public function termCondition()
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

    public function privacyPolicy()
    {
        return view('moduls.landing-new.privacy-policy')->with([]);
    }
}
