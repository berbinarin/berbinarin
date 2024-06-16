<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_internships', function (Blueprint $table) {
            $table->id();

            $table->string('email');
            $table->string('nama_lengkap');
            $table->string('nama_panggilan');
            $table->date('tanggal_lahir');
            $table->string('no_whatsapp');
            $table->string('asal_kota');
            $table->string('asal_pendidikan');
            $table->string('status_kelas');
            $table->string('jurusan');

            $table->string('akun_instagram');
            $table->string('akun_tiktok');
            $table->string('akun_linkdin');
            $table->string('sumber_informasi');
            
            $table->string('tautan_cv');
            $table->string('tautan_portofolio');
            $table->string('tautan_berkas_ss');

            $table->string('motivasi');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_internships');
    }
};
