<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Course;

class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'review_by' => User::all()->random()->id,
            'comment' => $this->faker->paragraph,
            'star' => $this->faker->numberBetween(1, 5),
            'course_id' => Course::all()->random()->id,
        ];
    }
}
