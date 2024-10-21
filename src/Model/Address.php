<?php

namespace Stevro\GraphhopperClient\Model;

/**
 * https://github.com/graphhopper/directions-api-clients/blob/master/php/SwaggerClient-php/lib/Model/Address.php
 */
class Address
{

    /**
     * @var string
     */
    private $locationId;
    /**
     * @var string
     */
    private $name;
    /**
     * @var string
     */
    private $streetHint;

    /**
     * @var double
     */
    private $lon;

    /**
     * @var double
     */
    private $lat;

    /**
     * @var string
     */
    private $curbside;

    /**
     * @param string $locationId
     * @param float  $lon
     * @param float  $lat
     */
    public function __construct(string $locationId, float $lon, float $lat)
    {
        $this->locationId = $locationId;
        $this->lon = $lon;
        $this->lat = $lat;
    }

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
     * @return Address
     */
    public function setLocationId(string $locationId): Address
    {
        $this->locationId = $locationId;

        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return Address
     */
    public function setName(string $name): Address
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getStreetHint(): string
    {
        return $this->streetHint;
    }

    /**
     * @param string $streetHint
     *
     * @return Address
     */
    public function setStreetHint(string $streetHint): Address
    {
        $this->streetHint = $streetHint;

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
     * @return Address
     */
    public function setLon(float $lon): Address
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
     * @return Address
     */
    public function setLat(float $lat): Address
    {
        $this->lat = $lat;

        return $this;
    }

    /**
     * @return string
     */
    public function getCurbside(): string
    {
        return $this->curbside;
    }

    /**
     * @param string $curbside
     *
     * @return Address
     */
    public function setCurbside(string $curbside): Address
    {
        $this->curbside = $curbside;

        return $this;
    }


}