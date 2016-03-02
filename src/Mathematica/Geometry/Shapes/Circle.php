<?php

namespace Mathematica\Geometry\Shapes;

use Mathematica\Enuns\Constants;
use Mathematica\Geometry\Shapes\Base\AbstractGeometricShape;

/**
 * Class Circle
 * @author  Luan Maik Cordeiro <luanmaik1994@gmail.com>
 * @package Mathematica\Geometry\Shapes
 */
class Circle extends AbstractGeometricShape
{
    /**
     * Tamanho do raio da circunferência
     * @var float
     */
    private $radius;

    /**
     * Tamanho do diâmetro da circunferência
     * @var float
     */
    private $diameter;

    /**
     * Retorna o tamanho do raio da circunferência
     * @return float
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * Define o tamanho do raio da circunferência
     * @param float $radius
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    /**
     * Retorna o tamanho do diâmetro da circunferência
     * @return float
     */
    public function getDiameter()
    {
        return $this->diameter;
    }

    /**
     * Define o tamanho do diâmetro da circunferência
     * @param float $diameter
     */
    public function setDiameter($diameter)
    {
        $this->diameter = $diameter;
        $this->setRadius($diameter/2);
    }

    /**
     * Retorna a área da forma geométrica.
     * @return float
     */
    public function getArea()
    {
        //A = π * r²

        return Constants::Archimedes * ($this->getRadius()*$this->getRadius());
    }

    /**
     * Retorna o perímetro de uma forma geométrica.
     * @return float
     */
    public function getPerimeter()
    {
        //P = 2 * π * r,


        return 2 * Constants::Archimedes * $this->getRadius();
    }


}