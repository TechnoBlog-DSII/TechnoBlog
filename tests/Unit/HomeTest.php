<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomeTest extends TestCase
{
    /**
     * Esto es un test de integración.
     */
    public function test_LoadHome(): void
    {
        $respuesta = $this->get('/');
        // $respuesta->assertStatus(200);
        $respuesta->assertSee('Bienvenido a TechnoBlog');
    }
}
