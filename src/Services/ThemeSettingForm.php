<?php

namespace Molitor\Theme\Services;

use Molitor\Setting\Enums\SettingFieldType;
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
            'theme' => [
                'label' => 'Téma',
                'type' => SettingFieldType::Select,
                'options' => app(ThemeRegistry::class)->getOptions(),
                'default' => app(ThemeRegistry::class)->getDefault(),
            ],
            'logo' => [
                'label' => 'Logó',
                'type' => SettingFieldType::Image,
            ],
        ];
    }

    public function getData(): array
    {
        return app(ThemeRegistry::class)->toArray();
    }
}
