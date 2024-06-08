<?php

namespace Module\Developer;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Module\Frontend\Middleware\AuthMiddleware;
use Module\Frontend\Middleware\GueshAuthMiddleware;

class DeveloperServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views/','developerview');

        Route::middleware('web')
            ->as('developerthemenepal.')
            ->namespace('Module\\Developer\\Controllers')
            ->group(__DIR__.'/route.php');

        /*Route::domain('pasapi.com')
            ->namespace('Module\\Frontend\\Controllers')
            ->group(__DIR__.'/route.php');*/
    }
}
