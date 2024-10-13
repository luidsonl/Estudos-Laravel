<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Criar algumas permissões
         $createPost = Permission::create(['name' => 'create_post']);
         $editPost = Permission::create(['name' => 'edit_post']);
         $deletePost = Permission::create(['name' => 'delete_post']);
 
         // Criar algumas roles
         $admin = Role::create(['name' => 'admin']);
         $editor = Role::create(['name' => 'editor']);
         $user = Role::create(['name' => 'user']);
 
         // Atribuir permissões às roles
         $admin->permissions()->attach([$createPost->id, $editPost->id, $deletePost->id]);
         $editor->permissions()->attach([$createPost->id, $editPost->id]);
    }
}
