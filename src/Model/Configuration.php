<?php

namespace Stevro\GraphhopperClient\Model;

class Configuration
{

    /**
     * @var Routing|null
     */
    private $routing;

    /**
     * @var Optimization|null
     */
    private $optimization;

    /**
     * @return Routing|null
     */
    public function getRouting()
    {
        return $this->routing;
    }

    /**
     * @param Routing|null $routing
     *
     * @return Configuration
     */
    public function setRouting(Routing $routing): Configuration
    {
        $this->routing = $routing;

        return $this;
    }

    /**
     * @return Optimization|null
     */
    public function getOptimization()
    {
        return $this->optimization;
    }

    /**
     * @param Optimization|null $optimization
     *
     * @return Configuration
     */
    public function setOptimization(Optimization $optimization): Configuration
    {
        $this->optimization = $optimization;

        return $this;
    }


}