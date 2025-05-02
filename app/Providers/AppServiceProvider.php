<?php

namespace App\Providers;

use App\Services\CasesService;
use App\Services\CasesServiceInterface;
use Illuminate\Support\Facades\File;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        if (config('app.env') == 'production')
            $this->app->bind(
                'path.public',
                fn() => base_path('htdocs')
            );

        $this->app->bind(CasesServiceInterface::class, CasesService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (config('app.env') == 'production')
            URL::forceScheme('https');

        $path = resource_path('svg');

        if (!File::isDirectory($path))
            File::makeDirectory($path);
    }
}
