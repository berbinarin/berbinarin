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
        Schema::create('answer_ocean', function (Blueprint $table) {
            $table->id();
            $table->foreignId('test_ocean_id')->constrained('test_ocean')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('question_ocean_id')->constrained('question_ocean')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('answer')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('answer_ocean');
    }
};
