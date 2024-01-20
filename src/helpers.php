<?php

use Illuminate\Contracts\Foundation\Application;

if (!function_exists("swervpaydev")) {


    /**
     * Returns an instance of the 'swervpaydev' service container binding.
     *
     * @return Application|mixed
     */
    function novu()
    {
        return app()->make('swervpaydev');
    }
}
