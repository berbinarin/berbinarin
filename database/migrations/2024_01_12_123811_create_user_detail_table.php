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
        Schema::create('user_detail', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("user_id");
            $table->enum("jenis_kelamin" ,['laki-laki','perempuan']);
            $table->string("tempat_lahir");
            $table->date("tanggal_lahir");
            $table->string("suku_bangsa");
            $table->enum("agama" ,['islam','kristen katholik','kristen protestan','hindu','budha','konghucu']);
            $table->enum("status_pernikahan" ,['menikah','belum menikah','berpisah']);
            $table->string("anak_ke-_dari_berapa_bersaudara");
            $table->string("alamat_domisili_saat_ini");
            $table->string("pendidikan_saat_ini");
          
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_detail');
    }
};
