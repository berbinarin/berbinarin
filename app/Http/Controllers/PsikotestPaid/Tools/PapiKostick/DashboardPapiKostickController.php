<?php

namespace App\Http\Controllers\PsikotestPaid\Tools\PapiKostick;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PsikotestPaid\PsikotestPaidTest;
use App\Models\PsikotestPaid\UserPsikotestPaid;
use App\Models\PsikotestPaid\PapiKostick\TestPapiKostick;
use App\Models\PsikotestPaid\PapiKostick\AnswerPapiKostick;
use App\Models\PsikotestPaid\PapiKostick\ResultPapiKostick;

class DashboardPapiKostickController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth')->except(['login']);
    //     $this->middleware('role:Admin,HR,Konselling,PsikotestFree')->except(['login']);
    // }

    public function allResponden()
    {
        $respondens = PsikotestPaidTest::with('userPsikotestPaid')
            ->where('psikotest_tool_id', 1)
            ->get();

        return view('moduls.psikotes-paid.tools.papi-kostick.data', compact('respondens'));
    }

    // public function detailResponden($id)
    // {
    //     $responden = PsikotestPaidTest::with('userPsikotestPaid')->findOrFail($id);

    //     // Fetch the TestPapiKostick based on psikotest_paid_test_id
    //     $testPapiKostick = TestPapiKostick::where('psikotest_paid_test_id', $responden->id)->first();

    //     // If there's a TestPapiKostick, fetch the result
    //     $result = $testPapiKostick ? ResultPapiKostick::where('test_papi_kostick_id', $testPapiKostick->id)->first() : null;

    //     // If there's a result, fetch the descriptions
    //     $descriptions = $result ? $this->getAllDescription($result) : [];

    //     return view('moduls.psikotes-paid.tools.papi-kostick.detail', compact('responden', 'result', 'descriptions'));
    // }

    public function detailResponden($id)
    {
        $responden = PsikotestPaidTest::with('userPsikotestPaid')->findOrFail($id);
        $testPapiKostick = TestPapiKostick::where('psikotest_paid_test_id', $responden->id)->first();

        $result = $testPapiKostick ? ResultPapiKostick::where('test_papi_kostick_id', $testPapiKostick->id)->first() : null;
        $descriptions = $result ? $this->getAllDescription($result) : [];

        $answers = $testPapiKostick ? AnswerPapiKostick::with('questionPapiKostick')
            ->where('test_papi_kostick_id', $testPapiKostick->id)
            ->get() : [];

        return view('moduls.psikotes-paid.tools.papi-kostick.detail', compact('responden', 'result', 'descriptions', 'answers'));
    }

    // public function showResult($id)
    // {
    //     $result = ResultPapiKostick::findOrFail($id);
    //     $descriptions = $this->getAllDescription($result);

    //     return view('moduls.psikotes-paid.tools.papi-kostick.result', compact('result', 'descriptions'));
    // }

    private function getAllDescription(ResultPapiKostick $result)
    {
        $descriptions = [
            'F' => $this->getDescriptionF($result->F),
            'W' => $this->getDescriptionW($result->W),
            'N' => $this->getDescriptionN($result->N),
            'G' => $this->getDescriptionG($result->G),
            'A' => $this->getDescriptionA($result->A),
            'L' => $this->getDescriptionL($result->L),
            'P' => $this->getDescriptionP($result->P),
            'I' => $this->getDescriptionI($result->I),
            'T' => $this->getDescriptionT($result->T),
            'V' => $this->getDescriptionV($result->V),
            'O' => $this->getDescriptionO($result->O),
            'B' => $this->getDescriptionB($result->B),
            'S' => $this->getDescriptionS($result->S),
            'X' => $this->getDescriptionX($result->X),
            'C' => $this->getDescriptionC($result->C),
            'D' => $this->getDescriptionD($result->D),
            'R' => $this->getDescriptionR($result->R),
            'Z' => $this->getDescriptionZ($result->Z),
            'E' => $this->getDescriptionE($result->E),
            'K' => $this->getDescriptionK($result->K),
        ];

        return $descriptions;
    }

    private function getDescriptionF($fScore)
    {
        if ($fScore >= 0 && $fScore <= 3) {
            return "Otonom, dapat bekerja sendiri tanpa campur tangan orang lain, motivasi timbul karena pekerjaan itu sendiri, bukan karena pujian dari otoritas. Mempertanyakan otoritas, cenderung tidak puas terhadap atasan, loyalitas lebih didasari kepentingan pribadi.";
        } elseif ($fScore >= 4 && $fScore <= 6) {
            return "Loyal pada Perusahaan.";
        } elseif ($fScore == 7) {
            return "Loyal pada pribadi atasan.";
        } elseif (
            $fScore >= 8 && $fScore <= 9
        ) {
            return "Loyal, berusaha dekat dengan pribadi atasan, ingin menyenangkan atasan, sadar akan harapan atasan akan dirinya. Terlalu memperhatikan cara menyenangkan atasan, tidak berani berpendirian lain, tidak mandiri.";
        } else {
            return "Deskripsi tidak tersedia.";
        }
    }

    private function getDescriptionW($wScore)
    {
        if ($wScore >= 0 && $wScore <= 3) {
            return "Hanya butuh gambaran tentang kerangka tugas secara garis besar, berpatokan pada tujuan, dapat bekerja dalam suasana yang kurang berstruktur, berinsiatif, mandiri. Tidak patuh, cenderung mengabaikan atau tidak paham pentingnya peraturan atau prosedur, suka membuat peraturan sendiri yang bisa bertentangan dengan yang telah ada.";
        } elseif ($wScore >= 4 && $wScore <= 5) {
            return "Perlu pengarahan awal dan tolok ukur keberhasilan.";
        } elseif ($wScore >= 6 && $wScore <= 7) {
            return "Membutuhkan uraian rinci mengenai tugas, dan batasan tanggung jawab serta wewenang.";
        } elseif ($wScore >= 8 && $wScore <= 9) {
            return "Patuh pada kebijaksanaan, peraturan dan struktur organisasi. Ingin segala sesuatunya diuraikan secara rinci, kurang memiliki inisiatif, tdk fleksibel, terlalu tergantung pada organisasi, berharap 'disuapi'.";
        } else {
            return "Deskripsi tidak tersedia.";
        }
    }

    private function getDescriptionN($nScore)
    {
        if ($nScore >= 0 && $nScore <= 2) {
            return "Tidak terlalu merasa perlu untuk menuntaskan sendiri tugas-tugasnya, senang menangani beberapa pekerjaan sekaligus, mudah mendelegasikan tugas. Komitmen rendah, cenderung meninggalkan tugas sebelum tuntas, konsentrasi mudah buyar, mungkin suka berpindah pekerjaan.";
        } elseif ($nScore >= 3 && $nScore <= 5) {
            return "Cukup memiliki komitmen untuk menuntaskan tugas, akan tetapi jika memungkinkan akan mendelegasikan sebagian dari pekerjaannya kepada orang lain.";
        } elseif (
            $nScore >= 6 && $nScore <= 7
        ) {
            return "Komitmen tinggi, lebih suka menangani pekerjaan satu demi satu, akan tetapi masih dapat mengubah prioritas jika terpaksa.";
        } elseif ($nScore >= 8 && $nScore <= 9) {
            return "Memiliki komitmen yg sangat tinggi terhadap tugas, sangat ingin menyelesaikan tugas, tekun dan tuntas dalam menangani pekerjaan satu demi satu hingga tuntas. Perhatian terpaku pada satu tugas, sulit untuk menangani beberapa pekerjaan sekaligus, sulit di interupsi, tidak melihat masalah sampingan.";
        } else {
            return "Deskripsi tidak tersedia.";
        }
    }

    private function getDescriptionG($gScore)
    {
        if ($gScore >= 0 && $gScore <= 2) {
            return "Santai, kerja adalah sesuatu yang menyenangkan-bukan beban yang membutuhkan usaha besar. Mungkin termotivasi untuk mencari cara atau sistem yang dapat mempermudah dirinya dalam menyelesaikan pekerjaan, akan berusaha menghindari kerja keras, sehingga dapat memberi kesan malas.";
        } elseif ($gScore >= 3 && $gScore <= 4) {
            return "Bekerja keras sesuai tuntutan, menyalurkan usahanya untuk hal-hal yang bermanfaat atau menguntungkan.";
        } elseif ($gScore >= 5 && $gScore <= 7) {
            return "Bekerja keras, tetapi jelas tujuan yg ingin dicapainya.";
        } elseif ($gScore >= 8 && $gScore <= 9) {
            return "Ingin tampil sebagai pekerja keras, sangat suka bila orang lain memandangnya sbg pekerja keras.  Cenderung menciptakan pekerjaan yang tidak perlu agar terlihat tetap sibuk, kadang kala tanpa tujuan yang jelas.";
        } else {
            return "Deskripsi tidak tersedia.";
        }
    }

    private function getDescriptionA($aScore)
    {
        if ($aScore >= 0 && $aScore <= 4) {
            return "Tidak kompetitif, mapan, puas. Tidak terdorong untuk menghasilkan prestasi,tidak berusaha untuk mencapai sukses, membutuhkan dorongan dari luar diri, tidak berinisiatif, tidak memanfaatkan kemampuan diri secara optimal, ragu akan tujuan diri, misalnya sebagai akibat promosi atau perubahan struktur jabatan.";
        } elseif ($aScore >= 5 && $aScore <= 7) {
            return "Tahu akan tujuan yang ingin dicapainya dan dapat merumuskannya, realistis akan kemampuan diri, dan berusaha untuk mencapai target.";
        } elseif ($aScore >= 8 && $aScore <= 9) {
            return "Sangat berambisi untuk berprestasi dan menjadi yang terbaik, menyukai tantangan, cenderung mengejar kesempurnaan, menetapkan target yang tinggi, 'self-starter', merumuskan kerja dengan baik. Tidak realistis akan kemampuannya, sulit dipuaskan, mudah kecewa, harapan yang tinggi mungkin mengganggu orang lain.";
        } else {
            return "Deskripsi tidak tersedia.";
        }
    }

    private function getDescriptionL($lScore)
    {
        if ($lScore >= 0 && $lScore <= 1) {
            return "Puas dengan peran sebagai bawahan, memberikan kesempatan pada orang lain untuk memimpin, tidak dominan. Tidak percaya diri. Sama sekali tidak berminat untuk berperan sebagai pemimpin. Bersikap pasif dalam kelompok.";
        } elseif ($lScore >= 2 && $lScore <= 3) {
            return "Tidak percaya diri dan tidak ingin memimpin atau mengawasi orang lain.";
        } elseif ($lScore == 4) {
            return "Kurang percaya diri dan kurang berminat untuk menjadi pemimpin.";
        } elseif ($lScore == 5) {
            return "Cukup percaya diri, tidak secara aktif mencari posisi kepemimpinan akan tetapi juga tidak akan menghindarinya.";
        } elseif (
            $lScore >= 6 && $lScore <= 7
        ) {
            return "Percaya diri dan ingin berperan sebagai pemimpin.";
        } elseif ($lScore >= 8 && $lScore <= 9) {
            return "Sangat percaya diri untuk berperan sebagai atasan dan sangat mengharapkan posisi tersebut. Lebih mementingkan citra dan status kepemimpinannya dari pada efektifitas kelompok, mungkin akan tampil angkuh atau terlalu percaya diri.";
        } else {
            return "Deskripsi tidak tersedia.";
        }
    }

    private function getDescriptionP($pScore)
    {
        if ($pScore >= 0 && $pScore <= 1) {
            return "Permisif, akan memberikan kesempatan pada orang lain untuk memimpin. Tidak mau mengontrol orang lain dan tidak mau mempertanggung jawabkan hasil kerja bawahannya.";
        } elseif ($pScore >= 2 && $pScore <= 3) {
            return "Enggan mengontrol org lain dan tidak mau mempertanggung jawabkan hasil kerja bawahannya, lebih memberi kebebasan kepada bawahan untuk memilih cara sendiri dalam penyelesaian tugas dan meminta bawahan untuk mempertanggungjawabkan hasilnya masing-masing.";
        } elseif ($pScore == 4) {
            return "Cenderung enggan melakukan fungsi pengarahan, pengendalian dan pengawasan, kurang aktif memanfaatkan kapasitas bawahan secara optimal, cenderung bekerja sendiri dalam mencapai tujuan kelompok.";
        } elseif ($pScore == 5) {
            return "Bertanggung jawab, akan melakukan fungsi pengarahan, pengendalian dan pengawasan, tapi tidak mendominasi.";
        } elseif ($pScore >= 6 && $pScore <= 7) {
            return "Dominan dan bertanggung jawab, akan melakukan fungsi pengarahan, pengendalian dan pengawasan.";
        } elseif ($pScore >= 8 && $pScore <= 9) {
            return "Sangat dominan, sangat mempengaruhi dan mengawasi orang lain, bertanggung jawab atas tindakan dan hasil kerja bawahan. Posesif, tidak ingin berada di bawah pimpinan org lain, cemas bila tidak berada di posisi pemimpin, mungkin sulit untuk bekerja sama dengan rekan yang sejajar kedudukannya.";
        } else {
            return "Deskripsi tidak tersedia.";
        }
    }

    private function getDescriptionI($iScore)
    {
        if ($iScore >= 0 && $iScore <= 1) {
            return "Sangat berhati-hati, memikirkan langkah-langkahnya secara bersungguh-sungguh. Lamban dalam mengambil keputusan, terlalu lama merenung, cenderung menghindar mengambil keputusan.";
        } elseif ($iScore >= 2 && $iScore <= 3) {
            return "Enggan mengambil keputusan.";
        } elseif ($iScore >= 4 && $iScore <= 5) {
            return "Berhati - hati dalam pengambilan keputusan.";
        } elseif ($iScore >= 6 && $iScore <= 7) {
            return "Cukup percaya diri dalam pengambilan keputusan, mau mengambil resiko, dapat memutuskan dengan cepat, mengikuti alur logika.";
        } elseif ($iScore >= 8 && $iScore <= 9) {
            return "Sangat yakin dalam mengambil keputusan, cepat tanggap terhadap situasi, berani mengambil resiko, mau memanfaatkan kesempatan. Impulsif, dapat membuat keputusan yang tidak praktis, cenderung lebih mementingkan kecepatan daripada akurasi, tidak sabar, cenderung meloncat pada keputusan.";
        } else {
            return "Deskripsi tidak tersedia.";
        }
    }

    private function getDescriptionT($tScore)
    {
        if ($tScore >= 0 && $tScore <= 3) {
            return "Santai. Kurang peduli akan waktu, kurang memiliki rasa urgensi, membuang-buang waktu, bukan pekerja yang tepat waktu.";
        } elseif ($tScore >= 4 && $tScore <= 6) {
            return "Cukup aktif dalam segi mental, dapat menyesuaikan tempo kerjanya dengan tuntutan pekerjaan atau lingkungan.";
        } elseif (
            $tScore >= 7 && $tScore <= 9
        ) {
            return "Cekatan, selalu siaga, bekerja cepat, ingin segera menyelesaikan tugas.  Negatifnya: Tegang, cemas, impulsif, mungkin ceroboh, banyak gerakan yang tidak perlu.";
        } else {
            return "Deskripsi tidak tersedia.";
        }
    }

    private function getDescriptionV($vScore)
    {
        if ($vScore >= 0 && $vScore <= 2) {
            return "Cocok untuk pekerjaan  'di belakang meja'. Cenderung lamban, tidak tanggap, mudah lelah, daya tahan lemah.";
        } elseif ($vScore >= 3 && $vScore <= 6) {
            return "Dapat bekerja di belakang meja dan senang jika sesekali harus terjun ke lapangan atau melaksanakan tugas-tugas yang bersifat mobile.";
        } elseif ($vScore >= 7 && $vScore <= 9) {
            return "Menyukai aktifitas fisik ( a.l. : olah raga), enerjik, memiliki stamina untuk menangani tugas-tugas berat, tidak mudah lelah. Tidak betah duduk lama, kurang dapat konsentrasi  'di belakang meja'.";
        } else {
            return "Deskripsi tidak tersedia.";
        }
    }

    private function getDescriptionO($oScore)
    {
        if ($oScore >= 0 && $oScore <= 2) {
            return "Menjaga jarak, lebih memperhatikan hal-hal kedinasan, tidak mudah dipengaruhi oleh individu tertentu, objektif dan analitis. Tampil dingin, tidak acuh, tidak ramah, suka berahasia, mungkin tidak sadar akan perasaan orang lain & mungkin sulit menyesuaikan diri.";
        } elseif ($oScore >= 3 && $oScore <= 5) {
            return "Tidak mencari atau menghindari hubungan antar pribadi di lingkungan kerja, masih mampu menjaga jarak.";
        } elseif ($oScore >= 6 && $oScore <= 9) {
            return "Peka akan kebutuhan org lain, sangat memikirkan hal-hal yang dibutuhkan orang lain, suka menjalin hubungan persahabatan yang hangat dan tulus. Sangat perasa, mudah tersinggung, cenderung subjektif, dapat terlibat terlalu dlam atau intim dengan individu tertentu dalam pekerjaan, sangat tergantung pada individu tertentu.";
        } else {
            return "Deskripsi tidak tersedia.";
        }
    }

    private function getDescriptionB($bScore)
    {
        if ($bScore >= 0 && $bScore <= 2) {
            return "Mandiri (dari segi emosi), tidak mudah dipengaruhi oleh tekanan kelompok. Penyendiri, kurang peka akan sikap dan kebutuhan kelompok, mungkin sulit menyesuaikan diri.";
        } elseif ($bScore >= 3 && $bScore <= 5) {
            return "Selektif dalam bergabung dengan kelompok, hanya mau berhubungan dengan kelompok di lingkungan kerja apabila bernilai dan sesuai minat, tidak terlalu mudah dipengaruhi.";
        } elseif ($bScore >= 6 && $bScore <= 9) {
            return "Suka bergabung dalam kelompok, sadar akan sikap dan kebutuhan kelompok, suka bekerja sama, ingin menjadi bagian dari kelompok, ingin disukai dan diakui oleh lingkungan. Sangat tergantung pada kelompok, lebih memperhatikan kebutuhan kelompok daripada pekerjaan.";
        } else {
            return "Deskripsi tidak tersedia.";
        }
    }

    private function getDescriptionS($sScore)
    {
        if ($sScore >= 0 && $sScore <= 2) {
            return "Dapat bekerja sendiri, tidak membutuhkan kehadiran orang lain. Menarik diri, kaku dalam bergaul, canggung dalam situasi sosial, lebih memperhatikan hal - hal lain daripada manusia.";
        } elseif ($sScore >= 3 && $sScore <= 4) {
            return "Kurang percaya diri dan kurang aktif dlm menjalin hubungan sosial.";
        } elseif ($sScore >= 5 && $sScore <= 9) {
            return "Percaya diri dan sangat senang bergaul, menyukai interaksi sosial, bisa menciptakan suasana yang menyenangkan, mempunyai inisiatif dan mampu menjalin hubungan dan komunikasi, memperhatikan org lain. Mungkin membuang-buang waktu untuk aktifitas sosial, kurang peduli akan penyelesaian tugas.";
        } else {
            return "Deskripsi tidak tersedia.";
        }
    }

    private function getDescriptionX($xScore)
    {
        if ($xScore >= 0 && $xScore <= 1) {
            return "Sederhana, rendah hati, tulus, tidak sombong dan tidak suka menampilkan diri. Terlalu sederhana, cenderung merendahkan kapasitas diri, tidak percaya diri, cenderung menarik diri dan pemalu.";
        } elseif ($xScore >= 2 && $xScore <= 3) {
            return "Sederhana, cenderung diam, cenderung pemalu, tidak suka menonjolkan diri.";
        } elseif ($xScore >= 4 && $xScore <= 5) {
            return "Mengharapkan pengakuan lingkungan dan tidak mau diabaikan tetapi tidak mencari-cari perhatian.";
        } elseif (
            $xScore >= 6 && $xScore <= 9
        ) {
            return "Bangga akan diri dan gayanya sendiri, senang menjadi pusat perhatian, mengharapkan penghargaan dari lingkungan. Mencari-cari perhatian dan suka menyombongkan diri.";
        } else {
            return "Deskripsi tidak tersedia.";
        }
    }

    private function getDescriptionC($cScore)
    {
        if ($cScore >= 0 && $cScore <= 2) {
            return "Lebih mementingkan fleksibilitas daripada struktur, pendekatan kerja lebih ditentukan oleh situasi daripada oleh perencanaan sebelumnya, mudah beradaptasi. Tidak mempedulikan keteraturan atau kerapihan, ceroboh.";
        } elseif ($cScore >= 3 && $cScore <= 4) {
            return "Fleksibel tapi masih cukup memperhatikan keteraturan atau sistematika kerja.";
        } elseif ($cScore >= 5 && $cScore <= 6) {
            return "Memperhatikan keteraturan dan sistematika kerja, tapi cukup fleksibel.";
        } elseif ($cScore >= 7 && $cScore <= 9) {
            return "Sistematis, bermetoda, berstruktur, rapi dan teratur, dapat menata tugas dengan baik.  Cenderung kaku, tidak fleksibel.";
        } else {
            return "Deskripsi tidak tersedia.";
        }
    }

    private function getDescriptionD($dScore)
    {
        if ($dScore >= 0 && $dScore <= 1) {
            return "Melihat pekerjaan secara makro, membedakan hal penting dari yang kurang penting, mendelegasikan detil pada orang lain, generalis. Menghindari detail, konsekuensinya mungkin bertindak tanpa data yang cukup atau akurat, bertindak ceroboh pada hal yang butuh kecermatan. Dapat mengabaikan proses yang vital dalam evaluasi data.";
        } elseif ($dScore >= 2 && $dScore <= 3) {
            return "Cukup peduli akan akurasi dan kelengkapan data.";
        } elseif ($dScore >= 4 && $dScore <= 6) {
            return "Tertarik untuk menangani sendiri detail.";
        } elseif (
            $dScore >= 7 && $dScore <= 9
        ) {
            return "Sangat menyukai detail, sangat peduli akan akurasi dan kelengkapan data. Cenderung terlalu terlibat dengan detail sehingga melupakan tujuan utama.";
        } else {
            return "Deskripsi tidak tersedia.";
        }
    }

    private function getDescriptionR($rScore)
    {
        if ($rScore >= 0 && $rScore <= 3) {
            return "Tipe pelaksana, praktis - pragmatis, mengandalkan pengalaman masa lalu dan intuisi. Bekerja tanpa perencanaan, mengandalkan perasaan.";
        } elseif ($rScore >= 4 && $rScore <= 5) {
            return "Pertimbangan mencakup aspek teoritis (konsep atau pemikiran baru) dan aspek praktis (pengalaman) secara berimbang.";
        } elseif ($rScore >= 6 && $rScore <= 7) {
            return "Suka memikirkan suatu masalah secara mendalam, merujuk pada teori dan konsep.";
        } elseif ($rScore >= 8 && $rScore <= 9) {
            return "Tipe pemikir, sangat berminat pada gagasan, konsep, teori,mencari alternatif baru, menyukai perencanaan. Mungkin sulit dimengerti oleh orang lain, terlalu teoritis dan tidak praktis, mengawang-awang dan berbelit-belit.";
        } else {
            return "Deskripsi tidak tersedia.";
        }
    }

    private function getDescriptionZ($zScore)
    {
        if ($zScore >= 0 && $zScore <= 1) {
            return "Mudah beradaptasi dengan pekerjaan rutin tanpa merasa bosan, tidak membutuhkan variasi, menyukai lingkungan stabil dan tidak berubah. Konservatif, menolak perubahan, sulit menerima hal-hal baru, tidak dapat beradaptasi dengan situasi yang berbeda-beda.";
        } elseif ($zScore >= 2 && $zScore <= 3) {
            return "Enggan berubah, tidak siap untuk beradaptasi, hanya mau menerima perubahan jika alasannya jelas dan meyakinkan.";
        } elseif ($zScore >= 4 && $zScore <= 5) {
            return "Mudah beradaptasi, cukup menyukai perubahan.";
        } elseif ($zScore >= 6 && $zScore <= 7) {
            return "Antusias terhadap perubahan dan akan mencari hal-hal baru, tetapi masih selektif (menilai kemanfaatannya ).";
        } elseif (
            $zScore >= 8 && $zScore <= 9
        ) {
            return "Sangat menyukai perubahan, gagasan baru atau variasi, aktif mencari perubahan, antusias dengan hal-hal baru, fleksibel dalam berpikir, mudah beradaptasi pada situasi yang berbeda-beda. Gelisah, frustasi, mudah bosan, sangat membutuhkan variasi, tidak menyukai tugas atau situasi yang rutin-monoton.";
        } else {
            return "Deskripsi tidak tersedia.";
        }
    }

    private function getDescriptionE($eScore)
    {
        if ($eScore >= 0 && $eScore <= 1) {
            return "Sangat terbuka, terus terang, mudah terbaca (dari air muka, tindakan, perkataan, sikap). Tidak dapat mengendalikan emosi, cepat bereaksi, kurang mengindahkan atau tidak mempunyai 'nilai' yang mengharuskannya menahan emosi.";
        } elseif ($eScore >= 2 && $eScore <= 3) {
            return "Terbuka, mudah mengungkap pendapat atau perasaannya mengenai suatu hal kepada org lain.";
        } elseif ($eScore >= 4 && $eScore <= 6) {
            return "Mampu mengungkap atau menyimpan perasaan, dapat mengendalikan emosi.";
        } elseif ($eScore >= 7 && $eScore <= 9) {
            return "Mampu menyimpan pendapat atau perasaannya, tenang, dapat mengendalikan emosi, menjaga jarak. Tampil pasif dan tidak acuh, mungkin sulit mengungkapkan emosi atau perasaan atau pandangan.";
        } else {
            return "Deskripsi tidak tersedia.";
        }
    }

    private function getDescriptionK($kScore)
    {
        if ($kScore >= 0 && $kScore <= 1) {
            return "Sabar, tidak menyukai konflik. Mengelak atau menghindar dari konflik, pasif, menekan atau menyembunyikan perasaan sesungguhnya,  menghindari konfrontasi, lari dari konflik, tidak mau mengakui adanya konflik.";
        } elseif ($kScore >= 2 && $kScore <= 3) {
            return "Lebih suka menghindari konflik, akan mencari rasionalisasi untuk dapat menerima situasi dan melihat permasalahan dari sudut pandangan orang lain.";
        } elseif ($kScore >= 4 && $kScore <= 5) {
            return "Tidak mencari atau menghindari konflik. Mau mendengarkan pandangan orang lain tetapi dapat menjadi keras kepala saat mempertahankan pandangannya.";
        } elseif ($kScore >= 6 && $kScore <= 7) {
            return "Akan menghadapi konflik, mengungkapkan serta memaksakan pandangan dengan cara positif.";
        } elseif ($kScore >= 8 && $kScore <= 9) {
            return "Terbuka, jujur, terus terang, asertif, agresif, reaktif, mudah tersinggung, mudah meledak, curiga, berprasangka, suka berkelahi atau berkonfrontasi, berpikir negatif.";
        } else {
            return "Deskripsi tidak tersedia.";
        }
    }
}
