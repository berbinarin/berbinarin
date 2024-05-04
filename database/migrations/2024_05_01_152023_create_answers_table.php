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
        Schema::create('answers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('test_question_id')->constrained('test_questions');
            $table->foreignId('user_id')->constrained('users_psikotest');
            $table->enum('answer_text', ['sangat tidak menarik', 'kurang menarik', 'biasa', 'menarik', 'sangat menarik']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('answers');
    }
};
