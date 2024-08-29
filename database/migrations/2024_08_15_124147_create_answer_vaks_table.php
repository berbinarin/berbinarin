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
        Schema::create('answer_vaks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('test_vak_id')->constrained('test_vaks')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('question_vak_id')->constrained('question_vaks')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('answer');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('answer_vaks');
    }
};
