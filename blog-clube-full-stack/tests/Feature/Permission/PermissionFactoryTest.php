<?php

namespace Tests\Feature\Permission;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Permission;

class PermissionFactoryTest extends TestCase
{
    
    /** @test */
    public function it_creates_valid_permission_using_factory()
    {
        $permission = Permission::factory()->create();

        $this->assertDatabaseHas('permissions', [
            'id' => $permission->id,
            'name' => $permission->name,
        ]);
    }
}
