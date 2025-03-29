<?php

namespace Database\Seeders\PsikotestPaid\EPI;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EpiQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('epi_questions')->insert([
            ['statement' => 'Apakah Anda selalu bersemangat?', 'category' => 'Extraversion', 'answer_key' => 'yes'],
            ['statement' => 'Apakah Anda sering membutuhkan kawan untuk membuat Anda gembira?', 'category' => 'Neuroticism', 'answer_key' => 'yes'],
            ['statement' => 'Apakah Anda adalah orang yang santai dan tidak terbebani oleh masalah?', 'category' => 'Extraversion', 'answer_key' => 'yes'],
            ['statement' => 'Apakah sangat sulit bagi Anda untuk menolak sesuatu?', 'category' => 'Neuroticism', 'answer_key' => 'yes'],
            ['statement' => 'Apakah Anda berpikir terlebih dahulu sebelum bertindak?', 'category' => 'Extraversion', 'answer_key' => 'no'],
            ['statement' => 'Jika Anda telah berjanji, sesulit apapun kondisinya apakah Anda akan merealisasikannya?', 'category' => 'Lie', 'answer_key' => 'yes'],
            ['statement' => 'Apakah suasana hati Anda berubah-ubah?', 'category' => 'Neuroticism', 'answer_key' => 'yes'],
            ['statement' => 'Apakah biasanya Anda melakukan dan mengatakan sesuatu dengan cepat, tanpa Anda pikirkan terlebih dahulu?', 'category' => 'Extraversion', 'answer_key' => 'yes'],
            ['statement' => 'Pernahkah Anda merasa sedih tanpa sebab yang jelas?', 'category' => 'Neuroticism', 'answer_key' => 'yes'],
            ['statement' => 'Apakah setiap tantangan akan Anda hadapi?', 'category' => 'Extraversion', 'answer_key' => 'yes'],
            ['statement' => 'Apakah Anda tiba-tiba merasa malu saat ingin berbicara dengan orang asing yang atraktif?', 'category' => 'Neuroticism', 'answer_key' => 'yes'],
            ['statement' => 'Apakah Anda kadang-kadang tidak dapat menahan kemarahan Anda?', 'category' => 'Lie', 'answer_key' => 'no'],
            ['statement' => 'Apakah Anda sering melakukan sesuatu secara tiba-tiba?', 'category' => 'Extraversion', 'answer_key' => 'yes'],
            ['statement' => 'Apakah Anda merasa khawatir akan tindakan atau perkataan Anda yang tidak semestinya Anda lakukan/ucapkan?', 'category' => 'Neuroticism', 'answer_key' => 'yes'],
            ['statement' => 'Apakah pada umumnya Anda lebih suka membaca daripada bermain-main?', 'category' => 'Extraversion', 'answer_key' => 'no'],
            ['statement' => 'Apakah perasaan Anda agak mudah tersinggung?', 'category' => 'Neuroticism', 'answer_key' => 'yes'],
            ['statement' => 'Apakah Anda suka sekali berpergian?', 'category' => 'Extraversion', 'answer_key' => 'yes'],
            ['statement' => 'Apakah Anda kadang-kadang mempunyai fikiran atau gangguan yang Anda tidak inginkan untuk diketahui oleh orang lain?', 'category' => 'Lie', 'answer_key' => 'no'],
            ['statement' => 'Apakah Anda kadang-kadang sangat bersemangat dan kadang-kadang sangat lesu?', 'category' => 'Neuroticism', 'answer_key' => 'yes'],
            ['statement' => 'Apakah Anda lebih suka mempunyai teman sedikit tapi betul-betul akrab?', 'category' => 'Extraversion', 'answer_key' => 'no'],
            ['statement' => 'Apakah Anda sering melamun?', 'category' => 'Neuroticism', 'answer_key' => 'yes'],
            ['statement' => 'Apakah Anda membalas membentak jika ada orang yang membentak kepada Anda?', 'category' => 'Extraversion', 'answer_key' => 'yes'],
            ['statement' => 'Apakah Anda sering terganggu perasaan bersalah?', 'category' => 'Neuroticism', 'answer_key' => 'yes'],
            ['statement' => 'Apakah semua kebiasaan Anda baik dan disukai?', 'category' => 'Lie', 'answer_key' => 'yes'],
            ['statement' => 'Apakah biasanya Anda dapat bergembira dalam suatu pesta yang meriah?', 'category' => 'Extraversion', 'answer_key' => 'yes'],
            ['statement' => 'Apakah Anda menganggap diri Anda tegang atau kaku?', 'category' => 'Neuroticism', 'answer_key' => 'yes'],
            ['statement' => 'Apakah orang lain menganggap diri Anda seorang yang bersemangat?', 'category' => 'Extraversion', 'answer_key' => 'yes'],
            ['statement' => 'Setelah Anda menyelesaikan sesuatu yang penting, apakah Anda sering merasa  seharusnya dapat mengerjakannya dengan lebih baik?', 'category' => 'Neuroticism', 'answer_key' => 'yes'],
            ['statement' => 'Apakah Anda lebih sering diam diri jika Anda ada bersama dengan orang lain?', 'category' => 'Extraversion', 'answer_key' => 'no'],
            ['statement' => 'Apakah Anda kadang-kadang suka bergosip?', 'category' => 'Lie', 'answer_key' => 'no'],
            ['statement' => 'Apakah Anda tidak dapat tertidur karena banyak pikiran di kepala Anda?', 'category' => 'Neuroticism', 'answer_key' => 'yes'],
            ['statement' => 'Jika ada sesuatu yang ingin Anda ketahui, apakah Anda lebih suka mencarinya di buku daripada menanyakannya kepada seseorang?', 'category' => 'Extraversion', 'answer_key' => 'no'],
            ['statement' => 'Apakah jantung Anda sering berdebar-debar?', 'category' => 'Neuroticism', 'answer_key' => 'yes'],
            ['statement' => 'Apakah Anda suka akan jenis pekerjaan yang membutuhkan kecermatan dan ketelitian?', 'category' => 'Extraversion', 'answer_key' => 'no'],
            ['statement' => 'Apakah Anda sering gemetar tanpa suatu sebab?', 'category' => 'Neuroticism', 'answer_key' => 'yes'],
            ['statement' => 'Apakah Anda akan 100% jujur tentang suatu hal penting, meskipun Anda tahu bahwa Anda tidak akan pernah ketahuan?', 'category' => 'Lie', 'answer_key' => 'yes'],
            ['statement' => 'Apakah Anda benci berkumpul bersama orang-orang suka mengolok-olok satu sama lain?', 'category' => 'Extraversion', 'answer_key' => 'no'],
            ['statement' => 'Apakah Anda orang yang mudah terpancing amarahnya?', 'category' => 'Neuroticism', 'answer_key' => 'yes'],
            ['statement' => 'Apakah Anda suka akan pekerjaan yang memerlukan kecepatan dalam bertindak?', 'category' => 'Extraversion', 'answer_key' => 'yes'],
            ['statement' => 'Apakah Anda mengkhawatirkan kejadian-kejadian yang kurang baik yang mungkin bisa terjadi?', 'category' => 'Neuroticism', 'answer_key' => 'yes'],
            ['statement' => 'Apakah Anda termasuk orang yang lambat dan tidak tergesa-gesa dalam bertindak?', 'category' => 'Extraversion', 'answer_key' => 'no'],
            ['statement' => 'Pernahkah Anda lambat dalam sebuah perjanjian atau pekerjaan?', 'category' => 'Lie', 'answer_key' => 'no'],
            ['statement' => 'Apakah Anda sering bermimpi buruk?', 'category' => 'Neuroticism', 'answer_key' => 'yes'],
            ['statement' => 'Apakah Anda sangat suka mengobrol dengan orang lain, sehingga Anda senang jika dapat mengobrol dengan orang asing?', 'category' => 'Extraversion', 'answer_key' => 'yes'],
            ['statement' => 'Apakah Anda merasa suka terganggu oleh perasaan sakit dan nyeri?', 'category' => 'Neuroticism', 'answer_key' => 'yes'],
            ['statement' => 'Apakah Anda  merasa sangat kesal, jika Anda  lama tidak bertemu dengan orang banyak?', 'category' => 'Extraversion', 'answer_key' => 'yes'],
            ['statement' => 'Apakah Anda menganggap diri Anda seorang yang gugup?', 'category' => 'Neuroticism', 'answer_key' => 'yes'],
            ['statement' => 'Dari semua kenalan Anda, apakah ada diantara mereka yang tidak Anda sukai?', 'category' => 'Lie', 'answer_key' => 'no'],
            ['statement' => 'Apakah Anda termasuk orang yang cukup percaya diri?', 'category' => 'Extraversion', 'answer_key' => 'yes'],
            ['statement' => 'Apakah Anda mudah tersinggung apabila orang lain tahu pekerjaan Anda salah?', 'category' => 'Neuroticism', 'answer_key' => 'yes'],
            ['statement' => 'Sulitkah bagi Anda untuk benar-benar menikmati pesta yang meriah?', 'category' => 'Extraversion', 'answer_key' => 'no'],
            ['statement' => 'Apakah Anda merasa terganggu karena tidak percaya diri?', 'category' => 'Neuroticism', 'answer_key' => 'yes'],
            ['statement' => 'Dapatkah Anda memeriahkan pesta yang membosankan?', 'category' => 'Extraversion', 'answer_key' => 'yes'],
            ['statement' => 'Apakah Anda kadang berbicara mengenai hal-hal yang tidak Anda ketahui?', 'category' => 'Lie', 'answer_key' => 'no'],
            ['statement' => 'Apakah Anda mengkhawatirkan kesehatan Anda?', 'category' => 'Neuroticism', 'answer_key' => 'yes'],
            ['statement' => 'Apakah Anda suka jahil pada orang lain?', 'category' => 'Extraversion', 'answer_key' => 'yes'],
            ['statement' => 'Apakah Anda menderita sulit tidur?', 'category' => 'Neuroticism', 'answer_key' => 'yes'],
        ]); 
    }
}
