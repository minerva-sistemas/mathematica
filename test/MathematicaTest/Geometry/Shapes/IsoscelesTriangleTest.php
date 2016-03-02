<?php

namespace MathematicaTest\Geometry\Shapes;

use MathematicaTest\Geometry\Shapes\Base\AbstractShapeTest;
use Mathematica\Geometry\Shapes\IsoscelesTriangle;

class IsoscelesTriangleTest extends AbstractShapeTest
{
    public function setUp(){
        $triangle = new IsoscelesTriangle(10,5);
        $this->setShape($triangle);
    }

    public function testTriangleArea()
    {
        //Valores na operação são convertidos para Integer para que não se divergenciem em valores decimais
        $this->assertEquals((int)$this->getShape()->getArea(), 24);
    }

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