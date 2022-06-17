<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View ;

class AppServiceProvider extends ServiceProvider
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
        Paginator::useBootstrap();
        View::share('popular_posts' ,\App\Models\Post::orderBy('views' , 'desc')->where('idcat' ,1)->limit(1)->get());
        View::share('popular_plans' ,\App\Models\Post::orderBy('views' , 'desc')->where('idcat' ,2)->limit(1)->get());
        View::share('popular_events' ,\App\Models\Post::orderBy('views' , 'desc')->where('idcat' ,3)->limit(1)->get());

    }
}
