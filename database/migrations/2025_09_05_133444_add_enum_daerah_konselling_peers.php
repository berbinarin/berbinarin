<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Tambah enum baru ke kolom daerah
        DB::statement("ALTER TABLE konselling_peers MODIFY COLUMN daerah ENUM('Bekasi', 'Jakarta', 'Tangerang Selatan', 'Padang', 'Wonogiri', 'Malang', 'Online', 'Surabaya', 'Jombang', 'Nganjuk')");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement("ALTER TABLE konselling_peers MODIFY COLUMN daerah ENUM('Bekasi', 'Jakarta', 'Tangerang Selatan', 'Padang', 'Wonogiri', 'Malang', 'Online')");
    }
};