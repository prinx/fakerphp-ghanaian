<?php

namespace Faker\Ghanaian;

use Faker\Extension\Extension;
use Faker\Extension\Helper;

/**
 * Ghanaian regions.
 */
class Region implements Extension
{
    private $regions = [
        'Ashanti',
        'Brong Ahafo',
        'Bono East',
        'Ahafo',
        'Central',
        'Eastern',
        'Greater Accra',
        'Northern',
        'Savannah',
        'North East',
        'Upper East',
        'Upper West',
        'Volta',
        'Oti',
        'Western',
        'Western North'
    ];

    public function region(): string
    {
        return Helper::randomElement($this->regions);
    }
}
