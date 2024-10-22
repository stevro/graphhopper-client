<?php

namespace Stevro\GraphhopperClient\Model;

use JMS\Serializer\Annotation as Serializer;

class RoutePoint
{
    /**
     * @var string
     *            @Serializer\Type("string")
     */
    private $type;

    /**
     * @var array
     *           @Serializer\Type("array")
     */
    private $coordinates;

    /**
     * @return string
     */
    public function getType()
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
     * @return array
     */
    public function getCoordinates()
    {
        return $this->coordinates;
    }

    /**
     * @param array $coordinates
     *
     * @return RoutePoint
     */
    public function setCoordinates($coordinates)
    {
        $this->coordinates = $coordinates;

        return $this;
    }


}