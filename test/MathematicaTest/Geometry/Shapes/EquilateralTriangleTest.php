<?php
/**
 * Created by PhpStorm.
 * User: Luan Maik
 * Date: 02/03/2016
 * Time: 12:02
 */

namespace MathematicaTest\Geometry\Shapes;

use MathematicaTest\Geometry\Shapes\Base\AbstractShapeTest;
use Mathematica\Geometry\Shapes\EquilateralTriangle;

class EquilateralTriangleTest extends AbstractShapeTest
{
    public function setUp(){
        $triangle = new EquilateralTriangle(10);
        $this->setShape($triangle);
    }

    public function testTriangleArea()
    {
        //Valores na operação foram convertidos para Integer para que não divergenciem em valores decimais
        $this->assertEquals((int)$this->getShape()->getArea(), 43);
    }

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