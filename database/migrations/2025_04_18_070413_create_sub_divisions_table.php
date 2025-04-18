<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('sub_divisions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('division_id')->constrained('divisions')->onDelete('cascade'); 
            $table->string('nama_subdivisi');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sub_divisions');
    }
};