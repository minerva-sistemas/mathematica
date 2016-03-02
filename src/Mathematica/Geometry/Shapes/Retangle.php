<?php

namespace Mathematica\Geometry\Shapes;

use Mathematica\Geometry\Shapes\Base\AbstractGeometricShape;

/**
 * Class Retangle
 * @author  Luan Maik Cordeiro <luanmaik1994@gmail.com>
 * @package Mathematica\Geometry\Shapes
 */
class Retangle extends AbstractGeometricShape
{
    /**
     * Tamanho da aresta Y
     * @var float
     */
    private $edgeY;

    /**
     * Tamanho da aresta X
     * @var float
     */
    private $edgeX;

    /**
     * Retorna o tamanho da aresta Y
     * @return float
     */
    public function getEdgeY()
    {
        return $this->edgeY;
    }

    /**
     * Define o tamanho da aresta Y
     * @param float $edgeY
     */
    public function setEdgeY($edgeY)
    {
        $this->edgeY = $edgeY;
    }

    /**
     * Retorna o tamanho da aresta Y
     * @return float
     */
    public function getEdgeX()
    {
        return $this->edgeX;
    }

    /**
     * Define o tamanho da aresta X
     * @param float $edgeX
     */
    public function setEdgeX($edgeX)
    {
        $this->edgeX = $edgeX;
    }

    /**
     * Retorna a Área do Retangulo.
     * @return float
     */
    public function getArea()
    {
        return $this->getEdgeY() * $this->getEdgeX();
    }

    /**
     * Retorna o perímetro do Retangulo.
     * @return float
     */
    public function getPerimeter()
    {
        return ($this->getEdgeY() * 2) + ($this->getEdgeX() * 2);
    }
}