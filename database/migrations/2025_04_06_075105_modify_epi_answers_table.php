<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('epi_answers', function (Blueprint $table) {
            // Hapus kolom user_id dan fullname
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
            $table->dropColumn('fullname');

            // Menambahkan kolom psikotest_paid_test_id
            $table->foreignId('psikotest_paid_test_id')
                ->after('id')
                ->constrained('psikotest_paid_tests')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('epi_answers', function (Blueprint $table) {
            
            $table->foreignId('user_id')->constrained('user_psikotest_paids')->onDelete('cascade');
            $table->string('fullname');

            $table->dropForeign(['psikotest_paid_test_id']);
            $table->dropColumn('psikotest_paid_test_id');
        });
    }
};