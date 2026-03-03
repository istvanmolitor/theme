<?php

namespace Molitor\Theme\Themes;

use Molitor\Theme\Services\Theme;

class NatureTheme extends Theme
{
    public function getName(): string
    {
        return 'Nature';
    }

    public function getSlug(): string
    {
        return 'nature';
    }

    public function getDescription(): string
    {
        return 'Természetes, zöld tónusokkal teli témakép. Tökéletes környezeti és egészségügyi tartalmakhoz.';
    }

    public function getPreview(): string
    {
        return 'https://placehold.co/400x250/16a34a/ffffff?text=Nature';
    }
}

