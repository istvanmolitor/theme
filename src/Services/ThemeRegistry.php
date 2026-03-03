<?php

namespace Molitor\Theme\Services;

use Exception;

class ThemeRegistry
{
    /** @var array<string, Theme> */
    protected array $themes = [];

    public function getThemeRegistry(): ThemeRegistry
    {
        return app(ThemeRegistry::class);
    }

    /**
     * @param string|Theme $themeClass
     * @return void
     * @throws Exception
     */
    public function register(string|Theme $themeClass): void
    {
        $theme = is_string($themeClass) ? app($themeClass) : $themeClass;

        if (!$theme instanceof Theme) {
             throw new Exception("A regisztrált osztálynak a BaseTheme-ből kell származnia.");
        }

        $this->themes[$theme->getSlug()] = $theme;
    }

    /**
     * @return array<string, Theme>
     */
    public function getThemes(): array
    {
        return $this->themes;
    }

    public function getTheme(string $slug): ?Theme
    {
        return $this->themes[$slug] ?? null;
    }

    public function toArray(): array
    {
        $themes = [];
        /** @var Theme $theme */
        foreach ($this->getThemes() as $theme) {
            $themes[$theme->getSlug()] = $theme->toArray();
        }
        return $themes;
    }
}
