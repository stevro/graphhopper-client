<?php

namespace Stevro\GraphhopperClient\Model;

class SolutionUnassigned
{

    /**
     * @var string[]
     */
    private $services;

    /**
     * @var string[]
     */
    private $shipments;

    /**
     * @var string[]
     */
    private $breaks;

    /**
     * @var Detail[]
     */
    private $details;

    /**
     * @return string[]
     */
    public function getServices(): array
    {
        return $this->services;
    }

    /**
     * @param string[] $services
     *
     * @return SolutionUnassigned
     */
    public function setServices(array $services): SolutionUnassigned
    {
        $this->services = $services;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getShipments(): array
    {
        return $this->shipments;
    }

    /**
     * @param string[] $shipments
     *
     * @return SolutionUnassigned
     */
    public function setShipments(array $shipments): SolutionUnassigned
    {
        $this->shipments = $shipments;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getBreaks(): array
    {
        return $this->breaks;
    }

    /**
     * @param string[] $breaks
     *
     * @return SolutionUnassigned
     */
    public function setBreaks(array $breaks): SolutionUnassigned
    {
        $this->breaks = $breaks;

        return $this;
    }

    /**
     * @return Detail[]
     */
    public function getDetails(): array
    {
        return $this->details;
    }

    /**
     * @param Detail[] $details
     *
     * @return SolutionUnassigned
     */
    public function setDetails(array $details): SolutionUnassigned
    {
        $this->details = $details;

        return $this;
    }

}