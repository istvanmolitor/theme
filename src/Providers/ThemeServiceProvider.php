<?php

namespace Molitor\Theme\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Molitor\Setting\Services\SettingHandler;
use Molitor\Theme\Services\ThemeHelper;
use Molitor\Theme\Services\ThemeRegistry;
use Molitor\Theme\Services\ThemeSettingForm;
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
        $registry = $this->app->make(ThemeRegistry::class);
        $registry->register(DefaultTheme::class);
        $registry->register(DarkMinimalTheme::class);
        $registry->register(NatureTheme::class);
        $registry->register(CorporateTheme::class);
        $registry->register(WarmSunsetTheme::class);
        $registry->register(PastelDreamTheme::class);

        $this->loadViewsFrom(__DIR__.'/../../resources/views/themes', 'theme');

        Blade::directive('themeInclude', function ($expression) {
            return "<?php echo app(\Molitor\Theme\Services\ThemeHelper::class)->view({$expression})->render(); ?>";
        });
    }

    public function register()
    {
        $this->app->singleton(ThemeRegistry::class);

        $this->app->make(SettingHandler::class)->registerSettingForm(ThemeSettingForm::class);
    }
}
