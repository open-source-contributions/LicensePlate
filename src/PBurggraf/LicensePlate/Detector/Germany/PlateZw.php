<?php

namespace PBurggraf\LicensePlate\Detector\Germany;

use PBurggraf\LicensePlate\Detector\GermanyDetector;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class PlateZw extends AbstractGermanyPlate
{
    /**
     * @var string[]
     */
    protected static $name = [
        'Stadt Zweibrücken',
        'Landkreis Südwestpfalz',
    ];

    /**
     * @var string[]
     */
    protected static $regexes = [
        '/^ZW (?:[A-Z]{2} [1,9][0,9]{2,3}|[A-Z] [1,9][0,9]{0,3})$/',
        '/^ZW (?:[A-Z]{2} [1,9][0,9]?)$/',
    ];

    /**
     * @var int[]
     */
    protected static $type = [
        GermanyDetector::PLATE_TYPE_DEFAULT,
        GermanyDetector::PLATE_TYPE_DEFAULT,
    ];
}
