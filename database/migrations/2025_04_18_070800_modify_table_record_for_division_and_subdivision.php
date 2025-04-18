<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('table_record', function (Blueprint $table) {
            // Hapus kolom division dan subdivision
            $table->dropColumn('division');
            $table->dropColumn('subdivision');

            // Menambah foreign key untuk division_id dan subdivision_id
            $table->foreignId('division_id')->nullable()->constrained('divisions')->onDelete('cascade');
            $table->foreignId('subdivision_id')->nullable()->constrained('sub_divisions')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('table_record', function (Blueprint $table) {
            $table->string('division');
            $table->string('subdivision')->nullable();

            $table->dropForeign(['division_id']);
            $table->dropForeign(['subdivision_id']);
            $table->dropColumn('division_id');
            $table->dropColumn('subdivision_id');
        });
    }
};