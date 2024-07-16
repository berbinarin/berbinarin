<?php

namespace Database\Seeders\PsikotestPaid;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class QuestionPapiKostickSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('question_papi_kosticks')->insert([
            [
                'id' => 1,
                'a' => 'Saya seorang pekerja keras',
                'b' => 'Saya bukan seorang pemurung',
            ],
            [
                'id' => 2,
                'a' => 'Saya suka bekerja lebih baik dari orang lain',
                'b' => 'Saya suka menekuni pekerjaan yang saya lakukan sampai selesai',
            ],
            [
                'id' => 3,
                'a' => 'Saya suka memperagakan kepada orang lain bagaimana cara melakukan sesuatu',
                'b' => 'Saya ingin bekerja sebaik mungkin',
            ],
            [
                'id' => 4,
                'a' => 'Saya suka melakukan hal-hal yang lucu',
                'b' => 'Saya senang mengatakan kepada orang lain, apa yang harus dilakukannya',
            ],
            [
                'id' => 5,
                'a' => 'Saya suka berkumpul dalam kelompok',
                'b' => 'Saya suka jika diperhatikan oleh orang lain',
            ],
            [
                'id' => 6,
                'a' => 'Saya senang bersahabat intim',
                'b' => 'Saya suka berteman dalam suatu kelompok',
            ],
            [
                'id' => 7,
                'a' => 'Saya cepat berubah jika saya rasa diperlukan',
                'b' => 'Saya berusaha untuk intim dengan teman-teman',
            ],
            [
                'id' => 8,
                'a' => 'Saya suka membalas jika saya disakiti',
                'b' => 'Saya suka melakukan hal-hal yang baru dan berbeda',
            ],
            [
                'id' => 9,
                'a' => 'Saya ingin agar atasan menyukai saya',
                'b' => 'Saya suka memberitahui orang lain jika mereka salah',
            ],
            [
                'id' => 10,
                'a' => 'Saya suka mengikuti petunjuk-petunjuk yang diberikan pada saya',
                'b' => 'Saya suka menyenangkan atasan',
            ],
            [
                'id' => 11,
                'a' => 'Saya berusaha bekerja “keras” (sekuat tenaga)',
                'b' => 'Saya seorang yang teratur. Saya menaruh semua barang pada tempatnya',
            ],
            [
                'id' => 12,
                'a' => 'Saya dapat mempengaruhi orang lain untuk melakukan apa yang saya inginkan',
                'b' => 'Saya tidak mudah marah',
            ],
            [
                'id' => 13,
                'a' => 'Saya suka memberitahukan kepada kelompok tentang apa yang harus mereka kerjakan',
                'b' => 'Saya selalu menekuni suatu pekerjaan sampai selesai',
            ],
            [
                'id' => 14,
                'a' => 'Saya suka centil dan ingin diperhatikan',
                'b' => 'Saya ingin menjadi orang yang sangat berhasil',
            ],
            [
                'id' => 15,
                'a' => 'Saya ingin sesuai dan diterima dalam kelompok',
                'b' => 'Saya suka membantu orang lain mengambil keputusan',
            ],
            [
                'id' => 16,
                'a' => 'Saya cemas bila seseorang tidak menyukai saya',
                'b' => 'Saya suka bilang orang-orang memperhatikan saya',
            ],
            [
                'id' => 17,
                'a' => 'Saya suka mencoba hal-hal yang baru',
                'b' => 'Saya lebih suka bekerja bersama orang lain daripada sendiri',
            ],
            [
                'id' => 18,
                'a' => 'Saya kadang-kadang menyalahkan orang lain jika terjadi kesalahan',
                'b' => 'Saya merasa terganggu jika ada yang tidak menyukai saya',
            ],
            [
                'id' => 19,
                'a' => 'Saya suka membiarkan bila orang lain mengatur saya',
                'b' => 'Saya suka mencoba pekerjaan-pekerjaan yang baru dan berbeda',
            ],
            [
                'id' => 20,
                'a' => 'Saya menyukai petunjuk-petunjuk terperinci dalam menyelesaikan tugas',
                'b' => 'Bila saya terganggu oleh siapapun, saya akan memberitahukannya',
            ],
            [
                'id' => 21,
                'a' => 'Saya selalu bekerja “keras”',
                'b' => 'Saya suka melaksanakan setiap langkah dengan teliti',
            ],
            [
                'id' => 22,
                'a' => 'Saya akan menjadi seorang pemimpin yang baik',
                'b' => 'Saya dapat mengorganisir suatu pekerjaan dengan baik',
            ],
            [
                'id' => 23,
                'a' => 'Saya mudah tersinggung',
                'b' => 'Saya lambat dalam membuat keputusan',
            ],
            [
                'id' => 24,
                'a' => 'Saya suka mengerjakan beberapa pekerjaan sekaligus',
                'b' => 'Bila saya berada dalam suatu kelompok saya suka berdiam diri',
            ],
            [
                'id' => 25,
                'a' => 'Saya senang bila diundang',
                'b' => 'Saya ingin lebih baik dari yang lain dalam mengerjakan sesuatu',
            ],
            [
                'id' => 26,
                'a' => 'Saya suka berteman secara intim',
                'b' => 'Saya suka menasehati orang lain',
            ],
            [
                'id' => 27,
                'a' => 'Saya suka melakukan hal-hal yang baru dan berbeda',
                'b' => 'Saya suka menceritakan bagaimana saya berhasil melakukan sesuatu',
            ],
            [
                'id' => 28,
                'a' => 'Bila saya benar, saya suka mempertahankannya',
                'b' => 'Saya ingin diterima dan diakui dalam suatu kelompok',
            ],
            [
                'id' => 29,
                'a' => 'Saya tidak mau berbeda dengan orang lain',
                'b' => 'Saya berusaha untuk sangat intim dengan orang lain',
            ],
            [
                'id' => 30,
                'a' => 'Saya senang diberitahu bagaimana melakukan sesuatu pekerjaan',
                'b' => 'Saya mudah bosan',
            ],
            [
                'id' => 31,
                'a' => 'Saya bekerja “keras”',
                'b' => 'Saya banyak berpikir dan berencana',
            ],
            [
                'id' => 32,
                'a' => 'Saya memimpin kelompok',
                'b' => 'Hal-hal kecil (detail) menarik bagi saya',
            ],
            [
                'id' => 33,
                'a' => 'Saya dapat mengambil keputusan secara mudah dan tepat',
                'b' => 'Saya menyimpan barang-barang saya secara rapih dan teratur',
            ],
            [
                'id' => 34,
                'a' => 'Saya cepat dalam melaksanakan suatu pekerjaan',
                'b' => 'Saya tidak sering marah atau sedih',
            ],
            [
                'id' => 35,
                'a' => 'Saya ingin menjadi bagian dari kelompok',
                'b' => 'Saya hanya ingin melakukan satu pekerjaan pada suatu saat',
            ],
            [
                'id' => 36,
                'a' => 'Saya berusaha untuk intim dengan teman-teman saya',
                'b' => 'Saya berusaha keras menjadi yang terbaik',
            ],
            [
                'id' => 37,
                'a' => 'Saya suka mode terbaru untuk pakaian dan mobil',
                'b' => 'Saya suka bertanggungjawab bagi orang lain',
            ],
            [
                'id' => 38,
                'a' => 'Saya menyukai perdebatan',
                'b' => 'Saya suka mendapat perhatian',
            ],
            [
                'id' => 39,
                'a' => 'Saya senang diatur oleh orang lain',
                'b' => 'Saya tertarik menjadi bagian dari kelompok',
            ],
            [
                'id' => 40,
                'a' => 'Saya suka mengikuti peraturan dengan hati-hati',
                'b' => 'Saya suka orang mengenal saya dengan baik',
            ],
            [
                'id' => 41,
                'a' => 'Saya bekerja sangat “keras”',
                'b' => 'Saya mempunyai sifat bersahabat',
            ],
            [
                'id' => 42,
                'a' => 'Orang lain beranggapan bahwa saya adalah seorang pemimpin yang baik',
                'b' => 'Saya berpikir panjan dan berhati-hati',
            ],
            [
                'id' => 43,
                'a' => 'Saya sering mengambil kesempatan',
                'b' => 'Saya senang mengurus hal-hal kecil',
            ],
            [
                'id' => 44,
                'a' => 'Orang berpendapat bahwa saya bekerja cepat',
                'b' => 'Orang berpendapat bahwa saya rapi dan teratur',
            ],
            [
                'id' => 45,
                'a' => 'Saya senang permainan-permainan dan berolahraga',
                'b' => 'Saya mempunyai pribadi yang menyenangkan',
            ],
            [
                'id' => 46,
                'a' => 'Saya senang bila orang lain bersikap intim dan bersahabat',
                'b' => 'Saya selalu berusaha untuk menyelesaikan sesuatu yang telah saya mulai',
            ],
            [
                'id' => 47,
                'a' => 'Saya senang bereksperimen dan mencoba hal-hal baru',
                'b' => 'Saya suka melaksanakan suatu pekerjaan sulit dengan baik',
            ],
            [
                'id' => 48,
                'a' => 'Saya suka diperlakukan secara adil',
                'b' => 'Saya suka memberitahu orang lain bagaimana melaksanakan sesuatu',
            ],
            [
                'id' => 49,
                'a' => 'Saya suka melakukan apa yang diharapkan dari saya',
                'b' => 'Saya suka menarik perhatian',
            ],
            [
                'id' => 50,
                'a' => 'Saya suka petunjuk-petunjuk terperinci dalam melaksanakan suatu pekerjaan',
                'b' => 'Saya suka bertemu dengan orang lain',
            ],
            [
                'id' => 51,
                'a' => 'Saya selalu berusaha menyelesaikan pekerjaan secara sempurna',
                'b' => 'Saya menganggap bahwa di dalam bekerja sehari-hari saya tidak mengenal lelah',
            ],
            [
                'id' => 52,
                'a' => 'Saya adalah tipe seorang pemimpin',
                'b' => 'Saya mudah berteman',
            ],
            [
                'id' => 53,
                'a' => 'Saya memanfaatkan peluang-peluang yang ada',
                'b' => 'Saya banyak sekali berpikir',
            ],
            [
                'id' => 54,
                'a' => 'Saya bekerja dengan cara-cara yang selalu cepat',
                'b' => 'Saya senang bekerja dengan hal-hal kecil atau terperinci',
            ],
            [
                'id' => 55,
                'a' => 'Saya mempunyai banyak tenaga untuk berolahraga',
                'b' => 'Saya suka mengatur dan menyimpan barang-barang secara rapi dan teratur',
            ],
            [
                'id' => 56,
                'a' => 'Saya dapat bergaul baik dengan semua orang',
                'b' => 'Saya seorang yang “pandai mengendalikan diri”',
            ],
            [
                'id' => 57,
                'a' => 'Saya ingin bertemu dengan orang-orang baru dan melakukan hal-hal baru',
                'b' => 'Saya selalu ingin menyelesaikan pekerjaan yang telah saya mulai',
            ],
            [
                'id' => 58,
                'a' => 'Saya biasanya mempertahankan pendapat yang saya yakini',
                'b' => 'Saya biasanya suka bekerja “keras”',
            ],
            [
                'id' => 59,
                'a' => 'Saya suka saran-saran dari orang yang saya kagumi',
                'b' => 'Saya suka diatur oleh orang lain',
            ],
            [
                'id' => 60,
                'a' => 'Saya biarkan diri saya banyak dipengaruhi oleh orang lain',
                'b' => 'Saya suka jika mendapat banyak perhatian',
            ],
            [
                'id' => 61,
                'a' => 'Saya biasanya bekerja sangat “keras”',
                'b' => 'Saya biasanya bekerja cepat',
            ],
            [
                'id' => 62,
                'a' => 'Bila saya berbicara kelompok mendengarkan',
                'b' => 'Saya terampil menggunakan alat-alat kerja',
            ],
            [
                'id' => 63,
                'a' => 'Saya lambat didalam pergaulan',
                'b' => 'Saya lambat dalam membuat keputusan',
            ],
            [
                'id' => 64,
                'a' => 'Saya biasanya makan secara tepat',
                'b' => 'Saya suka membaca',
            ],
            [
                'id' => 65,
                'a' => 'Saya suka ganti-ganti pekerjaan',
                'b' => 'Saya suka pekerjaan yang dilakukan dengan hati-hati',
            ],
            [
                'id' => 66,
                'a' => 'Saya berteman sebanyak mungkin',
                'b' => 'Saya dapat menemukan kembali apa yang telah saya simpan',
            ],
            [
                'id' => 67,
                'a' => 'Saya merencanakan jauh-jauh sebelumnya',
                'b' => 'Saya selalu menyenangkan',
            ],
            [
                'id' => 68,
                'a' => 'Saya mempertahankan dengan bangga nama baik saya',
                'b' => 'Saya terus menekuni suatu masalah sampai selesai',
            ],
            [
                'id' => 69,
                'a' => 'Saya tunduk kepada orang-orang yang saya kagumi',
                'b' => 'Saya ingin sukses',
            ],
            [
                'id' => 70,
                'a' => 'Saya suka orang-orang lain yang membuat keputusan-keputusan kelompok',
                'b' => 'Saya suka membuat keputusan-keputusan untuk kelompok',
            ],
            [
                'id' => 71,
                'a' => 'Saya selalu bekerja “keras”',
                'b' => 'Saya mengambil keputusan secara cepat dan mudah',
            ],
            [
                'id' => 72,
                'a' => 'Kelompok biasanya melakukan apa yang saya inginkan',
                'b' => 'Saya biasanya bekerja cepat',
            ],
            [
                'id' => 73,
                'a' => 'Saya sering merasa lelah',
                'b' => 'Saya lambat dalam mengambil keputusan',
            ],
            [
                'id' => 74,
                'a' => 'Saya bekerja cepat',
                'b' => 'Saya mudah berteman',
            ],
            [
                'id' => 75,
                'a' => 'Saya biasanya mempunyai gairah dan tenaga',
                'b' => 'Saya banyak menghabiskan waktu dengan berpikir',
            ],
            [
                'id' => 76,
                'a' => 'Saya ramah terhadap orang',
                'b' => 'Saya suka pekerjaan yang memerlukan ketelitian',
            ],
            [
                'id' => 77,
                'a' => 'Saya banyak berpikir dan berencana',
                'b' => 'Saya suka pekerjaan yang memerlukan ketelitian',
            ],
            [
                'id' => 78,
                'a' => 'Saya suka pekerjaan yang menuntut hal-hal terperinci',
                'b' => 'Saya tidak mudah marah',
            ],
            [
                'id' => 79,
                'a' => 'Saya suka mengikuti orang-orang yang saya kagumi',
                'b' => 'Saya selalu menyelesaikan pekerjaan yang telah saya mulai',
            ],
            [
                'id' => 80,
                'a' => 'Saya suka petunjuk-petunjuk yang jelas',
                'b' => 'Saya suka bekerja “keras”',
            ],
            [
                'id' => 81,
                'a' => 'Saya mengejar apa yang saya inginkan',
                'b' => 'Saya seorang pemimpin yang baik',
            ],
            [
                'id' => 82,
                'a' => 'Saya dapat membuat orang lain bekerja keras',
                'b' => 'Saya adalah orang yang “senang hura-hura”',
            ],
            [
                'id' => 83,
                'a' => 'Saya mengambil keputusan secara cepat',
                'b' => 'Saya berbicara dengan cepat',
            ],
            [
                'id' => 84,
                'a' => 'Saya biasanya bekerja cepat',
                'b' => 'Saya berolahraga secara teratur',
            ],
            [
                'id' => 85,
                'a' => 'Saya tidak suka bertemu dengan orang lain',
                'b' => 'Saya cepat merasa lelah',
            ],
            [
                'id' => 86,
                'a' => 'Saya mempunyai banyak sekali teman',
                'b' => 'Saya banyak menghabiskan waktu dengan berpikir',
            ],
            [
                'id' => 87,
                'a' => 'Saya suka bekerja dengan teori',
                'b' => 'Saya suka bekerja dengan hal-hal terperinci',
            ],
            [
                'id' => 88,
                'a' => 'Saya suka bekerja dengan hal-hal terperinci',
                'b' => 'Saya suka mengorganisir pekerjaan saya',
            ],
            [
                'id' => 89,
                'a' => 'Saya menaruh barang pada tempatnya',
                'b' => 'Saya selalu menyenangkan',
            ],
            [
                'id' => 90,
                'a' => 'Saya suka diberitahu tentang apa yang perlu saya lakukan',
                'b' => 'Saya harus menyelesaikan apa yang saya mulai',
            ],
        ]);
    }
}
