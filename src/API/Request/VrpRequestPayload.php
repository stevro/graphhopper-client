<?php

namespace Stevro\GraphhopperClient\API\Request;

use Phalcon\Mvc\Model\Relation;
use Stevro\GraphhopperClient\Model\Configuration;
use Stevro\GraphhopperClient\Model\CostMatrix;
use Stevro\GraphhopperClient\Model\GroupRelation;
use Stevro\GraphhopperClient\Model\JobRelation;
use Stevro\GraphhopperClient\Model\Objective;
use Stevro\GraphhopperClient\Model\Service;
use Stevro\GraphhopperClient\Model\Shipment;
use Stevro\GraphhopperClient\Model\Vehicle;
use Stevro\GraphhopperClient\Model\VehicleType;

class VrpRequestPayload
{

    /**
     * @var Vehicle[]
     */
    private $vehicles;

    /**
     * @var VehicleType[]
     */
    private $vehicleTypes;

    /**
     * @var Service[]
     */
    private $services;

    /**
     * @var Shipment[]
     */
    private $shipments;

    /**
     * @var JobRelation[]|GroupRelation[]
     */
    private $relations;

    /**
     * @var Objective[]
     */
    private $objectives;

    /**
     * @var CostMatrix[]
     */
    private $costMatrices;

    /**
     * @var Configuration|null
     */
    private $configuration;

    /**
     * @return Vehicle[]
     */
    public function getVehicles(): array
    {
        return $this->vehicles;
    }

    /**
     * @param Vehicle[] $vehicles
     *
     * @return VrpRequestPayload
     */
    public function setVehicles(array $vehicles): VrpRequestPayload
    {
        $this->vehicles = $vehicles;

        return $this;
    }

    /**
     * @return VehicleType[]
     */
    public function getVehicleTypes(): array
    {
        return $this->vehicleTypes;
    }

    /**
     * @param VehicleType[] $vehicleTypes
     *
     * @return VrpRequestPayload
     */
    public function setVehicleTypes(array $vehicleTypes): VrpRequestPayload
    {
        $this->vehicleTypes = $vehicleTypes;

        return $this;
    }

    /**
     * @return Service[]
     */
    public function getServices(): array
    {
        return $this->services;
    }

    /**
     * @param Service[] $services
     *
     * @return VrpRequestPayload
     */
    public function setServices(array $services): VrpRequestPayload
    {
        $this->services = $services;

        return $this;
    }

    /**
     * @return Shipment[]
     */
    public function getShipments(): array
    {
        return $this->shipments;
    }

    /**
     * @param Shipment[] $shipments
     *
     * @return VrpRequestPayload
     */
    public function setShipments(array $shipments): VrpRequestPayload
    {
        $this->shipments = $shipments;

        return $this;
    }

    /**
     * @return GroupRelation[]|JobRelation[]
     */
    public function getRelations(): array
    {
        return $this->relations;
    }

    /**
     * @param GroupRelation[]|JobRelation[] $relations
     *
     * @return VrpRequestPayload
     */
    public function setRelations(array $relations): VrpRequestPayload
    {
        $this->relations = $relations;

        return $this;
    }

    /**
     * @return Objective[]
     */
    public function getObjectives(): array
    {
        return $this->objectives;
    }

    /**
     * @param Objective[] $objectives
     *
     * @return VrpRequestPayload
     */
    public function setObjectives(array $objectives): VrpRequestPayload
    {
        $this->objectives = $objectives;

        return $this;
    }

    /**
     * @return CostMatrix[]
     */
    public function getCostMatrices(): array
    {
        return $this->costMatrices;
    }

    /**
     * @param CostMatrix[] $costMatrices
     *
     * @return VrpRequestPayload
     */
    public function setCostMatrices(array $costMatrices): VrpRequestPayload
    {
        $this->costMatrices = $costMatrices;

        return $this;
    }

    /**
     * @return Configuration|null
     */
    public function getConfiguration()
    {
        return $this->configuration;
    }

    /**
     * @param Configuration|null $configuration
     *
     * @return VrpRequestPayload
     */
    public function setConfiguration(Configuration $configuration = null): VrpRequestPayload
    {
        $this->configuration = $configuration;

        return $this;
    }

    public function addVehicle(Vehicle $vehicle): VrpRequestPayload
    {
        $this->vehicles[] = $vehicle;

        return $this;
    }

    public function addVehicleType(VehicleType $vehicleType): VrpRequestPayload
    {
        $this->vehicleTypes[] = $vehicleType;

        return $this;
    }

    public function addService(Service $service): VrpRequestPayload
    {
        $this->services[] = $service;
        return $this;
    }
    public function addShipment(Shipment $shipment): VrpRequestPayload
    {
        $this->shipments[] = $shipment;
        return $this;
    }

}