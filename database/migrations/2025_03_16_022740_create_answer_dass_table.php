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
        Schema::create('answer_dass', function (Blueprint $table) {
            $table->id();
            $table->foreignId('psikotest_paid_test_id')->constrained('psikotest_paid_tests')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('question_dass_id')->constrained('question_dass')->cascadeOnUpdate()->cascadeOnDelete();
            $table->tinyInteger('answer')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('answer_d_a_s_s');
    }
};
