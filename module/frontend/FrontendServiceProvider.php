<?php

namespace Module\Frontend;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Module\Frontend\Composer\ProfileComposer;
use Module\Frontend\Middleware\AuthMiddleware;
use Module\Frontend\Middleware\GueshAuthMiddleware;

class FrontendServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        app('router')->aliasMiddleware('frontendauth', AuthMiddleware::class);
        app('router')->aliasMiddleware('frontendguesh', GueshAuthMiddleware::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('frontendview::particle.footer', ProfileComposer::class);
        View::composer('frontendview::contact-us.index', ProfileComposer::class);

        $this->loadViewsFrom(__DIR__.'/views/','frontendview');

        if (config('app.multi_domain') == true){

            Route::domain(config('app.url'))
                ->middleware('web')
                ->as('frontend.')
                ->namespace('Module\\Frontend\\Controllers')
                ->group(__DIR__.'/route.php');
        }else{
            Route::middleware('web')
                ->as('frontend.')
                ->namespace('Module\\Frontend\\Controllers')
                ->group(__DIR__.'/route.php');
        }
    }
}
