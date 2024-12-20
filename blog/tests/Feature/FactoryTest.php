<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\Media;
use App\Models\Permission;
use App\Models\Post;
use App\Models\Role;
use App\Models\Setting;
use App\Models\Status;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
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

    /** @test */
    public function it_creates_a_media_using_factory()
    {
        $media = Media::factory()->create();

        $this->assertDatabaseHas('media', [
            'id' => $media->id,
            'path' => $media->path,
            'name'=>$media->name,
            'description'=>$media->description,
            'type'=>$media->type,
            'size'=>$media->size,
        ]);
    }

    /** @test */
    public function it_creates_a_user_using_factory()
    {
        $user = User::factory()->create();
        $user->load('profilePicture');
        $user->load('role');

        $this->assertDatabaseHas('users', [
            'id' => $user->id,
            'email' => $user->email,
            'password' => $user->password,
            'name'=>$user->name,
            'media_id'=>$user->profilePicture->id,
            'role_id'=>$user->role->id,
        ]);
    }

    /** @test */
    public function it_creates_a_status_using_factory()
    {
        $status = Status::factory()->create();

        $this->assertDatabaseHas('statuses', [
            'id' => $status->id,
            'name' => $status->name,
            'description'=>$status->description,
        ]);
    }

    /** @test */
    public function it_creates_a_tag_using_factory()
    {
        $tag = Tag::factory()->create();

        $this->assertDatabaseHas('tags', [
            'id' => $tag->id,
            'name' => $tag->name,
            'description'=>$tag->description,
        ]);
    }

    /** @test */
    public function it_creates_a_category_using_factory()
    {
        $category = Category::factory()->create();
        $category->load('thumb');
        $category->load('status');

        $this->assertDatabaseHas('categories', [
            'id' => $category->id,
            'title' => $category->title,
            'slug' => $category->slug,
            'media_id' => $category->thumb->id,
            'status_id' => $category->status->id,
            'description'=>$category->description,
        ]);
    }

}
