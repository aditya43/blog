<?php

namespace Adi\Providers;

use Adi\Billing\Stripe;
use Illuminate\Support\ServiceProvider;

class AdiStripe extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Stripe::class, function ()
        {
            return new Stripe(config('services.stripe.secret'));
        });
    }
}
