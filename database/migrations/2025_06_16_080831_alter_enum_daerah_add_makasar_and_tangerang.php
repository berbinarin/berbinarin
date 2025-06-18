<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
     public function up(): void
    {
        DB::statement("ALTER TABLE konselling_psikologs MODIFY daerah ENUM(
            'Surabaya',
            'Kediri',
            'Sidoarjo',
            'Denpasar',
            'Kalimantan Utara (Tarakan)',
            'Samarinda',
            'Jakarta',
            'Malang',
            'Online',
            'Makassar',
            'Tangerang Selatan',
            'Bekasi',
            'Wonogiri',
            'Padang'
        )");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement("ALTER TABLE konselling_psikologs MODIFY daerah ENUM(
            'Surabaya',
            'Kediri',
            'Sidoarjo',
            'Denpasar',
            'Kalimantan Utara (Tarakan)',
            'Samarinda',
            'Jakarta',
            'Malang',
            'Online'
        )");
    }
};
