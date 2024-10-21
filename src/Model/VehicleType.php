<?php

namespace Stevro\GraphhopperClient\Model;

class VehicleType
{
    /**
     * @var string
     */
    private $typeId;

    /**
     * @var string
     */
    private $profile;

    /**
     * @var int[]
     */
    private $capacity;

    /**
     * @var float
     */
    private $speedFactory;

    /**
     * @var float
     */
    private $serviceTimeFactor;

    /**
     * @var float
     */
    private $costPerMeter;

    /**
     * @var float
     */
    private $costPerSecond;

    /**
     * @var float
     */
    private $costPerActivation;

    /**
     * @var bool
     */
    private $considerTraffic;

    /**
     * @var string
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
    public function getTypeId(): string
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
    public function getProfile(): string
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
    public function getCapacity(): array
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
    public function getSpeedFactory(): float
    {
        return $this->speedFactory;
    }

    /**
     * @param float $speedFactory
     *
     * @return VehicleType
     */
    public function setSpeedFactory(float $speedFactory): VehicleType
    {
        $this->speedFactory = $speedFactory;

        return $this;
    }

    /**
     * @return float
     */
    public function getServiceTimeFactor(): float
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
    public function getCostPerMeter(): float
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
    public function getCostPerSecond(): float
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
    public function getCostPerActivation(): float
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
    public function isConsiderTraffic(): bool
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
    public function getNetworkDataProvider(): string
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


}