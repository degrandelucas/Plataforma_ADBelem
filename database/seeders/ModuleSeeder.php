<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Module;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ModuleSeeder extends Seeder
{
    protected $faker;

    /**
     * Create a new seeder instance.
     *
     * @return void
     */
    public function __construct(Faker $faker)
    {
        $this->faker = $faker;
    }

    /**
     * Run the database seeds.
     */
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Gets all courses created by CourseSeeder
        $courses = Course::all();

        // For each course...
        $courses->each(function (Course $course) {
            // Creates between 3 and 7 modules for this course using ModuleFactory
            // The create() method saves them to the database
            Module::factory($this->faker->numberBetween(3, 7))->create([
                'course_id' => $course->id, // Explicitly sets course_id to associate with the current course
            ]);
        });
    }
}
