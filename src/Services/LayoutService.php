<?php

declare(strict_types=1);

namespace Molitor\Theme\Services;

class LayoutService
{
    protected array $configs = [
        'container' => [
            'name' => 'Konténer',
            'template' => 'theme::layouts.container',
        ],
        'centered' => [
            'name' => 'Középen',
            'template' => 'theme::layouts.centered',
        ],
        'full-width' => [
            'name' => 'Teljes szélesség',
            'template' => 'theme::layouts.full-width',
        ],
        'left-sidebar' => [
            'name' => 'Bal oldalsáv',
            'template' => 'theme::layouts.left-sidebar',
        ],
        'right-sidebar' => [
            'name' => 'Jobb oldalsáv',
            'template' => 'theme::layouts.right-sidebar',
        ],
    ];

    public function __construct(
        private ThemeHelper $themeHelper
    ) {}

    public function getDefault(): string
    {
        return array_key_first($this->configs);
    }

    public function getLayoutNames(): array
    {
        return array_keys($this->configs);
    }

    public function getLayouts(): array
    {
        return $this->configs;
    }

    public function isValidLayout(string $layoutName): bool
    {
        return array_key_exists($layoutName, $this->configs);
    }

    /**
     * Get the template for a specific layout.
     */
    public function getLayoutTemplate(?string $layoutName = null): string
    {
        if ($layoutName === null || ! $this->isValidLayout($layoutName)) {
            $layoutName = 'container';
        }

        return $this->themeHelper->getRealView('theme::layouts.'.$layoutName);
    }
}
