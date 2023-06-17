<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\CategoriaPruebas;

class CategoriaTest extends TestCase
{
    /**
     * Esto es un test unitario.
     */
    public function test_comprobar_nombre_categoria()
    {
        $categoriaPrueba = new CategoriaPruebas('Inteligencia Artificial');

        $this->assertNotNull($categoriaPrueba->name, 'El nombre de una categoria no puede estar vacio');
    }
}
