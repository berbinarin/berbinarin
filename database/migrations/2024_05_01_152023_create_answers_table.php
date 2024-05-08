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
            $table->foreignId('test_question_id')->constrained('test_questions')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('user_id')->constrained('users_psikotest')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('answer'); // 1, 2, 3, 4, 5
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
