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
        Schema::table('berbinar_for_u', function (Blueprint $table) {
            $table->text('cerita_utama');
            $table->text('cerita_tambahan');
            $table->text('alasan_konseling');
            $table->text('harapan_konseling');
            $table->dropColumn('cerita');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('berbinar_for_u', function (Blueprint $table) {
            $table->string('cerita')->after('kegiatan_sosial');
            $table->dropColumn(['cerita_utama', 'cerita_tambahan', 'alasan_konseling', 'harapan_konseling']);
        });
    }
};
