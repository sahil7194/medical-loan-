<?php

namespace Database\Factories;

use App\Models\Scheme;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Applications>
 */
class ApplicationsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user = User::inRandomOrder()->first();

        $referral = User::inRandomOrder()->first();

        $scheme = Scheme::inRandomOrder()->first();

        return [
            "user_id"     => $user->id,
            "referral_id" => $referral->id,
            "scheme_id"   => $scheme->id,
            "status"      => fake()->numberBetween(0,4),
        ];
    }
}
