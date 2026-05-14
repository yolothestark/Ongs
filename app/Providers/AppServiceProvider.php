<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL; // <-- 1. Importamos la clase URL

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
        // 2. Le decimos a Laravel que si está en el servidor de producción (Render),
        // obligue a que todos los CSS, JS y enlaces usen HTTPS.
        if (env('APP_ENV') === 'production') {
            URL::forceScheme('https');
        }
    }
}