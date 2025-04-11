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
        Schema::create('answer_rmib', function (Blueprint $table) {
            $table->id();
            $table->foreignId('test_rmib_id')->constrained('test_rmib')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('question_rmib_id')->constrained('question_rmib')->cascadeOnUpdate()->cascadeOnDelete();
            $table->smallInteger('outdoor');
            $table->smallInteger('mechanical');
            $table->smallInteger('computational');
            $table->smallInteger('science');
            $table->smallInteger('personal_contact');
            $table->smallInteger('aesthetic');
            $table->smallInteger('musical');
            $table->smallInteger('literacy');
            $table->smallInteger('social_service');
            $table->smallInteger('clerical');
            $table->smallInteger('practical');
            $table->smallInteger('medical');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('answer_rmibs');
    }
};
