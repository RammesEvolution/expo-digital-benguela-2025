<?php

namespace App\Providers;

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
        // Verifica se a APP_ENV é 'production' E se a APP_URL está definida
        // com HTTPS. Se for verdade, força o esquema HTTPS para todos os URLs gerados.
        if (config('app.env') === 'production' && config('app.url')) {
            \URL::forceScheme('https');
        }
    }
}
 