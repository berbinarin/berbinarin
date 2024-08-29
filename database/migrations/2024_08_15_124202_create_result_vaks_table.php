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
        Schema::create('result_vaks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('test_vak_id')->constrained('test_vaks')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('visual');
            $table->integer('auditori');
            $table->integer('kinestetik');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('result_vaks');
    }
};
