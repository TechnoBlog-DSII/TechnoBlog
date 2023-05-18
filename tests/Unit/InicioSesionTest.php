<?php

namespace Tests\Unit;

use Dotenv\Validator;
use PHPUnit\Framework\TestCase;
use App\Models\User;
use App\Models\Usuario;

class InicioSesionTest extends TestCase
{
    /**
     * A basic test example.
     */
    
    public function test_comprobar_email()
    {
        $usuario = new User(['Sergio Escudero', 'sergioset7@gmail.com', 'Ornitorrinco2831!']);
        $usuarioprueba = new Usuario(20, 'Sergio Escudero');
        $correo = 'sergioset7@gmail.com';
        
        $this->assertSame(20, $usuarioprueba->tellAge());
        // $this->assertContains('@', $usuario[2], 'Se necesita un @ en el email');
    }
        
}
