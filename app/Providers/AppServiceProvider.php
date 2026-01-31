<?php

namespace App\Providers;

use App\Services\ThemeService;
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
        View::composer(['landing.layouts.app','landing.home.index'], function ($view) {

            $themeKey = session('theme');

            if (!$themeKey) {
                $themeKey = app(ThemeService::class)->getTheme();
                session(['theme' => $themeKey]);
            }

            $view->with('theme', config("theme." . $themeKey));
        });
    }
}
