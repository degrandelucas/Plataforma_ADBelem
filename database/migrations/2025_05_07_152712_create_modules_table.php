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
        Schema::create('modules', function (Blueprint $table) {
            $table->id();

            $table->foreignId('course_id') // defines that the 'course id' column will be a foreign key
                ->constrained('courses') // Constrains the foreign key to 'courses'
                ->cascadeOnDelete(); // If a course is deleted, all modules associated with it will also be deleted.
            $table->string('name');
            $table->text('description')->nullable();
            $table->integer('order')->default(0); // Module order within the course (for sequencing)
            $table->boolean('is_published')->default(true);
            $table->string('video_url')->nullable(); // column for video URL

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modules');
    }
};
