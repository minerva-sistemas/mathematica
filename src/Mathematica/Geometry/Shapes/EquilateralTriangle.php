<?php

namespace Mathematica\Geometry\Shapes;

use Mathematica\Geometry\Shapes\Base\AbstractTriangle;

/**
 * Class EquilateralTriangle
 * @author  Luan Maik Cordeiro <luanmaik1994@gmail.com>
 * @package Mathematica\Geometry\Shapes
 */
class EquilateralTriangle extends AbstractTriangle
{
    /**
     * EquilateralTriangle constructor.
     * @throws \InvalidArgumentException
     */
    public function __construct($edgeSize)
    {
        if(!is_numeric($edgeSize))
            throw new \InvalidArgumentException("É necessário informar apenas numeros como argumento");

        $this->setEdgeX($edgeSize);
        $this->setEdgeY($edgeSize);
        $this->setEdgeZ($edgeSize);
    }

    /**
     * Retorna a área do triângulo.
     * @return float
     */
    public function getArea()
    {
        $height = ($this->getEdgeX() / 2) * sqrt(3);
        $area = ($this->getEdgeX() * $height) / 2;
        return $area;
    }
}