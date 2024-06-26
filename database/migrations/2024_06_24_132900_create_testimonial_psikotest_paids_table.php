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
        Schema::create('testimonial_psikotest_paids', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('user_psikotest_paids')->onUpdate('cascade')->onDelete('cascade');
            $table->enum('sharing_testimonial', ['setuju', 'tidak setuju']);
            $table->text('experience_story');
            $table->text('opinion_psikotest');
            $table->text('criticism_suggestion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonial_psikotest_paids');
    }
};
