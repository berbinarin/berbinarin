<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Database\Seeders\PsikotestPaid\BAUM\QuestionBaumSeeder;
use Database\Seeders\PsikotestPaid\DAP\QuestionDapSeeder;
use Database\Seeders\PsikotestPaid\OCEAN\DimensionOceanSeeder;
use Database\Seeders\PsikotestPaid\OCEAN\QuestionOceanSeeder;
use Database\Seeders\PsikotestPaid\SSCT\QuestionSsctSeeder;
use Database\Seeders\PsikotestPaid\TesEsai\QuestionTesEsaiSeeder;
use Database\Seeders\PsikotestPaid\UserPsikotestPaidSeeder;
use Illuminate\Database\Seeder;
use App\Models\PsikotestPaid\CategoryPsikotestType;
use Database\Seeders\PsikotestPaid\PsikotestToolSeeder;
use Database\Seeders\PsikotestPaid\PsikotestTypeSeeder;
use Database\Seeders\PsikotestPaid\CategoryPsikotestTypeSeeder;
use Database\Seeders\PsikotestPaid\PapiKostick\QuestionPapiKostickSeeder;
use Database\Seeders\PsikotestPaid\VAK\CategoryQuestionVakSeeder;
use Database\Seeders\PsikotestPaid\VAK\QuestionVakSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            AdminSeeder::class,
            DimensionSeeder::class,
            QuestionSeeder::class,
            CategoryPsikotestTypeSeeder::class,
            PsikotestTypeSeeder::class,
            PsikotestToolSeeder::class,
            UserPsikotestPaidSeeder::class,
            QuestionPapiKostickSeeder::class,
            QuestionBaumSeeder::class,
            QuestionDapSeeder::class,
            QuestionTesEsaiSeeder::class,
            DimensionOceanSeeder::class,
            QuestionOceanSeeder::class,
            QuestionSsctSeeder::class,
            CategoryQuestionVakSeeder::class,
            QuestionVakSeeder::class,
            HiringSeeder::class,
        ]);
    }
}
