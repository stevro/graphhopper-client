<?php

namespace Stevro\GraphhopperClient\Model;

class Optimization
{
    /**
     * @var bool
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