<?php

namespace Ivory\GoogleMap\Service\Road\Base;

/**
 * @author fedotovaleksandr <mr.fedotovaleksandr@gmail.com>
 */
class SnappedPoint
{
    /**
     * @var Location
     */
    private $location;

    /** @var integer */
    private $originalIndex;

    /** @var string */
    private $placeId;

    /**
     * @return Location|null
     */
    public function getLocation() :Location
    {
        return $this->location;
    }

    /**
     * @param Location $location
     */
    public function setLocation(Location $location): void
    {
        $this->location = $location;
    }

    /**
     * @return int
     */
    public function getOriginalIndex(): int
    {
        return $this->originalIndex;
    }

    /**
     * @param int $originalIndex
     */
    public function setOriginalIndex(int $originalIndex): void
    {
        $this->originalIndex = $originalIndex;
    }

    /**
     * @return string
     */
    public function getPlaceId()
    {
        return $this->placeId;
    }

    /**
     * @param string $placeId
     */
    public function setPlaceId(string $placeId): void
    {
        $this->placeId = $placeId;
    }
}