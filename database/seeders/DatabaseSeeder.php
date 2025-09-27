<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\Dashboard_HR\DataJabatanSeeder;
use Database\Seeders\Dashboard_HR\DataStaffSeeder;
use Database\Seeders\PsikotestPaid\CategoryPsikotestTypeSeeder;
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

            // Psikotest Paid
            CategoryPsikotestTypeSeeder::class,
            
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
