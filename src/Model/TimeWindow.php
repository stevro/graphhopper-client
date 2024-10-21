<?php

namespace Stevro\GraphhopperClient\Model;

class TimeWindow
{

    /**
     * @var int
     */
    private $earliest;
    /**
     * @var int
     */
    private $latest;

    /**
     * @return int
     */
    public function getEarliest(): int
    {
        return $this->earliest;
    }

    /**
     * @param int $earliest
     *
     * @return TimeWindow
     */
    public function setEarliest(int $earliest): TimeWindow
    {
        $this->earliest = $earliest;

        return $this;
    }

    /**
     * @return int
     */
    public function getLatest(): int
    {
        return $this->latest;
    }

    /**
     * @param int $latest
     *
     * @return TimeWindow
     */
    public function setLatest(int $latest): TimeWindow
    {
        $this->latest = $latest;

        return $this;
    }
    

}