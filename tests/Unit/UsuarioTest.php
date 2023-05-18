<?php

namespace Tests\Unit;

use Dotenv\Validator;
use PHPUnit\Framework\TestCase;
use App\Models\User;
use App\Models\Usuario;

use Ramsey\Uuid\Generator\DefaultNameGenerator;
use function PHPUnit\Framework\assertSame;

class UsuarioTest extends TestCase
{
    /**
     * A basic test example.
     */
    
    public function test_defaultNombre()
    {
        // $usuario = new User(['Sergio Escudero', 'sergioset7@gmail.com', 'Ornitorrinco2831!']);
        $usuarioprueba = new Usuario('Sergio Escudero', 'sergioset7@gmail.com', 20, 'Ornitorrinco2831!');
        $usuarioprueba->defaultName('Mauricio Casierras');

        $this.assertSame($usuarioprueba->name, 'Mauricio Casierras');
    }
        
}
