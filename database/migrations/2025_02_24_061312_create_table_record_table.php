<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('table_record', function (Blueprint $table) {
            $table->id();
            $table->foreignId('staff_id')->constrained('table_staff')->onDelete('cascade');
            $table->string('division'); 
            $table->string('subdivision')->nullable(); 
            $table->date('date_start'); 
            $table->date('date_end')->nullable(); 
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('table_record');
    }
};
