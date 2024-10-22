<?php

namespace Stevro\GraphhopperClient\tests\API;

use JMS\Serializer\SerializerBuilder;
use PHPUnit\Framework\TestCase;
use Stevro\GraphhopperClient\API\Exception\APIException;
use Stevro\GraphhopperClient\API\Request\VrpRequestPayload;
use Stevro\GraphhopperClient\API\Response\VrpResponse;
use Stevro\GraphhopperClient\API\RouteOptimizationAPI;
use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\NameConverter\CamelCaseToSnakeCaseNameConverter;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class RouteOptimizationAPITest extends TestCase
{

    //https://graphhopper.com/
    private $apiKey = 'test';

    public function testSingleVrp()
    {
        $api = new RouteOptimizationAPI($this->apiKey);

        $requestPayload = $this->buildPayload();

        try {
            $response = $api->postSingleVrp($requestPayload);
        } catch (APIException $e) {
            var_dump($e->getMessage());
            var_dump($e->getResponseBody());
            die;

            return;
        }

        $this->assertInstanceOf(VrpResponse::class, $response);
    }

    protected function buildPayload(): VrpRequestPayload
    {
        return SerializerBuilder::create()->build()->deserialize(json_encode($this->getPayload()), VrpRequestPayload::class, 'json');
    }

    protected function getPayload(): array
    {
        return [
            "vehicles" => [
                [
                    "vehicle_id" => "vehicle-1",
                    "type_id" => "cargo-bike",
                    "start_address" => [
                        "location_id" => "berlin",
                        "lon" => 13.406,
                        "lat" => 52.537,
                    ],
                    "earliest_start" => 1554804329,
                    "latest_end" => 1554808329,
                    "max_jobs" => 3,
                ],
//                [
//                    "vehicle_id" => "vehicle-2",
//                    "type_id" => "cargo-bike",
//                    "start_address" => [
//                        "location_id" => "berlin",
//                        "lon" => 13.406,
//                        "lat" => 52.537,
//                    ],
//                    "earliest_start" => 1554804329,
//                    "latest_end" => 1554808329,
//                    "max_jobs" => 3,
//                    "skills" => [
//                        "physical strength",
//                    ],
//                ],
            ],
            "vehicle_types" => [
                [
                    "type_id" => "cargo-bike",
                    "capacity" => [
                        10,
                    ],
                    "profile" => "bike",
                ],
            ],
            "services" => [
                [
                    "id" => "s-1",
                    "name" => "visit-Joe",
                    "address" => [
                        "location_id" => "13.375854_52.537338",
                        "lon" => 13.375854,
                        "lat" => 52.537338,
                    ],
                    "size" => [
                        1,
                    ],
                    "time_windows" => [
                        [
                            "earliest" => 1554805329,
                            "latest" => 1554806329,
                        ],
                    ],
                ],
                [
                    "id" => "s-2",
                    "name" => "serve-Peter",
                    "address" => [
                        "location_id" => "13.393364_52.525851",
                        "lon" => 13.393364,
                        "lat" => 52.525851,
                    ],
                    "size" => [
                        1,
                    ],
                ],
//                [
//                    "id" => "s-3",
//                    "name" => "visit-Michael",
//                    "address" => [
//                        "location_id" => "13.416882_52.523543",
//                        "lon" => 13.416882,
//                        "lat" => 52.523543,
//                    ],
//                    "size" => [
//                        1,
//                    ],
//                ],
//                [
//                    "id" => "s-4",
//                    "name" => "do nothing",
//                    "address" => [
//                        "location_id" => "13.395767_52.514038",
//                        "lon" => 13.395767,
//                        "lat" => 52.514038,
//                    ],
//                    "size" => [
//                        1,
//                    ],
//                ],
            ],
            "shipments" => [
                [
                    "id" => "7fe77504-7df8-4497-843c-02d70b6490ce",
                    "name" => "pickup and deliver pizza to Peter",
                    "priority" => 1,
                    "pickup" => [
                        "address" => [
                            "location_id" => "13.387613_52.529961",
                            "lon" => 13.387613,
                            "lat" => 52.529961,
                        ],
                    ],
                    "delivery" => [
                        "address" => [
                            "location_id" => "13.380575_52.513614",
                            "lon" => 13.380575,
                            "lat" => 52.513614,
                        ],
                    ],
                    "size" => [
                        1,
                    ],
                    "required_skills" => [
                        "physical strength",
                    ],
                ],
            ],
            "objectives" => [
                [
                    "type" => "min",
                    "value" => "vehicles",
                ],
                [
                    "type" => "min",
                    "value" => "completion_time",
                ],
            ],
            "configuration" => [
                "routing" => [
                    "calc_points" => true,
                    "snap_preventions" => [
                        "motorway",
                        "trunk",
                        "tunnel",
                        "bridge",
                        "ferry",
                    ],
                ],
            ],
        ];
    }

    public function testBatchVrp()
    {
        $api = new RouteOptimizationAPI($this->apiKey);
        $requestPayload = $this->buildPayload();
        try {
            $jobId = $api->postBatchVrp($requestPayload);
        } catch (APIException $e) {
            var_dump($e->getMessage());
            var_dump($e->getResponseBody());

            return;
        }

        $this->assertIsString($jobId);

        sleep(1);

        $solution = $api->getSolution($jobId);

        $this->assertInstanceOf(VrpResponse::class, $solution);
    }

    protected function getJsonPayload()
    {
        return '{
  "configuration": {
    "routing": {
      "calc_points": true,
      "return_snapped_waypoints": true
    }
  },
  "objectives": [
    {
      "type": "min",
      "value": "completion_time"
    }
  ],
  "vehicles": [
    {
      "vehicle_id": "v1",
      "type_id": "default_type",
      "start_address": {
        "location_id": "v1",
        "lat": 48.142667,
        "lon": 11.548715
      },
      "earliest_start": 1508839200,
      "return_to_depot": true,
      "max_jobs": 5
    },
    {
      "vehicle_id": "v2",
      "type_id": "default_type",
      "start_address": {
        "location_id": "v1",
        "lat": 48.142667,
        "lon": 11.548715
      },
      "earliest_start": 1508839200,
      "return_to_depot": true,
      "max_jobs": 5
    }
  ],
  "services": [
    {
      "id": "s1",
      "type": "service",
      "address": {
        "location_id": "s1",
        "lat": 48.08641845016677,
        "lon": 11.516493414687789
      },
      "duration": 120
    },
    {
      "id": "s2",
      "type": "service",
      "address": {
        "location_id": "s2",
        "lat": 48.14205449661027,
        "lon": 11.603417306421305
      },
      "duration": 120
    },
    {
      "id": "s3",
      "type": "service",
      "address": {
        "location_id": "s3",
        "lat": 48.195684983013834,
        "lon": 11.639695802730769
      },
      "duration": 120
    },
    {
      "id": "s4",
      "type": "service",
      "address": {
        "location_id": "s4",
        "lat": 48.09606824878595,
        "lon": 11.469586212141838
      },
      "duration": 120
    },
    {
      "id": "s5",
      "type": "service",
      "address": {
        "location_id": "s5",
        "lat": 48.16172066492897,
        "lon": 11.616870772386983
      },
      "duration": 120
    },
    {
      "id": "s6",
      "type": "service",
      "address": {
        "location_id": "s6",
        "lat": 48.2127829633635,
        "lon": 11.589519730966291
      },
      "duration": 120
    },
    {
      "id": "s7",
      "type": "service",
      "address": {
        "location_id": "s7",
        "lat": 48.116753106475464,
        "lon": 11.594491066071091
      },
      "duration": 120
    },
    {
      "id": "s8",
      "type": "service",
      "address": {
        "location_id": "s8",
        "lat": 48.1964155166027,
        "lon": 11.495951860126452
      },
      "duration": 120
    },
    {
      "id": "s9",
      "type": "service",
      "address": {
        "location_id": "s9",
        "lat": 48.0996356904015,
        "lon": 11.509811865652752
      },
      "duration": 120
    },
    {
      "id": "s10",
      "type": "service",
      "address": {
        "location_id": "s10",
        "lat": 48.21479924905828,
        "lon": 11.58887075963218
      },
      "duration": 120
    }
  ]
}';
    }

}