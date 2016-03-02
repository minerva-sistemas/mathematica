<?php

namespace MathematicaTest\Geometry\Shapes\Base;

use Mathematica\Geometry\Shapes\Base\IGeometricShape;

/**
 * Class AbstractShapeTest
 * @author  Lucas A. de Ara�jo <lucas@painapp.com.br>
 * @package MathematicaTest\Geometry\Shapes\Base
 */
abstract class AbstractShapeTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Forma geom�trica a ser testada.
     * @var IGeometricShape
     */
    private $shape;

    /**
     * Retorna a forma geom�trica a ser testada.
     * @return IGeometricShape
     */
    public function getShape()
    {
        return $this->shape;
    }

    /**
     * Define a forma geom�trica a ser testada.
     * @param IGeometricShape $shape
     */
    public function setShape(IGeometricShape $shape)
    {
        $this->shape = $shape;
    }
}