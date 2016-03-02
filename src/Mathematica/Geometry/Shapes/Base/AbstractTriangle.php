<?php

namespace Mathematica\Geometry\Shapes\Base;

/**
 * Class AbstractTriangle
 * @author Luan Maik Cordeiro <luanmaik1994@gmail.com>
 * @package Mathematica\Geometry\Shapes\Base
 */
abstract class AbstractTriangle extends AbstractGeometricShape
{
    /**
     * Tamanho da aresta X
     * @var float
     */
    private $edgeX;

    /**
     * Tamanho da aresta Y
     * @var float
     */
    private $edgeY;

    /**
     * Tamanho da aresta Z
     * @var float
     */
    private $edgeZ;

    /**
     * Retorna o tamanho da aresta X
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
     * Retorna o tamanho da aresta Z
     * @return float
     */
    public function getEdgeZ()
    {
        return $this->edgeZ;
    }

    /**
     * Define o tamanho da aresta Z
     * @param float $edgeZ
     */
    public function setEdgeZ($edgeZ)
    {
        $this->edgeZ = $edgeZ;
    }



    /**
     * Retorna o perímetro de um triângulo.
     * @return float
     */
    public function getPerimeter()
    {
        return $this->getEdgeX() + $this->getEdgeY() + $this->getEdgeZ();
    }


}