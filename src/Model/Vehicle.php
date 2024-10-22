<?php

namespace Stevro\GraphhopperClient\Model;

use JMS\Serializer\Annotation as Serializer;

class Vehicle
{
    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $vehicleId;
    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $typeId;
    /**
     * @var Shift[]|null
     * @Serializer\Type("array<Stevro\GraphhopperClient\Model\Shift>")
     */
    private $shifts;
    /**
     * @var Address|null
     * @Serializer\Type("Stevro\GraphhopperClient\Model\Address")
     */
    private $startAddress;
    /**
     * @var Address|null
     * @Serializer\Type("Stevro\GraphhopperClient\Model\Address")
     */
    private $endAddress;
    /**
     * @var TimeWindowBreak|DriveTimeBreak|null
     */
    private $break;
    /**
     * @var bool
     * @Serializer\Type("boolean")
     */
    private $returnToDepot;
    /**
     * @var int
     * @Serializer\Type("int")
     */
    private $earliestStart;
    /**
     * @var int
     * @Serializer\Type("int")
     */
    private $latestEnd;

    /**
     * @var string[]
     * @Serializer\Type("array<string>")
     */
    private $skills;
    /**
     * @var int
     * @Serializer\Type("int")
     */
    private $maxDistance;
    /**
     * @var int
     * @Serializer\Type("int")
     */
    private $maxDrivingTime;
    /**
     * @var int
     * @Serializer\Type("int")
     */
    private $maxJobs;
    /**
     * @var int
     * @Serializer\Type("int")
     */
    private $minJobs;
    /**
     * @var int
     * @Serializer\Type("int")
     */
    private $maxActivities;
    /**
     * @var bool
     * @Serializer\Type("bool")
     */
    private $moveToEndAddress;

    /**
     * @param string $vehicleId
     */
    public function __construct(string $vehicleId)
    {
        $this->vehicleId = $vehicleId;
    }


    /**
     * @return string
     */
    public function getVehicleId()
    {
        return $this->vehicleId;
    }

    /**
     * @param string $vehicleId
     *
     * @return Vehicle
     */
    public function setVehicleId(string $vehicleId): Vehicle
    {
        $this->vehicleId = $vehicleId;

        return $this;
    }

    /**
     * @return string
     */
    public function getTypeId()
    {
        return $this->typeId;
    }

    /**
     * @param string $typeId
     *
     * @return Vehicle
     */
    public function setTypeId(string $typeId): Vehicle
    {
        $this->typeId = $typeId;

        return $this;
    }

    /**
     * @return Shift[]|null
     */
    public function getShifts()
    {
        return $this->shifts;
    }

    /**
     * @param Shift[] $shifts
     *
     * @return Vehicle
     */
    public function setShifts(array $shifts): Vehicle
    {
        $this->shifts = $shifts;

        return $this;
    }

    /**
     * @return Address|null
     */
    public function getStartAddress()
    {
        return $this->startAddress;
    }

    /**
     * @param Address $startAddress
     *
     * @return Vehicle
     */
    public function setStartAddress(Address $startAddress): Vehicle
    {
        $this->startAddress = $startAddress;

        return $this;
    }

    /**
     * @return Address|null
     */
    public function getEndAddress()
    {
        return $this->endAddress;
    }

    /**
     * @param Address $endAddress
     *
     * @return Vehicle
     */
    public function setEndAddress(Address $endAddress): Vehicle
    {
        $this->endAddress = $endAddress;

        return $this;
    }

    /**
     * @return DriveTimeBreak|TimeWindowBreak|null
     */
    public function getBreak()
    {
        return $this->break;
    }

    /**
     * @param DriveTimeBreak|TimeWindowBreak $break
     *
     * @return Vehicle
     */
    public function setBreak($break)
    {
        $this->break = $break;

        return $this;
    }

    /**
     * @return bool
     */
    public function isReturnToDepot()
    {
        return $this->returnToDepot;
    }

    /**
     * @param bool $returnToDepot
     *
     * @return Vehicle
     */
    public function setReturnToDepot(bool $returnToDepot): Vehicle
    {
        $this->returnToDepot = $returnToDepot;

        return $this;
    }

    /**
     * @return int
     */
    public function getEarliestStart()
    {
        return $this->earliestStart;
    }

    /**
     * @param int $earliestStart
     *
     * @return Vehicle
     */
    public function setEarliestStart(int $earliestStart): Vehicle
    {
        $this->earliestStart = $earliestStart;

        return $this;
    }

    /**
     * @return int
     */
    public function getLatestEnd()
    {
        return $this->latestEnd;
    }

    /**
     * @param int $latestEnd
     *
     * @return Vehicle
     */
    public function setLatestEnd(int $latestEnd): Vehicle
    {
        $this->latestEnd = $latestEnd;

        return $this;
    }

    /**
     * @return array
     */
    public function getSkills()
    {
        return $this->skills;
    }

    /**
     * @param array $skills
     *
     * @return Vehicle
     */
    public function setSkills(array $skills): Vehicle
    {
        $this->skills = $skills;

        return $this;
    }

    /**
     * @return int
     */
    public function getMaxDistance()
    {
        return $this->maxDistance;
    }

    /**
     * @param int $maxDistance
     *
     * @return Vehicle
     */
    public function setMaxDistance(int $maxDistance): Vehicle
    {
        $this->maxDistance = $maxDistance;

        return $this;
    }

    /**
     * @return int
     */
    public function getMaxDrivingTime()
    {
        return $this->maxDrivingTime;
    }

    /**
     * @param int $maxDrivingTime
     *
     * @return Vehicle
     */
    public function setMaxDrivingTime(int $maxDrivingTime): Vehicle
    {
        $this->maxDrivingTime = $maxDrivingTime;

        return $this;
    }

    /**
     * @return int
     */
    public function getMaxJobs()
    {
        return $this->maxJobs;
    }

    /**
     * @param int $maxJobs
     *
     * @return Vehicle
     */
    public function setMaxJobs(int $maxJobs): Vehicle
    {
        $this->maxJobs = $maxJobs;

        return $this;
    }

    /**
     * @return int
     */
    public function getMinJobs()
    {
        return $this->minJobs;
    }

    /**
     * @param int $minJobs
     *
     * @return Vehicle
     */
    public function setMinJobs(int $minJobs): Vehicle
    {
        $this->minJobs = $minJobs;

        return $this;
    }

    /**
     * @return int
     */
    public function getMaxActivities()
    {
        return $this->maxActivities;
    }

    /**
     * @param int $maxActivities
     *
     * @return Vehicle
     */
    public function setMaxActivities(int $maxActivities): Vehicle
    {
        $this->maxActivities = $maxActivities;

        return $this;
    }

    /**
     * @return bool
     */
    public function isMoveToEndAddress()
    {
        return $this->moveToEndAddress;
    }

    /**
     * @param bool $moveToEndAddress
     *
     * @return Vehicle
     */
    public function setMoveToEndAddress(bool $moveToEndAddress): Vehicle
    {
        $this->moveToEndAddress = $moveToEndAddress;

        return $this;
    }


}