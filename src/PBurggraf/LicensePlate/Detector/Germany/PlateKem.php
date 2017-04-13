<?php

namespace PBurggraf\LicensePlate\Detector\Germany;

use PBurggraf\LicensePlate\Detector\GermanyDetector;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class PlateKem extends AbstractGermanyPlate
{
    /**
     * @var string[]
     */
    protected static $name = [
        'Landkreis Bayreuth',
        'Landkreis Tirschenreuth',
    ];

    /**
     * @var string[]
     */
    protected static $regexes = [
        '/^KEM [A-Z]T [1-9]\d?$/',
        '/^KEM (?:[A-Z]T [1-9]\d{2,3}|[A-Z][A-SU-Z]? [1-9]\d{0,3})$/',
    ];

    /**
     * @var int[]
     */
    protected static $type = [
        GermanyDetector::PLATE_TYPE_DEFAULT,
        GermanyDetector::PLATE_TYPE_DEFAULT,
    ];
}
