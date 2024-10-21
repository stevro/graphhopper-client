<?php

namespace Stevro\GraphhopperClient\API;

use GuzzleHttp\Exception\RequestException;
use Psr\Http\Client\RequestExceptionInterface;
use Stevro\GraphhopperClient\API\Exception\APIException;
use Stevro\GraphhopperClient\API\Request\VrpRequestPayload;
use Stevro\GraphhopperClient\API\Response\VrpResponse;
use Symfony\Component\Serializer\Normalizer\AbstractObjectNormalizer;

class RouteOptimizationAPI extends BaseAPI
{

    /**
     * @param VrpRequestPayload $payload
     *
     * @return VrpResponse
     * @throws APIException
     *
     */
    public function postSingleVrp(VrpRequestPayload $payload, array $serializerContext = null)
    {
        if (!$serializerContext) {
            $serializerContext = [
                AbstractObjectNormalizer::SKIP_NULL_VALUES => true,
                AbstractObjectNormalizer::SKIP_UNINITIALIZED_VALUES => true,
                AbstractObjectNormalizer::PRESERVE_EMPTY_OBJECTS => false,
            ];
        }

        try {
            $response = $this->httpClient->post('vrp'.'?key='.$this->apiKey, [
                'headers' => [
                    'Content-Type' => 'application/json',
                ],
                'body' => $this->serializer->serialize($payload, 'json', $serializerContext),
            ]);
        } catch (RequestException $e) {
            throw new APIException(
                "[{$e->getCode()}] {$e->getMessage()}",
                $e->getCode(),
                $e,
                $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
            );
        } catch (RequestExceptionInterface $e) {
            throw new APIException(
                "[{$e->getCode()}] {$e->getMessage()}",
                $e->getCode(),
                $e
            );
        } catch (\Exception $e) {
            throw new APIException($e->getMessage(), $e->getCode(), $e);
        }

        $statusCode = $response->getStatusCode();

        if ($statusCode < 200 || $statusCode > 299) {
            throw new ApiException(
                sprintf(
                    '[%d] Error connecting to the GraphHopper API',
                    $statusCode
                ),
                $statusCode,
                $response->getHeaders(),
                $response->getBody()
            );
        }

        return $this->serializer->deserialize($response->getBody()->getContents(), VrpResponse::class, 'json');
    }

    /**
     * @param VrpRequestPayload $payload
     *
     * @return string
     */
    public function postBatchVrp(VrpRequestPayload $payload, array $serializerContext = null)
    {
        if (!$serializerContext) {
            $serializerContext = [
                AbstractObjectNormalizer::SKIP_NULL_VALUES => true,
                AbstractObjectNormalizer::SKIP_UNINITIALIZED_VALUES => true,
                AbstractObjectNormalizer::PRESERVE_EMPTY_OBJECTS => false,
            ];
        }

        try {
            $response = $this->httpClient->post('vrp/optimize'.'?key='.$this->apiKey, [
                'headers' => [
                    'Content-Type' => 'application/json',
                ],
                'body' => $this->serializer->serialize($payload, 'json', $serializerContext),
            ]);
        } catch (RequestException $e) {
            throw new APIException(
                "[{$e->getCode()}] {$e->getMessage()}",
                $e->getCode(),
                $e,
                $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
            );
        } catch (RequestExceptionInterface $e) {
            throw new APIException(
                "[{$e->getCode()}] {$e->getMessage()}",
                $e->getCode(),
                $e
            );
        } catch (\Exception $e) {
            throw new APIException($e->getMessage(), $e->getCode(), $e);
        }

        $statusCode = $response->getStatusCode();

        if ($statusCode < 200 || $statusCode > 299) {
            throw new ApiException(
                sprintf(
                    '[%d] Error connecting to the GraphHopper API',
                    $statusCode
                ),
                $statusCode,
                $response->getHeaders(),
                $response->getBody()
            );
        }

        $vrpResponse = $this->serializer->deserialize($response->getBody()->getContents(), VrpResponse::class, 'json');

        return $vrpResponse->getJobId();
    }

    /**
     * @param string $jobId
     *
     * @return VrpResponse
     * @throws APIException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getSolution(string $jobId)
    {
        try {
            $response = $this->httpClient->get('vrp/solution/'.$jobId.'?key='.$this->apiKey, []);
        } catch (RequestException $e) {
            throw new APIException(
                "[{$e->getCode()}] {$e->getMessage()}",
                $e->getCode(),
                $e,
                $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
            );
        } catch (RequestExceptionInterface $e) {
            throw new APIException(
                "[{$e->getCode()}] {$e->getMessage()}",
                $e->getCode(),
                $e
            );
        } catch (\Exception $e) {
            throw new APIException($e->getMessage(), $e->getCode(), $e);
        }

        $statusCode = $response->getStatusCode();

        if ($statusCode < 200 || $statusCode > 299) {
            throw new ApiException(
                sprintf(
                    '[%d] Error connecting to the GraphHopper API',
                    $statusCode
                ),
                $statusCode,
                $response->getHeaders(),
                $response->getBody()
            );
        }

        return $this->serializer->deserialize($response->getBody()->getContents(), VrpResponse::class, 'json');
    }

}