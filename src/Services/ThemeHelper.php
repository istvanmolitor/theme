<?php

namespace Molitor\Theme\Services;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\View as ViewFacade;

class ThemeHelper
{
    public function __construct(
        protected ThemeRegistry $themeRegistry
    ) {}

    public function getActiveTheme(): ?Theme
    {
        return $this->themeRegistry->getActiveTheme();
    }

    public function getView(string $view): string
    {
        if (str_contains($view, '::')) {
            return explode('::', $view, 2)[1];
        }

        return $view;
    }

    private function getPackage(string $view)
    {
        if (str_contains($view, '::')) {
            return explode('::', $view, 2)[0];
        }

        return 'theme';
    }

    public function getRealView(string $view): string
    {
        $activeTheme = $this->getActiveTheme();

        $package = $activeTheme->getPackage();
        $theme = $activeTheme->getSlug();
        $name = $this->getView($view);

        $view = "{$package}::{$name}";
        if($this->viewExists($view)) {
            return $view;
        } 

        return "{$package}::themes.{$theme}.{$name}";
    }

    protected function viewExists(string $view): bool
    {
        return view()->exists($view);
    }

    public function view(string $view, array $data = []): View
    {
        $view = $this->getRealView($view);

        return ViewFacade::make($view, $data);
    }

    public function renderView(string $view, array $data = []): string
    {
        return $view;
        return $this->view($view, $data)->render();
    }
}
