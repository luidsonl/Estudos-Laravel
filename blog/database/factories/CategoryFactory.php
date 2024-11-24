<?php

namespace Database\Factories;

use App\Models\Media;
use App\Models\Status;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'title' => $this->faker->word,
            'slug' => $this->faker->slug,
            'description' => $this->faker->paragraph,
            'media_id' => Media::factory(),
            'status_id' => Status::factory(),

        ];
    }
}
