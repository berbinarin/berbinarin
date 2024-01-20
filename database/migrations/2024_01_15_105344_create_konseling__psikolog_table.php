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
        Schema::create('konseling_psikolog', function (Blueprint $table) {
            $table->id();
            $table->date("jadwal_konseling");
            $table->enum("pelaksanaan" ,['online','offline( layanan untuk Kota Surabaya )']);
            $table->enum("persetujuan_pengisian_data" ,['setuju','tidak setuju']);
            $table->unsignedBigInteger("user_detail_id");
            $table->string("hal_yang_dikonsultasikan");
            $table->string("hobi_kegemaran");
            $table->string("kegiatan_luar_rumah_kegiatan_sosial");
            $table->foreign('user_detail_id')->references('id')->on('user_detail')->onDelete('cascade')->onUpdate('cascade');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('konseling__psikolog');
    }
};
