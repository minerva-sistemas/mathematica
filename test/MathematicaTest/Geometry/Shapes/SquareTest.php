<?php

namespace MathematicaTest\Geometry\Shapes;

use Mathematica\Geometry\Shapes\Square;
use MathematicaTest\Geometry\Shapes\Base\AbstractShapeTest;

/**
 * Teste unitário para a forma geométrica do quadrado.
 * @author  Lucas A. de Araújo <lucas@minervasistemas.com.br>
 * @package MathematicaTest\Geometry\Shapes
 */
class SquareTest extends AbstractShapeTest
{
    /**
     * Define a forma geométrica a ser testada.
     */
    public function setUp()
    {
        // Configura o quadrado
        $square = new Square();
        $square->setName('Quadrado de Testes');
        $square->setEdgeSize(10);

        // Define o quadrado a ser testado
        $this->setShape($square);
    }

    /**
     * Verifica se o calculo da area foi feito corretamente.
     */
    public function testSquareAreaCalculation()
    {
        $this->assertEquals($this->getShape()->getArea(), 100);
    }

    /**
     * Verifica se o calculo do perimetro foi feito corretamente.
     */
    public function testSquarePerimeterCalculation()
    {
        $this->assertEquals($this->getShape()->getPerimeter(), 40);
    }

    /**
     * Testa as comparações de medidas entre dois objetos.
     */
    public function testGeometricalComparation()
    {
        // Configura o quadrado
        $tinySquare = new Square();
        $tinySquare->setName('Quadrado de Testes');
        $tinySquare->setEdgeSize(5);

        $this->assertTrue($this->getShape()->greaterAreaThan($tinySquare));
        $this->assertTrue($this->getShape()->greaterPerimeterThan($tinySquare));

        $this->assertNotTrue($tinySquare->greaterAreaThan($this->getShape()));
        $this->assertNotTrue($tinySquare->greaterPerimeterThan($this->getShape()));
    }
}