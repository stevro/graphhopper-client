<?php

namespace Stevro\GraphhopperClient\Model;

use JMS\Serializer\Annotation as Serializer;

/**
 *
 */
class Shipment
{

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $id;
    /**
     * @var string
     *            @Serializer\Type("string")
     */
    private $name;
    /**
     * @var int
     * @Serializer\Type("int")
     */
    private $priority;

    /**
     * @var Stop
     * @Serializer\Type("Stevro\GraphhopperClient\Model\Stop")
     */
    private $pickup;

    /**
     * @var Stop
     * @Serializer\Type("Stevro\GraphhopperClient\Model\Stop")
     */
    private $delivery;
    /**
     * @var int[]|null
     *                @Serializer\Type("array<int>")
     */
    private $size;
    /**
     * @var string[]|null
     * @Serializer\Type("array<string>")
     */
    private $requiredSkills;
    /**
     * @var string[]|null
     * @Serializer\Type("array<string>")
     */
    private $allowedVehicles;
    /**
     * @var string[]|null
     * @Serializer\Type("array<string>")
     */
    private $disallowedVehicles;
    /**
     * @var PreferredVehicle[]|null
     * @Serializer\Type("array<Stevro\GraphhopperClient\Model\PreferredVehicle>")
     */
    private $preferredVehicles;
    /**
     * @var int
     * @Serializer\Type("int")
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
    public function getId()
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
    public function getName()
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
    public function getPriority()
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
    public function getSize()
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
    public function getRequiredSkills()
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
    public function getAllowedVehicles()
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
    public function getDisallowedVehicles()
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
    public function getPreferredVehicles()
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
    public function getMaxTimeInVehicle()
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