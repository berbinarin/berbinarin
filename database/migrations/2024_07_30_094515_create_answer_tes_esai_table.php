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
        Schema::create('answer_tes_esai', function (Blueprint $table) {
            $table->id();
            $table->foreignId('test_tes_esai_id')->constrained('test_tes_esai')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('question_tes_esai_id')->constrained('question_tes_esai')->onUpdate('cascade')->onDelete('cascade');
            $table->text('answer')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('answer_tes_esai');
    }
};
