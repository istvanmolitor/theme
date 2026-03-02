<?php

namespace Molitor\Theme\Providers;

use Illuminate\Support\ServiceProvider;
use Molitor\Setting\Services\SettingHandlerService;
use Molitor\Theme\Services\ThemeSettingForm;

class ThemeServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Publish config file
        $this->publishes([
            __DIR__ . '/../../config/theme.php' => config_path('theme.php'),
        ], 'theme-config');

        $this->app->make(SettingHandlerService::class)->register(ThemeSettingForm::class);
    }

    public function register()
    {
        // Merge config file
        $this->mergeConfigFrom(
            __DIR__ . '/../../config/theme.php',
            'theme'
        );
    }
}
