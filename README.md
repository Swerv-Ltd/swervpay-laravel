<div style="display: flex; justify-content: center; align-items: center">
  <a href="https://swervpay.co" target="_blank">
    <picture>
        <source media="(prefers-color-scheme: dark)" srcset="https://avatars.githubusercontent.com/u/108650375?s=200&v=4">
        <source media="(prefers-color-scheme: light)" srcset="https://avatars.githubusercontent.com/u/108650375?s=200&v=4">
        <img src="https://avatars.githubusercontent.com/u/108650375?s=200&v=4" width="60" alt="Logo"/>
    </picture>
  </a>
  <a href="https://laravel.com" target="_blank">
    <picture style="padding-left: 30px">
        <source media="(prefers-color-scheme: dark)" srcset="https://user-images.githubusercontent.com/1045274/200928533-47539867-07ff-406e-aa8b-25c594652dc8.png" height=60>
        <source media="(prefers-color-scheme: light)" srcset="https://user-images.githubusercontent.com/1045274/200928533-47539867-07ff-406e-aa8b-25c594652dc8.png" height=60>
        <img alt="Laravel" src="https://user-images.githubusercontent.com/1045274/200928533-47539867-07ff-406e-aa8b-25c594652dc8.png"  height=60>
    </picture>
  </a>
</div>

<h1 align="center">Laravel Client for Swyftpay</h1>

<p align="center">
    <a href="https://packagist.org/packages/swervpaydev/laravel"><img src="http://poser.pugx.org/swervpaydev/laravel/v" alt="Latest Stable Version"></a>
    <a href="https://packagist.org/packages/swervpaydev/laravel"><img src="http://poser.pugx.org/swervpaydev/laravel/v/unstable" alt="Latest Unstable Version"></a>
    <a href="https://packagist.org/packages/swervpaydev/laravel"><img src="http://poser.pugx.org/swervpaydev/laravel/downloads" alt="Total Downloads"></a>
    <a href="https://packagist.org/packages/swervpaydev/laravel"><img src="http://poser.pugx.org/swervpaydev/laravel/license" alt="License"></a>

</p>

<p align="center">
    <br />
    <a href="https://docs.swervpay.co" rel="dofollow"><strong>Explore the docs »</strong></a>
    <br />
 </p>
  
<p align="center">  
    <a href="https://twitter.com/swyftpay_io">X (Twitter)</a>
    ·
    <a href="https://www.linkedin.com/company/swervltd">Linkedin</a>
    ·
    <a href="https://docs.swervpay.co/changelog">Changelog</a>
</p>

## Installation

To get the latest version of Swervpaydev, simply require it

```bash
$ composer require swervpaydev/laravel
```

Or add the following line to the require block of your `composer.json` file.

```
"swervpaydev/laravel": "*"
```

## Configuration

You can publish the configuration file using this command:

```bash
$ php artisan vendor:publish --tag="swervpaydev-laravel-config"
```

A configuration-file named `swervpaydev.php` with some sensible defaults will be placed in your `config` directory:

```php
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
```
