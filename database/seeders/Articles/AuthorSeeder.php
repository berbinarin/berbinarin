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
            'profil_image' => 'uploads/penulis/user1.png',
        ]);

        Author::create([
            'name_author' => 'Jane Smith',
            'profil_image' => 'uploads/penulis/user2.png',
        ]);

        Author::create([
            'name_author' => 'Alice Johnson',
            'profil_image' => 'uploads/penulis/user3.png',
        ]);
    }
}
