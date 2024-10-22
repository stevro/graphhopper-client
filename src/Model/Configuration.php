<?php

namespace Stevro\GraphhopperClient\Model;

use JMS\Serializer\Annotation as Serializer;

class Configuration
{

    /**
     * @var Routing|null
     *                  @Serializer\Type("Stevro\GraphhopperClient\Model\Routing")
     */
    private $routing;

    /**
     * @var Optimization|null
     *                       @Serializer\Type("Stevro\GraphhopperClient\Model\Optimization")
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