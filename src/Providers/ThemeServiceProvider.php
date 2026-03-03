<?php

namespace Molitor\Theme\Providers;

use Illuminate\Support\ServiceProvider;
use Molitor\Setting\Services\SettingHandler;
use Molitor\Theme\Services\ThemeSettingForm;
use Molitor\Theme\Services\ThemeRegistry;
use Molitor\Theme\Themes\CorporateTheme;
use Molitor\Theme\Themes\DarkMinimalTheme;
use Molitor\Theme\Themes\DefaultTheme;
use Molitor\Theme\Themes\NatureTheme;
use Molitor\Theme\Themes\PastelDreamTheme;
use Molitor\Theme\Themes\WarmSunsetTheme;

class ThemeServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Publish config file
        $this->publishes([
            __DIR__ . '/../../config/theme.php' => config_path('theme.php'),
        ], 'theme-config');

        $registry = $this->app->make(ThemeRegistry::class);
        $registry->register(DefaultTheme::class);
        $registry->register(DarkMinimalTheme::class);
        $registry->register(NatureTheme::class);
        $registry->register(CorporateTheme::class);
        $registry->register(WarmSunsetTheme::class);
        $registry->register(PastelDreamTheme::class);
    }

    public function register()
    {
        // Merge config file
        $this->mergeConfigFrom(
            __DIR__ . '/../../config/theme.php',
            'theme'
        );

        $this->app->singleton(ThemeRegistry::class);

        $this->app->make(SettingHandler::class)->registerSettingForm(ThemeSettingForm::class);
    }
}
