<?php

namespace PB\LicensePlate\Detector\Germany;

use PB\LicensePlate\Detector\GermanyDetector;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class PlateHb extends AbstractGermanyPlate
{
    /**
     * @var string[]
     */
    protected static $name = [
        'Stadt Bremen, Senat und Bürgerschaft',
        'Stadt Bremerhaven',
    ];

    /**
     * @var string[]
     */
    protected static $regexes = [
        '^(?:[A-Z]{2} [1-9][0-9]{0,3}|[A-Z] [1-9][0-9]{0,2})$',
        '^[A-Z] [1-9][0-9]{3}$',
    ];

    /**
     * @var int[]
     */
    protected static $type = [
        GermanyDetector::PLATE_TYPE_DEFAULT,
        GermanyDetector::PLATE_TYPE_DEFAULT,
    ];
}
