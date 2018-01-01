<?php

namespace Ivory\GoogleMap\Service\Road\Snap\Request;

use Ivory\GoogleMap\Base\Coordinate;

/**
 * @author fedotovaleksandr <mr.fedotovaleksandr@gmail.com>
 */
class SnapToRoadRequest implements SnapToRoadRequestInterface
{
    /** @var array|Coordinate[] */
    private $coordinates;

    /** @var boolean */
    private $interpolate;

    /**
     * SnapToRoadRequest constructor.
     *
     * @param array|Coordinate[] $coordinates
     * @param bool $interpolate
     */
    public function __construct($coordinates, $interpolate = false)
    {
        $this->coordinates = $coordinates;
        $this->interpolate = $interpolate;
    }

    /**
     * @return array|Coordinate[]
     */
    public function getCoordinates()
    {
        return $this->coordinates;
    }

    /**
     * @param array|Coordinate[] $coordinates
     */
    public function setCoordinates($coordinates): void
    {
        $this->coordinates = $coordinates;
    }

    /**
     * @return bool
     */
    public function isInterpolate(): bool
    {
        return $this->interpolate;
    }

    /**
     * @param bool $interpolate
     */
    public function setInterpolate(bool $interpolate): void
    {
        $this->interpolate = $interpolate;
    }

    /**
     * @return mixed[]
     */
    public function buildQuery()
    {
        $query['path'] = join('|', array_map(
            function ($coordinate) {
                /** @var Coordinate $coordinate */
                return sprintf(
                    '%s,%s',
                    $coordinate->getLatitude(),
                    $coordinate->getLongitude()
                );
            },
            $this->coordinates
        ));
        $query['interpolate'] = $this->interpolate;

        return $query;
    }
}