<?php

namespace Stevro\GraphhopperClient\Model;

use JMS\Serializer\Annotation as Serializer;

class Routing
{

    /**
     * @var bool
     *          @Serializer\Type("bool")
     */
    private $calcPoints;

    /**
     * @var bool
     *          @Serializer\Type("bool")
     */
    private $considerTraffic;

    /**
     * @var string
     *            @Serializer\Type("string")
     */
    private $networkDataProvider;

    /**
     * @var string
     *            @Serializer\Type("string")
     */
    private $curbsideStrictness;

    /**
     * @var bool
     *          @Serializer\Type("bool")
     */
    private $failFast;

    /**
     * @var bool
     *          @Serializer\Type("bool")
     */
    private $returnSnappedWaypoints;

    /**
     * @var string[]
     *              @Serializer\Type("array<string>")
     */
    private $snapPreventions;

    /**
     * @return bool
     */
    public function isCalcPoints()
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
    public function isConsiderTraffic()
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
    public function getNetworkDataProvider()
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
    public function getCurbsideStrictness()
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
    public function isFailFast()
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
    public function isReturnSnappedWaypoints()
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
    public function getSnapPreventions()
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