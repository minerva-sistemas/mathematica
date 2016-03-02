<?php

namespace Mathematica\Geometry\Shapes;

use Mathematica\Geometry\Shapes\Base\AbstractGeometricShape;

/**
 * Class Square
 * @author  Lucas A. de Araújo <lucas@minervasistemas.com.br>
 * @package Mathematica\Geometry\Shapes
 */
class Square extends AbstractGeometricShape
{
    /**
     * Tamanho da aresta do quadrado.
     * @var float
     */
    private $edgeSize;

    /**
     * Retorna o tamanho da aresta do quadrado.
     * @return float
     */
    public function getEdgeSize()
    {
        return $this->edgeSize;
    }

    /**
     * Define o tamanho da aresta do quadrado.
     * @param float $edgeSize
     */
    public function setEdgeSize($edgeSize)
    {
        $this->edgeSize = $edgeSize;
    }

    /**
     * Retorna a área da forma geométrica.
     * @return float
     */
    public function getArea()
    {
        return $this->getEdgeSize() * $this->getEdgeSize();
    }

    /**
     * Retorna o perímetro de uma forma geométrica.
     * @return float
     */
    public function getPerimeter()
    {
        return $this->getEdgeSize() * 4;
    }

}