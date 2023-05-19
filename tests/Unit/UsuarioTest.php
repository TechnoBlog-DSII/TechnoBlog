<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Usuario;

use Ramsey\Uuid\Generator\DefaultNameGenerator;
use function PHPUnit\Framework\assertSame;

class UsuarioTest extends TestCase
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
    public function test_actualizarNombre()
    {
        // $usuario = new User(['Sergio Escudero', 'sergioset7@gmail.com', 'Ornitorrinco2831!']);
        $usuarioprueba = new Usuario('Sergio Escudero', 'sergioset7@gmail.com', 20, 'Ornitorrinco2831!');
        $usuarioprueba->cambiarNombre('Mauricio Casierras');

        $this->assertSame($usuarioprueba->name, 'Mauricio Casierras');
    }
    public function test_actualizarEdad()
    {
        // $usuario = new User(['Sergio Escudero', 'sergioset7@gmail.com', 'Ornitorrinco2831!']);
        $usuarioprueba = new Usuario('Sergio Escudero', 'sergioset7@gmail.com', 20, 'Ornitorrinco2831!');
        $usuarioprueba->cambiarEdad(21);

        $this->assertSame($usuarioprueba->age, 21);
    }
    public function test_actualizarEmail()
    {
        // $usuario = new User(['Sergio Escudero', 'sergioset7@gmail.com', 'Ornitorrinco2831!']);
        $usuarioprueba = new Usuario('Sergio Escudero', 'sergioset7@gmail.com', 20, 'Ornitorrinco2831!');
        $usuarioprueba->cambiarEmail('estado@gobierno.com');

        $this->assertSame($usuarioprueba->email, 'estado@gobierno.com');
    }
    public function test_actualizarPassword()
    {
        // $usuario = new User(['Sergio Escudero', 'sergioset7@gmail.com', 'Ornitorrinco2831!']);
        $usuarioprueba = new Usuario('Sergio Escudero', 'sergioset7@gmail.com', 20, 'Ornitorrinco2831!');
        $usuarioprueba->cambiarPassword('Eagle2831!');

        $this->assertSame($usuarioprueba->password, 'Eagle2831!');
    }


}
