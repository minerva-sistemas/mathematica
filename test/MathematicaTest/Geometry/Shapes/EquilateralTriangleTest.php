<?php
/**
 * Created by PhpStorm.
 * User: Luan Maik
 * Date: 02/03/2016
 * Time: 12:02
 */

namespace MathematicaTest\Geometry\Shapes;


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
}