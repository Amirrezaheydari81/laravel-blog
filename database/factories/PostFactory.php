<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id'=>User::Factory(),
            'title'=> $this->faker->sentence(),
            'slug'=> $this->faker->slug(3),
            'image'=> $this->faker->imageUrl(),
            'body'=> $this->faker->paragraph(10),
            'published_at'=> $this->faker->dateTimeBetween('-1 Week', '+1 Week'),
            'featured'=> $this->faker->boolean(10)
        ];
    }
}
