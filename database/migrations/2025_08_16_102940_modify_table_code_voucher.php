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
        Schema::table('code_voucher', function (Blueprint $table) {
            $table->string('jenis_pendaftaran')->nullable();
            $table->string('nama_voucher')->nullable();
            $table->string('tipe')->nullable();
            $table->string('detail')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('code_voucher', function (Blueprint $table) {
            $table->dropColumn('jenis_pendaftaran');
            $table->dropColumn('nama_voucher');
            $table->dropColumn('tipe');
            $table->dropColumn('detail');
        });
    }
};
