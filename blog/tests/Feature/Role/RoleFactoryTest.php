<?php

namespace Tests\Feature\Role;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Role;

class RoleFactoryTest extends TestCase
{
    
    /** @test */
    public function it_creates_valid_role_using_factory()
    {
        $role = Role::factory()->create();

        $this->assertDatabaseHas('roles', [
            'id' => $role->id,
            'name' => $role->name,
        ]);
    }
}
