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
        Schema::create('result_ocean', function (Blueprint $table) {
            $table->id();
            $table->foreignId('test_ocean_id')->constrained('test_ocean')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('result_ocean');
    }
};
