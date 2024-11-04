<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Media;

class MediaFactory extends Factory
{
    protected $model = Media::class;

    public function definition(): array
    {
        $imageId = $this->faker->numberBetween(1, 1000);
        $imageName = "image_{$imageId}.jpg";

        $mediaContent = file_get_contents("https://picsum.photos/640/480?image={$imageId}");

        // Crie a instância do model sem salvar no banco
        $media = new Media();
        
        // Chame o método storeMedia para armazenar e definir os dados
        $media->storeMedia($mediaContent, $imageName);

        // Retorne os atributos definidos para o banco
        return [
            'path' => $media->path,
            'name' => $media->name,
            'type' => $media->type,
            'size' => $media->size,
        ];
    }
}
