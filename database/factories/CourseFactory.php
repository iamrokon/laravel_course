<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Platform;

class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->title(),
            'type' => rand(0,1),
            'slug' => $this->faker->slug,
            'resources' => rand(0,50),
            'price' => rand(0,1) ? rand(0,100) : 0.00,
            'year' => rand(2010,2021),
            'image' => $this->faker->imageUrl(),
            'description' => $this->faker->paragraph(),
            'link' => $this->faker->url(),
            'submitted_by' => User::all()->random()->id,
            'duration' => rand(0, 2),
            'difficulty_level' => rand(0, 2),
            'platform_id' => Platform::all()->random()->id,
        ];
    }
}
