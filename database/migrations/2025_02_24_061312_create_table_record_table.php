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
            $table->string('division'); // Divisi pada periode tertentu
            $table->string('subdivision')->nullable(); // Sub-divisi (bisa kosong)
            $table->date('date_start'); // Tanggal mulai kerja di divisi tersebut
            $table->date('date_end')->nullable(); // Tanggal selesai kerja (bisa kosong)
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('table_record');
    }
};
