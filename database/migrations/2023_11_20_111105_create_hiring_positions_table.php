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
        Schema::create('hiring_positions', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->enum("type", ["Internship", "Fulltime", "Part Time", "Contract", "Freelancer"]);
            $table->enum("positions", ["Staff", "Manager", "Researcher"]);
            $table->enum("location", ["Remote", "Surabaya"]);
            $table->string("link")->nullable();
            $table->boolean("is_active")->default(true);
            $table->enum('divisi', [
                'Counseling Product Management',
                'Psychological Testing Product Management',
                'Class Product Management',
                'Researcher',
                'Secretary and Finance',
                'Marketing Strategist and Sales',
                'HR Recruitment',
                'HR Performance Appraisal',
                'HR Data Analyst',
                'HR Training and Development',
                'LinkedIn Creator',
                'X Creator',
                'TikTok Creator',
                'Instagram Creator',
                'Graphic Designer',
                'Front End Developer',
                'Back End Developer',
                'Full Stack Developer',
                'UI/UX Designer',
            ]);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hiring_positions');
    }
};
