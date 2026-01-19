<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    public function test_the_application_returns_a_successful_response(): void
    {
        // 1. Creamos el usuario manualmente como lo haces en tu app
        // Usamos campos que coincidan con tus migraciones (name, username, email, password)
        $user = User::create([
            'name' => 'Eduardo',
            'username' => 'eduardo123',
            'email' => 'edu@example.com',
            'password' => Hash::make('password123'),
        ]);

        // 2. Autenticamos al usuario que acabamos de crear
        $this->actingAs($user);

        // 3. Ahora intentamos entrar a la home
        $response = $this->get('/');

        // 4. Al estar autenticado, ya no habrá 302, sino 200 (OK)
        $response->assertStatus(200);
    }
}