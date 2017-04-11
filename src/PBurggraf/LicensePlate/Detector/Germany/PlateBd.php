<?php

namespace PBurggraf\LicensePlate\Detector\Germany;

use PBurggraf\LicensePlate\Detector\GermanyDetector;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class PlateBd extends AbstractGermanyPlate
{
    /**
     * @var string[]
     */
    protected static $name = [
        'Bundesfahrzeug',
    ];

    /**
     * @var string[]
     */
    protected static $regexes = [
        '/^BD (?:[0-9]{1,4} [0-9]{1,4}|[0-9]{1,6})[A-Z]?$/',
    ];

    /**
     * @var int[]
     */
    protected static $type = [
        GermanyDetector::PLATE_TYPE_FEDERAL,
    ];
}
