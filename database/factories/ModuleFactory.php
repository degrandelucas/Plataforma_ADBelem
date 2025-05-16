<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Module>
 */
class ModuleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // 'course_id' will be set in the Seeder, as it depends on the parent course
            'name' => $this->faker->sentence(3), // Module name with 2 fake words
            'description' => $this->faker->paragraph(2), // Fake description with 2 paragraphs
            'order' => $this->faker->numberBetween(1, 10), // Fake order between 1 and 10
            'is_published' => true, // Fake modules will be published by default
            // Fake video URL (using YouTube embed for testing)
            'video_url' => 'https://www.youtube.com/watch?v=1tKEn06xFhg', // Example video
        ];
    }
}
