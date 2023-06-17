<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Category;

use Ramsey\Uuid\Generator\DefaultNameGenerator;
use function PHPUnit\Framework\assertSame;

class CategoryTest extends TestCase
{
    /**
     * A basic test example.
     */


    public function test_comprobar_nombre_categoria()
    {
        $usuarioprueba = new Category(['Inteligencia Artificial']);

        $this->assertNotNull($usuarioprueba->name, 'El nombre de una categoria no puede estar vacio');
    }
}
