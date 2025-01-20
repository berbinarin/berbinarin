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
        Schema::create('data_jabatan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('data_staff_id')
                ->constrained('data_staff')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('posisi');
            $table->string('divisi');
            $table->string('sub_divisi');
            $table->date('awal_menjabat');
            $table->date('akhir_menjabat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_jabatan');
    }
};
