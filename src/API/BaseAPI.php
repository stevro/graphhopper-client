<?php

namespace Stevro\GraphhopperClient\API;

use GuzzleHttp\Client;
use Psr\Http\Client\ClientInterface;
use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\NameConverter\CamelCaseToSnakeCaseNameConverter;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;

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
     * @param string $apiKey
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
    private function initSerializer()
    {
        return new Serializer(
            [new ObjectNormalizer(null, new CamelCaseToSnakeCaseNameConverter(), null, new ReflectionExtractor()), new ArrayDenormalizer()],
            [new JsonEncoder()]
        );
    }

}