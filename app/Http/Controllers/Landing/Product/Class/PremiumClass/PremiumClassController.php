<?php

namespace App\Http\Controllers\Landing\Product\Class\PremiumClass;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PremiumClassController extends Controller
{
    public function index()
    {
        $faqs = [

            [
                'ask' => 'Apakah hasil tugas dapat saya lampirkan sebagai portofolio?',
                'answer' => 'Tentu, SobatBinar diperbolehkan menggunakan tugas yang dikerjakan selama kelas sebagai bagian dari portofolio. Ini bisa menjadi bukti nyata atas keterampilan yang telah dipelajari dan dikembangkan selama mengikuti program Premium Class'
            ],

            [
                'ask' => 'Bisakah saya menjadwalkan ulang sesi kelas ketika saya berhalangan hadir?',
                'answer' => 'Ya, penjadwalan ulang kelas dapat dilakukan berdasarkan kesepakatan dengan mentor. SobatBinar disarankan memberi konfirmasi sebelumnya agar proses penjadwalan berjalan lancar dan sesuai ketentuan yang berlaku.'
            ],

            [
                'ask' => 'Kapan sertifikat akan diberikan?',
                'answer' => 'Setelah pembelajaran berakhir serta telah menyelesaikan tugas dengan baik maka SobatBinar dapat memperoleh sertifikat.'
            ],

            [
                'ask' => 'Apakah ada batas waktu untuk mengerjakan studi kasus?',
                'answer' => 'Ya, studi kasus memiliki batas waktu penyelesaian yang telah ditentukan. Informasi mengenai deadline akan disampaikan di awal kelas dan tercantum dalam panduan program.'
            ],

            [
                'ask' => 'Apakah mentor tersedia setiap waktu untuk menjawab pertanyaan saya?',
                'answer' => 'Mentor tidak tersedia setiap waktu. Namun, SobatBinar tetap dapat mengajukan pertanyaan kapan saja, dan mentor akan merespons sesuai dengan jadwal atau jam operasional yang telah ditentukan.'
            ],

        ];
        return view('moduls/landing-new/produk-premium-class', compact('faqs'));
    }
}
