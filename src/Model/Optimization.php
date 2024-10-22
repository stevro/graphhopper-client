<?php

namespace Stevro\GraphhopperClient\Model;

use JMS\Serializer\Annotation as Serializer;

class Optimization
{
    /**
     * @var bool
     *          @Serializer\Type("bool")
     */
    private $freeInsertion;

    /**
     * @return bool
     */
    public function isFreeInsertion(): bool
    {
        return $this->freeInsertion;
    }

    /**
     * @param bool $freeInsertion
     *
     * @return Optimization
     */
    public function setFreeInsertion(bool $freeInsertion): Optimization
    {
        $this->freeInsertion = $freeInsertion;

        return $this;
    }



}