<?php

namespace PB\LicensePlate\Detector\Germany;

use PB\LicensePlate\Detector\GermanyDetector;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class PlateMüb extends AbstractGermanyPlate
{
    /**
     * @var string[]
     */
    protected static $name = [
        'Landkreis Bayreuth',
        'Landkreis Hof',
    ];

    /**
     * @var string[]
     */
    protected static $regexes = [
        '/^MÜB (?:[A-M] [1-9][0-9]{2}|[N-Z] [1-9][0-9]{0,1})$/',
        '/^MÜB (?:[N-Z] [1-9][0-9]{2,3}|[A-N] (?:[1-9][0-9]{3}|[1-9][0-9]{0,1})|[A-Z]{2} [1-9][0-9]{0,3})$/',
    ];

    /**
     * @var int[]
     */
    protected static $type = [
        GermanyDetector::PLATE_TYPE_DEFAULT,
        GermanyDetector::PLATE_TYPE_DEFAULT,
    ];
}
