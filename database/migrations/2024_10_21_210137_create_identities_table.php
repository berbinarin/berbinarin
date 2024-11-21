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
        Schema::create('identities', function (Blueprint $table) {
            $table->id();
            $table->text('fullname');
            $table->string('no_ktp');
            $table->text('place_of_birth');
            $table->date('date_of_birth');
            $table->boolean('gender');
            $table->boolean('marriage_status');
            $table->string('no_hp');
            $table->text('address');
            $table->string('email');
            $table->string('work_unit');
            $table->string('current_position');
            $table->string('desired_position');
            $table->string('x');
            $table->string('facebook');
            $table->string('instagram');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('identities');
    }
};
