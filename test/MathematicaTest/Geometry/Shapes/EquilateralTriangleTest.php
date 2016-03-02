<?php

namespace MathematicaTest\Geometry\Shapes;

use MathematicaTest\Geometry\Shapes\Base\AbstractShapeTest;
use Mathematica\Geometry\Shapes\EquilateralTriangle;

/**
 * Teste unitário para a forma geométrica do triângulo equilateral.
 * @author  Luan Maik Cordeiro <luanmaik1994@gmail.com>
 * @package MathematicaTest\Geometry\Shapes
 */
class EquilateralTriangleTest extends AbstractShapeTest
{
    /**
     * Define a forma geométrica a ser testada.
     */
    public function setUp(){
        $triangle = new EquilateralTriangle(10);
        $this->setShape($triangle);
    }

    /**
     * Verifica se o calculo da area foi feito corretamente.
     */
    public function testTriangleArea()
    {
        //Valores na operação foram convertidos para Integer para que não divergenciem em valores decimais
        $this->assertEquals((int)$this->getShape()->getArea(), 43);
    }

    /**
     * Verifica se o calculo do perimetro foi feito corretamente.
     */
    public function testTrianglePerimeter()
    {
        $this->assertEquals($this->getShape()->getPerimeter(), 30);
    }

    /**
     * Testa as comparações de medidas entre dois objetos.
     */
    public function testGeometricalComparation()
    {
        // Configura o triangulo de lado 5
        $tinyTriangle = new EquilateralTriangle(5);
        $tinyTriangle->setName('Triangulo de Testes');

        $this->assertTrue($this->getShape()->greaterAreaThan($tinyTriangle));
        $this->assertTrue($this->getShape()->greaterPerimeterThan($tinyTriangle));

        $this->assertNotTrue($tinyTriangle->greaterAreaThan($this->getShape()));
        $this->assertNotTrue($tinyTriangle->greaterPerimeterThan($this->getShape()));
    }
}