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
        Schema::create('psikotest_type_tools', function (Blueprint $table) {
            $table->id();
            $table->foreignId('psikotest_type_id')->constrained('psikotest_types')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('psikotest_tool_id')->constrained('psikotest_tools')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('psikotest_type_tools');
    }
};
