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
        Schema::create('articles', function (Blueprint $table) {
            $table->id(); 
            $table->string('title'); 
            $table->foreignId('category_id') 
                ->constrained('categories_article') 
                ->onUpdate('cascade') 
                ->onDelete('cascade'); 
            $table->foreignId('author_id') 
                ->constrained('author_article') 
                ->onUpdate('cascade') 
                ->onDelete('cascade'); 
            $table->string('cover_image'); 
            $table->text('content'); 
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
