<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Media;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->sentence(3);
        $media = Media::factory()->create();
        $user = User::factory()->create();
        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'thumb_id'=> $media->id,
            'user_id' => $user->id,
            'content' => fake()->paragraph(),
        ];
    }
}
