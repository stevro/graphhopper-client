<?php

namespace Stevro\GraphhopperClient\Model;

class Routing
{

    /**
     * @var bool
     */
    private $calcPoints;

    /**
     * @var bool
     */
    private $considerTraffic;

    /**
     * @var string
     */
    private $networkDataProvider;

    /**
     * @var string
     */
    private $curbsideStrictness;

    /**
     * @var bool
     */
    private $failFast;

    /**
     * @var bool
     */
    private $returnSnappedWaypoints;

    /**
     * @var string[]
     */
    private $snapPreventions;

    /**
     * @return bool
     */
    public function isCalcPoints(): bool
    {
        return $this->calcPoints;
    }

    /**
     * @param bool $calcPoints
     *
     * @return Routing
     */
    public function setCalcPoints(bool $calcPoints): Routing
    {
        $this->calcPoints = $calcPoints;

        return $this;
    }

    /**
     * @return bool
     */
    public function isConsiderTraffic(): bool
    {
        return $this->considerTraffic;
    }

    /**
     * @param bool $considerTraffic
     *
     * @return Routing
     */
    public function setConsiderTraffic(bool $considerTraffic): Routing
    {
        $this->considerTraffic = $considerTraffic;

        return $this;
    }

    /**
     * @return string
     */
    public function getNetworkDataProvider(): string
    {
        return $this->networkDataProvider;
    }

    /**
     * @param string $networkDataProvider
     *
     * @return Routing
     */
    public function setNetworkDataProvider(string $networkDataProvider): Routing
    {
        $this->networkDataProvider = $networkDataProvider;

        return $this;
    }

    /**
     * @return string
     */
    public function getCurbsideStrictness(): string
    {
        return $this->curbsideStrictness;
    }

    /**
     * @param string $curbsideStrictness
     *
     * @return Routing
     */
    public function setCurbsideStrictness(string $curbsideStrictness): Routing
    {
        $this->curbsideStrictness = $curbsideStrictness;

        return $this;
    }

    /**
     * @return bool
     */
    public function isFailFast(): bool
    {
        return $this->failFast;
    }

    /**
     * @param bool $failFast
     *
     * @return Routing
     */
    public function setFailFast(bool $failFast): Routing
    {
        $this->failFast = $failFast;

        return $this;
    }

    /**
     * @return bool
     */
    public function isReturnSnappedWaypoints(): bool
    {
        return $this->returnSnappedWaypoints;
    }

    /**
     * @param bool $returnSnappedWaypoints
     *
     * @return Routing
     */
    public function setReturnSnappedWaypoints(bool $returnSnappedWaypoints): Routing
    {
        $this->returnSnappedWaypoints = $returnSnappedWaypoints;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getSnapPreventions(): array
    {
        return $this->snapPreventions;
    }

    /**
     * @param string[] $snapPreventions
     *
     * @return Routing
     */
    public function setSnapPreventions(array $snapPreventions): Routing
    {
        $this->snapPreventions = $snapPreventions;

        return $this;
    }


}