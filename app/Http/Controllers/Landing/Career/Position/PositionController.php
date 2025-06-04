<?php

namespace App\Http\Controllers\Landing\Career\Position;

use App\Http\Controllers\Controller;
use App\Models\Hiring_Positions;
use App\Models\Hiring_Positions_Job_Descriptions;
use App\Models\Hiring_Positions_Requirements;

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

        return view('landing.career.positions.index')->with([
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


        return view('landing.career.positions.detail')->with([
            'faqs' => $faqs,
            'position' => $position,
            'HiringPositionsJobDescription' => $HiringPositionsJobDescription,
            'Hiring_Positions_Requirement' => $Hiring_Positions_Requirement,
        ]);
    }
}
