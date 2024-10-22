<?php

namespace Stevro\GraphhopperClient\Model;

use JMS\Serializer\Annotation as Serializer;

class Objective
{
    /**
     * @var string
     *            @Serializer\Type("string")
     */
    private $type;

    /**
     * @var string
     *            @Serializer\Type("string")
     */
    private $value;

    /**
     * @param string $type
     * @param string $value
     */
    public function __construct(string $type, string $value)
    {
        $this->type = $type;
        $this->value = $value;
    }


    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return Objective
     */
    public function setType(string $type): Objective
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @param string $value
     *
     * @return Objective
     */
    public function setValue(string $value): Objective
    {
        $this->value = $value;

        return $this;
    }


}