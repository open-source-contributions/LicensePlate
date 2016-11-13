<?php

namespace PB\LicensePlate\Detector\Germany;

use PB\LicensePlate\Detector\GermanyDetector;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class PlateDd extends AbstractGermanyPlate
{
    /**
     * @var string[]
     */
    protected static $name = [
        'Dresden',
        'Polizei Sachsen',
    ];

    /**
     * @var string[]
     */
    protected static $regexes = [
        '^(?:[A-P|R-Z]{1,2} [1-9][0-9]{0,3}|Q [1-9][0-9]{0,2})$',
        '^Q [1-9][0-9]{3}$',
    ];

    /**
     * @var int[]
     */
    protected static $type = [
        GermanyDetector::PLATE_TYPE_DEFAULT,
        GermanyDetector::PLATE_TYPE_LOCAL_POLICE,
    ];
}
