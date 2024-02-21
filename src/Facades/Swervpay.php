<?php

namespace Swervpaydev\Laravel\Facades;

use Illuminate\Support\Facades\Facade;


class Swervpay extends Facade
{

    /**
     * Get the facade accessor for the Swervpay facade.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'swervpay';
    }
}
