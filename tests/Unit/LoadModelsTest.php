<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class LoadModelsTest extends TestCase
{
    /**
     * Esto es un test unitario.
     */
    public function test_modeloForo()
    {
        $this->assertFileExists('app/Models/ForoPruebas.php', 'El modelo Foro no existe');
    }

    public function test_modeloUsuario()
    {
        $this->assertFileExists('app/Models/UsuarioPruebas.php', 'El modelo Usuario no existe');
    }

    public function test_modeloCategoria()
    {
        $this->assertFileExists('app/Models/CategoriaPruebas.php', 'El modelo Categoria no existe');
    }
}
