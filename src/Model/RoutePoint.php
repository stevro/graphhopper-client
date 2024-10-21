<?php

namespace Stevro\GraphhopperClient\Model;

class RoutePoint
{
    /**
     * @var string
     */
    private $type;

    private $coordinates;

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return RoutePoint
     */
    public function setType(string $type): RoutePoint
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCoordinates()
    {
        return $this->coordinates;
    }

    /**
     * @param mixed $coordinates
     *
     * @return RoutePoint
     */
    public function setCoordinates($coordinates)
    {
        $this->coordinates = $coordinates;

        return $this;
    }


}