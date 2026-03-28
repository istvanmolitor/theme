<?php

namespace Molitor\Theme\Themes;

use Molitor\Theme\Services\Theme;

class DarkMinimalTheme extends Theme
{
    public function getName(): string
    {
        return 'Dark Minimal';
    }

    public function getSlug(): string
    {
        return 'dark-minimal';
    }

    public function getDescription(): string
    {
        return 'Sötét, minimalista dizájn. Elegáns megjelenés technika- és portfólió oldalakhoz.';
    }

    public function getPreview(): string
    {
        return 'https://placehold.co/400x250/1e1e2e/cdd6f4?text=Dark+Minimal';
    }
}
