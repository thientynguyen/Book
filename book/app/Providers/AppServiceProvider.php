<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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
        $this->app->bind(
            \App\Repositories\Contracts\TestInterface::class,
            \App\Repositories\Eloquent\TestRepository::class
        );

        $this->app->bind(
            \App\Repositories\Contracts\CategoryInterface::class,
            \App\Repositories\Eloquent\CategoryRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
