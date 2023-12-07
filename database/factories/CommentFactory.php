<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'desc' => fake()->sentence(2),
            'user_id'=>fake()->numberBetween(1,count(User::all())),
            'post_id'=>fake()->numberBetween(1,count(Post::all()))
        ];
    }
}
