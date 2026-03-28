<?php

namespace Molitor\Theme\Themes;

use Molitor\Theme\Services\Theme;

class PastelDreamTheme extends Theme
{
    public function getName(): string
    {
        return 'Pastel Dream';
    }

    public function getSlug(): string
    {
        return 'pastel';
    }

    public function getDescription(): string
    {
        return 'Lágy pasztell színek, letisztult elrendezés. Ideális blog és életmód oldalakhoz.';
    }

    public function getPreview(): string
    {
        return 'https://placehold.co/400x250/f9a8d4/4a044e?text=Pastel+Dream';
    }
}
