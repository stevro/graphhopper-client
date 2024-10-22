<?php

namespace Stevro\GraphhopperClient\Model;

use JMS\Serializer\Annotation as Serializer;

class CostMatrix
{

    /**
     * @var string
     *            @Serializer\Type("string")
     */
    private $type;

    /**
     * @var string[]
     *              @Serializer\Type("array<string>")
     */
    private $locationIds;

    /**
     * @var array
     *           @Serializer\Type("array")
     */
    private $data;

    /**
     * @var string
     *            @Serializer\Type("string")
     */
    private $profile;


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
     * @return CostMatrix
     */
    public function setType(string $type): CostMatrix
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getLocationIds(): array
    {
        return $this->locationIds;
    }

    /**
     * @param string[] $locationIds
     *
     * @return CostMatrix
     */
    public function setLocationIds(array $locationIds): CostMatrix
    {
        $this->locationIds = $locationIds;

        return $this;
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param array $data
     *
     * @return CostMatrix
     */
    public function setData(array $data): CostMatrix
    {
        $this->data = $data;

        return $this;
    }

    /**
     * @return string
     */
    public function getProfile(): string
    {
        return $this->profile;
    }

    /**
     * @param string $profile
     *
     * @return CostMatrix
     */
    public function setProfile(string $profile): CostMatrix
    {
        $this->profile = $profile;

        return $this;
    }


}