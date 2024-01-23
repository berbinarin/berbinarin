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
        Schema::create('user_konseling', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('email');
            $table->date('tanggal');
            $table->enum('jenis_kelamin',['Laki-laki','Perempuan']);
            $table->date('tanggal_mengikuti_test');
            $table->unsignedBigInteger("hasil_Test_id");
            $table->foreign('hasil_Test_id')->references('id')->on('hasil_test')->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_konseling');
    }
};
