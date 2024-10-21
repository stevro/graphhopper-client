<?php

namespace Stevro\GraphhopperClient\API\Exception;

class APIException extends \Exception
{
    /**
     * The HTTP body of the server response either as Json or string.
     *
     * @var mixed
     */
    protected $responseBody;

    /**
     * The HTTP header of the server response.
     *
     * @var string[]|null
     */
    protected $responseHeaders;

    /**
     * The deserialized response object
     *
     * @var $responseObject;
     */
    protected $responseObject;

    /**
     * Constructor
     *
     * @param string        $message         Error message
     * @param int           $code            HTTP status code
     * @param string[]|null $responseHeaders HTTP response header
     * @param mixed         $responseBody    HTTP decoded body of the server response either as \stdClass or string
     */
    public function __construct($message = "", $code = 0, $previous = null, $responseHeaders = [], $responseBody = null)
    {
        parent::__construct($message, $code, $previous);
        $this->responseHeaders = $responseHeaders;
        $this->responseBody = $responseBody;
    }

    /**
     * @return mixed
     */
    public function getResponseBody()
    {
        return $this->responseBody;
    }

    /**
     * @return string[]|null
     */
    public function getResponseHeaders(): array
    {
        return $this->responseHeaders;
    }

    /**
     * @return mixed
     */
    public function getResponseObject()
    {
        return $this->responseObject;
    }

    /**
     * @param mixed $responseBody
     *
     * @return APIException
     */
    public function setResponseBody($responseBody)
    {
        $this->responseBody = $responseBody;

        return $this;
    }

    /**
     * @param string[]|null $responseHeaders
     *
     * @return APIException
     */
    public function setResponseHeaders(array $responseHeaders): APIException
    {
        $this->responseHeaders = $responseHeaders;

        return $this;
    }

    /**
     * @param mixed $responseObject
     *
     * @return APIException
     */
    public function setResponseObject($responseObject)
    {
        $this->responseObject = $responseObject;

        return $this;
    }

}