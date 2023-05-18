<?php

namespace Tests\Unit;

use Dotenv\Validator;
use PHPUnit\Framework\TestCase;
use App\Models\User;

class RegistroTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_comprobar_nombre()
    {
        $usuario = new User(['Sergio Escudero', 'sergioset7@gmail.com', 'Ornitorrinco2831!']);
        $nombre = 'Sergio Escudero';

        $this->assertNotNull($nombre, 'El nombre no puede estar vacio');
    }
    public function test_comprobar_email()
    {
        $usuario = new User(['Sergio Escudero', 'sergioset7@gmail.com', 'Ornitorrinco2831!']);
        $correo = 'sergioset7@gmail.com';

        $this->assertContains('@', str_split($correo), 'Se necesita un @ en el email');
    }

    public function test_comprobar_password()
    {
        $usuario = new User(['Sergio Escudero', 'sergioset7@gmail.com', 'Ornitorrinco2831!']);
        $contrasenia = 'Ornitorrinco2831!';

        $this->assertNotNull($contrasenia, 'La contraseña no puede estar vacia');
    }
}
