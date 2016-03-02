<?php

namespace MathematicaTest\Geometry\Shapes;

use MathematicaTest\Geometry\Shapes\Base\AbstractShapeTest;
use Mathematica\Geometry\Shapes\ScaleneTriangle;

/**
 * Teste unitário para a forma geométrica do triângulo escaleno.
 * @author  Luan Maik Cordeiro <luanmaik1994@gmail.com>
 * @package MathematicaTest\Geometry\Shapes
 */
class ScaleneTriangleTest extends AbstractShapeTest
{
    /**
     * Define a forma geométrica a ser testada.
     */
    public function setUp(){
        $triangle = new ScaleneTriangle(14,9,7);
        $this->setShape($triangle);
    }

    /**
     * Verifica se o calculo da area foi feito corretamente.
     */
    public function testTriangleArea()
    {
        //Valores na operação são convertidos para Integer para que não se divergenciem em valores decimais
        $this->assertEquals((int)$this->getShape()->getArea(), 26);
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
        // Configura o triangulo de lado 10,7,5
        $tinyTriangle = new ScaleneTriangle(10,7,5);

        $this->assertTrue($this->getShape()->greaterAreaThan($tinyTriangle));
        $this->assertTrue($this->getShape()->greaterPerimeterThan($tinyTriangle));

        $this->assertNotTrue($tinyTriangle->greaterAreaThan($this->getShape()));
        $this->assertNotTrue($tinyTriangle->greaterPerimeterThan($this->getShape()));
    }
}