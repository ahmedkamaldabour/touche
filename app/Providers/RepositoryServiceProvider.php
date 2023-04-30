<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        # EndUser
        $this->app->bind(
            'App\Http\Interfaces\EndUser\HomeInterface',
            'App\Http\Repositories\EndUser\HomeRepository'
        );
        # EndUser


        # Admin

        $this->app->bind(
            'App\Http\Interfaces\Admin\DashboardInterface',
            'App\Http\Repositories\Admin\DashboardRepository'
        );

        $this->app->bind(
            'App\Http\Interfaces\Admin\CategoryInterface',
            'App\Http\Repositories\Admin\CategoryRepository'
        );

        $this->app->bind(
            'App\Http\Interfaces\Admin\ProductInterface',
            'App\Http\Repositories\Admin\ProductRepository'
        );
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
