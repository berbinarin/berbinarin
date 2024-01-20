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
        Schema::create('riwayat_pekerjaan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("user_detail_id");
            $table->string("nama_perusahaan");
            $table->string("posisi");
            $table->year("tahun_masuk");
            $table->year("tahun_keluar");
            $table->timestamps();

            $table->foreign('user_detail_id')->references('id')->on('user_detail')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayat_pekerjaan');
    }
};
