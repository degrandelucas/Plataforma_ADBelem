<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->sentence(3); // Generates a fake course name with 2 words
        $description = $this->faker->paragraph(2); // Generates a fake description with 2 paragraphs

        return [
            'name' => $name,
            'description' => $description,
            // Generates a slug from the name, ensuring it is unique (may rarely have conflicts in bulk)
            'slug' => Str::slug($name) . '-' . $this->faker->unique()->word(), // Adds something unique to avoid simple conflicts
            'thumbnail' => 'https://via.placeholder.com/150', // Placeholder image URL
            'is_published' => $this->faker->boolean(80), // 80% chance to be true (published)
        ];
    }

}
