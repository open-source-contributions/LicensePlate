<?php

namespace PBurggraf\LicensePlate\Detector\Germany;

use PBurggraf\LicensePlate\Detector\GermanyDetector;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class PlateNrw extends AbstractGermanyPlate
{
    /**
     * @var string[]
     */
    protected static $name = [
        'Landesfahrzeug',
    ];

    /**
     * @var string[]
     */
    protected static $regexes = [
        '/^NRW (?:\d{1,4} \d{1,4}|\d{1,6})[A-Z]?$/',
    ];

    /**
     * @var int[]
     */
    protected static $type = [
        GermanyDetector::PLATE_TYPE_LOCAL_POLICE,
    ];
}
