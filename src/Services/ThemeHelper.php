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

    public function getRealView(string $view): string
    {
        $activeTheme = $this->getActiveTheme();
        
        $viewPackage = $this->getViewPackage($view);
        $themePackage = $activeTheme->getPackage();
        $theme = $activeTheme->getSlug();
        $name = $this->getView($view);

        if($viewPackage) {
            $view = "{$themePackage}::themes.{$theme}.packages.{$viewPackage}.{$name}";
            if($this->viewExists($view)) {
                return $view;
            }
            
            $view = "{$viewPackage}::{$name}";
            if($this->viewExists($view)) {
                return $view;
            }
        }


        $view = "{$themePackage}::themes.{$theme}.{$name}";
        if($this->viewExists($view)) {
            return $view;
        }

        $view = "{$themePackage}::{$name}";
        if($this->viewExists($view)) {
            return $view;
        }

        return "theme::{$name}";
    }

    public function viewExists(string $view): bool
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
        return $this->view($view, $data)->render();
    }
}
