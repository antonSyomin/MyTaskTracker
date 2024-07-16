<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Card>
 */
class CardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->name(),
            'content' => fake()->realText(50),
            'owner_id' => 1,
            'status' => fake()->randomElement(['started', 'finished']),
            'deadline' => fake()->dateTimeBetween('Y-m-d', '2024-07-30'),
        ];
    }
}
