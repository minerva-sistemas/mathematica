<?php

namespace Mathematica\Geometry\Shapes;

use Mathematica\Geometry\Shapes\Base\AbstractTriangle;

/**
 * Class IsoscelesTriangle
 * @author  Luan Maik Cordeiro <luanmaik1994@gmail.com>
 * @package Mathematica\Geometry\Shapes
 */
class IsoscelesTriangle extends AbstractTriangle
{
    /**
     * IsoscelesTriangle constructor.
     * @throws \InvalidArgumentException
     */
    public function __construct($edgeEquals, $edgeDifferent)
    {
        if(!is_numeric($edgeEquals) or !is_numeric($edgeDifferent))
            throw new \InvalidArgumentException("É necessário informar apenas números como argumento");

        $this->setEdgeX($edgeDifferent);
        $this->setEdgeY($edgeEquals);
        $this->setEdgeZ($edgeEquals);
    }

    /**
     * Retorna a área do triângulo.
     * @return float
     */
    public function getArea()
    {
        //10 , 5 = 24.20614591379636
        $height = sqrt(($this->getEdgeY()*$this->getEdgeY()) - (($this->getEdgeX()*$this->getEdgeX())/4));
        $area = ($this->getEdgeX() * $height) / 2;
        return $area;
    }
}