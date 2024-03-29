<?php

namespace App\Providers;

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
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Services\MovieService',
            'App\Services\MovieServiceImpl'
        );

        $this->app->bind(
            'App\Services\GenreService',
            'App\Services\GenreServiceImpl'
        );

        $this->app->bind(
            'App\Services\CommentService',
            'App\Services\CommentServiceImpl'
        );

        $this->app->bind(
            'App\Services\UserService',
            'App\Services\UserServiceImpl'
        );
    }
}
