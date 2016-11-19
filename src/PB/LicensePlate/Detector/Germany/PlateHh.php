<?php

namespace PB\LicensePlate\Detector\Germany;

use PB\LicensePlate\Detector\GermanyDetector;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class PlateHh extends AbstractGermanyPlate
{
    /**
     * @var string[]
     */
    protected static $name = [
        'Freie und Hansestadt Hamburg, Senat und Bürgerschaft',
        'Länderfahrzeug'
    ];

    /**
     * @var string[]
     */
    protected static $regexes = [
        '/^HH [A-Z]{1,2} [1-9][0-9]{0,3}[EH]?$/',
        '/^HH (?:[0-9]{1,4} [0-9]{1,4}|[0-9]{1,6})[A-Z]?$/',
    ];

    /**
     * @var int[]
     */
    protected static $type = [
        GermanyDetector::PLATE_TYPE_DEFAULT,
        GermanyDetector::PLATE_TYPE_LOCAL_POLICE,
    ];
}
