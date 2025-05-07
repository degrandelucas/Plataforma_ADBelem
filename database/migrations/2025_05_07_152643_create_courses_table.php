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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            // new columns
            $table->string('name');
            $table->text('description')->nullable(); // nullable() method to allow null values
            $table->string('slug')->unique();
            $table->string('thumbnail')->nullable();
            $table->boolean('is_published')->default(false); // indicates if the course is published (true/false, default false)
            //
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
