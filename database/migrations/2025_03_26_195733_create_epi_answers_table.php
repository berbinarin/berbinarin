<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEpiAnswersTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('epi_answers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('user_psikotest_paids')->onDelete('cascade');
            $table->string('fullname');
            $table->foreignId('question_id')->constrained('epi_questions')->onDelete('cascade');
            $table->enum('answer', ['yes', 'no']);
            $table->integer('points');
            $table->string('conclusion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('epi_answers');
    }
}
