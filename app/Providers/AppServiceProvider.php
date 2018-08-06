<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Schema;
use Illuminate\Contracts\Routing\UrlGenerator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(UrlGenerator $url)
    {
        Schema::defaultStringLength(191);
        if(env('REDIRECT_HTTPS')) {
            $url->formatScheme('https');
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Repositories\Contracts\ArticleRepositoryInterface',
            'App\Repositories\Eloquent\ArticleRepository'
        );

        $this->app->bind(
            'App\Repositories\Contracts\UserRepositoryInterface',
            'App\Repositories\Eloquent\UserRepository'
        );

        if(env('REDIRECT_HTTPS')) {
            $this->app['request']->server->set('HTTPS', true);
        }
    }
}
