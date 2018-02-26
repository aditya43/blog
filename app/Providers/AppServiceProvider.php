<?php

namespace Adi\Providers;

use Adi\Billing\Stripe;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('partials._sidebar', function ($view)
        {
            $archives = \Adi\Post::archives();
            $tags     = \Adi\Tag::has('posts')->pluck('name');

            $view->with(compact('archives', 'tags'));
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
