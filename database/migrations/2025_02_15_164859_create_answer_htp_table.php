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
        Schema::create('answer_htp', function (Blueprint $table) {
            $table->id();
            $table->foreignId('test_htp_id')->constrained('test_htp')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('question_htp_id')->constrained('question_htp')->onUpdate('cascade')->onDelete('cascade');
            $table->text('answer');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('answer_htp', function (Blueprint $table) {
            $table->dropForeign(['test_htp_id']);
            $table->dropForeign(['question_htp_id']);
        });
        Schema::dropIfExists('answer_htp');
    }
};
