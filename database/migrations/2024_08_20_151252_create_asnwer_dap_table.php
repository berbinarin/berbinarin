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
        Schema::create('answer_dap', function (Blueprint $table) {
            $table->id();
            $table->foreignId('test_dap_id')->constrained('test_dap')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('question_dap_id')->constrained('question_dap')->onUpdate('cascade')->onDelete('cascade');
            $table->text('answer');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('answer_dap');
    }
};
