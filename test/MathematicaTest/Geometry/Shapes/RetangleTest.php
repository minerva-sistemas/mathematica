<?php

namespace MathematicaTest\Geometry\Shapes;

use Mathematica\Geometry\Shapes\Retangle;
use MathematicaTest\Geometry\Shapes\Base\AbstractShapeTest;

/**
 * Teste unitário para a forma geométrica do retangulo.
 * @author  Luan Maik Cordeiro <luanmaik1994@gmail.com>
 * @package MathematicaTest\Geometry\Shapes
 */
class RetangleTest extends AbstractShapeTest
{
    /**
     * Define a forma geométrica a ser testada.
     */
    public function setUp()
    {
        // Configura o retangulo
        $retangle = new Retangle();
        $retangle->setName('Retangulo de Testes');
        $retangle->setEdgeY(20);
        $retangle->setEdgeX(35);

        // Define o retangulo a ser testado
        $this->setShape($retangle);
    }

    /**
     * Verifica se o calculo da area foi feito corretamente.
     */
    public function testRetangleAreaCalculation()
    {
        $this->assertEquals($this->getShape()->getArea(), 700);
    }

    /**
     * Verifica se o calculo do perimetro foi feito corretamente.
     */
    public function testSquarePerimeterCalculation()
    {
        $this->assertEquals($this->getShape()->getPerimeter(), 110);
    }

    /**
     * Testa as comparações de medidas entre dois objetos.
     */
    public function testGeometricalComparation()
    {
        // Configura o retangulo
        $tinyRetangle = new Retangle();
        $tinyRetangle->setName('Retangulo de Testes');
        $tinyRetangle->setEdgeY(15);
        $tinyRetangle->setEdgeX(30);

        $this->assertTrue($this->getShape()->greaterAreaThan($tinyRetangle));
        $this->assertTrue($this->getShape()->greaterPerimeterThan($tinyRetangle));

        $this->assertNotTrue($tinyRetangle->greaterAreaThan($this->getShape()));
        $this->assertNotTrue($tinyRetangle->greaterPerimeterThan($this->getShape()));
    }
}