<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('epi_questions', function (Blueprint $table) {
            $table->string('category', 50)->change();
        });
    }

    public function down(): void
    {
        Schema::table('epi_questions', function (Blueprint $table) {
            $table->string('category', 10)->change();
        });
    }
};
