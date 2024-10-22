<?php

namespace Stevro\GraphhopperClient\Model;

use JMS\Serializer\Annotation as Serializer;

class GroupRelation
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
    private $groups;

    /**
     * @param string   $type
     * @param string[] $groups
     */
    public function __construct(string $type, array $groups)
    {
        $this->type = $type;
        $this->groups = $groups;
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
     * @return GroupRelation
     */
    public function setType(string $type): GroupRelation
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getGroups(): array
    {
        return $this->groups;
    }

    /**
     * @param string[] $groups
     *
     * @return GroupRelation
     */
    public function setGroups(array $groups): GroupRelation
    {
        $this->groups = $groups;

        return $this;
    }


}