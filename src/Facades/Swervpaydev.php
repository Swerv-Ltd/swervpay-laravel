<?php

namespace Swervpaydev\Laravel\Facades;

use Illuminate\Support\Facades\Facade;


class Swervpaydev extends Facade
{

    /**
     * Get the facade accessor for the Swervpaydev facade.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'swervpaydev';
    }
}
