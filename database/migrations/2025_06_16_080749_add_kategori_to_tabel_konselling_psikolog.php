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
            $table->string('kategori')->after('id'); 
            $table->string('jadwal_pukul')->change(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('konselling_psikologs', function (Blueprint $table) {
            $table->dropColumn('kategori');
            $table->time('jadwal_pukul')->change(); 
        });
    }
};
