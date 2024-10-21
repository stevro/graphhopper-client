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
     * @var int[]
     */
    private $size = [];
    /**
     * @var string[]
     */
    private $requiredSkills = [];
    /**
     * @var string[]
     */
    private $allowedVehicles = [];
    /**
     * @var string[]
     */
    private $disallowedVehicles = [];
    /**
     * @var int
     */
    private $maxTimeInVehicle;
}