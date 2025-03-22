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
        Schema::create('data_staff', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('linkedin');
            $table->string('foto')->nullable();
            $table->enum('motm', ['yes', 'no'])->default('no'); // Isi dengan nilai yang sesuai
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_staff'); // Menghapus tabel saat rollback
    }
};
