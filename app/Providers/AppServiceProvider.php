<?php

namespace App\Providers;

use App\Services\ExternalApiService;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
        $this->app->bind(ExternalApiService::class, function ($app) {
            $apiBaseUrl = 'https://quizapi.io';

            return new ExternalApiService($apiBaseUrl);
        });

        config([
            'services.external_api.api_key' => env('QUIZ_API_KEY'),
        ]);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        Paginator::useBootstrapFour();
    }
}
