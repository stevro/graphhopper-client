<?php

namespace Stevro\GraphhopperClient\Model;

class Shift
{

    /**
     * @var Address
     */
    private $startAddress;
    /**
     * @var Address
     */
    private $endAddress;

    /**
     * @var int
     */
    private $earliestStart;
    /**
     * @var int
     */
    private $latestEnd;

    /**
     * @var TimeWindowBreak|DriveTimeBreak
     */
    private $break;

    /**
     * @return Address
     */
    public function getStartAddress(): Address
    {
        return $this->startAddress;
    }

    /**
     * @param Address $startAddress
     *
     * @return Shift
     */
    public function setStartAddress(Address $startAddress): Shift
    {
        $this->startAddress = $startAddress;

        return $this;
    }

    /**
     * @return Address
     */
    public function getEndAddress(): Address
    {
        return $this->endAddress;
    }

    /**
     * @param Address $endAddress
     *
     * @return Shift
     */
    public function setEndAddress(Address $endAddress): Shift
    {
        $this->endAddress = $endAddress;

        return $this;
    }

    /**
     * @return int
     */
    public function getEarliestStart(): int
    {
        return $this->earliestStart;
    }

    /**
     * @param int $earliestStart
     *
     * @return Shift
     */
    public function setEarliestStart(int $earliestStart): Shift
    {
        $this->earliestStart = $earliestStart;

        return $this;
    }

    /**
     * @return int
     */
    public function getLatestEnd(): int
    {
        return $this->latestEnd;
    }

    /**
     * @param int $latestEnd
     *
     * @return Shift
     */
    public function setLatestEnd(int $latestEnd): Shift
    {
        $this->latestEnd = $latestEnd;

        return $this;
    }

    /**
     * @return DriveTimeBreak|TimeWindowBreak
     */
    public function getBreak()
    {
        return $this->break;
    }

    /**
     * @param DriveTimeBreak|TimeWindowBreak $break
     *
     * @return Shift
     */
    public function setBreak($break)
    {
        $this->break = $break;

        return $this;
    }


}