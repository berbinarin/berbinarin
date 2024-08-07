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
        Schema::create('results', function (Blueprint $table) {
            $table->id();
            $table->foreignId('test_id')->constrained('tests')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('agreeableness');
            $table->integer('conscientiousness');
            $table->integer('extraversion');
            $table->integer('neuroticism');
            $table->integer('openness');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('results');
    }
};
