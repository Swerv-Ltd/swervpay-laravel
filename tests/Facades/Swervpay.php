<?php

use Illuminate\Config\Repository;
use Swervpaydev\Laravel\Facades\Swervpay;
use Swervpaydev\Laravel\SwervpaydevServiceProvider;
use Swervpaydev\SDK\Resources\Customer;

it('should return an instance of Swervpay/Customer', function () {
    $app = app();

    $app->bind('config', fn () => new Repository([
        'swervpay' => [
            'business_id' => 'test',
            'secret_key' => 'test',
        ],
    ]));

    (new SwervpaydevServiceProvider($app))->register();

    Swervpay::setFacadeApplication($app);

    $customer = Swervpay::customer();

    expect($customer)->toBeInstanceOf(Customer::class);
});