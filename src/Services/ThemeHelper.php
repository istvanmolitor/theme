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

        /**
         * Ha konkrétan megadtuk a csomagot akkor vagy a téma alatt van vagy az eredeti helyén.
         */
        if($viewPackage) {
            return [
                "{$themePackage}::themes.{$theme}.packages.{$viewPackage}.{$name}",
                "{$viewPackage}::{$name}",
            ];
        }

        /**
         * Ha nincs megadva csomag. Akkor a témán belül 
         */
        return [
            "{$themePackage}::themes.{$theme}.{$name}",
            //"{$themePackage}::{$name}",
            "theme::{$name}",
        ];
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
        $realView = $this->getRealView($view);
        if($realView) {
            return view($realView, $data, $mergeData);
        }
        else {
            return view('theme::partials.no-component-template', [
                'view' => $view,
                'opportunities' => $this->getOpportunities($view),
            ]);
        }
    }
}
