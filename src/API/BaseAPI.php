<?php

namespace Stevro\GraphhopperClient\API;

use GuzzleHttp\Client;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\SerializerInterface;
use Psr\Http\Client\ClientInterface;


class BaseAPI
{

    /**
     * @var string
     */
    protected $apiKey;

    /**
     * @var ClientInterface
     */
    protected $httpClient;

    protected $baseUrl = 'https://graphhopper.com/api/1/';
    /**
     * @var SerializerInterface
     */
    protected $serializer;

    /**
     * @param string               $apiKey
     * @param ClientInterface|null $httpClient
     */
    public function __construct(
        string $apiKey,
        ClientInterface $httpClient = null,
        SerializerInterface $serializer = null
    ) {
        $this->apiKey = $apiKey;
        $this->httpClient = $httpClient ?: new Client(['base_uri' => $this->baseUrl, 'verify' => true]);
        $this->serializer = $serializer ?: $this->initSerializer();
    }

    /**
     * @return SerializerInterface
     */
    private function initSerializer(): SerializerInterface
    {
        return SerializerBuilder::create()->build();
    }

}