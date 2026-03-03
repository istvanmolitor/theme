<?php

namespace Molitor\Theme\Themes;

use Molitor\Theme\Services\Theme;

class DefaultTheme extends Theme
{
    public function getName(): string
    {
        return 'Default';
    }

    public function getSlug(): string
    {
        return 'default';
    }

    public function getDescription(): string
    {
        return 'Az alapértelmezett, tiszta és modern megjelenés. Ideális általános célú weboldalakhoz.';
    }

    public function getPreview(): string
    {
        return 'https://placehold.co/400x250/6366f1/ffffff?text=Default';
    }
}

