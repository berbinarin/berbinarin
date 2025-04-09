<?php

namespace Database\Seeders\Articles;

use Illuminate\Database\Seeder;
use App\Models\Articles\Author;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Author::create([
            'name_author' => 'John Doe',
            'profil_image' => 'uploads/penulis/john_doe.jpg',
        ]);

        Author::create([
            'name_author' => 'Jane Smith',
            'profil_image' => 'uploads/penulis/jane_smith.jpg',
        ]);

        Author::create([
            'name_author' => 'Alice Johnson',
            'profil_image' => 'uploads/penulis/alice_johnson.jpg',
        ]);
    }
}