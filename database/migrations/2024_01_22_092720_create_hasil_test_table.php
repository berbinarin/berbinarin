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
        Schema::create('hasil_test', function (Blueprint $table) {
            $table->id();
            $table->integer("totalPoin");
            $table->integer("jumlahSoal");
            $table->float("rata-rata");
            $table->float("presentation");
            $table->string("dimensi");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hasil_test');
    }
};
