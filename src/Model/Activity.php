<?php

namespace Stevro\GraphhopperClient\Model;

use JMS\Serializer\Annotation as Serializer;

class Activity
{
    /**
     * @var string
     *            @Serializer\Type("string")
     */
    private $type;

    /**
     * @var string
     *            @Serializer\Type("string")
     */
    private $id;

    /**
     * @var string
     *            @Serializer\Type("string")
     */
    private $locationId;

    /**
     * @var ResponseAddress
     * @Serializer\Type("Stevro\GraphhopperClient\Model\ResponseAddress")
     */
    private $address;

    /**
     * @var int
     * @Serializer\Type("int")
     */
    private $arrTime;

    /**
     * @var \DateTime|null
     *                    @Serializer\Type("DateTime")
     */
    private $arrDateTime;

    /**
     * @var int
     * @Serializer\Type("int")
     */
    private $endTime;

    /**
     * @var \DateTime|null
     *                    @Serializer\Type("DateTime")
     */
    private $endDateTime;

    /**
     * @var int
     *         @Serializer\Type("int")
     */
    private $distance;

    /**
     * @var int
     *         @Serializer\Type("int")
     */
    private $drivingTime;
    /**
     * @var int
     *         @Serializer\Type("int")
     */
    private $preparationTime;
    /**
     * @var int
     *         @Serializer\Type("int")
     */
    private $waitingTime;
    /**
     * @var int[]
     *           @Serializer\Type("array<int>")
     */
    private $loadBefore = [];
    /**
     * @var int[]
     *           @Serializer\Type("array<int>")
     */
    private $loadAfter = [];

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
     * @return Activity
     */
    public function setType(string $type): Activity
    {
        $this->type = $type;

        return $this;
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
     * @return Activity
     */
    public function setId(string $id): Activity
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getLocationId(): string
    {
        return $this->locationId;
    }

    /**
     * @param string $locationId
     *
     * @return Activity
     */
    public function setLocationId(string $locationId): Activity
    {
        $this->locationId = $locationId;

        return $this;
    }

    /**
     * @return ResponseAddress
     */
    public function getAddress(): ResponseAddress
    {
        return $this->address;
    }

    /**
     * @param ResponseAddress $address
     *
     * @return Activity
     */
    public function setAddress(ResponseAddress $address): Activity
    {
        $this->address = $address;

        return $this;
    }

    /**
     * @return int
     */
    public function getArrTime(): int
    {
        return $this->arrTime;
    }

    /**
     * @param int $arrTime
     *
     * @return Activity
     */
    public function setArrTime(int $arrTime): Activity
    {
        $this->arrTime = $arrTime;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getArrDateTime()
    {
        return $this->arrDateTime;
    }

    /**
     * @param \DateTime $arrDateTime
     *
     * @return Activity
     */
    public function setArrDateTime(\DateTime $arrDateTime): Activity
    {
        $this->arrDateTime = $arrDateTime;

        return $this;
    }

    /**
     * @return int
     */
    public function getEndTime(): int
    {
        return $this->endTime;
    }

    /**
     * @param int $endTime
     *
     * @return Activity
     */
    public function setEndTime(int $endTime): Activity
    {
        $this->endTime = $endTime;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getEndDateTime()
    {
        return $this->endDateTime;
    }

    /**
     * @param \DateTime $endDateTime
     *
     * @return Activity
     */
    public function setEndDateTime(\DateTime $endDateTime): Activity
    {
        $this->endDateTime = $endDateTime;

        return $this;
    }

    /**
     * @return int
     */
    public function getDistance(): int
    {
        return $this->distance;
    }

    /**
     * @param int $distance
     *
     * @return Activity
     */
    public function setDistance(int $distance): Activity
    {
        $this->distance = $distance;

        return $this;
    }

    /**
     * @return int
     */
    public function getDrivingTime(): int
    {
        return $this->drivingTime;
    }

    /**
     * @param int $drivingTime
     *
     * @return Activity
     */
    public function setDrivingTime(int $drivingTime): Activity
    {
        $this->drivingTime = $drivingTime;

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
     * @return Activity
     */
    public function setPreparationTime(int $preparationTime): Activity
    {
        $this->preparationTime = $preparationTime;

        return $this;
    }

    /**
     * @return int
     */
    public function getWaitingTime(): int
    {
        return $this->waitingTime;
    }

    /**
     * @param int $waitingTime
     *
     * @return Activity
     */
    public function setWaitingTime(int $waitingTime): Activity
    {
        $this->waitingTime = $waitingTime;

        return $this;
    }

    /**
     * @return int[]
     */
    public function getLoadBefore(): array
    {
        return $this->loadBefore;
    }

    /**
     * @param int[] $loadBefore
     *
     * @return Activity
     */
    public function setLoadBefore(array $loadBefore): Activity
    {
        $this->loadBefore = $loadBefore;

        return $this;
    }

    /**
     * @return int[]
     */
    public function getLoadAfter(): array
    {
        return $this->loadAfter;
    }

    /**
     * @param int[] $loadAfter
     *
     * @return Activity
     */
    public function setLoadAfter(array $loadAfter): Activity
    {
        $this->loadAfter = $loadAfter;

        return $this;
    }


}