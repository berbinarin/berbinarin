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
        Schema::create('psikotest_paid_tests', function (Blueprint $table) {
            $table->id();
            $table->boolean('status_progress')->default(false);
            $table->foreignId('user_psikotest_paid_id')->constrained('user_psikotest_paids')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('psikotest_tool_id')->constrained('psikotest_tools')->onUpdate('cascade')->onDelete('cascade')->nullable();
            $table->enum('status', ['progress', 'done']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('psikotest_paid_tests');
    }
};
