<?php

namespace Ivory\GoogleMap\Service\Road\Base;

use Ivory\GoogleMap\Base\Coordinate;

/**
 * @author fedotovaleksandr <mr.fedotovaleksandr@gmail.com>
 */
class SnappedPoint
{
    /**
     * @var Coordinate|null
     */
    private $location;

    /** @var integer */
    private $originalIndex;

    /** @var string */
    private $placeId;

    /**
     * @return Coordinate|null
     */
    public function getLocation(): ?Coordinate
    {
        return $this->location;
    }

    /**
     * @param Coordinate|null $location
     */
    public function setLocation(?Coordinate $location): void
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
    public function getPlaceId(): string
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