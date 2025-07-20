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
        Schema::create('berbinar_for_u', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('email');
            $table->date('tanggal_lahir');
            $table->string('tempat_lahir');
            $table->string('alamat');
            $table->string('status_pernikahan');
            $table->enum('jenis_kelamin', ['laki-laki', 'perempuan']);
            $table->string('no_wa');
            $table->string('suku');
            $table->string('agama');
            $table->string('posisi_anak');
            $table->string('hobi');
            $table->string('pendidikan');
            $table->string('asal_sekolah');
            $table->string('riwayat_pekerjaan');
            $table->string('kegiatan_sosial');
            $table->string('cerita');
            $table->string('kategori')->default('berbinar-for-u');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('berbinar_for_u');
    }
};
