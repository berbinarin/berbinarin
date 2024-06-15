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
        Schema::create('berbinarp_enrollments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('berbinarp_users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('class_id')->constrained('berbinarp_class')->onUpdate('cascade')->onDelete('cascade');
            $table->string('transfer_evidance');
            $table->integer('class_progress');
            $table->date('enrollment_date');
            $table->date('expired_date');
            $table->date('completed_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('berbinarp_enrollments');
    }
};
