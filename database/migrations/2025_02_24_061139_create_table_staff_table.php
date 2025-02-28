<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('table_staff', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->boolean('status')->default(false);
            $table->string('linkedin')->nullable(); // Menyimpan URL LinkedIn
            $table->string('photo')->nullable(); // Menyimpan path foto
            $table->enum('motm', ['yes', 'no'])->default('no'); // Menandai MOTM 
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('table_staff');
    }
};
