<?php


/**
 * Configuration file for Swervpay.
 *
 * This file contains the configuration options for the Swervpay integration.
 * The 'secret_key' and 'business_id' options are retrieved from the environment variables.
 */
return [

    /**
     * Configuration option for the secret key used in Swervpay.
     * The value is retrieved from the environment variable SWERVPAY_SECRET_KEY.
     *
     * @var string
     */
    'secret_key' => env('SWERVPAY_SECRET_KEY'),

    /**
     * The business ID for Swervpay.
     * 
     * This value is retrieved from the environment variable SWERVPAY_BUSINESS_ID.
     */
    'business_id' => env('SWERVPAY_BUSINESS_ID'),
];
