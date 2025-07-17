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
        // Modify Tabel Konselling Psikolog
        Schema::table('konselling_psikologs', function (Blueprint $table) {
            $table->string('asal_sekolah')->nullable()->after('pendidikan');
        });

        // Modify Tabel Konselling Peer
        Schema::table('konselling_peers', function (Blueprint $table) {
            $table->string('asal_sekolah')->nullable()->after('pendidikan');
            $table->string('kategori')->nullable()->after('daerah');
            $table->integer('sesi')->nullable()->after('metode');
        });

        // Add nilai enum 
        DB::statement("ALTER TABLE konselling_peers MODIFY COLUMN daerah ENUM('Bekasi', 'Jakarta', 'Tangerang Selatan', 'Padang', 'Wonogiri', 'Malang', 'Online')");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('konselling_psikologs', function (Blueprint $table) {
            $table->dropColumn('asal_sekolah');
        });

        Schema::table('konselling_peers', function (Blueprint $table) {
            $table->dropColumn(['asal_sekolah', 'kategori', 'sesi']);
        });

        DB::statement("ALTER TABLE konselling_peers MODIFY COLUMN daerah ENUM('Bekasi', 'Tangerang Selatan', 'Padang', 'Online')");
    }
};
