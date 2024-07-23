<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use BezhanSalleh\FilamentLanguageSwitch\LanguageSwitch;
use BezhanSalleh\FilamentLanguageSwitch\Enums\Placement;
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
        //
        LanguageSwitch::configureUsing(function (LanguageSwitch $switch) {
            $switch
                ->locales(['ar','en']) // also accepts a closure
                ->visible(outsidePanels: true)
                ->outsidePanelRoutes([
                    'profile',
                    'home',
                    '/',
                    // Additional custom routes where the switcher should be visible outside panels
                ])
                ->flags([
                    'ar' => asset('flags/saudi-arabia.svg'),
                    'en' => asset('flags/usa.svg'),
                ])
                ->flagsOnly()
                ->circular()
                ->outsidePanelPlacement(Placement::TopCenter);
        });
    }
}
