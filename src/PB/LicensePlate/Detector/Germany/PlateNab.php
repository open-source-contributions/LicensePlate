<?php

namespace PB\LicensePlate\Detector\Germany;

use PB\LicensePlate\Detector\GermanyDetector;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class PlateNab extends AbstractGermanyPlate
{
    /**
     * @var string[]
     */
    protected static $name = [
        'Landkreis Amberg-Sulzbach',
        'Landkreis Schwandorf',
    ];

    /**
     * @var string[]
     */
    protected static $regexes = [
        '/^NAB [BFG] [1-9][0-9]{0,2}$/',
        '/^NAB (?:[A-Z]{2} [1-9][0-9]{0,3}|[A-Z] [1-9][0-9]{3}|[AC-EH-Z] [1-9][0-9]{0,2})$/',
    ];

    /**
     * @var int[]
     */
    protected static $type = [
        GermanyDetector::PLATE_TYPE_DEFAULT,
        GermanyDetector::PLATE_TYPE_DEFAULT,
    ];
}
