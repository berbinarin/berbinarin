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
        Schema::create('konseling_peers_staff', function (Blueprint $table) {
            $table->id();
            $table->date("jadwal_tanggal");
            $table->string('jadwal_pukul'); 
            $table->string("nama");
            $table->string("email");
            $table->date("tanggal_Lahir");
            $table->string("tempat_lahir");
            $table->string("alamat");
            $table->integer('umur');
            $table->string("agama");
            $table->string("status_pernikahan");
            $table->string("no_wa");
            $table->string("suku");
            $table->string("posisi_anak");
            $table->string("hobi");
            $table->string("pendidikan");
            $table->string("riwayat_pekerjaan");
            $table->string("kegiatan_sosial");
            $table->string("divisi");
            $table->string("posisi");
            $table->string("topik_pengajuan");
            $table->string("cerita");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('konseling_peers_staff');
    }
};
