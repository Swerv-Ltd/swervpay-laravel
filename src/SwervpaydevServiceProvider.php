<?php

namespace Swervpaydev\Laravel;

use Swervpaydev\SDK\Swervpay;
use Illuminate\Support\ServiceProvider;
use Swervpaydev\Laravel\Exceptions\SwervpaydevException;


/**
 * Class SwervpaydevServiceProvider
 * 
 * @package App\Providers
 */
class SwervpaydevServiceProvider extends ServiceProvider
{

    /**
     * Boot the service provider.
     *
     * This method is called when the service provider is being booted.
     * It calls the `bootPublishing` method to perform any necessary bootstrapping tasks.
     *
     * @return void
     */
    public function boot()
    {
        $this->bootPublishing();
    }


    /**
     * Boot the publishing functionality for the Swervpay service provider.
     *
     * This method is responsible for publishing the configuration file for the Swervpay package
     * when running in the console. It publishes the configuration file to the Laravel config directory.
     */
    protected function bootPublishing()
    {
        if ($this->app->runningInConsole()) {
            $config = dirname(__DIR__) . '/config/swervpay.php';

            $this->publishes(
                [
                    $config => $this->app->configPath('swervpay.php'),
                ],
                'swervpay-laravel-config'
            );
        }
    }


    /**
     * Register the Swervpay service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            'swervpay',
            function ($app) {
                $secretKey = config('swervpay.secret_key');
                $businessId = config('swervpay.business_id');

                if (!is_string($secretKey) || empty($secretKey) || !is_string($businessId) || empty($businessId)) {
                    throw new SwervpaydevException('The Swervpay secret key and business id must be a string.');
                }

                $config['secret_key'] = $secretKey;
                $config['business_id'] = $businessId;

                return new Swervpay($config);
            }
        );
    }


    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['swervpay'];
    }
}
