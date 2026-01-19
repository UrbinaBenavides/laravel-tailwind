<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;

class ExampleTest extends TestCase
{
    public function test_the_application_returns_a_successful_response(): void
    {
        // Creamos un usuario de prueba en la base de datos (MySQL 8.4 del CI)
        $user = User::factory()->create();

        // Actuamos como ese usuario y entramos a la home
        $response = $this->actingAs($user)->get('/');

        $response->assertStatus(200);
    }
}
