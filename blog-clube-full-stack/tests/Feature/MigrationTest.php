<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


class MigrationTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
    }

    /** @test */
    public function it_creates_required_tables()
    {
        $this->assertTrue(Schema::hasTable('users'));
        $this->assertTrue(Schema::hasTable('permissions'));
        $this->assertTrue(Schema::hasTable('roles'));
        $this->assertTrue(Schema::hasTable('posts'));
        $this->assertTrue(Schema::hasTable('comments'));
        $this->assertTrue(Schema::hasTable('permission_role'));
        $this->assertTrue(Schema::hasTable('role_user'));
        $this->assertTrue(Schema::hasTable('settings'));
        $this->assertTrue(Schema::hasTable('media'));
    }

    /** @test */
    public function it_has_correct_columns_in_users_table()
    {
        $this->assertTrue(Schema::hasTable('users'));

        $this->assertTrue(Schema::hasColumn('users', 'id'));
        $this->assertTrue(Schema::hasColumn('users', 'email'));
        $this->assertTrue(Schema::hasColumn('users', 'password'));
        $this->assertTrue(Schema::hasColumn('users', 'thumb_id'));
        $this->assertTrue(Schema::hasColumn('users', 'name'));

        $this->assertEquals('bigint', Schema::getColumnType('users', 'id'));
        $this->assertEquals('varchar', Schema::getColumnType('users', 'email'));
        $this->assertEquals('varchar', Schema::getColumnType('users', 'password'));
        $this->assertEquals('bigint', Schema::getColumnType('users', 'thumb_id'));
        $this->assertEquals('varchar', Schema::getColumnType('users', 'name'));


    }

    /** @test */
    public function it_has_correct_columns_in_posts_table()
    {
        $this->assertTrue(Schema::hasTable('posts'));

        $this->assertTrue(Schema::hasColumn('posts', 'id'));
        $this->assertTrue(Schema::hasColumn('posts', 'user_id'));
        $this->assertTrue(Schema::hasColumn('posts', 'title'));
        $this->assertTrue(Schema::hasColumn('posts', 'slug'));
        $this->assertTrue(Schema::hasColumn('posts', 'thumb_id'));
        $this->assertTrue(Schema::hasColumn('posts', 'content'));

        $this->assertEquals('bigint', Schema::getColumnType('posts', 'id'));
        $this->assertEquals('bigint', Schema::getColumnType('posts', 'user_id'));
        $this->assertEquals('varchar', Schema::getColumnType('posts', 'title'));
        $this->assertEquals('varchar', Schema::getColumnType('posts', 'slug'));
        $this->assertEquals('bigint', Schema::getColumnType('posts', 'thumb_id'));
        $this->assertEquals('text', Schema::getColumnType('posts', 'content'));
    }

    /** @test */
    public function it_has_correct_columns_in_permissions_table()
    {
        $this->assertTrue(Schema::hasTable('permissions'));

        $this->assertTrue(Schema::hasColumn('permissions', 'id'));
        $this->assertTrue(Schema::hasColumn('permissions', 'name'));

        $this->assertEquals('bigint', Schema::getColumnType('permissions', 'id'));
        $this->assertEquals('varchar', Schema::getColumnType('permissions', 'name'));
    }

    /** @test */
    public function it_has_correct_columns_in_roles_table()
    {
        $this->assertTrue(Schema::hasTable('roles'));

        $this->assertTrue(Schema::hasColumn('roles', 'id'));
        $this->assertTrue(Schema::hasColumn('roles', 'name'));

        $this->assertEquals('bigint', Schema::getColumnType('roles', 'id'));
        $this->assertEquals('varchar', Schema::getColumnType('roles', 'name'));
    }

    /** @test */
    public function it_has_correct_columns_in_permission_role_table()
    {
        $this->assertTrue(Schema::hasTable('permission_role'));

        $this->assertTrue(Schema::hasColumn('permission_role', 'id'));
        $this->assertTrue(Schema::hasColumn('permission_role', 'permission_id'));
        $this->assertTrue(Schema::hasColumn('permission_role', 'role_id'));

        $this->assertEquals('bigint', Schema::getColumnType('permission_role', 'id'));
        $this->assertEquals('bigint', Schema::getColumnType('permission_role', 'permission_id'));
        $this->assertEquals('bigint', Schema::getColumnType('permission_role', 'role_id'));
    }

    /** @test */
    public function it_has_correct_columns_in_role_user_table()
    {
        $this->assertTrue(Schema::hasTable('role_user'));

        $this->assertTrue(Schema::hasColumn('role_user', 'id'));
        $this->assertTrue(Schema::hasColumn('role_user', 'user_id'));
        $this->assertTrue(Schema::hasColumn('role_user', 'role_id'));

        $this->assertEquals('bigint', Schema::getColumnType('role_user', 'id'));
        $this->assertEquals('bigint', Schema::getColumnType('role_user', 'user_id'));
        $this->assertEquals('bigint', Schema::getColumnType('role_user', 'role_id'));
    }

    /** @test */
    public function it_has_correct_columns_in_role_settings_table()
    {
        $this->assertTrue(Schema::hasTable('settings'));

        $this->assertTrue(Schema::hasColumn('settings', 'id'));
        $this->assertTrue(Schema::hasColumn('settings', 'key'));
        $this->assertTrue(Schema::hasColumn('settings', 'value'));
        $this->assertTrue(Schema::hasColumn('settings', 'description'));

        $this->assertEquals('bigint', Schema::getColumnType('settings', 'id'));
        $this->assertEquals('varchar', Schema::getColumnType('settings', 'key'));
        $this->assertEquals('varchar', Schema::getColumnType('settings', 'value'));
        $this->assertEquals('text', Schema::getColumnType('settings', 'description'));
    }

    /** @test */
    public function it_has_correct_columns_in_media_table()
    {
        $this->assertTrue(Schema::hasTable('media'));

        $this->assertTrue(Schema::hasColumn('media', 'id'));
        $this->assertTrue(Schema::hasColumn('media', 'path'));
        $this->assertTrue(Schema::hasColumn('media', 'name'));
        $this->assertTrue(Schema::hasColumn('media', 'type'));
        $this->assertTrue(Schema::hasColumn('media', 'size'));
        $this->assertTrue(Schema::hasColumn('media', 'created_at'));
        $this->assertTrue(Schema::hasColumn('media', 'updated_at'));

        $this->assertEquals('bigint', Schema::getColumnType('media', 'id'));
        $this->assertEquals('varchar', Schema::getColumnType('media', 'path'));
        $this->assertEquals('varchar', Schema::getColumnType('media', 'name'));
        $this->assertEquals('varchar', Schema::getColumnType('media', 'type'));
        $this->assertEquals('bigint', Schema::getColumnType('media', 'size'));
        $this->assertEquals('timestamp', Schema::getColumnType('media', 'created_at'));
        $this->assertEquals('timestamp', Schema::getColumnType('media', 'updated_at'));
    }


    /** @test */
    public function it_rolls_back_migrations()
    {
        $this->assertTrue(Schema::hasTable('users'));
        $this->assertTrue(Schema::hasTable('permissions'));
        $this->assertTrue(Schema::hasTable('roles'));
        $this->assertTrue(Schema::hasTable('posts'));
        $this->assertTrue(Schema::hasTable('comments'));
        $this->assertTrue(Schema::hasTable('settings'));

        $this->artisan('migrate:rollback');

        $this->assertFalse(Schema::hasTable('users'));
        $this->assertFalse(Schema::hasTable('permissions'));
        $this->assertFalse(Schema::hasTable('roles'));
        $this->assertFalse(Schema::hasTable('posts'));
        $this->assertFalse(Schema::hasTable('comments'));
        $this->assertFalse(Schema::hasTable('settings'));

        $this->artisan('migrate');
    }

    


}
