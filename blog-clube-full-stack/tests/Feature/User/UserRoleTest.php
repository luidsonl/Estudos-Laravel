<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Role;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserRoleTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
    }

    /** @test */
    public function it_can_assign_role_to_user()
    {
        // Criação de um usuário e uma role
        $user = User::factory()->create();
        $role = Role::factory()->create(['name' => 'admin']);

        // Atribuindo a role ao usuário
        $user->roles()->attach($role->id);

        // Verificando se a role foi atribuída corretamente
        $this->assertTrue($user->roles->contains($role));
    }

    /** @test */
    public function it_can_remove_role_from_user()
    {
        // Criação de um usuário e uma role
        $user = User::factory()->create();
        $role = Role::factory()->create(['name' => 'admin']);

        // Atribuindo a role ao usuário
        $user->roles()->attach($role->id);

        // Removendo a role do usuário
        $user->roles()->detach($role->id);

        // Verificando se a role foi removida corretamente
        $this->assertFalse($user->roles->contains($role));
    }

    /** @test */
    public function it_can_assign_multiple_roles_to_user()
    {
        // Criação de um usuário
        $user = User::factory()->create();

        // Criação de múltiplas roles
        $roleAdmin = Role::factory()->create(['name' => 'admin']);
        $roleEditor = Role::factory()->create(['name' => 'editor']);

        // Atribuindo múltiplas roles ao usuário
        $user->roles()->attach([$roleAdmin->id, $roleEditor->id]);

        // Verificando se as roles foram atribuídas corretamente
        $this->assertTrue($user->roles->contains($roleAdmin));
        $this->assertTrue($user->roles->contains($roleEditor));
    }
}
