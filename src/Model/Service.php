<?php

namespace Stevro\GraphhopperClient\Model;

class Service
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $type;

    /**
     * @var int
     */
    private $priority;

    /**
     * @var string
     */
    private $name;

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
     * @var int[]
     */
    private $size;

    /**
     * @var string[]
     */
    private $requiredSkills;
    /**
     * @var string[]
     */
    private $allowedVehicles;
    /**
     * @var string[]
     */
    private $disallowedVehicles;

    /**
     * @var PreferredVehicle[]
     */
    private $preferredVehicles;

    /**
     * @var int
     */
    private $maxTimeInVehicle;

    /**
     * @var string
     */
    private $group;

    /**
     * @param string  $id
     *
     */
    public function __construct(string $id)
    {
        $this->id = $id;
    }


    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     *
     * @return Service
     */
    public function setId(string $id): Service
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return Service
     */
    public function setType(string $type): Service
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return int
     */
    public function getPriority(): int
    {
        return $this->priority;
    }

    /**
     * @param int $priority
     *
     * @return Service
     */
    public function setPriority(int $priority): Service
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return Service
     */
    public function setName(string $name): Service
    {
        $this->name = $name;

        return $this;
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
     * @return Service
     */
    public function setAddress(Address $address): Service
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
     * @return Service
     */
    public function setDuration(int $duration): Service
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
     * @return Service
     */
    public function setPreparationTime(int $preparationTime): Service
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
     * @return Service
     */
    public function setTimeWindows(array $timeWindows): Service
    {
        $this->timeWindows = $timeWindows;

        return $this;
    }

    /**
     * @return int[]
     */
    public function getSize(): array
    {
        return $this->size;
    }

    /**
     * @param int[] $size
     *
     * @return Service
     */
    public function setSize(array $size): Service
    {
        $this->size = $size;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getRequiredSkills(): array
    {
        return $this->requiredSkills;
    }

    /**
     * @param string[] $requiredSkills
     *
     * @return Service
     */
    public function setRequiredSkills(array $requiredSkills): Service
    {
        $this->requiredSkills = $requiredSkills;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getAllowedVehicles(): array
    {
        return $this->allowedVehicles;
    }

    /**
     * @param string[] $allowedVehicles
     *
     * @return Service
     */
    public function setAllowedVehicles(array $allowedVehicles): Service
    {
        $this->allowedVehicles = $allowedVehicles;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getDisallowedVehicles(): array
    {
        return $this->disallowedVehicles;
    }

    /**
     * @param string[] $disallowedVehicles
     *
     * @return Service
     */
    public function setDisallowedVehicles(array $disallowedVehicles): Service
    {
        $this->disallowedVehicles = $disallowedVehicles;

        return $this;
    }

    /**
     * @return PreferredVehicle[]
     */
    public function getPreferredVehicles(): array
    {
        return $this->preferredVehicles;
    }

    /**
     * @param PreferredVehicle[] $preferredVehicles
     *
     * @return Service
     */
    public function setPreferredVehicles(array $preferredVehicles): Service
    {
        $this->preferredVehicles = $preferredVehicles;

        return $this;
    }

    /**
     * @return int
     */
    public function getMaxTimeInVehicle(): int
    {
        return $this->maxTimeInVehicle;
    }

    /**
     * @param int $maxTimeInVehicle
     *
     * @return Service
     */
    public function setMaxTimeInVehicle(int $maxTimeInVehicle): Service
    {
        $this->maxTimeInVehicle = $maxTimeInVehicle;

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
     * @return Service
     */
    public function setGroup(string $group): Service
    {
        $this->group = $group;

        return $this;
    }


}