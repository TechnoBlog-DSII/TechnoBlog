<?php

namespace Tests\Unit;

use Dotenv\Validator;
use PHPUnit\Framework\TestCase;
use App\Models\User;

class InicioSesionTest extends TestCase
{
    /**
     * A basic test example.
     */
    
    public function test_comprobar_email()
    {
        $usuario = new User(['Sergio Escudero', 'sergioset7@gmail.com', 'Ornitorrinco2831!']);
        $correo = 'sergioset7@gmail.com';
                
        $this->assertContains('@', str_split($correo), 'Se necesita un @ en el email');
    }
        
}
