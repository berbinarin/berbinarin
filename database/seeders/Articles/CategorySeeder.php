<?php

namespace Database\Seeders\Articles;

use Illuminate\Database\Seeder;
use App\Models\Articles\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create(['name_category' => 'Teknologi', 'slug' => 'teknologi']);
        Category::create(['name_category' => 'Kesehatan', 'slug' => 'kesehatan']);
        Category::create(['name_category' => 'Pendidikan', 'slug' => 'pendidikan']);
    }
}
