<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Media>
 */
class MediaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $date = now();
        $year = $date->format('Y');
        $month = $date->format('m');
        $day = $date->format('d');

        $directory = "public/upload/media/$year/$month/$day";

        if (!file_exists($directory)) {
            mkdir($directory, 0755, true);
        }

        $path = fake()->image(format: IMG_JPG ,dir: $directory, width:640, height: 480);
        $name = basename($path);
        return [
            'path' => $path,
            'name' => $name,
            'type' => 'image/jpeg',
            'size' => $this -> faker -> numberBetween(1000, 5000),
        ];
    }
}
