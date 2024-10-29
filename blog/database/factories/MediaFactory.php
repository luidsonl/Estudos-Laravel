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

        $imageId = $this->faker->numberBetween(1, 1000); // Você pode definir um intervalo
        $imageUrl = "https://picsum.photos/640/480?image={$imageId}";

        $imageName = "image_{$imageId}.jpg";

        $relativePath = "upload/$imageName";

        $absPath = public_path($relativePath);

        // Faz o download da imagem
        file_put_contents($absPath, file_get_contents($imageUrl));

        return [
            'path' => $relativePath,
            'name' => $imageName,
            'type' => 'image/jpeg',
            'size' => filesize($absPath),
        ];
    }
}
