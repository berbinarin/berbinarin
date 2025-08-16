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
        Schema::table('konselling_psikologs', function (Blueprint $table) {
            $table->string('kategori_voucher')->nullable();
            $table->string('code_voucher')->nullable();
            $table->integer('presentase_diskon')->nullable();
        });

        Schema::table('konselling_peers', function (Blueprint $table) {
            $table->string('kategori_voucher')->nullable();
            $table->string('code_voucher')->nullable();
            $table->integer('presentase_diskon')->nullable();
            $table->string('bukti_kartu_pelajar')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('konselling_psikologs', function (Blueprint $table) {
            $table->dropColumn('kategori_voucher');
            $table->dropColumn('code_voucher');
            $table->dropColumn('presentase_diskon');
        });

        Schema::table('konselling_peers', function (Blueprint $table) {
            $table->dropColumn('kategori_voucher');
            $table->dropColumn('code_voucher');
            $table->dropColumn('presentase_diskon');
            $table->dropColumn('bukti_kartu_pelajar');
        });
    }
};