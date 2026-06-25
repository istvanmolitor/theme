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

    public function getViewPackage(string $view): ?string
    {
        if (str_contains($view, '::')) {
            return explode('::', $view, 2)[0];
        }

        return null;
    }

    public function viewExists(string $view): bool
    {
        return view()->exists($view);
    }

    public function getOpportunities(string $view): array
    {
        $activeTheme = $this->getActiveTheme();
        
        $viewPackage = $this->getViewPackage($view);
        $themePackage = $activeTheme->getPackage();
        $theme = $activeTheme->getSlug();
        $name = $this->getView($view);

        $opportunities = [];

        if($viewPackage) {
            $opportunities = [
                "{$themePackage}::themes.{$theme}.packages.{$viewPackage}.{$name}",
                "{$viewPackage}::{$name}",
            ];
        }

        $opportunities = array_merge($opportunities, [
            "{$themePackage}::themes.{$theme}.{$name}",
            "{$themePackage}::{$name}",
            "theme::{$name}",
        ]);

        return array_unique($opportunities);
    }

    public function getRealView(string $view): ?string
    {
        foreach($this->getOpportunities($view) as $opportunity)
        {
            if($this->viewExists($opportunity)) {
                return $opportunity;
            }
        }

        return null;
    }
}
