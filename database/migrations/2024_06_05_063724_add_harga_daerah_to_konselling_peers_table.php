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
        Schema::table('konselling_peers', function (Blueprint $table) {
            $table->integer('harga');
            $table->enum('daerah', ['Bekasi', 'Tangerang Selatan', 'Palembang']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('konselling_peers', function (Blueprint $table) {
            $table->dropColumn(['harga', 'daerah']);
        });
    }
};
