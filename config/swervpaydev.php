<?php


/**
 * Configuration file for Swervpaydev.
 *
 * This file contains the configuration options for the Swervpaydev integration.
 * The 'secret_key' and 'business_id' options are retrieved from the environment variables.
 */
return [

    /**
     * Configuration option for the secret key used in Swervpaydev.
     * The value is retrieved from the environment variable SWERVPAYDEV_SECRET_KEY.
     *
     * @var string
     */
    'secret_key' => env('SWERVPAYDEV_SECRET_KEY'),

    /**
     * The business ID for SwervPayDev.
     * 
     * This value is retrieved from the environment variable SWERVPAYDEV_BUSINESS_ID.
     */
    'business_id' => env('SWERVPAYDEV_BUSINESS_ID'),
];
