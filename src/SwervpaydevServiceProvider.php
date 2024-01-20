<?php

namespace Swervpaydev\Laravel;

use Swervpaydev\SDK\Swyftpay;
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
     * Boot the publishing functionality for the Swervpaydev service provider.
     *
     * This method is responsible for publishing the configuration file for the Swervpaydev package
     * when running in the console. It publishes the configuration file to the Laravel config directory.
     */
    protected function bootPublishing()
    {
        if ($this->app->runningInConsole()) {
            $config = dirname(__DIR__) . '/config/swervpaydev.php';

            $this->publishes(
                [
                    $config => $this->app->configPath('swervpaydev.php'),
                ],
                'swervpaydev-laravel-config'
            );
        }
    }


    /**
     * Register the Swervpaydev service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            'swervpaydev',
            function ($app) {
                $secretKey = config('swervpaydev.secret_key');
                $businessId = config('swervpaydev.business_id');

                if (!is_string($secretKey) || empty($secretKey) || !is_string($businessId) || empty($businessId)) {
                    throw new SwervpaydevException('The Swervpaydev secret key and business id must be a string.');
                }

                $config['secret_key'] = $secretKey;
                $config['business_id'] = $businessId;

                return new Swyftpay($config);
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
        return ['swervpaydev'];
    }
}
