<?php

namespace Tests\Feature;

use App\Models\Permission;
use App\Models\Role;
use App\Models\Setting;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FactoryTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
    }

    /** @test */
    public function it_creates_a_setting_using_factory()
    {
        $setting = Setting::factory()->create();

        $this->assertDatabaseHas('settings', [
            'id' => $setting->id,
            'key' => $setting->key,
            'value'=>$setting->value,
            'type'=>$setting->type,
        ]);
    }

    /** @test */
    public function it_creates_a_permission_using_factory()
    {
        $permission = Permission::factory()->create();

        $this->assertDatabaseHas('permissions', [
            'id' => $permission->id,
            'name' => $permission->name,
            'description'=>$permission->description,
        ]);
    }

    /** @test */
    public function it_creates_a_role_using_factory()
    {
        $role = Role::factory()->create();

        $this->assertDatabaseHas('roles', [
            'id' => $role->id,
            'name' => $role->name,
            'description'=>$role->description,
        ]);
    }
}
