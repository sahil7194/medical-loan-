<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payment>
 */
class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'amount'         => fake()->randomFloat(2, 1, 1000),
            'status'         => fake()->numberBetween(0, 4),
            'mode'           => fake()->randomElement(['card', 'upi', "cash"]),
            'referral_id'    => User::inRandomOrder()->first()->id,
            'application_id' => User::inRandomOrder()->first()->id,
        ];
    }
}
