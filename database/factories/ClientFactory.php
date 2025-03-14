<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'age' => $this->faker->date(),
            'gender' => $this->faker->randomElement(['male', 'female']),
            'city' => $this->faker->city(),
            'description' => $this->faker->address(),
            'image' => $this->faker->imageUrl(200, 200, 'people', true, 'clients'),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
