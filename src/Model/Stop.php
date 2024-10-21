<?php

namespace Stevro\GraphhopperClient\Model;

/**
 * https://github.com/graphhopper/directions-api-clients/blob/master/php/SwaggerClient-php/lib/Model/Stop.php
 */
class Stop
{

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
     * @var string
     */
    private $group;

}