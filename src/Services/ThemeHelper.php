<?php

namespace Molitor\Theme\Services;

class ThemeHelper
{
    public function __construct(
        protected ThemeRegistry $themeRegistry
    ) {}

    public function viewExists(string $view): bool
    {
        return view()->exists($view);
    }

    public function getOpportunities(string $view): array
    {
        if (str_contains($view, '::')) {
            $parts = explode('::', $view, 2);
            $viewPackage = $parts[0]; 
            $name = $parts[1];
        }
        else {
            $viewPackage = null; 
            $name = $view;
        }

        $activeTheme = $this->themeRegistry->getActiveTheme();
        $themePackage = $activeTheme->getPackage();
        $theme = $activeTheme->getSlug();

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

    public function template(string $view, array $data = [], array $mergeData = [])
    {
        return view($this->getRealView($view), $data, $mergeData);
    }
}
