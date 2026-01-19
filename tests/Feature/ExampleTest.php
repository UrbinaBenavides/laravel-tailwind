<?php

namespace Tests\Feature;

use App\Models\User; // Asegúrate de importar el modelo User
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase; // Esto limpia la base de datos después de cada test

    public function test_the_application_returns_a_successful_response(): void
    {
        // 1. Creamos un usuario de prueba usando el Factory
        $user = User::factory()->create();

        // 2. Usamos 'actingAs' para decirle a Laravel que este usuario está logueado
        $response = $this->actingAs($user)->get('/');

        // 3. Ahora sí, debería devolver 200 en lugar de redireccionar al login
        $response->assertStatus(200);
    }
}