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
        Schema::create('answer_essays', function (Blueprint $table) {
            $table->id();
            $table->foreignId('question_essay_id')->constrained('question_essays')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('answer_essayable_id');
            $table->string('answer_essayable_type');
            $table->text('answer');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('answer_essays');
    }
};
