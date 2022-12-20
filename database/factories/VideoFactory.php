<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Subject;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Video>
 */
class VideoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'subject_id' => $this->faker->randomElement(Subject::all()->pluck('id')->toArray()),
            'week' => $this->faker->numberBetween(1, 10),
            'resource_url' => $this->faker->unique()->url,
            'description' => $this->faker->sentence,
            'part' => $this->faker->numberBetween(1, 10),
            'session_parts' => $this->faker->numberBetween(1, 10),
        ];
    }
}
