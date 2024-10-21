<?php

namespace Stevro\GraphhopperClient\Model;

class JobRelation
{

    /**
     * @var string
     */
    private $type;

    /**
     * @var string[]
     */
    private $ids = [];

    /**
     * @var string
     */
    private $vehicleId;

    /**
     * @param string   $type
     * @param string[] $ids
     */
    public function __construct(string $type, array $ids)
    {
        $this->type = $type;
        $this->ids = $ids;
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
     * @return JobRelation
     */
    public function setType(string $type): JobRelation
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getIds(): array
    {
        return $this->ids;
    }

    /**
     * @param string[] $ids
     *
     * @return JobRelation
     */
    public function setIds(array $ids): JobRelation
    {
        $this->ids = $ids;

        return $this;
    }

    /**
     * @return string
     */
    public function getVehicleId(): string
    {
        return $this->vehicleId;
    }

    /**
     * @param string $vehicleId
     *
     * @return JobRelation
     */
    public function setVehicleId(string $vehicleId): JobRelation
    {
        $this->vehicleId = $vehicleId;

        return $this;
    }


}