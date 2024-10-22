<?php

namespace Stevro\GraphhopperClient\Model;

use JMS\Serializer\Annotation as Serializer;

class ResponseAddress
{
    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $locationId;

    /**
     * @var float
     * @Serializer\Type("float")
     */
    private $lat;
    /**
     * @var float
     *
     * @Serializer\Type("float")
     */
    private $lon;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $streetHint;

    /**
     * @var SnappedWaypoint|null
     * @Serializer\Type("Stevro\GraphhopperClient\Model\SnappedWaypoint")
     */
    private $snappedWaypoint;

    /**
     * @return string
     */
    public function getLocationId()
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
    public function getLat()
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
    public function getLon()
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

    /**
     * @return string
     */
    public function getStreetHint()
    {
        return $this->streetHint;
    }

    /**
     * @param string $streetHint
     *
     * @return ResponseAddress
     */
    public function setStreetHint(string $streetHint): ResponseAddress
    {
        $this->streetHint = $streetHint;

        return $this;
    }

    /**
     * @return SnappedWaypoint|null
     */
    public function getSnappedWaypoint()
    {
        return $this->snappedWaypoint;
    }

    /**
     * @param SnappedWaypoint|null $snappedWaypoint
     *
     * @return ResponseAddress
     */
    public function setSnappedWaypoint(SnappedWaypoint $snappedWaypoint = null): ResponseAddress
    {
        $this->snappedWaypoint = $snappedWaypoint;

        return $this;
    }


}