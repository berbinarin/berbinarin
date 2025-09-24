<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\EpiQuestion;
use Database\Seeders\PsikotestPaid\BAUM\QuestionBaumSeeder;
use Database\Seeders\PsikotestPaid\DAP\QuestionDapSeeder;
use Database\Seeders\PsikotestPaid\OCEAN\DimensionOceanSeeder;
use Database\Seeders\PsikotestPaid\OCEAN\QuestionOceanSeeder;
use Database\Seeders\PsikotestPaid\SSCT\QuestionSsctSeeder;
use Database\Seeders\PsikotestPaid\TesEsai\QuestionTesEsaiSeeder;
use Database\Seeders\PsikotestPaid\UserPsikotestPaidSeeder;
use Database\Seeders\PsikotestPaid\Biodata\LevelEducationSeeder;
use Database\Seeders\PsikotestPaid\Biodata\FamilyStatusSeeder;
use Database\Seeders\PsikotestPaid\Biodata\QuestionCategorySeeder;
use Illuminate\Database\Seeder;
use App\Models\PsikotestPaid\CategoryPsikotestType;
use Database\Seeders\Dashboard_HR\DataJabatanSeeder;
use Database\Seeders\Dashboard_HR\DataStaffSeeder;
use Database\Seeders\PsikotestPaid\Biodata\QuestionEsssaySeeder;
use Database\Seeders\PsikotestPaid\PsikotestToolSeeder;
use Database\Seeders\PsikotestPaid\PsikotestTypeSeeder;
use Database\Seeders\PsikotestPaid\CategoryPsikotestTypeSeeder;
use Database\Seeders\PsikotestPaid\PapiKostick\QuestionPapiKostickSeeder;
use Database\Seeders\PsikotestPaid\VAK\CategoryQuestionVakSeeder;
use Database\Seeders\PsikotestPaid\VAK\QuestionVakSeeder;
use Database\Seeders\PsikotestPaid\HTP\QuestionHtpSeeder;
use Database\Seeders\PsikotestPaid\EPI\EpiQuestionSeeder;
use Database\Seeders\Articles\AuthorSeeder;
use Database\Seeders\Articles\CategorySeeder;
use Database\Seeders\Articles\ArticleSeeder;
use Database\Seeders\KeluargaBerbinar\DivisiAndSubDivisiSeeder;
use Database\Seeders\KeluargaBerbinar\TableStaffSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            AdminSeeder::class,
            CategoryPsikotestTypeSeeder::class,
            UserPsikotestPaidSeeder::class,
            
            // Articles Seeder
            AuthorSeeder::class,
            CategorySeeder::class,
            ArticleSeeder::class,

            // Data test


            // hiring seeder
            HiringSeeder::class,
            // Dashboard
            DataStaffSeeder::class,
            DataJabatanSeeder::class,

            // Keluarga Berbinar
            DivisiAndSubDivisiSeeder::class,
            TableStaffSeeder::class,

        ]);
    }
}
