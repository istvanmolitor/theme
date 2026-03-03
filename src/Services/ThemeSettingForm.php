<?php

namespace Molitor\Theme\Services;

use Molitor\Setting\Services\SettingForm;

class ThemeSettingForm extends SettingForm
{
    public function getSlug(): string
    {
        return 'theme';
    }

    public function getLabel(): string
    {
        return 'Téma';
    }

    public function getFields(): array
    {
        return [
            'theme',
        ];
    }

    public function getDefaultValues(): array
    {
        return [
            'theme' => null,
        ];
    }

    public function getData(): array
    {
        return app(ThemeRegistry::class)->toArray();
    }

}
