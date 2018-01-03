<?php

namespace Ivory\GoogleMap\Service\Road\Snap\Request;

use Ivory\GoogleMap\Service\Road\Base\Location;

/**
 * @author fedotovaleksandr <mr.fedotovaleksandr@gmail.com>
 */
class SnapToRoadRequest implements SnapToRoadRequestInterface
{
    /** @var array|Location[] */
    private $locations;

    /** @var boolean */
    private $interpolate;

    /**
     * SnapToRoadRequest constructor.
     *
     * @param array|Location[] $locations
     * @param bool $interpolate
     */
    public function __construct($locations, $interpolate = false)
    {
        $this->locations = $locations;
        $this->interpolate = $interpolate;
    }

    /**
     * @return array|Location[]
     */
    public function getLocations()
    {
        return $this->locations;
    }

    /**
     * @param array|Location[] $locations
     */
    public function setLocations($locations): void
    {
        $this->locations = $locations;
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
            function ($location) {
                /** @var Location $location */
                return sprintf(
                    '%s,%s',
                    $location->getLatitude(),
                    $location->getLongitude()
                );
            },
            $this->locations
        ));
        $query['interpolate'] = $this->interpolate;

        return $query;
    }
}