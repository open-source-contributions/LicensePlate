<?php

namespace PB\LicensePlate\Detector\Germany;

use PB\LicensePlate\Detector\GermanyDetector;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class PlateSh extends AbstractGermanyPlate
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
        '/^SH (?:[0-9]{1,4} [0-9]{1,4}|[0-9]{1,6})[A-Z]?$/',
    ];

    /**
     * @var int[]
     */
    protected static $type = [
        GermanyDetector::PLATE_TYPE_LOCAL_POLICE,
    ];
}
