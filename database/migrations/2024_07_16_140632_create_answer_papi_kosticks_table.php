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
        Schema::create('answer_papi_kosticks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('test_papi_kostick_id')->constrained('test_papi_kosticks')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('question_papi_kostick_id')->constrained('question_papi_kosticks')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('answer')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('answer_papi_kosticks');
    }
};
