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
        Schema::create('interaction_article', function (Blueprint $table) {
            $table->id();
            $table->foreignId('article_id')
                ->constrained('artikel') 
                ->onDelete('cascade');
            $table->string('user_token')->nullable();
            $table->ipAddress('ip_address')->nullable();
            $table->integer('views')->default(0);
            $table->enum('reaction_type', ['tidak suka', 'bosan', 'biasa saja', 'senang', 'sangat senang'])->nullable();
            $table->integer('shares')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('interaction_article');
    }
};
