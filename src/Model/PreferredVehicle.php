<?php

namespace Stevro\GraphhopperClient\Model;

class PreferredVehicle
{

    /**
     * @var string
     */
    private $vehicleId;

    /**
     * @var int
     */
    private $priority;

    /**
     * @param string $vehicleId
     */
    public function __construct(string $vehicleId)
    {
        $this->vehicleId = $vehicleId;
    }

    /**
     * @return string
     */
    public function getVehicleId(): string
    {
        return $this->vehicleId;
    }

    /**
     * @param string $vehicleId
     *
     * @return PreferredVehicle
     */
    public function setVehicleId(string $vehicleId): PreferredVehicle
    {
        $this->vehicleId = $vehicleId;

        return $this;
    }

    /**
     * @return int
     */
    public function getPriority(): int
    {
        return $this->priority;
    }

    /**
     * @param int $priority
     *
     * @return PreferredVehicle
     */
    public function setPriority(int $priority): PreferredVehicle
    {
        $this->priority = $priority;

        return $this;
    }



}