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
        $mediaName = "image_{$imageId}.jpg";
        $image = $this->faker->image();

        if(!$image)
        {
            for($i = 0; $i < 5; $i++) // tenta 5 vezes gerar a imagem
            {
                $image = $this->faker->image();
                if($image)
                {
                    break;
                }
            }
        }

        $mediaContent = file_get_contents($image);

        $media = new Media();
        
        $media->storeMedia($mediaContent, $mediaName);

        unlink($image);

        return [
            'path' => $media->path,
            'name' => $mediaName,
            'description' =>$this->faker->name(),
            'type' => $media->type,
            'size' => $media->size,
        ];
    }
}
