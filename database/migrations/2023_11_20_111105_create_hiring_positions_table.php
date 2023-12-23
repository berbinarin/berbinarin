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
        Schema::create('hiring_positions', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->enum("type",["Internship","Fulltime","Part Time","Contract","Freelancer"]);
            $table->enum("positions",["Staff","Manager","Researcher"]);
            $table->enum("location",["Remote","Surabaya"]);
            $table->string("link");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hiring_positions');
    }
};
