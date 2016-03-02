<?php

namespace Mathematica\Geometry\Shapes\Base;

/**
 * Interface IGeometricShape
 * @author  Lucas A. de Ara�jo <lucas@minervasistemas.com.br>
 * @package Mathematica\Geometry\Shapes\Base
 */
interface IGeometricShape
{
    /**
     * Retorna um nome para a forma geom�trica.
     * @return string
     */
    public function getName();

    /**
     * Define um nome para a forma geom�trica.
     * @param string $name
     * @return void
     */
    public function setName($name);

    /**
     * Retorna a �rea da forma geom�trica.
     * @return float
     */
    public function getArea();

    /**
     * Retorna o per�metro de uma forma geom�trica.
     * @return float
     */
    public function getPerimeter();

    /**
     * @param IGeometricShape $shape
     * @return bool
     */
    public function greaterAreaThan(IGeometricShape $shape);

    /**
     * @param IGeometricShape $shape
     * @return bool
     */
    public function greaterPerimeterThan(IGeometricShape $shape);
}