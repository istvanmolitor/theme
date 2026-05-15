<?php

namespace Molitor\Theme\Services;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\View as ViewFacade;

class ThemeHelper
{
    public function __construct(
        protected ThemeRegistry $themeRegistry
    )
    {
    }

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
        $theme = $this->getActiveTheme()->getSlug();
        $package = $this->getPackage($view);
        $name = $this->getView($view);

        $views = [
            "{$package}::themes.{$theme}.{$name}",
            "{$package}::{$name}"
        ];

        foreach ($views as $candidate) {
            if ($this->viewExists($candidate)) {
                return $candidate;
            }
        }

        throw new \Exception("Package: {$package}. View not found: {$view}. Theme: {$theme}.");
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
}
