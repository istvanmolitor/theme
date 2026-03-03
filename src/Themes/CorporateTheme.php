<?php

namespace Molitor\Theme\Themes;

use Molitor\Theme\Services\Theme;

class CorporateTheme extends Theme
{
    public function getName(): string
    {
        return 'Corporate';
    }

    public function getSlug(): string
    {
        return 'corporate';
    }

    public function getDescription(): string
    {
        return 'Professzionális üzleti megjelenés. Vállalati és B2B weboldalak ideális választása.';
    }

    public function getPreview(): string
    {
        return 'https://placehold.co/400x250/0369a1/ffffff?text=Corporate';
    }
}

