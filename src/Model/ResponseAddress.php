<?php

namespace Stevro\GraphhopperClient\Model;

class ResponseAddress
{
    /** @var string */
    private $locationId;

    /**
     * @var float
     */
    private $lat;
    /**
     * @var float
     */
    private $lon;

    /**
     * @var string
     */
    private $streetHint;

    private $snappedWaypoint;

    /**
     * @return string
     */
    public function getLocationId(): string
    {
        return $this->locationId;
    }

    /**
     * @param string $locationId
     *
     * @return ResponseAddress
     */
    public function setLocationId(string $locationId): ResponseAddress
    {
        $this->locationId = $locationId;

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
     * @return ResponseAddress
     */
    public function setLat(float $lat): ResponseAddress
    {
        $this->lat = $lat;

        return $this;
    }

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
     * @return ResponseAddress
     */
    public function setLon(float $lon): ResponseAddress
    {
        $this->lon = $lon;

        return $this;
    }

}