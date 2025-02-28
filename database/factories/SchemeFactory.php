<?php

namespace Database\Factories;

use App\Models\Bank;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Scheme>
 */
class SchemeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'slug'              => fake()->unique()->slug,
            'title'             => fake()->sentence,
            'description'       => fake()->paragraphs(3, true),
            'image'             => fake()->imageUrl(),
            'redirection_link'  => fake()->url,
            'min_interest_rate' => fake()->randomFloat(2, 5, 15),
            'max_interest_rate' => fake()->randomFloat(2, 15, 30),
            'min_cibil'         => fake()->numberBetween(300, 700),
            'max_cibil'         => fake()->numberBetween(700, 900),
            'bank_id'           => Bank::inRandomOrder()->first()->id,
            'user_id'           => User::inRandomOrder()->first()->id,
        ];
    }
}
