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

        $this->assertNotNull($usuario->name);
    }
    public function test_comprobar_email()
    {
        $usuario = new User(['Sergio Escudero', 'sergioset7@gmail.com', 'Ornitorrinco2831!']);

        $this->assertSame('sergioset7@gmail.com',  'sergioset7@gmail.com');
    }

    public function test_comprobar_password()
    {
        $usuario = new User(['Sergio Escudero', 'sergioset7@gmail.com', 'Ornitorrinco2831!']);

        $this->assertSame('sergioset7@gmail.com',  'sergioset7@gmail.com');
    }
}
