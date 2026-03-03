<?php

namespace Molitor\Theme\Themes;

use Molitor\Theme\Services\Theme;

class WarmSunsetTheme extends Theme
{
    public function getName(): string
    {
        return 'Warm Sunset';
    }

    public function getSlug(): string
    {
        return 'warm';
    }

    public function getDescription(): string
    {
        return 'Meleg, narancs és bordó árnyalatokból álló téma. Kreatív és lifestyle tartalmakhoz ajánlott.';
    }

    public function getPreview(): string
    {
        return 'https://placehold.co/400x250/ea580c/fff7ed?text=Warm+Sunset';
    }
}

