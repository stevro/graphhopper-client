<?php

namespace Stevro\GraphhopperClient\Model;

use JMS\Serializer\Annotation as Serializer;

class DriveTimeBreak
{
    /**
     * @var int
     *         @Serializer\Type("int")
     */
    private $duration;
    /**
     * @var int
     *         @Serializer\Type("int")
     */
    private $maxDrivingTime;
    /**
     * @var int
     *         @Serializer\Type("int")
     */
    private $initialDrivingTime;
    /**
     * @var int[]
     *           @Serializer\Type("array<int>")
     */
    private $possibleSplit;

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
     * @return DriveTimeBreak
     */
    public function setDuration(int $duration): DriveTimeBreak
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * @return int
     */
    public function getMaxDrivingTime(): int
    {
        return $this->maxDrivingTime;
    }

    /**
     * @param int $maxDrivingTime
     *
     * @return DriveTimeBreak
     */
    public function setMaxDrivingTime(int $maxDrivingTime): DriveTimeBreak
    {
        $this->maxDrivingTime = $maxDrivingTime;

        return $this;
    }

    /**
     * @return int
     */
    public function getInitialDrivingTime(): int
    {
        return $this->initialDrivingTime;
    }

    /**
     * @param int $initialDrivingTime
     *
     * @return DriveTimeBreak
     */
    public function setInitialDrivingTime(int $initialDrivingTime): DriveTimeBreak
    {
        $this->initialDrivingTime = $initialDrivingTime;

        return $this;
    }

    /**
     * @return int[]
     */
    public function getPossibleSplit(): array
    {
        return $this->possibleSplit;
    }

    /**
     * @param int[] $possibleSplit
     *
     * @return DriveTimeBreak
     */
    public function setPossibleSplit(array $possibleSplit): DriveTimeBreak
    {
        $this->possibleSplit = $possibleSplit;

        return $this;
    }

}