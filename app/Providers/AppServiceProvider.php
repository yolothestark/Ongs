<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL; // <-- 1. IMPORTANTE AÑADIR ESTO

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
        // 2. FORZAR HTTPS EN PRODUCCIÓN
        if (env('APP_ENV') !== 'local') {
            URL::forceScheme('https');
        }
    }
}