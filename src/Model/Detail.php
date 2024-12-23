<?php

namespace Stevro\GraphhopperClient\Model;

use JMS\Serializer\Annotation as Serializer;

class Detail
{
    /**
     * @var string
     *            @Serializer\Type("string")
     */
    private $id;

    /**
     * @var int
     *         @Serializer\Type("int")
     */
    private $code;

    /**
     * @var string|null
     *                 @Serializer\Type("string")
     */
    private $reason;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     *
     * @return Detail
     */
    public function setId(string $id): Detail
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return int
     */
    public function getCode(): int
    {
        return $this->code;
    }

    /**
     * @param int $code
     *
     * @return Detail
     */
    public function setCode(int $code): Detail
    {
        $this->code = $code;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @param string $reason
     *
     * @return Detail
     */
    public function setReason(string $reason): Detail
    {
        $this->reason = $reason;

        return $this;
    }

}