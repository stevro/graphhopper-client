<?php

namespace Stevro\GraphhopperClient\Model;

class Route
{

    /**
     * @var string
     */
    private $vehicleId;

    /**
     * @var int
     */
    private $distance;

    /**
     * @var int
     */
    private $transportTime;

    /**
     * @var int
     */
    private $completionTime;

    /**
     * @var int
     */
    private $waitingTime;

    /**
     * @var int
     */
    private $serviceDuration;

    /**
     * @var int
     */
    private $preparationTime;

    /**
     * @var RoutePoint[]
     */
    private $points;

    /**
     * @var Activity[]
     */
    private $activities;

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
     * @return Route
     */
    public function setVehicleId(string $vehicleId): Route
    {
        $this->vehicleId = $vehicleId;

        return $this;
    }

    /**
     * @return int
     */
    public function getDistance(): int
    {
        return $this->distance;
    }

    /**
     * @param int $distance
     *
     * @return Route
     */
    public function setDistance(int $distance): Route
    {
        $this->distance = $distance;

        return $this;
    }

    /**
     * @return int
     */
    public function getTransportTime(): int
    {
        return $this->transportTime;
    }

    /**
     * @param int $transportTime
     *
     * @return Route
     */
    public function setTransportTime(int $transportTime): Route
    {
        $this->transportTime = $transportTime;

        return $this;
    }

    /**
     * @return int
     */
    public function getCompletionTime(): int
    {
        return $this->completionTime;
    }

    /**
     * @param int $completionTime
     *
     * @return Route
     */
    public function setCompletionTime(int $completionTime): Route
    {
        $this->completionTime = $completionTime;

        return $this;
    }

    /**
     * @return int
     */
    public function getWaitingTime(): int
    {
        return $this->waitingTime;
    }

    /**
     * @param int $waitingTime
     *
     * @return Route
     */
    public function setWaitingTime(int $waitingTime): Route
    {
        $this->waitingTime = $waitingTime;

        return $this;
    }

    /**
     * @return int
     */
    public function getServiceDuration(): int
    {
        return $this->serviceDuration;
    }

    /**
     * @param int $serviceDuration
     *
     * @return Route
     */
    public function setServiceDuration(int $serviceDuration): Route
    {
        $this->serviceDuration = $serviceDuration;

        return $this;
    }

    /**
     * @return int
     */
    public function getPreparationTime(): int
    {
        return $this->preparationTime;
    }

    /**
     * @param int $preparationTime
     *
     * @return Route
     */
    public function setPreparationTime(int $preparationTime): Route
    {
        $this->preparationTime = $preparationTime;

        return $this;
    }

    /**
     * @return RoutePoint[]
     */
    public function getPoints(): array
    {
        return $this->points;
    }

    /**
     * @param RoutePoint[] $points
     *
     * @return Route
     */
    public function setPoints(array $points): Route
    {
        $this->points = $points;

        return $this;
    }

    /**
     * @return Activity[]
     */
    public function getActivities(): array
    {
        return $this->activities;
    }

    /**
     * @param Activity[] $activities
     *
     * @return Route
     */
    public function setActivities(array $activities): Route
    {
        $this->activities = $activities;

        return $this;
    }



}