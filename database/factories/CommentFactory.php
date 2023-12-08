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
            'text' => fake()->text(),
            'likes' => fake()->randomFloat(0,0,100),
            'dislikes' => fake()->randomFloat(0,0,100),
            'post_id'=>Post::inRandomOrder()->first()->id,
            'user_id'=>User::inRandomOrder()->first()->id,
        ];
    }
}
