<?php

namespace Stevro\GraphhopperClient\Model;

use JMS\Serializer\Annotation as Serializer;

class VehicleType
{
    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $typeId;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $profile;

    /**
     * @var int[]
     * @Serializer\Type("array<int>")
     */
    private $capacity;

    /**
     * @var float
     * @Serializer\Type("float")
     */
    private $speedFactor;

    /**
     * @var float
     * @Serializer\Type("float")
     */
    private $serviceTimeFactor;

    /**
     * @var float
     * @Serializer\Type("float")
     */
    private $costPerMeter;

    /**
     * @var float
     * @Serializer\Type("float")
     */
    private $costPerSecond;

    /**
     * @var float
     * @Serializer\Type("float")
     */
    private $costPerActivation;

    /**
     * @var bool
     * @Serializer\Type("bool")
     */
    private $considerTraffic;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $networkDataProvider;

    /**
     * @param string $typeId
     */
    public function __construct(string $typeId)
    {
        $this->typeId = $typeId;
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
     * @return VehicleType
     */
    public function setTypeId(string $typeId): VehicleType
    {
        $this->typeId = $typeId;

        return $this;
    }

    /**
     * @return string
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * @param string $profile
     *
     * @return VehicleType
     */
    public function setProfile(string $profile): VehicleType
    {
        $this->profile = $profile;

        return $this;
    }

    /**
     * @return int[]
     */
    public function getCapacity()
    {
        return $this->capacity;
    }

    /**
     * @param int[] $capacity
     *
     * @return VehicleType
     */
    public function setCapacity(array $capacity): VehicleType
    {
        $this->capacity = $capacity;

        return $this;
    }


    /**
     * @return float
     */
    public function getServiceTimeFactor()
    {
        return $this->serviceTimeFactor;
    }

    /**
     * @param float $serviceTimeFactor
     *
     * @return VehicleType
     */
    public function setServiceTimeFactor(float $serviceTimeFactor): VehicleType
    {
        $this->serviceTimeFactor = $serviceTimeFactor;

        return $this;
    }

    /**
     * @return float
     */
    public function getCostPerMeter()
    {
        return $this->costPerMeter;
    }

    /**
     * @param float $costPerMeter
     *
     * @return VehicleType
     */
    public function setCostPerMeter(float $costPerMeter): VehicleType
    {
        $this->costPerMeter = $costPerMeter;

        return $this;
    }

    /**
     * @return float
     */
    public function getCostPerSecond()
    {
        return $this->costPerSecond;
    }

    /**
     * @param float $costPerSecond
     *
     * @return VehicleType
     */
    public function setCostPerSecond(float $costPerSecond): VehicleType
    {
        $this->costPerSecond = $costPerSecond;

        return $this;
    }

    /**
     * @return float
     */
    public function getCostPerActivation()
    {
        return $this->costPerActivation;
    }

    /**
     * @param float $costPerActivation
     *
     * @return VehicleType
     */
    public function setCostPerActivation(float $costPerActivation): VehicleType
    {
        $this->costPerActivation = $costPerActivation;

        return $this;
    }

    /**
     * @return bool
     */
    public function isConsiderTraffic()
    {
        return $this->considerTraffic;
    }

    /**
     * @param bool $considerTraffic
     *
     * @return VehicleType
     */
    public function setConsiderTraffic(bool $considerTraffic): VehicleType
    {
        $this->considerTraffic = $considerTraffic;

        return $this;
    }

    /**
     * @return string
     */
    public function getNetworkDataProvider()
    {
        return $this->networkDataProvider;
    }

    /**
     * @param string $networkDataProvider
     *
     * @return VehicleType
     */
    public function setNetworkDataProvider(string $networkDataProvider): VehicleType
    {
        $this->networkDataProvider = $networkDataProvider;

        return $this;
    }

    /**
     * @return float
     */
    public function getSpeedFactor()
    {
        return $this->speedFactor;
    }

    /**
     * @param float $speedFactor
     *
     * @return VehicleType
     */
    public function setSpeedFactor(float $speedFactor): VehicleType
    {
        $this->speedFactor = $speedFactor;

        return $this;
    }


}