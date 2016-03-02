<?php

namespace MathematicaTest\Geometry\Shapes;

use MathematicaTest\Geometry\Shapes\Base\AbstractShapeTest;
use Mathematica\Geometry\Shapes\IsoscelesTriangle;

/**
 * Teste unitário para a forma geométrica do triângulo isoceles.
 * @author  Luan Maik Cordeiro <luanmaik1994@gmail.com>
 * @package MathematicaTest\Geometry\Shapes
 */
class IsoscelesTriangleTest extends AbstractShapeTest
{
    /**
     * Define a forma geométrica a ser testada.
     */
    public function setUp(){
        $triangle = new IsoscelesTriangle(10,5);
        $this->setShape($triangle);
    }

    /**
     * Verifica se o calculo da area foi feito corretamente.
     */
    public function testTriangleArea()
    {
        //Valores na operação são convertidos para Integer para que não se divergenciem em valores decimais
        $this->assertEquals((int)$this->getShape()->getArea(), 24);
    }

    /**
     * Verifica se o calculo do perimetro foi feito corretamente.
     */
    public function testTrianglePerimeter()
    {
        $this->assertEquals($this->getShape()->getPerimeter(), 25);
    }

    /**
     * Testa as comparações de medidas entre dois objetos.
     */
    public function testGeometricalComparation()
    {
        // Configura o triangulo de lado 7,7,3
        $tinyTriangle = new IsoscelesTriangle(7,3);

        $this->assertTrue($this->getShape()->greaterAreaThan($tinyTriangle));
        $this->assertTrue($this->getShape()->greaterPerimeterThan($tinyTriangle));

        $this->assertNotTrue($tinyTriangle->greaterAreaThan($this->getShape()));
        $this->assertNotTrue($tinyTriangle->greaterPerimeterThan($this->getShape()));
    }
}