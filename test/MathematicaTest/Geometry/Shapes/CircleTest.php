<?php

namespace MathematicaTest\Geometry\Shapes;

use Mathematica\Geometry\Shapes\Circle;
use MathematicaTest\Geometry\Shapes\Base\AbstractShapeTest;

/**
 * Teste unitário para a forma geométrica do circulo.
 * @author  Luan Maik Cordeiro <luanmaik1994@gmail.com>
 * @package MathematicaTest\Geometry\Shapes
 */
class CircleTest extends AbstractShapeTest
{
    /**
     * Define a forma geométrica a ser testada.
     */
    public function setUp()
    {
        // Configura o quadrado
        $circle = new Circle();
        $circle->setName('Circulo de Testes');
        $circle->setRadius(5);

        // Define o circulo a ser testado
        $this->setShape($circle);
    }

    /**
     * Verifica se o calculo da area foi feito corretamente.
     */
    public function testCircleAreaCalculation()
    {
        $this->assertEquals((int)$this->getShape()->getArea(), 78);
    }

    /**
     * Verifica se o calculo do perimetro foi feito corretamente.
     */
    public function testCirclePerimeterCalculation()
    {
        $this->assertEquals((int)$this->getShape()->getPerimeter(), 31);
    }

    /**
     * Testa as comparações de medidas entre dois objetos.
     */
    public function testGeometricalComparation()
    {
        // Configura o circulo
        $tinyCircle = new Circle();
        $tinyCircle->setName('Circulo de Testes');
        $tinyCircle->setRadius(2);

        $this->assertTrue($this->getShape()->greaterAreaThan($tinyCircle));
        $this->assertTrue($this->getShape()->greaterPerimeterThan($tinyCircle));

        $this->assertNotTrue($tinyCircle->greaterAreaThan($this->getShape()));
        $this->assertNotTrue($tinyCircle->greaterPerimeterThan($this->getShape()));
    }
}