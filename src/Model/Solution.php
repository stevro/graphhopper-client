<?php

namespace Stevro\GraphhopperClient\Model;

use JMS\Serializer\Annotation as Serializer;

class Solution
{

    /**
     * @var int
     * @Serializer\Type("int")
     */
    private $costs;
    /**
     * @var int
     * @Serializer\Type("int")
     */
    private $distance;
    /**
     * @var int
     * @Serializer\Type("int")
     */
    private $time;

    /**
     * @var int
     * @Serializer\Type("int")
     */
    private $transportTime;

    /**
     * @var int
     * @Serializer\Type("int")
     */
    private $completionTime;

    /**
     * @var int
     * @Serializer\Type("int")
     */
    private $maxOperationTime;

    /**
     * @var int
     * @Serializer\Type("int")
     */
    private $waitingTime;

    /**
     * @var int
     * @Serializer\Type("int")
     */
    private $serviceDuration;

    /**
     * @var int
     * @Serializer\Type("int")
     */
    private $preparationTime;

    /**
     * @var int
     * @Serializer\Type("int")
     */
    private $noVehicles;

    /**
     * @var int
     * @Serializer\Type("int")
     */
    private $noUnassigned;

    /**
     * @var Route[]
     * @Serializer\Type("array<Stevro\GraphhopperClient\Model\Route>")
     */
    private $routes;

    /**
     * @var SolutionUnassigned
     * @Serializer\Type("Stevro\GraphhopperClient\Model\SolutionUnassigned")
     */
    private $unassigned;

    /**
     * @return int
     */
    public function getCosts(): int
    {
        return $this->costs;
    }

    /**
     * @param int $costs
     *
     * @return Solution
     */
    public function setCosts(int $costs): Solution
    {
        $this->costs = $costs;

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
     * @return Solution
     */
    public function setDistance(int $distance): Solution
    {
        $this->distance = $distance;

        return $this;
    }

    /**
     * @return int
     */
    public function getTime(): int
    {
        return $this->time;
    }

    /**
     * @param int $time
     *
     * @return Solution
     */
    public function setTime(int $time): Solution
    {
        $this->time = $time;

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
     * @return Solution
     */
    public function setTransportTime(int $transportTime): Solution
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
     * @return Solution
     */
    public function setCompletionTime(int $completionTime): Solution
    {
        $this->completionTime = $completionTime;

        return $this;
    }

    /**
     * @return int
     */
    public function getMaxOperationTime(): int
    {
        return $this->maxOperationTime;
    }

    /**
     * @param int $maxOperationTime
     *
     * @return Solution
     */
    public function setMaxOperationTime(int $maxOperationTime): Solution
    {
        $this->maxOperationTime = $maxOperationTime;

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
     * @return Solution
     */
    public function setWaitingTime(int $waitingTime): Solution
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
     * @return Solution
     */
    public function setServiceDuration(int $serviceDuration): Solution
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
     * @return Solution
     */
    public function setPreparationTime(int $preparationTime): Solution
    {
        $this->preparationTime = $preparationTime;

        return $this;
    }

    /**
     * @return int
     */
    public function getNoVehicles(): int
    {
        return $this->noVehicles;
    }

    /**
     * @param int $noVehicles
     *
     * @return Solution
     */
    public function setNoVehicles(int $noVehicles): Solution
    {
        $this->noVehicles = $noVehicles;

        return $this;
    }

    /**
     * @return int
     */
    public function getNoUnassigned(): int
    {
        return $this->noUnassigned;
    }

    /**
     * @param int $noUnassigned
     *
     * @return Solution
     */
    public function setNoUnassigned(int $noUnassigned): Solution
    {
        $this->noUnassigned = $noUnassigned;

        return $this;
    }

    /**
     * @return Route[]
     */
    public function getRoutes(): array
    {
        return $this->routes;
    }

    /**
     * @param Route[] $routes
     *
     * @return Solution
     */
    public function setRoutes(array $routes): Solution
    {
        $this->routes = $routes;

        return $this;
    }

    /**
     * @return SolutionUnassigned
     */
    public function getUnassigned(): SolutionUnassigned
    {
        return $this->unassigned;
    }

    /**
     * @param SolutionUnassigned $unassigned
     *
     * @return Solution
     */
    public function setUnassigned(SolutionUnassigned $unassigned): Solution
    {
        $this->unassigned = $unassigned;

        return $this;
    }



}