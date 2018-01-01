<?php


namespace Ivory\GoogleMap\Service\Road\Snap\Response;

use Ivory\GoogleMap\Service\Road\Base\SnappedPoint;
use Ivory\GoogleMap\Service\Road\Snap\Request\SnapToRoadRequestInterface;

/**
 * @author fedotovaleksandr <mr.fedotovaleksandr@gmail.com>
 */
class SnapToRoadResponse
{
    /**
     * @var array|SnappedPoint[]
     */
    private $snappedPoints;

    /**
     * @var SnapToRoadRequestInterface|null
     */
    private $request;

    /**
     * @return array|SnappedPoint[]
     */
    public function getSnappedPoints(): array
    {
        return $this->snappedPoints;
    }

    /**
     * @param array|SnappedPoint[] $snappedPoints
     */
    public function setSnappedPoints(array $snappedPoints)
    {
        $this->snappedPoints = $snappedPoints;
    }

    /**
     * @return SnapToRoadRequestInterface|null
     */
    public function getRequest(): SnapToRoadRequestInterface
    {
        return $this->request;
    }

    /**
     * @param SnapToRoadRequestInterface|null $request
     */
    public function setRequest(SnapToRoadRequestInterface $request): void
    {
        $this->request = $request;
    }
}