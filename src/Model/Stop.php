<?php

namespace Stevro\GraphhopperClient\Model;

class Stop
{

    /**
     * @var Address
     */
    private $address;

    /**
     * @var int
     */
    private $duration;

    /**
     * @var int
     */
    private $preparationTime;

    /**
     * @var TimeWindow[]
     */
    private $timeWindows;

    /**
     * @var string
     */
    private $group;

    /**
     * @param Address $address
     */
    public function __construct(Address $address)
    {
        $this->address = $address;
    }


    /**
     * @return Address
     */
    public function getAddress(): Address
    {
        return $this->address;
    }

    /**
     * @param Address $address
     *
     * @return Stop
     */
    public function setAddress(Address $address): Stop
    {
        $this->address = $address;

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
     * @return Stop
     */
    public function setDuration(int $duration): Stop
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * @return int
     */
    public function getPreparationTime(): int
    {
        return $this->preparationTime;
    }

    /**
     * @param int $preparationTime
     *
     * @return Stop
     */
    public function setPreparationTime(int $preparationTime): Stop
    {
        $this->preparationTime = $preparationTime;

        return $this;
    }

    /**
     * @return TimeWindow[]
     */
    public function getTimeWindows(): array
    {
        return $this->timeWindows;
    }

    /**
     * @param TimeWindow[] $timeWindows
     *
     * @return Stop
     */
    public function setTimeWindows(array $timeWindows): Stop
    {
        $this->timeWindows = $timeWindows;

        return $this;
    }

    /**
     * @return string
     */
    public function getGroup(): string
    {
        return $this->group;
    }

    /**
     * @param string $group
     *
     * @return Stop
     */
    public function setGroup(string $group): Stop
    {
        $this->group = $group;

        return $this;
    }


}