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
        Schema::create('users_psikotest', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('gender');
            $table->timestamp('date_of_birth');
            $table->string('email');
            $table->timestamp('test_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_psikotest');
    }
};
