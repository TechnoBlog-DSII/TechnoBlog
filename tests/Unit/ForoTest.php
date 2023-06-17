<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\ForoPruebas;

class ForoTest extends TestCase
{
    /**
     * Esto es un test unitario.
     */
    public function test_comprobar_titulo()
    {
        $datos = [
            'title' => 'La tecnología en el mundo',
            'slug' => 'la-tecnologia-en-el-mundo',
            'description' => 'Explorando los avances tecnológicos',
            'content' => 'En el mundo actual, la tecnología ha revolucionado nuestras vidas de diversas formas. Desde la comunicación hasta la medicina, pasando por la industria y el entretenimiento, la tecnología se encuentra presente en todas las esferas de nuestra sociedad. En este artículo, exploraremos algunos de los avances tecnológicos más destacados y su impacto en el mundo.',
            'image' => 'imagen.jpg',
            'is_published' => true,
            'published_at' => 'PROBANDO',
            'category_id' => 1,
            'user_id' => 1,
        ];

        $foroprueba = new ForoPruebas($datos);

        $this->assertNotNull($foroprueba->title, 'El título no puede ser vacio');
    }
}
