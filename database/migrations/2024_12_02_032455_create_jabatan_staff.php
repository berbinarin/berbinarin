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
        Schema::create('jabatan_staff', function (Blueprint $table) {
            $table->id();
            $table->foreignId('identitas_staff_id')->constrained('identitas_staff')->onUpdate('cascade')->onDelete('cascade');
            $table->string('divisi');
            $table->string('posisi');
            $table->string('sub_divisi');
            $table->string('awal_menjabat');
            $table->string('akhir_menjabat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jabatan_staff');
    }
};
