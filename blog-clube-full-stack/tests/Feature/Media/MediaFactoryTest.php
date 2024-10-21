<?php

namespace Tests\Feature\Media;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Media;

class MediaFactoryTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function it_creates_valid_media_using_factory()
    {
        $media = Media::factory()->create();

        $this->assertDatabaseHas('media', [
            'id' => $media->id,
            'path' => $media->path,
            'name' => $media->name,
            'type' => $media->type,
            'size' => $media->size,
        ]);
    }
}
