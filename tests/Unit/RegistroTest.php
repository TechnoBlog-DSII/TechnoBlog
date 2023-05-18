<?php

namespace Tests\Unit;

use Dotenv\Validator;
use PHPUnit\Framework\TestCase;
use App\Models\User;
use App\Models\Usuario;

class RegistroTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_comprobar_nombre()
    {
        // $usuario = new User(['Sergio Escudero', 'sergioset7@gmail.com', 'Ornitorrinco2831!']);
        $usuarioprueba = new Usuario('Sergio Escudero', 'sergioset7@gmail.com', 20, 'Ornitorrinco2831!');

        $this->assertNotNull($usuarioprueba->name, 'El nombre no puede estar vacio');
    }
    public function test_comprobar_email()
    {
        // $usuario = new User(['Sergio Escudero', 'sergioset7@gmail.com', 'Ornitorrinco2831!']);
        $usuarioprueba = new Usuario('Sergio Escudero', 'sergioset7@gmail.com', 20, 'Ornitorrinco2831!');

        $this->assertContains('@', str_split($usuarioprueba->email), 'Se necesita un @ en el email');
    }

    public function test_comprobar_password()
    {
        // $usuario = new User(['Sergio Escudero', 'sergioset7@gmail.com', 'Ornitorrinco2831!']);
        $usuarioprueba = new Usuario('Sergio Escudero', 'sergioset7@gmail.com', 20, 'Ornitorrinco2831!');

        $this->assertNotNull($usuarioprueba->password, 'La contraseña no puede estar vacia');
    }
}
