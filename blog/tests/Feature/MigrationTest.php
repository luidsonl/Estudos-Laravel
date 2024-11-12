<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Support\Facades\Schema;


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
        $this->assertTrue(Schema::hasTable('media'));
        $this->assertTrue(Schema::hasTable('users'));
        $this->assertTrue(Schema::hasTable('permissions'));
        $this->assertTrue(Schema::hasTable('roles'));
        $this->assertTrue(Schema::hasTable('permissions_roles'));
        $this->assertTrue(Schema::hasTable('posts'));
        $this->assertTrue(Schema::hasTable('post_types'));
        $this->assertTrue(Schema::hasTable('categories'));
        $this->assertTrue(Schema::hasTable('statuses'));
        $this->assertTrue(Schema::hasTable('tags'));
        $this->assertTrue(Schema::hasTable('tags_posts'));
        $this->assertTrue(Schema::hasTable('metafields'));
        $this->assertTrue(Schema::hasTable('metafields_post_types'));
        $this->assertTrue(Schema::hasTable('metafields_post_types_posts'));
        $this->assertTrue(Schema::hasTable('comments'));
        $this->assertTrue(Schema::hasTable('settings'));
    }

    /** @test */
    public function it_has_correct_columns_in_media_table()
    {
        $this->assertTrue(Schema::hasTable('media'));

        $this->assertTrue(Schema::hasColumn('media', 'id'));
        $this->assertEquals('bigint', Schema::getColumnType('media', 'id'));

        $this->assertTrue(Schema::hasColumn('media', 'path'));
        $this->assertEquals('varchar', Schema::getColumnType('media', 'path'));

        $this->assertTrue(Schema::hasColumn('media', 'name'));
        $this->assertEquals('varchar', Schema::getColumnType('media', 'name'));

        $this->assertTrue(Schema::hasColumn('media', 'description'));
        $this->assertEquals('text', Schema::getColumnType('media', 'description'));

        $this->assertTrue(Schema::hasColumn('media', 'type'));
        $this->assertEquals('varchar', Schema::getColumnType('media', 'type'));

        $this->assertTrue(Schema::hasColumn('media', 'size'));
        $this->assertEquals('bigint', Schema::getColumnType('media', 'size'));

        $this->assertTrue(Schema::hasColumn('media', 'created_at'));
        $this->assertEquals('timestamp', Schema::getColumnType('media', 'created_at'));
        
        $this->assertTrue(Schema::hasColumn('media', 'updated_at'));
        $this->assertEquals('timestamp', Schema::getColumnType('media', 'updated_at'));
    }

    /** @test */
    public function it_has_correct_columns_in_users_table()
    {
        $this->assertTrue(Schema::hasTable('users'));

        $this->assertTrue(Schema::hasColumn('users', 'id'));
        $this->assertEquals('bigint', Schema::getColumnType('users', 'id'));

        $this->assertTrue(Schema::hasColumn('users', 'email'));
        $this->assertEquals('varchar', Schema::getColumnType('users', 'email'));

        $this->assertTrue(Schema::hasColumn('users', 'password'));
        $this->assertEquals('varchar', Schema::getColumnType('users', 'password'));

        $this->assertTrue(Schema::hasColumn('users', 'media_id'));
        $this->assertEquals('bigint', Schema::getColumnType('users', 'media_id'));

        $this->assertTrue(Schema::hasColumn('users', 'name'));
        $this->assertEquals('varchar', Schema::getColumnType('users', 'name'));

        $this->assertTrue(Schema::hasColumn('users', 'role_id'));
        $this->assertEquals('bigint', Schema::getColumnType('users', 'role_id'));

        $this->assertTrue(Schema::hasColumn('users', 'is_email_notification_enabled'));
        $this->assertEquals('tinyint', Schema::getColumnType('users', 'is_email_notification_enabled'));
    }

    /** @test */
    public function it_has_correct_columns_in_permissions_table()
    {
        $this->assertTrue(Schema::hasTable('permissions'));

        $this->assertTrue(Schema::hasColumn('permissions', 'id'));
        $this->assertEquals('bigint', Schema::getColumnType('permissions', 'id'));

        $this->assertTrue(Schema::hasColumn('permissions', 'name'));
        $this->assertEquals('varchar', Schema::getColumnType('permissions', 'name'));

        $this->assertTrue(Schema::hasColumn('permissions', 'description'));
        $this->assertEquals('text', Schema::getColumnType('permissions', 'description'));

        $this->assertTrue(Schema::hasColumn('permissions', 'created_at'));
        $this->assertEquals('timestamp', Schema::getColumnType('permissions', 'created_at'));

        $this->assertTrue(Schema::hasColumn('permissions', 'updated_at'));
        $this->assertEquals('timestamp', Schema::getColumnType('permissions', 'updated_at'));
    }

    /** @test */
    public function it_has_correct_columns_in_roles_table()
    {
        $this->assertTrue(Schema::hasTable('roles'));

        $this->assertTrue(Schema::hasColumn('roles', 'id'));
        $this->assertEquals('bigint', Schema::getColumnType('roles', 'id'));

        $this->assertTrue(Schema::hasColumn('roles', 'name'));
        $this->assertEquals('varchar', Schema::getColumnType('roles', 'name'));

        $this->assertTrue(Schema::hasColumn('roles', 'description'));
        $this->assertEquals('text', Schema::getColumnType('roles', 'description'));

        $this->assertTrue(Schema::hasColumn('roles', 'created_at'));
        $this->assertEquals('timestamp', Schema::getColumnType('roles', 'created_at'));

        $this->assertTrue(Schema::hasColumn('roles', 'updated_at'));
        $this->assertEquals('timestamp', Schema::getColumnType('roles', 'updated_at'));
    }

    /** @test */
    public function it_has_correct_columns_in_permissions_roles_table()
    {
        $this->assertTrue(Schema::hasTable('permissions_roles'));

        $this->assertTrue(Schema::hasColumn('permissions_roles', 'id'));
        $this->assertEquals('bigint', Schema::getColumnType('permissions_roles', 'id'));

        $this->assertTrue(Schema::hasColumn('permissions_roles', 'permission_id'));
        $this->assertEquals('bigint', Schema::getColumnType('permissions_roles', 'permission_id'));

        $this->assertTrue(Schema::hasColumn('permissions_roles', 'role_id'));
        $this->assertEquals('bigint', Schema::getColumnType('permissions_roles', 'role_id'));

        $this->assertTrue(Schema::hasColumn('permissions_roles', 'created_at'));
        $this->assertEquals('timestamp', Schema::getColumnType('permissions_roles', 'created_at'));

        $this->assertTrue(Schema::hasColumn('permissions_roles', 'updated_at'));
        $this->assertEquals('timestamp', Schema::getColumnType('permissions_roles', 'updated_at'));
    }

    /** @test */
    public function it_has_correct_columns_in_posts_table()
    {
        $this->assertTrue(Schema::hasTable('posts'));

        $this->assertTrue(Schema::hasColumn('posts', 'id'));
        $this->assertEquals('bigint', Schema::getColumnType('posts', 'id'));

        $this->assertTrue(Schema::hasColumn('posts', 'user_id'));
        $this->assertEquals('bigint', Schema::getColumnType('posts', 'user_id'));

        $this->assertTrue(Schema::hasColumn('posts', 'media_id'));
        $this->assertEquals('bigint', Schema::getColumnType('posts', 'media_id'));

        $this->assertTrue(Schema::hasColumn('posts', 'status_id'));
        $this->assertEquals('bigint', Schema::getColumnType('posts', 'status_id'));

        $this->assertTrue(Schema::hasColumn('posts', 'category_id'));
        $this->assertEquals('bigint', Schema::getColumnType('posts', 'category_id'));

        $this->assertTrue(Schema::hasColumn('posts', 'post_type_id'));
        $this->assertEquals('bigint', Schema::getColumnType('posts', 'post_type_id'));

        $this->assertTrue(Schema::hasColumn('posts', 'is_published'));
        $this->assertEquals('tinyint', Schema::getColumnType('posts', 'is_published'));

        $this->assertTrue(Schema::hasColumn('posts', 'title'));
        $this->assertEquals('varchar', Schema::getColumnType('posts', 'title'));

        $this->assertTrue(Schema::hasColumn('posts', 'slug'));
        $this->assertEquals('varchar', Schema::getColumnType('posts', 'slug'));

        $this->assertTrue(Schema::hasColumn('posts', 'content'));
        $this->assertEquals('text', Schema::getColumnType('posts', 'content'));
        
        $this->assertTrue(Schema::hasColumn('posts', 'created_at'));
        $this->assertEquals('timestamp', Schema::getColumnType('posts', 'created_at'));

        $this->assertTrue(Schema::hasColumn('posts', 'updated_at'));
        $this->assertEquals('timestamp', Schema::getColumnType('posts', 'updated_at'));
        
    }


    /** @test */
    public function it_has_correct_columns_in_post_types_table()
    {
        $this->assertTrue(Schema::hasTable('post_types'));

        $this->assertTrue(Schema::hasColumn('post_types', 'id'));
        $this->assertEquals('bigint', Schema::getColumnType('posts', 'id'));

        $this->assertTrue(Schema::hasColumn('post_types', 'name'));
        $this->assertEquals('varchar', Schema::getColumnType('post_types', 'name'));

        $this->assertTrue(Schema::hasColumn('post_types', 'description'));
        $this->assertEquals('text', Schema::getColumnType('post_types', 'description'));

        $this->assertTrue(Schema::hasColumn('post_types', 'slug'));
        $this->assertEquals('varchar', Schema::getColumnType('post_types', 'slug'));

        $this->assertTrue(Schema::hasColumn('posts', 'created_at'));
        $this->assertEquals('timestamp', Schema::getColumnType('posts', 'created_at'));

        $this->assertTrue(Schema::hasColumn('posts', 'updated_at'));
        $this->assertEquals('timestamp', Schema::getColumnType('posts', 'updated_at'));
        
    }


    /** @test */
    public function it_has_correct_columns_in_categories_table()
    {
        $this->assertTrue(Schema::hasTable('categories'));

        $this->assertTrue(Schema::hasColumn('categories', 'id'));
        $this->assertEquals('bigint', Schema::getColumnType('categories', 'id'));

        $this->assertTrue(Schema::hasColumn('categories', 'user_id'));
        $this->assertEquals('bigint', Schema::getColumnType('categories', 'user_id'));

        $this->assertTrue(Schema::hasColumn('categories', 'title'));
        $this->assertEquals('varchar', Schema::getColumnType('categories', 'title'));

        $this->assertTrue(Schema::hasColumn('categories', 'slug'));
        $this->assertEquals('varchar', Schema::getColumnType('categories', 'slug'));

        $this->assertTrue(Schema::hasColumn('categories', 'media_id'));
        $this->assertEquals('bigint', Schema::getColumnType('categories', 'media_id'));

        $this->assertTrue(Schema::hasColumn('categories', 'description'));
        $this->assertEquals('text', Schema::getColumnType('categories', 'description'));

        $this->assertTrue(Schema::hasColumn('categories', 'status_id'));
        $this->assertEquals('bigint', Schema::getColumnType('categories', 'status_id'));

        $this->assertTrue(Schema::hasColumn('categories', 'created_at'));
        $this->assertEquals('timestamp', Schema::getColumnType('categories', 'created_at'));

        $this->assertTrue(Schema::hasColumn('categories', 'updated_at'));
        $this->assertEquals('timestamp', Schema::getColumnType('categories', 'updated_at'));
    }

    /** @test */
    public function it_has_correct_columns_in_statuses_table()
    {
        $this->assertTrue(Schema::hasTable('statuses'));

        $this->assertTrue(Schema::hasColumn('statuses', 'id'));
        $this->assertEquals('bigint', Schema::getColumnType('statuses', 'id'));

        $this->assertTrue(Schema::hasColumn('statuses', 'name'));
        $this->assertEquals('varchar', Schema::getColumnType('statuses', 'name'));

        $this->assertTrue(Schema::hasColumn('statuses', 'description'));
        $this->assertEquals('text', Schema::getColumnType('statuses', 'description'));

        $this->assertTrue(Schema::hasColumn('statuses', 'created_at'));
        $this->assertEquals('timestamp', Schema::getColumnType('statuses', 'created_at'));

        $this->assertTrue(Schema::hasColumn('statuses', 'updated_at'));
        $this->assertEquals('timestamp', Schema::getColumnType('statuses', 'updated_at'));
    }

    /** @test */
    public function it_has_correct_columns_in_tags_table()
    {
        $this->assertTrue(Schema::hasTable('tags'));

        $this->assertTrue(Schema::hasColumn('tags', 'id'));
        $this->assertEquals('bigint', Schema::getColumnType('tags', 'id'));

        $this->assertTrue(Schema::hasColumn('tags', 'name'));
        $this->assertEquals('varchar', Schema::getColumnType('tags', 'name'));

        $this->assertTrue(Schema::hasColumn('tags', 'slug'));
        $this->assertEquals('varchar', Schema::getColumnType('tags', 'slug'));

        $this->assertTrue(Schema::hasColumn('tags', 'description'));
        $this->assertEquals('text', Schema::getColumnType('tags', 'description'));

        $this->assertTrue(Schema::hasColumn('tags', 'created_at'));
        $this->assertEquals('timestamp', Schema::getColumnType('tags', 'created_at'));

        $this->assertTrue(Schema::hasColumn('tags', 'updated_at'));
        $this->assertEquals('timestamp', Schema::getColumnType('tags', 'updated_at'));
    }

    /** @test */
    public function it_has_correct_columns_in_tags_posts_table()
    {
        $this->assertTrue(Schema::hasTable('tags_posts'));

        $this->assertTrue(Schema::hasColumn('tags_posts', 'id'));
        $this->assertEquals('bigint', Schema::getColumnType('tags_posts', 'id'));

        $this->assertTrue(Schema::hasColumn('tags_posts', 'tag_id'));
        $this->assertEquals('bigint', Schema::getColumnType('tags_posts', 'tag_id'));

        $this->assertTrue(Schema::hasColumn('tags_posts', 'post_id'));
        $this->assertEquals('bigint', Schema::getColumnType('tags_posts', 'post_id'));

 
    }

    /** @test */
    public function it_has_correct_columns_in_metafields_table()
    {
        $this->assertTrue(Schema::hasTable('metafields'));

        $this->assertTrue(Schema::hasColumn('metafields', 'id'));
        $this->assertEquals('bigint', Schema::getColumnType('metafields', 'id'));

        $this->assertTrue(Schema::hasColumn('metafields', 'name'));
        $this->assertEquals('varchar', Schema::getColumnType('metafields', 'name'));

        $this->assertTrue(Schema::hasColumn('metafields', 'type'));
        $this->assertEquals('varchar', Schema::getColumnType('metafields', 'type'));

        $this->assertTrue(Schema::hasColumn('metafields', 'is_multivalued'));
        $this->assertEquals('tinyint', Schema::getColumnType('metafields', 'is_multivalued'));

        $this->assertTrue(Schema::hasColumn('posts', 'created_at'));
        $this->assertEquals('timestamp', Schema::getColumnType('metafields', 'created_at'));

        $this->assertTrue(Schema::hasColumn('posts', 'updated_at'));
        $this->assertEquals('timestamp', Schema::getColumnType('metafields', 'updated_at'));
        
    }

    /** @test */
    public function it_has_correct_columns_in_metafields_post_types_table()
    {
        $this->assertTrue(Schema::hasTable('metafields_post_types'));

        $this->assertTrue(Schema::hasColumn('metafields_post_types', 'id'));
        $this->assertEquals('bigint', Schema::getColumnType('metafields_post_types', 'id'));

        $this->assertTrue(Schema::hasColumn('metafields_post_types', 'metafield_id'));
        $this->assertEquals('bigint', Schema::getColumnType('metafields_post_types', 'metafield_id'));

        $this->assertTrue(Schema::hasColumn('metafields_post_types', 'post_type_id'));
        $this->assertEquals('bigint', Schema::getColumnType('metafields_post_types', 'post_type_id'));

        $this->assertTrue(Schema::hasColumn('metafields_post_types', 'created_at'));
        $this->assertEquals('timestamp', Schema::getColumnType('metafields_post_types', 'created_at'));

        $this->assertTrue(Schema::hasColumn('metafields_post_types', 'updated_at'));
        $this->assertEquals('timestamp', Schema::getColumnType('metafields_post_types', 'updated_at'));
        
    }

    /** @test */
    public function it_has_correct_columns_in_metafields_post_types_posts_table()
    {
        $this->assertTrue(Schema::hasTable('metafields_post_types_posts'));

        $this->assertTrue(Schema::hasColumn('metafields_post_types_posts', 'id'));
        $this->assertEquals('bigint', Schema::getColumnType('metafields_post_types_posts', 'id'));

        $this->assertTrue(Schema::hasColumn('metafields_post_types_posts', 'metafields_post_types_id'));
        $this->assertEquals('bigint', Schema::getColumnType('metafields_post_types_posts', 'metafields_post_types_id'));

        $this->assertTrue(Schema::hasColumn('metafields_post_types_posts', 'post_id'));
        $this->assertEquals('bigint', Schema::getColumnType('metafields_post_types_posts', 'post_id'));

        $this->assertTrue(Schema::hasColumn('metafields_post_types_posts', 'value'));
        $this->assertEquals('text', Schema::getColumnType('metafields_post_types_posts', 'value'));

        $this->assertTrue(Schema::hasColumn('metafields_post_types_posts', 'created_at'));
        $this->assertEquals('timestamp', Schema::getColumnType('metafields_post_types_posts', 'created_at'));

        $this->assertTrue(Schema::hasColumn('metafields_post_types_posts', 'updated_at'));
        $this->assertEquals('timestamp', Schema::getColumnType('metafields_post_types_posts', 'updated_at'));
        
    }



    /** @test */
    public function it_has_correct_columns_in_comments_table()
    {
        $this->assertTrue(Schema::hasTable('comments'));

        $this->assertTrue(Schema::hasColumn('comments', 'id'));
        $this->assertEquals('bigint', Schema::getColumnType('posts', 'id'));

        $this->assertTrue(Schema::hasColumn('comments', 'user_id'));
        $this->assertEquals('bigint', Schema::getColumnType('posts', 'user_id'));

        $this->assertTrue(Schema::hasColumn('comments', 'post_id'));
        $this->assertEquals('bigint', Schema::getColumnType('comments', 'post_id'));

        $this->assertTrue(Schema::hasColumn('comments', 'comment_id'));
        $this->assertEquals('bigint', Schema::getColumnType('comments', 'comment_id'));

        $this->assertTrue(Schema::hasColumn('comments', 'content'));
        $this->assertEquals('text', Schema::getColumnType('comments', 'content'));

        $this->assertTrue(Schema::hasColumn('posts', 'created_at'));
        $this->assertEquals('timestamp', Schema::getColumnType('posts', 'created_at'));

        $this->assertTrue(Schema::hasColumn('posts', 'updated_at'));
        $this->assertEquals('timestamp', Schema::getColumnType('posts', 'updated_at'));
        
    }

    /** @test */
    public function it_has_correct_columns_in_settings_table()
    {
        $this->assertTrue(Schema::hasTable('settings'));

        $this->assertTrue(Schema::hasColumn('settings', 'id'));
        $this->assertEquals('bigint', Schema::getColumnType('settings', 'id'));

        $this->assertTrue(Schema::hasColumn('settings', 'key'));
        $this->assertEquals('varchar', Schema::getColumnType('settings', 'key'));

        $this->assertTrue(Schema::hasColumn('settings', 'value'));
        $this->assertEquals('varchar', Schema::getColumnType('settings', 'value'));

        $this->assertTrue(Schema::hasColumn('settings', 'type'));
        $this->assertEquals('varchar', Schema::getColumnType('settings', 'type'));

        $this->assertTrue(Schema::hasColumn('settings', 'created_at'));
        $this->assertEquals('timestamp', Schema::getColumnType('settings', 'created_at'));

        $this->assertTrue(Schema::hasColumn('settings', 'updated_at'));
        $this->assertEquals('timestamp', Schema::getColumnType('settings', 'updated_at'));
    }




    /** @test */
    public function it_rolls_back_migrations()
    {
        $this->assertTrue(Schema::hasTable('media'));
        $this->assertTrue(Schema::hasTable('users'));
        $this->assertTrue(Schema::hasTable('permissions'));
        $this->assertTrue(Schema::hasTable('roles'));
        $this->assertTrue(Schema::hasTable('permissions_roles'));
        $this->assertTrue(Schema::hasTable('posts'));
        $this->assertTrue(Schema::hasTable('post_types'));
        $this->assertTrue(Schema::hasTable('categories'));
        $this->assertTrue(Schema::hasTable('statuses'));
        $this->assertTrue(Schema::hasTable('tags'));
        $this->assertTrue(Schema::hasTable('tags_posts'));
        $this->assertTrue(Schema::hasTable('metafields'));
        $this->assertTrue(Schema::hasTable('metafields_post_types'));
        $this->assertTrue(Schema::hasTable('metafields_post_types_posts'));
        $this->assertTrue(Schema::hasTable('comments'));
        $this->assertTrue(Schema::hasTable('settings'));

        $this->artisan('migrate:rollback');

        $this->assertFalse(Schema::hasTable('media'));
        $this->assertFalse(Schema::hasTable('users'));
        $this->assertFalse(Schema::hasTable('permissions'));
        $this->assertFalse(Schema::hasTable('roles'));
        $this->assertFalse(Schema::hasTable('permissions_roles'));
        $this->assertFalse(Schema::hasTable('posts'));
        $this->assertFalse(Schema::hasTable('post_types'));
        $this->assertFalse(Schema::hasTable('categories'));
        $this->assertFalse(Schema::hasTable('statuses'));
        $this->assertFalse(Schema::hasTable('tags'));
        $this->assertFalse(Schema::hasTable('tags_posts'));
        $this->assertFalse(Schema::hasTable('metafields'));
        $this->assertFalse(Schema::hasTable('metafields_post_types'));
        $this->assertFalse(Schema::hasTable('metafields_post_types_posts'));
        $this->assertFalse(Schema::hasTable('comments'));
        $this->assertFalse(Schema::hasTable('settings'));

        $this->artisan('migrate');
    }


}
