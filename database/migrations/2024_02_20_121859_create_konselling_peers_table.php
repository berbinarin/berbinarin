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
        Schema::create('konselling_peers', function (Blueprint $table) {
            $table->increments('id');
            $table->date("jadwal_tanggal");
            $table->string("jadwal_pukul");
            $table->enum("metode" ,['online','offline']);
            $table->string("nama");
            $table->string("no_wa");
            $table->string("email");
            $table->enum("jenis_kelamin" ,['Perempuan','Laki-laki']);
            $table->string("agama");
            $table->string("tempat_lahir");
            $table->date("tanggal_Lahir");
            $table->string("suku");
            $table->string("status_pernikahan");
            $table->longText("alamat");
            $table->string("posisi_anak");
            $table->longText("pendidikan");
            $table->longText("riwayat_pekerjaan");
            $table->string("hobi");
            $table->longText("kegiatan_sosial");
            $table->longText("cerita");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('konselling_peers');
    }
};

