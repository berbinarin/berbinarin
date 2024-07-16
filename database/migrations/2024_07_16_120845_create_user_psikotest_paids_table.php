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
        Schema::create('user_psikotest_paids', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('email');
            $table->string('password')->nullable();
            $table->string('gender');
            $table->string('age');
            $table->string('domicile');
            $table->string('phone_number');
            $table->string('service');
            $table->string('reason');
            $table->date('preference_schedule');
            $table->foreignId('psikotest_type_tool_id')->constrained('psikotest_type_tools')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_psikotest_paids');
    }
};
