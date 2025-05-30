<?php

namespace App\Http\Controllers\Landing\Career;

use App\Http\Controllers\Controller;
use App\Models\Hiring_Positions;
use App\Models\KeluargaBerbinar\TableStaff;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function career()
    {
        $positions = Hiring_Positions::with(['HiringPositionsJobDescription', 'Hiring_Positions_Requirement'])->where('is_active', true)->get();

        $list_image = TableStaff::where('motm', 'yes')->pluck('photo')->map(function ($photo) {
            return $photo ? '/image/' . $photo : '/assets/images/landing/keluarga-berbinar/dummy.png';
        });

        $testimonis = [
            [
                'comment' => 'Banyak ilmu dan pengalaman baru yang didapat di Berbinar. Bukan hanya terkait hardskill, tapi juga softskill seperti kedisiplinan, kerjasama tim, dan komunikasi. Temen-temen disini juga ramah dan asik-asik semua. Magang di Berbinar bisa jadi opsi terbaik buat yang baru mau terjun ke dunia kerja biar nggak terlalu kaget.',
                'name' => 'Khalisah Oktavia',
                'image' => 'assets/images/landing/karir/testimoni/magang-oktavia.png',
                'division' => 'Secretary and Finance',
            ],
            [
                'comment' => 'Selama bekerja di Berbinar, saya selalu merasa tertantang keluar dari zona nyaman dan menjadi "the best version of yourself". Selain itu, banyak hal yang saya pelajari sebagai posisi manager yaitu task management, mengatur waktu, mengeluarkan ide baru dan pendapat.',
                'name' => 'Ismail Ridwan Arayana',
                'image' => 'assets/images/landing/karir/testimoni/magang-arayana.png',
                'division' => 'Human Resource',
            ],
            [
                'comment' => 'Lingkungan yang suportif, kesempatan bagi yang kurang pengalaman supaya bisa memiliki pengalaman yang sangat berharga.',
                'name' => 'Hairul Anam',
                'image' => 'assets/images/landing/karir/testimoni/magang-irul.png',
                'division' => 'Web and Mobile Apps Developer',
            ],
            [
                'comment' => 'They said: Never forget your first company. YAA Will Never Forget You! Aku selalu bersyukur pernah menjadi bagian perjalanan Berbinar. Langkah pertama yang membawaku sejauh ini . Walaupun perjalanannya tidak sempurna, tapi disini ku mendapatkan banyak pengalaman, teman dan pembelajaran. Senang sekali bertemu orang-orang profesional yang menyenangkan. Best Experience Ever!',
                'name' => 'Alifa Fatimatun Nazar',
                'image' => 'assets/images/landing/karir/testimoni/magang-alifa.png',
                'division' => 'Tiktok Creator',
            ],
            [
                'comment' => 'Magang di Berbinar sebagai Counseling Product Management memberi saya pengalaman luar biasa, terutama sebagai peer counselor. Saya belajar mendengarkan dengan empati, mendukung klien, sekaligus memahami pengelolaan layanan kesehatan mental. Selain memperkuat soft skill seperti komunikasi dan empati, saya juga mengasah keterampilan strategis dalam merancang program konseling. Berbinar adalah tempat yang sempurna untuk berkembang di bidang kesehatan mental!',
                'name' => "Shafiyyah Muthi'ah",
                'image' => 'assets/images/landing/karir/testimoni/magang-shfiyyah.png',
                'division' => 'Counseling Product Management',
            ],
            [
                'comment' => 'Banyak insight yang didapat, workflow juga jelas dan terstruktur. Anggotanya juga baik dan suportif juga sangat membantu karena saling backup jika terdapat kendala. Selama magang disini saya nyaman karena manfaatnya banyak sekali.',
                'name' => 'Kiara Allegria',
                'image' => 'assets/images/landing/karir/testimoni/magang-kiara.png',
                'division' => 'Instagram Creator',
            ],
            [
                'comment' => 'Selama magang di Berbinar sebagai Graphic Designer, saya banyak belajar hal-hal baru. Tim desain sangat solid dan kolaboratif, selalu bertukar pikiran untuk menghasilkan karya terbaik.',
                'name' => 'Fadhilah Putri Haryanti',
                'image' => 'assets/images/landing/karir/testimoni/magang-fadhillah.png',
                'division' => 'Graphic Designer',
            ],
            [
                'comment' => 'Ini honest review ya. Di waktu awal join itu masih bingung harus adaptasi dan kayak amaze sama rekan se-tim. Soalnya waktu aku cek daily report mereka itu progres kerjaannya bagus dan terstruktur banget. Terus aku juga amaze sama culture perusahaan yang sangat menjunjung tinggi kedisiplinan. Nah dari kebiasaan ngerjain tugas sebelum deadline, ngisi daily report tepat waktu, rutin ikut weekly meeting itu sekarang ngebentuk aku jadi sosok yang amat disiplin dan tanggung jawab terhadap tugas yang diberikan. Ohiya rekan se-tim ku asik dan seru banget orang-orangnya, kadang kita kalau udah selesai bahas kerjaan juga coba main game buat cooling down xixi. And next, I think buat pekerjaannya itu ngga terlalu memberatkan kita-kita yang masih pemula ini karena nantinya di awal bakal ada training sama manager divisi terus juga terkait jobdesc sebenarnya bisa dikerjakan kapan-kapan aja (fleksibel) tapi tetep harus inget deadline yang dikasih hehee',
                'name' => 'Wilda Maulidiyah',
                'image' => 'assets/images/landing/karir/testimoni/magang-wilda.png',
                'division' => 'Marketing Strategist & Sales',
            ],
            [
                'comment' => 'Berbinar itu jadi tempat pertama kali aku magang dan pengalamannya magang di Berbinar itu seru, menegangkan waktu pertama kali melayani klien, work flownya gak nyangka secepet itu dan untungnya aku bisa adaptasi, banyak belajar lagi tentang alat tes, staf-staf di Berbinar juga baik-baik, pokoknya ini jadi pengalaman magang yang seru dan challenging untuk aku',
                'name' => 'Talitha Aurelia Artedi',
                'image' => 'assets/images/landing/karir/testimoni/magang-talitha.png',
                'division' => 'Psychological Testing Product Management',
            ],
            [
                'comment' => 'Seru banget, ketemu temen-temen baru dari berbagai daerah. intern di Berbinar juga bikin lebih produktif karena ada daily report wajib yang harus diisi tiap harinya. Lovee banget intinya sama Berbinar.',
                'name' => 'Safitri',
                'image' => 'assets/images/landing/karir/testimoni/magang-safitri.png',
                'division' => 'Class Product Management',
            ],
        ];

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

        return view('landing.career.index')->with([
            'testimonis' => $testimonis,
            'faqs' => $faqs,
            'positions' => $positions,
            'list_image' => $list_image
        ]);
    }
}
