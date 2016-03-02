<?php

namespace Mathematica\Geometry\Shapes\Base;

/**
 * Interface IGeometricShape
 * @author  Lucas A. de Araújo <lucas@minervasistemas.com.br>
 * @package Mathematica\Geometry\Shapes\Base
 */
interface IGeometricShape
{
    /**
     * Retorna um nome para a forma geométrica.
     * @return string
     */
    public function getName();

    /**
     * Define um nome para a forma geométrica.
     * @param string $name
     * @return void
     */
    public function setName($name);

    /**
     * Retorna a área da forma geométrica.
     * @return float
     */
    public function getArea();

    /**
     * Retorna o perímetro de uma forma geométrica.
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