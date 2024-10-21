<?php

namespace Stevro\GraphhopperClient\Model;

/**
 *
 */
class Shipment
{

    /**
     * @var string
     */
    private $id;
    /**
     * @var string
     */
    private $name;
    /**
     * @var int
     */
    private $priority;

    /**
     * @var Stop
     */
    private $pickup;

    /**
     * @var Stop
     */
    private $delivery;
    /**
     * @var int[]|null
     */
    private $size;
    /**
     * @var string[]|null
     */
    private $requiredSkills;
    /**
     * @var string[]|null
     */
    private $allowedVehicles;
    /**
     * @var string[]|null
     */
    private $disallowedVehicles;
    /**
     * @var PreferredVehicle[]|null
     */
    private $preferredVehicles;
    /**
     * @var int
     */
    private $maxTimeInVehicle;

    /**
     * @param string $id
     * @param Stop   $pickup
     * @param Stop   $delivery
     */
    public function __construct(string $id, Stop $pickup, Stop $delivery)
    {
        $this->id = $id;
        $this->pickup = $pickup;
        $this->delivery = $delivery;
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
     * @return Shipment
     */
    public function setId(string $id): Shipment
    {
        $this->id = $id;

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
     * @return Shipment
     */
    public function setName(string $name): Shipment
    {
        $this->name = $name;

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
     * @return Shipment
     */
    public function setPriority(int $priority): Shipment
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * @return Stop
     */
    public function getPickup(): Stop
    {
        return $this->pickup;
    }

    /**
     * @param Stop $pickup
     *
     * @return Shipment
     */
    public function setPickup(Stop $pickup): Shipment
    {
        $this->pickup = $pickup;

        return $this;
    }

    /**
     * @return Stop
     */
    public function getDelivery(): Stop
    {
        return $this->delivery;
    }

    /**
     * @param Stop $delivery
     *
     * @return Shipment
     */
    public function setDelivery(Stop $delivery): Shipment
    {
        $this->delivery = $delivery;

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
     * @return Shipment
     */
    public function setSize(array $size): Shipment
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
     * @return Shipment
     */
    public function setRequiredSkills(array $requiredSkills): Shipment
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
     * @return Shipment
     */
    public function setAllowedVehicles(array $allowedVehicles): Shipment
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
     * @return Shipment
     */
    public function setDisallowedVehicles(array $disallowedVehicles): Shipment
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
     * @return Shipment
     */
    public function setPreferredVehicles(array $preferredVehicles): Shipment
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
     * @return Shipment
     */
    public function setMaxTimeInVehicle(int $maxTimeInVehicle): Shipment
    {
        $this->maxTimeInVehicle = $maxTimeInVehicle;

        return $this;
    }


}