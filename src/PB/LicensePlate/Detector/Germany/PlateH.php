<?php

namespace PB\LicensePlate\Detector\Germany;

use PB\LicensePlate\Detector\GermanyDetector;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class PlateH extends AbstractGermanyPlate
{
    /**
     * @var string[]
     */
    protected static $name = [
        'Stadt Hannover',
        'Region Hannover',
        'Polizeidirektion Hannover',
        'Zentrale Polizeidirektion Niedersachsen',
    ];

    /**
     * @var string[]
     */
    protected static $regexes = [
        '/^H (?:(?:[AC-EH-Z][A-CE-Z]|[A-OQ-Y]D) [1-9][0-9]{2}|[BFG][A-Z] [1-9][0-9]{2,3})$/',
        '/^H (?:[AC-EH-Z][A-CE-Z] (?:[1-9][0-9]{0,1}|[1-9][0-9]{3})|[BFG][A-Z] [1-9][0-9]{0,1}|[ZP]D [1-9][0-9]{0,1}|[A-Z] [1-9][0-9]{0,3})$/',
        '/^H PD [1-9][0-9]{2,3}$/',
        '/^H ZD [1-9][0-9]{2,3}$/',
    ];

    /**
     * @var int[]
     */
    protected static $type = [
        GermanyDetector::PLATE_TYPE_DEFAULT,
        GermanyDetector::PLATE_TYPE_DEFAULT,
        GermanyDetector::PLATE_TYPE_LOCAL_POLICE,
        GermanyDetector::PLATE_TYPE_LOCAL_POLICE,
    ];
}
