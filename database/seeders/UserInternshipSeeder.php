<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserInternshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user_internships')->insert([
            [
                'position_id'                => 1,
                'email'                      => 'john.doe@example.com',
                'nama_lengkap'               => 'John Doe',
                'nama_panggilan'             => 'John',
                'tanggal_lahir'              => '2000-01-01',
                'no_whatsapp'                => '628123456789',
                'asal_kota'                  => 'Jakarta',
                'asal_pendidikan'            => 'Universitas ABC',
                'status_kelas'               => 'Mahasiswa',
                'jurusan'                    => 'Informatika',
                'akun_instagram'             => '@john_instagram',
                'akun_tiktok'                => '@john_tiktok',
                'akun_linkdin'               => 'linkedin.com/in/johndoe',
                'sumber_informasi'           => 'Instagram',
                'tautan_cv'                  => 'https://drive.google.com/file/d/123abc/view?usp=sharing',
                'tautan_portofolio'          => 'https://drive.google.com/file/d/abc123/view?usp=sharing',
                'tautan_berkas_ss'           => 'https://drive.google.com/file/d/xyz123/view?usp=sharing',
                'motivasi'                   => 'Ingin menambah pengalaman kerja di bidang digital.',
                'is_process'                 => true,
                'status_tidak_dapat_diproses'=> 'Pilih',
                'status_catatan'             => 'Pilih',
                'status_progress'            => 'Pilih',
                'created_at'                 => now(),
                'updated_at'                 => now(),
            ],
            [
                'position_id'                => 2,
                'email'                      => 'jane.smith@example.com',
                'nama_lengkap'               => 'Jane Smith',
                'nama_panggilan'             => 'Jane',
                'tanggal_lahir'              => '1999-03-10',
                'no_whatsapp'                => '628987654321',
                'asal_kota'                  => 'Bandung',
                'asal_pendidikan'            => 'Universitas XYZ',
                'status_kelas'               => 'Fresh Graduate',
                'jurusan'                    => 'Manajemen',
                'akun_instagram'             => '@jane_insta',
                'akun_tiktok'                => '@jane_tiktok',
                'akun_linkdin'               => 'linkedin.com/in/janesmith',
                'sumber_informasi'           => 'LinkedIn',
                'tautan_cv'                  => 'https://drive.google.com/file/d/jane_cv/view?usp=sharing',
                'tautan_portofolio'          => 'https://drive.google.com/file/d/jane_portfolio/view?usp=sharing',
                'tautan_berkas_ss'           => 'https://drive.google.com/file/d/jane_ss/view?usp=sharing',
                'motivasi'                   => 'Tertarik mempelajari proses marketing digital.',
                'is_process'                 => true,
                'status_tidak_dapat_diproses'=> 'Pilih',
                'status_catatan'             => 'Pilih',
                'status_progress'            => 'Pilih',
                'created_at'                 => now(),
                'updated_at'                 => now(),
            ],
            [
                'position_id'                => 3,
                'email'                      => 'alex.johnson@example.com',
                'nama_lengkap'               => 'Alex Johnson',
                'nama_panggilan'             => 'Alex',
                'tanggal_lahir'              => '1998-07-15',
                'no_whatsapp'                => '628112233445',
                'asal_kota'                  => 'Surabaya',
                'asal_pendidikan'            => 'Politeknik DEF',
                'status_kelas'               => 'Fresh Graduate',
                'jurusan'                    => 'Desain Grafis',
                'akun_instagram'             => '@alex_insta',
                'akun_tiktok'                => '@alex_tiktok',
                'akun_linkdin'               => 'linkedin.com/in/alexjohnson',
                'sumber_informasi'           => 'Website Berbinar',
                'tautan_cv'                  => 'https://drive.google.com/file/d/alex_cv/view?usp=sharing',
                'tautan_portofolio'          => 'https://drive.google.com/file/d/alex_portfolio/view?usp=sharing',
                'tautan_berkas_ss'           => 'https://drive.google.com/file/d/alex_ss/view?usp=sharing',
                'motivasi'                   => 'Ingin mengeksplor lebih jauh tentang UI/UX design.',
                'is_process'                 => true,
                'status_tidak_dapat_diproses'=> 'Pilih',
                'status_catatan'             => 'Pilih',
                'status_progress'            => 'Pilih',
                'created_at'                 => now(),
                'updated_at'                 => now(),
            ],
        ]);
    }
}
