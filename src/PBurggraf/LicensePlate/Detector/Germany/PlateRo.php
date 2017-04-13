<?php

namespace PBurggraf\LicensePlate\Detector\Germany;

use PBurggraf\LicensePlate\Detector\GermanyDetector;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class PlateRo extends AbstractGermanyPlate
{
    /**
     * @var string[]
     */
    protected static $name = [
        'Landkreis Rosenheim',
        'Stadt Rosenheim',
        'Polizeipräsidium Oberbayern Süd',
    ];

    /**
     * @var string[]
     */
    protected static $regexes = [
        '/^RO [A-Z]{2} [1-9]\d{2,3}$/',
        '/^RO (?:[A-Z]{2} [1-9]\d?|[A-OQ-Z] [1-9]\d{0,3}|P (?:[1-9]\d?|[1-9]\d{3}))$/',
        '/^RO P [1-9]\d{2}$/',
    ];

    /**
     * @var int[]
     */
    protected static $type = [
        GermanyDetector::PLATE_TYPE_DEFAULT,
        GermanyDetector::PLATE_TYPE_DEFAULT,
        GermanyDetector::PLATE_TYPE_LOCAL_POLICE,
    ];
}
