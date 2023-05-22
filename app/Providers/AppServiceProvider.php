<?php

namespace App\Providers;

use App\Http\views\composers\CategoryAndProductsComposer;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrap();


//        View::composer(
//            [
//                'EndUser.index',
//                'EndUser.pages.menu',
//                'EndUser.pages.gallery',
//            ],
//            CategoryAndProductsComposer::class);
        View::composer(
            'EndUser.partials.composer.category-product.*',
            CategoryAndProductsComposer::class);
    }
}
