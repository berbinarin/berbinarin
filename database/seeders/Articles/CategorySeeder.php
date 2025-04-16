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
        Category::create(['name_category' => 'Teknologi']);
        Category::create(['name_category' => 'Kesehatan']);
        Category::create(['name_category' => 'Pendidikan']);
        Category::create(['name_category' => 'Bisnis']);
    }
}