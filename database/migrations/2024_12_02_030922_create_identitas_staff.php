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
        Schema::create('identitas_staff', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('kampus');
            $table->string('no_hp');
            $table->string('email');
            $table->string('linkedin');
            $table->string('instagram');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('identitas_staff');
    }
};
