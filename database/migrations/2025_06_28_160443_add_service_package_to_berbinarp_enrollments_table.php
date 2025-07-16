<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('berbinarp_enrollments', function (Blueprint $table) {
            $table->string('service_package')->nullable()->after('class_progress');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('berbinarp_enrollments', function (Blueprint $table) {
            $table->dropColumn('service_package');
        });
    }
};
