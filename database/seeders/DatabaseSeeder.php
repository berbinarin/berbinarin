<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
            QuestionPapiKostickSeeder::class,
            CategoryQuestionVakSeeder::class,
            QuestionVakSeeder::class
        ]);
    }
}
