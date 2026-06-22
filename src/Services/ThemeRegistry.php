<?php

namespace Molitor\Theme\Services;

use Exception;
use Molitor\Setting\Services\SettingHandler;

class ThemeRegistry
{
    protected ?Theme $activeTheme = null;

    /** @var array<string, Theme> */
    protected array $themes = [];

    public function getThemeRegistry(): ThemeRegistry
    {
        return app(ThemeRegistry::class);
    }

    /**
     * @throws Exception
     */
    public function register(string|Theme $themeClass): void
    {
        $theme = is_string($themeClass) ? app($themeClass) : $themeClass;

        if (! $theme instanceof Theme) {
            throw new Exception('A regisztrált osztálynak a BaseTheme-ből kell származnia.');
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

    public function getActiveTheme(): ?Theme
    {
        if ($this->activeTheme === null) {
            $slug = app(SettingHandler::class)->get('theme', 'theme');
            if ($slug) {
                $this->activeTheme = $this->getTheme($slug);
            }
            else {
                $this->activeTheme = array_first($this->themes);
            }
        }

        return $this->activeTheme;
    }

    public function getDefault(): ?string
    {
        return array_key_first($this->themes);
    }

    public function getOptions() : array
    {
        $options = [];
        foreach ($this->getThemes() as $theme) {
            $options[] = [
                'value' => $theme->getSlug(),
                'label' => $theme->getName()
            ];
        }
        return $options;
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
