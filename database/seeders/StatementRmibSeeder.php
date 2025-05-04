<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatementRmibSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Subtest A
        DB::table('statement_rmib')->insert([
            [
                'question_rmib_id' => 1,
                'category_statement_rmib_id' => 1,
                'question_order' => 1,
                'male_statement' => 'Menyetir mobil antar-jemput dari satu tempat ke tempat lain bagi para anggota yang sibuk dengan urusan,  dari satu tempat ke tempat lain.',
                'female_statement' => 'Menyetir mobil antar-jemput para anggota yang sibuk dengan urusan, dari satu tempat ke tempat lain.',
            ],
            [
                'question_rmib_id' => 1,
                'category_statement_rmib_id' => 2,
                'question_order' => 2,
                'male_statement' => 'Mempelajari cara memperbaiki kerusakan-kerusakan ringan pada mesin mobil yang siap dipakai tim.',
                'female_statement' => 'Mempelajari cara memperbaiki kerusakan-kerusakan ringan pada mesin mobil yang siap dipakai tim.',
            ],
            [
                'question_rmib_id' => 1,
                'category_statement_rmib_id' => 3,
                'question_order' => 3,
                'male_statement' => 'Merencanakan anggaran belanja proyek perjalanan yang akan diajukan kepada sponsor.',
                'female_statement' => 'Merencanakan anggaran belanja proyek perjalanan yang akan diajukan kepada sponsor.',
            ],
            [
                'question_rmib_id' => 1,
                'category_statement_rmib_id' => 4,
                'question_order' => 4,
                'male_statement' => 'Membaca laporan-laporan penelitian KLH untuk memilih proyek KLH yang tepat.',
                'female_statement' => 'Membaca setumpuk laporan penelitian KLH untuk memilih proyek KLH yang tepat.',
            ],
            [
                'question_rmib_id' => 1,
                'category_statement_rmib_id' => 5,
                'question_order' => 5,
                'male_statement' => 'Menghadap sponsor untuk tawar-menawar dana di perusahaan "Supra Motor".',
                'female_statement' => 'Menjadi anggota delegasi yang menghadap ibu Direksi (sponsor) untuk tawar menawar dana.',
            ],
            [
                'question_rmib_id' => 1,
                'category_statement_rmib_id' => 6,
                'question_order' => 6,
                'male_statement' => 'Memilih berbagai khasanah lagu-lagu yang tepat bagi kampanye Kelestarian Lingkungan Hidup.',
                'female_statement' => 'Membuat gambar, simbol dan logo untuk tim WKN.',
            ],
            [
                'question_rmib_id' => 1,
                'category_statement_rmib_id' => 7,
                'question_order' => 7,
                'male_statement' => 'Merancang simbol dan logo untuk peralatan tim WKN.',
                'female_statement' => 'Memilih aransemen lagu-lagu yang tepat bagi kampanye Kelestarian Lingkungan Hidup.',
            ],
            [
                'question_rmib_id' => 1,
                'category_statement_rmib_id' => 8,
                'question_order' => 8,
                'male_statement' => 'Menyiapkan bacaan populer dan membuat kliping dari koran/majalah.',
                'female_statement' => 'Menyiapkan bacaan-bacaan populer KLH untuk tingkat remaja.',
            ],
            [
                'question_rmib_id' => 1,
                'category_statement_rmib_id' => 9,
                'question_order' => 9,
                'male_statement' => 'Menjadi penghubung dengan kelompok WKN lain (karena memiliki banyak teman/kenalan).',
                'female_statement' => 'Menjadi penghubung dengan kelompok WKN lain (karena memiliki banyak teman/kenalan).',
            ],
            [
                'question_rmib_id' => 1,
                'category_statement_rmib_id' => 10,
                'question_order' => 10,
                'male_statement' => 'Mencatat hasil, menyusun, dan menyimpan arsip.',
                'female_statement' => 'Mencatat rencana-rencana, menyusun, dan menyimpan sebagai arsip.',
            ],
            [
                'question_rmib_id' => 1,
                'category_statement_rmib_id' => 11,
                'question_order' => 11,
                'male_statement' => 'Menyiapkan peralatan makan dan bahan.',
                'female_statement' => 'Menyiapkan peralatan makan dan bahan makanan/perbekalan.',
            ],
            [
                'question_rmib_id' => 1,
                'category_statement_rmib_id' => 12,
                'question_order' => 12,
                'male_statement' => 'Menyiapkan peralatan kedokteran, P3K, dan obat-obatan.',
                'female_statement' => 'Menyiapkan peralatan kedokteran dan obat-obatan bagi hewan dan manusia.',
            ],
        ]);

        // Subtest B
        DB::table('statement_rmib')->insert([
            [
                'question_rmib_id' => 2,
                'category_statement_rmib_id' => 2,
                'question_order' => 1,
                'male_statement' => 'Menservis mesin disel dan mensolder komponen panel-panel pengatur lampu iklan.',
                'female_statement' => 'Meminyaki mesin jahit yang dipakai untuk permak pakaian yang dibazarkan.'
            ],
            [
                'question_rmib_id' => 2,
                'category_statement_rmib_id' => 3,
                'question_order' => 2,
                'male_statement' => 'Menghitung pengeluaran dan pemasukan bazar (dan 20% hasil penjualannya).',
                'female_statement' => 'Menghitung pengeluaran dan pemasukan bazar (dan 20% hasil penjualannya).'
            ],
            [
                'question_rmib_id' => 2,
                'category_statement_rmib_id' => 4,
                'question_order' => 3,
                'male_statement' => 'Meneliti ulat dan kutu yang telah menyerang gudang barang-barang yang akan dibazarkan.',
                'female_statement' => 'Bekerja di laboratorium meneliti kemurnian insektisida yang akan "dibazarkan".'
            ],
            [
                'question_rmib_id' => 2,
                'category_statement_rmib_id' => 5,
                'question_order' => 4,
                'male_statement' => 'Menggunakan pengeras suara untuk menarik pengunjung agar membeli.',
                'female_statement' => 'Menggunakan pengeras suara untuk menarik pengunjung agar membeli.'
            ],
            [
                'question_rmib_id' => 2,
                'category_statement_rmib_id' => 6,
                'question_order' => 5,
                'male_statement' => 'Merancang dan menggambar papan reklame bazar.',
                'female_statement' => 'Melukis papan reklame bazar menggunakan kuas dan cat.'
            ],
            [
                'question_rmib_id' => 2,
                'category_statement_rmib_id' => 7,
                'question_order' => 6,
                'male_statement' => 'Menggubah lagu-lagu yang tepat dan memikat untuk iklan bazar yang disiarkan melalui radio.',
                'female_statement' => 'Mengarang lagu-lagu KLH sederhana, yang mudah ditiru anak-anak kecil untuk disiarkan melalui radio.'
            ],
            [
                'question_rmib_id' => 2,
                'category_statement_rmib_id' => 8,
                'question_order' => 7,
                'male_statement' => 'Mengarang sajak-sajak jenaka untuk dibacakan guna memeriahkan acara bazar.',
                'female_statement' => 'Memilih sajak-sajak jenaka untuk memeriahkan acara bazar.'
            ],
            [
                'question_rmib_id' => 2,
                'category_statement_rmib_id' => 9,
                'question_order' => 8,
                'male_statement' => 'Membantu para pengunjung mengisi daftar pesanan barang yang perlu diantar ke rumah.',
                'female_statement' => 'Membantu para pengunjung mengisi daftar pesanan barang yang perlu diantar ke rumah.'
            ],
            [
                'question_rmib_id' => 2,
                'category_statement_rmib_id' => 10,
                'question_order' => 9,
                'male_statement' => 'Mengetik undangan khusus untuk para pejabat/jutawan.',
                'female_statement' => 'Mengetik undangan khusus untuk para pejabat/jutawan.'
            ],
            [
                'question_rmib_id' => 2,
                'category_statement_rmib_id' => 11,
                'question_order' => 10,
                'male_statement' => 'Memasang tenda, spanduk rumbai-rumbai, dan bendera.',
                'female_statement' => 'Memasak dan mengatur meja makanan di kafetaria.'
            ],
            [
                'question_rmib_id' => 2,
                'category_statement_rmib_id' => 12,
                'question_order' => 11,
                'male_statement' => 'Membantu dokter melayani pengobatan gratis bagi pengunjung.',
                'female_statement' => 'Menjadi asisten/pembantu dokter dalam rangka pengobatan gratis bagi pengunjung.'
            ],
            [
                'question_rmib_id' => 2,
                'category_statement_rmib_id' => 1,
                'question_order' => 12,
                'male_statement' => 'Menjaga keamanan di halaman gedung, siap dengan "halo-halo" (walkie-talkie).',
                'female_statement' => 'Menjaga keamanan anak-anak yang sedang bermain di halaman gedung.'
            ],
        ]);

        // Subtest C
        DB::table('statement_rmib')->insert([
            [
                'question_rmib_id' => 3,
                'category_statement_rmib_id' => 3,
                'question_order' => 1,
                'male_statement' => 'Melakukan perhitungan biaya pembenahan Wisma.',
                'female_statement' => 'Mengukur panjang dan lebarnya kain gorden dan permadani yang dibutuhkan di Wisma.'
            ],
            [
                'question_rmib_id' => 3,
                'category_statement_rmib_id' => 4,
                'question_order' => 2,
                'male_statement' => 'Meneliti apakah ular-ular yang berkeliaran di wisma berbisa.',
                'female_statement' => 'Memeriksa di laboratorium air sumur Wisma yang berbau busuk, yang diduga terkena pencemaran.'
            ],
            [
                'question_rmib_id' => 3,
                'category_statement_rmib_id' => 5,
                'question_order' => 3,
                'male_statement' => 'Menghadap Pak Camat untuk meyakinkan beliau bahwa meskipun mahal, proyek pembenahan Wisma tersebut masih seimbang dari segi manfaat.',
                'female_statement' => 'Menghimbau Ibu Camat dan ibu-ibu PKK untuk membantu pembenahan wisma.'
            ],
            [
                'question_rmib_id' => 3,
                'category_statement_rmib_id' => 6,
                'question_order' => 4,
                'male_statement' => 'Menggambar sketsa tokoh-tokoh KLH.',
                'female_statement' => 'Menyiapkan gambar sketsa perubahan dekorasi tata ruang. '
            ],
            [
                'question_rmib_id' => 3,
                'category_statement_rmib_id' => 7,
                'question_order' => 5,
                'male_statement' => 'Membuat aransemen lagu "Lestarikan Lingkunganku" yang akan dimainkan Band Musik Remaja Depok.',
                'female_statement' => 'Memilih aransemen lagu "Lestarikan Lingkunganku" yang akan dimainkan Band Musik Remaja Depok.'
            ],
            [
                'question_rmib_id' => 3,
                'category_statement_rmib_id' => 8,
                'question_order' => 6,
                'male_statement' => 'Menulis puisi yang mendukung KLH untuk lomba deklarasi anak-anak/remaja Depok.',
                'female_statement' => 'Menulis puisi yang mendukung KLH untuk lomba deklarasi anak-anak/remaja Depok.'
            ],
            [
                'question_rmib_id' => 3,
                'category_statement_rmib_id' => 9,
                'question_order' => 7,
                'male_statement' => 'Menyambut penduduk yang datang di Wisma untuk berdiskusi mengenai pencemaran lingkungan.',
                'female_statement' => 'Menerima tamu-tamu siswa setempat yang meminta informasi mengenai KLH.'
            ],
            [
                'question_rmib_id' => 3,
                'category_statement_rmib_id' => 10,
                'question_order' => 8,
                'male_statement' => 'Menyimpan arsip surat-surat dan rekening-rekening.',
                'female_statement' => 'Menyimpan arsip surat-surat dan rekening-rekening tagihan.'
            ],
            [
                'question_rmib_id' => 3,
                'category_statement_rmib_id' => 11,
                'question_order' => 9,
                'male_statement' => 'Mengecat tembok Wisma.',
                'female_statement' => 'Membersihkan wisma dan perkakas rumah tangga.'
            ],
            [
                'question_rmib_id' => 3,
                'category_statement_rmib_id' => 12,
                'question_order' => 10,
                'male_statement' => 'Mengobati penduduk Depok yang menderita gatal-gatal.',
                'female_statement' => 'Mengobati penduduk Depok yang menderita gatal-gatal di tenggorokan.'
            ],
            [
                'question_rmib_id' => 3,
                'category_statement_rmib_id' => 1,
                'question_order' => 11,
                'male_statement' => 'Mengatur letak batu-batuan dalam kolam di halaman Wisma.',
                'female_statement' => 'Mengatur tanaman di kolam di halaman Wisma.'
            ],
            [
                'question_rmib_id' => 3,
                'category_statement_rmib_id' => 2,
                'question_order' => 12,
                'male_statement' => 'Memperbaiki pompa air yang macet karena lama tidak dipakai.',
                'female_statement' => 'Memasang kembali kran air yang dicopot karena lama tidak dipakai.'
            ],
        ]);

        // Subtest D
        DB::table('statement_rmib')->insert([
            [
                'question_rmib_id' => 4,
                'category_statement_rmib_id' => 4,
                'question_order' => 1,
                'male_statement' => 'Memeriksa unsur-unsur kimiawi air limbah membusuk yang diduga tercemar.',
                'female_statement' => 'Memeriksa penyakit hewan yang minum air sungai yang tercampur limbah industri.'
            ],
            [
                'question_rmib_id' => 4,
                'category_statement_rmib_id' => 5,
                'question_order' => 2,
                'male_statement' => 'Menjadi anggota utusan yang menghimbau direksi pabrik agar memperbaiki pengolahan limbah.',
                'female_statement' => 'Menjadi anggota utusan yang menghimbau direksi pabrik agar memperbaiki pengolahan limbah.'
            ],
            [
                'question_rmib_id' => 4,
                'category_statement_rmib_id' => 6,
                'question_order' => 3,
                'male_statement' => 'Merancang/menggambar poster dan spanduk kampanye menggunakan cat minyak.',
                'female_statement' => 'Merancang gambar, poster, dan spanduk kampanye.'
            ],
            [
                'question_rmib_id' => 4,
                'category_statement_rmib_id' => 7,
                'question_order' => 4,
                'male_statement' => 'Menggubah lagu sederhana kampanye penghijauan.',
                'female_statement' => 'Mengarang lagu sederhana kampanye penghijauan.'
            ],
            [
                'question_rmib_id' => 4,
                'category_statement_rmib_id' => 8,
                'question_order' => 5,
                'male_statement' => 'Menyiapkan kata-kata brosur dan selebaran Kampanye Penghijauan dan Keluarga Berencana.',
                'female_statement' => 'Menyiapkan kata-kata penerangan melalui radio.'
            ],
            [
                'question_rmib_id' => 4,
                'category_statement_rmib_id' => 9,
                'question_order' => 6,
                'male_statement' => 'Memberi penjelasan kepada para pengunjung pameran.',
                'female_statement' => 'Memberi penjelasan kepada para siswa SMA yang mengunjungi pameran.'
            ],
            [
                'question_rmib_id' => 4,
                'category_statement_rmib_id' => 10,
                'question_order' => 7,
                'male_statement' => 'Mengetik naskah dan memperbanyak naskah.',
                'female_statement' => 'Mengetik naskah dan membantu tata usaha.'
            ],
            [
                'question_rmib_id' => 4,
                'category_statement_rmib_id' => 11,
                'question_order' => 8,
                'male_statement' => 'Mengatur meja, kursi, dan lemari pameran.',
                'female_statement' => 'Mengatur meja, kursi, dan lemari pameran.'
            ],
            [
                'question_rmib_id' => 4,
                'category_statement_rmib_id' => 12,
                'question_order' => 9,
                'male_statement' => 'Menjadi "mantri kesehatan" di puskesmas setempat.',
                'female_statement' => 'Menjadi anggota "tim kesehatan" yang mengobati penduduk yang sakit kulit akibat pencemaran air.'
            ],
            [
                'question_rmib_id' => 4,
                'category_statement_rmib_id' => 1,
                'question_order' => 10,
                'male_statement' => 'Menanamkan pohon-pohon lindung di jalur hijau.',
                'female_statement' => 'Menanamkan bibit semak atau perdu di jalur hijau.'
            ],
            [
                'question_rmib_id' => 4,
                'category_statement_rmib_id' => 2,
                'question_order' => 11,
                'male_statement' => 'Merakit dan memasang pompa air bersih untuk penduduk.',
                'female_statement' => 'Merakit saringan air bersih untuk penduduk. '
            ],
            [
                'question_rmib_id' => 4,
                'category_statement_rmib_id' => 3,
                'question_order' => 12,
                'male_statement' => 'Membantu penduduk menghitung ganti rugi akibat pencemaran.',
                'female_statement' => 'Membantu menghitung besarnya ganti rugi bagi penduduk yang terkena pencemaran. '
            ],
        ]);

        // Subtest E
        DB::table('statement_rmib')->insert([
            [
                'question_rmib_id' => 5,
                'category_statement_rmib_id' => 5,
                'question_order' => 1,
                'male_statement' => 'Juri lomba pidato mengenai KLH.',
                'female_statement' => 'Juri lomba pidato mengenai KLH.'
            ],
            [
                'question_rmib_id' => 5,
                'category_statement_rmib_id' => 6,
                'question_order' => 2,
                'male_statement' => 'Juri lomba seni lukis dan seni patung.',
                'female_statement' => 'Juri lomba seni merangkai bunga.'
            ],
            [
                'question_rmib_id' => 5,
                'category_statement_rmib_id' => 7,
                'question_order' => 3,
                'male_statement' => 'Juri lomba memainkan instrumen musik daerah.',
                'female_statement' => 'Juri lomba menyanyi lagu daerah.'
            ],
            [
                'question_rmib_id' => 5,
                'category_statement_rmib_id' => 8,
                'question_order' => 4,
                'male_statement' => 'Juri lomba deklamasi puisi/membaca prosa KLH.',
                'female_statement' => 'Juri lomba merangkai kata-kata menjadi cerita KLH.'
            ],
            [
                'question_rmib_id' => 5,
                'category_statement_rmib_id' => 9,
                'question_order' => 5,
                'male_statement' => 'Juri "10 Remaja Pria yang pandai bergaul".',
                'female_statement' => 'Juri lomba "Remaja Putri Ngetop dan Bergaul"'
            ],
            [
                'question_rmib_id' => 5,
                'category_statement_rmib_id' => 10,
                'question_order' => 6,
                'male_statement' => 'Juri lomba mengetik cepat dan rapih.',
                'female_statement' => 'Juri lomba mengetik cepat dan rapih.'
            ],
            [
                'question_rmib_id' => 5,
                'category_statement_rmib_id' => 11,
                'question_order' => 7,
                'male_statement' => 'Juri lomba memasak nasi goreng dan mie instan.',
                'female_statement' => 'Juri lomba memasak nasi goreng paling istimewa.'
            ],
            [
                'question_rmib_id' => 5,
                'category_statement_rmib_id' => 12,
                'question_order' => 8,
                'male_statement' => 'Juri lomba Palang Merah Remaja dan dokter kecil.',
                'female_statement' => 'Juri lomba PPPK dan Palang Merah Remaja.'
            ],
            [
                'question_rmib_id' => 5,
                'category_statement_rmib_id' => 1,
                'question_order' => 9,
                'male_statement' => 'Juri lomba voli dan sepak bola.',
                'female_statement' => 'Juri lomba voli.'
            ],
            [
                'question_rmib_id' => 5,
                'category_statement_rmib_id' => 2,
                'question_order' => 10,
                'male_statement' => 'Juri lomba matematika SD.',
                'female_statement' => 'Juri lomba menambal ban sepeda.'
            ],
            [
                'question_rmib_id' => 5,
                'category_statement_rmib_id' => 3,
                'question_order' => 11,
                'male_statement' => 'Juri lomba pidato mengenai KLH.',
                'female_statement' => 'Juri lomba matematika murid SD.'
            ],
            [
                'question_rmib_id' => 5,
                'category_statement_rmib_id' => 4,
                'question_order' => 12,
                'male_statement' => 'Juri lomba penelitian populer.',
                'female_statement' => 'Juri lomba proyek observasi IPA.'
            ],
        ]);

        // Subtest F
        DB::table('statement_rmib')->insert([
            [
                'question_rmib_id' => 6,
                'category_statement_rmib_id' => 6,
                'question_order' => 1,
                'male_statement' => 'Mengajar seni lukis dan seni patung.',
                'female_statement' => 'Mengajar menggambar dengan cat air.'
            ],
            [
                'question_rmib_id' => 6,
                'category_statement_rmib_id' => 7,
                'question_order' => 2,
                'male_statement' => 'Mengajar memainkan musik dan menyanyi.',
                'female_statement' => 'Mengajar memainkan angklung/kulintang.'
            ],
            [
                'question_rmib_id' => 6,
                'category_statement_rmib_id' => 8,
                'question_order' => 3,
                'male_statement' => 'Mengajar bahasa dan mengarang.',
                'female_statement' => 'Mengajar mengarang mengenai KLH.'
            ],
            [
                'question_rmib_id' => 6,
                'category_statement_rmib_id' => 9,
                'question_order' => 4,
                'male_statement' => 'Mengajar mata pelajaran agama.',
                'female_statement' => 'Menggantikan tugas guru Agama.'
            ],
            [
                'question_rmib_id' => 6,
                'category_statement_rmib_id' => 10,
                'question_order' => 5,
                'male_statement' => 'Mengajar mengetik surat.',
                'female_statement' => 'Mengajar anak-anak menulis dengan mesin ketik.'
            ],
            [
                'question_rmib_id' => 6,
                'category_statement_rmib_id' => 11,
                'question_order' => 6,
                'male_statement' => 'Mengajar prakarya.',
                'female_statement' => 'Mengajar memasak lauk pauk sederhana.'
            ],
            [
                'question_rmib_id' => 6,
                'category_statement_rmib_id' => 12,
                'question_order' => 7,
                'male_statement' => 'Mengajar teknik merawat orang sakit.',
                'female_statement' => 'Mengajar cara membersihkan luka yang infeksi.'
            ],
            [
                'question_rmib_id' => 6,
                'category_statement_rmib_id' => 1,
                'question_order' => 8,
                'male_statement' => 'Mengajar olahraga dan sepak bola.',
                'female_statement' => 'Mengajar olah raga.'
            ],
            [
                'question_rmib_id' => 6,
                'category_statement_rmib_id' => 2,
                'question_order' => 9,
                'male_statement' => 'Mengajar penggunaan alat-alat pertukangan sederhana.',
                'female_statement' => 'Mengajar murid-murid merakit serutan pensil.'
            ],
            [
                'question_rmib_id' => 6,
                'category_statement_rmib_id' => 3,
                'question_order' => 10,
                'male_statement' => 'Mengajar berhitung.',
                'female_statement' => 'Mengajar berhitung praktis.'
            ],
            [
                'question_rmib_id' => 6,
                'category_statement_rmib_id' => 4,
                'question_order' => 11,
                'male_statement' => 'Mengajar ilmu hewan dan ilmu tumbuh-tumbuhan.',
                'female_statement' => 'Mengajar ilmu hewan dan ilmu tumbuh-tumbuhan.'
            ],
            [
                'question_rmib_id' => 6,
                'category_statement_rmib_id' => 5,
                'question_order' => 12,
                'male_statement' => 'Menjelaskan seluk beluk koperasi (IPS).',
                'female_statement' => 'Mengajar dasar-dasar koperasi sekolah. '
            ],
        ]);

        // Subtest G
        DB::table('statement_rmib')->insert([
            [
                'question_rmib_id' => 7,
                'category_statement_rmib_id' => 7,
                'question_order' => 1,
                'male_statement' => 'Menjadi pianis/gitaris "Band Musik".',
                'female_statement' => 'Menjadi pianis/gitaris "Band Musik".'
            ],
            [
                'question_rmib_id' => 7,
                'category_statement_rmib_id' => 8,
                'question_order' => 2,
                'male_statement' => 'Menjadi asisten pengarang yang membuatkan teks undangan berbentuk puisi yang  indah.',
                'female_statement' => 'Menjadi asisten pengarang yang membuatkan teks undangan berbentuk puisi yang  aduhai.'
            ],
            [
                'question_rmib_id' => 7,
                'category_statement_rmib_id' => 9,
                'question_order' => 3,
                'male_statement' => 'Menyambut tamu dan menunjukkan tempat penginapan masing-masing.',
                'female_statement' => 'Menyambut tamu dan menyilahkan mengisi formulir kedatangan dan buku tamu.'
            ],
            [
                'question_rmib_id' => 7,
                'category_statement_rmib_id' => 10,
                'question_order' => 4,
                'male_statement' => 'Menjadi sekretaris yang bertugas mengetik nama tamu yang telah hadir.',
                'female_statement' => 'Menjadi Sekretaris, yang mencatat dan menyimpan formulir kedatangan untuk keperluan penyidikan.'
            ],
            [
                'question_rmib_id' => 7,
                'category_statement_rmib_id' => 11,
                'question_order' => 5,
                'male_statement' => 'Menjadi asisten utama koki untuk khusus tamu VIP.',
                'female_statement' => 'Menyiapkan hidangan dan mengedarkan makanan di antara bagi para tamu.'
            ],
            [
                'question_rmib_id' => 7,
                'category_statement_rmib_id' => 12,
                'question_order' => 6,
                'male_statement' => 'Menjadi perawat di pos kesehatan, terutama untuk penyakit gawat darurat (jantung, kecelakaan, dsb).',
                'female_statement' => 'Menjadi perawat yang siap di Pos Kesehatan Darurat bagi para tamu. '
            ],
            [
                'question_rmib_id' => 7,
                'category_statement_rmib_id' => 1,
                'question_order' => 7,
                'male_statement' => 'Petugas pengatur lalu lintas mobil-mobil jemputan.',
                'female_statement' => 'Menjadi petugas (Polwan) yang mengatur lalu lintas mobil tamu-tamu.'
            ],
            [
                'question_rmib_id' => 7,
                'category_statement_rmib_id' => 2,
                'question_order' => 8,
                'male_statement' => 'Menjaga disel pembangkit listrik yang sering mogok.',
                'female_statement' => 'Siap menyekrup di tempat yang tersedia papan-papan nama tamu-tamu yang telah datang.'
            ],
            [
                'question_rmib_id' => 7,
                'category_statement_rmib_id' => 3,
                'question_order' => 9,
                'male_statement' => 'Juru bayar rekening pesta.',
                'female_statement' => 'Menjadi kasir yang membayar semua rekening pesta.'
            ],
            [
                'question_rmib_id' => 7,
                'category_statement_rmib_id' => 4,
                'question_order' => 10,
                'male_statement' => 'Bekerja di laboratorium bahan makanan.',
                'female_statement' => 'Bekerja di laboratorium penyelidikan sidik jari para tamu.'
            ],
            [
                'question_rmib_id' => 7,
                'category_statement_rmib_id' => 5,
                'question_order' => 11,
                'male_statement' => 'Menjadi pengarah acara sambil mengimbau orang-orang dermawan untuk membantu  proyek KLH.',
                'female_statement' => 'Menjadi pengarah acara sambil mengimbau orang-orang dermawan untuk membantu proyek KLH.'
            ],
            [
                'question_rmib_id' => 7,
                'category_statement_rmib_id' => 6,
                'question_order' => 12,
                'male_statement' => 'Membuat patung besar SELAMAT DATANG dari tanah liat.',
                'female_statement' => 'Bersama-sama membuat patung dari bongkah es.'
            ],
        ]);

        // Subtest H
        DB::table('statement_rmib')->insert([
            [
                'question_rmib_id' => 8,
                'category_statement_rmib_id' => 8,
                'question_order' => 1,
                'male_statement' => 'Menulis karangan agar musibah ini mendapat perhatian masyarakat.',
                'female_statement' => 'Menulis Pikiran Pembaca agar musibah ini mendapat perhatian masyarakat.'
            ],
            [
                'question_rmib_id' => 8,
                'category_statement_rmib_id' => 9,
                'question_order' => 2,
                'male_statement' => 'Menenangkan mereka yang terkena musibah.',
                'female_statement' => 'Menenangkan mereka yang kebingungan karena terkena musibah.'
            ],
            [
                'question_rmib_id' => 8,
                'category_statement_rmib_id' => 10,
                'question_order' => 3,
                'male_statement' => 'Mengetik surat jalan bagi mereka yang ingin mengungsi ke luar daerah.',
                'female_statement' => 'Mengetik daftar nama korban yang memerlukan bantuan.'
            ],
            [
                'question_rmib_id' => 8,
                'category_statement_rmib_id' => 11,
                'question_order' => 4,
                'male_statement' => 'Memasang tenda untuk penampungan mereka yang kehilangan tempat tinggal.',
                'female_statement' => 'Mengatur tempat-tempat tidur darurat untuk menampung mereka yang kehilangan tempat tinggal.'
            ],
            [
                'question_rmib_id' => 8,
                'category_statement_rmib_id' => 12,
                'question_order' => 5,
                'male_statement' => 'Membantu merawat mereka yang luka parah.',
                'female_statement' => 'Merawat mereka yang luka parah.'
            ],
            [
                'question_rmib_id' => 8,
                'category_statement_rmib_id' => 1,
                'question_order' => 6,
                'male_statement' => 'Membantu penggalian reruntuhan di lokasi/tempat musibah.',
                'female_statement' => 'Siap berada di sekitar reruntuhan lokasi/tempat musibah untuk membantu apapun juga. '
            ],
            [
                'question_rmib_id' => 8,
                'category_statement_rmib_id' => 2,
                'question_order' => 7,
                'male_statement' => 'Memasang kabel-kabel lampu darurat agar penggalian dapat berlangsung siang malam.',
                'female_statement' => 'Merakit lampu darurat agar penggalian dapat berlangsung siang-malam.'
            ],
            [
                'question_rmib_id' => 8,
                'category_statement_rmib_id' => 3,
                'question_order' => 8,
                'male_statement' => 'Menjadi kasir yang menyalurkan uang bantuan.',
                'female_statement' => 'Menjadi kasir yang membagikan uang bantuan kepada yang berhak.'
            ],
            [
                'question_rmib_id' => 8,
                'category_statement_rmib_id' => 4,
                'question_order' => 9,
                'male_statement' => 'Membawa berbagai peralatan untuk menyelidiki tempat-tempat yang rawan longsor.',
                'female_statement' => 'Membaca laporan-laporan mengenai kerawanan di daerah-daerah sekitar musibah untuk membantu perencanaan tindak lanjut.'
            ],
            [
                'question_rmib_id' => 8,
                'category_statement_rmib_id' => 5,
                'question_order' => 10,
                'male_statement' => 'Menghadap para multijutawan untuk meminta dana bantuan.',
                'female_statement' => 'Menghadap para jutawan untuk membahas pemberian bantuan.'
            ],
            [
                'question_rmib_id' => 8,
                'category_statement_rmib_id' => 6,
                'question_order' => 11,
                'male_statement' => 'Membuat gambar/patung untuk dijual oleh pencari dana.',
                'female_statement' => 'Membantu membuat patung peringatan terhadap terjadinya musibah.'
            ],
            [
                'question_rmib_id' => 8,
                'category_statement_rmib_id' => 7,
                'question_order' => 12,
                'male_statement' => 'Ikut sebagai pemain band untuk mencari dana kemanusiaan.',
                'female_statement' => 'Menjadi anggota paduan suara untuk mencari dana kemanusiaan.'
            ],
        ]);
    }
}
