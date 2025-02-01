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
        Schema::create('answer_ssct', function (Blueprint $table) {
            $table->id();
            $table->foreignId('test_ssct_id')->constrained('test_ssct')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('question_ssct_id')->constrained('question_ssct')->onUpdate('cascade')->onDelete('cascade');
            $table->text('answer')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('answer_ssct');
    }
};
