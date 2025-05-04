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
        Schema::create('statement_rmib', function (Blueprint $table) {
            $table->id();
            $table->foreignId('question_rmib_id')->constrained('question_rmib')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('category_statement_rmib_id')->constrained('category_statement_rmib')->cascadeOnUpdate()->cascadeOnDelete();
            $table->smallInteger('question_order');
            $table->text('male_statement');
            $table->text('female_statement');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('statement_rmibs');
    }
};
