<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;

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
        $thumb = fake()->image(dir: 'public/upload/media', width:640, height: 480);
        $title = fake()->sentence(3);
        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'thumb'=> str_replace(search: 'public', replace: '', subject: $thumb),
            'user_id' => User::pluck('id')->random(),
            'content' => fake()->paragraph(),
        ];
    }
}
