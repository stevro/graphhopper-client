<?php

namespace Stevro\GraphhopperClient\Model;

/**
 * https://github.com/graphhopper/directions-api-clients/blob/master/php/SwaggerClient-php/lib/Model/Address.php
 */
class Address
{

    /**
     * @var string
     */
    private $location;
    /**
     * @var string
     */
    private $name;
    /**
     * @var string
     */
    private $streetHint;

    /**
     * @var double
     */
    private $lon;

    /**
     * @var double
     */
    private $lat;

}