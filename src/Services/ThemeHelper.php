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

    public function getRealView(string $view): string
    {
        $themeSlug = $this->getActiveTheme()->getSlug();

        if( str_contains($view, '::') ) {
            $parts = explode('::', $view);
            $namespace = $parts[0];
            $name = $parts[1];
        }
        else {
            $namespace = '';
            $name = $view;
        }

        $views = [
            'themes.' . $themeSlug . '.' . $name,
            'themes.' . $themeSlug . '.' . $namespace . '.' . $name,
            $namespace . '::themes.' . $themeSlug . '.' . $name,
            $namespace . '::'. $name,
            'theme::themes.' . $themeSlug . '.' . $name,
            'theme::' . $name,
            $name,
        ];

        foreach( $views as $view ) {
            if( $this->viewExists($view) ) {
                return $view;
            }
        }

        throw new \Exception("View: {$namespace}::{$view}. Theme: {$themeSlug}.");
    }

    protected function viewExists(string $view): bool
    {
        return view()->exists($view);
    }

    public function view(string $view, array $data = []): View
    {
        return ViewFacade::make($this->getRealView($view), $data);
    }
}
