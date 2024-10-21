<?php

namespace Tests\Feature\Post;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Post;

class PostFactoryTest extends TestCase
{

    use RefreshDatabase;
    /** @test */
    public function it_creates_valid_post_using_factory()
    {
        $post = Post::factory()->create();

        $this->assertDatabaseHas('posts', [
            'id' => $post->id,
            'title' => $post->title,
            'content' => $post->content,
            'user_id' => $post->user_id,
            'slug' => $post->slug,
            'thumb_id' => $post->thunb_id,
        ]);
    }
}
