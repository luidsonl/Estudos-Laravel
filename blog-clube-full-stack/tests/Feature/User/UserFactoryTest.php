<?php

namespace Tests\Feature\User;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class UserFactoryTest extends TestCase
{
    /** @test */
    public function it_creates_valid_user_using_factory()
    {
        $user = User::factory()->create();

        $this->assertDatabaseHas('users', [
            'id' => $user->id,
            'email' => $user->email,
            'name' => $user->name,
            'thumb_id'=> $user->thumb_id
        ]);
    }
}
