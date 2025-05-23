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
        Schema::create('answer_hdp', function (Blueprint $table) {
            $table->id();
            $table->foreignId('test_hdp_id')->constrained('test_hdp')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('question_hdp_id')->constrained('question_hdp')->onUpdate('cascade')->onDelete('cascade');
            $table->text('answer');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('answer_hdp');
    }
};
