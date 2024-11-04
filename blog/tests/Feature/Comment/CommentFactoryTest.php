<?php

namespace Tests\Feature\Comment;

use App\Models\Comment;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CommentFactoryTest extends TestCase
{
    use RefreshDatabase;

    /** @test **/
    public function it_creates_valid_comments_using_factory(): void
    {
        $comment = Comment::factory()->create();

        $this->assertDatabaseHas('comments', [
            'id' => $comment->id,
            'comment' => $comment->comment,
            'post_id' => $comment->post_id,
            'user_id' => $comment->user_id,
        ]);
    }
}
