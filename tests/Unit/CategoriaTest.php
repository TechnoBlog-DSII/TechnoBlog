<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Categoria;

use Ramsey\Uuid\Generator\DefaultNameGenerator;
use function PHPUnit\Framework\assertSame;

class CategoriaTest extends TestCase
{
    /**
     * Esto es un test unitario.
     */
    public function test_comprobar_nombre_categoria()
    {
        $categoriaPrueba = new Categoria('Inteligencia Artificial');

        $this->assertNotNull($categoriaPrueba->name, 'El nombre de una categoria no puede estar vacio');
    }
}
