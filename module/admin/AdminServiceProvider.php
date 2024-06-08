<?php

namespace Module\Admin;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Module\Admin\Middleware\AuthMiddleware;
use Module\Admin\Middleware\GueshAuthMiddleware;

class AdminServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        app('router')->aliasMiddleware('adminauth', AuthMiddleware::class);
        app('router')->aliasMiddleware('adminguesh', GueshAuthMiddleware::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views/','adminview');


        if (config('app.multi_domain') == true){

            Route::domain(config('app.admin_url'))
                ->middleware('web')
                ->as('admin.')
                ->namespace('Module\\Admin\\Controllers')
                ->group(__DIR__.'/route.php');
        }else{
            Route::prefix('admin')
                ->middleware('web')
                ->as('admin.')
                ->namespace('Module\\Admin\\Controllers')
                ->group(__DIR__.'/route.php');
        }
    }
}
