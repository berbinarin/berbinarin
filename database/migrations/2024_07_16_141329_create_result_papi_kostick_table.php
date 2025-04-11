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
        Schema::create('result_papi_kostick', function (Blueprint $table) {
            $table->id();
            $table->foreignId('test_papi_kostick_id')->constrained('test_papi_kostick')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('A');
            $table->integer('N');
            $table->integer('G');
            $table->integer('C');
            $table->integer('D');
            $table->integer('R');
            $table->integer('T');
            $table->integer('V');
            $table->integer('W');
            $table->integer('F');
            $table->integer('L');
            $table->integer('P');
            $table->integer('I');
            $table->integer('S');
            $table->integer('B');
            $table->integer('O');
            $table->integer('X');
            $table->integer('E');
            $table->integer('K');
            $table->integer('Z');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('result_papi_kostick');
    }
};
