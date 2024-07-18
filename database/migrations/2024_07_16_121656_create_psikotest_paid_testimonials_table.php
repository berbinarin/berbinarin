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
        Schema::create('psikotest_paid_testimonials', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_psikotest_paid_id')->constrained('user_psikotest_paids')->onUpdate('cascade')->onDelete('cascade');
            $table->text('sharing_testimonial');
            $table->text('sharing_experience');
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
        Schema::dropIfExists('psikotest_paid_testimonials');
    }
};
