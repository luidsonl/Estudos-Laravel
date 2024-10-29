<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Setting>
 */
class SettingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $isBoolean = $this->faker->boolean();
        return [
            'key' => $this->faker->name(),
            'value' => $isBoolean ? (string) $this->faker->boolean() : $this->faker->name(),
            'description' => fake()->paragraph(),
        ];
    }
}
