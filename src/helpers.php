<?php

use Illuminate\Contracts\Foundation\Application;

// Check if the function "swervpay" already exists
if (!function_exists("swervpay")) {

    /**
     * swervpay function
     *
     * This function is used to get an instance of the 'swervpay' service container binding.
     * It uses the Laravel's service container to make an instance of 'swervpay'.
     * If the 'swervpay' service is not bound in the container, it will throw an exception.
     *
     * @return Application|mixed An instance of the 'swervpay' service container binding.
     */
    function swervpay()
    {
        // Use Laravel's service container to make an instance of 'swervpay'
        return app()->make('swervpay');
    }
}