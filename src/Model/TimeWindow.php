<?php

namespace Stevro\GraphhopperClient\Model;

use JMS\Serializer\Annotation as Serializer;

class TimeWindow
{

    /**
     * @var int
     * @Serializer\Type("int")
     */
    private $earliest;
    /**
     * @var int
     * @Serializer\Type("int")
     */
    private $latest;

    /**
     * @param int $earliest
     * @param int $latest
     */
    public function __construct(int $earliest, int $latest)
    {
        $this->earliest = $earliest;
        $this->latest = $latest;
    }


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