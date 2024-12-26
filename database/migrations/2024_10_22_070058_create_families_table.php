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
        Schema::create('families', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_clinical_id')->constrained('user_clinicals')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('family_status_id')->constrained('family_statuses')->onUpdate('cascade')->onDelete('cascade');
            $table->string('name');
            $table->string('gender');
            $table->integer('age');
            $table->string('ethnic');
            $table->string('religion');
            $table->text('address');
            $table->string('no_hp');
            $table->string('last_education');
            $table->string('job');
            $table->integer('child_marriage');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('families');
    }
};
