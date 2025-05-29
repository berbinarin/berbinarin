<?php

namespace App\Http\Controllers\Landing\Career\Position;

use App\Http\Controllers\Controller;
use App\Models\Hiring_Positions;
use App\Models\Hiring_Positions_Job_Descriptions;
use App\Models\Hiring_Positions_Requirements;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    public function index()
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

    public function detail($id)
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
}
