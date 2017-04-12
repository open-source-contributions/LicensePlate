<?php

namespace PBurggraf\LicensePlate\Detector\Germany;

use PBurggraf\LicensePlate\Detector\GermanyDetector;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class PlateAb extends AbstractGermanyPlate
{
    /**
     * @var string[]
     */
    protected static $name = [
        'Landkreis Aschaffenburg',
        'Stadt Aschaffenburg',
    ];

    /**
     * @var string[]
     */
    protected static $regexes = [
        '/^AB [A-Z]{2} [1-9][0-9]{2,3}$/',
        '/^AB (?:[A-Z]{2} [1-9][0-9]?|[A-Z] [1-9][0-9]{0,3})$/',
    ];

    /**
     * @var int[]
     */
    protected static $type = [
        GermanyDetector::PLATE_TYPE_DEFAULT,
        GermanyDetector::PLATE_TYPE_DEFAULT,
    ];
}
