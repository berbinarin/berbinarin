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
        Schema::create('soal_bdi', function (Blueprint $table) {
            $table->id();
            $table->string('pernyataan');
            $table->string('bobot');
            $table->foreignId('nomor_bdi_id')->constrained('nomor_bdi')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('soal_bdi');
    }
};
