<?php

namespace Stevro\GraphhopperClient\Model;

use JMS\Serializer\Annotation as Serializer;

class TimeWindowBreak
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
     * @var int
     * @Serializer\Type("int")
     */
    private $duration;

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
     * @return TimeWindowBreak
     */
    public function setEarliest(int $earliest): TimeWindowBreak
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
     * @return TimeWindowBreak
     */
    public function setLatest(int $latest): TimeWindowBreak
    {
        $this->latest = $latest;

        return $this;
    }

    /**
     * @return int
     */
    public function getDuration(): int
    {
        return $this->duration;
    }

    /**
     * @param int $duration
     *
     * @return TimeWindowBreak
     */
    public function setDuration(int $duration): TimeWindowBreak
    {
        $this->duration = $duration;

        return $this;
    }


}