<?php

namespace App\Http\Controllers\Landing\Product\Consulting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConsultingController extends Controller
{
    //
    public function index()
    {
        $layanan_consultings = [
            [
                'category' => 'Rekrutmen & Seleksi',
                'price' => 'Rp1.800.000',
                'description' => ['Penyusunan kriteria jabatan dan deskripsi pekerjaan', 'Membuat proses rekrutmen dari sistem tes hingga wawancara', 'Melaporkan evaluasi kandidat berdasarkan kompetensi'],
                'link' => 'https://forms.gle/6fiypk4DtqJLs4mAA',
                'icon' => 'assets/images/landing/asset-consulting/icon-produk/Rekrutmen dan Seleksi.webp'
            ],
            [
                'category' => 'Pelatihan & Pengembangan',
                'price' => 'Rp1.500.000',
                'description' => ['Menyusun kurikulum pelatihan', 'Menganalisa kebutuhan pelatihan berdasarkan kinerja dan target bisnis', 'Evaluasi pasca-pelatihan untuk  menilai peningkatan keterampilan'],
                'link' => 'https://forms.gle/6fiypk4DtqJLs4mAA',
                'icon' => 'assets/images/landing/asset-consulting/icon-produk/Pelatihan & Pengembangan.webp'
            ],
            [
                'category' => 'Analisis Beban Kerja & Perencanaan Organisasi',
                'price' => 'Rp1.800.000',
                'description' => ['Menganalisa beban kerja setiap jabatan', 'Peninjauan dan perencanaan struktur organisasi yang lebih efektif', 'Rekomendasi jumlah optimal staf berdasarkan beban kerja'],
                'link' => 'https://forms.gle/6fiypk4DtqJLs4mAA',
                'icon' => 'assets/images/landing/asset-consulting/icon-produk/Analisis Beban Kerja & Perencanaan Organisasi.webp'
            ],
            [
                'category' => 'Coaching',
                'price' => 'Rp2.000.000',
                'description' => ['Melakukan sesi coaching personal untuk individu atau tim secara tatap muka', 'Pembahasan tujuan dan perencanaan pengembangan dengan berbagai metode penyesuaian strategi berdasarkan progress'],
                'link' => 'https://forms.gle/6fiypk4DtqJLs4mAA',
                'icon' => 'assets/images/landing/asset-consulting/icon-produk/Coaching.webp'
            ],
            [
                'category' => 'Penilaian Kinerja',
                'price' => 'Rp2.150.000',
                'description' => ['Penyusunan indikator kinerja utama (KPI) yang jelas dan terukur', 'Implementasi metode evaluasi kinerja', 'Laporan performa karyawan dengan rekomendasi pengembangan', 'Feedback terstruktur yang membantu peningkatan kompetensi'],
                'link' => 'https://forms.gle/6fiypk4DtqJLs4mAA',
                'icon' => 'assets/images/landing/asset-consulting/icon-produk/Penilaian Kerja.webp'
            ],
            [
                'category' => 'Kompensasi & Benefit',
                'price' => 'Rp1.780.000',
                'description' => ['Analisis dan benchmark terhadap standar industri terkait gaji dan benefit', 'Penyusunan paket kompensasi yang adil dan menarik bagi karyawan', 'Rekomendasi mengenai insentif dan benefit tambahan yang relevan'],
                'link' => 'https://forms.gle/6fiypk4DtqJLs4mAA',
                'icon' => 'assets/images/landing/asset-consulting/icon-produk/Kompensasi & Benefit.webp'
            ],
            [
                'category' => 'Standar Operasional Prosedur (SOP)',
                'price' => 'Rp1.600.000',
                'description' => ['Identifikasi dan dokumentasi alur proses kerja', 'Penyusunan dokumen SOP yang jelas dan terstruktur', 'Implementasi dan sosialisasi SOP kepada seluruh staf', 'Evaluasi dan update SOP secara berkala sesuai perubahan kondisi bisnis'],
                'link' => 'https://forms.gle/6fiypk4DtqJLs4mAA',
                'icon' => 'assets/images/landing/asset-consulting/icon-produk/Standar Operasional Prosedur.webp'
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
                'link' => "assets/images/landing/asset-consulting/link-google-form.webp"
            ],
            [
                'title' => "Konfirmasi Pendaftaran",
                'description' => "lakukan konfirmasi kepada (cp) tim berbinar dan tunggu 1x24 jam untuk dapatkan informasi selengkapnya",
                'link' => "assets/images/landing/asset-consulting/check-mark-pendaftaran.webp"
            ],
            [
                'title' => "Informasi Jadwal dan Pembayaran",
                'description' => "(cp) tim berbinar akan melakukan konfirmasi untuk pemberitahuan mengenai ketersediaan jadwal consulting dan melakukan pembayaran pada rekening bank yang tersedia",
                'link' => "assets/images/landing/asset-consulting/jadwal-dan-pembayaran.webp"
            ],
            [
                'title' => "Verifikasi Pembayaran",
                'description' => "kirimkan bukti pembayaran kepada (cp) tim berbinar untuk melakukan pengecekan",
                'link' => "assets/images/landing/asset-consulting/check-mark-pembayaran.webp"
            ],
            [
                'title' => "Jadwal pelaksanaan",
                'description' => "(cp) tim berbinar akan mengirimkan jadwal yang telah ditentukan beserta dengan link yang akan diakses dan teknis pelaksanaan",
                'link' => "assets/images/landing/asset-consulting/jadwal-pelaksanaan.webp"
            ],
            [
                'title' => "Pelaksanaan Layanan Consulting",
                'description' => "setelah mengetahui keseluruhan informasi, sobatbinar bisa memulai layanan consulting bersama konsultan sesuai jadwal yang telah ditentukan",
                'link' => "assets/images/landing/asset-consulting/layanan-consulting.webp"
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

        return view('landing.product.consulting.index')->with([
            'layanan_consultings' => $layanan_consultings,
            'bundlings' => $bundlings,
            'alur_pendaftaran' => $alur_pendaftaran,
            'faqs' => $faqs,
        ]);
    }
}
