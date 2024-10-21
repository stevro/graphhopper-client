<?php

namespace Stevro\GraphhopperClient\Model;

class SnappedWaypoint
{

    /**
     * @var float
     */
    private $lon;
    /**
     * @var float
     */
    private $lat;

    /**
     * @return float
     */
    public function getLon(): float
    {
        return $this->lon;
    }

    /**
     * @param float $lon
     *
     * @return SnappedWaypoint
     */
    public function setLon(float $lon): SnappedWaypoint
    {
        $this->lon = $lon;

        return $this;
    }

    /**
     * @return float
     */
    public function getLat(): float
    {
        return $this->lat;
    }

    /**
     * @param float $lat
     *
     * @return SnappedWaypoint
     */
    public function setLat(float $lat): SnappedWaypoint
    {
        $this->lat = $lat;

        return $this;
    }
    

}