<?php

declare(strict_types=1);

namespace Molitor\Theme\Services;

class LayoutService
{
    protected array $configs = [
        'default' => [
            'name' => 'Default Layout',
            'template' => 'theme::layouts.default',
        ],
        'full-width' => [
            'name' => 'Full Width',
            'template' => 'theme::layouts.full-width',
        ],
        'sidebar-left' => [
            'name' => 'Sidebar Left',
            'template' => 'theme::layouts.sidebar-left',
        ],
        'sidebar-right' => [
            'name' => 'Sidebar Right',
            'template' => 'theme::layouts.sidebar-right',
        ],
    ];

    public function __construct(
        private ThemeHelper $themeHelper
    )
    {
    }

    public function getLayoutNames(): array
    {
        return array_keys($this->configs);
    }

    public function isValidLayout(string $layoutName): bool
    {
        return array_key_exists($layoutName, $this->configs);
    }

    /**
     * Get the template for a specific layout.
     */
    public function getLayoutTemplate(string $layoutName = null): string
    {
        if ($layoutName === null || ! $this->isValidLayout($layoutName)) {
            $layoutName = 'container';
        }

        return $this->themeHelper->getRealView('layouts.' . $layoutName);
    }
}
