<?php

namespace Mathematica\Geometry\Shapes\Base;

/**
 * Class AbstractGeometryObject
 * @author  Lucas A. de Araújo <lucas@minervasistemas.com.br>
 * @package Mathematica\Geometry\Shapes\Base
 */
abstract class AbstractGeometricShape implements IGeometricShape
{
    protected $name;

    /**
     * Retorna um nome para a forma geométrica.
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Define um nome para a forma geométrica.
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param IGeometricShape $shape
     * @return bool
     */
    public function greaterAreaThan(IGeometricShape $shape)
    {
        return $this->getArea() > $shape->getArea();
    }

    /**
     * @param IGeometricShape $shape
     * @return bool
     */
    public function greaterPerimeterThan(IGeometricShape $shape)
    {
        return $this->getPerimeter() > $shape->getPerimeter();
    }
}