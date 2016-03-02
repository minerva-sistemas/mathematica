<?php

namespace Mathematica\Geometry\Shapes;

use Mathematica\Geometry\Shapes\Base\AbstractTriangle;

/**
 * Class ScaleneTriangle
 * @author  Luan Maik Cordeiro <luanmaik1994@gmail.com>
 * @package Mathematica\Geometry\Shapes
 */
class ScaleneTriangle extends AbstractTriangle
{
    /**
     * ScaleneTriangle constructor.
     * @throws \InvalidArgumentException
     */
    public function __construct($edgeSizeX, $edgeSizeY, $edgeSizeZ)
    {
        if(!is_numeric($edgeSizeX) or !is_numeric($edgeSizeY) or !is_numeric($edgeSizeZ))
            throw new \InvalidArgumentException("É necessário informar apenas números como argumento");

        $this->setEdgeX($edgeSizeX);
        $this->setEdgeY($edgeSizeY);
        $this->setEdgeZ($edgeSizeZ);
    }

    /**
     * Retorna a área do triângulo.
     * @return float
     */
    public function getArea()
    {
        //Fórmula de Heron
        // p = (a+b+c)/2
        // sqrt(p(p-a)(p-b)(p-c))
        $p = ($this->getEdgeX() + $this->getEdgeY() + $this->getEdgeZ()) /2;
        $area = sqrt($p*($p - $this->getEdgeX())*($p - $this->getEdgeY())*($p - $this->getEdgeZ()));
        return $area;
    }
}