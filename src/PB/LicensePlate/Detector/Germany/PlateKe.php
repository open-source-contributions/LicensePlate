<?php

namespace PB\LicensePlate\Detector\Germany;

use PB\LicensePlate\Detector\GermanyDetector;

/**
 * @author Philip Burggraf <philip@pburggraf.de>
 */
class PlateKe extends AbstractGermanyPlate
{
    /**
     * @var string[]
     */
    protected static $name = [
        'Stadt Kempten (Allgäu)',
        'Polizeipräsidium Schwaben Süd/West',
    ];

    /**
     * @var string[]
     */
    protected static $regexes = [
        '^(?:(?:[A-OQ-Z]{2}|[A-Z]) [1-9][0-9]{0,3}|PP [1-9](?:[0-9]{0,1}|[0-9]{3}))$',
        '^PP [1-9][0-9]{2}$',
    ];

    /**
     * @var int[]
     */
    protected static $type = [
        GermanyDetector::PLATE_TYPE_DEFAULT,
        GermanyDetector::PLATE_TYPE_LOCAL_POLICE,
    ];
}
