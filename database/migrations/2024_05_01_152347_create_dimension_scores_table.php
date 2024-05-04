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
        Schema::create('dimension_scores', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users_psikotest');
            $table->foreignId('dimension_id')->constrained('dimensions');
            $table->integer('score');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dimension_scores');
    }
};
