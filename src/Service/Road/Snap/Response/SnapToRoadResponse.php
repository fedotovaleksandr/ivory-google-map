<?php


namespace Ivory\GoogleMap\Service\Road\Snap\Response;

use Ivory\GoogleMap\Service\Base\SnappedPoint;

/**
 * @author fedotovaleksandr <mr.fedotovaleksandr@gmail.com>
 */
class SnapToRoadResponse
{

    private $snappedPoints;

    /**
     * @return array|SnappedPoint[]
     */
    public function getSnappedPoints()
    {
        return $this->snappedPoints;
    }

    /**
     * @param array|SnappedPoint[] $snappedPoints
     */
    public function setSnappedPoints($snappedPoints): void
    {
        $this->snappedPoints = $snappedPoints;
    }
}