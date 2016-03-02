<?php

namespace MathematicaTest\Geometry\Shapes\Base;

use Mathematica\Geometry\Shapes\Base\IGeometricShape;

/**
 * Class AbstractShapeTest
 * @author  Lucas A. de Araújo <lucas@painapp.com.br>
 * @package MathematicaTest\Geometry\Shapes\Base
 */
abstract class AbstractShapeTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Forma geométrica a ser testada.
     * @var IGeometricShape
     */
    private $shape;

    /**
     * Retorna a forma geométrica a ser testada.
     * @return IGeometricShape
     */
    public function getShape()
    {
        return $this->shape;
    }

    /**
     * Define a forma geométrica a ser testada.
     * @param IGeometricShape $shape
     */
    public function setShape(IGeometricShape $shape)
    {
        $this->shape = $shape;
    }
}