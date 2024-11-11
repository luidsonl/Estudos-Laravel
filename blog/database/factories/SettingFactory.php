<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Enums\DataType;

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
        $type = $this->faker->randomElement(DataType::getValues()); 
        $valuesFaker = [
            'VARCHAR' => $this->faker->words($nb = 3, $asText = true),
            'TEXT' => $this->faker->paragraph(1),
            'INT' => $this->faker->randomDigit(),
            'BOOLEAN' => $this->faker->boolean(),
            'FLOAT'=> $this->faker->randomFloat()
        ];
        
        return [
            'key' => $this->faker->uuid(),
            'type'=> $type,
            'value' => $valuesFaker[$type],
        ];
    }
}
