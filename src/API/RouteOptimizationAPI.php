<?php

namespace Stevro\GraphhopperClient\API;

use GuzzleHttp\Exception\RequestException;
use Psr\Http\Client\RequestExceptionInterface;
use Stevro\GraphhopperClient\API\Exception\APIException;
use Stevro\GraphhopperClient\API\Request\VrpRequestPayload;
use Stevro\GraphhopperClient\API\Response\VrpResponse;

class RouteOptimizationAPI extends BaseAPI
{

    /**
     * @var string
     */
    private $rawSolution;

    public function getRawSolution()
    {
        return $this->rawSolution;
    }

    /**
     * https://docs.graphhopper.com/#operation/solveVRP
     *
     * @param VrpRequestPayload $payload
     *
     * @return VrpResponse
     * @throws APIException
     *
     */
    public function postSingleVrp(VrpRequestPayload $payload)
    {
        $this->rawSolution = null;
        try {
            $response = $this->httpClient->post('vrp'.'?key='.$this->apiKey, [
                'headers' => [
                    'Content-Type' => 'application/json',
                ],
                'body' => $this->buildPayload($payload),
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

        $this->rawSolution = $response->getBody()->getContents();
        /** @var VrpResponse $data */
        $vrpResponse = $this->serializer->deserialize($this->rawSolution, VrpResponse::class, 'json');

        return $vrpResponse;
    }

    public function buildPayload(VrpRequestPayload $payload): string
    {
        return $this->serializer->serialize($payload, 'json');
    }

    /**
     *
     * https://docs.graphhopper.com/#operation/asyncVRP
     *
     * @param VrpRequestPayload $payload
     *
     * @return string
     */
    public function postBatchVrp(VrpRequestPayload $payload)
    {
        try {
            $response = $this->httpClient->post('vrp/optimize'.'?key='.$this->apiKey, [
                'headers' => [
                    'Content-Type' => 'application/json',
                ],
                'body' => $this->buildPayload($payload),
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
     *
     * https://docs.graphhopper.com/#operation/getSolution
     *
     * @param string $jobId
     *
     * @return VrpResponse
     * @throws APIException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getSolution(string $jobId)
    {
        $this->rawSolution = null;
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

        $this->rawSolution = $response->getBody()->getContents();

        /** @var VrpResponse $data */
        $vrpResponse = $this->serializer->deserialize($this->rawSolution, VrpResponse::class, 'json');

        return $vrpResponse;
    }

}